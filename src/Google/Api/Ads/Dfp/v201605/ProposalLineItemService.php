<?php
/**
 * Contains all client objects for the ProposalLineItemService
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
 * @subpackage v201605
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
   * @subpackage v201605
   */
  class AdUnitTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TechnologyTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ApiVersionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class AppliedLabel {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("AuthenticationError", false)) {
  /**
   * An error for an exception that occurred when authenticating.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("AvailableBillingError", false)) {
  /**
   * Lists all errors associated with the availability of billing settings based on
   * proposal network settings.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class AvailableBillingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "AvailableBillingError";

    /**
     * @access public
     * @var tnsAvailableBillingErrorReason
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

if (!class_exists("BandwidthGroupTargeting", false)) {
  /**
   * Represents bandwidth groups that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BandwidthGroupTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("BillingError", false)) {
  /**
   * Lists all errors associated with the billing settings of a proposal or proposal line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BillingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "BillingError";

    /**
     * @access public
     * @var tnsBillingErrorReason
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

if (!class_exists("BrowserLanguageTargeting", false)) {
  /**
   * Represents browser languages that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BrowserLanguageTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class BrowserTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("CollectionSizeError", false)) {
  /**
   * Error for the size of the collection being too large
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CollectionSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CommonError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ContentMetadataKeyHierarchyTargeting", false)) {
  /**
   * Represents one or more {@link CustomTargetingValue custom targeting values} from different
   * {@link CustomTargetingKey custom targeting keys} ANDed together.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ContentMetadataKeyHierarchyTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ContentMetadataTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ContentTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

    public function __construct($targetedContentIds = null, $excludedContentIds = null, $targetedVideoContentBundleIds = null, $excludedVideoContentBundleIds = null, $targetedContentMetadata = null, $excludedContentMetadata = null) {
      $this->targetedContentIds = $targetedContentIds;
      $this->excludedContentIds = $excludedContentIds;
      $this->targetedVideoContentBundleIds = $targetedVideoContentBundleIds;
      $this->excludedVideoContentBundleIds = $excludedVideoContentBundleIds;
      $this->targetedContentMetadata = $targetedContentMetadata;
      $this->excludedContentMetadata = $excludedContentMetadata;
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
   * @subpackage v201605
   */
  class CreativePlaceholder {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("CustomFieldValue", false)) {
  /**
   * The value of a {@link CustomField} that does not have a {@link CustomField#dataType}
   * of {@link CustomFieldDataType#DROP_DOWN}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CustomFieldValue extends BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CustomFieldValueError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CustomTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("CustomizableAttributes", false)) {
  /**
   * Specifies what targeting or attributes are customizable on a {@link ProductTemplate}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CustomizableAttributes {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "CustomizableAttributes";

    /**
     * @access public
     * @var boolean
     */
    public $allowGeoTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowAdUnitTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowPlacementTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowUserDomainTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowBandwidthGroupTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowBrowserTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowBrowserLanguageTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowOperatingSystemTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowDeviceCapabilityTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowDeviceCategoryTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowMobileCarrierTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowMobileDeviceAndManufacturerTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowAudienceSegmentTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $isAllCustomTargetingKeysCustomizable;

    /**
     * @access public
     * @var integer[]
     */
    public $customizableCustomTargetingKeyIds;

    /**
     * @access public
     * @var boolean
     */
    public $allowDaypartTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowFrequencyCapsCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowDeliverySettingsCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowCreativePlaceholdersCustomization;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($allowGeoTargetingCustomization = null, $allowAdUnitTargetingCustomization = null, $allowPlacementTargetingCustomization = null, $allowUserDomainTargetingCustomization = null, $allowBandwidthGroupTargetingCustomization = null, $allowBrowserTargetingCustomization = null, $allowBrowserLanguageTargetingCustomization = null, $allowOperatingSystemTargetingCustomization = null, $allowDeviceCapabilityTargetingCustomization = null, $allowDeviceCategoryTargetingCustomization = null, $allowMobileCarrierTargetingCustomization = null, $allowMobileDeviceAndManufacturerTargetingCustomization = null, $allowAudienceSegmentTargetingCustomization = null, $isAllCustomTargetingKeysCustomizable = null, $customizableCustomTargetingKeyIds = null, $allowDaypartTargetingCustomization = null, $allowFrequencyCapsCustomization = null, $allowDeliverySettingsCustomization = null, $allowCreativePlaceholdersCustomization = null) {
      $this->allowGeoTargetingCustomization = $allowGeoTargetingCustomization;
      $this->allowAdUnitTargetingCustomization = $allowAdUnitTargetingCustomization;
      $this->allowPlacementTargetingCustomization = $allowPlacementTargetingCustomization;
      $this->allowUserDomainTargetingCustomization = $allowUserDomainTargetingCustomization;
      $this->allowBandwidthGroupTargetingCustomization = $allowBandwidthGroupTargetingCustomization;
      $this->allowBrowserTargetingCustomization = $allowBrowserTargetingCustomization;
      $this->allowBrowserLanguageTargetingCustomization = $allowBrowserLanguageTargetingCustomization;
      $this->allowOperatingSystemTargetingCustomization = $allowOperatingSystemTargetingCustomization;
      $this->allowDeviceCapabilityTargetingCustomization = $allowDeviceCapabilityTargetingCustomization;
      $this->allowDeviceCategoryTargetingCustomization = $allowDeviceCategoryTargetingCustomization;
      $this->allowMobileCarrierTargetingCustomization = $allowMobileCarrierTargetingCustomization;
      $this->allowMobileDeviceAndManufacturerTargetingCustomization = $allowMobileDeviceAndManufacturerTargetingCustomization;
      $this->allowAudienceSegmentTargetingCustomization = $allowAudienceSegmentTargetingCustomization;
      $this->isAllCustomTargetingKeysCustomizable = $isAllCustomTargetingKeysCustomizable;
      $this->customizableCustomTargetingKeyIds = $customizableCustomTargetingKeyIds;
      $this->allowDaypartTargetingCustomization = $allowDaypartTargetingCustomization;
      $this->allowFrequencyCapsCustomization = $allowFrequencyCapsCustomization;
      $this->allowDeliverySettingsCustomization = $allowDeliverySettingsCustomization;
      $this->allowCreativePlaceholdersCustomization = $allowCreativePlaceholdersCustomization;
    }

  }
}

