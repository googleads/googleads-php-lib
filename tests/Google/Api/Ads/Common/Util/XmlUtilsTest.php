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

require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';

/**
 * Unit tests for {@link XmlUtils}.
 * @group small
 */
class XmlUtilsTest extends PHPUnit_Framework_TestCase {

  /**
   * @covers XmlUtils::GetDomFromXml
   * @dataProvider ValidXmlProvider
   */
  public function testGetDomFromXml_valid($xml) {
    $document = XmlUtils::GetDomFromXml($xml);
    $this->assertTrue(isset($document));
  }

  /**
   * @covers XmlUtils::GetDomFromXml
   * @dataProvider InvalidXmlProvider
   * @expectedException DOMException
   */
  public function testGetDomFromXml_invalid($xml) {
    $document = XmlUtils::GetDomFromXml($xml);
  }

  /**
   * @covers XmlUtils::GetXmlFromDom
   * @dataProvider ValidXmlProvider
   */
  public function testGetXmlFromDom($xml) {
    $document = XmlUtils::GetDomFromXml($xml);
    $result = XmlUtils::GetXmlFromDom($document);
    $this->assertTrue(!empty($result));
  }

  /**
   * @covers XmlUtils::PrettyPrint
   * @dataProvider PrettyXmlProvider
   */
  public function testPrettyPrint($xml, $expected) {
    $result = XmlUtils::PrettyPrint($xml);
    $this->assertEquals($expected, $result);
  }

  /**
   * Provides valid XML strings.
   * @return array an array of arrays of XML strings
   */
  public function ValidXmlProvider() {
    $data = array();

    // No value.
    $data[] = array('<root/>');
    // With value.
    $data[] = array('<root>value</root>');
    // With attribute.
    $data[] = array('<root type="none"/>');
    // With child elements.
    $data[] = array('<root><a>apple</a><b>banana</b></root>');
    // With namespaces.
    $data[] = array('<root xmlns="http://foo" xmlns:bar="http://bar">'
        . '<a bar:type="none"/></root>');

    return $data;
  }

  /**
   * Provides invalid XML strings.
   * @return array an array of arrays of XML strings
   */
  public function InvalidXmlProvider() {
    $data = array();

    // Null.
    $data[] = array(null);
    // Empty string.
    $data[] = array('');
    // Incomplete tag.
    $data[] = array('<root');
    // Unclosed tag.
    $data[] = array('<root>');
    // Incomplete attribute.
    $data[] = array('<root type="none />');
    // Illegal character.
    $data[] = array('<root>this & that</root>');
    // Illegal attribute name
    $data[] = array('<root 1="none"/>');

    return $data;
  }

  /**
   * Provides non-pretty XML strings and their pretty counterparts.
   * @return array an array of arrays of non-pretty and pretty XML strings
   */
  public function PrettyXmlProvider() {
    $data = array();

    // Insert XML declaration.
    $data[] = array('<root/>', "<?xml version=\"1.0\"?>\n<root/>");
    // Collapse empty tags.
    $data[] = array('<root></root>', "<?xml version=\"1.0\"?>\n<root/>");
    // Tab in child elements.
    $data[] = array('<root><a>apple</a></root>',
        "<?xml version=\"1.0\"?>\n<root>\n  <a>apple</a>\n</root>");
    // Invalid XML should have line breaks removed.
    $data[] = array("<root>\n\n<a>apple\n", "<root><a>apple");

    return $data;
  }
}

