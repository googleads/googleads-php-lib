<?php
/**
 * Contains all client objects for the TargetingIdeaService service.
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

if (!class_exists("ApiError", FALSE)) {
/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("BidLandscapeLandscapePoint", FALSE)) {
/**
 * A set of estimates for a criterion's performance for a specific bid
 * amount.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BidLandscapeLandscapePoint {
  /**
   * @access public
   * @var Money
   */
  public $bid;

  /**
   * @access public
   * @var integer
   */
  public $clicks;

  /**
   * @access public
   * @var Money
   */
  public $cost;

  /**
   * @access public
   * @var Money
   */
  public $marginalCpc;

  /**
   * @access public
   * @var integer
   */
  public $impressions;

  /**
   * @access public
   * @var integer
   */
  public $promotedImpressions;

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
    return "BidLandscape.LandscapePoint";
  }

  public function __construct($bid = NULL, $clicks = NULL, $cost = NULL, $marginalCpc = NULL, $impressions = NULL, $promotedImpressions = NULL) {
    $this->bid = $bid;
    $this->clicks = $clicks;
    $this->cost = $cost;
    $this->marginalCpc = $marginalCpc;
    $this->impressions = $impressions;
    $this->promotedImpressions = $promotedImpressions;
  }
}}

if (!class_exists("BiddingError", FALSE)) {
/**
 * Represents bidding errors.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BiddingError extends ApiError {
  /**
   * @access public
   * @var tnsBiddingErrorReason
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
    return "BiddingError";
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

if (!class_exists("BudgetError", FALSE)) {
/**
 * A list of all the error codes being used by the common budget domain package.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BudgetError extends ApiError {
  /**
   * @access public
   * @var tnsBudgetErrorReason
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
    return "BudgetError";
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("CollectionSizeError", FALSE)) {
/**
 * Errors associated with the size of the given collection being
 * out of bounds.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CollectionSizeError extends ApiError {
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
    return "CollectionSizeError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ComparableValue", FALSE)) {
/**
 * Comparable types for constructing ranges with.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ComparableValue {
  /**
   * @access public
   * @var string
   */
  public $ComparableValueType;

  private $_parameterMap = array (
    "ComparableValue.Type" => "ComparableValueType",
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
    return "ComparableValue";
  }

  public function __construct($ComparableValueType = NULL) {
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("Criterion", FALSE)) {
/**
 * Represents a criterion (such as a keyword, placement, or vertical).
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Criterion {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var tnsCriterionType
   */
  public $type;

  /**
   * @access public
   * @var string
   */
  public $CriterionType;

  private $_parameterMap = array (
    "Criterion.Type" => "CriterionType",
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
    return "Criterion";
  }

  public function __construct($id = NULL, $type = NULL, $CriterionType = NULL) {
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("CriterionError", FALSE)) {
/**
 * Error class used for reporting criteria related errors.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionError extends ApiError {
  /**
   * @access public
   * @var tnsCriterionErrorReason
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
    return "CriterionError";
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

if (!class_exists("CriterionParameter", FALSE)) {
/**
 * Base type of criterion parameters.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionParameter {
  /**
   * @access public
   * @var string
   */
  public $CriterionParameterType;

  private $_parameterMap = array (
    "CriterionParameter.Type" => "CriterionParameterType",
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
    return "CriterionParameter";
  }

  public function __construct($CriterionParameterType = NULL) {
    $this->CriterionParameterType = $CriterionParameterType;
  }
}}

if (!class_exists("DatabaseError", FALSE)) {
/**
 * Errors that are thrown due to a database access problem.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("DistinctError", FALSE)) {
/**
 * Errors related to distinct ids or content.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("IdError", FALSE)) {
/**
 * Errors associated with the ids.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("InternalApiError", FALSE)) {
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("Keyword", FALSE)) {
/**
 * Represents a keyword.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Keyword extends Criterion {
  /**
   * @access public
   * @var string
   */
  public $text;

  /**
   * @access public
   * @var tnsKeywordMatchType
   */
  public $matchType;

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
    return "Keyword";
  }

  public function __construct($text = NULL, $matchType = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->text = $text;
    $this->matchType = $matchType;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Language", FALSE)) {
/**
 * Represents a Language criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Language extends Criterion {
  /**
   * @access public
   * @var string
   */
  public $code;

  /**
   * @access public
   * @var string
   */
  public $name;

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
    return "Language";
  }

  public function __construct($code = NULL, $name = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->code = $code;
    $this->name = $name;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Location", FALSE)) {
/**
 * Represents Location criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type can be either targeted or excluded.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Location extends Criterion {
  /**
   * @access public
   * @var string
   */
  public $locationName;

  /**
   * @access public
   * @var string
   */
  public $displayType;

  /**
   * @access public
   * @var tnsLocationTargetingStatus
   */
  public $targetingStatus;

  /**
   * @access public
   * @var Location[]
   */
  public $parentLocations;

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
    return "Location";
  }

  public function __construct($locationName = NULL, $displayType = NULL, $targetingStatus = NULL, $parentLocations = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->locationName = $locationName;
    $this->displayType = $displayType;
    $this->targetingStatus = $targetingStatus;
    $this->parentLocations = $parentLocations;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("MobileAppCategory", FALSE)) {
/**
 * Represents the mobile app category to be targeted.
 * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
 * available mobile app categories</a>.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MobileAppCategory extends Criterion {
  /**
   * @access public
   * @var integer
   */
  public $mobileAppCategoryId;

  /**
   * @access public
   * @var string
   */
  public $displayName;

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
    return "MobileAppCategory";
  }

  public function __construct($mobileAppCategoryId = NULL, $displayName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->mobileAppCategoryId = $mobileAppCategoryId;
    $this->displayName = $displayName;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("MobileApplication", FALSE)) {
/**
 * Represents the mobile application to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MobileApplication extends Criterion {
  /**
   * @access public
   * @var string
   */
  public $appId;

  /**
   * @access public
   * @var string
   */
  public $displayName;

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
    return "MobileApplication";
  }

  public function __construct($appId = NULL, $displayName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->appId = $appId;
    $this->displayName = $displayName;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Money", FALSE)) {
/**
 * Represents a money amount.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Money extends ComparableValue {
  /**
   * @access public
   * @var integer
   */
  public $microAmount;

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
    return "Money";
  }

  public function __construct($microAmount = NULL, $ComparableValueType = NULL) {
    parent::__construct();
    $this->microAmount = $microAmount;
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("NetworkSetting", FALSE)) {
/**
 * Network settings for a Campaign.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NetworkSetting {
  /**
   * @access public
   * @var boolean
   */
  public $targetGoogleSearch;

  /**
   * @access public
   * @var boolean
   */
  public $targetSearchNetwork;

  /**
   * @access public
   * @var boolean
   */
  public $targetContentNetwork;

  /**
   * @access public
   * @var boolean
   */
  public $targetPartnerSearchNetwork;

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
    return "NetworkSetting";
  }

  public function __construct($targetGoogleSearch = NULL, $targetSearchNetwork = NULL, $targetContentNetwork = NULL, $targetPartnerSearchNetwork = NULL) {
    $this->targetGoogleSearch = $targetGoogleSearch;
    $this->targetSearchNetwork = $targetSearchNetwork;
    $this->targetContentNetwork = $targetContentNetwork;
    $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
  }
}}

if (!class_exists("NotEmptyError", FALSE)) {
/**
 * Errors corresponding with violation of a NOT EMPTY check.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("NumberValue", FALSE)) {
/**
 * Number value types for constructing number valued ranges.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NumberValue extends ComparableValue {
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
    return "NumberValue";
  }

  public function __construct($ComparableValueType = NULL) {
    parent::__construct();
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("OperationAccessDenied", FALSE)) {
/**
 * Operation not permitted due to the invoked service's access policy.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("Paging", FALSE)) {
/**
 * Specifies the page of results to return in the response. A page is specified
 * by the result position to start at and the maximum number of results to
 * return.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("Placement", FALSE)) {
/**
 * A placement used for modifying bids for sites when targeting the content
 * network.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Placement extends Criterion {
  /**
   * @access public
   * @var string
   */
  public $url;

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
    return "Placement";
  }

  public function __construct($url = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->url = $url;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Platform", FALSE)) {
/**
 * Represents Platform criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Platform extends Criterion {
  /**
   * @access public
   * @var string
   */
  public $platformName;

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
    return "Platform";
  }

  public function __construct($platformName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->platformName = $platformName;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("Product", FALSE)) {
/**
 * Product targeting criteria, represents a filter for products in the
 * product feed that is defined by the advertiser. The criteria is used to
 * determine the products in a Merchant Center account to be used with the
 * ProductAds in the AdGroup. This criteria is available only to some advertisers.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Product extends Criterion {
  /**
   * @access public
   * @var ProductCondition[]
   */
  public $conditions;

  /**
   * @access public
   * @var string
   */
  public $text;

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
    return "Product";
  }

  public function __construct($conditions = NULL, $text = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->conditions = $conditions;
    $this->text = $text;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("ProductCondition", FALSE)) {
/**
 * Conditions to filter the products defined in product feed for targeting.
 * The condition is defined as operand=argument.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ProductCondition {
  /**
   * @access public
   * @var string
   */
  public $argument;

  /**
   * @access public
   * @var ProductConditionOperand
   */
  public $operand;

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
    return "ProductCondition";
  }

  public function __construct($argument = NULL, $operand = NULL) {
    $this->argument = $argument;
    $this->operand = $operand;
  }
}}

