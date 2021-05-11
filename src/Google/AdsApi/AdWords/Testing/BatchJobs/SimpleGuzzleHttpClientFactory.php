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

namespace Google\AdsApi\AdWords\Testing\BatchJobs;

use Google\AdsApi\Common\GuzzleHttpClientFactory;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

/**
 * Creates a Guzzle HTTP client for making non-SOAP HTTP calls for testing
 * purpose.
 *
 * @see Client
 */
class SimpleGuzzleHttpClientFactory implements GuzzleHttpClientFactory
{

    private $httpClient;
    private $config;

    /**
     * Creates a new instance of this factory.
     *
     * @param Client|null $httpClient the user-provided HTTP client
     */
    public function __construct(Client $httpClient = null)
    {
        $this->httpClient = $httpClient;
        $this->config = ($httpClient === null) ? [] : $httpClient->getConfig();
    }

    /**
     * Generates a Guzzle HTTP client for making HTTP calls by using configs of
     * the user-provided client.
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

        return new Client($config);
    }
}
