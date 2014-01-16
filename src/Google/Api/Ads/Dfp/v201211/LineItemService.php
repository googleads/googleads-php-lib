<?php
/**
 * Contains all client objects for the LineItemService service.
 *
 * PHP version 5
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Vincent Tsao
 */

/** Required classes. **/
require_once "Google/Api/Ads/Dfp/Lib/DfpSoapClient.php";

if (!class_exists("AdUnitTargeting", FALSE)) {
/**
 * Represents targeted or excluded ad units.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class AdUnitTargeting {
  /**
   * @access public
   * @var string
   */
  public $adUnitId;

  /**
   * @access public
   * @var boolean
   */
  public $includeDescendants;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdUnitTargeting";
  }

  public function __construct($adUnitId = NULL, $includeDescendants = NULL) {
    $this->adUnitId = $adUnitId;
    $this->includeDescendants = $includeDescendants;
  }
}}

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

  private $_parameterMap = array (
    "ApiError.Type" => "ApiErrorType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("TechnologyTargeting", FALSE)) {
/**
 * Provides {@link LineItem} objects the ability to target or exclude
 * technologies.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TechnologyTargeting {
  /**
   * @access public
   * @var BandwidthGroupTargeting
   */
  public $bandwidthGroupTargeting;

  /**
   * @access public
   * @var BrowserTargeting
   */
  public $browserTargeting;

  /**
   * @access public
   * @var BrowserLanguageTargeting
   */
  public $browserLanguageTargeting;

  /**
   * @access public
   * @var DeviceCapabilityTargeting
   */
  public $deviceCapabilityTargeting;

  /**
   * @access public
   * @var DeviceCategoryTargeting
   */
  public $deviceCategoryTargeting;

  /**
   * @access public
   * @var DeviceManufacturerTargeting
   */
  public $deviceManufacturerTargeting;

  /**
   * @access public
   * @var MobileCarrierTargeting
   */
  public $mobileCarrierTargeting;

  /**
   * @access public
   * @var MobileDeviceTargeting
   */
  public $mobileDeviceTargeting;

  /**
   * @access public
   * @var MobileDeviceSubmodelTargeting
   */
  public $mobileDeviceSubmodelTargeting;

  /**
   * @access public
   * @var OperatingSystemTargeting
   */
  public $operatingSystemTargeting;

  /**
   * @access public
   * @var OperatingSystemVersionTargeting
   */
  public $operatingSystemVersionTargeting;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TechnologyTargeting";
  }

  public function __construct($bandwidthGroupTargeting = NULL, $browserTargeting = NULL, $browserLanguageTargeting = NULL, $deviceCapabilityTargeting = NULL, $deviceCategoryTargeting = NULL, $deviceManufacturerTargeting = NULL, $mobileCarrierTargeting = NULL, $mobileDeviceTargeting = NULL, $mobileDeviceSubmodelTargeting = NULL, $operatingSystemTargeting = NULL, $operatingSystemVersionTargeting = NULL) {
    $this->bandwidthGroupTargeting = $bandwidthGroupTargeting;
    $this->browserTargeting = $browserTargeting;
    $this->browserLanguageTargeting = $browserLanguageTargeting;
    $this->deviceCapabilityTargeting = $deviceCapabilityTargeting;
    $this->deviceCategoryTargeting = $deviceCategoryTargeting;
    $this->deviceManufacturerTargeting = $deviceManufacturerTargeting;
    $this->mobileCarrierTargeting = $mobileCarrierTargeting;
    $this->mobileDeviceTargeting = $mobileDeviceTargeting;
    $this->mobileDeviceSubmodelTargeting = $mobileDeviceSubmodelTargeting;
    $this->operatingSystemTargeting = $operatingSystemTargeting;
    $this->operatingSystemVersionTargeting = $operatingSystemVersionTargeting;
  }
}}

if (!class_exists("ApiVersionError", FALSE)) {
/**
 * Errors related to the usage of API versions.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ApiVersionError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiVersionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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

  private $_parameterMap = array (
    "ApplicationException.Type" => "ApplicationExceptionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApplicationException";
  }

  public function __construct($message = NULL, $ApplicationExceptionType = NULL) {
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("AppliedLabel", FALSE)) {
/**
 * Represents a {@link Label} that can be applied to an entity. To negate an
 * inherited label, create an {@code AppliedLabel} with {@code labelId} as the
 * inherited label's ID and {@code isNegated} set to true.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class AppliedLabel {
  /**
   * @access public
   * @var integer
   */
  public $labelId;

  /**
   * @access public
   * @var boolean
   */
  public $isNegated;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AppliedLabel";
  }

  public function __construct($labelId = NULL, $isNegated = NULL) {
    $this->labelId = $labelId;
    $this->isNegated = $isNegated;
  }
}}

if (!class_exists("AudienceExtensionError", FALSE)) {
/**
 * Errors associated with audience extension enabled line items
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class AudienceExtensionError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceExtensionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class Authentication {
  /**
   * @access public
   * @var string
   */
  public $AuthenticationType;

  private $_parameterMap = array (
    "Authentication.Type" => "AuthenticationType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Authentication";
  }

  public function __construct($AuthenticationType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("BandwidthGroupTargeting", FALSE)) {
/**
 * Represents bandwidth groups that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class BandwidthGroupTargeting {
  /**
   * @access public
   * @var boolean
   */
  public $isTargeted;

  /**
   * @access public
   * @var Technology[]
   */
  public $bandwidthGroups;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BandwidthGroupTargeting";
  }

  public function __construct($isTargeted = NULL, $bandwidthGroups = NULL) {
    $this->isTargeted = $isTargeted;
    $this->bandwidthGroups = $bandwidthGroups;
  }
}}

if (!class_exists("BaseCustomFieldValue", FALSE)) {
/**
 * The value of a {@link CustomField} for a particular entity.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class BaseCustomFieldValue {
  /**
   * @access public
   * @var integer
   */
  public $customFieldId;

  /**
   * @access public
   * @var string
   */
  public $BaseCustomFieldValueType;

  private $_parameterMap = array (
    "BaseCustomFieldValue.Type" => "BaseCustomFieldValueType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseCustomFieldValue";
  }

  public function __construct($customFieldId = NULL, $BaseCustomFieldValueType = NULL) {
    $this->customFieldId = $customFieldId;
    $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
  }
}}

if (!class_exists("BrowserLanguageTargeting", FALSE)) {
/**
 * Represents browser languages that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class BrowserLanguageTargeting {
  /**
   * @access public
   * @var boolean
   */
  public $isTargeted;

  /**
   * @access public
   * @var Technology[]
   */
  public $browserLanguages;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BrowserLanguageTargeting";
  }

  public function __construct($isTargeted = NULL, $browserLanguages = NULL) {
    $this->isTargeted = $isTargeted;
    $this->browserLanguages = $browserLanguages;
  }
}}

if (!class_exists("BrowserTargeting", FALSE)) {
/**
 * Represents browsers that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class BrowserTargeting {
  /**
   * @access public
   * @var boolean
   */
  public $isTargeted;

  /**
   * @access public
   * @var Technology[]
   */
  public $browsers;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BrowserTargeting";
  }

  public function __construct($isTargeted = NULL, $browsers = NULL) {
    $this->isTargeted = $isTargeted;
    $this->browsers = $browsers;
  }
}}

if (!class_exists("ClickTrackingLineItemError", FALSE)) {
/**
 * Click tracking is a special line item type with a number of unique errors as
 * described below.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ClickTrackingLineItemError extends ApiError {
  /**
   * @access public
   * @var tnsClickTrackingLineItemErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClickTrackingLineItemError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClientLogin";
  }

  public function __construct($token = NULL, $AuthenticationType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CommonError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CompanyCreditStatusError", FALSE)) {
/**
 * Lists all errors due to {@link Company#creditStatus}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CompanyCreditStatusError extends ApiError {
  /**
   * @access public
   * @var tnsCompanyCreditStatusErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CompanyCreditStatusError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ContentTargeting", FALSE)) {
/**
 * Used to target {@link LineItem}s to specific videos on a publisher's site.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ContentTargeting {
  /**
   * @access public
   * @var integer[]
   */
  public $targetedContentIds;

  /**
   * @access public
   * @var integer[]
   */
  public $excludedContentIds;

  /**
   * @access public
   * @var integer[]
   */
  public $targetedVideoCategoryIds;

  /**
   * @access public
   * @var integer[]
   */
  public $excludedVideoCategoryIds;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ContentTargeting";
  }

  public function __construct($targetedContentIds = NULL, $excludedContentIds = NULL, $targetedVideoCategoryIds = NULL, $excludedVideoCategoryIds = NULL) {
    $this->targetedContentIds = $targetedContentIds;
    $this->excludedContentIds = $excludedContentIds;
    $this->targetedVideoCategoryIds = $targetedVideoCategoryIds;
    $this->excludedVideoCategoryIds = $excludedVideoCategoryIds;
  }
}}

if (!class_exists("CreativePlaceholder", FALSE)) {
/**
 * A {@code CreativePlaceholder} describes a slot that a creative is expected to
 * fill. This is used primarily to help in forecasting, and also to validate
 * that the correct creatives are associated with the line item. A
 * {@code CreativePlaceholder} must contain a size, and it can optionally
 * contain companions. Companions are only valid if the line item's environment
 * type is {@link EnvironmentType#VIDEO_PLAYER}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CreativePlaceholder {
  /**
   * @access public
   * @var Size
   */
  public $size;

  /**
   * @access public
   * @var CreativePlaceholder[]
   */
  public $companions;

  /**
   * @access public
   * @var AppliedLabel[]
   */
  public $appliedLabels;

  /**
   * @access public
   * @var AppliedLabel[]
   */
  public $effectiveAppliedLabels;

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var integer
   */
  public $expectedCreativeCount;

  /**
   * @access public
   * @var tnsCreativeSizeType
   */
  public $creativeSizeType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativePlaceholder";
  }

  public function __construct($size = NULL, $companions = NULL, $appliedLabels = NULL, $effectiveAppliedLabels = NULL, $id = NULL, $expectedCreativeCount = NULL, $creativeSizeType = NULL) {
    $this->size = $size;
    $this->companions = $companions;
    $this->appliedLabels = $appliedLabels;
    $this->effectiveAppliedLabels = $effectiveAppliedLabels;
    $this->id = $id;
    $this->expectedCreativeCount = $expectedCreativeCount;
    $this->creativeSizeType = $creativeSizeType;
  }
}}

