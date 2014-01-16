<?php
/**
 * Contains all client objects for the AdGroupAdService service.
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
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

/** Required classes. **/
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("Ad", FALSE)) {
/**
 * The base class of all ad types. To update basic ad fields,
 * you can construct an {@code Ad} object (instead of
 * the ad's concrete type) with the appropriate fields set.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Ad {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $url;

  /**
   * @access public
   * @var string
   */
  public $displayUrl;

  /**
   * @access public
   * @var integer
   */
  public $devicePreference;

  /**
   * @access public
   * @var string
   */
  public $AdType;

  private $_parameterMap = array (
    "Ad.Type" => "AdType",
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Ad";
  }

  public function __construct($id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("AdGroupAd", FALSE)) {
/**
 * Represents an ad in an ad group.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAd {
  /**
   * @access public
   * @var integer
   */
  public $adGroupId;

  /**
   * @access public
   * @var Ad
   */
  public $ad;

  /**
   * @access public
   * @var AdGroupAdExperimentData
   */
  public $experimentData;

  /**
   * @access public
   * @var tnsAdGroupAdStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsAdGroupAdApprovalStatus
   */
  public $approvalStatus;

  /**
   * @access public
   * @var string[]
   */
  public $disapprovalReasons;

  /**
   * @access public
   * @var boolean
   */
  public $trademarkDisapproved;

  /**
   * @access public
   * @var String_StringMapEntry[]
   */
  public $forwardCompatibilityMap;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAd";
  }

  public function __construct($adGroupId = NULL, $ad = NULL, $experimentData = NULL, $status = NULL, $approvalStatus = NULL, $disapprovalReasons = NULL, $trademarkDisapproved = NULL, $forwardCompatibilityMap = NULL) {
    $this->adGroupId = $adGroupId;
    $this->ad = $ad;
    $this->experimentData = $experimentData;
    $this->status = $status;
    $this->approvalStatus = $approvalStatus;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->trademarkDisapproved = $trademarkDisapproved;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
  }
}}

if (!class_exists("AdGroupAdExperimentData", FALSE)) {
/**
 * Data associated with an advertiser experiment for an AdGroupAd
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdExperimentData {
  /**
   * @access public
   * @var integer
   */
  public $experimentId;

  /**
   * @access public
   * @var tnsExperimentDeltaStatus
   */
  public $experimentDeltaStatus;

  /**
   * @access public
   * @var tnsExperimentDataStatus
   */
  public $experimentDataStatus;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAdExperimentData";
  }

  public function __construct($experimentId = NULL, $experimentDeltaStatus = NULL, $experimentDataStatus = NULL) {
    $this->experimentId = $experimentId;
    $this->experimentDeltaStatus = $experimentDeltaStatus;
    $this->experimentDataStatus = $experimentDataStatus;
  }
}}

if (!class_exists("AdUnionId", FALSE)) {
/**
 * Represents an id indicating a grouping of Ads under some heuristic.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdUnionId {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $AdUnionIdType;

  private $_parameterMap = array (
    "AdUnionId.Type" => "AdUnionIdType",
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnionId";
  }

  public function __construct($id = NULL, $AdUnionIdType = NULL) {
    $this->id = $id;
    $this->AdUnionIdType = $AdUnionIdType;
  }
}}

if (!class_exists("ApiError", FALSE)) {
/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * Base class for exceptions.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * Errors encountered when trying to authorize a user.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("BetaError", FALSE)) {
/**
 * Errors that are thrown when a Beta feature is accessed incorrectly.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BetaError extends ApiError {
  /**
   * @access public
   * @var tnsBetaErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BetaError";
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
 * Error due to user not accepting the AdWords terms of service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("DatabaseError", FALSE)) {
/**
 * Errors that are thrown due to a database access problem.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("DateError", FALSE)) {
/**
 * Errors associated with invalid dates and date ranges.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("DateRange", FALSE)) {
/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DateRange {
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateRange";
  }

  public function __construct($min = NULL, $max = NULL) {
    $this->min = $min;
    $this->max = $max;
  }
}}

if (!class_exists("DeprecatedAd", FALSE)) {
/**
 * Represents a deprecated ad.
 * 
 * Deprecated ads can be deleted, but cannot be created.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DeprecatedAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsDeprecatedAdType
   */
  public $type;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeprecatedAd";
  }

  public function __construct($name = NULL, $type = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->name = $name;
    $this->type = $type;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("Dimensions", FALSE)) {
/**
 * Represents a simple height-width dimension.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Dimensions {
  /**
   * @access public
   * @var integer
   */
  public $width;

  /**
   * @access public
   * @var integer
   */
  public $height;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Dimensions";
  }

  public function __construct($width = NULL, $height = NULL) {
    $this->width = $width;
    $this->height = $height;
  }
}}

if (!class_exists("DistinctError", FALSE)) {
/**
 * Errors related to distinct ids or content.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("EntityCountLimitExceeded", FALSE)) {
/**
 * Signals that an entity count limit was exceeded for some level.
 * For example, too many criteria for a campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class EntityCountLimitExceeded extends ApiError {
  /**
   * @access public
   * @var tnsEntityCountLimitExceededReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $enclosingId;

  /**
   * @access public
   * @var integer
   */
  public $limit;

  /**
   * @access public
   * @var string
   */
  public $accountLimitType;

  /**
   * @access public
   * @var integer
   */
  public $existingCount;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityCountLimitExceeded";
  }

  public function __construct($reason = NULL, $enclosingId = NULL, $limit = NULL, $accountLimitType = NULL, $existingCount = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->enclosingId = $enclosingId;
    $this->limit = $limit;
    $this->accountLimitType = $accountLimitType;
    $this->existingCount = $existingCount;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("EntityNotFound", FALSE)) {
/**
 * An id did not correspond to an entity, or it referred to an entity which does not belong to the
 * customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class EntityNotFound extends ApiError {
  /**
   * @access public
   * @var tnsEntityNotFoundReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityNotFound";
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

if (!class_exists("ExemptionRequest", FALSE)) {
/**
 * A request to be exempted from a {@link PolicyViolationError}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExemptionRequest {
  /**
   * @access public
   * @var PolicyViolationKey
   */
  public $key;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ExemptionRequest";
  }

  public function __construct($key = NULL) {
    $this->key = $key;
  }
}}

