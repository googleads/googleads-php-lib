<?php
/**
 * Contains all client objects for the AudienceSegmentService
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
 * @subpackage v201511
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
   * @subpackage v201511
   */
  class AdUnitTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("ApiVersionError", false)) {
  /**
   * Errors related to the usage of API versions.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class ApiVersionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("AudienceSegmentDataProvider", false)) {
  /**
   * Data provider that owns this segment. For a {@link FirstPartyAudienceSegment}, it would be the
   * publisher network. For a {@link SharedAudienceSegment} or a {@link ThirdPartyAudienceSegment}, it
   * would be the entity that provides that {@link AudienceSegment}.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AudienceSegmentDataProvider {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "AudienceSegmentDataProvider";

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

    public function __construct($name = null) {
      $this->name = $name;
    }

  }
}

if (!class_exists("AudienceSegmentPage", false)) {
  /**
   * Represents a page of {@link AudienceSegment} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AudienceSegmentPage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "AudienceSegmentPage";

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
     * @var AudienceSegment[]
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

if (!class_exists("AuthenticationError", false)) {
  /**
   * An error for an exception that occurred when authenticating.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("CollectionSizeError", false)) {
  /**
   * Error for the size of the collection being too large
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class CollectionSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class CommonError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("CustomCriteriaNode", false)) {
  /**
   * A {@link CustomCriteriaNode} is a node in the custom targeting tree. A custom
   * criteria node can either be a {@link CustomCriteriaSet} (a non-leaf node) or
   * a {@link CustomCriteria} (a leaf node). The custom criteria targeting tree is
   * subject to the rules defined on {@link Targeting#customTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class Date {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class DfpDateTime {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("EntityChildrenLimitReachedError", false)) {
  /**
   * Lists errors relating to having too many children on an entity.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class EntityChildrenLimitReachedError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class EntityLimitReachedError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class FeatureError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class InventoryTargeting {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("Money", false)) {
  /**
   * Represents a money amount.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class Money {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class NotNullError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("ParseError", false)) {
  /**
   * Lists errors related to parsing.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class ParseError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class PermissionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("PublisherQueryLanguageContextError", false)) {
  /**
   * An error that occurs while executing a PQL query contained in
   * a {@link Statement} object.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class PublisherQueryLanguageContextError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class PublisherQueryLanguageSyntaxError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("FirstPartyAudienceSegmentRule", false)) {
  /**
   * Rule of a {@link FirstPartyAudienceSegment} that defines user's eligibility criteria to be part
   * of a segment.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class FirstPartyAudienceSegmentRule {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "FirstPartyAudienceSegmentRule";

    /**
     * @access public
     * @var InventoryTargeting
     */
    public $inventoryRule;

    /**
     * @access public
     * @var CustomCriteriaSet
     */
    public $customCriteriaRule;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($inventoryRule = null, $customCriteriaRule = null) {
      $this->inventoryRule = $inventoryRule;
      $this->customCriteriaRule = $customCriteriaRule;
    }

  }
}

if (!class_exists("QuotaError", false)) {
  /**
   * Describes a client-side error on which a user is attempting
   * to perform an action to which they have no quota remaining.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class QuotaError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class RequiredCollectionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("AudienceSegmentAction", false)) {
  /**
   * Action that can be performed on {@link AudienceSegment} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AudienceSegmentAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "AudienceSegmentAction";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AudienceSegment", false)) {
  /**
   * An {@link AudienceSegment} represents audience segment object.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AudienceSegment {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "AudienceSegment";

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
     * @var integer[]
     */
    public $categoryIds;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var tnsAudienceSegmentStatus
     */
    public $status;

    /**
     * @access public
     * @var integer
     */
    public $size;

    /**
     * @access public
     * @var AudienceSegmentDataProvider
     */
    public $dataProvider;

    /**
     * @access public
     * @var tnsAudienceSegmentAudienceSegmentType
     */
    public $type;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $categoryIds = null, $description = null, $status = null, $size = null, $dataProvider = null, $type = null) {
      $this->id = $id;
      $this->name = $name;
      $this->categoryIds = $categoryIds;
      $this->description = $description;
      $this->status = $status;
      $this->size = $size;
      $this->dataProvider = $dataProvider;
      $this->type = $type;
    }

  }
}