if (!class_exists("ProductConditionOperand", FALSE)) {
/**
 * Attribute for the product condition.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ProductConditionOperand {
  /**
   * @access public
   * @var string
   */
  public $operand;

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
    return "ProductConditionOperand";
  }

  public function __construct($operand = NULL) {
    $this->operand = $operand;
  }
}}

if (!class_exists("QuotaCheckError", FALSE)) {
/**
 * Encapsulates the errors thrown during developer quota checks.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("RegionCodeError", FALSE)) {
/**
 * A list of all errors associated with the @RegionCode constraints.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RegionCodeError extends ApiError {
  /**
   * @access public
   * @var tnsRegionCodeErrorReason
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
    return "RegionCodeError";
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("SizeLimitError", FALSE)) {
/**
 * Indicates that the number of entries in the request or response exceeds the system limit.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("DataEntry", FALSE)) {
/**
 * The base class of all return types of the table service.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DataEntry {
  /**
   * @access public
   * @var string
   */
  public $DataEntryType;

  private $_parameterMap = array (
    "DataEntry.Type" => "DataEntryType",
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
    return "DataEntry";
  }

  public function __construct($DataEntryType = NULL) {
    $this->DataEntryType = $DataEntryType;
  }
}}

if (!class_exists("TargetError", FALSE)) {
/**
 * A list of all the error codes being used by the common targeting package.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetError extends ApiError {
  /**
   * @access public
   * @var tnsTargetErrorReason
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
    return "TargetError";
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

if (!class_exists("CriterionUserInterest", FALSE)) {
/**
 * User Interest - represents a particular interest based vertical to be targeted.
 * Targeting UserInterest is currently in a limited beta.  If you'd like access
 * please speak with your account representative.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionUserInterest extends Criterion {
  /**
   * @access public
   * @var integer
   */
  public $userInterestId;

  /**
   * @access public
   * @var string
   */
  public $userInterestName;

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
    return "CriterionUserInterest";
  }

  public function __construct($userInterestId = NULL, $userInterestName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->userInterestId = $userInterestId;
    $this->userInterestName = $userInterestName;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("CriterionUserList", FALSE)) {
/**
 * UserList - represents a user list that is defined by the advertiser to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionUserList extends Criterion {
  /**
   * @access public
   * @var integer
   */
  public $userListId;

  /**
   * @access public
   * @var string
   */
  public $userListName;

  /**
   * @access public
   * @var tnsCriterionUserListMembershipStatus
   */
  public $userListMembershipStatus;

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
    return "CriterionUserList";
  }

  public function __construct($userListId = NULL, $userListName = NULL, $userListMembershipStatus = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->userListId = $userListId;
    $this->userListName = $userListName;
    $this->userListMembershipStatus = $userListMembershipStatus;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Vertical", FALSE)) {
/**
 * Use verticals to target or exclude placements in the Google Display Network
 * based on the category into which the placement falls (for example, "Pets &amp;
 * Animals/Pets/Dogs").
 * <a href="/adwords/api/docs/appendix/verticals">View the complete list
 * of available vertical categories.</a>
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Vertical extends Criterion {
  /**
   * @access public
   * @var integer
   */
  public $verticalId;

  /**
   * @access public
   * @var integer
   */
  public $verticalParentId;

  /**
   * @access public
   * @var string[]
   */
  public $path;

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
    return "Vertical";
  }

  public function __construct($verticalId = NULL, $verticalParentId = NULL, $path = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->verticalId = $verticalId;
    $this->verticalParentId = $verticalParentId;
    $this->path = $path;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Webpage", FALSE)) {
/**
 * Criterion for targeting webpages of an advertiser's website. The
 * website domain name is specified at the campaign level.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Webpage extends Criterion {
  /**
   * @access public
   * @var WebpageParameter
   */
  public $parameter;

  /**
   * @access public
   * @var double
   */
  public $criteriaCoverage;

  /**
   * @access public
   * @var string[]
   */
  public $criteriaSamples;

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
    return "Webpage";
  }

  public function __construct($parameter = NULL, $criteriaCoverage = NULL, $criteriaSamples = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->parameter = $parameter;
    $this->criteriaCoverage = $criteriaCoverage;
    $this->criteriaSamples = $criteriaSamples;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("WebpageCondition", FALSE)) {
/**
 * Logical expression for targeting webpages of an advertiser's website.
 * 
 * <p>A condition is defined as {@code operand OP argument}
 * where {@code operand} is one of the values enumerated in
 * {@link WebpageConditionOperand}, and, based on this value,
 * {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class WebpageCondition {
  /**
   * @access public
   * @var tnsWebpageConditionOperand
   */
  public $operand;

  /**
   * @access public
   * @var string
   */
  public $argument;

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
    return "WebpageCondition";
  }

  public function __construct($operand = NULL, $argument = NULL) {
    $this->operand = $operand;
    $this->argument = $argument;
  }
}}

if (!class_exists("WebpageParameter", FALSE)) {
/**
 * Parameter of Webpage criterion, expressed as a list of conditions, or
 * logical expressions, for targeting webpages of an advertiser's website.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class WebpageParameter extends CriterionParameter {
  /**
   * @access public
   * @var string
   */
  public $criterionName;

  /**
   * @access public
   * @var WebpageCondition[]
   */
  public $conditions;

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
    return "WebpageParameter";
  }

  public function __construct($criterionName = NULL, $conditions = NULL, $CriterionParameterType = NULL) {
    parent::__construct();
    $this->criterionName = $criterionName;
    $this->conditions = $conditions;
    $this->CriterionParameterType = $CriterionParameterType;
  }
}}

if (!class_exists("AdGroupBidLandscapeType", FALSE)) {
/**
 * Used to specify the type of {@code AdGroupLandscape}
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupBidLandscapeType {
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
    return "AdGroupBidLandscape.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupCriterionErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupCriterionErrorReason {
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
    return "AdGroupCriterionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupCriterionLimitExceededCriteriaLimitType", FALSE)) {
/**
 * The entity type that exceeded the limit.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupCriterionLimitExceededCriteriaLimitType {
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
    return "AdGroupCriterionLimitExceeded.CriteriaLimitType";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdxErrorReason", FALSE)) {
/**
 * The reasons for the AdX error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("BiddingErrorReason", FALSE)) {
/**
 * Reason for bidding error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BiddingErrorReason {
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
    return "BiddingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("BudgetErrorReason", FALSE)) {
/**
 * The reasons for the budget error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BudgetErrorReason {
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
    return "BudgetError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ClientTermsErrorReason", FALSE)) {
/**
 * Enums for the various reasons an error can be thrown as a result of
 * ClientTerms violation.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("CriterionType", FALSE)) {
/**
 * The types of criteria.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionType {
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
    return "Criterion.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("CriterionErrorReason", FALSE)) {
/**
 * Concrete type of criterion is required for ADD and SET operations.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionErrorReason {
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
    return "CriterionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DatabaseErrorReason", FALSE)) {
/**
 * The reasons for the database error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("DistinctErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("IdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("KeywordMatchType", FALSE)) {
/**
 * Match type of a keyword. i.e. the way we match a keyword string with
 * search queries.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class KeywordMatchType {
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
    return "KeywordMatchType";
  }

  public function __construct() {
  }
}}

if (!class_exists("LocationTargetingStatus", FALSE)) {
/**
 * Enum that represents the different Targeting Status values for a Location criterion.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class LocationTargetingStatus {
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
    return "LocationTargetingStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("NotEmptyErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("QuotaCheckErrorReason", FALSE)) {
/**
 * Enums for all the reasons an error can be thrown to the user during
 * billing quota checks.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("RegionCodeErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RegionCodeErrorReason {
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
    return "RegionCodeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequestErrorReason", FALSE)) {
/**
 * Error reason is unknown.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("SizeLimitErrorReason", FALSE)) {
/**
 * The reasons for Ad Scheduling errors.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("StatsQueryErrorReason", FALSE)) {
/**
 * The reasons for errors when querying for stats.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("TargetErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetErrorReason {
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
    return "TargetError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CriterionUserListMembershipStatus", FALSE)) {
/**
 * Membership status of the user list.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionUserListMembershipStatus {
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
    return "CriterionUserList.MembershipStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("WebpageConditionOperand", FALSE)) {
/**
 * Operand value of {@link WebpageCondition}.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class WebpageConditionOperand {
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
    return "WebpageConditionOperand";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdFormatSpec", FALSE)) {
/**
 * A placement response object which provides information about one of the ad formats
 * supported by a placement.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdFormatSpec {
  /**
   * @access public
   * @var tnsSiteConstantsAdFormat
   */
  public $format;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdFormatSpec";
  }

  public function __construct($format = NULL) {
    $this->format = $format;
  }
}}

