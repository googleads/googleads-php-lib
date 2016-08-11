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

require_once 'Google/Api/Ads/Common/Util/CurlUtils.php';
require_once 'Google/Api/Ads/AdWords/Testing/Util/v201607/XmlTestHelper.php';
require_once 'Google/Api/Ads/AdWords/Util/v201607/BatchJobUtils.php';

/**
 * Unit tests for {@link BatchJobUtils}.
 * @group small
 */
class BatchJobUtilsTest extends PHPUnit_Framework_TestCase {

  private static $DUMMY_UPLOAD_URL;
  private static $DUMMY_LOCATION_HEADER;
  private static $DUMMY_DOWNLOAD_URL;
  private static $DUMMY_OPERATIONS;
  private static $REQUIRED_CONTENT_BYTES_INCREMENT = 262144;

  public function setUp() {
    self::$DUMMY_UPLOAD_URL = 'https://www.googleapis.com/upload/storage/v1/b/b'
        . 'atch-job-upload-prod';
    self::$DUMMY_LOCATION_HEADER = 'Location: https://www.googleapis.com/upload'
        . '/storage/v1/b/batch-job-upload-prod/resumable ';
    self::$DUMMY_DOWNLOAD_URL = 'https://batch-job-download-prod.storage.google'
        . 'apis.com';
    self::$DUMMY_OPERATIONS = XmlTestHelper::$MUTATE_REQUEST_OBJECT->operations;
  }

  /**
   * @covers BatchJobUtils::UploadBatchJobOperations
   */
  public function testUploadBatchJobOperations() {
    $curlUtils = $this->getMock('CurlUtils');
    $xmlLength = strlen(XmlTestHelper::$NAMESPACED_MUTATE_REQUEST_XML);
    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Type', 'application/xml');
    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Length', $xmlLength);
    $expectedFlatHeaders[] =
        sprintf('%s: bytes 0-%s/%s', 'Content-Range', $xmlLength-1, $xmlLength);
    $expectedBody = XmlTestHelper::$NAMESPACED_MUTATE_REQUEST_XML;
    $curlUtils->expects($this->any())
        ->method('GetInfo')
        ->will($this->returnValue(200));
    $curlUtils->expects($this->at(5))
        ->method('Exec')
        ->will($this->returnValue(self::$DUMMY_LOCATION_HEADER));
    $curlUtils->expects($this->at(12))
        ->method('SetOpt')
        ->with($this->anything(), CURLOPT_HTTPHEADER, $expectedFlatHeaders);
    $curlUtils->expects($this->at(13))
        ->method('SetOpt')
        ->with($this->anything(), CURLOPT_POSTFIELDS, $expectedBody);
    $batchJobUtils = new BatchJobUtils(self::$DUMMY_UPLOAD_URL, 0, $curlUtils);
    $batchJobUtils->UploadBatchJobOperations(self::$DUMMY_OPERATIONS);
  }

  /**
   * @covers BatchJobUtils::UploadBatchJobOperations
   * @expectedException BatchJobException
   */
  public function testUploadBatchJobOperationsFailsWithBatchJobException() {
    $curlUtils = $this->getMock('CurlUtils');
    $curlUtils->expects($this->any())
        ->method('GetInfo')
        ->will($this->returnValue(500));
    $curlUtils->expects($this->any())
        ->method('Error')
        ->will($this->returnValue('Internal server error'));
    $batchJobUtils = new BatchJobUtils(self::$DUMMY_UPLOAD_URL, 0, $curlUtils);
    $batchJobUtils->UploadBatchJobOperations(self::$DUMMY_OPERATIONS);
  }

