<?php
/**
 * Contains all client objects for the TrafficEstimatorService
 * service.
 *
 * PHP version 5
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AuthenticationError";

    /**
     * @access public
     * @var tnsAuthenticationErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("AuthorizationError", false)) {
  /**
   * Errors encountered when trying to authorize a user.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AuthorizationError";

    /**
     * @access public
     * @var tnsAuthorizationErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("ClientTermsError", false)) {
  /**
   * Error due to user not accepting the AdWords terms of service.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class ClientTermsError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ClientTermsError";

    /**
     * @access public
     * @var tnsClientTermsErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("CollectionSizeError", false)) {
  /**
   * Errors associated with the size of the given collection being
   * out of bounds.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CollectionSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CollectionSizeError";

    /**
     * @access public
     * @var tnsCollectionSizeErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("ComparableValue", false)) {
  /**
   * Comparable types for constructing ranges with.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ComparableValue";

    /**
     * @access public
     * @var string
     */
    public $ComparableValueType;
    private $_parameterMap = array(
      "ComparableValue.Type" => "ComparableValueType",
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ComparableValueType = null) {
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("Criterion", false)) {
  /**
   * Represents a criterion (such as a keyword, placement, or vertical).
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DatabaseError";

    /**
     * @access public
     * @var tnsDatabaseErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("DateError", false)) {
  /**
   * Errors associated with invalid dates and date ranges.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class DateError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DateError";

    /**
     * @access public
     * @var tnsDateErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("DistinctError", false)) {
  /**
   * Errors related to distinct ids or content.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DistinctError";

    /**
     * @access public
     * @var tnsDistinctErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("EntityAccessDenied", false)) {
  /**
   * Reports permission problems trying to access an entity.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class EntityAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "EntityAccessDenied";

    /**
     * @access public
     * @var tnsEntityAccessDeniedReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("EntityNotFound", false)) {
  /**
   * An id did not correspond to an entity, or it referred to an entity which does not belong to the
   * customer.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class EntityNotFound extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "EntityNotFound";

    /**
     * @access public
     * @var tnsEntityNotFoundReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("IdError", false)) {
  /**
   * Errors associated with the ids.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class IdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "IdError";

    /**
     * @access public
     * @var tnsIdErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "InternalApiError";

    /**
     * @access public
     * @var tnsInternalApiErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("Keyword", false)) {
  /**
   * Represents a keyword.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class Keyword extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("Language", false)) {
  /**
   * Represents a Language criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class Language extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("Location", false)) {
  /**
   * Represents Location criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class Location extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("MobileAppCategory", false)) {
  /**
   * Represents the mobile app category to be targeted.
   * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
   * available mobile app categories</a>.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class MobileAppCategory extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("MobileApplication", false)) {
  /**
   * Represents the mobile application to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class MobileApplication extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("Money", false)) {
  /**
   * Represents a money amount.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class Money extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Money";

    /**
     * @access public
     * @var integer
     */
    public $microAmount;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($microAmount = null, $ComparableValueType = null) {
      parent::__construct();
      $this->microAmount = $microAmount;
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("NetworkSetting", false)) {
  /**
   * Network settings for a Campaign.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class NetworkSetting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "NetworkSetting";

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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($targetGoogleSearch = null, $targetSearchNetwork = null, $targetContentNetwork = null, $targetPartnerSearchNetwork = null) {
      $this->targetGoogleSearch = $targetGoogleSearch;
      $this->targetSearchNetwork = $targetSearchNetwork;
      $this->targetContentNetwork = $targetContentNetwork;
      $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
    }

  }
}

if (!class_exists("NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "NotEmptyError";

    /**
     * @access public
     * @var tnsNotEmptyErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "NullError";

    /**
     * @access public
     * @var tnsNullErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("NumberValue", false)) {
  /**
   * Number value types for constructing number valued ranges.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class NumberValue extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "NumberValue";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ComparableValueType = null) {
      parent::__construct();
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("OperationAccessDenied", false)) {
  /**
   * Operation not permitted due to the invoked service's access policy.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "OperationAccessDenied";

    /**
     * @access public
     * @var tnsOperationAccessDeniedReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("OperatorError", false)) {
  /**
   * Errors due to the use of unsupported operations.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class OperatorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "OperatorError";

    /**
     * @access public
     * @var tnsOperatorErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("Placement", false)) {
  /**
   * A placement used for modifying bids for sites when targeting the content
   * network.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class Placement extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Placement";

    /**
     * @access public
     * @var string
     */
    public $url;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("Platform", false)) {
  /**
   * Represents Platform criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class Platform extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Platform";

    /**
     * @access public
     * @var string
     */
    public $platformName;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "QuotaCheckError";

    /**
     * @access public
     * @var tnsQuotaCheckErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RangeError";

    /**
     * @access public
     * @var tnsRangeErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("RateExceededError", false)) {
  /**
   * Signals that a call failed because a measured rate exceeded.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("ReadOnlyError", false)) {
  /**
   * Errors from attempting to write to read-only fields.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ReadOnlyError";

    /**
     * @access public
     * @var tnsReadOnlyErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("RegionCodeError", false)) {
  /**
   * A list of all errors associated with the @RegionCode constraints.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RegionCodeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RegionCodeError";

    /**
     * @access public
     * @var tnsRegionCodeErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("RejectedError", false)) {
  /**
   * Indicates that a field was rejected due to compatibility issues.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RejectedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RejectedError";

    /**
     * @access public
     * @var tnsRejectedErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("RequestError", false)) {
  /**
   * Encapsulates the generic errors thrown when there's an error with user
   * request.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RequestError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RequestError";

    /**
     * @access public
     * @var tnsRequestErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RequiredError";

    /**
     * @access public
     * @var tnsRequiredErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("SizeLimitError", false)) {
  /**
   * Indicates that the number of entries in the request or response exceeds the system limit.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "SizeLimitError";

    /**
     * @access public
     * @var tnsSizeLimitErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "SoapHeader";

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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null) {
      $this->clientCustomerId = $clientCustomerId;
      $this->developerToken = $developerToken;
      $this->userAgent = $userAgent;
      $this->validateOnly = $validateOnly;
      $this->partialFailure = $partialFailure;
    }

  }
}

if (!class_exists("SoapResponseHeader", false)) {
  /**
   * Defines the elements within the header of a SOAP response.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("StringFormatError", false)) {
  /**
   * A list of error code for reporting invalid content of input strings.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class StringFormatError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "StringFormatError";

    /**
     * @access public
     * @var tnsStringFormatErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("StringLengthError", false)) {
  /**
   * Errors associated with the length of the given string being
   * out of bounds.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "StringLengthError";

    /**
     * @access public
     * @var tnsStringLengthErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("CriterionUserInterest", false)) {
  /**
   * User Interest represents a particular interest-based vertical to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CriterionUserInterest extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CriterionUserInterest";

    /**
     * @access public
     * @var integer
     */
    public $userInterestId;

    /**
     * @access public
     * @var integer
     */
    public $userInterestParentId;

    /**
     * @access public
     * @var string
     */
    public $userInterestName;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userInterestId = null, $userInterestParentId = null, $userInterestName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->userInterestId = $userInterestId;
      $this->userInterestParentId = $userInterestParentId;
      $this->userInterestName = $userInterestName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("CriterionUserList", false)) {
  /**
   * UserList - represents a user list that is defined by the advertiser to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CriterionUserList extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @access public
     * @var boolean
     */
    public $userListEligibleForSearch;

    /**
     * @access public
     * @var boolean
     */
    public $userListEligibleForDisplay;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userListId = null, $userListName = null, $userListMembershipStatus = null, $userListEligibleForSearch = null, $userListEligibleForDisplay = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->userListId = $userListId;
      $this->userListName = $userListName;
      $this->userListMembershipStatus = $userListMembershipStatus;
      $this->userListEligibleForSearch = $userListEligibleForSearch;
      $this->userListEligibleForDisplay = $userListEligibleForDisplay;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Vertical", false)) {
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
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class Vertical extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("AdxErrorReason", false)) {
  /**
   * The reasons for the AdX error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class AdxErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdxError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AuthenticationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AuthorizationErrorReason", false)) {
  /**
   * The reasons for the database error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AuthorizationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ClientTermsErrorReason", false)) {
  /**
   * Enums for the various reasons an error can be thrown as a result of
   * ClientTerms violation.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class ClientTermsErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ClientTermsError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CollectionSizeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CollectionSizeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CollectionSizeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CriterionType", false)) {
  /**
   * The types of criteria.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CriterionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Criterion.Type";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DatabaseError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("DateErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class DateErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DateError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("DistinctErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DistinctError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("EntityAccessDeniedReason", false)) {
  /**
   * User did not have read access.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class EntityAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "EntityAccessDenied.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("EntityNotFoundReason", false)) {
  /**
   * The specified id refered to an entity which either doesn't exist or is not accessible to the
   * customer. e.g. campaign belongs to another customer.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class EntityNotFoundReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "EntityNotFound.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("IdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class IdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "IdError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "InternalApiError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("KeywordMatchType", false)) {
  /**
   * Match type of a keyword. i.e. the way we match a keyword string with
   * search queries.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class KeywordMatchType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "KeywordMatchType";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("LocationTargetingStatus", false)) {
  /**
   * Enum that represents the different Targeting Status values for a Location criterion.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class LocationTargetingStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "LocationTargetingStatus";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("NotEmptyErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "NotEmptyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "NullError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("OperationAccessDeniedReason", false)) {
  /**
   * The reasons for the operation access error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "OperationAccessDenied.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("OperatorErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class OperatorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "OperatorError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("QuotaCheckErrorReason", false)) {
  /**
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "QuotaCheckError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RangeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RangeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RateExceededErrorReason", false)) {
  /**
   * The reason for the rate exceeded error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RateExceededError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ReadOnlyErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ReadOnlyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RegionCodeErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RegionCodeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RegionCodeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RejectedErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RejectedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RejectedError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RequestErrorReason", false)) {
  /**
   * Error reason is unknown.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RequestErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RequestError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "RequiredError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("SizeLimitErrorReason", false)) {
  /**
   * The reasons for Ad Scheduling errors.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "SizeLimitError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("StringFormatErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class StringFormatErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "StringFormatError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("StringLengthErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "StringLengthError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CriterionUserListMembershipStatus", false)) {
  /**
   * Membership status of the user list.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CriterionUserListMembershipStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CriterionUserList.MembershipStatus";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CurrencyCodeError", false)) {
  /**
   * Errors for currency codes.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CurrencyCodeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "CurrencyCodeError";

    /**
     * @access public
     * @var tnsCurrencyCodeErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("Estimate", false)) {
  /**
   * Abstract class representing an reply to an {@link EstimateRequest}.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class Estimate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "Estimate";

    /**
     * @access public
     * @var string
     */
    public $EstimateType;
    private $_parameterMap = array(
      "Estimate.Type" => "EstimateType",
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($EstimateType = null) {
      $this->EstimateType = $EstimateType;
    }

  }
}

if (!class_exists("EstimateRequest", false)) {
  /**
   * Abstract class representing a request to estimate stats.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class EstimateRequest {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "EstimateRequest";

    /**
     * @access public
     * @var string
     */
    public $EstimateRequestType;
    private $_parameterMap = array(
      "EstimateRequest.Type" => "EstimateRequestType",
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($EstimateRequestType = null) {
      $this->EstimateRequestType = $EstimateRequestType;
    }

  }
}

if (!class_exists("KeywordEstimate", false)) {
  /**
   * Represents the traffic estimate result for a single keyword.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class KeywordEstimate extends Estimate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "KeywordEstimate";

    /**
     * @access public
     * @var integer
     */
    public $criterionId;

    /**
     * @access public
     * @var StatsEstimate
     */
    public $min;

    /**
     * @access public
     * @var StatsEstimate
     */
    public $max;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($criterionId = null, $min = null, $max = null, $EstimateType = null) {
      parent::__construct();
      $this->criterionId = $criterionId;
      $this->min = $min;
      $this->max = $max;
      $this->EstimateType = $EstimateType;
    }

  }
}

