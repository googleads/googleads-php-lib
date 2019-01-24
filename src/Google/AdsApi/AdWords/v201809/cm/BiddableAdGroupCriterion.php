<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BiddableAdGroupCriterion extends \Google\AdsApi\AdWords\v201809\cm\AdGroupCriterion
{

    /**
     * @var string $userStatus
     */
    protected $userStatus = null;

    /**
     * @var string $systemServingStatus
     */
    protected $systemServingStatus = null;

    /**
     * @var string $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var string[] $disapprovalReasons
     */
    protected $disapprovalReasons = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Bid $firstPageCpc
     */
    protected $firstPageCpc = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Bid $topOfPageCpc
     */
    protected $topOfPageCpc = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Bid $firstPositionCpc
     */
    protected $firstPositionCpc = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\QualityInfo $qualityInfo
     */
    protected $qualityInfo = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration $biddingStrategyConfiguration
     */
    protected $biddingStrategyConfiguration = null;

    /**
     * @var float $bidModifier
     */
    protected $bidModifier = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     */
    protected $finalUrls = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     */
    protected $finalMobileUrls = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AppUrlList $finalAppUrls
     */
    protected $finalAppUrls = null;

    /**
     * @var string $trackingUrlTemplate
     */
    protected $trackingUrlTemplate = null;

    /**
     * @var string $finalUrlSuffix
     */
    protected $finalUrlSuffix = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\CustomParameters $urlCustomParameters
     */
    protected $urlCustomParameters = null;

    /**
     * @param int $adGroupId
     * @param string $criterionUse
     * @param \Google\AdsApi\AdWords\v201809\cm\Criterion $criterion
     * @param \Google\AdsApi\AdWords\v201809\cm\Label[] $labels
     * @param \Google\AdsApi\AdWords\v201809\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @param int $baseCampaignId
     * @param int $baseAdGroupId
     * @param string $AdGroupCriterionType
     * @param string $userStatus
     * @param string $systemServingStatus
     * @param string $approvalStatus
     * @param string[] $disapprovalReasons
     * @param \Google\AdsApi\AdWords\v201809\cm\Bid $firstPageCpc
     * @param \Google\AdsApi\AdWords\v201809\cm\Bid $topOfPageCpc
     * @param \Google\AdsApi\AdWords\v201809\cm\Bid $firstPositionCpc
     * @param \Google\AdsApi\AdWords\v201809\cm\QualityInfo $qualityInfo
     * @param \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration $biddingStrategyConfiguration
     * @param float $bidModifier
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201809\cm\AppUrlList $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param string $finalUrlSuffix
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomParameters $urlCustomParameters
     */
    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, array $labels = null, array $forwardCompatibilityMap = null, $baseCampaignId = null, $baseAdGroupId = null, $AdGroupCriterionType = null, $userStatus = null, $systemServingStatus = null, $approvalStatus = null, array $disapprovalReasons = null, $firstPageCpc = null, $topOfPageCpc = null, $firstPositionCpc = null, $qualityInfo = null, $biddingStrategyConfiguration = null, $bidModifier = null, $finalUrls = null, $finalMobileUrls = null, $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null)
    {
      parent::__construct($adGroupId, $criterionUse, $criterion, $labels, $forwardCompatibilityMap, $baseCampaignId, $baseAdGroupId, $AdGroupCriterionType);
      $this->userStatus = $userStatus;
      $this->systemServingStatus = $systemServingStatus;
      $this->approvalStatus = $approvalStatus;
      $this->disapprovalReasons = $disapprovalReasons;
      $this->firstPageCpc = $firstPageCpc;
      $this->topOfPageCpc = $topOfPageCpc;
      $this->firstPositionCpc = $firstPositionCpc;
      $this->qualityInfo = $qualityInfo;
      $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
      $this->bidModifier = $bidModifier;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->finalAppUrls = $finalAppUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->finalUrlSuffix = $finalUrlSuffix;
      $this->urlCustomParameters = $urlCustomParameters;
    }

    /**
     * @return string
     */
    public function getUserStatus()
    {
      return $this->userStatus;
    }

    /**
     * @param string $userStatus
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setUserStatus($userStatus)
    {
      $this->userStatus = $userStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getSystemServingStatus()
    {
      return $this->systemServingStatus;
    }

    /**
     * @param string $systemServingStatus
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setSystemServingStatus($systemServingStatus)
    {
      $this->systemServingStatus = $systemServingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param string $approvalStatus
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDisapprovalReasons()
    {
      return $this->disapprovalReasons;
    }

    /**
     * @param string[] $disapprovalReasons
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setDisapprovalReasons(array $disapprovalReasons)
    {
      $this->disapprovalReasons = $disapprovalReasons;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Bid
     */
    public function getFirstPageCpc()
    {
      return $this->firstPageCpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Bid $firstPageCpc
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setFirstPageCpc($firstPageCpc)
    {
      $this->firstPageCpc = $firstPageCpc;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Bid
     */
    public function getTopOfPageCpc()
    {
      return $this->topOfPageCpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Bid $topOfPageCpc
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setTopOfPageCpc($topOfPageCpc)
    {
      $this->topOfPageCpc = $topOfPageCpc;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Bid
     */
    public function getFirstPositionCpc()
    {
      return $this->firstPositionCpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Bid $firstPositionCpc
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setFirstPositionCpc($firstPositionCpc)
    {
      $this->firstPositionCpc = $firstPositionCpc;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\QualityInfo
     */
    public function getQualityInfo()
    {
      return $this->qualityInfo;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\QualityInfo $qualityInfo
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setQualityInfo($qualityInfo)
    {
      $this->qualityInfo = $qualityInfo;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration
     */
    public function getBiddingStrategyConfiguration()
    {
      return $this->biddingStrategyConfiguration;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration $biddingStrategyConfiguration
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setBiddingStrategyConfiguration($biddingStrategyConfiguration)
    {
      $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
      return $this;
    }

    /**
     * @return float
     */
    public function getBidModifier()
    {
      return $this->bidModifier;
    }

    /**
     * @param float $bidModifier
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setBidModifier($bidModifier)
    {
      $this->bidModifier = $bidModifier;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlList
     */
    public function getFinalUrls()
    {
      return $this->finalUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setFinalUrls($finalUrls)
    {
      $this->finalUrls = $finalUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlList
     */
    public function getFinalMobileUrls()
    {
      return $this->finalMobileUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setFinalMobileUrls($finalMobileUrls)
    {
      $this->finalMobileUrls = $finalMobileUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AppUrlList
     */
    public function getFinalAppUrls()
    {
      return $this->finalAppUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AppUrlList $finalAppUrls
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setFinalAppUrls($finalAppUrls)
    {
      $this->finalAppUrls = $finalAppUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
      return $this->trackingUrlTemplate;
    }

    /**
     * @param string $trackingUrlTemplate
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setTrackingUrlTemplate($trackingUrlTemplate)
    {
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinalUrlSuffix()
    {
      return $this->finalUrlSuffix;
    }

    /**
     * @param string $finalUrlSuffix
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setFinalUrlSuffix($finalUrlSuffix)
    {
      $this->finalUrlSuffix = $finalUrlSuffix;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomParameters
     */
    public function getUrlCustomParameters()
    {
      return $this->urlCustomParameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomParameters $urlCustomParameters
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion
     */
    public function setUrlCustomParameters($urlCustomParameters)
    {
      $this->urlCustomParameters = $urlCustomParameters;
      return $this;
    }

}
