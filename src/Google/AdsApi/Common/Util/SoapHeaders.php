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

use XMLReader;

/**
 * Static utility methods for working with SOAP request and response headers.
 */
final class SoapHeaders
{

    private static $SOAP_HEADER_NODE_NAME = 'Header';
    private static $SOAP_RESPONSE_HEADER_NODE_NAME = 'ResponseHeader';

    /**
     * Gets the value of the specified SOAP header from the specified SOAP request
     * or response payload as an XML string.
     *
     * @param string $xml
     * @param string $soapHeaderName
     * @return string the SOAP header value or an empty string if the header isn't
     *     found
     */
    public static function getSoapHeaderValue($xml, $soapHeaderName)
    {
        $headerValue = '';

        if ($xml === null || $xml === '') {
            return $headerValue;
        }

        $xmlReader = new XMLReader();
        $xmlReader->xml($xml);
        while ($xmlReader->read()) {
            if ($xmlReader->nodeType === XMLReader::ELEMENT
                && $xmlReader->localName === $soapHeaderName) {
                $xmlReader->read();
                $headerValue = $xmlReader->value;
            } else if ($xmlReader->nodeType === XMLReader::END_ELEMENT
                && $xmlReader->localName === self::$SOAP_HEADER_NODE_NAME) {
                break;
            }
        }
        $xmlReader->close();

        return $headerValue;
    }

    public static function getSoapResponseHeaderValues($xml)
    {
        $headerValues = [];

        if ($xml === null || $xml === '') {
            return $headerValues;
        }

        $foundOpenTag = false;
        $xmlReader = new XMLReader();
        $xmlReader->xml($xml);
        while ($xmlReader->read()) {
            if ($xmlReader->nodeType === XMLReader::ELEMENT
                && $xmlReader->localName === self::$SOAP_RESPONSE_HEADER_NODE_NAME) {
                $foundOpenTag = true;
                continue;
            } else if ($xmlReader->nodeType === XMLReader::END_ELEMENT
                && $xmlReader->localName === self::$SOAP_RESPONSE_HEADER_NODE_NAME) {
                break;
            } else if ($foundOpenTag && $xmlReader->nodeType === XMLReader::ELEMENT) {
                $headerName = $xmlReader->localName;
                $xmlReader->read();
                $headerValues[$headerName] = $xmlReader->value;
            }
        }
        $xmlReader->close();

        return $headerValues;
    }
}
