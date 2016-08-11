<?php
/**
 * PHP class stubs for downloading results from BatchJobService.
 *
 * PHP version 5
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWordsUtil
 * @subpackage v201603
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/AdWords/v201603/AdGroupAdService.php';
require_once 'Google/Api/Ads/AdWords/v201603/AdGroupBidModifierService.php';
require_once 'Google/Api/Ads/AdWords/v201603/AdGroupCriterionService.php';
require_once 'Google/Api/Ads/AdWords/v201603/AdGroupService.php';
require_once 'Google/Api/Ads/AdWords/v201603/BudgetService.php';
require_once 'Google/Api/Ads/AdWords/v201603/CampaignCriterionService.php';
require_once 'Google/Api/Ads/AdWords/v201603/CampaignService.php';
require_once 'Google/Api/Ads/AdWords/v201603/FeedItemService.php';

if (!class_exists("ErrorList", false)) {
  class ErrorList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
    const XSI_TYPE = "ErrorList";

    /**
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

    public function __construct($errors = null) {
      $this->errors = $errors;
    }
  }
}

if (!class_exists("MutateResult", false)) {
  class MutateResult {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
    const XSI_TYPE = "MutateResult";

    /**
     * @var tnsOperand
     */
    public $result;

    /**
     * @var tnsErrorList
     */
    public $errorList;

    /**
     * @var integer
     */
    public $index;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($result = null, $errorList = null,
        $index = null) {
      $this->result = $result;
      $this->errorList = $errorList;
      $this->index = $index;
    }
  }
}

if (!class_exists("Operand", false)) {
  class Operand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
    const XSI_TYPE = "Operand";

    /**
     * @var AdGroupAdLabel
     */
    public $AdGroupAdLabel;

    /**
     * @var AdGroupAd
     */
    public $AdGroupAd;

    /**
     * @var AdGroupBidModifier
     */
    public $AdGroupBidModifier;

    /**
     * @var AdGroupCriterionLabel
     */
    public $AdGroupCriterionLabel;

    /**
     * @var AdGroupCriterion
     */
    public $AdGroupCriterion;

    /**
     * @var AdGroupLabel
     */
    public $AdGroupLabel;

    /**
     * @var AdGroup
     */
    public $AdGroup;

    /**
     * @var Ad
     */
    public $Ad;

    /**
     * @var Budget
     */
    public $Budget;

    /**
     * @var CampaignCriterion
     */
    public $CampaignCriterion;

    /**
     * @var CampaignLabel
     */
    public $CampaignLabel;

    /**
     * @var Campaign
     */
    public $Campaign;

    /**
     * @var FeedItem
     */
    public $FeedItem;

    /**
     * @var Label
     */
    public $Label;

    /**
     * @var Media
     */
    public $Media;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct(
        $AdGroupAdLabel = null,
        $AdGroupAd = null,
        $AdGroupBidModifier = null,
        $AdGroupCriterionLabel = null,
        $AdGroupCriterion = null,
        $AdGroupLabel = null,
        $AdGroup = null,
        $Ad = null,
        $Budget = null,
        $CampaignCriterion = null,
        $CampaignLabel = null,
        $Campaign = null,
        $FeedItem = null,
        $Label = null,
        $Media = null
    ) {
      $this->AdGroupAdLabel = $AdGroupAdLabel;
      $this->AdGroupAd = $AdGroupAd;
      $this->AdGroupBidModifier = $AdGroupBidModifier;
      $this->AdGroupCriterionLabel = $AdGroupCriterionLabel;
      $this->AdGroupCriterion = $AdGroupCriterion;
      $this->AdGroupLabel = $AdGroupLabel;
      $this->AdGroup = $AdGroup;
      $this->Ad = $Ad;
      $this->Budget = $Budget;
      $this->CampaignCriterion = $CampaignCriterion;
      $this->CampaignLabel = $CampaignLabel;
      $this->Campaign = $Campaign;
      $this->FeedItem = $FeedItem;
      $this->Label = $Label;
      $this->Media = $Media;
    }
  }
}

if (!class_exists("BatchJobOpsMutate", false)) {
  class BatchJobOpsMutate {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
    const XSI_TYPE = "";

    /**
     * @var Operation[]
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

if (!class_exists("BatchJobOpsMutateResponse", false)) {
  class BatchJobOpsMutateResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201603";
    const XSI_TYPE = "";

    /**
     * @var MutateResult[]
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
