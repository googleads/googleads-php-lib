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

require_once 'Google/Api/Ads/Common/Lib/AdsSoapClient.php';

/**
 * Unit tests for {@link AdsSoapClient}.
 * @group small
 */
class AdsSoapClientTest extends PHPUnit_Framework_TestCase {

  /**
   * Tests deserializing a long field value.
   * @covers AdsSoapClient::TypemapLongFromXml
   * @dataProvider TypemapLongFromXmlProvider
   */
  public function testTypemapLongFromXml($xml, $value, $type) {
    $result = AdsSoapClient::TypemapLongFromXml($xml);
    $this->assertEquals($value, $result);
    $this->assertEquals($type, gettype($result));
  }

  /**
   * Tests serializing a long field value.
   * @covers AdsSoapClient::TypemapLongToXml
   * @dataProvider TypemapLongToXmlProvider
   */
  public function testTypemapLongToXml($xml, $value, $type) {
    $result = AdsSoapClient::TypemapLongToXml($value);
    $this->assertEquals($xml, $result);
  }

  /**
   * Provider for testTypemapLongFromXml.
   * @return an array or arrays of XML, value, and type.
   */
  public function TypemapLongFromXmlProvider() {
    $data = $this->TypemapLongToXmlProvider();

    // ID fields.
    $data[] = array('<id>0</id>', '0', 'string');
    $data[] = array('<tempId>0</tempId>', '0', 'string');
    $data[] = array('<tempID>0</tempID>', '0', 'string');
    $data[] = array('<ns1:id xmlns:ns1="http://foo.com">0</ns1:id>', '0',
        'string');
    $data[] = array('<id foo="bar">0</id>', '0', 'string');

    // Non-id fields that end in "id".
    $data[] = array('<bid>0</bid>', 0, 'integer');

    return $data;
  }

  /**
   * Provider for testTypemapLongToXml.
   * @return an array or arrays of XML, value, and type.
   */
  public function TypemapLongToXmlProvider() {
    $data = array();

    // Within the integer space.
    $data[] = array('<value>0</value>', 0, 'integer');
    $data[] = array('<value>1</value>', 1, 'integer');
    $data[] = array('<value>-1</value>', -1, 'integer');

    // Integer boundaries.
    if (PHP_INT_SIZE == 4) {
      $data[] = array('<value>2147483647</value>', 2147483647, 'integer');
      $data[] = array('<value>-2147483648</value>', -2147483648, 'integer');
      $data[] = array('<value>2147483648</value>', 2147483648, 'double');
      $data[] = array('<value>-2147483649</value>', -2147483649, 'double');
    } else {
      $data[] = array('<value>9223372036854775807</value>', 9223372036854775807,
          'integer');
      $data[] = array('<value>-9223372036854775808</value>',
          -9223372036854775808, 'integer');
      $data[] = array('<value>9223372036854775808</value>', 9223372036854775808,
          'double');
      // Strings will be returned if the precision isn't great enough to
      // reliably store a value.
      $data[] = array('<value>-9223372036854775809</value>',
          '-9223372036854775809', 'string');
    }

    return $data;
  }
}

