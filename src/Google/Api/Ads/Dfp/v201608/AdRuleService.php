<?php
/**
 * Contains all client objects for the AdRuleService
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
 * @subpackage v201608
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once "Google/Api/Ads/Dfp/Lib/DfpSoapClient.php";

if (!class_exists("AdRuleAction", false)) {
  /**
   * Represents the actions that can be performed on {@link AdRule} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleAction";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdRule", false)) {
  /**
   * An {@link AdRule} contains data that the ad server will use to generate a playlist of video ads.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRule {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRule";

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
     * @var integer
     */
    public $priority;

    /**
     * @access public
     * @var Targeting
     */
    public $targeting;

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
     * @var boolean
     */
    public $unlimitedEndDateTime;

    /**
     * @access public
     * @var tnsAdRuleStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsFrequencyCapBehavior
     */
    public $frequencyCapBehavior;

    /**
     * @access public
     * @var integer
     */
    public $maxImpressionsPerLineItemPerStream;

    /**
     * @access public
     * @var integer
     */
    public $maxImpressionsPerLineItemPerPod;

    /**
     * @access public
     * @var BaseAdRuleSlot
     */
    public $preroll;

    /**
     * @access public
     * @var BaseAdRuleSlot
     */
    public $midroll;

    /**
     * @access public
     * @var BaseAdRuleSlot
     */
    public $postroll;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $priority = null, $targeting = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $unlimitedEndDateTime = null, $status = null, $frequencyCapBehavior = null, $maxImpressionsPerLineItemPerStream = null, $maxImpressionsPerLineItemPerPod = null, $preroll = null, $midroll = null, $postroll = null) {
      $this->id = $id;
      $this->name = $name;
      $this->priority = $priority;
      $this->targeting = $targeting;
      $this->startDateTime = $startDateTime;
      $this->startDateTimeType = $startDateTimeType;
      $this->endDateTime = $endDateTime;
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      $this->status = $status;
      $this->frequencyCapBehavior = $frequencyCapBehavior;
      $this->maxImpressionsPerLineItemPerStream = $maxImpressionsPerLineItemPerStream;
      $this->maxImpressionsPerLineItemPerPod = $maxImpressionsPerLineItemPerPod;
      $this->preroll = $preroll;
      $this->midroll = $midroll;
      $this->postroll = $postroll;
    }

  }
}

if (!class_exists("AdRulePage", false)) {
  /**
   * Captures a page of {@link AdRule} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRulePage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRulePage";

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
     * @var AdRule[]
     */
    public $results;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($totalResultSetSize = null, $startIndex = null, $results = null) {
      $this->totalResultSetSize = $totalResultSetSize;
      $this->startIndex = $startIndex;
      $this->results = $results;
    }

  }
}

if (!class_exists("BaseAdRuleSlot", false)) {
  /**
   * Simple object representing an ad slot within an {@link AdRule}. Ad rule slots
   * contain information about the types/number of ads to display, as well
   * as additional information on how the ad server will generate playlists.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class BaseAdRuleSlot {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "BaseAdRuleSlot";

    /**
     * @access public
     * @var tnsAdRuleSlotBehavior
     */
    public $slotBehavior;

    /**
     * @access public
     * @var integer
     */
    public $minVideoAdDuration;

    /**
     * @access public
     * @var integer
     */
    public $maxVideoAdDuration;

    /**
     * @access public
     * @var tnsMidrollFrequencyType
     */
    public $videoMidrollFrequencyType;

    /**
     * @access public
     * @var string
     */
    public $videoMidrollFrequency;

    /**
     * @access public
     * @var tnsAdRuleSlotBumper
     */
    public $bumper;

    /**
     * @access public
     * @var integer
     */
    public $maxBumperDuration;

    /**
     * @access public
     * @var integer
     */
    public $minPodDuration;

    /**
     * @access public
     * @var integer
     */
    public $maxPodDuration;

    /**
     * @access public
     * @var integer
     */
    public $maxAdsInPod;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null) {
      $this->slotBehavior = $slotBehavior;
      $this->minVideoAdDuration = $minVideoAdDuration;
      $this->maxVideoAdDuration = $maxVideoAdDuration;
      $this->videoMidrollFrequencyType = $videoMidrollFrequencyType;
      $this->videoMidrollFrequency = $videoMidrollFrequency;
      $this->bumper = $bumper;
      $this->maxBumperDuration = $maxBumperDuration;
      $this->minPodDuration = $minPodDuration;
      $this->maxPodDuration = $maxPodDuration;
      $this->maxAdsInPod = $maxAdsInPod;
    }

  }
}

