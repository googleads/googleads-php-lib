<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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

use Exception;
use Google\AdsApi\Common\Util\LogMessageScrubbers;
use GuzzleHttp\MessageFormatter;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Stores and formats logging information about a single Guzzle API call.
 */
final class GuzzleLogMessageFormatter
{

    // String operators are not supported in PHP of versions earlier than 5.6,
    // so this is initialized in the constructor instead.
    private static $SUMMARY_MESSAGE_FORMAT;
    private static $DETAILED_MESSAGE_FORMAT = "Request:\n{request}\n\nResponse:\n%s\n--------\nError:\n{error}\n";
    private static $REDACTED_DATA_MESSAGE = 'REDACTED DATA';

    private $requestHttpHeadersToScrub;
    private $additionalSummaryInfo;
    private $shouldLogResponsePayload;
    private $redactedResponsePayloadMessage;
    private $summaryMessageFormatter;
    private $detailedMessageFormatter;

    /**
     * Creates a new Guzzle log formatter with the specified settings.
     *
     * @param string[] $requestHttpHeadersToScrub a list of request HTTP
     *     headers to scrub
     * @param string[] $additionalSummaryInfo an associative array of
     *     additional info for formatting a message as summary
     * @param bool $shouldLogResponsePayload whether the logger should log
     *     response payload
     * @param string|null $redactedResponsePayloadMessage the message to be
     *     used when the response payload is redacted
     * @param MessageFormatter|null $summaryMessageFormatter the Guzzle message
     *     formatter for summary formatting
     * @param MessageFormatter|null $detailedMessageFormatter the Guzzle message
     *     formatter for detailed formatting
     */
    public function __construct(
        array $requestHttpHeadersToScrub,
        array $additionalSummaryInfo,
        $shouldLogResponsePayload,
        $redactedResponsePayloadMessage = null,
        MessageFormatter $summaryMessageFormatter = null,
        MessageFormatter $detailedMessageFormatter = null
    ) {
        self::$SUMMARY_MESSAGE_FORMAT =
            '{req_header_User-Agent} "{method} {target} HTTP/{version}" Status: {code} ';

        $this->requestHttpHeadersToScrub = $requestHttpHeadersToScrub;
        $this->additionalSummaryInfo = $additionalSummaryInfo;
        $this->shouldLogResponsePayload = $shouldLogResponsePayload;
        $this->redactedResponsePayloadMessage =
            $redactedResponsePayloadMessage === null ? self::$REDACTED_DATA_MESSAGE
                : $redactedResponsePayloadMessage;

        $this->summaryMessageFormatter =
            $summaryMessageFormatter === null ? new MessageFormatter(self::$SUMMARY_MESSAGE_FORMAT)
                : $summaryMessageFormatter;

        if ($this->shouldLogResponsePayload === true) {
            $guzzleMessageFormat = sprintf(self::$DETAILED_MESSAGE_FORMAT, '{response}');
        } else {
            $guzzleMessageFormat = sprintf(
                self::$DETAILED_MESSAGE_FORMAT,
                $this->redactedResponsePayloadMessage
            );
        }
        $this->detailedMessageFormatter =
            $detailedMessageFormatter === null ? new MessageFormatter($guzzleMessageFormat)
                : $detailedMessageFormatter;
    }

    /**
     * Formats this log message as a summary line.
     *
     * @param RequestInterface $request the HTTP request
     * @param ResponseInterface|null $response the HTTP response
     * @return string the formatted summary log message
     */
    public function formatSummary(
        RequestInterface $request,
        ResponseInterface $response = null
    ) {
        return sprintf(
            '%s %s',
            http_build_query($this->additionalSummaryInfo, '', ' '),
            $this->summaryMessageFormatter->format($request, $response)
        );
    }

    /**
     * Formats this log message as a detailed message containing HTTP request and
     * response, and errors if exist.
     *
     * @param RequestInterface $request the HTTP request
     * @param ResponseInterface|null $response the HTTP response
     * @param Exception $error the HTTP error
     * @return string the formatted detailed log message
     */
    public function formatDetailed(
        RequestInterface $request,
        ResponseInterface $response = null,
        Exception $error = null
    ) {
        $requestHeaders = LogMessageScrubbers::scrubHttpHeadersArray(
            $request->getHeaders(),
            $this->requestHttpHeadersToScrub
        );
        $changes = [
            'set_headers' => $requestHeaders,
            // The request body is encoded and thus needed to be decoded here
            // to provide a readable log message.
            'body' => urldecode($request->getBody())
        ];
        $clonedRequest = \GuzzleHttp\Psr7\modify_request($request, $changes);

        return $this->detailedMessageFormatter->format(
            $clonedRequest,
            $response,
            $error
        );
    }
}
