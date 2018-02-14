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

use Monolog\Logger;
use Psr\Log\LoggerInterface;

/**
 * Defines how logging is done for HTTP calls made to non-SOAP ads API
 * endpoints.
 */
final class GuzzleLogMessageHandler
{

    /**
     * Logs requests and responses for Guzzle HTTP calls to non-SOAP ads API
     * endpoints to the specified logger.
     *
     * @param LoggerInterface $logger
     * @param GuzzleLogMessageFormatter $messageFormatter
     * @return callable a function that accepts the next handler
     */
    public static function log(
        LoggerInterface $logger,
        GuzzleLogMessageFormatter $messageFormatter
    ) {
        return function (callable $handler) use ($logger, $messageFormatter) {
            return function ($request, array $options) use ($handler, $logger, $messageFormatter) {
                return $handler($request, $options)->then(

                    function ($response) use ($request, $logger, $messageFormatter) {
                        // Logs messages in case of successful HTTP calls.
                        $logger->info(
                            $messageFormatter->formatSummary($request, $response)
                        );

                        $logResponse = ($response !== null
                            && $response->getBody()
                                ->isSeekable()) ? $response : null;

                        if (!$logger instanceof Logger
                            || $logger->isHandling(Logger::DEBUG)) {
                            // formatDetailed() can produce long log messages so check
                            // if it handles DEBUG level when possible.
                            $logger->debug(
                                $messageFormatter->formatDetailed($request, $logResponse)
                            );
                        }

                        if ($logResponse !== null) {
                            // Rewind the response body if it was once read by
                            // formatDetailed() so the caller of this method can use the
                            // result immediately.
                            \GuzzleHttp\Psr7\rewind_body($response);
                        }

                        return $response;
                    },
                    function ($reason) use ($request, $logger, $messageFormatter) {
                        // Logs messages in case of failing HTTP calls.
                        $response = is_subclass_of(
                            $reason,
                            'GuzzleHttp\Exception\RequestException'
                        ) ? $reason->getResponse() : null;

                        $logger->warning(
                            $messageFormatter->formatSummary($request, $response)
                        );

                        $logResponse = ($response !== null
                            && $response->getBody()
                                ->isSeekable()) ? $response : null;

                        if (!$logger instanceof Logger
                            || $logger->isHandling(Logger::NOTICE)) {
                            // formatDetailed() can produce long log messages so check
                            // if it handles NOTICE level when possible.
                            $logger->notice(
                                $messageFormatter->formatDetailed(
                                    $request,
                                    $logResponse,
                                    $reason
                                )
                            );
                        }

                        if ($logResponse !== null) {
                            // Rewind the response body if it was once read by
                            // formatDetailed() so the caller of this method can use the
                            // result immediately.
                            \GuzzleHttp\Psr7\rewind_body($response);
                        }

                        return \GuzzleHttp\Promise\rejection_for($reason);
                    }
                );
            };
        };
    }
}