if (!class_exists("KeywordEstimateRequest", false)) {
  /**
   * Represents a keyword to be estimated.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class KeywordEstimateRequest extends EstimateRequest {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "KeywordEstimateRequest";

    /**
     * @access public
     * @var Keyword
     */
    public $keyword;

    /**
     * @access public
     * @var Money
     */
    public $maxCpc;

    /**
     * @access public
     * @var boolean
     */
    public $isNegative;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($keyword = null, $maxCpc = null, $isNegative = null, $EstimateRequestType = null) {
      parent::__construct();
      $this->keyword = $keyword;
      $this->maxCpc = $maxCpc;
      $this->isNegative = $isNegative;
      $this->EstimateRequestType = $EstimateRequestType;
    }

  }
}

if (!class_exists("PlatformCampaignEstimate", false)) {
  /**
   * Contains a campaign level estimate for a specified {@link Platform}.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class PlatformCampaignEstimate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "PlatformCampaignEstimate";

    /**
     * @access public
     * @var Platform
     */
    public $platform;

    /**
     * @access public
     * @var StatsEstimate
     */
    public $minEstimate;

    /**
     * @access public
     * @var StatsEstimate
     */
    public $maxEstimate;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($platform = null, $minEstimate = null, $maxEstimate = null) {
      $this->platform = $platform;
      $this->minEstimate = $minEstimate;
      $this->maxEstimate = $maxEstimate;
    }

  }
}

