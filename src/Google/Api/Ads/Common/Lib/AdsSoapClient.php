<?php
/**
 * An extension of the {@link SoapClient} class intended to prepare
 * the XML before making a request as well as perform any book-keeping on
 * the response.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsCommon
 * @subpackage Lib
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/Common/Lib/AdsUser.php';
require_once 'Google/Api/Ads/Common/Util/Logger.php';
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';
require_once 'Google/Api/Ads/Common/Util/SoapRequestXmlFixer.php';
require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';
require_once 'Google/Api/Ads/Common/Util/DeprecationUtils.php';

/**
 * An extension of the {@link SoapClient} class intended to prepare
 * the XML before making a request as well as perform any book-keeping on
 * the response.
 * @package GoogleApiAdsCommon
 * @subpackage Lib
 */
abstract class AdsSoapClient extends SoapClient {
  /**
   * The SoapClient options used to construct this class.
   * @var array
   */
  protected $options;

  /**
   * The {@link AdsUser} which generated this client.
   * @var AdsUser the user that generated this client
   */
  protected $user;

  /**
   * The header values.
   * @var array the header values
   */
  protected $headers;

  /**
   * The name of the service this client is accessing.
   * @var string the name of the service this client is accessing
   */
  protected $serviceName;

  /**
   * The namespace of the service this client is accessing.
   * @var string the namespace of the service this client is accessing
   */
  protected $serviceNamespace;

  /**
   * The last SOAP XML request made to the server after PrepareRequest() and
   * RemoveSensitiveInfo() have been called on it.
   * @var string the last SOAP XML request made to the server
   * @see PrepareRequest()
   * @see RemoveSensitiveInfo()
   */
  protected $lastRequest;

  /**
   * The last SOAP XML DOMDocument request made to the server after
   * PrepareRequest() and RemoveSensitiveInfo() have been called on it.
   * @var DOMDocument the last SOAP XML request made to the server. Can be
   *     <var>null</var> if the last request was not proper XML
   * @see PrepareRequest()
   * @see RemoveSensitiveInfo()
   */
  private $lastRequestDom;

  /**
   * The last SOAP XML response from the server.
   * @var string the last SOAP XML response from the server
   */
  protected $lastResponse;

  /**
   * The last SOAP XML DOMDocument response from the server.
   * @var DOMDocument the last SOAP XML response from the server. Can be
   *     <var>null</var> if the last request was not proper XML
   */
  private $lastResponseDom;

  /**
   * The last SOAP fault generated from the server. <var>null</var> if none.
   * @var SOAPFault the last SOAP fault generated from the server
   */
  protected $lastSoapFault;

  /**
   * The name of the last method called from this client.
   * @var string the name of the last method called from this client
   */
  protected $lastMethodName;

  /**
   * The last arguments passed to the called SOAP method
   * @var array the last arguments passed to the called SOAP method
   */
  protected $lastArguments;

  /**
   * The last headers used in the request.
   * @var array the last headers used in the request
   */
  protected $lastHeaders;

  /**
   * The transport layer override.
   * @var null|SoapClient
   */
  protected $transportLayer;

  /**
   * The constructor intended to be called by all sub-classes.
   * @param string $wsdl URI of the WSDL file or null if working in non-WSDL
   *     mode
   * @param array $options the SOAP client options
   * @param AdsUser $user the user which is responsible for this client
   * @param string $serviceName the name of the service which is making this
   *     call
   * @param string $serviceNamespace the namespace of the service
   */
  protected function __construct($wsdl, array $options, AdsUser $user,
      $serviceName, $serviceNamespace) {
    $this->user = $user;
    $this->serviceName = $serviceName;
    $this->serviceNamespace = $serviceNamespace;
    $options['typemap'] = $this->GetTypemaps();
    $this->options = $options;
    parent::__construct($wsdl, $options);
  }

  /**
   * Overrides the method SoapClient.__doRequest() to
   * perform a clean up of the request XML before marshalling.
   * @param string $request the request XML
   * @param string $location the URL to request
   * @param string $action the SOAP action
   * @param string $version the SOAP version
   * @return string the XML SOAP response
   */
  function __doRequest($request, $location, $action, $version, $one_way = 0) {
    $this->lastRequest = $this->PrepareRequest($request, $this->lastArguments,
        $this->lastHeaders);

    if (!empty($this->transportLayer)) {
        $response = $this->transportLayer->__doRequest($this->lastRequest,
            $location, $action, $version);

        return $response;
    }

    return parent::__doRequest($this->lastRequest,
        $location, $action, $version);
  }