  /**
   * @covers BatchJobUtils::UploadIncrementalBatchJobOperations
   */
  public function testUploadIncrementalBatchJobOperationsFirstRequest() {
    $curlUtils = $this->getMock('CurlUtils');
    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Type', 'application/xml');
    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Length',
            self::$REQUIRED_CONTENT_BYTES_INCREMENT);
    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Range', 'bytes 0-262143/*');

    $expectedBody = preg_replace('/<\/ns1:mutate>\s*$/s', '',
        XmlTestHelper::$NAMESPACED_MUTATE_REQUEST_XML);
    $expectedBody = $this->padRequestBody($expectedBody);

    $curlUtils->expects($this->any())
        ->method('GetInfo')
        ->will($this->returnValue(308));
    $curlUtils->expects($this->at(5))
        ->method('Exec')
        ->will($this->returnValue(self::$DUMMY_LOCATION_HEADER));
    $curlUtils->expects($this->at(12))
        ->method('SetOpt')
        ->with($this->anything(), CURLOPT_HTTPHEADER, $expectedFlatHeaders);
    $curlUtils->expects($this->at(13))
        ->method('SetOpt')
        ->with($this->anything(), CURLOPT_POSTFIELDS, $expectedBody);
    $batchJobUtils = new BatchJobUtils(self::$DUMMY_UPLOAD_URL, 0, $curlUtils);
    $batchJobUtils->UploadIncrementalBatchJobOperations(
        self::$DUMMY_OPERATIONS);
  }

  /**
   * @covers BatchJobUtils::UploadIncrementalBatchJobOperations
   */
  public function testUploadIncrementalBatchJobOperationsIntermediateRequest() {
    $curlUtils = $this->getMock('CurlUtils');
    $curlUtils->expects($this->any())
        ->method('Exec')
        ->will($this->returnValue(self::$DUMMY_LOCATION_HEADER));
    $batchJobUtils = new BatchJobUtils(self::$DUMMY_UPLOAD_URL, 0, $curlUtils);

    // Upload the first set of operations.
    $curlUtils->expects($this->any())
        ->method('GetInfo')
        ->will($this->returnValue(308));
    $curlUtils->expects($this->any())
        ->method('CreateSession')
        ->will($this->returnValue($this->any()));
    $batchJobUtils->UploadIncrementalBatchJobOperations(
        self::$DUMMY_OPERATIONS);

    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Type', 'application/xml');
    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Length',
            self::$REQUIRED_CONTENT_BYTES_INCREMENT);
    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Range', 'bytes 262144-524287/*');

    $expectedBody = preg_replace('/<\/ns1:mutate>\s*$/s', '',
        XmlTestHelper::$NAMESPACED_MUTATE_REQUEST_XML);
    $expectedBody = preg_replace('/^.*?<operations/s', '<operations',
        $expectedBody);
    $expectedBody = $this->padRequestBody($expectedBody);

    // Upload the second (intermediate) set of operations.
    $curlUtils->expects($this->at(0))
        ->method('SetOpt')
        ->with($this->anything(), CURLOPT_HTTPHEADER, $expectedFlatHeaders);
    $curlUtils->expects($this->at(1))
        ->method('SetOpt')
        ->with($this->anything(), CURLOPT_POSTFIELDS, $expectedBody);
    $batchJobUtils->UploadIncrementalBatchJobOperations(
        self::$DUMMY_OPERATIONS);
  }

  /**
   * @covers BatchJobUtils::UploadIncrementalBatchJobOperations
   */
  public function testUploadIncrementalBatchJobOperationsLastRequest() {
    $curlUtils = $this->getMock('CurlUtils');
    $curlUtils->expects($this->any())
        ->method('Exec')
        ->will($this->returnValue(self::$DUMMY_LOCATION_HEADER));
    $batchJobUtils = new BatchJobUtils(self::$DUMMY_UPLOAD_URL, 0, $curlUtils);

    // Upload the first set of operations.
    $curlUtils->expects($this->any())
        ->method('GetInfo')
        ->will($this->returnValue(308));
    $curlUtils->expects($this->any())
        ->method('CreateSession')
        ->will($this->returnValue($this->any()));
    $batchJobUtils->UploadIncrementalBatchJobOperations(
        self::$DUMMY_OPERATIONS);

    // Upload the second (intermediate) set of operations.
    $batchJobUtils->UploadIncrementalBatchJobOperations(
        self::$DUMMY_OPERATIONS);

    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Type', 'application/xml');
    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Length',
            self::$REQUIRED_CONTENT_BYTES_INCREMENT);
    $expectedFlatHeaders[] =
        sprintf('%s: %s', 'Content-Range', 'bytes 524288-786431/786432');

