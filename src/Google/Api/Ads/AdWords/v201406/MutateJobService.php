<?php
/**
 * Contains all client objects for the MutateJobService
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
 * @package    Google_Api_Ads_AdWords_v201406
 * @subpackage v201406
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("Ad", false)) {
  /**
   * The base class of all ad types. To update basic ad fields,
   * you can construct an {@code Ad} object (instead of
   * the ad's concrete type) with the appropriate fields set.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Ad";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $url;

    /**
     * @access public
     * @var string
     */
    public $displayUrl;

    /**
     * @access public
     * @var string[]
     */
    public $finalUrls;

    /**
     * @access public
     * @var string[]
     */
    public $finalMobileUrls;

    /**
     * @access public
     * @var string
     */
    public $trackingUrlTemplate;

    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;

    /**
     * @access public
     * @var integer
     */
    public $devicePreference;

    /**
     * @access public
     * @var string
     */
    public $AdType;
    private $_parameterMap = array(
      "Ad.Type" => "AdType",
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

    public function __construct($id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("AdExtension", false)) {
  /**
   * Base class for AdExtension objects. An AdExtension is an extension to
   * an existing ad or metadata that will process into an extension.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdExtension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdExtension";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $AdExtensionType;
    private $_parameterMap = array(
      "AdExtension.Type" => "AdExtensionType",
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

    public function __construct($id = null, $AdExtensionType = null) {
      $this->id = $id;
      $this->AdExtensionType = $AdExtensionType;
    }

  }
}

if (!class_exists("AdGroup", false)) {
  /**
   * Represents an ad group.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroup {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroup";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var string
     */
    public $campaignName;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsAdGroupStatus
     */
    public $status;

    /**
     * @access public
     * @var Setting[]
     */
    public $settings;

    /**
     * @access public
     * @var AdGroupExperimentData
     */
    public $experimentData;

    /**
     * @access public
     * @var Label[]
     */
    public $labels;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * @access public
     * @var BiddingStrategyConfiguration
     */
    public $biddingStrategyConfiguration;

    /**
     * @access public
     * @var tnsCriterionTypeGroup
     */
    public $contentBidCriterionTypeGroup;

    /**
     * @access public
     * @var string
     */
    public $trackingUrlTemplate;

    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $campaignId = null, $campaignName = null, $name = null, $status = null, $settings = null, $experimentData = null, $labels = null, $forwardCompatibilityMap = null, $biddingStrategyConfiguration = null, $contentBidCriterionTypeGroup = null, $trackingUrlTemplate = null, $urlCustomParameters = null) {
      $this->id = $id;
      $this->campaignId = $campaignId;
      $this->campaignName = $campaignName;
      $this->name = $name;
      $this->status = $status;
      $this->settings = $settings;
      $this->experimentData = $experimentData;
      $this->labels = $labels;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
      $this->contentBidCriterionTypeGroup = $contentBidCriterionTypeGroup;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
    }

  }
}

if (!class_exists("AdGroupAd", false)) {
  /**
   * Represents an ad in an ad group.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAd {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAd";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var Ad
     */
    public $ad;

    /**
     * @access public
     * @var AdGroupAdExperimentData
     */
    public $experimentData;

    /**
     * @access public
     * @var tnsAdGroupAdStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsAdGroupAdApprovalStatus
     */
    public $approvalStatus;

    /**
     * @access public
     * @var string[]
     */
    public $disapprovalReasons;

    /**
     * @access public
     * @var boolean
     */
    public $trademarkDisapproved;

    /**
     * @access public
     * @var Label[]
     */
    public $labels;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $ad = null, $experimentData = null, $status = null, $approvalStatus = null, $disapprovalReasons = null, $trademarkDisapproved = null, $labels = null, $forwardCompatibilityMap = null) {
      $this->adGroupId = $adGroupId;
      $this->ad = $ad;
      $this->experimentData = $experimentData;
      $this->status = $status;
      $this->approvalStatus = $approvalStatus;
      $this->disapprovalReasons = $disapprovalReasons;
      $this->trademarkDisapproved = $trademarkDisapproved;
      $this->labels = $labels;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    }

  }
}

if (!class_exists("AdGroupAdExperimentData", false)) {
  /**
   * Data associated with an advertiser experiment for an AdGroupAd
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdExperimentData {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAdExperimentData";

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
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null) {
      $this->experimentId = $experimentId;
      $this->experimentDeltaStatus = $experimentDeltaStatus;
      $this->experimentDataStatus = $experimentDataStatus;
    }

  }
}

if (!class_exists("AdGroupAdLabel", false)) {
  /**
   * Manages the labels associated with an AdGroupAd.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdLabel {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAdLabel";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var integer
     */
    public $adId;

    /**
     * @access public
     * @var integer
     */
    public $labelId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $adId = null, $labelId = null) {
      $this->adGroupId = $adGroupId;
      $this->adId = $adId;
      $this->labelId = $labelId;
    }

  }
}

if (!class_exists("AdGroupBidModifier", false)) {
  /**
   * Represents an adgroup level bid modifier override for campaign level criterion
   * bid modifier values.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupBidModifier {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupBidModifier";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

    /**
     * @access public
     * @var tnsBidModifierSource
     */
    public $bidModifierSource;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $adGroupId = null, $criterion = null, $bidModifier = null, $bidModifierSource = null) {
      $this->campaignId = $campaignId;
      $this->adGroupId = $adGroupId;
      $this->criterion = $criterion;
      $this->bidModifier = $bidModifier;
      $this->bidModifierSource = $bidModifierSource;
    }

  }
}

if (!class_exists("AdGroupCriterion", false)) {
  /**
   * Represents a criterion in an ad group, used with AdGroupCriterionService.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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
     * @var Label[]
     */
    public $labels;

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

    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, $labels = null, $forwardCompatibilityMap = null, $AdGroupCriterionType = null) {
      $this->adGroupId = $adGroupId;
      $this->criterionUse = $criterionUse;
      $this->criterion = $criterion;
      $this->labels = $labels;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->AdGroupCriterionType = $AdGroupCriterionType;
    }

  }
}

if (!class_exists("AdGroupCriterionExperimentBidMultiplier", false)) {
  /**
   * Bid multiplier used to modify the bid of a criterion while running
   * an experiment.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupCriterionExperimentBidMultiplier {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AdGroupCriterionLabel", false)) {
  /**
   * Manages the labels associated with an AdGroupCriterion.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupCriterionLabel {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupCriterionLabel";

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
     * @var integer
     */
    public $labelId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $criterionId = null, $labelId = null) {
      $this->adGroupId = $adGroupId;
      $this->criterionId = $criterionId;
      $this->labelId = $labelId;
    }

  }
}

if (!class_exists("AdGroupExperimentBidMultipliers", false)) {
  /**
   * Bid multiplier used to modify the bid of an adgroup while running
   * an experiment.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupExperimentBidMultipliers {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupExperimentBidMultipliers";

    /**
     * @access public
     * @var string
     */
    public $AdGroupExperimentBidMultipliersType;
    private $_parameterMap = array(
      "AdGroupExperimentBidMultipliers.Type" => "AdGroupExperimentBidMultipliersType",
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

    public function __construct($AdGroupExperimentBidMultipliersType = null) {
      $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
    }

  }
}

if (!class_exists("AdGroupExperimentData", false)) {
  /**
   * Data associated with an advertiser experiment for this adgroup.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupExperimentData {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupExperimentData";

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
     * @var AdGroupExperimentBidMultipliers
     */
    public $experimentBidMultipliers;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null, $experimentBidMultipliers = null) {
      $this->experimentId = $experimentId;
      $this->experimentDeltaStatus = $experimentDeltaStatus;
      $this->experimentDataStatus = $experimentDataStatus;
      $this->experimentBidMultipliers = $experimentBidMultipliers;
    }

  }
}

if (!class_exists("AdGroupLabel", false)) {
  /**
   * Manages the labels associated with an {@link AdGroup}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupLabel {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupLabel";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var integer
     */
    public $labelId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $labelId = null) {
      $this->adGroupId = $adGroupId;
      $this->labelId = $labelId;
    }

  }
}

if (!class_exists("AdUnionId", false)) {
  /**
   * Represents an id indicating a grouping of Ads under some heuristic.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdUnionId {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdUnionId";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $AdUnionIdType;
    private $_parameterMap = array(
      "AdUnionId.Type" => "AdUnionIdType",
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

    public function __construct($id = null, $AdUnionIdType = null) {
      $this->id = $id;
      $this->AdUnionIdType = $AdUnionIdType;
    }

  }
}

if (!class_exists("Address", false)) {
  /**
   * Structure to specify an address location.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Address {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Address";

    /**
     * @access public
     * @var string
     */
    public $streetAddress;

    /**
     * @access public
     * @var string
     */
    public $streetAddress2;

    /**
     * @access public
     * @var string
     */
    public $cityName;

    /**
     * @access public
     * @var string
     */
    public $provinceCode;

    /**
     * @access public
     * @var string
     */
    public $provinceName;

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

    public function __construct($streetAddress = null, $streetAddress2 = null, $cityName = null, $provinceCode = null, $provinceName = null, $postalCode = null, $countryCode = null) {
      $this->streetAddress = $streetAddress;
      $this->streetAddress2 = $streetAddress2;
      $this->cityName = $cityName;
      $this->provinceCode = $provinceCode;
      $this->provinceName = $provinceName;
      $this->postalCode = $postalCode;
      $this->countryCode = $countryCode;
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
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ApiErrorReason", false)) {
  /**
   * Interface that has a reason return an associated service error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ApiErrorReason";

    /**
     * @access public
     * @var tnsAdErrorReason
     */
    public $AdErrorReason;

    /**
     * @access public
     * @var tnsAdExtensionErrorReason
     */
    public $AdExtensionErrorReason;

    /**
     * @access public
     * @var tnsAdGroupAdErrorReason
     */
    public $AdGroupAdErrorReason;

    /**
     * @access public
     * @var tnsAdGroupCriterionErrorReason
     */
    public $AdGroupCriterionErrorReason;

    /**
     * @access public
     * @var tnsAdGroupServiceErrorReason
     */
    public $AdGroupServiceErrorReason;

    /**
     * @access public
     * @var tnsAdxErrorReason
     */
    public $AdxErrorReason;

    /**
     * @access public
     * @var tnsAuthenticationErrorReason
     */
    public $AuthenticationErrorReason;

    /**
     * @access public
     * @var tnsAuthorizationErrorReason
     */
    public $AuthorizationErrorReason;

    /**
     * @access public
     * @var tnsBetaErrorReason
     */
    public $BetaErrorReason;

    /**
     * @access public
     * @var tnsBiddingErrorReason
     */
    public $BiddingErrorReason;

    /**
     * @access public
     * @var tnsBiddingErrorsReason
     */
    public $BiddingErrorsReason;

    /**
     * @access public
     * @var tnsBiddingTransitionErrorReason
     */
    public $BiddingTransitionErrorReason;

    /**
     * @access public
     * @var tnsBudgetErrorReason
     */
    public $BudgetErrorReason;

    /**
     * @access public
     * @var tnsBulkMutateJobErrorReason
     */
    public $BulkMutateJobErrorReason;

    /**
     * @access public
     * @var tnsCampaignAdExtensionErrorReason
     */
    public $CampaignAdExtensionErrorReason;

    /**
     * @access public
     * @var tnsCampaignCriterionErrorReason
     */
    public $CampaignCriterionErrorReason;

    /**
     * @access public
     * @var tnsCampaignErrorReason
     */
    public $CampaignErrorReason;

    /**
     * @access public
     * @var tnsClientTermsErrorReason
     */
    public $ClientTermsErrorReason;

    /**
     * @access public
     * @var tnsCollectionSizeErrorReason
     */
    public $CollectionSizeErrorReason;

    /**
     * @access public
     * @var tnsCriterionErrorReason
     */
    public $CriterionErrorReason;

    /**
     * @access public
     * @var tnsDatabaseErrorReason
     */
    public $DatabaseErrorReason;

    /**
     * @access public
     * @var tnsDateErrorReason
     */
    public $DateErrorReason;

    /**
     * @access public
     * @var tnsDateRangeErrorReason
     */
    public $DateRangeErrorReason;

    /**
     * @access public
     * @var tnsDistinctErrorReason
     */
    public $DistinctErrorReason;

    /**
     * @access public
     * @var tnsEntityAccessDeniedReason
     */
    public $EntityAccessDeniedReason;

    /**
     * @access public
     * @var tnsEntityCountLimitExceededReason
     */
    public $EntityCountLimitExceededReason;

    /**
     * @access public
     * @var tnsEntityNotFoundReason
     */
    public $EntityNotFoundReason;

    /**
     * @access public
     * @var tnsExperimentErrorReason
     */
    public $ExperimentErrorReason;

    /**
     * @access public
     * @var tnsFeedItemErrorReason
     */
    public $FeedItemErrorReason;

    /**
     * @access public
     * @var tnsForwardCompatibilityErrorReason
     */
    public $ForwardCompatibilityErrorReason;

    /**
     * @access public
     * @var tnsFunctionErrorReason
     */
    public $FunctionErrorReason;

    /**
     * @access public
     * @var tnsFunctionParsingErrorReason
     */
    public $FunctionParsingErrorReason;

    /**
     * @access public
     * @var tnsIdErrorReason
     */
    public $IdErrorReason;

    /**
     * @access public
     * @var tnsImageErrorReason
     */
    public $ImageErrorReason;

    /**
     * @access public
     * @var tnsInternalApiErrorReason
     */
    public $InternalApiErrorReason;

    /**
     * @access public
     * @var tnsJobErrorReason
     */
    public $JobErrorReason;

    /**
     * @access public
     * @var tnsMediaErrorReason
     */
    public $MediaErrorReason;

    /**
     * @access public
     * @var tnsMultiplierErrorReason
     */
    public $MultiplierErrorReason;

    /**
     * @access public
     * @var tnsNewEntityCreationErrorReason
     */
    public $NewEntityCreationErrorReason;

    /**
     * @access public
     * @var tnsNotEmptyErrorReason
     */
    public $NotEmptyErrorReason;

    /**
     * @access public
     * @var tnsNullErrorReason
     */
    public $NullErrorReason;

    /**
     * @access public
     * @var tnsOperationAccessDeniedReason
     */
    public $OperationAccessDeniedReason;

    /**
     * @access public
     * @var tnsOperatorErrorReason
     */
    public $OperatorErrorReason;

    /**
     * @access public
     * @var tnsPagingErrorReason
     */
    public $PagingErrorReason;

    /**
     * @access public
     * @var tnsPolicyViolationErrorReason
     */
    public $PolicyViolationErrorReason;

    /**
     * @access public
     * @var tnsQueryErrorReason
     */
    public $QueryErrorReason;

    /**
     * @access public
     * @var tnsQuotaCheckErrorReason
     */
    public $QuotaCheckErrorReason;

    /**
     * @access public
     * @var tnsQuotaErrorReason
     */
    public $QuotaErrorReason;

    /**
     * @access public
     * @var tnsRangeErrorReason
     */
    public $RangeErrorReason;

    /**
     * @access public
     * @var tnsRateExceededErrorReason
     */
    public $RateExceededErrorReason;

    /**
     * @access public
     * @var tnsReadOnlyErrorReason
     */
    public $ReadOnlyErrorReason;

    /**
     * @access public
     * @var tnsRegionCodeErrorReason
     */
    public $RegionCodeErrorReason;

    /**
     * @access public
     * @var tnsRejectedErrorReason
     */
    public $RejectedErrorReason;

    /**
     * @access public
     * @var tnsRequestErrorReason
     */
    public $RequestErrorReason;

    /**
     * @access public
     * @var tnsRequiredErrorReason
     */
    public $RequiredErrorReason;

    /**
     * @access public
     * @var tnsSelectorErrorReason
     */
    public $SelectorErrorReason;

    /**
     * @access public
     * @var tnsSettingErrorReason
     */
    public $SettingErrorReason;

    /**
     * @access public
     * @var tnsSizeLimitErrorReason
     */
    public $SizeLimitErrorReason;

    /**
     * @access public
     * @var tnsStatsQueryErrorReason
     */
    public $StatsQueryErrorReason;

    /**
     * @access public
     * @var tnsStringLengthErrorReason
     */
    public $StringLengthErrorReason;

    /**
     * @access public
     * @var tnsTargetErrorReason
     */
    public $TargetErrorReason;

    /**
     * @access public
     * @var tnsUrlErrorReason
     */
    public $UrlErrorReason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($AdErrorReason = null, $AdExtensionErrorReason = null, $AdGroupAdErrorReason = null, $AdGroupCriterionErrorReason = null, $AdGroupServiceErrorReason = null, $AdxErrorReason = null, $AuthenticationErrorReason = null, $AuthorizationErrorReason = null, $BetaErrorReason = null, $BiddingErrorReason = null, $BiddingErrorsReason = null, $BiddingTransitionErrorReason = null, $BudgetErrorReason = null, $BulkMutateJobErrorReason = null, $CampaignAdExtensionErrorReason = null, $CampaignCriterionErrorReason = null, $CampaignErrorReason = null, $ClientTermsErrorReason = null, $CollectionSizeErrorReason = null, $CriterionErrorReason = null, $DatabaseErrorReason = null, $DateErrorReason = null, $DateRangeErrorReason = null, $DistinctErrorReason = null, $EntityAccessDeniedReason = null, $EntityCountLimitExceededReason = null, $EntityNotFoundReason = null, $ExperimentErrorReason = null, $FeedItemErrorReason = null, $ForwardCompatibilityErrorReason = null, $FunctionErrorReason = null, $FunctionParsingErrorReason = null, $IdErrorReason = null, $ImageErrorReason = null, $InternalApiErrorReason = null, $JobErrorReason = null, $MediaErrorReason = null, $MultiplierErrorReason = null, $NewEntityCreationErrorReason = null, $NotEmptyErrorReason = null, $NullErrorReason = null, $OperationAccessDeniedReason = null, $OperatorErrorReason = null, $PagingErrorReason = null, $PolicyViolationErrorReason = null, $QueryErrorReason = null, $QuotaCheckErrorReason = null, $QuotaErrorReason = null, $RangeErrorReason = null, $RateExceededErrorReason = null, $ReadOnlyErrorReason = null, $RegionCodeErrorReason = null, $RejectedErrorReason = null, $RequestErrorReason = null, $RequiredErrorReason = null, $SelectorErrorReason = null, $SettingErrorReason = null, $SizeLimitErrorReason = null, $StatsQueryErrorReason = null, $StringLengthErrorReason = null, $TargetErrorReason = null, $UrlErrorReason = null) {
      $this->AdErrorReason = $AdErrorReason;
      $this->AdExtensionErrorReason = $AdExtensionErrorReason;
      $this->AdGroupAdErrorReason = $AdGroupAdErrorReason;
      $this->AdGroupCriterionErrorReason = $AdGroupCriterionErrorReason;
      $this->AdGroupServiceErrorReason = $AdGroupServiceErrorReason;
      $this->AdxErrorReason = $AdxErrorReason;
      $this->AuthenticationErrorReason = $AuthenticationErrorReason;
      $this->AuthorizationErrorReason = $AuthorizationErrorReason;
      $this->BetaErrorReason = $BetaErrorReason;
      $this->BiddingErrorReason = $BiddingErrorReason;
      $this->BiddingErrorsReason = $BiddingErrorsReason;
      $this->BiddingTransitionErrorReason = $BiddingTransitionErrorReason;
      $this->BudgetErrorReason = $BudgetErrorReason;
      $this->BulkMutateJobErrorReason = $BulkMutateJobErrorReason;
      $this->CampaignAdExtensionErrorReason = $CampaignAdExtensionErrorReason;
      $this->CampaignCriterionErrorReason = $CampaignCriterionErrorReason;
      $this->CampaignErrorReason = $CampaignErrorReason;
      $this->ClientTermsErrorReason = $ClientTermsErrorReason;
      $this->CollectionSizeErrorReason = $CollectionSizeErrorReason;
      $this->CriterionErrorReason = $CriterionErrorReason;
      $this->DatabaseErrorReason = $DatabaseErrorReason;
      $this->DateErrorReason = $DateErrorReason;
      $this->DateRangeErrorReason = $DateRangeErrorReason;
      $this->DistinctErrorReason = $DistinctErrorReason;
      $this->EntityAccessDeniedReason = $EntityAccessDeniedReason;
      $this->EntityCountLimitExceededReason = $EntityCountLimitExceededReason;
      $this->EntityNotFoundReason = $EntityNotFoundReason;
      $this->ExperimentErrorReason = $ExperimentErrorReason;
      $this->FeedItemErrorReason = $FeedItemErrorReason;
      $this->ForwardCompatibilityErrorReason = $ForwardCompatibilityErrorReason;
      $this->FunctionErrorReason = $FunctionErrorReason;
      $this->FunctionParsingErrorReason = $FunctionParsingErrorReason;
      $this->IdErrorReason = $IdErrorReason;
      $this->ImageErrorReason = $ImageErrorReason;
      $this->InternalApiErrorReason = $InternalApiErrorReason;
      $this->JobErrorReason = $JobErrorReason;
      $this->MediaErrorReason = $MediaErrorReason;
      $this->MultiplierErrorReason = $MultiplierErrorReason;
      $this->NewEntityCreationErrorReason = $NewEntityCreationErrorReason;
      $this->NotEmptyErrorReason = $NotEmptyErrorReason;
      $this->NullErrorReason = $NullErrorReason;
      $this->OperationAccessDeniedReason = $OperationAccessDeniedReason;
      $this->OperatorErrorReason = $OperatorErrorReason;
      $this->PagingErrorReason = $PagingErrorReason;
      $this->PolicyViolationErrorReason = $PolicyViolationErrorReason;
      $this->QueryErrorReason = $QueryErrorReason;
      $this->QuotaCheckErrorReason = $QuotaCheckErrorReason;
      $this->QuotaErrorReason = $QuotaErrorReason;
      $this->RangeErrorReason = $RangeErrorReason;
      $this->RateExceededErrorReason = $RateExceededErrorReason;
      $this->ReadOnlyErrorReason = $ReadOnlyErrorReason;
      $this->RegionCodeErrorReason = $RegionCodeErrorReason;
      $this->RejectedErrorReason = $RejectedErrorReason;
      $this->RequestErrorReason = $RequestErrorReason;
      $this->RequiredErrorReason = $RequiredErrorReason;
      $this->SelectorErrorReason = $SelectorErrorReason;
      $this->SettingErrorReason = $SettingErrorReason;
      $this->SizeLimitErrorReason = $SizeLimitErrorReason;
      $this->StatsQueryErrorReason = $StatsQueryErrorReason;
      $this->StringLengthErrorReason = $StringLengthErrorReason;
      $this->TargetErrorReason = $TargetErrorReason;
      $this->UrlErrorReason = $UrlErrorReason;
    }

  }
}

