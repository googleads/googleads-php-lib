<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\AdsApi\Common;

use Google\AdsApi\Common\Util\Reflection;
use Google\AdsApi\Common\Util\SoapHeaders;
use Google\AdsApi\Common\Util\SoapRequests;
use ReflectionException;
use SoapClient;
use SoapFault;

/**
 * Prepares and logs SOAP requests and responses for ads APIs.
 *
 * @see http://php.net/manual/en/class.soapclient.php
 */
class AdsSoapClient extends SoapClient
{

    // SOAP fault names to types are bound via a wsdl:message element in the
    // WSDLs and don't have their XSI type included in the SOAP fault responses.
    // So we need to manually map the fault types we know about.
    private static $SOAP_FAULT_NAME_TO_TYPE_MAP = [
        'ApiExceptionFault' => 'ApiException'
    ];

    private static $RESOURCES_WSDLS_PATH_FORMAT = '%1$s%2$s..%2$s..%2$s..%2$s..%2$sresources%2$swsdls';
    private static $WSDL_FILE_EXTENSION = '.wsdl';

    private $wsdlUri;
    private $classmap;
    private $streamContext;
    private $soapLogMessageFormatter;
    private $adsSession;
    private $headerHandler;
    private $serviceDescriptor;
    private $soapCallTimeout;
    private $reflection;
    private $lastSoapFault;
    private $lastResponseHeaderValues;

    /**
     * Creates a new instance of this SOAP client to interface with the specified
     * WSDL (service). Do not use this constructor, instances should be created
     * using `AdsSoapClientFactory` instead.
     *
     * @see AdsSoapClientFactory
     * @param string $wsdl URI of the WSDL file or null if working in non-WSDL
     *     mode
     * @param array|null $options the SOAP client options
     */
    public function __construct($wsdl, array $options = null)
    {
        $this->wsdlUri = $wsdl;
        if (array_key_exists('classmap', $options)) {
            $this->classmap = $options['classmap'];
        }
        $this->reflection = new Reflection();

        $localWsdlPath = self::getLocalWsdlPath($wsdl);
        if (!file_exists($localWsdlPath)) {
            trigger_error("Local WSDLs bundled with this library were not found.\n",
                E_USER_NOTICE);
            parent::__construct($wsdl, $options);

            return;
        }
        parent::__construct($localWsdlPath, $options);
    }

    /**
     * @see SoapClient::__doRequest
     */
    public function __doRequest(
        $request,
        $location,
        $action,
        $version,
        $one_way = 0
    ) {
        $request = SoapRequests::replaceReferences($request);
        $response = parent::__doRequest($request, $location, $action, $version, $one_way);
        $this->__last_request = $request;

        return $response;
    }

    /**
     * @see SoapClient::__soapCall
     */
    public function __soapCall(
        $function_name,
        $arguments,
        $options = null,
        $input_headers = null,
        &$output_headers = null
    ) {
        // Generate the HTTP headers for this API request.
        $httpHeaders = $this->headerHandler->generateHttpHeaders($this->adsSession);
        // The context this SOAP client was originally created with. This is the
        // only way to modify the HTTP headers per SOAP call.
        $existingStreamContextOptions = stream_context_get_options($this->streamContext);
        // Flatten headers into a string with each header separated by \r\n. This is
        // the most reliable way to set multiple HTTP headers in PHP.
        // See: http://php.net/manual/en/context.http.php
        $existingStreamContextOptions['http']['header'] = implode(
            "\r\n",
            // Flatten the HTTP header map to a single dimension array with each
            // element becoming "[headerName]: [headerValue]".
            array_map(
                function ($headerName, $headerValue) {
                    return sprintf('%s: %s', $headerName, $headerValue);
                },
                array_keys($httpHeaders),
                $httpHeaders
            )
        );
        stream_context_set_option(
            $this->streamContext,
            $existingStreamContextOptions
        );

        // Generate the SOAP headers for this API request.
        $input_headers[] = $this->headerHandler->generateSoapHeaders(
            $this->adsSession,
            $this->serviceDescriptor
        );

        $response = null;
        try {
            ini_set('default_socket_timeout', $this->soapCallTimeout);
            $response = parent::__soapCall(
                $function_name,
                $arguments,
                $options,
                $input_headers,
                $output_headers
            );
            $this->processResponse($function_name);
        } catch (SoapFault $soapFault) {
            $this->processResponse($function_name, $soapFault);

            // If there's no detail, just throw the SOAP fault.
            if (!isset($soapFault->detail)) {
                throw $soapFault;
            }

            // Otherwise, attempt to parse out the API exception and throw that.
            $apiException = $this->parseApiExceptionFromSoapFault($soapFault);
            if ($apiException !== false) {
                throw $apiException;
            } else {
                // If we can't deserialize the SOAP fault to an API exception, just
                // throw the fault.
                throw $soapFault;
            }
        } finally {
            ini_restore('default_socket_timeout');
        }

        return $response;
    }