if (!class_exists("CustomFieldValue", FALSE)) {
/**
 * The value of a {@link CustomField} that does not have a {@link CustomField#dataType}
 * of {@link CustomFieldDataType#DROP_DOWN}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomFieldValue extends BaseCustomFieldValue {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomFieldValue";
  }

  public function __construct($value = NULL, $customFieldId = NULL, $BaseCustomFieldValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->customFieldId = $customFieldId;
    $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
  }
}}

if (!class_exists("CustomFieldValueError", FALSE)) {
/**
 * Errors specific to editing custom field values
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomFieldValueError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomFieldValueError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CustomTargetingError", FALSE)) {
/**
 * Lists all errors related to {@link CustomTargetingKey} and
 * {@link CustomTargetingValue} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsCustomTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CustomCriteriaNode", FALSE)) {
/**
 * A {@link CustomCriteriaNode} is a node in the custom targeting tree. A custom
 * criteria node can either be a {@link CustomCriteriaSet} (a non-leaf node) or
 * a {@link CustomCriteria} (a leaf node). The custom criteria targeting tree is
 * subject to the rules defined on {@link Targeting#customTargeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomCriteriaNode {
  /**
   * @access public
   * @var string
   */
  public $CustomCriteriaNodeType;

  private $_parameterMap = array (
    "CustomCriteriaNode.Type" => "CustomCriteriaNodeType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteriaNode";
  }

  public function __construct($CustomCriteriaNodeType = NULL) {
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("Date", FALSE)) {
/**
 * Represents a date.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Date {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Date";
  }

  public function __construct($year = NULL, $month = NULL, $day = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateTime";
  }

  public function __construct($date = NULL, $hour = NULL, $minute = NULL, $second = NULL, $timeZoneID = NULL) {
    $this->date = $date;
    $this->hour = $hour;
    $this->minute = $minute;
    $this->second = $second;
    $this->timeZoneID = $timeZoneID;
  }
}}

if (!class_exists("DateTimeRangeTargetingError", FALSE)) {
/**
 * Lists all date time range errors caused by associating a line item with a targeting
 * expression.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DateTimeRangeTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsDateTimeRangeTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateTimeRangeTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DayPart", FALSE)) {
/**
 * {@code DayPart} represents a time-period within a day of the week which is
 * targeted by a {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DayPart {
  /**
   * @access public
   * @var tnsDayOfWeek
   */
  public $dayOfWeek;

  /**
   * @access public
   * @var TimeOfDay
   */
  public $startTime;

  /**
   * @access public
   * @var TimeOfDay
   */
  public $endTime;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayPart";
  }

  public function __construct($dayOfWeek = NULL, $startTime = NULL, $endTime = NULL) {
    $this->dayOfWeek = $dayOfWeek;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
  }
}}

if (!class_exists("DayPartTargeting", FALSE)) {
/**
 * Modify the delivery times of line items for particular days of the week. By
 * default, line items are served at all days and times.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DayPartTargeting {
  /**
   * @access public
   * @var DayPart[]
   */
  public $dayParts;

  /**
   * @access public
   * @var tnsDeliveryTimeZone
   */
  public $timeZone;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayPartTargeting";
  }

  public function __construct($dayParts = NULL, $timeZone = NULL) {
    $this->dayParts = $dayParts;
    $this->timeZone = $timeZone;
  }
}}

if (!class_exists("DayPartTargetingError", FALSE)) {
/**
 * Lists all errors associated with day-part targeting for a line item.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DayPartTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsDayPartTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayPartTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DeliveryData", FALSE)) {
/**
 * Holds the number of clicks or impressions, determined by
 * {@link LineItem#costType}, delivered for a single line item for the
 * last 7 days
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeliveryData {
  /**
   * @access public
   * @var integer[]
   */
  public $units;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeliveryData";
  }

  public function __construct($units = NULL) {
    $this->units = $units;
  }
}}

if (!class_exists("DeliveryIndicator", FALSE)) {
/**
 * Indicates the delivery performance of the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeliveryIndicator {
  /**
   * @access public
   * @var double
   */
  public $expectedDeliveryPercentage;

  /**
   * @access public
   * @var double
   */
  public $actualDeliveryPercentage;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeliveryIndicator";
  }

  public function __construct($expectedDeliveryPercentage = NULL, $actualDeliveryPercentage = NULL) {
    $this->expectedDeliveryPercentage = $expectedDeliveryPercentage;
    $this->actualDeliveryPercentage = $actualDeliveryPercentage;
  }
}}

if (!class_exists("DeviceCapabilityTargeting", FALSE)) {
/**
 * Represents device capabilities that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeviceCapabilityTargeting {
  /**
   * @access public
   * @var Technology[]
   */
  public $targetedDeviceCapabilities;

  /**
   * @access public
   * @var Technology[]
   */
  public $excludedDeviceCapabilities;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeviceCapabilityTargeting";
  }

  public function __construct($targetedDeviceCapabilities = NULL, $excludedDeviceCapabilities = NULL) {
    $this->targetedDeviceCapabilities = $targetedDeviceCapabilities;
    $this->excludedDeviceCapabilities = $excludedDeviceCapabilities;
  }
}}

if (!class_exists("DeviceCategoryTargeting", FALSE)) {
/**
 * Represents device categories that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeviceCategoryTargeting {
  /**
   * @access public
   * @var Technology[]
   */
  public $targetedDeviceCategories;

  /**
   * @access public
   * @var Technology[]
   */
  public $excludedDeviceCategories;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeviceCategoryTargeting";
  }

  public function __construct($targetedDeviceCategories = NULL, $excludedDeviceCategories = NULL) {
    $this->targetedDeviceCategories = $targetedDeviceCategories;
    $this->excludedDeviceCategories = $excludedDeviceCategories;
  }
}}

if (!class_exists("DeviceManufacturerTargeting", FALSE)) {
/**
 * Represents device manufacturer that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeviceManufacturerTargeting {
  /**
   * @access public
   * @var boolean
   */
  public $isTargeted;

  /**
   * @access public
   * @var Technology[]
   */
  public $deviceManufacturers;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeviceManufacturerTargeting";
  }

  public function __construct($isTargeted = NULL, $deviceManufacturers = NULL) {
    $this->isTargeted = $isTargeted;
    $this->deviceManufacturers = $deviceManufacturers;
  }
}}

if (!class_exists("DropDownCustomFieldValue", FALSE)) {
/**
 * A {@link CustomFieldValue} for a {@link CustomField} that has a {@link CustomField#dataType}
 * of {@link CustomFieldDataType#DROP_DOWN}
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DropDownCustomFieldValue extends BaseCustomFieldValue {
  /**
   * @access public
   * @var integer
   */
  public $customFieldOptionId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DropDownCustomFieldValue";
  }

  public function __construct($customFieldOptionId = NULL, $customFieldId = NULL, $BaseCustomFieldValueType = NULL) {
    parent::__construct();
    $this->customFieldOptionId = $customFieldOptionId;
    $this->customFieldId = $customFieldId;
    $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
  }
}}

if (!class_exists("EntityLimitReachedError", FALSE)) {
/**
 * An error that occurs when creating an entity if the limit on the number of allowed entities for
 * a network has already been reached.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class EntityLimitReachedError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityLimitReachedError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class FeatureError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FeatureError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ForecastError", FALSE)) {
/**
 * Errors that can result from a forecast request.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ForecastError extends ApiError {
  /**
   * @access public
   * @var tnsForecastErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ForecastError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("FrequencyCap", FALSE)) {
/**
 * Represents a limit on the number of times a single viewer can be exposed to
 * the same {@link LineItem} in a specified time period.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class FrequencyCap {
  /**
   * @access public
   * @var integer
   */
  public $maxImpressions;

  /**
   * @access public
   * @var integer
   */
  public $numTimeUnits;

  /**
   * @access public
   * @var tnsTimeUnit
   */
  public $timeUnit;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FrequencyCap";
  }

  public function __construct($maxImpressions = NULL, $numTimeUnits = NULL, $timeUnit = NULL) {
    $this->maxImpressions = $maxImpressions;
    $this->numTimeUnits = $numTimeUnits;
    $this->timeUnit = $timeUnit;
  }
}}

if (!class_exists("FrequencyCapError", FALSE)) {
/**
 * Lists all errors associated with frequency caps.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class FrequencyCapError extends ApiError {
  /**
   * @access public
   * @var tnsFrequencyCapErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FrequencyCapError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("GenericTargetingError", FALSE)) {
/**
 * Targeting validation errors that can be used by different targeting types.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GenericTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsGenericTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "GenericTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("GeoTargeting", FALSE)) {
/**
 * Provides line items the ability to target geographical locations. By default,
 * line items target all countries and their subdivisions. With geographical
 * targeting, you can target line items to specific countries, regions, metro
 * areas, and cities. You can also exclude the same.
 * <p>
 * The following rules apply for geographical targeting:
 * </p>
 * <ul>
 * <li>You cannot target and exclude the same location</li>
 * <li>You cannot target a child whose parent has been excluded. So if the state
 * of Illinois has been excluded, then you cannot target Chicago</li>
 * <li>You must not target a location if you are also targeting its parent.
 * So if you are targeting New York City, you must not have the state of New
 * York as one of the targeted locations</li>
 * </ul>
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GeoTargeting {
  /**
   * @access public
   * @var Location[]
   */
  public $targetedLocations;

  /**
   * @access public
   * @var Location[]
   */
  public $excludedLocations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "GeoTargeting";
  }

  public function __construct($targetedLocations = NULL, $excludedLocations = NULL) {
    $this->targetedLocations = $targetedLocations;
    $this->excludedLocations = $excludedLocations;
  }
}}

if (!class_exists("GeoTargetingError", FALSE)) {
/**
 * Lists all errors associated with geographical targeting for a
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GeoTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsGeoTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "GeoTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class InvalidUrlError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InvalidUrlError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("InventoryTargeting", FALSE)) {
/**
 * A collection of targeted and excluded ad units and placements.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class InventoryTargeting {
  /**
   * @access public
   * @var AdUnitTargeting[]
   */
  public $targetedAdUnits;

  /**
   * @access public
   * @var AdUnitTargeting[]
   */
  public $excludedAdUnits;

  /**
   * @access public
   * @var integer[]
   */
  public $targetedPlacementIds;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InventoryTargeting";
  }

  public function __construct($targetedAdUnits = NULL, $excludedAdUnits = NULL, $targetedPlacementIds = NULL) {
    $this->targetedAdUnits = $targetedAdUnits;
    $this->excludedAdUnits = $excludedAdUnits;
    $this->targetedPlacementIds = $targetedPlacementIds;
  }
}}

