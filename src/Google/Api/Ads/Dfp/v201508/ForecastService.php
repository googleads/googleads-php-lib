<?php
/**
 * Contains all client objects for the ForecastService
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201508
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once "Google/Api/Ads/Dfp/Lib/DfpSoapClient.php";

if (!class_exists("AdUnitTargeting", false)) {
  /**
   * Represents targeted or excluded ad units.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AdUnitTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AdUnitTargeting";

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

    public function __construct($adUnitId = null, $includeDescendants = null) {
      $this->adUnitId = $adUnitId;
      $this->includeDescendants = $includeDescendants;
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
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($fieldPath = null, $trigger = null, $errorString = null) {
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("TechnologyTargeting", false)) {
  /**
   * Provides {@link LineItem} objects the ability to target or exclude
   * technologies.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TechnologyTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TechnologyTargeting";

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

    public function __construct($bandwidthGroupTargeting = null, $browserTargeting = null, $browserLanguageTargeting = null, $deviceCapabilityTargeting = null, $deviceCategoryTargeting = null, $deviceManufacturerTargeting = null, $mobileCarrierTargeting = null, $mobileDeviceTargeting = null, $mobileDeviceSubmodelTargeting = null, $operatingSystemTargeting = null, $operatingSystemVersionTargeting = null) {
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

  }
}

if (!class_exists("ApiVersionError", false)) {
  /**
   * Errors related to the usage of API versions.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ApiVersionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ApiVersionError";

    /**
     * @access public
     * @var tnsApiVersionErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ApplicationException";

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

    public function __construct($message = null) {
      $this->message = $message;
    }

  }
}

if (!class_exists("AppliedLabel", false)) {
  /**
   * Represents a {@link Label} that can be applied to an entity. To negate an
   * inherited label, create an {@code AppliedLabel} with {@code labelId} as the
   * inherited label's ID and {@code isNegated} set to true.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AppliedLabel {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AppliedLabel";

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

    public function __construct($labelId = null, $isNegated = null) {
      $this->labelId = $labelId;
      $this->isNegated = $isNegated;
    }

  }
}

if (!class_exists("AudienceExtensionError", false)) {
  /**
   * Errors associated with audience extension enabled line items
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AudienceExtensionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AudienceExtensionError";

    /**
     * @access public
     * @var tnsAudienceExtensionErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("AuthenticationError", false)) {
  /**
   * An error for an exception that occurred when authenticating.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("AvailabilityForecast", false)) {
  /**
   * Describes predicted inventory availability for a {@link ProspectiveLineItem}.
   * 
   * <p>Inventory has three threshold values along a line of possible inventory.
   * From least to most, these are:
   * 
   * <dl>
   * <li>Available units -- How many units can be booked without affecting any other line items.
   * Booking more than this number can cause lower and same priority line items to underdeliver.
   * <li>Possible units -- How many units can be booked without affecting any higher priority line
   * items. Booking more than this number can cause the line item to underdeliver.
   * <li>Matched (forecast) units -- How many units satisfy all specified
   * criteria.
   * </dl>
   * 
   * <p>Underdelivery is caused by overbooking. However, if more impressions are served than are
   * predicted, the extra available inventory might enable all inventory guarantees to be met without
   * overbooking.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AvailabilityForecast {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AvailabilityForecast";

    /**
     * @access public
     * @var integer
     */
    public $lineItemId;

    /**
     * @access public
     * @var integer
     */
    public $orderId;

    /**
     * @access public
     * @var tnsUnitType
     */
    public $unitType;

    /**
     * @access public
     * @var integer
     */
    public $availableUnits;

    /**
     * @access public
     * @var integer
     */
    public $deliveredUnits;

    /**
     * @access public
     * @var integer
     */
    public $matchedUnits;

    /**
     * @access public
     * @var integer
     */
    public $possibleUnits;

    /**
     * @access public
     * @var integer
     */
    public $reservedUnits;

    /**
     * @access public
     * @var TargetingCriteriaBreakdown[]
     */
    public $targetingCriteriaBreakdowns;

    /**
     * @access public
     * @var ContendingLineItem[]
     */
    public $contendingLineItems;

    /**
     * @access public
     * @var GrpDemographicBreakdown[]
     */
    public $demographicBreakdowns;

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

    public function __construct($lineItemId = null, $orderId = null, $unitType = null, $availableUnits = null, $deliveredUnits = null, $matchedUnits = null, $possibleUnits = null, $reservedUnits = null, $targetingCriteriaBreakdowns = null, $contendingLineItems = null, $demographicBreakdowns = null) {
      $this->lineItemId = $lineItemId;
      $this->orderId = $orderId;
      $this->unitType = $unitType;
      $this->availableUnits = $availableUnits;
      $this->deliveredUnits = $deliveredUnits;
      $this->matchedUnits = $matchedUnits;
      $this->possibleUnits = $possibleUnits;
      $this->reservedUnits = $reservedUnits;
      $this->targetingCriteriaBreakdowns = $targetingCriteriaBreakdowns;
      $this->contendingLineItems = $contendingLineItems;
      $this->demographicBreakdowns = $demographicBreakdowns;
    }

  }
}

if (!class_exists("AvailabilityForecastOptions", false)) {
  /**
   * Forecasting options for line item availability forecasts.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AvailabilityForecastOptions {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AvailabilityForecastOptions";

    /**
     * @access public
     * @var boolean
     */
    public $includeTargetingCriteriaBreakdown;

    /**
     * @access public
     * @var boolean
     */
    public $includeContendingLineItems;

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

    public function __construct($includeTargetingCriteriaBreakdown = null, $includeContendingLineItems = null) {
      $this->includeTargetingCriteriaBreakdown = $includeTargetingCriteriaBreakdown;
      $this->includeContendingLineItems = $includeContendingLineItems;
    }

  }
}

if (!class_exists("BandwidthGroupTargeting", false)) {
  /**
   * Represents bandwidth groups that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class BandwidthGroupTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "BandwidthGroupTargeting";

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

    public function __construct($isTargeted = null, $bandwidthGroups = null) {
      $this->isTargeted = $isTargeted;
      $this->bandwidthGroups = $bandwidthGroups;
    }

  }
}

if (!class_exists("BaseCustomFieldValue", false)) {
  /**
   * The value of a {@link CustomField} for a particular entity.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "BaseCustomFieldValue";

    /**
     * @access public
     * @var integer
     */
    public $customFieldId;

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

    public function __construct($customFieldId = null) {
      $this->customFieldId = $customFieldId;
    }

  }
}

if (!class_exists("BrowserLanguageTargeting", false)) {
  /**
   * Represents browser languages that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class BrowserLanguageTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "BrowserLanguageTargeting";

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

    public function __construct($isTargeted = null, $browserLanguages = null) {
      $this->isTargeted = $isTargeted;
      $this->browserLanguages = $browserLanguages;
    }

  }
}

if (!class_exists("BrowserTargeting", false)) {
  /**
   * Represents browsers that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class BrowserTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "BrowserTargeting";

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

    public function __construct($isTargeted = null, $browsers = null) {
      $this->isTargeted = $isTargeted;
      $this->browsers = $browsers;
    }

  }
}

if (!class_exists("ClickTrackingLineItemError", false)) {
  /**
   * Click tracking is a special line item type with a number of unique errors as
   * described below.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ClickTrackingLineItemError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ClickTrackingLineItemError";

    /**
     * @access public
     * @var tnsClickTrackingLineItemErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("CollectionSizeError", false)) {
  /**
   * Error for the size of the collection being too large
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CollectionSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("CommonError", false)) {
  /**
   * A place for common errors that can be used across services.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CommonError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CommonError";

    /**
     * @access public
     * @var tnsCommonErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("CompanyCreditStatusError", false)) {
  /**
   * Lists all errors due to {@link Company#creditStatus}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CompanyCreditStatusError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CompanyCreditStatusError";

    /**
     * @access public
     * @var tnsCompanyCreditStatusErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ContendingLineItem", false)) {
  /**
   * Describes contending line items for a {@link Forecast}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ContendingLineItem {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ContendingLineItem";

    /**
     * @access public
     * @var integer
     */
    public $lineItemId;

    /**
     * @access public
     * @var integer
     */
    public $contendingImpressions;

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

    public function __construct($lineItemId = null, $contendingImpressions = null) {
      $this->lineItemId = $lineItemId;
      $this->contendingImpressions = $contendingImpressions;
    }

  }
}

if (!class_exists("ContentMetadataKeyHierarchyTargeting", false)) {
  /**
   * Represents one or more {@link CustomTargetingValue custom targeting values} from different
   * {@link CustomTargetingKey custom targeting keys} ANDed together.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ContentMetadataKeyHierarchyTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ContentMetadataKeyHierarchyTargeting";

    /**
     * @access public
     * @var integer[]
     */
    public $customTargetingValueIds;

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

    public function __construct($customTargetingValueIds = null) {
      $this->customTargetingValueIds = $customTargetingValueIds;
    }

  }
}

if (!class_exists("ContentMetadataTargetingError", false)) {
  /**
   * Lists all errors related to {@link ContentMetadataTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ContentMetadataTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ContentMetadataTargetingError";

    /**
     * @access public
     * @var tnsContentMetadataTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ContentTargeting", false)) {
  /**
   * Used to target {@link LineItem}s to specific videos on a publisher's site.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ContentTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ContentTargeting";

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
     * @access public
     * @var integer[]
     */
    public $targetedVideoContentBundleIds;

    /**
     * @access public
     * @var integer[]
     */
    public $excludedVideoContentBundleIds;

    /**
     * @access public
     * @var ContentMetadataKeyHierarchyTargeting[]
     */
    public $targetedContentMetadata;

    /**
     * @access public
     * @var ContentMetadataKeyHierarchyTargeting[]
     */
    public $excludedContentMetadata;

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

    public function __construct($targetedContentIds = null, $excludedContentIds = null, $targetedVideoCategoryIds = null, $excludedVideoCategoryIds = null, $targetedVideoContentBundleIds = null, $excludedVideoContentBundleIds = null, $targetedContentMetadata = null, $excludedContentMetadata = null) {
      $this->targetedContentIds = $targetedContentIds;
      $this->excludedContentIds = $excludedContentIds;
      $this->targetedVideoCategoryIds = $targetedVideoCategoryIds;
      $this->excludedVideoCategoryIds = $excludedVideoCategoryIds;
      $this->targetedVideoContentBundleIds = $targetedVideoContentBundleIds;
      $this->excludedVideoContentBundleIds = $excludedVideoContentBundleIds;
      $this->targetedContentMetadata = $targetedContentMetadata;
      $this->excludedContentMetadata = $excludedContentMetadata;
    }

  }
}

if (!class_exists("CreativeError", false)) {
  /**
   * Lists all errors associated with creatives.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CreativeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CreativeError";

    /**
     * @access public
     * @var tnsCreativeErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("CreativePlaceholder", false)) {
  /**
   * A {@code CreativePlaceholder} describes a slot that a creative is expected to
   * fill. This is used primarily to help in forecasting, and also to validate
   * that the correct creatives are associated with the line item. A
   * {@code CreativePlaceholder} must contain a size, and it can optionally
   * contain companions. Companions are only valid if the line item's environment
   * type is {@link EnvironmentType#VIDEO_PLAYER}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CreativePlaceholder {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CreativePlaceholder";

    /**
     * @access public
     * @var Size
     */
    public $size;

    /**
     * @access public
     * @var integer
     */
    public $creativeTemplateId;

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
    public $expectedCreativeCount;

    /**
     * @access public
     * @var tnsCreativeSizeType
     */
    public $creativeSizeType;

    /**
     * @access public
     * @var string
     */
    public $targetingName;

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

    public function __construct($size = null, $creativeTemplateId = null, $companions = null, $appliedLabels = null, $effectiveAppliedLabels = null, $expectedCreativeCount = null, $creativeSizeType = null, $targetingName = null) {
      $this->size = $size;
      $this->creativeTemplateId = $creativeTemplateId;
      $this->companions = $companions;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->expectedCreativeCount = $expectedCreativeCount;
      $this->creativeSizeType = $creativeSizeType;
      $this->targetingName = $targetingName;
    }

  }
}