if (!class_exists("ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AuthorizationError", false)) {
  /**
   * Errors encountered when trying to authorize a user.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Bid", false)) {
  /**
   * Represents a bid of a certain amount.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Bid {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BidMultiplier", false)) {
  /**
   * Represents a multiplier to modify a bid. The final value after
   * modification is represented by the multiplied bid value.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BidMultiplier {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddableAdGroupCriterion", false)) {
  /**
   * A biddable (positive) criterion in an adgroup.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddableAdGroupCriterion extends AdGroupCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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
     * @access public
     * @var UrlList
     */
    public $finalUrls;

    /**
     * @access public
     * @var UrlList
     */
    public $finalMobileUrls;

    /**
     * @access public
     * @var string
     */
    public $trackingUrlTemplate;

    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userStatus = null, $systemServingStatus = null, $approvalStatus = null, $disapprovalReasons = null, $destinationUrl = null, $experimentData = null, $firstPageCpc = null, $topOfPageCpc = null, $qualityInfo = null, $biddingStrategyConfiguration = null, $bidModifier = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $adGroupId = null, $criterionUse = null, $criterion = null, $labels = null, $forwardCompatibilityMap = null, $AdGroupCriterionType = null) {
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
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->adGroupId = $adGroupId;
      $this->criterionUse = $criterionUse;
      $this->criterion = $criterion;
      $this->labels = $labels;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->AdGroupCriterionType = $AdGroupCriterionType;
    }

  }
}

if (!class_exists("BiddableAdGroupCriterionExperimentData", false)) {
  /**
   * Data associated with an advertiser experiment for this {@link BiddableAdGroupCriterion}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddableAdGroupCriterionExperimentData {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingError", false)) {
  /**
   * Represents bidding errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingErrors", false)) {
  /**
   * Represents error codes for bidding strategy entities.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingErrors extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingScheme", false)) {
  /**
   * Base class for all bidding schemes.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingStrategyConfiguration", false)) {
  /**
   * Encapsulates the information about bids and bidding strategies.
   * 
   * <p>Bidding Strategy can be set on campaigns, ad groups or ad group criteria.
   * <p>A bidding strategy can be set using one of the following:
   * <ul>
   * <li>{@linkplain BiddingStrategyConfiguration#biddingScheme bidding scheme}</li>
   * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyType bidding strategy type}</li>
   * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyId bidding strategy ID} for
   * flexible bid strategies.</li>
   * </ul>
   * <p>If the bidding strategy type is used, then schemes are created using default values.
   * 
   * <p>Bids can be set only on ad groups and ad group criteria. They cannot be set on campaigns.
   * Multiple bids can be set at the same time. Only the bids that apply to the effective
   * bidding strategy will be used. Effective bidding strategy is considered to be the directly
   * attached strategy or inherited strategy from above level(s) when there?s no directly attached
   * strategy.
   * 
   * <p>For more information on flexible bidding, visit the
   * <a href="https://support.google.com/adwords/answer/2979071">Help Center</a>.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingStrategyConfiguration {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingTransitionError", false)) {
  /**
   * Bidding transition errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingTransitionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BiddingTransitionError";

    /**
     * @access public
     * @var tnsBiddingTransitionErrorReason
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

if (!class_exists("Bids", false)) {
  /**
   * Base class for all bids.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BillingSummary", false)) {
  /**
   * Represents the billing summary of the job that provides the overall cost of
   * the job's operations, i.e., for the work done <i>by</i> the job. This
   * therefore excludes the cost of operating on the job itself - setting up the
   * job, polling for its status, retrieving the result, etc.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BillingSummary {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BillingSummary";

    /**
     * @access public
     * @var integer
     */
    public $numOperations;

    /**
     * @access public
     * @var integer
     */
    public $numUnits;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($numOperations = null, $numUnits = null) {
      $this->numOperations = $numOperations;
      $this->numUnits = $numUnits;
    }

  }
}

if (!class_exists("Budget", false)) {
  /**
   * Budgets are used for managing the amount of money spent on AdWords.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Budget {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Budget";

    /**
     * @access public
     * @var integer
     */
    public $budgetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsBudgetBudgetPeriod
     */
    public $period;

    /**
     * @access public
     * @var Money
     */
    public $amount;

    /**
     * @access public
     * @var tnsBudgetBudgetDeliveryMethod
     */
    public $deliveryMethod;

    /**
     * @access public
     * @var integer
     */
    public $referenceCount;

    /**
     * @access public
     * @var boolean
     */
    public $isExplicitlyShared;

    /**
     * @access public
     * @var tnsBudgetBudgetStatus
     */
    public $status;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($budgetId = null, $name = null, $period = null, $amount = null, $deliveryMethod = null, $referenceCount = null, $isExplicitlyShared = null, $status = null) {
      $this->budgetId = $budgetId;
      $this->name = $name;
      $this->period = $period;
      $this->amount = $amount;
      $this->deliveryMethod = $deliveryMethod;
      $this->referenceCount = $referenceCount;
      $this->isExplicitlyShared = $isExplicitlyShared;
      $this->status = $status;
    }

  }
}

if (!class_exists("BudgetError", false)) {
  /**
   * A list of all the error codes being used by the common budget domain package.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BudgetError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BudgetError";

    /**
     * @access public
     * @var tnsBudgetErrorReason
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

if (!class_exists("BudgetOptimizerBiddingScheme", false)) {
  /**
   * In budget optimizer, Google automatically places bids for the user based on
   * their daily/monthly budget.
   * 
   * <p><b>Note:</b>
   * This bidding strategy has been deprecated and replaced with
   * {@linkplain TargetSpendBiddingScheme TargetSpend}. We no longer allow
   * advertisers to opt into this strategy--{@code BudgetOptimizerBiddingScheme}
   * solely exists so that advertisers can access campaigns that had specified
   * this strategy.</p>
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BudgetOptimizerBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BulkMutateJobError", false)) {
  /**
   * Bulk mutate job handling errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BulkMutateJobError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BulkMutateJobError";

    /**
     * @access public
     * @var tnsBulkMutateJobErrorReason
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

if (!class_exists("BulkMutateJobPolicy", false)) {
  /**
   * A basic job policy.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BulkMutateJobPolicy {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BulkMutateJobPolicy";

    /**
     * @access public
     * @var integer[]
     */
    public $prerequisiteJobIds;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($prerequisiteJobIds = null) {
      $this->prerequisiteJobIds = $prerequisiteJobIds;
    }

  }
}

if (!class_exists("Campaign", false)) {
  /**
   * Data representing an AdWords campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Campaign {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Campaign";

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
     * @var tnsCampaignStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsServingStatus
     */
    public $servingStatus;

    /**
     * @access public
     * @var string
     */
    public $startDate;

    /**
     * @access public
     * @var string
     */
    public $endDate;

    /**
     * @access public
     * @var Budget
     */
    public $budget;

    /**
     * @access public
     * @var ConversionOptimizerEligibility
     */
    public $conversionOptimizerEligibility;

    /**
     * @access public
     * @var tnsAdServingOptimizationStatus
     */
    public $adServingOptimizationStatus;

    /**
     * @access public
     * @var FrequencyCap
     */
    public $frequencyCap;

    /**
     * @access public
     * @var Setting[]
     */
    public $settings;

    /**
     * @access public
     * @var tnsAdvertisingChannelType
     */
    public $advertisingChannelType;

    /**
     * @access public
     * @var NetworkSetting
     */
    public $networkSetting;

    /**
     * @access public
     * @var Label[]
     */
    public $labels;

    /**
     * @access public
     * @var BiddingStrategyConfiguration
     */
    public $biddingStrategyConfiguration;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * @access public
     * @var boolean
     */
    public $displaySelect;

    /**
     * @access public
     * @var string
     */
    public $trackingUrlTemplate;

    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $status = null, $servingStatus = null, $startDate = null, $endDate = null, $budget = null, $conversionOptimizerEligibility = null, $adServingOptimizationStatus = null, $frequencyCap = null, $settings = null, $advertisingChannelType = null, $networkSetting = null, $labels = null, $biddingStrategyConfiguration = null, $forwardCompatibilityMap = null, $displaySelect = null, $trackingUrlTemplate = null, $urlCustomParameters = null) {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->servingStatus = $servingStatus;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->budget = $budget;
      $this->conversionOptimizerEligibility = $conversionOptimizerEligibility;
      $this->adServingOptimizationStatus = $adServingOptimizationStatus;
      $this->frequencyCap = $frequencyCap;
      $this->settings = $settings;
      $this->advertisingChannelType = $advertisingChannelType;
      $this->networkSetting = $networkSetting;
      $this->labels = $labels;
      $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->displaySelect = $displaySelect;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
    }

  }
}

if (!class_exists("CampaignAdExtension", false)) {
  /**
   * Represents a campaign level ad extension. A campaign ad extension specifies
   * a campaign and an ad extension which can extend any ad under that campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignAdExtension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignAdExtension";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var AdExtension
     */
    public $adExtension;

    /**
     * @access public
     * @var tnsCampaignAdExtensionStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsCampaignAdExtensionApprovalStatus
     */
    public $approvalStatus;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $adExtension = null, $status = null, $approvalStatus = null) {
      $this->campaignId = $campaignId;
      $this->adExtension = $adExtension;
      $this->status = $status;
      $this->approvalStatus = $approvalStatus;
    }

  }
}

if (!class_exists("CampaignAdExtensionError", false)) {
  /**
   * CampaignAdExtension errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignAdExtensionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignAdExtensionError";

    /**
     * @access public
     * @var tnsCampaignAdExtensionErrorReason
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

if (!class_exists("CampaignCriterion", false)) {
  /**
   * Represents a campaign level criterion.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignCriterion";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var boolean
     */
    public $isNegative;

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * @access public
     * @var string
     */
    public $CampaignCriterionType;
    private $_parameterMap = array(
      "CampaignCriterion.Type" => "CampaignCriterionType",
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

    public function __construct($campaignId = null, $isNegative = null, $criterion = null, $bidModifier = null, $forwardCompatibilityMap = null, $CampaignCriterionType = null) {
      $this->campaignId = $campaignId;
      $this->isNegative = $isNegative;
      $this->criterion = $criterion;
      $this->bidModifier = $bidModifier;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->CampaignCriterionType = $CampaignCriterionType;
    }

  }
}

if (!class_exists("CampaignCriterionError", false)) {
  /**
   * Base error class for Campaign Criterion Service.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignCriterionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignCriterionError";

    /**
     * @access public
     * @var tnsCampaignCriterionErrorReason
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

if (!class_exists("CampaignError", false)) {
  /**
   * Base error class for Campaign Service.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignError";

    /**
     * @access public
     * @var tnsCampaignErrorReason
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

if (!class_exists("CampaignLabel", false)) {
  /**
   * Manages the labels associated with a campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignLabel {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignLabel";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var integer
     */
    public $labelId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $labelId = null) {
      $this->campaignId = $campaignId;
      $this->labelId = $labelId;
    }

  }
}

if (!class_exists("ClientTermsError", false)) {
  /**
   * Error due to user not accepting the AdWords terms of service.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ClientTermsError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("CollectionSizeError", false)) {
  /**
   * Errors associated with the size of the given collection being
   * out of bounds.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CollectionSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CollectionSizeError";

    /**
     * @access public
     * @var tnsCollectionSizeErrorReason
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

if (!class_exists("ComparableValue", false)) {
  /**
   * Comparable types for constructing ranges with.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ConversionOptimizerBiddingScheme", false)) {
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
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConversionOptimizerBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ConversionOptimizerEligibility", false)) {
  /**
   * Eligibility data for Campaign to transition to Conversion Optimizer
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConversionOptimizerEligibility {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ConversionOptimizerEligibility";

    /**
     * @access public
     * @var boolean
     */
    public $eligible;

    /**
     * @access public
     * @var tnsConversionOptimizerEligibilityRejectionReason[]
     */
    public $rejectionReasons;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($eligible = null, $rejectionReasons = null) {
      $this->eligible = $eligible;
      $this->rejectionReasons = $rejectionReasons;
    }

  }
}

if (!class_exists("CpaBid", false)) {
  /**
   * CPA Bids.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CpaBid extends Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("CpcBid", false)) {
  /**
   * Manual click based bids.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CpcBid extends Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CpcBid";

    /**
     * @access public
     * @var Money
     */
    public $bid;

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

    public function __construct($bid = null, $cpcBidSource = null, $BidsType = null) {
      parent::__construct();
      $this->bid = $bid;
      $this->cpcBidSource = $cpcBidSource;
      $this->BidsType = $BidsType;
    }

  }
}

if (!class_exists("CpmBid", false)) {
  /**
   * Manual impression based bids.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CpmBid extends Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Criterion", false)) {
  /**
   * Represents a criterion (such as a keyword, placement, or vertical).
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("CriterionError", false)) {
  /**
   * Error class used for reporting criteria related errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("CriterionParameter", false)) {
  /**
   * Base type of criterion parameters.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("CustomParameter", false)) {
  /**
   * CustomParameter is used to map a custom parameter key to its value.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CustomParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CustomParameter";

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
     * @access public
     * @var boolean
     */
    public $isRemove;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $value = null, $isRemove = null) {
      $this->key = $key;
      $this->value = $value;
      $this->isRemove = $isRemove;
    }

  }
}

if (!class_exists("CustomParameters", false)) {
  /**
   * CustomParameters holds a list of CustomParameters to be treated as a map.
   * It has a special field used to indicate that the current map should be cleared and replaced
   * with this new map.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CustomParameters {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CustomParameters";

    /**
     * @access public
     * @var CustomParameter[]
     */
    public $parameters;

    /**
     * @access public
     * @var boolean
     */
    public $doReplace;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($parameters = null, $doReplace = null) {
      $this->parameters = $parameters;
      $this->doReplace = $doReplace;
    }

  }
}

if (!class_exists("DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("DateError", false)) {
  /**
   * Errors associated with invalid dates and date ranges.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DateError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("DateRangeError", false)) {
  /**
   * A list of all the error codes being used for date range error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DateRangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "DateRangeError";

    /**
     * @access public
     * @var tnsDateRangeErrorReason
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

if (!class_exists("DeprecatedAd", false)) {
  /**
   * Represents a deprecated ad.
   * 
   * Deprecated ads can be deleted, but cannot be created.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DeprecatedAd extends Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "DeprecatedAd";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsDeprecatedAdType
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

    public function __construct($name = null, $type = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      parent::__construct();
      $this->name = $name;
      $this->type = $type;
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("Dimensions", false)) {
  /**
   * Represents a simple height-width dimension.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Dimensions {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Dimensions";

    /**
     * @access public
     * @var integer
     */
    public $width;

    /**
     * @access public
     * @var integer
     */
    public $height;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($width = null, $height = null) {
      $this->width = $width;
      $this->height = $height;
    }

  }
}

if (!class_exists("DistinctError", false)) {
  /**
   * Errors related to distinct ids or content.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("EnhancedCpcBiddingScheme", false)) {
  /**
   * Enhanced CPC is a bidding strategy that raises your bids for clicks that seem more likely to
   * lead to a conversion and lowers them for clicks where they seem less likely.
   * 
   * This bidding scheme does not support criteria level bidding strategy overrides.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class EnhancedCpcBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("EntityAccessDenied", false)) {
  /**
   * Reports permission problems trying to access an entity.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class EntityAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("EntityCountLimitExceeded", false)) {
  /**
   * Signals that an entity count limit was exceeded for some level.
   * For example, too many criteria for a campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class EntityCountLimitExceeded extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("EntityNotFound", false)) {
  /**
   * An id did not correspond to an entity, or it referred to an entity which does not belong to the
   * customer.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class EntityNotFound extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ExemptionRequest", false)) {
  /**
   * A request to be exempted from a {@link PolicyViolationError}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ExemptionRequest {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ExperimentError", false)) {
  /**
   * The error reason represented by an enum.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ExperimentError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("FeedItem", false)) {
  /**
   * Represents an item in a feed.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItem {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItem";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $feedItemId;

    /**
     * @access public
     * @var tnsFeedItemStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $startTime;

    /**
     * @access public
     * @var string
     */
    public $endTime;

    /**
     * @access public
     * @var FeedItemAttributeValue[]
     */
    public $attributeValues;

    /**
     * @access public
     * @var FeedItemValidationDetail[]
     */
    public $validationDetails;

    /**
     * @access public
     * @var FeedItemDevicePreference
     */
    public $devicePreference;

    /**
     * @access public
     * @var FeedItemScheduling
     */
    public $scheduling;

    /**
     * @access public
     * @var FeedItemCampaignTargeting
     */
    public $campaignTargeting;

    /**
     * @access public
     * @var FeedItemAdGroupTargeting
     */
    public $adGroupTargeting;

    /**
     * @access public
     * @var Keyword
     */
    public $keywordTargeting;

    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($feedId = null, $feedItemId = null, $status = null, $startTime = null, $endTime = null, $attributeValues = null, $validationDetails = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $urlCustomParameters = null) {
      $this->feedId = $feedId;
      $this->feedItemId = $feedItemId;
      $this->status = $status;
      $this->startTime = $startTime;
      $this->endTime = $endTime;
      $this->attributeValues = $attributeValues;
      $this->validationDetails = $validationDetails;
      $this->devicePreference = $devicePreference;
      $this->scheduling = $scheduling;
      $this->campaignTargeting = $campaignTargeting;
      $this->adGroupTargeting = $adGroupTargeting;
      $this->keywordTargeting = $keywordTargeting;
      $this->urlCustomParameters = $urlCustomParameters;
    }

  }
}

