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

use Exception;
use Google\AdsApi\Common\ConfigurationLoader;

/**
 * An abstract class for Google OAuth2 flow.
 */
abstract class GoogleCredential {

  /**
   * @var string the default configuration filename for this library
   */
  const DEFAULT_CONFIGURATION_FILENAME = 'adsapi_php.ini';

  /**
   * The refresh buffer of 60 seconds.
   */
  const REFRESH_BUFFER = 60;
  const DEFAULT_REDIRECT_URI = 'urn:ietf:wg:oauth:2.0:oob';
  const AUTHORIZE_ENDPOINT = 'https://accounts.google.com/o/oauth2/auth';
  const ACCESS_ENDPOINT = 'https://accounts.google.com/o/oauth2/token';

  protected $scope;
  protected $credentials;

  /**
   * Temporary to make the object store the credentials.
   * @param array $credentials
   */
  public function setCredentials($credentials) {
    $this->credentials = $credentials;
  }

  /**
   * This only needs to be set when doing flows, when using this object as a
   * credential, setting the scope is not necessary.
   */
  public function setScope($scope) {
    $this->scope = $scope;
  }

  /**
   * This should eventually be moved into a builder, here now for testing and
   * convenience.
   *
   * @param string $path ...
   */
  public function fromFile($path = null) {
    if ($path === null) {
      $path = self::DEFAULT_CONFIGURATION_FILENAME;
    }
    $configurationLoader = new ConfigurationLoader();
    $configuration = $configurationLoader->fromFile($path);
    $this->credentials['client_id'] =
        $configuration->getConfiguration('client_id', 'OAUTH2');
    $this->credentials['client_secret'] =
        $configuration->getConfiguration('client_secret', 'OAUTH2');
    $this->credentials['refresh_token'] =
        $configuration->getConfiguration('refresh_token', 'OAUTH2');
  }

  /**
   * Gets the authorization URL to redirect to.
   *
   * @param string $redirectUri optional callback URL
   * @param boolean $offline whether or not to request offline access (aka a
   *     refresh token), false by default
   * @param array $params optional array of additional parameters to include
   *     in the URL
   * @return string an authorization URL to redirect the user to
   */
  public function getAuthorizationUrl($redirectUri = null, $offline = null,
      array $params = null) {
    if (empty($this->credentials['client_id'])) {
      throw new OAuth2Exception('client_id required.');
    }
    $params = is_null($params) ? array() : $params;
    $redirectUri = is_null($redirectUri) ?
        self::DEFAULT_REDIRECT_URI : $redirectUri;

    $params = array_merge($params, array(
        'response_type' => 'code',
        'client_id' => $this->credentials['client_id'],
        'redirect_uri' => $redirectUri,
        'scope' => $this->scope,
        'access_type' => $offline ? 'offline' : 'online'
    ));

    return $this->addParamsToUrl(self::AUTHORIZE_ENDPOINT, $params);
  }

  /**
   * Adds parameters to a URL.
   *
   * @param string $url the URL
   * @param array $params the parameters to add
   * @return string the new URL with the parameters added
   */
  private function addParamsToUrl($url, $params) {
    if (empty($params)) {
      return $url;
    }
    $paramString = http_build_query($params, null, '&');
    $query = parse_url($url, PHP_URL_QUERY);
    $separator = $query === null ? '?' : '&';
    return $url . $separator . $paramString;
  }

  /**
   * Gets the access token for an authorized request token.
   * @param string $code the authorization code returned in the response
   * @param string $redirectUri optional callback URL
   * @return array the credentials passed in plus access_token, expires_in,
   *     timestamp and optionally refresh_token if offline mode was requested
   */
  public abstract function getAccessToken($code, $redirectUri = null);

  /**
   * Get the valid access token or the token if needed and possible.
   * @return array the credentials passed in plus any refreshed credentials
   *     if they were refreshed
   */
  public function getOrRefreshAccessToken() {
    if ($this->shouldRefreshAccessToken($this->credentials) &&
        $this->canRefreshAccessToken($this->credentials)) {
      $this->credentials = $this->refreshAccessToken($this->credentials);
    }
    return $this->credentials;
  }

  /**
   * Determines if the access token should be refreshed.
   * @return boolean true if the Access Token should be refreshed
   */
  public function shouldRefreshAccessToken() {
    return (!$this->isAccessTokenValid($this->credentials) ||
        $this->isAccessTokenExpiring($this->credentials));
  }

  /**
   * Determines if the access token is still valid. If expiry information isn't
   * available then this function will assume it is.
   * @return boolean true if the access token is valid or if expiring
   *     information isn't available
   */
  public function isAccessTokenValid() {
    if (empty($this->credentials['access_token'])) {
      return false;
    }
    $expiry = $this->getExpiryTimestamp($this->credentials);
    if ($expiry) {
      // Test if expiry hasn't passed.
      return $expiry > time();
    }

    // No expiry information, assume valid.
    return true;
  }

  /**
   * Tests if the access token is about to expire or has expired.
   * @return boolean true if the token has expired
   **/
  public function isAccessTokenExpiring() {
    $expiry = $this->getExpiryTimestamp($this->credentials);
    if ($expiry) {
      // Subtract the refresh buffer.
      $expiry -= self::REFRESH_BUFFER;

      // Test if expiry has passed.
      return $expiry < time();
    }

    return false;
  }

  /**
   * Get the expiry of a given credential, or false if none is found.
   *
   * @return int|boolean utc timestamp if exists or false if none found
   */
  private function getExpiryTimestamp() {
    if (empty($this->credentials['timestamp'])
        || empty($this->credentials['expires_in'])) {
      return false;
    }

    // Set to refreshed time.
    $expires = intval($this->credentials['timestamp']);

    // Add the expiry value.
    $expires += intval($this->credentials['expires_in']);

    return $expires;
  }

  /**
   * Determines if the access token can be refreshed.
   *
   * @return boolean true if the credentials can be refreshed
   */
  public function canRefreshAccessToken() {
    return !empty($this->credentials['refresh_token']);
  }

  /**
   * Refreshes the access token.
   *
   * @return array the credentials
   */
  public abstract function refreshAccessToken();

  /**
   * Formats OAuth2 credentials for use in a URL.
   * For example: access_token=token.
   * @return string the credentials formatted for use in a URL
   */
  public function formatCredentialsForUrl() {
    if (empty($this->credentials['access_token'])) {
      throw new OAuth2Exception('access_token required.');
    }
    $params = array('access_token' => $this->credentials['access_token']);
    return http_build_query($params, null, '&');
  }

  /**
   * Formats OAuth2 credentials for use in an HTTP header.
   * For example: Bearer token
   * @return string the credentials formatted for use in an HTTP header
   */
  public function formatCredentialsForHeader() {
    if (empty($this->credentials['access_token'])) {
      throw new OAuth2Exception('access_token required.');
    }
    $tokenType = !empty($this->credentials['token_type']) ?
        $this->credentials['token_type'] : 'Bearer';
    return sprintf('%s %s', $tokenType,
        urlencode($this->credentials['access_token']));
  }
}

/**
 * Exception thrown when OAuth2 flow fails.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class OAuth2Exception extends Exception {
  public function __construct($message, $code = null) {
    parent::__construct($message, $code);
  }
}

