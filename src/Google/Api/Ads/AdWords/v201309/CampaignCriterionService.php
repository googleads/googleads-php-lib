<?php
/**
 * Contains all client objects for the CampaignCriterionService
 * service.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
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
 * @package    Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
namespace Google_Api_Ads_AdWords_v201309;

require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Address", false)) {
  /**
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Address {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Address";

    /**
     * @access public
     * @var string
     */
    public $streetAddress;

    /**
     * @access public
     * @var string
     */
    public $streetAddress2;

    /**
     * @access public
     * @var string
     */
    public $cityName;

    /**
     * @access public
     * @var string
     */
    public $provinceCode;

    /**
     * @access public
     * @var string
     */
    public $provinceName;

    /**
     * @access public
     * @var string
     */
    public $postalCode;

    /**
     * @access public
     * @var string
     */
    public $countryCode;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($streetAddress = null, $streetAddress2 = null, $cityName = null, $provinceCode = null, $provinceName = null, $postalCode = null, $countryCode = null) {
      $this->streetAddress = $streetAddress;
      $this->streetAddress2 = $streetAddress2;
      $this->cityName = $cityName;
      $this->provinceCode = $provinceCode;
      $this->provinceName = $provinceName;
      $this->postalCode = $postalCode;
      $this->countryCode = $countryCode;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ApiError";

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
    private $_parameterMap = array(
      "ApiError.Type" => "ApiErrorType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ApplicationException";

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
    private $_parameterMap = array(
      "ApplicationException.Type" => "ApplicationExceptionType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($message = null, $ApplicationExceptionType = null) {
      $this->message = $message;
      $this->ApplicationExceptionType = $ApplicationExceptionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthenticationError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthorizationError", false)) {
  /**
   * Errors encountered when trying to authorize a user.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthorizationError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\BetaError", false)) {
  /**
   * Errors that are thrown when a Beta feature is accessed incorrectly.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BetaError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BetaError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterion", false)) {
  /**
   * Represents a campaign level criterion.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CampaignCriterion";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var boolean
     */
    public $isNegative;

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * @access public
     * @var string
     */
    public $CampaignCriterionType;
    private $_parameterMap = array(
      "CampaignCriterion.Type" => "CampaignCriterionType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $isNegative = null, $criterion = null, $bidModifier = null, $forwardCompatibilityMap = null, $CampaignCriterionType = null) {
      $this->campaignId = $campaignId;
      $this->isNegative = $isNegative;
      $this->criterion = $criterion;
      $this->bidModifier = $bidModifier;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->CampaignCriterionType = $CampaignCriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionError", false)) {
  /**
   * Base error class for Campaign Criterion Service.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CampaignCriterionError";

    /**
     * @access public
     * @var tnsCampaignCriterionErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ClientTermsError", false)) {
  /**
   * Error due to user not accepting the AdWords terms of service.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ClientTermsError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ClientTermsError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Criterion", false)) {
  /**
   * Represents a criterion (such as a keyword, placement, or vertical).
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Criterion";

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
    private $_parameterMap = array(
      "Criterion.Type" => "CriterionType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $type = null, $CriterionType = null) {
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CriterionError", false)) {
  /**
   * Error class used for reporting criteria related errors.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CriterionParameter", false)) {
  /**
   * Base type of criterion parameters.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionParameter";

    /**
     * @access public
     * @var string
     */
    public $CriterionParameterType;
    private $_parameterMap = array(
      "CriterionParameter.Type" => "CriterionParameterType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($CriterionParameterType = null) {
      $this->CriterionParameterType = $CriterionParameterType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DatabaseError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DateRange", false)) {
  /**
   * Represents a range of dates that has either an upper or a lower bound.
   * The format for the date is YYYYMMDD.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DateRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DateRange";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($min = null, $max = null) {
      $this->min = $min;
      $this->max = $max;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DistinctError", false)) {
  /**
   * Errors related to distinct ids or content.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DistinctError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\EntityCountLimitExceeded", false)) {
  /**
   * Signals that an entity count limit was exceeded for some level.
   * For example, too many criteria for a campaign.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class EntityCountLimitExceeded extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "EntityCountLimitExceeded";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
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

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\EntityNotFound", false)) {
  /**
   * An id did not correspond to an entity, or it referred to an entity which does not belong to the
   * customer.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class EntityNotFound extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "EntityNotFound";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Gender", false)) {
  /**
   * Represents a Gender criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only excludable.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Gender extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Gender";

    /**
     * @access public
     * @var tnsGenderGenderType
     */
    public $genderType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($genderType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->genderType = $genderType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\GeoPoint", false)) {
  /**
   * Specifies a geo location with the supplied latitude/longitude.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GeoPoint {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "GeoPoint";

    /**
     * @access public
     * @var integer
     */
    public $latitudeInMicroDegrees;

    /**
     * @access public
     * @var integer
     */
    public $longitudeInMicroDegrees;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($latitudeInMicroDegrees = null, $longitudeInMicroDegrees = null) {
      $this->latitudeInMicroDegrees = $latitudeInMicroDegrees;
      $this->longitudeInMicroDegrees = $longitudeInMicroDegrees;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\IdError", false)) {
  /**
   * Errors associated with the ids.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "IdError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "InternalApiError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Keyword", false)) {
  /**
   * Represents a keyword.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Keyword extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Keyword";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($text = null, $matchType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->text = $text;
      $this->matchType = $matchType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Language", false)) {
  /**
   * Represents a Language criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Language extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Language";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($code = null, $name = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->code = $code;
      $this->name = $name;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ListReturnValue", false)) {
  /**
   * Base list return value type.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ListReturnValue";

    /**
     * @access public
     * @var string
     */
    public $ListReturnValueType;
    private $_parameterMap = array(
      "ListReturnValue.Type" => "ListReturnValueType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ListReturnValueType = null) {
      $this->ListReturnValueType = $ListReturnValueType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Location", false)) {
  /**
   * Represents Location criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type can be either targeted or excluded.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Location extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Location";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($locationName = null, $displayType = null, $targetingStatus = null, $parentLocations = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->locationName = $locationName;
      $this->displayType = $displayType;
      $this->targetingStatus = $targetingStatus;
      $this->parentLocations = $parentLocations;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\MobileAppCategory", false)) {
  /**
   * Represents the mobile app category to be targeted.
   * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
   * available mobile app categories</a>.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MobileAppCategory extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "MobileAppCategory";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($mobileAppCategoryId = null, $displayName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->mobileAppCategoryId = $mobileAppCategoryId;
      $this->displayName = $displayName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\MobileApplication", false)) {
  /**
   * Represents the mobile application to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MobileApplication extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "MobileApplication";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($appId = null, $displayName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->appId = $appId;
      $this->displayName = $displayName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\MobileDevice", false)) {
  /**
   * Represents a Mobile Device Criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MobileDevice extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "MobileDevice";

    /**
     * @access public
     * @var string
     */
    public $deviceName;

    /**
     * @access public
     * @var string
     */
    public $manufacturerName;

    /**
     * @access public
     * @var tnsMobileDeviceDeviceType
     */
    public $deviceType;

    /**
     * @access public
     * @var string
     */
    public $operatingSystemName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($deviceName = null, $manufacturerName = null, $deviceType = null, $operatingSystemName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->deviceName = $deviceName;
      $this->manufacturerName = $manufacturerName;
      $this->deviceType = $deviceType;
      $this->operatingSystemName = $operatingSystemName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NegativeCampaignCriterion", false)) {
  /**
   * A negative campaign criterion.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NegativeCampaignCriterion extends CampaignCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NegativeCampaignCriterion";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $isNegative = null, $criterion = null, $bidModifier = null, $forwardCompatibilityMap = null, $CampaignCriterionType = null) {
      parent::__construct();
      $this->campaignId = $campaignId;
      $this->isNegative = $isNegative;
      $this->criterion = $criterion;
      $this->bidModifier = $bidModifier;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->CampaignCriterionType = $CampaignCriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NewEntityCreationError", false)) {
  /**
   * Error associated with creation of new entities.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NewEntityCreationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NewEntityCreationError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotEmptyError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NotWhitelistedError", false)) {
  /**
   * Indicates that the customer is not whitelisted for accessing the API.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotWhitelistedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotWhitelistedError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NullError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperatingSystemVersion", false)) {
  /**
   * Represents a Operating System Version Criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperatingSystemVersion extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperatingSystemVersion";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var integer
     */
    public $osMajorVersion;

    /**
     * @access public
     * @var integer
     */
    public $osMinorVersion;

    /**
     * @access public
     * @var tnsOperatingSystemVersionOperatorType
     */
    public $operatorType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($name = null, $osMajorVersion = null, $osMinorVersion = null, $operatorType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->name = $name;
      $this->osMajorVersion = $osMajorVersion;
      $this->osMinorVersion = $osMinorVersion;
      $this->operatorType = $operatorType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Operation", false)) {
  /**
   * This represents an operation that includes an operator and an operand
   * specified type.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Operation";

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
    private $_parameterMap = array(
      "Operation.Type" => "OperationType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operator = null, $OperationType = null) {
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperationAccessDenied", false)) {
  /**
   * Operation not permitted due to the invoked service's access policy.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperationAccessDenied";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperatorError", false)) {
  /**
   * Errors due to the use of unsupported operations.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperatorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperatorError";

    /**
     * @access public
     * @var tnsOperatorErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OrderBy", false)) {
  /**
   * Specifies how the resulting information should be sorted.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OrderBy {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OrderBy";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($field = null, $sortOrder = null) {
      $this->field = $field;
      $this->sortOrder = $sortOrder;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Page", false)) {
  /**
   * Contains the results from a get call.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Page";

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
    private $_parameterMap = array(
      "Page.Type" => "PageType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($totalNumEntries = null, $PageType = null) {
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Paging", false)) {
  /**
   * Specifies the page of results to return in the response. A page is specified
   * by the result position to start at and the maximum number of results to
   * return.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Paging {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Paging";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($startIndex = null, $numberResults = null) {
      $this->startIndex = $startIndex;
      $this->numberResults = $numberResults;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\PagingError", false)) {
  /**
   * Error codes for pagination.
   * See {@link com.google.ads.api.services.common.pagination.Paging}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PagingError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "PagingError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Placement", false)) {
  /**
   * A placement used for modifying bids for sites when targeting the content
   * network.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Placement extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Placement";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($url = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->url = $url;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Platform", false)) {
  /**
   * Represents Platform criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Platform extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Platform";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($platformName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->platformName = $platformName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Predicate", false)) {
  /**
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Predicate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Predicate";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($field = null, $operator = null, $values = null) {
      $this->field = $field;
      $this->operator = $operator;
      $this->values = $values;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Product", false)) {
  /**
   * Product targeting criteria, represents a filter for products in the
   * product feed that is defined by the advertiser. The criteria is used to
   * determine the products in a Merchant Center account to be used with the
   * ProductAds in the AdGroup. This criteria is available only to some advertisers.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Product extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Product";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($conditions = null, $text = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->conditions = $conditions;
      $this->text = $text;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ProductCondition", false)) {
  /**
   * Conditions to filter the products defined in product feed for targeting.
   * The condition is defined as operand=argument.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ProductCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ProductCondition";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($argument = null, $operand = null) {
      $this->argument = $argument;
      $this->operand = $operand;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ProductConditionOperand", false)) {
  /**
   * Attribute for the product condition.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ProductConditionOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ProductConditionOperand";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operand = null) {
      $this->operand = $operand;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Proximity", false)) {
  /**
   * Represents a Proximity Criterion.
   * 
   * A proximity is an area within a certain radius of a point with the center point being described
   * by a lat/long pair. The caller may also alternatively provide address fields which will be
   * geocoded into a lat/long pair. Note: If a geoPoint value is provided, the address is not
   * used for calculating the lat/long to target.
   * <p> A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Proximity extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Proximity";

    /**
     * @access public
     * @var GeoPoint
     */
    public $geoPoint;

    /**
     * @access public
     * @var tnsProximityDistanceUnits
     */
    public $radiusDistanceUnits;

    /**
     * @access public
     * @var double
     */
    public $radiusInUnits;

    /**
     * @access public
     * @var Address
     */
    public $address;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($geoPoint = null, $radiusDistanceUnits = null, $radiusInUnits = null, $address = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->geoPoint = $geoPoint;
      $this->radiusDistanceUnits = $radiusDistanceUnits;
      $this->radiusInUnits = $radiusInUnits;
      $this->address = $address;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\QueryError", false)) {
  /**
   * A QueryError represents possible errors for query parsing and execution.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class QueryError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "QueryError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $message = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->message = $message;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "QuotaCheckError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RangeError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RateExceededError", false)) {
  /**
   * Signals that a call failed because a measured rate exceeded.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RateExceededError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
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

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ReadOnlyError", false)) {
  /**
   * Errors from attempting to write to read-only fields.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ReadOnlyError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RegionCodeError", false)) {
  /**
   * A list of all errors associated with the @RegionCode constraints.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RegionCodeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RegionCodeError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RequestError", false)) {
  /**
   * Encapsulates the generic errors thrown when there's an error with user
   * request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequestError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequestError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequiredError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Selector", false)) {
  /**
   * A generic selector to specify the type of information to return.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Selector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Selector";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null) {
      $this->fields = $fields;
      $this->predicates = $predicates;
      $this->dateRange = $dateRange;
      $this->ordering = $ordering;
      $this->paging = $paging;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SelectorError", false)) {
  /**
   * Represents possible error codes for {@link Selector}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SelectorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SelectorError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SizeLimitError", false)) {
  /**
   * Indicates that the number of entries in the request or response exceeds the system limit.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SizeLimitError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SoapHeader";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($authToken = null, $clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null) {
      $this->authToken = $authToken;
      $this->clientCustomerId = $clientCustomerId;
      $this->developerToken = $developerToken;
      $this->userAgent = $userAgent;
      $this->validateOnly = $validateOnly;
      $this->partialFailure = $partialFailure;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SoapResponseHeader", false)) {
  /**
   * Defines the elements within the header of a SOAP response.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SoapResponseHeader";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null) {
      $this->requestId = $requestId;
      $this->serviceName = $serviceName;
      $this->methodName = $methodName;
      $this->operations = $operations;
      $this->responseTime = $responseTime;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\StringLengthError", false)) {
  /**
   * Errors associated with the length of the given string being
   * out of bounds.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "StringLengthError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\String_StringMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type String
   * and value of type String.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class String_StringMapEntry {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "String_StringMapEntry";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $value = null) {
      $this->key = $key;
      $this->value = $value;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CriterionUserInterest", false)) {
  /**
   * User Interest represents a particular interest-based vertical to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionUserInterest extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionUserInterest";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userInterestId = null, $userInterestName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->userInterestId = $userInterestId;
      $this->userInterestName = $userInterestName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CriterionUserList", false)) {
  /**
   * UserList - represents a user list that is defined by the advertiser to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionUserList extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionUserList";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userListId = null, $userListName = null, $userListMembershipStatus = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->userListId = $userListId;
      $this->userListName = $userListName;
      $this->userListMembershipStatus = $userListMembershipStatus;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Vertical", false)) {
  /**
   * Use verticals to target or exclude placements in the Google Display Network
   * based on the category into which the placement falls (for example, "Pets &amp;
   * Animals/Pets/Dogs").
   * <a href="/adwords/api/docs/appendix/verticals">View the complete list
   * of available vertical categories.</a>
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Vertical extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Vertical";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($verticalId = null, $verticalParentId = null, $path = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->verticalId = $verticalId;
      $this->verticalParentId = $verticalParentId;
      $this->path = $path;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Webpage", false)) {
  /**
   * Criterion for targeting webpages of an advertiser's website. The
   * website domain name is specified at the campaign level.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Webpage extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Webpage";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($parameter = null, $criteriaCoverage = null, $criteriaSamples = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->parameter = $parameter;
      $this->criteriaCoverage = $criteriaCoverage;
      $this->criteriaSamples = $criteriaSamples;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\WebpageCondition", false)) {
  /**
   * Logical expression for targeting webpages of an advertiser's website.
   * 
   * <p>A condition is defined as {@code operand OP argument}
   * where {@code operand} is one of the values enumerated in
   * {@link WebpageConditionOperand}, and, based on this value,
   * {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class WebpageCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "WebpageCondition";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operand = null, $argument = null) {
      $this->operand = $operand;
      $this->argument = $argument;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\WebpageParameter", false)) {
  /**
   * Parameter of Webpage criterion, expressed as a list of conditions, or
   * logical expressions, for targeting webpages of an advertiser's website.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class WebpageParameter extends CriterionParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "WebpageParameter";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($criterionName = null, $conditions = null, $CriterionParameterType = null) {
      parent::__construct();
      $this->criterionName = $criterionName;
      $this->conditions = $conditions;
      $this->CriterionParameterType = $CriterionParameterType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdxErrorReason", false)) {
  /**
   * The reasons for the AdX error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdxErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdxError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AgeRangeAgeRangeType", false)) {
  /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AgeRangeAgeRangeType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AgeRange.AgeRangeType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthenticationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthorizationErrorReason", false)) {
  /**
   * The reasons for the database error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthorizationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\BetaErrorReason", false)) {
  /**
   * The reasons for the beta error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BetaErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BetaError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CampaignCriterionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionLimitExceededCriteriaLimitType", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionLimitExceededCriteriaLimitType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CampaignCriterionLimitExceeded.CriteriaLimitType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ClientTermsErrorReason", false)) {
  /**
   * Enums for the various reasons an error can be thrown as a result of
   * ClientTerms violation.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ClientTermsErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ClientTermsError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ContentLabelType", false)) {
  /**
   * Content label type.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ContentLabelType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ContentLabelType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CriterionType", false)) {
  /**
   * The types of criteria.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Criterion.Type";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CriterionErrorReason", false)) {
  /**
   * Concrete type of criterion is required for ADD and SET operations.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DatabaseError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DayOfWeek", false)) {
  /**
   * Days of the week.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DayOfWeek {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DayOfWeek";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DistinctErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DistinctError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\EntityCountLimitExceededReason", false)) {
  /**
   * Limits at various levels of the account.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class EntityCountLimitExceededReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "EntityCountLimitExceeded.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\EntityNotFoundReason", false)) {
  /**
   * The specified id refered to an entity which either doesn't exist or is not accessible to the
   * customer. e.g. campaign belongs to another customer.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class EntityNotFoundReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "EntityNotFound.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\GenderGenderType", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GenderGenderType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Gender.GenderType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\IdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "IdError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "InternalApiError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\KeywordMatchType", false)) {
  /**
   * Match type of a keyword. i.e. the way we match a keyword string with
   * search queries.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class KeywordMatchType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "KeywordMatchType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\LocationTargetingStatus", false)) {
  /**
   * Enum that represents the different Targeting Status values for a Location criterion.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class LocationTargetingStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "LocationTargetingStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\MinuteOfHour", false)) {
  /**
   * Minutes in an hour.  Currently only 0, 15, 30, and 45 are supported
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MinuteOfHour {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "MinuteOfHour";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\MobileDeviceDeviceType", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MobileDeviceDeviceType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "MobileDevice.DeviceType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NewEntityCreationErrorReason", false)) {
  /**
   * Do not set the id field while creating new entities.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NewEntityCreationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NewEntityCreationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NotEmptyErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotEmptyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NotWhitelistedErrorReason", false)) {
  /**
   * The single reason for the whitelist error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotWhitelistedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotWhitelistedError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NullError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperatingSystemVersionOperatorType", false)) {
  /**
   * The operator type.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperatingSystemVersionOperatorType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperatingSystemVersion.OperatorType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperationAccessDeniedReason", false)) {
  /**
   * The reasons for the operation access error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperationAccessDenied.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Operator", false)) {
  /**
   * This represents an operator that may be presented to an adsapi service.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Operator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Operator";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperatorErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperatorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperatorError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\PagingErrorReason", false)) {
  /**
   * The reasons for errors when using pagination.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PagingErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "PagingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\PredicateOperator", false)) {
  /**
   * Defines the valid set of operators.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PredicateOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Predicate.Operator";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ProximityDistanceUnits", false)) {
  /**
   * The radius distance is expressed in either kilometers or miles.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ProximityDistanceUnits {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Proximity.DistanceUnits";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\QueryErrorReason", false)) {
  /**
   * The reason for the query error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class QueryErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "QueryError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\QuotaCheckErrorReason", false)) {
  /**
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "QuotaCheckError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RangeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RangeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RateExceededErrorReason", false)) {
  /**
   * The reason for the rate exceeded error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RateExceededError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ReadOnlyErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ReadOnlyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RegionCodeErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RegionCodeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RegionCodeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RequestErrorReason", false)) {
  /**
   * Error reason is unknown.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequestErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequestError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequiredError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SelectorErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SelectorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SelectorError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SizeLimitErrorReason", false)) {
  /**
   * The reasons for Ad Scheduling errors.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SizeLimitError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SortOrder", false)) {
  /**
   * Possible orders of sorting.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SortOrder {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SortOrder";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\StringLengthErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "StringLengthError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CriterionUserListMembershipStatus", false)) {
  /**
   * Membership status of the user list.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionUserListMembershipStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionUserList.MembershipStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\WebpageConditionOperand", false)) {
  /**
   * Operand value of {@link WebpageCondition}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class WebpageConditionOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "WebpageConditionOperand";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Gets campaign criteria.
   * 
   * @param serviceSelector The selector specifying the {@link CampaignCriterion}s to return.
   * @return A list of campaign criteria.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($serviceSelector = null) {
      $this->serviceSelector = $serviceSelector;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CampaignCriterionPage
     */
    public $rval;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rval = null) {
      $this->rval = $rval;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionServiceMutate", false)) {
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
   * 
   * 
   * 
   * Adds, removes or updates campaign criteria.
   * 
   * @param operations The operations to apply.
   * @return The added campaign criteria (without any optional parts).
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionServiceMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CampaignCriterionOperation[]
     */
    public $operations;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operations = null) {
      $this->operations = $operations;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionServiceMutateResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionServiceMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CampaignCriterionReturnValue
     */
    public $rval;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rval = null) {
      $this->rval = $rval;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Query", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of campaign criteria that match the query.
   * 
   * @param query The SQL-like AWQL query string.
   * @return A list of campaign criteria.
   * @throws ApiException if problems occur while parsing the query or fetching campaign criteria.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Query {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($query = null) {
      $this->query = $query;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\QueryResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class QueryResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CampaignCriterionPage
     */
    public $rval;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rval = null) {
      $this->rval = $rval;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdSchedule", false)) {
  /**
   * Represents an AdSchedule Criterion.
   * AdSchedule is specified as day and time of the week criteria to target
   * the Ads.
   * <p><b>Note:</b> An AdSchedule may not have more than <b>six</b> intervals
   * in a day.</p>
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdSchedule extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdSchedule";

    /**
     * @access public
     * @var tnsDayOfWeek
     */
    public $dayOfWeek;

    /**
     * @access public
     * @var integer
     */
    public $startHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $startMinute;

    /**
     * @access public
     * @var integer
     */
    public $endHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $endMinute;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($dayOfWeek = null, $startHour = null, $startMinute = null, $endHour = null, $endMinute = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->dayOfWeek = $dayOfWeek;
      $this->startHour = $startHour;
      $this->startMinute = $startMinute;
      $this->endHour = $endHour;
      $this->endMinute = $endMinute;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdxError", false)) {
  /**
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdxError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdxError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AgeRange", false)) {
  /**
   * Represents an Age Range criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only excludable.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AgeRange extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AgeRange";

    /**
     * @access public
     * @var tnsAgeRangeAgeRangeType
     */
    public $ageRangeType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ageRangeType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->ageRangeType = $ageRangeType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ApiException";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($errors = null, $message = null, $ApplicationExceptionType = null) {
      parent::__construct();
      $this->errors = $errors;
      $this->message = $message;
      $this->ApplicationExceptionType = $ApplicationExceptionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionLimitExceeded", false)) {
  /**
   * Error to indicate that too many negative criteria added to some campaign.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionLimitExceeded extends EntityCountLimitExceeded {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CampaignCriterionLimitExceeded";

    /**
     * @access public
     * @var tnsCampaignCriterionLimitExceededCriteriaLimitType
     */
    public $limitType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($limitType = null, $reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null) {
      parent::__construct();
      $this->limitType = $limitType;
      $this->reason = $reason;
      $this->enclosingId = $enclosingId;
      $this->limit = $limit;
      $this->accountLimitType = $accountLimitType;
      $this->existingCount = $existingCount;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionOperation", false)) {
  /**
   * Generic operation (add, remove and set) for campaign criteria.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CampaignCriterionOperation";

    /**
     * @access public
     * @var CampaignCriterion
     */
    public $operand;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operand = null, $operator = null, $OperationType = null) {
      parent::__construct();
      $this->operand = $operand;
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionPage", false)) {
  /**
   * Contains a subset of campaign criteria resulting from a call to
   * {@link CampaignCriterionService#get}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionPage extends Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CampaignCriterionPage";

    /**
     * @access public
     * @var CampaignCriterion[]
     */
    public $entries;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null) {
      parent::__construct();
      $this->entries = $entries;
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignCriterionReturnValue", false)) {
  /**
   * A container for return values from the CampaignCriterionService.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionReturnValue extends ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CampaignCriterionReturnValue";

    /**
     * @access public
     * @var CampaignCriterion[]
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $partialFailureErrors = null, $ListReturnValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->partialFailureErrors = $partialFailureErrors;
      $this->ListReturnValueType = $ListReturnValueType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Carrier", false)) {
  /**
   * Represents a Carrier Criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Carrier extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Carrier";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $countryCode;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($name = null, $countryCode = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->name = $name;
      $this->countryCode = $countryCode;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ContentLabel", false)) {
  /**
   * Content Label for category exclusion.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ContentLabel extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ContentLabel";

    /**
     * @access public
     * @var tnsContentLabelType
     */
    public $contentLabelType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($contentLabelType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->contentLabelType = $contentLabelType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("CampaignCriterionService", false)) {
  /**
   * CampaignCriterionService
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignCriterionService extends Google_Api_Ads_AdWords_v201309\Google_Api_Ads_AdWords_Lib_AdWordsSoapClient {

    const SERVICE_NAME = "CampaignCriterionService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201309/CampaignCriterionService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/CampaignCriterionService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdSchedule" => "Google_Api_Ads_AdWords_v201309\\AdSchedule",
      "Address" => "Google_Api_Ads_AdWords_v201309\\Address",
      "AdxError" => "Google_Api_Ads_AdWords_v201309\\AdxError",
      "AgeRange" => "Google_Api_Ads_AdWords_v201309\\AgeRange",
      "ApiError" => "Google_Api_Ads_AdWords_v201309\\ApiError",
      "ApiException" => "Google_Api_Ads_AdWords_v201309\\ApiException",
      "ApplicationException" => "Google_Api_Ads_AdWords_v201309\\ApplicationException",
      "AuthenticationError" => "Google_Api_Ads_AdWords_v201309\\AuthenticationError",
      "AuthorizationError" => "Google_Api_Ads_AdWords_v201309\\AuthorizationError",
      "BetaError" => "Google_Api_Ads_AdWords_v201309\\BetaError",
      "CampaignCriterion" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterion",
      "CampaignCriterionError" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionError",
      "CampaignCriterionLimitExceeded" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionLimitExceeded",
      "CampaignCriterionOperation" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionOperation",
      "CampaignCriterionPage" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionPage",
      "CampaignCriterionReturnValue" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionReturnValue",
      "Carrier" => "Google_Api_Ads_AdWords_v201309\\Carrier",
      "ClientTermsError" => "Google_Api_Ads_AdWords_v201309\\ClientTermsError",
      "ContentLabel" => "Google_Api_Ads_AdWords_v201309\\ContentLabel",
      "Criterion" => "Google_Api_Ads_AdWords_v201309\\Criterion",
      "CriterionError" => "Google_Api_Ads_AdWords_v201309\\CriterionError",
      "CriterionParameter" => "Google_Api_Ads_AdWords_v201309\\CriterionParameter",
      "DatabaseError" => "Google_Api_Ads_AdWords_v201309\\DatabaseError",
      "DateRange" => "Google_Api_Ads_AdWords_v201309\\DateRange",
      "DistinctError" => "Google_Api_Ads_AdWords_v201309\\DistinctError",
      "EntityCountLimitExceeded" => "Google_Api_Ads_AdWords_v201309\\EntityCountLimitExceeded",
      "EntityNotFound" => "Google_Api_Ads_AdWords_v201309\\EntityNotFound",
      "Gender" => "Google_Api_Ads_AdWords_v201309\\Gender",
      "GeoPoint" => "Google_Api_Ads_AdWords_v201309\\GeoPoint",
      "IdError" => "Google_Api_Ads_AdWords_v201309\\IdError",
      "InternalApiError" => "Google_Api_Ads_AdWords_v201309\\InternalApiError",
      "Keyword" => "Google_Api_Ads_AdWords_v201309\\Keyword",
      "Language" => "Google_Api_Ads_AdWords_v201309\\Language",
      "ListReturnValue" => "Google_Api_Ads_AdWords_v201309\\ListReturnValue",
      "Location" => "Google_Api_Ads_AdWords_v201309\\Location",
      "MobileAppCategory" => "Google_Api_Ads_AdWords_v201309\\MobileAppCategory",
      "MobileApplication" => "Google_Api_Ads_AdWords_v201309\\MobileApplication",
      "MobileDevice" => "Google_Api_Ads_AdWords_v201309\\MobileDevice",
      "NegativeCampaignCriterion" => "Google_Api_Ads_AdWords_v201309\\NegativeCampaignCriterion",
      "NewEntityCreationError" => "Google_Api_Ads_AdWords_v201309\\NewEntityCreationError",
      "NotEmptyError" => "Google_Api_Ads_AdWords_v201309\\NotEmptyError",
      "NotWhitelistedError" => "Google_Api_Ads_AdWords_v201309\\NotWhitelistedError",
      "NullError" => "Google_Api_Ads_AdWords_v201309\\NullError",
      "OperatingSystemVersion" => "Google_Api_Ads_AdWords_v201309\\OperatingSystemVersion",
      "Operation" => "Google_Api_Ads_AdWords_v201309\\Operation",
      "OperationAccessDenied" => "Google_Api_Ads_AdWords_v201309\\OperationAccessDenied",
      "OperatorError" => "Google_Api_Ads_AdWords_v201309\\OperatorError",
      "OrderBy" => "Google_Api_Ads_AdWords_v201309\\OrderBy",
      "Page" => "Google_Api_Ads_AdWords_v201309\\Page",
      "Paging" => "Google_Api_Ads_AdWords_v201309\\Paging",
      "PagingError" => "Google_Api_Ads_AdWords_v201309\\PagingError",
      "Placement" => "Google_Api_Ads_AdWords_v201309\\Placement",
      "Platform" => "Google_Api_Ads_AdWords_v201309\\Platform",
      "Predicate" => "Google_Api_Ads_AdWords_v201309\\Predicate",
      "Product" => "Google_Api_Ads_AdWords_v201309\\Product",
      "ProductCondition" => "Google_Api_Ads_AdWords_v201309\\ProductCondition",
      "ProductConditionOperand" => "Google_Api_Ads_AdWords_v201309\\ProductConditionOperand",
      "Proximity" => "Google_Api_Ads_AdWords_v201309\\Proximity",
      "QueryError" => "Google_Api_Ads_AdWords_v201309\\QueryError",
      "QuotaCheckError" => "Google_Api_Ads_AdWords_v201309\\QuotaCheckError",
      "RangeError" => "Google_Api_Ads_AdWords_v201309\\RangeError",
      "RateExceededError" => "Google_Api_Ads_AdWords_v201309\\RateExceededError",
      "ReadOnlyError" => "Google_Api_Ads_AdWords_v201309\\ReadOnlyError",
      "RegionCodeError" => "Google_Api_Ads_AdWords_v201309\\RegionCodeError",
      "RequestError" => "Google_Api_Ads_AdWords_v201309\\RequestError",
      "RequiredError" => "Google_Api_Ads_AdWords_v201309\\RequiredError",
      "Selector" => "Google_Api_Ads_AdWords_v201309\\Selector",
      "SelectorError" => "Google_Api_Ads_AdWords_v201309\\SelectorError",
      "SizeLimitError" => "Google_Api_Ads_AdWords_v201309\\SizeLimitError",
      "SoapHeader" => "Google_Api_Ads_AdWords_v201309\\SoapRequestHeader",
      "SoapResponseHeader" => "Google_Api_Ads_AdWords_v201309\\SoapResponseHeader",
      "StringLengthError" => "Google_Api_Ads_AdWords_v201309\\StringLengthError",
      "String_StringMapEntry" => "Google_Api_Ads_AdWords_v201309\\String_StringMapEntry",
      "CriterionUserInterest" => "Google_Api_Ads_AdWords_v201309\\CriterionUserInterest",
      "CriterionUserList" => "Google_Api_Ads_AdWords_v201309\\CriterionUserList",
      "Vertical" => "Google_Api_Ads_AdWords_v201309\\Vertical",
      "Webpage" => "Google_Api_Ads_AdWords_v201309\\Webpage",
      "WebpageCondition" => "Google_Api_Ads_AdWords_v201309\\WebpageCondition",
      "WebpageParameter" => "Google_Api_Ads_AdWords_v201309\\WebpageParameter",
      "AdxError.Reason" => "Google_Api_Ads_AdWords_v201309\\AdxErrorReason",
      "AgeRange.AgeRangeType" => "Google_Api_Ads_AdWords_v201309\\AgeRangeAgeRangeType",
      "AuthenticationError.Reason" => "Google_Api_Ads_AdWords_v201309\\AuthenticationErrorReason",
      "AuthorizationError.Reason" => "Google_Api_Ads_AdWords_v201309\\AuthorizationErrorReason",
      "BetaError.Reason" => "Google_Api_Ads_AdWords_v201309\\BetaErrorReason",
      "CampaignCriterionError.Reason" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionErrorReason",
      "CampaignCriterionLimitExceeded.CriteriaLimitType" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionLimitExceededCriteriaLimitType",
      "ClientTermsError.Reason" => "Google_Api_Ads_AdWords_v201309\\ClientTermsErrorReason",
      "ContentLabelType" => "Google_Api_Ads_AdWords_v201309\\ContentLabelType",
      "Criterion.Type" => "Google_Api_Ads_AdWords_v201309\\CriterionType",
      "CriterionError.Reason" => "Google_Api_Ads_AdWords_v201309\\CriterionErrorReason",
      "DatabaseError.Reason" => "Google_Api_Ads_AdWords_v201309\\DatabaseErrorReason",
      "DayOfWeek" => "Google_Api_Ads_AdWords_v201309\\DayOfWeek",
      "DistinctError.Reason" => "Google_Api_Ads_AdWords_v201309\\DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "Google_Api_Ads_AdWords_v201309\\EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "Google_Api_Ads_AdWords_v201309\\EntityNotFoundReason",
      "Gender.GenderType" => "Google_Api_Ads_AdWords_v201309\\GenderGenderType",
      "IdError.Reason" => "Google_Api_Ads_AdWords_v201309\\IdErrorReason",
      "InternalApiError.Reason" => "Google_Api_Ads_AdWords_v201309\\InternalApiErrorReason",
      "KeywordMatchType" => "Google_Api_Ads_AdWords_v201309\\KeywordMatchType",
      "LocationTargetingStatus" => "Google_Api_Ads_AdWords_v201309\\LocationTargetingStatus",
      "MinuteOfHour" => "Google_Api_Ads_AdWords_v201309\\MinuteOfHour",
      "MobileDevice.DeviceType" => "Google_Api_Ads_AdWords_v201309\\MobileDeviceDeviceType",
      "NewEntityCreationError.Reason" => "Google_Api_Ads_AdWords_v201309\\NewEntityCreationErrorReason",
      "NotEmptyError.Reason" => "Google_Api_Ads_AdWords_v201309\\NotEmptyErrorReason",
      "NotWhitelistedError.Reason" => "Google_Api_Ads_AdWords_v201309\\NotWhitelistedErrorReason",
      "NullError.Reason" => "Google_Api_Ads_AdWords_v201309\\NullErrorReason",
      "OperatingSystemVersion.OperatorType" => "Google_Api_Ads_AdWords_v201309\\OperatingSystemVersionOperatorType",
      "OperationAccessDenied.Reason" => "Google_Api_Ads_AdWords_v201309\\OperationAccessDeniedReason",
      "Operator" => "Google_Api_Ads_AdWords_v201309\\Operator",
      "OperatorError.Reason" => "Google_Api_Ads_AdWords_v201309\\OperatorErrorReason",
      "PagingError.Reason" => "Google_Api_Ads_AdWords_v201309\\PagingErrorReason",
      "Predicate.Operator" => "Google_Api_Ads_AdWords_v201309\\PredicateOperator",
      "Proximity.DistanceUnits" => "Google_Api_Ads_AdWords_v201309\\ProximityDistanceUnits",
      "QueryError.Reason" => "Google_Api_Ads_AdWords_v201309\\QueryErrorReason",
      "QuotaCheckError.Reason" => "Google_Api_Ads_AdWords_v201309\\QuotaCheckErrorReason",
      "RangeError.Reason" => "Google_Api_Ads_AdWords_v201309\\RangeErrorReason",
      "RateExceededError.Reason" => "Google_Api_Ads_AdWords_v201309\\RateExceededErrorReason",
      "ReadOnlyError.Reason" => "Google_Api_Ads_AdWords_v201309\\ReadOnlyErrorReason",
      "RegionCodeError.Reason" => "Google_Api_Ads_AdWords_v201309\\RegionCodeErrorReason",
      "RequestError.Reason" => "Google_Api_Ads_AdWords_v201309\\RequestErrorReason",
      "RequiredError.Reason" => "Google_Api_Ads_AdWords_v201309\\RequiredErrorReason",
      "SelectorError.Reason" => "Google_Api_Ads_AdWords_v201309\\SelectorErrorReason",
      "SizeLimitError.Reason" => "Google_Api_Ads_AdWords_v201309\\SizeLimitErrorReason",
      "SortOrder" => "Google_Api_Ads_AdWords_v201309\\SortOrder",
      "StringLengthError.Reason" => "Google_Api_Ads_AdWords_v201309\\StringLengthErrorReason",
      "CriterionUserList.MembershipStatus" => "Google_Api_Ads_AdWords_v201309\\CriterionUserListMembershipStatus",
      "WebpageConditionOperand" => "Google_Api_Ads_AdWords_v201309\\WebpageConditionOperand",
      "get" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionServiceGet",
      "getResponse" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionServiceGetResponse",
      "mutate" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionServiceMutate",
      "mutateResponse" => "Google_Api_Ads_AdWords_v201309\\CampaignCriterionServiceMutateResponse",
      "query" => "Google_Api_Ads_AdWords_v201309\\Query",
      "queryResponse" => "Google_Api_Ads_AdWords_v201309\\QueryResponse",
    );


    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user) {
      $options["classmap"] = self::$classmap;
      parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
          self::WSDL_NAMESPACE);
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Gets campaign criteria.
     * 
     * @param serviceSelector The selector specifying the {@link CampaignCriterion}s to return.
     * @return A list of campaign criteria.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector) {
      $args = new CampaignCriterionServiceGet($serviceSelector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
     * 
     * 
     * 
     * Adds, removes or updates campaign criteria.
     * 
     * @param operations The operations to apply.
     * @return The added campaign criteria (without any optional parts).
     * @throws ApiException when there is at least one error with the request.
     */
    public function mutate($operations) {
      $args = new CampaignCriterionServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of campaign criteria that match the query.
     * 
     * @param query The SQL-like AWQL query string.
     * @return A list of campaign criteria.
     * @throws ApiException if problems occur while parsing the query or fetching campaign criteria.
     */
    public function query($query) {
      $args = new Query($query);
      $result = $this->__soapCall("query", array($args));
      return $result->rval;
    }
  }
}

