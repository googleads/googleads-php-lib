<?php
/**
 * A helper class for testing XML serialization and deserialization.
 *
 * PHP version 5
 *
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
 * @package    GoogleApiAdsAdWordsUtilv201506
 * @subpackage Testing
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/AdWords/Util/v201506/ReportClasses.php';
require_once 'Google/Api/Ads/AdWords/v201506/AdGroupService.php';
require_once 'Google/Api/Ads/AdWords/v201506/CampaignService.php';
require_once 'Google/Api/Ads/AdWords/v201506/MutateJobService.php';

class XmlTestHelper {

  public static $NAMESPACED_MUTATE_REQUEST_XML;
  public static $MUTATE_REQUEST_XML;
  public static $REPORT_DOWNLOAD_ERROR_XML;
  public static $REPORT_DOWNLOAD_ERROR_FORMATTED_XML;
  public static $EMPTY_REPORT_DOWNLOAD_ERROR_XML;

  public static $REPORT_DOWNLOAD_ERROR_OBJECT;
  public static $MUTATE_REQUEST_OBJECT;

  /**
   * Load all XML payloads and create relevant AdWords objects for testing with
   * the payloads.
   */
  public static function Init() {
    self::$NAMESPACED_MUTATE_REQUEST_XML =
        self::LoadXmlPayload(dirname(__FILE__)
            . '/mutate_request_with_namespaces.xml');
    self::$MUTATE_REQUEST_XML =
        self::LoadXmlPayload(dirname(__FILE__) . '/mutate_request.xml');
    self::$REPORT_DOWNLOAD_ERROR_XML =
        self::LoadXmlPayload(dirname(__FILE__) . '/report_download_error.xml');
    self::$REPORT_DOWNLOAD_ERROR_FORMATTED_XML =
        self::LoadXmlPayload(
            dirname(__FILE__) . '/report_download_error_formatted.xml');
    self::$EMPTY_REPORT_DOWNLOAD_ERROR_XML =
        self::LoadXmlPayload(dirname(__FILE__)
            . '/empty_report_download_error.xml');

    self::InitReportDownloadErrorObject();
    self::InitMutateRequestObject();
  }

  /**
   * Create relevant AdWords objects for testing with report download error
   * payload.
   */
  private static function InitReportDownloadErrorObject() {
    $invalidFieldNameApiError = new ApiError(
        '',
        'Test',
        'ReportDefinitionError.INVALID_FIELD_NAME_FOR_REPORT'
    );
    $noEnumApiError = new ApiError(
        '',
        'Test2',
        'NO_ENUMS_FOR_THIS_COLUMN_NAME'
    );
    XmlTestHelper::$REPORT_DOWNLOAD_ERROR_OBJECT = new ReportDownloadError();
    XmlTestHelper::$REPORT_DOWNLOAD_ERROR_OBJECT->ApiError =
        array($invalidFieldNameApiError, $noEnumApiError);
  }

  /**
   * Create relevant AdWords objects for testing with mutate request payload.
   */
  private static function InitMutateRequestObject() {
    $campaign = new Campaign();
    $campaign->id = -1;
    $campaign->name = 'Test campaign&<>"\'';
    $campaign->advertisingChannelType = 'SEARCH';
    $campaign->status = 'ENABLED';
    $campaignOperation = new CampaignOperation();
    $campaignOperation->operand = $campaign;
    $campaignOperation->operator = 'ADD';
    $operations[] = $campaignOperation;

    $adGroup = new AdGroup();
    $adGroup->id = -2;
    $adGroup->campaignId = -1;
    $adGroup->name = 'Test ad group';
    $adGroupOperation = new AdGroupOperation();
    $adGroupOperation->operand = $adGroup;
    $adGroupOperation->operator = 'ADD';
    $operations[] = $adGroupOperation;

    XmlTestHelper::$MUTATE_REQUEST_OBJECT = new MutateJobServiceMutate();
    XmlTestHelper::$MUTATE_REQUEST_OBJECT->operations = $operations;
  }

  /**
   * Load XML payload from the specified file.
   * @param string $fileName the name of file to be loaded
   * @return string a trimmed XML string
   */
  private static function LoadXmlPayload($fileName) {
    // Use trim to eliminate a new-line character at the end of the file read by
    // file_get_contents.
    return trim(file_get_contents($fileName));
  }
}
XmlTestHelper::Init();
