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

require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';

/**
 * Unit tests for {@link XmlUtils}.
 * @group small
 */
class XmlUtilsTest extends PHPUnit_Framework_TestCase {

  /**
   * Test getting a DOM document from a valid XML string.
   * @param string $xml the XML string to parse
   * @covers XmlUtils::GetDomFromXml
   * @dataProvider ValidXmlProvider
   */
  public function testGetDomFromXml_valid($xml) {
    $document = XmlUtils::GetDomFromXml($xml);
    $this->assertTrue(isset($document));
  }

  /**
   * Test getting a DOM document from an invalid XML string.
   * @param string $xml the XML string to parse
   * @covers XmlUtils::GetDomFromXml
   * @dataProvider InvalidXmlProvider
   * @expectedException DOMException
   */
  public function testGetDomFromXml_invalid($xml) {
    $document = XmlUtils::GetDomFromXml($xml);
  }

  /**
   * Test getting an XML string from a DOM document.
   * @param string $xml the XML string to use
   * @covers XmlUtils::GetXmlFromDom
   * @dataProvider ValidXmlProvider
   */
  public function testGetXmlFromDom($xml) {
    $document = XmlUtils::GetDomFromXml($xml);
    $result = XmlUtils::GetXmlFromDom($document);
    $this->assertTrue(!empty($result));
  }

  /**
   * Test pretty printing an XML string.
   * @param string $xml the XML string to pretty print
   * @param string $expected the expected result of pretty printing the XML
   * @covers XmlUtils::PrettyPrint
   * @dataProvider PrettyXmlProvider
   */
  public function testPrettyPrint($xml, $expected) {
    $result = XmlUtils::PrettyPrint($xml);
    $this->assertEquals($expected, $result);
  }

  /**
   * Test converting a DOM document to an object.
   * @param string $xml the XML to convert
   * @param Object $expected the expected result of the conversion
   * @covers XmlUtils::ConvertDocumentToObject
   * @covers XmlUtils::ConvertElementToObject
   * @covers XmlUtils::ConvertNodeValueToObject
   * @dataProvider XmlToObjectProvider
   */
  public function testConvertDocumentToObject($xml, $expected) {
    $document = XmlUtils::GetDomFromXml($xml);
    $result = XmlUtils::ConvertDocumentToObject($document);
    $this->assertEquals($expected, $result);
  }

  /**
   * Test converting an object to a DOM document.
   * @param string $expected the expected XML
   * @param Object $object the object to convert
   * @covers XmlUtils::ConvertObjectToDocument
   * @covers XmlUtils::ConvertObjectToElement
   * @covers XmlUtils::ConvertObjectToNodeValue
   * @dataProvider ObjectToXmlProvider
   */
  public function testConvertObjectToDocument($object, $expected) {
    $document = XmlUtils::ConvertObjectToDocument($object, 'root');
    $result = XmlUtils::GetXmlFromDom($document);
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
    $data[] = array(NULL);
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

  /**
   * Provides XML strings and the expected value after being converted to an
   * object.
   * @return array an array of arrays of XML strings and resulting objects
   */
  public function XmlToObjectProvider() {
    $data = array();

    // Empty.
    $data[] = array('<root/>', '');
    // String value.
    $data[] = array('<root>value</root>', 'value');
    // Integer value.
    $data[] = array('<root>15</root>', 15);
    // Float value.
    $data[] = array('<root>4.7</root>', 4.7);
    // Long value.
    if (PHP_INT_SIZE == 4) {
      $data[] = array('<root>2147483648</root>', 2147483648);
    } else {
      $data[] = array('<root>9223372036854775808</root>', 9223372036854775808);
    }
    // Boolean values.
    $data[] = array('<root>true</root>', TRUE);
    $data[] = array('<root>false</root>', FALSE);
    // Nested elements.
    $data[] = array('<root><a>apple</a></root>',
        (Object) array('a' => 'apple'));
    // Nested elements with the same name.
    $data[] = array('<root><a>apple</a><a>artichoke</a></root>',
        (Object) array('a' => array('apple', 'artichoke')));

    return $data;
  }

  /**
   * Provides objects and the expected XML strings after being converted to a
   * document.
   * @return array an array of arrays of objects and the resulting XML strings
   */
  public function ObjectToXmlProvider() {
    $data = array();

    // Empty string.
    $data[] = array('', "<?xml version=\"1.0\"?>\n<root></root>");
    // String value.
    $data[] = array('value', "<?xml version=\"1.0\"?>\n<root>value</root>");
    // Integer value.
    $data[] = array(15, "<?xml version=\"1.0\"?>\n<root>15</root>");
    // Float value.
    $data[] = array(4.7, "<?xml version=\"1.0\"?>\n<root>4.7</root>");
    // Long value.
    if (PHP_INT_SIZE == 4) {
      $data[] =
          array(2147483648, "<?xml version=\"1.0\"?>\n<root>2147483648</root>");
    } else {
      $data[] = array(9223372036854775808,
          "<?xml version=\"1.0\"?>\n<root>9223372036854775808</root>");
    }
    // Boolean values.
    $data[] = array(TRUE, "<?xml version=\"1.0\"?>\n<root>true</root>");
    $data[] = array(FALSE, "<?xml version=\"1.0\"?>\n<root>false</root>");
    // Simple object.
    $data[] = array((Object) array('a' => 'apple'),
        "<?xml version=\"1.0\"?>\n<root><a>apple</a></root>");
    // Associative array.
    $data[] = array(array('a' => 'apple'),
        "<?xml version=\"1.0\"?>\n<root><a>apple</a></root>");
    // Object with array value.
    $data[] = array((Object) array('a' => array('apple', 'artichoke')),
        "<?xml version=\"1.0\"?>\n<root><a>apple</a><a>artichoke</a></root>");

    return $data;
  }
}

