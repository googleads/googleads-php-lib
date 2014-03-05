<?php
/**
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/AuthToken.php';

/**
 * Unit tests for {@link AuthToken}.
 * @group small
 */
class AuthTokenTest extends PHPUnit_Framework_TestCase {

  const SOURCE = 'Ads PHP Client Library Unit Tests';
  const EMAIL = 'noreply@google.com';
  const PASSWORD = 'password';
  const SERVICE = 'gam';

  protected $curlUtilsMock;
  protected $authToken;

  protected function setUp() {
    $this->curlUtilsMock = $this->getMockBuilder('CurlUtils')
                                ->setMethods(array('CreateSession', 'Init',
                                    'SetOpt', 'Exec', 'GetInfo', 'Error',
                                    'Close'))
                                ->getMock();

    $this->authToken = new AuthToken(self::EMAIL,
        self::PASSWORD, self::SERVICE,
        self::SOURCE, NULL, NULL, NULL, NULL, $this->curlUtilsMock);
  }

  private function setCurlUtilsMethodsExpects($response, $httpCode, $error) {
    $this->curlUtilsMock->expects($this->any())
                        ->method('Exec')
                        ->will($this->returnValue($response));
    $this->curlUtilsMock->expects($this->any())
                        ->method('GetInfo')
                        ->will($this->returnValue($httpCode));
    $this->curlUtilsMock->expects($this->any())
                        ->method('Error')
                        ->will($this->returnValue($error));
  }

  /**
   * @covers AuthToken::GetAuthToken
   */
  public function testGetAuthToken_returnsValidToken() {
    $this->setCurlUtilsMethodsExpects(sprintf("%s\n%s\n%s", 'SID=DFP',
        'LSID=DFPDFP', 'Auth=DFPDFPDFP'), 200, FALSE);

    $result = $this->authToken->GetAuthToken();
    $this->assertNotNull($result);
    $this->assertEquals('DFPDFPDFP', $result);
  }

  /**
   * @covers AuthToken::GetAuthToken
   * @expectedException AuthTokenException
   */
  public function testGetAuthToken_withBadAuthentication() {
    $this->setCurlUtilsMethodsExpects('Error=BadAuthentication', 403, FALSE);
    $result = $this->authToken->GetAuthToken();
  }

  /**
   * @covers AuthToken::GetAuthToken
   * @expectedException AuthTokenException
   */
  public function testGetAuthToken_withInvalidServer() {
    $this->setCurlUtilsMethodsExpects(FALSE, 0,
        "Couldn't resolve host 'foo.google.com'");
    $result = $this->authToken->GetAuthToken();
  }

  /**
   * @covers AuthToken::GetAuthToken
   * @expectedException AuthTokenException
   */
  public function testGetAuthToken_withInvalidService() {
    $this->setCurlUtilsMethodsExpects(sprintf("%s\n%s", 'Error=Unknown',
        'Url=https://www.google.com/accounts/ErrorMsg?service=foo&id=unknown&ti'
        . 'meStmp=1343855615&secTok=DFPDFPDFP'), 403, FALSE);
    $result = $this->authToken->GetAuthToken();
  }
}

