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
 * @package    GoogleApiAdsAdWordsUtilv201605
 * @subpackage Testing
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'FakeClasses.php';
require_once 'Google/Api/Ads/AdWords/Lib/AdWordsConstants.php';
require_once 'Google/Api/Ads/AdWords/Util/v201605/ReportClasses.php';
require_once 'Google/Api/Ads/AdWords/Util/v201605/BatchJobClasses.php';
require_once 'Google/Api/Ads/AdWords/v201605/CampaignService.php';
require_once 'Google/Api/Ads/AdWords/v201605/CampaignCriterionService.php';
require_once 'Google/Api/Ads/AdWords/v201605/AdGroupService.php';

class XmlTestHelper {

  public static $NAMESPACED_MUTATE_REQUEST_XML;
  public static $MUTATE_REQUEST_XML;
  public static $NAMESPACED_MUTATE_RESPONSE_XML;
  public static $BATCH_JOB_MUTATE_RESPONSE_XML;
  public static $SUCCESS_BATCH_JOB_MUTATE_RESPONSE_XML;
  public static $REPORT_DOWNLOAD_ERROR_XML;
  public static $REPORT_DOWNLOAD_ERROR_FORMATTED_XML;
  public static $EMPTY_REPORT_DOWNLOAD_ERROR_XML;
  public static $REPORT_DEFINITION_XML;

  public static $REPORT_DOWNLOAD_ERROR_OBJECT;
  public static $MUTATE_REQUEST_OBJECT;
  public static $MUTATE_RESPONSE_OBJECT;
  public static $BATCH_JOB_MUTATE_RESPONSE_OBJECT;
  public static $SUCCESS_BATCH_JOB_MUTATE_RESPONSE_OBJECT;
  public static $REPORT_DEFINITION_OBJECT;

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
    self::$NAMESPACED_MUTATE_RESPONSE_XML =
        self::LoadXmlPayload(dirname(__FILE__)
            . '/mutate_response_with_namespaces.xml');
    self::$SUCCESS_BATCH_JOB_MUTATE_RESPONSE_XML =
        self::LoadXmlPayload(dirname(__FILE__)
            . '/success_batch_job_mutate_response.xml');
    self::$BATCH_JOB_MUTATE_RESPONSE_XML =
        self::LoadXmlPayload(dirname(__FILE__)
            . '/batch_job_mutate_response.xml');
    self::$REPORT_DOWNLOAD_ERROR_XML =
        self::LoadXmlPayload(dirname(__FILE__) . '/report_download_error.xml');
    self::$REPORT_DOWNLOAD_ERROR_FORMATTED_XML =
        self::LoadXmlPayload(
            dirname(__FILE__) . '/report_download_error_formatted.xml');
    self::$EMPTY_REPORT_DOWNLOAD_ERROR_XML =
        self::LoadXmlPayload(dirname(__FILE__)
            . '/empty_report_download_error.xml');
    self::$REPORT_DEFINITION_XML =
        self::LoadXmlPayload(dirname(__FILE__) . '/report_definition.xml');

