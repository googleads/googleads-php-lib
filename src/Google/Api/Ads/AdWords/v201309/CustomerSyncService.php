<?php
/**
 * Contains all client objects for the CustomerSyncService
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
 * @package    Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
namespace Google_Api_Ads_AdWords_v201309;

require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DateTimeRange", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DateTimeRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DateTimeRange";

    /**
     * @access public
     * @var string
     */
    public $min;

    /**
     * @access public
     * @var string
     */
    public $max;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($min = null, $max = null) {
      $this->min = $min;
      $this->max = $max;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SoapRequestHeader", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SoapHeader";

    /**
     * @access public
     * @var string
     */
    public $authToken;

    /**
     * @access public
     * @var string
     */
    public $clientCustomerId;

    /**
     * @access public
     * @var string
     */
    public $developerToken;

    /**
     * @access public
     * @var string
     */
    public $userAgent;

    /**
     * @access public
     * @var boolean
     */
    public $validateOnly;

    /**
     * @access public
     * @var boolean
     */
    public $partialFailure;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($authToken = null, $clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null) {
      $this->authToken = $authToken;
      $this->clientCustomerId = $clientCustomerId;
      $this->developerToken = $developerToken;
      $this->userAgent = $userAgent;
      $this->validateOnly = $validateOnly;
      $this->partialFailure = $partialFailure;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SoapResponseHeader", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SoapResponseHeader";

    /**
     * @access public
     * @var string
     */
    public $requestId;

    /**
     * @access public
     * @var string
     */
    public $serviceName;

    /**
     * @access public
     * @var string
     */
    public $methodName;

    /**
     * @access public
     * @var integer
     */
    public $operations;

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

    public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null) {
      $this->requestId = $requestId;
      $this->serviceName = $serviceName;
      $this->methodName = $methodName;
      $this->operations = $operations;
      $this->responseTime = $responseTime;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ApiError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * 
   * 
   * 
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ApplicationException", false)) {
  /**
   * Indicates that this instance is a subtype of ApplicationException.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * 
   * 
   * 
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthenticationErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthorizationErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthorizationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ClientTermsErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ClientTermsErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ClientTermsError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DatabaseErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DatabaseError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DateErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DateErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DateError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DistinctErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DistinctError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\IdErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "IdError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\InternalApiErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NotEmptyErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotEmptyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NotWhitelistedErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotWhitelistedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotWhitelistedError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\QuotaCheckErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "QuotaCheckError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RangeErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RateExceededErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RateExceededError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ReadOnlyErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ReadOnlyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RequestErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequestErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequestError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RequiredErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SizeLimitErrorReason", false)) {
  /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * 
   * 
   * 
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SizeLimitError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\StringLengthErrorReason", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdGroupChangeData", false)) {
  /**
   * Holds information about a changed adgroup
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdGroupChangeData {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "AdGroupChangeData";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var tnsChangeStatus
     */
    public $adGroupChangeStatus;

    /**
     * @access public
     * @var integer[]
     */
    public $changedAds;

    /**
     * @access public
     * @var integer[]
     */
    public $changedCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $changedFeeds;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedFeeds;

    /**
     * @access public
     * @var integer[]
     */
    public $changedAdGroupBidModifierCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedAdGroupBidModifierCriteria;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $adGroupChangeStatus = null, $changedAds = null, $changedCriteria = null, $deletedCriteria = null, $changedFeeds = null, $deletedFeeds = null, $changedAdGroupBidModifierCriteria = null, $deletedAdGroupBidModifierCriteria = null) {
      $this->adGroupId = $adGroupId;
      $this->adGroupChangeStatus = $adGroupChangeStatus;
      $this->changedAds = $changedAds;
      $this->changedCriteria = $changedCriteria;
      $this->deletedCriteria = $deletedCriteria;
      $this->changedFeeds = $changedFeeds;
      $this->deletedFeeds = $deletedFeeds;
      $this->changedAdGroupBidModifierCriteria = $changedAdGroupBidModifierCriteria;
      $this->deletedAdGroupBidModifierCriteria = $deletedAdGroupBidModifierCriteria;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CampaignChangeData", false)) {
  /**
   * Holds information about a changed campaign and any ad groups under
   * that have changed.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CampaignChangeData {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "CampaignChangeData";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var tnsChangeStatus
     */
    public $campaignChangeStatus;

    /**
     * @access public
     * @var AdGroupChangeData[]
     */
    public $changedAdGroups;

    /**
     * @access public
     * @var integer[]
     */
    public $addedCampaignCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedCampaignCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $addedAdExtensions;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedAdExtensions;

    /**
     * @access public
     * @var integer[]
     */
    public $changedFeeds;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedFeeds;

    /**
     * @access public
     * @var boolean
     */
    public $campaignTargetingChanged;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $campaignChangeStatus = null, $changedAdGroups = null, $addedCampaignCriteria = null, $deletedCampaignCriteria = null, $addedAdExtensions = null, $deletedAdExtensions = null, $changedFeeds = null, $deletedFeeds = null, $campaignTargetingChanged = null) {
      $this->campaignId = $campaignId;
      $this->campaignChangeStatus = $campaignChangeStatus;
      $this->changedAdGroups = $changedAdGroups;
      $this->addedCampaignCriteria = $addedCampaignCriteria;
      $this->deletedCampaignCriteria = $deletedCampaignCriteria;
      $this->addedAdExtensions = $addedAdExtensions;
      $this->deletedAdExtensions = $deletedAdExtensions;
      $this->changedFeeds = $changedFeeds;
      $this->deletedFeeds = $deletedFeeds;
      $this->campaignTargetingChanged = $campaignTargetingChanged;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CustomerSyncError", false)) {
  /**
   * Represents CustomerSyncService specific errors
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CustomerSyncError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "CustomerSyncError";

    /**
     * @access public
     * @var tnsCustomerSyncErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $campaignId = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->campaignId = $campaignId;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\FeedChangeData", false)) {
  /**
   * Holds information about a changed feed and any feeds items within the feed.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class FeedChangeData {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "FeedChangeData";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var tnsChangeStatus
     */
    public $feedChangeStatus;

    /**
     * @access public
     * @var integer[]
     */
    public $changedFeedItems;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedFeedItems;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($feedId = null, $feedChangeStatus = null, $changedFeedItems = null, $deletedFeedItems = null) {
      $this->feedId = $feedId;
      $this->feedChangeStatus = $feedChangeStatus;
      $this->changedFeedItems = $changedFeedItems;
      $this->deletedFeedItems = $deletedFeedItems;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CustomerChangeData", false)) {
  /**
   * Holds information about changes to a customer
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CustomerChangeData {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "CustomerChangeData";

    /**
     * @access public
     * @var CampaignChangeData[]
     */
    public $changedCampaigns;

    /**
     * @access public
     * @var FeedChangeData[]
     */
    public $changedFeeds;

    /**
     * @access public
     * @var string
     */
    public $lastChangeTimestamp;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($changedCampaigns = null, $changedFeeds = null, $lastChangeTimestamp = null) {
      $this->changedCampaigns = $changedCampaigns;
      $this->changedFeeds = $changedFeeds;
      $this->lastChangeTimestamp = $lastChangeTimestamp;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CustomerSyncSelector", false)) {
  /**
   * A filter for selecting change history data for a customer.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CustomerSyncSelector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "CustomerSyncSelector";

    /**
     * @access public
     * @var DateTimeRange
     */
    public $dateTimeRange;

    /**
     * @access public
     * @var integer[]
     */
    public $campaignIds;

    /**
     * @access public
     * @var integer[]
     */
    public $feedIds;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($dateTimeRange = null, $campaignIds = null, $feedIds = null) {
      $this->dateTimeRange = $dateTimeRange;
      $this->campaignIds = $campaignIds;
      $this->feedIds = $feedIds;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ChangeStatus", false)) {
  /**
   * An enum used to classify the types of changes that have been made to
   * an adgroup/campaign during a specified date range.  This only refers
   * to the field of the entity itself, and not its children.
   * 
   * For example, if an AdGroup name changed, this status would be FIELDS_CHANGED,
   * but if only bids on keywords belonging an AdGroup were changed this
   * status would be FIELDS_UNCHANGED.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ChangeStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "ChangeStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CustomerSyncErrorReason", false)) {
  /**
   * The request attempted to access a campaign that either does not
   * exist or belongs to a different account.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CustomerSyncErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "CustomerSyncError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CustomerSyncServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns information about changed entities inside a customer's account.
   * 
   * @param selector Specifies the filter for selecting changehistory events for a customer.
   * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
   * changed at each level.  All Campaigns that are requested in the selector will be returned,
   * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CustomerSyncServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomerSyncSelector
     */
    public $selector;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($selector = null) {
      $this->selector = $selector;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\CustomerSyncServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CustomerSyncServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomerChangeData
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthenticationError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthorizationError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthorizationError";

    /**
     * @access public
     * @var tnsAuthorizationErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ClientTermsError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ClientTermsError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ClientTermsError";

    /**
     * @access public
     * @var tnsClientTermsErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DateError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DateError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DateError";

    /**
     * @access public
     * @var tnsDateErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DistinctError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DistinctError";

    /**
     * @access public
     * @var tnsDistinctErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\IdError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "IdError";

    /**
     * @access public
     * @var tnsIdErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\InternalApiError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NotEmptyError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotEmptyError";

    /**
     * @access public
     * @var tnsNotEmptyErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NotWhitelistedError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotWhitelistedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotWhitelistedError";

    /**
     * @access public
     * @var tnsNotWhitelistedErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\QuotaCheckError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "QuotaCheckError";

    /**
     * @access public
     * @var tnsQuotaCheckErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RangeError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RateExceededError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RateExceededError";

    /**
     * @access public
     * @var tnsRateExceededErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $rateName;

    /**
     * @access public
     * @var string
     */
    public $rateScope;

    /**
     * @access public
     * @var integer
     */
    public $retryAfterSeconds;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->rateName = $rateName;
      $this->rateScope = $rateScope;
      $this->retryAfterSeconds = $retryAfterSeconds;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ReadOnlyError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ReadOnlyError";

    /**
     * @access public
     * @var tnsReadOnlyErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RequestError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequestError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequestError";

    /**
     * @access public
     * @var tnsRequestErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\RequiredError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SizeLimitError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SizeLimitError";

    /**
     * @access public
     * @var tnsSizeLimitErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\StringLengthError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DatabaseError", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DatabaseError";

    /**
     * @access public
     * @var tnsDatabaseErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ApiException", false)) {
  /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("CustomerSyncService", false)) {
  /**
   * CustomerSyncService
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CustomerSyncService extends Google_Api_Ads_AdWords_v201309\Google_Api_Ads_AdWords_Lib_AdWordsSoapClient {

    const SERVICE_NAME = "CustomerSyncService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201309";
    const ENDPOINT = "https://adwords.google.com/api/adwords/ch/v201309/CustomerSyncService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/ch/v201309/CustomerSyncService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "Google_Api_Ads_AdWords_v201309\\AuthenticationError",
      "AuthorizationError" => "Google_Api_Ads_AdWords_v201309\\AuthorizationError",
      "ClientTermsError" => "Google_Api_Ads_AdWords_v201309\\ClientTermsError",
      "DateError" => "Google_Api_Ads_AdWords_v201309\\DateError",
      "DateTimeRange" => "Google_Api_Ads_AdWords_v201309\\DateTimeRange",
      "DistinctError" => "Google_Api_Ads_AdWords_v201309\\DistinctError",
      "IdError" => "Google_Api_Ads_AdWords_v201309\\IdError",
      "InternalApiError" => "Google_Api_Ads_AdWords_v201309\\InternalApiError",
      "NotEmptyError" => "Google_Api_Ads_AdWords_v201309\\NotEmptyError",
      "NotWhitelistedError" => "Google_Api_Ads_AdWords_v201309\\NotWhitelistedError",
      "QuotaCheckError" => "Google_Api_Ads_AdWords_v201309\\QuotaCheckError",
      "RangeError" => "Google_Api_Ads_AdWords_v201309\\RangeError",
      "RateExceededError" => "Google_Api_Ads_AdWords_v201309\\RateExceededError",
      "ReadOnlyError" => "Google_Api_Ads_AdWords_v201309\\ReadOnlyError",
      "RequestError" => "Google_Api_Ads_AdWords_v201309\\RequestError",
      "RequiredError" => "Google_Api_Ads_AdWords_v201309\\RequiredError",
      "SizeLimitError" => "Google_Api_Ads_AdWords_v201309\\SizeLimitError",
      "SoapHeader" => "Google_Api_Ads_AdWords_v201309\\SoapRequestHeader",
      "SoapResponseHeader" => "Google_Api_Ads_AdWords_v201309\\SoapResponseHeader",
      "StringLengthError" => "Google_Api_Ads_AdWords_v201309\\StringLengthError",
      "DatabaseError" => "Google_Api_Ads_AdWords_v201309\\DatabaseError",
      "ApiError" => "Google_Api_Ads_AdWords_v201309\\ApiError",
      "ApiException" => "Google_Api_Ads_AdWords_v201309\\ApiException",
      "ApplicationException" => "Google_Api_Ads_AdWords_v201309\\ApplicationException",
      "AuthenticationError.Reason" => "Google_Api_Ads_AdWords_v201309\\AuthenticationErrorReason",
      "AuthorizationError.Reason" => "Google_Api_Ads_AdWords_v201309\\AuthorizationErrorReason",
      "ClientTermsError.Reason" => "Google_Api_Ads_AdWords_v201309\\ClientTermsErrorReason",
      "DatabaseError.Reason" => "Google_Api_Ads_AdWords_v201309\\DatabaseErrorReason",
      "DateError.Reason" => "Google_Api_Ads_AdWords_v201309\\DateErrorReason",
      "DistinctError.Reason" => "Google_Api_Ads_AdWords_v201309\\DistinctErrorReason",
      "IdError.Reason" => "Google_Api_Ads_AdWords_v201309\\IdErrorReason",
      "InternalApiError.Reason" => "Google_Api_Ads_AdWords_v201309\\InternalApiErrorReason",
      "NotEmptyError.Reason" => "Google_Api_Ads_AdWords_v201309\\NotEmptyErrorReason",
      "NotWhitelistedError.Reason" => "Google_Api_Ads_AdWords_v201309\\NotWhitelistedErrorReason",
      "QuotaCheckError.Reason" => "Google_Api_Ads_AdWords_v201309\\QuotaCheckErrorReason",
      "RangeError.Reason" => "Google_Api_Ads_AdWords_v201309\\RangeErrorReason",
      "RateExceededError.Reason" => "Google_Api_Ads_AdWords_v201309\\RateExceededErrorReason",
      "ReadOnlyError.Reason" => "Google_Api_Ads_AdWords_v201309\\ReadOnlyErrorReason",
      "RequestError.Reason" => "Google_Api_Ads_AdWords_v201309\\RequestErrorReason",
      "RequiredError.Reason" => "Google_Api_Ads_AdWords_v201309\\RequiredErrorReason",
      "SizeLimitError.Reason" => "Google_Api_Ads_AdWords_v201309\\SizeLimitErrorReason",
      "StringLengthError.Reason" => "Google_Api_Ads_AdWords_v201309\\StringLengthErrorReason",
      "AdGroupChangeData" => "Google_Api_Ads_AdWords_v201309\\AdGroupChangeData",
      "CampaignChangeData" => "Google_Api_Ads_AdWords_v201309\\CampaignChangeData",
      "CustomerSyncError" => "Google_Api_Ads_AdWords_v201309\\CustomerSyncError",
      "FeedChangeData" => "Google_Api_Ads_AdWords_v201309\\FeedChangeData",
      "CustomerChangeData" => "Google_Api_Ads_AdWords_v201309\\CustomerChangeData",
      "CustomerSyncSelector" => "Google_Api_Ads_AdWords_v201309\\CustomerSyncSelector",
      "ChangeStatus" => "Google_Api_Ads_AdWords_v201309\\ChangeStatus",
      "CustomerSyncError.Reason" => "Google_Api_Ads_AdWords_v201309\\CustomerSyncErrorReason",
      "get" => "Google_Api_Ads_AdWords_v201309\\CustomerSyncServiceGet",
      "getResponse" => "Google_Api_Ads_AdWords_v201309\\CustomerSyncServiceGetResponse",
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
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns information about changed entities inside a customer's account.
     * 
     * @param selector Specifies the filter for selecting changehistory events for a customer.
     * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
     * changed at each level.  All Campaigns that are requested in the selector will be returned,
     * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
     */
    public function get($selector) {
      $args = new CustomerSyncServiceGet($selector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
  }
}

