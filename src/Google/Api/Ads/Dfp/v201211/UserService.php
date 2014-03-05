<?php
/**
 * Contains all client objects for the UserService
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201211
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

/** Required classes. **/
require_once "Google/Api/Ads/Dfp/Lib/DfpSoapClient.php";

if (!class_exists("ApiError", FALSE)) {
/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

if (!class_exists("ApiVersionError", FALSE)) {
/**
 * Errors related to the usage of API versions.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ApiVersionError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "ApiVersionError";

  /**
   * @access public
   * @var tnsApiVersionErrorReason
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

if (!class_exists("ApplicationException", FALSE)) {
/**
 * Base class for exceptions.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ApplicationException {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

if (!class_exists("Authentication", FALSE)) {
/**
 * A representation of the authentication protocols that can be used.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Authentication {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "Authentication";

  /**
   * @access public
   * @var string
   */
  public $AuthenticationType;
  private $_parameterMap = array(
    "Authentication.Type" => "AuthenticationType",
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

  public function __construct($AuthenticationType = null) {
    $this->AuthenticationType = $AuthenticationType;
  }

}}

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * An error for an exception that occurred when authenticating.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class AuthenticationError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

if (!class_exists("ClientLogin", FALSE)) {
/**
 * The credentials for the {@code ClientLogin} API authentication protocol.
 * 
 * See {@link http://code.google.com/apis/accounts/docs/AuthForInstalledApps.html}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ClientLogin extends Authentication {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "ClientLogin";

  /**
   * @access public
   * @var string
   */
  public $token;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($token = null, $AuthenticationType = null) {
    parent::__construct();
    $this->token = $token;
    $this->AuthenticationType = $AuthenticationType;
  }

}}

if (!class_exists("CommonError", FALSE)) {
/**
 * A place for common errors that can be used across services.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CommonError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "CommonError";

  /**
   * @access public
   * @var tnsCommonErrorReason
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

if (!class_exists("CustomFieldValueError", FALSE)) {
/**
 * Errors specific to editing custom field values
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomFieldValueError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "CustomFieldValueError";

  /**
   * @access public
   * @var tnsCustomFieldValueErrorReason
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

if (!class_exists("Date", FALSE)) {
/**
 * Represents a date.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Date {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

}}

if (!class_exists("DfpDateTime", FALSE)) {
/**
 * Represents a date combined with the time of day.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DfpDateTime {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "DateTime";

  /**
   * @access public
   * @var Date
   */
  public $date;

  /**
   * @access public
   * @var integer
   */
  public $hour;

  /**
   * @access public
   * @var integer
   */
  public $minute;

  /**
   * @access public
   * @var integer
   */
  public $second;

  /**
   * @access public
   * @var string
   */
  public $timeZoneID;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($date = null, $hour = null, $minute = null, $second = null, $timeZoneID = null) {
    $this->date = $date;
    $this->hour = $hour;
    $this->minute = $minute;
    $this->second = $second;
    $this->timeZoneID = $timeZoneID;
  }

}}

if (!class_exists("FeatureError", FALSE)) {
/**
 * Errors related to feature management.  If you attempt using a feature that is not available to
 * the current network you'll receive a FeatureError with the missing feature as the trigger.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class FeatureError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "FeatureError";

  /**
   * @access public
   * @var tnsFeatureErrorReason
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
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class InternalApiError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

if (!class_exists("InvalidEmailError", FALSE)) {
/**
 * Caused by supplying a value for an email attribute that is not a valid
 * email address.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class InvalidEmailError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "InvalidEmailError";

  /**
   * @access public
   * @var tnsInvalidEmailErrorReason
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

if (!class_exists("NotNullError", FALSE)) {
/**
 * Caused by supplying a null value for an attribute that cannot be null.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class NotNullError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "NotNullError";

  /**
   * @access public
   * @var tnsNotNullErrorReason
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

if (!class_exists("DfpOAuth", FALSE)) {
/**
 * The credentials for the {@code OAuth} authentication protocol.
 * 
 * See {@link http://oauth.net/}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DfpOAuth extends Authentication {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "OAuth";

  /**
   * @access public
   * @var string
   */
  public $parameters;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($parameters = null, $AuthenticationType = null) {
    parent::__construct();
    $this->parameters = $parameters;
    $this->AuthenticationType = $AuthenticationType;
  }

}}

