<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationLineItemReport
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
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var int $proposalId
     */
    protected $proposalId = null;

    /**
     * @var int $lineItemId
     */
    protected $lineItemId = null;

    /**
     * @var int $proposalLineItemId
     */
    protected $proposalLineItemId = null;

    /**
     * @var string $rateType
     */
    protected $rateType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201711\Money $netRate
     */
    protected $netRate = null;

    /**
     * @var \Google\AdsApi\AdManager\v201711\Money $grossRate
     */
    protected $grossRate = null;

    /**
     * @var string $pricingModel
     */
    protected $pricingModel = null;

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
     * @var string $reconciliationSource
     */
    protected $reconciliationSource = null;

    /**
     * @var int $reconciledVolume
     */
    protected $reconciledVolume = null;

    /**
     * @var int $capVolume
     */
    protected $capVolume = null;

    /**
     * @var int $rolloverVolume
     */
    protected $rolloverVolume = null;

    /**
     * @var int $billableVolume
     */
    protected $billableVolume = null;

    /**
     * @var \Google\AdsApi\AdManager\v201711\Money $netBillableRevenue
     */
    protected $netBillableRevenue = null;

    /**
     * @var \Google\AdsApi\AdManager\v201711\Money $grossBillableRevenue
     */
    protected $grossBillableRevenue = null;

    /**
     * @var \Google\AdsApi\AdManager\v201711\BillableRevenueOverrides $billableRevenueOverrides
     */
    protected $billableRevenueOverrides = null;

    /**
     * @param int $id
     * @param int $reconciliationReportId
     * @param int $orderId
     * @param int $proposalId
     * @param int $lineItemId
     * @param int $proposalLineItemId
     * @param string $rateType
     * @param \Google\AdsApi\AdManager\v201711\Money $netRate
     * @param \Google\AdsApi\AdManager\v201711\Money $grossRate
     * @param string $pricingModel
     * @param int $dfpVolume
     * @param int $thirdPartyVolume
     * @param int $manualVolume
     * @param string $reconciliationSource
     * @param int $reconciledVolume
     * @param int $capVolume
     * @param int $rolloverVolume
     * @param int $billableVolume
     * @param \Google\AdsApi\AdManager\v201711\Money $netBillableRevenue
     * @param \Google\AdsApi\AdManager\v201711\Money $grossBillableRevenue
     * @param \Google\AdsApi\AdManager\v201711\BillableRevenueOverrides $billableRevenueOverrides
     */
    public function __construct($id = null, $reconciliationReportId = null, $orderId = null, $proposalId = null, $lineItemId = null, $proposalLineItemId = null, $rateType = null, $netRate = null, $grossRate = null, $pricingModel = null, $dfpVolume = null, $thirdPartyVolume = null, $manualVolume = null, $reconciliationSource = null, $reconciledVolume = null, $capVolume = null, $rolloverVolume = null, $billableVolume = null, $netBillableRevenue = null, $grossBillableRevenue = null, $billableRevenueOverrides = null)
    {
      $this->id = $id;
      $this->reconciliationReportId = $reconciliationReportId;
      $this->orderId = $orderId;
      $this->proposalId = $proposalId;
      $this->lineItemId = $lineItemId;
      $this->proposalLineItemId = $proposalLineItemId;
      $this->rateType = $rateType;
      $this->netRate = $netRate;
      $this->grossRate = $grossRate;
      $this->pricingModel = $pricingModel;
      $this->dfpVolume = $dfpVolume;
      $this->thirdPartyVolume = $thirdPartyVolume;
      $this->manualVolume = $manualVolume;
      $this->reconciliationSource = $reconciliationSource;
      $this->reconciledVolume = $reconciledVolume;
      $this->capVolume = $capVolume;
      $this->rolloverVolume = $rolloverVolume;
      $this->billableVolume = $billableVolume;
      $this->netBillableRevenue = $netBillableRevenue;
      $this->grossBillableRevenue = $grossBillableRevenue;
      $this->billableRevenueOverrides = $billableRevenueOverrides;
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
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
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
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
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
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
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
    public function getProposalId()
    {
      return $this->proposalId;
    }

    /**
     * @param int $proposalId
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setProposalId($proposalId)
    {
      $this->proposalId = (!is_null($proposalId) && PHP_INT_SIZE === 4)
          ? floatval($proposalId) : $proposalId;
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
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
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
    public function getProposalLineItemId()
    {
      return $this->proposalLineItemId;
    }

    /**
     * @param int $proposalLineItemId
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setProposalLineItemId($proposalLineItemId)
    {
      $this->proposalLineItemId = (!is_null($proposalLineItemId) && PHP_INT_SIZE === 4)
          ? floatval($proposalLineItemId) : $proposalLineItemId;
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
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setRateType($rateType)
    {
      $this->rateType = $rateType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\Money
     */
    public function getNetRate()
    {
      return $this->netRate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\Money $netRate
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setNetRate($netRate)
    {
      $this->netRate = $netRate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\Money
     */
    public function getGrossRate()
    {
      return $this->grossRate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\Money $grossRate
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setGrossRate($grossRate)
    {
      $this->grossRate = $grossRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingModel()
    {
      return $this->pricingModel;
    }

    /**
     * @param string $pricingModel
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setPricingModel($pricingModel)
    {
      $this->pricingModel = $pricingModel;
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
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
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
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
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
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setManualVolume($manualVolume)
    {
      $this->manualVolume = (!is_null($manualVolume) && PHP_INT_SIZE === 4)
          ? floatval($manualVolume) : $manualVolume;
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
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setReconciliationSource($reconciliationSource)
    {
      $this->reconciliationSource = $reconciliationSource;
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
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setReconciledVolume($reconciledVolume)
    {
      $this->reconciledVolume = (!is_null($reconciledVolume) && PHP_INT_SIZE === 4)
          ? floatval($reconciledVolume) : $reconciledVolume;
      return $this;
    }

    /**
     * @return int
     */
    public function getCapVolume()
    {
      return $this->capVolume;
    }

    /**
     * @param int $capVolume
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setCapVolume($capVolume)
    {
      $this->capVolume = (!is_null($capVolume) && PHP_INT_SIZE === 4)
          ? floatval($capVolume) : $capVolume;
      return $this;
    }

    /**
     * @return int
     */
    public function getRolloverVolume()
    {
      return $this->rolloverVolume;
    }

    /**
     * @param int $rolloverVolume
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setRolloverVolume($rolloverVolume)
    {
      $this->rolloverVolume = (!is_null($rolloverVolume) && PHP_INT_SIZE === 4)
          ? floatval($rolloverVolume) : $rolloverVolume;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillableVolume()
    {
      return $this->billableVolume;
    }

    /**
     * @param int $billableVolume
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setBillableVolume($billableVolume)
    {
      $this->billableVolume = (!is_null($billableVolume) && PHP_INT_SIZE === 4)
          ? floatval($billableVolume) : $billableVolume;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\Money
     */
    public function getNetBillableRevenue()
    {
      return $this->netBillableRevenue;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\Money $netBillableRevenue
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setNetBillableRevenue($netBillableRevenue)
    {
      $this->netBillableRevenue = $netBillableRevenue;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\Money
     */
    public function getGrossBillableRevenue()
    {
      return $this->grossBillableRevenue;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\Money $grossBillableRevenue
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setGrossBillableRevenue($grossBillableRevenue)
    {
      $this->grossBillableRevenue = $grossBillableRevenue;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\BillableRevenueOverrides
     */
    public function getBillableRevenueOverrides()
    {
      return $this->billableRevenueOverrides;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\BillableRevenueOverrides $billableRevenueOverrides
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport
     */
    public function setBillableRevenueOverrides($billableRevenueOverrides)
    {
      $this->billableRevenueOverrides = $billableRevenueOverrides;
      return $this;
    }

}