if (!class_exists("CreativeTargeting", false)) {
  /**
   * Represents the creative targeting criteria for a {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CreativeTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CreativeTargeting";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var Targeting
     */
    public $targeting;

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

    public function __construct($name = null, $targeting = null) {
      $this->name = $name;
      $this->targeting = $targeting;
    }

  }
}

if (!class_exists("CrossSellError", false)) {
  /**
   * Lists all errors associated with cross selling.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CrossSellError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CrossSellError";

    /**
     * @access public
     * @var tnsCrossSellErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("CustomFieldValue", false)) {
  /**
   * The value of a {@link CustomField} that does not have a {@link CustomField#dataType}
   * of {@link CustomFieldDataType#DROP_DOWN}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomFieldValue extends BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomFieldValue";

    /**
     * @access public
     * @var Value
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

    public function __construct($value = null, $customFieldId = null) {
      parent::__construct();
      $this->value = $value;
      $this->customFieldId = $customFieldId;
    }

  }
}

if (!class_exists("CustomFieldValueError", false)) {
  /**
   * Errors specific to editing custom field values
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomFieldValueError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomFieldValueError";

    /**
     * @access public
     * @var tnsCustomFieldValueErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("CustomTargetingError", false)) {
  /**
   * Lists all errors related to {@link CustomTargetingKey} and
   * {@link CustomTargetingValue} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomTargetingError";

    /**
     * @access public
     * @var tnsCustomTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("CustomCriteriaNode", false)) {
  /**
   * A {@link CustomCriteriaNode} is a node in the custom targeting tree. A custom
   * criteria node can either be a {@link CustomCriteriaSet} (a non-leaf node) or
   * a {@link CustomCriteria} (a leaf node). The custom criteria targeting tree is
   * subject to the rules defined on {@link Targeting#customTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomCriteriaNode";

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

if (!class_exists("Date", false)) {
  /**
   * Represents a date.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class Date {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($year = null, $month = null, $day = null) {
      $this->year = $year;
      $this->month = $month;
      $this->day = $day;
    }

  }
}

if (!class_exists("DfpDateTime", false)) {
  /**
   * Represents a date combined with the time of day.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DfpDateTime {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($date = null, $hour = null, $minute = null, $second = null, $timeZoneID = null) {
      $this->date = $date;
      $this->hour = $hour;
      $this->minute = $minute;
      $this->second = $second;
      $this->timeZoneID = $timeZoneID;
    }

  }
}

if (!class_exists("DateTimeRangeTargetingError", false)) {
  /**
   * Lists all date time range errors caused by associating a line item with a targeting
   * expression.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DateTimeRangeTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DateTimeRangeTargetingError";

    /**
     * @access public
     * @var tnsDateTimeRangeTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("DayPart", false)) {
  /**
   * {@code DayPart} represents a time-period within a day of the week which is
   * targeted by a {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DayPart {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DayPart";

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

    public function __construct($dayOfWeek = null, $startTime = null, $endTime = null) {
      $this->dayOfWeek = $dayOfWeek;
      $this->startTime = $startTime;
      $this->endTime = $endTime;
    }

  }
}

if (!class_exists("DayPartTargeting", false)) {
  /**
   * Modify the delivery times of line items for particular days of the week. By
   * default, line items are served at all days and times.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DayPartTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DayPartTargeting";

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

    public function __construct($dayParts = null, $timeZone = null) {
      $this->dayParts = $dayParts;
      $this->timeZone = $timeZone;
    }

  }
}

if (!class_exists("DayPartTargetingError", false)) {
  /**
   * Lists all errors associated with day-part targeting for a line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DayPartTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DayPartTargetingError";

    /**
     * @access public
     * @var tnsDayPartTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("DeliveryData", false)) {
  /**
   * Holds the number of clicks or impressions, determined by
   * {@link LineItem#costType}, delivered for a single line item for the
   * last 7 days
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeliveryData {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeliveryData";

    /**
     * @access public
     * @var integer[]
     */
    public $units;

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

    public function __construct($units = null) {
      $this->units = $units;
    }

  }
}

if (!class_exists("DeliveryForecastOptions", false)) {
  /**
   * Forecasting options for line item delivery forecasts.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeliveryForecastOptions {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeliveryForecastOptions";

    /**
     * @access public
     * @var integer[]
     */
    public $ignoredLineItemIds;

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

    public function __construct($ignoredLineItemIds = null) {
      $this->ignoredLineItemIds = $ignoredLineItemIds;
    }

  }
}

if (!class_exists("DeliveryForecast", false)) {
  /**
   * The forecast of delivery for a list of {@link ProspectiveLineItem} objects to be reserved at the
   * same time.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeliveryForecast {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeliveryForecast";

    /**
     * @access public
     * @var LineItemDeliveryForecast[]
     */
    public $lineItemDeliveryForecasts;

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

    public function __construct($lineItemDeliveryForecasts = null) {
      $this->lineItemDeliveryForecasts = $lineItemDeliveryForecasts;
    }

  }
}

if (!class_exists("DeliveryIndicator", false)) {
  /**
   * Indicates the delivery performance of the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeliveryIndicator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeliveryIndicator";

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

    public function __construct($expectedDeliveryPercentage = null, $actualDeliveryPercentage = null) {
      $this->expectedDeliveryPercentage = $expectedDeliveryPercentage;
      $this->actualDeliveryPercentage = $actualDeliveryPercentage;
    }

  }
}

if (!class_exists("DeviceCapabilityTargeting", false)) {
  /**
   * Represents device capabilities that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeviceCapabilityTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeviceCapabilityTargeting";

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

    public function __construct($targetedDeviceCapabilities = null, $excludedDeviceCapabilities = null) {
      $this->targetedDeviceCapabilities = $targetedDeviceCapabilities;
      $this->excludedDeviceCapabilities = $excludedDeviceCapabilities;
    }

  }
}

if (!class_exists("DeviceCategoryTargeting", false)) {
  /**
   * Represents device categories that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeviceCategoryTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeviceCategoryTargeting";

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

    public function __construct($targetedDeviceCategories = null, $excludedDeviceCategories = null) {
      $this->targetedDeviceCategories = $targetedDeviceCategories;
      $this->excludedDeviceCategories = $excludedDeviceCategories;
    }

  }
}

if (!class_exists("DeviceManufacturerTargeting", false)) {
  /**
   * Represents device manufacturer that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeviceManufacturerTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeviceManufacturerTargeting";

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

    public function __construct($isTargeted = null, $deviceManufacturers = null) {
      $this->isTargeted = $isTargeted;
      $this->deviceManufacturers = $deviceManufacturers;
    }

  }
}

if (!class_exists("DropDownCustomFieldValue", false)) {
  /**
   * A {@link CustomFieldValue} for a {@link CustomField} that has a {@link CustomField#dataType}
   * of {@link CustomFieldDataType#DROP_DOWN}
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DropDownCustomFieldValue extends BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DropDownCustomFieldValue";

    /**
     * @access public
     * @var integer
     */
    public $customFieldOptionId;

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

    public function __construct($customFieldOptionId = null, $customFieldId = null) {
      parent::__construct();
      $this->customFieldOptionId = $customFieldOptionId;
      $this->customFieldId = $customFieldId;
    }

  }
}

if (!class_exists("EntityChildrenLimitReachedError", false)) {
  /**
   * Lists errors relating to having too many children on an entity.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class EntityChildrenLimitReachedError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "EntityChildrenLimitReachedError";

    /**
     * @access public
     * @var tnsEntityChildrenLimitReachedErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("EntityLimitReachedError", false)) {
  /**
   * An error that occurs when creating an entity if the limit on the number of allowed entities for
   * a network has already been reached.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class EntityLimitReachedError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "EntityLimitReachedError";

    /**
     * @access public
     * @var tnsEntityLimitReachedErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("FeatureError", false)) {
  /**
   * Errors related to feature management.  If you attempt using a feature that is not available to
   * the current network you'll receive a FeatureError with the missing feature as the trigger.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class FeatureError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "FeatureError";

    /**
     * @access public
     * @var tnsFeatureErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ForecastError", false)) {
  /**
   * Errors that can result from a forecast request.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ForecastError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ForecastError";

    /**
     * @access public
     * @var tnsForecastErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("FrequencyCap", false)) {
  /**
   * Represents a limit on the number of times a single viewer can be exposed to
   * the same {@link LineItem} in a specified time period.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class FrequencyCap {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "FrequencyCap";

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

    public function __construct($maxImpressions = null, $numTimeUnits = null, $timeUnit = null) {
      $this->maxImpressions = $maxImpressions;
      $this->numTimeUnits = $numTimeUnits;
      $this->timeUnit = $timeUnit;
    }

  }
}

if (!class_exists("FrequencyCapError", false)) {
  /**
   * Lists all errors associated with frequency caps.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class FrequencyCapError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "FrequencyCapError";

    /**
     * @access public
     * @var tnsFrequencyCapErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("GenericTargetingError", false)) {
  /**
   * Targeting validation errors that can be used by different targeting types.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GenericTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GenericTargetingError";

    /**
     * @access public
     * @var tnsGenericTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("GeoTargeting", false)) {
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
   * @subpackage v201508
   */
  class GeoTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GeoTargeting";

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

    public function __construct($targetedLocations = null, $excludedLocations = null) {
      $this->targetedLocations = $targetedLocations;
      $this->excludedLocations = $excludedLocations;
    }

  }
}

if (!class_exists("GeoTargetingError", false)) {
  /**
   * Lists all errors associated with geographical targeting for a
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GeoTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GeoTargetingError";

    /**
     * @access public
     * @var tnsGeoTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("Goal", false)) {
  /**
   * Defines the criteria a {@link LineItem} needs to satisfy to meet its delivery goal.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class Goal {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "Goal";

    /**
     * @access public
     * @var tnsGoalType
     */
    public $goalType;

    /**
     * @access public
     * @var tnsUnitType
     */
    public $unitType;

    /**
     * @access public
     * @var integer
     */
    public $units;

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

    public function __construct($goalType = null, $unitType = null, $units = null) {
      $this->goalType = $goalType;
      $this->unitType = $unitType;
      $this->units = $units;
    }

  }
}

if (!class_exists("GrpDemographicBreakdown", false)) {
  /**
   * GRP forecast breakdown counts associated with a gender and age demographic.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GrpDemographicBreakdown {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GrpDemographicBreakdown";

    /**
     * @access public
     * @var integer
     */
    public $availableUnits;

    /**
     * @access public
     * @var integer
     */
    public $matchedUnits;

    /**
     * @access public
     * @var tnsGrpUnitType
     */
    public $unitType;

    /**
     * @access public
     * @var tnsGrpGender
     */
    public $gender;

    /**
     * @access public
     * @var tnsGrpAge
     */
    public $age;

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

    public function __construct($availableUnits = null, $matchedUnits = null, $unitType = null, $gender = null, $age = null) {
      $this->availableUnits = $availableUnits;
      $this->matchedUnits = $matchedUnits;
      $this->unitType = $unitType;
      $this->gender = $gender;
      $this->age = $age;
    }

  }
}