if (!class_exists("InventoryTargetingError", FALSE)) {
/**
 * Lists all inventory errors caused by associating a line item with a targeting
 * expression.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class InventoryTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsInventoryTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InventoryTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class LabelEntityAssociationError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LabelEntityAssociationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LineItemAction", FALSE)) {
/**
 * Represents the actions that can be performed on {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemAction {
  /**
   * @access public
   * @var string
   */
  public $LineItemActionType;

  private $_parameterMap = array (
    "LineItemAction.Type" => "LineItemActionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemAction";
  }

  public function __construct($LineItemActionType = NULL) {
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("LineItemCreativeAssociationError", FALSE)) {
/**
 * Lists all errors associated with line item-to-creative association dates.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemCreativeAssociationError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemCreativeAssociationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LineItemError", FALSE)) {
/**
 * A catch-all error that lists all generic errors associated with LineItem.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LineItemFlightDateError", FALSE)) {
/**
 * Lists all errors associated with LineItem start and end dates.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemFlightDateError extends ApiError {
  /**
   * @access public
   * @var tnsLineItemFlightDateErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemFlightDateError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LineItemOperationError", FALSE)) {
/**
 * Lists all errors for executing operations on line items
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemOperationError extends ApiError {
  /**
   * @access public
   * @var tnsLineItemOperationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemOperationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LineItemPage", FALSE)) {
/**
 * Captures a page of {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemPage {
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
   * @var LineItem[]
   */
  public $results;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemPage";
  }

  public function __construct($totalResultSetSize = NULL, $startIndex = NULL, $results = NULL) {
    $this->totalResultSetSize = $totalResultSetSize;
    $this->startIndex = $startIndex;
    $this->results = $results;
  }
}}

if (!class_exists("LineItemSummary", FALSE)) {
/**
 * The {@code LineItemSummary} represents the base class from which a {@code
 * LineItem} is derived.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemSummary {
  /**
   * @access public
   * @var integer
   */
  public $orderId;

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
  public $externalId;

  /**
   * @access public
   * @var string
   */
  public $orderName;

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
   * @var integer
   */
  public $autoExtensionDays;

  /**
   * @access public
   * @var boolean
   */
  public $unlimitedEndDateTime;

  /**
   * @access public
   * @var tnsCreativeRotationType
   */
  public $creativeRotationType;

  /**
   * @access public
   * @var tnsDeliveryRateType
   */
  public $deliveryRateType;

  /**
   * @access public
   * @var tnsRoadblockingType
   */
  public $roadblockingType;

  /**
   * @access public
   * @var FrequencyCap[]
   */
  public $frequencyCaps;

  /**
   * @access public
   * @var tnsLineItemType
   */
  public $lineItemType;

  /**
   * @access public
   * @var integer
   */
  public $priority;

  /**
   * @access public
   * @var tnsUnitType
   */
  public $unitType;

  /**
   * @access public
   * @var tnsLineItemSummaryDuration
   */
  public $duration;

  /**
   * @access public
   * @var integer
   */
  public $unitsBought;

  /**
   * @access public
   * @var Money
   */
  public $costPerUnit;

  /**
   * @access public
   * @var Money
   */
  public $valueCostPerUnit;

  /**
   * @access public
   * @var tnsCostType
   */
  public $costType;

  /**
   * @access public
   * @var tnsLineItemDiscountType
   */
  public $discountType;

  /**
   * @access public
   * @var double
   */
  public $discount;

  /**
   * @access public
   * @var integer
   */
  public $contractedUnitsBought;

  /**
   * @access public
   * @var CreativePlaceholder[]
   */
  public $creativePlaceholders;

  /**
   * @access public
   * @var tnsTargetPlatform
   */
  public $targetPlatform;

  /**
   * @access public
   * @var tnsEnvironmentType
   */
  public $environmentType;

  /**
   * @access public
   * @var tnsCompanionDeliveryOption
   */
  public $companionDeliveryOption;

  /**
   * @access public
   * @var tnsCreativePersistenceType
   */
  public $creativePersistenceType;

  /**
   * @access public
   * @var boolean
   */
  public $allowOverbook;

  /**
   * @access public
   * @var boolean
   */
  public $reserveAtCreation;

  /**
   * @access public
   * @var Stats
   */
  public $stats;

  /**
   * @access public
   * @var DeliveryIndicator
   */
  public $deliveryIndicator;

  /**
   * @access public
   * @var DeliveryData
   */
  public $deliveryData;

  /**
   * @access public
   * @var Money
   */
  public $budget;

  /**
   * @access public
   * @var tnsComputedStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsLineItemSummaryReservationStatus
   */
  public $reservationStatus;

  /**
   * @access public
   * @var boolean
   */
  public $isArchived;

  /**
   * @access public
   * @var string
   */
  public $webPropertyCode;

  /**
   * @access public
   * @var AppliedLabel[]
   */
  public $appliedLabels;

  /**
   * @access public
   * @var AppliedLabel[]
   */
  public $effectiveAppliedLabels;

  /**
   * @access public
   * @var boolean
   */
  public $disableSameAdvertiserCompetitiveExclusion;

  /**
   * @access public
   * @var string
   */
  public $lastModifiedByApp;

  /**
   * @access public
   * @var string
   */
  public $notes;

  /**
   * @access public
   * @var DateTime
   */
  public $lastModifiedDateTime;

  /**
   * @access public
   * @var BaseCustomFieldValue[]
   */
  public $customFieldValues;

  /**
   * @access public
   * @var string
   */
  public $LineItemSummaryType;

  private $_parameterMap = array (
    "LineItemSummary.Type" => "LineItemSummaryType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemSummary";
  }

  public function __construct($orderId = NULL, $id = NULL, $name = NULL, $externalId = NULL, $orderName = NULL, $startDateTime = NULL, $startDateTimeType = NULL, $endDateTime = NULL, $autoExtensionDays = NULL, $unlimitedEndDateTime = NULL, $creativeRotationType = NULL, $deliveryRateType = NULL, $roadblockingType = NULL, $frequencyCaps = NULL, $lineItemType = NULL, $priority = NULL, $unitType = NULL, $duration = NULL, $unitsBought = NULL, $costPerUnit = NULL, $valueCostPerUnit = NULL, $costType = NULL, $discountType = NULL, $discount = NULL, $contractedUnitsBought = NULL, $creativePlaceholders = NULL, $targetPlatform = NULL, $environmentType = NULL, $companionDeliveryOption = NULL, $creativePersistenceType = NULL, $allowOverbook = NULL, $reserveAtCreation = NULL, $stats = NULL, $deliveryIndicator = NULL, $deliveryData = NULL, $budget = NULL, $status = NULL, $reservationStatus = NULL, $isArchived = NULL, $webPropertyCode = NULL, $appliedLabels = NULL, $effectiveAppliedLabels = NULL, $disableSameAdvertiserCompetitiveExclusion = NULL, $lastModifiedByApp = NULL, $notes = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $LineItemSummaryType = NULL) {
    $this->orderId = $orderId;
    $this->id = $id;
    $this->name = $name;
    $this->externalId = $externalId;
    $this->orderName = $orderName;
    $this->startDateTime = $startDateTime;
    $this->startDateTimeType = $startDateTimeType;
    $this->endDateTime = $endDateTime;
    $this->autoExtensionDays = $autoExtensionDays;
    $this->unlimitedEndDateTime = $unlimitedEndDateTime;
    $this->creativeRotationType = $creativeRotationType;
    $this->deliveryRateType = $deliveryRateType;
    $this->roadblockingType = $roadblockingType;
    $this->frequencyCaps = $frequencyCaps;
    $this->lineItemType = $lineItemType;
    $this->priority = $priority;
    $this->unitType = $unitType;
    $this->duration = $duration;
    $this->unitsBought = $unitsBought;
    $this->costPerUnit = $costPerUnit;
    $this->valueCostPerUnit = $valueCostPerUnit;
    $this->costType = $costType;
    $this->discountType = $discountType;
    $this->discount = $discount;
    $this->contractedUnitsBought = $contractedUnitsBought;
    $this->creativePlaceholders = $creativePlaceholders;
    $this->targetPlatform = $targetPlatform;
    $this->environmentType = $environmentType;
    $this->companionDeliveryOption = $companionDeliveryOption;
    $this->creativePersistenceType = $creativePersistenceType;
    $this->allowOverbook = $allowOverbook;
    $this->reserveAtCreation = $reserveAtCreation;
    $this->stats = $stats;
    $this->deliveryIndicator = $deliveryIndicator;
    $this->deliveryData = $deliveryData;
    $this->budget = $budget;
    $this->status = $status;
    $this->reservationStatus = $reservationStatus;
    $this->isArchived = $isArchived;
    $this->webPropertyCode = $webPropertyCode;
    $this->appliedLabels = $appliedLabels;
    $this->effectiveAppliedLabels = $effectiveAppliedLabels;
    $this->disableSameAdvertiserCompetitiveExclusion = $disableSameAdvertiserCompetitiveExclusion;
    $this->lastModifiedByApp = $lastModifiedByApp;
    $this->notes = $notes;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->LineItemSummaryType = $LineItemSummaryType;
  }
}}

if (!class_exists("DfpLocation", FALSE)) {
/**
 * A {@link Location} represents a geographical entity that can be targeted. If
 * a location type is not available because of the API version you are using,
 * the location will be represented as just the base class, otherwise it will be
 * sub-classed correctly.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DfpLocation {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $LocationType;

  private $_parameterMap = array (
    "Location.Type" => "LocationType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Location";
  }

  public function __construct($id = NULL, $LocationType = NULL) {
    $this->id = $id;
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("MetroLocation", FALSE)) {
/**
 * Represents a metropolitan area for geographical targeting. Currently,
 * metropolitan areas only within the United States can be targeted.
 * <p>
 * Since {@code v201104}, fields of this class are ignored on input. Instead
 * {@link Location} should be used and the {@link Location#id} field should be
 * set.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class MetroLocation extends DfpLocation {
  /**
   * @access public
   * @var string
   */
  public $metroCode;

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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MetroLocation";
  }

  public function __construct($metroCode = NULL, $countryCode = NULL, $id = NULL, $LocationType = NULL) {
    parent::__construct();
    $this->metroCode = $metroCode;
    $this->countryCode = $countryCode;
    $this->id = $id;
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("MobileCarrierTargeting", FALSE)) {
/**
 * Represents mobile carriers that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class MobileCarrierTargeting {
  /**
   * @access public
   * @var boolean
   */
  public $isTargeted;

  /**
   * @access public
   * @var Technology[]
   */
  public $mobileCarriers;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileCarrierTargeting";
  }

  public function __construct($isTargeted = NULL, $mobileCarriers = NULL) {
    $this->isTargeted = $isTargeted;
    $this->mobileCarriers = $mobileCarriers;
  }
}}

if (!class_exists("MobileDeviceSubmodelTargeting", FALSE)) {
/**
 * Represents mobile devices that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class MobileDeviceSubmodelTargeting {
  /**
   * @access public
   * @var Technology[]
   */
  public $targetedMobileDeviceSubmodels;

  /**
   * @access public
   * @var Technology[]
   */
  public $excludedMobileDeviceSubmodels;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileDeviceSubmodelTargeting";
  }

  public function __construct($targetedMobileDeviceSubmodels = NULL, $excludedMobileDeviceSubmodels = NULL) {
    $this->targetedMobileDeviceSubmodels = $targetedMobileDeviceSubmodels;
    $this->excludedMobileDeviceSubmodels = $excludedMobileDeviceSubmodels;
  }
}}