if (!class_exists("StandardPoddingAdRuleSlot", false)) {
  /**
   * An ad rule slot with standard podding. A standard pod is a series of video ads played
   * back to back. Standard pods are defined by a {@link BaseAdRuleSlot#maxAdsInPod} and a
   * {@link BaseAdRuleSlot#maxVideoAdDuration}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class StandardPoddingAdRuleSlot extends BaseAdRuleSlot {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "StandardPoddingAdRuleSlot";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null) {
      parent::__construct();
      $this->slotBehavior = $slotBehavior;
      $this->minVideoAdDuration = $minVideoAdDuration;
      $this->maxVideoAdDuration = $maxVideoAdDuration;
      $this->videoMidrollFrequencyType = $videoMidrollFrequencyType;
      $this->videoMidrollFrequency = $videoMidrollFrequency;
      $this->bumper = $bumper;
      $this->maxBumperDuration = $maxBumperDuration;
      $this->minPodDuration = $minPodDuration;
      $this->maxPodDuration = $maxPodDuration;
      $this->maxAdsInPod = $maxAdsInPod;
    }

  }
}

if (!class_exists("AdUnitTargeting", false)) {
  /**
   * Represents targeted or excluded ad units.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdUnitTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class TechnologyTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class ApiVersionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("AuthenticationError", false)) {
  /**
   * An error for an exception that occurred when authenticating.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("BandwidthGroupTargeting", false)) {
  /**
   * Represents bandwidth groups that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class BandwidthGroupTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("BrowserLanguageTargeting", false)) {
  /**
   * Represents browser languages that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class BrowserLanguageTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class BrowserTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class CollectionSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class CommonError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class ContentMetadataKeyHierarchyTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class ContentMetadataTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class ContentTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("CustomTargetingError", false)) {
  /**
   * Lists all errors related to {@link CustomTargetingKey} and
   * {@link CustomTargetingValue} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class CustomTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class Date {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class DfpDateTime {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("DayPart", false)) {
  /**
   * {@code DayPart} represents a time-period within a day of the week which is
   * targeted by a {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class DayPart {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class DayPartTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("DeactivateAdRules", false)) {
  /**
   * The action used for pausing {@link AdRule} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class DeactivateAdRules extends AdRuleAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "DeactivateAdRules";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("DeleteAdRules", false)) {
  /**
   * The action used for deleting {@link AdRule} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class DeleteAdRules extends AdRuleAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "DeleteAdRules";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("DeviceCapabilityTargeting", false)) {
  /**
   * Represents device capabilities that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class DeviceCapabilityTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class DeviceCategoryTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class DeviceManufacturerTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("FeatureError", false)) {
  /**
   * Errors related to feature management.  If you attempt using a feature that is not available to
   * the current network you'll receive a FeatureError with the missing feature as the trigger.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class FeatureError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class GeoTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class InventoryTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class InventoryTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("DfpLocation", false)) {
  /**
   * A {@link Location} represents a geographical entity that can be targeted. If
   * a location type is not available because of the API version you are using,
   * the location will be represented as just the base class, otherwise it will be
   * sub-classed correctly.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class DfpLocation {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class MobileCarrierTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class MobileDeviceSubmodelTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class MobileDeviceTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("NotNullError", false)) {
  /**
   * Caused by supplying a null value for an attribute that cannot be null.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class NotNullError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class OperatingSystemTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class OperatingSystemVersionTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class ParseError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class PermissionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("PoddingError", false)) {
  /**
   * Errors related to podding fields in ad rule slots.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class PoddingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "PoddingError";

    /**
     * @access public
     * @var tnsPoddingErrorReason
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

if (!class_exists("PublisherQueryLanguageContextError", false)) {
  /**
   * An error that occurs while executing a PQL query contained in
   * a {@link Statement} object.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class PublisherQueryLanguageContextError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class PublisherQueryLanguageSyntaxError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class QuotaError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("RequiredCollectionError", false)) {
  /**
   * A list of all errors to be used for validating sizes of collections.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class RequiredCollectionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class RequiredNumberError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("ServerError", false)) {
  /**
   * Errors related to the server.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ServerError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("SoapRequestHeader", false)) {
  /**
   * Represents the SOAP request header used by API requests.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class Statement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class StatementError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class String_ValueMapEntry {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class Targeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("Technology", false)) {
  /**
   * Represents a technology entity that can be targeted.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("TimeOfDay", false)) {
  /**
   * Represents a specific time in a day.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class TimeOfDay {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("UniqueError", false)) {
  /**
   * An error for a field which must satisfy a uniqueness constraint
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class UniqueError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("UnknownAdRuleSlot", false)) {
  /**
   * The {@link BaseAdRuleSlot} subtype returned if the actual type is not exposed by the
   * requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class UnknownAdRuleSlot extends BaseAdRuleSlot {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "UnknownAdRuleSlot";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null) {
      parent::__construct();
      $this->slotBehavior = $slotBehavior;
      $this->minVideoAdDuration = $minVideoAdDuration;
      $this->maxVideoAdDuration = $maxVideoAdDuration;
      $this->videoMidrollFrequencyType = $videoMidrollFrequencyType;
      $this->videoMidrollFrequency = $videoMidrollFrequency;
      $this->bumper = $bumper;
      $this->maxBumperDuration = $maxBumperDuration;
      $this->minPodDuration = $minPodDuration;
      $this->maxPodDuration = $maxPodDuration;
      $this->maxAdsInPod = $maxAdsInPod;
    }

  }
}

if (!class_exists("UpdateResult", false)) {
  /**
   * Represents the result of performing an action on objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class UpdateResult {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("UserDomainTargeting", false)) {
  /**
   * Provides line items the ability to target or exclude users visiting their
   * websites from a list of domains or subdomains.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class UserDomainTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("Value", false)) {
  /**
   * {@code Value} represents a value.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class VideoPosition {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class VideoPositionTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("VideoPositionWithinPod", false)) {
  /**
   * Represents a targetable position within a pod within a video stream. A video ad can be targeted
   * to any position in the pod (first, second, third ... last).  If there is only 1 ad in a pod,
   * either first or last will target that position.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class VideoPositionWithinPod {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class VideoPositionTarget {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("AdRuleDateErrorReason", false)) {
  /**
   * Describes reasons for {@code AdRuleDateError}s.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleDateErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleDateError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdRuleFrequencyCapErrorReason", false)) {
  /**
   * Describes reason for {@code AdRuleFrequencyCapError}s.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleFrequencyCapErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleFrequencyCapError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdRulePriorityErrorReason", false)) {
  /**
   * Reasons for an {@code AdRulePriorityError}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRulePriorityErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRulePriorityError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdRuleSlotBehavior", false)) {
  /**
   * The types of behaviors for ads within a {@link BaseAdRuleSlot ad rule slot}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleSlotBehavior {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleSlotBehavior";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdRuleSlotBumper", false)) {
  /**
   * Types of bumper ads on an ad rule slot.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleSlotBumper {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleSlotBumper";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdRuleSlotErrorReason", false)) {
  /**
   * Describes reason for {@code AdRuleSlotError}s.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleSlotErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleSlotError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdRuleStatus", false)) {
  /**
   * Represents the status of ad rules and ad rule slots.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleStatus";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201608
   */
  class ApiVersionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("CollectionSizeErrorReason", false)) {
  /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class CollectionSizeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class CommonErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("ContentMetadataTargetingErrorReason", false)) {
  /**
   * The reasons for the metadata targeting error.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ContentMetadataTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("CustomCriteriaComparisonOperator", false)) {
  /**
   * Specifies the available comparison operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class CustomCriteriaComparisonOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class CustomCriteriaSetLogicalOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("CustomTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class CustomTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class AudienceSegmentCriteriaComparisonOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("DayOfWeek", false)) {
  /**
   * Days of the week.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class DayOfWeek {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("DeliveryTimeZone", false)) {
  /**
   * Represents the time zone to be used for {@link DayPartTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class DeliveryTimeZone {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("FeatureErrorReason", false)) {
  /**
   * A feature is being used that is not enabled on the current network.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class FeatureErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("FrequencyCapBehavior", false)) {
  /**
   * Types of behavior for frequency caps within ad rules.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class FrequencyCapBehavior {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "FrequencyCapBehavior";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201608
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class InventoryTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("MidrollFrequencyType", false)) {
  /**
   * Frequency types for mid-roll {@link BaseAdRuleSlot ad rule slots}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class MidrollFrequencyType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "MidrollFrequencyType";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201608
   */
  class MinuteOfHour {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class NotNullErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class ParseErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class PermissionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("PoddingErrorReason", false)) {
  /**
   * Describes reason for {@code PoddingError}s.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class PoddingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "PoddingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201608
   */
  class PublisherQueryLanguageContextErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class PublisherQueryLanguageSyntaxErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class QuotaErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("RequiredCollectionErrorReason", false)) {
  /**
   * A required collection is missing.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class RequiredCollectionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class RequiredNumberErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("ServerErrorReason", false)) {
  /**
   * Describes reasons for server errors
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ServerErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("StartDateTimeType", false)) {
  /**
   * Specifies the start type to use for an entity with a start date time field.
   * For example, a {@link LineItem} or {@link LineItemCreativeAssociation}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class StartDateTimeType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class StatementErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("VideoBumperType", false)) {
  /**
   * Represents the options for targetable bumper positions, surrounding an ad
   * pod, within a video stream. This includes before and after the supported ad
   * pod positions, {@link VideoPositionType#PREROLL},
   * {@link VideoPositionType#MIDROLL}, and {@link VideoPositionType#POSTROLL}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class VideoBumperType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class VideoPositionType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("CreateAdRules", false)) {
  /**
   * Creates new {@link AdRule} objects.
   * 
   * @param adRules the ad rules to create
   * @return the created ad rules with their IDs filled in
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class CreateAdRules {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdRule[]
     */
    public $adRules;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adRules = null) {
      $this->adRules = $adRules;
    }

  }
}

