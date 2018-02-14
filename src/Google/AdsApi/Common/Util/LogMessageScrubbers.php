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

namespace Google\AdsApi\Common\Util;

/**
 * Static utility methods for scrubbing sensitive information from logs for
 * outgoing requests.
 */
final class LogMessageScrubbers
{

    private function __construct()
    {
    }

    /**
     * @var string regex template for finding an HTTP header's name; e.g.,
     *     will find 'Authorization: ' from 'Authorization: Bearer xyz'
     */
    private static $HTTP_REQUEST_HEADER_REGEX = '/^(%s:\s).+$/msU';

    /**
     * @var string regex template for finding a SOAP XML tag in a SOAP header;
     *     e.g., will find '<developerToken>' and '</developerToken>' from
     *     '<developerToken>value</developerToken>'
     */
    private static $SOAP_REQUEST_HEADER_TAG_REGEX = '/(<(?:[^:]+:)?RequestHeader(?:\s[^>]*)?>.*<(?:[^:]+:)?%1$s(?:\s[^>]*)?>).*(<\/(?:[^:]+:)?%1$s\s*>.*<\/(?:[^:]+:)?RequestHeader\s*>)/sU';

    /**
     * @var string regex template for finding a SOAP XML tag in a SOAP body;
     *     e.g., find '<httpAuthorizationHeader>' and '</httpAuthorizationHeader>'
     *     from '<httpAuthorizationHeader>value</httpAuthorizationHeader>'
     */
    private static $SOAP_REQUEST_BODY_TAG_REGEX = '/(<SOAP-ENV:Body>.*<(?:[^:]+:)?%1$s(?:\s[^>]*)?>).*(<\/(?:[^:]+:)?%1$s\s*>.*<\/SOAP-ENV:Body>)/sU';

    /**
     * @var string text to use for redacted information
     */
    private static $REDACTED = 'REDACTED';

    /**
     * Scrubs the specified header values, replacing all occurrences in the
     * specified request HTTP headers with a redacted token.
     *
     * @param string $httpHeaders
     * @param string[] $headersToScrub which HTTP headers to scrub
     * @return string the HTTP headers with any sensitive info removed
     */
    public static function scrubRequestHttpHeaders(
        $httpHeaders,
        array $headersToScrub
    ) {
        foreach ($headersToScrub as $header) {
            $regex = sprintf(self::$HTTP_REQUEST_HEADER_REGEX, $header);
            $httpHeaders = preg_replace($regex, '\1' . self::$REDACTED, $httpHeaders, 1);
        }

        return $httpHeaders;
    }

    /**
     * Scrubs the specified header values, replacing their occurrences in the
     * specified request SOAP XML with a redacted token.
     *
     * @param string $soapXml
     * @param string[] $headersToScrub which SOAP headers to scrub
     * @return string the SOAP XML with any sensitive info removed from its
     *     headers
     */
    public static function scrubRequestSoapHeaders(
        $soapXml,
        array $headersToScrub
    ) {
        foreach ($headersToScrub as $header) {
            $regex = sprintf(self::$SOAP_REQUEST_HEADER_TAG_REGEX, $header);
            $soapXml = preg_replace($regex, '\1' . self::$REDACTED . '\2', $soapXml, 1);
        }

        return $soapXml;
    }

    /**
     * Scrubs the values of specified tags, replacing their occurrences in the
     * specified request SOAP XML with a redacted token.
     *
     * @param string $soapXml
     * @param string[] $tagsToScrub which SOAP tags to scrub
     * @return string the SOAP XML with any sensitive info removed from its
     *     headers
     */
    public static function scrubRequestSoapBodyTags(
        $soapXml,
        array $tagsToScrub
    ) {
        foreach ($tagsToScrub as $tag) {
            $regex = sprintf(self::$SOAP_REQUEST_BODY_TAG_REGEX, $tag);
            $soapXml = preg_replace($regex, '\1' . self::$REDACTED . '\2', $soapXml, 1);
        }

        return $soapXml;
    }

    /**
     * Scrubs an array of HTTP headers by replacing their values with a redacted
     * token.
     *
     * @param string[] $httpHeaders
     * @param string[] $headersToScrub which HTTP headers to scrub
     * @return string[] the list of HTTP headers with any sensitive info removed
     */
    public static function scrubHttpHeadersArray(
        array $httpHeaders,
        array $headersToScrub
    ) {
        foreach ($headersToScrub as $header) {
            $httpHeaders[$header] = self::$REDACTED;
        }

        return $httpHeaders;
    }
}
