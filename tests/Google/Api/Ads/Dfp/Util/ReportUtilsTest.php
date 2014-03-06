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
 * @package    GoogleApiAdsDfp
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Dfp/Util/ReportUtils.php';

/**
 * Unit tests for {@link ReportUtils}.
 * @group nondeterministic
 * @group large
 */
class ReportUtilsTest extends PHPUnit_Framework_TestCase {

  const DUMMY_REPORT_URL = 'http://www.google.com';

  /**
   * Test downloading a report to a file. A dummy URL is used in place of a
   * report URL.
   * @covers ReportUtils::DownloadReport
   */
  public function testDownloadReportToFile() {
    $filePath = tempnam(NULL, NULL);
    $downloadSize = ReportUtils::DownloadReport(self::DUMMY_REPORT_URL,
        $filePath);
    $this->assertTrue(file_exists($filePath));
    $this->assertGreaterThan(0, $downloadSize);
  }

  /**
   * Test downloading a report to a string. A dummy URL is used in place of a
   * report URL.
   * @covers ReportUtils::DownloadReport
   */
  public function testDownloadReportToString() {
    $result = ReportUtils::DownloadReport(ReportUtilsTest::DUMMY_REPORT_URL);
    $this->assertTrue(isset($result));
  }
}