  /**
   * Overrides the method SoapClient.__soapCall() to process the
   * response from the SOAP call.
   * @param string $function_name the name of the function being called
   * @param array $arguments the arguments to that function
   * @param array $options the options for the SOAP call
   * @param array $input_headers the optional input headers
   * @param array $output_headers the options output headers
   * @return mixed the return from the parent __soapCall
   * @throws SOAPFault if there was an exception making the request
   */
  function __soapCall($function_name, $arguments, $options = null,
      $input_headers = null, &$output_headers = null) {
    try {
      $input_headers[] = $this->GenerateSoapHeader();
      $this->lastHeaders = $input_headers;
      $this->lastArguments = $arguments;

      $httpHeaders = $this->GenerateHttpHeaders();
      if (!empty($httpHeaders)) {
        // The context this soap client was originally created with. This is the
        // only way to modify the HTTP headers per soap call.
        $existingStreamContext = $this->options['stream_context'];
        $existingStreamContextOptions =
            stream_context_get_options($existingStreamContext);
        // Override the existing HTTP headers each time since they may have
        // changed.
        $existingStreamContextOptions['http']['header'] = implode("\r\n",
            array_map('AdsSoapClient::implodeHttpHeaders',
                array_keys($httpHeaders), $httpHeaders));
        stream_context_set_option($existingStreamContext,
          $existingStreamContextOptions);
      }

      $response = parent::__soapCall($function_name, $arguments, $options,
          $input_headers, $output_headers);
      $this->ProcessResponse($this->lastRequest,
          $this->__getLastResponse(), $function_name);
      return $response;
    } catch (SoapFault $e) {
      $this->ProcessResponse($this->lastRequest,
          $this->__getLastResponse(), $function_name, $e);
      throw $e;
    }
  }

  private static function implodeHttpHeaders($headerName, $headerValue) {
    return sprintf("%s: %s", $headerName, $headerValue);
  }

  /**
   * Processes the response from the __doRequest call.
   * @param string $request the request to the server
   * @param string $response the response from the server
   * @param string $method the method called
   * @param SoapFault $e the SOAP fault thrown if any
   */
  private function ProcessResponse($request, $response, $method,
      SoapFault $e = null) {
    $this->lastSoapFault = $e;
    $this->lastRequestDom = null;
    $this->lastResponseDom = null;
    $this->lastRequest = $this->RemoveSensitiveInfo($request);
    $this->lastResponse = $response;
    $this->lastMethodName = $method;

    try {
      $this->GetLastResponseDom();
    } catch (DOMException $domException) {
      trigger_error('Failed to load response into DOM: '
          . $domException->getMessage(), E_USER_NOTICE);
    }

    try {
      $this->GetLastRequestDom();
    } catch (DOMException $domException) {
      trigger_error('Failed to load request into DOM: '
          . $domException->getMessage(), E_USER_NOTICE);
    }

    $level = isset($e) ? Logger::$ERROR : Logger::$INFO;
    $this->LogSoapXml($level);
    $this->LogRequestInfo($level);
  }

  /**
   * Logs the SOAP XML to the Logger::$SOAP_XML_LOG log after the request has
   * transformed by PrepareRequest() and both the request and response have
   * been sanitized by RemoveSensitiveInfo().
   * @param string $level the log level to use
   * @see PrepareRequest()
   * @see RemoveSensitiveInfo()
   */
  private function LogSoapXml($level) {
    $message = sprintf("%s\n\n%s\n\n%s\n\n%s\n",
        trim($this->__getLastRequestHeaders()),
        XmlUtils::PrettyPrint($this->lastRequest),
        trim($this->__getLastResponseHeaders()),
        XmlUtils::PrettyPrint($this->lastResponse));
    Logger::log(Logger::$SOAP_XML_LOG, $message, $level);
  }

  /**
   * Logs the request info to the Logger::$REQUEST_INFO_LOG log the request has
   * transformed by PrepareRequest() and both the request has been sanitized by
   * RemoveSensitiveInfo().
   * @param string $level the log level to use
   * @see PrepareRequest()
   * @see RemoveSensitiveInfo()
   */
  private function LogRequestInfo($level) {
    $message = $this->GenerateRequestInfoMessage($this->lastRequest,
        $this->lastResponse, $this->lastSoapFault);
    Logger::log(Logger::$REQUEST_INFO_LOG, $message, $level);
  }

  /**
   * Gets the user for this client.
   * @return AdsUser the user for this client.
   */
  public function GetAdsUser() {
    return $this->user;
  }