if (!class_exists("GrpSettings", false)) {
  /**
   * {@code GrpSettings} contains information for a line item that will have a target demographic
   * when serving. This information will be used to set up tracking and enable reporting on the
   * demographic information.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GrpSettings {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GrpSettings";

    /**
     * @access public
     * @var integer
     */
    public $minTargetAge;

    /**
     * @access public
     * @var integer
     */
    public $maxTargetAge;

    /**
     * @access public
     * @var tnsGrpTargetGender
     */
    public $targetGender;

    /**
     * @access public
     * @var tnsGrpProvider
     */
    public $provider;

    /**
     * @access public
     * @var integer
     */
    public $targetImpressionGoal;

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

    public function __construct($minTargetAge = null, $maxTargetAge = null, $targetGender = null, $provider = null, $targetImpressionGoal = null) {
      $this->minTargetAge = $minTargetAge;
      $this->maxTargetAge = $maxTargetAge;
      $this->targetGender = $targetGender;
      $this->provider = $provider;
      $this->targetImpressionGoal = $targetImpressionGoal;
    }

  }
}

if (!class_exists("GrpSettingsError", false)) {
  /**
   * Errors associated with line items with GRP settings.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GrpSettingsError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GrpSettingsError";

    /**
     * @access public
     * @var tnsGrpSettingsErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ImageError", false)) {
  /**
   * Lists all errors associated with images.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ImageError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ImageError";

    /**
     * @access public
     * @var tnsImageErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("InvalidUrlError", false)) {
  /**
   * Lists all errors associated with URLs.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class InvalidUrlError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "InvalidUrlError";

    /**
     * @access public
     * @var tnsInvalidUrlErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("InventoryTargeting", false)) {
  /**
   * A collection of targeted and excluded ad units and placements.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class InventoryTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "InventoryTargeting";

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

    public function __construct($targetedAdUnits = null, $excludedAdUnits = null, $targetedPlacementIds = null) {
      $this->targetedAdUnits = $targetedAdUnits;
      $this->excludedAdUnits = $excludedAdUnits;
      $this->targetedPlacementIds = $targetedPlacementIds;
    }

  }
}

if (!class_exists("InventoryTargetingError", false)) {
  /**
   * Lists all inventory errors caused by associating a line item with a targeting
   * expression.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class InventoryTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "InventoryTargetingError";

    /**
     * @access public
     * @var tnsInventoryTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("InventoryUnitError", false)) {
  /**
   * Lists the generic errors associated with {@link AdUnit} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class InventoryUnitError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "InventoryUnitError";

    /**
     * @access public
     * @var tnsInventoryUnitErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("LabelEntityAssociationError", false)) {
  /**
   * Errors specific to creating label entity associations.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LabelEntityAssociationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LabelEntityAssociationError";

    /**
     * @access public
     * @var tnsLabelEntityAssociationErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("LineItemActivityAssociationError", false)) {
  /**
   * Errors specific to associating activities to line items.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemActivityAssociationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemActivityAssociationError";

    /**
     * @access public
     * @var tnsLineItemActivityAssociationErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("LineItemActivityAssociation", false)) {
  /**
   * A {@code LineItemActivityAssociation} associates a {@link LineItem} with an {@link Activity} so
   * that the conversions of the {@link Activity} can be counted against the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemActivityAssociation {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemActivityAssociation";

    /**
     * @access public
     * @var integer
     */
    public $activityId;

    /**
     * @access public
     * @var Money
     */
    public $clickThroughConversionCost;

    /**
     * @access public
     * @var Money
     */
    public $viewThroughConversionCost;

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

    public function __construct($activityId = null, $clickThroughConversionCost = null, $viewThroughConversionCost = null) {
      $this->activityId = $activityId;
      $this->clickThroughConversionCost = $clickThroughConversionCost;
      $this->viewThroughConversionCost = $viewThroughConversionCost;
    }

  }
}

if (!class_exists("LineItemCreativeAssociationError", false)) {
  /**
   * Lists all errors associated with line item-to-creative association dates.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemCreativeAssociationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemCreativeAssociationError";

    /**
     * @access public
     * @var tnsLineItemCreativeAssociationErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("LineItemDeliveryForecast", false)) {
  /**
   * The forecasted delivery of a {@link ProspectiveLineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemDeliveryForecast {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemDeliveryForecast";

    /**
     * @access public
     * @var integer
     */
    public $lineItemId;

    /**
     * @access public
     * @var integer
     */
    public $orderId;

    /**
     * @access public
     * @var tnsUnitType
     */
    public $unitType;

    /**
     * @access public
     * @var integer
     */
    public $predictedDeliveryUnits;

    /**
     * @access public
     * @var integer
     */
    public $deliveredUnits;

    /**
     * @access public
     * @var integer
     */
    public $matchedUnits;

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

    public function __construct($lineItemId = null, $orderId = null, $unitType = null, $predictedDeliveryUnits = null, $deliveredUnits = null, $matchedUnits = null) {
      $this->lineItemId = $lineItemId;
      $this->orderId = $orderId;
      $this->unitType = $unitType;
      $this->predictedDeliveryUnits = $predictedDeliveryUnits;
      $this->deliveredUnits = $deliveredUnits;
      $this->matchedUnits = $matchedUnits;
    }

  }
}

if (!class_exists("LineItemError", false)) {
  /**
   * A catch-all error that lists all generic errors associated with LineItem.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemError";

    /**
     * @access public
     * @var tnsLineItemErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("LineItemFlightDateError", false)) {
  /**
   * Lists all errors associated with LineItem start and end dates.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemFlightDateError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemFlightDateError";

    /**
     * @access public
     * @var tnsLineItemFlightDateErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("LineItemOperationError", false)) {
  /**
   * Lists all errors for executing operations on line items
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemOperationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemOperationError";

    /**
     * @access public
     * @var tnsLineItemOperationErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("LineItemSummary", false)) {
  /**
   * The {@code LineItemSummary} represents the base class from which a {@code
   * LineItem} is derived.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemSummary {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemSummary";

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
     * @var LineItemActivityAssociation[]
     */
    public $activityAssociations;

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
    public $skipInventoryCheck;

    /**
     * @access public
     * @var boolean
     */
    public $skipCrossSellingRuleWarningChecks;

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
     * @var DateTime
     */
    public $creationDateTime;

    /**
     * @access public
     * @var boolean
     */
    public $isPrioritizedPreferredDealsEnabled;

    /**
     * @access public
     * @var integer
     */
    public $adExchangeAuctionOpeningPriority;

    /**
     * @access public
     * @var BaseCustomFieldValue[]
     */
    public $customFieldValues;

    /**
     * @access public
     * @var boolean
     */
    public $isSetTopBoxEnabled;

    /**
     * @access public
     * @var boolean
     */
    public $isMissingCreatives;

    /**
     * @access public
     * @var SetTopBoxInfo
     */
    public $setTopBoxDisplayInfo;

    /**
     * @access public
     * @var integer
     */
    public $videoMaxDuration;

    /**
     * @access public
     * @var Goal
     */
    public $primaryGoal;

    /**
     * @access public
     * @var Goal[]
     */
    public $secondaryGoals;

    /**
     * @access public
     * @var GrpSettings
     */
    public $grpSettings;

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

    public function __construct($orderId = null, $id = null, $name = null, $externalId = null, $orderName = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $autoExtensionDays = null, $unlimitedEndDateTime = null, $creativeRotationType = null, $deliveryRateType = null, $roadblockingType = null, $frequencyCaps = null, $lineItemType = null, $priority = null, $costPerUnit = null, $valueCostPerUnit = null, $costType = null, $discountType = null, $discount = null, $contractedUnitsBought = null, $creativePlaceholders = null, $activityAssociations = null, $targetPlatform = null, $environmentType = null, $companionDeliveryOption = null, $creativePersistenceType = null, $allowOverbook = null, $skipInventoryCheck = null, $skipCrossSellingRuleWarningChecks = null, $reserveAtCreation = null, $stats = null, $deliveryIndicator = null, $deliveryData = null, $budget = null, $status = null, $reservationStatus = null, $isArchived = null, $webPropertyCode = null, $appliedLabels = null, $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $lastModifiedByApp = null, $notes = null, $lastModifiedDateTime = null, $creationDateTime = null, $isPrioritizedPreferredDealsEnabled = null, $adExchangeAuctionOpeningPriority = null, $customFieldValues = null, $isSetTopBoxEnabled = null, $isMissingCreatives = null, $setTopBoxDisplayInfo = null, $videoMaxDuration = null, $primaryGoal = null, $secondaryGoals = null, $grpSettings = null) {
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
      $this->costPerUnit = $costPerUnit;
      $this->valueCostPerUnit = $valueCostPerUnit;
      $this->costType = $costType;
      $this->discountType = $discountType;
      $this->discount = $discount;
      $this->contractedUnitsBought = $contractedUnitsBought;
      $this->creativePlaceholders = $creativePlaceholders;
      $this->activityAssociations = $activityAssociations;
      $this->targetPlatform = $targetPlatform;
      $this->environmentType = $environmentType;
      $this->companionDeliveryOption = $companionDeliveryOption;
      $this->creativePersistenceType = $creativePersistenceType;
      $this->allowOverbook = $allowOverbook;
      $this->skipInventoryCheck = $skipInventoryCheck;
      $this->skipCrossSellingRuleWarningChecks = $skipCrossSellingRuleWarningChecks;
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
      $this->creationDateTime = $creationDateTime;
      $this->isPrioritizedPreferredDealsEnabled = $isPrioritizedPreferredDealsEnabled;
      $this->adExchangeAuctionOpeningPriority = $adExchangeAuctionOpeningPriority;
      $this->customFieldValues = $customFieldValues;
      $this->isSetTopBoxEnabled = $isSetTopBoxEnabled;
      $this->isMissingCreatives = $isMissingCreatives;
      $this->setTopBoxDisplayInfo = $setTopBoxDisplayInfo;
      $this->videoMaxDuration = $videoMaxDuration;
      $this->primaryGoal = $primaryGoal;
      $this->secondaryGoals = $secondaryGoals;
      $this->grpSettings = $grpSettings;
    }

  }
}