if (!class_exists("ForwardCompatibilityError", FALSE)) {
/**
 * A ForwardComptibilityError represents possible errors when using the forwardCompatibilityMap
 * in some of the common services.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ForwardCompatibilityError extends ApiError {
  /**
   * @access public
   * @var tnsForwardCompatibilityErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ForwardCompatibilityError";
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
 * Errors associated with the ids.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("ImageAd", FALSE)) {
/**
 * Represents an ImageAd.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ImageAd extends Ad {
  /**
   * @access public
   * @var Image
   */
  public $image;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var integer
   */
  public $adToCopyImageFrom;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageAd";
  }

  public function __construct($image = NULL, $name = NULL, $adToCopyImageFrom = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->image = $image;
    $this->name = $name;
    $this->adToCopyImageFrom = $adToCopyImageFrom;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("ImageError", FALSE)) {
/**
 * Error class for errors associated with parsing image data.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ImageError extends ApiError {
  /**
   * @access public
   * @var tnsImageErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageError";
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
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("ListReturnValue", FALSE)) {
/**
 * Base list return value type.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ListReturnValue {
  /**
   * @access public
   * @var string
   */
  public $ListReturnValueType;

  private $_parameterMap = array (
    "ListReturnValue.Type" => "ListReturnValueType",
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ListReturnValue";
  }

  public function __construct($ListReturnValueType = NULL) {
    $this->ListReturnValueType = $ListReturnValueType;
  }
}}

if (!class_exists("Media", FALSE)) {
/**
 * Represents some kind of media.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Media {
  /**
   * @access public
   * @var integer
   */
  public $mediaId;

  /**
   * @access public
   * @var tnsMediaMediaType
   */
  public $type;

  /**
   * @access public
   * @var integer
   */
  public $referenceId;

  /**
   * @access public
   * @var Media_Size_DimensionsMapEntry[]
   */
  public $dimensions;

  /**
   * @access public
   * @var Media_Size_StringMapEntry[]
   */
  public $urls;

  /**
   * @access public
   * @var tnsMediaMimeType
   */
  public $mimeType;

  /**
   * @access public
   * @var string
   */
  public $sourceUrl;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var integer
   */
  public $fileSize;

  /**
   * @access public
   * @var string
   */
  public $creationTime;

  /**
   * @access public
   * @var string
   */
  public $MediaType;

  private $_parameterMap = array (
    "Media.Type" => "MediaType",
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Media";
  }

  public function __construct($mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }
}}

if (!class_exists("MediaError", FALSE)) {
/**
 * Error class for media related errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MediaError extends ApiError {
  /**
   * @access public
   * @var tnsMediaErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MediaError";
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

if (!class_exists("Media_Size_DimensionsMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Size
 * and value of type Dimensions.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Media_Size_DimensionsMapEntry {
  /**
   * @access public
   * @var tnsMediaSize
   */
  public $key;

  /**
   * @access public
   * @var Dimensions
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Media_Size_DimensionsMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("Media_Size_StringMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Size
 * and value of type String.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Media_Size_StringMapEntry {
  /**
   * @access public
   * @var tnsMediaSize
   */
  public $key;

  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Media_Size_StringMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("MobileAd", FALSE)) {
/**
 * Represents a mobile ad.
 * 
 * <p>
 * A mobile ad can contain a click-to-call phone number, a link to a website,
 * or both.  You specify which features you want by setting certain fields, as
 * shown in the following table.  For example, to create a click-to-call mobile
 * ad, set the fields in the <b>Click-to-call</b> column. A hyphen indicates
 * that you should not set the corresponding field.
 * </p>
 * <p>
 * For more information, see
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
 * Create a mobile ad</a>.
 * </p>
 * 
 * <table summary="" style="clear: none">
 * <tr> <th scope="col"> Click-to-call </th>
 * <th scope="col"> Website       </th>
 * <th scope="col"> Both          </th></tr>
 * <tr> <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * phoneNumber     <br />
 * countryCode     <br />
 * businessName    <br />
 * -               <br />
 * -               <br />
 * -               <br />
 * </td>
 * <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * -               <br />
 * -               <br />
 * -               <br />
 * displayUrl      <br />
 * destinationUrl  <br />
 * markupLanguages <br />
 * </td>
 * <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * phoneNumber     <br />
 * countryCode     <br />
 * businessName    <br />
 * displayUrl      <br />
 * destinationUrl  <br />
 * markupLanguages <br />
 * </td></tr>
 * </table>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MobileAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $headline;

  /**
   * @access public
   * @var string
   */
  public $description;

  /**
   * @access public
   * @var tnsMarkupLanguageType[]
   */
  public $markupLanguages;

  /**
   * @access public
   * @var string[]
   */
  public $mobileCarriers;

  /**
   * @access public
   * @var string
   */
  public $businessName;

  /**
   * @access public
   * @var string
   */
  public $countryCode;

  /**
   * @access public
   * @var string
   */
  public $phoneNumber;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileAd";
  }

  public function __construct($headline = NULL, $description = NULL, $markupLanguages = NULL, $mobileCarriers = NULL, $businessName = NULL, $countryCode = NULL, $phoneNumber = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->headline = $headline;
    $this->description = $description;
    $this->markupLanguages = $markupLanguages;
    $this->mobileCarriers = $mobileCarriers;
    $this->businessName = $businessName;
    $this->countryCode = $countryCode;
    $this->phoneNumber = $phoneNumber;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("MobileImageAd", FALSE)) {
/**
 * Represents a mobile image ad.
 * 
 * <p>For more information, see
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
 * Create a mobile ad</a>.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MobileImageAd extends Ad {
  /**
   * @access public
   * @var tnsMarkupLanguageType[]
   */
  public $markupLanguages;

  /**
   * @access public
   * @var string[]
   */
  public $mobileCarriers;

  /**
   * @access public
   * @var Image
   */
  public $image;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileImageAd";
  }

  public function __construct($markupLanguages = NULL, $mobileCarriers = NULL, $image = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->markupLanguages = $markupLanguages;
    $this->mobileCarriers = $mobileCarriers;
    $this->image = $image;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("NewEntityCreationError", FALSE)) {
/**
 * Error associated with creation of new entities using
 * {@link com.google.ads.api.services.common.id.TempId}s.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NewEntityCreationError extends ApiError {
  /**
   * @access public
   * @var tnsNewEntityCreationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NewEntityCreationError";
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
 * Errors corresponding with violation of a NOT EMPTY check.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * Indicates that the customer is not whitelisted for accessing the API.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("NullError", FALSE)) {
/**
 * Errors associated with violation of a NOT NULL check.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NullError extends ApiError {
  /**
   * @access public
   * @var tnsNullErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError";
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

if (!class_exists("Operation", FALSE)) {
/**
 * This represents an operation that includes an operator and an operand
 * specified type.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Operation {
  /**
   * @access public
   * @var tnsOperator
   */
  public $operator;

  /**
   * @access public
   * @var string
   */
  public $OperationType;

  private $_parameterMap = array (
    "Operation.Type" => "OperationType",
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Operation";
  }

  public function __construct($operator = NULL, $OperationType = NULL) {
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("OperationAccessDenied", FALSE)) {
/**
 * Operation not permitted due to the invoked service's access policy.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class OperationAccessDenied extends ApiError {
  /**
   * @access public
   * @var tnsOperationAccessDeniedReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperationAccessDenied";
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

if (!class_exists("OrderBy", FALSE)) {
/**
 * Specifies how the resulting information should be sorted.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class OrderBy {
  /**
   * @access public
   * @var string
   */
  public $field;

  /**
   * @access public
   * @var tnsSortOrder
   */
  public $sortOrder;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OrderBy";
  }

  public function __construct($field = NULL, $sortOrder = NULL) {
    $this->field = $field;
    $this->sortOrder = $sortOrder;
  }
}}

