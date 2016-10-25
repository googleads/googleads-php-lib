<?php
/**
 * Contains all client objects for the AdwordsUserListService
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
 * @package    Google_Api_Ads_AdWords_v201607
 * @subpackage v201607
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("DateRange", false)) {
  /**
   * Represents a range of dates that has either an upper or a lower bound.
   * The format for the date is YYYYMMDD.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DateRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

    public function __construct($min = null, $max = null) {
      $this->min = $min;
      $this->max = $max;
    }

  }
}

if (!class_exists("OrderBy", false)) {
  /**
   * Specifies how the resulting information should be sorted.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class OrderBy {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

    public function __construct($field = null, $sortOrder = null) {
      $this->field = $field;
      $this->sortOrder = $sortOrder;
    }

  }
}

if (!class_exists("Paging", false)) {
  /**
   * Specifies the page of results to return in the response. A page is specified
   * by the result position to start at and the maximum number of results to
   * return.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class Paging {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

    public function __construct($startIndex = null, $numberResults = null) {
      $this->startIndex = $startIndex;
      $this->numberResults = $numberResults;
    }

  }
}

if (!class_exists("Predicate", false)) {
  /**
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class Predicate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

    public function __construct($field = null, $operator = null, $values = null) {
      $this->field = $field;
      $this->operator = $operator;
      $this->values = $values;
    }

  }
}

if (!class_exists("SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("Selector", false)) {
  /**
   * A generic selector to specify the type of information to return.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class Selector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

    public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null) {
      $this->fields = $fields;
      $this->predicates = $predicates;
      $this->dateRange = $dateRange;
      $this->ordering = $ordering;
      $this->paging = $paging;
    }

  }
}

if (!class_exists("ListReturnValue", false)) {
  /**
   * Base list return value type.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

    public function __construct($ListReturnValueType = null) {
      $this->ListReturnValueType = $ListReturnValueType;
    }

  }
}

if (!class_exists("Operation", false)) {
  /**
   * This represents an operation that includes an operator and an operand
   * specified type.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

    public function __construct($operator = null, $OperationType = null) {
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
}

if (!class_exists("Page", false)) {
  /**
   * Contains the results from a get call.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

    public function __construct($totalNumEntries = null, $PageType = null) {
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
}

if (!class_exists("AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DateErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("EntityNotFoundReason", false)) {
  /**
   * The specified id refered to an entity which either doesn't exist or is not accessible to the
   * customer. e.g. campaign belongs to another customer.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class EntityNotFoundReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("NotEmptyErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("NotWhitelistedErrorReason", false)) {
  /**
   * The single reason for the whitelist error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class NotWhitelistedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
    const XSI_TYPE = "NotWhitelistedError.Reason";

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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("Operator", false)) {
  /**
   * This represents an operator that may be presented to an adsapi service.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class Operator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
    const XSI_TYPE = "Operator";

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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class OperatorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("PredicateOperator", false)) {
  /**
   * Defines the valid set of operators.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class PredicateOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
    const XSI_TYPE = "Predicate.Operator";

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

if (!class_exists("QueryErrorReason", false)) {
  /**
   * The reason for the query error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class QueryErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
    const XSI_TYPE = "QueryError.Reason";

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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("RejectedErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RejectedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("SelectorErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class SelectorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
    const XSI_TYPE = "SelectorError.Reason";

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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("SortOrder", false)) {
  /**
   * Possible orders of sorting.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class SortOrder {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
    const XSI_TYPE = "SortOrder";

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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class StringFormatErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("CollectionSizeError", false)) {
  /**
   * Errors associated with the size of the given collection being
   * out of bounds.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class CollectionSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
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

if (!class_exists("UserListConversionType", false)) {
  /**
   * Represents a conversion type used for building remarketing user lists.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListConversionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListConversionType";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsUserListConversionTypeCategory
     */
    public $category;

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

    public function __construct($id = null, $name = null, $category = null) {
      $this->id = $id;
      $this->name = $name;
      $this->category = $category;
    }

  }
}