if (!class_exists("StatsEstimate", false)) {
  /**
   * Represents a set of stats for a daily traffic estimate.
   * 
   * <p>{@code averageCpc}, {@code averagePosition} and {@code clickThroughRate} will be
   * {@code null} when not defined and {@code clicksPerDay} or {@code impressionsPerDay}
   * is {@code 0}, respectively.</p>
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class StatsEstimate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "StatsEstimate";

    /**
     * @access public
     * @var Money
     */
    public $averageCpc;

    /**
     * @access public
     * @var double
     */
    public $averagePosition;

    /**
     * @access public
     * @var double
     */
    public $clickThroughRate;

    /**
     * @access public
     * @var double
     */
    public $clicksPerDay;

    /**
     * @access public
     * @var double
     */
    public $impressionsPerDay;

    /**
     * @access public
     * @var Money
     */
    public $totalCost;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($averageCpc = null, $averagePosition = null, $clickThroughRate = null, $clicksPerDay = null, $impressionsPerDay = null, $totalCost = null) {
      $this->averageCpc = $averageCpc;
      $this->averagePosition = $averagePosition;
      $this->clickThroughRate = $clickThroughRate;
      $this->clicksPerDay = $clicksPerDay;
      $this->impressionsPerDay = $impressionsPerDay;
      $this->totalCost = $totalCost;
    }

  }
}

