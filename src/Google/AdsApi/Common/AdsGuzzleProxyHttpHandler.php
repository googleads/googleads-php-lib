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
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Creates a Guzzle HTTP handler that passes proxy information when invoked.
 */
final class AdsGuzzleProxyHttpHandler
{

    private $proxyUrl;
    private $httpClient;

    /**
     * Creates a new instance of the HTTP handler with the provided Ads session
     * and client.
     *
     * @param AdsSession $session the Ads session whose connection settings are
     *     used to make requests
     * @param ClientInterface|null $httpClient the user-provided HTTP client
     */
    public function __construct(
        AdsSession $session,
        ClientInterface $httpClient = null
    ) {
        $this->proxyUrl = $session->getConnectionSettings()
            ->getProxyUrl();
        $this->httpClient = $httpClient === null ? new Client() : $httpClient;
    }

    /**
     * Accepts a PSR-7 request, make a request and returns the result as a PSR-7
     * response.
     *
     * @param RequestInterface $request the request to send
     * @return ResponseInterface the response from making the request
     */
    public function __invoke(RequestInterface $request)
    {
        $requestOptions = empty($this->proxyUrl) ? [] : [RequestOptions::PROXY => $this->proxyUrl];

        return $this->httpClient->send($request, $requestOptions);
    }
}
