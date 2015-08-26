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

require_once 'Google/Api/Ads/Common/Util/SoapRequestXmlFixer.php';
require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';

/**
 * Unit tests for {@link SoapRequestXmlFixer}.
 * @group small
 */
class SoapRequestXmlFixerTest extends PHPUnit_Framework_TestCase {

  /**
   * Tests adding XSI types.
   */
  public function testAddXsiTypes() {
    $request = <<<EOT
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ex="http://example.com">
   <soapenv:Header>
      <foo>
        <value>foo</value>
      </foo>
   </soapenv:Header>
   <soapenv:Body>
      <bar>
        <value>bar</value>
      </bar>
   </soapenv:Body>
</soapenv:Envelope>
EOT;
    $expected = <<<EOT
<?xml version="1.0"?>
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ex="http://example.com">
   <soapenv:Header>
      <foo xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:type="ex:Foo">
        <value>foo</value>
      </foo>
   </soapenv:Header>
   <soapenv:Body>
      <bar xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:type="ex:Bar">
        <value>bar</value>
      </bar>
   </soapenv:Body>
</soapenv:Envelope>

EOT;
    $foo = new Foo();
    $foo->value = 'foo';
    $bar = new Bar();
    $bar->value = 'bar';
    $headers[] = $foo;
    $arguments[] = $bar;
    $fixer = new SoapRequestXmlFixer(true, false, false);
    $result = $fixer->FixXml($request, $arguments, $headers);
    $this->assertEquals($expected, $result);
  }

  /**
   * Tests removing empty elements.
   */
  public function testRemoveEmptyElements() {
    $request = <<<EOT
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Header>
      <RequestHeader>
         <header1>value</header1><header2></header2>
      </RequestHeader>
   </soapenv:Header>
   <soapenv:Body>
      <bar>
        <value>bar</value>
      </bar>
   </soapenv:Body>
</soapenv:Envelope>
EOT;
    $expected = <<<EOT
<?xml version="1.0"?>
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Header>
      <RequestHeader>
         <header1>value</header1>
      </RequestHeader>
   </soapenv:Header>
   <soapenv:Body>
      <bar>
        <value>bar</value>
      </bar>
   </soapenv:Body>
</soapenv:Envelope>

EOT;
    $bar = new Bar();
    $bar->value = 'bar';
    $headers[] = array('header1' => 'value', 'header2' => '');
    $arguments[] = $bar;
    $fixer = new SoapRequestXmlFixer(false, true, false);
    $result = $fixer->FixXml($request, $arguments, $headers);
    $this->assertEquals($expected, $result);
  }

  /**
   * Tests replacing element references.
   */
  public function testReplaceElementReference() {
    $request = <<<EOT
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Header>
      <foo>
        <value>foo</value>
      </foo>
   </soapenv:Header>
   <soapenv:Body>
      <bar id="1234">
        <value>bar</value>
      </bar>
      <bar href="#1234" />
   </soapenv:Body>
</soapenv:Envelope>
EOT;
    $expected = <<<EOT
<?xml version="1.0"?>
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Header>
      <foo>
        <value>foo</value>
      </foo>
   </soapenv:Header>
   <soapenv:Body>
      <bar>
        <value>bar</value>
      </bar>
      <bar>
        <value>bar</value>
      </bar>
   </soapenv:Body>
</soapenv:Envelope>

EOT;
    $foo = new Foo();
    $foo->value = 'foo';
    $bar1 = new Bar();
    $bar1->value = 'bar';
    $bar2 = new Bar();
    $bar2->value = 'bar';
    $headers[] = $foo;
    $arguments[] = $bar1;
    $arguments[] = $bar2;
    $fixer = new SoapRequestXmlFixer(false, false, true);
    $result = $fixer->FixXml($request, $arguments, $headers);
    $this->assertEquals($expected, $result);
  }
}

/**
 * Class used for testing.
 */
class Foo {
  public $value;
  public function getXsiTypeName() { return 'Foo'; }
  public function getNamespace() { return 'http://example.com'; }
}

/**
 * Class used for testing.
 */
class Bar {
  public $value;
  public function getXsiTypeName() { return 'Bar'; }
  public function getNamespace() { return 'http://example.com'; }
}

