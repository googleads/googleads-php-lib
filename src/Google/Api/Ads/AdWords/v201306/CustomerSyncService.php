<?php
/**
 * Contains all client objects for the CustomerSyncService service.
 *
 * PHP version 5
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

/** Required classes. **/
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("DateTimeRange", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DateTimeRange {
  /**
   * @access public
   * @var string
   */
  public $min;

  /**
   * @access public
   * @var string
   */
  public $max;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateTimeRange";
  }

  public function __construct($min = NULL, $max = NULL) {
    $this->min = $min;
    $this->max = $max;
  }
}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SoapRequestHeader {
  /**
   * @access public
   * @var string
   */
  public $authToken;

  /**
   * @access public
   * @var string
   */
  public $clientCustomerId;

  /**
   * @access public
   * @var string
   */
  public $developerToken;

  /**
   * @access public
   * @var string
   */
  public $userAgent;

  /**
   * @access public
   * @var boolean
   */
  public $validateOnly;

  /**
   * @access public
   * @var boolean
   */
  public $partialFailure;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapHeader";
  }

  public function __construct($authToken = NULL, $clientCustomerId = NULL, $developerToken = NULL, $userAgent = NULL, $validateOnly = NULL, $partialFailure = NULL) {
    $this->authToken = $authToken;
    $this->clientCustomerId = $clientCustomerId;
    $this->developerToken = $developerToken;
    $this->userAgent = $userAgent;
    $this->validateOnly = $validateOnly;
    $this->partialFailure = $partialFailure;
  }
}}

if (!class_exists("SoapResponseHeader", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SoapResponseHeader {
  /**
   * @access public
   * @var string
   */
  public $requestId;

  /**
   * @access public
   * @var string
   */
  public $serviceName;

  /**
   * @access public
   * @var string
   */
  public $methodName;

  /**
   * @access public
   * @var integer
   */
  public $operations;

  /**
   * @access public
   * @var integer
   */
  public $responseTime;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapResponseHeader";
  }

  public function __construct($requestId = NULL, $serviceName = NULL, $methodName = NULL, $operations = NULL, $responseTime = NULL) {
    $this->requestId = $requestId;
    $this->serviceName = $serviceName;
    $this->methodName = $methodName;
    $this->operations = $operations;
    $this->responseTime = $responseTime;
  }
}}

