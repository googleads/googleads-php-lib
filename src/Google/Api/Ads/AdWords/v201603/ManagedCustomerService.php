<?php
/**
 * Contains all client objects for the ManagedCustomerService
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
 * @package    Google_Api_Ads_AdWords_v201603
 * @subpackage v201603
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class DateRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class OrderBy {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class Paging {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class Predicate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class Selector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("Operation", false)) {
  /**
   * This represents an operation that includes an operator and an operand
   * specified type.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ClientTermsErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class DateErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("IdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class IdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class Operator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class OperatorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class PredicateOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("QuotaCheckErrorReason", false)) {
  /**
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RejectedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RequestErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class SelectorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class SortOrder {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("StringLengthErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("ManagedCustomerLabel", false)) {
  /**
   * A label ID and customer ID the label applies to.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerLabel {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomerLabel";

    /**
     * @access public
     * @var integer
     */
    public $labelId;

    /**
     * @access public
     * @var integer
     */
    public $customerId;

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

    public function __construct($labelId = null, $customerId = null) {
      $this->labelId = $labelId;
      $this->customerId = $customerId;
    }

  }
}

if (!class_exists("ManagedCustomerLabelOperation", false)) {
  /**
   * An operation to apply or remove an account label from a managed customer.
   * 
   * <p class="note"><b>Note:</b> The {@code SET} operator is not supported.</p>
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerLabelOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomerLabelOperation";

    /**
     * @access public
     * @var ManagedCustomerLabel
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

if (!class_exists("ManagedCustomerLabelReturnValue", false)) {
  /**
   * A container for return values from {@link ManagedCustomerService#mutateLabel}.
   * <p>For successful {@linkplain ADD} operations, the input {@linkplain ManagedCustomerLabel}
   * is returned.
   * <p>For successful {@linkplain REMOVE} operations, the returned {@linkplain ManagedCustomerLabel}
   * will contain the customer ID and a null label ID.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerLabelReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomerLabelReturnValue";

    /**
     * @access public
     * @var ManagedCustomerLabel[]
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

    public function __construct($value = null) {
      $this->value = $value;
    }

  }
}

if (!class_exists("ManagedCustomerServiceError", false)) {
  /**
   * Error for {@link ManagedCustomerService}
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerServiceError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomerServiceError";

    /**
     * @access public
     * @var tnsManagedCustomerServiceErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var integer[]
     */
    public $customerIds;

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

    public function __construct($reason = null, $customerIds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->customerIds = $customerIds;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("PendingInvitationSelector", false)) {
  /**
   * Selector for getPendingInvitations method.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class PendingInvitationSelector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "PendingInvitationSelector";

    /**
     * @access public
     * @var integer[]
     */
    public $managerCustomerIds;

    /**
     * @access public
     * @var integer[]
     */
    public $clientCustomerIds;

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

    public function __construct($managerCustomerIds = null, $clientCustomerIds = null) {
      $this->managerCustomerIds = $managerCustomerIds;
      $this->clientCustomerIds = $clientCustomerIds;
    }

  }
}

if (!class_exists("AccountLabel", false)) {
  /**
   * A label that can be attached to accounts.
   * A manager may attach labels to accounts that s/he manages
   * (either directly or indirectly).
   * 
   * <p>Note that these are not interchangeable with campaign management labels, and are owned
   * by manager customers.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class AccountLabel {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "AccountLabel";

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

    public function __construct($id = null, $name = null) {
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("ManagedCustomerLink", false)) {
  /**
   * Represents an AdWords manager-client link.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerLink {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomerLink";

    /**
     * @access public
     * @var integer
     */
    public $managerCustomerId;

    /**
     * @access public
     * @var integer
     */
    public $clientCustomerId;

    /**
     * @access public
     * @var tnsLinkStatus
     */
    public $linkStatus;

    /**
     * @access public
     * @var string
     */
    public $pendingDescriptiveName;

    /**
     * @access public
     * @var boolean
     */
    public $isHidden;

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

    public function __construct($managerCustomerId = null, $clientCustomerId = null, $linkStatus = null, $pendingDescriptiveName = null, $isHidden = null) {
      $this->managerCustomerId = $managerCustomerId;
      $this->clientCustomerId = $clientCustomerId;
      $this->linkStatus = $linkStatus;
      $this->pendingDescriptiveName = $pendingDescriptiveName;
      $this->isHidden = $isHidden;
    }

  }
}

