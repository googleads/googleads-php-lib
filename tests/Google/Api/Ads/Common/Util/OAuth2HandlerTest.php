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

require_once 'Google/Api/Ads/Common/Util/OAuth2Handler.php';

/**
 * Unit tests for {@link OAuth2Handler}.
 * @group small
 */
class OAuth2HandlerTest extends PHPUnit_Framework_TestCase {

  private $oauth2Handler;
  private $scope;

  public function setup() {
    date_default_timezone_set('America/New_York');
    $this->scope = 'TEST_SCOPE';

    $this->oauth2Handler = new TestOAuth2Handler(NULL, $this->scope);
  }

  public function testGetAuthorizationUrl() {
    $credentials = array('client_id' => 'TEST_CLIENT_ID');


    $url = $this->oauth2Handler->GetAuthorizationUrl($credentials);

    $urlParts = parse_url($url);
    $this->assertEquals('https', $urlParts['scheme']);
    $this->assertEquals('accounts.google.com', $urlParts['host']);
    $this->assertFalse(isset($urlParts['port']));
    $this->assertFalse(isset($urlParts['user']));
    $this->assertFalse(isset($urlParts['pass']));
    $this->assertEquals('/o/oauth2/auth', $urlParts['path']);
    $this->assertFalse(isset($urlParts['fragment']));

    $params = array();
    parse_str($urlParts['query'], $params);
    $this->assertEquals('code', $params['response_type']);
    $this->assertEquals('TEST_CLIENT_ID', $params['client_id']);
    $this->assertEquals('urn:ietf:wg:oauth:2.0:oob', $params['redirect_uri']);
    $this->assertEquals('TEST_SCOPE', $params['scope']);
    $this->assertEquals('online', $params['access_type']);
  }

  public function testGetAuthorizationUrl_AlternateServer() {
    $scheme = 'http';
    $authServer = 'www.foo.com';
    $scope = 'TEST_SCOPE';
    $this->oauth2Handler = new TestOAuth2Handler(
        sprintf('%s://%s', $scheme, $authServer), $scope);
    $credentials = array('client_id' => 'TEST_CLIENT_ID');


    $url = $this->oauth2Handler->GetAuthorizationUrl($credentials);

    $urlParts = parse_url($url);
    $this->assertEquals($scheme, $urlParts['scheme']);
    $this->assertEquals($authServer, $urlParts['host']);
  }

  /**
   * @expectedException OAuth2Exception
   */
  public function testGetAuthorizationUrl_MissingClientId() {
    $credentials = array();
    $url = $this->oauth2Handler->GetAuthorizationUrl($credentials);
  }

  public function testGetAuthorizationUrl_RedirectUri() {
    $credentials = array('client_id' => 'TEST_CLIENT_ID');
    $redirectUri = 'http://www.foo.com/callback';

    $url = $this->oauth2Handler->GetAuthorizationUrl($credentials,
        $redirectUri);

    $urlParts = parse_url($url);
    $params = array();
    parse_str($urlParts['query'], $params);
    $this->assertEquals($redirectUri, $params['redirect_uri']);
  }

  public function testGetAuthorizationUrl_Offline() {
    $credentials = array('client_id' => 'TEST_CLIENT_ID');

    $url = $this->oauth2Handler->GetAuthorizationUrl($credentials, NULL,
        TRUE);

    $urlParts = parse_url($url);
    $params = array();
    parse_str($urlParts['query'], $params);
    $this->assertEquals('offline', $params['access_type']);
  }

  public function testGetAuthorizationUrl_Params() {
    $credentials = array('client_id' => 'TEST_CLIENT_ID');
    $params = array('foo' => 'bar');

    $url = $this->oauth2Handler->GetAuthorizationUrl($credentials, NULL, NULL,
        $params);

    $urlParts = parse_url($url);
    $params = array();
    parse_str($urlParts['query'], $params);
    $this->assertEquals('bar', $params['foo']);
  }

