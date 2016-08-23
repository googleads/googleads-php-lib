<?php
/**
 * Contains all client objects for the ReportService
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

if (!class_exists("ReportDownloadOptions", false)) {
  /**
   * Represents the options for an API report download request.
   * See {@link ReportService#getReportDownloadUrlWithOptions}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ReportDownloadOptions {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "ReportDownloadOptions";

    /**
     * @access public
     * @var tnsExportFormat
     */
    public $exportFormat;

    /**
     * @access public
     * @var boolean
     */
    public $includeReportProperties;

    /**
     * @access public
     * @var boolean
     */
    public $includeTotalsRow;

    /**
     * @access public
     * @var boolean
     */
    public $useGzipCompression;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($exportFormat = null, $includeReportProperties = null, $includeTotalsRow = null, $useGzipCompression = null) {
      $this->exportFormat = $exportFormat;
      $this->includeReportProperties = $includeReportProperties;
      $this->includeTotalsRow = $includeTotalsRow;
      $this->useGzipCompression = $useGzipCompression;
    }

  }
}

if (!class_exists("ReportError", false)) {
  /**
   * An error for an exception that occurred while running the report.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ReportError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "ReportError";

    /**
     * @access public
     * @var tnsReportErrorReason
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

if (!class_exists("ReportJob", false)) {
  /**
   * Represents a report job that will be run to retrieve performance and
   * statistics information about ad campaigns, networks, inventory and sales.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ReportJob {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "ReportJob";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var ReportQuery
     */
    public $reportQuery;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $reportQuery = null) {
      $this->id = $id;
      $this->reportQuery = $reportQuery;
    }

  }
}

if (!class_exists("ReportQuery", false)) {
  /**
   * A {@code ReportQuery} object allows you to specify the selection criteria for
   * generating a report.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ReportQuery {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "ReportQuery";

    /**
     * @access public
     * @var tnsDimension[]
     */
    public $dimensions;

    /**
     * @access public
     * @var tnsReportQueryAdUnitView
     */
    public $adUnitView;

    /**
     * @access public
     * @var tnsColumn[]
     */
    public $columns;

    /**
     * @access public
     * @var tnsDimensionAttribute[]
     */
    public $dimensionAttributes;

    /**
     * @access public
     * @var integer[]
     */
    public $customFieldIds;

    /**
     * @access public
     * @var integer[]
     */
    public $contentMetadataKeyHierarchyCustomTargetingKeyIds;

    /**
     * @access public
     * @var Date
     */
    public $startDate;

    /**
     * @access public
     * @var Date
     */
    public $endDate;

    /**
     * @access public
     * @var tnsDateRangeType
     */
    public $dateRangeType;

    /**
     * @access public
     * @var Statement
     */
    public $statement;

    /**
     * @access public
     * @var boolean
     */
    public $useSalesLocalTimeZone;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($dimensions = null, $adUnitView = null, $columns = null, $dimensionAttributes = null, $customFieldIds = null, $contentMetadataKeyHierarchyCustomTargetingKeyIds = null, $startDate = null, $endDate = null, $dateRangeType = null, $statement = null, $useSalesLocalTimeZone = null) {
      $this->dimensions = $dimensions;
      $this->adUnitView = $adUnitView;
      $this->columns = $columns;
      $this->dimensionAttributes = $dimensionAttributes;
      $this->customFieldIds = $customFieldIds;
      $this->contentMetadataKeyHierarchyCustomTargetingKeyIds = $contentMetadataKeyHierarchyCustomTargetingKeyIds;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->dateRangeType = $dateRangeType;
      $this->statement = $statement;
      $this->useSalesLocalTimeZone = $useSalesLocalTimeZone;
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

if (!class_exists("SavedQuery", false)) {
  /**
   * A saved {@link ReportQuery} representing the selection criteria for running a report.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class SavedQuery {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "SavedQuery";

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
     * @var ReportQuery
     */
    public $reportQuery;

    /**
     * @access public
     * @var boolean
     */
    public $isCompatibleWithApiVersion;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $reportQuery = null, $isCompatibleWithApiVersion = null) {
      $this->id = $id;
      $this->name = $name;
      $this->reportQuery = $reportQuery;
      $this->isCompatibleWithApiVersion = $isCompatibleWithApiVersion;
    }

  }
}

