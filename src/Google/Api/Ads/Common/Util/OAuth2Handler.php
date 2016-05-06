<?php
/**
 * An abstract class for Google OAuth 2.0 flow.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/Common/Util/UrlUtils.php';

/**
 * An abstract class for Google OAuth2 flow.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
abstract class OAuth2Handler {

  /**
   * The refresh buffer of 60 seconds.
   */
  const REFRESH_BUFFER = 60;
  const DEFAULT_REDIRECT_URI = 'urn:ietf:wg:oauth:2.0:oob';
  const AUTHORIZE_ENDPOINT = 'https://accounts.google.com/o/oauth2/auth';
  const ACCESS_ENDPOINT = 'https://accounts.google.com/o/oauth2/token';
  const REVOKE_ENDPOINT = 'https://accounts.google.com/o/oauth2/revoke';

  private $server;
  private $scopes;

  /**
   * Constructor.
   *
   * @param string $server the auth server to make OAuth2 request against
   */
  public function __construct($server = null, $scopes = null) {
    $this->server = $server;
    if ($scopes === null) {
      $this->scopes = array();
    } else {
      $this->scopes = $scopes;
    }
  }

  /**
   * Gets the authorization URL to redirect to.
   * @param array $credentials the credentials, including client_id
   * @param string $redirectUri optional callback URL
   * @param boolean $offline whether or not to request offline access (aka a
   *     refresh token), false by default
   * @param array $params optional array of additional parameters to include
   *     in the URL
   * @return string an authorization URL to redirect the user to
   * @see https://developers.google.com/accounts/docs/OAuth2WebServer#formingtheurl
   */
  public function GetAuthorizationUrl(array $credentials,
      $redirectUri = null, $offline = null, array $params = null) {
    if (empty($credentials['client_id'])) {
      throw new OAuth2Exception('client_id required.');
    }
    $params = is_null($params) ? array() : $params;
    $redirectUri = is_null($redirectUri) ?
        self::DEFAULT_REDIRECT_URI : $redirectUri;

    $scopes = implode(' ', $this->scopes);
    $params = array_merge($params, array(
        'response_type' => 'code',
        'client_id' => $credentials['client_id'],
        'redirect_uri' => $redirectUri,
        'scope' => $scopes,
        'access_type' => $offline ? 'offline' : 'online'
    ));
    return $this->GetAuthorizeEndpoint($params);
  }

  /**
   * Gets the access token for an authorized request token.
   * @param array $credentials the credentials, including client_id and
   *     client_secret
   * @param string $code the authorization code returned in the response
   * @param string $redirectUri optional callback URL
   * @return array the credentials passed in plus access_token, expires_in,
   *     timestamp and optionally refresh_token if offline mode was requested
   * @see https://developers.google.com/accounts/docs/OAuth2WebServer#handlingtheresponse
   */
  public abstract function GetAccessToken(array $credentials, $code,
      $redirectUri = null);

  /**
   * Get the valid access token or the token if needed and possible.
   * @param array $credentials the credentials, including client_id and
   *     client_secret
   * @return array the credentials passed in plus any refreshed credentials
   *     if they were refreshed
   */
  public function GetOrRefreshAccessToken(array $credentials) {
      if ($this->ShouldRefreshAccessToken($credentials) &&
          $this->CanRefreshAccessToken($credentials)) {
        $credentials = $this->RefreshAccessToken($credentials);
      }
      return $credentials;
  }

  /**
   * Determines if the access token should be refreshed.
   * @param array $credentials the credentials, including client_id and
   *     client_secret
   * @return boolean true if the Access Token should be refreshed
   */
  public function ShouldRefreshAccessToken(array $credentials) {
    return (!$this->IsAccessTokenValid($credentials) ||
      $this->IsAccessTokenExpiring($credentials));
  }

  /**
   * Determines if the access token is still valid. If expiry information isn't
   * available then this function will assume it is.
   * @param array $credentials the credentials, including access_token,
   *     timestamp and expires_in
   * @return boolean true if the access token is valid or if expiring
   *     information isn't available
   */
  public function IsAccessTokenValid(array $credentials) {
    if (empty($credentials['access_token'])) {
      return false;
    }
    $expiry = $this->GetExpiryTimestamp($credentials);
    if ($expiry) {
      // Test if expiry hasn't passed.
      return $expiry > time();
    }

    // No expiry information, assume valid.
    return true;
  }

  /**
   * Tests if the access token is about to expire or has expired.
   * @param array $credentials the credentials, including access_token,
   *     timestamp and expires_in
   * @return boolean true if the token has expired
   **/
  public function IsAccessTokenExpiring(array $credentials) {
    $expiry = $this->GetExpiryTimestamp($credentials);
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
   * @param array $credentials the credentials, including access_token,
   *     timestamp and expires_in
   * @return int|boolean utc timestamp if exists or false if none found
   */
  private function GetExpiryTimestamp(array $credentials) {
    if (empty($credentials['timestamp'])
        || empty($credentials['expires_in'])) {
      return false;
    }

    // Set to refreshed time.
    $expires = intval($credentials['timestamp']);

    // Add the expiry value.
    $expires += intval($credentials['expires_in']);

    return $expires;
  }

  /**
   * Determines if the access token can be refreshed.
   * @param array $credentials the credentials
   * @return boolean true if the credentials can be refreshed
   */
  public function CanRefreshAccessToken(array $credentials) {
    return !empty($credentials['refresh_token']);
  }

  /**
   * Refreshes the access token.
   * @param array $credentials the credentials, including the client_id,
   *     client_secret, refresh_token
   * @return array the credentials
   * @see https://developers.google.com/accounts/docs/OAuth2WebServer#offline
   */
  public abstract function RefreshAccessToken(array $credentials);

  /**
   * Refreshes the access or refresh token.
   * @param array $credentials: ['token' => 'xxx']
   * @return array the credentials
   */
  public abstract function RevokeToken(array $credentials);

  /**
   * Formats OAuth2 credentials for use in a URL.
   * For example: access_token=token.
   * @param array $credentials the OAuth2 credentials
   * @return string the credentials formatted for use in a URL
   */
  public function FormatCredentialsForUrl($credentials) {
    if (empty($credentials['access_token'])) {
      throw new OAuth2Exception('access_token required.');
    }
    $params = array('access_token' => $credentials['access_token']);
    return http_build_query($params, null, '&');
  }

  /**
   * Formats OAuth2 credentials for use in an HTTP header.
   * For example: Bearer token
   * @param array $credentials the OAuth2 credentials
   * @return string the credentials formatted for use in an HTTP header
   */
  public function FormatCredentialsForHeader($credentials) {
    if (empty($credentials['access_token'])) {
      throw new OAuth2Exception('access_token required.');
    }
    $tokenType = !empty($credentials['token_type']) ?
        $credentials['token_type'] : 'Bearer';
    return sprintf('%s %s', $tokenType,
        urlencode($credentials['access_token']));
  }

  /**
   * Gets the authorization endpoint using the given server and parameters.
   * @param array $params the parameters to include in the endpoint
   * @return string the authorization endpoint
   */
  protected function GetAuthorizeEndpoint($params = null) {
    return $this->GetEndpoint(self::AUTHORIZE_ENDPOINT, $params);
  }

  /**
   * Gets the access endpoint using the given server and parameters.
   * @param array $params the parameters to include in the endpoint
   * @return string the access endpoint
   */
  protected function GetAccessEndpoint($params = null) {
    return $this->GetEndpoint(self::ACCESS_ENDPOINT, $params);
  }

  /**
   * Gets the revocation endpoint using the given server and parameters.
   * @param array $params the parameters to include in the endpoint
   * @return string the revocation endpoint
   */
  protected function GetRevocationEndpoint($params = NULL) {
    return $this->GetEndpoint(self::REVOKE_ENDPOINT, $params);
  }

  /**
   * Gets an endpoint using the given server and parameters.
   * @param string $endpoint the base endpoint URL to use
   * @param array $params the parameters to include in the endpoint
   * @return string the endpoint
   */
  private function GetEndpoint($endpoint, $params = null) {
    $endpoint = UrlUtils::AddParamsToUrl($endpoint, $params);
    if (!empty($this->server)) {
      $endpoint = UrlUtils::ReplaceServerInUrl($endpoint, $this->server);
    }
    return $endpoint;
  }

  /**
   * Gets OAuth2 scopes.
   * @return array the list of OAuth2 scopes
   */
  public function GetScopes() {
    return $this->scopes;
  }

  /**
   * Sets OAuth2 scopes.
   * @param array the list of OAuth2 scopes
   */
  public function SetScopes($scopes) {
    $this->scopes = $scopes;
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

