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

use SoapFault;

/**
 * Handles how log messages are generated from SOAP requests and responses.
 */
interface SoapClientLogMessageHandler {

  /**
   * Generates a summary info message for an API request from the specified
   * information.
   *
   * @param string $serviceName the name of the service the request was made to
   * @param string $methodName the name of the method that was called
   * @param string $requestHeaders the HTTP headers from the request
   * @param string $response the SOAP response for the request
   * @param SoapFault $soapFault a SOAP fault if the request failed
   * @return string the info message
   */
  public function generateRequestInfoMessage($serviceName, $methodName,
      $requestHeaders, $response, SoapFault $soapFault = null);

  /**
   * Generates a debug message containing SOAP XML request and response logs,
   * along with their HTTP headers, for an API request from the specified
   * information.
   *
   * @param string $requestHeaders the HTTP headers from the request
   * @param string $request the SOAP request
   * @param string $responseHeaders the HTTP headers from the response
   * @param string $response the SOAP response for the request
   * @param AdsHeaderHandler $adsHeaderHandler a header handler to help scrub
   *     sensitive information that should not be logged
   */
  public function generateSoapXmlLogMessage($requestHeaders, $request,
      $responseHeaders, $response, AdsHeaderHandler $adsHeaderHandler);
}

