<?php
/**
 * Contains all client objects for the CampaignAdExtensionService
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

if (!class_exists("Address", FALSE)) {
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

}}

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

if (!class_exists("GeoPoint", FALSE)) {
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

}}

if (!class_exists("OAuthInfo", FALSE)) {
/**
 * Data used for authorization using OAuth.
 * For more information about OAuth, see:
 * {@link "https://developers.google.com/accounts/docs/OAuth2"}
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class OAuthInfo {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "OAuthInfo";

  /**
   * @access public
   * @var string
   */
  public $httpMethod;

  /**
   * @access public
   * @var string
   */
  public $httpRequestUrl;

  /**
   * @access public
   * @var string
   */
  public $httpAuthorizationHeader;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($httpMethod = null, $httpRequestUrl = null, $httpAuthorizationHeader = null) {
    $this->httpMethod = $httpMethod;
    $this->httpRequestUrl = $httpRequestUrl;
    $this->httpAuthorizationHeader = $httpAuthorizationHeader;
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

if (!class_exists("Sitelink", FALSE)) {
/**
 * Class to represent a single sitelink
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class Sitelink {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "Sitelink";

  /**
   * @access public
   * @var string
   */
  public $displayText;

  /**
   * @access public
   * @var string
   */
  public $destinationUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($displayText = null, $destinationUrl = null) {
    $this->displayText = $displayText;
    $this->destinationUrl = $destinationUrl;
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

if (!class_exists("AdExtension", FALSE)) {
/**
 * Base class for AdExtension objects. An AdExtension is an extension to
 * an existing ad or metadata that will process into an extension.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class AdExtension {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "AdExtension";

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $AdExtensionType;
  private $_parameterMap = array(
    "AdExtension.Type" => "AdExtensionType",
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

  public function __construct($id = null, $AdExtensionType = null) {
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }

}}

if (!class_exists("CampaignAdExtension", FALSE)) {
/**
 * Represents a campaign level ad extension. A campaign ad extension specifies
 * a campaign and an ad extension which can extend any ad under that campaign.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtension {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CampaignAdExtension";

  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var AdExtension
   */
  public $adExtension;

  /**
   * @access public
   * @var tnsCampaignAdExtensionStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsCampaignAdExtensionApprovalStatus
   */
  public $approvalStatus;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($campaignId = null, $adExtension = null, $status = null, $approvalStatus = null) {
    $this->campaignId = $campaignId;
    $this->adExtension = $adExtension;
    $this->status = $status;
    $this->approvalStatus = $approvalStatus;
  }

}}

if (!class_exists("ListReturnValue", FALSE)) {
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

}}

if (!class_exists("Operation", FALSE)) {
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

if (!class_exists("AdExtensionErrorReason", FALSE)) {
/**
 * Account has been deleted
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class AdExtensionErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "AdExtensionError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CampaignAdExtensionApprovalStatus", FALSE)) {
/**
 * Approval status of the CampaignAdExtension.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionApprovalStatus {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CampaignAdExtension.ApprovalStatus";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CampaignAdExtensionStatus", FALSE)) {
/**
 * Status of the CampaignAdExtension.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionStatus {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CampaignAdExtension.Status";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CampaignAdExtensionErrorReason", FALSE)) {
/**
 * Cannot operate on an adextensions under the wrong campaign
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CampaignAdExtensionError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("EntityCountLimitExceededReason", FALSE)) {
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

}}

if (!class_exists("EntityNotFoundReason", FALSE)) {
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

if (!class_exists("InAppLinkExtensionAppStore", FALSE)) {
/**
 * The AppStore this extension will render for.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class InAppLinkExtensionAppStore {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "InAppLinkExtension.AppStore";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("LocationExtensionSource", FALSE)) {
/**
 * From manual entry in adwords frontend
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class LocationExtensionSource {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "LocationExtension.Source";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("NewEntityCreationErrorReason", FALSE)) {
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

if (!class_exists("OperationAccessDeniedReason", FALSE)) {
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

}}

if (!class_exists("Operator", FALSE)) {
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

}}

if (!class_exists("OperatorErrorReason", FALSE)) {
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

}}

if (!class_exists("PagingErrorReason", FALSE)) {
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

if (!class_exists("RegionCodeErrorReason", FALSE)) {
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

if (!class_exists("CampaignAdExtensionServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of {@link CampaignAdExtension}s.
 * 
 * @param serviceSelector The selector specifying the {@link CampaignAdExtension}s to return.
 * @return The page containing the {@link CampaignAdExtension}s which meet the
 * criteria specified by the selector.
 * @throws ApiException when there is at least one error with the request.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionServiceGet {

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

if (!class_exists("CampaignAdExtensionServiceGetResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionServiceGetResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var CampaignAdExtensionPage
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

if (!class_exists("CampaignAdExtensionServiceMutate", FALSE)) {
/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Applies the list of mutate operations.
 * @param operations The operations to apply. The same {@link CampaignAdExtension}
 * cannot be specified in more than one operation.
 * @return The changed {@link CampaignAdExtension}s.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionServiceMutate {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var CampaignAdExtensionOperation[]
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

}}

if (!class_exists("CampaignAdExtensionServiceMutateResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionServiceMutateResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var CampaignAdExtensionReturnValue
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

if (!class_exists("AdExtensionError", FALSE)) {
/**
 * AdExtension errors.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class AdExtensionError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "AdExtensionError";

  /**
   * @access public
   * @var tnsAdExtensionErrorReason
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

if (!class_exists("CampaignAdExtensionError", FALSE)) {
/**
 * CampaignAdExtension errors.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CampaignAdExtensionError";

  /**
   * @access public
   * @var tnsCampaignAdExtensionErrorReason
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

if (!class_exists("DomainInfoExtension", FALSE)) {
/**
 * Domain extension, which adds domain info to ads.
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class DomainInfoExtension extends AdExtension {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "DomainInfoExtension";

  /**
   * @access public
   * @var string
   */
  public $domainName;

  /**
   * @access public
   * @var string
   */
  public $languageCode;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($domainName = null, $languageCode = null, $id = null, $AdExtensionType = null) {
    parent::__construct();
    $this->domainName = $domainName;
    $this->languageCode = $languageCode;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }

}}

if (!class_exists("EntityCountLimitExceeded", FALSE)) {
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

}}

