<?php
/**
 * Contains all client objects for the BudgetService
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
 * @package    Google\Api\Ads\AdWords\v201409
 * @subpackage v201409
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
namespace Google\Api\Ads\AdWords\v201409;

require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DateRange", false)) {
  /**
   * Represents a range of dates that has either an upper or a lower bound.
   * The format for the date is YYYYMMDD.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DateRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\OrderBy", false)) {
  /**
   * Specifies how the resulting information should be sorted.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class OrderBy {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Paging", false)) {
  /**
   * Specifies the page of results to return in the response. A page is specified
   * by the result position to start at and the maximum number of results to
   * return.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Paging {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Predicate", false)) {
  /**
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Predicate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

    public function __construct($clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null) {
      $this->clientCustomerId = $clientCustomerId;
      $this->developerToken = $developerToken;
      $this->userAgent = $userAgent;
      $this->validateOnly = $validateOnly;
      $this->partialFailure = $partialFailure;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SoapResponseHeader", false)) {
  /**
   * Defines the elements within the header of a SOAP response.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ComparableValue", false)) {
  /**
   * Comparable types for constructing ranges with.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

    public function __construct($ComparableValueType = null) {
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Selector", false)) {
  /**
   * A generic selector to specify the type of information to return.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Selector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Budget", false)) {
  /**
   * Budgets are used for managing the amount of money spent on AdWords.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Budget {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Budget";

    /**
     * @access public
     * @var integer
     */
    public $budgetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsBudgetBudgetPeriod
     */
    public $period;

    /**
     * @access public
     * @var Money
     */
    public $amount;

    /**
     * @access public
     * @var tnsBudgetBudgetDeliveryMethod
     */
    public $deliveryMethod;

    /**
     * @access public
     * @var integer
     */
    public $referenceCount;

    /**
     * @access public
     * @var boolean
     */
    public $isExplicitlyShared;

    /**
     * @access public
     * @var tnsBudgetBudgetStatus
     */
    public $status;

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

    public function __construct($budgetId = null, $name = null, $period = null, $amount = null, $deliveryMethod = null, $referenceCount = null, $isExplicitlyShared = null, $status = null) {
      $this->budgetId = $budgetId;
      $this->name = $name;
      $this->period = $period;
      $this->amount = $amount;
      $this->deliveryMethod = $deliveryMethod;
      $this->referenceCount = $referenceCount;
      $this->isExplicitlyShared = $isExplicitlyShared;
      $this->status = $status;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ListReturnValue", false)) {
  /**
   * Base list return value type.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Operation", false)) {
  /**
   * This represents an operation that includes an operator and an operand
   * specified type.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Page", false)) {
  /**
   * Contains the results from a get call.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationErrorReason", false)) {
  /**
   * The reasons for the database error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetBudgetDeliveryMethod", false)) {
  /**
   * Budget delivery methods.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetBudgetDeliveryMethod {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Budget.BudgetDeliveryMethod";

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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetBudgetPeriod", false)) {
  /**
   * Budget periods.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetBudgetPeriod {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Budget.BudgetPeriod";

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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetBudgetStatus", false)) {
  /**
   * 
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetBudgetStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Budget.BudgetStatus";

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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetErrorReason", false)) {
  /**
   * The reasons for the budget error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BudgetError.Reason";

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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsErrorReason", false)) {
  /**
   * Enums for the various reasons an error can be thrown as a result of
   * ClientTerms violation.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ClientTermsErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DateErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DateErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "DateError.Reason";

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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DistinctErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceededReason", false)) {
  /**
   * Limits at various levels of the account.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityCountLimitExceededReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFoundReason", false)) {
  /**
   * The specified id refered to an entity which either doesn't exist or is not accessible to the
   * customer. e.g. campaign belongs to another customer.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityNotFoundReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\IdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class IdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationErrorReason", false)) {
  /**
   * Do not set the id field while creating new entities.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NewEntityCreationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDeniedReason", false)) {
  /**
   * The reasons for the operation access error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Operator", false)) {
  /**
   * This represents an operator that may be presented to an adsapi service.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Operator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PredicateOperator", false)) {
  /**
   * Defines the valid set of operators.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PredicateOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QueryErrorReason", false)) {
  /**
   * The reason for the query error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QueryErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckErrorReason", false)) {
  /**
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RangeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RateExceededErrorReason", false)) {
  /**
   * The reason for the rate exceeded error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RejectedErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RejectedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "RejectedError.Reason";

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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RequestErrorReason", false)) {
  /**
   * Error reason is unknown.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RequestErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SelectorErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SelectorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitErrorReason", false)) {
  /**
   * The reasons for Ad Scheduling errors.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SortOrder", false)) {
  /**
   * Possible orders of sorting.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SortOrder {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\StringLengthErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of budgets that match the selector.
   * 
   * @return List of budgets specified by the selector.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while retrieving results.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $selector;

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

    public function __construct($selector = null) {
      $this->selector = $selector;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetServiceGetResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var BudgetPage
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetServiceMutate", false)) {
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Applies the list of mutate operations.
   * 
   * @param operations The operations to apply.
   * @return The modified list of Budgets, returned in the same order as <code>operations</code>.
   * @throws ApiException
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetServiceMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var BudgetOperation[]
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetServiceMutateResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetServiceMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var BudgetReturnValue
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Query", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of budgets that match the query.
   * 
   * @param query The SQL-like AWQL query string
   * @returns A list of Budget
   * @throws ApiException when the query is invalid or there are errors processing the request.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Query {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QueryResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QueryResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var BudgetPage
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationError", false)) {
  /**
   * Errors encountered when trying to authorize a user.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetError", false)) {
  /**
   * A list of all the error codes being used by the common budget domain package.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BudgetError";

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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsError", false)) {
  /**
   * Error due to user not accepting the AdWords terms of service.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ClientTermsError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DateError", false)) {
  /**
   * Errors associated with invalid dates and date ranges.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DateError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "DateError";

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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DistinctError", false)) {
  /**
   * Errors related to distinct ids or content.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceeded", false)) {
  /**
   * Signals that an entity count limit was exceeded for some level.
   * For example, too many criteria for a campaign.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityCountLimitExceeded extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFound", false)) {
  /**
   * An id did not correspond to an entity, or it referred to an entity which does not belong to the
   * customer.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityNotFound extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\IdError", false)) {
  /**
   * Errors associated with the ids.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class IdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Money", false)) {
  /**
   * Represents a money amount.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Money extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Money";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationError", false)) {
  /**
   * Error associated with creation of new entities.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NewEntityCreationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NumberValue", false)) {
  /**
   * Number value types for constructing number valued ranges.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NumberValue extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "NumberValue";

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

    public function __construct($ComparableValueType = null) {
      parent::__construct();
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDenied", false)) {
  /**
   * Operation not permitted due to the invoked service's access policy.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QueryError", false)) {
  /**
   * A QueryError represents possible errors for query parsing and execution.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QueryError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RateExceededError", false)) {
  /**
   * Signals that a call failed because a measured rate exceeded.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyError", false)) {
  /**
   * Errors from attempting to write to read-only fields.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RejectedError", false)) {
  /**
   * Indicates that a field was rejected due to compatibility issues.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RejectedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "RejectedError";

    /**
     * @access public
     * @var tnsRejectedErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RequestError", false)) {
  /**
   * Encapsulates the generic errors thrown when there's an error with user
   * request.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RequestError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SelectorError", false)) {
  /**
   * Represents possible error codes for {@link Selector}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SelectorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitError", false)) {
  /**
   * Indicates that the number of entries in the request or response exceeds the system limit.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\StringLengthError", false)) {
  /**
   * Errors associated with the length of the given string being
   * out of bounds.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetOperation", false)) {
  /**
   * Operations for adding/updating Budget entities.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BudgetOperation";

    /**
     * @access public
     * @var Budget
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetPage", false)) {
  /**
   * Contains a list of budgets resulting from the filtering and paging of
   * {@link BudgetService#get} call.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetPage extends Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BudgetPage";

    /**
     * @access public
     * @var Budget[]
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetReturnValue", false)) {
  /**
   * A container for return values from the {@link BudgetService#mutate} call.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetReturnValue extends ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BudgetReturnValue";

    /**
     * @access public
     * @var Budget[]
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DoubleValue", false)) {
  /**
   * Number value type for constructing double valued ranges.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DoubleValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "DoubleValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\LongValue", false)) {
  /**
   * Number value type for constructing long valued ranges.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class LongValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "LongValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
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

if (!class_exists("BudgetService", false)) {
  /**
   * BudgetService
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetService extends \Google\Api\Ads\AdWords\Lib\AdWordsSoapClient {

    const SERVICE_NAME = "BudgetService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201409/BudgetService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201409/BudgetService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationError",
      "AuthorizationError" => "Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationError",
      "BudgetError" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetError",
      "ClientTermsError" => "Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsError",
      "DateError" => "Google\\Api\\Ads\\AdWords\\v201409\\DateError",
      "DateRange" => "Google\\Api\\Ads\\AdWords\\v201409\\DateRange",
      "DistinctError" => "Google\\Api\\Ads\\AdWords\\v201409\\DistinctError",
      "DoubleValue" => "Google\\Api\\Ads\\AdWords\\v201409\\DoubleValue",
      "EntityCountLimitExceeded" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceeded",
      "EntityNotFound" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFound",
      "IdError" => "Google\\Api\\Ads\\AdWords\\v201409\\IdError",
      "InternalApiError" => "Google\\Api\\Ads\\AdWords\\v201409\\InternalApiError",
      "LongValue" => "Google\\Api\\Ads\\AdWords\\v201409\\LongValue",
      "Money" => "Google\\Api\\Ads\\AdWords\\v201409\\Money",
      "NewEntityCreationError" => "Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationError",
      "NotEmptyError" => "Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyError",
      "NullError" => "Google\\Api\\Ads\\AdWords\\v201409\\NullError",
      "NumberValue" => "Google\\Api\\Ads\\AdWords\\v201409\\NumberValue",
      "OperationAccessDenied" => "Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDenied",
      "OrderBy" => "Google\\Api\\Ads\\AdWords\\v201409\\OrderBy",
      "Paging" => "Google\\Api\\Ads\\AdWords\\v201409\\Paging",
      "Predicate" => "Google\\Api\\Ads\\AdWords\\v201409\\Predicate",
      "QueryError" => "Google\\Api\\Ads\\AdWords\\v201409\\QueryError",
      "QuotaCheckError" => "Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckError",
      "RangeError" => "Google\\Api\\Ads\\AdWords\\v201409\\RangeError",
      "RateExceededError" => "Google\\Api\\Ads\\AdWords\\v201409\\RateExceededError",
      "ReadOnlyError" => "Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyError",
      "RejectedError" => "Google\\Api\\Ads\\AdWords\\v201409\\RejectedError",
      "RequestError" => "Google\\Api\\Ads\\AdWords\\v201409\\RequestError",
      "RequiredError" => "Google\\Api\\Ads\\AdWords\\v201409\\RequiredError",
      "SelectorError" => "Google\\Api\\Ads\\AdWords\\v201409\\SelectorError",
      "SizeLimitError" => "Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitError",
      "SoapHeader" => "Google\\Api\\Ads\\AdWords\\v201409\\SoapRequestHeader",
      "SoapResponseHeader" => "Google\\Api\\Ads\\AdWords\\v201409\\SoapResponseHeader",
      "StringLengthError" => "Google\\Api\\Ads\\AdWords\\v201409\\StringLengthError",
      "ComparableValue" => "Google\\Api\\Ads\\AdWords\\v201409\\ComparableValue",
      "DatabaseError" => "Google\\Api\\Ads\\AdWords\\v201409\\DatabaseError",
      "ApiError" => "Google\\Api\\Ads\\AdWords\\v201409\\ApiError",
      "ApiException" => "Google\\Api\\Ads\\AdWords\\v201409\\ApiException",
      "ApplicationException" => "Google\\Api\\Ads\\AdWords\\v201409\\ApplicationException",
      "Selector" => "Google\\Api\\Ads\\AdWords\\v201409\\Selector",
      "Budget" => "Google\\Api\\Ads\\AdWords\\v201409\\Budget",
      "BudgetOperation" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetOperation",
      "BudgetPage" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetPage",
      "BudgetReturnValue" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetReturnValue",
      "ListReturnValue" => "Google\\Api\\Ads\\AdWords\\v201409\\ListReturnValue",
      "Operation" => "Google\\Api\\Ads\\AdWords\\v201409\\Operation",
      "Page" => "Google\\Api\\Ads\\AdWords\\v201409\\Page",
      "AuthenticationError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationErrorReason",
      "AuthorizationError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationErrorReason",
      "Budget.BudgetDeliveryMethod" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetBudgetDeliveryMethod",
      "Budget.BudgetPeriod" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetBudgetPeriod",
      "Budget.BudgetStatus" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetBudgetStatus",
      "BudgetError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetErrorReason",
      "ClientTermsError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsErrorReason",
      "DatabaseError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\DatabaseErrorReason",
      "DateError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\DateErrorReason",
      "DistinctError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFoundReason",
      "IdError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\IdErrorReason",
      "InternalApiError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\InternalApiErrorReason",
      "NewEntityCreationError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationErrorReason",
      "NotEmptyError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyErrorReason",
      "NullError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\NullErrorReason",
      "OperationAccessDenied.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDeniedReason",
      "Operator" => "Google\\Api\\Ads\\AdWords\\v201409\\Operator",
      "Predicate.Operator" => "Google\\Api\\Ads\\AdWords\\v201409\\PredicateOperator",
      "QueryError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\QueryErrorReason",
      "QuotaCheckError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckErrorReason",
      "RangeError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RangeErrorReason",
      "RateExceededError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RateExceededErrorReason",
      "ReadOnlyError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyErrorReason",
      "RejectedError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RejectedErrorReason",
      "RequestError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RequestErrorReason",
      "RequiredError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RequiredErrorReason",
      "SelectorError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\SelectorErrorReason",
      "SizeLimitError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitErrorReason",
      "SortOrder" => "Google\\Api\\Ads\\AdWords\\v201409\\SortOrder",
      "StringLengthError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\StringLengthErrorReason",
      "get" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetServiceGet",
      "getResponse" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetServiceGetResponse",
      "mutate" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetServiceMutate",
      "mutateResponse" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetServiceMutateResponse",
      "query" => "Google\\Api\\Ads\\AdWords\\v201409\\Query",
      "queryResponse" => "Google\\Api\\Ads\\AdWords\\v201409\\QueryResponse",
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
     * Returns a list of budgets that match the selector.
     * 
     * @return List of budgets specified by the selector.
     * @throws com.google.ads.api.services.common.error.ApiException if problems
     * occurred while retrieving results.
     */
    public function get($selector) {
      $args = new BudgetServiceGet($selector);
      $result = $this->__soapCall("get", array($args));
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
     * Applies the list of mutate operations.
     * 
     * @param operations The operations to apply.
     * @return The modified list of Budgets, returned in the same order as <code>operations</code>.
     * @throws ApiException
     */
    public function mutate($operations) {
      $args = new BudgetServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of budgets that match the query.
     * 
     * @param query The SQL-like AWQL query string
     * @returns A list of Budget
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query) {
      $args = new Query($query);
      $result = $this->__soapCall("query", array($args));
      return $result->rval;
    }
  }
}