if (!class_exists("LinkOperation", false)) {
  /**
   * Operation for modifying ManagedCustomer links. See {@link ManagedCustomerService#mutateLink}.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class LinkOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "LinkOperation";

    /**
     * @access public
     * @var ManagedCustomerLink
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

if (!class_exists("MoveOperation", false)) {
  /**
   * Operation for moving ManagedCustomer links. See {@link ManagedCustomerService#mutateManager}.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class MoveOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "MoveOperation";

    /**
     * @access public
     * @var ManagedCustomerLink
     */
    public $operand;

    /**
     * @access public
     * @var integer
     */
    public $oldManagerCustomerId;

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

    public function __construct($operand = null, $oldManagerCustomerId = null, $operator = null, $OperationType = null) {
      parent::__construct();
      $this->operand = $operand;
      $this->oldManagerCustomerId = $oldManagerCustomerId;
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
}

if (!class_exists("MutateLinkResults", false)) {
  /**
   * Results of a {@link ManagedCustomerService#mutateLink} call which changes
   * manager/client links.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class MutateLinkResults {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "MutateLinkResults";

    /**
     * @access public
     * @var ManagedCustomerLink[]
     */
    public $links;

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

    public function __construct($links = null) {
      $this->links = $links;
    }

  }
}

if (!class_exists("MutateManagerResults", false)) {
  /**
   * Results of a {@link ManagedCustomerService#mutateManager} call, which moves client customers to
   * new managers.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class MutateManagerResults {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "MutateManagerResults";

    /**
     * @access public
     * @var ManagedCustomerLink[]
     */
    public $links;

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

    public function __construct($links = null) {
      $this->links = $links;
    }

  }
}

if (!class_exists("ManagedCustomer", false)) {
  /**
   * Data object that represents a managed customer.  Member of {@link ManagedCustomerPage}.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomer {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomer";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $companyName;

    /**
     * @access public
     * @var integer
     */
    public $customerId;

    /**
     * @access public
     * @var boolean
     */
    public $canManageClients;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

    /**
     * @access public
     * @var string
     */
    public $dateTimeZone;

    /**
     * @access public
     * @var boolean
     */
    public $testAccount;

    /**
     * @access public
     * @var AccountLabel[]
     */
    public $accountLabels;

    /**
     * @access public
     * @var boolean
     */
    public $excludeHiddenAccounts;

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

    public function __construct($name = null, $companyName = null, $customerId = null, $canManageClients = null, $currencyCode = null, $dateTimeZone = null, $testAccount = null, $accountLabels = null, $excludeHiddenAccounts = null) {
      $this->name = $name;
      $this->companyName = $companyName;
      $this->customerId = $customerId;
      $this->canManageClients = $canManageClients;
      $this->currencyCode = $currencyCode;
      $this->dateTimeZone = $dateTimeZone;
      $this->testAccount = $testAccount;
      $this->accountLabels = $accountLabels;
      $this->excludeHiddenAccounts = $excludeHiddenAccounts;
    }

  }
}

