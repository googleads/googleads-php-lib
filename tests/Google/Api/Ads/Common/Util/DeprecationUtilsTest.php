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
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/DeprecationUtils.php';

/**
 * Unit tests for {@link DeprecationUtils}.
 * @group small
 */
class DeprecationUtilsTest extends PHPUnit_Framework_TestCase {

  public function testShouldRaiseClientLoginWarning_ValidUsingOAuth2() {
    $credentials = array(
      'refresh_token' => 'REFRESH_TOKEN',
    );
    $mockUser = $this->getMockBuilder('AdsUser')
        ->disableOriginalConstructor()
        ->getMockForAbstractClass();

    $mockUser->SetOAuth2Info($credentials);

    $this->assertFalse(
        DeprecationUtils::ShouldRaiseClientLoginWarning($mockUser));
  }

  public function testShouldRaiseClientLoginWarning_InvalidUsingClientLogin() {
    $credentials = array();
    $mockUser = $this->getMockBuilder('AdsUser')
        ->disableOriginalConstructor()
        ->getMockForAbstractClass();
    $mockUser->SetOAuth2Info($credentials);

    $this->assertTrue(
        DeprecationUtils::ShouldRaiseClientLoginWarning($mockUser));
  }
}
