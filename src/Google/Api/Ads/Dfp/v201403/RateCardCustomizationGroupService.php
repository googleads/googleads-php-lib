<?php
/**
 * Contains all client objects for the RateCardCustomizationGroupService
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RateCardCustomizationGroup", false)) {
  /**
   * The group of rate card customiations.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RateCardCustomizationGroup {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "RateCardCustomizationGroup";

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
     * @var RateCardFeature
     */
    public $rateCardFeature;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $rateCardId = null, $pricingMethod = null, $rateCardFeature = null) {
      $this->id = $id;
      $this->rateCardId = $rateCardId;
      $this->pricingMethod = $pricingMethod;
      $this->rateCardFeature = $rateCardFeature;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RateCardCustomizationGroupError", false)) {
  /**
   * An error having to do with {@link RateCardCustomizationGroup}.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RateCardCustomizationGroupError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "RateCardCustomizationGroupError";

    /**
     * @access public
     * @var tnsRateCardCustomizationGroupErrorReason
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RateCardCustomizationGroupPage", false)) {
  /**
   * Captures a  page of {@link RateCardCustomizationGroup} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RateCardCustomizationGroupPage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "RateCardCustomizationGroupPage";

    /**
     * @access public
     * @var RateCardCustomizationGroup[]
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
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RateCardFeature", false)) {
  /**
   * The feature of a {@link RateCardCustomization}
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "RateCardFeature";

    /**
     * @access public
     * @var string
     */
    public $RateCardFeatureType;
    private $_parameterMap = array(
      "RateCardFeature.Type" => "RateCardFeatureType",
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

    public function __construct($RateCardFeatureType = null) {
      $this->RateCardFeatureType = $RateCardFeatureType;
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UnknownRateCardFeature", false)) {
  /**
   * The {@link RateCardFeature} returned if the actual feature is not exposed by
   * the requested API version.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UnknownRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "UnknownRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UserDomainRateCardFeature", false)) {
  /**
   * A rate customization applied to user domain targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UserDomainRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "UserDomainRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PricingMethod", false)) {
  /**
   * Describes which {@link RateCardCustomization} objects from the
   * {@link RateCardCustomizationGroup} to apply to a {@link ProposalLineItem}.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PricingMethod {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "PricingMethod";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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
   * Another way to mitigate this error is to limit requests to 2 per second.
   * Once again this does not guarantee that every request will succeed, but
   * may help reduce the number of times you receive this error.
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\RateCardCustomizationGroupErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RateCardCustomizationGroupErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "RateCardCustomizationGroupError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreateRateCardCustomizationGroups", false)) {
  /**
   * Creates a list of new {@link RateCardCustomizationGroup} objects.
   * 
   * @param rateCardCustomizationGroups the rate card customization groups to be created
   * @return the rate card customization groups with their IDs filled in
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreateRateCardCustomizationGroups {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var RateCardCustomizationGroup[]
     */
    public $rateCardCustomizationGroups;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rateCardCustomizationGroups = null) {
      $this->rateCardCustomizationGroups = $rateCardCustomizationGroups;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreateRateCardCustomizationGroupsResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreateRateCardCustomizationGroupsResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var RateCardCustomizationGroup[]
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GetRateCardCustomizationGroupsByStatement", false)) {
  /**
   * Gets a {@link RateCardCustomizationGroupPage} of
   * {@link RateCardCustomizationGroup} objects that satisfy the given
   * {@link Statement#query}. The following fields are supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link RateCardCustomizationGroup#id}</td>
   * </tr>
   * <tr>
   * <td>{@code rateCardId}</td>
   * <td>{@link RateCardCustomizationGroup#rateCardId}</td>
   * </tr>
   * <tr>
   * <td>{@code pricingMethod}</td>
   * <td>{@link RateCardCustomizationGroup#pricingMethod}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement to filter a
   * list of rate card customization groups.
   * @return the rate card customization groups that match the filter
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GetRateCardCustomizationGroupsByStatement {

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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GetRateCardCustomizationGroupsByStatementResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GetRateCardCustomizationGroupsByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var RateCardCustomizationGroupPage
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UpdateRateCardCustomizationGroups", false)) {
  /**
   * Updates the specified {@link RateCardCustomizationGroup} objects.
   * 
   * @param rateCardCustomizationGroups the rate card customization groups to be updated
   * @return the updated rate card customization groups
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UpdateRateCardCustomizationGroups {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var RateCardCustomizationGroup[]
     */
    public $rateCardCustomizationGroups;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rateCardCustomizationGroups = null) {
      $this->rateCardCustomizationGroups = $rateCardCustomizationGroups;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UpdateRateCardCustomizationGroupsResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UpdateRateCardCustomizationGroupsResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var RateCardCustomizationGroup[]
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\AdUnitRateCardFeature", false)) {
  /**
   * A rate customization applied to ad unit targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class AdUnitRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "AdUnitRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\BandwidthRateCardFeature", false)) {
  /**
   * A rate customization applied to bandwidth targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class BandwidthRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "BandwidthRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\BrowserRateCardFeature", false)) {
  /**
   * A rate customization applied to browser targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class BrowserRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "BrowserRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\BrowserLanguageRateCardFeature", false)) {
  /**
   * A rate customization applied to browser language targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class BrowserLanguageRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "BrowserLanguageRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingRateCardFeature", false)) {
  /**
   * A rate customization applied to custom criteria targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomTargetingRateCardFeature";

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
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($customTargetingKeyId = null, $customTargetingValueId = null, $RateCardFeatureType = null) {
      parent::__construct();
      $this->customTargetingKeyId = $customTargetingKeyId;
      $this->customTargetingValueId = $customTargetingValueId;
      $this->RateCardFeatureType = $RateCardFeatureType;
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\FrequencyCapRateCardFeature", false)) {
  /**
   * A rate customization applied to frequency caps.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class FrequencyCapRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "FrequencyCapRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GeographyRateCardFeature", false)) {
  /**
   * A rate customization applied to geography targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GeographyRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "GeographyRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\OperatingSystemRateCardFeature", false)) {
  /**
   * A rate customization applied to operating system targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class OperatingSystemRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "OperatingSystemRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PlacementRateCardFeature", false)) {
  /**
   * A rate customization applied to placement targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PlacementRateCardFeature extends RateCardFeature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "PlacementRateCardFeature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($RateCardFeatureType = null) {
      parent::__construct();
      $this->RateCardFeatureType = $RateCardFeatureType;
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

if (!class_exists("RateCardCustomizationGroupService", false)) {
  /**
   * RateCardCustomizationGroupService
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class RateCardCustomizationGroupService extends \Google\Api\Ads\Dfp\Lib\DfpSoapClient {

    const SERVICE_NAME = "RateCardCustomizationGroupService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const ENDPOINT = "https://www.google.com/apis/ads/publisher/v201403/RateCardCustomizationGroupService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://www.google.com/apis/ads/publisher/v201403/RateCardCustomizationGroupService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdUnitRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\AdUnitRateCardFeature",
      "ApiError" => "Google\\Api\\Ads\\Dfp\\v201403\\ApiError",
      "ApiException" => "Google\\Api\\Ads\\Dfp\\v201403\\ApiException",
      "ApiVersionError" => "Google\\Api\\Ads\\Dfp\\v201403\\ApiVersionError",
      "ApplicationException" => "Google\\Api\\Ads\\Dfp\\v201403\\ApplicationException",
      "Authentication" => "Google\\Api\\Ads\\Dfp\\v201403\\Authentication",
      "AuthenticationError" => "Google\\Api\\Ads\\Dfp\\v201403\\AuthenticationError",
      "BandwidthRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\BandwidthRateCardFeature",
      "BooleanValue" => "Google\\Api\\Ads\\Dfp\\v201403\\BooleanValue",
      "BrowserRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\BrowserRateCardFeature",
      "BrowserLanguageRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\BrowserLanguageRateCardFeature",
      "CommonError" => "Google\\Api\\Ads\\Dfp\\v201403\\CommonError",
      "CustomTargetingRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingRateCardFeature",
      "Date" => "Google\\Api\\Ads\\Dfp\\v201403\\Date",
      "DateTime" => "Google\\Api\\Ads\\Dfp\\v201403\\DfpDateTime",
      "DateTimeValue" => "Google\\Api\\Ads\\Dfp\\v201403\\DateTimeValue",
      "DateValue" => "Google\\Api\\Ads\\Dfp\\v201403\\DateValue",
      "FeatureError" => "Google\\Api\\Ads\\Dfp\\v201403\\FeatureError",
      "FrequencyCapRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\FrequencyCapRateCardFeature",
      "GeographyRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\GeographyRateCardFeature",
      "InternalApiError" => "Google\\Api\\Ads\\Dfp\\v201403\\InternalApiError",
      "NotNullError" => "Google\\Api\\Ads\\Dfp\\v201403\\NotNullError",
      "NullError" => "Google\\Api\\Ads\\Dfp\\v201403\\NullError",
      "NumberValue" => "Google\\Api\\Ads\\Dfp\\v201403\\NumberValue",
      "OAuth" => "Google\\Api\\Ads\\Dfp\\v201403\\DfpOAuth",
      "OperatingSystemRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\OperatingSystemRateCardFeature",
      "PermissionError" => "Google\\Api\\Ads\\Dfp\\v201403\\PermissionError",
      "PlacementRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\PlacementRateCardFeature",
      "PublisherQueryLanguageContextError" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageSyntaxError",
      "QuotaError" => "Google\\Api\\Ads\\Dfp\\v201403\\QuotaError",
      "RateCardCustomizationGroup" => "Google\\Api\\Ads\\Dfp\\v201403\\RateCardCustomizationGroup",
      "RateCardCustomizationGroupError" => "Google\\Api\\Ads\\Dfp\\v201403\\RateCardCustomizationGroupError",
      "RateCardCustomizationGroupPage" => "Google\\Api\\Ads\\Dfp\\v201403\\RateCardCustomizationGroupPage",
      "RateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\RateCardFeature",
      "ServerError" => "Google\\Api\\Ads\\Dfp\\v201403\\ServerError",
      "SetValue" => "Google\\Api\\Ads\\Dfp\\v201403\\SetValue",
      "SoapRequestHeader" => "Google\\Api\\Ads\\Dfp\\v201403\\SoapRequestHeader",
      "SoapResponseHeader" => "Google\\Api\\Ads\\Dfp\\v201403\\SoapResponseHeader",
      "Statement" => "Google\\Api\\Ads\\Dfp\\v201403\\Statement",
      "StatementError" => "Google\\Api\\Ads\\Dfp\\v201403\\StatementError",
      "String_ValueMapEntry" => "Google\\Api\\Ads\\Dfp\\v201403\\String_ValueMapEntry",
      "TextValue" => "Google\\Api\\Ads\\Dfp\\v201403\\TextValue",
      "UnknownRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\UnknownRateCardFeature",
      "UserDomainRateCardFeature" => "Google\\Api\\Ads\\Dfp\\v201403\\UserDomainRateCardFeature",
      "Value" => "Google\\Api\\Ads\\Dfp\\v201403\\Value",
      "ApiVersionError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ApiVersionErrorReason",
      "PricingMethod" => "Google\\Api\\Ads\\Dfp\\v201403\\PricingMethod",
      "AuthenticationError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\AuthenticationErrorReason",
      "CommonError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\CommonErrorReason",
      "FeatureError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\FeatureErrorReason",
      "InternalApiError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\InternalApiErrorReason",
      "NotNullError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\NotNullErrorReason",
      "NullError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\NullErrorReason",
      "PermissionError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\QuotaErrorReason",
      "RateCardCustomizationGroupError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\RateCardCustomizationGroupErrorReason",
      "ServerError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ServerErrorReason",
      "StatementError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\StatementErrorReason",
      "createRateCardCustomizationGroups" => "Google\\Api\\Ads\\Dfp\\v201403\\CreateRateCardCustomizationGroups",
      "createRateCardCustomizationGroupsResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\CreateRateCardCustomizationGroupsResponse",
      "getRateCardCustomizationGroupsByStatement" => "Google\\Api\\Ads\\Dfp\\v201403\\GetRateCardCustomizationGroupsByStatement",
      "getRateCardCustomizationGroupsByStatementResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\GetRateCardCustomizationGroupsByStatementResponse",
      "updateRateCardCustomizationGroups" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateRateCardCustomizationGroups",
      "updateRateCardCustomizationGroupsResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateRateCardCustomizationGroupsResponse",
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
     * Creates a list of new {@link RateCardCustomizationGroup} objects.
     * 
     * @param rateCardCustomizationGroups the rate card customization groups to be created
     * @return the rate card customization groups with their IDs filled in
     */
    public function createRateCardCustomizationGroups($rateCardCustomizationGroups) {
      $args = new CreateRateCardCustomizationGroups($rateCardCustomizationGroups);
      $result = $this->__soapCall("createRateCardCustomizationGroups", array($args));
      return $result->rval;
    }
    /**
     * Gets a {@link RateCardCustomizationGroupPage} of
     * {@link RateCardCustomizationGroup} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     * 
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link RateCardCustomizationGroup#id}</td>
     * </tr>
     * <tr>
     * <td>{@code rateCardId}</td>
     * <td>{@link RateCardCustomizationGroup#rateCardId}</td>
     * </tr>
     * <tr>
     * <td>{@code pricingMethod}</td>
     * <td>{@link RateCardCustomizationGroup#pricingMethod}</td>
     * </tr>
     * </table>
     * 
     * @param filterStatement a Publisher Query Language statement to filter a
     * list of rate card customization groups.
     * @return the rate card customization groups that match the filter
     */
    public function getRateCardCustomizationGroupsByStatement($filterStatement) {
      $args = new GetRateCardCustomizationGroupsByStatement($filterStatement);
      $result = $this->__soapCall("getRateCardCustomizationGroupsByStatement", array($args));
      return $result->rval;
    }
    /**
     * Updates the specified {@link RateCardCustomizationGroup} objects.
     * 
     * @param rateCardCustomizationGroups the rate card customization groups to be updated
     * @return the updated rate card customization groups
     */
    public function updateRateCardCustomizationGroups($rateCardCustomizationGroups) {
      $args = new UpdateRateCardCustomizationGroups($rateCardCustomizationGroups);
      $result = $this->__soapCall("updateRateCardCustomizationGroups", array($args));
      return $result->rval;
    }
  }
}