if (!class_exists("ManagedCustomerOperation", false)) {
  /**
   * An operation to create or modify a managed customer.
   * <p class="note"><b>Note:</b>
   * <li><code>ADD</code> operator is supported in all API versions.</li>
   * <li><code>SET</code> operator is supported beginning with v201601.</li>
   * <li><code>REMOVE</code> operator is not supported.</li>
   * </p>
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomerOperation";

    /**
     * @access public
     * @var ManagedCustomer
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

if (!class_exists("ManagedCustomerPage", false)) {
  /**
   * Return result of {@link ManagedCustomerService}
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerPage extends Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomerPage";

    /**
     * @access public
     * @var ManagedCustomer[]
     */
    public $entries;

    /**
     * @access public
     * @var ManagedCustomerLink[]
     */
    public $links;

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

    public function __construct($entries = null, $links = null, $totalNumEntries = null, $PageType = null) {
      parent::__construct();
      $this->entries = $entries;
      $this->links = $links;
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
}

if (!class_exists("ManagedCustomerReturnValue", false)) {
  /**
   * A container for return values from the ManagedCustomerService.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomerReturnValue";

    /**
     * @access public
     * @var ManagedCustomer[]
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

    public function __construct($value = null) {
      $this->value = $value;
    }

  }
}

if (!class_exists("PendingInvitation", false)) {
  /**
   * Pending invitation result for the getPendingInvitations method.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class PendingInvitation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "PendingInvitation";

    /**
     * @access public
     * @var ManagedCustomer
     */
    public $manager;

    /**
     * @access public
     * @var ManagedCustomer
     */
    public $client;

    /**
     * @access public
     * @var string
     */
    public $creationDate;

    /**
     * @access public
     * @var string
     */
    public $expirationDate;

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

    public function __construct($manager = null, $client = null, $creationDate = null, $expirationDate = null) {
      $this->manager = $manager;
      $this->client = $client;
      $this->creationDate = $creationDate;
      $this->expirationDate = $expirationDate;
    }

  }
}

