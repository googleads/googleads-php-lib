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

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Psr\Log\LoggerInterface;

/**
 * Creates a Guzzle HTTP client for making non-SOAP HTTP calls, e.g., report
 * download for AdWords and Dfp by pushing the logging middleware to the handler
 * stacks of all generated clients.
 *
 * @see Client
 */
final class AdsGuzzleHttpClientFactory implements GuzzleHttpClientFactory
{

    private $logger;
    private $messageFormatter;
    private $config;

    /**
     * Creates a new instance of this factory by specifying the logger for all
     * generated HTTP clients.
     *
     * @param LoggerInterface $logger the logger for the generated HTTP clients
     * @param GuzzleLogMessageFormatter $messageFormatter the Guzzle log
     *     message formatter
     * @param Client|null $httpClient the user-provided HTTP client
     */
    public function __construct(
        LoggerInterface $logger,
        GuzzleLogMessageFormatter $messageFormatter,
        Client $httpClient = null
    ) {
        $this->logger = $logger;
        $this->messageFormatter = $messageFormatter;
        $this->config = ($httpClient === null) ? [] : $httpClient->getConfig();
    }

    /**
     * Generates a Guzzle HTTP client for making HTTP calls by using configs of
     * the user-provided client. This method adds the logging middleware required
     * by this library to the handler stack of the generated client.
     *
     * @return Client the Guzzle HTTP client
     */
    public function generateHttpClient()
    {
        $config = $this->config;
        if (!array_key_exists('handler', $config)
            || $config['handler'] === null) {
            $config['handler'] = HandlerStack::create();
        }

        // Add a logging middleware required by this library.
        $config['handler']->before(
            'http_errors',
            GuzzleLogMessageHandler::log($this->logger, $this->messageFormatter)
        );

        return new Client($config);
    }
}
