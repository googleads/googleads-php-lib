<?php
/**
 * Contains all client objects for the DataService
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

/** Required classes. **/
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("DateRange", FALSE)) {
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

}}

if (!class_exists("OrderBy", FALSE)) {
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

}}

if (!class_exists("Paging", FALSE)) {
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

}}

if (!class_exists("Predicate", FALSE)) {
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

}}

if (!class_exists("SoapRequestHeader", FALSE)) {
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

}}

if (!class_exists("SoapResponseHeader", FALSE)) {
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

}}

if (!class_exists("ComparableValue", FALSE)) {
/**
 * Comparable types for constructing ranges with.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class ComparableValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("ApiError", FALSE)) {
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

}}

if (!class_exists("ApplicationException", FALSE)) {
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

}}

if (!class_exists("BidLandscapeLandscapePoint", FALSE)) {
/**
 * A set of estimates for a criterion's performance for a specific bid
 * amount.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class BidLandscapeLandscapePoint {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "BidLandscape.LandscapePoint";

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
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($bid = null, $clicks = null, $cost = null, $marginalCpc = null, $impressions = null, $promotedImpressions = null) {
    $this->bid = $bid;
    $this->clicks = $clicks;
    $this->cost = $cost;
    $this->marginalCpc = $marginalCpc;
    $this->impressions = $impressions;
    $this->promotedImpressions = $promotedImpressions;
  }

}}

if (!class_exists("Selector", FALSE)) {
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

}}

if (!class_exists("DataEntry", FALSE)) {
/**
 * The base class of all return types of the table service.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class DataEntry {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "DataEntry";

  /**
   * @access public
   * @var string
   */
  public $DataEntryType;
  private $_parameterMap = array(
    "DataEntry.Type" => "DataEntryType",
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

  public function __construct($DataEntryType = null) {
    $this->DataEntryType = $DataEntryType;
  }

}}

if (!class_exists("Page", FALSE)) {
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

}}