if (!class_exists("AdSpec", FALSE)) {
/**
 * Interface for ad specifications to implement. See individual spec
 * documentation for more details on how to use each type, and
 * {@link AdSpecListSearchParameter} to understand what these specs are for.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdSpec {
  /**
   * @access public
   * @var DisplayAdSpec
   */
  public $DisplayAdSpec;

  /**
   * @access public
   * @var InStreamAdSpec
   */
  public $InStreamAdSpec;

  /**
   * @access public
   * @var TextAdSpec
   */
  public $TextAdSpec;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSpec";
  }

  public function __construct($DisplayAdSpec = NULL, $InStreamAdSpec = NULL, $TextAdSpec = NULL) {
    $this->DisplayAdSpec = $DisplayAdSpec;
    $this->InStreamAdSpec = $InStreamAdSpec;
    $this->TextAdSpec = $TextAdSpec;
  }
}}

if (!class_exists("Attribute", FALSE)) {
/**
 * {@link Attribute}s encompass the core information about a particular
 * {@link com.google.ads.api.services.targetingideas.TargetingIdea}. Some
 * attributes are for {@code KEYWORD} {@link IdeaType}s, some are for
 * {@code PLACEMENT} {@link IdeaType}s, and some are for both. Ultimately, an
 * {@link Attribute} instance simply wraps an actual value of interest. For
 * example, {@link KeywordAttribute} wraps the keyword itself, while a
 * {@link BooleanAttribute} simply wraps a boolean describing some information
 * about the keyword idea.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Attribute {
  /**
   * @access public
   * @var string
   */
  public $AttributeType;

  private $_parameterMap = array (
    "Attribute.Type" => "AttributeType",
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
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Attribute";
  }

  public function __construct($AttributeType = NULL) {
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("BidLandscapeAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a {@link BidLandscape} value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BidLandscapeAttribute extends Attribute {
  /**
   * @access public
   * @var BidLandscape
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BidLandscapeAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("BooleanAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a boolean value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BooleanAttribute extends Attribute {
  /**
   * @access public
   * @var boolean
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BooleanAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("CriterionAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a {@link Criterion} value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionAttribute extends Attribute {
  /**
   * @access public
   * @var Criterion
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CriterionAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("CurrencyCodeError", FALSE)) {
/**
 * Errors for currency codes.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CurrencyCodeError extends ApiError {
  /**
   * @access public
   * @var tnsCurrencyCodeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CurrencyCodeError";
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

if (!class_exists("DisplayAdSpec", FALSE)) {
/**
 * Placement request/response object which provides details about display
 * ad types, options, and other available configuration variables.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DisplayAdSpec {
  /**
   * @access public
   * @var DisplayType[]
   */
  public $displayTypes;

  /**
   * @access public
   * @var tnsDisplayAdSpecActivationOption[]
   */
  public $activationOptions;

  /**
   * @access public
   * @var DisplayAdSpecAdSizeSpec[]
   */
  public $adSizeSpecs;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DisplayAdSpec";
  }

  public function __construct($displayTypes = NULL, $activationOptions = NULL, $adSizeSpecs = NULL) {
    $this->displayTypes = $displayTypes;
    $this->activationOptions = $activationOptions;
    $this->adSizeSpecs = $adSizeSpecs;
  }
}}

if (!class_exists("DisplayAdSpecAdSizeSpec", FALSE)) {
/**
 * Specification for an ad size. This specification allows customization by
 * display options for more fine-grained control over returns, so that
 * customers can associate ad options with specific sizes. For example,
 * suppose the customer in general would like to see placements with
 * {@code DisplayOption.STANDARD} and {@code DisplayOption.POP_UNDER} -
 * except for 300x250 ads which should only be STANDARD. The customer would
 * create a {@code DisplayAdSpec} with {@code DisplayOption.STANDARD} and
 * {@code DisplayOption.POP_UNDER}, and also send in an {@code AdSizeSpec}
 * with {@code width} of 300, {@code} height of 250, and {@code displayOptionFilter}
 * set to {@code DisplayOption.STANDARD}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DisplayAdSpecAdSizeSpec {
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
   * @access public
   * @var tnsDisplayAdSpecActivationOption[]
   */
  public $activationOptionFilter;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DisplayAdSpec.AdSizeSpec";
  }

  public function __construct($width = NULL, $height = NULL, $activationOptionFilter = NULL) {
    $this->width = $width;
    $this->height = $height;
    $this->activationOptionFilter = $activationOptionFilter;
  }
}}

if (!class_exists("DisplayType", FALSE)) {
/**
 * Base interface for types of display ads.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DisplayType {
  /**
   * @access public
   * @var FlashDisplayType
   */
  public $FlashDisplayType;

  /**
   * @access public
   * @var HtmlDisplayType
   */
  public $HtmlDisplayType;

  /**
   * @access public
   * @var ImageDisplayType
   */
  public $ImageDisplayType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DisplayType";
  }

  public function __construct($FlashDisplayType = NULL, $HtmlDisplayType = NULL, $ImageDisplayType = NULL) {
    $this->FlashDisplayType = $FlashDisplayType;
    $this->HtmlDisplayType = $HtmlDisplayType;
    $this->ImageDisplayType = $ImageDisplayType;
  }
}}

if (!class_exists("DoubleAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a double value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DoubleAttribute extends Attribute {
  /**
   * @access public
   * @var double
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DoubleAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("FlashDisplayType", FALSE)) {
/**
 * {@link DisplayType} implementation for Flash display ads.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class FlashDisplayType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashDisplayType";
  }

  public function __construct() {
  }
}}

if (!class_exists("HtmlDisplayType", FALSE)) {
/**
 * HTML-specific options for display ads are contained within
 * this class.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class HtmlDisplayType {
  /**
   * @access public
   * @var tnsHtmlDisplayTypeHtmlOption
   */
  public $htmlOption;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "HtmlDisplayType";
  }

  public function __construct($htmlOption = NULL) {
    $this->htmlOption = $htmlOption;
  }
}}

if (!class_exists("IdeaTypeAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains an {@link IdeaType} value. For example,
 * if a {@link com.google.ads.api.services.targetingideas.TargetingIdea}
 * represents a keyword idea, its {@link IdeaTypeAttribute} would contain a
 * {@code KEYWORD} {@link IdeaType}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class IdeaTypeAttribute extends Attribute {
  /**
   * @access public
   * @var tnsIdeaType
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IdeaTypeAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("ImageDisplayType", FALSE)) {
/**
 * {@link DisplayType} implementation for images.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ImageDisplayType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageDisplayType";
  }

  public function __construct() {
  }
}}

if (!class_exists("InStreamAdInfo", FALSE)) {
/**
 * Information specific to the instream ad format. Instream ads are video ads
 * which play as part of the delivery of video content, either before, during,
 * or after the content itself.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class InStreamAdInfo {
  /**
   * @access public
   * @var integer
   */
  public $maxAdDuration;

  /**
   * @access public
   * @var integer
   */
  public $minAdDuration;

  /**
   * @access public
   * @var integer
   */
  public $medianAdDuration;

  /**
   * @access public
   * @var double
   */
  public $preRollPercent;

  /**
   * @access public
   * @var double
   */
  public $midRollPercent;

  /**
   * @access public
   * @var double
   */
  public $postRollPercent;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InStreamAdInfo";
  }

  public function __construct($maxAdDuration = NULL, $minAdDuration = NULL, $medianAdDuration = NULL, $preRollPercent = NULL, $midRollPercent = NULL, $postRollPercent = NULL) {
    $this->maxAdDuration = $maxAdDuration;
    $this->minAdDuration = $minAdDuration;
    $this->medianAdDuration = $medianAdDuration;
    $this->preRollPercent = $preRollPercent;
    $this->midRollPercent = $midRollPercent;
    $this->postRollPercent = $postRollPercent;
  }
}}

if (!class_exists("InStreamAdInfoAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains an {@link InStreamAdInfo} value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class InStreamAdInfoAttribute extends Attribute {
  /**
   * @access public
   * @var InStreamAdInfo
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InStreamAdInfoAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("InStreamAdSpec", FALSE)) {
/**
 * Placement request/response object which provides details about instream
 * ad types, options, and other available configuration variables.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class InStreamAdSpec {
  /**
   * @access public
   * @var tnsInStreamAdSpecInStreamType[]
   */
  public $inStreamTypes;

  /**
   * @access public
   * @var integer[]
   */
  public $durations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InStreamAdSpec";
  }

  public function __construct($inStreamTypes = NULL, $durations = NULL) {
    $this->inStreamTypes = $inStreamTypes;
    $this->durations = $durations;
  }
}}