  /**
   * Gets the server that the request was made to.
   * @return string the server that the request was made to
   */
  public function GetServer() {
    preg_match('/^.*Host:\\s(.*)Connection:.*$/s',
       $this->__getLastRequestHeaders(), $hostMatches);
    if (sizeof($hostMatches) >= 2) {
      return trim($hostMatches[1]);
    } else {
      return null;
    }
  }

  /**
   * Gets the service name for this client.
   * @return string the service name for this client
   */
  public function GetServiceName() {
    return $this->serviceName;
  }

  /**
   * Gets the method name for the last method called.
   * @return string the name of last method called
   */
  public function GetLastMethodName() {
    return $this->lastMethodName;
  }

  /**
   * Gets the response time for the last call
   * @return double the response time of the last call
   */
  public function GetLastResponseTime() {
    try {
      $responseTimeElements =
          $this->GetLastResponseDom()->getElementsByTagName('responseTime');
      foreach ($responseTimeElements as $responseTimeElement) {
        return $responseTimeElement->nodeValue;
      }
    } catch (DOMException $e) {
      trigger_error('Failed to load response into DOM: '
          . $e->getMessage(), E_USER_NOTICE);
      return "null";
    }
  }

  /**
   * Gets the request ID for the last call
   * @return string the request ID of the last call
   */
  public function GetLastRequestId() {
    try {
      $requestIdElements =
          $this->GetLastResponseDom()->getElementsByTagName('requestId');
      foreach ($requestIdElements as $requestIdElement) {
        return $requestIdElement->nodeValue;
      }
    } catch (DOMException $e) {
      trigger_error('Failed to load response into DOM: '
          . $e->getMessage(), E_USER_NOTICE);
      return 'null';
    }
  }

  /**
   * Returns <var>true</var> if there was a SOAP fault during the last call.
   * @returns boolean <var>true</var> if there was a SOAP fault during the last
   *     call
   */
  public function IsFault() {
    return isset($this->lastSoapFault);
  }

  /**
   * Returns the SOAP fault message if there was any
   * @return string the fault message if there was any
   */
  public function GetLastFaultMessage() {
    return $this->IsFault()
        ? $this->lastSoapFault->getMessage() : 'null';
  }

  /**
   * Performs some fixes on the XML request before sending it out.
   *
   * @param string $request the request to be modified
   * @param array $arguments the arguments passed to the SOAP method
   * @param array $headers the headers used in the request
   * @return string the XML request ready to be sent to the server
   */
  protected function PrepareRequest($request, array $arguments,
      array $headers) {
    $addXsiTypes = $this->user->GetForceAddXsiTypes();
    $fixer = new SoapRequestXmlFixer($addXsiTypes, false, true);
    return $fixer->FixXml($request, $arguments, $headers);
  }

  /**
   * Gets the names of all registered request header elements.
   * @return array the names of the request header elements
   */
  public function GetHeaderNames() {
    return array_keys($this->headers);
  }

  /**
   * Gets the value for a registered request header element.
   * @param string $key the name of the request header element
   * @return string the value of the request header element or <var>null</var>
   *     if not found
   */
  public function GetHeaderValue($key) {
    if (array_key_exists($key, $this->headers)) {
      return $this->headers[$key];
    } else {
      return null;
    }
  }

  /**
   * Sets the value for a request header.
   * @param string $key the name of the request header element
   * @param string $value the value for the request header element
   */
  public function SetHeaderValue($key, $value) {
    $this->headers[$key] = $value;
  }

  /**
   * Generates the SOAP header for the client.
   * @return SoapHeader the instantiated SoapHeader ready to set
   */
  protected abstract function GenerateSoapHeader();

  /**
   * Generates the HTTP headers for the client. By default includes OAuth2
   * credentials if using OAuth2. Clients should override with product specific
   * HTTP headers.
   * @return array the HTTP headers as an array
   */
  protected function GenerateHttpHeaders() {
    $httpHeaders = array();
    $oAuth2Info = $this->user->GetOAuth2Info();
    $oAuth2Handler = $this->user->GetOAuth2Handler();
    if (!empty($oAuth2Info)) {
      $oAuth2Info = $oAuth2Handler->GetOrRefreshAccessToken($oAuth2Info);
      $this->user->SetOAuth2Info($oAuth2Info);
      if ($oAuth2Handler->IsAccessTokenValid($oAuth2Info)) {
        $httpHeaders['Authorization'] =
            $oAuth2Handler->FormatCredentialsForHeader($oAuth2Info);
      }
    }

    return $httpHeaders;
  }