if (!class_exists("MobileDeviceTargeting", FALSE)) {
/**
 * Represents mobile devices that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class MobileDeviceTargeting {
  /**
   * @access public
   * @var Technology[]
   */
  public $targetedMobileDevices;

  /**
   * @access public
   * @var Technology[]
   */
  public $excludedMobileDevices;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileDeviceTargeting";
  }

  public function __construct($targetedMobileDevices = NULL, $excludedMobileDevices = NULL) {
    $this->targetedMobileDevices = $targetedMobileDevices;
    $this->excludedMobileDevices = $excludedMobileDevices;
  }
}}

if (!class_exists("Money", FALSE)) {
/**
 * Represents a money amount.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Money {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Money";
  }

  public function __construct($currencyCode = NULL, $microAmount = NULL) {
    $this->currencyCode = $currencyCode;
    $this->microAmount = $microAmount;
  }
}}

if (!class_exists("NotNullError", FALSE)) {
/**
 * Caused by supplying a null value for an attribute that cannot be null.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class NotNullError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotNullError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class NullError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OAuth";
  }

  public function __construct($parameters = NULL, $AuthenticationType = NULL) {
    parent::__construct();
    $this->parameters = $parameters;
    $this->AuthenticationType = $AuthenticationType;
  }
}}

if (!class_exists("OperatingSystemTargeting", FALSE)) {
/**
 * Represents operating systems that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class OperatingSystemTargeting {
  /**
   * @access public
   * @var boolean
   */
  public $isTargeted;

  /**
   * @access public
   * @var Technology[]
   */
  public $operatingSystems;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperatingSystemTargeting";
  }

  public function __construct($isTargeted = NULL, $operatingSystems = NULL) {
    $this->isTargeted = $isTargeted;
    $this->operatingSystems = $operatingSystems;
  }
}}

if (!class_exists("OperatingSystemVersionTargeting", FALSE)) {
/**
 * Represents operating system versions that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class OperatingSystemVersionTargeting {
  /**
   * @access public
   * @var Technology[]
   */
  public $targetedOperatingSystemVersions;

  /**
   * @access public
   * @var Technology[]
   */
  public $excludedOperatingSystemVersions;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperatingSystemVersionTargeting";
  }

  public function __construct($targetedOperatingSystemVersions = NULL, $excludedOperatingSystemVersions = NULL) {
    $this->targetedOperatingSystemVersions = $targetedOperatingSystemVersions;
    $this->excludedOperatingSystemVersions = $excludedOperatingSystemVersions;
  }
}}

if (!class_exists("OrderError", FALSE)) {
/**
 * Lists all errors associated with orders.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class OrderError extends ApiError {
  /**
   * @access public
   * @var tnsOrderErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OrderError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ParseError", FALSE)) {
/**
 * Lists errors related to parsing.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ParseError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ParseError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("PauseLineItems", FALSE)) {
/**
 * The action used for pausing {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PauseLineItems extends LineItemAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PauseLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("PermissionError", FALSE)) {
/**
 * Errors related to incorrect permission.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PermissionError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PermissionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("PostalCodeLocation", FALSE)) {
/**
 * Represents a postal code for geographical targeting. On input,
 * {@link Location} should be used instead and the {@link Location#id} field
 * should be set.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class PostalCodeLocation extends DfpLocation {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PostalCodeLocation";
  }

  public function __construct($postalCode = NULL, $countryCode = NULL, $id = NULL, $LocationType = NULL) {
    parent::__construct();
    $this->postalCode = $postalCode;
    $this->countryCode = $countryCode;
    $this->id = $id;
    $this->LocationType = $LocationType;
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageContextError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageSyntaxError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class RangeError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RegionLocation", FALSE)) {
/**
 * Represents a principal subdivision (eg. province or state) of a country for
 * geographical targeting.
 * <p>
 * Since {@code v201104}, fields of this class are ignored on input. Instead
 * {@link Location} should be used and the {@link Location#id} field should be
 * set.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class RegionLocation extends DfpLocation {
  /**
   * @access public
   * @var string
   */
  public $regionCode;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RegionLocation";
  }

  public function __construct($regionCode = NULL, $id = NULL, $LocationType = NULL) {
    parent::__construct();
    $this->regionCode = $regionCode;
    $this->id = $id;
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("ReleaseLineItems", FALSE)) {
/**
 * The action used for releasing {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ReleaseLineItems extends LineItemAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReleaseLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("RequiredCollectionError", FALSE)) {
/**
 * A list of all errors to be used for validating sizes of collections.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class RequiredCollectionError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredCollectionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class RequiredNumberError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredNumberError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class RequiredSizeError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredSizeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ReservationDetailsError", FALSE)) {
/**
 * Lists all errors associated with LineItem's reservation details.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ReservationDetailsError extends ApiError {
  /**
   * @access public
   * @var tnsReservationDetailsErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReservationDetailsError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ReserveLineItems", FALSE)) {
/**
 * The action used for reserving {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ReserveLineItems extends LineItemAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReserveLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("ResumeLineItems", FALSE)) {
/**
 * The action used for resuming {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ResumeLineItems extends LineItemAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ResumeLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("ServerError", FALSE)) {
/**
 * Errors related to the server.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ServerError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ServerError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class Size {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Size";
  }

  public function __construct($width = NULL, $height = NULL, $isAspectRatio = NULL) {
    $this->width = $width;
    $this->height = $height;
    $this->isAspectRatio = $isAspectRatio;
  }
}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class SoapRequestHeader {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapRequestHeader";
  }

  public function __construct($networkCode = NULL, $applicationName = NULL, $authentication = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapResponseHeader";
  }

  public function __construct($requestId = NULL, $responseTime = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Statement";
  }

  public function __construct($query = NULL, $values = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatementError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
 * @subpackage v201211
 */
class Stats {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Stats";
  }

  public function __construct($impressionsDelivered = NULL, $clicksDelivered = NULL) {
    $this->impressionsDelivered = $impressionsDelivered;
    $this->clicksDelivered = $clicksDelivered;
  }
}}

if (!class_exists("StringLengthError", FALSE)) {
/**
 * Errors for Strings which do not meet given length constraints.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class StringLengthError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringLengthError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "String_ValueMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("Targeting", FALSE)) {
/**
 * Contains targeting criteria for {@link LineItem} objects. See
 * {@link LineItem#targeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Targeting {
  /**
   * @access public
   * @var GeoTargeting
   */
  public $geoTargeting;

  /**
   * @access public
   * @var InventoryTargeting
   */
  public $inventoryTargeting;

  /**
   * @access public
   * @var DayPartTargeting
   */
  public $dayPartTargeting;

  /**
   * @access public
   * @var TechnologyTargeting
   */
  public $technologyTargeting;

  /**
   * @access public
   * @var CustomCriteriaSet
   */
  public $customTargeting;

  /**
   * @access public
   * @var UserDomainTargeting
   */
  public $userDomainTargeting;

  /**
   * @access public
   * @var ContentTargeting
   */
  public $contentTargeting;

  /**
   * @access public
   * @var VideoPositionTargeting
   */
  public $videoPositionTargeting;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Targeting";
  }

  public function __construct($geoTargeting = NULL, $inventoryTargeting = NULL, $dayPartTargeting = NULL, $technologyTargeting = NULL, $customTargeting = NULL, $userDomainTargeting = NULL, $contentTargeting = NULL, $videoPositionTargeting = NULL) {
    $this->geoTargeting = $geoTargeting;
    $this->inventoryTargeting = $inventoryTargeting;
    $this->dayPartTargeting = $dayPartTargeting;
    $this->technologyTargeting = $technologyTargeting;
    $this->customTargeting = $customTargeting;
    $this->userDomainTargeting = $userDomainTargeting;
    $this->contentTargeting = $contentTargeting;
    $this->videoPositionTargeting = $videoPositionTargeting;
  }
}}

if (!class_exists("TeamError", FALSE)) {
/**
 * Errors related to a Team.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TeamError extends ApiError {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TeamError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Technology", FALSE)) {
/**
 * Represents a technology entity that can be targeted.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Technology {
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
  public $TechnologyType;

  private $_parameterMap = array (
    "Technology.Type" => "TechnologyType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Technology";
  }

  public function __construct($id = NULL, $name = NULL, $TechnologyType = NULL) {
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("TechnologyTargetingError", FALSE)) {
/**
 * Technology targeting validation errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TechnologyTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsTechnologyTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TechnologyTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("TimeOfDay", FALSE)) {
/**
 * Represents a specific time in a day.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TimeOfDay {
  /**
   * @access public
   * @var integer
   */
  public $hour;

  /**
   * @access public
   * @var tnsMinuteOfHour
   */
  public $minute;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TimeOfDay";
  }

  public function __construct($hour = NULL, $minute = NULL) {
    $this->hour = $hour;
    $this->minute = $minute;
  }
}}

if (!class_exists("TypeError", FALSE)) {
/**
 * An error for a field which is an invalid type.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TypeError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TypeError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("UnarchiveLineItems", FALSE)) {
/**
 * The action used for unarchiving {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UnarchiveLineItems extends LineItemAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UnarchiveLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("UniqueError", FALSE)) {
/**
 * An error for a field which must satisfy a uniqueness constraint
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UniqueError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UniqueError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UpdateResult";
  }

  public function __construct($numChanges = NULL) {
    $this->numChanges = $numChanges;
  }
}}

if (!class_exists("UserDomainTargeting", FALSE)) {
/**
 * Provides line items the ability to target or exclude users visiting their
 * websites from a list of domains or subdomains.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UserDomainTargeting {
  /**
   * @access public
   * @var string[]
   */
  public $domains;

  /**
   * @access public
   * @var boolean
   */
  public $targeted;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UserDomainTargeting";
  }

  public function __construct($domains = NULL, $targeted = NULL) {
    $this->domains = $domains;
    $this->targeted = $targeted;
  }
}}