if (!class_exists("ParseError", FALSE)) {
/**
 * Lists errors related to parsing.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ParseError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "ParseError";

  /**
   * @access public
   * @var tnsParseErrorReason
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

if (!class_exists("PermissionError", FALSE)) {
/**
 * Errors related to incorrect permission.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PermissionError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "PermissionError";

  /**
   * @access public
   * @var tnsPermissionErrorReason
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

if (!class_exists("PublisherQueryLanguageContextError", FALSE)) {
/**
 * An error that occurs while executing a PQL query contained in
 * a {@link Statement} object.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PublisherQueryLanguageContextError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "PublisherQueryLanguageContextError";

  /**
   * @access public
   * @var tnsPublisherQueryLanguageContextErrorReason
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

if (!class_exists("PublisherQueryLanguageSyntaxError", FALSE)) {
/**
 * An error that occurs while parsing a PQL query contained in a
 * {@link Statement} object.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PublisherQueryLanguageSyntaxError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "PublisherQueryLanguageSyntaxError";

  /**
   * @access public
   * @var tnsPublisherQueryLanguageSyntaxErrorReason
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

if (!class_exists("QuotaError", FALSE)) {
/**
 * Describes a client-side error on which a user is attempting
 * to perform an action to which they have no quota remaining.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class QuotaError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "QuotaError";

  /**
   * @access public
   * @var tnsQuotaErrorReason
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
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class RequiredError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

if (!class_exists("Role", FALSE)) {
/**
 * Each {@code Role} provides a user with permissions to perform specific
 * operations in the system.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Role {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "Role";

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
   * @var string
   */
  public $description;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $name = null, $description = null) {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
  }

}}

if (!class_exists("ServerError", FALSE)) {
/**
 * Errors related to the server.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ServerError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "ServerError";

  /**
   * @access public
   * @var tnsServerErrorReason
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

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class SoapRequestHeader {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "SoapRequestHeader";

  /**
   * @access public
   * @var string
   */
  public $networkCode;

  /**
   * @access public
   * @var string
   */
  public $applicationName;

  /**
   * @access public
   * @var Authentication
   */
  public $authentication;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($networkCode = null, $applicationName = null, $authentication = null) {
    $this->networkCode = $networkCode;
    $this->applicationName = $applicationName;
    $this->authentication = $authentication;
  }

}}

if (!class_exists("SoapResponseHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API responses.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class SoapResponseHeader {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "SoapResponseHeader";

  /**
   * @access public
   * @var string
   */
  public $requestId;

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

  public function __construct($requestId = null, $responseTime = null) {
    $this->requestId = $requestId;
    $this->responseTime = $responseTime;
  }

}}

