<?php
/**
 * Contains all client objects for the AdParamService
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParam", false)) {
  /**
   * Represents an ad parameter.  Use ad parameters to update numeric values
   * (such as prices or inventory levels) in any line of a text ad, including
   * the destination URL. You can set two <code>AdParam</code> objects
   * (one for each value of {@link #paramIndex}) per ad group
   * <a href="AdGroupCriterionService.Keyword.html">Keyword</a>
   * criterion.
   * <p>When setting or removing an <code>AdParam</code>, it is uniquely
   * identified by the combination of these three fields:</p>
   * <ul>
   * <li><code>adGroupId</code></li>
   * <li><code>criterionId</code></li>
   * <li><code>paramIndex</code></li>
   * </ul>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParam {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdParam";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var integer
     */
    public $criterionId;

    /**
     * @access public
     * @var string
     */
    public $insertionText;

    /**
     * @access public
     * @var integer
     */
    public $paramIndex;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $criterionId = null, $insertionText = null, $paramIndex = null) {
      $this->adGroupId = $adGroupId;
      $this->criterionId = $criterionId;
      $this->insertionText = $insertionText;
      $this->paramIndex = $paramIndex;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParamPage", false)) {
  /**
   * Represents a page of AdParams returned by the {@link AdParamService}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamPage {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdParamPage";

    /**
     * @access public
     * @var AdParam[]
     */
    public $entries;

    /**
     * @access public
     * @var integer
     */
    public $totalNumEntries;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($entries = null, $totalNumEntries = null) {
      $this->entries = $entries;
      $this->totalNumEntries = $totalNumEntries;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DateRange", false)) {
  /**
   * Represents a range of dates that has either an upper or a lower bound.
   * The format for the date is YYYYMMDD.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DateRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DateRange";

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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Operation", false)) {
  /**
   * This represents an operation that includes an operator and an operand
   * specified type.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Operation";

    /**
     * @access public
     * @var tnsOperator
     */
    public $operator;

    /**
     * @access public
     * @var string
     */
    public $OperationType;
    private $_parameterMap = array(
      "Operation.Type" => "OperationType",
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

    public function __construct($operator = null, $OperationType = null) {
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OrderBy", false)) {
  /**
   * Specifies how the resulting information should be sorted.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OrderBy {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OrderBy";

    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsSortOrder
     */
    public $sortOrder;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($field = null, $sortOrder = null) {
      $this->field = $field;
      $this->sortOrder = $sortOrder;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Paging", false)) {
  /**
   * Specifies the page of results to return in the response. A page is specified
   * by the result position to start at and the maximum number of results to
   * return.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Paging {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Paging";

    /**
     * @access public
     * @var integer
     */
    public $startIndex;

    /**
     * @access public
     * @var integer
     */
    public $numberResults;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($startIndex = null, $numberResults = null) {
      $this->startIndex = $startIndex;
      $this->numberResults = $numberResults;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\PolicyViolationErrorPart", false)) {
  /**
   * Points to a substring within an ad field or criterion.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PolicyViolationErrorPart {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "PolicyViolationError.Part";

    /**
     * @access public
     * @var integer
     */
    public $index;

    /**
     * @access public
     * @var integer
     */
    public $length;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($index = null, $length = null) {
      $this->index = $index;
      $this->length = $length;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\PolicyViolationKey", false)) {
  /**
   * Key of the violation. The key is used for referring to a violation when
   * filing an exemption request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PolicyViolationKey {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "PolicyViolationKey";

    /**
     * @access public
     * @var string
     */
    public $policyName;

    /**
     * @access public
     * @var string
     */
    public $violatingText;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($policyName = null, $violatingText = null) {
      $this->policyName = $policyName;
      $this->violatingText = $violatingText;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Predicate", false)) {
  /**
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Predicate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Predicate";

    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsPredicateOperator
     */
    public $operator;

    /**
     * @access public
     * @var string[]
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

    public function __construct($field = null, $operator = null, $values = null) {
      $this->field = $field;
      $this->operator = $operator;
      $this->values = $values;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
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
   * Defines the elements within the header of a SOAP response.
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
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
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
   * Base class for exceptions.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Selector", false)) {
  /**
   * A generic selector to specify the type of information to return.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Selector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Selector";

    /**
     * @access public
     * @var string[]
     */
    public $fields;

    /**
     * @access public
     * @var Predicate[]
     */
    public $predicates;

    /**
     * @access public
     * @var DateRange
     */
    public $dateRange;

    /**
     * @access public
     * @var OrderBy[]
     */
    public $ordering;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null) {
      $this->fields = $fields;
      $this->predicates = $predicates;
      $this->dateRange = $dateRange;
      $this->ordering = $ordering;
      $this->paging = $paging;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParamErrorReason", false)) {
  /**
   * The same ad param cannot be specified in multiple operations
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdParamError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdxErrorReason", false)) {
  /**
   * The reasons for the AdX error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdxErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdxError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
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
   * The reasons for the database error.
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
   * Enums for the various reasons an error can be thrown as a result of
   * ClientTerms violation.
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
   * The reasons for the database error.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DistinctErrorReason", false)) {
  /**
   * The reasons for the validation error.
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
   * The reasons for the target error.
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
   * The single reason for the internal API error.
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
   * The reasons for the validation error.
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
   * The single reason for the whitelist error.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperationAccessDeniedReason", false)) {
  /**
   * The reasons for the operation access error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperationAccessDenied.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\Operator", false)) {
  /**
   * This represents an operator that may be presented to an adsapi service.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Operator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Operator";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperatorErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperatorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperatorError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\PredicateOperator", false)) {
  /**
   * Defines the valid set of operators.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PredicateOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Predicate.Operator";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
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
   * The reasons for the target error.
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
   * The reason for the rate exceeded error.
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
   * The reasons for the target error.
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
   * Error reason is unknown.
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
   * The reasons for the target error.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SelectorErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SelectorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SelectorError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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
   * The reasons for Ad Scheduling errors.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SortOrder", false)) {
  /**
   * Possible orders of sorting.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SortOrder {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SortOrder";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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
   * The reasons for the target error.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParamServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the ad parameters that match the criteria specified in the
   * selector.
   * 
   * @param serviceSelector Specifies which ad parameters to return.
   * @return A list of ad parameters.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($serviceSelector = null) {
      $this->serviceSelector = $serviceSelector;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParamServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdParamPage
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParamServiceMutate", false)) {
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, REMOVE.</span>
   * 
   * 
   * 
   * Sets and removes ad parameters.
   * <p class="note"><b>Note:</b> {@code ADD} is not supported. Use {@code SET}
   * for new ad parameters.</p>
   * 
   * <ul class="nolist">
   * <li>{@code SET}: Creates or updates an ad parameter, setting the new
   * parameterized value for the given ad group / keyword pair.
   * <li>{@code REMOVE}: Removes an ad parameter. The <code><var>default-value</var>
   * </code> specified in the ad text will be used.</li>
   * </ul>
   * 
   * @param operations The operations to perform.
   * @return A list of ad parameters, where each entry in the list is the
   * result of applying the operation in the input list with the same index.
   * For a {@code SET} operation, the returned ad parameter will contain the
   * updated values. For a {@code REMOVE} operation, the returned ad parameter
   * will simply be the ad parameter that was removed.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamServiceMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdParamOperation[]
     */
    public $operations;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operations = null) {
      $this->operations = $operations;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParamServiceMutateResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamServiceMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdParam[]
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParamError", false)) {
  /**
   * Errors for AdParamService.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdParamError";

    /**
     * @access public
     * @var tnsAdParamErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParamOperation", false)) {
  /**
   * Represents an operation on an {@link AdParam}. The supported operators
   * are {@code SET} and {@code REMOVE}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdParamOperation";

    /**
     * @access public
     * @var AdParam
     */
    public $operand;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operand = null, $operator = null, $OperationType = null) {
      parent::__construct();
      $this->operand = $operand;
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdxError", false)) {
  /**
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdxError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdxError";

    /**
     * @access public
     * @var tnsAdxErrorReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
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
   * Errors encountered when trying to authorize a user.
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
   * Error due to user not accepting the AdWords terms of service.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\DistinctError", false)) {
  /**
   * Errors related to distinct ids or content.
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
   * Errors associated with the ids.
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
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
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
   * Errors corresponding with violation of a NOT EMPTY check.
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
   * Indicates that the customer is not whitelisted for accessing the API.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperationAccessDenied", false)) {
  /**
   * Operation not permitted due to the invoked service's access policy.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperationAccessDenied";

    /**
     * @access public
     * @var tnsOperationAccessDeniedReason
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\OperatorError", false)) {
  /**
   * Errors due to the use of unsupported operations.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperatorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperatorError";

    /**
     * @access public
     * @var tnsOperatorErrorReason
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
   * Encapsulates the errors thrown during developer quota checks.
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
   * A list of all errors associated with the Range constraint.
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
   * Signals that a call failed because a measured rate exceeded.
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
   * Errors from attempting to write to read-only fields.
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
   * Encapsulates the generic errors thrown when there's an error with user
   * request.
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
   * Errors due to missing required field.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\SelectorError", false)) {
  /**
   * Represents possible error codes for {@link Selector}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SelectorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SelectorError";

    /**
     * @access public
     * @var tnsSelectorErrorReason
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
   * Indicates that the number of entries in the request or response exceeds the system limit.
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
   * Errors associated with the length of the given string being
   * out of bounds.
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
   * Errors that are thrown due to a database access problem.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\PolicyViolationError", false)) {
  /**
   * Represents violations of a single policy by some text in a field.
   * 
   * Violations of a single policy by the same string in multiple places
   * within a field is reported in one instance of this class and only one
   * exemption needs to be filed.
   * Violations of a single policy by two different strings is reported
   * as two separate instances of this class.
   * 
   * e.g. If 'ACME' violates 'capitalization' and occurs twice in a text ad it
   * would be represented by one instance. If the ad also contains 'INC' which
   * also violates 'capitalization' it would be represented in a separate
   * instance.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PolicyViolationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "PolicyViolationError";

    /**
     * @access public
     * @var PolicyViolationKey
     */
    public $key;

    /**
     * @access public
     * @var string
     */
    public $externalPolicyName;

    /**
     * @access public
     * @var string
     */
    public $externalPolicyUrl;

    /**
     * @access public
     * @var string
     */
    public $externalPolicyDescription;

    /**
     * @access public
     * @var boolean
     */
    public $isExemptable;

    /**
     * @access public
     * @var PolicyViolationErrorPart[]
     */
    public $violatingParts;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $externalPolicyName = null, $externalPolicyUrl = null, $externalPolicyDescription = null, $isExemptable = null, $violatingParts = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->key = $key;
      $this->externalPolicyName = $externalPolicyName;
      $this->externalPolicyUrl = $externalPolicyUrl;
      $this->externalPolicyDescription = $externalPolicyDescription;
      $this->isExemptable = $isExemptable;
      $this->violatingParts = $violatingParts;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google_Api_Ads_AdWords_v201309\\ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
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

if (!class_exists("Google_Api_Ads_AdWords_v201309\\AdParamPolicyError", false)) {
  /**
   * Policy violation for an AdParam.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamPolicyError extends PolicyViolationError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdParamPolicyError";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $externalPolicyName = null, $externalPolicyUrl = null, $externalPolicyDescription = null, $isExemptable = null, $violatingParts = null) {
      parent::__construct();
      $this->key = $key;
      $this->externalPolicyName = $externalPolicyName;
      $this->externalPolicyUrl = $externalPolicyUrl;
      $this->externalPolicyDescription = $externalPolicyDescription;
      $this->isExemptable = $isExemptable;
      $this->violatingParts = $violatingParts;
    }

  }
}

if (!class_exists("AdParamService", false)) {
  /**
   * AdParamService
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdParamService extends Google_Api_Ads_AdWords_v201309\Google_Api_Ads_AdWords_Lib_AdWordsSoapClient {

    const SERVICE_NAME = "AdParamService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201309/AdParamService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/AdParamService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdParam" => "Google_Api_Ads_AdWords_v201309\\AdParam",
      "AdParamError" => "Google_Api_Ads_AdWords_v201309\\AdParamError",
      "AdParamOperation" => "Google_Api_Ads_AdWords_v201309\\AdParamOperation",
      "AdParamPage" => "Google_Api_Ads_AdWords_v201309\\AdParamPage",
      "AdParamPolicyError" => "Google_Api_Ads_AdWords_v201309\\AdParamPolicyError",
      "AdxError" => "Google_Api_Ads_AdWords_v201309\\AdxError",
      "AuthenticationError" => "Google_Api_Ads_AdWords_v201309\\AuthenticationError",
      "AuthorizationError" => "Google_Api_Ads_AdWords_v201309\\AuthorizationError",
      "ClientTermsError" => "Google_Api_Ads_AdWords_v201309\\ClientTermsError",
      "DateRange" => "Google_Api_Ads_AdWords_v201309\\DateRange",
      "DistinctError" => "Google_Api_Ads_AdWords_v201309\\DistinctError",
      "IdError" => "Google_Api_Ads_AdWords_v201309\\IdError",
      "InternalApiError" => "Google_Api_Ads_AdWords_v201309\\InternalApiError",
      "NotEmptyError" => "Google_Api_Ads_AdWords_v201309\\NotEmptyError",
      "NotWhitelistedError" => "Google_Api_Ads_AdWords_v201309\\NotWhitelistedError",
      "NullError" => "Google_Api_Ads_AdWords_v201309\\NullError",
      "Operation" => "Google_Api_Ads_AdWords_v201309\\Operation",
      "OperationAccessDenied" => "Google_Api_Ads_AdWords_v201309\\OperationAccessDenied",
      "OperatorError" => "Google_Api_Ads_AdWords_v201309\\OperatorError",
      "OrderBy" => "Google_Api_Ads_AdWords_v201309\\OrderBy",
      "Paging" => "Google_Api_Ads_AdWords_v201309\\Paging",
      "PolicyViolationError.Part" => "Google_Api_Ads_AdWords_v201309\\PolicyViolationErrorPart",
      "PolicyViolationKey" => "Google_Api_Ads_AdWords_v201309\\PolicyViolationKey",
      "Predicate" => "Google_Api_Ads_AdWords_v201309\\Predicate",
      "QuotaCheckError" => "Google_Api_Ads_AdWords_v201309\\QuotaCheckError",
      "RangeError" => "Google_Api_Ads_AdWords_v201309\\RangeError",
      "RateExceededError" => "Google_Api_Ads_AdWords_v201309\\RateExceededError",
      "ReadOnlyError" => "Google_Api_Ads_AdWords_v201309\\ReadOnlyError",
      "RequestError" => "Google_Api_Ads_AdWords_v201309\\RequestError",
      "RequiredError" => "Google_Api_Ads_AdWords_v201309\\RequiredError",
      "SelectorError" => "Google_Api_Ads_AdWords_v201309\\SelectorError",
      "SizeLimitError" => "Google_Api_Ads_AdWords_v201309\\SizeLimitError",
      "SoapHeader" => "Google_Api_Ads_AdWords_v201309\\SoapRequestHeader",
      "SoapResponseHeader" => "Google_Api_Ads_AdWords_v201309\\SoapResponseHeader",
      "StringLengthError" => "Google_Api_Ads_AdWords_v201309\\StringLengthError",
      "DatabaseError" => "Google_Api_Ads_AdWords_v201309\\DatabaseError",
      "PolicyViolationError" => "Google_Api_Ads_AdWords_v201309\\PolicyViolationError",
      "ApiError" => "Google_Api_Ads_AdWords_v201309\\ApiError",
      "ApiException" => "Google_Api_Ads_AdWords_v201309\\ApiException",
      "ApplicationException" => "Google_Api_Ads_AdWords_v201309\\ApplicationException",
      "Selector" => "Google_Api_Ads_AdWords_v201309\\Selector",
      "AdParamError.Reason" => "Google_Api_Ads_AdWords_v201309\\AdParamErrorReason",
      "AdxError.Reason" => "Google_Api_Ads_AdWords_v201309\\AdxErrorReason",
      "AuthenticationError.Reason" => "Google_Api_Ads_AdWords_v201309\\AuthenticationErrorReason",
      "AuthorizationError.Reason" => "Google_Api_Ads_AdWords_v201309\\AuthorizationErrorReason",
      "ClientTermsError.Reason" => "Google_Api_Ads_AdWords_v201309\\ClientTermsErrorReason",
      "DatabaseError.Reason" => "Google_Api_Ads_AdWords_v201309\\DatabaseErrorReason",
      "DistinctError.Reason" => "Google_Api_Ads_AdWords_v201309\\DistinctErrorReason",
      "IdError.Reason" => "Google_Api_Ads_AdWords_v201309\\IdErrorReason",
      "InternalApiError.Reason" => "Google_Api_Ads_AdWords_v201309\\InternalApiErrorReason",
      "NotEmptyError.Reason" => "Google_Api_Ads_AdWords_v201309\\NotEmptyErrorReason",
      "NotWhitelistedError.Reason" => "Google_Api_Ads_AdWords_v201309\\NotWhitelistedErrorReason",
      "NullError.Reason" => "Google_Api_Ads_AdWords_v201309\\NullErrorReason",
      "OperationAccessDenied.Reason" => "Google_Api_Ads_AdWords_v201309\\OperationAccessDeniedReason",
      "Operator" => "Google_Api_Ads_AdWords_v201309\\Operator",
      "OperatorError.Reason" => "Google_Api_Ads_AdWords_v201309\\OperatorErrorReason",
      "Predicate.Operator" => "Google_Api_Ads_AdWords_v201309\\PredicateOperator",
      "QuotaCheckError.Reason" => "Google_Api_Ads_AdWords_v201309\\QuotaCheckErrorReason",
      "RangeError.Reason" => "Google_Api_Ads_AdWords_v201309\\RangeErrorReason",
      "RateExceededError.Reason" => "Google_Api_Ads_AdWords_v201309\\RateExceededErrorReason",
      "ReadOnlyError.Reason" => "Google_Api_Ads_AdWords_v201309\\ReadOnlyErrorReason",
      "RequestError.Reason" => "Google_Api_Ads_AdWords_v201309\\RequestErrorReason",
      "RequiredError.Reason" => "Google_Api_Ads_AdWords_v201309\\RequiredErrorReason",
      "SelectorError.Reason" => "Google_Api_Ads_AdWords_v201309\\SelectorErrorReason",
      "SizeLimitError.Reason" => "Google_Api_Ads_AdWords_v201309\\SizeLimitErrorReason",
      "SortOrder" => "Google_Api_Ads_AdWords_v201309\\SortOrder",
      "StringLengthError.Reason" => "Google_Api_Ads_AdWords_v201309\\StringLengthErrorReason",
      "get" => "Google_Api_Ads_AdWords_v201309\\AdParamServiceGet",
      "getResponse" => "Google_Api_Ads_AdWords_v201309\\AdParamServiceGetResponse",
      "mutate" => "Google_Api_Ads_AdWords_v201309\\AdParamServiceMutate",
      "mutateResponse" => "Google_Api_Ads_AdWords_v201309\\AdParamServiceMutateResponse",
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
     * Returns the ad parameters that match the criteria specified in the
     * selector.
     * 
     * @param serviceSelector Specifies which ad parameters to return.
     * @return A list of ad parameters.
     */
    public function get($serviceSelector) {
      $args = new AdParamServiceGet($serviceSelector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, REMOVE.</span>
     * 
     * 
     * 
     * Sets and removes ad parameters.
     * <p class="note"><b>Note:</b> {@code ADD} is not supported. Use {@code SET}
     * for new ad parameters.</p>
     * 
     * <ul class="nolist">
     * <li>{@code SET}: Creates or updates an ad parameter, setting the new
     * parameterized value for the given ad group / keyword pair.
     * <li>{@code REMOVE}: Removes an ad parameter. The <code><var>default-value</var>
     * </code> specified in the ad text will be used.</li>
     * </ul>
     * 
     * @param operations The operations to perform.
     * @return A list of ad parameters, where each entry in the list is the
     * result of applying the operation in the input list with the same index.
     * For a {@code SET} operation, the returned ad parameter will contain the
     * updated values. For a {@code REMOVE} operation, the returned ad parameter
     * will simply be the ad parameter that was removed.
     */
    public function mutate($operations) {
      $args = new AdParamServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));
      return $result->rval;
    }
  }
}

