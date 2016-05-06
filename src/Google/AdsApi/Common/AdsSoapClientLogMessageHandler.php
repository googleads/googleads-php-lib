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

use DOMException;
use Google\AdsApi\Common\Util\XmlUtils;
use SoapFault;

/**
 * Handles how log messages are generated from SOAP requests and responses for
 * ads APIs.
 */
class AdsSoapClientLogMessageHandler implements SoapClientLogMessageHandler {

  private $xmlUtils;

  /**
   * @param XmlUtils|null $xmlUtils
   */
  public function __construct(XmlUtils $xmlUtils = null) {
    $this->xmlUtils = $xmlUtils === null ? new XmlUtils() : $xmlUtils;
  }

  /**
   * @see SoapClientLogMessageHandler::generateRequestInfoMessage()
   */
  public function generateRequestInfoMessage($serviceName, $methodName,
      $requestHeaders, $response, SoapFault $soapFault = null) {
    return sprintf(
        'service=%s method=%s responseTime=%s requestId=%s server=%s '
            . 'isFault=%b faultMessage=%s',
        $serviceName,
        $methodName,
        $this->getResponseTime($response),
        $this->getRequestId($response),
        $this->getServer($requestHeaders),
        $soapFault !== null,
        $soapFault !== null ? $soapFault->getMessage() : ''
    );
  }

  /**
   * @see SoapClientLogMessageHandler::generateSoapXmlLogMessage()
   */
  public function generateSoapXmlLogMessage($requestHeaders, $request,
      $responseHeaders, $response, AdsHeaderHandler $adsHeaderHandler) {
    return sprintf(
        "%s\n\n%s\n\n%s\n\n%s\n",
        $adsHeaderHandler->scrubHttpHeaders(trim($requestHeaders)),
        $this->prettyPrint($adsHeaderHandler->scrubSoapHeaders($request)),
        $adsHeaderHandler->scrubHttpHeaders(trim($responseHeaders)),
        $this->prettyPrint($adsHeaderHandler->scrubSoapHeaders($response))
    );
  }

  private function prettyPrint($xml) {
    try {
      return $this->xmlUtils->getXmlFromDom(
          $this->xmlUtils->getDomFromXml($xml));
    } catch(DOMException $e) {
      return sprintf(
          "Unable to pretty print XML: %s\nOriginal XML: %s",
          $e->getMessage(),
          $xml
      );
    }
  }

  private function getServer($requestHeaders) {
    $hostMatches = [];
    $isMatch = preg_match(
        '/^.*Host:\\s(.*)Connection:.*$/s',
        $requestHeaders,
        $hostMatches
    );
    if ($isMatch) {
      return trim($hostMatches[1]);
    } else {
      return '';
    }
  }

  /**
   * @see https://developers.google.com/adwords/api/docs/guides/basic-concepts#soap_and_xml
   * @see https://developers.google.com/doubleclick-publishers/docs/soap_xml
   */
  private function getResponseTime($response) {
    try {
      $responseTimeElements = $this->xmlUtils->getDomFromXml($response)
          ->getElementsByTagName('responseTime');
      if ($responseTimeElements->length > 0) {
        // There is only one responseTime element in the SOAP response.
        return $responseTimeElements->item(0)->nodeValue;
      } else {
        return '';
      }
    } catch (DOMException $e) {
      return '';
    }
  }

  /**
   * @see https://developers.google.com/adwords/api/docs/guides/basic-concepts#soap_and_xml
   * @see https://developers.google.com/doubleclick-publishers/docs/soap_xml
   */
  private function getRequestId($response) {
    try {
      $requestIdElements = $this->xmlUtils->getDomFromXml($response)
          ->getElementsByTagName('requestId');
      if ($requestIdElements->length > 0) {
        // There is only one requestId element in the SOAP response.
        return $requestIdElements->item(0)->nodeValue;
      } else {
        return '';
      }
    } catch (DOMException $e) {
      return '';
    }
  }
}

