<?php
/**
 * Contains all client objects for the ExpressBusinessService
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
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
namespace Google_Api_Ads_AdWords_v201402;

require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Address", false)) {
  /**
   * Structure to specify an address location.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class Address {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Date", false)) {
  /**
   * Represents a date.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class Date {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "Date";

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
    public $day;

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

    public function __construct($year = null, $month = null, $day = null) {
      $this->year = $year;
      $this->month = $month;
      $this->day = $day;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DateRange", false)) {
  /**
   * Represents a range of dates that has either an upper or a lower bound.
   * The format for the date is YYYYMMDD.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class DateRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "DateRange";

    /**
     * @access public
     * @var Date
     */
    public $min;

    /**
     * @access public
     * @var Date
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\GeoPoint", false)) {
  /**
   * Specifies a geo location with the supplied latitude/longitude.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class GeoPoint {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\OrderBy", false)) {
  /**
   * Specifies how the resulting information should be sorted.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class OrderBy {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Paging", false)) {
  /**
   * Specifies the page of results to return in the response. A page is specified
   * by the result position to start at and the maximum number of results to
   * return.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class Paging {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Predicate", false)) {
  /**
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class Predicate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\SoapResponseHeader", false)) {
  /**
   * Defines the elements within the header of a SOAP response.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Selector", false)) {
  /**
   * A generic selector to specify the type of information to return.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class Selector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Operation", false)) {
  /**
   * This represents an operation that includes an operator and an operand
   * specified type.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Page", false)) {
  /**
   * Contains the results from a get call.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AuthorizationErrorReason", false)) {
  /**
   * The reasons for the database error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ClientTermsErrorReason", false)) {
  /**
   * Enums for the various reasons an error can be thrown as a result of
   * ClientTerms violation.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ClientTermsErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DateErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class DateErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DistinctErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\IdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class IdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\NotEmptyErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Operator", false)) {
  /**
   * This represents an operator that may be presented to an adsapi service.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class Operator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\OperatorErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class OperatorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\PredicateOperator", false)) {
  /**
   * Defines the valid set of operators.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class PredicateOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\QuotaCheckErrorReason", false)) {
  /**
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RangeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RateExceededErrorReason", false)) {
  /**
   * The reason for the rate exceeded error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ReadOnlyErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RejectedErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RejectedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RequestErrorReason", false)) {
  /**
   * Error reason is unknown.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RequestErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\SelectorErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class SelectorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\SizeLimitErrorReason", false)) {
  /**
   * The reasons for Ad Scheduling errors.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\SortOrder", false)) {
  /**
   * Possible orders of sorting.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class SortOrder {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\StringLengthErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusinessError", false)) {
  /**
   * Express business related errors.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "ExpressBusinessError";

    /**
     * @access public
     * @var tnsExpressBusinessErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\PhoneNumber", false)) {
  /**
   * Phone number which contains the phone number string plus the region that the number is to be
   * from.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class PhoneNumber {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "PhoneNumber";

    /**
     * @access public
     * @var tnsRegionCode
     */
    public $regionCode;

    /**
     * @access public
     * @var string
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

    public function __construct($regionCode = null, $number = null) {
      $this->regionCode = $regionCode;
      $this->number = $number;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusiness", false)) {
  /**
   * Information about an AdWords Express business.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusiness {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "ExpressBusiness";

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
     * @var tnsExpressBusinessStatus
     */
    public $status;

    /**
     * @access public
     * @var Address
     */
    public $address;

    /**
     * @access public
     * @var GeoPoint
     */
    public $geoPoint;

    /**
     * @access public
     * @var PhoneNumber
     */
    public $phoneNumber;

    /**
     * @access public
     * @var string
     */
    public $website;

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

    public function __construct($id = null, $name = null, $status = null, $address = null, $geoPoint = null, $phoneNumber = null, $website = null) {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->address = $address;
      $this->geoPoint = $geoPoint;
      $this->phoneNumber = $phoneNumber;
      $this->website = $website;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusinessOperation", false)) {
  /**
   * A typed {@link Operation} class that uses an instance of {@link ExpressBusiness} as its operand.
   * 
   * <p class="note"><b>Note:</b> The <code>REMOVE</code> operator is not
   * supported. To remove an {@link ExpressBusiness}, set its {@link ExpressBusiness#status status}
   * to <code>DELETED</code>.</p>
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "ExpressBusinessOperation";

    /**
     * @access public
     * @var ExpressBusiness
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\NoStatsPage", false)) {
  /**
   * Base class for Get results for a page of entities that do not use statistics.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class NoStatsPage extends Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "NoStatsPage";

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
      parent::__construct();
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusinessStatus", false)) {
  /**
   * Possible statusus of this business.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "ExpressBusiness.Status";

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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusinessErrorReason", false)) {
  /**
   * Reason behind the {@code BusinessError}.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "ExpressBusinessError.Reason";

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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RegionCode", false)) {
  /**
   * A region (country, territory, continent, etc), as defined by Unicode's
   * "CLDR", itself based on ISO 3166 (UN country codes).
   * 
   * <p>See:
   * 
   * http://unicode.org/cldr/charts/supplemental/territory_containment_un_m_49.html
   * 
   * <p>It contains no behavior, but is the authoritative definition of Region
   * <em>identity</em> in java Google code.
   * 
   * <p>Do:
   * <ul>
   * <li>use it everywhere you need to compare regions</li>
   * <li>use it in all APIs that take/return a region (such as a country),
   * particularly all public APIs</li>
   * <li>get the instance corresponding to an CLDR code using {@link #forString}
   * </li>
   * <li>get the String CLDR code with {@link #toString}</li>
   * <li>use the String CLDR code in your DB as a key to currencies</li>
   * <li>if your API supports only a subset of these codes, make sure to
   * validate (e.g. by creating an EnumSet and using Precondition)
   * <li>put your project-specific region-related information in a class under
   * your project root, using an EnumMap or BiMap to map these Regions to your
   * objects.
   * </li>
   * </ul>
   * 
   * Do <em>not</em>:
   * <ul>
   * <li>depend on the ordinal of a region, for example using {@link #ordinal()}
   * or depending on the index of a particular region in the {@link #values}
   * array.
   * <li>depend on the comparison order of regions, via
   * {@link Enum#compareTo(Enum)}), or via the iteration order of an
   * EnumSet, etc.
   * <li>use {@link #valueOf} or {@link #name()}. The CLDR numeric codes aren't
   * valid for java, so they were prepended by "UN" (as in "UN001" for the
   * CLDR code "001").
   * <li>assume that these are the same as the two-letter ISO codes. Oftentimes
   * they will be, but CLDR guarantees stability, so ISO codes that change
   * will be different from the entries in this enum.
   * </ul>
   * 
   * This enum does not:
   * <ul>
   * <li>have i18n features</li>
   * <li>have application-specific data</li>
   * </ul>
   * 
   * These concerns will be addressed by other classes, some in
   * application-specific packages, others in common.base.i18n. The latter ones
   * will be listed with "see" tags in this class.
   * This class does not supply methods for getting information about regions.
   * For those methods, see {@link RegionInfo}.
   * 
   * <p>Note that not all regions have a "two-letter" country code. Instead, some
   * have a three digit number -- the UN M.49 (United Nations) area code.
   * These are the enum items prepended with "UN". See:
   * 
   * <ul>
   * <li>http://unstats.un.org/unsd/methods/m49/m49alpha.htm
   * <li>http://unstats.un.org/unsd/methods/m49/m49.htm
   * </ul>
   * 
   * <p>Also note that CLDR -- contrary to ISO -- <em>guarantees</em> non-reuse of
   * country codes. Thus, though most times CLDR codes are the same as the ISO
   * codes, sometimes they are not.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RegionCode {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "RegionCode";

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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusinessServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Retrieves the Express businesses that meet the criteria set in the given selector.
   * 
   * @param selector the selector specifying the AdWords Express businesses to return
   * @return list of AdWords Express businesses identified by the selector
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusinessServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ExpressBusinessPage
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusinessServiceMutate", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   * 
   * 
   * 
   * Performs the given {@link ExpressBusinessOperation}.
   * 
   * @param operations list of unique operations; the same AdWords Express business cannot be
   * specified in more than one operation
   * @return the updated AdWords Express businesses
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessServiceMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ExpressBusinessOperation[]
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusinessServiceMutateResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessServiceMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ExpressBusiness[]
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AuthorizationError", false)) {
  /**
   * Errors encountered when trying to authorize a user.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ClientTermsError", false)) {
  /**
   * Error due to user not accepting the AdWords terms of service.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ClientTermsError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DateError", false)) {
  /**
   * Errors associated with invalid dates and date ranges.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class DateError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DistinctError", false)) {
  /**
   * Errors related to distinct ids or content.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\IdError", false)) {
  /**
   * Errors associated with the ids.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class IdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\OperatorError", false)) {
  /**
   * Errors due to the use of unsupported operations.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class OperatorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RateExceededError", false)) {
  /**
   * Signals that a call failed because a measured rate exceeded.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ReadOnlyError", false)) {
  /**
   * Errors from attempting to write to read-only fields.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RejectedError", false)) {
  /**
   * Indicates that a field was rejected due to compatibility issues.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RejectedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RequestError", false)) {
  /**
   * Encapsulates the generic errors thrown when there's an error with user
   * request.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RequestError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\SelectorError", false)) {
  /**
   * Represents possible error codes for {@link Selector}.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class SelectorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\SizeLimitError", false)) {
  /**
   * Indicates that the number of entries in the request or response exceeds the system limit.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\StringLengthError", false)) {
  /**
   * Errors associated with the length of the given string being
   * out of bounds.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * 
   * 
   * 
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ExpressBusinessPage", false)) {
  /**
   * Contains a page of {@link ExpressBusiness}es with no stats.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessPage extends NoStatsPage {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const XSI_TYPE = "ExpressBusinessPage";

    /**
     * @access public
     * @var ExpressBusiness[]
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

    public function __construct($entries = null) {
      parent::__construct();
      $this->entries = $entries;
    }

  }
}

if (!class_exists("ExpressBusinessService", false)) {
  /**
   * ExpressBusinessService
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ExpressBusinessService extends Google_Api_Ads_AdWords_v201402\Google_Api_Ads_AdWords_Lib_AdWordsSoapClient {

    const SERVICE_NAME = "ExpressBusinessService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/express/v201402/ExpressBusinessService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/express/v201402/ExpressBusinessService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "Address" => "Google_Api_Ads_AdWords_v201402\\Address",
      "AuthenticationError" => "Google_Api_Ads_AdWords_v201402\\AuthenticationError",
      "AuthorizationError" => "Google_Api_Ads_AdWords_v201402\\AuthorizationError",
      "ClientTermsError" => "Google_Api_Ads_AdWords_v201402\\ClientTermsError",
      "Date" => "Google_Api_Ads_AdWords_v201402\\Date",
      "DateError" => "Google_Api_Ads_AdWords_v201402\\DateError",
      "DateRange" => "Google_Api_Ads_AdWords_v201402\\DateRange",
      "DistinctError" => "Google_Api_Ads_AdWords_v201402\\DistinctError",
      "GeoPoint" => "Google_Api_Ads_AdWords_v201402\\GeoPoint",
      "IdError" => "Google_Api_Ads_AdWords_v201402\\IdError",
      "InternalApiError" => "Google_Api_Ads_AdWords_v201402\\InternalApiError",
      "NotEmptyError" => "Google_Api_Ads_AdWords_v201402\\NotEmptyError",
      "NullError" => "Google_Api_Ads_AdWords_v201402\\NullError",
      "OperatorError" => "Google_Api_Ads_AdWords_v201402\\OperatorError",
      "OrderBy" => "Google_Api_Ads_AdWords_v201402\\OrderBy",
      "Paging" => "Google_Api_Ads_AdWords_v201402\\Paging",
      "Predicate" => "Google_Api_Ads_AdWords_v201402\\Predicate",
      "QuotaCheckError" => "Google_Api_Ads_AdWords_v201402\\QuotaCheckError",
      "RangeError" => "Google_Api_Ads_AdWords_v201402\\RangeError",
      "RateExceededError" => "Google_Api_Ads_AdWords_v201402\\RateExceededError",
      "ReadOnlyError" => "Google_Api_Ads_AdWords_v201402\\ReadOnlyError",
      "RejectedError" => "Google_Api_Ads_AdWords_v201402\\RejectedError",
      "RequestError" => "Google_Api_Ads_AdWords_v201402\\RequestError",
      "RequiredError" => "Google_Api_Ads_AdWords_v201402\\RequiredError",
      "SelectorError" => "Google_Api_Ads_AdWords_v201402\\SelectorError",
      "SizeLimitError" => "Google_Api_Ads_AdWords_v201402\\SizeLimitError",
      "SoapHeader" => "Google_Api_Ads_AdWords_v201402\\SoapRequestHeader",
      "SoapResponseHeader" => "Google_Api_Ads_AdWords_v201402\\SoapResponseHeader",
      "StringLengthError" => "Google_Api_Ads_AdWords_v201402\\StringLengthError",
      "DatabaseError" => "Google_Api_Ads_AdWords_v201402\\DatabaseError",
      "ApiError" => "Google_Api_Ads_AdWords_v201402\\ApiError",
      "ApiException" => "Google_Api_Ads_AdWords_v201402\\ApiException",
      "ApplicationException" => "Google_Api_Ads_AdWords_v201402\\ApplicationException",
      "Selector" => "Google_Api_Ads_AdWords_v201402\\Selector",
      "Operation" => "Google_Api_Ads_AdWords_v201402\\Operation",
      "Page" => "Google_Api_Ads_AdWords_v201402\\Page",
      "AuthenticationError.Reason" => "Google_Api_Ads_AdWords_v201402\\AuthenticationErrorReason",
      "AuthorizationError.Reason" => "Google_Api_Ads_AdWords_v201402\\AuthorizationErrorReason",
      "ClientTermsError.Reason" => "Google_Api_Ads_AdWords_v201402\\ClientTermsErrorReason",
      "DatabaseError.Reason" => "Google_Api_Ads_AdWords_v201402\\DatabaseErrorReason",
      "DateError.Reason" => "Google_Api_Ads_AdWords_v201402\\DateErrorReason",
      "DistinctError.Reason" => "Google_Api_Ads_AdWords_v201402\\DistinctErrorReason",
      "IdError.Reason" => "Google_Api_Ads_AdWords_v201402\\IdErrorReason",
      "InternalApiError.Reason" => "Google_Api_Ads_AdWords_v201402\\InternalApiErrorReason",
      "NotEmptyError.Reason" => "Google_Api_Ads_AdWords_v201402\\NotEmptyErrorReason",
      "NullError.Reason" => "Google_Api_Ads_AdWords_v201402\\NullErrorReason",
      "Operator" => "Google_Api_Ads_AdWords_v201402\\Operator",
      "OperatorError.Reason" => "Google_Api_Ads_AdWords_v201402\\OperatorErrorReason",
      "Predicate.Operator" => "Google_Api_Ads_AdWords_v201402\\PredicateOperator",
      "QuotaCheckError.Reason" => "Google_Api_Ads_AdWords_v201402\\QuotaCheckErrorReason",
      "RangeError.Reason" => "Google_Api_Ads_AdWords_v201402\\RangeErrorReason",
      "RateExceededError.Reason" => "Google_Api_Ads_AdWords_v201402\\RateExceededErrorReason",
      "ReadOnlyError.Reason" => "Google_Api_Ads_AdWords_v201402\\ReadOnlyErrorReason",
      "RejectedError.Reason" => "Google_Api_Ads_AdWords_v201402\\RejectedErrorReason",
      "RequestError.Reason" => "Google_Api_Ads_AdWords_v201402\\RequestErrorReason",
      "RequiredError.Reason" => "Google_Api_Ads_AdWords_v201402\\RequiredErrorReason",
      "SelectorError.Reason" => "Google_Api_Ads_AdWords_v201402\\SelectorErrorReason",
      "SizeLimitError.Reason" => "Google_Api_Ads_AdWords_v201402\\SizeLimitErrorReason",
      "SortOrder" => "Google_Api_Ads_AdWords_v201402\\SortOrder",
      "StringLengthError.Reason" => "Google_Api_Ads_AdWords_v201402\\StringLengthErrorReason",
      "ExpressBusinessError" => "Google_Api_Ads_AdWords_v201402\\ExpressBusinessError",
      "PhoneNumber" => "Google_Api_Ads_AdWords_v201402\\PhoneNumber",
      "ExpressBusiness" => "Google_Api_Ads_AdWords_v201402\\ExpressBusiness",
      "ExpressBusinessOperation" => "Google_Api_Ads_AdWords_v201402\\ExpressBusinessOperation",
      "ExpressBusinessPage" => "Google_Api_Ads_AdWords_v201402\\ExpressBusinessPage",
      "NoStatsPage" => "Google_Api_Ads_AdWords_v201402\\NoStatsPage",
      "ExpressBusiness.Status" => "Google_Api_Ads_AdWords_v201402\\ExpressBusinessStatus",
      "ExpressBusinessError.Reason" => "Google_Api_Ads_AdWords_v201402\\ExpressBusinessErrorReason",
      "RegionCode" => "Google_Api_Ads_AdWords_v201402\\RegionCode",
      "get" => "Google_Api_Ads_AdWords_v201402\\ExpressBusinessServiceGet",
      "getResponse" => "Google_Api_Ads_AdWords_v201402\\ExpressBusinessServiceGetResponse",
      "mutate" => "Google_Api_Ads_AdWords_v201402\\ExpressBusinessServiceMutate",
      "mutateResponse" => "Google_Api_Ads_AdWords_v201402\\ExpressBusinessServiceMutateResponse",
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
     * Retrieves the Express businesses that meet the criteria set in the given selector.
     * 
     * @param selector the selector specifying the AdWords Express businesses to return
     * @return list of AdWords Express businesses identified by the selector
     */
    public function get($selector) {
      $args = new ExpressBusinessServiceGet($selector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     * 
     * 
     * 
     * Performs the given {@link ExpressBusinessOperation}.
     * 
     * @param operations list of unique operations; the same AdWords Express business cannot be
     * specified in more than one operation
     * @return the updated AdWords Express businesses
     */
    public function mutate($operations) {
      $args = new ExpressBusinessServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));
      return $result->rval;
    }
  }
}