if (!class_exists("UserDomainTargetingError", FALSE)) {
/**
 * Lists all errors related to user domain targeting for a line item.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UserDomainTargetingError extends ApiError {
  /**
   * @access public
   * @var tnsUserDomainTargetingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UserDomainTargetingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Value", FALSE)) {
/**
 * {@code Value} represents a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Value {
  /**
   * @access public
   * @var string
   */
  public $ValueType;

  private $_parameterMap = array (
    "Value.Type" => "ValueType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Value";
  }

  public function __construct($ValueType = NULL) {
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("VideoPositionTargeting", FALSE)) {
/**
 * Represents positions within and around a video where ads can be targeted to.
 * <p>
 * Example positions could be {@code pre-roll} (before the video plays),
 * {@code post-roll} (after a video has completed playback) and
 * {@code mid-roll} (during video playback).
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class VideoPositionTargeting {
  /**
   * @access public
   * @var tnsVideoPositionTargetingType[]
   */
  public $targetedVideoPositions;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoPositionTargeting";
  }

  public function __construct($targetedVideoPositions = NULL) {
    $this->targetedVideoPositions = $targetedVideoPositions;
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiVersionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AudienceExtensionErrorReason", FALSE)) {
/**
 * Specific audience extension error reasons.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class AudienceExtensionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceExtensionError.Reason";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ClickTrackingLineItemErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ClickTrackingLineItemErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClickTrackingLineItemError.Reason";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CommonError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CompanionDeliveryOption", FALSE)) {
/**
 * The delivery option for companions.  Used for line items whose environmentType is
 * {@link EnvironmentType#VIDEO_PLAYER}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CompanionDeliveryOption {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CompanionDeliveryOption";
  }

  public function __construct() {
  }
}}

if (!class_exists("CompanyCreditStatusErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CompanyCreditStatusErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CompanyCreditStatusError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ComputedStatus", FALSE)) {
/**
 * Describes the computed {@link LineItem} status that is derived from the
 * current state of the line item.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ComputedStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ComputedStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("CostType", FALSE)) {
/**
 * Describes the {@link LineItem} actions that are billable.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CostType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CostType";
  }

  public function __construct() {
  }
}}

if (!class_exists("CreativeRotationType", FALSE)) {
/**
 * The strategy to use for displaying multiple {@link Creative} objects that are
 * associated with a {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CreativeRotationType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeRotationType";
  }

  public function __construct() {
  }
}}

if (!class_exists("CreativeSizeType", FALSE)) {
/**
 * Descriptions of the types of sizes a creative can be.  Not all creatives can
 * be described by a height-width pair, this provides additional context.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CreativeSizeType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeSizeType";
  }

  public function __construct() {
  }
}}

if (!class_exists("CustomCriteriaComparisonOperator", FALSE)) {
/**
 * Specifies the available comparison operators.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomCriteriaComparisonOperator {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteria.ComparisonOperator";
  }

  public function __construct() {
  }
}}

if (!class_exists("CustomCriteriaSetLogicalOperator", FALSE)) {
/**
 * Specifies the available logical operators.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomCriteriaSetLogicalOperator {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteriaSet.LogicalOperator";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomFieldValueError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CustomTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomTargetingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AudienceSegmentCriteriaComparisonOperator", FALSE)) {
/**
 * Specifies the available comparison operators.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class AudienceSegmentCriteriaComparisonOperator {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceSegmentCriteria.ComparisonOperator";
  }

  public function __construct() {
  }
}}

if (!class_exists("DateTimeRangeTargetingErrorReason", FALSE)) {
/**
 * {@link ApiErrorReason} enum for date time range targeting error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DateTimeRangeTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateTimeRangeTargetingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DayOfWeek", FALSE)) {
/**
 * Days of the week.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DayOfWeek {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayOfWeek";
  }

  public function __construct() {
  }
}}

if (!class_exists("DayPartTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DayPartTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayPartTargetingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DeliveryTimeZone", FALSE)) {
/**
 * Represents the time zone to be used for {@link DayPartTargeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeliveryTimeZone {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeliveryTimeZone";
  }

  public function __construct() {
  }
}}

if (!class_exists("DeliveryRateType", FALSE)) {
/**
 * Possible delivery rates for a {@link LineItem}, which dictate the manner in
 * which they are served.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeliveryRateType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeliveryRateType";
  }

  public function __construct() {
  }
}}

if (!class_exists("EnvironmentType", FALSE)) {
/**
 * Enum for the valid environments in which ads can be shown.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class EnvironmentType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EnvironmentType";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FeatureError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ForecastErrorReason", FALSE)) {
/**
 * Reason why a forecast could not be retrieved.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ForecastErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ForecastError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("FrequencyCapErrorReason", FALSE)) {
/**
 * The value returned if the actual value is not exposed by the requested API version.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class FrequencyCapErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FrequencyCapError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("GenericTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GenericTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "GenericTargetingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("GeoTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class GeoTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "GeoTargetingError.Reason";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("InvalidUrlErrorReason", FALSE)) {
/**
 * The URL contains invalid characters.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class InvalidUrlErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InvalidUrlError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("InventoryTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class InventoryTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InventoryTargetingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("LabelEntityAssociationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LabelEntityAssociationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LabelEntityAssociationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("LineItemCreativeAssociationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemCreativeAssociationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemCreativeAssociationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("LineItemDiscountType", FALSE)) {
/**
 * Describes the possible discount types on the cost of booking a
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemDiscountType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemDiscountType";
  }

  public function __construct() {
  }
}}

if (!class_exists("LineItemErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("LineItemFlightDateErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemFlightDateErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemFlightDateError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("LineItemOperationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemOperationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemOperationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("LineItemSummaryDuration", FALSE)) {
/**
 * Specifies the time period used for limiting the number of ads served for a
 * {@link LineItem}. For valid and default values of duration for each line
 * item type, see {@link LineItem#duration}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemSummaryDuration {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemSummary.Duration";
  }

  public function __construct() {
  }
}}

if (!class_exists("LineItemSummaryReservationStatus", FALSE)) {
/**
 * Specifies the reservation status of the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemSummaryReservationStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemSummary.ReservationStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("LineItemType", FALSE)) {
/**
 * {@code LineItemType} indicates the priority of a {@link LineItem}, determined
 * by the way in which impressions are reserved to be served for it.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItemType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemType";
  }

  public function __construct() {
  }
}}

if (!class_exists("MinuteOfHour", FALSE)) {
/**
 * Minutes in an hour. Currently, only 0, 15, 30, and 45 are supported. This
 * field is required.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class MinuteOfHour {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MinuteOfHour";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotNullError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NullErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class NullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("OrderErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class OrderErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OrderError.Reason";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ParseError.Reason";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PermissionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CreativePersistenceType", FALSE)) {
/**
 * Specifies options to prevent ads from replacing or appearing with this
 * line item. If persistence is set, this line item's ads will not be
 * replaced over time, whether through AJAX or other means, such as
 * companions of video ads.
 * Additionally, if set to exclude none, other ads can be shown in any
 * slots not being used by this line item. If set to exclude display ads,
 * video ads can be shown, but no other display ads can be shown, even
 * in slots that aren't used by this line item. If set to exclude video ads,
 * video ads cannot be shown, but other display ads can be shown in unused
 * slots. If set to exclude all ads, no other ads can be shown until the
 * page is changed.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CreativePersistenceType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativePersistenceType";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageContextError.Reason";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageSyntaxError.Reason";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RangeErrorReason", FALSE)) {
/**
 * The value returned if the actual value is not exposed by the requested API version.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class RangeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequiredCollectionErrorReason", FALSE)) {
/**
 * A required collection is missing.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class RequiredCollectionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredCollectionError.Reason";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequiredNumberErrorReason", FALSE)) {
/**
 * Describes reasons for a number to be invalid.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class RequiredNumberErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredNumberError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequiredSizeErrorReason", FALSE)) {
/**
 * {@link Creative#size} or {@link LineItem#creativeSizes} is
 * missing.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class RequiredSizeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredSizeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ReservationDetailsErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ReservationDetailsErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReservationDetailsError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RoadblockingType", FALSE)) {
/**
 * Describes the roadblocking types.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class RoadblockingType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RoadblockingType";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ServerError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("StartDateTimeType", FALSE)) {
/**
 * Specifies the start type to use for an entity with a start date time field.
 * For example, a {@link LineItem} or {@link LineItemCreativeAssociation}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class StartDateTimeType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StartDateTimeType";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatementError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("StringLengthErrorReason", FALSE)) {
/**
 * The value returned if the actual value is not exposed by the requested API version.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class StringLengthErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringLengthError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("TargetPlatform", FALSE)) {
/**
 * Indicates the target platform.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TargetPlatform {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetPlatform";
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
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TeamError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("TechnologyTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TechnologyTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TechnologyTargetingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("TimeUnit", FALSE)) {
/**
 * Represent the possible time units for frequency capping.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TimeUnit {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TimeUnit";
  }

  public function __construct() {
  }
}}

if (!class_exists("UnitType", FALSE)) {
/**
 * Indicates the type of unit used for defining a reservation. The
 * {@link CostType} can differ from the {@link UnitType} - an
 * ad can have an impression goal, but be billed by its click. Usually
 * {@link CostType} and {@link UnitType} will refer to the
 * same unit.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UnitType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UnitType";
  }

  public function __construct() {
  }
}}

if (!class_exists("UserDomainTargetingErrorReason", FALSE)) {
/**
 * {@link ApiErrorReason} enum for user domain targeting error.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class UserDomainTargetingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UserDomainTargetingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoPositionTargetingType", FALSE)) {
/**
 * Represents the options for targetable positions within a video.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class VideoPositionTargetingType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoPositionTargetingType";
  }

  public function __construct() {
  }
}}

if (!class_exists("createLineItem", FALSE)) {
/**
 * Creates a new {@link LineItem}.
 * 
 * These fields are required:
 * <ul>
 * <li>{@link LineItem#costPerUnit}</li>
 * <li>{@link LineItem#costType}<li>
 * <li>{@link LineItem#endDateTime}</li>
 * <li>{@link LineItem#lineItemType}</li>
 * <li>{@link LineItem#name}</li>
 * <li>{@link LineItem#orderId}</li>
 * <li>{@link LineItem#startDateTime}</li>
 * <li>{@link LineItem#unitsBought}</li>
 * <li>{@link LineItem#creativePlaceholders}</li>
 * <li>{@link LineItem#targeting}</li>
 * </ul>
 * 
 * @param lineItem the line item to create
 * @return the line item with its ID filled in
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class createLineItem {
  /**
   * @access public
   * @var LineItem
   */
  public $lineItem;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($lineItem = NULL) {
    $this->lineItem = $lineItem;
  }
}}

if (!class_exists("createLineItemResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class createLineItemResponse {
  /**
   * @access public
   * @var LineItem
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("createLineItems", FALSE)) {
/**
 * Creates new {@link LineItem} objects.
 * 
 * @param lineItems the line items to create
 * @return the created line items with their IDs filled in
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class createLineItems {
  /**
   * @access public
   * @var LineItem[]
   */
  public $lineItems;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($lineItems = NULL) {
    $this->lineItems = $lineItems;
  }
}}

