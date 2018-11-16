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

use Google\AdsApi\Common\Util\LogMessageScrubbers;
use Google\AdsApi\Common\Util\SoapHeaders;
use SoapFault;

/**
 * Stores and formats logging information about a single ads SOAP API call.
 */
final class SoapLogMessageFormatter
{

    private static $FAULT_MSG_MAX_LEN_DEFAULT = 16000;

    private $requestHttpHeadersToScrub;
    private $requestSoapHeadersToScrub;
    private $requestSoapBodyTagsToScrub;

    private $additionalRequestSummaryHeaders;
    private $additionalResponseSummaryHeaders;

    private $faultMsgMaxLength;

    /**
     * Creates a new SOAP log formatter with the specified settings.
     *
     * @param string[]|null $requestHttpHeadersToScrub a list of request HTTP
     *     headers to scrub
     * @param string[]|null $requestSoapHeadersToScrub a list of request SOAP
     *     headers to scrub
     * @param string[]|null $requestSoapBodyTagsToScrub a list of request SOAP
     *     body tags to scrub
     * @param string[]|null $additionalRequestSummaryHeaders a list of additional
     *     SOAP request headers to be included in the summary
     * @param string[]|null $additionalResponseSummaryHeaders a list of additional
     *     SOAP response headers to be included in the summary
     * @param int|null $faultMsgMaxLength the number of characters to limit SOAP
     *     fault messages to in the info log
     */
    public function __construct(
        array $requestHttpHeadersToScrub = null,
        array $requestSoapHeadersToScrub = null,
        array $requestSoapBodyTagsToScrub = null,
        array $additionalRequestSummaryHeaders = null,
        array $additionalResponseSummaryHeaders = null,
        $faultMsgMaxLength = null
    ) {
        $this->requestHttpHeadersToScrub =
            $requestHttpHeadersToScrub === null ? [] : $requestHttpHeadersToScrub;
        $this->requestSoapHeadersToScrub =
            $requestSoapHeadersToScrub === null ? [] : $requestSoapHeadersToScrub;
        $this->requestSoapBodyTagsToScrub =
            $requestSoapBodyTagsToScrub === null ? [] : $requestSoapBodyTagsToScrub;
        $this->additionalRequestSummaryHeaders =
            $additionalRequestSummaryHeaders === null ? [] : $additionalRequestSummaryHeaders;
        $this->additionalResponseSummaryHeaders =
            $additionalResponseSummaryHeaders === null ? [] : $additionalResponseSummaryHeaders;
        $this->faultMsgMaxLength =
            $faultMsgMaxLength === null ? self::$FAULT_MSG_MAX_LEN_DEFAULT : $faultMsgMaxLength;
    }

    /**
     * Formats this log message as a summary line.
     *
     * @param string $serviceName the name of the service the request was made to
     * @param string $methodName the name of the method that was called
     * @param string $requestHeaders the HTTP headers from the request
     * @param string $request the SOAP request
     * @param string $response the SOAP response for the request
     * @param SoapFault|null $soapFault a SOAP fault if the request failed
     * @return string the formatted summary log message
     */
    public function formatSummary(
        $serviceName,
        $methodName,
        $requestHeaders,
        $request,
        $response,
        $soapFault = null
    ) {
        $additionalHeadersFormatted = [];
        foreach ($this->additionalRequestSummaryHeaders as $additionalReqHeader) {
            $additionalHeadersFormatted[] = sprintf(
                '%s=%s ',
                $additionalReqHeader,
                SoapHeaders::getSoapHeaderValue($request, $additionalReqHeader)
            );
        }
        foreach ($this->additionalResponseSummaryHeaders as $additionalRespHeader) {
            $additionalHeadersFormatted[] = sprintf(
                '%s=%s ',
                $additionalRespHeader,
                SoapHeaders::getSoapHeaderValue($response, $additionalRespHeader)
            );
        }

        return sprintf(
            '%sservice=%s method=%s responseTime=%s requestId=%s server=%s '
            . 'isFault=%b faultMessage=%s',
            implode('', $additionalHeadersFormatted),
            $serviceName,
            $methodName,
            SoapHeaders::getSoapHeaderValue($response, 'responseTime'),
            SoapHeaders::getSoapHeaderValue($response, 'requestId'),
            $this->getServer($requestHeaders),
            $soapFault !== null,
            $soapFault !== null ? $this->formatSoapFaultForSummary($soapFault->getMessage()) : ''
        );
    }

    /**
     * Formats this log message as a detailed message containing full SOAP XML
     * request and response payloads, along with their HTTP headers.
     *
     * @param string $requestHeaders the HTTP headers from the request
     * @param string $request the SOAP request
     * @param string $responseHeaders the HTTP headers from the response
     * @param string $response the SOAP response for the request
     * @return string the formatted detailed log message
     */
    public function formatDetailed(
        $requestHeaders,
        $request,
        $responseHeaders,
        $response
    ) {
        $requestHeaders = LogMessageScrubbers::scrubRequestHttpHeaders(
            trim($requestHeaders),
            $this->requestHttpHeadersToScrub
        );
        $request = LogMessageScrubbers::scrubRequestSoapHeaders(
            $request,
            $this->requestSoapHeadersToScrub
        );
        $request = LogMessageScrubbers::scrubRequestSoapBodyTags(
            $request,
            $this->requestSoapBodyTagsToScrub
        );
        $responseHeaders = trim($responseHeaders);

        return sprintf(
            "%s\n\n%s\n%s\n\n%s\n",
            $requestHeaders,
            $request,
            $responseHeaders,
            $response
        );
    }

    /**
     * Removes line breaks and truncates the SOAP fault if necessary.
     *
     * @param string $soapFault
     * @return string
     */
    private function formatSoapFaultForSummary($soapFault)
    {
        $soapFault = str_replace(["\r\n", "\n", "\r"], '', $soapFault);
        if (mb_strlen($soapFault, 'UTF-8') > $this->faultMsgMaxLength) {
            $soapFault = mb_substr($soapFault, 0, $this->faultMsgMaxLength, 'UTF-8') . '...';
        };

        return $soapFault;
    }

    private function getServer($requestHeaders)
    {
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
}