if (!class_exists("Date", false)) {
  /**
   * Represents a date.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class Date {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DfpDateTime {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DateTimeRangeTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DayPart {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DayPartTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DayPartTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DeliveryData {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("DeliveryIndicator", false)) {
  /**
   * Indicates the delivery performance of the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class DeliveryIndicator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DeviceCapabilityTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DeviceCategoryTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DeviceManufacturerTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DropDownCustomFieldValue extends BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class EntityChildrenLimitReachedError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class EntityLimitReachedError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class FeatureError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ForecastError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class FrequencyCap {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class FrequencyCapError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class GenericTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class GeoTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class GeoTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class Goal {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("InventoryTargeting", false)) {
  /**
   * A collection of targeted and excluded ad units and placements.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class InventoryTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class InventoryTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("LabelEntityAssociationError", false)) {
  /**
   * Errors specific to creating label entity associations.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class LabelEntityAssociationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("LineItemOperationError", false)) {
  /**
   * Lists all errors for executing operations on line items
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class LineItemOperationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("DfpLocation", false)) {
  /**
   * A {@link Location} represents a geographical entity that can be targeted. If
   * a location type is not available because of the API version you are using,
   * the location will be represented as just the base class, otherwise it will be
   * sub-classed correctly.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class DfpLocation {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class MobileCarrierTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class MobileDeviceSubmodelTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class MobileDeviceTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class Money {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class NotNullError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("OperatingSystemTargeting", false)) {
  /**
   * Represents operating systems that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class OperatingSystemTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class OperatingSystemVersionTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ParseError", false)) {
  /**
   * Lists errors related to parsing.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ParseError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class PermissionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("PrecisionError", false)) {
  /**
   * List all errors associated with number precisions.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PrecisionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "PrecisionError";

    /**
     * @access public
     * @var tnsPrecisionErrorReason
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

if (!class_exists("PremiumFeature", false)) {
  /**
   * A {@code PremiumFeature} represents the feature type to be applied as a premium on a
   * {@link RateCard}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "PremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("PremiumRateValue", false)) {
  /**
   * A premium of a {@link RateCard} which could be applied to the line item
   * and charges extra.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PremiumRateValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "PremiumRateValue";

    /**
     * @access public
     * @var integer
     */
    public $premiumRateId;

    /**
     * @access public
     * @var PremiumFeature
     */
    public $premiumFeature;

    /**
     * @access public
     * @var tnsRateType
     */
    public $rateType;

    /**
     * @access public
     * @var tnsPremiumAdjustmentType
     */
    public $adjustmentType;

    /**
     * @access public
     * @var integer
     */
    public $adjustmentSize;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($premiumRateId = null, $premiumFeature = null, $rateType = null, $adjustmentType = null, $adjustmentSize = null) {
      $this->premiumRateId = $premiumRateId;
      $this->premiumFeature = $premiumFeature;
      $this->rateType = $rateType;
      $this->adjustmentType = $adjustmentType;
      $this->adjustmentSize = $adjustmentSize;
    }

  }
}

if (!class_exists("ProductError", false)) {
  /**
   * Lists all error reasons associated with {@link Product products}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProductError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProductError";

    /**
     * @access public
     * @var tnsProductErrorReason
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

if (!class_exists("ProposalError", false)) {
  /**
   * Lists all errors associated with proposals.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalError";

    /**
     * @access public
     * @var tnsProposalErrorReason
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

if (!class_exists("ProposalLineItemAction", false)) {
  /**
   * Represents the actions that can be performed on {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItemAction";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ProposalLineItemActionError", false)) {
  /**
   * Lists all errors for executing operations on proposal line items.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemActionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItemActionError";

    /**
     * @access public
     * @var tnsProposalLineItemActionErrorReason
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

if (!class_exists("ProposalLineItemConstraints", false)) {
  /**
   * A {@code PropoalLineItemConstraints} represents all the constraints set for a
   * {@link ProposalLineItem} and is always readonly. It comes from the {@link Product},
   * based on which the proposal line item is created.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemConstraints {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItemConstraints";

    /**
     * @access public
     * @var boolean
     */
    public $allowCreativePlaceholdersCustomization;

    /**
     * @access public
     * @var CreativePlaceholder[]
     */
    public $builtInCreativePlaceholders;

    /**
     * @access public
     * @var tnsRoadblockingType
     */
    public $builtInRoadblockingType;

    /**
     * @access public
     * @var tnsDeliveryRateType
     */
    public $builtInDeliveryRateType;

    /**
     * @access public
     * @var tnsCreativeRotationType
     */
    public $builtInCreativeRotationType;

    /**
     * @access public
     * @var tnsCompanionDeliveryOption
     */
    public $builtInCompanionDeliveryOption;

    /**
     * @access public
     * @var FrequencyCap[]
     */
    public $builtInFrequencyCaps;

    /**
     * @access public
     * @var Targeting
     */
    public $productBuiltInTargeting;

    /**
     * @access public
     * @var CustomizableAttributes
     */
    public $customizableAttributes;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($allowCreativePlaceholdersCustomization = null, $builtInCreativePlaceholders = null, $builtInRoadblockingType = null, $builtInDeliveryRateType = null, $builtInCreativeRotationType = null, $builtInCompanionDeliveryOption = null, $builtInFrequencyCaps = null, $productBuiltInTargeting = null, $customizableAttributes = null) {
      $this->allowCreativePlaceholdersCustomization = $allowCreativePlaceholdersCustomization;
      $this->builtInCreativePlaceholders = $builtInCreativePlaceholders;
      $this->builtInRoadblockingType = $builtInRoadblockingType;
      $this->builtInDeliveryRateType = $builtInDeliveryRateType;
      $this->builtInCreativeRotationType = $builtInCreativeRotationType;
      $this->builtInCompanionDeliveryOption = $builtInCompanionDeliveryOption;
      $this->builtInFrequencyCaps = $builtInFrequencyCaps;
      $this->productBuiltInTargeting = $productBuiltInTargeting;
      $this->customizableAttributes = $customizableAttributes;
    }

  }
}