if (!class_exists("Page", FALSE)) {
/**
 * Contains the results from a get call.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Page {
  /**
   * @access public
   * @var integer
   */
  public $totalNumEntries;

  /**
   * @access public
   * @var string
   */
  public $PageType;

  private $_parameterMap = array (
    "Page.Type" => "PageType",
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Page";
  }

  public function __construct($totalNumEntries = NULL, $PageType = NULL) {
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }
}}

if (!class_exists("Paging", FALSE)) {
/**
 * Specifies the page of results to return in the response. A page is specified
 * by the result position to start at and the maximum number of results to
 * return.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Paging {
  /**
   * @access public
   * @var integer
   */
  public $startIndex;

  /**
   * @access public
   * @var integer
   */
  public $numberResults;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Paging";
  }

  public function __construct($startIndex = NULL, $numberResults = NULL) {
    $this->startIndex = $startIndex;
    $this->numberResults = $numberResults;
  }
}}

if (!class_exists("PagingError", FALSE)) {
/**
 * Error codes for pagination.
 * See {@link com.google.ads.api.services.common.pagination.Paging}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PagingError extends ApiError {
  /**
   * @access public
   * @var tnsPagingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PagingError";
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

if (!class_exists("PolicyViolationError", FALSE)) {
/**
 * Represents violations of a single policy by some text in a field.
 * 
 * Violations of a single policy by the same string in multiple places
 * within a field is reported in one instance of this class and only one
 * exemption needs to be filed.
 * Violations of a single policy by two different strings is reported
 * as two separate instances of this class.
 * 
 * e.g. If 'ACME' violates 'capitalization' and occurs twice in a text ad it
 * would be represented by one instance. If the ad also contains 'INC' which
 * also violates 'capitalization' it would be represented in a separate
 * instance.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PolicyViolationError extends ApiError {
  /**
   * @access public
   * @var PolicyViolationKey
   */
  public $key;

  /**
   * @access public
   * @var string
   */
  public $externalPolicyName;

  /**
   * @access public
   * @var string
   */
  public $externalPolicyUrl;

  /**
   * @access public
   * @var string
   */
  public $externalPolicyDescription;

  /**
   * @access public
   * @var boolean
   */
  public $isExemptable;

  /**
   * @access public
   * @var PolicyViolationErrorPart[]
   */
  public $violatingParts;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PolicyViolationError";
  }

  public function __construct($key = NULL, $externalPolicyName = NULL, $externalPolicyUrl = NULL, $externalPolicyDescription = NULL, $isExemptable = NULL, $violatingParts = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->key = $key;
    $this->externalPolicyName = $externalPolicyName;
    $this->externalPolicyUrl = $externalPolicyUrl;
    $this->externalPolicyDescription = $externalPolicyDescription;
    $this->isExemptable = $isExemptable;
    $this->violatingParts = $violatingParts;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("PolicyViolationErrorPart", FALSE)) {
/**
 * Points to a substring within an ad field or criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PolicyViolationErrorPart {
  /**
   * @access public
   * @var integer
   */
  public $index;

  /**
   * @access public
   * @var integer
   */
  public $length;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PolicyViolationError.Part";
  }

  public function __construct($index = NULL, $length = NULL) {
    $this->index = $index;
    $this->length = $length;
  }
}}

if (!class_exists("PolicyViolationKey", FALSE)) {
/**
 * Key of the violation. The key is used for referring to a violation when
 * filing an exemption request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PolicyViolationKey {
  /**
   * @access public
   * @var string
   */
  public $policyName;

  /**
   * @access public
   * @var string
   */
  public $violatingText;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PolicyViolationKey";
  }

  public function __construct($policyName = NULL, $violatingText = NULL) {
    $this->policyName = $policyName;
    $this->violatingText = $violatingText;
  }
}}

if (!class_exists("Predicate", FALSE)) {
/**
 * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Predicate {
  /**
   * @access public
   * @var string
   */
  public $field;

  /**
   * @access public
   * @var tnsPredicateOperator
   */
  public $operator;

  /**
   * @access public
   * @var string[]
   */
  public $values;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Predicate";
  }

  public function __construct($field = NULL, $operator = NULL, $values = NULL) {
    $this->field = $field;
    $this->operator = $operator;
    $this->values = $values;
  }
}}

