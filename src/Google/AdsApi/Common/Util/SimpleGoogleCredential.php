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

use Google\AdsApi\Common\Util\CurlUtils;

/**
 * A simple OAuth 2.0 handler.
 */
class SimpleGoogleCredential extends GoogleCredential {

  private $curlUtils;

  /**
   * Creates a new instance of this OAuth handler.
   */
  public function __construct() {
    $this->curlUtils = new CurlUtils();
  }

  /**
   * @see GoogleCredential::getAccessToken()
   */
  public function getAccessToken($code, $redirectUri = null) {
    if (empty($this->credentials['client_id'])) {
      throw new OAuth2Exception('client_id required.');
    }
    if (empty($this->credentials['client_secret'])) {
      throw new OAuth2Exception('client_secret required.');
    }
    $redirectUri = !empty($redirectUri) ?
        $redirectUri : self::DEFAULT_REDIRECT_URI;
    $params = array(
        'code' => $code,
        'client_id' => $this->credentials['client_id'],
        'client_secret' => $this->credentials['client_secret'],
        'redirect_uri' => $redirectUri,
        'grant_type' => 'authorization_code'
    );
    $response = $this->makeRequest(parent::ACCESS_ENDPOINT, $params);

    return array_merge(
        $this->credentials, $response, array('timestamp' => time()));
  }

  /**
   * @see GoogleCredential::refreshAccessToken()
   */
  public function refreshAccessToken() {
    if (empty($this->credentials['refresh_token'])) {
      throw new OAuth2Exception('Offline access (refresh_token) required.');
    }
    if (empty($this->credentials['client_id'])) {
      throw new OAuth2Exception('client_id required.');
    }
    if (empty($this->credentials['client_secret'])) {
      throw new OAuth2Exception('client_secret required.');
    }
    $params = array(
        'refresh_token' => $this->credentials['refresh_token'],
        'client_id' => $this->credentials['client_id'],
        'client_secret' => $this->credentials['client_secret'],
        'grant_type' => 'refresh_token'
    );
    $response = $this->makeRequest(parent::ACCESS_ENDPOINT, $params);

    return array_merge(
        $this->credentials, $response, array('timestamp' => time()));
  }

  /**
   * Makes an HTTP request to the given URL and extracts the returned OAuth2
   * response.
   *
   * @param string $url the URL to make the request to
   * @param array $params the parameters to include in the POST body
   * @return OAuthToken the returned token
   */
  protected function makeRequest($url, $params) {
    $ch = $this->curlUtils->CreateSession($url);
    $this->curlUtils->SetOpt($ch, CURLOPT_POSTFIELDS, $params);
    $response = $this->curlUtils->Exec($ch);
    $error = $this->curlUtils->Error($ch);
    $httpCode = $this->curlUtils->GetInfo($ch, CURLINFO_HTTP_CODE);
    $this->curlUtils->Close($ch);

    if (!empty($error)) {
      throw new OAuth2Exception($error, $httpCode);
    }
    if ($httpCode != 200) {
      throw new OAuth2Exception($response, $httpCode);
    }

    return json_decode($response, true);
  }
}

