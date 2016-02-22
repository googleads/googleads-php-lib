<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class Operand
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroupAdLabel $AdGroupAdLabel
     */
    protected $AdGroupAdLabel = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroupAd $AdGroupAd
     */
    protected $AdGroupAd = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroupBidModifier $AdGroupBidModifier
     */
    protected $AdGroupBidModifier = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabel $AdGroupCriterionLabel
     */
    protected $AdGroupCriterionLabel = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterion $AdGroupCriterion
     */
    protected $AdGroupCriterion = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroupLabel $AdGroupLabel
     */
    protected $AdGroupLabel = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroup $AdGroup
     */
    protected $AdGroup = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Ad $Ad
     */
    protected $Ad = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Budget $Budget
     */
    protected $Budget = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension $CampaignAdExtension
     */
    protected $CampaignAdExtension = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\CampaignCriterion $CampaignCriterion
     */
    protected $CampaignCriterion = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\CampaignLabel $CampaignLabel
     */
    protected $CampaignLabel = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Campaign $Campaign
     */
    protected $Campaign = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\FeedItem $FeedItem
     */
    protected $FeedItem = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Job $Job
     */
    protected $Job = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Label $Label
     */
    protected $Label = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Media $Media
     */
    protected $Media = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\PlaceHolder $PlaceHolder
     */
    protected $PlaceHolder = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupAdLabel $AdGroupAdLabel
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupAd $AdGroupAd
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupBidModifier $AdGroupBidModifier
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabel $AdGroupCriterionLabel
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterion $AdGroupCriterion
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupLabel $AdGroupLabel
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroup $AdGroup
     * @param \Google\AdsApi\AdWords\v201601\cm\Ad $Ad
     * @param \Google\AdsApi\AdWords\v201601\cm\Budget $Budget
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension $CampaignAdExtension
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignCriterion $CampaignCriterion
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignLabel $CampaignLabel
     * @param \Google\AdsApi\AdWords\v201601\cm\Campaign $Campaign
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItem $FeedItem
     * @param \Google\AdsApi\AdWords\v201601\cm\Job $Job
     * @param \Google\AdsApi\AdWords\v201601\cm\Label $Label
     * @param \Google\AdsApi\AdWords\v201601\cm\Media $Media
     * @param \Google\AdsApi\AdWords\v201601\cm\PlaceHolder $PlaceHolder
     */
    public function __construct($AdGroupAdLabel = null, $AdGroupAd = null, $AdGroupBidModifier = null, $AdGroupCriterionLabel = null, $AdGroupCriterion = null, $AdGroupLabel = null, $AdGroup = null, $Ad = null, $Budget = null, $CampaignAdExtension = null, $CampaignCriterion = null, $CampaignLabel = null, $Campaign = null, $FeedItem = null, $Job = null, $Label = null, $Media = null, $PlaceHolder = null)
    {
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
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupAdLabel
     */
    public function getAdGroupAdLabel()
    {
      return $this->AdGroupAdLabel;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupAdLabel $AdGroupAdLabel
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setAdGroupAdLabel($AdGroupAdLabel)
    {
      $this->AdGroupAdLabel = $AdGroupAdLabel;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupAd
     */
    public function getAdGroupAd()
    {
      return $this->AdGroupAd;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupAd $AdGroupAd
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setAdGroupAd($AdGroupAd)
    {
      $this->AdGroupAd = $AdGroupAd;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidModifier
     */
    public function getAdGroupBidModifier()
    {
      return $this->AdGroupBidModifier;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupBidModifier $AdGroupBidModifier
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setAdGroupBidModifier($AdGroupBidModifier)
    {
      $this->AdGroupBidModifier = $AdGroupBidModifier;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabel
     */
    public function getAdGroupCriterionLabel()
    {
      return $this->AdGroupCriterionLabel;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabel $AdGroupCriterionLabel
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setAdGroupCriterionLabel($AdGroupCriterionLabel)
    {
      $this->AdGroupCriterionLabel = $AdGroupCriterionLabel;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterion
     */
    public function getAdGroupCriterion()
    {
      return $this->AdGroupCriterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterion $AdGroupCriterion
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setAdGroupCriterion($AdGroupCriterion)
    {
      $this->AdGroupCriterion = $AdGroupCriterion;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupLabel
     */
    public function getAdGroupLabel()
    {
      return $this->AdGroupLabel;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupLabel $AdGroupLabel
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setAdGroupLabel($AdGroupLabel)
    {
      $this->AdGroupLabel = $AdGroupLabel;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroup
     */
    public function getAdGroup()
    {
      return $this->AdGroup;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroup $AdGroup
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setAdGroup($AdGroup)
    {
      $this->AdGroup = $AdGroup;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Ad
     */
    public function getAd()
    {
      return $this->Ad;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Ad $Ad
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setAd($Ad)
    {
      $this->Ad = $Ad;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Budget
     */
    public function getBudget()
    {
      return $this->Budget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Budget $Budget
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setBudget($Budget)
    {
      $this->Budget = $Budget;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension
     */
    public function getCampaignAdExtension()
    {
      return $this->CampaignAdExtension;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension $CampaignAdExtension
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setCampaignAdExtension($CampaignAdExtension)
    {
      $this->CampaignAdExtension = $CampaignAdExtension;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignCriterion
     */
    public function getCampaignCriterion()
    {
      return $this->CampaignCriterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignCriterion $CampaignCriterion
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setCampaignCriterion($CampaignCriterion)
    {
      $this->CampaignCriterion = $CampaignCriterion;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignLabel
     */
    public function getCampaignLabel()
    {
      return $this->CampaignLabel;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignLabel $CampaignLabel
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setCampaignLabel($CampaignLabel)
    {
      $this->CampaignLabel = $CampaignLabel;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Campaign
     */
    public function getCampaign()
    {
      return $this->Campaign;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Campaign $Campaign
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setCampaign($Campaign)
    {
      $this->Campaign = $Campaign;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedItem
     */
    public function getFeedItem()
    {
      return $this->FeedItem;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItem $FeedItem
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setFeedItem($FeedItem)
    {
      $this->FeedItem = $FeedItem;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Job
     */
    public function getJob()
    {
      return $this->Job;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Job $Job
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setJob($Job)
    {
      $this->Job = $Job;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Label
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Label $Label
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function getMedia()
    {
      return $this->Media;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Media $Media
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setMedia($Media)
    {
      $this->Media = $Media;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\PlaceHolder
     */
    public function getPlaceHolder()
    {
      return $this->PlaceHolder;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\PlaceHolder $PlaceHolder
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand
     */
    public function setPlaceHolder($PlaceHolder)
    {
      $this->PlaceHolder = $PlaceHolder;
      return $this;
    }

}