if (!class_exists("ProductAd", FALSE)) {
/**
 * Represents a product ad (known as a <a href=
 * "//support.google.com/adwords/bin/answer.py?answer=2456103">product
 * listing ad</a> in the AdWords user interface). A product ad displays
 * product data (managed using the Google Merchant Center) that is
 * pulled from the Google base product feed specified in the parent campaign's
 * {@linkplain ProductExtension product extension}.
 * 
 * <p>Product ads are only available to a limited set of advertisers. If you
 * are not eligible to use product ads, they will not serve.</p>
 * 
 * <p class="caution"><b>Caution:</b> Product ads do not use {@link #url url} or
 * {@link #displayUrl displayUrl}; setting these fields on a product ad will
 * cause an error.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ProductAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $promotionLine;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ProductAd";
  }

  public function __construct($promotionLine = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->promotionLine = $promotionLine;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("QueryError", FALSE)) {
/**
 * A QueryError represents possible errors for query parsing and execution.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class QueryError extends ApiError {
  /**
   * @access public
   * @var tnsQueryErrorReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $message;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QueryError";
  }

  public function __construct($reason = NULL, $message = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->message = $message;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("QuotaCheckError", FALSE)) {
/**
 * Encapsulates the errors thrown during developer quota checks.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * A list of all errors associated with the Range constraint.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * Signals that a call failed because a measured rate exceeded.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * Errors from attempting to write to read-only fields.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * Encapsulates the generic errors thrown when there's an error with user
 * request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * Errors due to missing required field.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("RichMediaAd", FALSE)) {
/**
 * Data associated with a rich media ad.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RichMediaAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var Dimensions
   */
  public $dimensions;

  /**
   * @access public
   * @var string
   */
  public $snippet;

  /**
   * @access public
   * @var string
   */
  public $impressionBeaconUrl;

  /**
   * @access public
   * @var integer
   */
  public $adDuration;

  /**
   * @access public
   * @var integer
   */
  public $certifiedVendorFormatId;

  /**
   * @access public
   * @var string
   */
  public $sourceUrl;

  /**
   * @access public
   * @var tnsRichMediaAdRichMediaAdType
   */
  public $richMediaAdType;

  /**
   * @access public
   * @var tnsRichMediaAdAdAttribute[]
   */
  public $adAttributes;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaAd";
  }

  public function __construct($name = NULL, $dimensions = NULL, $snippet = NULL, $impressionBeaconUrl = NULL, $adDuration = NULL, $certifiedVendorFormatId = NULL, $sourceUrl = NULL, $richMediaAdType = NULL, $adAttributes = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->name = $name;
    $this->dimensions = $dimensions;
    $this->snippet = $snippet;
    $this->impressionBeaconUrl = $impressionBeaconUrl;
    $this->adDuration = $adDuration;
    $this->certifiedVendorFormatId = $certifiedVendorFormatId;
    $this->sourceUrl = $sourceUrl;
    $this->richMediaAdType = $richMediaAdType;
    $this->adAttributes = $adAttributes;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("Selector", FALSE)) {
/**
 * A generic selector to specify the type of information to return.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Selector {
  /**
   * @access public
   * @var string[]
   */
  public $fields;

  /**
   * @access public
   * @var Predicate[]
   */
  public $predicates;

  /**
   * @access public
   * @var DateRange
   */
  public $dateRange;

  /**
   * @access public
   * @var OrderBy[]
   */
  public $ordering;

  /**
   * @access public
   * @var Paging
   */
  public $paging;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Selector";
  }

  public function __construct($fields = NULL, $predicates = NULL, $dateRange = NULL, $ordering = NULL, $paging = NULL) {
    $this->fields = $fields;
    $this->predicates = $predicates;
    $this->dateRange = $dateRange;
    $this->ordering = $ordering;
    $this->paging = $paging;
  }
}}

if (!class_exists("SelectorError", FALSE)) {
/**
 * Represents possible error codes for {@link Selector}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SelectorError extends ApiError {
  /**
   * @access public
   * @var tnsSelectorErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SelectorError";
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
 * Indicates that the number of entries in the request or response exceeds the system limit.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Defines the required and optional elements within the header of a SOAP request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * Defines the elements within the header of a SOAP response.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("StatsQueryError", FALSE)) {
/**
 * Represents possible error codes when querying for stats.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class StatsQueryError extends ApiError {
  /**
   * @access public
   * @var tnsStatsQueryErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatsQueryError";
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
 * Errors associated with the length of the given string being
 * out of bounds.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("String_StringMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type String
 * and value of type String.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class String_StringMapEntry {
  /**
   * @access public
   * @var string
   */
  public $key;

  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "String_StringMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("TempAdUnionId", FALSE)) {
/**
 * Represents the temporary id for an ad union id, which the user can specify.
 * The temporary id can be used to group ads together during ad creation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TempAdUnionId extends AdUnionId {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TempAdUnionId";
  }

  public function __construct($id = NULL, $AdUnionIdType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->AdUnionIdType = $AdUnionIdType;
  }
}}

if (!class_exists("TemplateAd", FALSE)) {
/**
 * Represents a <a href=
 * "//www.google.com/adwords/displaynetwork/plan-creative-campaigns/display-ad-builder.html"
 * >Display Ad Builder</a> template ad. A template ad is
 * composed of a template (specified by its ID) and the data that populates
 * the template's fields. For a list of available templates and their required
 * fields, see <a href="/adwords/api/docs/appendix/templateads">Template Ads</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TemplateAd extends Ad {
  /**
   * @access public
   * @var integer
   */
  public $templateId;

  /**
   * @access public
   * @var AdUnionId
   */
  public $adUnionId;

  /**
   * @access public
   * @var TemplateElement[]
   */
  public $templateElements;

  /**
   * @access public
   * @var Dimensions
   */
  public $dimensions;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * @access public
   * @var integer
   */
  public $originAdId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TemplateAd";
  }

  public function __construct($templateId = NULL, $adUnionId = NULL, $templateElements = NULL, $dimensions = NULL, $name = NULL, $duration = NULL, $originAdId = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->templateId = $templateId;
    $this->adUnionId = $adUnionId;
    $this->templateElements = $templateElements;
    $this->dimensions = $dimensions;
    $this->name = $name;
    $this->duration = $duration;
    $this->originAdId = $originAdId;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("TemplateElement", FALSE)) {
/**
 * Represents an element in a template. Each template element is composed
 * of a list of fields (actual value data).
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TemplateElement {
  /**
   * @access public
   * @var string
   */
  public $uniqueName;

  /**
   * @access public
   * @var TemplateElementField[]
   */
  public $fields;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TemplateElement";
  }

  public function __construct($uniqueName = NULL, $fields = NULL) {
    $this->uniqueName = $uniqueName;
    $this->fields = $fields;
  }
}}

