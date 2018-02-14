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

use Google\Auth\FetchAuthTokenInterface;

/**
 * Provides functionality with retrieving OAuth2 access tokens using an OAuth2
 * token fetcher, handling refreshing the token if it's about to expire.
 */
final class OAuth2TokenRefresher
{

    /**
     * @var int the threshold, in seconds, that an existing access token's time to
     *     expire needs to be under for a new token to be requested
     */
    const DEFAULT_REFRESH_WINDOW_SECONDS = 60;

    private $refreshWindowSeconds;

    /**
     * Creates an OAuth2 token refresher with an optional, custom refresh window.
     *
     * @param int|null $refreshWindowSeconds optional, the access token refresh
     *     window, in seconds
     */
    public function __construct($refreshWindowSeconds = null)
    {
        $this->refreshWindowSeconds =
            $refreshWindowSeconds === null ? self::DEFAULT_REFRESH_WINDOW_SECONDS
                : $refreshWindowSeconds;
    }

    /**
     * Gets the existing access token, or fetches a new one if an existing one is
     * about to expire within the refresh window, or fetches a new one if there is
     * no existing access token.
     *
     * @param FetchAuthTokenInterface $fetchAuthTokenInterface the underlying
     *     OAuth2 access token fetcher
     * @param callable|null $httpHandler the HTTP handler for making requests
     *     to refresh OAuth2 credentials
     * @return string
     */
    public function getOrFetchAccessToken(
        FetchAuthTokenInterface $fetchAuthTokenInterface,
        callable $httpHandler = null
    ) {
        if ($this->shouldFetchAccessToken($fetchAuthTokenInterface)) {
            return $fetchAuthTokenInterface->fetchAuthToken($httpHandler)
            ['access_token'];
        }

        return $fetchAuthTokenInterface->getLastReceivedToken()['access_token'];
    }

    private function shouldFetchAccessToken(
        FetchAuthTokenInterface $fetchAuthTokenInterface
    ) {
        $token = $fetchAuthTokenInterface->getLastReceivedToken();

        return $token === null
            || ($token['expires_at'] !== null
                && $token['expires_at'] - time() <= $this->refreshWindowSeconds);
    }

    /**
     * Gets the access token refresh window in seconds.
     *
     * @return int
     */
    public function getAccessTokenRefreshWindow()
    {
        return $this->refreshWindowSeconds;
    }

    /**
     * Sets the access token refresh window in seconds.
     *
     * @param int $refreshWindowSeconds
     */
    public function setAccessTokenRefreshWindow($refreshWindowSeconds)
    {
        $this->refreshWindowSeconds = $refreshWindowSeconds;
    }
}
