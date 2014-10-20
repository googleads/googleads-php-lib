<?php
/**
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/AdWords/Lib/AdWordsUser.php';
require_once 'Google/Api/Ads/Common/Lib/ValidationException.php';

/**
 * Unit tests for {@link AdWordsUser}.
 * @group small
 */
class AdWordsUserTest extends PHPUnit_Framework_TestCase {

  protected $authIniFilePath;
  protected $mockOAuth2Credential;

  protected function setUp() {
    $this->authIniFilePath = tempnam(sys_get_temp_dir(), 'auth.ini.');
    $this->mockOAuth2Credential = array('client_id' => 'cid',
        'client_secret' => 'csecret', 'refresh_token' => 'token');
  }

  /**
   * @covers AdsUser::GetClientLibraryUserAgent
   */
  public function
      testGetClientLibraryUserAgentReturnsCorrectlyFormattedUserAgent() {
    $USER_AGENT = 'AdWordsApiPhpClient-test';
    $LIB_NAME = 'AwApi-PHP';
    $COMMON_NAME = 'Common-PHP';
    $VERSION_REGEX = '\d{1,2}\.\d{1,2}\.\d{1,2}';

    $user = new AdWordsUser($this->authIniFilePath, 'devToken', null,
        $USER_AGENT, null, null, $this->mockOAuth2Credential);

    // Example: "AdWordsApiPhpClient-test (AwApi-PHP/4.1.1, Common-PHP/5.0.0,
    // PHP/5.4.8)"
    $search = sprintf(
      '/^%s \(%s\/%s, %s\/%s, PHP\/%s\)$/',
      preg_quote($user->GetUserAgent()),
      preg_quote($LIB_NAME),
      $VERSION_REGEX,
      preg_quote($COMMON_NAME),
      $VERSION_REGEX,
      preg_quote(PHP_VERSION)
    );

    $this->assertRegExp($search, $user->GetClientLibraryUserAgent());
  }

  /**
   * @expectedException ValidationException
   * @covers AdWordsUser::ValidateUser
   */
  public function
      testValidateUserWithNullUserAgentFailsWithValidationException() {
    $user = new AdWordsUser($this->authIniFilePath, 'devToken', null, null,
        null, null, $this->mockOAuth2Credential);
    $user->validateUser();
  }

  /**
   * @expectedException ValidationException
   * @covers AdWordsUser::ValidateUser
   */
  public function
      testValidateUserWithEmptyUserAgentFailsWithValidationException() {
    $user = new AdWordsUser($this->authIniFilePath, 'devToken', null, '', null,
        null, $this->mockOAuth2Credential);
    $user->validateUser();
  }

  /**
   * @expectedException ValidationException
   * @covers AdWordsUser::ValidateUser
   */
  public function
      testValidateUserWithDefaultUserAgentFailsWithValidationException() {
    $user = new AdWordsUser($this->authIniFilePath, 'devToken',
        null, 'INSERT_COMPANY_NAME_HERE', null, null,
        $this->mockOAuth2Credential);
    $user->validateUser();
  }

  /**
   * Tests that instantiating an AdWordsUser with an auth.ini file that has the
   * key "clientId" will throw an exception because it has been changed to
   * "clientCustomerId".
   *
   * @expectedException ValidationException
   * @covers AdWordsUser::__construct
   */
  public function testConstructWithClientIdFailsWithValidationException() {
    $authIniFile = fopen($this->authIniFilePath, 'w');
    fwrite($authIniFile, 'clientId = "12345678"');
    fclose($authIniFile);

    new AdWordsUser($this->authIniFilePath, null, null, null, null);
  }
}