if (!class_exists("TrafficEstimatorError", false)) {
  /**
   * Base error class for {@link TrafficEstimatorService}.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class TrafficEstimatorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "TrafficEstimatorError";

    /**
     * @access public
     * @var tnsTrafficEstimatorErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("TrafficEstimatorResult", false)) {
  /**
   * Contains results of traffic estimation request.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class TrafficEstimatorResult {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "TrafficEstimatorResult";

    /**
     * @access public
     * @var CampaignEstimate[]
     */
    public $campaignEstimates;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignEstimates = null) {
      $this->campaignEstimates = $campaignEstimates;
    }

  }
}

if (!class_exists("TrafficEstimatorSelector", false)) {
  /**
   * Contains a list of campaigns to perform a traffic estimate on.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class TrafficEstimatorSelector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "TrafficEstimatorSelector";

    /**
     * @access public
     * @var CampaignEstimateRequest[]
     */
    public $campaignEstimateRequests;

    /**
     * @access public
     * @var boolean
     */
    public $platformEstimateRequested;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignEstimateRequests = null, $platformEstimateRequested = null) {
      $this->campaignEstimateRequests = $campaignEstimateRequests;
      $this->platformEstimateRequested = $platformEstimateRequested;
    }

  }
}

if (!class_exists("CurrencyCodeErrorReason", false)) {
  /**
   * Encodes the reason (cause) of a particular {@link CurrencyCodeError}.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CurrencyCodeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "CurrencyCodeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("TrafficEstimatorErrorReason", false)) {
  /**
   * When the request with {@code null} campaign ID in {@link CampaignEstimateRequest} contains an
   * {@link AdGroupEstimateRequest} with an ID.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class TrafficEstimatorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "TrafficEstimatorError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("TrafficEstimatorServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns traffic estimates for specified criteria.
   * 
   * @param selector Campaigns, ad groups and keywords for which traffic
   * should be estimated.
   * @return Traffic estimation results.
   * @throws ApiException if problems occurred while retrieving estimates
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class TrafficEstimatorServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var TrafficEstimatorSelector
     */
    public $selector;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($selector = null) {
      $this->selector = $selector;
    }

  }
}

