<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationOrderReport
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
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $submissionDateTime
     */
    protected $submissionDateTime = null;

    /**
     * @var int $submitterId
     */
    protected $submitterId = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\Money $proposalNetBillableRevenueManualAdjustment
     */
    protected $proposalNetBillableRevenueManualAdjustment = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\Money $proposalGrossBillableRevenueManualAdjustment
     */
    protected $proposalGrossBillableRevenueManualAdjustment = null;

    /**
     * @param int $id
     * @param int $reconciliationReportId
     * @param int $orderId
     * @param int $proposalId
     * @param string $status
     * @param \Google\AdsApi\AdManager\v201802\DateTime $submissionDateTime
     * @param int $submitterId
     * @param \Google\AdsApi\AdManager\v201802\Money $proposalNetBillableRevenueManualAdjustment
     * @param \Google\AdsApi\AdManager\v201802\Money $proposalGrossBillableRevenueManualAdjustment
     */
    public function __construct($id = null, $reconciliationReportId = null, $orderId = null, $proposalId = null, $status = null, $submissionDateTime = null, $submitterId = null, $proposalNetBillableRevenueManualAdjustment = null, $proposalGrossBillableRevenueManualAdjustment = null)
    {
      $this->id = $id;
      $this->reconciliationReportId = $reconciliationReportId;
      $this->orderId = $orderId;
      $this->proposalId = $proposalId;
      $this->status = $status;
      $this->submissionDateTime = $submissionDateTime;
      $this->submitterId = $submitterId;
      $this->proposalNetBillableRevenueManualAdjustment = $proposalNetBillableRevenueManualAdjustment;
      $this->proposalGrossBillableRevenueManualAdjustment = $proposalGrossBillableRevenueManualAdjustment;
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
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationOrderReport
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
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationOrderReport
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
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationOrderReport
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
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationOrderReport
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
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationOrderReport
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getSubmissionDateTime()
    {
      return $this->submissionDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $submissionDateTime
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationOrderReport
     */
    public function setSubmissionDateTime($submissionDateTime)
    {
      $this->submissionDateTime = $submissionDateTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubmitterId()
    {
      return $this->submitterId;
    }

    /**
     * @param int $submitterId
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationOrderReport
     */
    public function setSubmitterId($submitterId)
    {
      $this->submitterId = (!is_null($submitterId) && PHP_INT_SIZE === 4)
          ? floatval($submitterId) : $submitterId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\Money
     */
    public function getProposalNetBillableRevenueManualAdjustment()
    {
      return $this->proposalNetBillableRevenueManualAdjustment;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\Money $proposalNetBillableRevenueManualAdjustment
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationOrderReport
     */
    public function setProposalNetBillableRevenueManualAdjustment($proposalNetBillableRevenueManualAdjustment)
    {
      $this->proposalNetBillableRevenueManualAdjustment = $proposalNetBillableRevenueManualAdjustment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\Money
     */
    public function getProposalGrossBillableRevenueManualAdjustment()
    {
      return $this->proposalGrossBillableRevenueManualAdjustment;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\Money $proposalGrossBillableRevenueManualAdjustment
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationOrderReport
     */
    public function setProposalGrossBillableRevenueManualAdjustment($proposalGrossBillableRevenueManualAdjustment)
    {
      $this->proposalGrossBillableRevenueManualAdjustment = $proposalGrossBillableRevenueManualAdjustment;
      return $this;
    }

}
