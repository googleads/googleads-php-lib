<?php
/**
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWordsUtil
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';
require_once 'Google/Api/Ads/AdWords/Testing/Util/v201605/XmlTestHelper.php';
require_once 'Google/Api/Ads/AdWords/Util/XmlSerializer.php';

/**
 * Unit tests for {@link XmlSerializer}.
 * @group small
 */
class XmlSerializerTest extends PHPUnit_Framework_TestCase {

  /**
   * @covers XmlSerializer::ConvertObjectToXml
   * @covers XmlSerializer::ConvertObjectToElement
   * @covers XmlSerializer::ConvertObjectToNodeValue
   * @dataProvider ReportDownloadErrorObjectToXmlProvider
   */
  public function testConvertObjectToXmlReportDownloadError($object,
      $expected) {
    $serializer = new XmlSerializer();
    $result = $serializer->ConvertObjectToXml($object, 'reportDownloadError',
        false);
    $this->assertEquals($expected, $result);
  }

  /**
   * @covers XmlSerializer::ConvertObjectToXml
   * @covers XmlSerializer::ConvertObjectToElement
   * @covers XmlSerializer::ConvertObjectToNodeValue
   */
  public function testConvertObjectToXmlReportDownloadErrorFormatted() {
    $serializer = new XmlSerializer();
    $result = $serializer->ConvertObjectToXml(
        XmlTestHelper::$REPORT_DOWNLOAD_ERROR_OBJECT,
        'reportDownloadError',
        false
    );
    $this->assertEquals(XmlTestHelper::$REPORT_DOWNLOAD_ERROR_FORMATTED_XML,
        XmlUtils::PrettyPrint($result));
  }

  /**
   * @covers XmlSerializer::ConvertObjectToXml
   * @covers XmlSerializer::ConvertObjectToElement
   * @covers XmlSerializer::ConvertObjectToNodeValue
   */
  public function testConvertObjectToXmlReportDefinition() {
    $serializer = new XmlSerializer();
    $result = $serializer->ConvertObjectToXml(
        XmlTestHelper::$REPORT_DEFINITION_OBJECT,
        'reportDefinition',
        false
    );
    $this->assertEquals(XmlTestHelper::$REPORT_DEFINITION_XML,
        XmlUtils::PrettyPrint($result));
  }

  /**
   * @covers XmlSerializer::ConvertObjectToXml
   * @covers XmlSerializer::ConvertObjectToElement
   * @covers XmlSerializer::ConvertObjectToNodeValue
   */
  public function testConvertObjectToXmlMutateRequest() {
    $serializer = new XmlSerializer();
    $result = $serializer->ConvertObjectToXml(
        XmlTestHelper::$MUTATE_REQUEST_OBJECT,
        'ns1:mutate',
        true
    );
    $this->assertEquals(XmlTestHelper::$NAMESPACED_MUTATE_REQUEST_XML, $result);
  }

  /**
   * Provides objects and the expected XML strings resulted from serialization.
   * @return array an array of arrays of objects and the resulting XML strings
   */
  public function ReportDownloadErrorObjectToXmlProvider() {
    return array(
        array('', XmlTestHelper::$EMPTY_REPORT_DOWNLOAD_ERROR_XML),
        array(XmlTestHelper::$REPORT_DOWNLOAD_ERROR_OBJECT,
            XmlTestHelper::$REPORT_DOWNLOAD_ERROR_XML)
    );

  }
}