if (!class_exists("FeedItemAdGroupTargeting", false)) {
  /**
   * Specifies the adgroup the request context must match in order for
   * the feed item to be considered eligible for serving (aka the targeted adgroup).
   * E.g., if the below adgroup targeting is set to adgroup = X, then the feed
   * item can only serve under adgroup X.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemAdGroupTargeting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemAdGroupTargeting";

    /**
     * @access public
     * @var integer
     */
    public $TargetingAdGroupId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($TargetingAdGroupId = null) {
      $this->TargetingAdGroupId = $TargetingAdGroupId;
    }

  }
}

if (!class_exists("FeedItemAttributeError", false)) {
  /**
   * Contains validation error details for a set of feed attributes.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemAttributeError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemAttributeError";

    /**
     * @access public
     * @var integer[]
     */
    public $feedAttributeIds;

    /**
     * @access public
     * @var integer
     */
    public $validationErrorCode;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($feedAttributeIds = null, $validationErrorCode = null) {
      $this->feedAttributeIds = $feedAttributeIds;
      $this->validationErrorCode = $validationErrorCode;
    }

  }
}

if (!class_exists("FeedItemAttributeValue", false)) {
  /**
   * Represents a feed item's value for a particular feed attribute. A feed item's value is
   * composed of a collection of these attribute values.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemAttributeValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemAttributeValue";

    /**
     * @access public
     * @var integer
     */
    public $feedAttributeId;

    /**
     * @access public
     * @var integer
     */
    public $integerValue;

    /**
     * @access public
     * @var double
     */
    public $doubleValue;

    /**
     * @access public
     * @var boolean
     */
    public $booleanValue;

    /**
     * @access public
     * @var string
     */
    public $stringValue;

    /**
     * @access public
     * @var integer[]
     */
    public $integerValues;

    /**
     * @access public
     * @var double[]
     */
    public $doubleValues;

    /**
     * @access public
     * @var boolean[]
     */
    public $booleanValues;

    /**
     * @access public
     * @var string[]
     */
    public $stringValues;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($feedAttributeId = null, $integerValue = null, $doubleValue = null, $booleanValue = null, $stringValue = null, $integerValues = null, $doubleValues = null, $booleanValues = null, $stringValues = null) {
      $this->feedAttributeId = $feedAttributeId;
      $this->integerValue = $integerValue;
      $this->doubleValue = $doubleValue;
      $this->booleanValue = $booleanValue;
      $this->stringValue = $stringValue;
      $this->integerValues = $integerValues;
      $this->doubleValues = $doubleValues;
      $this->booleanValues = $booleanValues;
      $this->stringValues = $stringValues;
    }

  }
}

if (!class_exists("FeedItemCampaignTargeting", false)) {
  /**
   * Specifies the campaign the request context must match in order for
   * the feed item to be considered eligible for serving (aka the targeted campaign).
   * E.g., if the below campaign targeting is set to campaignId = X, then the feed
   * item can only serve under campaign X.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemCampaignTargeting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemCampaignTargeting";

    /**
     * @access public
     * @var integer
     */
    public $TargetingCampaignId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($TargetingCampaignId = null) {
      $this->TargetingCampaignId = $TargetingCampaignId;
    }

  }
}

if (!class_exists("FeedItemDevicePreference", false)) {
  /**
   * Represents a FeedItem device preference.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemDevicePreference {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemDevicePreference";

    /**
     * @access public
     * @var integer
     */
    public $devicePreference;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($devicePreference = null) {
      $this->devicePreference = $devicePreference;
    }

  }
}

if (!class_exists("FeedItemError", false)) {
  /**
   * FeedItemService related errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemError";

    /**
     * @access public
     * @var tnsFeedItemErrorReason
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

if (!class_exists("FeedItemSchedule", false)) {
  /**
   * Represents a FeedItem schedule, which specifies a time interval on a given day
   * when the feed item may serve. The FeedItemSchedule times are in the account's time zone.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemSchedule {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemSchedule";

    /**
     * @access public
     * @var tnsDayOfWeek
     */
    public $dayOfWeek;

    /**
     * @access public
     * @var integer
     */
    public $startHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $startMinute;

    /**
     * @access public
     * @var integer
     */
    public $endHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $endMinute;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($dayOfWeek = null, $startHour = null, $startMinute = null, $endHour = null, $endMinute = null) {
      $this->dayOfWeek = $dayOfWeek;
      $this->startHour = $startHour;
      $this->startMinute = $startMinute;
      $this->endHour = $endHour;
      $this->endMinute = $endMinute;
    }

  }
}

if (!class_exists("FeedItemScheduling", false)) {
  /**
   * Represents a collection of FeedItem schedules specifying all time intervals for which
   * the feed item may serve. Any time range not covered by the specified FeedItemSchedules will
   * prevent the feed item from serving during those times.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemScheduling {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemScheduling";

    /**
     * @access public
     * @var FeedItemSchedule[]
     */
    public $feedItemSchedules;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($feedItemSchedules = null) {
      $this->feedItemSchedules = $feedItemSchedules;
    }

  }
}

if (!class_exists("FeedItemValidationDetail", false)) {
  /**
   * Contains offline-validation and approval results for a given FeedItem and FeedMapping. Each
   * validation detail indicates any issues found on the feed item when used in the context
   * of the feed mapping.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemValidationDetail {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemValidationDetail";

    /**
     * @access public
     * @var integer
     */
    public $feedMappingId;

    /**
     * @access public
     * @var tnsFeedItemValidationDetailValidationStatus
     */
    public $validationStatus;

    /**
     * @access public
     * @var FeedItemAttributeError[]
     */
    public $validationErrors;

    /**
     * @access public
     * @var tnsFeedItemValidationDetailApprovalStatus
     */
    public $approvalStatus;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($feedMappingId = null, $validationStatus = null, $validationErrors = null, $approvalStatus = null) {
      $this->feedMappingId = $feedMappingId;
      $this->validationStatus = $validationStatus;
      $this->validationErrors = $validationErrors;
      $this->approvalStatus = $approvalStatus;
    }

  }
}

if (!class_exists("ForwardCompatibilityError", false)) {
  /**
   * A ForwardComptibilityError represents possible errors when using the forwardCompatibilityMap
   * in some of the common services.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ForwardCompatibilityError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("FrequencyCap", false)) {
  /**
   * A frequency cap is the maximum number of times an ad (or some set of ads) can
   * be shown to a user over a particular time period.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FrequencyCap {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FrequencyCap";

    /**
     * @access public
     * @var integer
     */
    public $impressions;

    /**
     * @access public
     * @var tnsTimeUnit
     */
    public $timeUnit;

    /**
     * @access public
     * @var tnsLevel
     */
    public $level;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($impressions = null, $timeUnit = null, $level = null) {
      $this->impressions = $impressions;
      $this->timeUnit = $timeUnit;
      $this->level = $level;
    }

  }
}

if (!class_exists("FeedFunction", false)) {
  /**
   * Represents a function where its operator is applied to its argument operands
   * resulting in a return value. It has the form
   * (Operand... Operator Operand...). The type of the return value depends on
   * the operator being applied and the type of the operands.
   * 
   * <p class="special">Operands per function is limited to <b>20</b>.</p>
   * 
   * <p>Here is a code example:</p>
   * 
   * <pre><code>
   * 
   * // For example "feed_attribute == 30" can be represented as:
   * FeedId feedId = (FeedId of Feed associated with feed_attribute)
   * FeedAttributeId feedAttributeId = (FeedAttributeId of feed_attribute)
   * Function function = new Function();
   * function.setLhsOperand(
   * Arrays.asList((Operand) new FeedAttributeOperand(feedId, feedAttributeId)));
   * function.setOperator(Operator.IN);
   * function.setRhsOperand(
   * Arrays.asList((Operand) new ConstantOperand(30L)));
   * 
   * // Another example matching on multiple values:
   * "feed_item_id IN (10, 20, 30)" can be represented as:
   * 
   * Function function = new Function();
   * function.setLhsOperand(
   * Arrays.asList((Operand) new RequestContextOperand(ContextType.FEED_ITEM_ID)));
   * function.setOperator(Operator.IN);
   * function.setRhsOperand(Arrays.asList(
   * (Operand) new ConstantOperand(10L), new ConstantOperand(20L), new ConstantOperand(30L)));
   * </code></pre>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedFunction {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Function";

    /**
     * @access public
     * @var tnsFunctionOperator
     */
    public $operator;

    /**
     * @access public
     * @var FunctionArgumentOperand[]
     */
    public $lhsOperand;

    /**
     * @access public
     * @var FunctionArgumentOperand[]
     */
    public $rhsOperand;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operator = null, $lhsOperand = null, $rhsOperand = null) {
      $this->operator = $operator;
      $this->lhsOperand = $lhsOperand;
      $this->rhsOperand = $rhsOperand;
    }

  }
}

if (!class_exists("FunctionError", false)) {
  /**
   * Errors that indicate issues with the function.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FunctionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FunctionError";

    /**
     * @access public
     * @var tnsFunctionErrorReason
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

if (!class_exists("FunctionParsingError", false)) {
  /**
   * An error resulting from a failure to parse the textual representation of a function.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FunctionParsingError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FunctionParsingError";

    /**
     * @access public
     * @var tnsFunctionParsingErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $offendingText;

    /**
     * @access public
     * @var integer
     */
    public $offendingTextIndex;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $offendingText = null, $offendingTextIndex = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->offendingText = $offendingText;
      $this->offendingTextIndex = $offendingTextIndex;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Gender", false)) {
  /**
   * Represents a Gender criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Gender extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("GeoPoint", false)) {
  /**
   * Specifies a geo location with the supplied latitude/longitude.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GeoPoint {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "GeoPoint";

    /**
     * @access public
     * @var integer
     */
    public $latitudeInMicroDegrees;

    /**
     * @access public
     * @var integer
     */
    public $longitudeInMicroDegrees;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($latitudeInMicroDegrees = null, $longitudeInMicroDegrees = null) {
      $this->latitudeInMicroDegrees = $latitudeInMicroDegrees;
      $this->longitudeInMicroDegrees = $longitudeInMicroDegrees;
    }

  }
}

if (!class_exists("IdError", false)) {
  /**
   * Errors associated with the ids.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class IdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ImageAd", false)) {
  /**
   * Represents an ImageAd.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ImageAd extends Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ImageAd";

    /**
     * @access public
     * @var Image
     */
    public $image;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var integer
     */
    public $adToCopyImageFrom;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($image = null, $name = null, $adToCopyImageFrom = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      parent::__construct();
      $this->image = $image;
      $this->name = $name;
      $this->adToCopyImageFrom = $adToCopyImageFrom;
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("ImageError", false)) {
  /**
   * Error class for errors associated with parsing image data.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ImageError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ImageError";

    /**
     * @access public
     * @var tnsImageErrorReason
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

if (!class_exists("InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("IpBlock", false)) {
  /**
   * Criterion used for IP exclusions. We allow:
   * 
   * <ul>
   * <li>IPv4 and IPv6 addresses</li>
   * <li>individual addresses (192.168.0.1)</li>
   * <li>masks for individual addresses (192.168.0.1/32)</li>
   * <li>masks for Class C networks (192.168.0.1/24)</li>
   * </ul>
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class IpBlock extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "IpBlock";

    /**
     * @access public
     * @var string
     */
    public $ipAddress;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ipAddress = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->ipAddress = $ipAddress;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Job", false)) {
  /**
   * Represents an asynchronous macro unit of work.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Job {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Job";

    /**
     * @access public
     * @var ApiErrorReason
     */
    public $failureReason;

    /**
     * @access public
     * @var JobStats
     */
    public $stats;

    /**
     * @access public
     * @var BillingSummary
     */
    public $billingSummary;

    /**
     * @access public
     * @var string
     */
    public $JobType;
    private $_parameterMap = array(
      "Job.Type" => "JobType",
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

    public function __construct($failureReason = null, $stats = null, $billingSummary = null, $JobType = null) {
      $this->failureReason = $failureReason;
      $this->stats = $stats;
      $this->billingSummary = $billingSummary;
      $this->JobType = $JobType;
    }

  }
}

if (!class_exists("JobError", false)) {
  /**
   * Job handling errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class JobError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "JobError";

    /**
     * @access public
     * @var tnsJobErrorReason
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

if (!class_exists("JobEvent", false)) {
  /**
   * An event defined by a status change of a job.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class JobEvent {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "JobEvent";

    /**
     * @access public
     * @var string
     */
    public $dateTime;

    /**
     * @access public
     * @var string
     */
    public $JobEventType;
    private $_parameterMap = array(
      "JobEvent.Type" => "JobEventType",
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

    public function __construct($dateTime = null, $JobEventType = null) {
      $this->dateTime = $dateTime;
      $this->JobEventType = $JobEventType;
    }

  }
}

if (!class_exists("JobResult", false)) {
  /**
   * Represents the result data of a job. This contains both the results of
   * successfully processed operations as well as errors returned by failed
   * operations.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class JobResult {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "JobResult";

    /**
     * @access public
     * @var SimpleMutateResult
     */
    public $SimpleMutateResult;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($SimpleMutateResult = null) {
      $this->SimpleMutateResult = $SimpleMutateResult;
    }

  }
}

if (!class_exists("JobSelector", false)) {
  /**
   * For selecting jobs whose information will be returned from a get method call
   * of a job service.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class JobSelector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "JobSelector";

    /**
     * @access public
     * @var boolean
     */
    public $includeHistory;

    /**
     * @access public
     * @var boolean
     */
    public $includeStats;

    /**
     * @access public
     * @var string
     */
    public $JobSelectorType;
    private $_parameterMap = array(
      "JobSelector.Type" => "JobSelectorType",
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

    public function __construct($includeHistory = null, $includeStats = null, $JobSelectorType = null) {
      $this->includeHistory = $includeHistory;
      $this->includeStats = $includeStats;
      $this->JobSelectorType = $JobSelectorType;
    }

  }
}

if (!class_exists("JobStats", false)) {
  /**
   * Job-handling statistics.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class JobStats {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "JobStats";

    /**
     * @access public
     * @var integer
     */
    public $progressPercent;

    /**
     * @access public
     * @var integer
     */
    public $pendingTimeMillis;

    /**
     * @access public
     * @var integer
     */
    public $processingTimeMillis;

    /**
     * @access public
     * @var string
     */
    public $JobStatsType;
    private $_parameterMap = array(
      "JobStats.Type" => "JobStatsType",
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

    public function __construct($progressPercent = null, $pendingTimeMillis = null, $processingTimeMillis = null, $JobStatsType = null) {
      $this->progressPercent = $progressPercent;
      $this->pendingTimeMillis = $pendingTimeMillis;
      $this->processingTimeMillis = $processingTimeMillis;
      $this->JobStatsType = $JobStatsType;
    }

  }
}

if (!class_exists("Keyword", false)) {
  /**
   * Represents a keyword.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Keyword extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Label", false)) {
  /**
   * Represents a label that can be attached to entities such as campaign, ad group, ads,
   * criterion etc.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Label {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Label";

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
     * @var tnsLabelStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $LabelType;
    private $_parameterMap = array(
      "Label.Type" => "LabelType",
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

    public function __construct($id = null, $name = null, $status = null, $LabelType = null) {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->LabelType = $LabelType;
    }

  }
}

if (!class_exists("Language", false)) {
  /**
   * Represents a Language criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Language extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Language";

    /**
     * @access public
     * @var string
     */
    public $code;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($code = null, $name = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->code = $code;
      $this->name = $name;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Location", false)) {
  /**
   * Represents Location criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Location extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Location";

    /**
     * @access public
     * @var string
     */
    public $locationName;

    /**
     * @access public
     * @var string
     */
    public $displayType;

    /**
     * @access public
     * @var tnsLocationTargetingStatus
     */
    public $targetingStatus;

    /**
     * @access public
     * @var Location[]
     */
    public $parentLocations;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($locationName = null, $displayType = null, $targetingStatus = null, $parentLocations = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->locationName = $locationName;
      $this->displayType = $displayType;
      $this->targetingStatus = $targetingStatus;
      $this->parentLocations = $parentLocations;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("LocationExtension", false)) {
  /**
   * Location based ad extension.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LocationExtension extends AdExtension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "LocationExtension";

    /**
     * @access public
     * @var Address
     */
    public $address;

    /**
     * @access public
     * @var GeoPoint
     */
    public $geoPoint;

    /**
     * @access public
     * @var base64Binary
     */
    public $encodedLocation;

    /**
     * @access public
     * @var string
     */
    public $companyName;

    /**
     * @access public
     * @var string
     */
    public $phoneNumber;

    /**
     * @access public
     * @var tnsLocationExtensionSource
     */
    public $source;

    /**
     * @access public
     * @var integer
     */
    public $iconMediaId;

    /**
     * @access public
     * @var integer
     */
    public $imageMediaId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($address = null, $geoPoint = null, $encodedLocation = null, $companyName = null, $phoneNumber = null, $source = null, $iconMediaId = null, $imageMediaId = null, $id = null, $AdExtensionType = null) {
      parent::__construct();
      $this->address = $address;
      $this->geoPoint = $geoPoint;
      $this->encodedLocation = $encodedLocation;
      $this->companyName = $companyName;
      $this->phoneNumber = $phoneNumber;
      $this->source = $source;
      $this->iconMediaId = $iconMediaId;
      $this->imageMediaId = $imageMediaId;
      $this->id = $id;
      $this->AdExtensionType = $AdExtensionType;
    }

  }
}

if (!class_exists("LocationSyncExtension", false)) {
  /**
   * Local business center(LBC) sync extension that ties a LBC account with a campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LocationSyncExtension extends AdExtension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "LocationSyncExtension";

    /**
     * @access public
     * @var string
     */
    public $email;

    /**
     * @access public
     * @var OAuthInfo
     */
    public $oAuthInfo;

    /**
     * @access public
     * @var integer
     */
    public $iconMediaId;

    /**
     * @access public
     * @var boolean
     */
    public $shouldSyncUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($email = null, $oAuthInfo = null, $iconMediaId = null, $shouldSyncUrl = null, $id = null, $AdExtensionType = null) {
      parent::__construct();
      $this->email = $email;
      $this->oAuthInfo = $oAuthInfo;
      $this->iconMediaId = $iconMediaId;
      $this->shouldSyncUrl = $shouldSyncUrl;
      $this->id = $id;
      $this->AdExtensionType = $AdExtensionType;
    }

  }
}