if (!class_exists("IntegerAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains an integer value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class IntegerAttribute extends Attribute {
  /**
   * @access public
   * @var integer
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IntegerAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("IntegerSetAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a Set of integer values.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class IntegerSetAttribute extends Attribute {
  /**
   * @access public
   * @var integer[]
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IntegerSetAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("KeywordAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a {@link Keyword} value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class KeywordAttribute extends Attribute {
  /**
   * @access public
   * @var Keyword
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "KeywordAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("LongAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a long value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class LongAttribute extends Attribute {
  /**
   * @access public
   * @var integer
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LongAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("LongComparisonOperation", FALSE)) {
/**
 * Object representing integer comparison operations. This is usually used within
 * a particular
 * {@link com.google.ads.api.services.targetingideas.search.SearchParameter} to
 * specify the valid values requested for the specific
 * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class LongComparisonOperation {
  /**
   * @access public
   * @var integer
   */
  public $minimum;

  /**
   * @access public
   * @var integer
   */
  public $maximum;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LongComparisonOperation";
  }

  public function __construct($minimum = NULL, $maximum = NULL) {
    $this->minimum = $minimum;
    $this->maximum = $maximum;
  }
}}

if (!class_exists("LongRangeAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a {@link Range} of {@link LongValue}
 * values.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class LongRangeAttribute extends Attribute {
  /**
   * @access public
   * @var Range
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LongRangeAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("MatchesRegexError", FALSE)) {
/**
 * Errors associated with a given string not matching the provided
 * regular expression.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MatchesRegexError extends ApiError {
  /**
   * @access public
   * @var tnsMatchesRegexErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MatchesRegexError";
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

if (!class_exists("MoneyAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a {@link Money} value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MoneyAttribute extends Attribute {
  /**
   * @access public
   * @var Money
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MoneyAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("MonthlySearchVolume", FALSE)) {
/**
 * A keyword response value representing search volume for a single month. An
 * instance with a {@code null} count is valid, indicating that the information
 * is unavailable.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MonthlySearchVolume {
  /**
   * @access public
   * @var integer
   */
  public $year;

  /**
   * @access public
   * @var integer
   */
  public $month;

  /**
   * @access public
   * @var integer
   */
  public $count;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MonthlySearchVolume";
  }

  public function __construct($year = NULL, $month = NULL, $count = NULL) {
    $this->year = $year;
    $this->month = $month;
    $this->count = $count;
  }
}}

if (!class_exists("MonthlySearchVolumeAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a list of {@link MonthlySearchVolume}
 * values. The list contains the past 12 {@link MonthlySearchVolume}s
 * (excluding the current month). The first item is the data for the most
 * recent month and the last item is the data for the oldest month.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MonthlySearchVolumeAttribute extends Attribute {
  /**
   * @access public
   * @var MonthlySearchVolume[]
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MonthlySearchVolumeAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("OpportunityIdeaTypeAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains an {@link OpportunityIdeaType} value.
 * For example, if a
 * {@link com.google.ads.api.services.optimization.bulkopportunity.OpportunityIdea}
 * represents a keyword idea, its {@link OpportunityIdeaTypeAttribute} would
 * contain a {@code KEYWORD} {@link OpportunityIdeaType}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class OpportunityIdeaTypeAttribute extends Attribute {
  /**
   * @access public
   * @var tnsOpportunityIdeaType
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OpportunityIdeaTypeAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("PlacementAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a {@link Placement} value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PlacementAttribute extends Attribute {
  /**
   * @access public
   * @var Placement
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PlacementAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("PlacementTypeAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a {@link PlacementType} value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PlacementTypeAttribute extends Attribute {
  /**
   * @access public
   * @var tnsSiteConstantsPlacementType
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PlacementTypeAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("Range", FALSE)) {
/**
 * Represents a range of values that has either an upper or a lower bound.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Range {
  /**
   * @access public
   * @var ComparableValue
   */
  public $min;

  /**
   * @access public
   * @var ComparableValue
   */
  public $max;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Range";
  }

  public function __construct($min = NULL, $max = NULL) {
    $this->min = $min;
    $this->max = $max;
  }
}}

if (!class_exists("SearchParameter", FALSE)) {
/**
 * A set of {@link SearchParameter}s are supplied to the
 * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}
 * to specify how the user wants to filter the set of all possible
 * {@link com.google.ads.api.services.targetingideas.TargetingIdea}s.
 * 
 * There is a {@link SearchParameter} for all types of inputs.
 * {@link SearchParameter}s can conceptually be broken down into two types.
 * <ul>
 * <li>Input {@link SearchParameter}s provide the seed information from which
 * ideas should be generated or statistic information is desired
 * (e.g. {@link RelatedToQuerySearchParameter},
 * {@link RelatedToUrlSearchParameter}, etc).
 * Such {@link SearchParameters} are required for valid requests.</li>
 * <li>Filter {@link SearchParameter}s are used to trim down the results based
 * on {@link com.google.ads.api.services.targetingideas.attributes.Attribute}
 * related information (eg. {@link CompetitionSearchParameter}, etc.).</li>
 * </ul><p>
 * 
 * A request should only contain one instance of each {@link SearchParameter}
 * <p>One or more of the following {@link SearchParameter}s are required:<br/>
 * <ul><li>{@link CategoryProductsAndServicesSearchParameter}</li>
 * <li>{@link RelatedToQuerySearchParameter}</li>
 * <li>{@link RelatedToUrlSearchParameter}</li>
 * </ul><p>
 * <p><b>{@link IdeaType} KEYWORD supports following {@link SearchParameter}s:</b><br/>
 * <ul>
 * <li>{@link CompetitionSearchParameter}</li>
 * <li>{@link ExcludedKeywordSearchParameter}</li>
 * <li>{@link IdeaTextFilterSearchParameter}</li>
 * <li>{@link IncludeAdultContentSearchParameter}</li>
 * <li>{@link CategoryProductsAndServicesSearchParameter}</li>
 * <li>{@link LanguageSearchParameter}</li>
 * <li>{@link NetworkSearchParameter}</li>
 * <li>{@link RelatedToQuerySearchParameter}</li>
 * <li>{@link RelatedToUrlSearchParameter}</li>
 * <li>{@link SearchVolumeSearchParameter}</li>
 * </ul><p>
 * <p><b>{@link IdeaType} PLACEMENT supports following {@link SearchParameter}s:</b><br/>
 * <ul>
 * <li>{@link LanguageSearchParameter}</li>
 * <li>{@link PlacementTypeSearchParameter}</li>
 * <li>{@link RelatedToQuerySearchParameter}</li>
 * <li>{@link RelatedToUrlSearchParameter}</li>
 * </ul><p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SearchParameter {
  /**
   * @access public
   * @var string
   */
  public $SearchParameterType;

  private $_parameterMap = array (
    "SearchParameter.Type" => "SearchParameterType",
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
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SearchParameter";
  }

  public function __construct($SearchParameterType = NULL) {
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("SearchVolumeSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} that specifies the level of search volume expected in results,
 * and it has a direct relationship to
 * {@link com.google.ads.api.services.targetingideas.external.AttributeType#SEARCH_VOLUME}.
 * Absence of a {@link SearchVolumeSearchParameter} in a
 * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector} is
 * equivalent to having no constraint on search volume specified.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SearchVolumeSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var LongComparisonOperation
   */
  public $operation;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SearchVolumeSearchParameter";
  }

  public function __construct($operation = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->operation = $operation;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("StringAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a string value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class StringAttribute extends Attribute {
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
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("TargetingIdea", FALSE)) {
/**
 * Represents a {@link TargetingIdea} returned by search criteria specified in
 * the {@link TargetingIdeaSelector}. Targeting ideas are keywords or placements
 * that are similar to those the user inputs.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetingIdea {
  /**
   * @access public
   * @var Type_AttributeMapEntry[]
   */
  public $data;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingIdea";
  }

  public function __construct($data = NULL) {
    $this->data = $data;
  }
}}

if (!class_exists("TargetingIdeaError", FALSE)) {
/**
 * Base error class for the
 * {@link com.google.ads.api.services.targetingideas.TargetingIdeaService}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetingIdeaError extends ApiError {
  /**
   * @access public
   * @var tnsTargetingIdeaErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingIdeaError";
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

if (!class_exists("TargetingIdeaPage", FALSE)) {
/**
 * Contains a subset of {@link TargetingIdea}s from the search criteria
 * specified by a {@link TargetingIdeaSelector}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetingIdeaPage {
  /**
   * @access public
   * @var integer
   */
  public $totalNumEntries;

  /**
   * @access public
   * @var TargetingIdea[]
   */
  public $entries;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingIdeaPage";
  }

  public function __construct($totalNumEntries = NULL, $entries = NULL) {
    $this->totalNumEntries = $totalNumEntries;
    $this->entries = $entries;
  }
}}

