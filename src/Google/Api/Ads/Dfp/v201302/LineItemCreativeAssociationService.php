<?php
/**
 * Contains all client objects for the LineItemCreativeAssociationService
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
 * @subpackage v201302
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
 * @subpackage v201302
 */
class ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class ApiVersionError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class ApplicationException {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("AssetError", FALSE)) {
/**
 * Lists all errors associated with assets.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AssetError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AssetError";

  /**
   * @access public
   * @var tnsAssetErrorReason
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

if (!class_exists("AudienceExtensionError", FALSE)) {
/**
 * Errors associated with audience extension enabled line items
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AudienceExtensionError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AudienceExtensionError";

  /**
   * @access public
   * @var tnsAudienceExtensionErrorReason
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

if (!class_exists("Authentication", FALSE)) {
/**
 * A representation of the authentication protocols that can be used.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class Authentication {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class AuthenticationError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class ClientLogin extends Authentication {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class CommonError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("CreativeAssetMacroError", FALSE)) {
/**
 * Lists all errors associated with creative asset macros.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreativeAssetMacroError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CreativeAssetMacroError";

  /**
   * @access public
   * @var tnsCreativeAssetMacroErrorReason
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

if (!class_exists("CreativeError", FALSE)) {
/**
 * Lists all errors associated with creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreativeError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CreativeError";

  /**
   * @access public
   * @var tnsCreativeErrorReason
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

if (!class_exists("CreativeSetError", FALSE)) {
/**
 * Errors relating to creative sets & subclasses.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreativeSetError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CreativeSetError";

  /**
   * @access public
   * @var tnsCreativeSetErrorReason
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

if (!class_exists("CustomCreativeError", FALSE)) {
/**
 * Lists all errors associated with custom creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CustomCreativeError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CustomCreativeError";

  /**
   * @access public
   * @var tnsCustomCreativeErrorReason
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
 * @subpackage v201302
 */
class Date {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class DfpDateTime {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("EntityLimitReachedError", FALSE)) {
/**
 * An error that occurs when creating an entity if the limit on the number of allowed entities for
 * a network has already been reached.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class EntityLimitReachedError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "EntityLimitReachedError";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("FeatureError", FALSE)) {
/**
 * Errors related to feature management.  If you attempt using a feature that is not available to
 * the current network you'll receive a FeatureError with the missing feature as the trigger.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class FeatureError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("FileError", FALSE)) {
/**
 * A list of all errors to be used for problems related to files.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class FileError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "FileError";

  /**
   * @access public
   * @var tnsFileErrorReason
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

if (!class_exists("ImageError", FALSE)) {
/**
 * Lists all errors associated with images.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class ImageError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "ImageError";

  /**
   * @access public
   * @var tnsImageErrorReason
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
 * @subpackage v201302
 */
class InternalApiError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("InvalidUrlError", FALSE)) {
/**
 * Lists all errors associated with URLs.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class InvalidUrlError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "InvalidUrlError";

  /**
   * @access public
   * @var tnsInvalidUrlErrorReason
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

if (!class_exists("LabelEntityAssociationError", FALSE)) {
/**
 * Errors specific to creating label entity associations.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LabelEntityAssociationError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LabelEntityAssociationError";

  /**
   * @access public
   * @var tnsLabelEntityAssociationErrorReason
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

if (!class_exists("LineItemCreativeAssociationAction", FALSE)) {
/**
 * Represents the actions that can be performed on
 * {@link LineItemCreativeAssociation} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociationAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemCreativeAssociationAction";

  /**
   * @access public
   * @var string
   */
  public $LineItemCreativeAssociationActionType;
  private $_parameterMap = array(
    "LineItemCreativeAssociationAction.Type" => "LineItemCreativeAssociationActionType",
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

  public function __construct($LineItemCreativeAssociationActionType = null) {
    $this->LineItemCreativeAssociationActionType = $LineItemCreativeAssociationActionType;
  }

}}

if (!class_exists("LineItemCreativeAssociation", FALSE)) {
/**
 * A {@code LineItemCreativeAssociation} associates a {@link Creative} or {@link CreativeSet} with a
 * {@link LineItem} so that the creative can be served in ad units targeted by the line item.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemCreativeAssociation";

  /**
   * @access public
   * @var integer
   */
  public $lineItemId;

  /**
   * @access public
   * @var integer
   */
  public $creativeId;

  /**
   * @access public
   * @var integer
   */
  public $creativeSetId;

  /**
   * @access public
   * @var double
   */
  public $manualCreativeRotationWeight;

  /**
   * @access public
   * @var integer
   */
  public $sequentialCreativeRotationIndex;

  /**
   * @access public
   * @var DateTime
   */
  public $startDateTime;

  /**
   * @access public
   * @var tnsStartDateTimeType
   */
  public $startDateTimeType;

  /**
   * @access public
   * @var DateTime
   */
  public $endDateTime;

  /**
   * @access public
   * @var string
   */
  public $destinationUrl;

  /**
   * @access public
   * @var Size[]
   */
  public $sizes;

  /**
   * @access public
   * @var tnsLineItemCreativeAssociationStatus
   */
  public $status;

  /**
   * @access public
   * @var LineItemCreativeAssociationStats
   */
  public $stats;

  /**
   * @access public
   * @var DateTime
   */
  public $lastModifiedDateTime;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($lineItemId = null, $creativeId = null, $creativeSetId = null, $manualCreativeRotationWeight = null, $sequentialCreativeRotationIndex = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $destinationUrl = null, $sizes = null, $status = null, $stats = null, $lastModifiedDateTime = null) {
    $this->lineItemId = $lineItemId;
    $this->creativeId = $creativeId;
    $this->creativeSetId = $creativeSetId;
    $this->manualCreativeRotationWeight = $manualCreativeRotationWeight;
    $this->sequentialCreativeRotationIndex = $sequentialCreativeRotationIndex;
    $this->startDateTime = $startDateTime;
    $this->startDateTimeType = $startDateTimeType;
    $this->endDateTime = $endDateTime;
    $this->destinationUrl = $destinationUrl;
    $this->sizes = $sizes;
    $this->status = $status;
    $this->stats = $stats;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
  }

}}

if (!class_exists("LineItemCreativeAssociationError", FALSE)) {
/**
 * Lists all errors associated with line item-to-creative association dates.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociationError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemCreativeAssociationError";

  /**
   * @access public
   * @var tnsLineItemCreativeAssociationErrorReason
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

if (!class_exists("LineItemCreativeAssociationOperationError", FALSE)) {
/**
 * Lists all errors for executing operations on
 * line item-to-creative associations
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociationOperationError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemCreativeAssociationOperationError";

  /**
   * @access public
   * @var tnsLineItemCreativeAssociationOperationErrorReason
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

if (!class_exists("LineItemCreativeAssociationPage", FALSE)) {
/**
 * Captures a page of {@link LineItemCreativeAssociation} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociationPage {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemCreativeAssociationPage";

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
   * @var LineItemCreativeAssociation[]
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

if (!class_exists("LineItemCreativeAssociationStats", FALSE)) {
/**
 * Contains statistics such as impressions, clicks delivered and cost
 * for {@link LineItemCreativeAssociation} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociationStats {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemCreativeAssociationStats";

  /**
   * @access public
   * @var Stats
   */
  public $stats;

  /**
   * @access public
   * @var Long_StatsMapEntry[]
   */
  public $creativeSetStats;

  /**
   * @access public
   * @var Money
   */
  public $costInOrderCurrency;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($stats = null, $creativeSetStats = null, $costInOrderCurrency = null) {
    $this->stats = $stats;
    $this->creativeSetStats = $creativeSetStats;
    $this->costInOrderCurrency = $costInOrderCurrency;
  }

}}