if (!class_exists("ManualCPCAdGroupCriterionExperimentBidMultiplier", false)) {
  /**
   * AdGroupCriterion level bid multiplier used in manual CPC bidding strategies.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ManualCPCAdGroupCriterionExperimentBidMultiplier extends AdGroupCriterionExperimentBidMultiplier {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ManualCPCAdGroupExperimentBidMultipliers", false)) {
  /**
   * Adgroup level bid multipliers used in manual CPC bidding strategies.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ManualCPCAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ManualCPCAdGroupExperimentBidMultipliers";

    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxCpcMultiplier;

    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxContentCpcMultiplier;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($maxCpcMultiplier = null, $maxContentCpcMultiplier = null, $AdGroupExperimentBidMultipliersType = null) {
      parent::__construct();
      $this->maxCpcMultiplier = $maxCpcMultiplier;
      $this->maxContentCpcMultiplier = $maxContentCpcMultiplier;
      $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
    }

  }
}

if (!class_exists("ManualCPMAdGroupExperimentBidMultipliers", false)) {
  /**
   * Adgroup level bid multipliers used in manual CPM bidding strategy.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ManualCPMAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ManualCPMAdGroupExperimentBidMultipliers";

    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxCpmMultiplier;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($maxCpmMultiplier = null, $AdGroupExperimentBidMultipliersType = null) {
      parent::__construct();
      $this->maxCpmMultiplier = $maxCpmMultiplier;
      $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
    }

  }
}

if (!class_exists("ManualCpcBiddingScheme", false)) {
  /**
   * Manual click based bidding where user pays per click.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ManualCpcBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ManualCpmBiddingScheme", false)) {
  /**
   * Manual impression based bidding where user pays per thousand impressions.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ManualCpmBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Media", false)) {
  /**
   * Represents some kind of media.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Media {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Media";

    /**
     * @access public
     * @var integer
     */
    public $mediaId;

    /**
     * @access public
     * @var tnsMediaMediaType
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $referenceId;

    /**
     * @access public
     * @var Media_Size_DimensionsMapEntry[]
     */
    public $dimensions;

    /**
     * @access public
     * @var Media_Size_StringMapEntry[]
     */
    public $urls;

    /**
     * @access public
     * @var tnsMediaMimeType
     */
    public $mimeType;

    /**
     * @access public
     * @var string
     */
    public $sourceUrl;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var integer
     */
    public $fileSize;

    /**
     * @access public
     * @var string
     */
    public $creationTime;

    /**
     * @access public
     * @var string
     */
    public $MediaType;
    private $_parameterMap = array(
      "Media.Type" => "MediaType",
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

    public function __construct($mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null) {
      $this->mediaId = $mediaId;
      $this->type = $type;
      $this->referenceId = $referenceId;
      $this->dimensions = $dimensions;
      $this->urls = $urls;
      $this->mimeType = $mimeType;
      $this->sourceUrl = $sourceUrl;
      $this->name = $name;
      $this->fileSize = $fileSize;
      $this->creationTime = $creationTime;
      $this->MediaType = $MediaType;
    }

  }
}

if (!class_exists("MediaError", false)) {
  /**
   * Error class for media related errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MediaError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "MediaError";

    /**
     * @access public
     * @var tnsMediaErrorReason
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

if (!class_exists("Media_Size_DimensionsMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type Size
   * and value of type Dimensions.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Media_Size_DimensionsMapEntry {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Media_Size_DimensionsMapEntry";

    /**
     * @access public
     * @var tnsMediaSize
     */
    public $key;

    /**
     * @access public
     * @var Dimensions
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

if (!class_exists("Media_Size_StringMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type Size
   * and value of type String.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Media_Size_StringMapEntry {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Media_Size_StringMapEntry";

    /**
     * @access public
     * @var tnsMediaSize
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

if (!class_exists("MobileAd", false)) {
  /**
   * Represents a mobile ad.
   * 
   * <p>
   * A mobile ad can contain a click-to-call phone number, a link to a website,
   * or both.  You specify which features you want by setting certain fields, as
   * shown in the following table.  For example, to create a click-to-call mobile
   * ad, set the fields in the <b>Click-to-call</b> column. A hyphen indicates
   * that you should not set the corresponding field.
   * </p>
   * <p>
   * For more information, see
   * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
   * Create a mobile ad</a>.
   * </p>
   * 
   * <table summary="" style="clear: none">
   * <tr> <th scope="col"> Click-to-call </th>
   * <th scope="col"> Website       </th>
   * <th scope="col"> Both          </th></tr>
   * <tr> <td> headline        <br />
   * description     <br />
   * mobileCarriers  <br />
   * phoneNumber     <br />
   * countryCode     <br />
   * businessName    <br />
   * -               <br />
   * -               <br />
   * -               <br />
   * </td>
   * <td> headline        <br />
   * description     <br />
   * mobileCarriers  <br />
   * -               <br />
   * -               <br />
   * -               <br />
   * displayUrl      <br />
   * destinationUrl  <br />
   * markupLanguages <br />
   * </td>
   * <td> headline        <br />
   * description     <br />
   * mobileCarriers  <br />
   * phoneNumber     <br />
   * countryCode     <br />
   * businessName    <br />
   * displayUrl      <br />
   * destinationUrl  <br />
   * markupLanguages <br />
   * </td></tr>
   * </table>
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MobileAd extends Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "MobileAd";

    /**
     * @access public
     * @var string
     */
    public $headline;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var tnsMarkupLanguageType[]
     */
    public $markupLanguages;

    /**
     * @access public
     * @var string[]
     */
    public $mobileCarriers;

    /**
     * @access public
     * @var string
     */
    public $businessName;

    /**
     * @access public
     * @var string
     */
    public $countryCode;

    /**
     * @access public
     * @var string
     */
    public $phoneNumber;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($headline = null, $description = null, $markupLanguages = null, $mobileCarriers = null, $businessName = null, $countryCode = null, $phoneNumber = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      parent::__construct();
      $this->headline = $headline;
      $this->description = $description;
      $this->markupLanguages = $markupLanguages;
      $this->mobileCarriers = $mobileCarriers;
      $this->businessName = $businessName;
      $this->countryCode = $countryCode;
      $this->phoneNumber = $phoneNumber;
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("MobileAppCategory", false)) {
  /**
   * Represents the mobile app category to be targeted.
   * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
   * available mobile app categories</a>.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MobileAppCategory extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("MobileApplication", false)) {
  /**
   * Represents the mobile application to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MobileApplication extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("MobileDevice", false)) {
  /**
   * Represents a Mobile Device Criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MobileDevice extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "MobileDevice";

    /**
     * @access public
     * @var string
     */
    public $deviceName;

    /**
     * @access public
     * @var string
     */
    public $manufacturerName;

    /**
     * @access public
     * @var tnsMobileDeviceDeviceType
     */
    public $deviceType;

    /**
     * @access public
     * @var string
     */
    public $operatingSystemName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($deviceName = null, $manufacturerName = null, $deviceType = null, $operatingSystemName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->deviceName = $deviceName;
      $this->manufacturerName = $manufacturerName;
      $this->deviceType = $deviceType;
      $this->operatingSystemName = $operatingSystemName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("MobileImageAd", false)) {
  /**
   * Represents a mobile image ad.
   * 
   * <p>For more information, see
   * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
   * Create a mobile ad</a>.</p>
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MobileImageAd extends Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "MobileImageAd";

    /**
     * @access public
     * @var tnsMarkupLanguageType[]
     */
    public $markupLanguages;

    /**
     * @access public
     * @var string[]
     */
    public $mobileCarriers;

    /**
     * @access public
     * @var Image
     */
    public $image;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($markupLanguages = null, $mobileCarriers = null, $image = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      parent::__construct();
      $this->markupLanguages = $markupLanguages;
      $this->mobileCarriers = $mobileCarriers;
      $this->image = $image;
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("Money", false)) {
  /**
   * Represents a money amount.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Money extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("MultiplierError", false)) {
  /**
   * Represents errors in bid multipliers.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MultiplierError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "MultiplierError";

    /**
     * @access public
     * @var tnsMultiplierErrorReason
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

if (!class_exists("NegativeAdGroupCriterion", false)) {
  /**
   * A negative criterion in an adgroup.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NegativeAdGroupCriterion extends AdGroupCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, $labels = null, $forwardCompatibilityMap = null, $AdGroupCriterionType = null) {
      parent::__construct();
      $this->adGroupId = $adGroupId;
      $this->criterionUse = $criterionUse;
      $this->criterion = $criterion;
      $this->labels = $labels;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->AdGroupCriterionType = $AdGroupCriterionType;
    }

  }
}

if (!class_exists("NegativeCampaignCriterion", false)) {
  /**
   * A negative campaign criterion.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NegativeCampaignCriterion extends CampaignCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "NegativeCampaignCriterion";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $isNegative = null, $criterion = null, $bidModifier = null, $forwardCompatibilityMap = null, $CampaignCriterionType = null) {
      parent::__construct();
      $this->campaignId = $campaignId;
      $this->isNegative = $isNegative;
      $this->criterion = $criterion;
      $this->bidModifier = $bidModifier;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->CampaignCriterionType = $CampaignCriterionType;
    }

  }
}

if (!class_exists("NetworkSetting", false)) {
  /**
   * Network settings for a Campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NetworkSetting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "NetworkSetting";

    /**
     * @access public
     * @var boolean
     */
    public $targetGoogleSearch;

    /**
     * @access public
     * @var boolean
     */
    public $targetSearchNetwork;

    /**
     * @access public
     * @var boolean
     */
    public $targetContentNetwork;

    /**
     * @access public
     * @var boolean
     */
    public $targetPartnerSearchNetwork;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($targetGoogleSearch = null, $targetSearchNetwork = null, $targetContentNetwork = null, $targetPartnerSearchNetwork = null) {
      $this->targetGoogleSearch = $targetGoogleSearch;
      $this->targetSearchNetwork = $targetSearchNetwork;
      $this->targetContentNetwork = $targetContentNetwork;
      $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
    }

  }
}

if (!class_exists("NewEntityCreationError", false)) {
  /**
   * Error associated with creation of new entities.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NewEntityCreationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("NumberValue", false)) {
  /**
   * Number value types for constructing number valued ranges.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NumberValue extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("OAuthInfo", false)) {
  /**
   * Data used for authorization using OAuth.
   * For more information about OAuth, see:
   * {@link "https://developers.google.com/accounts/docs/OAuth2"}
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OAuthInfo {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "OAuthInfo";

    /**
     * @access public
     * @var string
     */
    public $httpMethod;

    /**
     * @access public
     * @var string
     */
    public $httpRequestUrl;

    /**
     * @access public
     * @var string
     */
    public $httpAuthorizationHeader;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($httpMethod = null, $httpRequestUrl = null, $httpAuthorizationHeader = null) {
      $this->httpMethod = $httpMethod;
      $this->httpRequestUrl = $httpRequestUrl;
      $this->httpAuthorizationHeader = $httpAuthorizationHeader;
    }

  }
}

if (!class_exists("FunctionArgumentOperand", false)) {
  /**
   * An operand that can be used in a function expression.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FunctionArgumentOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FunctionArgumentOperand";

    /**
     * @access public
     * @var string
     */
    public $FunctionArgumentOperandType;
    private $_parameterMap = array(
      "FunctionArgumentOperand.Type" => "FunctionArgumentOperandType",
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

    public function __construct($FunctionArgumentOperandType = null) {
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

  }
}

if (!class_exists("Operand", false)) {
  /**
   * A marker interface for entities that can be operated upon in mutate
   * operations.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Operand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Operand";

    /**
     * @access public
     * @var AdGroupAdLabel
     */
    public $AdGroupAdLabel;

    /**
     * @access public
     * @var AdGroupAd
     */
    public $AdGroupAd;

    /**
     * @access public
     * @var AdGroupBidModifier
     */
    public $AdGroupBidModifier;

    /**
     * @access public
     * @var AdGroupCriterionLabel
     */
    public $AdGroupCriterionLabel;

    /**
     * @access public
     * @var AdGroupCriterion
     */
    public $AdGroupCriterion;

    /**
     * @access public
     * @var AdGroupLabel
     */
    public $AdGroupLabel;

    /**
     * @access public
     * @var AdGroup
     */
    public $AdGroup;

    /**
     * @access public
     * @var Ad
     */
    public $Ad;

    /**
     * @access public
     * @var Budget
     */
    public $Budget;

    /**
     * @access public
     * @var CampaignAdExtension
     */
    public $CampaignAdExtension;

    /**
     * @access public
     * @var CampaignCriterion
     */
    public $CampaignCriterion;

    /**
     * @access public
     * @var CampaignLabel
     */
    public $CampaignLabel;

    /**
     * @access public
     * @var Campaign
     */
    public $Campaign;

    /**
     * @access public
     * @var FeedItem
     */
    public $FeedItem;

    /**
     * @access public
     * @var Job
     */
    public $Job;

    /**
     * @access public
     * @var Label
     */
    public $Label;

    /**
     * @access public
     * @var Media
     */
    public $Media;

    /**
     * @access public
     * @var PlaceHolder
     */
    public $PlaceHolder;

    /**
     * @access public
     * @var TargetList
     */
    public $TargetList;

    /**
     * @access public
     * @var Target
     */
    public $Target;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($AdGroupAdLabel = null, $AdGroupAd = null, $AdGroupBidModifier = null, $AdGroupCriterionLabel = null, $AdGroupCriterion = null, $AdGroupLabel = null, $AdGroup = null, $Ad = null, $Budget = null, $CampaignAdExtension = null, $CampaignCriterion = null, $CampaignLabel = null, $Campaign = null, $FeedItem = null, $Job = null, $Label = null, $Media = null, $PlaceHolder = null, $TargetList = null, $Target = null) {
      $this->AdGroupAdLabel = $AdGroupAdLabel;
      $this->AdGroupAd = $AdGroupAd;
      $this->AdGroupBidModifier = $AdGroupBidModifier;
      $this->AdGroupCriterionLabel = $AdGroupCriterionLabel;
      $this->AdGroupCriterion = $AdGroupCriterion;
      $this->AdGroupLabel = $AdGroupLabel;
      $this->AdGroup = $AdGroup;
      $this->Ad = $Ad;
      $this->Budget = $Budget;
      $this->CampaignAdExtension = $CampaignAdExtension;
      $this->CampaignCriterion = $CampaignCriterion;
      $this->CampaignLabel = $CampaignLabel;
      $this->Campaign = $Campaign;
      $this->FeedItem = $FeedItem;
      $this->Job = $Job;
      $this->Label = $Label;
      $this->Media = $Media;
      $this->PlaceHolder = $PlaceHolder;
      $this->TargetList = $TargetList;
      $this->Target = $Target;
    }

  }
}

if (!class_exists("OperatingSystemVersion", false)) {
  /**
   * Represents an Operating System Version Criterion.
   * <a href="/adwords/api/docs/appendix/mobileplatforms">View the complete
   * list of available mobile platforms</a>. You can also get the list from
   * {@link ConstantDataService#getOperatingSystemVersionCriterion ConstantDataService}.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OperatingSystemVersion extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "OperatingSystemVersion";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var integer
     */
    public $osMajorVersion;

    /**
     * @access public
     * @var integer
     */
    public $osMinorVersion;

    /**
     * @access public
     * @var tnsOperatingSystemVersionOperatorType
     */
    public $operatorType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($name = null, $osMajorVersion = null, $osMinorVersion = null, $operatorType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->name = $name;
      $this->osMajorVersion = $osMajorVersion;
      $this->osMinorVersion = $osMinorVersion;
      $this->operatorType = $operatorType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Operation", false)) {
  /**
   * This represents an operation that includes an operator and an operand
   * specified type.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("OperationAccessDenied", false)) {
  /**
   * Operation not permitted due to the invoked service's access policy.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("OperatorError", false)) {
  /**
   * Errors due to the use of unsupported operations.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OperatorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PageOnePromotedBiddingScheme", false)) {
  /**
   * Page-One Promoted bidding scheme, which sets max cpc bids to
   * target impressions on page one or page one promoted slots on google.com.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PageOnePromotedBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PagingError", false)) {
  /**
   * Error codes for pagination.
   * See {@link com.google.ads.api.services.common.pagination.Paging}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PagingError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PercentCpaBid", false)) {
  /**
   * Percentage CPA based bidding where user pays a percent of conversions.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PercentCpaBid extends Bids {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PercentCpaBiddingScheme", false)) {
  /**
   * Percentage CPA based bidding scheme attributes where user pays a percent of conversions.
   * This bidding strategy is available only to some advertisers.
   * <p>A campaign can only be created with PercentCPA bidding strategy. Existing
   * campaigns with a different bidding strategy cannot be transitioned to PercentCPA.
   * <p>Similarly, once created as a PercentCPA, a campaign cannot be transitioned to
   * any other bidding strategy.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PercentCpaBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PlaceHolder", false)) {
  /**
   * A place holder for a result which is not available.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PlaceHolder {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "PlaceHolder";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Placement", false)) {
  /**
   * A placement used for modifying bids for sites when targeting the content
   * network.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Placement extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PlacesOfInterestOperand", false)) {
  /**
   * This operand specifies a place of interest category for semantic targeting.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PlacesOfInterestOperand extends FunctionArgumentOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "PlacesOfInterestOperand";

    /**
     * @access public
     * @var tnsPlacesOfInterestOperandCategory
     */
    public $category;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($category = null, $FunctionArgumentOperandType = null) {
      parent::__construct();
      $this->category = $category;
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

  }
}

if (!class_exists("Platform", false)) {
  /**
   * Represents Platform criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Platform extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Platform";

    /**
     * @access public
     * @var string
     */
    public $platformName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($platformName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->platformName = $platformName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("PolicyViolationError", false)) {
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
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PolicyViolationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PolicyViolationErrorPart", false)) {
  /**
   * Points to a substring within an ad field or criterion.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PolicyViolationErrorPart {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PolicyViolationKey", false)) {
  /**
   * Key of the violation. The key is used for referring to a violation when
   * filing an exemption request.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PolicyViolationKey {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Product", false)) {
  /**
   * Product targeting criteria, represents a filter for products in the
   * product feed that is defined by the advertiser. The criteria is used to
   * determine the products in a Merchant Center account to be used with the
   * ProductAds in the AdGroup. This criteria is available only to some advertisers.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Product extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductAd", false)) {
  /**
   * Represents a product ad (known as a <a href=
   * "//support.google.com/adwords/bin/answer.py?answer=2456103">product
   * listing ad</a> in the AdWords user interface). A product ad displays
   * product data (managed using the Google Merchant Center) that is
   * pulled from the Google base product feed specified in the parent campaign's
   * {@linkplain ShoppingSetting shopping setting}.
   * 
   * <p class="caution"><b>Caution:</b> Product ads do not use {@link #url url} or
   * {@link #displayUrl displayUrl}; setting these fields on a product ad will
   * cause an error.</p>
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductAd extends Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ProductAd";

    /**
     * @access public
     * @var string
     */
    public $promotionLine;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($promotionLine = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      parent::__construct();
      $this->promotionLine = $promotionLine;
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("ProductCondition", false)) {
  /**
   * Conditions to filter the products defined in product feed for targeting.
   * The condition is defined as operand=argument.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductConditionOperand", false)) {
  /**
   * Attribute for the product condition.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductConditionOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductDimension", false)) {
  /**
   * Dimension by which to subdivide or filter products.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductOfferId", false)) {
  /**
   * An offer ID as specified by the merchant.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductOfferId extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductPartition", false)) {
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
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductPartition extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductSalesChannel", false)) {
  /**
   * Defines the sales channel of the shopping products to be advertised.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductSalesChannel extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ProductSalesChannel";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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
      parent::__construct();
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("ProductScope", false)) {
  /**
   * Scope of products. Contains a set of product dimensions, all of which a product has to match to
   * be included in the campaign. These product dimensions must have a value; the "everything else"
   * case without a value is not allowed.
   * 
   * <p>If there is no {@code ProductScope}, all products are included in the campaign. If a campaign
   * has more than one {@code ProductScope}, products are included as long as they match any.
   * Campaigns of {@link AdvertisingChannelType#SHOPPING} can have at most one {@code ProductScope}.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductScope extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ProductScope";

    /**
     * @access public
     * @var ProductDimension[]
     */
    public $dimensions;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($dimensions = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->dimensions = $dimensions;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("ProductType", false)) {
  /**
   * One element of a product type string at a certain level. Top-level product types are at level 1,
   * their children at level 2, and so on. We currently support up to 5 levels. The user must specify
   * a dimension type that indicates the level of the product type. All cases of the the same
   * subdivision must have the same dimension type (product type level).
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductType extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductTypeFull", false)) {
  /**
   * A full product type string. Category of the product according to the merchant's own
   * classification. Example:
   * 
   * <pre>{@code "Home & Garden > Kitchen & Dining > Kitchen Appliances > Refrigerators"}</pre>
   * 
   * <p>Not supported by campaigns of {@link AdvertisingChannelType#SHOPPING}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductTypeFull extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Proximity", false)) {
  /**
   * Represents a Proximity Criterion.
   * 
   * A proximity is an area within a certain radius of a point with the center point being described
   * by a lat/long pair. The caller may also alternatively provide address fields which will be
   * geocoded into a lat/long pair. Note: If a geoPoint value is provided, the address is not
   * used for calculating the lat/long to target.
   * <p>
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Proximity extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Proximity";

    /**
     * @access public
     * @var GeoPoint
     */
    public $geoPoint;

    /**
     * @access public
     * @var tnsProximityDistanceUnits
     */
    public $radiusDistanceUnits;

    /**
     * @access public
     * @var double
     */
    public $radiusInUnits;

    /**
     * @access public
     * @var Address
     */
    public $address;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($geoPoint = null, $radiusDistanceUnits = null, $radiusInUnits = null, $address = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->geoPoint = $geoPoint;
      $this->radiusDistanceUnits = $radiusDistanceUnits;
      $this->radiusInUnits = $radiusInUnits;
      $this->address = $address;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("QualityInfo", false)) {
  /**
   * Container for criterion quality information.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class QualityInfo {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("QueryError", false)) {
  /**
   * A QueryError represents possible errors for query parsing and execution.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class QueryError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("QuotaError", false)) {
  /**
   * Errors that are thrown if a quota limit is exceeded.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class QuotaError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "QuotaError";

    /**
     * @access public
     * @var tnsQuotaErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var integer
     */
    public $limit;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $limit = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->limit = $limit;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RateExceededError", false)) {
  /**
   * Signals that a call failed because a measured rate exceeded.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ReadOnlyError", false)) {
  /**
   * Errors from attempting to write to read-only fields.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RegionCodeError", false)) {
  /**
   * A list of all errors associated with the @RegionCode constraints.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RegionCodeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "RegionCodeError";

    /**
     * @access public
     * @var tnsRegionCodeErrorReason
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

if (!class_exists("RejectedError", false)) {
  /**
   * Indicates that a field was rejected due to compatibility issues.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RejectedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RequestError", false)) {
  /**
   * Encapsulates the generic errors thrown when there's an error with user
   * request.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RequestError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RichMediaAd", false)) {
  /**
   * Data associated with a rich media ad.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RichMediaAd extends Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "RichMediaAd";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var Dimensions
     */
    public $dimensions;

    /**
     * @access public
     * @var string
     */
    public $snippet;

    /**
     * @access public
     * @var string
     */
    public $impressionBeaconUrl;

    /**
     * @access public
     * @var integer
     */
    public $adDuration;

    /**
     * @access public
     * @var integer
     */
    public $certifiedVendorFormatId;

    /**
     * @access public
     * @var string
     */
    public $sourceUrl;

    /**
     * @access public
     * @var tnsRichMediaAdRichMediaAdType
     */
    public $richMediaAdType;

    /**
     * @access public
     * @var tnsRichMediaAdAdAttribute[]
     */
    public $adAttributes;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($name = null, $dimensions = null, $snippet = null, $impressionBeaconUrl = null, $adDuration = null, $certifiedVendorFormatId = null, $sourceUrl = null, $richMediaAdType = null, $adAttributes = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      parent::__construct();
      $this->name = $name;
      $this->dimensions = $dimensions;
      $this->snippet = $snippet;
      $this->impressionBeaconUrl = $impressionBeaconUrl;
      $this->adDuration = $adDuration;
      $this->certifiedVendorFormatId = $certifiedVendorFormatId;
      $this->sourceUrl = $sourceUrl;
      $this->richMediaAdType = $richMediaAdType;
      $this->adAttributes = $adAttributes;
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("SelectorError", false)) {
  /**
   * Represents possible error codes for {@link Selector}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SelectorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("LocationGroups", false)) {
  /**
   * Represents a criterion containing a function that when evaluated specifies how to target
   * based on the type of the location. These "location groups" are custom, dynamic bundles of
   * locations (for instance "High income areas in California" or "Airports in France").
   * 
   * <p>Examples:</p>
   * 
   * For income demographic targeting, we need to specify the income tier and the geo
   * which it targets. Areas in California that are in the top national income tier can be
   * represented by:
   * <pre><code>
   * Function function = new Function();
   * function.setLhsOperand(Arrays.asList(
   * (Operand) new IncomeOperand(IncomeTier.TIER_1));
   * function.setOperator(Operator.AND);
   * function.setRhsOperand(Arrays.asList(
   * (Operand) new GeoTargetOperand(Lists.newArrayList(new CriterionId(21137L))));
   * </code></pre>
   * 
   * For place of interest targeting, we need to specify the place of interest category and the geo
   * which it targets. Airports in France can be represented by:
   * <pre><code>
   * Function function = new Function();
   * function.setLhsOperand(Arrays.asList(
   * (Operand) new PlacesOfInterestOperand(PlacesOfInterestOperand.Category.AIRPORT));
   * function.setOperator(Operator.AND);
   * function.setRhsOperand(Arrays.asList(
   * (Operand) new GeoTargetOperand(Lists.newArrayList(new CriterionId(2250L))));
   * </code></pre>
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LocationGroups extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "LocationGroups";

    /**
     * @access public
     * @var Function
     */
    public $matchingFunction;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($matchingFunction = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->matchingFunction = $matchingFunction;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Setting", false)) {
  /**
   * Base type for AdWords campaign settings.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Setting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Setting";

    /**
     * @access public
     * @var string
     */
    public $SettingType;
    private $_parameterMap = array(
      "Setting.Type" => "SettingType",
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

    public function __construct($SettingType = null) {
      $this->SettingType = $SettingType;
    }

  }
}

if (!class_exists("SettingError", false)) {
  /**
   * Indicates a problem with campaign settings.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SettingError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "SettingError";

    /**
     * @access public
     * @var tnsSettingErrorReason
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

if (!class_exists("ShoppingSetting", false)) {
  /**
   * Setting for shopping campaigns. Defines the universe of products covered by the campaign.
   * Encapsulates a merchant ID, sales country, and campaign priority.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ShoppingSetting extends Setting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ShoppingSetting";

    /**
     * @access public
     * @var integer
     */
    public $merchantId;

    /**
     * @access public
     * @var string
     */
    public $salesCountry;

    /**
     * @access public
     * @var integer
     */
    public $campaignPriority;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($merchantId = null, $salesCountry = null, $campaignPriority = null, $SettingType = null) {
      parent::__construct();
      $this->merchantId = $merchantId;
      $this->salesCountry = $salesCountry;
      $this->campaignPriority = $campaignPriority;
      $this->SettingType = $SettingType;
    }

  }
}

if (!class_exists("SimpleMutateJob", false)) {
  /**
   * A mutation job, which was submitted using
   * {@link MutateJobService#mutate}, and will execute asynchronously
   * sometime after submission.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SimpleMutateJob extends Job {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "SimpleMutateJob";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var tnsBasicJobStatus
     */
    public $status;

    /**
     * @access public
     * @var JobEvent[]
     */
    public $history;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $status = null, $history = null, $failureReason = null, $stats = null, $billingSummary = null, $JobType = null) {
      parent::__construct();
      $this->id = $id;
      $this->status = $status;
      $this->history = $history;
      $this->failureReason = $failureReason;
      $this->stats = $stats;
      $this->billingSummary = $billingSummary;
      $this->JobType = $JobType;
    }

  }
}

if (!class_exists("SimpleMutateResult", false)) {
  /**
   * The results of a simple mutation job.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SimpleMutateResult {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "SimpleMutateResult";

    /**
     * @access public
     * @var Operand[]
     */
    public $results;

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

    public function __construct($results = null, $errors = null) {
      $this->results = $results;
      $this->errors = $errors;
    }

  }
}

if (!class_exists("SizeLimitError", false)) {
  /**
   * Indicates that the number of entries in the request or response exceeds the system limit.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("SoapResponseHeader", false)) {
  /**
   * Defines the elements within the header of a SOAP response.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("StatsQueryError", false)) {
  /**
   * Represents possible error codes when querying for stats.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class StatsQueryError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("StringLengthError", false)) {
  /**
   * Errors associated with the length of the given string being
   * out of bounds.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("String_StringMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type String
   * and value of type String.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class String_StringMapEntry {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Target", false)) {
  /**
   * Target abstract class.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Target {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Target";

    /**
     * @access public
     * @var string
     */
    public $TargetType;
    private $_parameterMap = array(
      "Target.Type" => "TargetType",
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

    public function __construct($TargetType = null) {
      $this->TargetType = $TargetType;
    }

  }
}

if (!class_exists("TargetCpaBiddingScheme", false)) {
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
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TargetCpaBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("TargetError", false)) {
  /**
   * A list of all the error codes being used by the common targeting package.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TargetError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TargetError";

    /**
     * @access public
     * @var tnsTargetErrorReason
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

if (!class_exists("TargetList", false)) {
  /**
   * Targets list abstract class (a list of a given type of targets along with their campaign ID).
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TargetList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TargetList";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var string
     */
    public $TargetListType;
    private $_parameterMap = array(
      "TargetList.Type" => "TargetListType",
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

    public function __construct($campaignId = null, $TargetListType = null) {
      $this->campaignId = $campaignId;
      $this->TargetListType = $TargetListType;
    }

  }
}

if (!class_exists("TargetingSettingDetail", false)) {
  /**
   * Specifies if criteria of this type group should be used to restrict
   * targeting, or if ads can serve anywhere and criteria are only used in
   * determining the bid.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TargetingSettingDetail {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TargetingSettingDetail";

    /**
     * @access public
     * @var tnsCriterionTypeGroup
     */
    public $criterionTypeGroup;

    /**
     * @access public
     * @var boolean
     */
    public $targetAll;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($criterionTypeGroup = null, $targetAll = null) {
      $this->criterionTypeGroup = $criterionTypeGroup;
      $this->targetAll = $targetAll;
    }

  }
}

if (!class_exists("TargetRoasBiddingScheme", false)) {
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
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TargetRoasBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("TargetSpendBiddingScheme", false)) {
  /**
   * Target Spend bidding scheme, in which Google automatically places
   * bids for the user based on their daily/monthly budget or optional
   * spend target.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TargetSpendBiddingScheme extends BiddingScheme {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("TargetingSetting", false)) {
  /**
   * Setting for targeting related features.
   * This is applicable at Campaign and AdGroup level.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TargetingSetting extends Setting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TargetingSetting";

    /**
     * @access public
     * @var TargetingSettingDetail[]
     */
    public $details;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($details = null, $SettingType = null) {
      parent::__construct();
      $this->details = $details;
      $this->SettingType = $SettingType;
    }

  }
}

if (!class_exists("TempAdUnionId", false)) {
  /**
   * Represents the temporary id for an ad union id, which the user can specify.
   * The temporary id can be used to group ads together during ad creation.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TempAdUnionId extends AdUnionId {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TempAdUnionId";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $AdUnionIdType = null) {
      parent::__construct();
      $this->id = $id;
      $this->AdUnionIdType = $AdUnionIdType;
    }

  }
}

if (!class_exists("TemplateAd", false)) {
  /**
   * Represents a <a href=
   * "//www.google.com/adwords/displaynetwork/plan-creative-campaigns/display-ad-builder.html"
   * >Display Ad Builder</a> template ad. A template ad is
   * composed of a template (specified by its ID) and the data that populates
   * the template's fields. For a list of available templates and their required
   * fields, see <a href="/adwords/api/docs/appendix/templateads">Template Ads</a>.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TemplateAd extends Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TemplateAd";

    /**
     * @access public
     * @var integer
     */
    public $templateId;

    /**
     * @access public
     * @var AdUnionId
     */
    public $adUnionId;

    /**
     * @access public
     * @var TemplateElement[]
     */
    public $templateElements;

    /**
     * @access public
     * @var Image
     */
    public $adAsImage;

    /**
     * @access public
     * @var Dimensions
     */
    public $dimensions;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var integer
     */
    public $duration;

    /**
     * @access public
     * @var integer
     */
    public $originAdId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($templateId = null, $adUnionId = null, $templateElements = null, $adAsImage = null, $dimensions = null, $name = null, $duration = null, $originAdId = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      parent::__construct();
      $this->templateId = $templateId;
      $this->adUnionId = $adUnionId;
      $this->templateElements = $templateElements;
      $this->adAsImage = $adAsImage;
      $this->dimensions = $dimensions;
      $this->name = $name;
      $this->duration = $duration;
      $this->originAdId = $originAdId;
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("TemplateElement", false)) {
  /**
   * Represents an element in a template. Each template element is composed
   * of a list of fields (actual value data).
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TemplateElement {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TemplateElement";

    /**
     * @access public
     * @var string
     */
    public $uniqueName;

    /**
     * @access public
     * @var TemplateElementField[]
     */
    public $fields;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($uniqueName = null, $fields = null) {
      $this->uniqueName = $uniqueName;
      $this->fields = $fields;
    }

  }
}

if (!class_exists("TemplateElementField", false)) {
  /**
   * Represents a field in a template element.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TemplateElementField {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TemplateElementField";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsTemplateElementFieldType
     */
    public $type;

    /**
     * @access public
     * @var string
     */
    public $fieldText;

    /**
     * @access public
     * @var Media
     */
    public $fieldMedia;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($name = null, $type = null, $fieldText = null, $fieldMedia = null) {
      $this->name = $name;
      $this->type = $type;
      $this->fieldText = $fieldText;
      $this->fieldMedia = $fieldMedia;
    }

  }
}

if (!class_exists("TextAd", false)) {
  /**
   * Represents a TextAd.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TextAd extends Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TextAd";

    /**
     * @access public
     * @var string
     */
    public $headline;

    /**
     * @access public
     * @var string
     */
    public $description1;

    /**
     * @access public
     * @var string
     */
    public $description2;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($headline = null, $description1 = null, $description2 = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      parent::__construct();
      $this->headline = $headline;
      $this->description1 = $description1;
      $this->description2 = $description2;
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("ThirdPartyRedirectAd", false)) {
  /**
   * Data associated with rich media extension attributes.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ThirdPartyRedirectAd extends RichMediaAd {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ThirdPartyRedirectAd";

    /**
     * @access public
     * @var boolean
     */
    public $isCookieTargeted;

    /**
     * @access public
     * @var boolean
     */
    public $isUserInterestTargeted;

    /**
     * @access public
     * @var boolean
     */
    public $isTagged;

    /**
     * @access public
     * @var tnsVideoType[]
     */
    public $videoTypes;

    /**
     * @access public
     * @var tnsThirdPartyRedirectAdExpandingDirection[]
     */
    public $expandingDirections;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($isCookieTargeted = null, $isUserInterestTargeted = null, $isTagged = null, $videoTypes = null, $expandingDirections = null, $name = null, $dimensions = null, $snippet = null, $impressionBeaconUrl = null, $adDuration = null, $certifiedVendorFormatId = null, $sourceUrl = null, $richMediaAdType = null, $adAttributes = null) {
      parent::__construct();
      $this->isCookieTargeted = $isCookieTargeted;
      $this->isUserInterestTargeted = $isUserInterestTargeted;
      $this->isTagged = $isTagged;
      $this->videoTypes = $videoTypes;
      $this->expandingDirections = $expandingDirections;
      $this->name = $name;
      $this->dimensions = $dimensions;
      $this->snippet = $snippet;
      $this->impressionBeaconUrl = $impressionBeaconUrl;
      $this->adDuration = $adDuration;
      $this->certifiedVendorFormatId = $certifiedVendorFormatId;
      $this->sourceUrl = $sourceUrl;
      $this->richMediaAdType = $richMediaAdType;
      $this->adAttributes = $adAttributes;
    }

  }
}

if (!class_exists("TrackingSetting", false)) {
  /**
   * Campaign level settings for tracking information.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TrackingSetting extends Setting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TrackingSetting";

    /**
     * @access public
     * @var string
     */
    public $trackingUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($trackingUrl = null, $SettingType = null) {
      parent::__construct();
      $this->trackingUrl = $trackingUrl;
      $this->SettingType = $SettingType;
    }

  }
}