if (!class_exists("TargetingIdeaSelector", FALSE)) {
/**
 * A descriptor for finding {@link TargetingIdea}s that match the specified
 * criteria.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetingIdeaSelector {
  /**
   * @access public
   * @var SearchParameter[]
   */
  public $searchParameters;

  /**
   * @access public
   * @var tnsIdeaType
   */
  public $ideaType;

  /**
   * @access public
   * @var tnsRequestType
   */
  public $requestType;

  /**
   * @access public
   * @var tnsAttributeType[]
   */
  public $requestedAttributeTypes;

  /**
   * @access public
   * @var Paging
   */
  public $paging;

  /**
   * @access public
   * @var string
   */
  public $localeCode;

  /**
   * @access public
   * @var string
   */
  public $currencyCode;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingIdeaSelector";
  }

  public function __construct($searchParameters = NULL, $ideaType = NULL, $requestType = NULL, $requestedAttributeTypes = NULL, $paging = NULL, $localeCode = NULL, $currencyCode = NULL) {
    $this->searchParameters = $searchParameters;
    $this->ideaType = $ideaType;
    $this->requestType = $requestType;
    $this->requestedAttributeTypes = $requestedAttributeTypes;
    $this->paging = $paging;
    $this->localeCode = $localeCode;
    $this->currencyCode = $currencyCode;
  }
}}

if (!class_exists("TextAdSpec", FALSE)) {
/**
 * Specification for a text ad. Currently there are no customizable
 * options on text ads, but the presence of a {@code TextAdSpec} in a
 * request indicates that text ads are a desired result, and the presence
 * of a {@code TextAdSpec} in a response indicates that there are text
 * ads available in the requested inventory.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TextAdSpec {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TextAdSpec";
  }

  public function __construct() {
  }
}}

if (!class_exists("TrafficEstimatorError", FALSE)) {
/**
 * Base error class for
 * {@link com.google.ads.api.services.trafficestimator.TrafficEstimatorService}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TrafficEstimatorError extends ApiError {
  /**
   * @access public
   * @var tnsTrafficEstimatorErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TrafficEstimatorError";
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

if (!class_exists("Type_AttributeMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Type
 * and value of type Attribute.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Type_AttributeMapEntry {
  /**
   * @access public
   * @var tnsAttributeType
   */
  public $key;

  /**
   * @access public
   * @var Attribute
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Type_AttributeMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("WebpageDescriptor", FALSE)) {
/**
 * Basic information about a webpage.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class WebpageDescriptor {
  /**
   * @access public
   * @var string
   */
  public $url;

  /**
   * @access public
   * @var string
   */
  public $title;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "WebpageDescriptor";
  }

  public function __construct($url = NULL, $title = NULL) {
    $this->url = $url;
    $this->title = $title;
  }
}}