if (!class_exists("Statement", FALSE)) {
/**
 * Captures the {@code WHERE}, {@code ORDER BY} and {@code LIMIT} clauses of a
 * PQL query. Statements are typically used to retrieve objects of a predefined
 * domain type, which makes SELECT clause unnecessary.
 * <p>
 * An example query text might be {@code "WHERE status = 'ACTIVE' ORDER BY id
 * LIMIT 30"}.
 * </p>
 * <p>
 * Statements support bind variables. These are substitutes for literals
 * and can be thought of as input parameters to a PQL query.
 * </p>
 * <p>
 * An example of such a query might be {@code "WHERE id = :idValue"}.
 * </p>
 * <p>
 * Statements also support use of the LIKE keyword. This provides partial and
 * wildcard string matching.
 * </p>
 * <p>
 * An example of such a query might be {@code "WHERE name LIKE 'startswith%'"}.
 * </p>
 * If using an API version newer than V201010, the value for the variable
 * idValue must then be set with an object of type {@link Value} and is one of
 * {@link NumberValue}, {@link TextValue} or {@link BooleanValue}.
 * <p>
 * If using an API version older than or equal to V201010, the value for the
 * variable idValue must then be set with an object of type {@link Param} and is
 * one of {@link DoubleParam}, {@link LongParam} or {@link StringParam}.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Statement {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "Statement";

  /**
   * @access public
   * @var string
   */
  public $query;

  /**
   * @access public
   * @var String_ValueMapEntry[]
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

  public function __construct($query = null, $values = null) {
    $this->query = $query;
    $this->values = $values;
  }

}}

if (!class_exists("StatementError", FALSE)) {
/**
 * An error that occurs while parsing {@link Statement} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class StatementError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "StatementError";

  /**
   * @access public
   * @var tnsStatementErrorReason
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

if (!class_exists("String_ValueMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type String
 * and value of type Value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class String_ValueMapEntry {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "String_ValueMapEntry";

  /**
   * @access public
   * @var string
   */
  public $key;

  /**
   * @access public
   * @var Value
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

}}

if (!class_exists("TeamError", FALSE)) {
/**
 * Errors related to a Team.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TeamError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "TeamError";

  /**
   * @access public
   * @var tnsTeamErrorReason
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

if (!class_exists("TypeError", FALSE)) {
/**
 * An error for a field which is an invalid type.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TypeError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "TypeError";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
    parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("UniqueError", FALSE)) {
/**
 * An error for a field which must satisfy a uniqueness constraint
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UniqueError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "UniqueError";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
    parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("UpdateResult", FALSE)) {
/**
 * Represents the result of performing an action on objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UpdateResult {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "UpdateResult";

  /**
   * @access public
   * @var integer
   */
  public $numChanges;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($numChanges = null) {
    $this->numChanges = $numChanges;
  }

}}

if (!class_exists("UserAction", FALSE)) {
/**
 * Represents the actions that can be performed on {@link User} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UserAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "UserAction";

  /**
   * @access public
   * @var string
   */
  public $UserActionType;
  private $_parameterMap = array(
    "UserAction.Type" => "UserActionType",
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

  public function __construct($UserActionType = null) {
    $this->UserActionType = $UserActionType;
  }

}}

if (!class_exists("UserPage", FALSE)) {
/**
 * Captures a page of {@link User} objects
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UserPage {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "UserPage";

  /**
   * @access public
   * @var integer
   */
  public $totalResultSetSize;

  /**
   * @access public
   * @var integer
   */
  public $startIndex;

  /**
   * @access public
   * @var User[]
   */
  public $results;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($totalResultSetSize = null, $startIndex = null, $results = null) {
    $this->totalResultSetSize = $totalResultSetSize;
    $this->startIndex = $startIndex;
    $this->results = $results;
  }

}}

if (!class_exists("UserRecord", FALSE)) {
/**
 * The {@code UserRecord} represents the base class from which a {@code User} is
 * derived.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UserRecord {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "UserRecord";

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
   * @var string
   */
  public $email;

  /**
   * @access public
   * @var integer
   */
  public $roleId;

  /**
   * @access public
   * @var string
   */
  public $roleName;

  /**
   * @access public
   * @var string
   */
  public $preferredLocale;

  /**
   * @access public
   * @var string
   */
  public $UserRecordType;
  private $_parameterMap = array(
    "UserRecord.Type" => "UserRecordType",
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

  public function __construct($id = null, $name = null, $email = null, $roleId = null, $roleName = null, $preferredLocale = null, $UserRecordType = null) {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->roleId = $roleId;
    $this->roleName = $roleName;
    $this->preferredLocale = $preferredLocale;
    $this->UserRecordType = $UserRecordType;
  }

}}

if (!class_exists("Value", FALSE)) {
/**
 * {@code Value} represents a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "Value";

  /**
   * @access public
   * @var string
   */
  public $ValueType;
  private $_parameterMap = array(
    "Value.Type" => "ValueType",
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

  public function __construct($ValueType = null) {
    $this->ValueType = $ValueType;
  }

}}