if (!class_exists("LineItemError", FALSE)) {
/**
 * A catch-all error that lists all generic errors associated with LineItem.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemError";

  /**
   * @access public
   * @var tnsLineItemErrorReason
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

if (!class_exists("Long_StatsMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Long
 * and value of type Stats.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class Long_StatsMapEntry {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "Long_StatsMapEntry";

  /**
   * @access public
   * @var integer
   */
  public $key;

  /**
   * @access public
   * @var Stats
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

if (!class_exists("Money", FALSE)) {
/**
 * Represents a money amount.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class Money {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "Money";

  /**
   * @access public
   * @var string
   */
  public $currencyCode;

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

  public function __construct($currencyCode = null, $microAmount = null) {
    $this->currencyCode = $currencyCode;
    $this->microAmount = $microAmount;
  }

}}

if (!class_exists("NotNullError", FALSE)) {
/**
 * Caused by supplying a null value for an attribute that cannot be null.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class NotNullError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("NullError", FALSE)) {
/**
 * Errors associated with violation of a NOT NULL check.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class NullError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("DfpOAuth", FALSE)) {
/**
 * The credentials for the {@code OAuth} authentication protocol.
 * 
 * See {@link http://oauth.net/}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DfpOAuth extends Authentication {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class ParseError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class PermissionError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class PublisherQueryLanguageContextError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class PublisherQueryLanguageSyntaxError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class QuotaError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("RangeError", FALSE)) {
/**
 * A list of all errors associated with the Range constraint.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RangeError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("RequiredCollectionError", FALSE)) {
/**
 * A list of all errors to be used for validating sizes of collections.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RequiredCollectionError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "RequiredCollectionError";

  /**
   * @access public
   * @var tnsRequiredCollectionErrorReason
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
 * @subpackage v201302
 */
class RequiredError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("RequiredNumberError", FALSE)) {
/**
 * A list of all errors to be used in conjunction with required number
 * validators.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RequiredNumberError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "RequiredNumberError";

  /**
   * @access public
   * @var tnsRequiredNumberErrorReason
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

if (!class_exists("RequiredSizeError", FALSE)) {
/**
 * A list of all errors to be used for validating {@link Size}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RequiredSizeError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "RequiredSizeError";

  /**
   * @access public
   * @var tnsRequiredSizeErrorReason
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

if (!class_exists("RichMediaStudioCreativeError", FALSE)) {
/**
 * Lists all errors associated with Rich Media Studio creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RichMediaStudioCreativeError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "RichMediaStudioCreativeError";

  /**
   * @access public
   * @var tnsRichMediaStudioCreativeErrorReason
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

if (!class_exists("ServerError", FALSE)) {
/**
 * Errors related to the server.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class ServerError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("Size", FALSE)) {
/**
 * Represents the dimensions of an {@link AdUnit}, {@link LineItem} or {@link Creative}.
 * <p>
 * For interstitial size (out-of-page), {@code Size} must be 1x1.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class Size {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "Size";

  /**
   * @access public
   * @var integer
   */
  public $width;

