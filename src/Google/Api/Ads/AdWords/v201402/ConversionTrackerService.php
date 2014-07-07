<?php
/**
 * Contains all client objects for the ConversionTrackerService
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DateRange", false)) {
  /**
   * Represents a range of dates that has either an upper or a lower bound.
   * The format for the date is YYYYMMDD.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class DateRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\OrderBy", false)) {
  /**
   * Specifies how the resulting information should be sorted.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ComparableValue", false)) {
  /**
   * Comparable types for constructing ranges with.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerStats", false)) {
  /**
   * Usage stats about a single {@link ConversionTracker}.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerStats {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionTrackerStats";

    /**
     * @access public
     * @var integer
     */
    public $numConversionEvents;

    /**
     * @access public
     * @var Money
     */
    public $conversionValue;

    /**
     * @access public
     * @var string
     */
    public $mostRecentConversionDate;

    /**
     * @access public
     * @var integer
     */
    public $numConvertedClicks;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($numConversionEvents = null, $conversionValue = null, $mostRecentConversionDate = null, $numConvertedClicks = null) {
      $this->numConversionEvents = $numConversionEvents;
      $this->conversionValue = $conversionValue;
      $this->mostRecentConversionDate = $mostRecentConversionDate;
      $this->numConvertedClicks = $numConvertedClicks;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTracker", false)) {
  /**
   * An abstract Conversion base class.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTracker {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionTracker";

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
     * @var tnsConversionTrackerStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsConversionTrackerCategory
     */
    public $category;

    /**
     * @access public
     * @var ConversionTrackerStats
     */
    public $stats;

    /**
     * @access public
     * @var integer
     */
    public $viewthroughLookbackWindow;

    /**
     * @access public
     * @var boolean
     */
    public $isProductAdsChargeable;

    /**
     * @access public
     * @var integer
     */
    public $productAdsChargeableConversionWindow;

    /**
     * @access public
     * @var integer
     */
    public $ctcLookbackWindow;

    /**
     * @access public
     * @var tnsConversionDeduplicationMode
     */
    public $countingType;

    /**
     * @access public
     * @var double
     */
    public $defaultRevenueValue;

    /**
     * @access public
     * @var boolean
     */
    public $alwaysUseDefaultRevenueValue;

    /**
     * @access public
     * @var string
     */
    public $ConversionTrackerType;
    private $_parameterMap = array(
      "ConversionTracker.Type" => "ConversionTrackerType",
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

    public function __construct($id = null, $name = null, $status = null, $category = null, $stats = null, $viewthroughLookbackWindow = null, $isProductAdsChargeable = null, $productAdsChargeableConversionWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $alwaysUseDefaultRevenueValue = null, $ConversionTrackerType = null) {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->category = $category;
      $this->stats = $stats;
      $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
      $this->isProductAdsChargeable = $isProductAdsChargeable;
      $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
      $this->ctcLookbackWindow = $ctcLookbackWindow;
      $this->countingType = $countingType;
      $this->defaultRevenueValue = $defaultRevenueValue;
      $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
      $this->ConversionTrackerType = $ConversionTrackerType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ListReturnValue", false)) {
  /**
   * Base list return value type.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Operation", false)) {
  /**
   * This represents an operation that includes an operator and an operand
   * specified type.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Page", false)) {
  /**
   * Contains the results from a get call.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Selector", false)) {
  /**
   * A generic selector to specify the type of information to return.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AdWordsConversionTrackerMarkupLanguage", false)) {
  /**
   * Controls the markup language in which the snippet will be written.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AdWordsConversionTrackerMarkupLanguage {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AdWordsConversionTracker.MarkupLanguage";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AdWordsConversionTrackerTextFormat", false)) {
  /**
   * Text format to display on the conversion page.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AdWordsConversionTrackerTextFormat {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AdWordsConversionTracker.TextFormat";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AdWordsConversionTrackerTrackingCodeType", false)) {
  /**
   * Type of snippet code to generate.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AdWordsConversionTrackerTrackingCodeType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AdWordsConversionTracker.TrackingCodeType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AppConversionAppConversionType", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AppConversionAppConversionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AppConversion.AppConversionType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AppConversionAppPlatform", false)) {
  /**
   * App platform for the AppConversionTracker.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AppConversionAppPlatform {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AppConversion.AppPlatform";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionDeduplicationMode", false)) {
  /**
   * Conversion deduplication mode for Conversion Optimizer. That is, whether to
   * optimize for number of clicks that get at least one conversion, or total number
   * of conversions per click.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionDeduplicationMode {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionDeduplicationMode";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerCategory", false)) {
  /**
   * The category of conversion tracker that is being tracked.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerCategory {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionTracker.Category";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerStatus", false)) {
  /**
   * Status of the conversion tracker. The user cannot ADD or SET the
   * status to {@code HIDDEN}.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionTracker.Status";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackingErrorReason", false)) {
  /**
   * Enumerates all the possible reasons for a ConversionTypeError.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackingErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionTrackingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\OperationAccessDeniedReason", false)) {
  /**
   * The reasons for the operation access error.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Operator", false)) {
  /**
   * This represents an operator that may be presented to an adsapi service.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of the conversion trackers that match the selector. The
   * actual objects contained in the page's list of entries will be specific
   * subclasses of the abstract {@link ConversionTracker} class.
   * 
   * @param serviceSelector The selector specifying the
   * {@link ConversionTracker}s to return.
   * @return List of conversion trackers specified by the selector.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while retrieving results.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ConversionTrackerPage
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerServiceMutate", false)) {
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   * 
   * 
   * 
   * Applies the list of mutate operations such as adding or updating conversion trackers.
   * <p class="note"><b>Note:</b> {@link ConversionTrackerOperation} does not support the
   * <code>REMOVE</code> operator. In order to 'disable' a conversion type, send a
   * <code>SET</code> operation for the conversion tracker with the <code>status</code>
   * property set to <code>DISABLED</code></p>
   * 
   * @param operations A list of mutate operations to perform.
   * @return The list of the conversion trackers as they appear after mutation,
   * in the same order as they appeared in the list of operations.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while updating the data.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerServiceMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ConversionTrackerOperation[]
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerServiceMutateResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerServiceMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ConversionTrackerReturnValue
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AdCallMetricsConversion", false)) {
  /**
   * A ConversionTracker for phone calls from conversion-tracked call extensions.
   * A call made from the call extension is reported as a conversion if it lasts longer
   * than N seconds. This duration is 60 seconds by default. Each call extension can
   * specify the desired conversion configuration.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AdCallMetricsConversion extends ConversionTracker {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AdCallMetricsConversion";

    /**
     * @access public
     * @var integer
     */
    public $phoneCallDuration;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($phoneCallDuration = null, $id = null, $name = null, $status = null, $category = null, $stats = null, $viewthroughLookbackWindow = null, $isProductAdsChargeable = null, $productAdsChargeableConversionWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $alwaysUseDefaultRevenueValue = null, $ConversionTrackerType = null) {
      parent::__construct();
      $this->phoneCallDuration = $phoneCallDuration;
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->category = $category;
      $this->stats = $stats;
      $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
      $this->isProductAdsChargeable = $isProductAdsChargeable;
      $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
      $this->ctcLookbackWindow = $ctcLookbackWindow;
      $this->countingType = $countingType;
      $this->defaultRevenueValue = $defaultRevenueValue;
      $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
      $this->ConversionTrackerType = $ConversionTrackerType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AdWordsConversionTracker", false)) {
  /**
   * A conversion tracker created through AdWords Conversion Tracking.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AdWordsConversionTracker extends ConversionTracker {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AdWordsConversionTracker";

    /**
     * @access public
     * @var string
     */
    public $snippet;

    /**
     * @access public
     * @var tnsAdWordsConversionTrackerMarkupLanguage
     */
    public $markupLanguage;

    /**
     * @access public
     * @var tnsAdWordsConversionTrackerTextFormat
     */
    public $textFormat;

    /**
     * @access public
     * @var string
     */
    public $conversionPageLanguage;

    /**
     * @access public
     * @var string
     */
    public $backgroundColor;

    /**
     * @access public
     * @var tnsAdWordsConversionTrackerTrackingCodeType
     */
    public $trackingCodeType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($snippet = null, $markupLanguage = null, $textFormat = null, $conversionPageLanguage = null, $backgroundColor = null, $trackingCodeType = null, $id = null, $name = null, $status = null, $category = null, $stats = null, $viewthroughLookbackWindow = null, $isProductAdsChargeable = null, $productAdsChargeableConversionWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $alwaysUseDefaultRevenueValue = null, $ConversionTrackerType = null) {
      parent::__construct();
      $this->snippet = $snippet;
      $this->markupLanguage = $markupLanguage;
      $this->textFormat = $textFormat;
      $this->conversionPageLanguage = $conversionPageLanguage;
      $this->backgroundColor = $backgroundColor;
      $this->trackingCodeType = $trackingCodeType;
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->category = $category;
      $this->stats = $stats;
      $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
      $this->isProductAdsChargeable = $isProductAdsChargeable;
      $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
      $this->ctcLookbackWindow = $ctcLookbackWindow;
      $this->countingType = $countingType;
      $this->defaultRevenueValue = $defaultRevenueValue;
      $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
      $this->ConversionTrackerType = $ConversionTrackerType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AppConversion", false)) {
  /**
   * A ConversionTracker for mobile apps.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class AppConversion extends ConversionTracker {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AppConversion";

    /**
     * @access public
     * @var string
     */
    public $appId;

    /**
     * @access public
     * @var tnsAppConversionAppPlatform
     */
    public $appPlatform;

    /**
     * @access public
     * @var string
     */
    public $snippet;

    /**
     * @access public
     * @var tnsAppConversionAppConversionType
     */
    public $appConversionType;

    /**
     * @access public
     * @var string
     */
    public $appPostbackUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($appId = null, $appPlatform = null, $snippet = null, $appConversionType = null, $appPostbackUrl = null, $id = null, $name = null, $status = null, $category = null, $stats = null, $viewthroughLookbackWindow = null, $isProductAdsChargeable = null, $productAdsChargeableConversionWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $alwaysUseDefaultRevenueValue = null, $ConversionTrackerType = null) {
      parent::__construct();
      $this->appId = $appId;
      $this->appPlatform = $appPlatform;
      $this->snippet = $snippet;
      $this->appConversionType = $appConversionType;
      $this->appPostbackUrl = $appPostbackUrl;
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->category = $category;
      $this->stats = $stats;
      $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
      $this->isProductAdsChargeable = $isProductAdsChargeable;
      $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
      $this->ctcLookbackWindow = $ctcLookbackWindow;
      $this->countingType = $countingType;
      $this->defaultRevenueValue = $defaultRevenueValue;
      $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
      $this->ConversionTrackerType = $ConversionTrackerType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackingError", false)) {
  /**
   * An error that can occur during calls to the ConversionTypeService.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackingError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionTrackingError";

    /**
     * @access public
     * @var tnsConversionTrackingErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\Money", false)) {
  /**
   * Represents a money amount.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class Money extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\NumberValue", false)) {
  /**
   * Number value types for constructing number valued ranges.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class NumberValue extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\OperationAccessDenied", false)) {
  /**
   * Operation not permitted due to the invoked service's access policy.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\OperatorError", false)) {
  /**
   * Errors due to the use of unsupported operations.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\UploadConversion", false)) {
  /**
   * A conversion type that receives conversions by having them uploaded
   * through the OfflineConversionFeedService.
   * 
   * After successfully creating a new UploadConversion, send the name of this conversion type
   * along with your conversion details to the OfflineConversionFeedService
   * to attribute those conversions to this conversion type.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class UploadConversion extends ConversionTracker {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "UploadConversion";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $status = null, $category = null, $stats = null, $viewthroughLookbackWindow = null, $isProductAdsChargeable = null, $productAdsChargeableConversionWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $alwaysUseDefaultRevenueValue = null, $ConversionTrackerType = null) {
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->category = $category;
      $this->stats = $stats;
      $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
      $this->isProductAdsChargeable = $isProductAdsChargeable;
      $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
      $this->ctcLookbackWindow = $ctcLookbackWindow;
      $this->countingType = $countingType;
      $this->defaultRevenueValue = $defaultRevenueValue;
      $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
      $this->ConversionTrackerType = $ConversionTrackerType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerOperation", false)) {
  /**
   * Operations for conversion tracker.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionTrackerOperation";

    /**
     * @access public
     * @var ConversionTracker
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerReturnValue", false)) {
  /**
   * A container for return values from the ConversionTrackerService.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerReturnValue extends ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionTrackerReturnValue";

    /**
     * @access public
     * @var ConversionTracker[]
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

    public function __construct($value = null, $ListReturnValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ListReturnValueType = $ListReturnValueType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\NoStatsPage", false)) {
  /**
   * Base class for Get results for a page of entities that do not use statistics.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class NoStatsPage extends Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\DoubleValue", false)) {
  /**
   * Number value type for constructing double valued ranges.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class DoubleValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\LongValue", false)) {
  /**
   * Number value type for constructing long valued ranges.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class LongValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
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

if (!class_exists("Google_Api_Ads_AdWords_v201402\\ConversionTrackerPage", false)) {
  /**
   * Contains a subset of {@link ConversionTracker}s resulting from the filtering
   * and paging of the {@link ConversionTrackerService#get} call.
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerPage extends NoStatsPage {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConversionTrackerPage";

    /**
     * @access public
     * @var ConversionTracker[]
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

if (!class_exists("ConversionTrackerService", false)) {
  /**
   * ConversionTrackerService
   * @package Google_Api_Ads_AdWords_v201402
   * @subpackage v201402
   */
  class ConversionTrackerService extends Google_Api_Ads_AdWords_v201402\Google_Api_Ads_AdWords_Lib_AdWordsSoapClient {

    const SERVICE_NAME = "ConversionTrackerService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/ConversionTrackerService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/ConversionTrackerService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdCallMetricsConversion" => "Google_Api_Ads_AdWords_v201402\\AdCallMetricsConversion",
      "AdWordsConversionTracker" => "Google_Api_Ads_AdWords_v201402\\AdWordsConversionTracker",
      "AppConversion" => "Google_Api_Ads_AdWords_v201402\\AppConversion",
      "AuthenticationError" => "Google_Api_Ads_AdWords_v201402\\AuthenticationError",
      "AuthorizationError" => "Google_Api_Ads_AdWords_v201402\\AuthorizationError",
      "ClientTermsError" => "Google_Api_Ads_AdWords_v201402\\ClientTermsError",
      "ConversionTrackingError" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackingError",
      "DateError" => "Google_Api_Ads_AdWords_v201402\\DateError",
      "DateRange" => "Google_Api_Ads_AdWords_v201402\\DateRange",
      "DistinctError" => "Google_Api_Ads_AdWords_v201402\\DistinctError",
      "DoubleValue" => "Google_Api_Ads_AdWords_v201402\\DoubleValue",
      "IdError" => "Google_Api_Ads_AdWords_v201402\\IdError",
      "InternalApiError" => "Google_Api_Ads_AdWords_v201402\\InternalApiError",
      "LongValue" => "Google_Api_Ads_AdWords_v201402\\LongValue",
      "Money" => "Google_Api_Ads_AdWords_v201402\\Money",
      "NotEmptyError" => "Google_Api_Ads_AdWords_v201402\\NotEmptyError",
      "NumberValue" => "Google_Api_Ads_AdWords_v201402\\NumberValue",
      "OperationAccessDenied" => "Google_Api_Ads_AdWords_v201402\\OperationAccessDenied",
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
      "UploadConversion" => "Google_Api_Ads_AdWords_v201402\\UploadConversion",
      "ComparableValue" => "Google_Api_Ads_AdWords_v201402\\ComparableValue",
      "ConversionTrackerStats" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerStats",
      "ConversionTracker" => "Google_Api_Ads_AdWords_v201402\\ConversionTracker",
      "ConversionTrackerOperation" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerOperation",
      "ConversionTrackerReturnValue" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerReturnValue",
      "DatabaseError" => "Google_Api_Ads_AdWords_v201402\\DatabaseError",
      "ListReturnValue" => "Google_Api_Ads_AdWords_v201402\\ListReturnValue",
      "Operation" => "Google_Api_Ads_AdWords_v201402\\Operation",
      "ApiError" => "Google_Api_Ads_AdWords_v201402\\ApiError",
      "ApiException" => "Google_Api_Ads_AdWords_v201402\\ApiException",
      "ApplicationException" => "Google_Api_Ads_AdWords_v201402\\ApplicationException",
      "ConversionTrackerPage" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerPage",
      "NoStatsPage" => "Google_Api_Ads_AdWords_v201402\\NoStatsPage",
      "Page" => "Google_Api_Ads_AdWords_v201402\\Page",
      "Selector" => "Google_Api_Ads_AdWords_v201402\\Selector",
      "AdWordsConversionTracker.MarkupLanguage" => "Google_Api_Ads_AdWords_v201402\\AdWordsConversionTrackerMarkupLanguage",
      "AdWordsConversionTracker.TextFormat" => "Google_Api_Ads_AdWords_v201402\\AdWordsConversionTrackerTextFormat",
      "AdWordsConversionTracker.TrackingCodeType" => "Google_Api_Ads_AdWords_v201402\\AdWordsConversionTrackerTrackingCodeType",
      "AppConversion.AppConversionType" => "Google_Api_Ads_AdWords_v201402\\AppConversionAppConversionType",
      "AppConversion.AppPlatform" => "Google_Api_Ads_AdWords_v201402\\AppConversionAppPlatform",
      "AuthenticationError.Reason" => "Google_Api_Ads_AdWords_v201402\\AuthenticationErrorReason",
      "AuthorizationError.Reason" => "Google_Api_Ads_AdWords_v201402\\AuthorizationErrorReason",
      "ClientTermsError.Reason" => "Google_Api_Ads_AdWords_v201402\\ClientTermsErrorReason",
      "ConversionDeduplicationMode" => "Google_Api_Ads_AdWords_v201402\\ConversionDeduplicationMode",
      "ConversionTracker.Category" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerCategory",
      "ConversionTracker.Status" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerStatus",
      "ConversionTrackingError.Reason" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackingErrorReason",
      "DatabaseError.Reason" => "Google_Api_Ads_AdWords_v201402\\DatabaseErrorReason",
      "DateError.Reason" => "Google_Api_Ads_AdWords_v201402\\DateErrorReason",
      "DistinctError.Reason" => "Google_Api_Ads_AdWords_v201402\\DistinctErrorReason",
      "IdError.Reason" => "Google_Api_Ads_AdWords_v201402\\IdErrorReason",
      "InternalApiError.Reason" => "Google_Api_Ads_AdWords_v201402\\InternalApiErrorReason",
      "NotEmptyError.Reason" => "Google_Api_Ads_AdWords_v201402\\NotEmptyErrorReason",
      "OperationAccessDenied.Reason" => "Google_Api_Ads_AdWords_v201402\\OperationAccessDeniedReason",
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
      "get" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerServiceGet",
      "getResponse" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerServiceGetResponse",
      "mutate" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerServiceMutate",
      "mutateResponse" => "Google_Api_Ads_AdWords_v201402\\ConversionTrackerServiceMutateResponse",
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
     * Returns a list of the conversion trackers that match the selector. The
     * actual objects contained in the page's list of entries will be specific
     * subclasses of the abstract {@link ConversionTracker} class.
     * 
     * @param serviceSelector The selector specifying the
     * {@link ConversionTracker}s to return.
     * @return List of conversion trackers specified by the selector.
     * @throws com.google.ads.api.services.common.error.ApiException if problems
     * occurred while retrieving results.
     */
    public function get($serviceSelector) {
      $args = new ConversionTrackerServiceGet($serviceSelector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     * 
     * 
     * 
     * Applies the list of mutate operations such as adding or updating conversion trackers.
     * <p class="note"><b>Note:</b> {@link ConversionTrackerOperation} does not support the
     * <code>REMOVE</code> operator. In order to 'disable' a conversion type, send a
     * <code>SET</code> operation for the conversion tracker with the <code>status</code>
     * property set to <code>DISABLED</code></p>
     * 
     * @param operations A list of mutate operations to perform.
     * @return The list of the conversion trackers as they appear after mutation,
     * in the same order as they appeared in the list of operations.
     * @throws com.google.ads.api.services.common.error.ApiException if problems
     * occurred while updating the data.
     */
    public function mutate($operations) {
      $args = new ConversionTrackerServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));
      return $result->rval;
    }
  }
}