if (!class_exists("WebpageDescriptorAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a {@link WebpageDescriptor} value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class WebpageDescriptorAttribute extends Attribute {
  /**
   * @access public
   * @var WebpageDescriptor
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "WebpageDescriptorAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("AttributeType", FALSE)) {
/**
 * Represents the type of
 * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
 * <p><b>{@link IdeaType} KEYWORD supports the following {@link AttributeType}s:</b><br/>
 * <ul><li>{@link #AD_SHARE}</li>
 * <li>{@link #AVERAGE_CPC}</li>
 * <li>{@link #AVERAGE_TARGETED_MONTHLY_SEARCHES}</li>
 * <li>{@link #CATEGORY_PRODUCTS_AND_SERVICES}</li>
 * <li>{@link #COMPETITION}</li>
 * <li>{@link #CRITERION}</li>
 * <li>{@link #EXTRACTED_FROM_WEBPAGE}</li>
 * <li>{@link #GLOBAL_MONTHLY_SEARCHES}</li>
 * <li>{@link #IDEA_TYPE}</li>
 * <li>{@link #KEYWORD}</li>
 * <li>{@link #KEYWORD_CATEGORY}</li>
 * <li>{@link #KEYWORD_TEXT}</li>
 * <li>{@link #NEGATIVE_KEYWORDS}</li>
 * <li>{@link #NGRAM_GROUP}</li>
 * <li>{@link #SEARCH_SHARE}</li>
 * <li>{@link #SEARCH_VOLUME}</li>
 * <li>{@link #TARGETED_MONTHLY_SEARCHES}</li>
 * </ul>
 * <p><b>{@link IdeaType} PLACEMENT supports the following {@link AttributeType}s:</b><br/>
 * <ul><li>{@link #AD_TYPE_SPEC}</li>
 * <li>{@link #APPROX_CONTENT_IMPRESSIONS_PER_DAY}</li>
 * <li>{@link #CRITERION}</li>
 * <li>{@link #FORMATS}</li>
 * <li>{@link #IDEA_TYPE}</li>
 * <li>{@link #IN_STREAM_AD_INFO}</li>
 * <li>{@link #PLACEMENT}</li>
 * <li>{@link #PLACEMENT_CATEGORY}</li>
 * <li>{@link #PLACEMENT_NAME}</li>
 * <li>{@link #PLACEMENT_TYPE}</li>
 * <li>{@link #PUBLISHER_DESCRIPTION}</li>
 * <li>{@link #SAMPLE_URL}</li>
 * </ul>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AttributeType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AttributeType";
  }

  public function __construct() {
  }
}}

if (!class_exists("CompetitionSearchParameterLevel", FALSE)) {
/**
 * An enumeration of possible values to be used in conjunction with the
 * {@link CompetitionSearchParameter} to specify the granularity of
 * competition to be filtered.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CompetitionSearchParameterLevel {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CompetitionSearchParameter.Level";
  }

  public function __construct() {
  }
}}

if (!class_exists("CurrencyCodeErrorReason", FALSE)) {
/**
 * Encodes the reason (cause) of a particular {@link CurrencyCodeError}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CurrencyCodeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CurrencyCodeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DisplayAdSpecActivationOption", FALSE)) {
/**
 * Activation options. Describes the ad's activated mode.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DisplayAdSpecActivationOption {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DisplayAdSpec.ActivationOption";
  }

  public function __construct() {
  }
}}

if (!class_exists("HtmlDisplayTypeHtmlOption", FALSE)) {
/**
 * Served by a third party.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class HtmlDisplayTypeHtmlOption {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "HtmlDisplayType.HtmlOption";
  }

  public function __construct() {
  }
}}

if (!class_exists("IdeaType", FALSE)) {
/**
 * Represents the type of idea.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class IdeaType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IdeaType";
  }

  public function __construct() {
  }
}}

if (!class_exists("InStreamAdSpecInStreamType", FALSE)) {
/**
 * Display subtype.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class InStreamAdSpecInStreamType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InStreamAdSpec.InStreamType";
  }

  public function __construct() {
  }
}}

if (!class_exists("MatchesRegexErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MatchesRegexErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MatchesRegexError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("OpportunityIdeaType", FALSE)) {
/**
 * Represents the type of opportunity.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class OpportunityIdeaType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OpportunityIdeaType";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequestType", FALSE)) {
/**
 * Represents the type of the request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RequestType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequestType";
  }

  public function __construct() {
  }
}}

if (!class_exists("SiteConstantsAdFormat", FALSE)) {
/**
 * Enumerates the ad formats which can be reported in search results.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SiteConstantsAdFormat {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SiteConstants.AdFormat";
  }

  public function __construct() {
  }
}}

if (!class_exists("SiteConstantsPlacementType", FALSE)) {
/**
 * A placement request and response value indicating the type of site or other medium
 * (for example, a web page, in a feed, in a video) where ads will appear.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SiteConstantsPlacementType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SiteConstants.PlacementType";
  }

  public function __construct() {
  }
}}

if (!class_exists("TargetingIdeaErrorReason", FALSE)) {
/**
 * An enumeration of
 * {@link com.google.ads.api.services.targetingideas.TargetingIdeaService}
 * specific errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetingIdeaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingIdeaError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("TrafficEstimatorErrorReason", FALSE)) {
/**
 * When the request with {@code null} campaign ID in
 * {@link com.google.ads.api.services.trafficestimator.CampaignEstimateRequest}
 * contains an
 * {@link com.google.ads.api.services.trafficestimator.AdGroupEstimateRequest}
 * with an ID.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TrafficEstimatorErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TrafficEstimatorError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("TargetingIdeaServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a page of ideas that match the query described by the specified
 * {@link TargetingIdeaSelector}.
 * 
 * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
 * less.  Large result sets must be composed through multiple calls to this method, advancing the
 * paging {@code startIndex} value by {@code numberResults} with each call.
 * 
 * <p>Only a relatively small total number of results will be available through this method.
 * Much larger result sets may be available using
 * {@link #getBulkKeywordIdeas(TargetingIdeaSelector)} at the price of reduced flexibility in
 * selector options.
 * 
 * @param selector Query describing the types of results to return when
 * finding matches (similar keyword ideas/placement ideas).
 * @return A {@link TargetingIdeaPage} of results, that is a subset of the
 * list of possible ideas meeting the criteria of the
 * {@link TargetingIdeaSelector}.
 * @throws ApiException If problems occurred while querying for ideas.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetingIdeaServiceGet {
  /**
   * @access public
   * @var TargetingIdeaSelector
   */
  public $selector;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
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

if (!class_exists("TargetingIdeaServiceGetResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetingIdeaServiceGetResponse {
  /**
   * @access public
   * @var TargetingIdeaPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
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

if (!class_exists("getBulkKeywordIdeas", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a page of ideas that match the query described by the specified
 * {@link TargetingIdeaSelector}.  This method is specialized for returning
 * bulk keyword ideas, and thus the selector must be set for
 * {@link com.google.ads.api.services.targetingideas.attributes.RequestType#IDEAS} and
 * {@link com.google.ads.api.services.common.optimization.attributes.IdeaType#KEYWORD}.
 * A limited, fixed set of attributes will be returned.
 * 
 * <p>A single-valued
 * {@link com.google.ads.api.services.targetingideas.search.RelatedToUrlSearchParameter}
 * must be supplied.  Single-valued
 * {@link com.google.ads.api.services.targetingideas.search.LanguageSearchParameter} and
 * {@link com.google.ads.api.services.targetingideas.search.LocationSearchParameter} are
 * both optional.  Other search parameters compatible with a keyword query may also be
 * supplied.
 * 
 * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800
 * or less. If a URL based search is performed it will return up to 100 keywords when the site is
 * not owned, or up to 800 if it is. Number of keywords returned on a keyword based search is up
 * to 800. Large result sets must be composed through multiple calls to this method, advancing the
 * paging {@code startIndex} value by {@code numberResults} with each call.
 * 
 * <p>This method can make many more results available than {@link #get(TargetingIdeaSelector)},
 * but allows less control over the query. For fine-tuned queries that do not need large numbers
 * of results, prefer {@link #get(TargetingIdeaSelector)}.
 * 
 * @param selector Query describing the bulk keyword ideas to return.
 * @return A {@link TargetingIdeaPage} of results, that is a subset of the
 * list of possible ideas meeting the criteria of the
 * {@link TargetingIdeaSelector}.
 * @throws ApiException If problems occurred while querying for ideas.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class getBulkKeywordIdeas {
  /**
   * @access public
   * @var TargetingIdeaSelector
   */
  public $selector;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
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

if (!class_exists("getBulkKeywordIdeasResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class getBulkKeywordIdeasResponse {
  /**
   * @access public
   * @var TargetingIdeaPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
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

if (!class_exists("AdGroupCriterionError", FALSE)) {
/**
 * Base error class for Ad Group Criterion Service.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupCriterionError extends ApiError {
  /**
   * @access public
   * @var tnsAdGroupCriterionErrorReason
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
    return "AdGroupCriterionError";
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

if (!class_exists("AdGroupCriterionLimitExceeded", FALSE)) {
/**
 * Signals that too many criteria were added to some ad group.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupCriterionLimitExceeded extends EntityCountLimitExceeded {
  /**
   * @access public
   * @var tnsAdGroupCriterionLimitExceededCriteriaLimitType
   */
  public $limitType;

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
    return "AdGroupCriterionLimitExceeded";
  }

  public function __construct($limitType = NULL, $reason = NULL, $enclosingId = NULL, $limit = NULL, $accountLimitType = NULL, $existingCount = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->limitType = $limitType;
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

if (!class_exists("AdxError", FALSE)) {
/**
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
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

if (!class_exists("BidLandscape", FALSE)) {
/**
 * Represents data about a bid landscape for an ad group or criterion.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BidLandscape extends DataEntry {
  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var integer
   */
  public $adGroupId;

  /**
   * @access public
   * @var string
   */
  public $startDate;

  /**
   * @access public
   * @var string
   */
  public $endDate;

  /**
   * @access public
   * @var BidLandscapeLandscapePoint[]
   */
  public $landscapePoints;

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
    return "BidLandscape";
  }

  public function __construct($campaignId = NULL, $adGroupId = NULL, $startDate = NULL, $endDate = NULL, $landscapePoints = NULL, $DataEntryType = NULL) {
    parent::__construct();
    $this->campaignId = $campaignId;
    $this->adGroupId = $adGroupId;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->landscapePoints = $landscapePoints;
    $this->DataEntryType = $DataEntryType;
  }
}}

if (!class_exists("CriterionBidLandscape", FALSE)) {
/**
 * The bid landscape for a criterion.  A bid landscape estimates how a
 * a criterion will perform based on different bid amounts.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionBidLandscape extends BidLandscape {
  /**
   * @access public
   * @var integer
   */
  public $criterionId;

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
    return "CriterionBidLandscape";
  }

  public function __construct($criterionId = NULL, $campaignId = NULL, $adGroupId = NULL, $startDate = NULL, $endDate = NULL, $landscapePoints = NULL, $DataEntryType = NULL) {
    parent::__construct();
    $this->criterionId = $criterionId;
    $this->campaignId = $campaignId;
    $this->adGroupId = $adGroupId;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->landscapePoints = $landscapePoints;
    $this->DataEntryType = $DataEntryType;
  }
}}

if (!class_exists("CriterionPolicyError", FALSE)) {
/**
 * Contains the policy violations for a single BiddableAdGroupCriterion.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CriterionPolicyError extends PolicyViolationError {
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
    return "CriterionPolicyError";
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

if (!class_exists("DoubleValue", FALSE)) {
/**
 * Number value type for constructing double valued ranges.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class DoubleValue extends NumberValue {
  /**
   * @access public
   * @var double
   */
  public $number;

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
    return "DoubleValue";
  }

  public function __construct($number = NULL, $ComparableValueType = NULL) {
    parent::__construct();
    $this->number = $number;
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("LongValue", FALSE)) {
/**
 * Number value type for constructing long valued ranges.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class LongValue extends NumberValue {
  /**
   * @access public
   * @var integer
   */
  public $number;

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
    return "LongValue";
  }

  public function __construct($number = NULL, $ComparableValueType = NULL) {
    parent::__construct();
    $this->number = $number;
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("AdFormatSpecListAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a list of {@link AdFormatSpec} values.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdFormatSpecListAttribute extends Attribute {
  /**
   * @access public
   * @var AdFormatSpec[]
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdFormatSpecListAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("AdSpecListAttribute", FALSE)) {
/**
 * {@link Attribute} type that contains a list of {@link AdSpec} values.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdSpecListAttribute extends Attribute {
  /**
   * @access public
   * @var AdSpec[]
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSpecListAttribute";
  }

  public function __construct($value = NULL, $AttributeType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->AttributeType = $AttributeType;
  }
}}

if (!class_exists("AdSpecListSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for {@code PLACEMENT} {@link IdeaType}s used to
 * filter the results by the list of {@link AdSpec}s. See {@link AdSpec}
 * documentation for details on available options.
 * <p>This element is supported by following {@link IdeaType}s: PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdSpecListSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var AdSpec[]
   */
  public $adSpecs;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSpecListSearchParameter";
  }

  public function __construct($adSpecs = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->adSpecs = $adSpecs;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("CategoryProductsAndServicesSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
 * sets a keyword category that all search results should belong to.
 * Uses the newer "Products and Services" taxonomy.
 * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CategoryProductsAndServicesSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var integer
   */
  public $categoryId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CategoryProductsAndServicesSearchParameter";
  }

  public function __construct($categoryId = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->categoryId = $categoryId;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("CompetitionSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s used to
 * filter the results by the amount of competition (eg: LOW, MEDIUM, HIGH).
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CompetitionSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var tnsCompetitionSearchParameterLevel[]
   */
  public $levels;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CompetitionSearchParameter";
  }

  public function __construct($levels = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->levels = $levels;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("ExcludedKeywordSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
 * specifies {@link Keyword}s that should be excluded from the results.<p>
 * 
 * The {@link KeywordMatchType} associated with these keywords is used to
 * provide various filtering strategies. For example, the excluded keyword
 * <b>"brand x player"</b> will exclude ideas from the resulting ideas as
 * described by the table below.
 * 
 * <table border="1">
 * <tr style="font-weight: bold;">
 * <th>Idea</th>
 * <th>{@code BROAD}</th>
 * <th>{@code PHRASE}</th>
 * <th>{@code EXACT}</th>
 * </tr>
 * <tr>
 * <td>brand x player</td>
 * <td>Exclude</td>
 * <td>Exclude</td>
 * <td>Exclude</td>
 * </tr>
 * <tr>
 * <td>blu-ray brand x player</td>
 * <td>Exclude</td>
 * <td>Exclude</td>
 * <td>Include</td>
 * </tr>
 * <tr>
 * <td>brand x dvd player</td>
 * <td>Exclude</td>
 * <td>Include</td>
 * <td>Include</td>
 * </tr>
 * <tr>
 * <td>brand x dvd</td>
 * <td>Include</td>
 * <td>Include</td>
 * <td>Include</td>
 * </tr>
 * </table>
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExcludedKeywordSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var Keyword[]
   */
  public $keywords;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ExcludedKeywordSearchParameter";
  }

  public function __construct($keywords = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->keywords = $keywords;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("IdeaTextFilterSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
 * specifies a collection of strings by which the results should be
 * constrained. This guarantees that each idea in the result will match
 * at least one of the {@code included} values.
 * 
 * For this {@link SearchParameter}, excluded items will always take
 * priority over included ones.
 * 
 * This can handle a maximum of 200 (included + excluded) elements.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class IdeaTextFilterSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var string[]
   */
  public $included;

  /**
   * @access public
   * @var string[]
   */
  public $excluded;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IdeaTextFilterSearchParameter";
  }

  public function __construct($included = NULL, $excluded = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->included = $included;
    $this->excluded = $excluded;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("IncludeAdultContentSearchParameter", FALSE)) {
/**
 * {@link SearchParameter} that specifies whether adult content should be
 * returned.<p>
 * 
 * Presence of this {@link SearchParameter} will allow adult keywords
 * to be included in the results.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class IncludeAdultContentSearchParameter extends SearchParameter {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IncludeAdultContentSearchParameter";
  }

  public function __construct($SearchParameterType = NULL) {
    parent::__construct();
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("LanguageSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for both {@code PLACEMENT} and {@code KEYWORD}
 * {@link IdeaType}s used to indicate multiple language being targeted. This can
 * be used, for example, to search for {@code KEYWORD} {@link IdeaType}s that
 * are best for Japanese language.
 * 
 * <p>The service allows at most one language to be targeted for KEYWORD requests and 10 languages
 * for PLACEMENT requests.
 * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class LanguageSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var Language[]
   */
  public $languages;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LanguageSearchParameter";
  }

  public function __construct($languages = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->languages = $languages;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("LocationSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for both {@code PLACEMENT} and {@code KEYWORD}
 * {@link IdeaType}s used to indicate the locations being targeted. This can
 * be used, for example, to search for {@code KEYWORD} {@link IdeaType}s that
 * are best for Japan and Los Angeles.
 * 
 * <p>This parameter replaces the {@code CountryTargetSearchParameter}.
 * 
 * <p>Warning: Not all back-ends support sub-country precision.
 * 
 * <p>The service allows up to 10 locations to be targeted for KEYWORD requests and 50 locations
 * for PLACEMENT requests.
 * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class LocationSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var Location[]
   */
  public $locations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LocationSearchParameter";
  }

  public function __construct($locations = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->locations = $locations;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("NetworkSearchParameter", FALSE)) {
/**
 * <p>A {@link SearchParameter} for setting the search network. Currently we
 * support two network setting options:
 * <ul>
 * <li>Google search network</li>
 * <li>Google search network and AFS</li>
 * </ul>
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NetworkSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var NetworkSetting
   */
  public $networkSetting;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NetworkSearchParameter";
  }

  public function __construct($networkSetting = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->networkSetting = $networkSetting;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("PlacementTypeSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for {@code PLACEMENT} {@link IdeaType}s
 * used to filter results based on the type of website, known as
 * {@link com.google.ads.api.services.targetingideas.attributes.Type#PLACEMENT_TYPE},
 * that they appear in. For example, searches may be limited to find
 * results that only appear within mobile websites or feeds.
 * <p>This element is supported by following {@link IdeaType}s: PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PlacementTypeSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var tnsSiteConstantsPlacementType[]
   */
  public $placementTypes;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PlacementTypeSearchParameter";
  }

  public function __construct($placementTypes = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->placementTypes = $placementTypes;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("RelatedToQuerySearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for a query of {@code String}s.
 * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RelatedToQuerySearchParameter extends SearchParameter {
  /**
   * @access public
   * @var string[]
   */
  public $queries;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RelatedToQuerySearchParameter";
  }

  public function __construct($queries = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->queries = $queries;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("RelatedToUrlSearchParameter", FALSE)) {
/**
 * A {@link SearchParameter} for {@code KEYWORD} and {@code PLACEMENT}
 * {@link IdeaType}s that specifies a set of URLs that results should
 * in some way be related too. For example, keyword results would be
 * similar to content keywords found on the related URLs.
 * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RelatedToUrlSearchParameter extends SearchParameter {
  /**
   * @access public
   * @var string[]
   */
  public $urls;

  /**
   * @access public
   * @var boolean
   */
  public $includeSubUrls;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RelatedToUrlSearchParameter";
  }

  public function __construct($urls = NULL, $includeSubUrls = NULL, $SearchParameterType = NULL) {
    parent::__construct();
    $this->urls = $urls;
    $this->includeSubUrls = $includeSubUrls;
    $this->SearchParameterType = $SearchParameterType;
  }
}}

if (!class_exists("AdGroupBidLandscape", FALSE)) {
/**
 * Represents data about a bidlandscape for an adgroup.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupBidLandscape extends BidLandscape {
  /**
   * @access public
   * @var tnsAdGroupBidLandscapeType
   */
  public $type;

  /**
   * @access public
   * @var boolean
   */
  public $landscapeCurrent;

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
    return "AdGroupBidLandscape";
  }

  public function __construct($type = NULL, $landscapeCurrent = NULL, $campaignId = NULL, $adGroupId = NULL, $startDate = NULL, $endDate = NULL, $landscapePoints = NULL, $DataEntryType = NULL) {
    parent::__construct();
    $this->type = $type;
    $this->landscapeCurrent = $landscapeCurrent;
    $this->campaignId = $campaignId;
    $this->adGroupId = $adGroupId;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->landscapePoints = $landscapePoints;
    $this->DataEntryType = $DataEntryType;
  }
}}

if (!class_exists("TargetingIdeaService", FALSE)) {
/**
 * TargetingIdeaService
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 * @author WSDLInterpreter
 */
class TargetingIdeaService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "TargetingIdeaServiceGetResponse",
    "get" => "TargetingIdeaServiceGet",
    "mutate" => "TargetingIdeaServiceMutate",
    "mutateResponse" => "TargetingIdeaServiceMutateResponse",
    "mutateCallToAction" => "TargetingIdeaServiceMutateCallToAction",
    "search" => "TargetingIdeaServiceSearch",
    "Function" => "FeedFunction",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "AdGroupBidLandscape" => "AdGroupBidLandscape",
    "BidLandscape" => "BidLandscape",
    "AdGroupCriterionError" => "AdGroupCriterionError",
    "ApiError" => "ApiError",
    "AdGroupCriterionLimitExceeded" => "AdGroupCriterionLimitExceeded",
    "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
    "AdxError" => "AdxError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "DataEntry" => "DataEntry",
    "BidLandscape.LandscapePoint" => "BidLandscapeLandscapePoint",
    "BiddingError" => "BiddingError",
    "BudgetError" => "BudgetError",
    "ClientTermsError" => "ClientTermsError",
    "CollectionSizeError" => "CollectionSizeError",
    "ComparableValue" => "ComparableValue",
    "Criterion" => "Criterion",
    "CriterionBidLandscape" => "CriterionBidLandscape",
    "CriterionError" => "CriterionError",
    "CriterionParameter" => "CriterionParameter",
    "CriterionPolicyError" => "CriterionPolicyError",
    "PolicyViolationError" => "PolicyViolationError",
    "DatabaseError" => "DatabaseError",
    "DateError" => "DateError",
    "DistinctError" => "DistinctError",
    "DoubleValue" => "DoubleValue",
    "NumberValue" => "NumberValue",
    "EntityNotFound" => "EntityNotFound",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "Keyword" => "Keyword",
    "Language" => "Language",
    "Location" => "Location",
    "LongValue" => "LongValue",
    "MobileAppCategory" => "MobileAppCategory",
    "MobileApplication" => "MobileApplication",
    "Money" => "Money",
    "NetworkSetting" => "NetworkSetting",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "OperationAccessDenied" => "OperationAccessDenied",
    "Paging" => "Paging",
    "Placement" => "Placement",
    "Platform" => "Platform",
    "PolicyViolationError.Part" => "PolicyViolationErrorPart",
    "PolicyViolationKey" => "PolicyViolationKey",
    "Product" => "Product",
    "ProductCondition" => "ProductCondition",
    "ProductConditionOperand" => "ProductConditionOperand",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RegionCodeError" => "RegionCodeError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "SizeLimitError" => "SizeLimitError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StatsQueryError" => "StatsQueryError",
    "StringLengthError" => "StringLengthError",
    "TargetError" => "TargetError",
    "CriterionUserInterest" => "CriterionUserInterest",
    "CriterionUserList" => "CriterionUserList",
    "Vertical" => "Vertical",
    "Webpage" => "Webpage",
    "WebpageCondition" => "WebpageCondition",
    "WebpageParameter" => "WebpageParameter",
    "AdGroupBidLandscape.Type" => "AdGroupBidLandscapeType",
    "AdGroupCriterionError.Reason" => "AdGroupCriterionErrorReason",
    "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
    "AdxError.Reason" => "AdxErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BiddingError.Reason" => "BiddingErrorReason",
    "BudgetError.Reason" => "BudgetErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "Criterion.Type" => "CriterionType",
    "CriterionError.Reason" => "CriterionErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "KeywordMatchType" => "KeywordMatchType",
    "LocationTargetingStatus" => "LocationTargetingStatus",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RegionCodeError.Reason" => "RegionCodeErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "StatsQueryError.Reason" => "StatsQueryErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "TargetError.Reason" => "TargetErrorReason",
    "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
    "WebpageConditionOperand" => "WebpageConditionOperand",
    "AdFormatSpec" => "AdFormatSpec",
    "AdFormatSpecListAttribute" => "AdFormatSpecListAttribute",
    "Attribute" => "Attribute",
    "AdSpec" => "AdSpec",
    "AdSpecListAttribute" => "AdSpecListAttribute",
    "AdSpecListSearchParameter" => "AdSpecListSearchParameter",
    "SearchParameter" => "SearchParameter",
    "BidLandscapeAttribute" => "BidLandscapeAttribute",
    "BooleanAttribute" => "BooleanAttribute",
    "CategoryProductsAndServicesSearchParameter" => "CategoryProductsAndServicesSearchParameter",
    "CompetitionSearchParameter" => "CompetitionSearchParameter",
    "CriterionAttribute" => "CriterionAttribute",
    "CurrencyCodeError" => "CurrencyCodeError",
    "DisplayAdSpec" => "DisplayAdSpec",
    "DisplayAdSpec.AdSizeSpec" => "DisplayAdSpecAdSizeSpec",
    "DisplayType" => "DisplayType",
    "DoubleAttribute" => "DoubleAttribute",
    "ExcludedKeywordSearchParameter" => "ExcludedKeywordSearchParameter",
    "FlashDisplayType" => "FlashDisplayType",
    "HtmlDisplayType" => "HtmlDisplayType",
    "IdeaTextFilterSearchParameter" => "IdeaTextFilterSearchParameter",
    "IdeaTypeAttribute" => "IdeaTypeAttribute",
    "ImageDisplayType" => "ImageDisplayType",
    "InStreamAdInfo" => "InStreamAdInfo",
    "InStreamAdInfoAttribute" => "InStreamAdInfoAttribute",
    "InStreamAdSpec" => "InStreamAdSpec",
    "IncludeAdultContentSearchParameter" => "IncludeAdultContentSearchParameter",
    "IntegerAttribute" => "IntegerAttribute",
    "IntegerSetAttribute" => "IntegerSetAttribute",
    "KeywordAttribute" => "KeywordAttribute",
    "LanguageSearchParameter" => "LanguageSearchParameter",
    "LocationSearchParameter" => "LocationSearchParameter",
    "LongAttribute" => "LongAttribute",
    "LongComparisonOperation" => "LongComparisonOperation",
    "LongRangeAttribute" => "LongRangeAttribute",
    "MatchesRegexError" => "MatchesRegexError",
    "MoneyAttribute" => "MoneyAttribute",
    "MonthlySearchVolume" => "MonthlySearchVolume",
    "MonthlySearchVolumeAttribute" => "MonthlySearchVolumeAttribute",
    "NetworkSearchParameter" => "NetworkSearchParameter",
    "OpportunityIdeaTypeAttribute" => "OpportunityIdeaTypeAttribute",
    "PlacementAttribute" => "PlacementAttribute",
    "PlacementTypeAttribute" => "PlacementTypeAttribute",
    "PlacementTypeSearchParameter" => "PlacementTypeSearchParameter",
    "Range" => "Range",
    "RelatedToQuerySearchParameter" => "RelatedToQuerySearchParameter",
    "RelatedToUrlSearchParameter" => "RelatedToUrlSearchParameter",
    "SearchVolumeSearchParameter" => "SearchVolumeSearchParameter",
    "StringAttribute" => "StringAttribute",
    "TargetingIdea" => "TargetingIdea",
    "TargetingIdeaError" => "TargetingIdeaError",
    "TargetingIdeaPage" => "TargetingIdeaPage",
    "TargetingIdeaSelector" => "TargetingIdeaSelector",
    "TextAdSpec" => "TextAdSpec",
    "TrafficEstimatorError" => "TrafficEstimatorError",
    "Type_AttributeMapEntry" => "Type_AttributeMapEntry",
    "WebpageDescriptor" => "WebpageDescriptor",
    "WebpageDescriptorAttribute" => "WebpageDescriptorAttribute",
    "AttributeType" => "AttributeType",
    "CompetitionSearchParameter.Level" => "CompetitionSearchParameterLevel",
    "CurrencyCodeError.Reason" => "CurrencyCodeErrorReason",
    "DisplayAdSpec.ActivationOption" => "DisplayAdSpecActivationOption",
    "HtmlDisplayType.HtmlOption" => "HtmlDisplayTypeHtmlOption",
    "IdeaType" => "IdeaType",
    "InStreamAdSpec.InStreamType" => "InStreamAdSpecInStreamType",
    "MatchesRegexError.Reason" => "MatchesRegexErrorReason",
    "OpportunityIdeaType" => "OpportunityIdeaType",
    "RequestType" => "RequestType",
    "SiteConstants.AdFormat" => "SiteConstantsAdFormat",
    "SiteConstants.PlacementType" => "SiteConstantsPlacementType",
    "TargetingIdeaError.Reason" => "TargetingIdeaErrorReason",
    "TrafficEstimatorError.Reason" => "TrafficEstimatorErrorReason",
    "getBulkKeywordIdeas" => "getBulkKeywordIdeas",
    "getBulkKeywordIdeasResponse" => "getBulkKeywordIdeasResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/o/v201309/TargetingIdeaService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = TargetingIdeaService::$classmap;
    parent::__construct($wsdl, $options, $user, 'TargetingIdeaService', 'https://adwords.google.com/api/adwords/o/v201309');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a page of ideas that match the query described by the specified
   * {@link TargetingIdeaSelector}.
   * 
   * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
   * less.  Large result sets must be composed through multiple calls to this method, advancing the
   * paging {@code startIndex} value by {@code numberResults} with each call.
   * 
   * <p>Only a relatively small total number of results will be available through this method.
   * Much larger result sets may be available using
   * {@link #getBulkKeywordIdeas(TargetingIdeaSelector)} at the price of reduced flexibility in
   * selector options.
   * 
   * @param selector Query describing the types of results to return when
   * finding matches (similar keyword ideas/placement ideas).
   * @return A {@link TargetingIdeaPage} of results, that is a subset of the
   * list of possible ideas meeting the criteria of the
   * {@link TargetingIdeaSelector}.
   * @throws ApiException If problems occurred while querying for ideas.
   */
  public function get($selector) {
    $arg = new TargetingIdeaServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a page of ideas that match the query described by the specified
   * {@link TargetingIdeaSelector}.  This method is specialized for returning
   * bulk keyword ideas, and thus the selector must be set for
   * {@link com.google.ads.api.services.targetingideas.attributes.RequestType#IDEAS} and
   * {@link com.google.ads.api.services.common.optimization.attributes.IdeaType#KEYWORD}.
   * A limited, fixed set of attributes will be returned.
   * 
   * <p>A single-valued
   * {@link com.google.ads.api.services.targetingideas.search.RelatedToUrlSearchParameter}
   * must be supplied.  Single-valued
   * {@link com.google.ads.api.services.targetingideas.search.LanguageSearchParameter} and
   * {@link com.google.ads.api.services.targetingideas.search.LocationSearchParameter} are
   * both optional.  Other search parameters compatible with a keyword query may also be
   * supplied.
   * 
   * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800
   * or less. If a URL based search is performed it will return up to 100 keywords when the site is
   * not owned, or up to 800 if it is. Number of keywords returned on a keyword based search is up
   * to 800. Large result sets must be composed through multiple calls to this method, advancing the
   * paging {@code startIndex} value by {@code numberResults} with each call.
   * 
   * <p>This method can make many more results available than {@link #get(TargetingIdeaSelector)},
   * but allows less control over the query. For fine-tuned queries that do not need large numbers
   * of results, prefer {@link #get(TargetingIdeaSelector)}.
   * 
   * @param selector Query describing the bulk keyword ideas to return.
   * @return A {@link TargetingIdeaPage} of results, that is a subset of the
   * list of possible ideas meeting the criteria of the
   * {@link TargetingIdeaSelector}.
   * @throws ApiException If problems occurred while querying for ideas.
   */
  public function getBulkKeywordIdeas($selector) {
    $arg = new getBulkKeywordIdeas($selector);
    $result = $this->__soapCall("getBulkKeywordIdeas", array($arg));
    return $result->rval;
  }


}}