if (!class_exists("createLineItemsResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class createLineItemsResponse {
  /**
   * @access public
   * @var LineItem[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("getLineItem", FALSE)) {
/**
 * Returns the {@link LineItem} uniquely identified by the given ID.
 * 
 * @param lineItemId the ID of the line item, which must already exist
 * @return the {@code LineItem} uniquely identified by the given ID
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class getLineItem {
  /**
   * @access public
   * @var integer
   */
  public $lineItemId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($lineItemId = NULL) {
    $this->lineItemId = $lineItemId;
  }
}}

if (!class_exists("getLineItemResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class getLineItemResponse {
  /**
   * @access public
   * @var LineItem
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("getLineItemsByStatement", FALSE)) {
/**
 * Gets a {@link LineItemPage} of {@link LineItem} objects that satisfy the
 * given {@link Statement#query}. The following fields are supported for
 * filtering:
 * 
 * <table>
 * <tr>
 * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
 * </tr>
 * <tr>
 * <td>{@code costType}</td>
 * <td>{@link LineItem#costType}</td>
 * </tr>
 * <tr>
 * <td>{@code id}</td>
 * <td>{@link LineItem#id}</td>
 * </tr>
 * <tr>
 * <td>{@code lineItemType}</td>
 * <td>{@link LineItem#lineItemType}</td>
 * </tr>
 * <tr>
 * <td>{@code name}</td>
 * <td>{@link LineItem#name}</td>
 * </tr>
 * <tr>
 * <td>{@code orderId}</td>
 * <td>{@link LineItem#orderId}</td>
 * </tr>
 * <tr>
 * <td>{@code status}</td>
 * <td>{@link LineItem#status}</td>
 * </tr>
 * <tr>
 * <td>{@code unitsBought}</td>
 * <td>{@link LineItem#unitsBought}</td>
 * </tr>
 * <tr>
 * <td>{@code deliveryRateType}</td>
 * <td>{@link LineItem#deliveryRateType}</td>
 * </tr>
 * <tr>
 * <td>{@code lastModifiedDateTime}</td>
 * <td>{@link LineItem#lastModifiedDateTime}</td>
 * </tr>
 * <tr>
 * <td>{@code creationDateTime}</td>
 * <td>{@link LineItem#creationDateTime}</td>
 * </tr>
 * <tr>
 * <td>{@code isMissingCreatives}</td>
 * <td>{@link LineItem#isMissingCreatives}</td>
 * </tr>
 * </table>
 * 
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of line items.
 * @return the line items that match the given filter
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class getLineItemsByStatement {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($filterStatement = NULL) {
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("getLineItemsByStatementResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class getLineItemsByStatementResponse {
  /**
   * @access public
   * @var LineItemPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("performLineItemAction", FALSE)) {
/**
 * Performs actions on {@link LineItem} objects that match the given
 * {@link Statement#query}.
 * 
 * @param lineItemAction the action to perform
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of line items
 * @return the result of the action performed
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class performLineItemAction {
  /**
   * @access public
   * @var LineItemAction
   */
  public $lineItemAction;

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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($lineItemAction = NULL, $filterStatement = NULL) {
    $this->lineItemAction = $lineItemAction;
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("performLineItemActionResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class performLineItemActionResponse {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("updateLineItem", FALSE)) {
/**
 * Updates the specified {@link LineItem}.
 * 
 * @param lineItem the line item to update
 * @return the updated line item
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class updateLineItem {
  /**
   * @access public
   * @var LineItem
   */
  public $lineItem;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($lineItem = NULL) {
    $this->lineItem = $lineItem;
  }
}}

if (!class_exists("updateLineItemResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class updateLineItemResponse {
  /**
   * @access public
   * @var LineItem
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("updateLineItems", FALSE)) {
/**
 * Updates the specified {@link LineItem} objects.
 * 
 * @param lineItems the line items to update
 * @return the updated line items
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class updateLineItems {
  /**
   * @access public
   * @var LineItem[]
   */
  public $lineItems;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($lineItems = NULL) {
    $this->lineItems = $lineItems;
  }
}}

if (!class_exists("updateLineItemsResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class updateLineItemsResponse {
  /**
   * @access public
   * @var LineItem[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("ActivateLineItems", FALSE)) {
/**
 * The action used for activating {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ActivateLineItems extends LineItemAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ActivateLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("ApiException", FALSE)) {
/**
 * Exception class for holding a list of service errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ApiException extends ApplicationException {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiException";
  }

  public function __construct($errors = NULL, $message = NULL, $ApplicationExceptionType = NULL) {
    parent::__construct();
    $this->errors = $errors;
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("ArchiveLineItems", FALSE)) {
/**
 * The action used for archiving {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ArchiveLineItems extends LineItemAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ArchiveLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("BandwidthGroup", FALSE)) {
/**
 * Represents a group of bandwidths that are logically organized by some well
 * known generic names such as 'Cable' or 'DSL'.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class BandwidthGroup extends Technology {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BandwidthGroup";
  }

  public function __construct($id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("BooleanValue", FALSE)) {
/**
 * Contains a boolean value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class BooleanValue extends Value {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BooleanValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("Browser", FALSE)) {
/**
 * Represents an internet browser.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class Browser extends Technology {
  /**
   * @access public
   * @var string
   */
  public $majorVersion;

  /**
   * @access public
   * @var string
   */
  public $minorVersion;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Browser";
  }

  public function __construct($majorVersion = NULL, $minorVersion = NULL, $id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->majorVersion = $majorVersion;
    $this->minorVersion = $minorVersion;
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("BrowserLanguage", FALSE)) {
/**
 * Represents a Browser's language.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class BrowserLanguage extends Technology {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BrowserLanguage";
  }

  public function __construct($id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("CityLocation", FALSE)) {
/**
 * Represents a city for geographical targeting.
 * <p>
 * Since {@code v201104}, fields of this class are ignored on input. Instead
 * {@link Location} should be used and the {@link Location#id} field should be
 * set.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CityLocation extends DfpLocation {
  /**
   * @access public
   * @var string
   */
  public $cityName;

  /**
   * @access public
   * @var string
   */
  public $regionCode;

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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CityLocation";
  }

  public function __construct($cityName = NULL, $regionCode = NULL, $countryCode = NULL, $id = NULL, $LocationType = NULL) {
    parent::__construct();
    $this->cityName = $cityName;
    $this->regionCode = $regionCode;
    $this->countryCode = $countryCode;
    $this->id = $id;
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("CountryLocation", FALSE)) {
/**
 * Represents a country for geographical targeting.
 * <p>
 * Since {@code v201104}, fields of this class are ignored on input. Instead
 * {@link Location} should be used and the {@link Location#id} field should be
 * set.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CountryLocation extends DfpLocation {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CountryLocation";
  }

  public function __construct($countryCode = NULL, $id = NULL, $LocationType = NULL) {
    parent::__construct();
    $this->countryCode = $countryCode;
    $this->id = $id;
    $this->LocationType = $LocationType;
  }
}}

if (!class_exists("CustomCriteriaSet", FALSE)) {
/**
 * A {@link CustomCriteriaSet} comprises of a set of {@link CustomCriteriaNode}
 * objects combined by the
 * {@link CustomCriteriaSet.LogicalOperator#logicalOperator}. The custom
 * criteria targeting tree is subject to the rules defined on
 * {@link Targeting#customTargeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomCriteriaSet extends CustomCriteriaNode {
  /**
   * @access public
   * @var tnsCustomCriteriaSetLogicalOperator
   */
  public $logicalOperator;

  /**
   * @access public
   * @var CustomCriteriaNode[]
   */
  public $children;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteriaSet";
  }

  public function __construct($logicalOperator = NULL, $children = NULL, $CustomCriteriaNodeType = NULL) {
    parent::__construct();
    $this->logicalOperator = $logicalOperator;
    $this->children = $children;
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("CustomCriteriaLeaf", FALSE)) {
/**
 * A {@link CustomCriteriaLeaf} object represents a generic leaf of {@link CustomCriteria} tree
 * structure.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomCriteriaLeaf extends CustomCriteriaNode {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteriaLeaf";
  }

  public function __construct($CustomCriteriaNodeType = NULL) {
    parent::__construct();
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("AudienceSegmentCriteria", FALSE)) {
/**
 * An {@link AudienceSegmentCriteria} object is used to target {@link AudienceSegment} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class AudienceSegmentCriteria extends CustomCriteriaLeaf {
  /**
   * @access public
   * @var tnsAudienceSegmentCriteriaComparisonOperator
   */
  public $operator;

  /**
   * @access public
   * @var integer[]
   */
  public $audienceSegmentIds;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceSegmentCriteria";
  }

  public function __construct($operator = NULL, $audienceSegmentIds = NULL, $CustomCriteriaNodeType = NULL) {
    parent::__construct();
    $this->operator = $operator;
    $this->audienceSegmentIds = $audienceSegmentIds;
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("DateTimeValue", FALSE)) {
/**
 * Contains a date-time value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DateTimeValue extends Value {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateTimeValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("DeleteLineItems", FALSE)) {
/**
 * The action used for deleting {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeleteLineItems extends LineItemAction {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeleteLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("DeviceCapability", FALSE)) {
/**
 * Represents a capability of a physical device.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeviceCapability extends Technology {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeviceCapability";
  }

  public function __construct($id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("DeviceCategory", FALSE)) {
/**
 * Represents the category of a device.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeviceCategory extends Technology {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeviceCategory";
  }

  public function __construct($id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("DeviceManufacturer", FALSE)) {
/**
 * Represents a mobile device's manufacturer.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class DeviceManufacturer extends Technology {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeviceManufacturer";
  }

  public function __construct($id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("LineItem", FALSE)) {
/**
 * {@code LineItem} is an advertiser's commitment to purchase a specific number
 * of ad impressions, clicks, or time.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class LineItem extends LineItemSummary {
  /**
   * @access public
   * @var Targeting
   */
  public $targeting;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItem";
  }

  public function __construct($targeting = NULL, $orderId = NULL, $id = NULL, $name = NULL, $externalId = NULL, $orderName = NULL, $startDateTime = NULL, $startDateTimeType = NULL, $endDateTime = NULL, $autoExtensionDays = NULL, $unlimitedEndDateTime = NULL, $creativeRotationType = NULL, $deliveryRateType = NULL, $roadblockingType = NULL, $frequencyCaps = NULL, $lineItemType = NULL, $priority = NULL, $unitType = NULL, $duration = NULL, $unitsBought = NULL, $costPerUnit = NULL, $valueCostPerUnit = NULL, $costType = NULL, $discountType = NULL, $discount = NULL, $contractedUnitsBought = NULL, $creativePlaceholders = NULL, $targetPlatform = NULL, $environmentType = NULL, $companionDeliveryOption = NULL, $creativePersistenceType = NULL, $allowOverbook = NULL, $reserveAtCreation = NULL, $stats = NULL, $deliveryIndicator = NULL, $deliveryData = NULL, $budget = NULL, $status = NULL, $reservationStatus = NULL, $isArchived = NULL, $webPropertyCode = NULL, $appliedLabels = NULL, $effectiveAppliedLabels = NULL, $disableSameAdvertiserCompetitiveExclusion = NULL, $lastModifiedByApp = NULL, $notes = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $LineItemSummaryType = NULL) {
    parent::__construct();
    $this->targeting = $targeting;
    $this->orderId = $orderId;
    $this->id = $id;
    $this->name = $name;
    $this->externalId = $externalId;
    $this->orderName = $orderName;
    $this->startDateTime = $startDateTime;
    $this->startDateTimeType = $startDateTimeType;
    $this->endDateTime = $endDateTime;
    $this->autoExtensionDays = $autoExtensionDays;
    $this->unlimitedEndDateTime = $unlimitedEndDateTime;
    $this->creativeRotationType = $creativeRotationType;
    $this->deliveryRateType = $deliveryRateType;
    $this->roadblockingType = $roadblockingType;
    $this->frequencyCaps = $frequencyCaps;
    $this->lineItemType = $lineItemType;
    $this->priority = $priority;
    $this->unitType = $unitType;
    $this->duration = $duration;
    $this->unitsBought = $unitsBought;
    $this->costPerUnit = $costPerUnit;
    $this->valueCostPerUnit = $valueCostPerUnit;
    $this->costType = $costType;
    $this->discountType = $discountType;
    $this->discount = $discount;
    $this->contractedUnitsBought = $contractedUnitsBought;
    $this->creativePlaceholders = $creativePlaceholders;
    $this->targetPlatform = $targetPlatform;
    $this->environmentType = $environmentType;
    $this->companionDeliveryOption = $companionDeliveryOption;
    $this->creativePersistenceType = $creativePersistenceType;
    $this->allowOverbook = $allowOverbook;
    $this->reserveAtCreation = $reserveAtCreation;
    $this->stats = $stats;
    $this->deliveryIndicator = $deliveryIndicator;
    $this->deliveryData = $deliveryData;
    $this->budget = $budget;
    $this->status = $status;
    $this->reservationStatus = $reservationStatus;
    $this->isArchived = $isArchived;
    $this->webPropertyCode = $webPropertyCode;
    $this->appliedLabels = $appliedLabels;
    $this->effectiveAppliedLabels = $effectiveAppliedLabels;
    $this->disableSameAdvertiserCompetitiveExclusion = $disableSameAdvertiserCompetitiveExclusion;
    $this->lastModifiedByApp = $lastModifiedByApp;
    $this->notes = $notes;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->LineItemSummaryType = $LineItemSummaryType;
  }
}}

if (!class_exists("MobileCarrier", FALSE)) {
/**
 * Represents a mobile carrier.
 * Carrier targeting is only available to DFP mobile publishers.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class MobileCarrier extends Technology {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileCarrier";
  }

  public function __construct($id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("MobileDevice", FALSE)) {
/**
 * Represents a Mobile Device.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class MobileDevice extends Technology {
  /**
   * @access public
   * @var integer
   */
  public $manufacturerCriterionId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileDevice";
  }

  public function __construct($manufacturerCriterionId = NULL, $id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->manufacturerCriterionId = $manufacturerCriterionId;
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("MobileDeviceSubmodel", FALSE)) {
/**
 * Represents a mobile device submodel.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class MobileDeviceSubmodel extends Technology {
  /**
   * @access public
   * @var integer
   */
  public $mobileDeviceCriterionId;

  /**
   * @access public
   * @var integer
   */
  public $deviceManufacturerCriterionId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileDeviceSubmodel";
  }

  public function __construct($mobileDeviceCriterionId = NULL, $deviceManufacturerCriterionId = NULL, $id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->mobileDeviceCriterionId = $mobileDeviceCriterionId;
    $this->deviceManufacturerCriterionId = $deviceManufacturerCriterionId;
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("NumberValue", FALSE)) {
/**
 * Contains a numeric value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class NumberValue extends Value {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NumberValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("OperatingSystem", FALSE)) {
/**
 * Represents an Operating System, such as Linux, Mac OS or Windows.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class OperatingSystem extends Technology {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperatingSystem";
  }

  public function __construct($id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("OperatingSystemVersion", FALSE)) {
/**
 * Represents a specific version of an operating system.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class OperatingSystemVersion extends Technology {
  /**
   * @access public
   * @var integer
   */
  public $majorVersion;

  /**
   * @access public
   * @var integer
   */
  public $minorVersion;

  /**
   * @access public
   * @var integer
   */
  public $microVersion;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperatingSystemVersion";
  }

  public function __construct($majorVersion = NULL, $minorVersion = NULL, $microVersion = NULL, $id = NULL, $name = NULL, $TechnologyType = NULL) {
    parent::__construct();
    $this->majorVersion = $majorVersion;
    $this->minorVersion = $minorVersion;
    $this->microVersion = $microVersion;
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }
}}