if (!class_exists("TemplateElementField", FALSE)) {
/**
 * Represents a field in a template element.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TemplateElementField {
  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsTemplateElementFieldType
   */
  public $type;

  /**
   * @access public
   * @var string
   */
  public $fieldText;

  /**
   * @access public
   * @var Media
   */
  public $fieldMedia;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TemplateElementField";
  }

  public function __construct($name = NULL, $type = NULL, $fieldText = NULL, $fieldMedia = NULL) {
    $this->name = $name;
    $this->type = $type;
    $this->fieldText = $fieldText;
    $this->fieldMedia = $fieldMedia;
  }
}}

if (!class_exists("TextAd", FALSE)) {
/**
 * Represents a TextAd.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TextAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $headline;

  /**
   * @access public
   * @var string
   */
  public $description1;

  /**
   * @access public
   * @var string
   */
  public $description2;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TextAd";
  }

  public function __construct($headline = NULL, $description1 = NULL, $description2 = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->headline = $headline;
    $this->description1 = $description1;
    $this->description2 = $description2;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("ThirdPartyRedirectAd", FALSE)) {
/**
 * Data associated with rich media extension attributes.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ThirdPartyRedirectAd extends RichMediaAd {
  /**
   * @access public
   * @var boolean
   */
  public $isCookieTargeted;

  /**
   * @access public
   * @var boolean
   */
  public $isUserInterestTargeted;

  /**
   * @access public
   * @var boolean
   */
  public $isTagged;

  /**
   * @access public
   * @var tnsVideoType[]
   */
  public $videoTypes;

  /**
   * @access public
   * @var tnsThirdPartyRedirectAdExpandingDirection[]
   */
  public $expandingDirections;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ThirdPartyRedirectAd";
  }

  public function __construct($isCookieTargeted = NULL, $isUserInterestTargeted = NULL, $isTagged = NULL, $videoTypes = NULL, $expandingDirections = NULL, $name = NULL, $dimensions = NULL, $snippet = NULL, $impressionBeaconUrl = NULL, $adDuration = NULL, $certifiedVendorFormatId = NULL, $sourceUrl = NULL, $richMediaAdType = NULL, $adAttributes = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->isCookieTargeted = $isCookieTargeted;
    $this->isUserInterestTargeted = $isUserInterestTargeted;
    $this->isTagged = $isTagged;
    $this->videoTypes = $videoTypes;
    $this->expandingDirections = $expandingDirections;
    $this->name = $name;
    $this->dimensions = $dimensions;
    $this->snippet = $snippet;
    $this->impressionBeaconUrl = $impressionBeaconUrl;
    $this->adDuration = $adDuration;
    $this->certifiedVendorFormatId = $certifiedVendorFormatId;
    $this->sourceUrl = $sourceUrl;
    $this->richMediaAdType = $richMediaAdType;
    $this->adAttributes = $adAttributes;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("Video", FALSE)) {
/**
 * Encapsulates a Video media identified by a MediaId.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Video extends Media {
  /**
   * @access public
   * @var integer
   */
  public $durationMillis;

  /**
   * @access public
   * @var string
   */
  public $streamingUrl;

  /**
   * @access public
   * @var boolean
   */
  public $readyToPlayOnTheWeb;

  /**
   * @access public
   * @var string
   */
  public $industryStandardCommercialIdentifier;

  /**
   * @access public
   * @var string
   */
  public $advertisingId;

  /**
   * @access public
   * @var string
   */
  public $youTubeVideoIdString;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Video";
  }

  public function __construct($durationMillis = NULL, $streamingUrl = NULL, $readyToPlayOnTheWeb = NULL, $industryStandardCommercialIdentifier = NULL, $advertisingId = NULL, $youTubeVideoIdString = NULL, $mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
    parent::__construct();
    $this->durationMillis = $durationMillis;
    $this->streamingUrl = $streamingUrl;
    $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
    $this->industryStandardCommercialIdentifier = $industryStandardCommercialIdentifier;
    $this->advertisingId = $advertisingId;
    $this->youTubeVideoIdString = $youTubeVideoIdString;
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }
}}

