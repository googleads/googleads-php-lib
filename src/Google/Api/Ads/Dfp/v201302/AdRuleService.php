<?php
/**
 * Contains all client objects for the AdRuleService
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

if (!class_exists("AdRuleAction", FALSE)) {
/**
 * Represents the actions that can be performed on {@link AdRule} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleAction";

  /**
   * @access public
   * @var string
   */
  public $AdRuleActionType;
  private $_parameterMap = array(
    "AdRuleAction.Type" => "AdRuleActionType",
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

  public function __construct($AdRuleActionType = null) {
    $this->AdRuleActionType = $AdRuleActionType;
  }

}}

if (!class_exists("AdRule", FALSE)) {
/**
 * An {@link AdRule} contains data that the ad server will use to generate a playlist of video ads.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRule {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
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

}}

if (!class_exists("AdRulePage", FALSE)) {
/**
 * Captures a page of {@link AdRule} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRulePage {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("BaseAdRuleSlot", FALSE)) {
/**
 * Simple object representing an ad slot within an {@link AdRule}. Ad rule slots
 * contain information about the types/number of ads to display, as well
 * as additional information on how the ad server will generate playlists.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class BaseAdRuleSlot {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "BaseAdRuleSlot";

  /**
   * @access public
   * @var integer
   */
  public $id;

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
   * @access public
   * @var string
   */
  public $BaseAdRuleSlotType;
  private $_parameterMap = array(
    "BaseAdRuleSlot.Type" => "BaseAdRuleSlotType",
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

  public function __construct($id = null, $slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null, $BaseAdRuleSlotType = null) {
    $this->id = $id;
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
    $this->BaseAdRuleSlotType = $BaseAdRuleSlotType;
  }

}}

