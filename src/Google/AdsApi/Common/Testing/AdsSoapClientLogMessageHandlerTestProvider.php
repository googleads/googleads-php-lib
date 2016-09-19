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
namespace Google\AdsApi\Common\Testing;

/**
 * Provides test data for `AdsSoapClientLogMessageHandlerTest`.
 * @see Google\AdsApi\Common\AdsSoapClientLogMessageHandlerTest
 */
class AdsSoapClientLogMessageHandlerTestProvider {

  /**
   * Gets a fake SOAP XML log for a DFP API call to get creatives.
   *
   * @return string
   */
  public static function getFakeSoapXmlLog() {
    return file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'getCreativesByStatement-expected-soapxmllog.txt');
  }

  /**
   * Gets a fake SOAP request for a DFP API call to get creatives.
   *
   * @return string
   */
  public static function getFakeGetCreativesRequest() {
    return file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'getCreativesByStatement-request.xml');
  }

  /**
   * Gets fake HTTP headers from the request for a DFP API call to get
   * creatives.
   *
   * @return string
   */
  public static function getFakeGetCreativesRequestHttpHeaders() {
    return file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'getCreativesByStatement-request-httpheaders.txt');
  }

  /**
   * Gets a fake SOAP response for a DFP API call to get creatives.
   *
   * @return string
   */
  public static function getFakeGetCreativesResponse() {
    return file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'getCreativesByStatement-response.xml');
  }

  /**
   * Gets fake HTTP headers from the response for a DFP API call to get
   * creatives.
   *
   * @return string
   */
  public static function getFakeGetCreativesResponseHttpHeaders() {
    return file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'getCreativesByStatement-response-httpheaders.txt');
  }
}