if (!class_exists("DynamicSearchAd", FALSE)) {
/**
 * Represents a dynamic search ad. This ad will have its headline and
 * destination URL auto-generated at serving time according to domain name
 * specific information provided by {@link DomainInfoExtension} linked at the
 * campaign level.
 * 
 * <p>Auto-generated fields: headline and destination URL (may contain an optional
 * tracking URL)</p>
 * 
 * <p>Required fields: description1, description2, displayUrl</p>
 * 
 * <p>The URL field must contain at least one of the following placeholder tags
 * (URL parameters): {unescapedlpurl}, {escapedlpurl}, {lpurlpath}. If no URL is
 * specified, {unescapedlpurl} will be used as default.</p>
 * 
 * <p>{unescapedlpurl} can only be used at the beginning of the URL field. It
 * will be replaced with the full landing page URL of the displayed ad. Extra query
 * parameters can be added to the end, e.g. "{unescapedlpurl}?lang=en".</p>
 * 
 * <p>{escapedlpurl} will be replaced with the URL-encoded version of the full
 * landing page URL. This makes it suitable for use as a query parameter
 * value (e.g. "http://www.3rdpartytracker.com/?lp={escapedlpurl}") but
 * not at the beginning of the url field.</p>
 * 
 * <p>{lpurlpath} will be replaced with the path and query part of the landing
 * page URL and can be added to a different URL, e.g.
 * "http://www.mygoodbusiness.com/tracking/{lpurlpath}".</p>
 * 
 * <p>There are also special rules that come into play depending on whether the
 * destination URL uses local click tracking or third-party click tracking.<p>
 * 
 * <p>For more information, see the article <a href="//support.google.com/adwords/bin/answer.py?answer=2549100">Using dynamic tracking URLs</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DynamicSearchAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $description1;

  /**
   * @access public
   * @var string
   */
  public $description2;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DynamicSearchAd";
  }

  public function __construct($description1 = NULL, $description2 = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $AdType = NULL) {
    parent::__construct();
    $this->description1 = $description1;
    $this->description2 = $description2;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("AdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupAdApprovalStatus", FALSE)) {
/**
 * Represents the possible approval statuses.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdApprovalStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAd.ApprovalStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupAdStatus", FALSE)) {
/**
 * The current status of an Ad.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAd.Status";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupAdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAdError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdxErrorReason", FALSE)) {
/**
 * The reasons for the AdX error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdxErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdxError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
/**
 * The single reason for the authentication failure.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AuthenticationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * The reasons for the database error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AuthorizationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("BetaErrorReason", FALSE)) {
/**
 * The reasons for the beta error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BetaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BetaError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ClientTermsErrorReason", FALSE)) {
/**
 * Enums for the various reasons an error can be thrown as a result of
 * ClientTerms violation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ClientTermsErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * The reasons for the database error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DatabaseErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DateErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("DeprecatedAdType", FALSE)) {
/**
 * Video ad.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DeprecatedAdType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeprecatedAd.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("DistinctErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DistinctErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("EntityCountLimitExceededReason", FALSE)) {
/**
 * Limits at various levels of the account.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class EntityCountLimitExceededReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityCountLimitExceeded.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("EntityNotFoundReason", FALSE)) {
/**
 * The specified id refered to an entity which either doesn't exist or is not accessible to the
 * customer. e.g. campaign belongs to another customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class EntityNotFoundReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityNotFound.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ExperimentDataStatus", FALSE)) {
/**
 * Status of the experimental change associated with an entity.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExperimentDataStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ExperimentDataStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("ExperimentDeltaStatus", FALSE)) {
/**
 * Status of an entity denoting its type of experimental change in a campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExperimentDeltaStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ExperimentDeltaStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("ForwardCompatibilityErrorReason", FALSE)) {
/**
 * The reason for the error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ForwardCompatibilityErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ForwardCompatibilityError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("IdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class IdErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("ImageErrorReason", FALSE)) {
/**
 * The image is not valid.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ImageErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class InternalApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("MarkupLanguageType", FALSE)) {
/**
 * Markup languages to use for mobile ads.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MarkupLanguageType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MarkupLanguageType";
  }

  public function __construct() {
  }
}}

if (!class_exists("MediaMediaType", FALSE)) {
/**
 * Media types
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MediaMediaType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Media.MediaType";
  }

  public function __construct() {
  }
}}

if (!class_exists("MediaMimeType", FALSE)) {
/**
 * Mime types
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MediaMimeType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Media.MimeType";
  }

  public function __construct() {
  }
}}

if (!class_exists("MediaSize", FALSE)) {
/**
 * Sizes for retrieving the original media
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MediaSize {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Media.Size";
  }

  public function __construct() {
  }
}}

if (!class_exists("MediaErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MediaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MediaError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NewEntityCreationErrorReason", FALSE)) {
/**
 * Do not set the id field while creating new entities.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NewEntityCreationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NewEntityCreationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NotEmptyErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NotEmptyErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * The single reason for the whitelist error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NotWhitelistedErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("NullErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("OperationAccessDeniedReason", FALSE)) {
/**
 * The reasons for the operation access error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class OperationAccessDeniedReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperationAccessDenied.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("Operator", FALSE)) {
/**
 * This represents an operator that may be presented to an adsapi service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Operator {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Operator";
  }

  public function __construct() {
  }
}}

if (!class_exists("PagingErrorReason", FALSE)) {
/**
 * The reasons for errors when using pagination.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PagingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PagingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("PredicateOperator", FALSE)) {
/**
 * Defines the valid set of operators.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PredicateOperator {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Predicate.Operator";
  }

  public function __construct() {
  }
}}

if (!class_exists("QueryErrorReason", FALSE)) {
/**
 * The reason for the query error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class QueryErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QueryError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("QuotaCheckErrorReason", FALSE)) {
/**
 * Enums for all the reasons an error can be thrown to the user during
 * billing quota checks.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class QuotaCheckErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RangeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * The reason for the rate exceeded error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RateExceededErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ReadOnlyErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * Error reason is unknown.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RequestErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RequiredErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("RichMediaAdAdAttribute", FALSE)) {
/**
 * A set of attributes that describe the rich media ad capabilities.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RichMediaAdAdAttribute {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaAd.AdAttribute";
  }

  public function __construct() {
  }
}}

if (!class_exists("RichMediaAdRichMediaAdType", FALSE)) {
/**
 * Different types of rich media ad that are available to customers.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RichMediaAdRichMediaAdType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaAd.RichMediaAdType";
  }

  public function __construct() {
  }
}}

if (!class_exists("SelectorErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SelectorErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SelectorError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("SizeLimitErrorReason", FALSE)) {
/**
 * The reasons for Ad Scheduling errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SizeLimitErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("SortOrder", FALSE)) {
/**
 * Possible orders of sorting.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SortOrder {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SortOrder";
  }

  public function __construct() {
  }
}}

if (!class_exists("StatsQueryErrorReason", FALSE)) {
/**
 * The reasons for errors when querying for stats.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class StatsQueryErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatsQueryError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("StringLengthErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class StringLengthErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("TemplateElementFieldType", FALSE)) {
/**
 * Possible field types of template element fields.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TemplateElementFieldType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TemplateElementField.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("ThirdPartyRedirectAdExpandingDirection", FALSE)) {
/**
 * Allowed expanding directions for ads that are expandable.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ThirdPartyRedirectAdExpandingDirection {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ThirdPartyRedirectAd.ExpandingDirection";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoType", FALSE)) {
/**
 * VideoType enum values that are permitted for video filterable
 * creative attribute IDs.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class VideoType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoType";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupAdServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of AdGroupAds.
 * Deleted AdGroupAds are not returned by default.
 * 
 * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
 * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
 * @throws ApiException when there is at least one error with the request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdServiceGet {
  /**
   * @access public
   * @var Selector
   */
  public $serviceSelector;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($serviceSelector = NULL) {
    $this->serviceSelector = $serviceSelector;
  }
}}

if (!class_exists("AdGroupAdServiceGetResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdServiceGetResponse {
  /**
   * @access public
   * @var AdGroupAdPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("AdGroupAdServiceMutate", FALSE)) {
/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Applies the list of mutate operations (ie. add, set, remove):
 * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
 * {@code adGroupId} must
 * reference an existing ad group. The child {@code Ad} must be sufficiently
 * specified by constructing a concrete ad type (such as {@code TextAd})
 * and setting its fields accordingly.</p>
 * <p>Set - Updates an ad group ad. Except for {@code status},
 * ad group ad fields are not mutable. Status updates are
 * straightforward - the status of the ad group ad is updated as
 * specified. If any other field has changed, it will be ignored. If
 * you want to change any of the fields other than status, you must
 * make a new ad and then delete the old one.</p>
 * <p>Remove - Removes the link between the specified AdGroup and
 * Ad.</p>
 * @param operations The operations to apply.
 * @return A list of AdGroupAds where each entry in the list is the result of
 * applying the operation in the input list with the same index. For an
 * add/set operation, the return AdGroupAd will be what is saved to the db.
 * In the case of the remove operation, the return AdGroupAd will simply be
 * an AdGroupAd containing an Ad with the id set to the Ad being deleted from
 * the AdGroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdServiceMutate {
  /**
   * @access public
   * @var AdGroupAdOperation[]
   */
  public $operations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($operations = NULL) {
    $this->operations = $operations;
  }
}}

if (!class_exists("AdGroupAdServiceMutateResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdServiceMutateResponse {
  /**
   * @access public
   * @var AdGroupAdReturnValue
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("query", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of AdGroupAds based on the query.
 * 
 * @param query The SQL-like AWQL query string.
 * @return A list of AdGroupAds.
 * @throws ApiException if problems occur while parsing the query or fetching AdGroupAds.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class query {
  /**
   * @access public
   * @var string
   */
  public $query;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($query = NULL) {
    $this->query = $query;
  }
}}

if (!class_exists("queryResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class queryResponse {
  /**
   * @access public
   * @var AdGroupAdPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("AdError", FALSE)) {
/**
 * Base error class for Ad Service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdError extends ApiError {
  /**
   * @access public
   * @var tnsAdErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdError";
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

if (!class_exists("AdGroupAdCountLimitExceeded", FALSE)) {
/**
 * Indicates too many ads were added/enabled under the specified adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdCountLimitExceeded extends EntityCountLimitExceeded {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAdCountLimitExceeded";
  }

  public function __construct($reason = NULL, $enclosingId = NULL, $limit = NULL, $accountLimitType = NULL, $existingCount = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->enclosingId = $enclosingId;
    $this->limit = $limit;
    $this->accountLimitType = $accountLimitType;
    $this->existingCount = $existingCount;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("AdGroupAdError", FALSE)) {
/**
 * Error information for AdGroupAdService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdError extends ApiError {
  /**
   * @access public
   * @var tnsAdGroupAdErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAdError";
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

if (!class_exists("AdGroupAdOperation", FALSE)) {
/**
 * AdGroupAd service operations.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdOperation extends Operation {
  /**
   * @access public
   * @var AdGroupAd
   */
  public $operand;

  /**
   * @access public
   * @var ExemptionRequest[]
   */
  public $exemptionRequests;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAdOperation";
  }

  public function __construct($operand = NULL, $exemptionRequests = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->exemptionRequests = $exemptionRequests;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("AdGroupAdPage", FALSE)) {
/**
 * Represents a page of {@link AdGroupAd}s resulting from the query done by
 * {@link AdGroupAdService}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdPage extends Page {
  /**
   * @access public
   * @var AdGroupAd[]
   */
  public $entries;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAdPage";
  }

  public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
    parent::__construct();
    $this->entries = $entries;
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }
}}

if (!class_exists("AdGroupAdReturnValue", FALSE)) {
/**
 * A container for return values from the AdGroupAdService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdReturnValue extends ListReturnValue {
  /**
   * @access public
   * @var AdGroupAd[]
   */
  public $value;

  /**
   * @access public
   * @var ApiError[]
   */
  public $partialFailureErrors;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAdReturnValue";
  }

  public function __construct($value = NULL, $partialFailureErrors = NULL, $ListReturnValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->partialFailureErrors = $partialFailureErrors;
    $this->ListReturnValueType = $ListReturnValueType;
  }
}}

if (!class_exists("AdxError", FALSE)) {
/**
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdxError extends ApiError {
  /**
   * @access public
   * @var tnsAdxErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdxError";
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
 * Exception class for holding a list of service errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
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
    return "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Audio", FALSE)) {
/**
 * Encapsulates an Audio media identified by a MediaId.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Audio extends Media {
  /**
   * @access public
   * @var integer
   */
  public $durationMillis;

  /**
   * @access public
   * @var string
   */
  public $streamingUrl;

  /**
   * @access public
   * @var boolean
   */
  public $readyToPlayOnTheWeb;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Audio";
  }

  public function __construct($durationMillis = NULL, $streamingUrl = NULL, $readyToPlayOnTheWeb = NULL, $mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
    parent::__construct();
    $this->durationMillis = $durationMillis;
    $this->streamingUrl = $streamingUrl;
    $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }
}}

if (!class_exists("Image", FALSE)) {
/**
 * Encapsulates an Image media. For {@code SET},{@code REMOVE} operations in
 * MediaService, use {@code mediaId}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Image extends Media {
  /**
   * @access public
   * @var base64Binary
   */
  public $data;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Image";
  }

  public function __construct($data = NULL, $mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
    parent::__construct();
    $this->data = $data;
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }
}}

