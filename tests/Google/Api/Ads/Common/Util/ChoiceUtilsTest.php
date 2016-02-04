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
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/ChoiceUtils.php';

/**
 * Unit tests for {@link ChoiceUtils}.
 * @group small
 */
class ChoiceUtilsTest extends PHPUnit_Framework_TestCase {

  /**
   * Test getting the value of a choice.
   * @param object $choice the choice
   * @param mixed $expected the expected value of the choice
   * @covers ChoiceUtils::GetValue
   * @dataProvider ChoiceProvider
   */
  public function testGetValue($choice, $expected) {
    $result = ChoiceUtils::GetValue($choice);
    $this->assertEquals($expected, $result);
  }

  /**
   * Provides choice objects along with the expected value.
   * @return array an array of arrays of choices and expected values
   */
  public function ChoiceProvider() {
    $data = array();

    // Populated choice.
    $choice = (object) array('first' => null, 'second' => 'value');
    $data[] = array($choice, 'value');

    // Empty choice.
    $choice = (object) array('first' => null, 'second' => null);
    $data[] = array($choice, null);

    return $data;
  }
}