if (!class_exists("UrlError", false)) {
  /**
   * Url Validation errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class UrlError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "UrlError";

    /**
     * @access public
     * @var tnsUrlErrorReason
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

if (!class_exists("UrlList", false)) {
  /**
   * Wrapper POJO for a list of URLs.  The list can be cleared if a request contains
   * a UrlList with an empty urls list.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class UrlList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "UrlList";

    /**
     * @access public
     * @var string[]
     */
    public $urls;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($urls = null) {
      $this->urls = $urls;
    }

  }
}

if (!class_exists("CriterionUserInterest", false)) {
  /**
   * User Interest represents a particular interest-based vertical to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionUserInterest extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("CriterionUserList", false)) {
  /**
   * UserList - represents a user list that is defined by the advertiser to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionUserList extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Vertical", false)) {
  /**
   * Use verticals to target or exclude placements in the Google Display Network
   * based on the category into which the placement falls (for example, "Pets &amp;
   * Animals/Pets/Dogs").
   * <a href="/adwords/api/docs/appendix/verticals">View the complete list
   * of available vertical categories.</a>
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Vertical extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Video", false)) {
  /**
   * Encapsulates a Video media identified by a MediaId.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Video extends Media {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Video";

    /**
     * @access public
     * @var integer
     */
    public $durationMillis;

    /**
     * @access public
     * @var string
     */
    public $streamingUrl;

    /**
     * @access public
     * @var boolean
     */
    public $readyToPlayOnTheWeb;

    /**
     * @access public
     * @var string
     */
    public $industryStandardCommercialIdentifier;

    /**
     * @access public
     * @var string
     */
    public $advertisingId;

    /**
     * @access public
     * @var string
     */
    public $youTubeVideoIdString;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($durationMillis = null, $streamingUrl = null, $readyToPlayOnTheWeb = null, $industryStandardCommercialIdentifier = null, $advertisingId = null, $youTubeVideoIdString = null, $mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null) {
      parent::__construct();
      $this->durationMillis = $durationMillis;
      $this->streamingUrl = $streamingUrl;
      $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
      $this->industryStandardCommercialIdentifier = $industryStandardCommercialIdentifier;
      $this->advertisingId = $advertisingId;
      $this->youTubeVideoIdString = $youTubeVideoIdString;
      $this->mediaId = $mediaId;
      $this->type = $type;
      $this->referenceId = $referenceId;
      $this->dimensions = $dimensions;
      $this->urls = $urls;
      $this->mimeType = $mimeType;
      $this->sourceUrl = $sourceUrl;
      $this->name = $name;
      $this->fileSize = $fileSize;
      $this->creationTime = $creationTime;
      $this->MediaType = $MediaType;
    }

  }
}