if (!class_exists("ProposalLineItem", false)) {
  /**
   * A {@code ProposalLineItem} is an instance of sales {@link Product}. It belongs to
   * a {@link Proposal} and is created according to a {@link Product} and
   * {@link RateCard}. When the proposal is turned into an {@link Order}, this object is
   * turned into a {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItem {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItem";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $proposalId;

    /**
     * @access public
     * @var integer
     */
    public $packageId;

    /**
     * @access public
     * @var integer
     */
    public $rateCardId;

    /**
     * @access public
     * @var integer
     */
    public $productId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var DateTime
     */
    public $startDateTime;

    /**
     * @access public
     * @var DateTime
     */
    public $endDateTime;

    /**
     * @access public
     * @var string
     */
    public $timeZoneId;

    /**
     * @access public
     * @var string
     */
    public $notes;

    /**
     * @access public
     * @var tnsCostAdjustment
     */
    public $costAdjustment;

    /**
     * @access public
     * @var boolean
     */
    public $isArchived;

    /**
     * @access public
     * @var Goal
     */
    public $goal;

    /**
     * @access public
     * @var integer
     */
    public $contractedQuantityBuffer;

    /**
     * @access public
     * @var integer
     */
    public $scheduledQuantity;

    /**
     * @access public
     * @var integer
     */
    public $contractedUnitsBought;

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
     * @var tnsCompanionDeliveryOption
     */
    public $companionDeliveryOption;

    /**
     * @access public
     * @var tnsCreativeRotationType
     */
    public $creativeRotationType;

    /**
     * @access public
     * @var integer
     */
    public $videoMaxDuration;

    /**
     * @access public
     * @var FrequencyCap[]
     */
    public $frequencyCaps;

    /**
     * @access public
     * @var integer
     */
    public $dfpLineItemId;

    /**
     * @access public
     * @var tnsLineItemType
     */
    public $lineItemType;

    /**
     * @access public
     * @var integer
     */
    public $lineItemPriority;

    /**
     * @access public
     * @var tnsRateType
     */
    public $rateType;

    /**
     * @access public
     * @var CreativePlaceholder[]
     */
    public $creativePlaceholders;

    /**
     * @access public
     * @var Targeting
     */
    public $targeting;

    /**
     * @access public
     * @var BaseCustomFieldValue[]
     */
    public $customFieldValues;

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
     * @var ProposalLineItemConstraints
     */
    public $productConstraints;

    /**
     * @access public
     * @var ProposalLineItemPremium[]
     */
    public $premiums;

    /**
     * @access public
     * @var boolean
     */
    public $isSold;

    /**
     * @access public
     * @var Money
     */
    public $baseRate;

    /**
     * @access public
     * @var Money
     */
    public $costPerUnit;

    /**
     * @access public
     * @var Money
     */
    public $cost;

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
     * @var tnsComputedStatus
     */
    public $computedStatus;

    /**
     * @access public
     * @var tnsBillingCap
     */
    public $billingCap;

    /**
     * @access public
     * @var tnsBillingSchedule
     */
    public $billingSchedule;

    /**
     * @access public
     * @var tnsBillingSource
     */
    public $billingSource;

    /**
     * @access public
     * @var tnsBillingBase
     */
    public $billingBase;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var tnsReservationStatus
     */
    public $reservationStatus;

    /**
     * @access public
     * @var boolean
     */
    public $useThirdPartyAdServerFromProposal;

    /**
     * @access public
     * @var integer
     */
    public $thirdPartyAdServerId;

    /**
     * @access public
     * @var string
     */
    public $customThirdPartyAdServerName;

    /**
     * @access public
     * @var tnsEnvironmentType
     */
    public $environmentType;

    /**
     * @access public
     * @var tnsLinkStatus
     */
    public $linkStatus;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $proposalId = null, $packageId = null, $rateCardId = null, $productId = null, $name = null, $startDateTime = null, $endDateTime = null, $timeZoneId = null, $notes = null, $costAdjustment = null, $isArchived = null, $goal = null, $contractedQuantityBuffer = null, $scheduledQuantity = null, $contractedUnitsBought = null, $deliveryRateType = null, $roadblockingType = null, $companionDeliveryOption = null, $creativeRotationType = null, $videoMaxDuration = null, $frequencyCaps = null, $dfpLineItemId = null, $lineItemType = null, $lineItemPriority = null, $rateType = null, $creativePlaceholders = null, $targeting = null, $customFieldValues = null, $appliedLabels = null, $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $productConstraints = null, $premiums = null, $isSold = null, $baseRate = null, $costPerUnit = null, $cost = null, $deliveryIndicator = null, $deliveryData = null, $computedStatus = null, $billingCap = null, $billingSchedule = null, $billingSource = null, $billingBase = null, $lastModifiedDateTime = null, $reservationStatus = null, $useThirdPartyAdServerFromProposal = null, $thirdPartyAdServerId = null, $customThirdPartyAdServerName = null, $environmentType = null, $linkStatus = null) {
      $this->id = $id;
      $this->proposalId = $proposalId;
      $this->packageId = $packageId;
      $this->rateCardId = $rateCardId;
      $this->productId = $productId;
      $this->name = $name;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->timeZoneId = $timeZoneId;
      $this->notes = $notes;
      $this->costAdjustment = $costAdjustment;
      $this->isArchived = $isArchived;
      $this->goal = $goal;
      $this->contractedQuantityBuffer = $contractedQuantityBuffer;
      $this->scheduledQuantity = $scheduledQuantity;
      $this->contractedUnitsBought = $contractedUnitsBought;
      $this->deliveryRateType = $deliveryRateType;
      $this->roadblockingType = $roadblockingType;
      $this->companionDeliveryOption = $companionDeliveryOption;
      $this->creativeRotationType = $creativeRotationType;
      $this->videoMaxDuration = $videoMaxDuration;
      $this->frequencyCaps = $frequencyCaps;
      $this->dfpLineItemId = $dfpLineItemId;
      $this->lineItemType = $lineItemType;
      $this->lineItemPriority = $lineItemPriority;
      $this->rateType = $rateType;
      $this->creativePlaceholders = $creativePlaceholders;
      $this->targeting = $targeting;
      $this->customFieldValues = $customFieldValues;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->disableSameAdvertiserCompetitiveExclusion = $disableSameAdvertiserCompetitiveExclusion;
      $this->productConstraints = $productConstraints;
      $this->premiums = $premiums;
      $this->isSold = $isSold;
      $this->baseRate = $baseRate;
      $this->costPerUnit = $costPerUnit;
      $this->cost = $cost;
      $this->deliveryIndicator = $deliveryIndicator;
      $this->deliveryData = $deliveryData;
      $this->computedStatus = $computedStatus;
      $this->billingCap = $billingCap;
      $this->billingSchedule = $billingSchedule;
      $this->billingSource = $billingSource;
      $this->billingBase = $billingBase;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->reservationStatus = $reservationStatus;
      $this->useThirdPartyAdServerFromProposal = $useThirdPartyAdServerFromProposal;
      $this->thirdPartyAdServerId = $thirdPartyAdServerId;
      $this->customThirdPartyAdServerName = $customThirdPartyAdServerName;
      $this->environmentType = $environmentType;
      $this->linkStatus = $linkStatus;
    }

  }
}

if (!class_exists("ProposalLineItemError", false)) {
  /**
   * Lists all errors associated with proposal line items.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItemError";

    /**
     * @access public
     * @var tnsProposalLineItemErrorReason
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

if (!class_exists("ProposalLineItemPage", false)) {
  /**
   * Captures a page of {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemPage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItemPage";

    /**
     * @access public
     * @var ProposalLineItem[]
     */
    public $results;

    /**
     * @access public
     * @var integer
     */
    public $startIndex;

    /**
     * @access public
     * @var integer
     */
    public $totalResultSetSize;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($results = null, $startIndex = null, $totalResultSetSize = null) {
      $this->results = $results;
      $this->startIndex = $startIndex;
      $this->totalResultSetSize = $totalResultSetSize;
    }

  }
}

if (!class_exists("ProposalLineItemPremium", false)) {
  /**
   * Represents the status of a triggered {@link PremiumRateValue} (formerly
   * referred to as a {@code RateCardCustomization}).
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemPremium {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItemPremium";

    /**
     * @access public
     * @var PremiumRateValue
     */
    public $premiumRateValue;

    /**
     * @access public
     * @var tnsProposalLineItemPremiumStatus
     */
    public $status;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($premiumRateValue = null, $status = null) {
      $this->premiumRateValue = $premiumRateValue;
      $this->status = $status;
    }

  }
}