if (!class_exists("ApiError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * 
 * 
 * 
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ApiError {
  /**
   * @access public
   * @var string
   */
  public $fieldPath;

  /**
   * @access public
   * @var string
   */
  public $trigger;

  /**
   * @access public
   * @var string
   */
  public $errorString;

  /**
   * @access public
   * @var string
   */
  public $ApiErrorType;

  private $_parameterMap = array (
    "ApiError.Type" => "ApiErrorType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ApplicationException", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApplicationException.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * 
 * 
 * 
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ApplicationException {
  /**
   * @access public
   * @var string
   */
  public $message;

  /**
   * @access public
   * @var string
   */
  public $ApplicationExceptionType;

  private $_parameterMap = array (
    "ApplicationException.Type" => "ApplicationExceptionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApplicationException";
  }

  public function __construct($message = NULL, $ApplicationExceptionType = NULL) {
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AuthenticationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AuthorizationErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AuthorizationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthorizationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ClientTermsErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ClientTermsErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClientTermsError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DatabaseErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DatabaseErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DatabaseError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DateErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DateErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DistinctErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DistinctErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DistinctError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("IdErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class IdErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IdError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class InternalApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NotEmptyErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class NotEmptyErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotEmptyError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NotWhitelistedErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class NotWhitelistedErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotWhitelistedError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("QuotaCheckErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class QuotaCheckErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaCheckError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RangeErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RangeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RateExceededErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RateExceededErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RateExceededError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ReadOnlyErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ReadOnlyErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReadOnlyError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequestErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RequestErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequestError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequiredErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RequiredErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("SizeLimitErrorReason", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 * 
 * 
 * 
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SizeLimitErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SizeLimitError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("StringLengthErrorReason", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class StringLengthErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringLengthError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupChangeData", FALSE)) {
/**
 * Holds information about a changed adgroup
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupChangeData {
  /**
   * @access public
   * @var integer
   */
  public $adGroupId;

  /**
   * @access public
   * @var tnsChangeStatus
   */
  public $adGroupChangeStatus;

  /**
   * @access public
   * @var integer[]
   */
  public $changedAds;

  /**
   * @access public
   * @var integer[]
   */
  public $changedCriteria;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedCriteria;

  /**
   * @access public
   * @var integer[]
   */
  public $changedFeeds;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedFeeds;

  /**
   * @access public
   * @var integer[]
   */
  public $changedAdGroupBidModifierCriteria;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedAdGroupBidModifierCriteria;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupChangeData";
  }

  public function __construct($adGroupId = NULL, $adGroupChangeStatus = NULL, $changedAds = NULL, $changedCriteria = NULL, $deletedCriteria = NULL, $changedFeeds = NULL, $deletedFeeds = NULL, $changedAdGroupBidModifierCriteria = NULL, $deletedAdGroupBidModifierCriteria = NULL) {
    $this->adGroupId = $adGroupId;
    $this->adGroupChangeStatus = $adGroupChangeStatus;
    $this->changedAds = $changedAds;
    $this->changedCriteria = $changedCriteria;
    $this->deletedCriteria = $deletedCriteria;
    $this->changedFeeds = $changedFeeds;
    $this->deletedFeeds = $deletedFeeds;
    $this->changedAdGroupBidModifierCriteria = $changedAdGroupBidModifierCriteria;
    $this->deletedAdGroupBidModifierCriteria = $deletedAdGroupBidModifierCriteria;
  }
}}

if (!class_exists("CampaignChangeData", FALSE)) {
/**
 * Holds information about a changed campaign and any ad groups under
 * that have changed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignChangeData {
  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var tnsChangeStatus
   */
  public $campaignChangeStatus;

  /**
   * @access public
   * @var AdGroupChangeData[]
   */
  public $changedAdGroups;

  /**
   * @access public
   * @var integer[]
   */
  public $addedCampaignCriteria;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedCampaignCriteria;

  /**
   * @access public
   * @var integer[]
   */
  public $addedAdExtensions;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedAdExtensions;

  /**
   * @access public
   * @var integer[]
   */
  public $changedFeeds;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedFeeds;

  /**
   * @access public
   * @var boolean
   */
  public $campaignTargetingChanged;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CampaignChangeData";
  }

  public function __construct($campaignId = NULL, $campaignChangeStatus = NULL, $changedAdGroups = NULL, $addedCampaignCriteria = NULL, $deletedCampaignCriteria = NULL, $addedAdExtensions = NULL, $deletedAdExtensions = NULL, $changedFeeds = NULL, $deletedFeeds = NULL, $campaignTargetingChanged = NULL) {
    $this->campaignId = $campaignId;
    $this->campaignChangeStatus = $campaignChangeStatus;
    $this->changedAdGroups = $changedAdGroups;
    $this->addedCampaignCriteria = $addedCampaignCriteria;
    $this->deletedCampaignCriteria = $deletedCampaignCriteria;
    $this->addedAdExtensions = $addedAdExtensions;
    $this->deletedAdExtensions = $deletedAdExtensions;
    $this->changedFeeds = $changedFeeds;
    $this->deletedFeeds = $deletedFeeds;
    $this->campaignTargetingChanged = $campaignTargetingChanged;
  }
}}

if (!class_exists("CustomerSyncError", FALSE)) {
/**
 * Represents CustomerSyncService specific errors
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerSyncError extends ApiError {
  /**
   * @access public
   * @var tnsCustomerSyncErrorReason
   */
  public $reason;

  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomerSyncError";
  }

  public function __construct($reason = NULL, $campaignId = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->campaignId = $campaignId;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("FeedChangeData", FALSE)) {
/**
 * Holds information about a changed feed and any feeds items within the feed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedChangeData {
  /**
   * @access public
   * @var integer
   */
  public $feedId;

  /**
   * @access public
   * @var tnsChangeStatus
   */
  public $feedChangeStatus;

  /**
   * @access public
   * @var integer[]
   */
  public $changedFeedItems;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedFeedItems;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FeedChangeData";
  }

  public function __construct($feedId = NULL, $feedChangeStatus = NULL, $changedFeedItems = NULL, $deletedFeedItems = NULL) {
    $this->feedId = $feedId;
    $this->feedChangeStatus = $feedChangeStatus;
    $this->changedFeedItems = $changedFeedItems;
    $this->deletedFeedItems = $deletedFeedItems;
  }
}}

if (!class_exists("CustomerChangeData", FALSE)) {
/**
 * Holds information about changes to a customer
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerChangeData {
  /**
   * @access public
   * @var CampaignChangeData[]
   */
  public $changedCampaigns;

  /**
   * @access public
   * @var FeedChangeData[]
   */
  public $changedFeeds;

  /**
   * @access public
   * @var string
   */
  public $lastChangeTimestamp;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomerChangeData";
  }

  public function __construct($changedCampaigns = NULL, $changedFeeds = NULL, $lastChangeTimestamp = NULL) {
    $this->changedCampaigns = $changedCampaigns;
    $this->changedFeeds = $changedFeeds;
    $this->lastChangeTimestamp = $lastChangeTimestamp;
  }
}}

