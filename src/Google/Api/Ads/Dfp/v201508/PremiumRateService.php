<?php
/**
 * Contains all client objects for the PremiumRateService
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

if (!class_exists("PremiumFeature", false)) {
  /**
   * A {@code PremiumFeature} represents the feature type to be applied as a premium on a
   * {@link RateCard}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("PremiumRate", false)) {
  /**
   * A premium rate holding a set of {@link PremiumRateValue} objects with the
   * same {@link PremiumFeature}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PremiumRate {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PremiumRate";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $rateCardId;

    /**
     * @access public
     * @var tnsPricingMethod
     */
    public $pricingMethod;

    /**
     * @access public
     * @var PremiumFeature
     */
    public $premiumFeature;

    /**
     * @access public
     * @var PremiumRateValue[]
     */
    public $premiumRateValues;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $rateCardId = null, $pricingMethod = null, $premiumFeature = null, $premiumRateValues = null) {
      $this->id = $id;
      $this->rateCardId = $rateCardId;
      $this->pricingMethod = $pricingMethod;
      $this->premiumFeature = $premiumFeature;
      $this->premiumRateValues = $premiumRateValues;
    }

  }
}

if (!class_exists("PremiumRateError", false)) {
  /**
   * An error having to do with {@link PremiumRate}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PremiumRateError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PremiumRateError";

    /**
     * @access public
     * @var tnsPremiumRateErrorReason
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

if (!class_exists("PremiumRatePage", false)) {
  /**
   * Captures a page of {@link PremiumRate} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PremiumRatePage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PremiumRatePage";

    /**
     * @access public
     * @var PremiumRate[]
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

if (!class_exists("PremiumRateValue", false)) {
  /**
   * A premium of a {@link RateCard} which could be applied to the line item
   * and charges extra.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PremiumRateValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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
   * @subpackage v201508
   */
  class Statement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("String_ValueMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type String
   * and value of type Value.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class String_ValueMapEntry {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("UnknownPremiumFeature", false)) {
  /**
   * The {@link PremiumFeature} returned if the actual feature is not exposed by
   * the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class UnknownPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("UserDomainPremiumFeature", false)) {
  /**
   * A premium feature applied to user domain targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class UserDomainPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("VideoPositionPremiumFeature", false)) {
  /**
   * A premium feature applied to video position targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class VideoPositionPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("PremiumAdjustmentType", false)) {
  /**
   * Describes how to apply the adjustment to the base rate.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PremiumAdjustmentType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("PremiumRateErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PremiumRateErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PremiumRateError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
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

if (!class_exists("PricingMethod", false)) {
  /**
   * Describes which {@link PremiumRateValue} objects from the
   * {@link PremiumRate} to apply to a {@link ProposalLineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PricingMethod {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "PricingMethod";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
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

if (!class_exists("RateType", false)) {
  /**
   * Describes the type of event the advertiser is paying for. The values here correspond to the
   * values for the {@link LineItem#costType} field.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class RateType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("CreatePremiumRates", false)) {
  /**
   * Creates a list of new {@link PremiumRate} objects.
   * 
   * @param premiumRates the premium rates to be created
   * @return the premium rates with their IDs filled in
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CreatePremiumRates {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var PremiumRate[]
     */
    public $premiumRates;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($premiumRates = null) {
      $this->premiumRates = $premiumRates;
    }

  }
}

if (!class_exists("CreatePremiumRatesResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CreatePremiumRatesResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var PremiumRate[]
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

if (!class_exists("GetPremiumRatesByStatement", false)) {
  /**
   * Gets a {@link PremiumRatePage} of {@link PremiumRate} objects that
   * satisfy the given {@link Statement#query}. The following fields are
   * supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link PremiumRate#id}</td>
   * </tr>
   * <tr>
   * <td>{@code rateCardId}</td>
   * <td>{@link PremiumRate#rateCardId}</td>
   * </tr>
   * <tr>
   * <td>{@code pricingMethod}</td>
   * <td>{@link PremiumRate#pricingMethod}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement to filter a
   * list of premium rates.
   * @return the premium rates that match the filter
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetPremiumRatesByStatement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("GetPremiumRatesByStatementResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class GetPremiumRatesByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var PremiumRatePage
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

if (!class_exists("UpdatePremiumRates", false)) {
  /**
   * Updates the specified {@link PremiumRate} objects.
   * 
   * @param premiumRates the premium rates to be updated
   * @return the updated premium rates
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class UpdatePremiumRates {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var PremiumRate[]
     */
    public $premiumRates;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($premiumRates = null) {
      $this->premiumRates = $premiumRates;
    }

  }
}

if (!class_exists("UpdatePremiumRatesResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class UpdatePremiumRatesResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var PremiumRate[]
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

if (!class_exists("AdUnitPremiumFeature", false)) {
  /**
   * A premium feature applied to ad unit targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AdUnitPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("AudienceSegmentPremiumFeature", false)) {
  /**
   * A premium feature applied to audience segment targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class AudienceSegmentPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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
   * @subpackage v201508
   */
  class BandwidthPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("BrowserPremiumFeature", false)) {
  /**
   * A premium feature applied to browser targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class BrowserPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("BrowserLanguagePremiumFeature", false)) {
  /**
   * A premium feature applied to browser language targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class BrowserLanguagePremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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
   * @subpackage v201508
   */
  class ContentBundlePremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("CustomTargetingPremiumFeature", false)) {
  /**
   * A premium feature applied to custom criteria targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class CustomTargetingPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("DaypartPremiumFeature", false)) {
  /**
   * A premium feature applied to daypart targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DaypartPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("DeviceCapabilityPremiumFeature", false)) {
  /**
   * A premium feature applied to device capability targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeviceCapabilityPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("DeviceCategoryPremiumFeature", false)) {
  /**
   * A premium feature applied to device category targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeviceCategoryPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("DeviceManufacturerPremiumFeature", false)) {
  /**
   * A premium feature applied to device manufacturer targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class DeviceManufacturerPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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
   * @subpackage v201508
   */
  class FrequencyCapPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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
   * @subpackage v201508
   */
  class GeographyPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("MobileCarrierPremiumFeature", false)) {
  /**
   * A premium feature applied to mobile carrier targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class MobileCarrierPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("OperatingSystemPremiumFeature", false)) {
  /**
   * A premium feature applied to operating system targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class OperatingSystemPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("PlacementPremiumFeature", false)) {
  /**
   * A premium feature applied to placement targeting.
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PlacementPremiumFeature extends PremiumFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
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

if (!class_exists("PremiumRateService", false)) {
  /**
   * PremiumRateService
   * @package GoogleApiAdsDfp
   * @subpackage v201508
   */
  class PremiumRateService extends DfpSoapClient {

    const SERVICE_NAME = "PremiumRateService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201508";
    const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201508/PremiumRateService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201508/PremiumRateService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "AdUnitPremiumFeature" => "AdUnitPremiumFeature",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AudienceSegmentPremiumFeature" => "AudienceSegmentPremiumFeature",
      "AuthenticationError" => "AuthenticationError",
      "BandwidthPremiumFeature" => "BandwidthPremiumFeature",
      "BooleanValue" => "BooleanValue",
      "BrowserPremiumFeature" => "BrowserPremiumFeature",
      "BrowserLanguagePremiumFeature" => "BrowserLanguagePremiumFeature",
      "CollectionSizeError" => "CollectionSizeError",
      "CommonError" => "CommonError",
      "ContentBundlePremiumFeature" => "ContentBundlePremiumFeature",
      "CustomTargetingPremiumFeature" => "CustomTargetingPremiumFeature",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DaypartPremiumFeature" => "DaypartPremiumFeature",
      "DeviceCapabilityPremiumFeature" => "DeviceCapabilityPremiumFeature",
      "DeviceCategoryPremiumFeature" => "DeviceCategoryPremiumFeature",
      "DeviceManufacturerPremiumFeature" => "DeviceManufacturerPremiumFeature",
      "EntityChildrenLimitReachedError" => "EntityChildrenLimitReachedError",
      "FeatureError" => "FeatureError",
      "FrequencyCapPremiumFeature" => "FrequencyCapPremiumFeature",
      "GeographyPremiumFeature" => "GeographyPremiumFeature",
      "InternalApiError" => "InternalApiError",
      "MobileCarrierPremiumFeature" => "MobileCarrierPremiumFeature",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OperatingSystemPremiumFeature" => "OperatingSystemPremiumFeature",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PlacementPremiumFeature" => "PlacementPremiumFeature",
      "PremiumFeature" => "PremiumFeature",
      "PremiumRate" => "PremiumRate",
      "PremiumRateError" => "PremiumRateError",
      "PremiumRatePage" => "PremiumRatePage",
      "PremiumRateValue" => "PremiumRateValue",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "UnknownPremiumFeature" => "UnknownPremiumFeature",
      "UserDomainPremiumFeature" => "UserDomainPremiumFeature",
      "Value" => "Value",
      "VideoPositionPremiumFeature" => "VideoPositionPremiumFeature",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "EntityChildrenLimitReachedError.Reason" => "EntityChildrenLimitReachedErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PremiumAdjustmentType" => "PremiumAdjustmentType",
      "PremiumRateError.Reason" => "PremiumRateErrorReason",
      "PricingMethod" => "PricingMethod",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateType" => "RateType",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "createPremiumRates" => "CreatePremiumRates",
      "createPremiumRatesResponse" => "CreatePremiumRatesResponse",
      "getPremiumRatesByStatement" => "GetPremiumRatesByStatement",
      "getPremiumRatesByStatementResponse" => "GetPremiumRatesByStatementResponse",
      "updatePremiumRates" => "UpdatePremiumRates",
      "updatePremiumRatesResponse" => "UpdatePremiumRatesResponse",
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
     * Creates a list of new {@link PremiumRate} objects.
     * 
     * @param premiumRates the premium rates to be created
     * @return the premium rates with their IDs filled in
     */
    public function createPremiumRates($premiumRates) {
      $args = new CreatePremiumRates($premiumRates);
      $result = $this->__soapCall("createPremiumRates", array($args));
      return $result->rval;
    }
    /**
     * Gets a {@link PremiumRatePage} of {@link PremiumRate} objects that
     * satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     * 
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link PremiumRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code rateCardId}</td>
     * <td>{@link PremiumRate#rateCardId}</td>
     * </tr>
     * <tr>
     * <td>{@code pricingMethod}</td>
     * <td>{@link PremiumRate#pricingMethod}</td>
     * </tr>
     * </table>
     * 
     * @param filterStatement a Publisher Query Language statement to filter a
     * list of premium rates.
     * @return the premium rates that match the filter
     */
    public function getPremiumRatesByStatement($filterStatement) {
      $args = new GetPremiumRatesByStatement($filterStatement);
      $result = $this->__soapCall("getPremiumRatesByStatement", array($args));
      return $result->rval;
    }
    /**
     * Updates the specified {@link PremiumRate} objects.
     * 
     * @param premiumRates the premium rates to be updated
     * @return the updated premium rates
     */
    public function updatePremiumRates($premiumRates) {
      $args = new UpdatePremiumRates($premiumRates);
      $result = $this->__soapCall("updatePremiumRates", array($args));
      return $result->rval;
    }
  }
}