if (!class_exists("SavedQueryPage", false)) {
  /**
   * A page of {@link SavedQuery} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class SavedQueryPage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "SavedQueryPage";

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
     * @var SavedQuery[]
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

if (!class_exists("ReportQueryAdUnitView", false)) {
  /**
   * A view for an ad unit report.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ReportQueryAdUnitView {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "ReportQuery.AdUnitView";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
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

if (!class_exists("Column", false)) {
  /**
   * {@code Column} provides all the trafficking statistics and revenue
   * information available for the chosen {@link Dimension} objects.
   * <p>
   * Columns with {@code INVENTORY_LEVEL} should not be used with dimensions
   * relating to line items, orders, companies and creatives,
   * such as {@link Dimension#LINE_ITEM_NAME}.
   * Columns with {@code LINE_ITEM_LEVEL} can only be used if you have line item-level
   * dynamic allocation enabled on your network.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class Column {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "Column";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
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

if (!class_exists("DateRangeType", false)) {
  /**
   * Represents a period of time.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class DateRangeType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "DateRangeType";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Dimension", false)) {
  /**
   * {@code Dimension} provides the break-down and filterable types available for
   * running a {@link ReportJob}. Aggregate and percentage columns will be
   * calculated based on these groupings.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class Dimension {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "Dimension";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("DimensionAttribute", false)) {
  /**
   * {@code DimensionAttribute} provides additional fields associated with a
   * {@link Dimension}. It can only be selected with its corresponding
   * {@link Dimension}. For example, {@link DimensionAttribute#ORDER_PO_NUMBER}
   * can only be used if the {@link ReportQuery#dimensions} contains
   * {@link Dimension#ORDER_NAME}.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class DimensionAttribute {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "DimensionAttribute";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ExportFormat", false)) {
  /**
   * The file formats available for creating the report.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ExportFormat {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "ExportFormat";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
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

if (!class_exists("ReportErrorReason", false)) {
  /**
   * Default {@code ReportError} when the reason is not among any already
   * defined.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ReportErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "ReportError.Reason";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ReportJobStatus", false)) {
  /**
   * Represents the status of a {@link ReportJob} running on the server.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ReportJobStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "ReportJobStatus";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
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

if (!class_exists("GetReportDownloadURL", false)) {
  /**
   * Returns the URL at which the report file can be downloaded.
   * <p>
   * The report will be generated as a gzip archive, containing the report file itself.
   * 
   * @param reportJobId the ID of the {@link ReportJob}
   * @param exportFormat the {@link ExportFormat} for the report file
   * @return the URL for report file download
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetReportDownloadURL {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var integer
     */
    public $reportJobId;

    /**
     * @access public
     * @var tnsExportFormat
     */
    public $exportFormat;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reportJobId = null, $exportFormat = null) {
      $this->reportJobId = $reportJobId;
      $this->exportFormat = $exportFormat;
    }

  }
}

if (!class_exists("GetReportDownloadURLResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetReportDownloadURLResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var string
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

if (!class_exists("GetReportDownloadUrlWithOptions", false)) {
  /**
   * Returns the URL at which the report file can be downloaded, and allows for customization
   * of the downloaded report.
   * <p>
   * By default, the report will be generated as a gzip archive, containing the report file itself.
   * This can be changed by setting {@link ReportDownloadOptions#useGzipCompression} to false.
   * 
   * @param reportJobId the ID of the {@link ReportJob}
   * @param reportDownloadOptions the {@link ReportDownloadOptions} for the request
   * @return the URL for report file download
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetReportDownloadUrlWithOptions {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var integer
     */
    public $reportJobId;

    /**
     * @access public
     * @var ReportDownloadOptions
     */
    public $reportDownloadOptions;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reportJobId = null, $reportDownloadOptions = null) {
      $this->reportJobId = $reportJobId;
      $this->reportDownloadOptions = $reportDownloadOptions;
    }

  }
}

if (!class_exists("GetReportDownloadUrlWithOptionsResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetReportDownloadUrlWithOptionsResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var string
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

if (!class_exists("GetReportJobStatus", false)) {
  /**
   * Returns the {@link ReportJobStatus} of the report job with the specified ID.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetReportJobStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var integer
     */
    public $reportJobId;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reportJobId = null) {
      $this->reportJobId = $reportJobId;
    }

  }
}

if (!class_exists("GetReportJobStatusResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetReportJobStatusResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var tnsReportJobStatus
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

if (!class_exists("GetSavedQueriesByStatement", false)) {
  /**
   * Retrieves a page of the saved queries either created by or shared with the current user. Each
   * {@link SavedQuery} in the page, if it is compatible with the current API version, will
   * contain a {@link ReportQuery} object which can be optionally modified and used to create a
   * {@link ReportJob}. This can then be passed to {@link ReportService#runReportJob}.
   * The following fields are supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link SavedQuery#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link SavedQuery#name}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter which saved queries
   * should be returned.
   * @return a {@link SavedQueryPage} that contains all {@link SavedQuery} instances which satisfy
   * the given statement.
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetSavedQueriesByStatement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
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

if (!class_exists("GetSavedQueriesByStatementResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class GetSavedQueriesByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var SavedQueryPage
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

if (!class_exists("RunReportJob", false)) {
  /**
   * Initiates the execution of a {@link ReportQuery} on the server.
   * 
   * <p>The following fields are required:
   * <ul>
   * <li>{@link ReportJob#reportQuery}</li>
   * </ul>
   * 
   * @param reportJob the report job to run
   * @return the report job with its ID filled in
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class RunReportJob {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ReportJob
     */
    public $reportJob;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reportJob = null) {
      $this->reportJob = $reportJob;
    }

  }
}

