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

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once 'Google/Api/Ads/Common/Lib/ValidationException.php';

/**
 * Unit tests for {@link DfpUser}.
 * @group small
 */
class DfpUserTest extends PHPUnit_Framework_TestCase {

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
      testGetClientLibraryAppNameReturnsCorrectlyFormattedAppName() {
    $APPLICATION_NAME = 'DfpApiPhpClient-test';
    $LIB_NAME = 'DfpApi-PHP';
    $COMMON_NAME = 'Common-PHP';
    $VERSION_REGEX = '\d{1,2}\.\d{1,2}\.\d{1,2}';

    $user = new DfpUser($this->authIniFilePath, $APPLICATION_NAME,
        'networkCode', null, $this->mockOAuth2Credential);

    // Example: "DfpApiPhpClient-test (DfpApi-PHP/4.1.1, Common-PHP/5.0.0,
    // PHP/5.4.8)"
    $search = sprintf(
      '/^%s \(%s\/%s, %s\/%s, PHP\/%s\)$/',
      preg_quote($user->GetApplicationName()),
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
   * @covers DfpUser::ValidateUser
   */
  public function
      testValidateUserWithNullUserAgentFailsWithValidationException() {
    $user = new DfpUser($this->authIniFilePath, null, 'networkCode',
        null, $this->mockOAuth2Credential);
    $user->ValidateUser();
  }

  /**
   * @expectedException ValidationException
   * @covers DfpUser::ValidateUser
   */
  public function
      testValidateUserWithEmptyUserAgentFailsWithValidationException() {
    $user = new DfpUser($this->authIniFilePath, '', 'networkCode', null,
        $this->mockOAuth2Credential);
    $user->ValidateUser();
  }

  /**
   * @expectedException ValidationException
   * @covers DfpUser::ValidateUser
   */
  public function
      testValidateUserWithDefaultUserAgentFailsWithValidationException() {
    $user = new DfpUser($this->authIniFilePath, 'INSERT_APPLICATION_NAME_HERE',
        'networkCode', null, $this->mockOAuth2Credential);
    $user->ValidateUser();
  }

  /**
   * Tests that additional scopes are added into DfpUser object.
   *
   * @covers DfpUser::__construct
   */
  public function testOAuth2AdditionalScopes() {
    $user = new DfpUser($this->authIniFilePath, 'INSERT_APPLICATION_NAME_HERE',
        'networkCode', null, $this->mockOAuth2Credential);
    $this->assertEquals($user->GetScopes(),
        array('TEST_SCOPE1','TEST_SCOPE2',DfpUser::OAUTH2_SCOPE));
  }
}

