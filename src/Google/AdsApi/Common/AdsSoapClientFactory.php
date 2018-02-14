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
use RuntimeException;

/**
 * Creates SOAP clients that interface with ads APIs. These SOAP clients extend
 * `AdsSoapClient`. For example, the DFP `LineItemService` or the AdWords
 * `CampaignService`.
 *
 * @see AdsSoapClient
 */
final class AdsSoapClientFactory
{

    const DEFAULT_SOAP_CALL_TIMEOUT = 600; // 60 seconds * 10 -> 10 minutes

    private $reflection;
    private $soapLogMessageFormatter;
    private $soapCallTimeout;

    /**
     * Creates a new instance of this factory with the specified SOAP log
     * formatter.
     *
     * @param SoapLogMessageFormatter $soapLogMessageFormatter
     * @param Reflection|null $reflection
     * @param int|null $soapCallTimeout the time in seconds to wait for a SOAP
     *     call to connect to the service and respond before timing out
     */
    public function __construct(
        SoapLogMessageFormatter $soapLogMessageFormatter,
        Reflection $reflection = null,
        $soapCallTimeout = null
    ) {
        $this->soapLogMessageFormatter = $soapLogMessageFormatter;
        $this->reflection = ($reflection === null) ? new Reflection() : $reflection;
        $this->soapCallTimeout =
            ($soapCallTimeout === null) ? self::DEFAULT_SOAP_CALL_TIMEOUT : $soapCallTimeout;
    }

    /**
     * Generates a SOAP client that interfaces with the specified service using
     * configuration data from the specified ads session.
     *
     * @param AdsSession $session the session to read configuration information
     *     from
     * @param AdsHeaderHandler $headerHandler the header handler that will
     *     generate HTTP and SOAP headers
     * @param AdsServiceDescriptor $serviceDescriptor descriptor for the service
     *     the SOAP client is being generated to interface with
     * @return \SoapClient a SOAP client
     * @throws \UnexpectedValueException if the SOAP client could not be generated
     */
    public function generateSoapClient(
        AdsSession $session,
        AdsHeaderHandler $headerHandler,
        AdsServiceDescriptor $serviceDescriptor
    ) {
        $options = [
            'trace' => true,
            'encoding' => 'utf-8',
            'connection_timeout' => $this->soapCallTimeout,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS
        ];

        $soapSettings = $session->getSoapSettings();
        $options = $this->populateOptions($session, $options, $soapSettings);

        $soapClient = $this->reflection->createInstance(
            $serviceDescriptor->getServiceClass(),
            $options
        );
        $soapClient->setStreamContext($options['stream_context']);
        $soapClient->setSoapLogMessageFormatter($this->soapLogMessageFormatter);
        $soapClient->setAdsSession($session);
        $soapClient->setHeaderHandler($headerHandler);
        $soapClient->setServiceDescriptor($serviceDescriptor);
        $soapClient->setSoapCallTimeout($this->soapCallTimeout);
        $soapClient->__setLocation(
            str_replace(
                sprintf(
                    '%s://%s',
                    parse_url($soapClient->getWsdlUri(), PHP_URL_SCHEME),
                    parse_url($soapClient->getWsdlUri(), PHP_URL_HOST)
                ),
                rtrim($session->getEndpoint(), '/'),
                $soapClient->getWsdlUri()
            )
        );

        return $soapClient;
    }

    private function populateOptions(
        AdsSession $session,
        array $options,
        SoapSettings $soapSettings = null
    ) {
        $contextOptions = [];
        if ($soapSettings !== null) {
            // Compression settings.
            if ($soapSettings->getCompressionLevel() !== null) {
                $options['compression'] = SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP
                    | $soapSettings->getCompressionLevel();
                // The User-Agent HTTP header must contain the string 'gzip'.
                $options['user_agent'] = 'PHP-SOAP/' . PHP_VERSION . ', gzip';
            }

            // WSDL caching settings.
            if ($soapSettings->getWsdlCacheType() !== null) {
                trigger_error(
                    "WSDL caching is already deprecated in favor of WSDLs "
                    . "bundled with this library.\n",
                    E_USER_WARNING
                );
            }

            // Proxy settings.
            list(
                $proxyLogin, $proxyPassword, $proxyHost, $proxyPort
                ) = $session->getConnectionSettings()
                ->getProxyParts();
            if (!empty($proxyHost)) {
                $options['proxy_host'] = $proxyHost;
            }
            if (!empty($proxyPort)) {
                $options['proxy_port'] = $proxyPort;
            }
            if (!empty($proxyLogin)) {
                $options['proxy_login'] = $proxyLogin;
            }
            if (!empty($proxyPassword)) {
                $options['proxy_password'] = $proxyPassword;
            }

            // SSL settings.
            if ($soapSettings->getSslVerify() === true) {
                // If there's a manually specified CA file, always use it.
                if ($soapSettings->getSslCaFile() !== null) {
                    $contextOptions['ssl']['cafile'] = $soapSettings->getSslCaFile();
                }

                // PHP >= 5.6 automatically sets the system cert and sets verify_peer to
                // true by default. PHP < 5.6 does not, so we need to set verify_peer to
                // true and use Guzzle to try to find the system cert (if it hasn't been
                // manually specified above).
                // http://php.net/manual/en/migration56.openssl.php
                // http://php.net/manual/en/context.ssl.php
                if (PHP_VERSION_ID < 50600) {
                    if (!isset($contextOptions['ssl']['cafile'])) {
                        try {
                            $contextOptions['ssl']['cafile'] = \GuzzleHttp\default_ca_bundle();
                        } catch (RuntimeException $e) {
                            throw new RuntimeException(
                                'No system CA bundle could be found '
                                . 'in any of the the common system locations. PHP versions '
                                . 'earlier than 5.6 are not properly configured to use the '
                                . 'system\'s CA bundle by default. In order to verify peer '
                                . 'certificates, you will need to supply the path on disk to '
                                . 'a certificate bundle in the SoapSettings of an '
                                . 'AdsSession. See SoapSettingsBuilder::withSslCaFile().'
                            );
                        }
                    }
                    $contextOptions['ssl']['verify_peer'] = true;
                }
            } else {
                $session->getSoapLogger()
                    ->warning(
                        'Disabling SSL verification is not recommended.'
                    );
                $contextOptions['ssl']['verify_peer'] = false;
            }
        }

        $options['stream_context'] = stream_context_create($contextOptions);
        // SoapClient sets keep alive header by default but does not re-use the
        // connections. Disabling this to avoid running out of file descriptor
        // handles.
        $options['keep_alive'] = false;

        return $options;
    }
}
