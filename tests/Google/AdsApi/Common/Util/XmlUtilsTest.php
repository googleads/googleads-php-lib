<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\Api\Ads\Common\Util;


use Google\AdsApi\Common\Util\XmlUtils;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for XmlUtils.
 * @see XmlUtils
 * @small
 */
class XmlUtilsTest extends PHPUnit_Framework_TestCase {

  private $xmlUtils;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->xmlUtils = new XmlUtils();
  }

  /**
   * Test getting a DOM document from a valid XML string.
   *
   * @param string $xml the XML string to parse
   * @covers Google\AdsApi\Common\Util\XmlUtils::getDomFromXml
   * @dataProvider validXmlProvider
   */
  public function testGetDomFromXml_valid($xml) {
    $document = $this->xmlUtils->getDomFromXml($xml);
    $this->assertTrue(!empty($document));
  }

  /**
   * Test getting a DOM document from an invalid XML string.
   *
   * @param string $xml the XML string to parse
   * @covers Google\AdsApi\Common\Util\XmlUtils::getDomFromXml
   * @dataProvider invalidXmlProvider
   * @expectedException DOMException
   */
  public function testGetDomFromXml_invalid($xml) {
    $document = $this->xmlUtils->getDomFromXml($xml);
  }

  /**
   * Test getting an XML string from a DOM document.
   *
   * @param string $xml the XML string to use
   * @param string $expected the expected result of getting the XML as a string
   * @covers Google\AdsApi\Common\Util\XmlUtils::getXmlFromDom
   * @dataProvider prettyXmlProvider
   */
  public function testGetXmlFromDom($xml, $expected) {
    $document = $this->xmlUtils->getDomFromXml($xml);
    $result = $this->xmlUtils->getXmlFromDom($document);
    $this->assertSame($expected, $result);
  }

  /**
   * Provides valid XML strings.
   *
   * @return array an array of arrays of XML strings
   */
  public function validXmlProvider() {
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
   *
   * @return array an array of arrays of XML strings
   */
  public function invalidXmlProvider() {
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
   *
   * @return array an array of arrays of non-pretty and pretty XML strings
   */
  public function prettyXmlProvider() {
    $data = array();

    // Insert XML declaration.
    $data[] = array('<root/>', "<?xml version=\"1.0\"?>\n<root/>");
    // Collapse empty tags.
    $data[] = array('<root></root>', "<?xml version=\"1.0\"?>\n<root/>");
    // Tab in child elements.
    $data[] = array('<root><a>apple</a></root>',
        "<?xml version=\"1.0\"?>\n<root>\n  <a>apple</a>\n</root>");

    return $data;
  }
}