if (!class_exists("AdGroupBidLandscapeType", FALSE)) {
/**
 * Used to specify the type of {@code AdGroupLandscape}
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class AdGroupBidLandscapeType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "AdGroupBidLandscape.Type";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

}}

if (!class_exists("AdxErrorReason", FALSE)) {
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

}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
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

}}

if (!class_exists("AuthorizationErrorReason", FALSE)) {
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

}}

if (!class_exists("BetaErrorReason", FALSE)) {
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

}}

if (!class_exists("ClientTermsErrorReason", FALSE)) {
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

}}

if (!class_exists("DatabaseErrorReason", FALSE)) {
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

}}

if (!class_exists("DateErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class DateErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("DistinctErrorReason", FALSE)) {
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

}}

if (!class_exists("IdErrorReason", FALSE)) {
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

}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
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

}}

if (!class_exists("NotEmptyErrorReason", FALSE)) {
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

}}

if (!class_exists("NotWhitelistedErrorReason", FALSE)) {
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

}}

if (!class_exists("NullErrorReason", FALSE)) {
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

}}

if (!class_exists("PredicateOperator", FALSE)) {
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

}}

if (!class_exists("QuotaCheckErrorReason", FALSE)) {
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

}}

if (!class_exists("RangeErrorReason", FALSE)) {
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

}}

if (!class_exists("RateExceededErrorReason", FALSE)) {
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

}}

if (!class_exists("ReadOnlyErrorReason", FALSE)) {
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

}}

if (!class_exists("RejectedErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class RejectedErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("RequestErrorReason", FALSE)) {
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

}}

if (!class_exists("RequiredErrorReason", FALSE)) {
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

}}

if (!class_exists("SelectorErrorReason", FALSE)) {
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

}}

if (!class_exists("SizeLimitErrorReason", FALSE)) {
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

}}

if (!class_exists("SortOrder", FALSE)) {
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

}}

if (!class_exists("StringLengthErrorReason", FALSE)) {
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

}}

if (!class_exists("DataErrorReason", FALSE)) {
/**
 * Reasons for error.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class DataErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "DataError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

}}

if (!class_exists("GetAdGroupBidLandscape", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of bid landscapes for the ad groups specified in the selector.
 * 
 * @param serviceSelector Selects the entities to return bid landscapes for.
 * @return A list of bid landscapes.
 * @throws ApiException when there is at least one error with the request.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class GetAdGroupBidLandscape {

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

}}

if (!class_exists("GetAdGroupBidLandscapeResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class GetAdGroupBidLandscapeResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdGroupBidLandscapePage
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

}}

if (!class_exists("GetCriterionBidLandscape", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of bid landscapes for the criteria specified in the selector.
 * 
 * @param serviceSelector Selects the entities to return bid landscapes for.
 * @return A list of bid landscapes.
 * @throws ApiException when there is at least one error with the request.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class GetCriterionBidLandscape {

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

}}

if (!class_exists("GetCriterionBidLandscapeResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class GetCriterionBidLandscapeResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var CriterionBidLandscapePage
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

}}

if (!class_exists("AdxError", FALSE)) {
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

}}

if (!class_exists("AuthenticationError", FALSE)) {
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

}}

if (!class_exists("AuthorizationError", FALSE)) {
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

}}

if (!class_exists("BetaError", FALSE)) {
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

}}

if (!class_exists("ClientTermsError", FALSE)) {
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

}}

if (!class_exists("DateError", FALSE)) {
/**
 * Errors associated with invalid dates and date ranges.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class DateError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("DistinctError", FALSE)) {
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

}}

if (!class_exists("IdError", FALSE)) {
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

}}

if (!class_exists("InternalApiError", FALSE)) {
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

}}

if (!class_exists("Money", FALSE)) {
/**
 * Represents a money amount.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class Money extends ComparableValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("NotEmptyError", FALSE)) {
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

}}

if (!class_exists("NotWhitelistedError", FALSE)) {
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

}}

if (!class_exists("NullError", FALSE)) {
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

}}

if (!class_exists("NumberValue", FALSE)) {
/**
 * Number value types for constructing number valued ranges.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class NumberValue extends ComparableValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("QuotaCheckError", FALSE)) {
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

}}

if (!class_exists("RangeError", FALSE)) {
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

}}

if (!class_exists("RateExceededError", FALSE)) {
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

}}

if (!class_exists("ReadOnlyError", FALSE)) {
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

}}

if (!class_exists("RejectedError", FALSE)) {
/**
 * Indicates that a field was rejected due to compatibility issues.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class RejectedError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("RequestError", FALSE)) {
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

}}

if (!class_exists("RequiredError", FALSE)) {
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

}}

if (!class_exists("SelectorError", FALSE)) {
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

}}

if (!class_exists("SizeLimitError", FALSE)) {
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

}}

if (!class_exists("StringLengthError", FALSE)) {
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

}}

if (!class_exists("DataError", FALSE)) {
/**
 * Represents errors thrown by the get operation.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class DataError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "DataError";

  /**
   * @access public
   * @var tnsDataErrorReason
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

}}

if (!class_exists("DatabaseError", FALSE)) {
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

}}

if (!class_exists("ApiException", FALSE)) {
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

}}

if (!class_exists("BidLandscape", FALSE)) {
/**
 * Represents data about a bid landscape for an ad group or criterion.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class BidLandscape extends DataEntry {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "BidLandscape";

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
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, $landscapePoints = null, $DataEntryType = null) {
    parent::__construct();
    $this->campaignId = $campaignId;
    $this->adGroupId = $adGroupId;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->landscapePoints = $landscapePoints;
    $this->DataEntryType = $DataEntryType;
  }

}}

if (!class_exists("NoStatsPage", FALSE)) {
/**
 * Base class for Get results for a page of entities that do not use statistics.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class NoStatsPage extends Page {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("AdGroupBidLandscape", FALSE)) {
/**
 * Represents data about a bidlandscape for an adgroup.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class AdGroupBidLandscape extends BidLandscape {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "AdGroupBidLandscape";

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
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($type = null, $landscapeCurrent = null, $campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, $landscapePoints = null) {
    parent::__construct();
    $this->type = $type;
    $this->landscapeCurrent = $landscapeCurrent;
    $this->campaignId = $campaignId;
    $this->adGroupId = $adGroupId;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->landscapePoints = $landscapePoints;
  }

}}

if (!class_exists("CriterionBidLandscape", FALSE)) {
/**
 * The bid landscape for a criterion.  A bid landscape estimates how a
 * a criterion will perform based on different bid amounts.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CriterionBidLandscape extends BidLandscape {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CriterionBidLandscape";

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
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($criterionId = null, $campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, $landscapePoints = null) {
    parent::__construct();
    $this->criterionId = $criterionId;
    $this->campaignId = $campaignId;
    $this->adGroupId = $adGroupId;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->landscapePoints = $landscapePoints;
  }

}}

if (!class_exists("DoubleValue", FALSE)) {
/**
 * Number value type for constructing double valued ranges.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class DoubleValue extends NumberValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("LongValue", FALSE)) {
/**
 * Number value type for constructing long valued ranges.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class LongValue extends NumberValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

}}

if (!class_exists("AdGroupBidLandscapePage", FALSE)) {
/**
 * Contains a subset of {@link AdGroupBidLandscape} objects resulting from the
 * filtering and paging of
 * {@link com.google.ads.api.services.campaignmgmt.data.DataService#getAdGroupBidLandscape}
 * call.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class AdGroupBidLandscapePage extends NoStatsPage {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "AdGroupBidLandscapePage";

  /**
   * @access public
   * @var AdGroupBidLandscape[]
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

}}

if (!class_exists("CriterionBidLandscapePage", FALSE)) {
/**
 * Contains a subset of {@link CriterionBidLandscapePage} objects resulting from the
 * filtering and paging of
 * {@link com.google.ads.api.services.campaignmgmt.data.DataService#getCriterionBidLandscape}
 * call.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CriterionBidLandscapePage extends NoStatsPage {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CriterionBidLandscapePage";

  /**
   * @access public
   * @var CriterionBidLandscape[]
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

}}

if (!class_exists("DataService", FALSE)) {
/**
 * DataService
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class DataService extends AdWordsSoapClient {

  const SERVICE_NAME = "DataService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201309/DataService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/DataService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "AdGroupBidLandscape" => "AdGroupBidLandscape",
    "AdxError" => "AdxError",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "BetaError" => "BetaError",
    "ClientTermsError" => "ClientTermsError",
    "CriterionBidLandscape" => "CriterionBidLandscape",
    "DateError" => "DateError",
    "DateRange" => "DateRange",
    "DistinctError" => "DistinctError",
    "DoubleValue" => "DoubleValue",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "LongValue" => "LongValue",
    "Money" => "Money",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "NumberValue" => "NumberValue",
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
    "DataError" => "DataError",
    "ComparableValue" => "ComparableValue",
    "DatabaseError" => "DatabaseError",
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "BidLandscape.LandscapePoint" => "BidLandscapeLandscapePoint",
    "Selector" => "Selector",
    "BidLandscape" => "BidLandscape",
    "DataEntry" => "DataEntry",
    "AdGroupBidLandscapePage" => "AdGroupBidLandscapePage",
    "CriterionBidLandscapePage" => "CriterionBidLandscapePage",
    "NoStatsPage" => "NoStatsPage",
    "Page" => "Page",
    "AdGroupBidLandscape.Type" => "AdGroupBidLandscapeType",
    "AdxError.Reason" => "AdxErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BetaError.Reason" => "BetaErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
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
    "DataError.Reason" => "DataErrorReason",
    "getAdGroupBidLandscape" => "GetAdGroupBidLandscape",
    "getAdGroupBidLandscapeResponse" => "GetAdGroupBidLandscapeResponse",
    "getCriterionBidLandscape" => "GetCriterionBidLandscape",
    "getCriterionBidLandscapeResponse" => "GetCriterionBidLandscapeResponse",
  );


  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = self::$classmap;
    parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
        self::WSDL_NAMESPACE);
  }
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of bid landscapes for the ad groups specified in the selector.
   * 
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getAdGroupBidLandscape($serviceSelector) {
    $args = new GetAdGroupBidLandscape($serviceSelector);
    $result = $this->__soapCall("getAdGroupBidLandscape", array($args));
    return $result->rval;
  }
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of bid landscapes for the criteria specified in the selector.
   * 
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getCriterionBidLandscape($serviceSelector) {
    $args = new GetCriterionBidLandscape($serviceSelector);
    $result = $this->__soapCall("getCriterionBidLandscape", array($args));
    return $result->rval;
  }
}}