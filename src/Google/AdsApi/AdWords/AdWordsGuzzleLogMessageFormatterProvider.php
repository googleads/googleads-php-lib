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

namespace Google\AdsApi\AdWords;

use Google\AdsApi\Common\GuzzleLogMessageFormatter;
use Google\AdsApi\Common\GuzzleLogMessageFormatterProvider;

/**
 * Provides a Guzzle log message formatter for AdWords.
 */
final class AdWordsGuzzleLogMessageFormatterProvider implements
    GuzzleLogMessageFormatterProvider
{

    private static $HTTP_HEADERS_TO_SCRUB = ['Authorization', 'developerToken'];

    private $session;
    private $shouldLogResponsePayload;
    private $redactedResponsePayloadMessage;

    /**
     * Creates a new AdWords Guzzle log message formatter provider with the
     * specified settings.
     *
     * @param AdWordsSession $session the AdWords session that makes a Guzzle
     *     HTTP call
     * @param bool $shouldLogResponsePayload whether the formatter should
     *     show the response payload in the log
     * @param string|null $redactedResponsePayloadMessage the substitution
     *     message to use in case the response payload is redacted
     */
    public function __construct(
        AdWordsSession $session,
        $shouldLogResponsePayload,
        $redactedResponsePayloadMessage = null
    ) {
        $this->session = $session;
        $this->shouldLogResponsePayload = $shouldLogResponsePayload;
        $this->redactedResponsePayloadMessage = $redactedResponsePayloadMessage;
    }

    /**
     * @see GuzzleLogMessageFormatterProvider::getGuzzleLogMessageFormatter
     */
    public function getGuzzleLogMessageFormatter()
    {
        return new GuzzleLogMessageFormatter(
            self::$HTTP_HEADERS_TO_SCRUB,
            ['clientCustomerId' => $this->session->getClientCustomerId()],
            $this->shouldLogResponsePayload,
            $this->redactedResponsePayloadMessage
        );
    }
}
