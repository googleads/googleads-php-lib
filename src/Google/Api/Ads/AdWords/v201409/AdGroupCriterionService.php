<?php
/**
 * Contains all client objects for the AdGroupCriterionService
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
 * @package    Google\Api\Ads\AdWords\v201409
 * @subpackage v201409
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
namespace Google\Api\Ads\AdWords\v201409;

require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterion", false)) {
  /**
   * Represents a criterion in an ad group, used with AdGroupCriterionService.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterion";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var tnsCriterionUse
     */
    public $criterionUse;

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * @access public
     * @var string
     */
    public $AdGroupCriterionType;
    private $_parameterMap = array(
      "AdGroupCriterion.Type" => "AdGroupCriterionType",
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

    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, $forwardCompatibilityMap = null, $AdGroupCriterionType = null) {
      $this->adGroupId = $adGroupId;
      $this->criterionUse = $criterionUse;
      $this->criterion = $criterion;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->AdGroupCriterionType = $AdGroupCriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionExperimentBidMultiplier", false)) {
  /**
   * Bid multiplier used to modify the bid of a criterion while running
   * an experiment.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionExperimentBidMultiplier {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterionExperimentBidMultiplier";

    /**
     * @access public
     * @var string
     */
    public $AdGroupCriterionExperimentBidMultiplierType;
    private $_parameterMap = array(
      "AdGroupCriterionExperimentBidMultiplier.Type" => "AdGroupCriterionExperimentBidMultiplierType",
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

    public function __construct($AdGroupCriterionExperimentBidMultiplierType = null) {
      $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationError", false)) {
  /**
   * Errors encountered when trying to authorize a user.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Bid", false)) {
  /**
   * Represents a bid of a certain amount.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Bid {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Bid";

    /**
     * @access public
     * @var Money
     */
    public $amount;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($amount = null) {
      $this->amount = $amount;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BidMultiplier", false)) {
  /**
   * Represents a multiplier to modify a bid. The final value after
   * modification is represented by the multiplied bid value.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BidMultiplier {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BidMultiplier";

    /**
     * @access public
     * @var double
     */
    public $multiplier;

    /**
     * @access public
     * @var Bid
     */
    public $multipliedBid;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($multiplier = null, $multipliedBid = null) {
      $this->multiplier = $multiplier;
      $this->multipliedBid = $multipliedBid;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddableAdGroupCriterion", false)) {
  /**
   * A biddable (positive) criterion in an adgroup.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddableAdGroupCriterion extends AdGroupCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddableAdGroupCriterion";

    /**
     * @access public
     * @var tnsUserStatus
     */
    public $userStatus;

    /**
     * @access public
     * @var tnsSystemServingStatus
     */
    public $systemServingStatus;

    /**
     * @access public
     * @var tnsApprovalStatus
     */
    public $approvalStatus;

    /**
     * @access public
     * @var string[]
     */
    public $disapprovalReasons;

    /**
     * @access public
     * @var string
     */
    public $destinationUrl;

    /**
     * @access public
     * @var BiddableAdGroupCriterionExperimentData
     */
    public $experimentData;

    /**
     * @access public
     * @var Bid
     */
    public $firstPageCpc;

    /**
     * @access public
     * @var Bid
     */
    public $topOfPageCpc;

    /**
     * @access public
     * @var QualityInfo
     */
    public $qualityInfo;

    /**
     * @access public
     * @var BiddingStrategyConfiguration
     */
    public $biddingStrategyConfiguration;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userStatus = null, $systemServingStatus = null, $approvalStatus = null, $disapprovalReasons = null, $destinationUrl = null, $experimentData = null, $firstPageCpc = null, $topOfPageCpc = null, $qualityInfo = null, $biddingStrategyConfiguration = null, $bidModifier = null, $adGroupId = null, $criterionUse = null, $criterion = null, $forwardCompatibilityMap = null, $AdGroupCriterionType = null) {
      parent::__construct();
      $this->userStatus = $userStatus;
      $this->systemServingStatus = $systemServingStatus;
      $this->approvalStatus = $approvalStatus;
      $this->disapprovalReasons = $disapprovalReasons;
      $this->destinationUrl = $destinationUrl;
      $this->experimentData = $experimentData;
      $this->firstPageCpc = $firstPageCpc;
      $this->topOfPageCpc = $topOfPageCpc;
      $this->qualityInfo = $qualityInfo;
      $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
      $this->bidModifier = $bidModifier;
      $this->adGroupId = $adGroupId;
      $this->criterionUse = $criterionUse;
      $this->criterion = $criterion;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->AdGroupCriterionType = $AdGroupCriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddableAdGroupCriterionExperimentData", false)) {
  /**
   * Data associated with an advertiser experiment for this {@link BiddableAdGroupCriterion}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddableAdGroupCriterionExperimentData {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddableAdGroupCriterionExperimentData";

    /**
     * @access public
     * @var integer
     */
    public $experimentId;

    /**
     * @access public
     * @var tnsExperimentDeltaStatus
     */
    public $experimentDeltaStatus;

    /**
     * @access public
     * @var tnsExperimentDataStatus
     */
    public $experimentDataStatus;

    /**
     * @access public
     * @var AdGroupCriterionExperimentBidMultiplier
     */
    public $experimentBidMultiplier;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null, $experimentBidMultiplier = null) {
      $this->experimentId = $experimentId;
      $this->experimentDeltaStatus = $experimentDeltaStatus;
      $this->experimentDataStatus = $experimentDataStatus;
      $this->experimentBidMultiplier = $experimentBidMultiplier;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddingError", false)) {
  /**
   * Represents bidding errors.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddingError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddingError";

    /**
     * @access public
     * @var tnsBiddingErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddingErrors", false)) {
  /**
   * Represents error codes for bidding strategy entities.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddingErrors extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddingErrors";

    /**
     * @access public
     * @var tnsBiddingErrorsReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddingScheme", false)) {
  /**
   * Base class for all bidding schemes.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddingScheme";

    /**
     * @access public
     * @var string
     */
    public $BiddingSchemeType;
    private $_parameterMap = array(
      "BiddingScheme.Type" => "BiddingSchemeType",
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

    public function __construct($BiddingSchemeType = null) {
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddingStrategyConfiguration", false)) {
  /**
   * Encapsulates the information about bids and bidding strategies.
   * 
   * Bidding Strategy can be set on campaigns, ad groups or ad group criteria.
   * A bidding strategy can be set using one of the following:
   * <ul>
   * <li>{@linkplain BiddingStrategyConfiguration#biddingScheme bidding scheme}</li>
   * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyType bidding strategy type}</li>
   * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyId bidding strategy ID} for
   * flexible bid strategies.</li>
   * </ul>
   * If the bidding strategy type is used, then schemes are created using default values.
   * 
   * Bids can be set only on ad groups and ad group criteria. They cannot be set on campaigns.
   * Multiple bids can be set at the same time. Only the bids that apply to the campaign's
   * {@linkplain Campaign#biddingStrategyConfiguration bidding strategy} will be used.
   * 
   * For more information on flexible bidding, visit the
   * <a href="https://support.google.com/adwords/answer/2979071">Help Center</a>.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddingStrategyConfiguration {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddingStrategyConfiguration";

    /**
     * @access public
     * @var integer
     */
    public $biddingStrategyId;

    /**
     * @access public
     * @var string
     */
    public $biddingStrategyName;

    /**
     * @access public
     * @var tnsBiddingStrategyType
     */
    public $biddingStrategyType;

    /**
     * @access public
     * @var tnsBiddingStrategySource
     */
    public $biddingStrategySource;

    /**
     * @access public
     * @var BiddingScheme
     */
    public $biddingScheme;

    /**
     * @access public
     * @var Bids[]
     */
    public $bids;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($biddingStrategyId = null, $biddingStrategyName = null, $biddingStrategyType = null, $biddingStrategySource = null, $biddingScheme = null, $bids = null) {
      $this->biddingStrategyId = $biddingStrategyId;
      $this->biddingStrategyName = $biddingStrategyName;
      $this->biddingStrategyType = $biddingStrategyType;
      $this->biddingStrategySource = $biddingStrategySource;
      $this->biddingScheme = $biddingScheme;
      $this->bids = $bids;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Bids", false)) {
  /**
   * Base class for all bids.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Bids";

    /**
     * @access public
     * @var string
     */
    public $BidsType;
    private $_parameterMap = array(
      "Bids.Type" => "BidsType",
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

    public function __construct($BidsType = null) {
      $this->BidsType = $BidsType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BudgetOptimizerBiddingScheme", false)) {
  /**
   * In budget optimizer, Google automatically places bids for the user based on
   * their daily/monthly budget.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BudgetOptimizerBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BudgetOptimizerBiddingScheme";

    /**
     * @access public
     * @var Money
     */
    public $bidCeiling;

    /**
     * @access public
     * @var boolean
     */
    public $enhancedCpcEnabled;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($bidCeiling = null, $enhancedCpcEnabled = null, $BiddingSchemeType = null) {
      parent::__construct();
      $this->bidCeiling = $bidCeiling;
      $this->enhancedCpcEnabled = $enhancedCpcEnabled;
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsError", false)) {
  /**
   * Error due to user not accepting the AdWords terms of service.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ClientTermsError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ComparableValue", false)) {
  /**
   * Comparable types for constructing ranges with.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ComparableValue";

    /**
     * @access public
     * @var string
     */
    public $ComparableValueType;
    private $_parameterMap = array(
      "ComparableValue.Type" => "ComparableValueType",
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

    public function __construct($ComparableValueType = null) {
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ConversionOptimizerBiddingScheme", false)) {
  /**
   * Conversion optimizer bidding strategy helps you maximize your return on investment
   * (ROI) by automatically getting you the most possible conversions for your budget.
   * 
   * <p class="warning">{@code pricingMode} currently defaults to {@code CLICKS} and
   * cannot be changed.</p>
   * 
   * <p>Note that campaigns must meet <a
   * href="https://support.google.com/adwords/answer/2471188#CORequirements">
   * specific eligibility requirements</a> before they can use the
   * <code>ConversionOptimizer</code> bidding strategy.</p>
   * 
   * <p>For more information on conversion optimizer, visit the
   * <a href="https://support.google.com/adwords/answer/2471188"
   * >Conversion Optimizer help center</a>.</p>
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ConversionOptimizerBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ConversionOptimizerBiddingScheme";

    /**
     * @access public
     * @var tnsConversionOptimizerBiddingSchemePricingMode
     */
    public $pricingMode;

    /**
     * @access public
     * @var tnsConversionOptimizerBiddingSchemeBidType
     */
    public $bidType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($pricingMode = null, $bidType = null, $BiddingSchemeType = null) {
      parent::__construct();
      $this->pricingMode = $pricingMode;
      $this->bidType = $bidType;
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CpaBid", false)) {
  /**
   * CPA Bids.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CpaBid extends Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CpaBid";

    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($bid = null, $BidsType = null) {
      parent::__construct();
      $this->bid = $bid;
      $this->BidsType = $BidsType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CpcBid", false)) {
  /**
   * Manual click based bids.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CpcBid extends Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CpcBid";

    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * @access public
     * @var Money
     */
    public $contentBid;

    /**
     * @access public
     * @var tnsBidSource
     */
    public $cpcBidSource;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($bid = null, $contentBid = null, $cpcBidSource = null, $BidsType = null) {
      parent::__construct();
      $this->bid = $bid;
      $this->contentBid = $contentBid;
      $this->cpcBidSource = $cpcBidSource;
      $this->BidsType = $BidsType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CpmBid", false)) {
  /**
   * Manual impression based bids.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CpmBid extends Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CpmBid";

    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * @access public
     * @var tnsBidSource
     */
    public $cpmBidSource;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($bid = null, $cpmBidSource = null, $BidsType = null) {
      parent::__construct();
      $this->bid = $bid;
      $this->cpmBidSource = $cpmBidSource;
      $this->BidsType = $BidsType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Criterion", false)) {
  /**
   * Represents a criterion (such as a keyword, placement, or vertical).
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Criterion";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var tnsCriterionType
     */
    public $type;

    /**
     * @access public
     * @var string
     */
    public $CriterionType;
    private $_parameterMap = array(
      "Criterion.Type" => "CriterionType",
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

    public function __construct($id = null, $type = null, $CriterionType = null) {
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CriterionError", false)) {
  /**
   * Error class used for reporting criteria related errors.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CriterionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CriterionError";

    /**
     * @access public
     * @var tnsCriterionErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CriterionParameter", false)) {
  /**
   * Base type of criterion parameters.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CriterionParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CriterionParameter";

    /**
     * @access public
     * @var string
     */
    public $CriterionParameterType;
    private $_parameterMap = array(
      "CriterionParameter.Type" => "CriterionParameterType",
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

    public function __construct($CriterionParameterType = null) {
      $this->CriterionParameterType = $CriterionParameterType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DateError", false)) {
  /**
   * Errors associated with invalid dates and date ranges.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DateError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DateRange", false)) {
  /**
   * Represents a range of dates that has either an upper or a lower bound.
   * The format for the date is YYYYMMDD.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DateRange {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DistinctError", false)) {
  /**
   * Errors related to distinct ids or content.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EnhancedCpcBiddingScheme", false)) {
  /**
   * Enhanced CPC is a bidding strategy that raises your bids for clicks that seem more likely to
   * lead to a conversion and lowers them for clicks where they seem less likely.
   * 
   * This bidding scheme does not support criteria level bidding strategy overrides.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EnhancedCpcBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "EnhancedCpcBiddingScheme";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($BiddingSchemeType = null) {
      parent::__construct();
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityAccessDenied", false)) {
  /**
   * Reports permission problems trying to access an entity.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "EntityAccessDenied";

    /**
     * @access public
     * @var tnsEntityAccessDeniedReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceeded", false)) {
  /**
   * Signals that an entity count limit was exceeded for some level.
   * For example, too many criteria for a campaign.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityCountLimitExceeded extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "EntityCountLimitExceeded";

    /**
     * @access public
     * @var tnsEntityCountLimitExceededReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $enclosingId;

    /**
     * @access public
     * @var integer
     */
    public $limit;

    /**
     * @access public
     * @var string
     */
    public $accountLimitType;

    /**
     * @access public
     * @var integer
     */
    public $existingCount;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->enclosingId = $enclosingId;
      $this->limit = $limit;
      $this->accountLimitType = $accountLimitType;
      $this->existingCount = $existingCount;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFound", false)) {
  /**
   * An id did not correspond to an entity, or it referred to an entity which does not belong to the
   * customer.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityNotFound extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "EntityNotFound";

    /**
     * @access public
     * @var tnsEntityNotFoundReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ExemptionRequest", false)) {
  /**
   * A request to be exempted from a {@link PolicyViolationError}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ExemptionRequest {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ExemptionRequest";

    /**
     * @access public
     * @var PolicyViolationKey
     */
    public $key;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null) {
      $this->key = $key;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ExperimentError", false)) {
  /**
   * The error reason represented by an enum.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ExperimentError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ExperimentError";

    /**
     * @access public
     * @var tnsExperimentErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ForwardCompatibilityError", false)) {
  /**
   * A ForwardComptibilityError represents possible errors when using the forwardCompatibilityMap
   * in some of the common services.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ForwardCompatibilityError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ForwardCompatibilityError";

    /**
     * @access public
     * @var tnsForwardCompatibilityErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Gender", false)) {
  /**
   * Represents a Gender criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type can be either targeted or excluded.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Gender extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Gender";

    /**
     * @access public
     * @var tnsGenderGenderType
     */
    public $genderType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($genderType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->genderType = $genderType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\IdError", false)) {
  /**
   * Errors associated with the ids.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class IdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Keyword", false)) {
  /**
   * Represents a keyword.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Keyword extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Keyword";

    /**
     * @access public
     * @var string
     */
    public $text;

    /**
     * @access public
     * @var tnsKeywordMatchType
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

    public function __construct($text = null, $matchType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->text = $text;
      $this->matchType = $matchType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ListReturnValue", false)) {
  /**
   * Base list return value type.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ListReturnValue";

    /**
     * @access public
     * @var string
     */
    public $ListReturnValueType;
    private $_parameterMap = array(
      "ListReturnValue.Type" => "ListReturnValueType",
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

    public function __construct($ListReturnValueType = null) {
      $this->ListReturnValueType = $ListReturnValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ManualCPCAdGroupCriterionExperimentBidMultiplier", false)) {
  /**
   * AdGroupCriterion level bid multiplier used in manual CPC bidding strategies.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ManualCPCAdGroupCriterionExperimentBidMultiplier extends AdGroupCriterionExperimentBidMultiplier {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ManualCPCAdGroupCriterionExperimentBidMultiplier";

    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxCpcMultiplier;

    /**
     * @access public
     * @var tnsMultiplierSource
     */
    public $multiplierSource;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($maxCpcMultiplier = null, $multiplierSource = null, $AdGroupCriterionExperimentBidMultiplierType = null) {
      parent::__construct();
      $this->maxCpcMultiplier = $maxCpcMultiplier;
      $this->multiplierSource = $multiplierSource;
      $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ManualCpcBiddingScheme", false)) {
  /**
   * Manual click based bidding where user pays per click.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ManualCpcBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ManualCpcBiddingScheme";

    /**
     * @access public
     * @var boolean
     */
    public $enhancedCpcEnabled;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($enhancedCpcEnabled = null, $BiddingSchemeType = null) {
      parent::__construct();
      $this->enhancedCpcEnabled = $enhancedCpcEnabled;
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ManualCpmBiddingScheme", false)) {
  /**
   * Manual impression based bidding where user pays per thousand impressions.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ManualCpmBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ManualCpmBiddingScheme";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($BiddingSchemeType = null) {
      parent::__construct();
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\MobileAppCategory", false)) {
  /**
   * Represents the mobile app category to be targeted.
   * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
   * available mobile app categories</a>.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class MobileAppCategory extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "MobileAppCategory";

    /**
     * @access public
     * @var integer
     */
    public $mobileAppCategoryId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($mobileAppCategoryId = null, $displayName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->mobileAppCategoryId = $mobileAppCategoryId;
      $this->displayName = $displayName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\MobileApplication", false)) {
  /**
   * Represents the mobile application to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class MobileApplication extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "MobileApplication";

    /**
     * @access public
     * @var string
     */
    public $appId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($appId = null, $displayName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->appId = $appId;
      $this->displayName = $displayName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Money", false)) {
  /**
   * Represents a money amount.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Money extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Money";

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

    public function __construct($microAmount = null, $ComparableValueType = null) {
      parent::__construct();
      $this->microAmount = $microAmount;
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NegativeAdGroupCriterion", false)) {
  /**
   * A negative criterion in an adgroup.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NegativeAdGroupCriterion extends AdGroupCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "NegativeAdGroupCriterion";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, $forwardCompatibilityMap = null, $AdGroupCriterionType = null) {
      parent::__construct();
      $this->adGroupId = $adGroupId;
      $this->criterionUse = $criterionUse;
      $this->criterion = $criterion;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->AdGroupCriterionType = $AdGroupCriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationError", false)) {
  /**
   * Error associated with creation of new entities.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NewEntityCreationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "NewEntityCreationError";

    /**
     * @access public
     * @var tnsNewEntityCreationErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NumberValue", false)) {
  /**
   * Number value types for constructing number valued ranges.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NumberValue extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "NumberValue";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ComparableValueType = null) {
      parent::__construct();
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Operation", false)) {
  /**
   * This represents an operation that includes an operator and an operand
   * specified type.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDenied", false)) {
  /**
   * Operation not permitted due to the invoked service's access policy.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\OrderBy", false)) {
  /**
   * Specifies how the resulting information should be sorted.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class OrderBy {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Page", false)) {
  /**
   * Contains the results from a get call.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Page";

    /**
     * @access public
     * @var integer
     */
    public $totalNumEntries;

    /**
     * @access public
     * @var string
     */
    public $PageType;
    private $_parameterMap = array(
      "Page.Type" => "PageType",
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

    public function __construct($totalNumEntries = null, $PageType = null) {
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PageOnePromotedBiddingScheme", false)) {
  /**
   * Page-One Promoted bidding scheme, which sets max cpc bids to
   * target impressions on page one or page one promoted slots on google.com.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PageOnePromotedBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "PageOnePromotedBiddingScheme";

    /**
     * @access public
     * @var tnsPageOnePromotedBiddingSchemeStrategyGoal
     */
    public $strategyGoal;

    /**
     * @access public
     * @var Money
     */
    public $bidCeiling;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

    /**
     * @access public
     * @var boolean
     */
    public $bidChangesForRaisesOnly;

    /**
     * @access public
     * @var boolean
     */
    public $raiseBidWhenBudgetConstained;

    /**
     * @access public
     * @var boolean
     */
    public $raiseBidWhenLowQualityScore;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($strategyGoal = null, $bidCeiling = null, $bidModifier = null, $bidChangesForRaisesOnly = null, $raiseBidWhenBudgetConstained = null, $raiseBidWhenLowQualityScore = null, $BiddingSchemeType = null) {
      parent::__construct();
      $this->strategyGoal = $strategyGoal;
      $this->bidCeiling = $bidCeiling;
      $this->bidModifier = $bidModifier;
      $this->bidChangesForRaisesOnly = $bidChangesForRaisesOnly;
      $this->raiseBidWhenBudgetConstained = $raiseBidWhenBudgetConstained;
      $this->raiseBidWhenLowQualityScore = $raiseBidWhenLowQualityScore;
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Paging", false)) {
  /**
   * Specifies the page of results to return in the response. A page is specified
   * by the result position to start at and the maximum number of results to
   * return.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Paging {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PagingError", false)) {
  /**
   * Error codes for pagination.
   * See {@link com.google.ads.api.services.common.pagination.Paging}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PagingError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "PagingError";

    /**
     * @access public
     * @var tnsPagingErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PercentCpaBid", false)) {
  /**
   * Percentage CPA based bidding where user pays a percent of conversions.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PercentCpaBid extends Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "PercentCpaBid";

    /**
     * @access public
     * @var integer
     */
    public $bid;

    /**
     * @access public
     * @var tnsBidSource
     */
    public $percentCpaBidSource;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($bid = null, $percentCpaBidSource = null, $BidsType = null) {
      parent::__construct();
      $this->bid = $bid;
      $this->percentCpaBidSource = $percentCpaBidSource;
      $this->BidsType = $BidsType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PercentCpaBiddingScheme", false)) {
  /**
   * Percentage CPA based bidding scheme attributes where user pays a percent of conversions.
   * This bidding strategy is available only to some advertisers.
   * <p>A campaign can only be created with PercentCPA bidding strategy. Existing
   * campaigns with a different bidding strategy cannot be transitioned to PercentCPA.
   * <p>Similarly, once created as a PercentCPA, a campaign cannot be transitioned to
   * any other bidding strategy.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PercentCpaBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "PercentCpaBiddingScheme";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($BiddingSchemeType = null) {
      parent::__construct();
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Placement", false)) {
  /**
   * A placement used for modifying bids for sites when targeting the content
   * network.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Placement extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Placement";

    /**
     * @access public
     * @var string
     */
    public $url;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($url = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->url = $url;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PolicyViolationError", false)) {
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
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PolicyViolationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PolicyViolationErrorPart", false)) {
  /**
   * Points to a substring within an ad field or criterion.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PolicyViolationErrorPart {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PolicyViolationKey", false)) {
  /**
   * Key of the violation. The key is used for referring to a violation when
   * filing an exemption request.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PolicyViolationKey {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Predicate", false)) {
  /**
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Predicate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Product", false)) {
  /**
   * Product targeting criteria, represents a filter for products in the
   * product feed that is defined by the advertiser. The criteria is used to
   * determine the products in a Merchant Center account to be used with the
   * ProductAds in the AdGroup. This criteria is available only to some advertisers.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Product extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Product";

    /**
     * @access public
     * @var ProductCondition[]
     */
    public $conditions;

    /**
     * @access public
     * @var string
     */
    public $text;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($conditions = null, $text = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->conditions = $conditions;
      $this->text = $text;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductCondition", false)) {
  /**
   * Conditions to filter the products defined in product feed for targeting.
   * The condition is defined as operand=argument.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductCondition";

    /**
     * @access public
     * @var string
     */
    public $argument;

    /**
     * @access public
     * @var ProductConditionOperand
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

    public function __construct($argument = null, $operand = null) {
      $this->argument = $argument;
      $this->operand = $operand;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductConditionOperand", false)) {
  /**
   * Attribute for the product condition.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductConditionOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductConditionOperand";

    /**
     * @access public
     * @var string
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

    public function __construct($operand = null) {
      $this->operand = $operand;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductDimension", false)) {
  /**
   * Dimension by which to subdivide or filter products.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductDimension";

    /**
     * @access public
     * @var string
     */
    public $ProductDimensionType;
    private $_parameterMap = array(
      "ProductDimension.Type" => "ProductDimensionType",
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

    public function __construct($ProductDimensionType = null) {
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductOfferId", false)) {
  /**
   * An offer ID as specified by the merchant.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductOfferId extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductOfferId";

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

    public function __construct($value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductPartition", false)) {
  /**
   * Product partition (product group) in a shopping campaign. Depending on its type, a product
   * partition subdivides products along some product dimension, specifies a bid for products, or
   * excludes products from bidding.
   * 
   * <p>Inner nodes of a product partition hierarchy are always subdivisions. Each child is linked to
   * the subdivision via the {@code parentCriterionId} and defines a {@code caseValue}. For all
   * children of the same subdivision, the {@code caseValue}s must be mutually different but
   * instances of the same class.
   * 
   * To create a subdivision and child node in the same API request, they should refer to each other
   * using temporary criterion IDs in the {@code parentCriterionId} of the child, and ID field of the
   * subdivision. Temporary IDs are specified by using any negative integer. Temporary IDs only exist
   * within the scope of a single API request. The API will assign real criterion IDs, and replace
   * the temporary values, and the API response will reflect this.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductPartition extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductPartition";

    /**
     * @access public
     * @var tnsProductPartitionType
     */
    public $partitionType;

    /**
     * @access public
     * @var integer
     */
    public $parentCriterionId;

    /**
     * @access public
     * @var ProductDimension
     */
    public $caseValue;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($partitionType = null, $parentCriterionId = null, $caseValue = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->partitionType = $partitionType;
      $this->parentCriterionId = $parentCriterionId;
      $this->caseValue = $caseValue;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductType", false)) {
  /**
   * One element of a product type string at a certain level. Top-level product types are at level 1,
   * their children at level 2, and so on. We currently support up to 5 levels. The user must specify
   * a dimension type that indicates the level of the product type. All cases of the the same
   * subdivision must have the same dimension type (product type level).
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductType extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductType";

    /**
     * @access public
     * @var tnsProductDimensionType
     */
    public $type;

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

    public function __construct($type = null, $value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->type = $type;
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductTypeFull", false)) {
  /**
   * A full product type string. Category of the product according to the merchant's own
   * classification. Example:
   * 
   * <pre>{@code "Home & Garden > Kitchen & Dining > Kitchen Appliances > Refrigerators"}</pre>
   * 
   * <p>Not supported by campaigns of {@link AdvertisingChannelType#SHOPPING}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductTypeFull extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductTypeFull";

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

    public function __construct($value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QualityInfo", false)) {
  /**
   * Container for criterion quality information.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QualityInfo {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "QualityInfo";

    /**
     * @access public
     * @var boolean
     */
    public $isKeywordAdRelevanceAcceptable;

    /**
     * @access public
     * @var boolean
     */
    public $isLandingPageQualityAcceptable;

    /**
     * @access public
     * @var boolean
     */
    public $isLandingPageLatencyAcceptable;

    /**
     * @access public
     * @var integer
     */
    public $qualityScore;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($isKeywordAdRelevanceAcceptable = null, $isLandingPageQualityAcceptable = null, $isLandingPageLatencyAcceptable = null, $qualityScore = null) {
      $this->isKeywordAdRelevanceAcceptable = $isKeywordAdRelevanceAcceptable;
      $this->isLandingPageQualityAcceptable = $isLandingPageQualityAcceptable;
      $this->isLandingPageLatencyAcceptable = $isLandingPageLatencyAcceptable;
      $this->qualityScore = $qualityScore;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QueryError", false)) {
  /**
   * A QueryError represents possible errors for query parsing and execution.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QueryError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "QueryError";

    /**
     * @access public
     * @var tnsQueryErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $message;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $message = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->message = $message;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RateExceededError", false)) {
  /**
   * Signals that a call failed because a measured rate exceeded.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyError", false)) {
  /**
   * Errors from attempting to write to read-only fields.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RejectedError", false)) {
  /**
   * Indicates that a field was rejected due to compatibility issues.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RejectedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "RejectedError";

    /**
     * @access public
     * @var tnsRejectedErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RequestError", false)) {
  /**
   * Encapsulates the generic errors thrown when there's an error with user
   * request.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RequestError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Selector", false)) {
  /**
   * A generic selector to specify the type of information to return.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Selector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SelectorError", false)) {
  /**
   * Represents possible error codes for {@link Selector}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SelectorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitError", false)) {
  /**
   * Indicates that the number of entries in the request or response exceeds the system limit.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "SoapHeader";

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

    public function __construct($clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null) {
      $this->clientCustomerId = $clientCustomerId;
      $this->developerToken = $developerToken;
      $this->userAgent = $userAgent;
      $this->validateOnly = $validateOnly;
      $this->partialFailure = $partialFailure;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SoapResponseHeader", false)) {
  /**
   * Defines the elements within the header of a SOAP response.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\StatsQueryError", false)) {
  /**
   * Represents possible error codes when querying for stats.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class StatsQueryError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "StatsQueryError";

    /**
     * @access public
     * @var tnsStatsQueryErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\StringLengthError", false)) {
  /**
   * Errors associated with the length of the given string being
   * out of bounds.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\String_StringMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type String
   * and value of type String.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class String_StringMapEntry {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "String_StringMapEntry";

    /**
     * @access public
     * @var string
     */
    public $key;

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

    public function __construct($key = null, $value = null) {
      $this->key = $key;
      $this->value = $value;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\TargetCpaBiddingScheme", false)) {
  /**
   * Target Cpa bidding strategy helps you maximize your return on investment
   * (ROI) by automatically getting you the most possible conversions for your budget.
   * 
   * This is similar to the <code>ConversionOptimizerBiddingScheme<code> but does not
   * support user-entered AdGroup-level target CPA bids, but rather a strategy-wide
   * average CPA target.
   * 
   * <p>Note that campaigns must meet <a
   * href="//support.google.com/adwords/bin/answer.py?answer=2471188">specific
   * eligibility requirements</a> before they can use the <code>TargetCpaBiddingScheme</code>
   * bidding strategy.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class TargetCpaBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "TargetCpaBiddingScheme";

    /**
     * @access public
     * @var Money
     */
    public $targetCpa;

    /**
     * @access public
     * @var Money
     */
    public $maxCpcBidCeiling;

    /**
     * @access public
     * @var Money
     */
    public $maxCpcBidFloor;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($targetCpa = null, $maxCpcBidCeiling = null, $maxCpcBidFloor = null, $BiddingSchemeType = null) {
      parent::__construct();
      $this->targetCpa = $targetCpa;
      $this->maxCpcBidCeiling = $maxCpcBidCeiling;
      $this->maxCpcBidFloor = $maxCpcBidFloor;
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\TargetRoasBiddingScheme", false)) {
  /**
   * Target Roas bidding strategy helps you maximize revenue while averaging a specific target
   * Return On Average Spend (ROAS).
   * 
   * For example: If TargetRoas is 1.5, the strategy will create as much revenue as possible while
   * ensuring that every $1.00 of clicks provides $1.50 in conversion value.
   * 
   * <p>Note that campaigns must meet <a
   * href="//support.google.com/adwords/bin/answer.py?answer=2471188">specific
   * eligibility requirements</a> before they can use the <code>TargetRoasBiddingScheme</code>
   * bidding strategy.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class TargetRoasBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "TargetRoasBiddingScheme";

    /**
     * @access public
     * @var double
     */
    public $targetRoas;

    /**
     * @access public
     * @var Money
     */
    public $bidCeiling;

    /**
     * @access public
     * @var Money
     */
    public $bidFloor;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($targetRoas = null, $bidCeiling = null, $bidFloor = null, $BiddingSchemeType = null) {
      parent::__construct();
      $this->targetRoas = $targetRoas;
      $this->bidCeiling = $bidCeiling;
      $this->bidFloor = $bidFloor;
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\TargetSpendBiddingScheme", false)) {
  /**
   * Target Spend bidding scheme, in which Google automatically places
   * bids for the user based on their daily/monthly budget or optional
   * spend target.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class TargetSpendBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "TargetSpendBiddingScheme";

    /**
     * @access public
     * @var Money
     */
    public $bidCeiling;

    /**
     * @access public
     * @var Money
     */
    public $spendTarget;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($bidCeiling = null, $spendTarget = null, $BiddingSchemeType = null) {
      parent::__construct();
      $this->bidCeiling = $bidCeiling;
      $this->spendTarget = $spendTarget;
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserInterest", false)) {
  /**
   * User Interest represents a particular interest-based vertical to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CriterionUserInterest extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CriterionUserInterest";

    /**
     * @access public
     * @var integer
     */
    public $userInterestId;

    /**
     * @access public
     * @var string
     */
    public $userInterestName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userInterestId = null, $userInterestName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->userInterestId = $userInterestId;
      $this->userInterestName = $userInterestName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserList", false)) {
  /**
   * UserList - represents a user list that is defined by the advertiser to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CriterionUserList extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CriterionUserList";

    /**
     * @access public
     * @var integer
     */
    public $userListId;

    /**
     * @access public
     * @var string
     */
    public $userListName;

    /**
     * @access public
     * @var tnsCriterionUserListMembershipStatus
     */
    public $userListMembershipStatus;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userListId = null, $userListName = null, $userListMembershipStatus = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->userListId = $userListId;
      $this->userListName = $userListName;
      $this->userListMembershipStatus = $userListMembershipStatus;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Vertical", false)) {
  /**
   * Use verticals to target or exclude placements in the Google Display Network
   * based on the category into which the placement falls (for example, "Pets &amp;
   * Animals/Pets/Dogs").
   * <a href="/adwords/api/docs/appendix/verticals">View the complete list
   * of available vertical categories.</a>
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Vertical extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Vertical";

    /**
     * @access public
     * @var integer
     */
    public $verticalId;

    /**
     * @access public
     * @var integer
     */
    public $verticalParentId;

    /**
     * @access public
     * @var string[]
     */
    public $path;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($verticalId = null, $verticalParentId = null, $path = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->verticalId = $verticalId;
      $this->verticalParentId = $verticalParentId;
      $this->path = $path;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Webpage", false)) {
  /**
   * Criterion for targeting webpages of an advertiser's website. The
   * website domain name is specified at the campaign level.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Webpage extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Webpage";

    /**
     * @access public
     * @var WebpageParameter
     */
    public $parameter;

    /**
     * @access public
     * @var double
     */
    public $criteriaCoverage;

    /**
     * @access public
     * @var string[]
     */
    public $criteriaSamples;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($parameter = null, $criteriaCoverage = null, $criteriaSamples = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->parameter = $parameter;
      $this->criteriaCoverage = $criteriaCoverage;
      $this->criteriaSamples = $criteriaSamples;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\WebpageCondition", false)) {
  /**
   * Logical expression for targeting webpages of an advertiser's website.
   * 
   * <p>A condition is defined as {@code operand OP argument}
   * where {@code operand} is one of the values enumerated in
   * {@link WebpageConditionOperand}, and, based on this value,
   * {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class WebpageCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "WebpageCondition";

    /**
     * @access public
     * @var tnsWebpageConditionOperand
     */
    public $operand;

    /**
     * @access public
     * @var string
     */
    public $argument;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operand = null, $argument = null) {
      $this->operand = $operand;
      $this->argument = $argument;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\WebpageParameter", false)) {
  /**
   * Parameter of Webpage criterion, expressed as a list of conditions, or
   * logical expressions, for targeting webpages of an advertiser's website.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class WebpageParameter extends CriterionParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "WebpageParameter";

    /**
     * @access public
     * @var string
     */
    public $criterionName;

    /**
     * @access public
     * @var WebpageCondition[]
     */
    public $conditions;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($criterionName = null, $conditions = null, $CriterionParameterType = null) {
      parent::__construct();
      $this->criterionName = $criterionName;
      $this->conditions = $conditions;
      $this->CriterionParameterType = $CriterionParameterType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionLimitExceededCriteriaLimitType", false)) {
  /**
   * The entity type that exceeded the limit.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionLimitExceededCriteriaLimitType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterionLimitExceeded.CriteriaLimitType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdxErrorReason", false)) {
  /**
   * The reasons for the AdX error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdxErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AgeRangeAgeRangeType", false)) {
  /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AgeRangeAgeRangeType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AgeRange.AgeRangeType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ApprovalStatus", false)) {
  /**
   * Approval status for the criterion.
   * Note: there are more states involved but we only expose two to users.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ApprovalStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ApprovalStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationErrorReason", false)) {
  /**
   * The reasons for the database error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BidSource", false)) {
  /**
   * Indicate where a criterion's bid came from: criterion or the adgroup it
   * belongs to.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BidSource {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BidSource";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddingErrorReason", false)) {
  /**
   * Reason for bidding error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddingErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddingErrorsReason", false)) {
  /**
   * Bidding strategy cannot override ad group or campaign bidding strategy.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddingErrorsReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddingErrors.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddingStrategySource", false)) {
  /**
   * Indicates where bidding strategy came from: campaign, adgroup or criterion.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddingStrategySource {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddingStrategySource";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\BiddingStrategyType", false)) {
  /**
   * The bidding strategy type.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class BiddingStrategyType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "BiddingStrategyType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsErrorReason", false)) {
  /**
   * Enums for the various reasons an error can be thrown as a result of
   * ClientTerms violation.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ClientTermsErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ConversionOptimizerBiddingSchemeBidType", false)) {
  /**
   * Average cost-per-acquisition (targetCPA) bid type.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ConversionOptimizerBiddingSchemeBidType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ConversionOptimizerBiddingScheme.BidType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ConversionOptimizerBiddingSchemePricingMode", false)) {
  /**
   * 
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ConversionOptimizerBiddingSchemePricingMode {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ConversionOptimizerBiddingScheme.PricingMode";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CriterionType", false)) {
  /**
   * The types of criteria.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CriterionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Criterion.Type";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CriterionErrorReason", false)) {
  /**
   * Concrete type of criterion is required for ADD and SET operations.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CriterionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CriterionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CriterionUse", false)) {
  /**
   * The way a criterion is used - biddable or negative.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CriterionUse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CriterionUse";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DateErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DateErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DistinctErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityAccessDeniedReason", false)) {
  /**
   * User did not have read access.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "EntityAccessDenied.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceededReason", false)) {
  /**
   * Limits at various levels of the account.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityCountLimitExceededReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "EntityCountLimitExceeded.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFoundReason", false)) {
  /**
   * The specified id refered to an entity which either doesn't exist or is not accessible to the
   * customer. e.g. campaign belongs to another customer.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class EntityNotFoundReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "EntityNotFound.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ExperimentDataStatus", false)) {
  /**
   * Status of the experimental change associated with an entity.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ExperimentDataStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ExperimentDataStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ExperimentDeltaStatus", false)) {
  /**
   * Status of an entity denoting its type of experimental change in a campaign.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ExperimentDeltaStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ExperimentDeltaStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ExperimentErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ExperimentErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ExperimentError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ForwardCompatibilityErrorReason", false)) {
  /**
   * The reason for the error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ForwardCompatibilityErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ForwardCompatibilityError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\GenderGenderType", false)) {
  /**
   * 
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class GenderGenderType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "Gender.GenderType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\IdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class IdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\KeywordMatchType", false)) {
  /**
   * Match type of a keyword. i.e. the way we match a keyword string with
   * search queries.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class KeywordMatchType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "KeywordMatchType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\MultiplierSource", false)) {
  /**
   * Denotes whether the bid multiplier is derived from the adgroup
   * or the criterion
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class MultiplierSource {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "MultiplierSource";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationErrorReason", false)) {
  /**
   * Do not set the id field while creating new entities.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NewEntityCreationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "NewEntityCreationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDeniedReason", false)) {
  /**
   * The reasons for the operation access error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Operator", false)) {
  /**
   * This represents an operator that may be presented to an adsapi service.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Operator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PageOnePromotedBiddingSchemeStrategyGoal", false)) {
  /**
   * First page on google.com.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PageOnePromotedBiddingSchemeStrategyGoal {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "PageOnePromotedBiddingScheme.StrategyGoal";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PagingErrorReason", false)) {
  /**
   * The reasons for errors when using pagination.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PagingErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "PagingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\PredicateOperator", false)) {
  /**
   * Defines the valid set of operators.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class PredicateOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductCanonicalConditionCondition", false)) {
  /**
   * A canonical product condition.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductCanonicalConditionCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductCanonicalCondition.Condition";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductDimensionType", false)) {
  /**
   * Type of product dimension.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductDimensionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductDimensionType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductPartitionType", false)) {
  /**
   * Type of a product partition in a shopping campaign.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductPartitionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductPartitionType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QueryErrorReason", false)) {
  /**
   * The reason for the query error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QueryErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "QueryError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckErrorReason", false)) {
  /**
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RangeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RateExceededErrorReason", false)) {
  /**
   * The reason for the rate exceeded error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RejectedErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RejectedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "RejectedError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RequestErrorReason", false)) {
  /**
   * Error reason is unknown.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RequestErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SelectorErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SelectorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitErrorReason", false)) {
  /**
   * The reasons for Ad Scheduling errors.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SortOrder", false)) {
  /**
   * Possible orders of sorting.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SortOrder {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\StatsQueryErrorReason", false)) {
  /**
   * The reasons for errors when querying for stats.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class StatsQueryErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "StatsQueryError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\StringLengthErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\SystemServingStatus", false)) {
  /**
   * Reported by system to reflect the criterion's serving status.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class SystemServingStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "SystemServingStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserListMembershipStatus", false)) {
  /**
   * Membership status of the user list.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CriterionUserListMembershipStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CriterionUserList.MembershipStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\UserStatus", false)) {
  /**
   * Specified by user to pause or unpause a criterion.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class UserStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "UserStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\WebpageConditionOperand", false)) {
  /**
   * Operand value of {@link WebpageCondition}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class WebpageConditionOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "WebpageConditionOperand";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Gets adgroup criteria.
   * 
   * @param serviceSelector filters the adgroup criteria to be returned.
   * @return a page (subset) view of the criteria selected
   * @throws ApiException when there is at least one error with the request
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionServiceGetResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdGroupCriterionPage
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionServiceMutate", false)) {
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
   * 
   * 
   * 
   * Adds, removes or updates adgroup criteria.
   * 
   * @param operations operations to do
   * during checks on keywords to be added.
   * @return added and updated adgroup criteria (without optional parts)
   * @throws ApiException when there is at least one error with the request
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionServiceMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdGroupCriterionOperation[]
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionServiceMutateResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionServiceMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdGroupCriterionReturnValue
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\Query", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of AdGroupCriterion that match the query.
   * 
   * @param query The SQL-like AWQL query string
   * @returns A list of AdGroupCriterion
   * @throws ApiException when the query is invalid or there are errors processing the request.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class Query {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var string
     */
    public $query;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($query = null) {
      $this->query = $query;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\QueryResponse", false)) {
  /**
   * 
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class QueryResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdGroupCriterionPage
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionError", false)) {
  /**
   * Base error class for Ad Group Criterion Service.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterionError";

    /**
     * @access public
     * @var tnsAdGroupCriterionErrorReason
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionLimitExceeded", false)) {
  /**
   * Signals that too many criteria were added to some ad group.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionLimitExceeded extends EntityCountLimitExceeded {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterionLimitExceeded";

    /**
     * @access public
     * @var tnsAdGroupCriterionLimitExceededCriteriaLimitType
     */
    public $limitType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($limitType = null, $reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null) {
      parent::__construct();
      $this->limitType = $limitType;
      $this->reason = $reason;
      $this->enclosingId = $enclosingId;
      $this->limit = $limit;
      $this->accountLimitType = $accountLimitType;
      $this->existingCount = $existingCount;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionOperation", false)) {
  /**
   * Operation (add, remove and set) on adgroup criteria.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterionOperation";

    /**
     * @access public
     * @var AdGroupCriterion
     */
    public $operand;

    /**
     * @access public
     * @var ExemptionRequest[]
     */
    public $exemptionRequests;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operand = null, $exemptionRequests = null, $operator = null, $OperationType = null) {
      parent::__construct();
      $this->operand = $operand;
      $this->exemptionRequests = $exemptionRequests;
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionPage", false)) {
  /**
   * Contains a subset of adgroup criteria resulting from a
   * {@link AdGroupCriterionService#get} call.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionPage extends Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterionPage";

    /**
     * @access public
     * @var AdGroupCriterion[]
     */
    public $entries;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null) {
      parent::__construct();
      $this->entries = $entries;
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionReturnValue", false)) {
  /**
   * A container for return values from the AdGroupCriterionService.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionReturnValue extends ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterionReturnValue";

    /**
     * @access public
     * @var AdGroupCriterion[]
     */
    public $value;

    /**
     * @access public
     * @var ApiError[]
     */
    public $partialFailureErrors;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $partialFailureErrors = null, $ListReturnValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->partialFailureErrors = $partialFailureErrors;
      $this->ListReturnValueType = $ListReturnValueType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AdxError", false)) {
  /**
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdxError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\AgeRange", false)) {
  /**
   * Represents an Age Range criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type can be either targeted or excluded.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AgeRange extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AgeRange";

    /**
     * @access public
     * @var tnsAgeRangeAgeRangeType
     */
    public $ageRangeType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ageRangeType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->ageRangeType = $ageRangeType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\CriterionPolicyError", false)) {
  /**
   * Contains the policy violations for a single BiddableAdGroupCriterion.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class CriterionPolicyError extends PolicyViolationError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CriterionPolicyError";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\DoubleValue", false)) {
  /**
   * Number value type for constructing double valued ranges.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class DoubleValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "DoubleValue";

    /**
     * @access public
     * @var double
     */
    public $number;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($number = null) {
      parent::__construct();
      $this->number = $number;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\LongValue", false)) {
  /**
   * Number value type for constructing long valued ranges.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class LongValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "LongValue";

    /**
     * @access public
     * @var integer
     */
    public $number;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($number = null) {
      parent::__construct();
      $this->number = $number;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductAdwordsGrouping", false)) {
  /**
   * An {@code adwords grouping} string. Not supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductAdwordsGrouping extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductAdwordsGrouping";

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

    public function __construct($value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductAdwordsLabels", false)) {
  /**
   * An {@code adwords labels} string. Not supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductAdwordsLabels extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductAdwordsLabels";

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

    public function __construct($value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductBiddingCategory", false)) {
  /**
   * One element of a bidding category at a certain level. Top-level categories are at level 1,
   * their children at level 2, and so on. We currently support up to 5 levels. The user must specify
   * a dimension type that indicates the level of the category. All cases of the the same subdivision
   * must have the same dimension type (category level).
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductBiddingCategory extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductBiddingCategory";

    /**
     * @access public
     * @var tnsProductDimensionType
     */
    public $type;

    /**
     * @access public
     * @var integer
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

    public function __construct($type = null, $value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->type = $type;
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductBrand", false)) {
  /**
   * A brand string.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductBrand extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductBrand";

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

    public function __construct($value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductCanonicalCondition", false)) {
  /**
   * A canonical condition. Only supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductCanonicalCondition extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductCanonicalCondition";

    /**
     * @access public
     * @var tnsProductCanonicalConditionCondition
     */
    public $condition;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($condition = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->condition = $condition;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductLegacyCondition", false)) {
  /**
   * A plain condition string. Not supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductLegacyCondition extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductLegacyCondition";

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

    public function __construct($value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("Google\\Api\\Ads\\AdWords\\v201409\\ProductCustomAttribute", false)) {
  /**
   * A custom attribute value. As a product can have multiple custom attributes, the user must specify
   * a dimension type that indicates the index of the attribute by which to subdivide. All cases of
   * the same subdivision must have the same dimension type (attribute index).
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class ProductCustomAttribute extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductCustomAttribute";

    /**
     * @access public
     * @var tnsProductDimensionType
     */
    public $type;

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

    public function __construct($type = null, $value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->type = $type;
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
}

if (!class_exists("AdGroupCriterionService", false)) {
  /**
   * AdGroupCriterionService
   * @package Google\Api\Ads\AdWords\v201409
   * @subpackage v201409
   */
  class AdGroupCriterionService extends \Google\Api\Ads\AdWords\Lib\AdWordsSoapClient {

    const SERVICE_NAME = "AdGroupCriterionService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201409/AdGroupCriterionService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201409/AdGroupCriterionService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdGroupCriterion" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterion",
      "AdGroupCriterionError" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionError",
      "AdGroupCriterionExperimentBidMultiplier" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionExperimentBidMultiplier",
      "AdGroupCriterionLimitExceeded" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionLimitExceeded",
      "AdGroupCriterionOperation" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionOperation",
      "AdGroupCriterionPage" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionPage",
      "AdGroupCriterionReturnValue" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionReturnValue",
      "AdxError" => "Google\\Api\\Ads\\AdWords\\v201409\\AdxError",
      "AgeRange" => "Google\\Api\\Ads\\AdWords\\v201409\\AgeRange",
      "ApiError" => "Google\\Api\\Ads\\AdWords\\v201409\\ApiError",
      "ApiException" => "Google\\Api\\Ads\\AdWords\\v201409\\ApiException",
      "ApplicationException" => "Google\\Api\\Ads\\AdWords\\v201409\\ApplicationException",
      "AuthenticationError" => "Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationError",
      "AuthorizationError" => "Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationError",
      "Bid" => "Google\\Api\\Ads\\AdWords\\v201409\\Bid",
      "BidMultiplier" => "Google\\Api\\Ads\\AdWords\\v201409\\BidMultiplier",
      "BiddableAdGroupCriterion" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddableAdGroupCriterion",
      "BiddableAdGroupCriterionExperimentData" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddableAdGroupCriterionExperimentData",
      "BiddingError" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddingError",
      "BiddingErrors" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddingErrors",
      "BiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddingScheme",
      "BiddingStrategyConfiguration" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddingStrategyConfiguration",
      "Bids" => "Google\\Api\\Ads\\AdWords\\v201409\\Bids",
      "BudgetOptimizerBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\BudgetOptimizerBiddingScheme",
      "ClientTermsError" => "Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsError",
      "ComparableValue" => "Google\\Api\\Ads\\AdWords\\v201409\\ComparableValue",
      "ConversionOptimizerBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\ConversionOptimizerBiddingScheme",
      "CpaBid" => "Google\\Api\\Ads\\AdWords\\v201409\\CpaBid",
      "CpcBid" => "Google\\Api\\Ads\\AdWords\\v201409\\CpcBid",
      "CpmBid" => "Google\\Api\\Ads\\AdWords\\v201409\\CpmBid",
      "Criterion" => "Google\\Api\\Ads\\AdWords\\v201409\\Criterion",
      "CriterionError" => "Google\\Api\\Ads\\AdWords\\v201409\\CriterionError",
      "CriterionParameter" => "Google\\Api\\Ads\\AdWords\\v201409\\CriterionParameter",
      "CriterionPolicyError" => "Google\\Api\\Ads\\AdWords\\v201409\\CriterionPolicyError",
      "DatabaseError" => "Google\\Api\\Ads\\AdWords\\v201409\\DatabaseError",
      "DateError" => "Google\\Api\\Ads\\AdWords\\v201409\\DateError",
      "DateRange" => "Google\\Api\\Ads\\AdWords\\v201409\\DateRange",
      "DistinctError" => "Google\\Api\\Ads\\AdWords\\v201409\\DistinctError",
      "DoubleValue" => "Google\\Api\\Ads\\AdWords\\v201409\\DoubleValue",
      "EnhancedCpcBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\EnhancedCpcBiddingScheme",
      "EntityAccessDenied" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityAccessDenied",
      "EntityCountLimitExceeded" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceeded",
      "EntityNotFound" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFound",
      "ExemptionRequest" => "Google\\Api\\Ads\\AdWords\\v201409\\ExemptionRequest",
      "ExperimentError" => "Google\\Api\\Ads\\AdWords\\v201409\\ExperimentError",
      "ForwardCompatibilityError" => "Google\\Api\\Ads\\AdWords\\v201409\\ForwardCompatibilityError",
      "Gender" => "Google\\Api\\Ads\\AdWords\\v201409\\Gender",
      "IdError" => "Google\\Api\\Ads\\AdWords\\v201409\\IdError",
      "InternalApiError" => "Google\\Api\\Ads\\AdWords\\v201409\\InternalApiError",
      "Keyword" => "Google\\Api\\Ads\\AdWords\\v201409\\Keyword",
      "ListReturnValue" => "Google\\Api\\Ads\\AdWords\\v201409\\ListReturnValue",
      "LongValue" => "Google\\Api\\Ads\\AdWords\\v201409\\LongValue",
      "ManualCPCAdGroupCriterionExperimentBidMultiplier" => "Google\\Api\\Ads\\AdWords\\v201409\\ManualCPCAdGroupCriterionExperimentBidMultiplier",
      "ManualCpcBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\ManualCpcBiddingScheme",
      "ManualCpmBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\ManualCpmBiddingScheme",
      "MobileAppCategory" => "Google\\Api\\Ads\\AdWords\\v201409\\MobileAppCategory",
      "MobileApplication" => "Google\\Api\\Ads\\AdWords\\v201409\\MobileApplication",
      "Money" => "Google\\Api\\Ads\\AdWords\\v201409\\Money",
      "NegativeAdGroupCriterion" => "Google\\Api\\Ads\\AdWords\\v201409\\NegativeAdGroupCriterion",
      "NewEntityCreationError" => "Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationError",
      "NotEmptyError" => "Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyError",
      "NullError" => "Google\\Api\\Ads\\AdWords\\v201409\\NullError",
      "NumberValue" => "Google\\Api\\Ads\\AdWords\\v201409\\NumberValue",
      "Operation" => "Google\\Api\\Ads\\AdWords\\v201409\\Operation",
      "OperationAccessDenied" => "Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDenied",
      "OrderBy" => "Google\\Api\\Ads\\AdWords\\v201409\\OrderBy",
      "Page" => "Google\\Api\\Ads\\AdWords\\v201409\\Page",
      "PageOnePromotedBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\PageOnePromotedBiddingScheme",
      "Paging" => "Google\\Api\\Ads\\AdWords\\v201409\\Paging",
      "PagingError" => "Google\\Api\\Ads\\AdWords\\v201409\\PagingError",
      "PercentCpaBid" => "Google\\Api\\Ads\\AdWords\\v201409\\PercentCpaBid",
      "PercentCpaBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\PercentCpaBiddingScheme",
      "Placement" => "Google\\Api\\Ads\\AdWords\\v201409\\Placement",
      "PolicyViolationError" => "Google\\Api\\Ads\\AdWords\\v201409\\PolicyViolationError",
      "PolicyViolationError.Part" => "Google\\Api\\Ads\\AdWords\\v201409\\PolicyViolationErrorPart",
      "PolicyViolationKey" => "Google\\Api\\Ads\\AdWords\\v201409\\PolicyViolationKey",
      "Predicate" => "Google\\Api\\Ads\\AdWords\\v201409\\Predicate",
      "Product" => "Google\\Api\\Ads\\AdWords\\v201409\\Product",
      "ProductAdwordsGrouping" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductAdwordsGrouping",
      "ProductAdwordsLabels" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductAdwordsLabels",
      "ProductBiddingCategory" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductBiddingCategory",
      "ProductBrand" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductBrand",
      "ProductCanonicalCondition" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductCanonicalCondition",
      "ProductLegacyCondition" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductLegacyCondition",
      "ProductCondition" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductCondition",
      "ProductConditionOperand" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductConditionOperand",
      "ProductCustomAttribute" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductCustomAttribute",
      "ProductDimension" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductDimension",
      "ProductOfferId" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductOfferId",
      "ProductPartition" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductPartition",
      "ProductType" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductType",
      "ProductTypeFull" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductTypeFull",
      "QualityInfo" => "Google\\Api\\Ads\\AdWords\\v201409\\QualityInfo",
      "QueryError" => "Google\\Api\\Ads\\AdWords\\v201409\\QueryError",
      "QuotaCheckError" => "Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckError",
      "RangeError" => "Google\\Api\\Ads\\AdWords\\v201409\\RangeError",
      "RateExceededError" => "Google\\Api\\Ads\\AdWords\\v201409\\RateExceededError",
      "ReadOnlyError" => "Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyError",
      "RejectedError" => "Google\\Api\\Ads\\AdWords\\v201409\\RejectedError",
      "RequestError" => "Google\\Api\\Ads\\AdWords\\v201409\\RequestError",
      "RequiredError" => "Google\\Api\\Ads\\AdWords\\v201409\\RequiredError",
      "Selector" => "Google\\Api\\Ads\\AdWords\\v201409\\Selector",
      "SelectorError" => "Google\\Api\\Ads\\AdWords\\v201409\\SelectorError",
      "SizeLimitError" => "Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitError",
      "SoapHeader" => "Google\\Api\\Ads\\AdWords\\v201409\\SoapRequestHeader",
      "SoapResponseHeader" => "Google\\Api\\Ads\\AdWords\\v201409\\SoapResponseHeader",
      "StatsQueryError" => "Google\\Api\\Ads\\AdWords\\v201409\\StatsQueryError",
      "StringLengthError" => "Google\\Api\\Ads\\AdWords\\v201409\\StringLengthError",
      "String_StringMapEntry" => "Google\\Api\\Ads\\AdWords\\v201409\\String_StringMapEntry",
      "TargetCpaBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\TargetCpaBiddingScheme",
      "TargetRoasBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\TargetRoasBiddingScheme",
      "TargetSpendBiddingScheme" => "Google\\Api\\Ads\\AdWords\\v201409\\TargetSpendBiddingScheme",
      "CriterionUserInterest" => "Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserInterest",
      "CriterionUserList" => "Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserList",
      "Vertical" => "Google\\Api\\Ads\\AdWords\\v201409\\Vertical",
      "Webpage" => "Google\\Api\\Ads\\AdWords\\v201409\\Webpage",
      "WebpageCondition" => "Google\\Api\\Ads\\AdWords\\v201409\\WebpageCondition",
      "WebpageParameter" => "Google\\Api\\Ads\\AdWords\\v201409\\WebpageParameter",
      "AdGroupCriterionError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionErrorReason",
      "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionLimitExceededCriteriaLimitType",
      "AdxError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\AdxErrorReason",
      "AgeRange.AgeRangeType" => "Google\\Api\\Ads\\AdWords\\v201409\\AgeRangeAgeRangeType",
      "ApprovalStatus" => "Google\\Api\\Ads\\AdWords\\v201409\\ApprovalStatus",
      "AuthenticationError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationErrorReason",
      "AuthorizationError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationErrorReason",
      "BidSource" => "Google\\Api\\Ads\\AdWords\\v201409\\BidSource",
      "BiddingError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddingErrorReason",
      "BiddingErrors.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddingErrorsReason",
      "BiddingStrategySource" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddingStrategySource",
      "BiddingStrategyType" => "Google\\Api\\Ads\\AdWords\\v201409\\BiddingStrategyType",
      "ClientTermsError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsErrorReason",
      "ConversionOptimizerBiddingScheme.BidType" => "Google\\Api\\Ads\\AdWords\\v201409\\ConversionOptimizerBiddingSchemeBidType",
      "ConversionOptimizerBiddingScheme.PricingMode" => "Google\\Api\\Ads\\AdWords\\v201409\\ConversionOptimizerBiddingSchemePricingMode",
      "Criterion.Type" => "Google\\Api\\Ads\\AdWords\\v201409\\CriterionType",
      "CriterionError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\CriterionErrorReason",
      "CriterionUse" => "Google\\Api\\Ads\\AdWords\\v201409\\CriterionUse",
      "DatabaseError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\DatabaseErrorReason",
      "DateError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\DateErrorReason",
      "DistinctError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\DistinctErrorReason",
      "EntityAccessDenied.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityAccessDeniedReason",
      "EntityCountLimitExceeded.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFoundReason",
      "ExperimentDataStatus" => "Google\\Api\\Ads\\AdWords\\v201409\\ExperimentDataStatus",
      "ExperimentDeltaStatus" => "Google\\Api\\Ads\\AdWords\\v201409\\ExperimentDeltaStatus",
      "ExperimentError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\ExperimentErrorReason",
      "ForwardCompatibilityError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\ForwardCompatibilityErrorReason",
      "Gender.GenderType" => "Google\\Api\\Ads\\AdWords\\v201409\\GenderGenderType",
      "IdError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\IdErrorReason",
      "InternalApiError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\InternalApiErrorReason",
      "KeywordMatchType" => "Google\\Api\\Ads\\AdWords\\v201409\\KeywordMatchType",
      "MultiplierSource" => "Google\\Api\\Ads\\AdWords\\v201409\\MultiplierSource",
      "NewEntityCreationError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationErrorReason",
      "NotEmptyError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyErrorReason",
      "NullError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\NullErrorReason",
      "OperationAccessDenied.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDeniedReason",
      "Operator" => "Google\\Api\\Ads\\AdWords\\v201409\\Operator",
      "PageOnePromotedBiddingScheme.StrategyGoal" => "Google\\Api\\Ads\\AdWords\\v201409\\PageOnePromotedBiddingSchemeStrategyGoal",
      "PagingError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\PagingErrorReason",
      "Predicate.Operator" => "Google\\Api\\Ads\\AdWords\\v201409\\PredicateOperator",
      "ProductCanonicalCondition.Condition" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductCanonicalConditionCondition",
      "ProductDimensionType" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductDimensionType",
      "ProductPartitionType" => "Google\\Api\\Ads\\AdWords\\v201409\\ProductPartitionType",
      "QueryError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\QueryErrorReason",
      "QuotaCheckError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckErrorReason",
      "RangeError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RangeErrorReason",
      "RateExceededError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RateExceededErrorReason",
      "ReadOnlyError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyErrorReason",
      "RejectedError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RejectedErrorReason",
      "RequestError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RequestErrorReason",
      "RequiredError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\RequiredErrorReason",
      "SelectorError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\SelectorErrorReason",
      "SizeLimitError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitErrorReason",
      "SortOrder" => "Google\\Api\\Ads\\AdWords\\v201409\\SortOrder",
      "StatsQueryError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\StatsQueryErrorReason",
      "StringLengthError.Reason" => "Google\\Api\\Ads\\AdWords\\v201409\\StringLengthErrorReason",
      "SystemServingStatus" => "Google\\Api\\Ads\\AdWords\\v201409\\SystemServingStatus",
      "CriterionUserList.MembershipStatus" => "Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserListMembershipStatus",
      "UserStatus" => "Google\\Api\\Ads\\AdWords\\v201409\\UserStatus",
      "WebpageConditionOperand" => "Google\\Api\\Ads\\AdWords\\v201409\\WebpageConditionOperand",
      "get" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionServiceGet",
      "getResponse" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionServiceGetResponse",
      "mutate" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionServiceMutate",
      "mutateResponse" => "Google\\Api\\Ads\\AdWords\\v201409\\AdGroupCriterionServiceMutateResponse",
      "query" => "Google\\Api\\Ads\\AdWords\\v201409\\Query",
      "queryResponse" => "Google\\Api\\Ads\\AdWords\\v201409\\QueryResponse",
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
     * Gets adgroup criteria.
     * 
     * @param serviceSelector filters the adgroup criteria to be returned.
     * @return a page (subset) view of the criteria selected
     * @throws ApiException when there is at least one error with the request
     */
    public function get($serviceSelector) {
      $args = new AdGroupCriterionServiceGet($serviceSelector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
     * 
     * 
     * 
     * Adds, removes or updates adgroup criteria.
     * 
     * @param operations operations to do
     * during checks on keywords to be added.
     * @return added and updated adgroup criteria (without optional parts)
     * @throws ApiException when there is at least one error with the request
     */
    public function mutate($operations) {
      $args = new AdGroupCriterionServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of AdGroupCriterion that match the query.
     * 
     * @param query The SQL-like AWQL query string
     * @returns A list of AdGroupCriterion
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query) {
      $args = new Query($query);
      $result = $this->__soapCall("query", array($args));
      return $result->rval;
    }
  }
}