if (!class_exists("Webpage", false)) {
  /**
   * Criterion for targeting webpages of an advertiser's website. The
   * website domain name is specified at the campaign level.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Webpage extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("WebpageCondition", false)) {
  /**
   * Logical expression for targeting webpages of an advertiser's website.
   * 
   * <p>A condition is defined as {@code operand OP argument}
   * where {@code operand} is one of the values enumerated in
   * {@link WebpageConditionOperand}, and, based on this value,
   * {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class WebpageCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("WebpageParameter", false)) {
  /**
   * Parameter of Webpage criterion, expressed as a list of conditions, or
   * logical expressions, for targeting webpages of an advertiser's website.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class WebpageParameter extends CriterionParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("DynamicSearchAd", false)) {
  /**
   * Represents a dynamic search ad. This ad will have its headline and
   * destination URL auto-generated at serving time according to domain name
   * specific information provided by {@link DomainInfoExtension} linked at the
   * campaign level.
   * 
   * <p>Auto-generated fields: headline and destination URL (may contain an optional
   * tracking URL).</p>
   * 
   * <p><b>Required fields:</b> {@code description1}, {@code description2},
   * {@code displayUrl}.</p>
   * 
   * <p>The URL field must contain at least one of the following placeholder tags
   * (URL parameters):</p>
   * <ul>
   * <li>{unescapedlpurl}</li>
   * <li>{escapedlpurl}</li>
   * <li>{lpurlpath}</li>
   * <li>{lpurl}</li>
   * </ul>
   * 
   * <p>If no URL is specified, {unescapedlpurl} will be used as default.</p>
   * 
   * <ul>
   * <li>{unescapedlpurl} can only be used at the beginning of the URL field. It
   * will be replaced with the full landing page URL of the displayed ad. Extra query
   * parameters can be added to the end, e.g.: "{unescapedlpurl}?lang=en".</li>
   * 
   * <li>{escapedlpurl} will be replaced with the URL-encoded version of the full
   * landing page URL. This makes it suitable for use as a query parameter
   * value (e.g.: "http://www.3rdpartytracker.com/?lp={escapedlpurl}") but
   * not at the beginning of the URL field.</li>
   * 
   * <li>{lpurlpath} will be replaced with the path and query part of the landing
   * page URL and can be added to a different URL, e.g.:
   * "http://www.mygoodbusiness.com/tracking/{lpurlpath}".</li>
   * 
   * <li>{lpurl} encodes the "?" and "=" of the landing page URL making it suitable
   * for use as a query parameter. If found at the beginning of the URL field, it is
   * replaced by the {unescapedlpurl} value.
   * E.g.: "http://tracking.com/redir.php?tracking=xyz&url={lpurl}".</li>
   * </ul>
   * 
   * <p>There are also special rules that come into play depending on whether the
   * destination URL uses local click tracking or third-party click tracking.</p>
   * 
   * <p class="note">Note that {@code finalUrls} and {@code finalMobileUrls}
   * cannot be set for dynamic search ads.</p>
   * 
   * <p>For more information, see the article
   * <a href="//support.google.com/adwords/answer/2549100">Using dynamic tracking URLs</a>.
   * </p>
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DynamicSearchAd extends Ad {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "DynamicSearchAd";

    /**
     * @access public
     * @var string
     */
    public $description1;

    /**
     * @access public
     * @var string
     */
    public $description2;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($description1 = null, $description2 = null, $id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null) {
      parent::__construct();
      $this->description1 = $description1;
      $this->description2 = $description2;
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->devicePreference = $devicePreference;
      $this->AdType = $AdType;
    }

  }
}

if (!class_exists("AdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdExtensionErrorReason", false)) {
  /**
   * Account has been deleted
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdExtensionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdExtensionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdGroupAdApprovalStatus", false)) {
  /**
   * Represents the possible approval statuses.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdApprovalStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAd.ApprovalStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdGroupAdStatus", false)) {
  /**
   * The current status of an Ad.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAd.Status";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdGroupAdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAdError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdGroupCriterionErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupCriterionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AdGroupCriterionLimitExceededCriteriaLimitType", false)) {
  /**
   * The entity type that exceeded the limit.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupCriterionLimitExceededCriteriaLimitType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AdGroupServiceErrorReason", false)) {
  /**
   * The reasons for the adgroup service error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupServiceErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupServiceError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdGroupStatus", false)) {
  /**
   * Status of this ad group.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroup.Status";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdServingOptimizationStatus", false)) {
  /**
   * Ad serving status of campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdServingOptimizationStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdServingOptimizationStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdvertisingChannelType", false)) {
  /**
   * The channel type a campaign may target to serve on.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdvertisingChannelType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdvertisingChannelType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("AdxErrorReason", false)) {
  /**
   * The reasons for the AdX error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdxErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AgeRangeAgeRangeType", false)) {
  /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AgeRangeAgeRangeType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ApprovalStatus", false)) {
  /**
   * Approval status for the criterion.
   * Note: there are more states involved but we only expose two to users.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ApprovalStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AuthorizationErrorReason", false)) {
  /**
   * The reasons for the database error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BasicJobStatus", false)) {
  /**
   * A basic set of job statuses.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BasicJobStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BasicJobStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BetaErrorReason", false)) {
  /**
   * The reasons for the beta error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BetaErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BetaError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BidModifierSource", false)) {
  /**
   * Enumerates possible sources for bid modifier.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BidModifierSource {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BidModifierSource";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BidSource", false)) {
  /**
   * Indicate where a criterion's bid came from: criterion or the adgroup it
   * belongs to.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BidSource {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingErrorReason", false)) {
  /**
   * Reason for bidding error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingErrorsReason", false)) {
  /**
   * Cannot transition to new bidding strategy.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingErrorsReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingStrategySource", false)) {
  /**
   * Indicates where bidding strategy came from: campaign, adgroup or criterion.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingStrategySource {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingStrategyType", false)) {
  /**
   * The bidding strategy type.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingStrategyType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("BiddingTransitionErrorReason", false)) {
  /**
   * Reason for bidding transition error.
   * Used by the bidding transition capability service as the denial reason.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BiddingTransitionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BiddingTransitionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BudgetBudgetDeliveryMethod", false)) {
  /**
   * Budget delivery methods.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BudgetBudgetDeliveryMethod {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Budget.BudgetDeliveryMethod";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BudgetBudgetPeriod", false)) {
  /**
   * Budget periods.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BudgetBudgetPeriod {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Budget.BudgetPeriod";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BudgetBudgetStatus", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BudgetBudgetStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Budget.BudgetStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BudgetErrorReason", false)) {
  /**
   * The reasons for the budget error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BudgetErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BudgetError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("BulkMutateJobErrorReason", false)) {
  /**
   * The reasons for the bulk mutate job handling error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BulkMutateJobErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BulkMutateJobError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CampaignAdExtensionApprovalStatus", false)) {
  /**
   * Approval status of the CampaignAdExtension.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignAdExtensionApprovalStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignAdExtension.ApprovalStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CampaignAdExtensionStatus", false)) {
  /**
   * Status of the CampaignAdExtension.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignAdExtensionStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignAdExtension.Status";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CampaignAdExtensionErrorReason", false)) {
  /**
   * Cannot operate on an adextensions under the wrong campaign
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignAdExtensionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignAdExtensionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CampaignCriterionErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignCriterionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignCriterionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CampaignErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CampaignStatus", false)) {
  /**
   * Campaign status.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ClientTermsErrorReason", false)) {
  /**
   * Enums for the various reasons an error can be thrown as a result of
   * ClientTerms violation.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ClientTermsErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("CollectionSizeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CollectionSizeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CollectionSizeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ConstantOperandConstantType", false)) {
  /**
   * The types of constant operands.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConstantOperandConstantType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ConstantOperand.ConstantType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ConstantOperandUnit", false)) {
  /**
   * The units of constant operands, if applicable.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConstantOperandUnit {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ConstantOperand.Unit";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ContentLabelType", false)) {
  /**
   * Content label type.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ContentLabelType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ContentLabelType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ConversionOptimizerBiddingSchemeBidType", false)) {
  /**
   * Average cost-per-acquisition (targetCPA) bid type.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConversionOptimizerBiddingSchemeBidType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ConversionOptimizerBiddingSchemePricingMode", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConversionOptimizerBiddingSchemePricingMode {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ConversionOptimizerEligibilityRejectionReason", false)) {
  /**
   * Campaign is not active
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConversionOptimizerEligibilityRejectionReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ConversionOptimizerEligibility.RejectionReason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CriterionType", false)) {
  /**
   * The types of criteria.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("CriterionErrorReason", false)) {
  /**
   * Concrete type of criterion is required for ADD and SET operations.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("CriterionTypeGroup", false)) {
  /**
   * The list of groupings of criteria types.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionTypeGroup {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CriterionTypeGroup";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CriterionUse", false)) {
  /**
   * The way a criterion is used - biddable or negative.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionUse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("DateErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DateErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("DateRangeErrorReason", false)) {
  /**
   * The reasons for the date range error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DateRangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "DateRangeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("DayOfWeek", false)) {
  /**
   * Days of the week.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DayOfWeek {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

  }
}

if (!class_exists("DeprecatedAdType", false)) {
  /**
   * Video ad.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DeprecatedAdType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "DeprecatedAd.Type";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("DistinctErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("EntityAccessDeniedReason", false)) {
  /**
   * User did not have read access.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class EntityAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("EntityCountLimitExceededReason", false)) {
  /**
   * Limits at various levels of the account.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class EntityCountLimitExceededReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("EntityNotFoundReason", false)) {
  /**
   * The specified id refered to an entity which either doesn't exist or is not accessible to the
   * customer. e.g. campaign belongs to another customer.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class EntityNotFoundReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ExperimentDataStatus", false)) {
  /**
   * Status of the experimental change associated with an entity.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ExperimentDataStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ExperimentDeltaStatus", false)) {
  /**
   * Status of an entity denoting its type of experimental change in a campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ExperimentDeltaStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ExperimentErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ExperimentErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("FeedItemStatus", false)) {
  /**
   * Feed item is active
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItem.Status";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("FeedItemErrorReason", false)) {
  /**
   * The reasons for the error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("FeedItemValidationDetailApprovalStatus", false)) {
  /**
   * Feed item approval status.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemValidationDetailApprovalStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemValidationDetail.ApprovalStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("FeedItemValidationDetailValidationStatus", false)) {
  /**
   * Feed item validation status.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemValidationDetailValidationStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemValidationDetail.ValidationStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ForwardCompatibilityErrorReason", false)) {
  /**
   * The reason for the error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ForwardCompatibilityErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("FunctionOperator", false)) {
  /**
   * Operators that can be used in functions.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FunctionOperator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Function.Operator";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("FunctionErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FunctionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FunctionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("FunctionParsingErrorReason", false)) {
  /**
   * Function parsing error reason.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FunctionParsingErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FunctionParsingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("GenderGenderType", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GenderGenderType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("GeoTargetTypeSettingNegativeGeoTargetType", false)) {
  /**
   * The various signals a negative location target may use.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GeoTargetTypeSettingNegativeGeoTargetType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "GeoTargetTypeSetting.NegativeGeoTargetType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("GeoTargetTypeSettingPositiveGeoTargetType", false)) {
  /**
   * The various signals a positive location target may use.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GeoTargetTypeSettingPositiveGeoTargetType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "GeoTargetTypeSetting.PositiveGeoTargetType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("IdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class IdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ImageErrorReason", false)) {
  /**
   * The image is not valid.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ImageErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ImageError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("IncomeTier", false)) {
  /**
   * Income tiers that specify the income bracket a household falls under. TIER_1
   * belongs to the highest income bracket. The income bracket range associated with
   * each tier is defined per country and computed based on income percentiles.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class IncomeTier {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "IncomeTier";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("JobErrorReason", false)) {
  /**
   * The reasons for the job handling error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class JobErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "JobError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("KeywordMatchType", false)) {
  /**
   * Match type of a keyword. i.e. the way we match a keyword string with
   * search queries.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class KeywordMatchType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("LabelStatus", false)) {
  /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LabelStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Label.Status";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("Level", false)) {
  /**
   * The level on which the cap is to be applied.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Level {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Level";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("LocationExtensionSource", false)) {
  /**
   * From manual entry in adwords frontend
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LocationExtensionSource {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "LocationExtension.Source";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("LocationTargetingStatus", false)) {
  /**
   * Enum that represents the different Targeting Status values for a Location criterion.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LocationTargetingStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "LocationTargetingStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MarkupLanguageType", false)) {
  /**
   * Markup languages to use for mobile ads.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MarkupLanguageType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "MarkupLanguageType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MediaMediaType", false)) {
  /**
   * Media types
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MediaMediaType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Media.MediaType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MediaMimeType", false)) {
  /**
   * Mime types
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MediaMimeType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Media.MimeType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MediaSize", false)) {
  /**
   * Sizes for retrieving the original media
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MediaSize {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Media.Size";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MediaErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MediaErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "MediaError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MinuteOfHour", false)) {
  /**
   * Minutes in an hour.  Currently only 0, 15, 30, and 45 are supported
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MinuteOfHour {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

  }
}

if (!class_exists("MobileDeviceDeviceType", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MobileDeviceDeviceType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "MobileDevice.DeviceType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MultiplierErrorReason", false)) {
  /**
   * Reason for bidding error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MultiplierErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "MultiplierError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("MultiplierSource", false)) {
  /**
   * Denotes whether the bid multiplier is derived from the adgroup
   * or the criterion
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MultiplierSource {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("NewEntityCreationErrorReason", false)) {
  /**
   * Do not set the id field while creating new entities.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NewEntityCreationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("NotEmptyErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("OperatingSystemVersionOperatorType", false)) {
  /**
   * The operator type.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OperatingSystemVersionOperatorType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "OperatingSystemVersion.OperatorType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("OperationAccessDeniedReason", false)) {
  /**
   * The reasons for the operation access error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Operator", false)) {
  /**
   * This represents an operator that may be presented to an adsapi service.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Operator {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("OperatorErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OperatorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PageOnePromotedBiddingSchemeStrategyGoal", false)) {
  /**
   * First page on google.com.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PageOnePromotedBiddingSchemeStrategyGoal {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PagingErrorReason", false)) {
  /**
   * The reasons for errors when using pagination.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PagingErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("PlacesOfInterestOperandCategory", false)) {
  /**
   * Categories to identify places of interest.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PlacesOfInterestOperandCategory {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "PlacesOfInterestOperand.Category";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("PolicyViolationErrorReason", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PolicyViolationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "PolicyViolationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ProductCanonicalConditionCondition", false)) {
  /**
   * A canonical product condition.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductCanonicalConditionCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductDimensionType", false)) {
  /**
   * Type of product dimension.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductDimensionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductPartitionType", false)) {
  /**
   * Type of a product partition in a shopping campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductPartitionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProximityDistanceUnits", false)) {
  /**
   * The radius distance is expressed in either kilometers or miles.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProximityDistanceUnits {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Proximity.DistanceUnits";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("QueryErrorReason", false)) {
  /**
   * The reason for the query error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class QueryErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("QuotaCheckErrorReason", false)) {
  /**
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("QuotaErrorReason", false)) {
  /**
   * The reasons for the quota error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class QuotaErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RangeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RateExceededErrorReason", false)) {
  /**
   * The reason for the rate exceeded error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ReadOnlyErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RegionCodeErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RegionCodeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "RegionCodeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("RejectedErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RejectedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RequestErrorReason", false)) {
  /**
   * Error reason is unknown.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RequestErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RichMediaAdAdAttribute", false)) {
  /**
   * A set of attributes that describe the rich media ad capabilities.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RichMediaAdAdAttribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "RichMediaAd.AdAttribute";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("RichMediaAdRichMediaAdType", false)) {
  /**
   * Different types of rich media ad that are available to customers.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RichMediaAdRichMediaAdType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "RichMediaAd.RichMediaAdType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("SelectorErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SelectorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ServingStatus", false)) {
  /**
   * Campaign serving status.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ServingStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ServingStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("SettingErrorReason", false)) {
  /**
   * The reasons for the setting error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SettingErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "SettingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("SizeLimitErrorReason", false)) {
  /**
   * The reasons for Ad Scheduling errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("StatsQueryErrorReason", false)) {
  /**
   * The reasons for errors when querying for stats.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class StatsQueryErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("StringLengthErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("SystemServingStatus", false)) {
  /**
   * Reported by system to reflect the criterion's serving status.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SystemServingStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("TargetErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TargetErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TargetError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("TemplateElementFieldType", false)) {
  /**
   * Possible field types of template element fields.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TemplateElementFieldType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TemplateElementField.Type";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("ThirdPartyRedirectAdExpandingDirection", false)) {
  /**
   * Allowed expanding directions for ads that are expandable.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ThirdPartyRedirectAdExpandingDirection {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ThirdPartyRedirectAd.ExpandingDirection";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("TimeUnit", false)) {
  /**
   * Unit of time the cap is defined at.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TimeUnit {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TimeUnit";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("UrlErrorReason", false)) {
  /**
   * The reasons for the url error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class UrlErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "UrlError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("CriterionUserListMembershipStatus", false)) {
  /**
   * Membership status of the user list.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionUserListMembershipStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("UserStatus", false)) {
  /**
   * Specified by user to pause or unpause a criterion.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class UserStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("VideoType", false)) {
  /**
   * VideoType enum values that are permitted for video filterable
   * creative attribute IDs.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class VideoType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "VideoType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
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

if (!class_exists("WebpageConditionOperand", false)) {
  /**
   * Operand value of {@link WebpageCondition}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class WebpageConditionOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("MutateJobServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Query the status of existing jobs, both simple and bulk API.
   * <p>Use a {@link JobSelector} to query and return a list which may
   * contain both {@link BulkMutateJob} and/or {@link SimpleMutateJob}.</p>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MutateJobServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var JobSelector
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

if (!class_exists("MutateJobServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MutateJobServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Job[]
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

if (!class_exists("GetResult", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Query mutation results, of a {@code COMPLETED} job.
   * <p>Use a {@link JobSelector} to query and return either a
   * {@link BulkMutateResult} or a {@link SimpleMutateResult}. Submit only one job ID
   * at a time.</p>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GetResult {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var JobSelector
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

if (!class_exists("GetResultResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GetResultResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var JobResult
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

if (!class_exists("MutateJobServiceMutate", false)) {
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Simplified way of submitting a mutation job. The provided list of
   * operations, if valid, will create a new job with a unique id, which will
   * be returned. This id can later be used in invocations of
   * {@link #get} and {@link #getResult}. Policy can optionally be specified.
   * 
   * <p>When this method returns with success, the job will be in
   * {@code PROCESSING} or {@code PENDING} state and no further action is
   * needed for the job to get executed.</p>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MutateJobServiceMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Operation[]
     */
    public $operations;

    /**
     * @access public
     * @var BulkMutateJobPolicy
     */
    public $policy;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operations = null, $policy = null) {
      $this->operations = $operations;
      $this->policy = $policy;
    }

  }
}

