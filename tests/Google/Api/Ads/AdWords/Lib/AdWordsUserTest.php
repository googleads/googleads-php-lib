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
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/AdWords/Lib/AdWordsUser.php';
require_once 'Google/Api/Ads/Common/Lib/ValidationException.php';
require_once 'Google/Api/Ads/Common/Util/AdsUtilityRegistry.php';

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
        'client_secret' => 'csecret', 'refresh_token' => 'token',
        'oAuth2AdditionalScopes' => 'TEST_SCOPE1,TEST_SCOPE2'
    );
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

    $user = new AdWordsUser($this->authIniFilePath, 'devToken', $USER_AGENT,
        null, null, $this->mockOAuth2Credential);

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
   * @covers AdWordsUser::ValidateUser
   */
  public function testValidateUserWithNullOrEmptyUserAgentDefaultToUnknown() {
    $user = new AdWordsUser($this->authIniFilePath, 'devToken', '', null, null,
        $this->mockOAuth2Credential);
    $user->validateUser();
    $this->assertEquals($user->GetUserAgent(), 'unknown');
    $user = new AdWordsUser($this->authIniFilePath, 'devToken', null, null,
        null, $this->mockOAuth2Credential);
    $user->validateUser();
    $this->assertEquals($user->GetUserAgent(), 'unknown');
  }

  /**
   * @expectedException ValidationException
   * @covers AdWordsUser::ValidateUser
   */
  public function
      testValidateUserWithNonAsciiUserAgentFailsWithValidationException() {
    $user = new AdWordsUser($this->authIniFilePath, 'devToken',
        'å∫ç∂´ƒ', null, null, $this->mockOAuth2Credential);
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

    new AdWordsUser($this->authIniFilePath);
  }

  /**
   * Tests that additional scopes are added into AdWordsUser object.
   *
   * @covers AdWordsUser::__construct
   */
  public function testOAuth2AdditionalScopes() {
    $user = new AdWordsUser($this->authIniFilePath, 'devToken',
        null, null, null, $this->mockOAuth2Credential);
    $this->assertEquals($user->GetScopes(),
        array('TEST_SCOPE1','TEST_SCOPE2',AdWordsUser::OAUTH2_SCOPE));
  }

  /**
   * Tests that the AdWordsUser object recognizes the settings of including
   * user agents of ads utilities into the SOAP headers.
   *
   * @covers AdsUser::getIsIncludeUtilitiesInUserAgent
   * @covers AdsUser::setIncludeUtilitiesInUserAgent
   * @covers AdWordsUser::__construct
   */
  public function testIncludeUtiliesInUserAgent() {
    $user = new AdWordsUser($this->authIniFilePath, 'devToken', null, null,
        null, $this->mockOAuth2Credential);
    $user->setIncludeUtilitiesInUserAgent('true');
    $this->assertEquals($user->getIsIncludeUtilitiesInUserAgent(), 'true');
  }

  /**
   * Tests if the user agent includes the usage of ads utilities by default.
   *
   * @covers AdsUser::updateClientLibraryUserAgent
   * @covers AdWordsUser::__construct
   */
  public function testUpdateClientLibraryUserAgent_default() {
    $USER_AGENT = 'AdWordsApiPhpClient-test';
    $LIB_NAME = 'AwApi-PHP';
    $COMMON_NAME = 'Common-PHP';
    $VERSION_REGEX = '\d{1,2}\.\d{1,2}\.\d{1,2}';

    $user = new AdWordsUser($this->authIniFilePath, 'devToken', $USER_AGENT,
        null, null, $this->mockOAuth2Credential);
    AdsUtilityRegistry::getInstance()->addUtility('ReportDownloader/file');
    AdsUtilityRegistry::getInstance()->addUtility('BatchJobHelper');

    $user->updateClientLibraryUserAgent($user->GetUserAgent());
    // Example: "AdWordsApiPhpClient-test (AwApi-PHP/9.0.0, Common-PHP/9.0.0,
    // PHP/5.4.8, BatchJobHelper, ReportDownloader/file)"
    $expectedUserAgents = sprintf(
        '/^%s \(%s\/%s, %s\/%s, PHP\/%s, %s\)$/',
        preg_quote($user->GetUserAgent()),
        preg_quote($LIB_NAME),
        $VERSION_REGEX,
        preg_quote($COMMON_NAME),
        $VERSION_REGEX,
        preg_quote(PHP_VERSION),
        preg_quote('BatchJobHelper, ReportDownloader/file', '/')
    );
    $this->assertRegExp($expectedUserAgents,
        $user->GetClientLibraryUserAgent());
  }

  /**
   * Tests if the user agent doesn't include any usages of ads utilities when
   * the registry is empty.
   *
   * @covers AdsUser::updateClientLibraryUserAgent
   * @covers AdWordsUser::__construct
   */
  public function testUpdateClientLibraryUserAgent_registry_empty() {
    $USER_AGENT = 'AdWordsApiPhpClient-test';
    $LIB_NAME = 'AwApi-PHP';
    $COMMON_NAME = 'Common-PHP';
    $VERSION_REGEX = '\d{1,2}\.\d{1,2}\.\d{1,2}';

    $user = new AdWordsUser($this->authIniFilePath, 'devToken', $USER_AGENT,
        null, null, $this->mockOAuth2Credential);

    $user->updateClientLibraryUserAgent($user->GetUserAgent());
    // Example: "AdWordsApiPhpClient-test (AwApi-PHP/9.0.0, Common-PHP/9.0.0,
    // PHP/5.4.8)"
    $expectedUserAgents = sprintf(
        '/^%s \(%s\/%s, %s\/%s, PHP\/%s\)$/',
        preg_quote($user->GetUserAgent()),
        preg_quote($LIB_NAME),
        $VERSION_REGEX,
        preg_quote($COMMON_NAME),
        $VERSION_REGEX,
        preg_quote(PHP_VERSION)
    );
    $this->assertRegExp($expectedUserAgents,
        $user->GetClientLibraryUserAgent());
  }

  /**
   * Tests if the user agent doesn't include any usages of ads utilities when
   * isIncludeUtilitiesInUserAgent is false.
   *
   * @covers AdsUser::setIncludeUtilitiesInUserAgent
   * @covers AdsUser::updateClientLibraryUserAgent
   * @covers AdWordsUser::__construct
   */
  public function
      testUpdateClientLibraryUserAgent_isIncludeUtilitiesInUserAgent_false() {
    $USER_AGENT = 'AdWordsApiPhpClient-test';
    $LIB_NAME = 'AwApi-PHP';
    $COMMON_NAME = 'Common-PHP';
    $VERSION_REGEX = '\d{1,2}\.\d{1,2}\.\d{1,2}';

    $user = new AdWordsUser($this->authIniFilePath, 'devToken', $USER_AGENT,
        null, null, $this->mockOAuth2Credential);
    $user->setIncludeUtilitiesInUserAgent('false');
    AdsUtilityRegistry::getInstance()->addUtility('BatchJobHelper');
    $user->updateClientLibraryUserAgent($user->GetUserAgent());

    // Example: "AdWordsApiPhpClient-test (AwApi-PHP/9.0.0, Common-PHP/9.0.0,
    // PHP/5.4.8)"
    $expectedUserAgents = sprintf(
        '/^%s \(%s\/%s, %s\/%s, PHP\/%s\)$/',
        preg_quote($user->GetUserAgent()),
        preg_quote($LIB_NAME),
        $VERSION_REGEX,
        preg_quote($COMMON_NAME),
        $VERSION_REGEX,
        preg_quote(PHP_VERSION)
    );
    $this->assertRegExp($expectedUserAgents,
        $user->GetClientLibraryUserAgent());
  }
}

