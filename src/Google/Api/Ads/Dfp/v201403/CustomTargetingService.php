<?php
/**
 * Contains all client objects for the CustomTargetingService
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingKeyAction", false)) {
  /**
   * Represents the actions that can be performed on {@link CustomTargetingKey}
   * objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingKeyAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomTargetingKeyAction";

    /**
     * @access public
     * @var string
     */
    public $CustomTargetingKeyActionType;
    private $_parameterMap = array(
      "CustomTargetingKeyAction.Type" => "CustomTargetingKeyActionType",
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

    public function __construct($CustomTargetingKeyActionType = null) {
      $this->CustomTargetingKeyActionType = $CustomTargetingKeyActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingKey", false)) {
  /**
   * {@code CustomTargetingKey} represents a key used for custom targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingKey {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomTargetingKey";

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
    public $displayName;

    /**
     * @access public
     * @var tnsCustomTargetingKeyType
     */
    public $type;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $displayName = null, $type = null) {
      $this->id = $id;
      $this->name = $name;
      $this->displayName = $displayName;
      $this->type = $type;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingKeyPage", false)) {
  /**
   * Captures a page of {@link CustomTargetingKey} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingKeyPage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomTargetingKeyPage";

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
     * @var CustomTargetingKey[]
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingValueAction", false)) {
  /**
   * Represents the actions that can be performed on {@link CustomTargetingValue}
   * objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingValueAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomTargetingValueAction";

    /**
     * @access public
     * @var string
     */
    public $CustomTargetingValueActionType;
    private $_parameterMap = array(
      "CustomTargetingValueAction.Type" => "CustomTargetingValueActionType",
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

    public function __construct($CustomTargetingValueActionType = null) {
      $this->CustomTargetingValueActionType = $CustomTargetingValueActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingValue", false)) {
  /**
   * {@code CustomTargetingValue} represents a value used for custom targeting.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomTargetingValue";

    /**
     * @access public
     * @var integer
     */
    public $customTargetingKeyId;

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
    public $displayName;

    /**
     * @access public
     * @var tnsCustomTargetingValueMatchType
     */
    public $matchType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($customTargetingKeyId = null, $id = null, $name = null, $displayName = null, $matchType = null) {
      $this->customTargetingKeyId = $customTargetingKeyId;
      $this->id = $id;
      $this->name = $name;
      $this->displayName = $displayName;
      $this->matchType = $matchType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingValuePage", false)) {
  /**
   * Captures a page of {@link CustomTargetingValue} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingValuePage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomTargetingValuePage";

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
     * @var CustomTargetingValue[]
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DeleteCustomTargetingKeys", false)) {
  /**
   * Represents the delete action that can be performed on
   * {@link CustomTargetingKey} objects. Deleting a key will not delete the
   * {@link CustomTargetingValue} objects associated with it. Also, if a custom
   * targeting key that has been deleted is recreated, any previous custom
   * targeting values associated with it that were not deleted will continue to
   * exist.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DeleteCustomTargetingKeys extends CustomTargetingKeyAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DeleteCustomTargetingKeys";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($CustomTargetingKeyActionType = null) {
      parent::__construct();
      $this->CustomTargetingKeyActionType = $CustomTargetingKeyActionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\DeleteCustomTargetingValues", false)) {
  /**
   * Represents the delete action that can be performed on
   * {@link CustomTargetingValue} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class DeleteCustomTargetingValues extends CustomTargetingValueAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "DeleteCustomTargetingValues";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($CustomTargetingValueActionType = null) {
      parent::__construct();
      $this->CustomTargetingValueActionType = $CustomTargetingValueActionType;
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingKeyType", false)) {
  /**
   * Specifies the types for {@code CustomTargetingKey} objects.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingKeyType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomTargetingKey.Type";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingValueMatchType", false)) {
  /**
   * Represents the ways in which {@link CustomTargetingValue#name} strings will
   * be matched with ad requests.
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingValueMatchType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "CustomTargetingValue.MatchType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreateCustomTargetingKeys", false)) {
  /**
   * Creates new {@link CustomTargetingKey} objects.
   * 
   * The following fields are required:
   * <ul>
   * <li>{@link CustomTargetingKey#name}</li>
   * <li>{@link CustomTargetingKey#type}</li>
   * </ul>
   * 
   * @param keys the custom targeting keys to update
   * @return the updated custom targeting keys
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreateCustomTargetingKeys {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingKey[]
     */
    public $keys;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($keys = null) {
      $this->keys = $keys;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreateCustomTargetingKeysResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreateCustomTargetingKeysResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingKey[]
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreateCustomTargetingValues", false)) {
  /**
   * Creates new {@link CustomTargetingValue} objects.
   * 
   * The following fields are required:
   * <ul>
   * <li>{@link CustomTargetingValue#customTargetingKeyId}</li>
   * <li>{@link CustomTargetingValue#name}</li>
   * </ul>
   * 
   * @param values the custom targeting values to update
   * @return the updated custom targeting keys
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreateCustomTargetingValues {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingValue[]
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

    public function __construct($values = null) {
      $this->values = $values;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\CreateCustomTargetingValuesResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CreateCustomTargetingValuesResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingValue[]
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GetCustomTargetingKeysByStatement", false)) {
  /**
   * Gets a {@link CustomTargetingKeyPage} of {@link CustomTargetingKey} objects
   * that satisfy the given {@link Statement#query}. The following fields are
   * supported for filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link CustomTargetingKey#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link CustomTargetingKey#name}</td>
   * </tr>
   * <tr>
   * <td>{@code displayName}</td>
   * <td>{@link CustomTargetingKey#displayName}</td>
   * </tr>
   * <tr>
   * <td>{@code type}</td>
   * <td>{@link CustomTargetingKey#type}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of custom targeting keys
   * @return the custom targeting keys that match the given filter
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GetCustomTargetingKeysByStatement {

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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GetCustomTargetingKeysByStatementResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GetCustomTargetingKeysByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingKeyPage
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GetCustomTargetingValuesByStatement", false)) {
  /**
   * Gets a {@link CustomTargetingValuePage} of {@link CustomTargetingValue}
   * objects that satisfy the given {@link Statement#query}.
   * <p>
   * The {@code WHERE} clause in the {@link Statement#query} must always contain
   * {@link CustomTargetingValue#customTargetingKeyId} as one of its columns in
   * a way that it is AND'ed with the rest of the query. So, if you want to
   * retrieve values for a known set of key ids, valid {@link Statement#query}
   * would look like:
   * </p>
   * <ol>
   * <li>
   * "WHERE customTargetingKeyId IN ('17','18','19')" retrieves all values that
   * are associated with keys having ids 17, 18, 19.
   * </li>
   * <li>
   * "WHERE customTargetingKeyId = '17' AND name = 'red'" retrieves values that
   * are associated with keys having id 17 and value name is 'red'.
   * </li>
   * </ol>
   * </p>
   * <p>
   * The following fields are supported for filtering:
   * </p>
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th>
   * <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link CustomTargetingValue#id}</td>
   * </tr>
   * <tr>
   * <td>{@code customTargetingKeyId}</td>
   * <td>{@link CustomTargetingValue#customTargetingKeyId}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link CustomTargetingValue#name}</td>
   * </tr>
   * <tr>
   * <td>{@code displayName}</td>
   * <td>{@link CustomTargetingValue#displayName}</td>
   * </tr>
   * <tr>
   * <td>{@code matchType}</td>
   * <td>{@link CustomTargetingValue#matchType}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of custom targeting values
   * @return the custom targeting values that match the given filter
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GetCustomTargetingValuesByStatement {

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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\GetCustomTargetingValuesByStatementResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class GetCustomTargetingValuesByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingValuePage
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PerformCustomTargetingKeyAction", false)) {
  /**
   * Performs actions on {@link CustomTargetingKey} objects that match the given
   * {@link Statement#query}.
   * 
   * @param customTargetingKeyAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of custom targeting keys
   * @return the result of the action performed
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PerformCustomTargetingKeyAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingKeyAction
     */
    public $customTargetingKeyAction;

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

    public function __construct($customTargetingKeyAction = null, $filterStatement = null) {
      $this->customTargetingKeyAction = $customTargetingKeyAction;
      $this->filterStatement = $filterStatement;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PerformCustomTargetingKeyActionResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PerformCustomTargetingKeyActionResponse {

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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PerformCustomTargetingValueAction", false)) {
  /**
   * Performs actions on {@link CustomTargetingValue} objects that match the
   * given {@link Statement#query}.
   * 
   * @param customTargetingValueAction the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of ad units
   * @return the result of the action performed
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PerformCustomTargetingValueAction {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingValueAction
     */
    public $customTargetingValueAction;

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

    public function __construct($customTargetingValueAction = null, $filterStatement = null) {
      $this->customTargetingValueAction = $customTargetingValueAction;
      $this->filterStatement = $filterStatement;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\PerformCustomTargetingValueActionResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class PerformCustomTargetingValueActionResponse {

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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UpdateCustomTargetingKeys", false)) {
  /**
   * Updates the specified {@link CustomTargetingKey} objects.
   * 
   * @param keys the custom targeting keys to update
   * @return the updated custom targeting keys
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UpdateCustomTargetingKeys {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingKey[]
     */
    public $keys;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($keys = null) {
      $this->keys = $keys;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UpdateCustomTargetingKeysResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UpdateCustomTargetingKeysResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingKey[]
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

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UpdateCustomTargetingValues", false)) {
  /**
   * Updates the specified {@link CustomTargetingValue} objects.
   * 
   * @param values the custom targeting values to update
   * @return the updated custom targeting values
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UpdateCustomTargetingValues {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingValue[]
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

    public function __construct($values = null) {
      $this->values = $values;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\Dfp\\v201403\\UpdateCustomTargetingValuesResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class UpdateCustomTargetingValuesResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomTargetingValue[]
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

if (!class_exists("CustomTargetingService", false)) {
  /**
   * CustomTargetingService
   * @package Google\Api\Ads\Dfp\v201403
   * @subpackage v201403
   */
  class CustomTargetingService extends \Google\Api\Ads\Dfp\Lib\DfpSoapClient {

    const SERVICE_NAME = "CustomTargetingService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201403";
    const ENDPOINT = "https://www.google.com/apis/ads/publisher/v201403/CustomTargetingService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://www.google.com/apis/ads/publisher/v201403/CustomTargetingService";
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
      "Authentication" => "Google\\Api\\Ads\\Dfp\\v201403\\Authentication",
      "AuthenticationError" => "Google\\Api\\Ads\\Dfp\\v201403\\AuthenticationError",
      "BooleanValue" => "Google\\Api\\Ads\\Dfp\\v201403\\BooleanValue",
      "CommonError" => "Google\\Api\\Ads\\Dfp\\v201403\\CommonError",
      "CustomTargetingError" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingError",
      "CustomTargetingKeyAction" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingKeyAction",
      "CustomTargetingKey" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingKey",
      "CustomTargetingKeyPage" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingKeyPage",
      "CustomTargetingValueAction" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingValueAction",
      "CustomTargetingValue" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingValue",
      "CustomTargetingValuePage" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingValuePage",
      "Date" => "Google\\Api\\Ads\\Dfp\\v201403\\Date",
      "DateTime" => "Google\\Api\\Ads\\Dfp\\v201403\\DfpDateTime",
      "DateTimeValue" => "Google\\Api\\Ads\\Dfp\\v201403\\DateTimeValue",
      "DateValue" => "Google\\Api\\Ads\\Dfp\\v201403\\DateValue",
      "DeleteCustomTargetingKeys" => "Google\\Api\\Ads\\Dfp\\v201403\\DeleteCustomTargetingKeys",
      "DeleteCustomTargetingValues" => "Google\\Api\\Ads\\Dfp\\v201403\\DeleteCustomTargetingValues",
      "FeatureError" => "Google\\Api\\Ads\\Dfp\\v201403\\FeatureError",
      "InternalApiError" => "Google\\Api\\Ads\\Dfp\\v201403\\InternalApiError",
      "NotNullError" => "Google\\Api\\Ads\\Dfp\\v201403\\NotNullError",
      "NullError" => "Google\\Api\\Ads\\Dfp\\v201403\\NullError",
      "NumberValue" => "Google\\Api\\Ads\\Dfp\\v201403\\NumberValue",
      "OAuth" => "Google\\Api\\Ads\\Dfp\\v201403\\DfpOAuth",
      "ParseError" => "Google\\Api\\Ads\\Dfp\\v201403\\ParseError",
      "PermissionError" => "Google\\Api\\Ads\\Dfp\\v201403\\PermissionError",
      "PublisherQueryLanguageContextError" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageSyntaxError",
      "QuotaError" => "Google\\Api\\Ads\\Dfp\\v201403\\QuotaError",
      "RequiredError" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredError",
      "ServerError" => "Google\\Api\\Ads\\Dfp\\v201403\\ServerError",
      "SetValue" => "Google\\Api\\Ads\\Dfp\\v201403\\SetValue",
      "SoapRequestHeader" => "Google\\Api\\Ads\\Dfp\\v201403\\SoapRequestHeader",
      "SoapResponseHeader" => "Google\\Api\\Ads\\Dfp\\v201403\\SoapResponseHeader",
      "Statement" => "Google\\Api\\Ads\\Dfp\\v201403\\Statement",
      "StatementError" => "Google\\Api\\Ads\\Dfp\\v201403\\StatementError",
      "String_ValueMapEntry" => "Google\\Api\\Ads\\Dfp\\v201403\\String_ValueMapEntry",
      "TextValue" => "Google\\Api\\Ads\\Dfp\\v201403\\TextValue",
      "TypeError" => "Google\\Api\\Ads\\Dfp\\v201403\\TypeError",
      "UniqueError" => "Google\\Api\\Ads\\Dfp\\v201403\\UniqueError",
      "UpdateResult" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateResult",
      "Value" => "Google\\Api\\Ads\\Dfp\\v201403\\Value",
      "ApiVersionError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ApiVersionErrorReason",
      "AuthenticationError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\AuthenticationErrorReason",
      "CommonError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\CommonErrorReason",
      "CustomTargetingError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingErrorReason",
      "CustomTargetingKey.Type" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingKeyType",
      "CustomTargetingValue.MatchType" => "Google\\Api\\Ads\\Dfp\\v201403\\CustomTargetingValueMatchType",
      "FeatureError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\FeatureErrorReason",
      "InternalApiError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\InternalApiErrorReason",
      "NotNullError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\NotNullErrorReason",
      "NullError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\NullErrorReason",
      "ParseError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ParseErrorReason",
      "PermissionError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\QuotaErrorReason",
      "RequiredError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\RequiredErrorReason",
      "ServerError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\ServerErrorReason",
      "StatementError.Reason" => "Google\\Api\\Ads\\Dfp\\v201403\\StatementErrorReason",
      "createCustomTargetingKeys" => "Google\\Api\\Ads\\Dfp\\v201403\\CreateCustomTargetingKeys",
      "createCustomTargetingKeysResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\CreateCustomTargetingKeysResponse",
      "createCustomTargetingValues" => "Google\\Api\\Ads\\Dfp\\v201403\\CreateCustomTargetingValues",
      "createCustomTargetingValuesResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\CreateCustomTargetingValuesResponse",
      "getCustomTargetingKeysByStatement" => "Google\\Api\\Ads\\Dfp\\v201403\\GetCustomTargetingKeysByStatement",
      "getCustomTargetingKeysByStatementResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\GetCustomTargetingKeysByStatementResponse",
      "getCustomTargetingValuesByStatement" => "Google\\Api\\Ads\\Dfp\\v201403\\GetCustomTargetingValuesByStatement",
      "getCustomTargetingValuesByStatementResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\GetCustomTargetingValuesByStatementResponse",
      "performCustomTargetingKeyAction" => "Google\\Api\\Ads\\Dfp\\v201403\\PerformCustomTargetingKeyAction",
      "performCustomTargetingKeyActionResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\PerformCustomTargetingKeyActionResponse",
      "performCustomTargetingValueAction" => "Google\\Api\\Ads\\Dfp\\v201403\\PerformCustomTargetingValueAction",
      "performCustomTargetingValueActionResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\PerformCustomTargetingValueActionResponse",
      "updateCustomTargetingKeys" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateCustomTargetingKeys",
      "updateCustomTargetingKeysResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateCustomTargetingKeysResponse",
      "updateCustomTargetingValues" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateCustomTargetingValues",
      "updateCustomTargetingValuesResponse" => "Google\\Api\\Ads\\Dfp\\v201403\\UpdateCustomTargetingValuesResponse",
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
     * Creates new {@link CustomTargetingKey} objects.
     * 
     * The following fields are required:
     * <ul>
     * <li>{@link CustomTargetingKey#name}</li>
     * <li>{@link CustomTargetingKey#type}</li>
     * </ul>
     * 
     * @param keys the custom targeting keys to update
     * @return the updated custom targeting keys
     */
    public function createCustomTargetingKeys($keys) {
      $args = new CreateCustomTargetingKeys($keys);
      $result = $this->__soapCall("createCustomTargetingKeys", array($args));
      return $result->rval;
    }
    /**
     * Creates new {@link CustomTargetingValue} objects.
     * 
     * The following fields are required:
     * <ul>
     * <li>{@link CustomTargetingValue#customTargetingKeyId}</li>
     * <li>{@link CustomTargetingValue#name}</li>
     * </ul>
     * 
     * @param values the custom targeting values to update
     * @return the updated custom targeting keys
     */
    public function createCustomTargetingValues($values) {
      $args = new CreateCustomTargetingValues($values);
      $result = $this->__soapCall("createCustomTargetingValues", array($args));
      return $result->rval;
    }
    /**
     * Gets a {@link CustomTargetingKeyPage} of {@link CustomTargetingKey} objects
     * that satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     * 
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomTargetingKey#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomTargetingKey#name}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link CustomTargetingKey#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link CustomTargetingKey#type}</td>
     * </tr>
     * </table>
     * 
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of custom targeting keys
     * @return the custom targeting keys that match the given filter
     */
    public function getCustomTargetingKeysByStatement($filterStatement) {
      $args = new GetCustomTargetingKeysByStatement($filterStatement);
      $result = $this->__soapCall("getCustomTargetingKeysByStatement", array($args));
      return $result->rval;
    }
    /**
     * Gets a {@link CustomTargetingValuePage} of {@link CustomTargetingValue}
     * objects that satisfy the given {@link Statement#query}.
     * <p>
     * The {@code WHERE} clause in the {@link Statement#query} must always contain
     * {@link CustomTargetingValue#customTargetingKeyId} as one of its columns in
     * a way that it is AND'ed with the rest of the query. So, if you want to
     * retrieve values for a known set of key ids, valid {@link Statement#query}
     * would look like:
     * </p>
     * <ol>
     * <li>
     * "WHERE customTargetingKeyId IN ('17','18','19')" retrieves all values that
     * are associated with keys having ids 17, 18, 19.
     * </li>
     * <li>
     * "WHERE customTargetingKeyId = '17' AND name = 'red'" retrieves values that
     * are associated with keys having id 17 and value name is 'red'.
     * </li>
     * </ol>
     * </p>
     * <p>
     * The following fields are supported for filtering:
     * </p>
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomTargetingValue#id}</td>
     * </tr>
     * <tr>
     * <td>{@code customTargetingKeyId}</td>
     * <td>{@link CustomTargetingValue#customTargetingKeyId}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomTargetingValue#name}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link CustomTargetingValue#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code matchType}</td>
     * <td>{@link CustomTargetingValue#matchType}</td>
     * </tr>
     * </table>
     * 
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of custom targeting values
     * @return the custom targeting values that match the given filter
     */
    public function getCustomTargetingValuesByStatement($filterStatement) {
      $args = new GetCustomTargetingValuesByStatement($filterStatement);
      $result = $this->__soapCall("getCustomTargetingValuesByStatement", array($args));
      return $result->rval;
    }
    /**
     * Performs actions on {@link CustomTargetingKey} objects that match the given
     * {@link Statement#query}.
     * 
     * @param customTargetingKeyAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of custom targeting keys
     * @return the result of the action performed
     */
    public function performCustomTargetingKeyAction($customTargetingKeyAction, $filterStatement) {
      $args = new PerformCustomTargetingKeyAction($customTargetingKeyAction, $filterStatement);
      $result = $this->__soapCall("performCustomTargetingKeyAction", array($args));
      return $result->rval;
    }
    /**
     * Performs actions on {@link CustomTargetingValue} objects that match the
     * given {@link Statement#query}.
     * 
     * @param customTargetingValueAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad units
     * @return the result of the action performed
     */
    public function performCustomTargetingValueAction($customTargetingValueAction, $filterStatement) {
      $args = new PerformCustomTargetingValueAction($customTargetingValueAction, $filterStatement);
      $result = $this->__soapCall("performCustomTargetingValueAction", array($args));
      return $result->rval;
    }
    /**
     * Updates the specified {@link CustomTargetingKey} objects.
     * 
     * @param keys the custom targeting keys to update
     * @return the updated custom targeting keys
     */
    public function updateCustomTargetingKeys($keys) {
      $args = new UpdateCustomTargetingKeys($keys);
      $result = $this->__soapCall("updateCustomTargetingKeys", array($args));
      return $result->rval;
    }
    /**
     * Updates the specified {@link CustomTargetingValue} objects.
     * 
     * @param values the custom targeting values to update
     * @return the updated custom targeting values
     */
    public function updateCustomTargetingValues($values) {
      $args = new UpdateCustomTargetingValues($values);
      $result = $this->__soapCall("updateCustomTargetingValues", array($args));
      return $result->rval;
    }
  }
}