if (!class_exists("AdGroupAdService", FALSE)) {
/**
 * AdGroupAdService
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 * @author WSDLInterpreter
 */
class AdGroupAdService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "AdGroupAdServiceGetResponse",
    "get" => "AdGroupAdServiceGet",
    "mutate" => "AdGroupAdServiceMutate",
    "mutateResponse" => "AdGroupAdServiceMutateResponse",
    "mutateCallToAction" => "AdGroupAdServiceMutateCallToAction",
    "search" => "AdGroupAdServiceSearch",
    "Function" => "FeedFunction",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "Ad" => "Ad",
    "AdError" => "AdError",
    "ApiError" => "ApiError",
    "AdGroupAd" => "AdGroupAd",
    "AdGroupAdCountLimitExceeded" => "AdGroupAdCountLimitExceeded",
    "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
    "AdGroupAdError" => "AdGroupAdError",
    "AdGroupAdExperimentData" => "AdGroupAdExperimentData",
    "AdGroupAdOperation" => "AdGroupAdOperation",
    "Operation" => "Operation",
    "AdGroupAdPage" => "AdGroupAdPage",
    "Page" => "Page",
    "AdGroupAdReturnValue" => "AdGroupAdReturnValue",
    "ListReturnValue" => "ListReturnValue",
    "AdUnionId" => "AdUnionId",
    "AdxError" => "AdxError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "Audio" => "Audio",
    "Media" => "Media",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "BetaError" => "BetaError",
    "ClientTermsError" => "ClientTermsError",
    "DatabaseError" => "DatabaseError",
    "DateError" => "DateError",
    "DateRange" => "DateRange",
    "DeprecatedAd" => "DeprecatedAd",
    "Dimensions" => "Dimensions",
    "DistinctError" => "DistinctError",
    "EntityNotFound" => "EntityNotFound",
    "ExemptionRequest" => "ExemptionRequest",
    "ForwardCompatibilityError" => "ForwardCompatibilityError",
    "IdError" => "IdError",
    "Image" => "Image",
    "ImageAd" => "ImageAd",
    "ImageError" => "ImageError",
    "InternalApiError" => "InternalApiError",
    "MediaError" => "MediaError",
    "Media_Size_DimensionsMapEntry" => "Media_Size_DimensionsMapEntry",
    "Media_Size_StringMapEntry" => "Media_Size_StringMapEntry",
    "MobileAd" => "MobileAd",
    "MobileImageAd" => "MobileImageAd",
    "NewEntityCreationError" => "NewEntityCreationError",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "OperationAccessDenied" => "OperationAccessDenied",
    "OrderBy" => "OrderBy",
    "Paging" => "Paging",
    "PagingError" => "PagingError",
    "PolicyViolationError" => "PolicyViolationError",
    "PolicyViolationError.Part" => "PolicyViolationErrorPart",
    "PolicyViolationKey" => "PolicyViolationKey",
    "Predicate" => "Predicate",
    "ProductAd" => "ProductAd",
    "QueryError" => "QueryError",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "RichMediaAd" => "RichMediaAd",
    "Selector" => "Selector",
    "SelectorError" => "SelectorError",
    "SizeLimitError" => "SizeLimitError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StatsQueryError" => "StatsQueryError",
    "StringLengthError" => "StringLengthError",
    "String_StringMapEntry" => "String_StringMapEntry",
    "TempAdUnionId" => "TempAdUnionId",
    "TemplateAd" => "TemplateAd",
    "TemplateElement" => "TemplateElement",
    "TemplateElementField" => "TemplateElementField",
    "TextAd" => "TextAd",
    "ThirdPartyRedirectAd" => "ThirdPartyRedirectAd",
    "Video" => "Video",
    "DynamicSearchAd" => "DynamicSearchAd",
    "AdError.Reason" => "AdErrorReason",
    "AdGroupAd.ApprovalStatus" => "AdGroupAdApprovalStatus",
    "AdGroupAd.Status" => "AdGroupAdStatus",
    "AdGroupAdError.Reason" => "AdGroupAdErrorReason",
    "AdxError.Reason" => "AdxErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BetaError.Reason" => "BetaErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DeprecatedAd.Type" => "DeprecatedAdType",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "ExperimentDataStatus" => "ExperimentDataStatus",
    "ExperimentDeltaStatus" => "ExperimentDeltaStatus",
    "ForwardCompatibilityError.Reason" => "ForwardCompatibilityErrorReason",
    "IdError.Reason" => "IdErrorReason",
    "ImageError.Reason" => "ImageErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "MarkupLanguageType" => "MarkupLanguageType",
    "Media.MediaType" => "MediaMediaType",
    "Media.MimeType" => "MediaMimeType",
    "Media.Size" => "MediaSize",
    "MediaError.Reason" => "MediaErrorReason",
    "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "Operator" => "Operator",
    "PagingError.Reason" => "PagingErrorReason",
    "Predicate.Operator" => "PredicateOperator",
    "QueryError.Reason" => "QueryErrorReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "RichMediaAd.AdAttribute" => "RichMediaAdAdAttribute",
    "RichMediaAd.RichMediaAdType" => "RichMediaAdRichMediaAdType",
    "SelectorError.Reason" => "SelectorErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "SortOrder" => "SortOrder",
    "StatsQueryError.Reason" => "StatsQueryErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "TemplateElementField.Type" => "TemplateElementFieldType",
    "ThirdPartyRedirectAd.ExpandingDirection" => "ThirdPartyRedirectAdExpandingDirection",
    "VideoType" => "VideoType",
    "query" => "query",
    "queryResponse" => "queryResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/AdGroupAdService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdGroupAdService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdGroupAdService', 'https://adwords.google.com/api/adwords/cm/v201309');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of AdGroupAds.
   * Deleted AdGroupAds are not returned by default.
   * 
   * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
   * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $arg = new AdGroupAdServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Applies the list of mutate operations (ie. add, set, remove):
   * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
   * {@code adGroupId} must
   * reference an existing ad group. The child {@code Ad} must be sufficiently
   * specified by constructing a concrete ad type (such as {@code TextAd})
   * and setting its fields accordingly.</p>
   * <p>Set - Updates an ad group ad. Except for {@code status},
   * ad group ad fields are not mutable. Status updates are
   * straightforward - the status of the ad group ad is updated as
   * specified. If any other field has changed, it will be ignored. If
   * you want to change any of the fields other than status, you must
   * make a new ad and then delete the old one.</p>
   * <p>Remove - Removes the link between the specified AdGroup and
   * Ad.</p>
   * @param operations The operations to apply.
   * @return A list of AdGroupAds where each entry in the list is the result of
   * applying the operation in the input list with the same index. For an
   * add/set operation, the return AdGroupAd will be what is saved to the db.
   * In the case of the remove operation, the return AdGroupAd will simply be
   * an AdGroupAd containing an Ad with the id set to the Ad being deleted from
   * the AdGroup.
   */
  public function mutate($operations) {
    $arg = new AdGroupAdServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of AdGroupAds based on the query.
   * 
   * @param query The SQL-like AWQL query string.
   * @return A list of AdGroupAds.
   * @throws ApiException if problems occur while parsing the query or fetching AdGroupAds.
   */
  public function query($query) {
    $arg = new query($query);
    $result = $this->__soapCall("query", array($arg));
    return $result->rval;
  }


}}