if (!class_exists("DfpLocation", false)) {
  /**
   * A {@link Location} represents a geographical entity that can be targeted. If
   * a location type is not available because of the API version you are using,
   * the location will be represented as just the base class, otherwise it will be
   * sub-classed correctly.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DfpLocation {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "Location";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $canonicalParentId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

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

    public function __construct($id = null, $type = null, $canonicalParentId = null, $displayName = null) {
      $this->id = $id;
      $this->type = $type;
      $this->canonicalParentId = $canonicalParentId;
      $this->displayName = $displayName;
    }

  }
}

if (!class_exists("MobileCarrierTargeting", false)) {
  /**
   * Represents mobile carriers that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class MobileCarrierTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "MobileCarrierTargeting";

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

    public function __construct($isTargeted = null, $mobileCarriers = null) {
      $this->isTargeted = $isTargeted;
      $this->mobileCarriers = $mobileCarriers;
    }

  }
}

if (!class_exists("MobileDeviceSubmodelTargeting", false)) {
  /**
   * Represents mobile devices that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class MobileDeviceSubmodelTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "MobileDeviceSubmodelTargeting";

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

    public function __construct($targetedMobileDeviceSubmodels = null, $excludedMobileDeviceSubmodels = null) {
      $this->targetedMobileDeviceSubmodels = $targetedMobileDeviceSubmodels;
      $this->excludedMobileDeviceSubmodels = $excludedMobileDeviceSubmodels;
    }

  }
}

if (!class_exists("MobileDeviceTargeting", false)) {
  /**
   * Represents mobile devices that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class MobileDeviceTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "MobileDeviceTargeting";

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

    public function __construct($targetedMobileDevices = null, $excludedMobileDevices = null) {
      $this->targetedMobileDevices = $targetedMobileDevices;
      $this->excludedMobileDevices = $excludedMobileDevices;
    }

  }
}

if (!class_exists("Money", false)) {
  /**
   * Represents a money amount.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class Money {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($currencyCode = null, $microAmount = null) {
      $this->currencyCode = $currencyCode;
      $this->microAmount = $microAmount;
    }

  }
}

if (!class_exists("NotNullError", false)) {
  /**
   * Caused by supplying a null value for an attribute that cannot be null.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class NotNullError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "NotNullError";

    /**
     * @access public
     * @var tnsNotNullErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("OperatingSystemTargeting", false)) {
  /**
   * Represents operating systems that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class OperatingSystemTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "OperatingSystemTargeting";

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

    public function __construct($isTargeted = null, $operatingSystems = null) {
      $this->isTargeted = $isTargeted;
      $this->operatingSystems = $operatingSystems;
    }

  }
}

if (!class_exists("OperatingSystemVersionTargeting", false)) {
  /**
   * Represents operating system versions that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class OperatingSystemVersionTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "OperatingSystemVersionTargeting";

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

    public function __construct($targetedOperatingSystemVersions = null, $excludedOperatingSystemVersions = null) {
      $this->targetedOperatingSystemVersions = $targetedOperatingSystemVersions;
      $this->excludedOperatingSystemVersions = $excludedOperatingSystemVersions;
    }

  }
}

if (!class_exists("OrderActionError", false)) {
  /**
   * Lists all errors associated with performing actions on {@link Order} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class OrderActionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "OrderActionError";

    /**
     * @access public
     * @var tnsOrderActionErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("OrderError", false)) {
  /**
   * Lists all errors associated with orders.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class OrderError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "OrderError";

    /**
     * @access public
     * @var tnsOrderErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ParseError", false)) {
  /**
   * Lists errors related to parsing.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ParseError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ParseError";

    /**
     * @access public
     * @var tnsParseErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("PermissionError", false)) {
  /**
   * Errors related to incorrect permission.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PermissionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PermissionError";

    /**
     * @access public
     * @var tnsPermissionErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ProgrammaticError", false)) {
  /**
   * Errors associated with programmatic line items.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ProgrammaticError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ProgrammaticError";

    /**
     * @access public
     * @var tnsProgrammaticErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ProspectiveLineItem", false)) {
  /**
   * Represents a prospective line item to be forecasted.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ProspectiveLineItem {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ProspectiveLineItem";

    /**
     * @access public
     * @var LineItem
     */
    public $lineItem;

    /**
     * @access public
     * @var integer
     */
    public $advertiserId;

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

    public function __construct($lineItem = null, $advertiserId = null) {
      $this->lineItem = $lineItem;
      $this->advertiserId = $advertiserId;
    }

  }
}

if (!class_exists("PublisherQueryLanguageContextError", false)) {
  /**
   * An error that occurs while executing a PQL query contained in
   * a {@link Statement} object.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PublisherQueryLanguageContextError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PublisherQueryLanguageContextError";

    /**
     * @access public
     * @var tnsPublisherQueryLanguageContextErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("PublisherQueryLanguageSyntaxError", false)) {
  /**
   * An error that occurs while parsing a PQL query contained in a
   * {@link Statement} object.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PublisherQueryLanguageSyntaxError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PublisherQueryLanguageSyntaxError";

    /**
     * @access public
     * @var tnsPublisherQueryLanguageSyntaxErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("QuotaError", false)) {
  /**
   * Describes a client-side error on which a user is attempting
   * to perform an action to which they have no quota remaining.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class QuotaError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "QuotaError";

    /**
     * @access public
     * @var tnsQuotaErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("RegExError", false)) {
  /**
   * Caused by supplying a value for an object attribute that does not conform
   * to a documented valid regular expression.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RegExError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "RegExError";

    /**
     * @access public
     * @var tnsRegExErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("RequiredCollectionError", false)) {
  /**
   * A list of all errors to be used for validating sizes of collections.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RequiredCollectionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "RequiredCollectionError";

    /**
     * @access public
     * @var tnsRequiredCollectionErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("RequiredNumberError", false)) {
  /**
   * A list of all errors to be used in conjunction with required number
   * validators.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RequiredNumberError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "RequiredNumberError";

    /**
     * @access public
     * @var tnsRequiredNumberErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("RequiredSizeError", false)) {
  /**
   * A list of all errors to be used for validating {@link Size}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RequiredSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "RequiredSizeError";

    /**
     * @access public
     * @var tnsRequiredSizeErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ReservationDetailsError", false)) {
  /**
   * Lists all errors associated with LineItem's reservation details.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ReservationDetailsError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ReservationDetailsError";

    /**
     * @access public
     * @var tnsReservationDetailsErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("AudienceSegmentError", false)) {
  /**
   * Errors that could occur on audience segment related requests.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AudienceSegmentError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AudienceSegmentError";

    /**
     * @access public
     * @var tnsAudienceSegmentErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ServerError", false)) {
  /**
   * Errors related to the server.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ServerError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ServerError";

    /**
     * @access public
     * @var tnsServerErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("SetTopBoxInfo", false)) {
  /**
   * Contains data used to display information synchronized with Canoe for set-top box enabled
   * {@link LineItem line items}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class SetTopBoxInfo {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "SetTopBoxInfo";

    /**
     * @access public
     * @var tnsSetTopBoxSyncStatus
     */
    public $syncStatus;

    /**
     * @access public
     * @var tnsCanoeSyncResult
     */
    public $lastSyncResult;

    /**
     * @access public
     * @var string
     */
    public $lastSyncCanoeResponseMessage;

    /**
     * @access public
     * @var string
     */
    public $nielsenProductCategoryCode;

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

    public function __construct($syncStatus = null, $lastSyncResult = null, $lastSyncCanoeResponseMessage = null, $nielsenProductCategoryCode = null) {
      $this->syncStatus = $syncStatus;
      $this->lastSyncResult = $lastSyncResult;
      $this->lastSyncCanoeResponseMessage = $lastSyncCanoeResponseMessage;
      $this->nielsenProductCategoryCode = $nielsenProductCategoryCode;
    }

  }
}

if (!class_exists("SetTopBoxLineItemError", false)) {
  /**
   * Errors associated with set-top box {@link LineItem line items}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class SetTopBoxLineItemError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "SetTopBoxLineItemError";

    /**
     * @access public
     * @var tnsSetTopBoxLineItemErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("Size", false)) {
  /**
   * Represents the dimensions of an {@link AdUnit}, {@link LineItem} or {@link Creative}.
   * <p>
   * For interstitial size (out-of-page), native, ignored and fluid size, {@code Size} must be 1x1.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class Size {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($width = null, $height = null, $isAspectRatio = null) {
      $this->width = $width;
      $this->height = $height;
      $this->isAspectRatio = $isAspectRatio;
    }

  }
}

if (!class_exists("SoapRequestHeader", false)) {
  /**
   * Represents the SOAP request header used by API requests.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($networkCode = null, $applicationName = null) {
      $this->networkCode = $networkCode;
      $this->applicationName = $applicationName;
    }

  }
}

if (!class_exists("SoapResponseHeader", false)) {
  /**
   * Represents the SOAP request header used by API responses.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($requestId = null, $responseTime = null) {
      $this->requestId = $requestId;
      $this->responseTime = $responseTime;
    }

  }
}

if (!class_exists("StatementError", false)) {
  /**
   * An error that occurs while parsing {@link Statement} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class StatementError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "StatementError";

    /**
     * @access public
     * @var tnsStatementErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("Stats", false)) {
  /**
   * {@code Stats} contains trafficking statistics for {@link LineItem} and
   * {@link LineItemCreativeAssociation} objects
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class Stats {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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
     * @access public
     * @var integer
     */
    public $videoCompletionsDelivered;

    /**
     * @access public
     * @var integer
     */
    public $videoStartsDelivered;

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

    public function __construct($impressionsDelivered = null, $clicksDelivered = null, $videoCompletionsDelivered = null, $videoStartsDelivered = null) {
      $this->impressionsDelivered = $impressionsDelivered;
      $this->clicksDelivered = $clicksDelivered;
      $this->videoCompletionsDelivered = $videoCompletionsDelivered;
      $this->videoStartsDelivered = $videoStartsDelivered;
    }

  }
}

if (!class_exists("StringLengthError", false)) {
  /**
   * Errors for Strings which do not meet given length constraints.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("TargetingCriteriaBreakdown", false)) {
  /**
   * A single targeting criteria breakdown result.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TargetingCriteriaBreakdown {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TargetingCriteriaBreakdown";

    /**
     * @access public
     * @var tnsTargetingDimension
     */
    public $targetingDimension;

    /**
     * @access public
     * @var integer
     */
    public $targetingCriteriaId;

    /**
     * @access public
     * @var string
     */
    public $targetingCriteriaName;

    /**
     * @access public
     * @var boolean
     */
    public $excluded;

    /**
     * @access public
     * @var integer
     */
    public $availableUnits;

    /**
     * @access public
     * @var integer
     */
    public $matchedUnits;

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

    public function __construct($targetingDimension = null, $targetingCriteriaId = null, $targetingCriteriaName = null, $excluded = null, $availableUnits = null, $matchedUnits = null) {
      $this->targetingDimension = $targetingDimension;
      $this->targetingCriteriaId = $targetingCriteriaId;
      $this->targetingCriteriaName = $targetingCriteriaName;
      $this->excluded = $excluded;
      $this->availableUnits = $availableUnits;
      $this->matchedUnits = $matchedUnits;
    }

  }
}

if (!class_exists("Targeting", false)) {
  /**
   * Contains targeting criteria for {@link LineItem} objects. See
   * {@link LineItem#targeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class Targeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "Targeting";

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

    public function __construct($geoTargeting = null, $inventoryTargeting = null, $dayPartTargeting = null, $technologyTargeting = null, $customTargeting = null, $userDomainTargeting = null, $contentTargeting = null, $videoPositionTargeting = null) {
      $this->geoTargeting = $geoTargeting;
      $this->inventoryTargeting = $inventoryTargeting;
      $this->dayPartTargeting = $dayPartTargeting;
      $this->technologyTargeting = $technologyTargeting;
      $this->customTargeting = $customTargeting;
      $this->userDomainTargeting = $userDomainTargeting;
      $this->contentTargeting = $contentTargeting;
      $this->videoPositionTargeting = $videoPositionTargeting;
    }

  }
}

if (!class_exists("TeamError", false)) {
  /**
   * Errors related to a Team.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TeamError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TeamError";

    /**
     * @access public
     * @var tnsTeamErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("Technology", false)) {
  /**
   * Represents a technology entity that can be targeted.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "Technology";

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

if (!class_exists("TechnologyTargetingError", false)) {
  /**
   * Technology targeting validation errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TechnologyTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TechnologyTargetingError";

    /**
     * @access public
     * @var tnsTechnologyTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("TimeOfDay", false)) {
  /**
   * Represents a specific time in a day.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TimeOfDay {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TimeOfDay";

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

    public function __construct($hour = null, $minute = null) {
      $this->hour = $hour;
      $this->minute = $minute;
    }

  }
}

if (!class_exists("TimeZoneError", false)) {
  /**
   * Errors related to timezones.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TimeZoneError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TimeZoneError";

    /**
     * @access public
     * @var tnsTimeZoneErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("TypeError", false)) {
  /**
   * An error for a field which is an invalid type.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TypeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TypeError";

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

    public function __construct($fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("UniqueError", false)) {
  /**
   * An error for a field which must satisfy a uniqueness constraint
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class UniqueError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "UniqueError";

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

    public function __construct($fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("UserDomainTargeting", false)) {
  /**
   * Provides line items the ability to target or exclude users visiting their
   * websites from a list of domains or subdomains.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class UserDomainTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "UserDomainTargeting";

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

    public function __construct($domains = null, $targeted = null) {
      $this->domains = $domains;
      $this->targeted = $targeted;
    }

  }
}

if (!class_exists("UserDomainTargetingError", false)) {
  /**
   * Lists all errors related to user domain targeting for a line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class UserDomainTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "UserDomainTargetingError";

    /**
     * @access public
     * @var tnsUserDomainTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("Value", false)) {
  /**
   * {@code Value} represents a value.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "Value";

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

if (!class_exists("VideoPosition", false)) {
  /**
   * Represents a targetable position within a video. A video ad can be targeted
   * to a position (pre-roll, all mid-rolls, or post-roll), or to a specific mid-roll index.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class VideoPosition {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "VideoPosition";

    /**
     * @access public
     * @var tnsVideoPositionType
     */
    public $positionType;

    /**
     * @access public
     * @var integer
     */
    public $midrollIndex;

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

    public function __construct($positionType = null, $midrollIndex = null) {
      $this->positionType = $positionType;
      $this->midrollIndex = $midrollIndex;
    }

  }
}

