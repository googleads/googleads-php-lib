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

use Google\Auth\Credentials\ServiceAccountCredentials;
use Google\Auth\Credentials\UserRefreshCredentials;
use Google\Auth\FetchAuthTokenInterface;
use InvalidArgumentException;

/**
 * Builder for an OAuth2 access token fetcher.
 * @see FetchAuthTokenInterface
 */
class OAuth2TokenBuilder implements AdsBuilder {

  private $configurationLoader;

  private $jsonKeyFilePath;
  private $scopes;

  private $clientId;
  private $clientSecret;
  private $refreshToken;

  public function __construct() {
    $this->configurationLoader = new ConfigurationLoader();
  }

  /**
   * @see AdsBuilder::fromFile()
   */
  public function fromFile($path = null) {
    if ($path === null) {
      $path = self::DEFAULT_CONFIGURATION_FILENAME;
    }
    return $this->from($this->configurationLoader->fromFile($path));
  }

  public function fromString($string = null) {
	return $this->from($this->configurationLoader->fromString($string));
  }

  /**
   * @see AdsBuilder::from()
   */
  public function from(Configuration $configuration) {
    $this->jsonKeyFilePath =
        $configuration->getConfiguration('jsonKeyFilePath', 'OAUTH2');
    $this->scopes = $configuration->getConfiguration('scopes', 'OAUTH2');
    $this->clientId = $configuration->getConfiguration('clientId', 'OAUTH2');
    $this->clientSecret =
        $configuration->getConfiguration('clientSecret', 'OAUTH2');
    $this->refreshToken =
        $configuration->getConfiguration('refreshToken', 'OAUTH2');
    return $this;
  }

  /**
   * Includes an absolute path to an OAuth2 JSON key file when using service
   * account flow. Required and only applicable when using service account flow.
   *
   * @param string|null $jsonKeyFilePath
   * @return OAuth2TokenBuilder this builder
   */
  public function withJsonKeyFilePath($jsonKeyFilePath) {
    $this->jsonKeyFilePath = $jsonKeyFilePath;
    return $this;
  }

  /**
   * Includes OAuth2 scopes. Required and only applicable when using service
   * account flow.
   *
   * @param string|null $scopes a space-delimited list of scopes
   * @return OAuth2TokenBuilder this builder
   */
  public function withScopes($scopes) {
    $this->scopes = $scopes;
    return $this;
  }

  /**
   * Includes an OAuth2 client ID. Required when using installed application or
   * web application flow.
   *
   * @param string|null $clientId
   * @return OAuth2TokenBuilder this builder
   */
  public function withClientId($clientId) {
    $this->clientId = $clientId;
    return $this;
  }

  /**
   * Includes an OAuth2 client secret. Required when using installed application
   * or web application flow.
   *
   * @param string|null $clientSecret
   * @return OAuth2TokenBuilder this builder
   */
  public function withClientSecret($clientSecret) {
    $this->clientSecret = $clientSecret;
    return $this;
  }

  /**
   * Includes an OAuth2 refresh token. Required when using installed application
   * or web application flow.
   *
   * @param string|null $refreshToken
   * @return OAuth2TokenBuilder this builder
   */
  public function withRefreshToken($refreshToken) {
    $this->refreshToken = $refreshToken;
    return $this;
  }

  /**
   * @see AdsBuilder::build()
   */
  public function build() {
    $this->defaultOptionals();
    $this->validate();

    if ($this->jsonKeyFilePath !== null) {
      return new ServiceAccountCredentials(
          $this->scopes,
          $this->jsonKeyFilePath
      );
    } else {
      return new UserRefreshCredentials(
          null,
          [
              'client_id' => $this->clientId,
              'client_secret' => $this->clientSecret,
              'refresh_token' => $this->refreshToken
          ]
      );
    }
  }

  /**
   * @see AdsBuilder::defaultOptionals()
   */
  public function defaultOptionals() {
    // Nothing to default for this builder.
  }

  /**
   * @see AdsBuilder::validate()
   */
  public function validate() {
    if (($this->jsonKeyFilePath !== null || $this->scopes !== null)
        && ($this->clientId !== null || $this->clientSecret !== null
            || $this->refreshToken !== null)) {
      throw new InvalidArgumentException('Cannot have both service account '
          . 'flow and installed/web application flow credential values set.');
    }

    if ($this->jsonKeyFilePath !== null || $this->scopes !== null) {
      if ($this->jsonKeyFilePath === null || $this->scopes === null) {
        throw new InvalidArgumentException('Both \'jsonKeyFilePath\' and '
            . '\'scopes\' must be set when using service account flow.');
      }
    } else if ($this->clientId === null
          || $this->clientSecret === null
          || $this->refreshToken === null) {
        throw new InvalidArgumentException('All of \'clientId\', '
            . '\'clientSecret\', and \'refreshToken\' must be set when using '
            . 'installed/web application flow.');
    }
  }

  /**
   * Gets the JSON key file path.
   * @return string|null
   */
  public function getJsonKeyFilePath() {
    return $this->jsonKeyFilePath;
  }

  /**
   * Gets the scopes.
   * @return string|null
   */
  public function getScopes() {
    return $this->scopes;
  }

  /**
   * Gets the client ID.
   * @return string|null
   */
  public function getClientId() {
    return $this->clientId;
  }

  /**
   * Gets the client secret.
   * @return string|null
   */
  public function getClientSecret() {
    return $this->clientSecret;
  }

  /**
   * Gets the refresh token.
   * @return string|null
   */
  public function getRefreshToken() {
    return $this->refreshToken;
  }
}