if (!class_exists("AudienceSegmentError", false)) {
  /**
   * Errors that could occur on audience segment related requests.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AudienceSegmentError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class ServerError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("SharedAudienceSegment", false)) {
  /**
   * A {@link SharedAudienceSegment} is an {@link AudienceSegment} owned by another entity and shared
   * with the publisher network.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class SharedAudienceSegment extends AudienceSegment {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "SharedAudienceSegment";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $categoryIds = null, $description = null, $status = null, $size = null, $dataProvider = null, $type = null) {
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
      $this->categoryIds = $categoryIds;
      $this->description = $description;
      $this->status = $status;
      $this->size = $size;
      $this->dataProvider = $dataProvider;
      $this->type = $type;
    }

  }
}

if (!class_exists("SoapRequestHeader", false)) {
  /**
   * Represents the SOAP request header used by API requests.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class Statement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class StatementError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class String_ValueMapEntry {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("TypeError", false)) {
  /**
   * An error for a field which is an invalid type.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class TypeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("UpdateResult", false)) {
  /**
   * Represents the result of performing an action on objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class UpdateResult {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("Value", false)) {
  /**
   * {@code Value} represents a value.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("ApiVersionErrorReason", false)) {
  /**
   * Indicates that the operation is not allowed in the version the request
   * was made in.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class ApiVersionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class CollectionSizeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class CommonErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("CustomCriteriaComparisonOperator", false)) {
  /**
   * Specifies the available comparison operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class CustomCriteriaComparisonOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class CustomCriteriaSetLogicalOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("AudienceSegmentCriteriaComparisonOperator", false)) {
  /**
   * Specifies the available comparison operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AudienceSegmentCriteriaComparisonOperator {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("EntityChildrenLimitReachedErrorReason", false)) {
  /**
   * The reasons for the entity children limit reached error.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class EntityChildrenLimitReachedErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class EntityLimitReachedErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("ThirdPartyAudienceSegmentAudienceSegmentApprovalStatus", false)) {
  /**
   * Approval status values for {@link ThirdPartyAudienceSegment} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class ThirdPartyAudienceSegmentAudienceSegmentApprovalStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "ThirdPartyAudienceSegment.AudienceSegmentApprovalStatus";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ThirdPartyAudienceSegmentLicenseType", false)) {
  /**
   * Specifies the license type of a {@link ThirdPartyAudienceSegment}.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class ThirdPartyAudienceSegmentLicenseType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "ThirdPartyAudienceSegment.LicenseType";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201511
   */
  class FeatureErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("NotNullErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class NotNullErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class ParseErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class PermissionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("PublisherQueryLanguageContextErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class PublisherQueryLanguageContextErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class PublisherQueryLanguageSyntaxErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class QuotaErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class RequiredCollectionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("AudienceSegmentAudienceSegmentType", false)) {
  /**
   * Specifies types for {@link AudienceSegment} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AudienceSegmentAudienceSegmentType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "AudienceSegment.AudienceSegmentType";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AudienceSegmentStatus", false)) {
  /**
   * Specifies the statuses for {@link AudienceSegment} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AudienceSegmentStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "AudienceSegment.Status";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201511
   */
  class AudienceSegmentErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class ServerErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class StatementErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("CreateAudienceSegments", false)) {
  /**
   * Creates new {@link RuleBasedFirstPartyAudienceSegment} objects.
   * 
   * @param segments first-party audience segments to create
   * @return created first-party audience segments
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class CreateAudienceSegments {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var FirstPartyAudienceSegment[]
     */
    public $segments;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($segments = null) {
      $this->segments = $segments;
    }

  }
}

if (!class_exists("CreateAudienceSegmentsResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class CreateAudienceSegmentsResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var FirstPartyAudienceSegment[]
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

if (!class_exists("GetAudienceSegmentsByStatement", false)) {
  /**
   * Gets an {@link AudienceSegmentPage} of {@link AudienceSegment} objects that satisfy the given
   * {@link Statement#query}. The following fields are supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th>
   * <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link AudienceSegment#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link AudienceSegment#name}</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link AudienceSegment#status}</td>
   * </tr>
   * <tr>
   * <td>{@code type}</td>
   * <td>{@link AudienceSegment#type}</td>
   * </tr>
   * <tr>
   * <td>{@code size}</td>
   * <td>{@link AudienceSegment#size}</td>
   * </tr>
   * <tr>
   * <td>{@code dataProviderName}</td>
   * <td>{@link AudienceSegmentDataProvider#name}</td>
   * </tr>
   * <tr>
   * <td>{@code approvalStatus}</td>
   * <td>{@link ThirdPartyAudienceSegment#approvalStatus}</td>
   * </tr>
   * <tr>
   * <td>{@code cost}</td>
   * <td>{@link ThirdPartyAudienceSegment#cost}</td>
   * </tr>
   * <tr>
   * <td>{@code startDateTime}</td>
   * <td>{@link ThirdPartyAudienceSegment#startDateTime}</td>
   * </tr>
   * <tr>
   * <td>{@code endDateTime}</td>
   * <td>{@link ThirdPartyAudienceSegment#endDateTime}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter a set of audience
   * segments
   * @return the audience segments that match the given filter
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class GetAudienceSegmentsByStatement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("GetAudienceSegmentsByStatementResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class GetAudienceSegmentsByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AudienceSegmentPage
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

if (!class_exists("PerformAudienceSegmentAction", false)) {
  /**
   * Performs the given {@link AudienceSegmentAction} on the set of segments identified by the given
   * statement.
   * 
   * @param action {@link AudienceSegmentAction} to perform
   * @param filterStatement a Publisher Query Language statement used to filter a set of audience
   * segments
   * @return {@link UpdateResult} indicating the result
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class PerformAudienceSegmentAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AudienceSegmentAction
     */
    public $action;

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

    public function __construct($action = null, $filterStatement = null) {
      $this->action = $action;
      $this->filterStatement = $filterStatement;
    }

  }
}

if (!class_exists("PerformAudienceSegmentActionResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class PerformAudienceSegmentActionResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("UpdateAudienceSegments", false)) {
  /**
   * Updates the given {@link RuleBasedFirstPartyAudienceSegment} objects.
   * 
   * @param segments first-party audience segments to update
   * @return updated first-party audience segments
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class UpdateAudienceSegments {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var FirstPartyAudienceSegment[]
     */
    public $segments;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($segments = null) {
      $this->segments = $segments;
    }

  }
}

if (!class_exists("UpdateAudienceSegmentsResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class UpdateAudienceSegmentsResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var FirstPartyAudienceSegment[]
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
   * @subpackage v201511
   */
  class ObjectValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("ActivateAudienceSegments", false)) {
  /**
   * Action that can be performed on {@link FirstPartyAudienceSegment} objects to activate them.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class ActivateAudienceSegments extends AudienceSegmentAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "ActivateAudienceSegments";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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
   * @subpackage v201511
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("ApproveAudienceSegments", false)) {
  /**
   * Action that can be performed on {@link ThirdPartyAudienceSegment} objects to approve them.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class ApproveAudienceSegments extends AudienceSegmentAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "ApproveAudienceSegments";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("FirstPartyAudienceSegment", false)) {
  /**
   * A {@link FirstPartyAudienceSegment} is an {@link AudienceSegment} owned by the publisher network.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class FirstPartyAudienceSegment extends AudienceSegment {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "FirstPartyAudienceSegment";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $categoryIds = null, $description = null, $status = null, $size = null, $dataProvider = null, $type = null) {
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
      $this->categoryIds = $categoryIds;
      $this->description = $description;
      $this->status = $status;
      $this->size = $size;
      $this->dataProvider = $dataProvider;
      $this->type = $type;
    }

  }
}

if (!class_exists("BooleanValue", false)) {
  /**
   * Contains a boolean value.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class BooleanValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("CustomCriteriaSet", false)) {
  /**
   * A {@link CustomCriteriaSet} comprises of a set of {@link CustomCriteriaNode}
   * objects combined by the
   * {@link CustomCriteriaSet.LogicalOperator#logicalOperator}. The custom
   * criteria targeting tree is subject to the rules defined on
   * {@link Targeting#customTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class CustomCriteriaSet extends CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class CustomCriteriaLeaf extends CustomCriteriaNode {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class AudienceSegmentCriteria extends CustomCriteriaLeaf {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class DateTimeValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class DateValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("DeactivateAudienceSegments", false)) {
  /**
   * Action that can be performed on {@link FirstPartyAudienceSegment} objects to deactivate them.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class DeactivateAudienceSegments extends AudienceSegmentAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "DeactivateAudienceSegments";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ThirdPartyAudienceSegment", false)) {
  /**
   * A {@link ThirdPartyAudienceSegment} is an {@link AudienceSegment} owned by a data provider and
   * licensed to the DFP publisher.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class ThirdPartyAudienceSegment extends AudienceSegment {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "ThirdPartyAudienceSegment";

    /**
     * @access public
     * @var tnsThirdPartyAudienceSegmentAudienceSegmentApprovalStatus
     */
    public $approvalStatus;

    /**
     * @access public
     * @var Money
     */
    public $cost;

    /**
     * @access public
     * @var tnsThirdPartyAudienceSegmentLicenseType
     */
    public $licenseType;

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
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($approvalStatus = null, $cost = null, $licenseType = null, $startDateTime = null, $endDateTime = null, $id = null, $name = null, $categoryIds = null, $description = null, $status = null, $size = null, $dataProvider = null, $type = null) {
      parent::__construct();
      $this->approvalStatus = $approvalStatus;
      $this->cost = $cost;
      $this->licenseType = $licenseType;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->id = $id;
      $this->name = $name;
      $this->categoryIds = $categoryIds;
      $this->description = $description;
      $this->status = $status;
      $this->size = $size;
      $this->dataProvider = $dataProvider;
      $this->type = $type;
    }

  }
}

if (!class_exists("NonRuleBasedFirstPartyAudienceSegment", false)) {
  /**
   * A {@link NonRuleBasedFirstPartyAudienceSegment} is a {@link FirstPartyAudienceSegment} owned by
   * the publisher network. It doesn't contain a rule. Cookies are usually added to this segment via
   * cookie upload.
   * 
   * <p>These segments are created by data management platforms or Google Analytics. They cannot be
   * created using the DFP API.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class NonRuleBasedFirstPartyAudienceSegment extends FirstPartyAudienceSegment {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "NonRuleBasedFirstPartyAudienceSegment";

    /**
     * @access public
     * @var integer
     */
    public $membershipExpirationDays;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($membershipExpirationDays = null) {
      parent::__construct();
      $this->membershipExpirationDays = $membershipExpirationDays;
    }

  }
}