if (!class_exists("RunReportJobResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class RunReportJobResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ReportJob
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

if (!class_exists("ReportService", false)) {
  /**
   * ReportService
   * @package GoogleApiAdsDfp
   * @subpackage v201608
   */
  class ReportService extends DfpSoapClient {

    const SERVICE_NAME = "ReportService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201608";
    const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201608/ReportService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201608/ReportService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CollectionSizeError" => "CollectionSizeError",
      "CommonError" => "CommonError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "ReportDownloadOptions" => "ReportDownloadOptions",
      "ReportError" => "ReportError",
      "ReportJob" => "ReportJob",
      "ReportQuery" => "ReportQuery",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "SavedQuery" => "SavedQuery",
      "SavedQueryPage" => "SavedQueryPage",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "Value" => "Value",
      "ReportQuery.AdUnitView" => "ReportQueryAdUnitView",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "Column" => "Column",
      "CommonError.Reason" => "CommonErrorReason",
      "DateRangeType" => "DateRangeType",
      "Dimension" => "Dimension",
      "DimensionAttribute" => "DimensionAttribute",
      "ExportFormat" => "ExportFormat",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "ReportError.Reason" => "ReportErrorReason",
      "ReportJobStatus" => "ReportJobStatus",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "getReportDownloadURL" => "GetReportDownloadURL",
      "getReportDownloadURLResponse" => "GetReportDownloadURLResponse",
      "getReportDownloadUrlWithOptions" => "GetReportDownloadUrlWithOptions",
      "getReportDownloadUrlWithOptionsResponse" => "GetReportDownloadUrlWithOptionsResponse",
      "getReportJobStatus" => "GetReportJobStatus",
      "getReportJobStatusResponse" => "GetReportJobStatusResponse",
      "getSavedQueriesByStatement" => "GetSavedQueriesByStatement",
      "getSavedQueriesByStatementResponse" => "GetSavedQueriesByStatementResponse",
      "runReportJob" => "RunReportJob",
      "runReportJobResponse" => "RunReportJobResponse",
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
     * Returns the URL at which the report file can be downloaded.
     * <p>
     * The report will be generated as a gzip archive, containing the report file itself.
     * 
     * @param reportJobId the ID of the {@link ReportJob}
     * @param exportFormat the {@link ExportFormat} for the report file
     * @return the URL for report file download
     */
    public function getReportDownloadURL($reportJobId, $exportFormat) {
      $args = new GetReportDownloadURL($reportJobId, $exportFormat);
      $result = $this->__soapCall("getReportDownloadURL", array($args));
      return $result->rval;
    }
    /**
     * Returns the URL at which the report file can be downloaded, and allows for customization
     * of the downloaded report.
     * <p>
     * By default, the report will be generated as a gzip archive, containing the report file itself.
     * This can be changed by setting {@link ReportDownloadOptions#useGzipCompression} to false.
     * 
     * @param reportJobId the ID of the {@link ReportJob}
     * @param reportDownloadOptions the {@link ReportDownloadOptions} for the request
     * @return the URL for report file download
     */
    public function getReportDownloadUrlWithOptions($reportJobId, $reportDownloadOptions) {
      $args = new GetReportDownloadUrlWithOptions($reportJobId, $reportDownloadOptions);
      $result = $this->__soapCall("getReportDownloadUrlWithOptions", array($args));
      return $result->rval;
    }
    /**
     * Returns the {@link ReportJobStatus} of the report job with the specified ID.
     */
    public function getReportJobStatus($reportJobId) {
      $args = new GetReportJobStatus($reportJobId);
      $result = $this->__soapCall("getReportJobStatus", array($args));
      return $result->rval;
    }
    /**
     * Retrieves a page of the saved queries either created by or shared with the current user. Each
     * {@link SavedQuery} in the page, if it is compatible with the current API version, will
     * contain a {@link ReportQuery} object which can be optionally modified and used to create a
     * {@link ReportJob}. This can then be passed to {@link ReportService#runReportJob}.
     * The following fields are supported for filtering:
     * 
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link SavedQuery#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link SavedQuery#name}</td>
     * </tr>
     * </table>
     * 
     * @param filterStatement a Publisher Query Language statement used to filter which saved queries
     * should be returned.
     * @return a {@link SavedQueryPage} that contains all {@link SavedQuery} instances which satisfy
     * the given statement.
     */
    public function getSavedQueriesByStatement($filterStatement) {
      $args = new GetSavedQueriesByStatement($filterStatement);
      $result = $this->__soapCall("getSavedQueriesByStatement", array($args));
      return $result->rval;
    }
    /**
     * Initiates the execution of a {@link ReportQuery} on the server.
     * 
     * <p>The following fields are required:
     * <ul>
     * <li>{@link ReportJob#reportQuery}</li>
     * </ul>
     * 
     * @param reportJob the report job to run
     * @return the report job with its ID filled in
     */
    public function runReportJob($reportJob) {
      $args = new RunReportJob($reportJob);
      $result = $this->__soapCall("runReportJob", array($args));
      return $result->rval;
    }
  }
}