if (!class_exists("MutateJobServiceMutateResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MutateJobServiceMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var SimpleMutateJob
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

if (!class_exists("AdError", false)) {
  /**
   * Base error class for Ad Service.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdError";

    /**
     * @access public
     * @var tnsAdErrorReason
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

if (!class_exists("AdExtensionError", false)) {
  /**
   * AdExtension errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdExtensionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdExtensionError";

    /**
     * @access public
     * @var tnsAdExtensionErrorReason
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

if (!class_exists("AdGroupAdCountLimitExceeded", false)) {
  /**
   * Indicates too many ads were added/enabled under the specified adgroup.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdCountLimitExceeded extends EntityCountLimitExceeded {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAdCountLimitExceeded";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->enclosingId = $enclosingId;
      $this->limit = $limit;
      $this->accountLimitType = $accountLimitType;
      $this->existingCount = $existingCount;
    }

  }
}

if (!class_exists("AdGroupAdError", false)) {
  /**
   * Error information for AdGroupAdService.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAdError";

    /**
     * @access public
     * @var tnsAdGroupAdErrorReason
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

if (!class_exists("AdGroupAdLabelOperation", false)) {
  /**
   * Operations for adding/removing labels from AdGroupAds.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdLabelOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAdLabelOperation";

    /**
     * @access public
     * @var AdGroupAdLabel
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

if (!class_exists("AdGroupAdOperation", false)) {
  /**
   * AdGroupAd service operations.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAdOperation";

    /**
     * @access public
     * @var AdGroupAd
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

if (!class_exists("AdGroupBidModifierOperation", false)) {
  /**
   * Operation used to create or mutate a AdGroupBidModifier.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupBidModifierOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupBidModifierOperation";

    /**
     * @access public
     * @var AdGroupBidModifier
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

if (!class_exists("AdGroupCriterionError", false)) {
  /**
   * Base error class for Ad Group Criterion Service.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupCriterionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AdGroupCriterionLabelOperation", false)) {
  /**
   * Operations for adding/removing labels from AdGroupCriterion.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupCriterionLabelOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupCriterionLabelOperation";

    /**
     * @access public
     * @var AdGroupCriterionLabel
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

if (!class_exists("AdGroupCriterionLimitExceeded", false)) {
  /**
   * Signals that too many criteria were added to some ad group.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupCriterionLimitExceeded extends EntityCountLimitExceeded {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AdGroupCriterionOperation", false)) {
  /**
   * Operation (add, remove and set) on adgroup criteria.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupCriterionOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AdGroupLabelOperation", false)) {
  /**
   * Operations for adding/removing labels from AdGroup.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupLabelOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupLabelOperation";

    /**
     * @access public
     * @var AdGroupLabel
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

if (!class_exists("AdGroupOperation", false)) {
  /**
   * AdGroup operations for adding/updating/removing adgroups.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupOperation";

    /**
     * @access public
     * @var AdGroup
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

if (!class_exists("AdGroupServiceError", false)) {
  /**
   * Represents possible error codes in AdGroupService.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupServiceError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupServiceError";

    /**
     * @access public
     * @var tnsAdGroupServiceErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $adGroupId = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->adGroupId = $adGroupId;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("AdSchedule", false)) {
  /**
   * Represents an AdSchedule Criterion.
   * AdSchedule is specified as day and time of the week criteria to target
   * the Ads.
   * <p><b>Note:</b> An AdSchedule may not have more than <b>six</b> intervals
   * in a day.</p>
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdSchedule extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdSchedule";

    /**
     * @access public
     * @var tnsDayOfWeek
     */
    public $dayOfWeek;

    /**
     * @access public
     * @var integer
     */
    public $startHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $startMinute;

    /**
     * @access public
     * @var integer
     */
    public $endHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $endMinute;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($dayOfWeek = null, $startHour = null, $startMinute = null, $endHour = null, $endMinute = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->dayOfWeek = $dayOfWeek;
      $this->startHour = $startHour;
      $this->startMinute = $startMinute;
      $this->endHour = $endHour;
      $this->endMinute = $endMinute;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("AdScheduleTarget", false)) {
  /**
   * Immutable structure to hold an ad schedule target.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdScheduleTarget extends Target {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdScheduleTarget";

    /**
     * @access public
     * @var tnsDayOfWeek
     */
    public $dayOfWeek;

    /**
     * @access public
     * @var integer
     */
    public $startHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $startMinute;

    /**
     * @access public
     * @var integer
     */
    public $endHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $endMinute;

    /**
     * @access public
     * @var double
     */
    public $bidMultiplier;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($dayOfWeek = null, $startHour = null, $startMinute = null, $endHour = null, $endMinute = null, $bidMultiplier = null, $TargetType = null) {
      parent::__construct();
      $this->dayOfWeek = $dayOfWeek;
      $this->startHour = $startHour;
      $this->startMinute = $startMinute;
      $this->endHour = $endHour;
      $this->endMinute = $endMinute;
      $this->bidMultiplier = $bidMultiplier;
      $this->TargetType = $TargetType;
    }

  }
}

if (!class_exists("AdScheduleTargetList", false)) {
  /**
   * List of ad schedule targets.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdScheduleTargetList extends TargetList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdScheduleTargetList";

    /**
     * @access public
     * @var AdScheduleTarget[]
     */
    public $targets;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($targets = null, $campaignId = null, $TargetListType = null) {
      parent::__construct();
      $this->targets = $targets;
      $this->campaignId = $campaignId;
      $this->TargetListType = $TargetListType;
    }

  }
}

if (!class_exists("AdxError", false)) {
  /**
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdxError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("AgeRange", false)) {
  /**
   * Represents an Age Range criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AgeRange extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("Audio", false)) {
  /**
   * Encapsulates an Audio media identified by a MediaId.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Audio extends Media {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Audio";

    /**
     * @access public
     * @var integer
     */
    public $durationMillis;

    /**
     * @access public
     * @var string
     */
    public $streamingUrl;

    /**
     * @access public
     * @var boolean
     */
    public $readyToPlayOnTheWeb;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($durationMillis = null, $streamingUrl = null, $readyToPlayOnTheWeb = null, $mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null) {
      parent::__construct();
      $this->durationMillis = $durationMillis;
      $this->streamingUrl = $streamingUrl;
      $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
      $this->mediaId = $mediaId;
      $this->type = $type;
      $this->referenceId = $referenceId;
      $this->dimensions = $dimensions;
      $this->urls = $urls;
      $this->mimeType = $mimeType;
      $this->sourceUrl = $sourceUrl;
      $this->name = $name;
      $this->fileSize = $fileSize;
      $this->creationTime = $creationTime;
      $this->MediaType = $MediaType;
    }

  }
}

if (!class_exists("BudgetOperation", false)) {
  /**
   * Operations for adding/updating Budget entities.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BudgetOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BudgetOperation";

    /**
     * @access public
     * @var Budget
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

if (!class_exists("BulkMutateJobSelector", false)) {
  /**
   * Specifies additional criteria for selecting bulk mutate jobs.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BulkMutateJobSelector extends JobSelector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BulkMutateJobSelector";

    /**
     * @access public
     * @var integer[]
     */
    public $jobIds;

    /**
     * @access public
     * @var integer
     */
    public $resultPartIndex;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($jobIds = null, $resultPartIndex = null, $includeHistory = null, $includeStats = null, $JobSelectorType = null) {
      parent::__construct();
      $this->jobIds = $jobIds;
      $this->resultPartIndex = $resultPartIndex;
      $this->includeHistory = $includeHistory;
      $this->includeStats = $includeStats;
      $this->JobSelectorType = $JobSelectorType;
    }

  }
}

if (!class_exists("CampaignAdExtensionOperation", false)) {
  /**
   * CampaignAdExtension service operation. <b>Note:</b> The {@code SET} operator
   * is not supported.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignAdExtensionOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignAdExtensionOperation";

    /**
     * @access public
     * @var CampaignAdExtension
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

if (!class_exists("CampaignCriterionOperation", false)) {
  /**
   * Generic operation (add, remove and set) for campaign criteria.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignCriterionOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignCriterionOperation";

    /**
     * @access public
     * @var CampaignCriterion
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

if (!class_exists("CampaignLabelOperation", false)) {
  /**
   * Operations for adding/removing labels from Campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignLabelOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignLabelOperation";

    /**
     * @access public
     * @var CampaignLabel
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

if (!class_exists("TextLabel", false)) {
  /**
   * Represent a display label entry.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TextLabel extends Label {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "TextLabel";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $status = null, $LabelType = null) {
      parent::__construct();
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->LabelType = $LabelType;
    }

  }
}

if (!class_exists("CampaignOperation", false)) {
  /**
   * An operation on an AdWords campaign.
   * <p class="note"><b>Note:</b> The <code>REMOVE</code> operator is not
   * supported. To remove a campaign, set its {@link Campaign#status status}
   * to {@code REMOVED}.</p>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignOperation";

    /**
     * @access public
     * @var Campaign
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

if (!class_exists("CampaignTargetOperation", false)) {
  /**
   * Sets a list of targets on a specified campaign.
   * <p class="note"><b>Note:</b> Only the <code>SET</code> operator is supported.</p>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignTargetOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "CampaignTargetOperation";

    /**
     * @access public
     * @var TargetList
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

if (!class_exists("Carrier", false)) {
  /**
   * Represents a Carrier Criterion.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Carrier extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Carrier";

    /**
     * @access public
     * @var string
     */
    public $name;

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

    public function __construct($name = null, $countryCode = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->name = $name;
      $this->countryCode = $countryCode;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("ConstantOperand", false)) {
  /**
   * A constant operand in a matching function.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConstantOperand extends FunctionArgumentOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ConstantOperand";

    /**
     * @access public
     * @var tnsConstantOperandConstantType
     */
    public $type;

    /**
     * @access public
     * @var tnsConstantOperandUnit
     */
    public $unit;

    /**
     * @access public
     * @var integer
     */
    public $longValue;

    /**
     * @access public
     * @var boolean
     */
    public $booleanValue;

    /**
     * @access public
     * @var double
     */
    public $doubleValue;

    /**
     * @access public
     * @var string
     */
    public $stringValue;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($type = null, $unit = null, $longValue = null, $booleanValue = null, $doubleValue = null, $stringValue = null, $FunctionArgumentOperandType = null) {
      parent::__construct();
      $this->type = $type;
      $this->unit = $unit;
      $this->longValue = $longValue;
      $this->booleanValue = $booleanValue;
      $this->doubleValue = $doubleValue;
      $this->stringValue = $stringValue;
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

  }
}

if (!class_exists("ContentLabel", false)) {
  /**
   * Content Label for category exclusion.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ContentLabel extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ContentLabel";

    /**
     * @access public
     * @var tnsContentLabelType
     */
    public $contentLabelType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($contentLabelType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->contentLabelType = $contentLabelType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("CriterionPolicyError", false)) {
  /**
   * Contains the policy violations for a single BiddableAdGroupCriterion.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CriterionPolicyError extends PolicyViolationError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("DoubleValue", false)) {
  /**
   * Number value type for constructing double valued ranges.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DoubleValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("DynamicSearchAdsSetting", false)) {
  /**
   * Setting for controlling Dynamic Search Ads (DSA). Contains the domain name and the language
   * used by the DSA system to automatically generate landing pages and keywords for a campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DynamicSearchAdsSetting extends Setting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "DynamicSearchAdsSetting";

    /**
     * @access public
     * @var string
     */
    public $domainName;

    /**
     * @access public
     * @var string
     */
    public $languageCode;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($domainName = null, $languageCode = null, $SettingType = null) {
      parent::__construct();
      $this->domainName = $domainName;
      $this->languageCode = $languageCode;
      $this->SettingType = $SettingType;
    }

  }
}

if (!class_exists("ExplorerAutoOptimizerSetting", false)) {
  /**
   * Settings for the
   * <a href="//support.google.com/adwords/answer/190596">Display Campaign Optimizer</a>,
   * initially termed "Explorer".
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ExplorerAutoOptimizerSetting extends Setting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ExplorerAutoOptimizerSetting";

    /**
     * @access public
     * @var boolean
     */
    public $optIn;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($optIn = null, $SettingType = null) {
      parent::__construct();
      $this->optIn = $optIn;
      $this->SettingType = $SettingType;
    }

  }
}

if (!class_exists("FeedItemOperation", false)) {
  /**
   * FeedItem service mutate operation.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedItemOperation";

    /**
     * @access public
     * @var FeedItem
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

if (!class_exists("GeoTargetOperand", false)) {
  /**
   * Represents an operand containing geo information, specifying the scope of the
   * geographical area.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GeoTargetOperand extends FunctionArgumentOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "GeoTargetOperand";

    /**
     * @access public
     * @var integer[]
     */
    public $locations;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($locations = null, $FunctionArgumentOperandType = null) {
      parent::__construct();
      $this->locations = $locations;
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

  }
}

if (!class_exists("GeoTargetTypeSetting", false)) {
  /**
   * Represents a collection of settings related to ads geotargeting.
   * 
   * <p>AdWords ads can be geotargeted using <b>Location of Presence</b> (<b>LOP</b>),
   * <b>Area of Interest</b> (<b>AOI</b>), or both. LOP is the physical location
   * of the user performing the search; AOI is the geographical region
   * in which the searcher is interested. For example, if a user in
   * New York City performs a search "hotels california", their LOP
   * is New York City and their AOI is California.
   * 
   * <p>Additionally, ads can be <b>positively</b> or <b>negatively</b> geotargeted.
   * An ad that is positively geotargeted to New York City only appears
   * to users whose location is related (via AOI or LOP) to New York City. An ad
   * that is negatively geotargeted to New York City appears for <i>all</i>
   * users <i>except</i> those whose location is related to New York City. Ads can
   * only be negatively geotargeted if a positive geotargeting is also supplied, and
   * the negatively geotargeted region must be contained within the positive
   * region.
   * 
   * <p>Geotargeting settings allow ads to be targeted in the following way:
   * <ul>
   * <li> Positively geotargeted using solely AOI, solely LOP, or either.
   * <li> Negatively geotargeted using solely LOP, or both.
   * </ul>
   * 
   * <p>This setting applies only to ads shown on the search network, and does
   * not affect ads shown on the Google Display Network.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GeoTargetTypeSetting extends Setting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "GeoTargetTypeSetting";

    /**
     * @access public
     * @var tnsGeoTargetTypeSettingPositiveGeoTargetType
     */
    public $positiveGeoTargetType;

    /**
     * @access public
     * @var tnsGeoTargetTypeSettingNegativeGeoTargetType
     */
    public $negativeGeoTargetType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($positiveGeoTargetType = null, $negativeGeoTargetType = null, $SettingType = null) {
      parent::__construct();
      $this->positiveGeoTargetType = $positiveGeoTargetType;
      $this->negativeGeoTargetType = $negativeGeoTargetType;
      $this->SettingType = $SettingType;
    }

  }
}

if (!class_exists("Image", false)) {
  /**
   * Encapsulates an Image media. For {@code SET},{@code REMOVE} operations in
   * MediaService, use {@code mediaId}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Image extends Media {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Image";

    /**
     * @access public
     * @var base64Binary
     */
    public $data;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($data = null, $mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null) {
      parent::__construct();
      $this->data = $data;
      $this->mediaId = $mediaId;
      $this->type = $type;
      $this->referenceId = $referenceId;
      $this->dimensions = $dimensions;
      $this->urls = $urls;
      $this->mimeType = $mimeType;
      $this->sourceUrl = $sourceUrl;
      $this->name = $name;
      $this->fileSize = $fileSize;
      $this->creationTime = $creationTime;
      $this->MediaType = $MediaType;
    }

  }
}

if (!class_exists("IncomeOperand", false)) {
  /**
   * This operand specifies the income bracket a household falls under.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class IncomeOperand extends FunctionArgumentOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "IncomeOperand";

    /**
     * @access public
     * @var tnsIncomeTier
     */
    public $tier;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($tier = null, $FunctionArgumentOperandType = null) {
      parent::__construct();
      $this->tier = $tier;
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

  }
}

if (!class_exists("KeywordMatchSetting", false)) {
  /**
   * Improved exact and phrase match option includes misspellings, plurals,
   * and other close variants of your keywords.
   * 
   * Default value set to {@code true} to include close variants. For more
   * information, see the article
   * <a href="https://support.google.com/adwords/bin/answer.py?answer=6100">
   * What are keyword matching options?</a>.
   * 
   * This setting is required when creating new campaigns.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class KeywordMatchSetting extends Setting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "KeywordMatchSetting";

    /**
     * @access public
     * @var boolean
     */
    public $optIn;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($optIn = null, $SettingType = null) {
      parent::__construct();
      $this->optIn = $optIn;
      $this->SettingType = $SettingType;
    }

  }
}

if (!class_exists("LocationExtensionOperand", false)) {
  /**
   * This operand specifies information required for location extension targeting.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LocationExtensionOperand extends FunctionArgumentOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "LocationExtensionOperand";

    /**
     * @access public
     * @var ConstantOperand
     */
    public $radius;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($radius = null, $FunctionArgumentOperandType = null) {
      parent::__construct();
      $this->radius = $radius;
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

  }
}

if (!class_exists("LongValue", false)) {
  /**
   * Number value type for constructing long valued ranges.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LongValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductAdwordsGrouping", false)) {
  /**
   * An {@code adwords grouping} string. Not supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductAdwordsGrouping extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductAdwordsLabels", false)) {
  /**
   * An {@code adwords labels} string. Not supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductAdwordsLabels extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductBiddingCategory", false)) {
  /**
   * One element of a bidding category at a certain level. Top-level categories are at level 1,
   * their children at level 2, and so on. We currently support up to 5 levels. The user must specify
   * a dimension type that indicates the level of the category. All cases of the the same subdivision
   * must have the same dimension type (category level).
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductBiddingCategory extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductBrand", false)) {
  /**
   * A brand string.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductBrand extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductCanonicalCondition", false)) {
  /**
   * A canonical condition. Only supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductCanonicalCondition extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductLegacyCondition", false)) {
  /**
   * A plain condition string. Not supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductLegacyCondition extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("ProductCustomAttribute", false)) {
  /**
   * A custom attribute value. As a product can have multiple custom attributes, the user must specify
   * a dimension type that indicates the index of the attribute by which to subdivide. All cases of
   * the same subdivision must have the same dimension type (attribute index).
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductCustomAttribute extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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

if (!class_exists("RealTimeBiddingSetting", false)) {
  /**
   * Settings for Real-Time Bidding, a feature only available for campaigns
   * targeting the Ad Exchange network.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RealTimeBiddingSetting extends Setting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "RealTimeBiddingSetting";

    /**
     * @access public
     * @var boolean
     */
    public $optIn;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($optIn = null, $SettingType = null) {
      parent::__construct();
      $this->optIn = $optIn;
      $this->SettingType = $SettingType;
    }

  }
}

