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
 * @subpackage v201607
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';
require_once 'Google/Api/Ads/AdWords/Testing/Util/v201607/XmlTestHelper.php';
require_once 'Google/Api/Ads/AdWords/Util/XmlDeserializer.php';

/**
 * Unit tests for {@link XmlDeserializer}.
 * @group small
 */
class XmlDeserializerTest extends PHPUnit_Framework_TestCase {

  private static $CLASS_MAP = array(
      'reportDownloadError' => 'ReportDownloadError',
      'mutate' => 'BatchJobOpsMutate',
      'mutateResponse' => 'CampaignCriterionServiceMutateResponse',
      'batchJobMutateResponse' => 'BatchJobOpsMutateResponse'
  );

  /**
   * @covers XmlDeserializer::ConvertXmlToObject
   * @covers XmlDeserializer::ConvertElementToObject
   * @covers XmlDeserializer::ConvertNodeValueToObject
   * @dataProvider XmlToObjectProvider
   */
  public function testConvertXmlToObject($xml, $expected) {
    $deserializer = new XmlDeserializer(self::$CLASS_MAP);
    $result = $deserializer->ConvertXmlToObject($xml);
    $this->assertEquals($expected, $result);
  }

  /**
   * Provides XML strings and the expected value after being converted to an
   * object.
   * @return array an array of arrays of XML strings and resulting objects
   */
  public function XmlToObjectProvider() {
    // Deserialization for empty XML.
    $testData = array(array('<mutate/>', ''));

    // Deserialization for report download error XML of AdWords.
    $testData[] = array(XmlTestHelper::$REPORT_DOWNLOAD_ERROR_XML,
        XmlTestHelper::$REPORT_DOWNLOAD_ERROR_OBJECT);

    // Deserialization for report download error of AdWords (formatted payload).
    $testData[] = array(XmlTestHelper::$REPORT_DOWNLOAD_ERROR_FORMATTED_XML,
        XmlTestHelper::$REPORT_DOWNLOAD_ERROR_OBJECT);

    // Deserialization for mutate request XML of AdWords.
    $testData[] = array(XmlTestHelper::$NAMESPACED_MUTATE_REQUEST_XML,
        XmlTestHelper::$MUTATE_REQUEST_OBJECT);

    // Deserialization for mutate response XML of AdWords.
    $testData[] = array(XmlTestHelper::$NAMESPACED_MUTATE_RESPONSE_XML,
        XmlTestHelper::$MUTATE_RESPONSE_OBJECT);

    // Deserialization for batch job mutate response XML of AdWords.
    $testData[] = array(XmlTestHelper::$BATCH_JOB_MUTATE_RESPONSE_XML,
        XmlTestHelper::$BATCH_JOB_MUTATE_RESPONSE_OBJECT);

    // Deserialization for success batch job mutate response XML of AdWords.
    $testData[] = array(XmlTestHelper::$SUCCESS_BATCH_JOB_MUTATE_RESPONSE_XML,
        XmlTestHelper::$SUCCESS_BATCH_JOB_MUTATE_RESPONSE_OBJECT);
    return $testData;
  }
}