if (!class_exists("CreateAdRulesResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class CreateAdRulesResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdRule[]
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

if (!class_exists("GetAdRulesByStatement", false)) {
  /**
   * Gets an {@link AdRulePage} of {@link AdRule} objects that satisfy the given
   * {@link Statement#query}. The following fields are supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link AdRule#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link AdRule#name}</td>
   * </tr>
   * <tr>
   * <td>{@code priority}</td>
   * <td>{@link AdRule#priority}</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link AdRule#status}</td>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of ad rules
   * @return the ad rules that match the given filter
   * @throws ApiException if the ID of the active network does not exist or
   * there is a backend error
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetAdRulesByStatement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Statement
     */
    public $statement;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($statement = null) {
      $this->statement = $statement;
    }

  }
}

if (!class_exists("GetAdRulesByStatementResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetAdRulesByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdRulePage
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

if (!class_exists("PerformAdRuleAction", false)) {
  /**
   * Performs actions on {@link AdRule} objects that match the given
   * {@link Statement#query}.
   * 
   * @param adRuleAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of ad rules
   * @return the result of the action performed
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class PerformAdRuleAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdRuleAction
     */
    public $adRuleAction;

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

    public function __construct($adRuleAction = null, $filterStatement = null) {
      $this->adRuleAction = $adRuleAction;
      $this->filterStatement = $filterStatement;
    }

  }
}

if (!class_exists("PerformAdRuleActionResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class PerformAdRuleActionResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("UpdateAdRules", false)) {
  /**
   * Updates the specified {@link AdRule} objects.
   * 
   * @param adRules the ad rules to update
   * @return the updated ad rules
   * @throws ApiException if there is an error updating the ad rules
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class UpdateAdRules {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdRule[]
     */
    public $adRules;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adRules = null) {
      $this->adRules = $adRules;
    }

  }
}

if (!class_exists("UpdateAdRulesResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class UpdateAdRulesResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdRule[]
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
   * @subpackage v201608
   */
  class ObjectValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("ActivateAdRules", false)) {
  /**
   * The action used for resuming {@link AdRule} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ActivateAdRules extends AdRuleAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "ActivateAdRules";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdRuleDateError", false)) {
  /**
   * Lists all errors associated with ad rule start and end dates.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleDateError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleDateError";

    /**
     * @access public
     * @var tnsAdRuleDateErrorReason
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

if (!class_exists("AdRuleFrequencyCapError", false)) {
  /**
   * Errors related to ad rule frequency caps
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleFrequencyCapError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleFrequencyCapError";

    /**
     * @access public
     * @var tnsAdRuleFrequencyCapErrorReason
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

if (!class_exists("NoPoddingAdRuleSlot", false)) {
  /**
   * An ad rule slot with no podding. It is defined by a {@link BaseAdRuleSlot#maxVideoAdDuration}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class NoPoddingAdRuleSlot extends BaseAdRuleSlot {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "NoPoddingAdRuleSlot";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null) {
      parent::__construct();
      $this->slotBehavior = $slotBehavior;
      $this->minVideoAdDuration = $minVideoAdDuration;
      $this->maxVideoAdDuration = $maxVideoAdDuration;
      $this->videoMidrollFrequencyType = $videoMidrollFrequencyType;
      $this->videoMidrollFrequency = $videoMidrollFrequency;
      $this->bumper = $bumper;
      $this->maxBumperDuration = $maxBumperDuration;
      $this->minPodDuration = $minPodDuration;
      $this->maxPodDuration = $maxPodDuration;
      $this->maxAdsInPod = $maxAdsInPod;
    }

  }
}

if (!class_exists("OptimizedPoddingAdRuleSlot", false)) {
  /**
   * Ad rule slot with optimized podding. Optimized pods are defined by a
   * {@link BaseAdRuleSlot#maxPodDuration} and a {@link BaseAdRuleSlot#maxAdsInPod}, and the ad
   * server chooses the best ads for the alloted duration.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class OptimizedPoddingAdRuleSlot extends BaseAdRuleSlot {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "OptimizedPoddingAdRuleSlot";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null) {
      parent::__construct();
      $this->slotBehavior = $slotBehavior;
      $this->minVideoAdDuration = $minVideoAdDuration;
      $this->maxVideoAdDuration = $maxVideoAdDuration;
      $this->videoMidrollFrequencyType = $videoMidrollFrequencyType;
      $this->videoMidrollFrequency = $videoMidrollFrequency;
      $this->bumper = $bumper;
      $this->maxBumperDuration = $maxBumperDuration;
      $this->minPodDuration = $minPodDuration;
      $this->maxPodDuration = $maxPodDuration;
      $this->maxAdsInPod = $maxAdsInPod;
    }

  }
}

if (!class_exists("AdRulePriorityError", false)) {
  /**
   * Errors associated with ad rule priorities.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRulePriorityError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRulePriorityError";

    /**
     * @access public
     * @var tnsAdRulePriorityErrorReason
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

if (!class_exists("AdRuleSlotError", false)) {
  /**
   * Errors related to ad rule slots.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleSlotError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "AdRuleSlotError";

    /**
     * @access public
     * @var tnsAdRuleSlotErrorReason
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
   * @subpackage v201608
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class BandwidthGroup extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class BooleanValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class Browser extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class BrowserLanguage extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class CustomCriteriaSet extends CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class CustomCriteriaLeaf extends CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class AudienceSegmentCriteria extends CustomCriteriaLeaf {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class DateTimeValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class DateValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class DeviceCapability extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class DeviceCategory extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class DeviceManufacturer extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("MobileCarrier", false)) {
  /**
   * Represents a mobile carrier.
   * Carrier targeting is only available to DFP mobile publishers.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class MobileCarrier extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class MobileDevice extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class MobileDeviceSubmodel extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class NumberValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class OperatingSystem extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class OperatingSystemVersion extends Technology {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class SetValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class TextValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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
   * @subpackage v201608
   */
  class CustomCriteria extends CustomCriteriaLeaf {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("AdRuleService", false)) {
  /**
   * AdRuleService
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class AdRuleService extends DfpSoapClient {

    const SERVICE_NAME = "AdRuleService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201608/AdRuleService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201608/AdRuleService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateAdRules" => "ActivateAdRules",
      "AdRuleAction" => "AdRuleAction",
      "AdRuleDateError" => "AdRuleDateError",
      "AdRule" => "AdRule",
      "AdRuleFrequencyCapError" => "AdRuleFrequencyCapError",
      "NoPoddingAdRuleSlot" => "NoPoddingAdRuleSlot",
      "OptimizedPoddingAdRuleSlot" => "OptimizedPoddingAdRuleSlot",
      "AdRulePage" => "AdRulePage",
      "AdRulePriorityError" => "AdRulePriorityError",
      "BaseAdRuleSlot" => "BaseAdRuleSlot",
      "AdRuleSlotError" => "AdRuleSlotError",
      "StandardPoddingAdRuleSlot" => "StandardPoddingAdRuleSlot",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "TechnologyTargeting" => "TechnologyTargeting",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BandwidthGroup" => "BandwidthGroup",
      "BandwidthGroupTargeting" => "BandwidthGroupTargeting",
      "BooleanValue" => "BooleanValue",
      "Browser" => "Browser",
      "BrowserLanguage" => "BrowserLanguage",
      "BrowserLanguageTargeting" => "BrowserLanguageTargeting",
      "BrowserTargeting" => "BrowserTargeting",
      "CollectionSizeError" => "CollectionSizeError",
      "CommonError" => "CommonError",
      "ContentMetadataKeyHierarchyTargeting" => "ContentMetadataKeyHierarchyTargeting",
      "ContentMetadataTargetingError" => "ContentMetadataTargetingError",
      "ContentTargeting" => "ContentTargeting",
      "CustomCriteria" => "CustomCriteria",
      "CustomCriteriaSet" => "CustomCriteriaSet",
      "CustomTargetingError" => "CustomTargetingError",
      "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
      "CustomCriteriaNode" => "CustomCriteriaNode",
      "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DayPart" => "DayPart",
      "DayPartTargeting" => "DayPartTargeting",
      "DeactivateAdRules" => "DeactivateAdRules",
      "DeleteAdRules" => "DeleteAdRules",
      "DeviceCapability" => "DeviceCapability",
      "DeviceCapabilityTargeting" => "DeviceCapabilityTargeting",
      "DeviceCategory" => "DeviceCategory",
      "DeviceCategoryTargeting" => "DeviceCategoryTargeting",
      "DeviceManufacturer" => "DeviceManufacturer",
      "DeviceManufacturerTargeting" => "DeviceManufacturerTargeting",
      "FeatureError" => "FeatureError",
      "GeoTargeting" => "GeoTargeting",
      "InternalApiError" => "InternalApiError",
      "InventoryTargeting" => "InventoryTargeting",
      "InventoryTargetingError" => "InventoryTargetingError",
      "Location" => "DfpLocation",
      "MobileCarrier" => "MobileCarrier",
      "MobileCarrierTargeting" => "MobileCarrierTargeting",
      "MobileDevice" => "MobileDevice",
      "MobileDeviceSubmodel" => "MobileDeviceSubmodel",
      "MobileDeviceSubmodelTargeting" => "MobileDeviceSubmodelTargeting",
      "MobileDeviceTargeting" => "MobileDeviceTargeting",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "OperatingSystem" => "OperatingSystem",
      "OperatingSystemTargeting" => "OperatingSystemTargeting",
      "OperatingSystemVersion" => "OperatingSystemVersion",
      "OperatingSystemVersionTargeting" => "OperatingSystemVersionTargeting",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PoddingError" => "PoddingError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "Targeting" => "Targeting",
      "Technology" => "Technology",
      "TextValue" => "TextValue",
      "TimeOfDay" => "TimeOfDay",
      "UniqueError" => "UniqueError",
      "UnknownAdRuleSlot" => "UnknownAdRuleSlot",
      "UpdateResult" => "UpdateResult",
      "UserDomainTargeting" => "UserDomainTargeting",
      "Value" => "Value",
      "VideoPosition" => "VideoPosition",
      "VideoPositionTargeting" => "VideoPositionTargeting",
      "VideoPositionWithinPod" => "VideoPositionWithinPod",
      "VideoPositionTarget" => "VideoPositionTarget",
      "AdRuleDateError.Reason" => "AdRuleDateErrorReason",
      "AdRuleFrequencyCapError.Reason" => "AdRuleFrequencyCapErrorReason",
      "AdRulePriorityError.Reason" => "AdRulePriorityErrorReason",
      "AdRuleSlotBehavior" => "AdRuleSlotBehavior",
      "AdRuleSlotBumper" => "AdRuleSlotBumper",
      "AdRuleSlotError.Reason" => "AdRuleSlotErrorReason",
      "AdRuleStatus" => "AdRuleStatus",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "ContentMetadataTargetingError.Reason" => "ContentMetadataTargetingErrorReason",
      "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
      "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
      "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
      "AudienceSegmentCriteria.ComparisonOperator" => "AudienceSegmentCriteriaComparisonOperator",
      "DayOfWeek" => "DayOfWeek",
      "DeliveryTimeZone" => "DeliveryTimeZone",
      "FeatureError.Reason" => "FeatureErrorReason",
      "FrequencyCapBehavior" => "FrequencyCapBehavior",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "MidrollFrequencyType" => "MidrollFrequencyType",
      "MinuteOfHour" => "MinuteOfHour",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PoddingError.Reason" => "PoddingErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StartDateTimeType" => "StartDateTimeType",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "VideoBumperType" => "VideoBumperType",
      "VideoPosition.Type" => "VideoPositionType",
      "createAdRules" => "CreateAdRules",
      "createAdRulesResponse" => "CreateAdRulesResponse",
      "getAdRulesByStatement" => "GetAdRulesByStatement",
      "getAdRulesByStatementResponse" => "GetAdRulesByStatementResponse",
      "performAdRuleAction" => "PerformAdRuleAction",
      "performAdRuleActionResponse" => "PerformAdRuleActionResponse",
      "updateAdRules" => "UpdateAdRules",
      "updateAdRulesResponse" => "UpdateAdRulesResponse",
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
     * Creates new {@link AdRule} objects.
     * 
     * @param adRules the ad rules to create
     * @return the created ad rules with their IDs filled in
     */
    public function createAdRules($adRules) {
      $args = new CreateAdRules($adRules);
      $result = $this->__soapCall("createAdRules", array($args));
      return $result->rval;
    }
    /**
     * Gets an {@link AdRulePage} of {@link AdRule} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     * 
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AdRule#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AdRule#name}</td>
     * </tr>
     * <tr>
     * <td>{@code priority}</td>
     * <td>{@link AdRule#priority}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AdRule#status}</td>
     * </table>
     * 
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad rules
     * @return the ad rules that match the given filter
     * @throws ApiException if the ID of the active network does not exist or
     * there is a backend error
     */
    public function getAdRulesByStatement($statement) {
      $args = new GetAdRulesByStatement($statement);
      $result = $this->__soapCall("getAdRulesByStatement", array($args));
      return $result->rval;
    }
    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     * 
     * @param adRuleAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad rules
     * @return the result of the action performed
     */
    public function performAdRuleAction($adRuleAction, $filterStatement) {
      $args = new PerformAdRuleAction($adRuleAction, $filterStatement);
      $result = $this->__soapCall("performAdRuleAction", array($args));
      return $result->rval;
    }
    /**
     * Updates the specified {@link AdRule} objects.
     * 
     * @param adRules the ad rules to update
     * @return the updated ad rules
     * @throws ApiException if there is an error updating the ad rules
     */
    public function updateAdRules($adRules) {
      $args = new UpdateAdRules($adRules);
      $result = $this->__soapCall("updateAdRules", array($args));
      return $result->rval;
    }
  }
}