if (!class_exists("ReserveAndOverbookLineItems", FALSE)) {
/**
 * The action used for reserving and overbooking {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ReserveAndOverbookLineItems extends ReserveLineItems {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReserveAndOverbookLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("ResumeAndOverbookLineItems", FALSE)) {
/**
 * The action used for resuming and overbooking {@link LineItem} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class ResumeAndOverbookLineItems extends ResumeLineItems {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ResumeAndOverbookLineItems";
  }

  public function __construct($LineItemActionType = NULL) {
    parent::__construct();
    $this->LineItemActionType = $LineItemActionType;
  }
}}

if (!class_exists("TextValue", FALSE)) {
/**
 * Contains a string value.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class TextValue extends Value {
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
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TextValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("CustomCriteria", FALSE)) {
/**
 * A {@link CustomCriteria} object is used to perform custom criteria targeting
 * on custom targeting keys of type {@link CustomTargetingKey.Type#PREDEFINED}
 * or {@link CustomTargetingKey.Type#FREEFORM}.
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 */
class CustomCriteria extends CustomCriteriaLeaf {
  /**
   * @access public
   * @var integer
   */
  public $keyId;

  /**
   * @access public
   * @var integer[]
   */
  public $valueIds;

  /**
   * @access public
   * @var tnsCustomCriteriaComparisonOperator
   */
  public $operator;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201211";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCriteria";
  }

  public function __construct($keyId = NULL, $valueIds = NULL, $operator = NULL, $CustomCriteriaNodeType = NULL) {
    parent::__construct();
    $this->keyId = $keyId;
    $this->valueIds = $valueIds;
    $this->operator = $operator;
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }
}}