    self::InitReportDownloadErrorObject();
    self::InitMutateRequestObject();
    self::InitMutateResponseObject();
    self::InitBatchJobMutateResponseObject();
    self::InitSuccessBatchJobMutateResponseObject();
    self::InitReportDefinitionObject();
  }

  /**
   * Create a relevant AdWords object for testing with report download error
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
    self::$REPORT_DOWNLOAD_ERROR_OBJECT = new ReportDownloadError();
    self::$REPORT_DOWNLOAD_ERROR_OBJECT->ApiError =
        array($invalidFieldNameApiError, $noEnumApiError);
  }

  /**
   * Create a relevant AdWords object for testing with mutate request payload.
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

    self::$MUTATE_REQUEST_OBJECT = new BatchJobOpsMutate();
    self::$MUTATE_REQUEST_OBJECT->operations = $operations;
  }

  /**
   * Create a relevant AdWords object for testing with mutate response payload.
   */
  private static function InitMutateResponseObject() {
    self::$MUTATE_RESPONSE_OBJECT =
        new CampaignCriterionServiceMutateResponse();
    $returnValue = new CampaignCriterionReturnValue();
    $returnValue->ListReturnValueType = 'CampaignCriterionReturnValue';
    self::$MUTATE_RESPONSE_OBJECT->rval = $returnValue;

    // result 1
    $campaignCriterion = new CampaignCriterion();
    $campaignCriterion->campaignId = 1111;
    $campaignCriterion->isNegative = false;

    $criterion = new Language();
    $criterion->id = 1000;
    $criterion->type = 'LANGUAGE';
    $criterion->code = 'en';
    $criterion->name = 'English';
    $criterion->CriterionType = 'Language';
    $campaignCriterion->criterion = $criterion;
    $campaignCriterion->CampaignCriterionType = 'CampaignCriterion';
    $returnValue->value[] = $campaignCriterion;

    // result 2
    $campaignCriterion = new NegativeCampaignCriterion();
    $campaignCriterion->campaignId = 2222;
    $campaignCriterion->isNegative = true;

    $criterion = new Location();
    $criterion->id = 2276;
    $criterion->type = 'LOCATION';
    $criterion->CriterionType = 'Location';
    $campaignCriterion->criterion = $criterion;
    $campaignCriterion->CampaignCriterionType = 'NegativeCampaignCriterion';
    $returnValue->value[] = $campaignCriterion;
  }

  /**
   * Create a relevant AdWords object for testing with success batch job mutate
   * response payload.
   */
  private static function InitSuccessBatchJobMutateResponseObject() {
    $operand = new Budget(12345, 'Test Budget');

    $mutateResult = new MutateResult();
    $mutateResult->result = $operand;
    $mutateResult->index = 0;
    self::$SUCCESS_BATCH_JOB_MUTATE_RESPONSE_OBJECT =
        new BatchJobOpsMutateResponse();
    self::$SUCCESS_BATCH_JOB_MUTATE_RESPONSE_OBJECT->rval[] = $mutateResult;
  }

  /**
   * Create a relevant AdWords object for testing with batch job mutate
   * response payload.
   */
  private static function InitBatchJobMutateResponseObject() {
    $apiError = new FakeCriterionPolicyError();
    $apiError->fieldPath = 'operations[0].operand.criterion.text';
    $apiError->trigger = 'text';
    $apiError->errorString = 'CriterionPolicyError.POLICY_ERROR';
    $apiError->key = new PolicyViolationKey();
    $apiError->key->policyName = 'pharma';
    $apiError->key->violatingText = 'text';
    $apiError->externalPolicyName = 'Online pharmacy certification required';
    $apiError->externalPolicyUrl = '';
    $apiError->externalPolicyDescription = 'Description';
    $apiError->isExemptable = true;
    $policyViolationErrorPart = new PolicyViolationErrorPart();
    $policyViolationErrorPart->index = 0;
    $policyViolationErrorPart->length = 3;
    $apiError->violatingParts = array($policyViolationErrorPart);
    $apiError->ApiErrorType = 'CriterionPolicyError';

    $errorList = new ErrorList();
    $errorList->errors = array($apiError);

    $mutateResult = new MutateResult();
    $mutateResult->errorList = $errorList;
    $mutateResult->index = 0;
    self::$BATCH_JOB_MUTATE_RESPONSE_OBJECT = new BatchJobOpsMutateResponse();
    self::$BATCH_JOB_MUTATE_RESPONSE_OBJECT->rval[] = $mutateResult;
  }

  /**
   * Create a relevant AdWords object for testing with report definition
   * payload.
   */
  private static function InitReportDefinitionObject() {
    $selector = new Selector();
    $selector->fields =
        array('CampaignId', 'Id', 'Impressions', 'Clicks', 'Cost');
    $selector->predicates[] =
        new Predicate('Conversions', 'GREATER_THAN', array(2.0));
    $selector->predicates[] =
        new Predicate('AllConversions', 'LESS_THAN', array(50.5221));
    $selector->predicates[] =
        new Predicate('Clicks', 'GREATER_THAN', array(3400));
    $selector->predicates[] =
        new Predicate('AverageCost', 'LESS_THAN',
            array(2.05 * AdWordsConstants::MICROS_PER_DOLLAR));

    self::$REPORT_DEFINITION_OBJECT = new ReportDefinition();
    self::$REPORT_DEFINITION_OBJECT->selector = $selector;
    self::$REPORT_DEFINITION_OBJECT->reportName =
        'Custom Adgroup Performance Report';
    self::$REPORT_DEFINITION_OBJECT->dateRangeType = 'LAST_7_DAYS';
    self::$REPORT_DEFINITION_OBJECT->reportType = 'ADGROUP_PERFORMANCE_REPORT';
    self::$REPORT_DEFINITION_OBJECT->downloadFormat = 'CSV';
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
