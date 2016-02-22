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

use SoapClient;
use SoapFault;

/**
 * SOAP client to prepare and log SOAP requests and responses for ads APIs.
 * @see http://php.net/manual/en/class.soapclient.php
 */
class AdsSoapClient extends SoapClient {

  private $wsdlUri;
  private $streamContext;
  private $logMessageHandler;
  private $adsSession;
  private $headerHandler;
  private $serviceDescriptor;
  private $soapCallTimeout;

  /**
   * The constructor to create a new instance of this SOAP client. Do not use
   * this constructor, instances should be created using a
   * `AdsSoapClientFactory` instead.
   *
   * @see AdsSoapClientFactory
   * @param string $wsdl URI of the WSDL file or null if working in non-WSDL
   *     mode
   * @param array $options|null the SOAP client options
   */
  public function __construct($wsdl, array $options = null) {
    $this->wsdlUri = $wsdl;
    parent::__construct($wsdl, $options);
  }

  /**
   * @see SoapClient::__soapCall
   */
  public function __soapCall($function_name, $arguments, $options = null,
      $input_headers = null, &$output_headers = null) {
    try {
      // Generate the HTTP headers for this API request.
      $httpHeaders = $this->generateHttpHeaders();
      // The context this SOAP client was originally created with. This is the
      // only way to modify the HTTP headers per SOAP call.
      $existingStreamContextOptions =
          stream_context_get_options($this->streamContext);
      // Flatten headers into a string with each header separated by \r\n.
      // This is the most reliable way to set multiple HTTP headers in PHP.
      // See: http://php.net/manual/en/context.http.php
      $existingStreamContextOptions['http']['header'] = implode("\r\n",
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
          $this->streamContext, $existingStreamContextOptions);

      // Generate the SOAP headers for this API request.
      $input_headers[] = $this->headerHandler->generateSoapHeaders(
          $this->adsSession, $this->serviceDescriptor);

      ini_set('default_socket_timeout', $this->soapCallTimeout);
      $response = parent::__soapCall($function_name, $arguments, $options,
          $input_headers, $output_headers);
      ini_restore('default_socket_timeout');

      $this->logSoapCall($function_name);
      return $response;
    } catch (SoapFault $soapFault) {
      $this->logSoapCall($function_name, $soapFault);
      throw $soapFault;
    }
  }

  private function generateHttpHeaders() {
    $httpHeaders = array();
    $oAuth2Credential = $this->adsSession->getOAuth2Credential();
    $oAuth2Credential->getOrRefreshAccessToken();
    $httpHeaders['Authorization'] =
        $oAuth2Credential->formatCredentialsForHeader();

    $httpHeaders = array_merge($httpHeaders,
        $this->headerHandler->generateHttpHeaders($this->adsSession));

    return $httpHeaders;
  }

  private function logSoapCall($methodName, SoapFault $soapFault = null) {
    $infoMessage = $this->logMessageHandler->generateRequestInfoMessage(
        $this->serviceDescriptor->getServiceName(),
        $methodName,
        $this->__getLastRequestHeaders(),
        $this->__getLastResponse(),
        $soapFault
    );
    $this->adsSession->getLogger()->info($infoMessage);

    $soapXmlMessage = $this->logMessageHandler->generateSoapXmlLogMessage(
        $this->__getLastRequestHeaders(),
        $this->__getLastRequest(),
        $this->__getLastResponseHeaders(),
        $this->__getLastResponse(),
        $this->headerHandler
    );
    if ($soapFault !== null) {
      $this->adsSession->getLogger()->error($soapXmlMessage);
    } else {
      $this->adsSession->getLogger()->debug($soapXmlMessage);
    }
  }

  /**
   * Gets the URI of the WSDL file this SOAP client is making API calls against.
   *
   * @return string
   */
  public function getWsdlUri() {
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
  public function setStreamContext($streamContext) {
    $this->streamContext = $streamContext;
  }

  /**
   * Gets the handler defining how log messages are generated.
   *
   * @return SoapClientLogMessageHandler
   */
  public function getLogMessageHandler() {
    return $this->logMessageHandler;
  }

  /**
   * Sets the handler defining how log messages are generated.
   *
   * @param SoapClientLogMessageHandler $logMessageHandler
   */
  public function setLogMessageHandler(
      SoapClientLogMessageHandler $logMessageHandler) {
    $this->logMessageHandler = $logMessageHandler;
  }

  /**
   * Gets the ads session for this client.
   *
   * @return AdsSession
   */
  public function getAdsSession() {
    return $this->adsSession;
  }

  /**
   * Sets the ads session.
   *
   * @param AdsSession $session
   */
  public function setAdsSession(AdsSession $session) {
    $this->adsSession = $session;
  }

  /**
   * Gets the header handler for this client.
   *
   * @return AdsHeaderHandler
   */
  public function getHeaderHandler() {
    return $this->headerHandler;
  }

  /**
   * Sets the header handler.
   *
   * @param AdsHeaderHandler $headerHandler
   */
  public function setHeaderHandler(AdsHeaderHandler $headerHandler) {
    $this->headerHandler = $headerHandler;
  }

  /**
   * Gets the service descriptor for this client.
   *
   * @return AdsServiceDescriptor
   */
  public function getServiceDescriptor() {
    return $this->serviceDescriptor;
  }

  /**
   * Sets the service descriptor.
   *
   * @param AdsServiceDescriptor $serviceDescriptor
   */
  public function setServiceDescriptor(
      AdsServiceDescriptor $serviceDescriptor) {
    $this->serviceDescriptor = $serviceDescriptor;
  }

  /**
   * Gets the the time in seconds this client will wait for a SOAP call to
   * connect to the service and respond before timing out.
   *
   * @return int
   */
  public function getSoapCallTimeout() {
    return $this->soapCallTimeout;
  }

  /**
   * Sets the SOAP call timeout.
   *
   * @param int $soapCallTimeout
   */
  public function setSoapCallTimeout($soapCallTimeout) {
    $this->soapCallTimeout = $soapCallTimeout;
  }
}