  /**
   * Removes any sensitive information from the request XML. This method is
   * called after the request has been made and before logging any XML.
   * @param string $request the request just made to the server
   * @return string the request with any sensitive information removed ready to
   *     be logged.
   */
  protected abstract function RemoveSensitiveInfo($request);

  /**
   * Generates the request information using the request and response. This
   * method is called after the request has been made and RemoveSensitiveInfo()
   * has been called as well.
   * @return string the request information ready to be logged
   * @see RemoveSensitiveInfo
   */
  protected abstract function GenerateRequestInfoMessage();

  /**
   * Gets the DOMDocument representing the last response from this client.
   * @return DOMDocument the DOMDocument representing the last response
   * @throws DOMException if the DOMDocument could not be loaded
   */
  public function GetLastResponseDom() {
    if (!isset($this->lastResponseDom)) {
      $this->lastResponseDom = XmlUtils::GetDomFromXml($this->lastResponse);
    }

    return $this->lastResponseDom;
  }

  /**
   * Get the DOMDocument representing the last request from this client.
   * @return DOMDocument the DOMDocument representing the last request
   * @throws DOMException if the DOMDocument could not be loaded
   */
  public function GetLastRequestDom() {
    if (!isset($this->lastRequestDom)) {
      $this->lastRequestDom = XmlUtils::GetDomFromXml($this->lastRequest);
    }

    return $this->lastRequestDom;
  }

  /**
   * Returns the typemaps to be used when constructing the SOAP client.
   * @return array the typemap entries
   */
  protected function GetTypemaps() {
    $typemaps = array();
    // Convert longs more intelligently, due to overflow issue in 32 bit
    // environments.
    $typemaps[] = array(
        'type_ns' => 'http://www.w3.org/2001/XMLSchema',
        'type_name' => 'long',
        'from_xml' => 'AdsSoapClient::TypemapLongFromXml',
        'to_xml' => 'AdsSoapClient::TypemapLongToXml');
    return $typemaps;
  }

  /**
   * A typemap conversion function for parsing long values in SOAP responses.
   * @param string $xml the XML snippet containing the long value.
   * @return mixed the inner long value as an integer, float, or string
   */
  public static function TypemapLongFromXml($xml) {
    $document = XmlUtils::GetDomFromXml($xml);
    $tag = $document->documentElement->localName;
    $value = $document->documentElement->nodeValue;
    $isIdField = preg_match('/^id$|Id$|ID$/', $tag);
    if (!$isIdField) {
      if (strcmp(strval(intval($value)), $value) === 0) {
        return intval($value);
      } elseif (strcmp(sprintf('%.0f', floatval($value)), $value) === 0) {
        return floatval($value);
      }
    }
    return $value;
  }

  /**
   * A typemap conversion function for serializing long values in SOAP requests.
   * @param mixed $value the long value
   * @return string an XML snippet with the serialized value
   */
  public static function TypemapLongToXml($value) {
    if (is_float($value)) {
      $value = sprintf('%.0f', $value);
    }
    // Any outer XML tag can be used here, as it is later removed by SoapClient.
    return sprintf('<value>%s</value>', $value);
  }

  /**
   * Creates a new object of the given type, using the optional parameters.
   * When pseudo-namespace support is enabled class names can become very long,
   * and this function provides an alternative way to create objects that is
   * more readable.
   * @param string $type the type of object to create
   * @param array $params parameters to pass into the constructor, as either
   *     flat array in the correct order for the constructor or as an
   *     associative array from parameter name to value
   * @return mixed a new instance of a class that represents that type
   */
  public function Create($type, $params = null) {
    if (array_key_exists($type, $this->options['classmap'])) {
      $class = $this->options['classmap'][$type];
      $reflectionClass = new ReflectionClass($class);
      if (isset($params)) {
        if (MapUtils::IsMap($params)) {
          $params = MapUtils::MapToMethodParameters($params,
              $reflectionClass->getConstructor());
        }
        return $reflectionClass->newInstanceArgs($params);
      } else {
        return $reflectionClass->newInstance();
      }
    } else {
      trigger_error('Unknown type: ' . $type, E_USER_ERROR);
    }
  }

  /**
   * Set the non-default transport layer mechanism.
   *
   * WARNING: to be used for testing purposes only.
   *
   * @param SoapClient $client the soap client to use.
   * @return AdsSoapClient this prepared client.
   */
  public function __SetTransportLayer(SoapClient $client) {
    $this->transportLayer = $client;
  }
}