if (!class_exists("PublisherQueryLanguageContextError", false)) {
  /**
   * An error that occurs while executing a PQL query contained in
   * a {@link Statement} object.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PublisherQueryLanguageContextError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class PublisherQueryLanguageSyntaxError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class QuotaError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ReleaseProposalLineItems", false)) {
  /**
   * The action used for releasing inventory for {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ReleaseProposalLineItems extends ProposalLineItemAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ReleaseProposalLineItems";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("RequiredCollectionError", false)) {
  /**
   * A list of all errors to be used for validating sizes of collections.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class RequiredCollectionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class RequiredNumberError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ReservationDetailsError", false)) {
  /**
   * Lists all errors associated with LineItem's reservation details.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ReservationDetailsError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ResumeProposalLineItems", false)) {
  /**
   * The action used for resuming {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ResumeProposalLineItems extends ProposalLineItemAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ResumeProposalLineItems";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AudienceSegmentError", false)) {
  /**
   * Errors that could occur on audience segment related requests.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class AudienceSegmentError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ServerError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("Size", false)) {
  /**
   * Represents the dimensions of an {@link AdUnit}, {@link LineItem} or {@link Creative}.
   * <p>
   * For interstitial size (out-of-page), native, ignored and fluid size, {@code Size} must be 1x1.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class Size {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("Statement", false)) {
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
   * The value for the variable idValue must then be set with an object of type
   * {@link Value}, e.g., {@link NumberValue}, {@link TextValue} or
   * {@link BooleanValue}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class Statement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($query = null, $values = null) {
      $this->query = $query;
      $this->values = $values;
    }

  }
}

if (!class_exists("StatementError", false)) {
  /**
   * An error that occurs while parsing {@link Statement} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class StatementError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("StringLengthError", false)) {
  /**
   * Errors for Strings which do not meet given length constraints.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("String_ValueMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type String
   * and value of type Value.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class String_ValueMapEntry {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $value = null) {
      $this->key = $key;
      $this->value = $value;
    }

  }
}

if (!class_exists("Targeting", false)) {
  /**
   * Contains targeting criteria for {@link LineItem} objects. See
   * {@link LineItem#targeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class Targeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TeamError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TechnologyTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TimeOfDay {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TimeZoneError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TypeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("UnarchiveProposalLineItems", false)) {
  /**
   * The action used for unarchiving {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class UnarchiveProposalLineItems extends ProposalLineItemAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "UnarchiveProposalLineItems";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("UniqueError", false)) {
  /**
   * An error for a field which must satisfy a uniqueness constraint
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class UniqueError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("UnknownPremiumFeature", false)) {
  /**
   * The {@link PremiumFeature} returned if the actual feature is not exposed by
   * the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class UnknownPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "UnknownPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("UnlinkProposalLineItems", false)) {
  /**
   * The action used for unlinking {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class UnlinkProposalLineItems extends ProposalLineItemAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "UnlinkProposalLineItems";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("UpdateResult", false)) {
  /**
   * Represents the result of performing an action on objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class UpdateResult {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "UpdateResult";

    /**
     * @access public
     * @var integer
     */
    public $numChanges;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($numChanges = null) {
      $this->numChanges = $numChanges;
    }

  }
}

if (!class_exists("UserDomainPremiumFeature", false)) {
  /**
   * A premium feature applied to user domain targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class UserDomainPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "UserDomainPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("UserDomainTargeting", false)) {
  /**
   * Provides line items the ability to target or exclude users visiting their
   * websites from a list of domains or subdomains.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class UserDomainTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class UserDomainTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class VideoPosition {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("VideoPositionPremiumFeature", false)) {
  /**
   * A premium feature applied to video position targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class VideoPositionPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "VideoPositionPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("VideoPositionTargeting", false)) {
  /**
   * Represents positions within and around a video where ads can be targeted to.
   * <p>
   * Example positions could be {@code pre-roll} (before the video plays),
   * {@code post-roll} (after a video has completed playback) and
   * {@code mid-roll} (during video playback).
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class VideoPositionTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class VideoPositionTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class VideoPositionWithinPod {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class VideoPositionTarget {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ApiVersionErrorReason", false)) {
  /**
   * Indicates that the operation is not allowed in the version the request
   * was made in.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ApiVersionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("AuthenticationErrorReason", false)) {
  /**
   * The SOAP message contains a request header with an ambiguous definition
   * of the authentication header fields. This means either the {@code
   * authToken} and {@code oAuthToken} fields were both null or both were
   * specified. Exactly one value should be specified with each request.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("AvailableBillingErrorReason", false)) {
  /**
   * The error reason represented by an enum.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class AvailableBillingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "AvailableBillingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BillingBase", false)) {
  /**
   * Determines the base of billing calculation.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BillingBase {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "BillingBase";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BillingCap", false)) {
  /**
   * Determines how the revenue amount will be capped for each billing month. This cannot be used when
   * {@link BillingSource} is {@link BillingSource#CONTRACTED}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BillingCap {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "BillingCap";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BillingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BillingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "BillingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BillingSchedule", false)) {
  /**
   * Determines how much to bill in each billing cycle when a proposal is charged based on the
   * contracted value. This can only be used when {@link BillingSource} is
   * {@link BillingSource#CONTRACTED}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BillingSchedule {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "BillingSchedule";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BillingSource", false)) {
  /**
   * Determines which billable numbers or delivery data (impressions, clicks, and so on)
   * will be used for billing purposes.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BillingSource {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "BillingSource";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201605
   */
  class CollectionSizeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CommonErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CompanionDeliveryOption {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ComputedStatus", false)) {
  /**
   * Describes the computed {@link LineItem} status that is derived from the
   * current state of the line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ComputedStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ContentMetadataTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("CostAdjustment", false)) {
  /**
   * Describes the cost adjustment of {@link ProposalLineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CostAdjustment {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "CostAdjustment";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201605
   */
  class CreativeRotationType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CreativeSizeType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("CustomCriteriaComparisonOperator", false)) {
  /**
   * Specifies the available comparison operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CustomCriteriaComparisonOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CustomCriteriaSetLogicalOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CustomFieldValueErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CustomTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class AudienceSegmentCriteriaComparisonOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DateTimeRangeTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DayOfWeek {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DayPartTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DeliveryTimeZone {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DeliveryRateType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class EntityChildrenLimitReachedErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class EntityLimitReachedErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class EnvironmentType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class FeatureErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ForecastErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class FrequencyCapErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class GenericTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class GeoTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class GoalType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("InventoryTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class InventoryTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("LabelEntityAssociationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class LabelEntityAssociationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("LineItemOperationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class LineItemOperationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("LineItemType", false)) {
  /**
   * {@code LineItemType} indicates the priority of a {@link LineItem}, determined
   * by the way in which impressions are reserved to be served for it.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class LineItemType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("LinkStatus", false)) {
  /**
   * Status of the link between {@link ProposalLineItem} and its {@link Product}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class LinkStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("MinuteOfHour", false)) {
  /**
   * Minutes in an hour. Currently, only 0, 15, 30, and 45 are supported. This
   * field is required.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class MinuteOfHour {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class NotNullErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ParseErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ParseErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class PermissionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("PrecisionErrorReason", false)) {
  /**
   * Describes reasons for precision errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PrecisionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "PrecisionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("PremiumAdjustmentType", false)) {
  /**
   * Describes how to apply the adjustment to the base rate.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PremiumAdjustmentType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "PremiumAdjustmentType";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ProductErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProductErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProductError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ProposalErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ProposalLineItemActionErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemActionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItemActionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ProposalLineItemErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItemError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ProposalLineItemPremiumStatus", false)) {
  /**
   * Status of the premium triggered by a proposal line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemPremiumStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ProposalLineItemPremiumStatus";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201605
   */
  class PublisherQueryLanguageContextErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class PublisherQueryLanguageSyntaxErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class QuotaErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("RateType", false)) {
  /**
   * Describes the type of event the advertiser is paying for. The values here correspond to the
   * values for the {@link LineItem#costType} field.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class RateType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "RateType";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201605
   */
  class RequiredCollectionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class RequiredNumberErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ReservationDetailsErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ReservationDetailsErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ReservationStatus", false)) {
  /**
   * Represents the inventory reservation status for {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ReservationStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ReservationStatus";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201605
   */
  class RoadblockingType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class AudienceSegmentErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class ServerErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("StatementErrorReason", false)) {
  /**
   * A bind variable has not been bound to a value.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class StatementErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("TeamErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class TeamErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TechnologyTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TimeUnit {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TimeZoneErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class UnitType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class UserDomainTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class VideoBumperType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class VideoPositionType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class VideoPositionTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("CreateProposalLineItems", false)) {
  /**
   * Creates new {@link ProposalLineItem} objects.
   * 
   * For each proposal line item, the following fields are required:
   * <ul>
   * <li>{@link ProposalLineItem#proposalId}</li>
   * <li>{@link ProposalLineItem#rateCardId}</li>
   * <li>{@link ProposalLineItem#productId}</li>
   * <li>{@link ProposalLineItem#name}</li>
   * <li>{@link ProposalLineItem#startDateTime}</li>
   * <li>{@link ProposalLineItem#endDateTime}</li>
   * </ul>
   * 
   * @param proposalLineItems the proposal line items to create
   * @return the created proposal line items with their IDs filled in
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CreateProposalLineItems {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ProposalLineItem[]
     */
    public $proposalLineItems;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($proposalLineItems = null) {
      $this->proposalLineItems = $proposalLineItems;
    }

  }
}