if (!class_exists("ApiVersionErrorReason", FALSE)) {
/**
 * Indicates that the operation is not allowed in the version the request
 * was made in.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ApiVersionErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "ApiVersionError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * The SOAP message contains a request header with an ambiguous definition
 * of the authentication header fields. This means either the {@code
 * authToken} and {@code oAuthToken} fields were both null or both were
 * specified. Exactly one value should be specified with each request.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class AuthenticationErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

if (!class_exists("CommonErrorReason", FALSE)) {
/**
 * Describes reasons for common errors
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CommonErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "CommonError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CustomFieldValueErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomFieldValueErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "CustomFieldValueError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("FeatureErrorReason", FALSE)) {
/**
 * A feature is being used that is not enabled on the current network.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class FeatureErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "FeatureError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class InternalApiErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

if (!class_exists("InvalidEmailErrorReason", FALSE)) {
/**
 * Describes reasons for an email to be invalid.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class InvalidEmailErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "InvalidEmailError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("NotNullErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class NotNullErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "NotNullError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("ParseErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ParseErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "ParseError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("PermissionErrorReason", FALSE)) {
/**
 * Describes reasons for permission errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PermissionErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "PermissionError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("PublisherQueryLanguageContextErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PublisherQueryLanguageContextErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "PublisherQueryLanguageContextError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("PublisherQueryLanguageSyntaxErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PublisherQueryLanguageSyntaxErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "PublisherQueryLanguageSyntaxError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("QuotaErrorReason", FALSE)) {
/**
 * The number of requests made per second is too high and has exceeded the
 * allowable limit. The recommended approach to handle this error is to wait
 * about 5 seconds and then retry the request. Note that this does not
 * guarantee the request will succeed. If it fails again, try increasing the
 * wait time.
 * <p>
 * Another way to mitigate this error is to limit requests to 2 per second.
 * Once again this does not guarantee that every request will succeed, but
 * may help reduce the number of times you receive this error.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class QuotaErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "QuotaError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class RequiredErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

if (!class_exists("ServerErrorReason", FALSE)) {
/**
 * Describes reasons for server errors
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ServerErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "ServerError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("StatementErrorReason", FALSE)) {
/**
 * A bind variable has not been bound to a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class StatementErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "StatementError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("TeamErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TeamErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "TeamError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CreateUser", FALSE)) {
/**
 * Creates a new {@link User}.
 * 
 * The following fields are required:
 * <ul>
 * <li>{@link User#email}</li>
 * <li>{@link User#name}</li>
 * </ul>
 * 
 * @param user the user to create
 * @return the new user with its ID filled in
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CreateUser {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User
   */
  public $user;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($user = null) {
    $this->user = $user;
  }

}}