if (!class_exists("LineItemService", FALSE)) {
/**
 * LineItemService
 * @package GoogleApiAdsDfp
 * @subpackage v201211
 * @author WSDLInterpreter
 */
class LineItemService extends DfpSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "DateTime" => "DfpDateTime",
    "Location" => "DfpLocation",
    "OAuth" => "DfpOAuth",
    "ActivateLineItems" => "ActivateLineItems",
    "LineItemAction" => "LineItemAction",
    "AdUnitTargeting" => "AdUnitTargeting",
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "TechnologyTargeting" => "TechnologyTargeting",
    "ApiVersionError" => "ApiVersionError",
    "AppliedLabel" => "AppliedLabel",
    "ArchiveLineItems" => "ArchiveLineItems",
    "AudienceExtensionError" => "AudienceExtensionError",
    "Authentication" => "Authentication",
    "AuthenticationError" => "AuthenticationError",
    "BandwidthGroup" => "BandwidthGroup",
    "Technology" => "Technology",
    "BandwidthGroupTargeting" => "BandwidthGroupTargeting",
    "BaseCustomFieldValue" => "BaseCustomFieldValue",
    "BooleanValue" => "BooleanValue",
    "Value" => "Value",
    "Browser" => "Browser",
    "BrowserLanguage" => "BrowserLanguage",
    "BrowserLanguageTargeting" => "BrowserLanguageTargeting",
    "BrowserTargeting" => "BrowserTargeting",
    "CityLocation" => "CityLocation",
    "ClickTrackingLineItemError" => "ClickTrackingLineItemError",
    "ClientLogin" => "ClientLogin",
    "CommonError" => "CommonError",
    "CompanyCreditStatusError" => "CompanyCreditStatusError",
    "ContentTargeting" => "ContentTargeting",
    "CountryLocation" => "CountryLocation",
    "CreativePlaceholder" => "CreativePlaceholder",
    "CustomCriteria" => "CustomCriteria",
    "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
    "CustomCriteriaSet" => "CustomCriteriaSet",
    "CustomCriteriaNode" => "CustomCriteriaNode",
    "CustomFieldValue" => "CustomFieldValue",
    "CustomFieldValueError" => "CustomFieldValueError",
    "CustomTargetingError" => "CustomTargetingError",
    "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
    "Date" => "Date",
    "DateTimeRangeTargetingError" => "DateTimeRangeTargetingError",
    "DateTimeValue" => "DateTimeValue",
    "DayPart" => "DayPart",
    "DayPartTargeting" => "DayPartTargeting",
    "DayPartTargetingError" => "DayPartTargetingError",
    "DeleteLineItems" => "DeleteLineItems",
    "DeliveryData" => "DeliveryData",
    "DeliveryIndicator" => "DeliveryIndicator",
    "DeviceCapability" => "DeviceCapability",
    "DeviceCapabilityTargeting" => "DeviceCapabilityTargeting",
    "DeviceCategory" => "DeviceCategory",
    "DeviceCategoryTargeting" => "DeviceCategoryTargeting",
    "DeviceManufacturer" => "DeviceManufacturer",
    "DeviceManufacturerTargeting" => "DeviceManufacturerTargeting",
    "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
    "EntityLimitReachedError" => "EntityLimitReachedError",
    "FeatureError" => "FeatureError",
    "ForecastError" => "ForecastError",
    "FrequencyCap" => "FrequencyCap",
    "FrequencyCapError" => "FrequencyCapError",
    "GenericTargetingError" => "GenericTargetingError",
    "GeoTargeting" => "GeoTargeting",
    "GeoTargetingError" => "GeoTargetingError",
    "InternalApiError" => "InternalApiError",
    "InvalidUrlError" => "InvalidUrlError",
    "InventoryTargeting" => "InventoryTargeting",
    "InventoryTargetingError" => "InventoryTargetingError",
    "LabelEntityAssociationError" => "LabelEntityAssociationError",
    "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
    "LineItem" => "LineItem",
    "LineItemSummary" => "LineItemSummary",
    "LineItemError" => "LineItemError",
    "LineItemFlightDateError" => "LineItemFlightDateError",
    "LineItemOperationError" => "LineItemOperationError",
    "LineItemPage" => "LineItemPage",
    "MetroLocation" => "MetroLocation",
    "MobileCarrier" => "MobileCarrier",
    "MobileCarrierTargeting" => "MobileCarrierTargeting",
    "MobileDevice" => "MobileDevice",
    "MobileDeviceSubmodel" => "MobileDeviceSubmodel",
    "MobileDeviceSubmodelTargeting" => "MobileDeviceSubmodelTargeting",
    "MobileDeviceTargeting" => "MobileDeviceTargeting",
    "Money" => "Money",
    "NotNullError" => "NotNullError",
    "NullError" => "NullError",
    "NumberValue" => "NumberValue",
    "OperatingSystem" => "OperatingSystem",
    "OperatingSystemTargeting" => "OperatingSystemTargeting",
    "OperatingSystemVersion" => "OperatingSystemVersion",
    "OperatingSystemVersionTargeting" => "OperatingSystemVersionTargeting",
    "OrderError" => "OrderError",
    "ParseError" => "ParseError",
    "PauseLineItems" => "PauseLineItems",
    "PermissionError" => "PermissionError",
    "PostalCodeLocation" => "PostalCodeLocation",
    "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
    "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
    "QuotaError" => "QuotaError",
    "RangeError" => "RangeError",
    "RegionLocation" => "RegionLocation",
    "ReleaseLineItems" => "ReleaseLineItems",
    "RequiredCollectionError" => "RequiredCollectionError",
    "RequiredError" => "RequiredError",
    "RequiredNumberError" => "RequiredNumberError",
    "RequiredSizeError" => "RequiredSizeError",
    "ReservationDetailsError" => "ReservationDetailsError",
    "ReserveAndOverbookLineItems" => "ReserveAndOverbookLineItems",
    "ReserveLineItems" => "ReserveLineItems",
    "ResumeAndOverbookLineItems" => "ResumeAndOverbookLineItems",
    "ResumeLineItems" => "ResumeLineItems",
    "ServerError" => "ServerError",
    "Size" => "Size",
    "SoapRequestHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "Statement" => "Statement",
    "StatementError" => "StatementError",
    "Stats" => "Stats",
    "StringLengthError" => "StringLengthError",
    "String_ValueMapEntry" => "String_ValueMapEntry",
    "Targeting" => "Targeting",
    "TeamError" => "TeamError",
    "TechnologyTargetingError" => "TechnologyTargetingError",
    "TextValue" => "TextValue",
    "TimeOfDay" => "TimeOfDay",
    "TypeError" => "TypeError",
    "UnarchiveLineItems" => "UnarchiveLineItems",
    "UniqueError" => "UniqueError",
    "UpdateResult" => "UpdateResult",
    "UserDomainTargeting" => "UserDomainTargeting",
    "UserDomainTargetingError" => "UserDomainTargetingError",
    "VideoPositionTargeting" => "VideoPositionTargeting",
    "ApiVersionError.Reason" => "ApiVersionErrorReason",
    "AudienceExtensionError.Reason" => "AudienceExtensionErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "ClickTrackingLineItemError.Reason" => "ClickTrackingLineItemErrorReason",
    "CommonError.Reason" => "CommonErrorReason",
    "CompanionDeliveryOption" => "CompanionDeliveryOption",
    "CompanyCreditStatusError.Reason" => "CompanyCreditStatusErrorReason",
    "ComputedStatus" => "ComputedStatus",
    "CostType" => "CostType",
    "CreativeRotationType" => "CreativeRotationType",
    "CreativeSizeType" => "CreativeSizeType",
    "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
    "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
    "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
    "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
    "AudienceSegmentCriteria.ComparisonOperator" => "AudienceSegmentCriteriaComparisonOperator",
    "DateTimeRangeTargetingError.Reason" => "DateTimeRangeTargetingErrorReason",
    "DayOfWeek" => "DayOfWeek",
    "DayPartTargetingError.Reason" => "DayPartTargetingErrorReason",
    "DeliveryTimeZone" => "DeliveryTimeZone",
    "DeliveryRateType" => "DeliveryRateType",
    "EnvironmentType" => "EnvironmentType",
    "FeatureError.Reason" => "FeatureErrorReason",
    "ForecastError.Reason" => "ForecastErrorReason",
    "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
    "GenericTargetingError.Reason" => "GenericTargetingErrorReason",
    "GeoTargetingError.Reason" => "GeoTargetingErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
    "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
    "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
    "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
    "LineItemDiscountType" => "LineItemDiscountType",
    "LineItemError.Reason" => "LineItemErrorReason",
    "LineItemFlightDateError.Reason" => "LineItemFlightDateErrorReason",
    "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
    "LineItemSummary.Duration" => "LineItemSummaryDuration",
    "LineItemSummary.ReservationStatus" => "LineItemSummaryReservationStatus",
    "LineItemType" => "LineItemType",
    "MinuteOfHour" => "MinuteOfHour",
    "NotNullError.Reason" => "NotNullErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OrderError.Reason" => "OrderErrorReason",
    "ParseError.Reason" => "ParseErrorReason",
    "PermissionError.Reason" => "PermissionErrorReason",
    "CreativePersistenceType" => "CreativePersistenceType",
    "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
    "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
    "RequiredSizeError.Reason" => "RequiredSizeErrorReason",
    "ReservationDetailsError.Reason" => "ReservationDetailsErrorReason",
    "RoadblockingType" => "RoadblockingType",
    "ServerError.Reason" => "ServerErrorReason",
    "StartDateTimeType" => "StartDateTimeType",
    "StatementError.Reason" => "StatementErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "TargetPlatform" => "TargetPlatform",
    "TeamError.Reason" => "TeamErrorReason",
    "TechnologyTargetingError.Reason" => "TechnologyTargetingErrorReason",
    "TimeUnit" => "TimeUnit",
    "UnitType" => "UnitType",
    "UserDomainTargetingError.Reason" => "UserDomainTargetingErrorReason",
    "VideoPositionTargetingType" => "VideoPositionTargetingType",
    "createLineItem" => "createLineItem",
    "createLineItemResponse" => "createLineItemResponse",
    "createLineItems" => "createLineItems",
    "createLineItemsResponse" => "createLineItemsResponse",
    "getLineItem" => "getLineItem",
    "getLineItemResponse" => "getLineItemResponse",
    "getLineItemsByStatement" => "getLineItemsByStatement",
    "getLineItemsByStatementResponse" => "getLineItemsByStatementResponse",
    "performLineItemAction" => "performLineItemAction",
    "performLineItemActionResponse" => "performLineItemActionResponse",
    "updateLineItem" => "updateLineItem",
    "updateLineItemResponse" => "updateLineItemResponse",
    "updateLineItems" => "updateLineItems",
    "updateLineItemsResponse" => "updateLineItemsResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://www.google.com/apis/ads/publisher/v201211/LineItemService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = LineItemService::$classmap;
    parent::__construct($wsdl, $options, $user, 'LineItemService', 'https://www.google.com/apis/ads/publisher/v201211');
  }

  /**
   * Creates a new {@link LineItem}.
   * 
   * These fields are required:
   * <ul>
   * <li>{@link LineItem#costPerUnit}</li>
   * <li>{@link LineItem#costType}<li>
   * <li>{@link LineItem#endDateTime}</li>
   * <li>{@link LineItem#lineItemType}</li>
   * <li>{@link LineItem#name}</li>
   * <li>{@link LineItem#orderId}</li>
   * <li>{@link LineItem#startDateTime}</li>
   * <li>{@link LineItem#unitsBought}</li>
   * <li>{@link LineItem#creativePlaceholders}</li>
   * <li>{@link LineItem#targeting}</li>
   * </ul>
   * 
   * @param lineItem the line item to create
   * @return the line item with its ID filled in
   */
  public function createLineItem($lineItem) {
    $arg = new createLineItem($lineItem);
    $result = $this->__soapCall("createLineItem", array($arg));
    return $result->rval;
  }


  /**
   * Creates new {@link LineItem} objects.
   * 
   * @param lineItems the line items to create
   * @return the created line items with their IDs filled in
   */
  public function createLineItems($lineItems) {
    $arg = new createLineItems($lineItems);
    $result = $this->__soapCall("createLineItems", array($arg));
    return $result->rval;
  }


  /**
   * Returns the {@link LineItem} uniquely identified by the given ID.
   * 
   * @param lineItemId the ID of the line item, which must already exist
   * @return the {@code LineItem} uniquely identified by the given ID
   */
  public function getLineItem($lineItemId) {
    $arg = new getLineItem($lineItemId);
    $result = $this->__soapCall("getLineItem", array($arg));
    return $result->rval;
  }


  /**
   * Gets a {@link LineItemPage} of {@link LineItem} objects that satisfy the
   * given {@link Statement#query}. The following fields are supported for
   * filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code costType}</td>
   * <td>{@link LineItem#costType}</td>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link LineItem#id}</td>
   * </tr>
   * <tr>
   * <td>{@code lineItemType}</td>
   * <td>{@link LineItem#lineItemType}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link LineItem#name}</td>
   * </tr>
   * <tr>
   * <td>{@code orderId}</td>
   * <td>{@link LineItem#orderId}</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link LineItem#status}</td>
   * </tr>
   * <tr>
   * <td>{@code unitsBought}</td>
   * <td>{@link LineItem#unitsBought}</td>
   * </tr>
   * <tr>
   * <td>{@code deliveryRateType}</td>
   * <td>{@link LineItem#deliveryRateType}</td>
   * </tr>
   * <tr>
   * <td>{@code lastModifiedDateTime}</td>
   * <td>{@link LineItem#lastModifiedDateTime}</td>
   * </tr>
   * <tr>
   * <td>{@code creationDateTime}</td>
   * <td>{@link LineItem#creationDateTime}</td>
   * </tr>
   * <tr>
   * <td>{@code isMissingCreatives}</td>
   * <td>{@link LineItem#isMissingCreatives}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of line items.
   * @return the line items that match the given filter
   */
  public function getLineItemsByStatement($filterStatement) {
    $arg = new getLineItemsByStatement($filterStatement);
    $result = $this->__soapCall("getLineItemsByStatement", array($arg));
    return $result->rval;
  }


  /**
   * Performs actions on {@link LineItem} objects that match the given
   * {@link Statement#query}.
   * 
   * @param lineItemAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of line items
   * @return the result of the action performed
   */
  public function performLineItemAction($lineItemAction, $filterStatement) {
    $arg = new performLineItemAction($lineItemAction, $filterStatement);
    $result = $this->__soapCall("performLineItemAction", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link LineItem}.
   * 
   * @param lineItem the line item to update
   * @return the updated line item
   */
  public function updateLineItem($lineItem) {
    $arg = new updateLineItem($lineItem);
    $result = $this->__soapCall("updateLineItem", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link LineItem} objects.
   * 
   * @param lineItems the line items to update
   * @return the updated line items
   */
  public function updateLineItems($lineItems) {
    $arg = new updateLineItems($lineItems);
    $result = $this->__soapCall("updateLineItems", array($arg));
    return $result->rval;
  }


}}