    private function parseApiExceptionFromSoapFault(SoapFault $soapFault)
    {
        // The AW and DFP APIs always return one element in the SOAP fault detail
        // that represents an exception.
        $soapFaultDetailName = key(get_object_vars($soapFault->detail));
        $soapFaultDetail = current(get_object_vars($soapFault->detail));

        if (!array_key_exists(
            $soapFaultDetailName,
            self::$SOAP_FAULT_NAME_TO_TYPE_MAP
        )) {
            return false;
        }
        $exceptionClassShortName = self::$SOAP_FAULT_NAME_TO_TYPE_MAP[$soapFaultDetailName];

        if (!array_key_exists($exceptionClassShortName, $this->classmap)) {
            return false;
        }
        $exceptionClassName = $this->classmap[$exceptionClassShortName];

        try {
            $apiException = $this->reflection->createInstance(
                $exceptionClassName,
                $soapFaultDetail->message
            );
        } catch (ReflectionException $reflectionException) {
            return false;
        }

        $apiException->setMessage1($soapFaultDetail->message);

        // Complex types in a SOAPFault are deserialized as SoapVars and don't
        // respect SOAP_SINGLE_ELEMENT_ARRAYS, so we need to check if there was
        // one or multiple errors.
        $apiErrors = $soapFaultDetail->errors;
        // If a single error, wrap in an array.
        if (!is_array($apiErrors)) {
            $apiErrors = [$apiErrors];
        }
        // Map SoapVars to their underlying object, which has been deserialized
        // properly since they contain an XSI type in the SOAP response.
        $apiException->setErrors(
            array_map(
                function ($soapVar) {
                    return $soapVar->enc_value;
                },
                $apiErrors
            )
        );

        return $apiException;
    }

    private function processResponse($methodName, $soapFault = null)
    {
        $this->lastResponseHeaderValues =
            SoapHeaders::getSoapResponseHeaderValues($this->__getLastResponse());
        $this->lastSoapFault = $soapFault;

        $this->logSoapCall($methodName, $soapFault);
    }

    private function logSoapCall($methodName, SoapFault $soapFault = null)
    {
        $summary = $this->soapLogMessageFormatter->formatSummary(
            $this->serviceDescriptor->getServiceName(),
            $methodName,
            $this->__getLastRequestHeaders(),
            $this->__getLastRequest(),
            $this->__getLastResponse(),
            $soapFault
        );
        $detailed = $this->soapLogMessageFormatter->formatDetailed(
            $this->__getLastRequestHeaders(),
            $this->__getLastRequest(),
            $this->__getLastResponseHeaders(),
            $this->__getLastResponse()
        );
        if ($soapFault !== null) {
            $this->adsSession->getSoapLogger()
                ->warning($summary);
            $this->adsSession->getSoapLogger()
                ->notice($detailed);
        } else {
            $this->adsSession->getSoapLogger()
                ->info($summary);
            $this->adsSession->getSoapLogger()
                ->debug($detailed);
        }
    }

    /**
     * Gets the URI of the WSDL file this SOAP client is making API calls against.
     *
     * @return string
     */
    public function getWsdlUri()
    {
        return $this->wsdlUri;
    }

