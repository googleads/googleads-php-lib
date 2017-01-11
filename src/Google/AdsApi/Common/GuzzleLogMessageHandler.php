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

use GuzzleHttp\MessageFormatter;
use Psr\Log\LoggerInterface;

/**
 * Defines how logging is done for HTTP calls made to non-SOAP ads API
 * endpoints.
 */
final class GuzzleLogMessageHandler {

  /**
   * Logs requests and responses for Guzzle HTTP calls to non-SOAP ads API
   * endpoints to the specified logger.
   *
   * @param LoggerInterface $logger
   * @return callable a function that accepts the next handler
   */
  public static function log(LoggerInterface $logger) {
    return function (callable $handler) use ($logger) {
      return function ($request, array $options) use ($handler, $logger) {
        return $handler($request, $options)->then(
            function ($response) use ($request, $logger) {
              // Scrub sensitive information before logging.
              $changes = [
                  'set_headers' => ['Authorization' => 'REDACTED'],
                  'body' => urldecode($request->getBody())
              ];
              $clonedRequest =
                  \GuzzleHttp\Psr7\modify_request($request, $changes);

              $logger->info(
                  (new MessageFormatter())->format($clonedRequest, $response));
              \GuzzleHttp\Psr7\rewind_body($response);
              $logger->debug(
                  (new MessageFormatter(MessageFormatter::DEBUG))
                      ->format($clonedRequest, $response));
              \GuzzleHttp\Psr7\rewind_body($response);
              return $response;
            },
            function ($reason) use ($request, $logger) {
              $response =
                  is_subclass_of($reason,
                      'GuzzleHttp\Exception\RequestException')
                  ? $reason->getResponse()
                  : null;

              // Scrub sensitive information before logging.
              $changes = [
                  'set_headers' => ['Authorization' => 'REDACTED'],
                  'body' => urldecode($request->getBody())
              ];
              $clonedRequest =
                  \GuzzleHttp\Psr7\modify_request($request, $changes);

              $logger->warning(
                  (new MessageFormatter())->format($clonedRequest, $response));
              \GuzzleHttp\Psr7\rewind_body($response);
              $logger->notice(
                  (new MessageFormatter(MessageFormatter::DEBUG))
                      ->format($clonedRequest, $response, $reason));
              \GuzzleHttp\Psr7\rewind_body($response);
              return \GuzzleHttp\Promise\rejection_for($reason);
            }
        );
      };
    };
  }
}