if (!class_exists("VideoPositionTargeting", false)) {
  /**
   * Represents positions within and around a video where ads can be targeted to.
   * <p>
   * Example positions could be {@code pre-roll} (before the video plays),
   * {@code post-roll} (after a video has completed playback) and
   * {@code mid-roll} (during video playback).
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class VideoPositionTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "VideoPositionTargeting";

    /**
     * @access public
     * @var VideoPositionTarget[]
     */
    public $targetedPositions;

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

    public function __construct($targetedPositions = null) {
      $this->targetedPositions = $targetedPositions;
    }

  }
}

if (!class_exists("VideoPositionTargetingError", false)) {
  /**
   * Lists all errors related to {@link VideoPositionTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class VideoPositionTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "VideoPositionTargetingError";

    /**
     * @access public
     * @var tnsVideoPositionTargetingErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("VideoPositionWithinPod", false)) {
  /**
   * Represents a targetable position within a pod within a video stream. A video ad can be targeted
   * to any position in the pod (first, second, third ... last).  If there is only 1 ad in a pod,
   * either first or last will target that position.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class VideoPositionWithinPod {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "VideoPositionWithinPod";

    /**
     * @access public
     * @var integer
     */
    public $index;

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

    public function __construct($index = null) {
      $this->index = $index;
    }

  }
}

if (!class_exists("VideoPositionTarget", false)) {
  /**
   * Represents the options for targetable positions within a video.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class VideoPositionTarget {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "VideoPositionTarget";

    /**
     * @access public
     * @var VideoPosition
     */
    public $videoPosition;

    /**
     * @access public
     * @var tnsVideoBumperType
     */
    public $videoBumperType;

    /**
     * @access public
     * @var VideoPositionWithinPod
     */
    public $videoPositionWithinPod;

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

    public function __construct($videoPosition = null, $videoBumperType = null, $videoPositionWithinPod = null) {
      $this->videoPosition = $videoPosition;
      $this->videoBumperType = $videoBumperType;
      $this->videoPositionWithinPod = $videoPositionWithinPod;
    }

  }
}

if (!class_exists("AdUnitAfcSizeErrorReason", false)) {
  /**
   * The supplied Afc size is not valid.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AdUnitAfcSizeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AdUnitAfcSizeError.Reason";

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

if (!class_exists("AdUnitCodeErrorReason", false)) {
  /**
   * For {@link AdUnit#adUnitCode}, only alpha-numeric characters,
   * underscores, hyphens, periods, asterisks, double quotes, back slashes,
   * forward slashes, exclamations, left angle brackets, colons and
   * parentheses are allowed.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AdUnitCodeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AdUnitCodeError.Reason";

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

if (!class_exists("ApiVersionErrorReason", false)) {
  /**
   * Indicates that the operation is not allowed in the version the request
   * was made in.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ApiVersionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ApiVersionError.Reason";

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

if (!class_exists("AudienceExtensionErrorReason", false)) {
  /**
   * Specific audience extension error reasons.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AudienceExtensionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AudienceExtensionError.Reason";

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

if (!class_exists("AuthenticationErrorReason", false)) {
  /**
   * The SOAP message contains a request header with an ambiguous definition
   * of the authentication header fields. This means either the {@code
   * authToken} and {@code oAuthToken} fields were both null or both were
   * specified. Exactly one value should be specified with each request.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("CanoeSyncResult", false)) {
  /**
   * Represents sync result types between set-top box enabled {@link LineItem line items} and Canoe.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CanoeSyncResult {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CanoeSyncResult";

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

if (!class_exists("ClickTrackingLineItemErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ClickTrackingLineItemErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ClickTrackingLineItemError.Reason";

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
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CollectionSizeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("CommonErrorReason", false)) {
  /**
   * Describes reasons for common errors
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CommonErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CommonError.Reason";

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

if (!class_exists("CompanionDeliveryOption", false)) {
  /**
   * The delivery option for companions.  Used for line items whose environmentType is
   * {@link EnvironmentType#VIDEO_PLAYER}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CompanionDeliveryOption {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CompanionDeliveryOption";

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

if (!class_exists("CompanyCreditStatusErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CompanyCreditStatusErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CompanyCreditStatusError.Reason";

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

if (!class_exists("ComputedStatus", false)) {
  /**
   * Describes the computed {@link LineItem} status that is derived from the
   * current state of the line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ComputedStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ComputedStatus";

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

if (!class_exists("ContentMetadataTargetingErrorReason", false)) {
  /**
   * The reasons for the metadata targeting error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ContentMetadataTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ContentMetadataTargetingError.Reason";

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

if (!class_exists("CostType", false)) {
  /**
   * Describes the {@link LineItem} actions that are billable.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CostType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CostType";

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

if (!class_exists("CreativeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CreativeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CreativeError.Reason";

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

if (!class_exists("CreativeRotationType", false)) {
  /**
   * The strategy to use for displaying multiple {@link Creative} objects that are
   * associated with a {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CreativeRotationType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CreativeRotationType";

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

if (!class_exists("CreativeSizeType", false)) {
  /**
   * Descriptions of the types of sizes a creative can be.  Not all creatives can
   * be described by a height-width pair, this provides additional context.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CreativeSizeType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CreativeSizeType";

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

if (!class_exists("CrossSellErrorReason", false)) {
  /**
   * The reason of the error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CrossSellErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CrossSellError.Reason";

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

if (!class_exists("CustomCriteriaComparisonOperator", false)) {
  /**
   * Specifies the available comparison operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomCriteriaComparisonOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomCriteria.ComparisonOperator";

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

if (!class_exists("CustomCriteriaSetLogicalOperator", false)) {
  /**
   * Specifies the available logical operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomCriteriaSetLogicalOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomCriteriaSet.LogicalOperator";

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

if (!class_exists("CustomFieldValueErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomFieldValueErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomFieldValueError.Reason";

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

if (!class_exists("CustomTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomTargetingError.Reason";

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

if (!class_exists("AudienceSegmentCriteriaComparisonOperator", false)) {
  /**
   * Specifies the available comparison operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AudienceSegmentCriteriaComparisonOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AudienceSegmentCriteria.ComparisonOperator";

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

if (!class_exists("DateTimeRangeTargetingErrorReason", false)) {
  /**
   * {@link ApiErrorReason} enum for date time range targeting error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DateTimeRangeTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DateTimeRangeTargetingError.Reason";

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

if (!class_exists("DayOfWeek", false)) {
  /**
   * Days of the week.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DayOfWeek {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DayOfWeek";

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

if (!class_exists("DayPartTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DayPartTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DayPartTargetingError.Reason";

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

if (!class_exists("DeliveryTimeZone", false)) {
  /**
   * Represents the time zone to be used for {@link DayPartTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeliveryTimeZone {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeliveryTimeZone";

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

if (!class_exists("DeliveryRateType", false)) {
  /**
   * Possible delivery rates for a {@link LineItem}, which dictate the manner in
   * which they are served.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeliveryRateType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeliveryRateType";

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

if (!class_exists("EntityChildrenLimitReachedErrorReason", false)) {
  /**
   * The reasons for the entity children limit reached error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class EntityChildrenLimitReachedErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "EntityChildrenLimitReachedError.Reason";

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

if (!class_exists("EntityLimitReachedErrorReason", false)) {
  /**
   * The reasons for the entity limit reached error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class EntityLimitReachedErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "EntityLimitReachedError.Reason";

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

if (!class_exists("EnvironmentType", false)) {
  /**
   * Enum for the valid environments in which ads can be shown.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class EnvironmentType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "EnvironmentType";

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

if (!class_exists("FeatureErrorReason", false)) {
  /**
   * A feature is being used that is not enabled on the current network.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class FeatureErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "FeatureError.Reason";

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

if (!class_exists("ForecastErrorReason", false)) {
  /**
   * Reason why a forecast could not be retrieved.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ForecastErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ForecastError.Reason";

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

if (!class_exists("FrequencyCapErrorReason", false)) {
  /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class FrequencyCapErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "FrequencyCapError.Reason";

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

if (!class_exists("GenericTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GenericTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GenericTargetingError.Reason";

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

if (!class_exists("GeoTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GeoTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GeoTargetingError.Reason";

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

if (!class_exists("GoalType", false)) {
  /**
   * Specifies the type of the goal for a {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GoalType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GoalType";

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

if (!class_exists("GrpAge", false)) {
  /**
   * The age range associated with a GRP demographic forecast.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GrpAge {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GrpAge";

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

if (!class_exists("GrpGender", false)) {
  /**
   * The demographic gender associated with a GRP demographic forecast.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GrpGender {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GrpGender";

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

if (!class_exists("GrpProvider", false)) {
  /**
   * Represents available GRP providers that a line item will have its target demographic measured
   * by.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GrpProvider {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GrpProvider";

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

if (!class_exists("GrpSettingsErrorReason", false)) {
  /**
   * Reason for GRP settings error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GrpSettingsErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GrpSettingsError.Reason";

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

if (!class_exists("GrpTargetGender", false)) {
  /**
   * Represents the target gender for a GRP demographic targeted line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GrpTargetGender {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GrpTargetGender";

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

if (!class_exists("GrpUnitType", false)) {
  /**
   * Type of unit represented in a GRP demographic breakdown.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GrpUnitType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "GrpUnitType";

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

if (!class_exists("ImageErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ImageErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ImageError.Reason";

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
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("InvalidUrlErrorReason", false)) {
  /**
   * The URL contains invalid characters.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class InvalidUrlErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "InvalidUrlError.Reason";

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

if (!class_exists("InventoryTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class InventoryTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "InventoryTargetingError.Reason";

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

if (!class_exists("InventoryUnitErrorReason", false)) {
  /**
   * Possible reasons for the error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class InventoryUnitErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "InventoryUnitError.Reason";

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

if (!class_exists("LabelEntityAssociationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LabelEntityAssociationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LabelEntityAssociationError.Reason";

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

if (!class_exists("LineItemActivityAssociationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemActivityAssociationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemActivityAssociationError.Reason";

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

if (!class_exists("LineItemCreativeAssociationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemCreativeAssociationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemCreativeAssociationError.Reason";

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

if (!class_exists("LineItemDiscountType", false)) {
  /**
   * Describes the possible discount types on the cost of booking a
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemDiscountType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemDiscountType";

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

if (!class_exists("LineItemErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemError.Reason";

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

if (!class_exists("LineItemFlightDateErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemFlightDateErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemFlightDateError.Reason";

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

if (!class_exists("LineItemOperationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemOperationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemOperationError.Reason";

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

if (!class_exists("LineItemSummaryReservationStatus", false)) {
  /**
   * Specifies the reservation status of the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemSummaryReservationStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemSummary.ReservationStatus";

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

if (!class_exists("LineItemType", false)) {
  /**
   * {@code LineItemType} indicates the priority of a {@link LineItem}, determined
   * by the way in which impressions are reserved to be served for it.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItemType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItemType";

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

if (!class_exists("MinuteOfHour", false)) {
  /**
   * Minutes in an hour. Currently, only 0, 15, 30, and 45 are supported. This
   * field is required.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class MinuteOfHour {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "MinuteOfHour";

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

if (!class_exists("NotNullErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class NotNullErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "NotNullError.Reason";

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
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("OrderActionErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class OrderActionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "OrderActionError.Reason";

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

if (!class_exists("OrderErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class OrderErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "OrderError.Reason";

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

if (!class_exists("ParseErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ParseErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ParseError.Reason";

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

if (!class_exists("PermissionErrorReason", false)) {
  /**
   * Describes reasons for permission errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PermissionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PermissionError.Reason";

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

if (!class_exists("CreativePersistenceType", false)) {
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
   * @subpackage v201508
   */
  class CreativePersistenceType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CreativePersistenceType";

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

if (!class_exists("ProgrammaticErrorReason", false)) {
  /**
   * Possible error reasons for a programmatic error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ProgrammaticErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ProgrammaticError.Reason";

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

if (!class_exists("PublisherQueryLanguageContextErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PublisherQueryLanguageContextErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PublisherQueryLanguageContextError.Reason";

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

if (!class_exists("PublisherQueryLanguageSyntaxErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PublisherQueryLanguageSyntaxErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PublisherQueryLanguageSyntaxError.Reason";

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

if (!class_exists("QuotaErrorReason", false)) {
  /**
   * The number of requests made per second is too high and has exceeded the
   * allowable limit. The recommended approach to handle this error is to wait
   * about 5 seconds and then retry the request. Note that this does not
   * guarantee the request will succeed. If it fails again, try increasing the
   * wait time.
   * <p>
   * Another way to mitigate this error is to limit requests to 2 per second for
   * Small Business networks, or 8 per second for Premium networks. Once again
   * this does not guarantee that every request will succeed, but may help
   * reduce the number of times you receive this error.
   * </p>
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class QuotaErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "QuotaError.Reason";

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
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("RegExErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RegExErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "RegExError.Reason";

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

if (!class_exists("RequiredCollectionErrorReason", false)) {
  /**
   * A required collection is missing.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RequiredCollectionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "RequiredCollectionError.Reason";

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
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("RequiredNumberErrorReason", false)) {
  /**
   * Describes reasons for a number to be invalid.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RequiredNumberErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "RequiredNumberError.Reason";

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

if (!class_exists("RequiredSizeErrorReason", false)) {
  /**
   * {@link Creative#size} or {@link LineItem#creativeSizes} is
   * missing.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RequiredSizeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "RequiredSizeError.Reason";

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

if (!class_exists("ReservationDetailsErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ReservationDetailsErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ReservationDetailsError.Reason";

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

if (!class_exists("RoadblockingType", false)) {
  /**
   * Describes the roadblocking types.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RoadblockingType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "RoadblockingType";

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

if (!class_exists("AudienceSegmentErrorReason", false)) {
  /**
   * Reason of the given {@link AudienceSegmentError}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AudienceSegmentErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AudienceSegmentError.Reason";

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

if (!class_exists("ServerErrorReason", false)) {
  /**
   * Describes reasons for server errors
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ServerErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ServerError.Reason";

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

if (!class_exists("SetTopBoxLineItemErrorReason", false)) {
  /**
   * Reason for set-top box error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class SetTopBoxLineItemErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "SetTopBoxLineItemError.Reason";

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

if (!class_exists("SetTopBoxSyncStatus", false)) {
  /**
   * The set top box line item sync status.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class SetTopBoxSyncStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "SetTopBoxSyncStatus";

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

if (!class_exists("StartDateTimeType", false)) {
  /**
   * Specifies the start type to use for an entity with a start date time field.
   * For example, a {@link LineItem} or {@link LineItemCreativeAssociation}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class StartDateTimeType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "StartDateTimeType";

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

if (!class_exists("StatementErrorReason", false)) {
  /**
   * A bind variable has not been bound to a value.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class StatementErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "StatementError.Reason";

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
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("TargetPlatform", false)) {
  /**
   * Indicates the target platform.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TargetPlatform {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TargetPlatform";

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

if (!class_exists("TargetingDimension", false)) {
  /**
   * Targeting dimension of targeting breakdowns.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TargetingDimension {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TargetingDimension";

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

if (!class_exists("TeamErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TeamErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TeamError.Reason";

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

if (!class_exists("TechnologyTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TechnologyTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TechnologyTargetingError.Reason";

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

if (!class_exists("TimeUnit", false)) {
  /**
   * Represent the possible time units for frequency capping.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TimeUnit {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TimeUnit";

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

if (!class_exists("TimeZoneErrorReason", false)) {
  /**
   * Describes reasons for invalid timezone.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TimeZoneErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TimeZoneError.Reason";

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

if (!class_exists("UnitType", false)) {
  /**
   * Indicates the type of unit used for defining a reservation. The
   * {@link CostType} can differ from the {@link UnitType} - an
   * ad can have an impression goal, but be billed by its click. Usually
   * {@link CostType} and {@link UnitType} will refer to the
   * same unit.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class UnitType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "UnitType";

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

if (!class_exists("UserDomainTargetingErrorReason", false)) {
  /**
   * {@link ApiErrorReason} enum for user domain targeting error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class UserDomainTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "UserDomainTargetingError.Reason";

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

if (!class_exists("VideoBumperType", false)) {
  /**
   * Represents the options for targetable bumper positions, surrounding an ad
   * pod, within a video stream. This includes before and after the supported ad
   * pod positions, {@link VideoPositionType#PREROLL},
   * {@link VideoPositionType#MIDROLL}, and {@link VideoPositionType#POSTROLL}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class VideoBumperType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "VideoBumperType";

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

if (!class_exists("VideoPositionType", false)) {
  /**
   * Represents a targetable position within a video.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class VideoPositionType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "VideoPosition.Type";

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

if (!class_exists("VideoPositionTargetingErrorReason", false)) {
  /**
   * The reasons for the video position targeting error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class VideoPositionTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "VideoPositionTargetingError.Reason";

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

if (!class_exists("GetAvailabilityForecast", false)) {
  /**
   * Gets the availability forecast for a {@link ProspectiveLineItem}. An availability forecast
   * reports the maximum number of available units that the line item can book, and the total
   * number of units matching the line item's targeting.
   * 
   * <p>Note: Beginning in v201502, this replaces the previous getForecast method.
   * 
   * @param lineItem the prospective line item (new or existing) to be forecasted for availability
   * @param forecastOptions options controlling the forecast
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetAvailabilityForecast {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ProspectiveLineItem
     */
    public $lineItem;

    /**
     * @access public
     * @var AvailabilityForecastOptions
     */
    public $forecastOptions;

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

    public function __construct($lineItem = null, $forecastOptions = null) {
      $this->lineItem = $lineItem;
      $this->forecastOptions = $forecastOptions;
    }

  }
}