if (!class_exists("StandardPoddingAdRuleSlot", FALSE)) {
/**
 * An ad rule slot with standard podding. A standard pod is a series of video ads played
 * back to back. Standard pods are defined by a {@link BaseAdRuleSlot#maxAdsInPod} and a
 * {@link BaseAdRuleSlot#maxVideoAdDuration}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class StandardPoddingAdRuleSlot extends BaseAdRuleSlot {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "StandardPoddingAdRuleSlot";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null, $BaseAdRuleSlotType = null) {
    parent::__construct();
    $this->id = $id;
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
    $this->BaseAdRuleSlotType = $BaseAdRuleSlotType;
  }

}}

if (!class_exists("AdUnitTargeting", FALSE)) {
/**
 * Represents targeted or excluded ad units.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdUnitTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($adUnitId = null, $includeDescendants = null) {
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

if (!class_exists("TechnologyTargeting", FALSE)) {
/**
 * Provides {@link LineItem} objects the ability to target or exclude
 * technologies.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class TechnologyTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
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

if (!class_exists("BandwidthGroupTargeting", FALSE)) {
/**
 * Represents bandwidth groups that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class BandwidthGroupTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($isTargeted = null, $bandwidthGroups = null) {
    $this->isTargeted = $isTargeted;
    $this->bandwidthGroups = $bandwidthGroups;
  }

}}

if (!class_exists("BrowserLanguageTargeting", FALSE)) {
/**
 * Represents browser languages that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class BrowserLanguageTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($isTargeted = null, $browserLanguages = null) {
    $this->isTargeted = $isTargeted;
    $this->browserLanguages = $browserLanguages;
  }

}}

if (!class_exists("BrowserTargeting", FALSE)) {
/**
 * Represents browsers that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class BrowserTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($isTargeted = null, $browsers = null) {
    $this->isTargeted = $isTargeted;
    $this->browsers = $browsers;
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

if (!class_exists("ContentTargeting", FALSE)) {
/**
 * Used to target {@link LineItem}s to specific videos on a publisher's site.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class ContentTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($targetedContentIds = null, $excludedContentIds = null, $targetedVideoCategoryIds = null, $excludedVideoCategoryIds = null) {
    $this->targetedContentIds = $targetedContentIds;
    $this->excludedContentIds = $excludedContentIds;
    $this->targetedVideoCategoryIds = $targetedVideoCategoryIds;
    $this->excludedVideoCategoryIds = $excludedVideoCategoryIds;
  }

}}

if (!class_exists("CustomTargetingError", FALSE)) {
/**
 * Lists all errors related to {@link CustomTargetingKey} and
 * {@link CustomTargetingValue} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CustomTargetingError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CustomTargetingError";

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

if (!class_exists("CustomCriteriaNode", FALSE)) {
/**
 * A {@link CustomCriteriaNode} is a node in the custom targeting tree. A custom
 * criteria node can either be a {@link CustomCriteriaSet} (a non-leaf node) or
 * a {@link CustomCriteria} (a leaf node). The custom criteria targeting tree is
 * subject to the rules defined on {@link Targeting#customTargeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CustomCriteriaNode {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CustomCriteriaNode";

  /**
   * @access public
   * @var string
   */
  public $CustomCriteriaNodeType;
  private $_parameterMap = array(
    "CustomCriteriaNode.Type" => "CustomCriteriaNodeType",
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

  public function __construct($CustomCriteriaNodeType = null) {
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
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

if (!class_exists("DayPart", FALSE)) {
/**
 * {@code DayPart} represents a time-period within a day of the week which is
 * targeted by a {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DayPart {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($dayOfWeek = null, $startTime = null, $endTime = null) {
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
 * @subpackage v201302
 */
class DayPartTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($dayParts = null, $timeZone = null) {
    $this->dayParts = $dayParts;
    $this->timeZone = $timeZone;
  }

}}

if (!class_exists("DeactivateAdRules", FALSE)) {
/**
 * The action used for pausing {@link AdRule} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DeactivateAdRules extends AdRuleAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "DeactivateAdRules";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($AdRuleActionType = null) {
    parent::__construct();
    $this->AdRuleActionType = $AdRuleActionType;
  }

}}

if (!class_exists("DeleteAdRules", FALSE)) {
/**
 * The action used for deleting {@link AdRule} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DeleteAdRules extends AdRuleAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "DeleteAdRules";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($AdRuleActionType = null) {
    parent::__construct();
    $this->AdRuleActionType = $AdRuleActionType;
  }

}}

if (!class_exists("DeviceCapabilityTargeting", FALSE)) {
/**
 * Represents device capabilities that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DeviceCapabilityTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($targetedDeviceCapabilities = null, $excludedDeviceCapabilities = null) {
    $this->targetedDeviceCapabilities = $targetedDeviceCapabilities;
    $this->excludedDeviceCapabilities = $excludedDeviceCapabilities;
  }

}}

if (!class_exists("DeviceCategoryTargeting", FALSE)) {
/**
 * Represents device categories that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DeviceCategoryTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($targetedDeviceCategories = null, $excludedDeviceCategories = null) {
    $this->targetedDeviceCategories = $targetedDeviceCategories;
    $this->excludedDeviceCategories = $excludedDeviceCategories;
  }

}}

if (!class_exists("DeviceManufacturerTargeting", FALSE)) {
/**
 * Represents device manufacturer that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DeviceManufacturerTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($isTargeted = null, $deviceManufacturers = null) {
    $this->isTargeted = $isTargeted;
    $this->deviceManufacturers = $deviceManufacturers;
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
 * @subpackage v201302
 */
class GeoTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($targetedLocations = null, $excludedLocations = null) {
    $this->targetedLocations = $targetedLocations;
    $this->excludedLocations = $excludedLocations;
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

if (!class_exists("InventoryTargeting", FALSE)) {
/**
 * A collection of targeted and excluded ad units and placements.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class InventoryTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($targetedAdUnits = null, $excludedAdUnits = null, $targetedPlacementIds = null) {
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
 * @subpackage v201302
 */
class InventoryTargetingError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "InventoryTargetingError";

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

if (!class_exists("DfpLocation", FALSE)) {
/**
 * A {@link Location} represents a geographical entity that can be targeted. If
 * a location type is not available because of the API version you are using,
 * the location will be represented as just the base class, otherwise it will be
 * sub-classed correctly.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DfpLocation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
  public $LocationType;
  private $_parameterMap = array(
    "Location.Type" => "LocationType",
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

  public function __construct($id = null, $LocationType = null) {
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
 * @subpackage v201302
 */
class MetroLocation extends DfpLocation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "MetroLocation";

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
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($metroCode = null, $countryCode = null, $id = null, $LocationType = null) {
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
 * @subpackage v201302
 */
class MobileCarrierTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($isTargeted = null, $mobileCarriers = null) {
    $this->isTargeted = $isTargeted;
    $this->mobileCarriers = $mobileCarriers;
  }

}}

if (!class_exists("MobileDeviceSubmodelTargeting", FALSE)) {
/**
 * Represents mobile devices that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class MobileDeviceSubmodelTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($targetedMobileDeviceSubmodels = null, $excludedMobileDeviceSubmodels = null) {
    $this->targetedMobileDeviceSubmodels = $targetedMobileDeviceSubmodels;
    $this->excludedMobileDeviceSubmodels = $excludedMobileDeviceSubmodels;
  }

}}

if (!class_exists("MobileDeviceTargeting", FALSE)) {
/**
 * Represents mobile devices that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class MobileDeviceTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($targetedMobileDevices = null, $excludedMobileDevices = null) {
    $this->targetedMobileDevices = $targetedMobileDevices;
    $this->excludedMobileDevices = $excludedMobileDevices;
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

if (!class_exists("OperatingSystemTargeting", FALSE)) {
/**
 * Represents operating systems that are being targeted or excluded by the
 * {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class OperatingSystemTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($isTargeted = null, $operatingSystems = null) {
    $this->isTargeted = $isTargeted;
    $this->operatingSystems = $operatingSystems;
  }

}}

if (!class_exists("OperatingSystemVersionTargeting", FALSE)) {
/**
 * Represents operating system versions that are being targeted or excluded by the {@link LineItem}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class OperatingSystemVersionTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($targetedOperatingSystemVersions = null, $excludedOperatingSystemVersions = null) {
    $this->targetedOperatingSystemVersions = $targetedOperatingSystemVersions;
    $this->excludedOperatingSystemVersions = $excludedOperatingSystemVersions;
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

if (!class_exists("PoddingError", FALSE)) {
/**
 * Errors related to podding fields in ad rule slots.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class PoddingError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "PoddingError";

  /**
   * @access public
   * @var tnsPoddingErrorReason
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

if (!class_exists("PostalCodeLocation", FALSE)) {
/**
 * Represents a postal code for geographical targeting. On input,
 * {@link Location} should be used instead and the {@link Location#id} field
 * should be set.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class PostalCodeLocation extends DfpLocation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "PostalCodeLocation";

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

  public function __construct($postalCode = null, $countryCode = null, $id = null, $LocationType = null) {
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
 * @subpackage v201302
 */
class RegionLocation extends DfpLocation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "RegionLocation";

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
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($regionCode = null, $id = null, $LocationType = null) {
    parent::__construct();
    $this->regionCode = $regionCode;
    $this->id = $id;
    $this->LocationType = $LocationType;
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

if (!class_exists("Targeting", FALSE)) {
/**
 * Contains targeting criteria for {@link LineItem} objects. See
 * {@link LineItem#targeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class Targeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
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

}}

if (!class_exists("Technology", FALSE)) {
/**
 * Represents a technology entity that can be targeted.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @access public
   * @var string
   */
  public $TechnologyType;
  private $_parameterMap = array(
    "Technology.Type" => "TechnologyType",
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

  public function __construct($id = null, $name = null, $TechnologyType = null) {
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }

}}

if (!class_exists("TimeOfDay", FALSE)) {
/**
 * Represents a specific time in a day.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class TimeOfDay {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($hour = null, $minute = null) {
    $this->hour = $hour;
    $this->minute = $minute;
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

if (!class_exists("UserDomainTargeting", FALSE)) {
/**
 * Provides line items the ability to target or exclude users visiting their
 * websites from a list of domains or subdomains.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class UserDomainTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($domains = null, $targeted = null) {
    $this->domains = $domains;
    $this->targeted = $targeted;
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

if (!class_exists("VideoPosition", FALSE)) {
/**
 * Represents a targetable position within a video. A video ad can be targeted
 * to a position (pre-roll, all mid-rolls, or post-roll), or to a specific mid-roll index.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class VideoPosition {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($positionType = null, $midrollIndex = null) {
    $this->positionType = $positionType;
    $this->midrollIndex = $midrollIndex;
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
 * @subpackage v201302
 */
class VideoPositionTargeting {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "VideoPositionTargeting";

  /**
   * @access public
   * @var VideoPositionTarget[]
   */
  public $targetedPositions;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($targetedPositions = null) {
    $this->targetedPositions = $targetedPositions;
  }

}}

if (!class_exists("VideoPositionTarget", FALSE)) {
/**
 * Represents the options for targetable positions within a video.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class VideoPositionTarget {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @var tnsVideoPodPositionType
   */
  public $videoPodPositionType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($videoPosition = null, $videoBumperType = null, $videoPodPositionType = null) {
    $this->videoPosition = $videoPosition;
    $this->videoBumperType = $videoBumperType;
    $this->videoPodPositionType = $videoPodPositionType;
  }

}}

if (!class_exists("AdRuleDateErrorReason", FALSE)) {
/**
 * Describes reasons for {@code AdRuleDateError}s.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleDateErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleDateError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("AdRuleFrequencyCapErrorReason", FALSE)) {
/**
 * Describes reason for {@code AdRuleFrequencyCapError}s.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleFrequencyCapErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleFrequencyCapError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("AdRulePriorityErrorReason", FALSE)) {
/**
 * Reasons for an {@code AdRulePriorityError}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRulePriorityErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRulePriorityError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("AdRuleSlotBehavior", FALSE)) {
/**
 * The types of behaviors for ads within a {@link BaseAdRuleSlot ad rule slot}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleSlotBehavior {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleSlotBehavior";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("AdRuleSlotBumper", FALSE)) {
/**
 * Types of bumper ads on an ad rule slot.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleSlotBumper {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleSlotBumper";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("AdRuleSlotErrorReason", FALSE)) {
/**
 * Describes reason for {@code AdRuleSlotError}s.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleSlotErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleSlotError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("AdRuleStatus", FALSE)) {
/**
 * Represents the status of ad rules and ad rule slots.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleStatus {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleStatus";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CustomCriteriaComparisonOperator", FALSE)) {
/**
 * Specifies the available comparison operators.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CustomCriteriaComparisonOperator {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CustomCriteria.ComparisonOperator";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CustomCriteriaSetLogicalOperator", FALSE)) {
/**
 * Specifies the available logical operators.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CustomCriteriaSetLogicalOperator {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CustomCriteriaSet.LogicalOperator";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CustomTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CustomTargetingErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CustomTargetingError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("AudienceSegmentCriteriaComparisonOperator", FALSE)) {
/**
 * Specifies the available comparison operators.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AudienceSegmentCriteriaComparisonOperator {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AudienceSegmentCriteria.ComparisonOperator";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("DayOfWeek", FALSE)) {
/**
 * Days of the week.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DayOfWeek {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "DayOfWeek";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("DeliveryTimeZone", FALSE)) {
/**
 * Represents the time zone to be used for {@link DayPartTargeting}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DeliveryTimeZone {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "DeliveryTimeZone";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("FrequencyCapBehavior", FALSE)) {
/**
 * Types of behavior for frequency caps within ad rules.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class FrequencyCapBehavior {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "FrequencyCapBehavior";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("InventoryTargetingErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class InventoryTargetingErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "InventoryTargetingError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("MidrollFrequencyType", FALSE)) {
/**
 * Frequency types for mid-roll {@link BaseAdRuleSlot ad rule slots}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class MidrollFrequencyType {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "MidrollFrequencyType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("MinuteOfHour", FALSE)) {
/**
 * Minutes in an hour. Currently, only 0, 15, 30, and 45 are supported. This
 * field is required.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class MinuteOfHour {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "MinuteOfHour";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("PoddingErrorReason", FALSE)) {
/**
 * Describes reason for {@code PoddingError}s.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class PoddingErrorReason {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "PoddingError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("VideoBumperType", FALSE)) {
/**
 * Represents the options for targetable bumper positions, surrounding an ad
 * pod, within a video stream. This includes before and after the supported ad
 * pod positions, {@link VideoPositionType#PREROLL},
 * {@link VideoPositionType#MIDROLL}, and {@link VideoPositionType#POSTROLL}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class VideoBumperType {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "VideoBumperType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("VideoPodPositionType", FALSE)) {
/**
 * Represents the options for targetable pod positions, which are the positions
 * within a pod (or group) of ads, within a video stream.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class VideoPodPositionType {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "VideoPodPositionType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("VideoPositionType", FALSE)) {
/**
 * Represents a targetable position within a video.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class VideoPositionType {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "VideoPosition.Type";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
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

if (!class_exists("CreateAdRule", FALSE)) {
/**
 * Creates a new {@link AdRule}.
 * 
 * The following fields are required:
 * <ul>
 * <li>{@link AdRule#id}</li>
 * <li>{@link AdRule#name}</li>
 * <li>{@link AdRule#priority}</li>
 * <li>{@link AdRule#startDateTime}</li>
 * <li>{@link AdRule#endDateTime}</li>
 * <li>{@link AdRule#preroll}</li>
 * <li>{@link AdRule#midroll}</li>
 * <li>{@link AdRule#postroll}</li>
 * </ul>
 * 
 * @param adRule the ad rule to create
 * @return the ad rule with its ID filled in
 * @throws ApiException if there the ad rule is invalid or there is another
 * error
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreateAdRule {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRule
   */
  public $adRule;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($adRule = null) {
    $this->adRule = $adRule;
  }

}}

if (!class_exists("CreateAdRuleResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreateAdRuleResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRule
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

if (!class_exists("CreateAdRules", FALSE)) {
/**
 * Creates new {@link AdRule} objects.
 * 
 * @param adRules the ad rules to create
 * @return the created ad rules with their IDs filled in
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreateAdRules {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRule[]
   */
  public $adRules;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($adRules = null) {
    $this->adRules = $adRules;
  }

}}

if (!class_exists("CreateAdRulesResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CreateAdRulesResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRule[]
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

if (!class_exists("GetAdRule", FALSE)) {
/**
 * Returns the {@link AdRule} uniquely identified by the given ID.
 * 
 * @param adRuleId the ID of the ad rule, which must already exist
 * @return the {@code AdRule} uniquely identified by the given ID
 * @throws ApiException if there is an error retrieving the ad rule
 * or the ID is invalid
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class GetAdRule {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var integer
   */
  public $adRuleId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($adRuleId = null) {
    $this->adRuleId = $adRuleId;
  }

}}

if (!class_exists("GetAdRuleResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class GetAdRuleResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRule
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

if (!class_exists("GetAdRulesByStatement", FALSE)) {
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
 * @subpackage v201302
 */
class GetAdRulesByStatement {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var Statement
   */
  public $statement;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($statement = null) {
    $this->statement = $statement;
  }

}}

if (!class_exists("GetAdRulesByStatementResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class GetAdRulesByStatementResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRulePage
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

if (!class_exists("PerformAdRuleAction", FALSE)) {
/**
 * Performs actions on {@link AdRule} objects that match the given
 * {@link Statement#query}.
 * 
 * @param adRuleAction the action to perform
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of ad rules
 * @return the result of the action performed
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class PerformAdRuleAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($adRuleAction = null, $filterStatement = null) {
    $this->adRuleAction = $adRuleAction;
    $this->filterStatement = $filterStatement;
  }

}}

if (!class_exists("PerformAdRuleActionResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class PerformAdRuleActionResponse {

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

if (!class_exists("UpdateAdRule", FALSE)) {
/**
 * Updates a previously-created {@link AdRule}.
 * 
 * @param adRule the ad rule that should be updated
 * @return the updated ad rule
 * @throws ApiException if there is an error updating the ad rule
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class UpdateAdRule {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRule
   */
  public $adRule;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($adRule = null) {
    $this->adRule = $adRule;
  }

}}

if (!class_exists("UpdateAdRuleResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class UpdateAdRuleResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRule
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

if (!class_exists("UpdateAdRules", FALSE)) {
/**
 * Updates the specified {@link AdRule} objects.
 * 
 * @param adRules the ad rules to update
 * @return the updated ad rules
 * @throws ApiException if there is an error updating the ad rules
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class UpdateAdRules {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRule[]
   */
  public $adRules;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($adRules = null) {
    $this->adRules = $adRules;
  }

}}

if (!class_exists("UpdateAdRulesResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class UpdateAdRulesResponse {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdRule[]
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

if (!class_exists("ActivateAdRules", FALSE)) {
/**
 * The action used for resuming {@link AdRule} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class ActivateAdRules extends AdRuleAction {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "ActivateAdRules";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($AdRuleActionType = null) {
    parent::__construct();
    $this->AdRuleActionType = $AdRuleActionType;
  }

}}

if (!class_exists("AdRuleDateError", FALSE)) {
/**
 * Lists all errors associated with ad rule start and end dates.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleDateError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleDateError";

  /**
   * @access public
   * @var tnsAdRuleDateErrorReason
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

if (!class_exists("AdRuleFrequencyCapError", FALSE)) {
/**
 * Errors related to ad rule frequency caps
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleFrequencyCapError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleFrequencyCapError";

  /**
   * @access public
   * @var tnsAdRuleFrequencyCapErrorReason
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

if (!class_exists("NoPoddingAdRuleSlot", FALSE)) {
/**
 * An ad rule slot with no podding. It is defined by a {@link BaseAdRuleSlot#maxVideoAdDuration}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class NoPoddingAdRuleSlot extends BaseAdRuleSlot {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "NoPoddingAdRuleSlot";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null, $BaseAdRuleSlotType = null) {
    parent::__construct();
    $this->id = $id;
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
    $this->BaseAdRuleSlotType = $BaseAdRuleSlotType;
  }

}}

if (!class_exists("OptimizedPoddingAdRuleSlot", FALSE)) {
/**
 * Ad rule slot with optimized podding. Optimized pods are defined by a
 * {@link BaseAdRuleSlot#maxPodDuration} and a {@link BaseAdRuleSlot#maxAdsInPod}, and the ad
 * server chooses the best ads for the alloted duration.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class OptimizedPoddingAdRuleSlot extends BaseAdRuleSlot {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "OptimizedPoddingAdRuleSlot";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null, $BaseAdRuleSlotType = null) {
    parent::__construct();
    $this->id = $id;
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
    $this->BaseAdRuleSlotType = $BaseAdRuleSlotType;
  }

}}

if (!class_exists("AdRulePriorityError", FALSE)) {
/**
 * Errors associated with ad rule priorities.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRulePriorityError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRulePriorityError";

  /**
   * @access public
   * @var tnsAdRulePriorityErrorReason
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

if (!class_exists("AdRuleSlotError", FALSE)) {
/**
 * Errors related to ad rule slots.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleSlotError extends ApiError {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "AdRuleSlotError";

  /**
   * @access public
   * @var tnsAdRuleSlotErrorReason
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

if (!class_exists("BandwidthGroup", FALSE)) {
/**
 * Represents a group of bandwidths that are logically organized by some well
 * known generic names such as 'Cable' or 'DSL'.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class BandwidthGroup extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "BandwidthGroup";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $name = null, $TechnologyType = null) {
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

if (!class_exists("Browser", FALSE)) {
/**
 * Represents an internet browser.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class Browser extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($majorVersion = null, $minorVersion = null, $id = null, $name = null, $TechnologyType = null) {
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
 * @subpackage v201302
 */
class BrowserLanguage extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "BrowserLanguage";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $name = null, $TechnologyType = null) {
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
 * @subpackage v201302
 */
class CityLocation extends DfpLocation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CityLocation";

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
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($cityName = null, $regionCode = null, $countryCode = null, $id = null, $LocationType = null) {
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
 * @subpackage v201302
 */
class CountryLocation extends DfpLocation {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CountryLocation";

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

  public function __construct($countryCode = null, $id = null, $LocationType = null) {
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
 * @subpackage v201302
 */
class CustomCriteriaSet extends CustomCriteriaNode {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($logicalOperator = null, $children = null, $CustomCriteriaNodeType = null) {
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
 * @subpackage v201302
 */
class CustomCriteriaLeaf extends CustomCriteriaNode {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "CustomCriteriaLeaf";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($CustomCriteriaNodeType = null) {
    parent::__construct();
    $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
  }

}}

if (!class_exists("AudienceSegmentCriteria", FALSE)) {
/**
 * An {@link AudienceSegmentCriteria} object is used to target {@link AudienceSegment} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AudienceSegmentCriteria extends CustomCriteriaLeaf {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($operator = null, $audienceSegmentIds = null) {
    parent::__construct();
    $this->operator = $operator;
    $this->audienceSegmentIds = $audienceSegmentIds;
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

if (!class_exists("DeviceCapability", FALSE)) {
/**
 * Represents a capability of a physical device.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class DeviceCapability extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "DeviceCapability";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $name = null, $TechnologyType = null) {
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
 * @subpackage v201302
 */
class DeviceCategory extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "DeviceCategory";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $name = null, $TechnologyType = null) {
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
 * @subpackage v201302
 */
class DeviceManufacturer extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "DeviceManufacturer";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $name = null, $TechnologyType = null) {
    parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
  }

}}

if (!class_exists("MobileCarrier", FALSE)) {
/**
 * Represents a mobile carrier.
 * Carrier targeting is only available to DFP mobile publishers.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class MobileCarrier extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "MobileCarrier";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $name = null, $TechnologyType = null) {
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
 * @subpackage v201302
 */
class MobileDevice extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "MobileDevice";

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
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($manufacturerCriterionId = null, $id = null, $name = null, $TechnologyType = null) {
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
 * @subpackage v201302
 */
class MobileDeviceSubmodel extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($mobileDeviceCriterionId = null, $deviceManufacturerCriterionId = null, $id = null, $name = null, $TechnologyType = null) {
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

if (!class_exists("OperatingSystem", FALSE)) {
/**
 * Represents an Operating System, such as Linux, Mac OS or Windows.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class OperatingSystem extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const XSI_TYPE = "OperatingSystem";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $name = null, $TechnologyType = null) {
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
 * @subpackage v201302
 */
class OperatingSystemVersion extends Technology {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($majorVersion = null, $minorVersion = null, $microVersion = null, $id = null, $name = null, $TechnologyType = null) {
    parent::__construct();
    $this->majorVersion = $majorVersion;
    $this->minorVersion = $minorVersion;
    $this->microVersion = $microVersion;
    $this->id = $id;
    $this->name = $name;
    $this->TechnologyType = $TechnologyType;
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

if (!class_exists("CustomCriteria", FALSE)) {
/**
 * A {@link CustomCriteria} object is used to perform custom criteria targeting
 * on custom targeting keys of type {@link CustomTargetingKey.Type#PREDEFINED}
 * or {@link CustomTargetingKey.Type#FREEFORM}.
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class CustomCriteria extends CustomCriteriaLeaf {

  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
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
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
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

}}

if (!class_exists("AdRuleService", FALSE)) {
/**
 * AdRuleService
 * @package GoogleApiAdsDfp
 * @subpackage v201302
 */
class AdRuleService extends DfpSoapClient {

  const SERVICE_NAME = "AdRuleService";
  const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201302";
  const ENDPOINT = "https://www.google.com/apis/ads/publisher/v201302/AdRuleService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://www.google.com/apis/ads/publisher/v201302/AdRuleService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
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
    "Authentication" => "Authentication",
    "AuthenticationError" => "AuthenticationError",
    "BandwidthGroup" => "BandwidthGroup",
    "BandwidthGroupTargeting" => "BandwidthGroupTargeting",
    "BooleanValue" => "BooleanValue",
    "Browser" => "Browser",
    "BrowserLanguage" => "BrowserLanguage",
    "BrowserLanguageTargeting" => "BrowserLanguageTargeting",
    "BrowserTargeting" => "BrowserTargeting",
    "CityLocation" => "CityLocation",
    "ClientLogin" => "ClientLogin",
    "CommonError" => "CommonError",
    "ContentTargeting" => "ContentTargeting",
    "CountryLocation" => "CountryLocation",
    "CustomCriteria" => "CustomCriteria",
    "CustomCriteriaSet" => "CustomCriteriaSet",
    "CustomTargetingError" => "CustomTargetingError",
    "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
    "CustomCriteriaNode" => "CustomCriteriaNode",
    "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
    "Date" => "Date",
    "DateTime" => "DfpDateTime",
    "DateTimeValue" => "DateTimeValue",
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
    "MetroLocation" => "MetroLocation",
    "MobileCarrier" => "MobileCarrier",
    "MobileCarrierTargeting" => "MobileCarrierTargeting",
    "MobileDevice" => "MobileDevice",
    "MobileDeviceSubmodel" => "MobileDeviceSubmodel",
    "MobileDeviceSubmodelTargeting" => "MobileDeviceSubmodelTargeting",
    "MobileDeviceTargeting" => "MobileDeviceTargeting",
    "NotNullError" => "NotNullError",
    "NumberValue" => "NumberValue",
    "OAuth" => "DfpOAuth",
    "OperatingSystem" => "OperatingSystem",
    "OperatingSystemTargeting" => "OperatingSystemTargeting",
    "OperatingSystemVersion" => "OperatingSystemVersion",
    "OperatingSystemVersionTargeting" => "OperatingSystemVersionTargeting",
    "PermissionError" => "PermissionError",
    "PoddingError" => "PoddingError",
    "PostalCodeLocation" => "PostalCodeLocation",
    "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
    "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
    "QuotaError" => "QuotaError",
    "RegionLocation" => "RegionLocation",
    "RequiredError" => "RequiredError",
    "RequiredNumberError" => "RequiredNumberError",
    "ServerError" => "ServerError",
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
    "UpdateResult" => "UpdateResult",
    "UserDomainTargeting" => "UserDomainTargeting",
    "Value" => "Value",
    "VideoPosition" => "VideoPosition",
    "VideoPositionTargeting" => "VideoPositionTargeting",
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
    "CommonError.Reason" => "CommonErrorReason",
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
    "PermissionError.Reason" => "PermissionErrorReason",
    "PoddingError.Reason" => "PoddingErrorReason",
    "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
    "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
    "ServerError.Reason" => "ServerErrorReason",
    "StartDateTimeType" => "StartDateTimeType",
    "StatementError.Reason" => "StatementErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "VideoBumperType" => "VideoBumperType",
    "VideoPodPositionType" => "VideoPodPositionType",
    "VideoPosition.Type" => "VideoPositionType",
    "createAdRule" => "CreateAdRule",
    "createAdRuleResponse" => "CreateAdRuleResponse",
    "createAdRules" => "CreateAdRules",
    "createAdRulesResponse" => "CreateAdRulesResponse",
    "getAdRule" => "GetAdRule",
    "getAdRuleResponse" => "GetAdRuleResponse",
    "getAdRulesByStatement" => "GetAdRulesByStatement",
    "getAdRulesByStatementResponse" => "GetAdRulesByStatementResponse",
    "performAdRuleAction" => "PerformAdRuleAction",
    "performAdRuleActionResponse" => "PerformAdRuleActionResponse",
    "updateAdRule" => "UpdateAdRule",
    "updateAdRuleResponse" => "UpdateAdRuleResponse",
    "updateAdRules" => "UpdateAdRules",
    "updateAdRulesResponse" => "UpdateAdRulesResponse",
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
   * Creates a new {@link AdRule}.
   * 
   * The following fields are required:
   * <ul>
   * <li>{@link AdRule#id}</li>
   * <li>{@link AdRule#name}</li>
   * <li>{@link AdRule#priority}</li>
   * <li>{@link AdRule#startDateTime}</li>
   * <li>{@link AdRule#endDateTime}</li>
   * <li>{@link AdRule#preroll}</li>
   * <li>{@link AdRule#midroll}</li>
   * <li>{@link AdRule#postroll}</li>
   * </ul>
   * 
   * @param adRule the ad rule to create
   * @return the ad rule with its ID filled in
   * @throws ApiException if there the ad rule is invalid or there is another
   * error
   */
  public function createAdRule($adRule) {
    $args = new CreateAdRule($adRule);
    $result = $this->__soapCall("createAdRule", array($args));
    return $result->rval;
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
   * Returns the {@link AdRule} uniquely identified by the given ID.
   * 
   * @param adRuleId the ID of the ad rule, which must already exist
   * @return the {@code AdRule} uniquely identified by the given ID
   * @throws ApiException if there is an error retrieving the ad rule
   * or the ID is invalid
   */
  public function getAdRule($adRuleId) {
    $args = new GetAdRule($adRuleId);
    $result = $this->__soapCall("getAdRule", array($args));
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
   * Updates a previously-created {@link AdRule}.
   * 
   * @param adRule the ad rule that should be updated
   * @return the updated ad rule
   * @throws ApiException if there is an error updating the ad rule
   */
  public function updateAdRule($adRule) {
    $args = new UpdateAdRule($adRule);
    $result = $this->__soapCall("updateAdRule", array($args));
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
}}