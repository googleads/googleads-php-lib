<?php
/**
 * Contains all client objects for the OrderService
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
 * @package    Google\Api\Ads\Dfp\v201403
 * @subpackage v201403
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
namespace Google\Api\Ads\Dfp\v201403;

require_once "Google/Api/Ads/Dfp/Lib/DfpSoapClient.php";

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ApiVersionError", false)) {
  /**
   * Errors related to the usage of API versions.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ApiVersionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\AppliedLabel", false)) {
  /**
   * Represents a {@link Label} that can be applied to an entity. To negate an
   * inherited label, create an {@code AppliedLabel} with {@code labelId} as the
   * inherited label's ID and {@code isNegated} set to true.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class AppliedLabel {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\AudienceExtensionError", false)) {
  /**
   * Errors associated with audience extension enabled line items
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class AudienceExtensionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\Authentication", false)) {
  /**
   * A representation of the authentication protocols that can be used.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class Authentication {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\AuthenticationError", false)) {
  /**
   * An error for an exception that occurred when authenticating.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\BaseCustomFieldValue", false)) {
  /**
   * The value of a {@link CustomField} for a particular entity.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "BaseCustomFieldValue";

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
    private $_parameterMap = array(
      "BaseCustomFieldValue.Type" => "BaseCustomFieldValueType",
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

    public function __construct($customFieldId = null, $BaseCustomFieldValueType = null) {
      $this->customFieldId = $customFieldId;
      $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ClickTrackingLineItemError", false)) {
  /**
   * Click tracking is a special line item type with a number of unique errors as
   * described below.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ClickTrackingLineItemError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ClickTrackingLineItemError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CommonError", false)) {
  /**
   * A place for common errors that can be used across services.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CommonError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CompanyCreditStatusError", false)) {
  /**
   * Lists all errors due to {@link Company#creditStatus}.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CompanyCreditStatusError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CompanyCreditStatusError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ContentMetadataTargetingError", false)) {
  /**
   * Lists all errors related to {@link ContentMetadataTargeting}.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ContentMetadataTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ContentMetadataTargetingError";

    /**
     * @access public
     * @var tnsContentMetadataTargetingErrorReason
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreativeError", false)) {
  /**
   * Lists all errors associated with creatives.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreativeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomFieldValue", false)) {
  /**
   * The value of a {@link CustomField} that does not have a {@link CustomField#dataType}
   * of {@link CustomFieldDataType#DROP_DOWN}.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomFieldValue extends BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomFieldValue";

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

    public function __construct($value = null, $customFieldId = null, $BaseCustomFieldValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->customFieldId = $customFieldId;
      $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomFieldValueError", false)) {
  /**
   * Errors specific to editing custom field values
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomFieldValueError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingError", false)) {
  /**
   * Lists all errors related to {@link CustomTargetingKey} and
   * {@link CustomTargetingValue} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\Date", false)) {
  /**
   * Represents a date.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class Date {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DfpDateTime", false)) {
  /**
   * Represents a date combined with the time of day.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DfpDateTime {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DateTimeRangeTargetingError", false)) {
  /**
   * Lists all date time range errors caused by associating a line item with a targeting
   * expression.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DateTimeRangeTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DateTimeRangeTargetingError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DayPartTargetingError", false)) {
  /**
   * Lists all errors associated with day-part targeting for a line item.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DayPartTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DayPartTargetingError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DropDownCustomFieldValue", false)) {
  /**
   * A {@link CustomFieldValue} for a {@link CustomField} that has a {@link CustomField#dataType}
   * of {@link CustomFieldDataType#DROP_DOWN}
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DropDownCustomFieldValue extends BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DropDownCustomFieldValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($customFieldOptionId = null, $customFieldId = null, $BaseCustomFieldValueType = null) {
      parent::__construct();
      $this->customFieldOptionId = $customFieldOptionId;
      $this->customFieldId = $customFieldId;
      $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\EntityLimitReachedError", false)) {
  /**
   * An error that occurs when creating an entity if the limit on the number of allowed entities for
   * a network has already been reached.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class EntityLimitReachedError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\FeatureError", false)) {
  /**
   * Errors related to feature management.  If you attempt using a feature that is not available to
   * the current network you'll receive a FeatureError with the missing feature as the trigger.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class FeatureError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ForecastError", false)) {
  /**
   * Errors that can result from a forecast request.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ForecastError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ForecastError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\FrequencyCapError", false)) {
  /**
   * Lists all errors associated with frequency caps.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class FrequencyCapError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "FrequencyCapError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GenericTargetingError", false)) {
  /**
   * Targeting validation errors that can be used by different targeting types.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GenericTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "GenericTargetingError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GeoTargetingError", false)) {
  /**
   * Lists all errors associated with geographical targeting for a
   * {@link LineItem}.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GeoTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "GeoTargetingError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\InvalidEmailError", false)) {
  /**
   * Caused by supplying a value for an email attribute that is not a valid
   * email address.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class InvalidEmailError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\InvalidUrlError", false)) {
  /**
   * Lists all errors associated with URLs.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class InvalidUrlError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\InventoryTargetingError", false)) {
  /**
   * Lists all inventory errors caused by associating a line item with a targeting
   * expression.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class InventoryTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LabelEntityAssociationError", false)) {
  /**
   * Errors specific to creating label entity associations.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LabelEntityAssociationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LineItemCreativeAssociationError", false)) {
  /**
   * Lists all errors associated with line item-to-creative association dates.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LineItemCreativeAssociationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LineItemError", false)) {
  /**
   * A catch-all error that lists all generic errors associated with LineItem.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LineItemError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LineItemFlightDateError", false)) {
  /**
   * Lists all errors associated with LineItem start and end dates.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LineItemFlightDateError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "LineItemFlightDateError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LineItemOperationError", false)) {
  /**
   * Lists all errors for executing operations on line items
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LineItemOperationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "LineItemOperationError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\Money", false)) {
  /**
   * Represents a money amount.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class Money {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\NotNullError", false)) {
  /**
   * Caused by supplying a null value for an attribute that cannot be null.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class NotNullError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DfpOAuth", false)) {
  /**
   * The credentials for the {@code OAuth} authentication protocol.
   * 
   * See {@link http://oauth.net/}.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DfpOAuth extends Authentication {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\OrderAction", false)) {
  /**
   * Represents the actions that can be performed on {@link Order} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "OrderAction";

    /**
     * @access public
     * @var string
     */
    public $OrderActionType;
    private $_parameterMap = array(
      "OrderAction.Type" => "OrderActionType",
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

    public function __construct($OrderActionType = null) {
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\OrderActionError", false)) {
  /**
   * Lists all errors associated with performing actions on {@link Order} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class OrderActionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "OrderActionError";

    /**
     * @access public
     * @var tnsOrderActionErrorReason
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\Order", false)) {
  /**
   * An {@code Order} represents a grouping of individual {@link LineItem}
   * objects, each of which fulfill an ad request from a particular advertiser.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class Order {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "Order";

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
     * @var boolean
     */
    public $unlimitedEndDateTime;

    /**
     * @access public
     * @var tnsOrderStatus
     */
    public $status;

    /**
     * @access public
     * @var boolean
     */
    public $isArchived;

    /**
     * @access public
     * @var string
     */
    public $notes;

    /**
     * @access public
     * @var integer
     */
    public $externalOrderId;

    /**
     * @access public
     * @var string
     */
    public $poNumber;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

    /**
     * @access public
     * @var integer
     */
    public $advertiserId;

    /**
     * @access public
     * @var integer[]
     */
    public $advertiserContactIds;

    /**
     * @access public
     * @var integer
     */
    public $agencyId;

    /**
     * @access public
     * @var integer[]
     */
    public $agencyContactIds;

    /**
     * @access public
     * @var integer
     */
    public $creatorId;

    /**
     * @access public
     * @var integer
     */
    public $traffickerId;

    /**
     * @access public
     * @var integer[]
     */
    public $secondaryTraffickerIds;

    /**
     * @access public
     * @var integer
     */
    public $salespersonId;

    /**
     * @access public
     * @var integer[]
     */
    public $secondarySalespersonIds;

    /**
     * @access public
     * @var integer
     */
    public $totalImpressionsDelivered;

    /**
     * @access public
     * @var integer
     */
    public $totalClicksDelivered;

    /**
     * @access public
     * @var Money
     */
    public $totalBudget;

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
     * @var string
     */
    public $lastModifiedByApp;

    /**
     * @access public
     * @var integer[]
     */
    public $appliedTeamIds;

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
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $startDateTime = null, $endDateTime = null, $unlimitedEndDateTime = null, $status = null, $isArchived = null, $notes = null, $externalOrderId = null, $poNumber = null, $currencyCode = null, $advertiserId = null, $advertiserContactIds = null, $agencyId = null, $agencyContactIds = null, $creatorId = null, $traffickerId = null, $secondaryTraffickerIds = null, $salespersonId = null, $secondarySalespersonIds = null, $totalImpressionsDelivered = null, $totalClicksDelivered = null, $totalBudget = null, $appliedLabels = null, $effectiveAppliedLabels = null, $lastModifiedByApp = null, $appliedTeamIds = null, $lastModifiedDateTime = null, $customFieldValues = null) {
      $this->id = $id;
      $this->name = $name;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      $this->status = $status;
      $this->isArchived = $isArchived;
      $this->notes = $notes;
      $this->externalOrderId = $externalOrderId;
      $this->poNumber = $poNumber;
      $this->currencyCode = $currencyCode;
      $this->advertiserId = $advertiserId;
      $this->advertiserContactIds = $advertiserContactIds;
      $this->agencyId = $agencyId;
      $this->agencyContactIds = $agencyContactIds;
      $this->creatorId = $creatorId;
      $this->traffickerId = $traffickerId;
      $this->secondaryTraffickerIds = $secondaryTraffickerIds;
      $this->salespersonId = $salespersonId;
      $this->secondarySalespersonIds = $secondarySalespersonIds;
      $this->totalImpressionsDelivered = $totalImpressionsDelivered;
      $this->totalClicksDelivered = $totalClicksDelivered;
      $this->totalBudget = $totalBudget;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->lastModifiedByApp = $lastModifiedByApp;
      $this->appliedTeamIds = $appliedTeamIds;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->customFieldValues = $customFieldValues;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\OrderError", false)) {
  /**
   * Lists all errors associated with orders.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class OrderError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "OrderError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\OrderPage", false)) {
  /**
   * Captures a page of {@link Order} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class OrderPage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "OrderPage";

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
     * @var Order[]
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ParseError", false)) {
  /**
   * Lists errors related to parsing.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ParseError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PauseOrders", false)) {
  /**
   * The action used for pausing {@link Order} objects. All {@link LineItem}
   * objects within the order will be paused as well.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PauseOrders extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "PauseOrders";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PermissionError", false)) {
  /**
   * Errors related to incorrect permission.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PermissionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageContextError", false)) {
  /**
   * An error that occurs while executing a PQL query contained in
   * a {@link Statement} object.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PublisherQueryLanguageContextError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageSyntaxError", false)) {
  /**
   * An error that occurs while parsing a PQL query contained in a
   * {@link Statement} object.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PublisherQueryLanguageSyntaxError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\QuotaError", false)) {
  /**
   * Describes a client-side error on which a user is attempting
   * to perform an action to which they have no quota remaining.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class QuotaError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RequiredCollectionError", false)) {
  /**
   * A list of all errors to be used for validating sizes of collections.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RequiredCollectionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RequiredNumberError", false)) {
  /**
   * A list of all errors to be used in conjunction with required number
   * validators.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RequiredNumberError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RequiredSizeError", false)) {
  /**
   * A list of all errors to be used for validating {@link Size}.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RequiredSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ReservationDetailsError", false)) {
  /**
   * Lists all errors associated with LineItem's reservation details.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ReservationDetailsError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ReservationDetailsError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ResumeOrders", false)) {
  /**
   * The action used for resuming {@link Order} objects. All {@link LineItem}
   * objects within the order will resume as well.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ResumeOrders extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ResumeOrders";

    /**
     * @access public
     * @var boolean
     */
    public $skipInventoryCheck;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($skipInventoryCheck = null, $OrderActionType = null) {
      parent::__construct();
      $this->skipInventoryCheck = $skipInventoryCheck;
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RetractOrders", false)) {
  /**
   * The action used for retracting {@link Order} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RetractOrders extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "RetractOrders";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RetractOrdersWithoutReservationChanges", false)) {
  /**
   * The action used for retracting {@link Order} objects. This action does not
   * make any changes to the {@link LineItem#reservationStatus} of the line items
   * within the order.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RetractOrdersWithoutReservationChanges extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "RetractOrdersWithoutReservationChanges";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ServerError", false)) {
  /**
   * Errors related to the server.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ServerError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\SoapRequestHeader", false)) {
  /**
   * Represents the SOAP request header used by API requests.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\SoapResponseHeader", false)) {
  /**
   * Represents the SOAP request header used by API responses.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\Statement", false)) {
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
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class Statement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\StatementError", false)) {
  /**
   * An error that occurs while parsing {@link Statement} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class StatementError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\StringLengthError", false)) {
  /**
   * Errors for Strings which do not meet given length constraints.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\String_ValueMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type String
   * and value of type Value.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class String_ValueMapEntry {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\SubmitOrdersForApproval", false)) {
  /**
   * The action used for submitting {@link Order} objects for approval.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class SubmitOrdersForApproval extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "SubmitOrdersForApproval";

    /**
     * @access public
     * @var boolean
     */
    public $skipInventoryCheck;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($skipInventoryCheck = null, $OrderActionType = null) {
      parent::__construct();
      $this->skipInventoryCheck = $skipInventoryCheck;
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\SubmitOrdersForApprovalAndOverbook", false)) {
  /**
   * The action used for submitting and overbooking {@link Order} objects for approval.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class SubmitOrdersForApprovalAndOverbook extends SubmitOrdersForApproval {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "SubmitOrdersForApprovalAndOverbook";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($skipInventoryCheck = null) {
      parent::__construct();
      $this->skipInventoryCheck = $skipInventoryCheck;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\SubmitOrdersForApprovalWithoutReservationChanges", false)) {
  /**
   * The action used for submitting {@link Order} objects for approval. This
   * action does not make any changes to the {@link LineItem#reservationStatus}
   * of the line items within the order.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class SubmitOrdersForApprovalWithoutReservationChanges extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "SubmitOrdersForApprovalWithoutReservationChanges";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\TeamError", false)) {
  /**
   * Errors related to a Team.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class TeamError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\TechnologyTargetingError", false)) {
  /**
   * Technology targeting validation errors.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class TechnologyTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "TechnologyTargetingError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\TemplateInstantiatedCreativeError", false)) {
  /**
   * Lists all errors associated with template instantiated creatives.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class TemplateInstantiatedCreativeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\TypeError", false)) {
  /**
   * An error for a field which is an invalid type.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class TypeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UnarchiveOrders", false)) {
  /**
   * The action used for unarchiving {@link Order} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UnarchiveOrders extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "UnarchiveOrders";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UniqueError", false)) {
  /**
   * An error for a field which must satisfy a uniqueness constraint
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UniqueError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UpdateResult", false)) {
  /**
   * Represents the result of performing an action on objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UpdateResult {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UserDomainTargetingError", false)) {
  /**
   * Lists all errors related to user domain targeting for a line item.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UserDomainTargetingError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "UserDomainTargetingError";

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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\Value", false)) {
  /**
   * {@code Value} represents a value.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ApiVersionErrorReason", false)) {
  /**
   * Indicates that the operation is not allowed in the version the request
   * was made in.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ApiVersionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\AudienceExtensionErrorReason", false)) {
  /**
   * Specific audience extension error reasons.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class AudienceExtensionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\AuthenticationErrorReason", false)) {
  /**
   * The SOAP message contains a request header with an ambiguous definition
   * of the authentication header fields. This means either the {@code
   * authToken} and {@code oAuthToken} fields were both null or both were
   * specified. Exactly one value should be specified with each request.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ClickTrackingLineItemErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ClickTrackingLineItemErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ClickTrackingLineItemError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CommonErrorReason", false)) {
  /**
   * Describes reasons for common errors
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CommonErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CompanyCreditStatusErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CompanyCreditStatusErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CompanyCreditStatusError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ContentMetadataTargetingErrorReason", false)) {
  /**
   * The reasons for the metadata targeting error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ContentMetadataTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ContentMetadataTargetingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreativeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreativeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomFieldValueErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomFieldValueErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DateTimeRangeTargetingErrorReason", false)) {
  /**
   * {@link ApiErrorReason} enum for date time range targeting error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DateTimeRangeTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DateTimeRangeTargetingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DayPartTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DayPartTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DayPartTargetingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\FeatureErrorReason", false)) {
  /**
   * A feature is being used that is not enabled on the current network.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class FeatureErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ForecastErrorReason", false)) {
  /**
   * Reason why a forecast could not be retrieved.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ForecastErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ForecastError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\FrequencyCapErrorReason", false)) {
  /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class FrequencyCapErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "FrequencyCapError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GenericTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GenericTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "GenericTargetingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GeoTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GeoTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "GeoTargetingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\InvalidEmailErrorReason", false)) {
  /**
   * Describes reasons for an email to be invalid.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class InvalidEmailErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\InvalidUrlErrorReason", false)) {
  /**
   * The URL contains invalid characters.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class InvalidUrlErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\InventoryTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class InventoryTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LabelEntityAssociationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LabelEntityAssociationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LineItemCreativeAssociationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LineItemCreativeAssociationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LineItemErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LineItemErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LineItemFlightDateErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LineItemFlightDateErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "LineItemFlightDateError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\LineItemOperationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class LineItemOperationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "LineItemOperationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\NotNullErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class NotNullErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\OrderActionErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class OrderActionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "OrderActionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\OrderErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class OrderErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "OrderError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\OrderStatus", false)) {
  /**
   * Describes the order statuses.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class OrderStatus {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "OrderStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ParseErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ParseErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PermissionErrorReason", false)) {
  /**
   * Describes reasons for permission errors.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PermissionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageContextErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PublisherQueryLanguageContextErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageSyntaxErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PublisherQueryLanguageSyntaxErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\QuotaErrorReason", false)) {
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
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class QuotaErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RangeErrorReason", false)) {
  /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RequiredCollectionErrorReason", false)) {
  /**
   * A required collection is missing.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RequiredCollectionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RequiredNumberErrorReason", false)) {
  /**
   * Describes reasons for a number to be invalid.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RequiredNumberErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RequiredSizeErrorReason", false)) {
  /**
   * {@link Creative#size} or {@link LineItem#creativeSizes} is
   * missing.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RequiredSizeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ReservationDetailsErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ReservationDetailsErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ReservationDetailsError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ServerErrorReason", false)) {
  /**
   * Describes reasons for server errors
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ServerErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\StatementErrorReason", false)) {
  /**
   * A bind variable has not been bound to a value.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class StatementErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\StringLengthErrorReason", false)) {
  /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\TeamErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class TeamErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\TechnologyTargetingErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class TechnologyTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "TechnologyTargetingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\TemplateInstantiatedCreativeErrorReason", false)) {
  /**
   * The reason for the error
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class TemplateInstantiatedCreativeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UserDomainTargetingErrorReason", false)) {
  /**
   * {@link ApiErrorReason} enum for user domain targeting error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UserDomainTargetingErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "UserDomainTargetingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreateOrders", false)) {
  /**
   * Creates new {@link Order} objects.
   * 
   * @param orders the orders to create
   * @return the created orders with their IDs filled in
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreateOrders {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Order[]
     */
    public $orders;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($orders = null) {
      $this->orders = $orders;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreateOrdersResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreateOrdersResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Order[]
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GetOrdersByStatement", false)) {
  /**
   * Gets an {@link OrderPage} of {@link Order} objects that satisfy the given
   * {@link Statement#query}. The following fields are supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code advertiserId}</td>
   * <td>{@link Order#advertiserId}</td>
   * </tr>
   * <tr>
   * <td>{@code endDateTime}</td>
   * <td>{@link Order#endDateTime}</td>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link Order#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link Order#name}</td>
   * </tr>
   * <tr>
   * <td>{@code salespersonId}</td>
   * <td>{@link Order#salespersonId}</td>
   * </tr>
   * <tr>
   * <td>{@code startDateTime}</td>
   * <td>{@link Order#startDateTime}</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link Order#status}</td>
   * </tr>
   * <tr>
   * <td>{@code traffickerId}</td>
   * <td>{@link Order#traffickerId}</td>
   * </tr>
   * <tr>
   * <td>{@code lastModifiedDateTime}</td>
   * <td>{@link Order#lastModifiedDateTime}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of orders
   * @return the orders that match the given filter
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GetOrdersByStatement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GetOrdersByStatementResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GetOrdersByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var OrderPage
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PerformOrderAction", false)) {
  /**
   * Performs actions on {@link Order} objects that match the given
   * {@link Statement#query}.
   * 
   * @param orderAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of orders
   * @return the result of the action performed
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PerformOrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var OrderAction
     */
    public $orderAction;

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

    public function __construct($orderAction = null, $filterStatement = null) {
      $this->orderAction = $orderAction;
      $this->filterStatement = $filterStatement;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PerformOrderActionResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PerformOrderActionResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UpdateOrders", false)) {
  /**
   * Updates the specified {@link Order} objects.
   * 
   * @param orders the orders to update
   * @return the updated orders
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UpdateOrders {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Order[]
     */
    public $orders;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($orders = null) {
      $this->orders = $orders;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UpdateOrdersResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UpdateOrdersResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Order[]
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ApproveOrders", false)) {
  /**
   * The action used for approving {@link Order} objects. All {@link LineItem}
   * objects within the order will be approved as well.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ApproveOrders extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ApproveOrders";

    /**
     * @access public
     * @var boolean
     */
    public $skipInventoryCheck;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($skipInventoryCheck = null, $OrderActionType = null) {
      parent::__construct();
      $this->skipInventoryCheck = $skipInventoryCheck;
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ApproveOrdersWithoutReservationChanges", false)) {
  /**
   * The action used for approving {@link Order} objects. All {@link LineItem}
   * objects within the order will be approved as well.  This action does not
   * make any changes to the {@link LineItem#reservationStatus} of the line
   * items within the order. If there are reservable line items that have not
   * been reserved the operation will not succeed.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ApproveOrdersWithoutReservationChanges extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ApproveOrdersWithoutReservationChanges";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ArchiveOrders", false)) {
  /**
   * The action used for archiving {@link Order} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ArchiveOrders extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ArchiveOrders";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\BooleanValue", false)) {
  /**
   * Contains a boolean value.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class BooleanValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DateTimeValue", false)) {
  /**
   * Contains a date-time value.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DateTimeValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DateValue", false)) {
  /**
   * Contains a date value.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DateValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DateValue";

    /**
     * @access public
     * @var Date
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DeleteOrders", false)) {
  /**
   * The action used for deleting {@link Order} objects. All line items within
   * that order are also deleted. Orders can only be deleted if none of its line
   * items have been eligible to serve. This action can be used to delete
   * proposed orders and line items if they are no longer valid.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DeleteOrders extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DeleteOrders";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DisapproveOrders", false)) {
  /**
   * The action used for disapproving {@link Order} objects. All {@link LineItem}
   * objects within the order will be disapproved as well.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DisapproveOrders extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DisapproveOrders";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DisapproveOrdersWithoutReservationChanges", false)) {
  /**
   * The action used for disapproving {@link Order} objects. All {@link LineItem}
   * objects within the order will be disapproved as well. This action does not
   * make any changes to the {@link LineItem#reservationStatus} of the line items
   * within the order.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DisapproveOrdersWithoutReservationChanges extends OrderAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DisapproveOrdersWithoutReservationChanges";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($OrderActionType = null) {
      parent::__construct();
      $this->OrderActionType = $OrderActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\NumberValue", false)) {
  /**
   * Contains a numeric value.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class NumberValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ResumeAndOverbookOrders", false)) {
  /**
   * The action used for resuming and overbooking {@link Order} objects.
   * All {@link LineItem} objects within the order will resume as well.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ResumeAndOverbookOrders extends ResumeOrders {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ResumeAndOverbookOrders";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($skipInventoryCheck = null) {
      parent::__construct();
      $this->skipInventoryCheck = $skipInventoryCheck;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\SetValue", false)) {
  /**
   * Contains a set of {@link Value Values}. May not contain duplicates.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class SetValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "SetValue";

    /**
     * @access public
     * @var Value[]
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

    public function __construct($values = null, $ValueType = null) {
      parent::__construct();
      $this->values = $values;
      $this->ValueType = $ValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\TextValue", false)) {
  /**
   * Contains a string value.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class TextValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
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

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\ApproveAndOverbookOrders", false)) {
  /**
   * The action used for approving and overbooking {@link Order} objects.
   * All {@link LineItem} objects within the order will be approved as well.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class ApproveAndOverbookOrders extends ApproveOrders {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "ApproveAndOverbookOrders";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($skipInventoryCheck = null) {
      parent::__construct();
      $this->skipInventoryCheck = $skipInventoryCheck;
    }

  }
}

if (!class_exists("OrderService", false)) {
  /**
   * OrderService
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class OrderService extends \Google\Api\Ads\Dfp\Lib\DfpSoapClient {

    const SERVICE_NAME = "OrderService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const ENDPOINT = "https://www.google.com/apis/ads/publisher/v201403/OrderService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://www.google.com/apis/ads/publisher/v201403/OrderService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ApiError" => "Google\\Api\\Ads\\Dfp\\v201403\\ApiError",
      "ApiException" => "Google\\Api\\Ads\\Dfp\\v201403\\ApiException",
      "ApiVersionError" => "Google\\Api\\Ads\\Dfp\\v201403\\ApiVersionError",
      "ApplicationException" => "Google\\Api\\Ads\\Dfp\\v201403\\ApplicationException",
      "AppliedLabel" => "Google\\Api\\Ads\\Dfp\\v201403\\AppliedLabel",
      "ApproveAndOverbookOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\ApproveAndOverbookOrders",
      "ApproveOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\ApproveOrders",
      "ApproveOrdersWithoutReservationChanges" => "Google\\Api\\Ads\\Dfp\\v201403\\ApproveOrdersWithoutReservationChanges",
      "ArchiveOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\ArchiveOrders",
      "AudienceExtensionError" => "Google\\Api\\Ads\\Dfp\\v201403\\AudienceExtensionError",
      "Authentication" => "Google\\Api\\Ads\\Dfp\\v201403\\Authentication",
      "AuthenticationError" => "Google\\Api\\Ads\\Dfp\\v201403\\AuthenticationError",
      "BaseCustomFieldValue" => "Google\\Api\\Ads\\Dfp\\v201403\\BaseCustomFieldValue",
      "BooleanValue" => "Google\\Api\\Ads\\Dfp\\v201403\\BooleanValue",
      "ClickTrackingLineItemError" => "Google\\Api\\Ads\\Dfp\\v201403\\ClickTrackingLineItemError",
      "CommonError" => "Google\\Api\\Ads\\Dfp\\v201403\\CommonError",
      "CompanyCreditStatusError" => "Google\\Api\\Ads\\Dfp\\v201403\\CompanyCreditStatusError",
      "ContentMetadataTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\ContentMetadataTargetingError",
      "CreativeError" => "Google\\Api\\Ads\\Dfp\\v201403\\CreativeError",
      "CustomFieldValue" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomFieldValue",
      "CustomFieldValueError" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomFieldValueError",
      "CustomTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingError",
      "Date" => "Google\\Api\\Ads\\Dfp\\v201403\\Date",
      "DateTime" => "Google\\Api\\Ads\\Dfp\\v201403\\DfpDateTime",
      "DateTimeRangeTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\DateTimeRangeTargetingError",
      "DateTimeValue" => "Google\\Api\\Ads\\Dfp\\v201403\\DateTimeValue",
      "DateValue" => "Google\\Api\\Ads\\Dfp\\v201403\\DateValue",
      "DayPartTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\DayPartTargetingError",
      "DeleteOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\DeleteOrders",
      "DisapproveOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\DisapproveOrders",
      "DisapproveOrdersWithoutReservationChanges" => "Google\\Api\\Ads\\Dfp\\v201403\\DisapproveOrdersWithoutReservationChanges",
      "DropDownCustomFieldValue" => "Google\\Api\\Ads\\Dfp\\v201403\\DropDownCustomFieldValue",
      "EntityLimitReachedError" => "Google\\Api\\Ads\\Dfp\\v201403\\EntityLimitReachedError",
      "FeatureError" => "Google\\Api\\Ads\\Dfp\\v201403\\FeatureError",
      "ForecastError" => "Google\\Api\\Ads\\Dfp\\v201403\\ForecastError",
      "FrequencyCapError" => "Google\\Api\\Ads\\Dfp\\v201403\\FrequencyCapError",
      "GenericTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\GenericTargetingError",
      "GeoTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\GeoTargetingError",
      "InternalApiError" => "Google\\Api\\Ads\\Dfp\\v201403\\InternalApiError",
      "InvalidEmailError" => "Google\\Api\\Ads\\Dfp\\v201403\\InvalidEmailError",
      "InvalidUrlError" => "Google\\Api\\Ads\\Dfp\\v201403\\InvalidUrlError",
      "InventoryTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\InventoryTargetingError",
      "LabelEntityAssociationError" => "Google\\Api\\Ads\\Dfp\\v201403\\LabelEntityAssociationError",
      "LineItemCreativeAssociationError" => "Google\\Api\\Ads\\Dfp\\v201403\\LineItemCreativeAssociationError",
      "LineItemError" => "Google\\Api\\Ads\\Dfp\\v201403\\LineItemError",
      "LineItemFlightDateError" => "Google\\Api\\Ads\\Dfp\\v201403\\LineItemFlightDateError",
      "LineItemOperationError" => "Google\\Api\\Ads\\Dfp\\v201403\\LineItemOperationError",
      "Money" => "Google\\Api\\Ads\\Dfp\\v201403\\Money",
      "NotNullError" => "Google\\Api\\Ads\\Dfp\\v201403\\NotNullError",
      "NullError" => "Google\\Api\\Ads\\Dfp\\v201403\\NullError",
      "NumberValue" => "Google\\Api\\Ads\\Dfp\\v201403\\NumberValue",
      "OAuth" => "Google\\Api\\Ads\\Dfp\\v201403\\DfpOAuth",
      "OrderAction" => "Google\\Api\\Ads\\Dfp\\v201403\\OrderAction",
      "OrderActionError" => "Google\\Api\\Ads\\Dfp\\v201403\\OrderActionError",
      "Order" => "Google\\Api\\Ads\\Dfp\\v201403\\Order",
      "OrderError" => "Google\\Api\\Ads\\Dfp\\v201403\\OrderError",
      "OrderPage" => "Google\\Api\\Ads\\Dfp\\v201403\\OrderPage",
      "ParseError" => "Google\\Api\\Ads\\Dfp\\v201403\\ParseError",
      "PauseOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\PauseOrders",
      "PermissionError" => "Google\\Api\\Ads\\Dfp\\v201403\\PermissionError",
      "PublisherQueryLanguageContextError" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageSyntaxError",
      "QuotaError" => "Google\\Api\\Ads\\Dfp\\v201403\\QuotaError",
      "RangeError" => "Google\\Api\\Ads\\Dfp\\v201403\\RangeError",
      "RequiredCollectionError" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredCollectionError",
      "RequiredError" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredError",
      "RequiredNumberError" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredNumberError",
      "RequiredSizeError" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredSizeError",
      "ReservationDetailsError" => "Google\\Api\\Ads\\Dfp\\v201403\\ReservationDetailsError",
      "ResumeAndOverbookOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\ResumeAndOverbookOrders",
      "ResumeOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\ResumeOrders",
      "RetractOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\RetractOrders",
      "RetractOrdersWithoutReservationChanges" => "Google\\Api\\Ads\\Dfp\\v201403\\RetractOrdersWithoutReservationChanges",
      "ServerError" => "Google\\Api\\Ads\\Dfp\\v201403\\ServerError",
      "SetValue" => "Google\\Api\\Ads\\Dfp\\v201403\\SetValue",
      "SoapRequestHeader" => "Google\\Api\\Ads\\Dfp\\v201403\\SoapRequestHeader",
      "SoapResponseHeader" => "Google\\Api\\Ads\\Dfp\\v201403\\SoapResponseHeader",
      "Statement" => "Google\\Api\\Ads\\Dfp\\v201403\\Statement",
      "StatementError" => "Google\\Api\\Ads\\Dfp\\v201403\\StatementError",
      "StringLengthError" => "Google\\Api\\Ads\\Dfp\\v201403\\StringLengthError",
      "String_ValueMapEntry" => "Google\\Api\\Ads\\Dfp\\v201403\\String_ValueMapEntry",
      "SubmitOrdersForApproval" => "Google\\Api\\Ads\\Dfp\\v201403\\SubmitOrdersForApproval",
      "SubmitOrdersForApprovalAndOverbook" => "Google\\Api\\Ads\\Dfp\\v201403\\SubmitOrdersForApprovalAndOverbook",
      "SubmitOrdersForApprovalWithoutReservationChanges" => "Google\\Api\\Ads\\Dfp\\v201403\\SubmitOrdersForApprovalWithoutReservationChanges",
      "TeamError" => "Google\\Api\\Ads\\Dfp\\v201403\\TeamError",
      "TechnologyTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\TechnologyTargetingError",
      "TemplateInstantiatedCreativeError" => "Google\\Api\\Ads\\Dfp\\v201403\\TemplateInstantiatedCreativeError",
      "TextValue" => "Google\\Api\\Ads\\Dfp\\v201403\\TextValue",
      "TypeError" => "Google\\Api\\Ads\\Dfp\\v201403\\TypeError",
      "UnarchiveOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\UnarchiveOrders",
      "UniqueError" => "Google\\Api\\Ads\\Dfp\\v201403\\UniqueError",
      "UpdateResult" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateResult",
      "UserDomainTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\UserDomainTargetingError",
      "Value" => "Google\\Api\\Ads\\Dfp\\v201403\\Value",
      "ApiVersionError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ApiVersionErrorReason",
      "AudienceExtensionError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\AudienceExtensionErrorReason",
      "AuthenticationError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\AuthenticationErrorReason",
      "ClickTrackingLineItemError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ClickTrackingLineItemErrorReason",
      "CommonError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\CommonErrorReason",
      "CompanyCreditStatusError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\CompanyCreditStatusErrorReason",
      "ContentMetadataTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ContentMetadataTargetingErrorReason",
      "CreativeError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\CreativeErrorReason",
      "CustomFieldValueError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomFieldValueErrorReason",
      "CustomTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingErrorReason",
      "DateTimeRangeTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\DateTimeRangeTargetingErrorReason",
      "DayPartTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\DayPartTargetingErrorReason",
      "FeatureError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\FeatureErrorReason",
      "ForecastError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ForecastErrorReason",
      "FrequencyCapError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\FrequencyCapErrorReason",
      "GenericTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\GenericTargetingErrorReason",
      "GeoTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\GeoTargetingErrorReason",
      "InternalApiError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\InternalApiErrorReason",
      "InvalidEmailError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\InvalidEmailErrorReason",
      "InvalidUrlError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\InvalidUrlErrorReason",
      "InventoryTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\InventoryTargetingErrorReason",
      "LabelEntityAssociationError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\LabelEntityAssociationErrorReason",
      "LineItemCreativeAssociationError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\LineItemCreativeAssociationErrorReason",
      "LineItemError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\LineItemErrorReason",
      "LineItemFlightDateError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\LineItemFlightDateErrorReason",
      "LineItemOperationError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\LineItemOperationErrorReason",
      "NotNullError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\NotNullErrorReason",
      "NullError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\NullErrorReason",
      "OrderActionError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\OrderActionErrorReason",
      "OrderError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\OrderErrorReason",
      "OrderStatus" => "Google\\Api\\Ads\\Dfp\\v201403\\OrderStatus",
      "ParseError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ParseErrorReason",
      "PermissionError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\QuotaErrorReason",
      "RangeError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\RangeErrorReason",
      "RequiredCollectionError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredCollectionErrorReason",
      "RequiredError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredErrorReason",
      "RequiredNumberError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredNumberErrorReason",
      "RequiredSizeError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredSizeErrorReason",
      "ReservationDetailsError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ReservationDetailsErrorReason",
      "ServerError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ServerErrorReason",
      "StatementError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\StatementErrorReason",
      "StringLengthError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\StringLengthErrorReason",
      "TeamError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\TeamErrorReason",
      "TechnologyTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\TechnologyTargetingErrorReason",
      "TemplateInstantiatedCreativeError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\TemplateInstantiatedCreativeErrorReason",
      "UserDomainTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\UserDomainTargetingErrorReason",
      "createOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\CreateOrders",
      "createOrdersResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\CreateOrdersResponse",
      "getOrdersByStatement" => "Google\\Api\\Ads\\Dfp\\v201403\\GetOrdersByStatement",
      "getOrdersByStatementResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\GetOrdersByStatementResponse",
      "performOrderAction" => "Google\\Api\\Ads\\Dfp\\v201403\\PerformOrderAction",
      "performOrderActionResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\PerformOrderActionResponse",
      "updateOrders" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateOrders",
      "updateOrdersResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateOrdersResponse",
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
     * Creates new {@link Order} objects.
     * 
     * @param orders the orders to create
     * @return the created orders with their IDs filled in
     */
    public function createOrders($orders) {
      $args = new CreateOrders($orders);
      $result = $this->__soapCall("createOrders", array($args));
      return $result->rval;
    }
    /**
     * Gets an {@link OrderPage} of {@link Order} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     * 
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code advertiserId}</td>
     * <td>{@link Order#advertiserId}</td>
     * </tr>
     * <tr>
     * <td>{@code endDateTime}</td>
     * <td>{@link Order#endDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Order#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Order#name}</td>
     * </tr>
     * <tr>
     * <td>{@code salespersonId}</td>
     * <td>{@link Order#salespersonId}</td>
     * </tr>
     * <tr>
     * <td>{@code startDateTime}</td>
     * <td>{@link Order#startDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Order#status}</td>
     * </tr>
     * <tr>
     * <td>{@code traffickerId}</td>
     * <td>{@link Order#traffickerId}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Order#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     * 
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of orders
     * @return the orders that match the given filter
     */
    public function getOrdersByStatement($filterStatement) {
      $args = new GetOrdersByStatement($filterStatement);
      $result = $this->__soapCall("getOrdersByStatement", array($args));
      return $result->rval;
    }
    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     * 
     * @param orderAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of orders
     * @return the result of the action performed
     */
    public function performOrderAction($orderAction, $filterStatement) {
      $args = new PerformOrderAction($orderAction, $filterStatement);
      $result = $this->__soapCall("performOrderAction", array($args));
      return $result->rval;
    }
    /**
     * Updates the specified {@link Order} objects.
     * 
     * @param orders the orders to update
     * @return the updated orders
     */
    public function updateOrders($orders) {
      $args = new UpdateOrders($orders);
      $result = $this->__soapCall("updateOrders", array($args));
      return $result->rval;
    }
  }
}