if (!class_exists("TrafficEstimatorServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class TrafficEstimatorServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var TrafficEstimatorResult
     */
    public $rval;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rval = null) {
      $this->rval = $rval;
    }

  }
}

if (!class_exists("AdxError", false)) {
  /**
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class AdxError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdxError";

    /**
     * @access public
     * @var tnsAdxErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ApiException";

    /**
     * @access public
     * @var ApiError[]
     */
    public $errors;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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

if (!class_exists("DoubleValue", false)) {
  /**
   * Number value type for constructing double valued ranges.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class DoubleValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DoubleValue";

    /**
     * @access public
     * @var double
     */
    public $number;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($number = null) {
      parent::__construct();
      $this->number = $number;
    }

  }
}

if (!class_exists("LongValue", false)) {
  /**
   * Number value type for constructing long valued ranges.
   * 
   * 
   * 
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class LongValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "LongValue";

    /**
     * @access public
     * @var integer
     */
    public $number;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($number = null) {
      parent::__construct();
      $this->number = $number;
    }

  }
}

if (!class_exists("AdGroupEstimate", false)) {
  /**
   * Represents the estimate results for a single ad group.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class AdGroupEstimate extends Estimate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "AdGroupEstimate";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var KeywordEstimate[]
     */
    public $keywordEstimates;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $keywordEstimates = null, $EstimateType = null) {
      parent::__construct();
      $this->adGroupId = $adGroupId;
      $this->keywordEstimates = $keywordEstimates;
      $this->EstimateType = $EstimateType;
    }

  }
}

if (!class_exists("AdGroupEstimateRequest", false)) {
  /**
   * Represents an ad group that will be estimated. Ad groups may be all
   * new or all existing, or a mixture of new and existing. Only existing
   * campaigns can contain estimates for existing ad groups.<p>
   * 
   * <p>To make a keyword estimates request in which estimates do not consider
   * existing account information (e.g. historical ad group performance), set both
   * {@link #adGroupId} and the enclosing {@link CampaignEstimateRequest}'s
   * {@code campaignId} to {@code null}.
   * 
   * <p>For more details on usage, refer to document at
   * {@link CampaignEstimateRequest}.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class AdGroupEstimateRequest extends EstimateRequest {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "AdGroupEstimateRequest";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var KeywordEstimateRequest[]
     */
    public $keywordEstimateRequests;

    /**
     * @access public
     * @var Money
     */
    public $maxCpc;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $keywordEstimateRequests = null, $maxCpc = null, $EstimateRequestType = null) {
      parent::__construct();
      $this->adGroupId = $adGroupId;
      $this->keywordEstimateRequests = $keywordEstimateRequests;
      $this->maxCpc = $maxCpc;
      $this->EstimateRequestType = $EstimateRequestType;
    }

  }
}

if (!class_exists("CampaignEstimate", false)) {
  /**
   * Represents the estimate results for a single campaign.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CampaignEstimate extends Estimate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "CampaignEstimate";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var AdGroupEstimate[]
     */
    public $adGroupEstimates;

    /**
     * @access public
     * @var PlatformCampaignEstimate[]
     */
    public $platformEstimates;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $adGroupEstimates = null, $platformEstimates = null, $EstimateType = null) {
      parent::__construct();
      $this->campaignId = $campaignId;
      $this->adGroupEstimates = $adGroupEstimates;
      $this->platformEstimates = $platformEstimates;
      $this->EstimateType = $EstimateType;
    }

  }
}

