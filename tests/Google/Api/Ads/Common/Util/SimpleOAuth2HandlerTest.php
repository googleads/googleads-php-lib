<?php
/**
 * Copyright 2012, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an 'AS IS' BASIS,
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
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/SimpleOAuth2Handler.php';

/**
 * Unit tests for {@link SimpleOAuth2Handler}.
 * @group small
 */
class SimpleOAuth2HandlerTest extends PHPUnit_Framework_TestCase {

  private $simpleOAuth2Handler;

  public function setup() {
    $this->simpleOAuth2Handler = new TestSimpleOAuth2Handler();
  }

  public function testGetAccessToken() {
    $credentials = array(
        'client_id' => 'TEST_CLIENT_ID',
        'client_secret' => 'TEST_CLIENT_SECRET'
    );
    $code = 'TEST_CODE';

    $this->simpleOAuth2Handler->response = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => '3600',
        'refresh_token' => 'TEST_REFRESH_TOKEN'
    );
    $response = $this->simpleOAuth2Handler->GetAccessToken($credentials, $code);

    $url = $this->simpleOAuth2Handler->lastUrl;
    $this->assertEquals('https://accounts.google.com/o/oauth2/token', $url);

    $params = $this->simpleOAuth2Handler->lastParams;
    $this->assertEquals('TEST_CODE', $params['code']);
    $this->assertEquals('TEST_CLIENT_ID', $params['client_id']);
    $this->assertEquals('TEST_CLIENT_SECRET', $params['client_secret']);
    $this->assertEquals('urn:ietf:wg:oauth:2.0:oob', $params['redirect_uri']);
    $this->assertEquals('authorization_code', $params['grant_type']);

    $this->assertEquals('TEST_CLIENT_ID', $response['client_id']);
    $this->assertEquals('TEST_CLIENT_SECRET', $response['client_secret']);
    $this->assertEquals('TEST_ACCESS_TOKEN', $response['access_token']);
    $this->assertEquals('3600', $response['expires_in']);
    $this->assertEquals('TEST_REFRESH_TOKEN', $response['refresh_token']);
    $this->assertNotNull($response['timestamp']);
  }

  public function testGetAccessToken_DifferentServer() {
    $this->simpleOAuth2Handler =
        new TestSimpleOAuth2Handler('http://www.foo.com');
    $credentials = array(
        'client_id' => 'TEST_CLIENT_ID',
        'client_secret' => 'TEST_CLIENT_SECRET'
    );
    $code = 'TEST_CODE';
    $response = $this->simpleOAuth2Handler->GetAccessToken($credentials, $code);

    $url = $this->simpleOAuth2Handler->lastUrl;
    $this->assertEquals('http://www.foo.com/o/oauth2/token', $url);
  }

  /**
   * @expectedException OAuth2Exception
   */
  public function testGetAccessToken_MissingClientId() {
    $credentials = array(
        'client_secret' => 'TEST_CLIENT_SECRET'
    );
    $code = 'TEST_CODE';
    $response = $this->simpleOAuth2Handler->GetAccessToken($credentials, $code);
  }

  /**
   * @expectedException OAuth2Exception
   */
  public function testGetAccessToken_MissingClientSecret() {
    $credentials = array(
        'client_id' => 'TEST_CLIENT_ID'
    );
    $code = 'TEST_CODE';
    $response = $this->simpleOAuth2Handler->GetAccessToken($credentials, $code);
  }

  public function testGetAccessToken_DifferentRedirectUri() {
    $credentials = array(
        'client_id' => 'TEST_CLIENT_ID',
        'client_secret' => 'TEST_CLIENT_SECRET'
    );
    $code = 'TEST_CODE';
    $redirectUri = 'http://www.foo.com';
    $response = $this->simpleOAuth2Handler->GetAccessToken($credentials, $code,
        $redirectUri);

    $params = $this->simpleOAuth2Handler->lastParams;
    $this->assertEquals($redirectUri, $params['redirect_uri']);
  }

 public function testRefreshAccessToken() {
    $credentials = array(
        'client_id' => 'TEST_CLIENT_ID',
        'client_secret' => 'TEST_CLIENT_SECRET',
        'refresh_token' => 'TEST_REFRESH_TOKEN'
    );

    $this->simpleOAuth2Handler->response = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => '3600'
    );
    $response = $this->simpleOAuth2Handler->RefreshAccessToken($credentials);

    $url = $this->simpleOAuth2Handler->lastUrl;
    $this->assertEquals('https://accounts.google.com/o/oauth2/token', $url);

    $params = $this->simpleOAuth2Handler->lastParams;
    $this->assertEquals('TEST_CLIENT_ID', $params['client_id']);
    $this->assertEquals('TEST_CLIENT_SECRET', $params['client_secret']);
    $this->assertEquals('TEST_REFRESH_TOKEN', $params['refresh_token']);
    $this->assertEquals('refresh_token', $params['grant_type']);

    $this->assertEquals('TEST_CLIENT_ID', $response['client_id']);
    $this->assertEquals('TEST_CLIENT_SECRET', $response['client_secret']);
    $this->assertEquals('TEST_REFRESH_TOKEN', $params['refresh_token']);
    $this->assertEquals('TEST_ACCESS_TOKEN', $response['access_token']);
    $this->assertEquals('3600', $response['expires_in']);
    $this->assertNotNull($response['timestamp']);
  }

  public function testRefreshAccessToken_DifferentServer() {
    $this->simpleOAuth2Handler =
        new TestSimpleOAuth2Handler('http://www.foo.com');
    $credentials = array(
        'client_id' => 'TEST_CLIENT_ID',
        'client_secret' => 'TEST_CLIENT_SECRET',
        'refresh_token' => 'TEST_REFRESH_TOKEN'
    );
    $response = $this->simpleOAuth2Handler->RefreshAccessToken($credentials);

    $url = $this->simpleOAuth2Handler->lastUrl;
    $this->assertEquals('http://www.foo.com/o/oauth2/token', $url);
  }

  /**
   * @expectedException OAuth2Exception
   */
  public function testRefreshAccessToken_MissingClientId() {
    $credentials = array(
        'client_secret' => 'TEST_CLIENT_SECRET',
        'refresh_token' => 'TEST_REFRESH_TOKEN'
    );
    $response = $this->simpleOAuth2Handler->RefreshAccessToken($credentials);
  }

  /**
   * @expectedException OAuth2Exception
   */
  public function testRefreshAccessToken_MissingClientSecret() {
    $credentials = array(
        'client_id' => 'TEST_CLIENT_ID',
        'refresh_token' => 'TEST_REFRESH_TOKEN'
    );
    $response = $this->simpleOAuth2Handler->RefreshAccessToken($credentials);
  }

  /**
   * @expectedException OAuth2Exception
   */
  public function testRefreshAccessToken_MissingRefreshToken() {
    $credentials = array(
        'client_id' => 'TEST_CLIENT_ID',
        'client_secret' => 'TEST_CLIENT_SECRET'
    );
    $response = $this->simpleOAuth2Handler->RefreshAccessToken($credentials);
  }
}

class TestSimpleOAuth2Handler extends SimpleOAuth2Handler {
  public $lastUrl;
  public $lastParams;
  public $response;

  public function __construct($server = NULL) {
    parent::__construct($server);
    $this->response = array();
  }

  protected function MakeRequest($url, $params) {
    $this->lastUrl = $url;
    $this->lastParams = $params;
    return $this->response;
  }
}