if (!class_exists("CreateUserResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CreateUserResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User
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

if (!class_exists("CreateUsers", FALSE)) {
/**
 * Creates new {@link User} objects.
 * 
 * @param users the users to create
 * @return the created users with their IDs filled in
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CreateUsers {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User[]
   */
  public $users;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($users = null) {
    $this->users = $users;
  }

}}

if (!class_exists("CreateUsersResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CreateUsersResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User[]
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

if (!class_exists("GetAllRoles", FALSE)) {
/**
 * Returns the {@link Role} objects that are defined for the users of the
 * network.
 * 
 * @return the roles defined for the user's network
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GetAllRoles {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("GetAllRolesResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GetAllRolesResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var Role[]
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

if (!class_exists("GetCurrentUser", FALSE)) {
/**
 * Returns the current {@link User}.
 * 
 * @return the current user
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GetCurrentUser {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("GetCurrentUserResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GetCurrentUserResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User
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

if (!class_exists("GetUser", FALSE)) {
/**
 * Returns the {@link User} uniquely identified by the given ID.
 * 
 * @param userId The optional ID of the user. For current user set to {@code null}.
 * @return the {@code User} uniquely identified by the given ID
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GetUser {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var integer
   */
  public $userId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($userId = null) {
    $this->userId = $userId;
  }

}}

if (!class_exists("GetUserResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GetUserResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User
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

if (!class_exists("GetUsersByStatement", FALSE)) {
/**
 * Gets a {@link UserPage} of {@link User} objects that satisfy the given
 * {@link Statement#query}. The following fields are supported for filtering:
 * 
 * <table>
 * <tr>
 * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
 * </tr>
 * <tr>
 * <td>{@code email}</td>
 * <td>{@link User#email}</td>
 * </tr>
 * <tr>
 * <td>{@code id}</td>
 * <td>{@link User#id}</td>
 * </tr>
 * <tr>
 * <td>{@code name}</td>
 * <td>{@link User#name}</td>
 * </tr>
 * <tr>
 * <td>{@code roleId}</td>
 * <td>{@link User#roleId}
 * </tr>
 * <tr>
 * <td>{@code rolename}</td>
 * <td>{@link User#roleName}
 * </tr>
 * <tr>
 * <td>{@code status}</td>
 * <td>{@code ACTIVE} if {@link User#isActive} is true; {@code INACTIVE}
 * otherwise</td>
 * </tr>
 * </table>
 * 
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of users
 * @return the users that match the given filter
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GetUsersByStatement {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var Statement
   */
  public $filterStatement;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($filterStatement = null) {
    $this->filterStatement = $filterStatement;
  }

}}

if (!class_exists("GetUsersByStatementResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GetUsersByStatementResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var UserPage
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

if (!class_exists("PerformUserAction", FALSE)) {
/**
 * Performs actions on {@link User} objects that match the given
 * {@link Statement#query}.
 * 
 * @param userAction the action to perform
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of users
 * @return the result of the action performed
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PerformUserAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var UserAction
   */
  public $userAction;

  /**
   * @access public
   * @var Statement
   */
  public $filterStatement;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($userAction = null, $filterStatement = null) {
    $this->userAction = $userAction;
    $this->filterStatement = $filterStatement;
  }

}}

if (!class_exists("PerformUserActionResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PerformUserActionResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var UpdateResult
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

if (!class_exists("UpdateUser", FALSE)) {
/**
 * Updates the specified {@link User}.
 * 
 * @param user the user to update
 * @return the updated user
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UpdateUser {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User
   */
  public $user;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($user = null) {
    $this->user = $user;
  }

}}

if (!class_exists("UpdateUserResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UpdateUserResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User
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

if (!class_exists("UpdateUsers", FALSE)) {
/**
 * Updates the specified {@link User} objects.
 * 
 * @param users the users to update
 * @return the updated users
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UpdateUsers {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User[]
   */
  public $users;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($users = null) {
    $this->users = $users;
  }

}}

if (!class_exists("UpdateUsersResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UpdateUsersResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var User[]
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

if (!class_exists("ActivateUsers", FALSE)) {
/**
 * The action used for activating {@link User} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ActivateUsers extends UserAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "ActivateUsers";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($UserActionType = null) {
    parent::__construct();
    $this->UserActionType = $UserActionType;
  }

}}

if (!class_exists("ApiException", FALSE)) {
/**
 * Exception class for holding a list of service errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ApiException extends ApplicationException {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
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

if (!class_exists("BooleanValue", FALSE)) {
/**
 * Contains a boolean value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class BooleanValue extends Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "BooleanValue";

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
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($value = null, $ValueType = null) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }

}}

if (!class_exists("DateTimeValue", FALSE)) {
/**
 * Contains a date-time value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DateTimeValue extends Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "DateTimeValue";

  /**
   * @access public
   * @var DateTime
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

  public function __construct($value = null, $ValueType = null) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }

}}

if (!class_exists("DeactivateUsers", FALSE)) {
/**
 * The action used for deactivating {@link User} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeactivateUsers extends UserAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "DeactivateUsers";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($UserActionType = null) {
    parent::__construct();
    $this->UserActionType = $UserActionType;
  }

}}

if (!class_exists("NumberValue", FALSE)) {
/**
 * Contains a numeric value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class NumberValue extends Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "NumberValue";

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

  public function __construct($value = null, $ValueType = null) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }

}}

if (!class_exists("TextValue", FALSE)) {
/**
 * Contains a string value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TextValue extends Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "TextValue";

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

  public function __construct($value = null, $ValueType = null) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }

}}

if (!class_exists("User", FALSE)) {
/**
 * Represents a user of the system.
 * <p>
 * Users may be assigned at most one {@link Role} per network. Each role
 * provides a user with permissions to perform specific operations. Without a
 * role, they will not be able to perform any actions.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class User extends UserRecord {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const XSI_TYPE = "User";

  /**
   * @access public
   * @var boolean
   */
  public $isActive;

  /**
   * @access public
   * @var boolean
   */
  public $isEmailNotificationAllowed;

  /**
   * @access public
   * @var string
   */
  public $ordersUiLocalTimeZoneId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($isActive = null, $isEmailNotificationAllowed = null, $ordersUiLocalTimeZoneId = null, $id = null, $name = null, $email = null, $roleId = null, $roleName = null, $preferredLocale = null, $UserRecordType = null) {
    parent::__construct();
    $this->isActive = $isActive;
    $this->isEmailNotificationAllowed = $isEmailNotificationAllowed;
    $this->ordersUiLocalTimeZoneId = $ordersUiLocalTimeZoneId;
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->roleId = $roleId;
    $this->roleName = $roleName;
    $this->preferredLocale = $preferredLocale;
    $this->UserRecordType = $UserRecordType;
  }

}}

if (!class_exists("UserService", FALSE)) {
/**
 * UserService
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UserService extends DfpSoapClient {

  const SERVICE_NAME = "UserService";
  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201211";
  const ENDPOINT = "https://www.google.com/apis/ads/publisher/v201211/UserService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://www.google.com/apis/ads/publisher/v201211/UserService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "ActivateUsers" => "ActivateUsers",
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApiVersionError" => "ApiVersionError",
    "ApplicationException" => "ApplicationException",
    "Authentication" => "Authentication",
    "AuthenticationError" => "AuthenticationError",
    "BooleanValue" => "BooleanValue",
    "ClientLogin" => "ClientLogin",
    "CommonError" => "CommonError",
    "CustomFieldValueError" => "CustomFieldValueError",
    "Date" => "Date",
    "DateTime" => "DfpDateTime",
    "DateTimeValue" => "DateTimeValue",
    "DeactivateUsers" => "DeactivateUsers",
    "FeatureError" => "FeatureError",
    "InternalApiError" => "InternalApiError",
    "InvalidEmailError" => "InvalidEmailError",
    "NotNullError" => "NotNullError",
    "NumberValue" => "NumberValue",
    "OAuth" => "DfpOAuth",
    "ParseError" => "ParseError",
    "PermissionError" => "PermissionError",
    "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
    "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
    "QuotaError" => "QuotaError",
    "RequiredError" => "RequiredError",
    "Role" => "Role",
    "ServerError" => "ServerError",
    "SoapRequestHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "Statement" => "Statement",
    "StatementError" => "StatementError",
    "String_ValueMapEntry" => "String_ValueMapEntry",
    "TeamError" => "TeamError",
    "TextValue" => "TextValue",
    "TypeError" => "TypeError",
    "UniqueError" => "UniqueError",
    "UpdateResult" => "UpdateResult",
    "UserAction" => "UserAction",
    "User" => "User",
    "UserPage" => "UserPage",
    "UserRecord" => "UserRecord",
    "Value" => "Value",
    "ApiVersionError.Reason" => "ApiVersionErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "CommonError.Reason" => "CommonErrorReason",
    "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
    "FeatureError.Reason" => "FeatureErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "InvalidEmailError.Reason" => "InvalidEmailErrorReason",
    "NotNullError.Reason" => "NotNullErrorReason",
    "ParseError.Reason" => "ParseErrorReason",
    "PermissionError.Reason" => "PermissionErrorReason",
    "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
    "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "ServerError.Reason" => "ServerErrorReason",
    "StatementError.Reason" => "StatementErrorReason",
    "TeamError.Reason" => "TeamErrorReason",
    "createUser" => "CreateUser",
    "createUserResponse" => "CreateUserResponse",
    "createUsers" => "CreateUsers",
    "createUsersResponse" => "CreateUsersResponse",
    "getAllRoles" => "GetAllRoles",
    "getAllRolesResponse" => "GetAllRolesResponse",
    "getCurrentUser" => "GetCurrentUser",
    "getCurrentUserResponse" => "GetCurrentUserResponse",
    "getUser" => "GetUser",
    "getUserResponse" => "GetUserResponse",
    "getUsersByStatement" => "GetUsersByStatement",
    "getUsersByStatementResponse" => "GetUsersByStatementResponse",
    "performUserAction" => "PerformUserAction",
    "performUserActionResponse" => "PerformUserActionResponse",
    "updateUser" => "UpdateUser",
    "updateUserResponse" => "UpdateUserResponse",
    "updateUsers" => "UpdateUsers",
    "updateUsersResponse" => "UpdateUsersResponse",
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
   * Creates a new {@link User}.
   * 
   * The following fields are required:
   * <ul>
   * <li>{@link User#email}</li>
   * <li>{@link User#name}</li>
   * </ul>
   * 
   * @param user the user to create
   * @return the new user with its ID filled in
   */
  public function createUser($user) {
    $args = new CreateUser($user);
    $result = $this->__soapCall("createUser", array($args));
    return $result->rval;
  }
  /**
   * Creates new {@link User} objects.
   * 
   * @param users the users to create
   * @return the created users with their IDs filled in
   */
  public function createUsers($users) {
    $args = new CreateUsers($users);
    $result = $this->__soapCall("createUsers", array($args));
    return $result->rval;
  }
  /**
   * Returns the {@link Role} objects that are defined for the users of the
   * network.
   * 
   * @return the roles defined for the user's network
   */
  public function getAllRoles() {
    $args = new GetAllRoles();
    $result = $this->__soapCall("getAllRoles", array($args));
    return $result->rval;
  }
  /**
   * Returns the current {@link User}.
   * 
   * @return the current user
   */
  public function getCurrentUser() {
    $args = new GetCurrentUser();
    $result = $this->__soapCall("getCurrentUser", array($args));
    return $result->rval;
  }
  /**
   * Returns the {@link User} uniquely identified by the given ID.
   * 
   * @param userId The optional ID of the user. For current user set to {@code null}.
   * @return the {@code User} uniquely identified by the given ID
   */
  public function getUser($userId) {
    $args = new GetUser($userId);
    $result = $this->__soapCall("getUser", array($args));
    return $result->rval;
  }
  /**
   * Gets a {@link UserPage} of {@link User} objects that satisfy the given
   * {@link Statement#query}. The following fields are supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code email}</td>
   * <td>{@link User#email}</td>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link User#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link User#name}</td>
   * </tr>
   * <tr>
   * <td>{@code roleId}</td>
   * <td>{@link User#roleId}
   * </tr>
   * <tr>
   * <td>{@code rolename}</td>
   * <td>{@link User#roleName}
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@code ACTIVE} if {@link User#isActive} is true; {@code INACTIVE}
   * otherwise</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of users
   * @return the users that match the given filter
   */
  public function getUsersByStatement($filterStatement) {
    $args = new GetUsersByStatement($filterStatement);
    $result = $this->__soapCall("getUsersByStatement", array($args));
    return $result->rval;
  }
  /**
   * Performs actions on {@link User} objects that match the given
   * {@link Statement#query}.
   * 
   * @param userAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of users
   * @return the result of the action performed
   */
  public function performUserAction($userAction, $filterStatement) {
    $args = new PerformUserAction($userAction, $filterStatement);
    $result = $this->__soapCall("performUserAction", array($args));
    return $result->rval;
  }
  /**
   * Updates the specified {@link User}.
   * 
   * @param user the user to update
   * @return the updated user
   */
  public function updateUser($user) {
    $args = new UpdateUser($user);
    $result = $this->__soapCall("updateUser", array($args));
    return $result->rval;
  }
  /**
   * Updates the specified {@link User} objects.
   * 
   * @param users the users to update
   * @return the updated users
   */
  public function updateUsers($users) {
    $args = new UpdateUsers($users);
    $result = $this->__soapCall("updateUsers", array($args));
    return $result->rval;
  }
}}