if (!class_exists("NumberValue", false)) {
  /**
   * Contains a numeric value.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class NumberValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("PopulateAudienceSegments", false)) {
  /**
   * Action that can be performed on {@link FirstPartyAudienceSegment} objects to populate them based
   * on last 30 days of traffic.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class PopulateAudienceSegments extends AudienceSegmentAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "PopulateAudienceSegments";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("RejectAudienceSegments", false)) {
  /**
   * Action that can be performed on {@link ThirdPartyAudienceSegment} objects to reject them.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class RejectAudienceSegments extends AudienceSegmentAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "RejectAudienceSegments";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("RuleBasedFirstPartyAudienceSegmentSummary", false)) {
  /**
   * A {@link RuleBasedFirstPartyAudienceSegmentSummary} is a {@link FirstPartyAudienceSegment} owned
   * by the publisher network.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class RuleBasedFirstPartyAudienceSegmentSummary extends FirstPartyAudienceSegment {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "RuleBasedFirstPartyAudienceSegmentSummary";

    /**
     * @access public
     * @var integer
     */
    public $pageViews;

    /**
     * @access public
     * @var integer
     */
    public $recencyDays;

    /**
     * @access public
     * @var integer
     */
    public $membershipExpirationDays;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($pageViews = null, $recencyDays = null, $membershipExpirationDays = null) {
      parent::__construct();
      $this->pageViews = $pageViews;
      $this->recencyDays = $recencyDays;
      $this->membershipExpirationDays = $membershipExpirationDays;
    }

  }
}

