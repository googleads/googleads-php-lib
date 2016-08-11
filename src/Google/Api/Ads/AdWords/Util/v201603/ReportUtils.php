<?php
/**
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsAdWordsUtil
 * @subpackage v201603
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/AdWords/Util/v201603/ReportUtilsDelegate.php';
require_once 'Google/Api/Ads/Common/Util/AdsUtility.php';
require_once 'Google/Api/Ads/Common/Util/AdsUtilityRegistry.php';

/**
 * A collection of utility methods for working with reports.
 */
class ReportUtils {

  private $adsUtilityRegistry;

  /**
   * Create an instance of ReportUtils with the specified ads utility registry.
   *
   * @param AdsUtilityRegistry $adsUtilityRegistry the ads utility registry
   */
  public function __construct(AdsUtilityRegistry $adsUtilityRegistry = null) {
    $this->adsUtilityRegistry = ($adsUtilityRegistry === null)
        ? AdsUtilityRegistry::getInstance()
        : $adsUtilityRegistry;
  }

  /**
   * Downloads a new instance of an existing report definition. If the path
   * parameter is specified it will be downloaded to the file at that path,
   * otherwise it will be downloaded to memory and be returned as a string.
   * @param mixed $reportDefinition the ReportDefinition to download or the id
   *     of a stored report definition
   * @param string $path an optional path of the file to download the report to
   * @param AdWordsUser $user the user that created the ReportDefinition
   * @param array $options the option to use when downloading the report:
   *     {boolean} skipReportHeader: if report responses should skip the header
   *         row containing the report name and date range
   *     {boolean} skipColumnHeader: if report responses should skip the header
   *         row containing column names
   *     {boolean} skipReportSummary: if report responses should skip the
   *         summary row containing totals
   *     {boolean} includeZeroImpressions: if report responses should include
   *         zero impression rows
   *     {boolean} useRawEnumValues: if report responses should return enum
   *         values instead of enum display values
   *     {string} server: the server to make the request to. If <var>null</var>,
   *         then the default server will be used
   *     {string} version: the version to make the request against. If
   *         <var>null</var>, then the default version will be used
   * @return mixed if path isn't specified the contents of the report,
   *     otherwise the size in bytes of the downloaded report
   */
  public function DownloadReport($reportDefinition, $path = null,
      AdWordsUser $user, array $options = null) {
    if ($path === null || $path === '') {
      $this->adsUtilityRegistry->addUtility(AdsUtility::REPORT_UTILS_STRING);
    } else {
      $this->adsUtilityRegistry->addUtility(AdsUtility::REPORT_UTILS_FILE);
    }
    return ReportUtilsDelegate::DownloadReport($reportDefinition, $path, $user,
        $options);
  }

  /**
   * Downloads a report with AWQL. If the path parameter is specified it will be
   * downloaded to the file at that path, otherwise it will be downloaded to
   * memory and be returned as a string.
   * @param string $reportQuery the query to use for the report
   * @param string $path an optional path of the file to download the report to
   * @param AdWordsUser $user the user to retrieve report with
   * @param string $reportFormat: the report format to request
   * @param array $options the option to use when downloading the report:
   *     {string} server: the server to make the request to. If <var>null</var>,
   *         then the default server will be used
   *     {string} version: the version to make the request against. If
   *         <var>null</var>, then the default version will be used
   * @return mixed if path isn't specified the contents of the report,
   *     otherwise the size in bytes of the downloaded report
   */
  public function DownloadReportWithAwql($reportQuery, $path = null,
      AdWordsUser $user, $reportFormat, array $options = null) {
    if ($path === null || $path === '') {
      $this->adsUtilityRegistry->addUtility(AdsUtility::REPORT_UTILS_STRING);
    } else {
      $this->adsUtilityRegistry->addUtility(AdsUtility::REPORT_UTILS_FILE);
    }
    return ReportUtilsDelegate::DownloadReportWithAwql($reportQuery, $path,
        $user, $reportFormat, $options);
  }
}
