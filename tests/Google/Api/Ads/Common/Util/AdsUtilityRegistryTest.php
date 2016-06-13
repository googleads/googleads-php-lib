<?php
/**
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/AdsUtilityRegistry.php';

/**
 * Unit tests for {@link AdsUtilityRegistry}.
 * @group small
 */
class AdsUtilityRegistryTest extends PHPUnit_Framework_TestCase {

  /**
   * @covers AdsUtilityRegistry::addUtility
   * @covers AdsUtilityRegistry::popAllUtilities
   */
  public function testAddAndPopRegisteredUtilities() {
    AdsUtilityRegistry::getInstance()->addUtility('BatchJobHelper');
    AdsUtilityRegistry::getInstance()->addUtility('ReportDownloader/file');
    AdsUtilityRegistry::getInstance()->addUtility('ReportDownloader/string');

    $expected = array(
        'BatchJobHelper' => 'BatchJobHelper',
        'ReportDownloader/file' => 'ReportDownloader/file',
        'ReportDownloader/string' => 'ReportDownloader/string'
    );
    // First time, get all registered ads utilities.
    $this->assertEquals($expected,
        AdsUtilityRegistry::getInstance()->popAllUtilities());
    // Second time and later, get an empty list.
    $this->assertEquals(array(),
        AdsUtilityRegistry::getInstance()->popAllUtilities());
    $this->assertEquals(array(),
        AdsUtilityRegistry::getInstance()->popAllUtilities());
  }
}