if (!class_exists("GetAvailabilityForecastResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetAvailabilityForecastResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AvailabilityForecast
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

if (!class_exists("GetAvailabilityForecastById", false)) {
  /**
   * Gets an {@link AvailabilityForecast} for an existing {@link LineItem} object.
   * An availability forecast reports the maximum number of available units that the line item can
   * be booked with, and also the total number of units matching the line item's targeting.
   * 
   * <p>Only line items having type {@link LineItemType#SPONSORSHIP} or
   * {@link LineItemType#STANDARD} are valid. Other types will result in
   * {@link ReservationDetailsError.Reason#LINE_ITEM_TYPE_NOT_ALLOWED}.
   * 
   * <p>Note: Beginning in v201502, this replaces the previous getForecastById method.
   * 
   * @param lineItemId the ID of a {@link LineItem} to run the forecast on.
   * @param forecastOptions options controlling the forecast
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetAvailabilityForecastById {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var integer
     */
    public $lineItemId;

    /**
     * @access public
     * @var AvailabilityForecastOptions
     */
    public $forecastOptions;

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

    public function __construct($lineItemId = null, $forecastOptions = null) {
      $this->lineItemId = $lineItemId;
      $this->forecastOptions = $forecastOptions;
    }

  }
}

if (!class_exists("GetAvailabilityForecastByIdResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetAvailabilityForecastByIdResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AvailabilityForecast
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

if (!class_exists("GetDeliveryForecast", false)) {
  /**
   * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
   * delivery simulation with line items potentially contending with each other. A delivery
   * forecast reports the number of units that will be delivered to each line item given the line
   * item goals and contentions from other line items.
   * 
   * @param lineItems line items to be forecasted for delivery
   * @param forecastOptions options controlling the forecast
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetDeliveryForecast {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ProspectiveLineItem[]
     */
    public $lineItems;

    /**
     * @access public
     * @var DeliveryForecastOptions
     */
    public $forecastOptions;

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

    public function __construct($lineItems = null, $forecastOptions = null) {
      $this->lineItems = $lineItems;
      $this->forecastOptions = $forecastOptions;
    }

  }
}

if (!class_exists("GetDeliveryForecastResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetDeliveryForecastResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var DeliveryForecast
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

if (!class_exists("GetDeliveryForecastByIds", false)) {
  /**
   * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
   * delivery simulation with line items potentially contending with each other. A delivery
   * forecast reports the number of units that will be delivered to each line item given the line
   * item goals and contentions from other line items.
   * 
   * @param lineItemIds the IDs of line items to be forecasted for delivery
   * @param forecastOptions options controlling the forecast
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetDeliveryForecastByIds {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var integer[]
     */
    public $lineItemIds;

    /**
     * @access public
     * @var DeliveryForecastOptions
     */
    public $forecastOptions;

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

    public function __construct($lineItemIds = null, $forecastOptions = null) {
      $this->lineItemIds = $lineItemIds;
      $this->forecastOptions = $forecastOptions;
    }

  }
}

if (!class_exists("GetDeliveryForecastByIdsResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetDeliveryForecastByIdsResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var DeliveryForecast
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

if (!class_exists("ObjectValue", false)) {
  /**
   * Contains an object value.
   * <p>
   * <b>This object is experimental!
   * <code>ObjectValue</code> is an experimental, innovative, and rapidly
   * changing new feature for DFP. Unfortunately, being on the bleeding edge means that we may make
   * backwards-incompatible changes to
   * <code>ObjectValue</code>. We will inform the community when this feature
   * is no longer experimental.</b>
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ObjectValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "ObjectValue";

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
      parent::__construct();
    }

  }
}

if (!class_exists("AdUnitAfcSizeError", false)) {
  /**
   * Caused by supplying sizes that are not compatible with the Afc sizes.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AdUnitAfcSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AdUnitAfcSizeError";

    /**
     * @access public
     * @var tnsAdUnitAfcSizeErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("AdUnitCodeError", false)) {
  /**
   * Lists the generic errors associated with {@link AdUnit#adUnitCode}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AdUnitCodeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AdUnitCodeError";

    /**
     * @access public
     * @var tnsAdUnitCodeErrorReason
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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
    }

  }
}

if (!class_exists("ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

    public function __construct($errors = null, $message = null) {
      parent::__construct();
      $this->errors = $errors;
      $this->message = $message;
    }

  }
}

if (!class_exists("BandwidthGroup", false)) {
  /**
   * Represents a group of bandwidths that are logically organized by some well
   * known generic names such as 'Cable' or 'DSL'.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class BandwidthGroup extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "BandwidthGroup";

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
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("BooleanValue", false)) {
  /**
   * Contains a boolean value.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class BooleanValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "BooleanValue";

    /**
     * @access public
     * @var boolean
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
      parent::__construct();
      $this->value = $value;
    }

  }
}

if (!class_exists("Browser", false)) {
  /**
   * Represents an internet browser.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class Browser extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "Browser";

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

    public function __construct($majorVersion = null, $minorVersion = null, $id = null, $name = null) {
      parent::__construct();
      $this->majorVersion = $majorVersion;
      $this->minorVersion = $minorVersion;
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("BrowserLanguage", false)) {
  /**
   * Represents a Browser's language.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class BrowserLanguage extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "BrowserLanguage";

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
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("CustomCriteriaSet", false)) {
  /**
   * A {@link CustomCriteriaSet} comprises of a set of {@link CustomCriteriaNode}
   * objects combined by the
   * {@link CustomCriteriaSet.LogicalOperator#logicalOperator}. The custom
   * criteria targeting tree is subject to the rules defined on
   * {@link Targeting#customTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomCriteriaSet extends CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomCriteriaSet";

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

    public function __construct($logicalOperator = null, $children = null) {
      parent::__construct();
      $this->logicalOperator = $logicalOperator;
      $this->children = $children;
    }

  }
}

if (!class_exists("CustomCriteriaLeaf", false)) {
  /**
   * A {@link CustomCriteriaLeaf} object represents a generic leaf of {@link CustomCriteria} tree
   * structure.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomCriteriaLeaf extends CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomCriteriaLeaf";

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
      parent::__construct();
    }

  }
}

if (!class_exists("AudienceSegmentCriteria", false)) {
  /**
   * An {@link AudienceSegmentCriteria} object is used to target {@link AudienceSegment} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AudienceSegmentCriteria extends CustomCriteriaLeaf {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "AudienceSegmentCriteria";

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

    public function __construct($operator = null, $audienceSegmentIds = null) {
      parent::__construct();
      $this->operator = $operator;
      $this->audienceSegmentIds = $audienceSegmentIds;
    }

  }
}

if (!class_exists("DateTimeValue", false)) {
  /**
   * Contains a date-time value.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DateTimeValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DateTimeValue";

    /**
     * @access public
     * @var DateTime
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
      parent::__construct();
      $this->value = $value;
    }

  }
}

if (!class_exists("DateValue", false)) {
  /**
   * Contains a date value.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DateValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DateValue";

    /**
     * @access public
     * @var Date
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
      parent::__construct();
      $this->value = $value;
    }

  }
}

if (!class_exists("DeviceCapability", false)) {
  /**
   * Represents a capability of a physical device.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeviceCapability extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeviceCapability";

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
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("DeviceCategory", false)) {
  /**
   * Represents the category of a device.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeviceCategory extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeviceCategory";

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
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("DeviceManufacturer", false)) {
  /**
   * Represents a mobile device's manufacturer.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeviceManufacturer extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "DeviceManufacturer";

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
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("LineItem", false)) {
  /**
   * {@code LineItem} is an advertiser's commitment to purchase a specific number
   * of ad impressions, clicks, or time.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class LineItem extends LineItemSummary {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "LineItem";

    /**
     * @access public
     * @var Targeting
     */
    public $targeting;

    /**
     * @access public
     * @var CreativeTargeting[]
     */
    public $creativeTargetings;

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

    public function __construct($targeting = null, $creativeTargetings = null, $orderId = null, $id = null, $name = null, $externalId = null, $orderName = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $autoExtensionDays = null, $unlimitedEndDateTime = null, $creativeRotationType = null, $deliveryRateType = null, $roadblockingType = null, $frequencyCaps = null, $lineItemType = null, $priority = null, $costPerUnit = null, $valueCostPerUnit = null, $costType = null, $discountType = null, $discount = null, $contractedUnitsBought = null, $creativePlaceholders = null, $activityAssociations = null, $targetPlatform = null, $environmentType = null, $companionDeliveryOption = null, $creativePersistenceType = null, $allowOverbook = null, $skipInventoryCheck = null, $skipCrossSellingRuleWarningChecks = null, $reserveAtCreation = null, $stats = null, $deliveryIndicator = null, $deliveryData = null, $budget = null, $status = null, $reservationStatus = null, $isArchived = null, $webPropertyCode = null, $appliedLabels = null, $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $lastModifiedByApp = null, $notes = null, $lastModifiedDateTime = null, $creationDateTime = null, $isPrioritizedPreferredDealsEnabled = null, $adExchangeAuctionOpeningPriority = null, $customFieldValues = null, $isSetTopBoxEnabled = null, $isMissingCreatives = null, $setTopBoxDisplayInfo = null, $videoMaxDuration = null, $primaryGoal = null, $secondaryGoals = null, $grpSettings = null) {
      parent::__construct();
      $this->targeting = $targeting;
      $this->creativeTargetings = $creativeTargetings;
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
      $this->costPerUnit = $costPerUnit;
      $this->valueCostPerUnit = $valueCostPerUnit;
      $this->costType = $costType;
      $this->discountType = $discountType;
      $this->discount = $discount;
      $this->contractedUnitsBought = $contractedUnitsBought;
      $this->creativePlaceholders = $creativePlaceholders;
      $this->activityAssociations = $activityAssociations;
      $this->targetPlatform = $targetPlatform;
      $this->environmentType = $environmentType;
      $this->companionDeliveryOption = $companionDeliveryOption;
      $this->creativePersistenceType = $creativePersistenceType;
      $this->allowOverbook = $allowOverbook;
      $this->skipInventoryCheck = $skipInventoryCheck;
      $this->skipCrossSellingRuleWarningChecks = $skipCrossSellingRuleWarningChecks;
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
      $this->creationDateTime = $creationDateTime;
      $this->isPrioritizedPreferredDealsEnabled = $isPrioritizedPreferredDealsEnabled;
      $this->adExchangeAuctionOpeningPriority = $adExchangeAuctionOpeningPriority;
      $this->customFieldValues = $customFieldValues;
      $this->isSetTopBoxEnabled = $isSetTopBoxEnabled;
      $this->isMissingCreatives = $isMissingCreatives;
      $this->setTopBoxDisplayInfo = $setTopBoxDisplayInfo;
      $this->videoMaxDuration = $videoMaxDuration;
      $this->primaryGoal = $primaryGoal;
      $this->secondaryGoals = $secondaryGoals;
      $this->grpSettings = $grpSettings;
    }

  }
}

if (!class_exists("MobileCarrier", false)) {
  /**
   * Represents a mobile carrier.
   * Carrier targeting is only available to DFP mobile publishers.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class MobileCarrier extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "MobileCarrier";

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
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("MobileDevice", false)) {
  /**
   * Represents a Mobile Device.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class MobileDevice extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "MobileDevice";

    /**
     * @access public
     * @var integer
     */
    public $manufacturerCriterionId;

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

    public function __construct($manufacturerCriterionId = null, $id = null, $name = null) {
      parent::__construct();
      $this->manufacturerCriterionId = $manufacturerCriterionId;
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("MobileDeviceSubmodel", false)) {
  /**
   * Represents a mobile device submodel.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class MobileDeviceSubmodel extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "MobileDeviceSubmodel";

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

    public function __construct($mobileDeviceCriterionId = null, $deviceManufacturerCriterionId = null, $id = null, $name = null) {
      parent::__construct();
      $this->mobileDeviceCriterionId = $mobileDeviceCriterionId;
      $this->deviceManufacturerCriterionId = $deviceManufacturerCriterionId;
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("NumberValue", false)) {
  /**
   * Contains a numeric value.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class NumberValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "NumberValue";

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

    public function __construct($value = null) {
      parent::__construct();
      $this->value = $value;
    }

  }
}

if (!class_exists("OperatingSystem", false)) {
  /**
   * Represents an Operating System, such as Linux, Mac OS or Windows.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class OperatingSystem extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "OperatingSystem";

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
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("OperatingSystemVersion", false)) {
  /**
   * Represents a specific version of an operating system.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class OperatingSystemVersion extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "OperatingSystemVersion";

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

    public function __construct($majorVersion = null, $minorVersion = null, $microVersion = null, $id = null, $name = null) {
      parent::__construct();
      $this->majorVersion = $majorVersion;
      $this->minorVersion = $minorVersion;
      $this->microVersion = $microVersion;
      $this->id = $id;
      $this->name = $name;
    }

  }
}

if (!class_exists("SetValue", false)) {
  /**
   * Contains a set of {@link Value Values}. May not contain duplicates.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class SetValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "SetValue";

    /**
     * @access public
     * @var Value[]
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

    public function __construct($values = null) {
      parent::__construct();
      $this->values = $values;
    }

  }
}

if (!class_exists("TextValue", false)) {
  /**
   * Contains a string value.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class TextValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "TextValue";

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

    public function __construct($value = null) {
      parent::__construct();
      $this->value = $value;
    }

  }
}

if (!class_exists("CustomCriteria", false)) {
  /**
   * A {@link CustomCriteria} object is used to perform custom criteria targeting
   * on custom targeting keys of type {@link CustomTargetingKey.Type#PREDEFINED}
   * or {@link CustomTargetingKey.Type#FREEFORM}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomCriteria extends CustomCriteriaLeaf {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "CustomCriteria";

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

    public function __construct($keyId = null, $valueIds = null, $operator = null) {
      parent::__construct();
      $this->keyId = $keyId;
      $this->valueIds = $valueIds;
      $this->operator = $operator;
    }

  }
}

if (!class_exists("ForecastService", false)) {
  /**
   * ForecastService
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class ForecastService extends DfpSoapClient {

    const SERVICE_NAME = "ForecastService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201508/ForecastService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201508/ForecastService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "AdUnitAfcSizeError" => "AdUnitAfcSizeError",
      "AdUnitCodeError" => "AdUnitCodeError",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "TechnologyTargeting" => "TechnologyTargeting",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AppliedLabel" => "AppliedLabel",
      "AudienceExtensionError" => "AudienceExtensionError",
      "AuthenticationError" => "AuthenticationError",
      "AvailabilityForecast" => "AvailabilityForecast",
      "AvailabilityForecastOptions" => "AvailabilityForecastOptions",
      "BandwidthGroup" => "BandwidthGroup",
      "BandwidthGroupTargeting" => "BandwidthGroupTargeting",
      "BaseCustomFieldValue" => "BaseCustomFieldValue",
      "BooleanValue" => "BooleanValue",
      "Browser" => "Browser",
      "BrowserLanguage" => "BrowserLanguage",
      "BrowserLanguageTargeting" => "BrowserLanguageTargeting",
      "BrowserTargeting" => "BrowserTargeting",
      "ClickTrackingLineItemError" => "ClickTrackingLineItemError",
      "CollectionSizeError" => "CollectionSizeError",
      "CommonError" => "CommonError",
      "CompanyCreditStatusError" => "CompanyCreditStatusError",
      "ContendingLineItem" => "ContendingLineItem",
      "ContentMetadataKeyHierarchyTargeting" => "ContentMetadataKeyHierarchyTargeting",
      "ContentMetadataTargetingError" => "ContentMetadataTargetingError",
      "ContentTargeting" => "ContentTargeting",
      "CreativeError" => "CreativeError",
      "CreativePlaceholder" => "CreativePlaceholder",
      "CreativeTargeting" => "CreativeTargeting",
      "CrossSellError" => "CrossSellError",
      "CustomCriteria" => "CustomCriteria",
      "CustomCriteriaSet" => "CustomCriteriaSet",
      "CustomFieldValue" => "CustomFieldValue",
      "CustomFieldValueError" => "CustomFieldValueError",
      "CustomTargetingError" => "CustomTargetingError",
      "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
      "CustomCriteriaNode" => "CustomCriteriaNode",
      "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeRangeTargetingError" => "DateTimeRangeTargetingError",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DayPart" => "DayPart",
      "DayPartTargeting" => "DayPartTargeting",
      "DayPartTargetingError" => "DayPartTargetingError",
      "DeliveryData" => "DeliveryData",
      "DeliveryForecastOptions" => "DeliveryForecastOptions",
      "DeliveryForecast" => "DeliveryForecast",
      "DeliveryIndicator" => "DeliveryIndicator",
      "DeviceCapability" => "DeviceCapability",
      "DeviceCapabilityTargeting" => "DeviceCapabilityTargeting",
      "DeviceCategory" => "DeviceCategory",
      "DeviceCategoryTargeting" => "DeviceCategoryTargeting",
      "DeviceManufacturer" => "DeviceManufacturer",
      "DeviceManufacturerTargeting" => "DeviceManufacturerTargeting",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "EntityChildrenLimitReachedError" => "EntityChildrenLimitReachedError",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "ForecastError" => "ForecastError",
      "FrequencyCap" => "FrequencyCap",
      "FrequencyCapError" => "FrequencyCapError",
      "GenericTargetingError" => "GenericTargetingError",
      "GeoTargeting" => "GeoTargeting",
      "GeoTargetingError" => "GeoTargetingError",
      "Goal" => "Goal",
      "GrpDemographicBreakdown" => "GrpDemographicBreakdown",
      "GrpSettings" => "GrpSettings",
      "GrpSettingsError" => "GrpSettingsError",
      "ImageError" => "ImageError",
      "InternalApiError" => "InternalApiError",
      "InvalidUrlError" => "InvalidUrlError",
      "InventoryTargeting" => "InventoryTargeting",
      "InventoryTargetingError" => "InventoryTargetingError",
      "InventoryUnitError" => "InventoryUnitError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "LineItemActivityAssociationError" => "LineItemActivityAssociationError",
      "LineItemActivityAssociation" => "LineItemActivityAssociation",
      "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
      "LineItemDeliveryForecast" => "LineItemDeliveryForecast",
      "LineItem" => "LineItem",
      "LineItemError" => "LineItemError",
      "LineItemFlightDateError" => "LineItemFlightDateError",
      "LineItemOperationError" => "LineItemOperationError",
      "LineItemSummary" => "LineItemSummary",
      "Location" => "DfpLocation",
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
      "OrderActionError" => "OrderActionError",
      "OrderError" => "OrderError",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "ProgrammaticError" => "ProgrammaticError",
      "ProspectiveLineItem" => "ProspectiveLineItem",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RegExError" => "RegExError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "RequiredSizeError" => "RequiredSizeError",
      "ReservationDetailsError" => "ReservationDetailsError",
      "AudienceSegmentError" => "AudienceSegmentError",
      "ServerError" => "ServerError",
      "SetTopBoxInfo" => "SetTopBoxInfo",
      "SetTopBoxLineItemError" => "SetTopBoxLineItemError",
      "SetValue" => "SetValue",
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StatementError" => "StatementError",
      "Stats" => "Stats",
      "StringLengthError" => "StringLengthError",
      "TargetingCriteriaBreakdown" => "TargetingCriteriaBreakdown",
      "Targeting" => "Targeting",
      "TeamError" => "TeamError",
      "Technology" => "Technology",
      "TechnologyTargetingError" => "TechnologyTargetingError",
      "TextValue" => "TextValue",
      "TimeOfDay" => "TimeOfDay",
      "TimeZoneError" => "TimeZoneError",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UserDomainTargeting" => "UserDomainTargeting",
      "UserDomainTargetingError" => "UserDomainTargetingError",
      "Value" => "Value",
      "VideoPosition" => "VideoPosition",
      "VideoPositionTargeting" => "VideoPositionTargeting",
      "VideoPositionTargetingError" => "VideoPositionTargetingError",
      "VideoPositionWithinPod" => "VideoPositionWithinPod",
      "VideoPositionTarget" => "VideoPositionTarget",
      "AdUnitAfcSizeError.Reason" => "AdUnitAfcSizeErrorReason",
      "AdUnitCodeError.Reason" => "AdUnitCodeErrorReason",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AudienceExtensionError.Reason" => "AudienceExtensionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CanoeSyncResult" => "CanoeSyncResult",
      "ClickTrackingLineItemError.Reason" => "ClickTrackingLineItemErrorReason",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CompanionDeliveryOption" => "CompanionDeliveryOption",
      "CompanyCreditStatusError.Reason" => "CompanyCreditStatusErrorReason",
      "ComputedStatus" => "ComputedStatus",
      "ContentMetadataTargetingError.Reason" => "ContentMetadataTargetingErrorReason",
      "CostType" => "CostType",
      "CreativeError.Reason" => "CreativeErrorReason",
      "CreativeRotationType" => "CreativeRotationType",
      "CreativeSizeType" => "CreativeSizeType",
      "CrossSellError.Reason" => "CrossSellErrorReason",
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
      "EntityChildrenLimitReachedError.Reason" => "EntityChildrenLimitReachedErrorReason",
      "EntityLimitReachedError.Reason" => "EntityLimitReachedErrorReason",
      "EnvironmentType" => "EnvironmentType",
      "FeatureError.Reason" => "FeatureErrorReason",
      "ForecastError.Reason" => "ForecastErrorReason",
      "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
      "GenericTargetingError.Reason" => "GenericTargetingErrorReason",
      "GeoTargetingError.Reason" => "GeoTargetingErrorReason",
      "GoalType" => "GoalType",
      "GrpAge" => "GrpAge",
      "GrpGender" => "GrpGender",
      "GrpProvider" => "GrpProvider",
      "GrpSettingsError.Reason" => "GrpSettingsErrorReason",
      "GrpTargetGender" => "GrpTargetGender",
      "GrpUnitType" => "GrpUnitType",
      "ImageError.Reason" => "ImageErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "InventoryUnitError.Reason" => "InventoryUnitErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemActivityAssociationError.Reason" => "LineItemActivityAssociationErrorReason",
      "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
      "LineItemDiscountType" => "LineItemDiscountType",
      "LineItemError.Reason" => "LineItemErrorReason",
      "LineItemFlightDateError.Reason" => "LineItemFlightDateErrorReason",
      "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
      "LineItemSummary.ReservationStatus" => "LineItemSummaryReservationStatus",
      "LineItemType" => "LineItemType",
      "MinuteOfHour" => "MinuteOfHour",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OrderActionError.Reason" => "OrderActionErrorReason",
      "OrderError.Reason" => "OrderErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "CreativePersistenceType" => "CreativePersistenceType",
      "ProgrammaticError.Reason" => "ProgrammaticErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RegExError.Reason" => "RegExErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "RequiredSizeError.Reason" => "RequiredSizeErrorReason",
      "ReservationDetailsError.Reason" => "ReservationDetailsErrorReason",
      "RoadblockingType" => "RoadblockingType",
      "AudienceSegmentError.Reason" => "AudienceSegmentErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "SetTopBoxLineItemError.Reason" => "SetTopBoxLineItemErrorReason",
      "SetTopBoxSyncStatus" => "SetTopBoxSyncStatus",
      "StartDateTimeType" => "StartDateTimeType",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TargetPlatform" => "TargetPlatform",
      "TargetingDimension" => "TargetingDimension",
      "TeamError.Reason" => "TeamErrorReason",
      "TechnologyTargetingError.Reason" => "TechnologyTargetingErrorReason",
      "TimeUnit" => "TimeUnit",
      "TimeZoneError.Reason" => "TimeZoneErrorReason",
      "UnitType" => "UnitType",
      "UserDomainTargetingError.Reason" => "UserDomainTargetingErrorReason",
      "VideoBumperType" => "VideoBumperType",
      "VideoPosition.Type" => "VideoPositionType",
      "VideoPositionTargetingError.Reason" => "VideoPositionTargetingErrorReason",
      "getAvailabilityForecast" => "GetAvailabilityForecast",
      "getAvailabilityForecastResponse" => "GetAvailabilityForecastResponse",
      "getAvailabilityForecastById" => "GetAvailabilityForecastById",
      "getAvailabilityForecastByIdResponse" => "GetAvailabilityForecastByIdResponse",
      "getDeliveryForecast" => "GetDeliveryForecast",
      "getDeliveryForecastResponse" => "GetDeliveryForecastResponse",
      "getDeliveryForecastByIds" => "GetDeliveryForecastByIds",
      "getDeliveryForecastByIdsResponse" => "GetDeliveryForecastByIdsResponse",
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
     * Gets the availability forecast for a {@link ProspectiveLineItem}. An availability forecast
     * reports the maximum number of available units that the line item can book, and the total
     * number of units matching the line item's targeting.
     * 
     * <p>Note: Beginning in v201502, this replaces the previous getForecast method.
     * 
     * @param lineItem the prospective line item (new or existing) to be forecasted for availability
     * @param forecastOptions options controlling the forecast
     */
    public function getAvailabilityForecast($lineItem, $forecastOptions) {
      $args = new GetAvailabilityForecast($lineItem, $forecastOptions);
      $result = $this->__soapCall("getAvailabilityForecast", array($args));
      return $result->rval;
    }
    /**
     * Gets an {@link AvailabilityForecast} for an existing {@link LineItem} object.
     * An availability forecast reports the maximum number of available units that the line item can
     * be booked with, and also the total number of units matching the line item's targeting.
     * 
     * <p>Only line items having type {@link LineItemType#SPONSORSHIP} or
     * {@link LineItemType#STANDARD} are valid. Other types will result in
     * {@link ReservationDetailsError.Reason#LINE_ITEM_TYPE_NOT_ALLOWED}.
     * 
     * <p>Note: Beginning in v201502, this replaces the previous getForecastById method.
     * 
     * @param lineItemId the ID of a {@link LineItem} to run the forecast on.
     * @param forecastOptions options controlling the forecast
     */
    public function getAvailabilityForecastById($lineItemId, $forecastOptions) {
      $args = new GetAvailabilityForecastById($lineItemId, $forecastOptions);
      $result = $this->__soapCall("getAvailabilityForecastById", array($args));
      return $result->rval;
    }
    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery
     * forecast reports the number of units that will be delivered to each line item given the line
     * item goals and contentions from other line items.
     * 
     * @param lineItems line items to be forecasted for delivery
     * @param forecastOptions options controlling the forecast
     */
    public function getDeliveryForecast($lineItems, $forecastOptions) {
      $args = new GetDeliveryForecast($lineItems, $forecastOptions);
      $result = $this->__soapCall("getDeliveryForecast", array($args));
      return $result->rval;
    }
    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery
     * forecast reports the number of units that will be delivered to each line item given the line
     * item goals and contentions from other line items.
     * 
     * @param lineItemIds the IDs of line items to be forecasted for delivery
     * @param forecastOptions options controlling the forecast
     */
    public function getDeliveryForecastByIds($lineItemIds, $forecastOptions) {
      $args = new GetDeliveryForecastByIds($lineItemIds, $forecastOptions);
      $result = $this->__soapCall("getDeliveryForecastByIds", array($args));
      return $result->rval;
    }
  }
}

