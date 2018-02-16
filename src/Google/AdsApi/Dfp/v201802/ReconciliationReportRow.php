<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationReportRow
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $reconciliationReportId
     */
    protected $reconciliationReportId = null;

    /**
     * @var int $lineItemId
     */
    protected $lineItemId = null;

    /**
     * @var int $creativeId
     */
    protected $creativeId = null;

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var int $advertiserId
     */
    protected $advertiserId = null;

    /**
     * @var int $proposalLineItemId
     */
    protected $proposalLineItemId = null;

    /**
     * @var int $proposalId
     */
    protected $proposalId = null;

    /**
     * @var string $reconciliationSource
     */
    protected $reconciliationSource = null;

    /**
     * @var string $rateType
     */
    protected $rateType = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\Money $lineItemCostPerUnit
     */
    protected $lineItemCostPerUnit = null;

    /**
     * @var int $lineItemContractedUnitsBought
     */
    protected $lineItemContractedUnitsBought = null;

    /**
     * @var int $dfpVolume
     */
    protected $dfpVolume = null;

    /**
     * @var int $thirdPartyVolume
     */
    protected $thirdPartyVolume = null;

    /**
     * @var int $manualVolume
     */
    protected $manualVolume = null;

    /**
     * @var int $reconciledVolume
     */
    protected $reconciledVolume = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\Money $contractedRevenue
     */
    protected $contractedRevenue = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\Money $dfpRevenue
     */
    protected $dfpRevenue = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\Money $thirdPartyRevenue
     */
    protected $thirdPartyRevenue = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\Money $manualRevenue
     */
    protected $manualRevenue = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\Money $reconciledRevenue
     */
    protected $reconciledRevenue = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @param int $id
     * @param int $reconciliationReportId
     * @param int $lineItemId
     * @param int $creativeId
     * @param int $orderId
     * @param int $advertiserId
     * @param int $proposalLineItemId
     * @param int $proposalId
     * @param string $reconciliationSource
     * @param string $rateType
     * @param \Google\AdsApi\Dfp\v201802\Money $lineItemCostPerUnit
     * @param int $lineItemContractedUnitsBought
     * @param int $dfpVolume
     * @param int $thirdPartyVolume
     * @param int $manualVolume
     * @param int $reconciledVolume
     * @param \Google\AdsApi\Dfp\v201802\Money $contractedRevenue
     * @param \Google\AdsApi\Dfp\v201802\Money $dfpRevenue
     * @param \Google\AdsApi\Dfp\v201802\Money $thirdPartyRevenue
     * @param \Google\AdsApi\Dfp\v201802\Money $manualRevenue
     * @param \Google\AdsApi\Dfp\v201802\Money $reconciledRevenue
     * @param string $comments
     */
    public function __construct($id = null, $reconciliationReportId = null, $lineItemId = null, $creativeId = null, $orderId = null, $advertiserId = null, $proposalLineItemId = null, $proposalId = null, $reconciliationSource = null, $rateType = null, $lineItemCostPerUnit = null, $lineItemContractedUnitsBought = null, $dfpVolume = null, $thirdPartyVolume = null, $manualVolume = null, $reconciledVolume = null, $contractedRevenue = null, $dfpRevenue = null, $thirdPartyRevenue = null, $manualRevenue = null, $reconciledRevenue = null, $comments = null)
    {
      $this->id = $id;
      $this->reconciliationReportId = $reconciliationReportId;
      $this->lineItemId = $lineItemId;
      $this->creativeId = $creativeId;
      $this->orderId = $orderId;
      $this->advertiserId = $advertiserId;
      $this->proposalLineItemId = $proposalLineItemId;
      $this->proposalId = $proposalId;
      $this->reconciliationSource = $reconciliationSource;
      $this->rateType = $rateType;
      $this->lineItemCostPerUnit = $lineItemCostPerUnit;
      $this->lineItemContractedUnitsBought = $lineItemContractedUnitsBought;
      $this->dfpVolume = $dfpVolume;
      $this->thirdPartyVolume = $thirdPartyVolume;
      $this->manualVolume = $manualVolume;
      $this->reconciledVolume = $reconciledVolume;
      $this->contractedRevenue = $contractedRevenue;
      $this->dfpRevenue = $dfpRevenue;
      $this->thirdPartyRevenue = $thirdPartyRevenue;
      $this->manualRevenue = $manualRevenue;
      $this->reconciledRevenue = $reconciledRevenue;
      $this->comments = $comments;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getReconciliationReportId()
    {
      return $this->reconciliationReportId;
    }

    /**
     * @param int $reconciliationReportId
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setReconciliationReportId($reconciliationReportId)
    {
      $this->reconciliationReportId = (!is_null($reconciliationReportId) && PHP_INT_SIZE === 4)
          ? floatval($reconciliationReportId) : $reconciliationReportId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineItemId()
    {
      return $this->lineItemId;
    }

    /**
     * @param int $lineItemId
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setLineItemId($lineItemId)
    {
      $this->lineItemId = (!is_null($lineItemId) && PHP_INT_SIZE === 4)
          ? floatval($lineItemId) : $lineItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreativeId()
    {
      return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setCreativeId($creativeId)
    {
      $this->creativeId = (!is_null($creativeId) && PHP_INT_SIZE === 4)
          ? floatval($creativeId) : $creativeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setOrderId($orderId)
    {
      $this->orderId = (!is_null($orderId) && PHP_INT_SIZE === 4)
          ? floatval($orderId) : $orderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
      return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setAdvertiserId($advertiserId)
    {
      $this->advertiserId = (!is_null($advertiserId) && PHP_INT_SIZE === 4)
          ? floatval($advertiserId) : $advertiserId;
      return $this;
    }

    /**
     * @return int
     */
    public function getProposalLineItemId()
    {
      return $this->proposalLineItemId;
    }

    /**
     * @param int $proposalLineItemId
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setProposalLineItemId($proposalLineItemId)
    {
      $this->proposalLineItemId = (!is_null($proposalLineItemId) && PHP_INT_SIZE === 4)
          ? floatval($proposalLineItemId) : $proposalLineItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getProposalId()
    {
      return $this->proposalId;
    }

    /**
     * @param int $proposalId
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setProposalId($proposalId)
    {
      $this->proposalId = (!is_null($proposalId) && PHP_INT_SIZE === 4)
          ? floatval($proposalId) : $proposalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReconciliationSource()
    {
      return $this->reconciliationSource;
    }

    /**
     * @param string $reconciliationSource
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setReconciliationSource($reconciliationSource)
    {
      $this->reconciliationSource = $reconciliationSource;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateType()
    {
      return $this->rateType;
    }

    /**
     * @param string $rateType
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setRateType($rateType)
    {
      $this->rateType = $rateType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Money
     */
    public function getLineItemCostPerUnit()
    {
      return $this->lineItemCostPerUnit;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Money $lineItemCostPerUnit
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setLineItemCostPerUnit($lineItemCostPerUnit)
    {
      $this->lineItemCostPerUnit = $lineItemCostPerUnit;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineItemContractedUnitsBought()
    {
      return $this->lineItemContractedUnitsBought;
    }

    /**
     * @param int $lineItemContractedUnitsBought
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setLineItemContractedUnitsBought($lineItemContractedUnitsBought)
    {
      $this->lineItemContractedUnitsBought = (!is_null($lineItemContractedUnitsBought) && PHP_INT_SIZE === 4)
          ? floatval($lineItemContractedUnitsBought) : $lineItemContractedUnitsBought;
      return $this;
    }

    /**
     * @return int
     */
    public function getDfpVolume()
    {
      return $this->dfpVolume;
    }

    /**
     * @param int $dfpVolume
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setDfpVolume($dfpVolume)
    {
      $this->dfpVolume = (!is_null($dfpVolume) && PHP_INT_SIZE === 4)
          ? floatval($dfpVolume) : $dfpVolume;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyVolume()
    {
      return $this->thirdPartyVolume;
    }

    /**
     * @param int $thirdPartyVolume
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setThirdPartyVolume($thirdPartyVolume)
    {
      $this->thirdPartyVolume = (!is_null($thirdPartyVolume) && PHP_INT_SIZE === 4)
          ? floatval($thirdPartyVolume) : $thirdPartyVolume;
      return $this;
    }

    /**
     * @return int
     */
    public function getManualVolume()
    {
      return $this->manualVolume;
    }

    /**
     * @param int $manualVolume
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setManualVolume($manualVolume)
    {
      $this->manualVolume = (!is_null($manualVolume) && PHP_INT_SIZE === 4)
          ? floatval($manualVolume) : $manualVolume;
      return $this;
    }

    /**
     * @return int
     */
    public function getReconciledVolume()
    {
      return $this->reconciledVolume;
    }

    /**
     * @param int $reconciledVolume
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setReconciledVolume($reconciledVolume)
    {
      $this->reconciledVolume = (!is_null($reconciledVolume) && PHP_INT_SIZE === 4)
          ? floatval($reconciledVolume) : $reconciledVolume;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Money
     */
    public function getContractedRevenue()
    {
      return $this->contractedRevenue;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Money $contractedRevenue
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setContractedRevenue($contractedRevenue)
    {
      $this->contractedRevenue = $contractedRevenue;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Money
     */
    public function getDfpRevenue()
    {
      return $this->dfpRevenue;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Money $dfpRevenue
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setDfpRevenue($dfpRevenue)
    {
      $this->dfpRevenue = $dfpRevenue;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Money
     */
    public function getThirdPartyRevenue()
    {
      return $this->thirdPartyRevenue;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Money $thirdPartyRevenue
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setThirdPartyRevenue($thirdPartyRevenue)
    {
      $this->thirdPartyRevenue = $thirdPartyRevenue;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Money
     */
    public function getManualRevenue()
    {
      return $this->manualRevenue;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Money $manualRevenue
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setManualRevenue($manualRevenue)
    {
      $this->manualRevenue = $manualRevenue;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Money
     */
    public function getReconciledRevenue()
    {
      return $this->reconciledRevenue;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Money $reconciledRevenue
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setReconciledRevenue($reconciledRevenue)
    {
      $this->reconciledRevenue = $reconciledRevenue;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \Google\AdsApi\Dfp\v201802\ReconciliationReportRow
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

}
