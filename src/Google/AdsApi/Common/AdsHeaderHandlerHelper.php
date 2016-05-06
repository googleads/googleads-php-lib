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

/**
 * Holds helper methods common to all ads APIs.
 */
class AdsHeaderHandlerHelper {

  /**
   * @var string regex template for finding an HTTP header's name; e.g.,
   *     will find 'Authorization: ' from 'Authorization: Bearer xyz'
   */
  const HTTP_HEADER_REGEX = '/^(%s:\s).+$/msU';

  /**
   * @var string regex template for finding a SOAP XML tag in a SOAP header;
   *     e.g., will find '<developerToken>' and '</developerToken>' from
   *     '<developerToken>value</developerToken>'
   */
  const SOAP_HEADER_TAG_REGEX =
      '/(<(?:[^:]+:)?RequestHeader(?:\s[^>]*)?>.*<(?:[^:]+:)?%s(?:\s[^>]*)?>).*(<\/(?:[^:]+:)?%s\s*>.*<\/(?:[^:]+:)?RequestHeader\s*>)/sU';

  /**
   * @var string text to use for redacted information
   */
  const REDACTED = '*****';

  /**
   * Formats an application name in a format standard to the ads libraries to
   * include in the SOAP header.
   *
   * @param string $applicationName the application name to format
   * @param string $productNameForSoapHeader the ads product API calls are
   *     being made against, formatted to be used in the SOAP header
   * @param LibraryMetadataProvider $libraryMetadataProvider the library
   *     metadata provider
   * @return string the formatted application name
   */
  public function formatApplicationNameForSoapHeader($applicationName,
      $productNameForSoapHeader,
      LibraryMetadataProvider $libraryMetadataProvider) {
    return sprintf(
        '%s (%sApi-PHP, %s/%s, PHP/%s)',
        $applicationName,
        $productNameForSoapHeader,
        $libraryMetadataProvider->getLibName(),
        $libraryMetadataProvider->getLibVersion(),
        PHP_VERSION
    );
  }

  /**
   * Removes any sensitive information from the specified HTTP headers.
   *
   * @param string $httpHeaders the HTTP headers
   * @param string[] $headersToScrub which HTTP headers to scrub
   * @return string the HTTP headers with any sensitive info removed
   */
  public function scrubHttpHeaders($httpHeaders, array $headersToScrub) {
    foreach ($headersToScrub as $header) {
      $regex = sprintf(self::HTTP_HEADER_REGEX, $header);
      $httpHeaders = preg_replace($regex, '\1' . self::REDACTED, $httpHeaders);
    }
    return $httpHeaders;
  }

  /**
   * Removes any sensitive information from the specified SOAP XML's headers.
   *
   * @param string $soapXml the SOAP XML
   * @param string[] $headersToScrub which SOAP headers to scrub
   * @return string the SOAP XML with any sensitive info removed from its
   *     headers
   */
  public function scrubSoapHeaders($soapXml, array $headersToScrub) {
    foreach ($headersToScrub as $header) {
      $regex = sprintf(self::SOAP_HEADER_TAG_REGEX, $header, $header);
      $soapXml = preg_replace($regex, '\1' . self::REDACTED . '\2', $soapXml);
    }
    return $soapXml;
  }
}