if (!class_exists("CustomerSyncSelector", FALSE)) {
/**
 * A filter for selecting change history data for a customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerSyncSelector {
  /**
   * @access public
   * @var DateTimeRange
   */
  public $dateTimeRange;

  /**
   * @access public
   * @var integer[]
   */
  public $campaignIds;

  /**
   * @access public
   * @var integer[]
   */
  public $feedIds;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomerSyncSelector";
  }

  public function __construct($dateTimeRange = NULL, $campaignIds = NULL, $feedIds = NULL) {
    $this->dateTimeRange = $dateTimeRange;
    $this->campaignIds = $campaignIds;
    $this->feedIds = $feedIds;
  }
}}

if (!class_exists("ChangeStatus", FALSE)) {
/**
 * An enum used to classify the types of changes that have been made to
 * an adgroup/campaign during a specified date range.  This only refers
 * to the field of the entity itself, and not its children.
 * 
 * For example, if an AdGroup name changed, this status would be FIELDS_CHANGED,
 * but if only bids on keywords belonging an AdGroup were changed this
 * status would be FIELDS_UNCHANGED.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ChangeStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ChangeStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("CustomerSyncErrorReason", FALSE)) {
/**
 * The request attempted to access a campaign that either does not
 * exist or belongs to a different account.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerSyncErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomerSyncError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CustomerSyncServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns information about changed entities inside a customer's account.
 * 
 * @param selector Specifies the filter for selecting changehistory events for a customer.
 * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
 * changed at each level.  All Campaigns that are requested in the selector will be returned,
 * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerSyncServiceGet {
  /**
   * @access public
   * @var CustomerSyncSelector
   */
  public $selector;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($selector = NULL) {
    $this->selector = $selector;
  }
}}

if (!class_exists("CustomerSyncServiceGetResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerSyncServiceGetResponse {
  /**
   * @access public
   * @var CustomerChangeData
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/ch/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AuthenticationError extends ApiError {
  /**
   * @access public
   * @var tnsAuthenticationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("AuthorizationError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AuthorizationError extends ApiError {
  /**
   * @access public
   * @var tnsAuthorizationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthorizationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ClientTermsError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ClientTermsError extends ApiError {
  /**
   * @access public
   * @var tnsClientTermsErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClientTermsError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DateError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DateError extends ApiError {
  /**
   * @access public
   * @var tnsDateErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DistinctError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DistinctError extends ApiError {
  /**
   * @access public
   * @var tnsDistinctErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DistinctError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("IdError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class IdError extends ApiError {
  /**
   * @access public
   * @var tnsIdErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IdError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("InternalApiError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class InternalApiError extends ApiError {
  /**
   * @access public
   * @var tnsInternalApiErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("NotEmptyError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class NotEmptyError extends ApiError {
  /**
   * @access public
   * @var tnsNotEmptyErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotEmptyError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("NotWhitelistedError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class NotWhitelistedError extends ApiError {
  /**
   * @access public
   * @var tnsNotWhitelistedErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotWhitelistedError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("QuotaCheckError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class QuotaCheckError extends ApiError {
  /**
   * @access public
   * @var tnsQuotaCheckErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaCheckError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RangeError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RangeError extends ApiError {
  /**
   * @access public
   * @var tnsRangeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RateExceededError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RateExceededError extends ApiError {
  /**
   * @access public
   * @var tnsRateExceededErrorReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $rateName;

  /**
   * @access public
   * @var string
   */
  public $rateScope;

  /**
   * @access public
   * @var integer
   */
  public $retryAfterSeconds;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RateExceededError";
  }

  public function __construct($reason = NULL, $rateName = NULL, $rateScope = NULL, $retryAfterSeconds = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->rateName = $rateName;
    $this->rateScope = $rateScope;
    $this->retryAfterSeconds = $retryAfterSeconds;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ReadOnlyError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ReadOnlyError extends ApiError {
  /**
   * @access public
   * @var tnsReadOnlyErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReadOnlyError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RequestError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RequestError extends ApiError {
  /**
   * @access public
   * @var tnsRequestErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequestError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RequiredError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RequiredError extends ApiError {
  /**
   * @access public
   * @var tnsRequiredErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("SizeLimitError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SizeLimitError extends ApiError {
  /**
   * @access public
   * @var tnsSizeLimitErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SizeLimitError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("StringLengthError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class StringLengthError extends ApiError {
  /**
   * @access public
   * @var tnsStringLengthErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringLengthError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DatabaseError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DatabaseError extends ApiError {
  /**
   * @access public
   * @var tnsDatabaseErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DatabaseError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ApiException", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ApiException extends ApplicationException {
  /**
   * @access public
   * @var ApiError[]
   */
  public $errors;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiException";
  }

  public function __construct($errors = NULL, $message = NULL, $ApplicationExceptionType = NULL) {
    parent::__construct();
    $this->errors = $errors;
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("CustomerSyncService", FALSE)) {
/**
 * CustomerSyncService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class CustomerSyncService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "CustomerSyncServiceGetResponse",
    "get" => "CustomerSyncServiceGet",
    "mutate" => "CustomerSyncServiceMutate",
    "mutateResponse" => "CustomerSyncServiceMutateResponse",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "AuthenticationError" => "AuthenticationError",
    "ApiError" => "ApiError",
    "AuthorizationError" => "AuthorizationError",
    "ClientTermsError" => "ClientTermsError",
    "DateError" => "DateError",
    "DateTimeRange" => "DateTimeRange",
    "DistinctError" => "DistinctError",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "SizeLimitError" => "SizeLimitError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StringLengthError" => "StringLengthError",
    "DatabaseError" => "DatabaseError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "AdGroupChangeData" => "AdGroupChangeData",
    "CampaignChangeData" => "CampaignChangeData",
    "CustomerSyncError" => "CustomerSyncError",
    "FeedChangeData" => "FeedChangeData",
    "CustomerChangeData" => "CustomerChangeData",
    "CustomerSyncSelector" => "CustomerSyncSelector",
    "ChangeStatus" => "ChangeStatus",
    "CustomerSyncError.Reason" => "CustomerSyncErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/ch/v201306/CustomerSyncService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CustomerSyncService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CustomerSyncService', 'https://adwords.google.com/api/adwords/ch/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns information about changed entities inside a customer's account.
   * 
   * @param selector Specifies the filter for selecting changehistory events for a customer.
   * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
   * changed at each level.  All Campaigns that are requested in the selector will be returned,
   * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
   */
  public function get($selector) {
    $arg = new CustomerSyncServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


}}