if (!class_exists("CreateProposalLineItemsResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CreateProposalLineItemsResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ProposalLineItem[]
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

if (!class_exists("GetProposalLineItemsByStatement", false)) {
  /**
   * Gets a {@link ProposalLineItemPage} of {@link ProposalLineItem} objects
   * that satisfy the given {@link Statement#query}.  The following fields are supported for
   * filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link ProposalLineItem#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link ProposalLineItem#name}</td>
   * </tr>
   * <tr>
   * <td>{@code proposalId}</td>
   * <td>{@link ProposalLineItem#proposalId}</td>
   * </tr>
   * <tr>
   * <td>{@code startDateTime}</td>
   * <td>{@link ProposalLineItem#startDateTime}</td>
   * </tr>
   * <tr>
   * <td>{@code endDateTime}</td>
   * <td>{@link ProposalLineItem#endDateTime}</td>
   * </tr>
   * <tr>
   * <td>{@code isArchived}</td>
   * <td>{@link ProposalLineItem#isArchived}</td>
   * </tr>
   * <tr>
   * <td>{@code lastModifiedDateTime}</td>
   * <td>{@link ProposalLineItem#lastModifiedDateTime}</td>
   * </tr>
   * <tr>
   * <td>
   * {@code useThirdPartyAdServerFromProposal}
   * <div class="constraint">
   * Only applicable for non-programmatic proposal line items using sales management
   * </div>
   * </td>
   * <td>{@link ProposalLineItem#useThirdPartyAdServerFromProposal}</td>
   * </tr>
   * <tr>
   * <td>
   * {@code thirdPartyAdServerId}
   * <div class="constraint">
   * Only applicable for non-programmatic proposal line items using sales management
   * </div>
   * </td>
   * <td>{@link ProposalLineItem#thirdPartyAdServerId}</td>
   * </tr>
   * <tr>
   * <td>
   * {@code customThirdPartyAdServerName}
   * <div class="constraint">
   * Only applicable for non-programmatic proposal line items using sales management
   * </div>
   * </td>
   * <td>{@link ProposalLineItem#customThirdPartyAdServerName}</td>
   * </tr>
   * <tr>
   * <td>{@code isProgrammatic}</td>
   * <td>{@link ProposalLineItem#isProgrammatic}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of proposal line items
   * @return the proposal line items that match the given filter
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class GetProposalLineItemsByStatement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Statement
     */
    public $filterStatement;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($filterStatement = null) {
      $this->filterStatement = $filterStatement;
    }

  }
}

if (!class_exists("GetProposalLineItemsByStatementResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class GetProposalLineItemsByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ProposalLineItemPage
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

if (!class_exists("PerformProposalLineItemAction", false)) {
  /**
   * Performs actions on {@link ProposalLineItem} objects that match
   * the given {@link Statement#query}.
   * 
   * @param proposalLineItemAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter a set of
   * proposal line items
   * @return the result of the action performed
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PerformProposalLineItemAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ProposalLineItemAction
     */
    public $proposalLineItemAction;

    /**
     * @access public
     * @var Statement
     */
    public $filterStatement;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($proposalLineItemAction = null, $filterStatement = null) {
      $this->proposalLineItemAction = $proposalLineItemAction;
      $this->filterStatement = $filterStatement;
    }

  }
}

if (!class_exists("PerformProposalLineItemActionResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PerformProposalLineItemActionResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var UpdateResult
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

if (!class_exists("UpdateProposalLineItems", false)) {
  /**
   * Updates the specified {@link ProposalLineItem} objects. If free editing mode is enabled,
   * this will trigger inventory reservation and cause the proposal to be pushed to DFP again.
   * 
   * @param proposalLineItems the proposal line items to update
   * @return the updated proposal line items
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class UpdateProposalLineItems {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ProposalLineItem[]
     */
    public $proposalLineItems;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($proposalLineItems = null) {
      $this->proposalLineItems = $proposalLineItems;
    }

  }
}

if (!class_exists("UpdateProposalLineItemsResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class UpdateProposalLineItemsResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ProposalLineItem[]
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
   * @subpackage v201605
   */
  class ObjectValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ActualizeProposalLineItems", false)) {
  /**
   * The action used for actualizing {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ActualizeProposalLineItems extends ProposalLineItemAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ActualizeProposalLineItems";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdUnitPremiumFeature", false)) {
  /**
   * A premium feature applied to ad unit targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class AdUnitPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "AdUnitPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ArchiveProposalLineItems", false)) {
  /**
   * The action used for archiving {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ArchiveProposalLineItems extends ProposalLineItemAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ArchiveProposalLineItems";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AudienceSegmentPremiumFeature", false)) {
  /**
   * A premium feature applied to audience segment targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class AudienceSegmentPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "AudienceSegmentPremiumFeature";

    /**
     * @access public
     * @var integer
     */
    public $audienceSegmentId;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($audienceSegmentId = null) {
      parent::__construct();
      $this->audienceSegmentId = $audienceSegmentId;
    }

  }
}

if (!class_exists("BandwidthPremiumFeature", false)) {
  /**
   * A premium feature applied to bandwidth targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BandwidthPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "BandwidthPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BandwidthGroup", false)) {
  /**
   * Represents a group of bandwidths that are logically organized by some well
   * known generic names such as 'Cable' or 'DSL'.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BandwidthGroup extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class BooleanValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class Browser extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("BrowserPremiumFeature", false)) {
  /**
   * A premium feature applied to browser targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BrowserPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "BrowserPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BrowserLanguage", false)) {
  /**
   * Represents a Browser's language.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BrowserLanguage extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("BrowserLanguagePremiumFeature", false)) {
  /**
   * A premium feature applied to browser language targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class BrowserLanguagePremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "BrowserLanguagePremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ContentBundlePremiumFeature", false)) {
  /**
   * A premium feature applied to content bundle targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ContentBundlePremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "ContentBundlePremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CustomCriteriaSet", false)) {
  /**
   * A {@link CustomCriteriaSet} comprises of a set of {@link CustomCriteriaNode}
   * objects combined by the
   * {@link CustomCriteriaSet.LogicalOperator#logicalOperator}. The custom
   * criteria targeting tree is subject to the rules defined on
   * {@link Targeting#customTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CustomCriteriaSet extends CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("CustomTargetingPremiumFeature", false)) {
  /**
   * A premium feature applied to custom criteria targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CustomTargetingPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "CustomTargetingPremiumFeature";

    /**
     * @access public
     * @var integer
     */
    public $customTargetingKeyId;

    /**
     * @access public
     * @var integer
     */
    public $customTargetingValueId;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($customTargetingKeyId = null, $customTargetingValueId = null) {
      parent::__construct();
      $this->customTargetingKeyId = $customTargetingKeyId;
      $this->customTargetingValueId = $customTargetingValueId;
    }

  }
}

if (!class_exists("CustomCriteriaLeaf", false)) {
  /**
   * A {@link CustomCriteriaLeaf} object represents a generic leaf of {@link CustomCriteria} tree
   * structure.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class CustomCriteriaLeaf extends CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class AudienceSegmentCriteria extends CustomCriteriaLeaf {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DateTimeValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class DateValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("DaypartPremiumFeature", false)) {
  /**
   * A premium feature applied to daypart targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class DaypartPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "DaypartPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("DeviceCapability", false)) {
  /**
   * Represents a capability of a physical device.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class DeviceCapability extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("DeviceCapabilityPremiumFeature", false)) {
  /**
   * A premium feature applied to device capability targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class DeviceCapabilityPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "DeviceCapabilityPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("DeviceCategory", false)) {
  /**
   * Represents the category of a device.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class DeviceCategory extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("DeviceCategoryPremiumFeature", false)) {
  /**
   * A premium feature applied to device category targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class DeviceCategoryPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "DeviceCategoryPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("DeviceManufacturer", false)) {
  /**
   * Represents a mobile device's manufacturer.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class DeviceManufacturer extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("DeviceManufacturerPremiumFeature", false)) {
  /**
   * A premium feature applied to device manufacturer targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class DeviceManufacturerPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "DeviceManufacturerPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("FrequencyCapPremiumFeature", false)) {
  /**
   * A premium feature applied to frequency caps.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class FrequencyCapPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "FrequencyCapPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("GeographyPremiumFeature", false)) {
  /**
   * A premium feature applied to geography targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class GeographyPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "GeographyPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MobileCarrier", false)) {
  /**
   * Represents a mobile carrier.
   * Carrier targeting is only available to DFP mobile publishers.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class MobileCarrier extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("MobileCarrierPremiumFeature", false)) {
  /**
   * A premium feature applied to mobile carrier targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class MobileCarrierPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "MobileCarrierPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MobileDevice", false)) {
  /**
   * Represents a Mobile Device.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class MobileDevice extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class MobileDeviceSubmodel extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class NumberValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class OperatingSystem extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("OperatingSystemPremiumFeature", false)) {
  /**
   * A premium feature applied to operating system targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class OperatingSystemPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "OperatingSystemPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("OperatingSystemVersion", false)) {
  /**
   * Represents a specific version of an operating system.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class OperatingSystemVersion extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("PauseProposalLineItems", false)) {
  /**
   * The action used for pausing {@link ProposalLineItem} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PauseProposalLineItems extends ProposalLineItemAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "PauseProposalLineItems";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("PlacementPremiumFeature", false)) {
  /**
   * A premium feature applied to placement targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class PlacementPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const XSI_TYPE = "PlacementPremiumFeature";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("SetValue", false)) {
  /**
   * Contains a set of {@link Value Values}. May not contain duplicates.
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class SetValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class TextValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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
   * @subpackage v201605
   */
  class CustomCriteria extends CustomCriteriaLeaf {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
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

if (!class_exists("ProposalLineItemService", false)) {
  /**
   * ProposalLineItemService
   * @package GoogleApiAdsDfp
   * @subpackage v201605
   */
  class ProposalLineItemService extends DfpSoapClient {

    const SERVICE_NAME = "ProposalLineItemService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201605";
    const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201605/ProposalLineItemService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201605/ProposalLineItemService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActualizeProposalLineItems" => "ActualizeProposalLineItems",
      "AdUnitPremiumFeature" => "AdUnitPremiumFeature",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "TechnologyTargeting" => "TechnologyTargeting",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AppliedLabel" => "AppliedLabel",
      "ArchiveProposalLineItems" => "ArchiveProposalLineItems",
      "AudienceSegmentPremiumFeature" => "AudienceSegmentPremiumFeature",
      "AuthenticationError" => "AuthenticationError",
      "AvailableBillingError" => "AvailableBillingError",
      "BandwidthPremiumFeature" => "BandwidthPremiumFeature",
      "BandwidthGroup" => "BandwidthGroup",
      "BandwidthGroupTargeting" => "BandwidthGroupTargeting",
      "BaseCustomFieldValue" => "BaseCustomFieldValue",
      "BillingError" => "BillingError",
      "BooleanValue" => "BooleanValue",
      "Browser" => "Browser",
      "BrowserPremiumFeature" => "BrowserPremiumFeature",
      "BrowserLanguage" => "BrowserLanguage",
      "BrowserLanguagePremiumFeature" => "BrowserLanguagePremiumFeature",
      "BrowserLanguageTargeting" => "BrowserLanguageTargeting",
      "BrowserTargeting" => "BrowserTargeting",
      "CollectionSizeError" => "CollectionSizeError",
      "CommonError" => "CommonError",
      "ContentBundlePremiumFeature" => "ContentBundlePremiumFeature",
      "ContentMetadataKeyHierarchyTargeting" => "ContentMetadataKeyHierarchyTargeting",
      "ContentMetadataTargetingError" => "ContentMetadataTargetingError",
      "ContentTargeting" => "ContentTargeting",
      "CreativePlaceholder" => "CreativePlaceholder",
      "CustomCriteria" => "CustomCriteria",
      "CustomCriteriaSet" => "CustomCriteriaSet",
      "CustomFieldValue" => "CustomFieldValue",
      "CustomFieldValueError" => "CustomFieldValueError",
      "CustomTargetingError" => "CustomTargetingError",
      "CustomTargetingPremiumFeature" => "CustomTargetingPremiumFeature",
      "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
      "CustomCriteriaNode" => "CustomCriteriaNode",
      "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
      "CustomizableAttributes" => "CustomizableAttributes",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeRangeTargetingError" => "DateTimeRangeTargetingError",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DayPart" => "DayPart",
      "DaypartPremiumFeature" => "DaypartPremiumFeature",
      "DayPartTargeting" => "DayPartTargeting",
      "DayPartTargetingError" => "DayPartTargetingError",
      "DeliveryData" => "DeliveryData",
      "DeliveryIndicator" => "DeliveryIndicator",
      "DeviceCapability" => "DeviceCapability",
      "DeviceCapabilityPremiumFeature" => "DeviceCapabilityPremiumFeature",
      "DeviceCapabilityTargeting" => "DeviceCapabilityTargeting",
      "DeviceCategory" => "DeviceCategory",
      "DeviceCategoryPremiumFeature" => "DeviceCategoryPremiumFeature",
      "DeviceCategoryTargeting" => "DeviceCategoryTargeting",
      "DeviceManufacturer" => "DeviceManufacturer",
      "DeviceManufacturerPremiumFeature" => "DeviceManufacturerPremiumFeature",
      "DeviceManufacturerTargeting" => "DeviceManufacturerTargeting",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "EntityChildrenLimitReachedError" => "EntityChildrenLimitReachedError",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "ForecastError" => "ForecastError",
      "FrequencyCap" => "FrequencyCap",
      "FrequencyCapError" => "FrequencyCapError",
      "FrequencyCapPremiumFeature" => "FrequencyCapPremiumFeature",
      "GenericTargetingError" => "GenericTargetingError",
      "GeoTargeting" => "GeoTargeting",
      "GeoTargetingError" => "GeoTargetingError",
      "GeographyPremiumFeature" => "GeographyPremiumFeature",
      "Goal" => "Goal",
      "InternalApiError" => "InternalApiError",
      "InventoryTargeting" => "InventoryTargeting",
      "InventoryTargetingError" => "InventoryTargetingError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "LineItemOperationError" => "LineItemOperationError",
      "Location" => "DfpLocation",
      "MobileCarrier" => "MobileCarrier",
      "MobileCarrierPremiumFeature" => "MobileCarrierPremiumFeature",
      "MobileCarrierTargeting" => "MobileCarrierTargeting",
      "MobileDevice" => "MobileDevice",
      "MobileDeviceSubmodel" => "MobileDeviceSubmodel",
      "MobileDeviceSubmodelTargeting" => "MobileDeviceSubmodelTargeting",
      "MobileDeviceTargeting" => "MobileDeviceTargeting",
      "Money" => "Money",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "OperatingSystem" => "OperatingSystem",
      "OperatingSystemPremiumFeature" => "OperatingSystemPremiumFeature",
      "OperatingSystemTargeting" => "OperatingSystemTargeting",
      "OperatingSystemVersion" => "OperatingSystemVersion",
      "OperatingSystemVersionTargeting" => "OperatingSystemVersionTargeting",
      "ParseError" => "ParseError",
      "PauseProposalLineItems" => "PauseProposalLineItems",
      "PermissionError" => "PermissionError",
      "PlacementPremiumFeature" => "PlacementPremiumFeature",
      "PrecisionError" => "PrecisionError",
      "PremiumFeature" => "PremiumFeature",
      "PremiumRateValue" => "PremiumRateValue",
      "ProductError" => "ProductError",
      "ProposalError" => "ProposalError",
      "ProposalLineItemAction" => "ProposalLineItemAction",
      "ProposalLineItemActionError" => "ProposalLineItemActionError",
      "ProposalLineItemConstraints" => "ProposalLineItemConstraints",
      "ProposalLineItem" => "ProposalLineItem",
      "ProposalLineItemError" => "ProposalLineItemError",
      "ProposalLineItemPage" => "ProposalLineItemPage",
      "ProposalLineItemPremium" => "ProposalLineItemPremium",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "ReleaseProposalLineItems" => "ReleaseProposalLineItems",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "ReservationDetailsError" => "ReservationDetailsError",
      "ResumeProposalLineItems" => "ResumeProposalLineItems",
      "AudienceSegmentError" => "AudienceSegmentError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "Targeting" => "Targeting",
      "TeamError" => "TeamError",
      "Technology" => "Technology",
      "TechnologyTargetingError" => "TechnologyTargetingError",
      "TextValue" => "TextValue",
      "TimeOfDay" => "TimeOfDay",
      "TimeZoneError" => "TimeZoneError",
      "TypeError" => "TypeError",
      "UnarchiveProposalLineItems" => "UnarchiveProposalLineItems",
      "UniqueError" => "UniqueError",
      "UnknownPremiumFeature" => "UnknownPremiumFeature",
      "UnlinkProposalLineItems" => "UnlinkProposalLineItems",
      "UpdateResult" => "UpdateResult",
      "UserDomainPremiumFeature" => "UserDomainPremiumFeature",
      "UserDomainTargeting" => "UserDomainTargeting",
      "UserDomainTargetingError" => "UserDomainTargetingError",
      "Value" => "Value",
      "VideoPosition" => "VideoPosition",
      "VideoPositionPremiumFeature" => "VideoPositionPremiumFeature",
      "VideoPositionTargeting" => "VideoPositionTargeting",
      "VideoPositionTargetingError" => "VideoPositionTargetingError",
      "VideoPositionWithinPod" => "VideoPositionWithinPod",
      "VideoPositionTarget" => "VideoPositionTarget",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AvailableBillingError.Reason" => "AvailableBillingErrorReason",
      "BillingBase" => "BillingBase",
      "BillingCap" => "BillingCap",
      "BillingError.Reason" => "BillingErrorReason",
      "BillingSchedule" => "BillingSchedule",
      "BillingSource" => "BillingSource",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CompanionDeliveryOption" => "CompanionDeliveryOption",
      "ComputedStatus" => "ComputedStatus",
      "ContentMetadataTargetingError.Reason" => "ContentMetadataTargetingErrorReason",
      "CostAdjustment" => "CostAdjustment",
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
      "EntityChildrenLimitReachedError.Reason" => "EntityChildrenLimitReachedErrorReason",
      "EntityLimitReachedError.Reason" => "EntityLimitReachedErrorReason",
      "EnvironmentType" => "EnvironmentType",
      "FeatureError.Reason" => "FeatureErrorReason",
      "ForecastError.Reason" => "ForecastErrorReason",
      "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
      "GenericTargetingError.Reason" => "GenericTargetingErrorReason",
      "GeoTargetingError.Reason" => "GeoTargetingErrorReason",
      "GoalType" => "GoalType",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
      "LineItemType" => "LineItemType",
      "LinkStatus" => "LinkStatus",
      "MinuteOfHour" => "MinuteOfHour",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PrecisionError.Reason" => "PrecisionErrorReason",
      "PremiumAdjustmentType" => "PremiumAdjustmentType",
      "ProductError.Reason" => "ProductErrorReason",
      "ProposalError.Reason" => "ProposalErrorReason",
      "ProposalLineItemActionError.Reason" => "ProposalLineItemActionErrorReason",
      "ProposalLineItemError.Reason" => "ProposalLineItemErrorReason",
      "ProposalLineItemPremiumStatus" => "ProposalLineItemPremiumStatus",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateType" => "RateType",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ReservationDetailsError.Reason" => "ReservationDetailsErrorReason",
      "ReservationStatus" => "ReservationStatus",
      "RoadblockingType" => "RoadblockingType",
      "AudienceSegmentError.Reason" => "AudienceSegmentErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TeamError.Reason" => "TeamErrorReason",
      "TechnologyTargetingError.Reason" => "TechnologyTargetingErrorReason",
      "TimeUnit" => "TimeUnit",
      "TimeZoneError.Reason" => "TimeZoneErrorReason",
      "UnitType" => "UnitType",
      "UserDomainTargetingError.Reason" => "UserDomainTargetingErrorReason",
      "VideoBumperType" => "VideoBumperType",
      "VideoPosition.Type" => "VideoPositionType",
      "VideoPositionTargetingError.Reason" => "VideoPositionTargetingErrorReason",
      "createProposalLineItems" => "CreateProposalLineItems",
      "createProposalLineItemsResponse" => "CreateProposalLineItemsResponse",
      "getProposalLineItemsByStatement" => "GetProposalLineItemsByStatement",
      "getProposalLineItemsByStatementResponse" => "GetProposalLineItemsByStatementResponse",
      "performProposalLineItemAction" => "PerformProposalLineItemAction",
      "performProposalLineItemActionResponse" => "PerformProposalLineItemActionResponse",
      "updateProposalLineItems" => "UpdateProposalLineItems",
      "updateProposalLineItemsResponse" => "UpdateProposalLineItemsResponse",
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
     * Creates new {@link ProposalLineItem} objects.
     * 
     * For each proposal line item, the following fields are required:
     * <ul>
     * <li>{@link ProposalLineItem#proposalId}</li>
     * <li>{@link ProposalLineItem#rateCardId}</li>
     * <li>{@link ProposalLineItem#productId}</li>
     * <li>{@link ProposalLineItem#name}</li>
     * <li>{@link ProposalLineItem#startDateTime}</li>
     * <li>{@link ProposalLineItem#endDateTime}</li>
     * </ul>
     * 
     * @param proposalLineItems the proposal line items to create
     * @return the created proposal line items with their IDs filled in
     */
    public function createProposalLineItems($proposalLineItems) {
      $args = new CreateProposalLineItems($proposalLineItems);
      $result = $this->__soapCall("createProposalLineItems", array($args));
      return $result->rval;
    }
    /**
     * Gets a {@link ProposalLineItemPage} of {@link ProposalLineItem} objects
     * that satisfy the given {@link Statement#query}.  The following fields are supported for
     * filtering:
     * 
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ProposalLineItem#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ProposalLineItem#name}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link ProposalLineItem#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code startDateTime}</td>
     * <td>{@link ProposalLineItem#startDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code endDateTime}</td>
     * <td>{@link ProposalLineItem#endDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link ProposalLineItem#isArchived}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link ProposalLineItem#lastModifiedDateTime}</td>
     * </tr>
     * <tr>
     * <td>
     * {@code useThirdPartyAdServerFromProposal}
     * <div class="constraint">
     * Only applicable for non-programmatic proposal line items using sales management
     * </div>
     * </td>
     * <td>{@link ProposalLineItem#useThirdPartyAdServerFromProposal}</td>
     * </tr>
     * <tr>
     * <td>
     * {@code thirdPartyAdServerId}
     * <div class="constraint">
     * Only applicable for non-programmatic proposal line items using sales management
     * </div>
     * </td>
     * <td>{@link ProposalLineItem#thirdPartyAdServerId}</td>
     * </tr>
     * <tr>
     * <td>
     * {@code customThirdPartyAdServerName}
     * <div class="constraint">
     * Only applicable for non-programmatic proposal line items using sales management
     * </div>
     * </td>
     * <td>{@link ProposalLineItem#customThirdPartyAdServerName}</td>
     * </tr>
     * <tr>
     * <td>{@code isProgrammatic}</td>
     * <td>{@link ProposalLineItem#isProgrammatic}</td>
     * </tr>
     * </table>
     * 
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of proposal line items
     * @return the proposal line items that match the given filter
     */
    public function getProposalLineItemsByStatement($filterStatement) {
      $args = new GetProposalLineItemsByStatement($filterStatement);
      $result = $this->__soapCall("getProposalLineItemsByStatement", array($args));
      return $result->rval;
    }
    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     * 
     * @param proposalLineItemAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter a set of
     * proposal line items
     * @return the result of the action performed
     */
    public function performProposalLineItemAction($proposalLineItemAction, $filterStatement) {
      $args = new PerformProposalLineItemAction($proposalLineItemAction, $filterStatement);
      $result = $this->__soapCall("performProposalLineItemAction", array($args));
      return $result->rval;
    }
    /**
     * Updates the specified {@link ProposalLineItem} objects. If free editing mode is enabled,
     * this will trigger inventory reservation and cause the proposal to be pushed to DFP again.
     * 
     * @param proposalLineItems the proposal line items to update
     * @return the updated proposal line items
     */
    public function updateProposalLineItems($proposalLineItems) {
      $args = new UpdateProposalLineItems($proposalLineItems);
      $result = $this->__soapCall("updateProposalLineItems", array($args));
      return $result->rval;
    }
  }
}