  /**
   * @access public
   * @var integer
   */
  public $height;

  /**
   * @access public
   * @var boolean
   */
  public $isAspectRatio;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($width = null, $height = null, $isAspectRatio = null) {
    $this->width = $width;
    $this->height = $height;
    $this->isAspectRatio = $isAspectRatio;
  }

}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class SoapRequestHeader {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class SoapResponseHeader {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class Statement {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class StatementError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("Stats", FALSE)) {
/**
 * {@code Stats} contains trafficking statistics for {@link LineItem} and
 * {@link LineItemCreativeAssociation} objects
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class Stats {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "Stats";

  /**
   * @access public
   * @var integer
   */
  public $impressionsDelivered;

  /**
   * @access public
   * @var integer
   */
  public $clicksDelivered;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($impressionsDelivered = null, $clicksDelivered = null) {
    $this->impressionsDelivered = $impressionsDelivered;
    $this->clicksDelivered = $clicksDelivered;
  }

}}

if (!class_exists("StringLengthError", FALSE)) {
/**
 * Errors for Strings which do not meet given length constraints.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class StringLengthError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("String_ValueMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type String
 * and value of type Value.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class String_ValueMapEntry {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("TemplateInstantiatedCreativeError", FALSE)) {
/**
 * Lists all errors associated with template instantiated creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class TemplateInstantiatedCreativeError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "TemplateInstantiatedCreativeError";

  /**
   * @access public
   * @var tnsTemplateInstantiatedCreativeErrorReason
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
 * @subpackage v201302
 */
class TypeError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class UniqueError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class UpdateResult {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("Value", FALSE)) {
/**
 * {@code Value} represents a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("AdSenseAccountErrorReason", FALSE)) {
/**
 * An error occured while trying to associate an AdSense account with GFP. Unable to create an
 * association with AdSense or Ad Exchange account.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdSenseAccountErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdSenseAccountError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("ApiVersionErrorReason", FALSE)) {
/**
 * Indicates that the operation is not allowed in the version the request
 * was made in.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class ApiVersionErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("AssetErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AssetErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AssetError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("AudienceExtensionErrorReason", FALSE)) {
/**
 * Specific audience extension error reasons.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AudienceExtensionErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AudienceExtensionError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * @subpackage v201302
 */
class AuthenticationErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class CommonErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("CreativeAssetMacroErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreativeAssetMacroErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CreativeAssetMacroError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CreativeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreativeErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CreativeError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CreativeSetErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreativeSetErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CreativeSetError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CustomCreativeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CustomCreativeErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CustomCreativeError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * @subpackage v201302
 */
class FeatureErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("FileErrorReason", FALSE)) {
/**
 * The provided byte array is empty.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class FileErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "FileError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("ImageErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class ImageErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "ImageError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * @subpackage v201302
 */
class InternalApiErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("InvalidUrlErrorReason", FALSE)) {
/**
 * The URL contains invalid characters.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class InvalidUrlErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "InvalidUrlError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("LabelEntityAssociationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LabelEntityAssociationErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LabelEntityAssociationError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("LineItemCreativeAssociationStatus", FALSE)) {
/**
 * Describes the status of the association.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociationStatus {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemCreativeAssociation.Status";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("LineItemCreativeAssociationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociationErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemCreativeAssociationError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("LineItemCreativeAssociationOperationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociationOperationErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemCreativeAssociationOperationError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("LineItemErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "LineItemError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * @subpackage v201302
 */
class NotNullErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("NullErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class NullErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("ParseErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class ParseErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class PermissionErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class PublisherQueryLanguageContextErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class PublisherQueryLanguageSyntaxErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class QuotaErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("RangeErrorReason", FALSE)) {
/**
 * The value returned if the actual value is not exposed by the requested API version.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RangeErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("RequiredCollectionErrorReason", FALSE)) {
/**
 * A required collection is missing.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RequiredCollectionErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "RequiredCollectionError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * @subpackage v201302
 */
class RequiredErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("RequiredNumberErrorReason", FALSE)) {
/**
 * Describes reasons for a number to be invalid.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RequiredNumberErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "RequiredNumberError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("RequiredSizeErrorReason", FALSE)) {
/**
 * {@link Creative#size} or {@link LineItem#creativeSizes} is
 * missing.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RequiredSizeErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "RequiredSizeError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("RichMediaStudioCreativeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class RichMediaStudioCreativeErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "RichMediaStudioCreativeError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * @subpackage v201302
 */
class ServerErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("StartDateTimeType", FALSE)) {
/**
 * Specifies the start type to use for an entity with a start date time field.
 * For example, a {@link LineItem} or {@link LineItemCreativeAssociation}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class StartDateTimeType {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "StartDateTimeType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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
 * @subpackage v201302
 */
class StatementErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("StringLengthErrorReason", FALSE)) {
/**
 * The value returned if the actual value is not exposed by the requested API version.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class StringLengthErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("TemplateInstantiatedCreativeErrorReason", FALSE)) {
/**
 * The reason for the error
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class TemplateInstantiatedCreativeErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "TemplateInstantiatedCreativeError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CreateLineItemCreativeAssociation", FALSE)) {
/**
 * Creates a new {@link LineItemCreativeAssociation}.
 * 
 * The following fields are required:
 * <ul>
 * <li>{@link LineItemCreativeAssociation#creativeId}</li>
 * <li>{@link LineItemCreativeAssociation#lineItemId}</li>
 * </ul>
 * 
 * @param lineItemCreativeAssociation the line item creative association to
 * create
 * @return the new line item creative association with its ID set
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreateLineItemCreativeAssociation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociation
   */
  public $lineItemCreativeAssociation;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($lineItemCreativeAssociation = null) {
    $this->lineItemCreativeAssociation = $lineItemCreativeAssociation;
  }

}}

if (!class_exists("CreateLineItemCreativeAssociationResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreateLineItemCreativeAssociationResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociation
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

if (!class_exists("CreateLineItemCreativeAssociations", FALSE)) {
/**
 * Creates new {@link LineItemCreativeAssociation} objects
 * 
 * @param lineItemCreativeAssociations the line item creative associations to
 * create
 * @return the created line item creative associations with their IDs filled
 * in
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreateLineItemCreativeAssociations {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociation[]
   */
  public $lineItemCreativeAssociations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($lineItemCreativeAssociations = null) {
    $this->lineItemCreativeAssociations = $lineItemCreativeAssociations;
  }

}}

if (!class_exists("CreateLineItemCreativeAssociationsResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreateLineItemCreativeAssociationsResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociation[]
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

if (!class_exists("GetLineItemCreativeAssociation", FALSE)) {
/**
 * Returns the {@link LineItemCreativeAssociation} uniquely identified by the
 * given line item and creative IDs.
 * 
 * @param lineItemId the ID of the line item, which must already exist
 * @param creativeId the ID of the creative, which must already exist
 * @return the {@code LineItemCreativeAssociation} uniquely identified by the
 * line item and creative IDs
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class GetLineItemCreativeAssociation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var integer
   */
  public $lineItemId;

  /**
   * @access public
   * @var integer
   */
  public $creativeId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($lineItemId = null, $creativeId = null) {
    $this->lineItemId = $lineItemId;
    $this->creativeId = $creativeId;
  }

}}

if (!class_exists("GetLineItemCreativeAssociationResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class GetLineItemCreativeAssociationResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociation
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

if (!class_exists("GetLineItemCreativeAssociationsByStatement", FALSE)) {
/**
 * Gets a {@link LineItemCreativeAssociationPage} of
 * {@link LineItemCreativeAssociation} objects that satisfy the given
 * {@link Statement#query}. The following fields are supported for filtering:
 * 
 * <table>
 * <tr>
 * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
 * </tr>
 * <tr>
 * <td>{@code creativeId}</td>
 * <td>{@link LineItemCreativeAssociation#creativeId}</td>
 * </tr>
 * <tr>
 * <td>{@code manualCreativeRotationWeight}</td>
 * <td>{@link LineItemCreativeAssociation#manualCreativeRotationWeight}</td>
 * </tr>
 * <tr>
 * <td>{@code destinationUrl}</td>
 * <td>{@link LineItemCreativeAssociation#destinationUrl}</td>
 * </tr>
 * <tr>
 * <td>{@code lineItemId}</td>
 * <td>{@link LineItemCreativeAssociation#lineItemId}</td>
 * </tr>
 * <tr>
 * <td>{@code status}</td>
 * <td>{@link LineItemCreativeAssociation#status}</td>
 * </tr>
 * <tr>
 * <td>{@code lastModifiedDateTime}</td>
 * <td>{@link LineItemCreativeAssociation#lastModifiedDateTime}</td>
 * </tr>
 * </table>
 * 
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of line item creative associations
 * @return the line item creative associations that match the given filter
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class GetLineItemCreativeAssociationsByStatement {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("GetLineItemCreativeAssociationsByStatementResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class GetLineItemCreativeAssociationsByStatementResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociationPage
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

if (!class_exists("GetPreviewUrl", FALSE)) {
/**
 * Returns an insite preview URL that references the specified site URL with
 * the specified creative from the association served to it. For Creative Set
 * previewing you may specify the master creative Id.
 * 
 * @param lineItemId the ID of the line item, which must already exist
 * @param creativeId the ID of the creative, which must already exist
 * @param siteUrl the URL of the site that the creative should be previewed in
 * @return a URL that references the specified site URL with the specified
 * creative served to it
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class GetPreviewUrl {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var integer
   */
  public $lineItemId;

  /**
   * @access public
   * @var integer
   */
  public $creativeId;

  /**
   * @access public
   * @var string
   */
  public $siteUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($lineItemId = null, $creativeId = null, $siteUrl = null) {
    $this->lineItemId = $lineItemId;
    $this->creativeId = $creativeId;
    $this->siteUrl = $siteUrl;
  }

}}

if (!class_exists("GetPreviewUrlResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class GetPreviewUrlResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var string
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

if (!class_exists("PerformLineItemCreativeAssociationAction", FALSE)) {
/**
 * Performs actions on {@link LineItemCreativeAssociation} objects that match
 * the given {@link Statement#query}.
 * 
 * @param lineItemCreativeAssociationAction the action to perform
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of line item creative associations
 * @return the result of the action performed
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class PerformLineItemCreativeAssociationAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociationAction
   */
  public $lineItemCreativeAssociationAction;

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

  public function __construct($lineItemCreativeAssociationAction = null, $filterStatement = null) {
    $this->lineItemCreativeAssociationAction = $lineItemCreativeAssociationAction;
    $this->filterStatement = $filterStatement;
  }

}}

if (!class_exists("PerformLineItemCreativeAssociationActionResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class PerformLineItemCreativeAssociationActionResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("UpdateLineItemCreativeAssociation", FALSE)) {
/**
 * Updates the specified {@link LineItemCreativeAssociation}.
 * 
 * @param lineItemCreativeAssociation the line item creative association to
 * update
 * @return the updated line item creative association
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class UpdateLineItemCreativeAssociation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociation
   */
  public $lineItemCreativeAssociation;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($lineItemCreativeAssociation = null) {
    $this->lineItemCreativeAssociation = $lineItemCreativeAssociation;
  }

}}

if (!class_exists("UpdateLineItemCreativeAssociationResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class UpdateLineItemCreativeAssociationResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociation
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

if (!class_exists("UpdateLineItemCreativeAssociations", FALSE)) {
/**
 * Updates the specified {@link LineItemCreativeAssociation} objects
 * 
 * @param lineItemCreativeAssociations the line item creative associations to
 * update
 * @return the updated line item creative associations
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class UpdateLineItemCreativeAssociations {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociation[]
   */
  public $lineItemCreativeAssociations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($lineItemCreativeAssociations = null) {
    $this->lineItemCreativeAssociations = $lineItemCreativeAssociations;
  }

}}

if (!class_exists("UpdateLineItemCreativeAssociationsResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class UpdateLineItemCreativeAssociationsResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var LineItemCreativeAssociation[]
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

if (!class_exists("ActivateLineItemCreativeAssociations", FALSE)) {
/**
 * The action used for activating {@link LineItemCreativeAssociation} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class ActivateLineItemCreativeAssociations extends LineItemCreativeAssociationAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "ActivateLineItemCreativeAssociations";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($LineItemCreativeAssociationActionType = null) {
    parent::__construct();
    $this->LineItemCreativeAssociationActionType = $LineItemCreativeAssociationActionType;
  }

}}

if (!class_exists("AdSenseAccountError", FALSE)) {
/**
 * Error for AdSense related API calls.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdSenseAccountError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdSenseAccountError";

  /**
   * @access public
   * @var tnsAdSenseAccountErrorReason
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
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class ApiException extends ApplicationException {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class BooleanValue extends Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class DateTimeValue extends Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("DeactivateLineItemCreativeAssociations", FALSE)) {
/**
 * The action used for deactivating {@link LineItemCreativeAssociation} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DeactivateLineItemCreativeAssociations extends LineItemCreativeAssociationAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "DeactivateLineItemCreativeAssociations";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($LineItemCreativeAssociationActionType = null) {
    parent::__construct();
    $this->LineItemCreativeAssociationActionType = $LineItemCreativeAssociationActionType;
  }

}}

if (!class_exists("NumberValue", FALSE)) {
/**
 * Contains a numeric value.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class NumberValue extends Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
 * @subpackage v201302
 */
class TextValue extends Value {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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

if (!class_exists("LineItemCreativeAssociationService", FALSE)) {
/**
 * LineItemCreativeAssociationService
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class LineItemCreativeAssociationService extends DfpSoapClient {

  const SERVICE_NAME = "LineItemCreativeAssociationService";
  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const ENDPOINT = "https://www.google.com/apis/ads/publisher/v201302/LineItemCreativeAssociationService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://www.google.com/apis/ads/publisher/v201302/LineItemCreativeAssociationService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "ActivateLineItemCreativeAssociations" => "ActivateLineItemCreativeAssociations",
    "AdSenseAccountError" => "AdSenseAccountError",
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApiVersionError" => "ApiVersionError",
    "ApplicationException" => "ApplicationException",
    "AssetError" => "AssetError",
    "AudienceExtensionError" => "AudienceExtensionError",
    "Authentication" => "Authentication",
    "AuthenticationError" => "AuthenticationError",
    "BooleanValue" => "BooleanValue",
    "ClientLogin" => "ClientLogin",
    "CommonError" => "CommonError",
    "CreativeAssetMacroError" => "CreativeAssetMacroError",
    "CreativeError" => "CreativeError",
    "CreativeSetError" => "CreativeSetError",
    "CustomCreativeError" => "CustomCreativeError",
    "Date" => "Date",
    "DateTime" => "DfpDateTime",
    "DateTimeValue" => "DateTimeValue",
    "DeactivateLineItemCreativeAssociations" => "DeactivateLineItemCreativeAssociations",
    "EntityLimitReachedError" => "EntityLimitReachedError",
    "FeatureError" => "FeatureError",
    "FileError" => "FileError",
    "ImageError" => "ImageError",
    "InternalApiError" => "InternalApiError",
    "InvalidUrlError" => "InvalidUrlError",
    "LabelEntityAssociationError" => "LabelEntityAssociationError",
    "LineItemCreativeAssociationAction" => "LineItemCreativeAssociationAction",
    "LineItemCreativeAssociation" => "LineItemCreativeAssociation",
    "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
    "LineItemCreativeAssociationOperationError" => "LineItemCreativeAssociationOperationError",
    "LineItemCreativeAssociationPage" => "LineItemCreativeAssociationPage",
    "LineItemCreativeAssociationStats" => "LineItemCreativeAssociationStats",
    "LineItemError" => "LineItemError",
    "Long_StatsMapEntry" => "Long_StatsMapEntry",
    "Money" => "Money",
    "NotNullError" => "NotNullError",
    "NullError" => "NullError",
    "NumberValue" => "NumberValue",
    "OAuth" => "DfpOAuth",
    "ParseError" => "ParseError",
    "PermissionError" => "PermissionError",
    "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
    "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
    "QuotaError" => "QuotaError",
    "RangeError" => "RangeError",
    "RequiredCollectionError" => "RequiredCollectionError",
    "RequiredError" => "RequiredError",
    "RequiredNumberError" => "RequiredNumberError",
    "RequiredSizeError" => "RequiredSizeError",
    "RichMediaStudioCreativeError" => "RichMediaStudioCreativeError",
    "ServerError" => "ServerError",
    "Size" => "Size",
    "SoapRequestHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "Statement" => "Statement",
    "StatementError" => "StatementError",
    "Stats" => "Stats",
    "StringLengthError" => "StringLengthError",
    "String_ValueMapEntry" => "String_ValueMapEntry",
    "TemplateInstantiatedCreativeError" => "TemplateInstantiatedCreativeError",
    "TextValue" => "TextValue",
    "TypeError" => "TypeError",
    "UniqueError" => "UniqueError",
    "UpdateResult" => "UpdateResult",
    "Value" => "Value",
    "AdSenseAccountError.Reason" => "AdSenseAccountErrorReason",
    "ApiVersionError.Reason" => "ApiVersionErrorReason",
    "AssetError.Reason" => "AssetErrorReason",
    "AudienceExtensionError.Reason" => "AudienceExtensionErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "CommonError.Reason" => "CommonErrorReason",
    "CreativeAssetMacroError.Reason" => "CreativeAssetMacroErrorReason",
    "CreativeError.Reason" => "CreativeErrorReason",
    "CreativeSetError.Reason" => "CreativeSetErrorReason",
    "CustomCreativeError.Reason" => "CustomCreativeErrorReason",
    "FeatureError.Reason" => "FeatureErrorReason",
    "FileError.Reason" => "FileErrorReason",
    "ImageError.Reason" => "ImageErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
    "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
    "LineItemCreativeAssociation.Status" => "LineItemCreativeAssociationStatus",
    "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
    "LineItemCreativeAssociationOperationError.Reason" => "LineItemCreativeAssociationOperationErrorReason",
    "LineItemError.Reason" => "LineItemErrorReason",
    "NotNullError.Reason" => "NotNullErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "ParseError.Reason" => "ParseErrorReason",
    "PermissionError.Reason" => "PermissionErrorReason",
    "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
    "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
    "RequiredSizeError.Reason" => "RequiredSizeErrorReason",
    "RichMediaStudioCreativeError.Reason" => "RichMediaStudioCreativeErrorReason",
    "ServerError.Reason" => "ServerErrorReason",
    "StartDateTimeType" => "StartDateTimeType",
    "StatementError.Reason" => "StatementErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "TemplateInstantiatedCreativeError.Reason" => "TemplateInstantiatedCreativeErrorReason",
    "createLineItemCreativeAssociation" => "CreateLineItemCreativeAssociation",
    "createLineItemCreativeAssociationResponse" => "CreateLineItemCreativeAssociationResponse",
    "createLineItemCreativeAssociations" => "CreateLineItemCreativeAssociations",
    "createLineItemCreativeAssociationsResponse" => "CreateLineItemCreativeAssociationsResponse",
    "getLineItemCreativeAssociation" => "GetLineItemCreativeAssociation",
    "getLineItemCreativeAssociationResponse" => "GetLineItemCreativeAssociationResponse",
    "getLineItemCreativeAssociationsByStatement" => "GetLineItemCreativeAssociationsByStatement",
    "getLineItemCreativeAssociationsByStatementResponse" => "GetLineItemCreativeAssociationsByStatementResponse",
    "getPreviewUrl" => "GetPreviewUrl",
    "getPreviewUrlResponse" => "GetPreviewUrlResponse",
    "performLineItemCreativeAssociationAction" => "PerformLineItemCreativeAssociationAction",
    "performLineItemCreativeAssociationActionResponse" => "PerformLineItemCreativeAssociationActionResponse",
    "updateLineItemCreativeAssociation" => "UpdateLineItemCreativeAssociation",
    "updateLineItemCreativeAssociationResponse" => "UpdateLineItemCreativeAssociationResponse",
    "updateLineItemCreativeAssociations" => "UpdateLineItemCreativeAssociations",
    "updateLineItemCreativeAssociationsResponse" => "UpdateLineItemCreativeAssociationsResponse",
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
   * Creates a new {@link LineItemCreativeAssociation}.
   * 
   * The following fields are required:
   * <ul>
   * <li>{@link LineItemCreativeAssociation#creativeId}</li>
   * <li>{@link LineItemCreativeAssociation#lineItemId}</li>
   * </ul>
   * 
   * @param lineItemCreativeAssociation the line item creative association to
   * create
   * @return the new line item creative association with its ID set
   */
  public function createLineItemCreativeAssociation($lineItemCreativeAssociation) {
    $args = new CreateLineItemCreativeAssociation($lineItemCreativeAssociation);
    $result = $this->__soapCall("createLineItemCreativeAssociation", array($args));
    return $result->rval;
  }
  /**
   * Creates new {@link LineItemCreativeAssociation} objects
   * 
   * @param lineItemCreativeAssociations the line item creative associations to
   * create
   * @return the created line item creative associations with their IDs filled
   * in
   */
  public function createLineItemCreativeAssociations($lineItemCreativeAssociations) {
    $args = new CreateLineItemCreativeAssociations($lineItemCreativeAssociations);
    $result = $this->__soapCall("createLineItemCreativeAssociations", array($args));
    return $result->rval;
  }
  /**
   * Returns the {@link LineItemCreativeAssociation} uniquely identified by the
   * given line item and creative IDs.
   * 
   * @param lineItemId the ID of the line item, which must already exist
   * @param creativeId the ID of the creative, which must already exist
   * @return the {@code LineItemCreativeAssociation} uniquely identified by the
   * line item and creative IDs
   */
  public function getLineItemCreativeAssociation($lineItemId, $creativeId) {
    $args = new GetLineItemCreativeAssociation($lineItemId, $creativeId);
    $result = $this->__soapCall("getLineItemCreativeAssociation", array($args));
    return $result->rval;
  }
  /**
   * Gets a {@link LineItemCreativeAssociationPage} of
   * {@link LineItemCreativeAssociation} objects that satisfy the given
   * {@link Statement#query}. The following fields are supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code creativeId}</td>
   * <td>{@link LineItemCreativeAssociation#creativeId}</td>
   * </tr>
   * <tr>
   * <td>{@code manualCreativeRotationWeight}</td>
   * <td>{@link LineItemCreativeAssociation#manualCreativeRotationWeight}</td>
   * </tr>
   * <tr>
   * <td>{@code destinationUrl}</td>
   * <td>{@link LineItemCreativeAssociation#destinationUrl}</td>
   * </tr>
   * <tr>
   * <td>{@code lineItemId}</td>
   * <td>{@link LineItemCreativeAssociation#lineItemId}</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link LineItemCreativeAssociation#status}</td>
   * </tr>
   * <tr>
   * <td>{@code lastModifiedDateTime}</td>
   * <td>{@link LineItemCreativeAssociation#lastModifiedDateTime}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of line item creative associations
   * @return the line item creative associations that match the given filter
   */
  public function getLineItemCreativeAssociationsByStatement($filterStatement) {
    $args = new GetLineItemCreativeAssociationsByStatement($filterStatement);
    $result = $this->__soapCall("getLineItemCreativeAssociationsByStatement", array($args));
    return $result->rval;
  }
  /**
   * Returns an insite preview URL that references the specified site URL with
   * the specified creative from the association served to it. For Creative Set
   * previewing you may specify the master creative Id.
   * 
   * @param lineItemId the ID of the line item, which must already exist
   * @param creativeId the ID of the creative, which must already exist
   * @param siteUrl the URL of the site that the creative should be previewed in
   * @return a URL that references the specified site URL with the specified
   * creative served to it
   */
  public function getPreviewUrl($lineItemId, $creativeId, $siteUrl) {
    $args = new GetPreviewUrl($lineItemId, $creativeId, $siteUrl);
    $result = $this->__soapCall("getPreviewUrl", array($args));
    return $result->rval;
  }
  /**
   * Performs actions on {@link LineItemCreativeAssociation} objects that match
   * the given {@link Statement#query}.
   * 
   * @param lineItemCreativeAssociationAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of line item creative associations
   * @return the result of the action performed
   */
  public function performLineItemCreativeAssociationAction($lineItemCreativeAssociationAction, $filterStatement) {
    $args = new PerformLineItemCreativeAssociationAction($lineItemCreativeAssociationAction, $filterStatement);
    $result = $this->__soapCall("performLineItemCreativeAssociationAction", array($args));
    return $result->rval;
  }
  /**
   * Updates the specified {@link LineItemCreativeAssociation}.
   * 
   * @param lineItemCreativeAssociation the line item creative association to
   * update
   * @return the updated line item creative association
   */
  public function updateLineItemCreativeAssociation($lineItemCreativeAssociation) {
    $args = new UpdateLineItemCreativeAssociation($lineItemCreativeAssociation);
    $result = $this->__soapCall("updateLineItemCreativeAssociation", array($args));
    return $result->rval;
  }
  /**
   * Updates the specified {@link LineItemCreativeAssociation} objects
   * 
   * @param lineItemCreativeAssociations the line item creative associations to
   * update
   * @return the updated line item creative associations
   */
  public function updateLineItemCreativeAssociations($lineItemCreativeAssociations) {
    $args = new UpdateLineItemCreativeAssociations($lineItemCreativeAssociations);
    $result = $this->__soapCall("updateLineItemCreativeAssociations", array($args));
    return $result->rval;
  }
}}