if (!class_exists("EntityNotFound", FALSE)) {
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

if (!class_exists("InAppLinkExtension", FALSE)) {
/**
 * <p>This extension is useful for advertisers who wish to provide users with a
 * link that points to the advertiser's mobile application in addition to their
 * website.
 * 
 * <p>It is also known as Mobile App Extension.
 * 
 * <p>The API allows one InAppLinkExtension per {@code AppStore} per campaign.
 * Only the extension for a given {@code AppStore} will render on the device
 * relevant to that {@code AppStore} (e.g. iPhones for {@code AppStore.ITUNES}
 * and Android phones for {@code AppStore.GOOGLE_PLAY}).
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class InAppLinkExtension extends AdExtension {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "InAppLinkExtension";

  /**
   * @access public
   * @var string
   */
  public $inAppLinkText;

  /**
   * @access public
   * @var string
   */
  public $inAppLinkUrl;

  /**
   * @access public
   * @var tnsInAppLinkExtensionAppStore
   */
  public $appStore;

  /**
   * @access public
   * @var string
   */
  public $appId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($inAppLinkText = null, $inAppLinkUrl = null, $appStore = null, $appId = null, $id = null, $AdExtensionType = null) {
    parent::__construct();
    $this->inAppLinkText = $inAppLinkText;
    $this->inAppLinkUrl = $inAppLinkUrl;
    $this->appStore = $appStore;
    $this->appId = $appId;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
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

if (!class_exists("MobileExtension", FALSE)) {
/**
 * Represents a phone extension.
 * 
 * <p>This type of ad extension attaches a phone number
 * to a text ad, which lets customers call the advertiser directly from the ad.
 * Phone extensions will appear as clickable phone numbers beneath the main text ad,
 * and will be visible to high-end mobile device users who access google.com search,
 * Voice search, Google Mobile App, or Google Maps for Mobile from their phone.
 * </p>
 * <p>Learn more about
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2453991">
 * phone extensions</a>.
 * </p>
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class MobileExtension extends AdExtension {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "MobileExtension";

  /**
   * @access public
   * @var string
   */
  public $phoneNumber;

  /**
   * @access public
   * @var string
   */
  public $countryCode;

  /**
   * @access public
   * @var boolean
   */
  public $isCallTrackingEnabled;

  /**
   * @access public
   * @var boolean
   */
  public $isCallOnly;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($phoneNumber = null, $countryCode = null, $isCallTrackingEnabled = null, $isCallOnly = null, $id = null, $AdExtensionType = null) {
    parent::__construct();
    $this->phoneNumber = $phoneNumber;
    $this->countryCode = $countryCode;
    $this->isCallTrackingEnabled = $isCallTrackingEnabled;
    $this->isCallOnly = $isCallOnly;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }

}}

if (!class_exists("NewEntityCreationError", FALSE)) {
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

if (!class_exists("OperationAccessDenied", FALSE)) {
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

}}

if (!class_exists("OperatorError", FALSE)) {
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

}}

if (!class_exists("PagingError", FALSE)) {
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

if (!class_exists("RegionCodeError", FALSE)) {
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

if (!class_exists("SitelinksExtension", FALSE)) {
/**
 * Class to represent a set of sitelinks and their order of preference.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class SitelinksExtension extends AdExtension {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "SitelinksExtension";

  /**
   * @access public
   * @var Sitelink[]
   */
  public $sitelinks;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($sitelinks = null, $id = null, $AdExtensionType = null) {
    parent::__construct();
    $this->sitelinks = $sitelinks;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
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

if (!class_exists("LocationExtension", FALSE)) {
/**
 * Location based ad extension.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class LocationExtension extends AdExtension {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "LocationExtension";

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
   * @var base64Binary
   */
  public $encodedLocation;

  /**
   * @access public
   * @var string
   */
  public $companyName;

  /**
   * @access public
   * @var string
   */
  public $phoneNumber;

  /**
   * @access public
   * @var tnsLocationExtensionSource
   */
  public $source;

  /**
   * @access public
   * @var integer
   */
  public $iconMediaId;

  /**
   * @access public
   * @var integer
   */
  public $imageMediaId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($address = null, $geoPoint = null, $encodedLocation = null, $companyName = null, $phoneNumber = null, $source = null, $iconMediaId = null, $imageMediaId = null, $id = null, $AdExtensionType = null) {
    parent::__construct();
    $this->address = $address;
    $this->geoPoint = $geoPoint;
    $this->encodedLocation = $encodedLocation;
    $this->companyName = $companyName;
    $this->phoneNumber = $phoneNumber;
    $this->source = $source;
    $this->iconMediaId = $iconMediaId;
    $this->imageMediaId = $imageMediaId;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
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

if (!class_exists("LocationSyncExtension", FALSE)) {
/**
 * Local business center(LBC) sync extension that ties a LBC account with a campaign.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class LocationSyncExtension extends AdExtension {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "LocationSyncExtension";

  /**
   * @access public
   * @var string
   */
  public $email;

  /**
   * @access public
   * @var string
   */
  public $authToken;

  /**
   * @access public
   * @var OAuthInfo
   */
  public $oAuthInfo;

  /**
   * @access public
   * @var integer
   */
  public $iconMediaId;

  /**
   * @access public
   * @var boolean
   */
  public $shouldSyncUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($email = null, $authToken = null, $oAuthInfo = null, $iconMediaId = null, $shouldSyncUrl = null, $id = null, $AdExtensionType = null) {
    parent::__construct();
    $this->email = $email;
    $this->authToken = $authToken;
    $this->oAuthInfo = $oAuthInfo;
    $this->iconMediaId = $iconMediaId;
    $this->shouldSyncUrl = $shouldSyncUrl;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }

}}

if (!class_exists("CampaignAdExtensionOperation", FALSE)) {
/**
 * CampaignAdExtension service operation. <b>Note:</b> The {@code SET} operator
 * is not supported.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionOperation extends Operation {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CampaignAdExtensionOperation";

  /**
   * @access public
   * @var CampaignAdExtension
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

}}

if (!class_exists("CampaignAdExtensionPage", FALSE)) {
/**
 * Represents a page of {@link CampaignAdExtension}s resulting from the query
 * done by {@link CampaignAdExtensionService}.
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionPage extends Page {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CampaignAdExtensionPage";

  /**
   * @access public
   * @var CampaignAdExtension[]
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

}}

if (!class_exists("CampaignAdExtensionReturnValue", FALSE)) {
/**
 * A container for return values from the CampaignAdExtensionService.mutate().
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionReturnValue extends ListReturnValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const XSI_TYPE = "CampaignAdExtensionReturnValue";

  /**
   * @access public
   * @var CampaignAdExtension[]
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

}}

if (!class_exists("CampaignAdExtensionService", FALSE)) {
/**
 * CampaignAdExtensionService
 * @package Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 */
class CampaignAdExtensionService extends AdWordsSoapClient {

  const SERVICE_NAME = "CampaignAdExtensionService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201309/CampaignAdExtensionService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/CampaignAdExtensionService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "AdExtensionError" => "AdExtensionError",
    "Address" => "Address",
    "AdxError" => "AdxError",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "BetaError" => "BetaError",
    "CampaignAdExtensionError" => "CampaignAdExtensionError",
    "ClientTermsError" => "ClientTermsError",
    "DateRange" => "DateRange",
    "DistinctError" => "DistinctError",
    "DomainInfoExtension" => "DomainInfoExtension",
    "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
    "EntityNotFound" => "EntityNotFound",
    "GeoPoint" => "GeoPoint",
    "IdError" => "IdError",
    "InAppLinkExtension" => "InAppLinkExtension",
    "InternalApiError" => "InternalApiError",
    "MobileExtension" => "MobileExtension",
    "NewEntityCreationError" => "NewEntityCreationError",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "OAuthInfo" => "OAuthInfo",
    "OperationAccessDenied" => "OperationAccessDenied",
    "OperatorError" => "OperatorError",
    "OrderBy" => "OrderBy",
    "Paging" => "Paging",
    "PagingError" => "PagingError",
    "Predicate" => "Predicate",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RegionCodeError" => "RegionCodeError",
    "RejectedError" => "RejectedError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "SelectorError" => "SelectorError",
    "Sitelink" => "Sitelink",
    "SitelinksExtension" => "SitelinksExtension",
    "SizeLimitError" => "SizeLimitError",
    "SoapHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StringLengthError" => "StringLengthError",
    "DatabaseError" => "DatabaseError",
    "LocationExtension" => "LocationExtension",
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "LocationSyncExtension" => "LocationSyncExtension",
    "Selector" => "Selector",
    "AdExtension" => "AdExtension",
    "CampaignAdExtension" => "CampaignAdExtension",
    "CampaignAdExtensionOperation" => "CampaignAdExtensionOperation",
    "CampaignAdExtensionPage" => "CampaignAdExtensionPage",
    "CampaignAdExtensionReturnValue" => "CampaignAdExtensionReturnValue",
    "ListReturnValue" => "ListReturnValue",
    "Operation" => "Operation",
    "Page" => "Page",
    "AdExtensionError.Reason" => "AdExtensionErrorReason",
    "AdxError.Reason" => "AdxErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BetaError.Reason" => "BetaErrorReason",
    "CampaignAdExtension.ApprovalStatus" => "CampaignAdExtensionApprovalStatus",
    "CampaignAdExtension.Status" => "CampaignAdExtensionStatus",
    "CampaignAdExtensionError.Reason" => "CampaignAdExtensionErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "IdError.Reason" => "IdErrorReason",
    "InAppLinkExtension.AppStore" => "InAppLinkExtensionAppStore",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "LocationExtension.Source" => "LocationExtensionSource",
    "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "Operator" => "Operator",
    "OperatorError.Reason" => "OperatorErrorReason",
    "PagingError.Reason" => "PagingErrorReason",
    "Predicate.Operator" => "PredicateOperator",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RegionCodeError.Reason" => "RegionCodeErrorReason",
    "RejectedError.Reason" => "RejectedErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "SelectorError.Reason" => "SelectorErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "SortOrder" => "SortOrder",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "get" => "CampaignAdExtensionServiceGet",
    "getResponse" => "CampaignAdExtensionServiceGetResponse",
    "mutate" => "CampaignAdExtensionServiceMutate",
    "mutateResponse" => "CampaignAdExtensionServiceMutateResponse",
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
   * Returns a list of {@link CampaignAdExtension}s.
   * 
   * @param serviceSelector The selector specifying the {@link CampaignAdExtension}s to return.
   * @return The page containing the {@link CampaignAdExtension}s which meet the
   * criteria specified by the selector.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $args = new CampaignAdExtensionServiceGet($serviceSelector);
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
   * @param operations The operations to apply. The same {@link CampaignAdExtension}
   * cannot be specified in more than one operation.
   * @return The changed {@link CampaignAdExtension}s.
   */
  public function mutate($operations) {
    $args = new CampaignAdExtensionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($args));
    return $result->rval;
  }
}}