if (!class_exists("DateKey", false)) {
  /**
   * A custom parameter of date type. Supported date formats are listed as follows:
   * <ul>
   * <li> 2011-03-31T12:20:19-05:00
   * <li> 03/31/2011 12:20:19-05:00
   * <li> Fri, Mar 31 2011 12:20:19 EST
   * <li> Fri, Mar 31 12:20:19 EST 2011
   * </ul>
   * <p>
   * If time zone information is not present in the value,
   * it is assumed to be PST. If time value is not specified,
   * it defaults to midnight of the day.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DateKey {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "DateKey";

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

    public function __construct($name = null) {
      $this->name = $name;
    }

  }
}

if (!class_exists("DateRuleItem", false)) {
  /**
   * An atomic rule fragment composing of date operation.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DateRuleItem {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "DateRuleItem";

    /**
     * @access public
     * @var DateKey
     */
    public $key;

    /**
     * @access public
     * @var tnsDateRuleItemDateOperator
     */
    public $op;

    /**
     * @access public
     * @var string
     */
    public $value;

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

    public function __construct($key = null, $op = null, $value = null) {
      $this->key = $key;
      $this->op = $op;
      $this->value = $value;
    }

  }
}

if (!class_exists("LogicalUserListOperand", false)) {
  /**
   * An interface for a logical user list operand. A logical user list is a
   * combination of logical rules. Each rule is defined as a logical operator and
   * a list of operands. Those operands can be of type UserList.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class LogicalUserListOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "LogicalUserListOperand";

    /**
     * @access public
     * @var UserList
     */
    public $UserList;

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

    public function __construct($UserList = null) {
      $this->UserList = $UserList;
    }

  }
}

if (!class_exists("MutateMembersError", false)) {
  /**
   * Represents possible error codes from {@code UserListService#mutateMembers}.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class MutateMembersError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "MutateMembersError";

    /**
     * @access public
     * @var tnsMutateMembersErrorReason
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

if (!class_exists("MutateMembersOperand", false)) {
  /**
   * Operand containing user list id and members to be added or removed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class MutateMembersOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "MutateMembersOperand";

    /**
     * @access public
     * @var integer
     */
    public $userListId;

    /**
     * @access public
     * @var tnsMutateMembersOperandDataType
     */
    public $dataType;

    /**
     * @access public
     * @var string[]
     */
    public $members;

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

    public function __construct($userListId = null, $dataType = null, $members = null) {
      $this->userListId = $userListId;
      $this->dataType = $dataType;
      $this->members = $members;
    }

  }
}

if (!class_exists("MutateMembersOperation", false)) {
  /**
   * Operation representing a request to add or remove members from a user list.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class MutateMembersOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "MutateMembersOperation";

    /**
     * @access public
     * @var MutateMembersOperand
     */
    public $operand;

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

    public function __construct($operand = null, $operator = null, $OperationType = null) {
      parent::__construct();
      $this->operand = $operand;
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
}

if (!class_exists("MutateMembersReturnValue", false)) {
  /**
   * A container for return value from {@code UserListService#mutateMembers}
   * method.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class MutateMembersReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "MutateMembersReturnValue";

    /**
     * @access public
     * @var UserList[]
     */
    public $userLists;

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

    public function __construct($userLists = null) {
      $this->userLists = $userLists;
    }

  }
}

if (!class_exists("NumberKey", false)) {
  /**
   * A custom parameter of type number.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class NumberKey {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "NumberKey";

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

    public function __construct($name = null) {
      $this->name = $name;
    }

  }
}

if (!class_exists("NumberRuleItem", false)) {
  /**
   * An atomic rule fragment composing of number operation.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class NumberRuleItem {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "NumberRuleItem";

    /**
     * @access public
     * @var NumberKey
     */
    public $key;

    /**
     * @access public
     * @var tnsNumberRuleItemNumberOperator
     */
    public $op;

    /**
     * @access public
     * @var double
     */
    public $value;

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

    public function __construct($key = null, $op = null, $value = null) {
      $this->key = $key;
      $this->op = $op;
      $this->value = $value;
    }

  }
}

