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

require_once 'Google/Api/Ads/Common/Util/DeprecationUtils.php';

/**
 * Unit tests for {@link DeprecationUtils}.
 * @group small
 */
class DeprecationUtilsTest extends PHPUnit_Framework_TestCase {

  public function testIsUsingOAuth2_UsingOAuth2() {
    $credentials = array('refresh_token' => 'REFRESH_TOKEN');
    $mockUser = $this->getMockBuilder('AdsUser')
        ->disableOriginalConstructor()
        ->getMockForAbstractClass();
    $mockUser->SetOAuth2Info($credentials);

    $this->assertTrue(
        DeprecationUtils::IsUsingOAuth2($mockUser));
  }

  public function testIsUsingOAuth2_UsingClientLogin() {
    // Because AdsUser doesn't have ClientLogin information on it, we consider
    // the absence of OAuth 2 as using ClientLogin.
    $mockUser = $this->getMockBuilder('AdsUser')
        ->disableOriginalConstructor()
        ->getMockForAbstractClass();

    $this->assertFalse(
        DeprecationUtils::IsUsingOAuth2($mockUser));
  }

  public function
      testCheckUsingClientLoginWithUnsupportedVersion_UsingClientLoginSupportedVersion() {
    // Because AdsUser doesn't have ClientLogin information on it, we consider
    // the absence of OAuth 2 as using ClientLogin.
    $mockUser = $this->getMockBuilder('AdsUser')
        ->disableOriginalConstructor()
        ->getMockForAbstractClass();

    DeprecationUtils::CheckUsingClientLoginWithUnsupportedVersion($mockUser,
        "v201311", "v201208");
    DeprecationUtils::CheckUsingClientLoginWithUnsupportedVersion($mockUser,
        "v201311", "v201311");
  }

  /**
   * @expectedException ServiceException
   */
  public function
      testCheckUsingClientLoginWithUnsupportedVersion_UsingClientLoginUnsupportedVersion() {
    // Because AdsUser doesn't have ClientLogin information on it, we consider
    // the absence of OAuth 2 as using ClientLogin.
    $mockUser = $this->getMockBuilder('AdsUser')
        ->disableOriginalConstructor()
        ->getMockForAbstractClass();

    DeprecationUtils::CheckUsingClientLoginWithUnsupportedVersion($mockUser,
        "v201311", "v201403");
  }

  public function
      testCheckUsingClientLoginWithUnsupportedVersion_UsingOAuth2WithAnyVersion() {
    $credentials = array('refresh_token' => 'REFRESH_TOKEN');
    $mockUser = $this->getMockBuilder('AdsUser')
        ->disableOriginalConstructor()
        ->getMockForAbstractClass();
    $mockUser->SetOAuth2Info($credentials);

    DeprecationUtils::CheckUsingClientLoginWithUnsupportedVersion($mockUser,
        "v201311", "v201208");
    DeprecationUtils::CheckUsingClientLoginWithUnsupportedVersion($mockUser,
        "v201311", "v201311");
    DeprecationUtils::CheckUsingClientLoginWithUnsupportedVersion($mockUser,
        "v201311", "v201403");
  }

  /**
   * @expectedException ServiceException
   */
  public function
      testCheckUsingReturnMoneyInMicrosWithUnsupportedVersion_UsingUnsupportedVersion() {
    DeprecationUtils::CheckUsingReturnMoneyInMicrosWithUnsupportedVersion('v201402', 'v201406');
  }

  public function
      testCheckUsingReturnMoneyInMicrosWithUnsupportedVersion_UsingWithAnyVersion() {

    DeprecationUtils::CheckUsingReturnMoneyInMicrosWithUnsupportedVersion('v201402', 'v201402');
    DeprecationUtils::CheckUsingReturnMoneyInMicrosWithUnsupportedVersion('v201402', 'v201309');
  }
}
