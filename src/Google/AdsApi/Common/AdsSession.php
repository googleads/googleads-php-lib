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

use Google\Auth\FetchAuthTokenInterface;
use Psr\Log\LoggerInterface;

/**
 * A session for using an ads API.
 */
interface AdsSession
{

    /**
     * Gets the PSR-3 compliant logger that logs SOAP messages for this session.
     *
     * @return LoggerInterface the non-null logger
     */
    public function getSoapLogger();

    /**
     * Gets the server endpoint to make API requests against.
     *
     * @return string the non-null server endpoint
     */
    public function getEndpoint();

    /**
     * Gets the Google OAuth2 credential for authenticating API requests.
     *
     * @return FetchAuthTokenInterface the non-null Google OAuth2 credential
     */
    public function getOAuth2Credential();

    /**
     * Gets the SOAP settings to apply to API requests.
     *
     * @return SoapSettings the non-null SOAP settings
     */
    public function getSoapSettings();

    /**
     * Gets the connection settings to apply to API requests.
     *
     * @return ConnectionSettings the non-null connection settings
     */
    public function getConnectionSettings();
}