if (!class_exists("Rule", false)) {
  /**
   * A client defined rule based on custom parameters sent by web sites.
   * It consists of rule item groups that are connected by OR.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class Rule {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "Rule";

    /**
     * @access public
     * @var RuleItemGroup[]
     */
    public $groups;

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

    public function __construct($groups = null) {
      $this->groups = $groups;
    }

  }
}

if (!class_exists("RuleItem", false)) {
  /**
   * An atomic rule fragment.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RuleItem {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "RuleItem";

    /**
     * @access public
     * @var DateRuleItem
     */
    public $DateRuleItem;

    /**
     * @access public
     * @var NumberRuleItem
     */
    public $NumberRuleItem;

    /**
     * @access public
     * @var StringRuleItem
     */
    public $StringRuleItem;

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

    public function __construct($DateRuleItem = null, $NumberRuleItem = null, $StringRuleItem = null) {
      $this->DateRuleItem = $DateRuleItem;
      $this->NumberRuleItem = $NumberRuleItem;
      $this->StringRuleItem = $StringRuleItem;
    }

  }
}

if (!class_exists("RuleItemGroup", false)) {
  /**
   * A group of rule items that are ANDed together.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RuleItemGroup {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "RuleItemGroup";

    /**
     * @access public
     * @var RuleItem[]
     */
    public $items;

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

    public function __construct($items = null) {
      $this->items = $items;
    }

  }
}

if (!class_exists("StringKey", false)) {
  /**
   * Custom parameter of type string. For websites, there are two built-in parameters
   * URL (name = 'url__') and referrer URL (name = 'ref_url__').
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class StringKey {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "StringKey";

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

    public function __construct($name = null) {
      $this->name = $name;
    }

  }
}

if (!class_exists("StringRuleItem", false)) {
  /**
   * An atomic rule fragment composing of string operation.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class StringRuleItem {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "StringRuleItem";

    /**
     * @access public
     * @var StringKey
     */
    public $key;

    /**
     * @access public
     * @var tnsStringRuleItemStringOperator
     */
    public $op;

    /**
     * @access public
     * @var string
     */
    public $value;

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

    public function __construct($key = null, $op = null, $value = null) {
      $this->key = $key;
      $this->op = $op;
      $this->value = $value;
    }

  }
}

if (!class_exists("UserList", false)) {
  /**
   * Represents a UserList object that is sent over the wire.
   * This is a list of users an account may target.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserList";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var boolean
     */
    public $isReadOnly;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var tnsUserListMembershipStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $integrationCode;

    /**
     * @access public
     * @var tnsAccessReason
     */
    public $accessReason;

    /**
     * @access public
     * @var tnsAccountUserListStatus
     */
    public $accountUserListStatus;

    /**
     * @access public
     * @var integer
     */
    public $membershipLifeSpan;

    /**
     * @access public
     * @var integer
     */
    public $size;

    /**
     * @access public
     * @var tnsSizeRange
     */
    public $sizeRange;

    /**
     * @access public
     * @var integer
     */
    public $sizeForSearch;

    /**
     * @access public
     * @var tnsSizeRange
     */
    public $sizeRangeForSearch;

    /**
     * @access public
     * @var tnsUserListType
     */
    public $listType;

    /**
     * @access public
     * @var boolean
     */
    public $isEligibleForSearch;

    /**
     * @access public
     * @var boolean
     */
    public $isEligibleForDisplay;

    /**
     * @access public
     * @var string
     */
    public $UserListType;
    private $_parameterMap = array(
      "UserList.Type" => "UserListType",
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

    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $UserListType = null) {
      $this->id = $id;
      $this->isReadOnly = $isReadOnly;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->integrationCode = $integrationCode;
      $this->accessReason = $accessReason;
      $this->accountUserListStatus = $accountUserListStatus;
      $this->membershipLifeSpan = $membershipLifeSpan;
      $this->size = $size;
      $this->sizeRange = $sizeRange;
      $this->sizeForSearch = $sizeForSearch;
      $this->sizeRangeForSearch = $sizeRangeForSearch;
      $this->listType = $listType;
      $this->isEligibleForSearch = $isEligibleForSearch;
      $this->isEligibleForDisplay = $isEligibleForDisplay;
      $this->UserListType = $UserListType;
    }

  }
}