    /**
     * Sets the stream context the SOAP client will use to make HTTP requests
     * with. This stream context must also be set in the options when this class
     * is constructed.
     *
     * @see
     *     http://php.net/manual/en/soapclient.soapclient.php#refsect1-soapclient.soapclient-parameters
     * @param resource $streamContext
     */
    public function setStreamContext($streamContext)
    {
        $this->streamContext = $streamContext;
    }

    /**
     * Gets the SOAP log message formatter.
     *
     * @return SoapLogMessageFormatter
     */
    public function getSoapLogMessageFormatter()
    {
        return $this->soapLogMessageFormatter;
    }

    /**
     * Sets the SOAP log message formatter.
     *
     * @param SoapLogMessageFormatter $soapLogMessageFormatter
     */
    public function setSoapLogMessageFormatter(
        SoapLogMessageFormatter $soapLogMessageFormatter
    ) {
        $this->soapLogMessageFormatter = $soapLogMessageFormatter;
    }

    /**
     * Gets the ads session for this client.
     *
     * @return AdsSession
     */
    public function getAdsSession()
    {
        return $this->adsSession;
    }

    /**
     * Sets the ads session.
     *
     * @param AdsSession $session
     */
    public function setAdsSession(AdsSession $session)
    {
        $this->adsSession = $session;
    }

    /**
     * Gets the header handler for this client.
     *
     * @return AdsHeaderHandler
     */
    public function getHeaderHandler()
    {
        return $this->headerHandler;
    }

    /**
     * Sets the header handler.
     *
     * @param AdsHeaderHandler $headerHandler
     */
    public function setHeaderHandler(AdsHeaderHandler $headerHandler)
    {
        $this->headerHandler = $headerHandler;
    }

    /**
     * Gets the service descriptor for this client.
     *
     * @return AdsServiceDescriptor
     */
    public function getServiceDescriptor()
    {
        return $this->serviceDescriptor;
    }

    /**
     * Sets the service descriptor.
     *
     * @param AdsServiceDescriptor $serviceDescriptor
     */
    public function setServiceDescriptor(
        AdsServiceDescriptor $serviceDescriptor
    ) {
        $this->serviceDescriptor = $serviceDescriptor;
    }

    /**
     * Gets the the time in seconds this client will wait for a SOAP call to
     * connect to the service and respond before timing out.
     *
     * @return int
     */
    public function getSoapCallTimeout()
    {
        return $this->soapCallTimeout;
    }

    /**
     * Sets the SOAP call timeout.
     *
     * @param int $soapCallTimeout
     */
    public function setSoapCallTimeout($soapCallTimeout)
    {
        $this->soapCallTimeout = $soapCallTimeout;
    }

    /**
     * Returns true if there was a SOAP fault during the last call.
     *
     * @return boolean true if there was a SOAP fault
     */
    public function isLastSoapFault()
    {
        return !is_null($this->lastSoapFault);
    }

    /**
     * Gets the SOAP fault message if there was any.
     *
     * @return string the SOAP fault message
     */
    public function getLastSoapFaultMessage()
    {
        return ($this->isLastSoapFault()) ? $this->lastSoapFault->getMessage() : null;
    }

    /**
     * Gets the last SOAP response header values as an associative array.
     *
     * @return array the SOAP response header values
     */
    public function getLastResponseHeaderValues()
    {
        return $this->lastResponseHeaderValues;
    }

    /**
     * Gets the path to stored WSDLs from the provided live WSDL URI.
     */
    private function getLocalWsdlPath($wsdl)
    {
        $resourcesWsdlsPath = sprintf(
            self::$RESOURCES_WSDLS_PATH_FORMAT,
            __DIR__,
            DIRECTORY_SEPARATOR
        );
        // parse_url() returns the path part of any URLs, which may be composed of
        // many sub-paths delimited by forward slashes. We replace them with
        // DIRECTORY_SEPARATOR (which works with any OSs) here to get paths to local
        // WSDLs.
        $wsdlFilePath = str_replace(
            '/',
            DIRECTORY_SEPARATOR,
            parse_url($wsdl, PHP_URL_PATH)
        );

        return $resourcesWsdlsPath . $wsdlFilePath . self::$WSDL_FILE_EXTENSION;
    }
}
