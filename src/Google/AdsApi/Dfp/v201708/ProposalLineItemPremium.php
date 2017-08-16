<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemPremium
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\PremiumRateValue $premiumRateValue
     */
    protected $premiumRateValue = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\PremiumRateValue $premiumRateValue
     * @param string $status
     */
    public function __construct($premiumRateValue = null, $status = null)
    {
      $this->premiumRateValue = $premiumRateValue;
      $this->status = $status;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\PremiumRateValue
     */
    public function getPremiumRateValue()
    {
      return $this->premiumRateValue;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\PremiumRateValue $premiumRateValue
     * @return \Google\AdsApi\Dfp\v201708\ProposalLineItemPremium
     */
    public function setPremiumRateValue($premiumRateValue)
    {
      $this->premiumRateValue = $premiumRateValue;
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
     * @return \Google\AdsApi\Dfp\v201708\ProposalLineItemPremium
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