if (!class_exists("UserListError", false)) {
  /**
   * Represents possible error codes in UserListService.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListError";

    /**
     * @access public
     * @var tnsUserListErrorReason
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

if (!class_exists("UserListLogicalRule", false)) {
  /**
   * A user list logical rule. A rule has a logical operator (and/or/not) and a
   * list of operands that can be user lists or user interests.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListLogicalRule {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListLogicalRule";

    /**
     * @access public
     * @var tnsUserListLogicalRuleOperator
     */
    public $operator;

    /**
     * @access public
     * @var LogicalUserListOperand[]
     */
    public $ruleOperands;

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

    public function __construct($operator = null, $ruleOperands = null) {
      $this->operator = $operator;
      $this->ruleOperands = $ruleOperands;
    }

  }
}

if (!class_exists("UserListOperation", false)) {
  /**
   * UserList operations for adding/updating UserList entities.
   * The following {@link Operator}s are supported: ADD and SET.
   * The REMOVE operator is not supported.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListOperation";

    /**
     * @access public
     * @var UserList
     */
    public $operand;

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

    public function __construct($operand = null, $operator = null, $OperationType = null) {
      parent::__construct();
      $this->operand = $operand;
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
}

if (!class_exists("UserListPage", false)) {
  /**
   * Contains a list of user lists resulting from the filtering and paging of the
   * {@link UserListService#get} call.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListPage extends Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListPage";

    /**
     * @access public
     * @var UserList[]
     */
    public $entries;

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

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null) {
      parent::__construct();
      $this->entries = $entries;
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
}

if (!class_exists("UserListReturnValue", false)) {
  /**
   * A container for return values from the UserListService.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListReturnValue extends ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListReturnValue";

    /**
     * @access public
     * @var UserList[]
     */
    public $value;

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

    public function __construct($value = null, $ListReturnValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ListReturnValueType = $ListReturnValueType;
    }

  }
}

if (!class_exists("AccessReason", false)) {
  /**
   * This indicates the way the entity such as UserList is related to a user.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AccessReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "AccessReason";

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

if (!class_exists("AccountUserListStatus", false)) {
  /**
   * Status in the AccountUserListStatus table. This indicates if the user list share or
   * the licensing of the userlist is still active.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AccountUserListStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "AccountUserListStatus";

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
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class CollectionSizeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
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

if (!class_exists("UserListConversionTypeCategory", false)) {
  /**
   * User can create only BOOMERANG_EVENT conversion types. For all other types
   * UserListService service will return OTHER.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListConversionTypeCategory {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListConversionType.Category";

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

if (!class_exists("DateRuleItemDateOperator", false)) {
  /**
   * Supported rule operator for date type.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DateRuleItemDateOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "DateRuleItem.DateOperator";

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

if (!class_exists("MutateMembersErrorReason", false)) {
  /**
   * Reasons
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class MutateMembersErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "MutateMembersError.Reason";

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

if (!class_exists("MutateMembersOperandDataType", false)) {
  /**
   * Represents the different type of the member data entity.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class MutateMembersOperandDataType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "MutateMembersOperand.DataType";

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

if (!class_exists("NumberRuleItemNumberOperator", false)) {
  /**
   * Supported operator for numbers.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class NumberRuleItemNumberOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "NumberRuleItem.NumberOperator";

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

if (!class_exists("SizeRange", false)) {
  /**
   * Size range in terms of number of users of a UserList/UserInterest.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class SizeRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "SizeRange";

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

if (!class_exists("StringRuleItemStringOperator", false)) {
  /**
   * Supported operators for strings.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class StringRuleItemStringOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "StringRuleItem.StringOperator";

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

if (!class_exists("UserListErrorReason", false)) {
  /**
   * Creating and updating external remarketing user lists is not supported.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListError.Reason";

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

if (!class_exists("UserListLogicalRuleOperator", false)) {
  /**
   * And - all of the operands.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListLogicalRuleOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListLogicalRule.Operator";

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

if (!class_exists("UserListMembershipStatus", false)) {
  /**
   * Membership status of the user list. This status indicates whether a user list
   * can accumulate more users and may be targeted to.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListMembershipStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListMembershipStatus";

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

if (!class_exists("UserListType", false)) {
  /**
   * The user list types
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class UserListType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "UserListType";

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

if (!class_exists("AdwordsUserListServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of user lists that meet the selector criteria.
   * 
   * @param serviceSelector the selector specifying the {@link UserList}s to return.
   * @return a list of UserList entities which meet the selector criteria.
   * @throws ApiException if problems occurred while fetching UserList information.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AdwordsUserListServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

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

    public function __construct($serviceSelector = null) {
      $this->serviceSelector = $serviceSelector;
    }

  }
}

if (!class_exists("AdwordsUserListServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AdwordsUserListServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var UserListPage
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

if (!class_exists("AdwordsUserListServiceMutate", false)) {
  /**
   * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   * 
   * 
   * 
   * Applies a list of mutate operations (i.e. add, set):
   * 
   * Add - creates a set of user lists
   * Set - updates a set of user lists
   * Remove - not supported
   * 
   * @param operations the operations to apply
   * @return a list of UserList objects
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AdwordsUserListServiceMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var UserListOperation[]
     */
    public $operations;

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

    public function __construct($operations = null) {
      $this->operations = $operations;
    }

  }
}

if (!class_exists("AdwordsUserListServiceMutateResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AdwordsUserListServiceMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var UserListReturnValue
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

if (!class_exists("MutateMembers", false)) {
  /**
   * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   * 
   * 
   * 
   * Mutate members of user lists by either adding or removing their lists of members.
   * The following {@link Operator}s are supported: ADD and REMOVE.
   * 
   * <p>Note that operations cannot have same user list id but different operators.
   * 
   * @param operations the mutate members operations to apply
   * @return a list of UserList objects
   * @throws ApiException when there are one or more errors with the request
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class MutateMembers {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var MutateMembersOperation[]
     */
    public $operations;

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

    public function __construct($operations = null) {
      $this->operations = $operations;
    }

  }
}

if (!class_exists("MutateMembersResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class MutateMembersResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var MutateMembersReturnValue
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

if (!class_exists("Query", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of user lists that match the query.
   * 
   * @param query The SQL-like AWQL query string
   * @return A list of UserList
   * @throws ApiException when the query is invalid or there are errors processing the request.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class Query {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var string
     */
    public $query;

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

    public function __construct($query = null) {
      $this->query = $query;
    }

  }
}

if (!class_exists("QueryResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class QueryResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var UserListPage
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

if (!class_exists("AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("DateError", false)) {
  /**
   * Errors associated with invalid dates and date ranges.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DateError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("EntityNotFound", false)) {
  /**
   * An id did not correspond to an entity, or it referred to an entity which does not belong to the
   * customer.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class EntityNotFound extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("NotWhitelistedError", false)) {
  /**
   * Indicates that the customer is not whitelisted for accessing the API.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class NotWhitelistedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
    const XSI_TYPE = "NotWhitelistedError";

    /**
     * @access public
     * @var tnsNotWhitelistedErrorReason
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("OperationAccessDenied", false)) {
  /**
   * Operation not permitted due to the invoked service's access policy.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class OperatorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("QueryError", false)) {
  /**
   * A QueryError represents possible errors for query parsing and execution.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class QueryError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("RejectedError", false)) {
  /**
   * Indicates that a field was rejected due to compatibility issues.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RejectedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("SelectorError", false)) {
  /**
   * Represents possible error codes for {@link Selector}.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class SelectorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
    const XSI_TYPE = "SelectorError";

    /**
     * @access public
     * @var tnsSelectorErrorReason
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("StringFormatError", false)) {
  /**
   * A list of error code for reporting invalid content of input strings.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class StringFormatError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201607";
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

if (!class_exists("CrmBasedUserList", false)) {
  /**
   * UserList of CRM users provided by the advertiser.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class CrmBasedUserList extends UserList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "CrmBasedUserList";

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

    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $UserListType = null) {
      parent::__construct();
      $this->id = $id;
      $this->isReadOnly = $isReadOnly;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->integrationCode = $integrationCode;
      $this->accessReason = $accessReason;
      $this->accountUserListStatus = $accountUserListStatus;
      $this->membershipLifeSpan = $membershipLifeSpan;
      $this->size = $size;
      $this->sizeRange = $sizeRange;
      $this->sizeForSearch = $sizeForSearch;
      $this->sizeRangeForSearch = $sizeRangeForSearch;
      $this->listType = $listType;
      $this->isEligibleForSearch = $isEligibleForSearch;
      $this->isEligibleForDisplay = $isEligibleForDisplay;
      $this->UserListType = $UserListType;
    }

  }
}

if (!class_exists("LogicalUserList", false)) {
  /**
   * Represents a user list that is a custom combination of user lists and user
   * interests.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class LogicalUserList extends UserList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "LogicalUserList";

    /**
     * @access public
     * @var UserListLogicalRule[]
     */
    public $rules;

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

    public function __construct($rules = null, $id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $UserListType = null) {
      parent::__construct();
      $this->rules = $rules;
      $this->id = $id;
      $this->isReadOnly = $isReadOnly;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->integrationCode = $integrationCode;
      $this->accessReason = $accessReason;
      $this->accountUserListStatus = $accountUserListStatus;
      $this->membershipLifeSpan = $membershipLifeSpan;
      $this->size = $size;
      $this->sizeRange = $sizeRange;
      $this->sizeForSearch = $sizeForSearch;
      $this->sizeRangeForSearch = $sizeRangeForSearch;
      $this->listType = $listType;
      $this->isEligibleForSearch = $isEligibleForSearch;
      $this->isEligibleForDisplay = $isEligibleForDisplay;
      $this->UserListType = $UserListType;
    }

  }
}

if (!class_exists("BasicUserList", false)) {
  /**
   * User list targeting as a collection of conversion types.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class BasicUserList extends UserList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "BasicUserList";

    /**
     * @access public
     * @var UserListConversionType[]
     */
    public $conversionTypes;

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

    public function __construct($conversionTypes = null, $id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $UserListType = null) {
      parent::__construct();
      $this->conversionTypes = $conversionTypes;
      $this->id = $id;
      $this->isReadOnly = $isReadOnly;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->integrationCode = $integrationCode;
      $this->accessReason = $accessReason;
      $this->accountUserListStatus = $accountUserListStatus;
      $this->membershipLifeSpan = $membershipLifeSpan;
      $this->size = $size;
      $this->sizeRange = $sizeRange;
      $this->sizeForSearch = $sizeForSearch;
      $this->sizeRangeForSearch = $sizeRangeForSearch;
      $this->listType = $listType;
      $this->isEligibleForSearch = $isEligibleForSearch;
      $this->isEligibleForDisplay = $isEligibleForDisplay;
      $this->UserListType = $UserListType;
    }

  }
}

if (!class_exists("RuleBasedUserList", false)) {
  /**
   * Representation of a userlist that is generated by a rule.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class RuleBasedUserList extends UserList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "RuleBasedUserList";

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

    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $UserListType = null) {
      parent::__construct();
      $this->id = $id;
      $this->isReadOnly = $isReadOnly;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->integrationCode = $integrationCode;
      $this->accessReason = $accessReason;
      $this->accountUserListStatus = $accountUserListStatus;
      $this->membershipLifeSpan = $membershipLifeSpan;
      $this->size = $size;
      $this->sizeRange = $sizeRange;
      $this->sizeForSearch = $sizeForSearch;
      $this->sizeRangeForSearch = $sizeRangeForSearch;
      $this->listType = $listType;
      $this->isEligibleForSearch = $isEligibleForSearch;
      $this->isEligibleForDisplay = $isEligibleForDisplay;
      $this->UserListType = $UserListType;
    }

  }
}

if (!class_exists("SimilarUserList", false)) {
  /**
   * SimilarUserList is a list of users which are similar to users from another UserList.
   * These lists are readonly and automatically created by google.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class SimilarUserList extends UserList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "SimilarUserList";

    /**
     * @access public
     * @var integer
     */
    public $seedUserListId;

    /**
     * @access public
     * @var string
     */
    public $seedUserListName;

    /**
     * @access public
     * @var string
     */
    public $seedUserListDescription;

    /**
     * @access public
     * @var tnsUserListMembershipStatus
     */
    public $seedUserListStatus;

    /**
     * @access public
     * @var integer
     */
    public $seedListSize;

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

    public function __construct($seedUserListId = null, $seedUserListName = null, $seedUserListDescription = null, $seedUserListStatus = null, $seedListSize = null, $id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $UserListType = null) {
      parent::__construct();
      $this->seedUserListId = $seedUserListId;
      $this->seedUserListName = $seedUserListName;
      $this->seedUserListDescription = $seedUserListDescription;
      $this->seedUserListStatus = $seedUserListStatus;
      $this->seedListSize = $seedListSize;
      $this->id = $id;
      $this->isReadOnly = $isReadOnly;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->integrationCode = $integrationCode;
      $this->accessReason = $accessReason;
      $this->accountUserListStatus = $accountUserListStatus;
      $this->membershipLifeSpan = $membershipLifeSpan;
      $this->size = $size;
      $this->sizeRange = $sizeRange;
      $this->sizeForSearch = $sizeForSearch;
      $this->sizeRangeForSearch = $sizeRangeForSearch;
      $this->listType = $listType;
      $this->isEligibleForSearch = $isEligibleForSearch;
      $this->isEligibleForDisplay = $isEligibleForDisplay;
      $this->UserListType = $UserListType;
    }

  }
}

if (!class_exists("DateSpecificRuleUserList", false)) {
  /**
   * Visitors of a page during specific dates. The visiting periods are defined as follows:
   * <ul>
   * <li> between {@code startDate} (inclusive) and {@code endDate} (inclusive);
   * <li> before {@code endDate} (exclusive) with {@code startDate} = 2000-01-01;
   * <li> after {@code startDate} (exclusive) with {@code endDate} = 2037-12-30.
   * </ul>
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class DateSpecificRuleUserList extends RuleBasedUserList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "DateSpecificRuleUserList";

    /**
     * @access public
     * @var Rule
     */
    public $rule;

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

    public function __construct($rule = null, $startDate = null, $endDate = null) {
      parent::__construct();
      $this->rule = $rule;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
    }

  }
}

if (!class_exists("ExpressionRuleUserList", false)) {
  /**
   * Visitors of a page. The page visit is defined by one boolean rule expression.
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class ExpressionRuleUserList extends RuleBasedUserList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const XSI_TYPE = "ExpressionRuleUserList";

    /**
     * @access public
     * @var Rule
     */
    public $rule;

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

    public function __construct($rule = null) {
      parent::__construct();
      $this->rule = $rule;
    }

  }
}

if (!class_exists("AdwordsUserListService", false)) {
  /**
   * AdwordsUserListService
   * @package Google_Api_Ads_AdWords_v201607
   * @subpackage v201607
   */
  class AdwordsUserListService extends AdWordsSoapClient {

    const SERVICE_NAME = "AdwordsUserListService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201607";
    const ENDPOINT = "https://adwords.google.com/api/adwords/rm/v201607/AdwordsUserListService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/rm/v201607/AdwordsUserListService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "DateError" => "DateError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "EntityNotFound" => "EntityNotFound",
      "InternalApiError" => "InternalApiError",
      "NotEmptyError" => "NotEmptyError",
      "NotWhitelistedError" => "NotWhitelistedError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "Predicate" => "Predicate",
      "QueryError" => "QueryError",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequiredError" => "RequiredError",
      "SelectorError" => "SelectorError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringFormatError" => "StringFormatError",
      "StringLengthError" => "StringLengthError",
      "DatabaseError" => "DatabaseError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Selector" => "Selector",
      "ListReturnValue" => "ListReturnValue",
      "Operation" => "Operation",
      "Page" => "Page",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "Predicate.Operator" => "PredicateOperator",
      "QueryError.Reason" => "QueryErrorReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SelectorError.Reason" => "SelectorErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "SortOrder" => "SortOrder",
      "StringFormatError.Reason" => "StringFormatErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "CollectionSizeError" => "CollectionSizeError",
      "UserListConversionType" => "UserListConversionType",
      "CrmBasedUserList" => "CrmBasedUserList",
      "DateKey" => "DateKey",
      "DateRuleItem" => "DateRuleItem",
      "DateSpecificRuleUserList" => "DateSpecificRuleUserList",
      "ExpressionRuleUserList" => "ExpressionRuleUserList",
      "LogicalUserList" => "LogicalUserList",
      "LogicalUserListOperand" => "LogicalUserListOperand",
      "MutateMembersError" => "MutateMembersError",
      "MutateMembersOperand" => "MutateMembersOperand",
      "MutateMembersOperation" => "MutateMembersOperation",
      "MutateMembersReturnValue" => "MutateMembersReturnValue",
      "NumberKey" => "NumberKey",
      "NumberRuleItem" => "NumberRuleItem",
      "BasicUserList" => "BasicUserList",
      "Rule" => "Rule",
      "RuleBasedUserList" => "RuleBasedUserList",
      "RuleItem" => "RuleItem",
      "RuleItemGroup" => "RuleItemGroup",
      "SimilarUserList" => "SimilarUserList",
      "StringKey" => "StringKey",
      "StringRuleItem" => "StringRuleItem",
      "UserList" => "UserList",
      "UserListError" => "UserListError",
      "UserListLogicalRule" => "UserListLogicalRule",
      "UserListOperation" => "UserListOperation",
      "UserListPage" => "UserListPage",
      "UserListReturnValue" => "UserListReturnValue",
      "AccessReason" => "AccessReason",
      "AccountUserListStatus" => "AccountUserListStatus",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "UserListConversionType.Category" => "UserListConversionTypeCategory",
      "DateRuleItem.DateOperator" => "DateRuleItemDateOperator",
      "MutateMembersError.Reason" => "MutateMembersErrorReason",
      "MutateMembersOperand.DataType" => "MutateMembersOperandDataType",
      "NumberRuleItem.NumberOperator" => "NumberRuleItemNumberOperator",
      "SizeRange" => "SizeRange",
      "StringRuleItem.StringOperator" => "StringRuleItemStringOperator",
      "UserListError.Reason" => "UserListErrorReason",
      "UserListLogicalRule.Operator" => "UserListLogicalRuleOperator",
      "UserListMembershipStatus" => "UserListMembershipStatus",
      "UserListType" => "UserListType",
      "get" => "AdwordsUserListServiceGet",
      "getResponse" => "AdwordsUserListServiceGetResponse",
      "mutate" => "AdwordsUserListServiceMutate",
      "mutateResponse" => "AdwordsUserListServiceMutateResponse",
      "mutateMembers" => "MutateMembers",
      "mutateMembersResponse" => "MutateMembersResponse",
      "query" => "Query",
      "queryResponse" => "QueryResponse",
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
     * Returns the list of user lists that meet the selector criteria.
     * 
     * @param serviceSelector the selector specifying the {@link UserList}s to return.
     * @return a list of UserList entities which meet the selector criteria.
     * @throws ApiException if problems occurred while fetching UserList information.
     */
    public function get($serviceSelector) {
      $args = new AdwordsUserListServiceGet($serviceSelector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     * 
     * 
     * 
     * Applies a list of mutate operations (i.e. add, set):
     * 
     * Add - creates a set of user lists
     * Set - updates a set of user lists
     * Remove - not supported
     * 
     * @param operations the operations to apply
     * @return a list of UserList objects
     */
    public function mutate($operations) {
      $args = new AdwordsUserListServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     * 
     * 
     * 
     * Mutate members of user lists by either adding or removing their lists of members.
     * The following {@link Operator}s are supported: ADD and REMOVE.
     * 
     * <p>Note that operations cannot have same user list id but different operators.
     * 
     * @param operations the mutate members operations to apply
     * @return a list of UserList objects
     * @throws ApiException when there are one or more errors with the request
     */
    public function mutateMembers($operations) {
      $args = new MutateMembers($operations);
      $result = $this->__soapCall("mutateMembers", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of user lists that match the query.
     * 
     * @param query The SQL-like AWQL query string
     * @return A list of UserList
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query) {
      $args = new Query($query);
      $result = $this->__soapCall("query", array($args));
      return $result->rval;
    }
  }
}