    $expectedBody = preg_replace('/^.*?<operations/s', '<operations',
        XmlTestHelper::$NAMESPACED_MUTATE_REQUEST_XML);
    $expectedBody = $this->padRequestBody($expectedBody);

    // Upload the last set of operations.
    $curlUtils->expects($this->at(0))
        ->method('SetOpt')
        ->with($this->anything(), CURLOPT_HTTPHEADER, $expectedFlatHeaders);
    $curlUtils->expects($this->at(1))
        ->method('SetOpt')
        ->with($this->anything(), CURLOPT_POSTFIELDS, $expectedBody);
    $curlUtils->expects($this->any())
        ->method('GetInfo')
        ->will($this->returnValue(200));
    $batchJobUtils->UploadIncrementalBatchJobOperations(self::$DUMMY_OPERATIONS,
        true);
  }

  /**
   * @covers BatchJobUtils::UploadIncrementalBatchJobOperations
   * @expectedException BatchJobException
   */
  public function
      testUploadIncrementalBatchJobOperationsFailsWithBatchJobException() {
    $curlUtils = $this->getMock('CurlUtils');
    $curlUtils->expects($this->any())
        ->method('GetInfo')
        ->will($this->returnValue(500));
    $curlUtils->expects($this->any())
        ->method('Error')
        ->will($this->returnValue('Internal server error'));
    $curlUtils->expects($this->at(5))
        ->method('Exec')
        ->will($this->returnValue(self::$DUMMY_LOCATION_HEADER));
    $batchJobUtils = new BatchJobUtils(self::$DUMMY_UPLOAD_URL, 0, $curlUtils);
    $batchJobUtils->UploadIncrementalBatchJobOperations(
        self::$DUMMY_OPERATIONS);
  }

  /**
   * @covers BatchJobUtils::DownloadBatchJobResults
   */
  public function testDownloadBatchJobResults() {
    $curlUtils = $this->getMock('CurlUtils');
    $expectedFlatHeaders[] = sprintf('%s: %s', 'Accept-Encoding', 'gzip');
    $curlUtils->expects($this->at(2))
        ->method('SetOpt')
        ->with($this->anything(), CURLOPT_HTTPHEADER, $expectedFlatHeaders);
    $curlUtils->expects($this->any())
        ->method('GetInfo')
        ->will($this->returnValue(200));
    $curlUtils->expects($this->any())
        ->method('Exec')
        ->will($this->returnValue(
            XMLTestHelper::$NAMESPACED_MUTATE_REQUEST_XML));
    $batchJobUtils = new BatchJobUtils(
          self::$DUMMY_UPLOAD_URL,
          mb_strlen(XMLTestHelper::$NAMESPACED_MUTATE_REQUEST_XML, '8bit'),
          $curlUtils
    );
    $this->assertEquals(XMLTestHelper::$NAMESPACED_MUTATE_REQUEST_XML,
        $batchJobUtils->DownloadBatchJobResults(self::$DUMMY_DOWNLOAD_URL));
  }

  /**
   * @covers BatchJobUtils::DownloadBatchJobResults
   * @expectedException BatchJobException
   */
  public function testDownloadBatchJobResultsFailsWithBatchJobException() {
    $curlUtils = $this->getMock('CurlUtils');
    $curlUtils->expects($this->any())
        ->method('GetInfo')
        ->will($this->returnValue(500));
    $curlUtils->expects($this->any())
        ->method('Error')
        ->will($this->returnValue('Internal server error'));
    $batchJobUtils = new BatchJobUtils(self::$DUMMY_UPLOAD_URL, 0, $curlUtils);
    $batchJobUtils->DownloadBatchJobResults(self::$DUMMY_DOWNLOAD_URL);
  }

  private function padRequestBody($xmlRequest) {
    $numBytes = mb_strlen($xmlRequest, '8bit');
    $remainder = $numBytes % self::$REQUIRED_CONTENT_BYTES_INCREMENT;
    $targetLength = $numBytes +
        (self::$REQUIRED_CONTENT_BYTES_INCREMENT - $remainder);
    return ($remainder > 0) ?
        str_pad($xmlRequest, $targetLength, ' ') : $xmlRequest;
  }
}