  public function GetOrRefreshAccessToken_ValidAccessToken() {
    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => '3600',
        'timestamp' => time()
    );
    $this->assertSame($credentials,
        $this->oauth2Handler->GetOrRefreshAccessToken($credentials));
  }

  public function testGetOrRefreshAccessToken_NoAccessToken() {
    $credentials = array(
        'refresh_token' => 'TEST_REFRESH_TOKEN',
    );
    try {
      $this->oauth2Handler->GetOrRefreshAccessToken($credentials);
      $this->fail('Should have thrown an exception.');
    } catch (Exception $e) {
      $this->assertSame(TestOAuth2Handler::REFRESH_TOKEN_MESSAGE,
          $e->getMessage());
    }
  }

  public function testGetOrRefreshAccessToken_ExpiredAccessToken() {
    $credentials = array(
        'refresh_token' => 'TEST_REFRESH_TOKEN',
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => '3600',
        'timestamp' => strtotime('-1 day')
    );
    try {
      $this->oauth2Handler->GetOrRefreshAccessToken($credentials);
      $this->fail('Should have thrown an exception.');
    } catch (Exception $e) {
      $this->assertSame(TestOAuth2Handler::REFRESH_TOKEN_MESSAGE,
          $e->getMessage());
    }
  }

  public function testShouldRefreshAccessToken_ValidAccessToken() {
    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => '3600',
        'timestamp' => time()
    );
    $this->assertFalse(
        $this->oauth2Handler->ShouldRefreshAccessToken($credentials));
  }

  public function testShouldRefreshAccessToken_TrueForMissingAccessToken() {
    $credentials = array(
        'expires_in' => '3600',
        'timestamp' => time()
    );
    $this->assertTrue(
        $this->oauth2Handler->ShouldRefreshAccessToken($credentials));
  }

  public function testShouldRefreshAccessToken_ExpiredAccessToken() {
    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => '3600',
        'timestamp' => strtotime('-1 day')
    );
    $this->assertTrue(
        $this->oauth2Handler->ShouldRefreshAccessToken($credentials));
  }

  public function testShouldRefreshAccessToken_ExpiredInBufferAccessToken() {
    $refreshBuffer = TestOAuth2Handler::REFRESH_BUFFER;
    $expiresIn = 3600;

    $secondsInterval = (int) $expiresIn - ($refreshBuffer / 2);

    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => $expiresIn,
        'timestamp' => strtotime(sprintf('-%d seconds', $secondsInterval))
    );
    $this->assertTrue(
        $this->oauth2Handler->ShouldRefreshAccessToken($credentials));
  }

  public function testIsAccessTokenValid() {
    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => '3600',
        'timestamp' => time()
    );
    $this->assertTrue($this->oauth2Handler->IsAccessTokenValid($credentials));
  }

  public function testIsAccessTokenValid_Expired() {
    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => '3600',
        'timestamp' => strtotime('-1 day')
    );
    $this->assertFalse($this->oauth2Handler->IsAccessTokenValid($credentials));
  }

  public function testIsAccessTokenValid_ValidInRefreshBuffer() {
    $refreshBuffer = TestOAuth2Handler::REFRESH_BUFFER;
    $expiresIn = 3600;

    $secondsInterval = (int) $expiresIn - ($refreshBuffer / 2);

    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => $expiresIn,
        'timestamp' => strtotime(sprintf('-%d seconds', $secondsInterval)),
    );
    $this->assertTrue($this->oauth2Handler->IsAccessTokenValid($credentials));
  }

  public function testIsAccessTokenExpiring_ExpiredWithinRefreshBuffer() {
    $refreshBuffer = TestOAuth2Handler::REFRESH_BUFFER;
    $expiresIn = 3600;

    $secondsInterval = (int) $expiresIn - ($refreshBuffer / 2);

    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => $expiresIn,
        'timestamp' => strtotime(sprintf('-%d seconds', $secondsInterval)),
    );
    $this->assertTrue(
      $this->oauth2Handler->IsAccessTokenExpiring($credentials));
  }

  public function testIsAccessTokenExpiring_ValidBeforeRefreshBuffer() {
    $refreshBuffer = TestOAuth2Handler::REFRESH_BUFFER;
    $expiresIn = 3600;

    $secondsInterval = (int) $expiresIn - ($refreshBuffer * 2);

    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => $expiresIn,
        'timestamp' => strtotime(sprintf('-%d seconds', $secondsInterval)),
    );
    $this->assertFalse(
      $this->oauth2Handler->IsAccessTokenExpiring($credentials));
  }

  public function testIsAccessTokenValid_MissingAccessToken() {
    $credentials = array(
        'expires_in' => '3600',
        'timestamp' => time()
    );
    $this->assertFalse($this->oauth2Handler->IsAccessTokenValid($credentials));
  }

  public function testIsAccessTokenValid_MissingExpiresIn() {
    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'timestamp' => time()
    );
    $this->assertTrue($this->oauth2Handler->IsAccessTokenValid($credentials));
  }

  public function testIsAccessTokenValid_MissingTimestamp() {
    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'expires_in' => '3600'
    );
    $this->assertTrue($this->oauth2Handler->IsAccessTokenValid($credentials));
  }

  public function testCanRefreshAccessToken() {
    $credentials = array('refresh_token' => 'TEST_REFRESH_TOKEN');
    $this->assertTrue(
        $this->oauth2Handler->CanRefreshAccessToken($credentials));
  }

  public function testCanRefreshAccessToken_MissingRefreshToken() {
    $credentials = array();
    $this->assertFalse(
        $this->oauth2Handler->CanRefreshAccessToken($credentials));
  }

  public function testFormatCredentialsForUrl() {
    $credentials = array('access_token' => 'TEST_ACCESS_TOKEN');
    $value = $this->oauth2Handler->FormatCredentialsForUrl($credentials);
    $this->assertEquals('access_token=TEST_ACCESS_TOKEN', $value);
  }

  /**
   * @expectedException OAuth2Exception
   */
  public function testFormatCredentialsForUrl_MissingToken() {
    $credentials = array();
    $value = $this->oauth2Handler->FormatCredentialsForUrl($credentials);
  }

  public function testFormatCredentialsForHeader() {
    $credentials = array('access_token' => 'TEST_ACCESS_TOKEN');
    $value = $this->oauth2Handler->FormatCredentialsForHeader($credentials);
    $this->assertEquals('Bearer TEST_ACCESS_TOKEN', $value);
  }

  public function testFormatCredentialsForHeader_DifferentTokenType() {
    $credentials = array(
        'access_token' => 'TEST_ACCESS_TOKEN',
        'token_type' => 'TEST_TOKEN_TYPE'
    );
    $value = $this->oauth2Handler->FormatCredentialsForHeader($credentials);
    $this->assertEquals('TEST_TOKEN_TYPE TEST_ACCESS_TOKEN', $value);
  }

  /**
   * @expectedException OAuth2Exception
   */
  public function testFormatCredentialsForHeader_MissingToken() {
    $credentials = array();
    $value = $this->oauth2Handler->FormatCredentialsForHeader($credentials);
  }

}

class TestOAuth2Handler extends OAuth2Handler {
  const GET_TOKEN_MESSAGE = 'Get not implemented.';
  const REFRESH_TOKEN_MESSAGE = 'Refresh not implemented.';

  public function GetAccessToken(array $credentials, $code,
      $redirectUri = NULL) {
    throw new Exception(self::GET_TOKEN_MESSAGE);
  }

  public function RefreshAccessToken(array $credentials) {
    throw new Exception(self::REFRESH_TOKEN_MESSAGE);
  }
}