if (!class_exists("SetValue", false)) {
  /**
   * Contains a set of {@link Value Values}. May not contain duplicates.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class SetValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class TextValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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
   * @subpackage v201511
   */
  class CustomCriteria extends CustomCriteriaLeaf {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
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

if (!class_exists("RuleBasedFirstPartyAudienceSegment", false)) {
  /**
   * A {@link RuleBasedFirstPartyAudienceSegment} is a {@link FirstPartyAudienceSegment} owned by the
   * publisher network. It contains a rule.
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class RuleBasedFirstPartyAudienceSegment extends RuleBasedFirstPartyAudienceSegmentSummary {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const XSI_TYPE = "RuleBasedFirstPartyAudienceSegment";

    /**
     * @access public
     * @var FirstPartyAudienceSegmentRule
     */
    public $rule;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rule = null, $pageViews = null, $recencyDays = null, $membershipExpirationDays = null) {
      parent::__construct();
      $this->rule = $rule;
      $this->pageViews = $pageViews;
      $this->recencyDays = $recencyDays;
      $this->membershipExpirationDays = $membershipExpirationDays;
    }

  }
}

if (!class_exists("AudienceSegmentService", false)) {
  /**
   * AudienceSegmentService
   * @package GoogleApiAdsDfp
   * @subpackage v201511
   */
  class AudienceSegmentService extends DfpSoapClient {

    const SERVICE_NAME = "AudienceSegmentService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201511";
    const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201511/AudienceSegmentService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201511/AudienceSegmentService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateAudienceSegments" => "ActivateAudienceSegments",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "ApproveAudienceSegments" => "ApproveAudienceSegments",
      "AudienceSegmentDataProvider" => "AudienceSegmentDataProvider",
      "AudienceSegmentPage" => "AudienceSegmentPage",
      "AuthenticationError" => "AuthenticationError",
      "FirstPartyAudienceSegment" => "FirstPartyAudienceSegment",
      "BooleanValue" => "BooleanValue",
      "CollectionSizeError" => "CollectionSizeError",
      "CommonError" => "CommonError",
      "CustomCriteria" => "CustomCriteria",
      "CustomCriteriaSet" => "CustomCriteriaSet",
      "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
      "CustomCriteriaNode" => "CustomCriteriaNode",
      "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateAudienceSegments" => "DeactivateAudienceSegments",
      "EntityChildrenLimitReachedError" => "EntityChildrenLimitReachedError",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "ThirdPartyAudienceSegment" => "ThirdPartyAudienceSegment",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "InventoryTargeting" => "InventoryTargeting",
      "Money" => "Money",
      "NonRuleBasedFirstPartyAudienceSegment" => "NonRuleBasedFirstPartyAudienceSegment",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PopulateAudienceSegments" => "PopulateAudienceSegments",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "FirstPartyAudienceSegmentRule" => "FirstPartyAudienceSegmentRule",
      "QuotaError" => "QuotaError",
      "RejectAudienceSegments" => "RejectAudienceSegments",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RuleBasedFirstPartyAudienceSegment" => "RuleBasedFirstPartyAudienceSegment",
      "RuleBasedFirstPartyAudienceSegmentSummary" => "RuleBasedFirstPartyAudienceSegmentSummary",
      "AudienceSegmentAction" => "AudienceSegmentAction",
      "AudienceSegment" => "AudienceSegment",
      "AudienceSegmentError" => "AudienceSegmentError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SharedAudienceSegment" => "SharedAudienceSegment",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
      "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
      "AudienceSegmentCriteria.ComparisonOperator" => "AudienceSegmentCriteriaComparisonOperator",
      "EntityChildrenLimitReachedError.Reason" => "EntityChildrenLimitReachedErrorReason",
      "EntityLimitReachedError.Reason" => "EntityLimitReachedErrorReason",
      "ThirdPartyAudienceSegment.AudienceSegmentApprovalStatus" => "ThirdPartyAudienceSegmentAudienceSegmentApprovalStatus",
      "ThirdPartyAudienceSegment.LicenseType" => "ThirdPartyAudienceSegmentLicenseType",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "AudienceSegment.AudienceSegmentType" => "AudienceSegmentAudienceSegmentType",
      "AudienceSegment.Status" => "AudienceSegmentStatus",
      "AudienceSegmentError.Reason" => "AudienceSegmentErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "createAudienceSegments" => "CreateAudienceSegments",
      "createAudienceSegmentsResponse" => "CreateAudienceSegmentsResponse",
      "getAudienceSegmentsByStatement" => "GetAudienceSegmentsByStatement",
      "getAudienceSegmentsByStatementResponse" => "GetAudienceSegmentsByStatementResponse",
      "performAudienceSegmentAction" => "PerformAudienceSegmentAction",
      "performAudienceSegmentActionResponse" => "PerformAudienceSegmentActionResponse",
      "updateAudienceSegments" => "UpdateAudienceSegments",
      "updateAudienceSegmentsResponse" => "UpdateAudienceSegmentsResponse",
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
     * Creates new {@link RuleBasedFirstPartyAudienceSegment} objects.
     * 
     * @param segments first-party audience segments to create
     * @return created first-party audience segments
     */
    public function createAudienceSegments($segments) {
      $args = new CreateAudienceSegments($segments);
      $result = $this->__soapCall("createAudienceSegments", array($args));
      return $result->rval;
    }
    /**
     * Gets an {@link AudienceSegmentPage} of {@link AudienceSegment} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     * 
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AudienceSegment#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AudienceSegment#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AudienceSegment#status}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link AudienceSegment#type}</td>
     * </tr>
     * <tr>
     * <td>{@code size}</td>
     * <td>{@link AudienceSegment#size}</td>
     * </tr>
     * <tr>
     * <td>{@code dataProviderName}</td>
     * <td>{@link AudienceSegmentDataProvider#name}</td>
     * </tr>
     * <tr>
     * <td>{@code approvalStatus}</td>
     * <td>{@link ThirdPartyAudienceSegment#approvalStatus}</td>
     * </tr>
     * <tr>
     * <td>{@code cost}</td>
     * <td>{@link ThirdPartyAudienceSegment#cost}</td>
     * </tr>
     * <tr>
     * <td>{@code startDateTime}</td>
     * <td>{@link ThirdPartyAudienceSegment#startDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code endDateTime}</td>
     * <td>{@link ThirdPartyAudienceSegment#endDateTime}</td>
     * </tr>
     * </table>
     * 
     * @param filterStatement a Publisher Query Language statement used to filter a set of audience
     * segments
     * @return the audience segments that match the given filter
     */
    public function getAudienceSegmentsByStatement($filterStatement) {
      $args = new GetAudienceSegmentsByStatement($filterStatement);
      $result = $this->__soapCall("getAudienceSegmentsByStatement", array($args));
      return $result->rval;
    }
    /**
     * Performs the given {@link AudienceSegmentAction} on the set of segments identified by the given
     * statement.
     * 
     * @param action {@link AudienceSegmentAction} to perform
     * @param filterStatement a Publisher Query Language statement used to filter a set of audience
     * segments
     * @return {@link UpdateResult} indicating the result
     */
    public function performAudienceSegmentAction($action, $filterStatement) {
      $args = new PerformAudienceSegmentAction($action, $filterStatement);
      $result = $this->__soapCall("performAudienceSegmentAction", array($args));
      return $result->rval;
    }
    /**
     * Updates the given {@link RuleBasedFirstPartyAudienceSegment} objects.
     * 
     * @param segments first-party audience segments to update
     * @return updated first-party audience segments
     */
    public function updateAudienceSegments($segments) {
      $args = new UpdateAudienceSegments($segments);
      $result = $this->__soapCall("updateAudienceSegments", array($args));
      return $result->rval;
    }
  }
}