if (!class_exists("LinkStatus", false)) {
  /**
   * These status values match the values in the ServicedAccounts.Status column.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class LinkStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "LinkStatus";

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

if (!class_exists("ManagedCustomerServiceErrorReason", false)) {
  /**
   * Unknown.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerServiceErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "ManagedCustomerServiceError.Reason";

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

if (!class_exists("ManagedCustomerServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of customers that meet the selector criteria.
   * 
   * @param selector The selector specifying the {@link ManagedCustomer}s to return.
   * @return List of customers identified by the selector.
   * @throws ApiException When there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
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

if (!class_exists("ManagedCustomerServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ManagedCustomerPage
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

if (!class_exists("GetPendingInvitations", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the pending invitations for the customer IDs in the selector.
   * @param selector the manager customer ids (inviters) or the client customer ids (invitees)
   * @throws ApiException when there is at least one error with the request
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class GetPendingInvitations {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var PendingInvitationSelector
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

if (!class_exists("GetPendingInvitationsResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class GetPendingInvitationsResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var PendingInvitation[]
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

if (!class_exists("ManagedCustomerServiceMutate", false)) {
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
   * 
   * 
   * 
   * Modifies or creates new {@link ManagedCustomer}s.
   * 
   * <p class="note"><b>Note:</b> See {@link ManagedCustomerOperation} for available operators.</p>
   * 
   * @param operations List of unique operations.
   * @return The list of updated managed customers, returned in the same order as the
   * <code>operations</code> array.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerServiceMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ManagedCustomerOperation[]
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

if (!class_exists("ManagedCustomerServiceMutateResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerServiceMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ManagedCustomerReturnValue
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

if (!class_exists("MutateLabel", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   * 
   * 
   * 
   * Adds {@linkplain AccountLabel}s to, and removes
   * {@linkplain AccountLabel}s from, {@linkplain ManagedCustomer}s.
   * 
   * <p>To add an {@linkplain AccountLabel} to a {@linkplain ManagedCustomer},
   * use {@link Operator#ADD}.
   * To remove an {@linkplain AccountLabel} from a {@linkplain ManagedCustomer},
   * use {@link Operator#REMOVE}.</p>
   * <p>The label must already exist (see {@link AccountLabelService#mutate} for
   * how to create them) and be owned by the authenticated user.</p>
   * <p>The {@linkplain ManagedCustomer} must already exist and be managed by
   * the customer making the request (either directly or indirectly).</p>
   * <p>An AccountLabel may be applied to at most 1000 customers.</p>
   * <p>This method does not support partial failures, and will fail if any
   * operation is invalid.</p>
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class MutateLabel {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ManagedCustomerLabelOperation[]
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

if (!class_exists("MutateLabelResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class MutateLabelResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ManagedCustomerLabelReturnValue
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

if (!class_exists("MutateLink", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
   * 
   * 
   * 
   * Modifies the ManagedCustomer forest. These actions are possible (categorized by
   * Operator + Link Status):
   * 
   * <ul>
   * <li>ADD + PENDING:   manager extends invitations</li>
   * <li>SET + CANCELLED: manager rescinds invitations</li>
   * <li>SET + INACTIVE:  manager/client terminates links</li>
   * <li>SET + ACTIVE:    client accepts invitations</li>
   * <li>SET + REFUSED:   client declines invitations</li>
   * </ul>
   * 
   * In addition to these, active links can also be marked hidden / unhidden.
   * <ul>
   * <li> An ACTIVE link can be marked hidden with SET + ACTIVE along with setting the
   * isHidden bit to true. </li>
   * <li> An ACTIVE link can be marked unhidden with SET + ACTIVE along with setting the
   * isHidden bit to false. </li>
   * </ul>
   * 
   * @param operations the list of operations
   * @return results for the given operations
   * @throws ApiException with a {@link ManagedCustomerServiceError}
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class MutateLink {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var LinkOperation[]
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

if (!class_exists("MutateLinkResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class MutateLinkResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var MutateLinkResults
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

if (!class_exists("MutateManager", false)) {
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET.</span>
   * 
   * 
   * 
   * Moves client customers to new managers (moving links). Only the following action is possible:
   * 
   * <ul>
   * <li>SET + ACTIVE: manager moves client customers to new managers within the same manager
   * account hierarchy</li>
   * </ul>
   * 
   * @param operations List of unique operations.
   * @return results for the given operations
   * @throws ApiException with a {@link ManagedCustomerServiceError}
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class MutateManager {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var MoveOperation[]
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

if (!class_exists("MutateManagerResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class MutateManagerResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var MutateManagerResults
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ClientTermsError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("DateError", false)) {
  /**
   * Errors associated with invalid dates and date ranges.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class DateError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("IdError", false)) {
  /**
   * Errors associated with the ids.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class IdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class OperatorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RejectedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RequestError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class SelectorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("StringLengthError", false)) {
  /**
   * Errors associated with the length of the given string being
   * out of bounds.
   * 
   * 
   * 
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
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

if (!class_exists("ManagedCustomerService", false)) {
  /**
   * ManagedCustomerService
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
  class ManagedCustomerService extends AdWordsSoapClient {

    const SERVICE_NAME = "ManagedCustomerService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201603";
    const ENDPOINT = "https://adwords.google.com/api/adwords/mcm/v201603/ManagedCustomerService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201603/ManagedCustomerService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "DateError" => "DateError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "Predicate" => "Predicate",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SelectorError" => "SelectorError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "DatabaseError" => "DatabaseError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Selector" => "Selector",
      "Operation" => "Operation",
      "Page" => "Page",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "Predicate.Operator" => "PredicateOperator",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SelectorError.Reason" => "SelectorErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "SortOrder" => "SortOrder",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "ManagedCustomerLabel" => "ManagedCustomerLabel",
      "ManagedCustomerLabelOperation" => "ManagedCustomerLabelOperation",
      "ManagedCustomerLabelReturnValue" => "ManagedCustomerLabelReturnValue",
      "ManagedCustomerServiceError" => "ManagedCustomerServiceError",
      "PendingInvitationSelector" => "PendingInvitationSelector",
      "AccountLabel" => "AccountLabel",
      "ManagedCustomerLink" => "ManagedCustomerLink",
      "LinkOperation" => "LinkOperation",
      "MoveOperation" => "MoveOperation",
      "MutateLinkResults" => "MutateLinkResults",
      "MutateManagerResults" => "MutateManagerResults",
      "ManagedCustomer" => "ManagedCustomer",
      "ManagedCustomerOperation" => "ManagedCustomerOperation",
      "ManagedCustomerPage" => "ManagedCustomerPage",
      "ManagedCustomerReturnValue" => "ManagedCustomerReturnValue",
      "PendingInvitation" => "PendingInvitation",
      "LinkStatus" => "LinkStatus",
      "ManagedCustomerServiceError.Reason" => "ManagedCustomerServiceErrorReason",
      "get" => "ManagedCustomerServiceGet",
      "getResponse" => "ManagedCustomerServiceGetResponse",
      "getPendingInvitations" => "GetPendingInvitations",
      "getPendingInvitationsResponse" => "GetPendingInvitationsResponse",
      "mutate" => "ManagedCustomerServiceMutate",
      "mutateResponse" => "ManagedCustomerServiceMutateResponse",
      "mutateLabel" => "MutateLabel",
      "mutateLabelResponse" => "MutateLabelResponse",
      "mutateLink" => "MutateLink",
      "mutateLinkResponse" => "MutateLinkResponse",
      "mutateManager" => "MutateManager",
      "mutateManagerResponse" => "MutateManagerResponse",
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
     * Returns the list of customers that meet the selector criteria.
     * 
     * @param selector The selector specifying the {@link ManagedCustomer}s to return.
     * @return List of customers identified by the selector.
     * @throws ApiException When there is at least one error with the request.
     */
    public function get($serviceSelector) {
      $args = new ManagedCustomerServiceGet($serviceSelector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the pending invitations for the customer IDs in the selector.
     * @param selector the manager customer ids (inviters) or the client customer ids (invitees)
     * @throws ApiException when there is at least one error with the request
     */
    public function getPendingInvitations($selector) {
      $args = new GetPendingInvitations($selector);
      $result = $this->__soapCall("getPendingInvitations", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
     * 
     * 
     * 
     * Modifies or creates new {@link ManagedCustomer}s.
     * 
     * <p class="note"><b>Note:</b> See {@link ManagedCustomerOperation} for available operators.</p>
     * 
     * @param operations List of unique operations.
     * @return The list of updated managed customers, returned in the same order as the
     * <code>operations</code> array.
     */
    public function mutate($operations) {
      $args = new ManagedCustomerServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     * 
     * 
     * 
     * Adds {@linkplain AccountLabel}s to, and removes
     * {@linkplain AccountLabel}s from, {@linkplain ManagedCustomer}s.
     * 
     * <p>To add an {@linkplain AccountLabel} to a {@linkplain ManagedCustomer},
     * use {@link Operator#ADD}.
     * To remove an {@linkplain AccountLabel} from a {@linkplain ManagedCustomer},
     * use {@link Operator#REMOVE}.</p>
     * <p>The label must already exist (see {@link AccountLabelService#mutate} for
     * how to create them) and be owned by the authenticated user.</p>
     * <p>The {@linkplain ManagedCustomer} must already exist and be managed by
     * the customer making the request (either directly or indirectly).</p>
     * <p>An AccountLabel may be applied to at most 1000 customers.</p>
     * <p>This method does not support partial failures, and will fail if any
     * operation is invalid.</p>
     */
    public function mutateLabel($operations) {
      $args = new MutateLabel($operations);
      $result = $this->__soapCall("mutateLabel", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
     * 
     * 
     * 
     * Modifies the ManagedCustomer forest. These actions are possible (categorized by
     * Operator + Link Status):
     * 
     * <ul>
     * <li>ADD + PENDING:   manager extends invitations</li>
     * <li>SET + CANCELLED: manager rescinds invitations</li>
     * <li>SET + INACTIVE:  manager/client terminates links</li>
     * <li>SET + ACTIVE:    client accepts invitations</li>
     * <li>SET + REFUSED:   client declines invitations</li>
     * </ul>
     * 
     * In addition to these, active links can also be marked hidden / unhidden.
     * <ul>
     * <li> An ACTIVE link can be marked hidden with SET + ACTIVE along with setting the
     * isHidden bit to true. </li>
     * <li> An ACTIVE link can be marked unhidden with SET + ACTIVE along with setting the
     * isHidden bit to false. </li>
     * </ul>
     * 
     * @param operations the list of operations
     * @return results for the given operations
     * @throws ApiException with a {@link ManagedCustomerServiceError}
     */
    public function mutateLink($operations) {
      $args = new MutateLink($operations);
      $result = $this->__soapCall("mutateLink", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET.</span>
     * 
     * 
     * 
     * Moves client customers to new managers (moving links). Only the following action is possible:
     * 
     * <ul>
     * <li>SET + ACTIVE: manager moves client customers to new managers within the same manager
     * account hierarchy</li>
     * </ul>
     * 
     * @param operations List of unique operations.
     * @return results for the given operations
     * @throws ApiException with a {@link ManagedCustomerServiceError}
     */
    public function mutateManager($operations) {
      $args = new MutateManager($operations);
      $result = $this->__soapCall("mutateManager", array($args));
      return $result->rval;
    }
  }
}