if (!class_exists("MutateJobService", false)) {
  /**
   * MutateJobService
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MutateJobService extends AdWordsSoapClient {

    const SERVICE_NAME = "MutateJobService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201406/MutateJobService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201406/MutateJobService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "Ad" => "Ad",
      "AdError" => "AdError",
      "AdExtension" => "AdExtension",
      "AdExtensionError" => "AdExtensionError",
      "AdGroup" => "AdGroup",
      "AdGroupAd" => "AdGroupAd",
      "AdGroupAdCountLimitExceeded" => "AdGroupAdCountLimitExceeded",
      "AdGroupAdError" => "AdGroupAdError",
      "AdGroupAdExperimentData" => "AdGroupAdExperimentData",
      "AdGroupAdLabel" => "AdGroupAdLabel",
      "AdGroupAdLabelOperation" => "AdGroupAdLabelOperation",
      "AdGroupAdOperation" => "AdGroupAdOperation",
      "AdGroupBidModifier" => "AdGroupBidModifier",
      "AdGroupBidModifierOperation" => "AdGroupBidModifierOperation",
      "AdGroupCriterion" => "AdGroupCriterion",
      "AdGroupCriterionError" => "AdGroupCriterionError",
      "AdGroupCriterionExperimentBidMultiplier" => "AdGroupCriterionExperimentBidMultiplier",
      "AdGroupCriterionLabel" => "AdGroupCriterionLabel",
      "AdGroupCriterionLabelOperation" => "AdGroupCriterionLabelOperation",
      "AdGroupCriterionLimitExceeded" => "AdGroupCriterionLimitExceeded",
      "AdGroupCriterionOperation" => "AdGroupCriterionOperation",
      "AdGroupExperimentBidMultipliers" => "AdGroupExperimentBidMultipliers",
      "AdGroupExperimentData" => "AdGroupExperimentData",
      "AdGroupLabel" => "AdGroupLabel",
      "AdGroupLabelOperation" => "AdGroupLabelOperation",
      "AdGroupOperation" => "AdGroupOperation",
      "AdGroupServiceError" => "AdGroupServiceError",
      "AdSchedule" => "AdSchedule",
      "AdScheduleTarget" => "AdScheduleTarget",
      "AdScheduleTargetList" => "AdScheduleTargetList",
      "AdUnionId" => "AdUnionId",
      "Address" => "Address",
      "AdxError" => "AdxError",
      "AgeRange" => "AgeRange",
      "ApiError" => "ApiError",
      "ApiErrorReason" => "ApiErrorReason",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Audio" => "Audio",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "Bid" => "Bid",
      "BidMultiplier" => "BidMultiplier",
      "BiddableAdGroupCriterion" => "BiddableAdGroupCriterion",
      "BiddableAdGroupCriterionExperimentData" => "BiddableAdGroupCriterionExperimentData",
      "BiddingError" => "BiddingError",
      "BiddingErrors" => "BiddingErrors",
      "BiddingScheme" => "BiddingScheme",
      "BiddingStrategyConfiguration" => "BiddingStrategyConfiguration",
      "BiddingTransitionError" => "BiddingTransitionError",
      "Bids" => "Bids",
      "BillingSummary" => "BillingSummary",
      "Budget" => "Budget",
      "BudgetError" => "BudgetError",
      "BudgetOperation" => "BudgetOperation",
      "BudgetOptimizerBiddingScheme" => "BudgetOptimizerBiddingScheme",
      "BulkMutateJobError" => "BulkMutateJobError",
      "BulkMutateJobPolicy" => "BulkMutateJobPolicy",
      "BulkMutateJobSelector" => "BulkMutateJobSelector",
      "Campaign" => "Campaign",
      "CampaignAdExtension" => "CampaignAdExtension",
      "CampaignAdExtensionError" => "CampaignAdExtensionError",
      "CampaignAdExtensionOperation" => "CampaignAdExtensionOperation",
      "CampaignCriterion" => "CampaignCriterion",
      "CampaignCriterionError" => "CampaignCriterionError",
      "CampaignCriterionOperation" => "CampaignCriterionOperation",
      "CampaignError" => "CampaignError",
      "CampaignLabel" => "CampaignLabel",
      "CampaignLabelOperation" => "CampaignLabelOperation",
      "TextLabel" => "TextLabel",
      "CampaignOperation" => "CampaignOperation",
      "CampaignTargetOperation" => "CampaignTargetOperation",
      "Carrier" => "Carrier",
      "ClientTermsError" => "ClientTermsError",
      "CollectionSizeError" => "CollectionSizeError",
      "ComparableValue" => "ComparableValue",
      "ConstantOperand" => "ConstantOperand",
      "ContentLabel" => "ContentLabel",
      "ConversionOptimizerBiddingScheme" => "ConversionOptimizerBiddingScheme",
      "ConversionOptimizerEligibility" => "ConversionOptimizerEligibility",
      "CpaBid" => "CpaBid",
      "CpcBid" => "CpcBid",
      "CpmBid" => "CpmBid",
      "Criterion" => "Criterion",
      "CriterionError" => "CriterionError",
      "CriterionParameter" => "CriterionParameter",
      "CriterionPolicyError" => "CriterionPolicyError",
      "CustomParameter" => "CustomParameter",
      "CustomParameters" => "CustomParameters",
      "DatabaseError" => "DatabaseError",
      "DateError" => "DateError",
      "DateRangeError" => "DateRangeError",
      "DeprecatedAd" => "DeprecatedAd",
      "Dimensions" => "Dimensions",
      "DistinctError" => "DistinctError",
      "DoubleValue" => "DoubleValue",
      "DynamicSearchAdsSetting" => "DynamicSearchAdsSetting",
      "EnhancedCpcBiddingScheme" => "EnhancedCpcBiddingScheme",
      "EntityAccessDenied" => "EntityAccessDenied",
      "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
      "EntityNotFound" => "EntityNotFound",
      "ExemptionRequest" => "ExemptionRequest",
      "ExperimentError" => "ExperimentError",
      "ExplorerAutoOptimizerSetting" => "ExplorerAutoOptimizerSetting",
      "FeedItem" => "FeedItem",
      "FeedItemAdGroupTargeting" => "FeedItemAdGroupTargeting",
      "FeedItemAttributeError" => "FeedItemAttributeError",
      "FeedItemAttributeValue" => "FeedItemAttributeValue",
      "FeedItemCampaignTargeting" => "FeedItemCampaignTargeting",
      "FeedItemDevicePreference" => "FeedItemDevicePreference",
      "FeedItemError" => "FeedItemError",
      "FeedItemOperation" => "FeedItemOperation",
      "FeedItemSchedule" => "FeedItemSchedule",
      "FeedItemScheduling" => "FeedItemScheduling",
      "FeedItemValidationDetail" => "FeedItemValidationDetail",
      "ForwardCompatibilityError" => "ForwardCompatibilityError",
      "FrequencyCap" => "FrequencyCap",
      "Function" => "FeedFunction",
      "FunctionError" => "FunctionError",
      "FunctionParsingError" => "FunctionParsingError",
      "Gender" => "Gender",
      "GeoPoint" => "GeoPoint",
      "GeoTargetOperand" => "GeoTargetOperand",
      "GeoTargetTypeSetting" => "GeoTargetTypeSetting",
      "IdError" => "IdError",
      "Image" => "Image",
      "ImageAd" => "ImageAd",
      "ImageError" => "ImageError",
      "IncomeOperand" => "IncomeOperand",
      "InternalApiError" => "InternalApiError",
      "IpBlock" => "IpBlock",
      "Job" => "Job",
      "JobError" => "JobError",
      "JobEvent" => "JobEvent",
      "JobResult" => "JobResult",
      "JobSelector" => "JobSelector",
      "JobStats" => "JobStats",
      "Keyword" => "Keyword",
      "KeywordMatchSetting" => "KeywordMatchSetting",
      "Label" => "Label",
      "Language" => "Language",
      "Location" => "Location",
      "LocationExtension" => "LocationExtension",
      "LocationExtensionOperand" => "LocationExtensionOperand",
      "LocationSyncExtension" => "LocationSyncExtension",
      "LongValue" => "LongValue",
      "ManualCPCAdGroupCriterionExperimentBidMultiplier" => "ManualCPCAdGroupCriterionExperimentBidMultiplier",
      "ManualCPCAdGroupExperimentBidMultipliers" => "ManualCPCAdGroupExperimentBidMultipliers",
      "ManualCPMAdGroupExperimentBidMultipliers" => "ManualCPMAdGroupExperimentBidMultipliers",
      "ManualCpcBiddingScheme" => "ManualCpcBiddingScheme",
      "ManualCpmBiddingScheme" => "ManualCpmBiddingScheme",
      "Media" => "Media",
      "MediaError" => "MediaError",
      "Media_Size_DimensionsMapEntry" => "Media_Size_DimensionsMapEntry",
      "Media_Size_StringMapEntry" => "Media_Size_StringMapEntry",
      "MobileAd" => "MobileAd",
      "MobileAppCategory" => "MobileAppCategory",
      "MobileApplication" => "MobileApplication",
      "MobileDevice" => "MobileDevice",
      "MobileImageAd" => "MobileImageAd",
      "Money" => "Money",
      "MultiplierError" => "MultiplierError",
      "NegativeAdGroupCriterion" => "NegativeAdGroupCriterion",
      "NegativeCampaignCriterion" => "NegativeCampaignCriterion",
      "NetworkSetting" => "NetworkSetting",
      "NewEntityCreationError" => "NewEntityCreationError",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OAuthInfo" => "OAuthInfo",
      "FunctionArgumentOperand" => "FunctionArgumentOperand",
      "Operand" => "Operand",
      "OperatingSystemVersion" => "OperatingSystemVersion",
      "Operation" => "Operation",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "PageOnePromotedBiddingScheme" => "PageOnePromotedBiddingScheme",
      "PagingError" => "PagingError",
      "PercentCpaBid" => "PercentCpaBid",
      "PercentCpaBiddingScheme" => "PercentCpaBiddingScheme",
      "PlaceHolder" => "PlaceHolder",
      "Placement" => "Placement",
      "PlacesOfInterestOperand" => "PlacesOfInterestOperand",
      "Platform" => "Platform",
      "PolicyViolationError" => "PolicyViolationError",
      "PolicyViolationError.Part" => "PolicyViolationErrorPart",
      "PolicyViolationKey" => "PolicyViolationKey",
      "Product" => "Product",
      "ProductAd" => "ProductAd",
      "ProductAdwordsGrouping" => "ProductAdwordsGrouping",
      "ProductAdwordsLabels" => "ProductAdwordsLabels",
      "ProductBiddingCategory" => "ProductBiddingCategory",
      "ProductBrand" => "ProductBrand",
      "ProductCanonicalCondition" => "ProductCanonicalCondition",
      "ProductCondition" => "ProductCondition",
      "ProductLegacyCondition" => "ProductLegacyCondition",
      "ProductConditionOperand" => "ProductConditionOperand",
      "ProductCustomAttribute" => "ProductCustomAttribute",
      "ProductDimension" => "ProductDimension",
      "ProductOfferId" => "ProductOfferId",
      "ProductPartition" => "ProductPartition",
      "ProductSalesChannel" => "ProductSalesChannel",
      "ProductScope" => "ProductScope",
      "ProductType" => "ProductType",
      "ProductTypeFull" => "ProductTypeFull",
      "Proximity" => "Proximity",
      "QualityInfo" => "QualityInfo",
      "QueryError" => "QueryError",
      "QuotaCheckError" => "QuotaCheckError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RealTimeBiddingSetting" => "RealTimeBiddingSetting",
      "RegionCodeError" => "RegionCodeError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "RichMediaAd" => "RichMediaAd",
      "SelectorError" => "SelectorError",
      "LocationGroups" => "LocationGroups",
      "Setting" => "Setting",
      "SettingError" => "SettingError",
      "ShoppingSetting" => "ShoppingSetting",
      "SimpleMutateJob" => "SimpleMutateJob",
      "SimpleMutateResult" => "SimpleMutateResult",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StatsQueryError" => "StatsQueryError",
      "StringLengthError" => "StringLengthError",
      "String_StringMapEntry" => "String_StringMapEntry",
      "Target" => "Target",
      "TargetCpaBiddingScheme" => "TargetCpaBiddingScheme",
      "TargetError" => "TargetError",
      "TargetList" => "TargetList",
      "TargetingSettingDetail" => "TargetingSettingDetail",
      "TargetRoasBiddingScheme" => "TargetRoasBiddingScheme",
      "TargetSpendBiddingScheme" => "TargetSpendBiddingScheme",
      "TargetingSetting" => "TargetingSetting",
      "TempAdUnionId" => "TempAdUnionId",
      "TemplateAd" => "TemplateAd",
      "TemplateElement" => "TemplateElement",
      "TemplateElementField" => "TemplateElementField",
      "TextAd" => "TextAd",
      "ThirdPartyRedirectAd" => "ThirdPartyRedirectAd",
      "TrackingSetting" => "TrackingSetting",
      "UrlError" => "UrlError",
      "UrlList" => "UrlList",
      "CriterionUserInterest" => "CriterionUserInterest",
      "CriterionUserList" => "CriterionUserList",
      "Vertical" => "Vertical",
      "Video" => "Video",
      "Webpage" => "Webpage",
      "WebpageCondition" => "WebpageCondition",
      "WebpageParameter" => "WebpageParameter",
      "DynamicSearchAd" => "DynamicSearchAd",
      "AdError.Reason" => "AdErrorReason",
      "AdExtensionError.Reason" => "AdExtensionErrorReason",
      "AdGroupAd.ApprovalStatus" => "AdGroupAdApprovalStatus",
      "AdGroupAd.Status" => "AdGroupAdStatus",
      "AdGroupAdError.Reason" => "AdGroupAdErrorReason",
      "AdGroupCriterionError.Reason" => "AdGroupCriterionErrorReason",
      "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
      "AdGroupServiceError.Reason" => "AdGroupServiceErrorReason",
      "AdGroup.Status" => "AdGroupStatus",
      "AdServingOptimizationStatus" => "AdServingOptimizationStatus",
      "AdvertisingChannelType" => "AdvertisingChannelType",
      "AdxError.Reason" => "AdxErrorReason",
      "AgeRange.AgeRangeType" => "AgeRangeAgeRangeType",
      "ApprovalStatus" => "ApprovalStatus",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "BasicJobStatus" => "BasicJobStatus",
      "BetaError.Reason" => "BetaErrorReason",
      "BidModifierSource" => "BidModifierSource",
      "BidSource" => "BidSource",
      "BiddingError.Reason" => "BiddingErrorReason",
      "BiddingErrors.Reason" => "BiddingErrorsReason",
      "BiddingStrategySource" => "BiddingStrategySource",
      "BiddingStrategyType" => "BiddingStrategyType",
      "BiddingTransitionError.Reason" => "BiddingTransitionErrorReason",
      "Budget.BudgetDeliveryMethod" => "BudgetBudgetDeliveryMethod",
      "Budget.BudgetPeriod" => "BudgetBudgetPeriod",
      "Budget.BudgetStatus" => "BudgetBudgetStatus",
      "BudgetError.Reason" => "BudgetErrorReason",
      "BulkMutateJobError.Reason" => "BulkMutateJobErrorReason",
      "CampaignAdExtension.ApprovalStatus" => "CampaignAdExtensionApprovalStatus",
      "CampaignAdExtension.Status" => "CampaignAdExtensionStatus",
      "CampaignAdExtensionError.Reason" => "CampaignAdExtensionErrorReason",
      "CampaignCriterionError.Reason" => "CampaignCriterionErrorReason",
      "CampaignError.Reason" => "CampaignErrorReason",
      "CampaignStatus" => "CampaignStatus",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "ConstantOperand.ConstantType" => "ConstantOperandConstantType",
      "ConstantOperand.Unit" => "ConstantOperandUnit",
      "ContentLabelType" => "ContentLabelType",
      "ConversionOptimizerBiddingScheme.BidType" => "ConversionOptimizerBiddingSchemeBidType",
      "ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
      "ConversionOptimizerEligibility.RejectionReason" => "ConversionOptimizerEligibilityRejectionReason",
      "Criterion.Type" => "CriterionType",
      "CriterionError.Reason" => "CriterionErrorReason",
      "CriterionTypeGroup" => "CriterionTypeGroup",
      "CriterionUse" => "CriterionUse",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DateRangeError.Reason" => "DateRangeErrorReason",
      "DayOfWeek" => "DayOfWeek",
      "DeprecatedAd.Type" => "DeprecatedAdType",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityAccessDenied.Reason" => "EntityAccessDeniedReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "ExperimentDataStatus" => "ExperimentDataStatus",
      "ExperimentDeltaStatus" => "ExperimentDeltaStatus",
      "ExperimentError.Reason" => "ExperimentErrorReason",
      "FeedItem.Status" => "FeedItemStatus",
      "FeedItemError.Reason" => "FeedItemErrorReason",
      "FeedItemValidationDetail.ApprovalStatus" => "FeedItemValidationDetailApprovalStatus",
      "FeedItemValidationDetail.ValidationStatus" => "FeedItemValidationDetailValidationStatus",
      "ForwardCompatibilityError.Reason" => "ForwardCompatibilityErrorReason",
      "Function.Operator" => "FunctionOperator",
      "FunctionError.Reason" => "FunctionErrorReason",
      "FunctionParsingError.Reason" => "FunctionParsingErrorReason",
      "Gender.GenderType" => "GenderGenderType",
      "GeoTargetTypeSetting.NegativeGeoTargetType" => "GeoTargetTypeSettingNegativeGeoTargetType",
      "GeoTargetTypeSetting.PositiveGeoTargetType" => "GeoTargetTypeSettingPositiveGeoTargetType",
      "IdError.Reason" => "IdErrorReason",
      "ImageError.Reason" => "ImageErrorReason",
      "IncomeTier" => "IncomeTier",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "JobError.Reason" => "JobErrorReason",
      "KeywordMatchType" => "KeywordMatchType",
      "Label.Status" => "LabelStatus",
      "Level" => "Level",
      "LocationExtension.Source" => "LocationExtensionSource",
      "LocationTargetingStatus" => "LocationTargetingStatus",
      "MarkupLanguageType" => "MarkupLanguageType",
      "Media.MediaType" => "MediaMediaType",
      "Media.MimeType" => "MediaMimeType",
      "Media.Size" => "MediaSize",
      "MediaError.Reason" => "MediaErrorReason",
      "MinuteOfHour" => "MinuteOfHour",
      "MobileDevice.DeviceType" => "MobileDeviceDeviceType",
      "MultiplierError.Reason" => "MultiplierErrorReason",
      "MultiplierSource" => "MultiplierSource",
      "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperatingSystemVersion.OperatorType" => "OperatingSystemVersionOperatorType",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "PageOnePromotedBiddingScheme.StrategyGoal" => "PageOnePromotedBiddingSchemeStrategyGoal",
      "PagingError.Reason" => "PagingErrorReason",
      "PlacesOfInterestOperand.Category" => "PlacesOfInterestOperandCategory",
      "PolicyViolationError.Reason" => "PolicyViolationErrorReason",
      "ProductCanonicalCondition.Condition" => "ProductCanonicalConditionCondition",
      "ProductDimensionType" => "ProductDimensionType",
      "ProductPartitionType" => "ProductPartitionType",
      "Proximity.DistanceUnits" => "ProximityDistanceUnits",
      "QueryError.Reason" => "QueryErrorReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RegionCodeError.Reason" => "RegionCodeErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RichMediaAd.AdAttribute" => "RichMediaAdAdAttribute",
      "RichMediaAd.RichMediaAdType" => "RichMediaAdRichMediaAdType",
      "SelectorError.Reason" => "SelectorErrorReason",
      "ServingStatus" => "ServingStatus",
      "SettingError.Reason" => "SettingErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "StatsQueryError.Reason" => "StatsQueryErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "SystemServingStatus" => "SystemServingStatus",
      "TargetError.Reason" => "TargetErrorReason",
      "TemplateElementField.Type" => "TemplateElementFieldType",
      "ThirdPartyRedirectAd.ExpandingDirection" => "ThirdPartyRedirectAdExpandingDirection",
      "TimeUnit" => "TimeUnit",
      "UrlError.Reason" => "UrlErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "UserStatus" => "UserStatus",
      "VideoType" => "VideoType",
      "WebpageConditionOperand" => "WebpageConditionOperand",
      "get" => "MutateJobServiceGet",
      "getResponse" => "MutateJobServiceGetResponse",
      "getResult" => "GetResult",
      "getResultResponse" => "GetResultResponse",
      "mutate" => "MutateJobServiceMutate",
      "mutateResponse" => "MutateJobServiceMutateResponse",
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
     * Query the status of existing jobs, both simple and bulk API.
     * <p>Use a {@link JobSelector} to query and return a list which may
     * contain both {@link BulkMutateJob} and/or {@link SimpleMutateJob}.</p>
     */
    public function get($selector) {
      $args = new MutateJobServiceGet($selector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Query mutation results, of a {@code COMPLETED} job.
     * <p>Use a {@link JobSelector} to query and return either a
     * {@link BulkMutateResult} or a {@link SimpleMutateResult}. Submit only one job ID
     * at a time.</p>
     */
    public function getResult($selector) {
      $args = new GetResult($selector);
      $result = $this->__soapCall("getResult", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Simplified way of submitting a mutation job. The provided list of
     * operations, if valid, will create a new job with a unique id, which will
     * be returned. This id can later be used in invocations of
     * {@link #get} and {@link #getResult}. Policy can optionally be specified.
     * 
     * <p>When this method returns with success, the job will be in
     * {@code PROCESSING} or {@code PENDING} state and no further action is
     * needed for the job to get executed.</p>
     */
    public function mutate($operations, $policy) {
      $args = new MutateJobServiceMutate($operations, $policy);
      $result = $this->__soapCall("mutate", array($args));
      return $result->rval;
    }
  }
}