if (!class_exists("CampaignEstimateRequest", false)) {
  /**
   * Represents a campaign that will be estimated.<p>
   * 
   * Returns traffic estimates for the requested set of campaigns.
   * The campaigns can be all new or all existing, or a mixture of
   * new and existing. Only existing campaigns may contain estimates for existing
   * ad groups.<p>
   * 
   * For existing campaigns, the campaign and optionally the ad group will be
   * used as context to produce more accurate estimates. Traffic estimates may
   * only be requested on keywords, so regardless of whether campaign and ad group
   * IDs are provided or left blank, at least one keyword is required to estimate
   * traffic.<p>
   * 
   * To make a keyword estimates request in which estimates do not consider
   * existing account information (e.g. historical ad group performance), set
   * {@link #campaignId} to {@code null}.
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class CampaignEstimateRequest extends EstimateRequest {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "CampaignEstimateRequest";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var AdGroupEstimateRequest[]
     */
    public $adGroupEstimateRequests;

    /**
     * @access public
     * @var Criterion[]
     */
    public $criteria;

    /**
     * @access public
     * @var NetworkSetting
     */
    public $networkSetting;

    /**
     * @access public
     * @var Money
     */
    public $dailyBudget;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $adGroupEstimateRequests = null, $criteria = null, $networkSetting = null, $dailyBudget = null, $EstimateRequestType = null) {
      parent::__construct();
      $this->campaignId = $campaignId;
      $this->adGroupEstimateRequests = $adGroupEstimateRequests;
      $this->criteria = $criteria;
      $this->networkSetting = $networkSetting;
      $this->dailyBudget = $dailyBudget;
      $this->EstimateRequestType = $EstimateRequestType;
    }

  }
}

if (!class_exists("TrafficEstimatorService", false)) {
  /**
   * TrafficEstimatorService
   * @package Google_Api_Ads_AdWords_v201605
   * @subpackage v201605
   */
  class TrafficEstimatorService extends AdWordsSoapClient {

    const SERVICE_NAME = "TrafficEstimatorService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const ENDPOINT = "https://adwords.google.com/api/adwords/o/v201605/TrafficEstimatorService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/o/v201605/TrafficEstimatorService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdxError" => "AdxError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "CollectionSizeError" => "CollectionSizeError",
      "ComparableValue" => "ComparableValue",
      "Criterion" => "Criterion",
      "DatabaseError" => "DatabaseError",
      "DateError" => "DateError",
      "DistinctError" => "DistinctError",
      "DoubleValue" => "DoubleValue",
      "EntityAccessDenied" => "EntityAccessDenied",
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
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "Placement" => "Placement",
      "Platform" => "Platform",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RegionCodeError" => "RegionCodeError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringFormatError" => "StringFormatError",
      "StringLengthError" => "StringLengthError",
      "CriterionUserInterest" => "CriterionUserInterest",
      "CriterionUserList" => "CriterionUserList",
      "Vertical" => "Vertical",
      "AdxError.Reason" => "AdxErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "Criterion.Type" => "CriterionType",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityAccessDenied.Reason" => "EntityAccessDeniedReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "KeywordMatchType" => "KeywordMatchType",
      "LocationTargetingStatus" => "LocationTargetingStatus",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "OperatorError.Reason" => "OperatorErrorReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RegionCodeError.Reason" => "RegionCodeErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "StringFormatError.Reason" => "StringFormatErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "AdGroupEstimate" => "AdGroupEstimate",
      "AdGroupEstimateRequest" => "AdGroupEstimateRequest",
      "CampaignEstimate" => "CampaignEstimate",
      "CampaignEstimateRequest" => "CampaignEstimateRequest",
      "CurrencyCodeError" => "CurrencyCodeError",
      "Estimate" => "Estimate",
      "EstimateRequest" => "EstimateRequest",
      "KeywordEstimate" => "KeywordEstimate",
      "KeywordEstimateRequest" => "KeywordEstimateRequest",
      "PlatformCampaignEstimate" => "PlatformCampaignEstimate",
      "StatsEstimate" => "StatsEstimate",
      "TrafficEstimatorError" => "TrafficEstimatorError",
      "TrafficEstimatorResult" => "TrafficEstimatorResult",
      "TrafficEstimatorSelector" => "TrafficEstimatorSelector",
      "CurrencyCodeError.Reason" => "CurrencyCodeErrorReason",
      "TrafficEstimatorError.Reason" => "TrafficEstimatorErrorReason",
      "get" => "TrafficEstimatorServiceGet",
      "getResponse" => "TrafficEstimatorServiceGetResponse",
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
     * Returns traffic estimates for specified criteria.
     * 
     * @param selector Campaigns, ad groups and keywords for which traffic
     * should be estimated.
     * @return Traffic estimation results.
     * @throws ApiException if problems occurred while retrieving estimates
     */
    public function get($selector) {
      $args = new TrafficEstimatorServiceGet($selector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
  }
}

