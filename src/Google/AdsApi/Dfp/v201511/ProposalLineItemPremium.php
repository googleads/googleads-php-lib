<?php

namespace Google\AdsApi\Dfp\v201511;

class ProposalLineItemPremium
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\PremiumRateValue $premiumRateValue
     */
    protected $premiumRateValue = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\PremiumRateValue $premiumRateValue
     * @param string $status
     */
    public function __construct($premiumRateValue = null, $status = null)
    {
      $this->premiumRateValue = $premiumRateValue;
      $this->status = $status;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\PremiumRateValue
     */
    public function getPremiumRateValue()
    {
      return $this->premiumRateValue;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\PremiumRateValue $premiumRateValue
     * @return \Google\AdsApi\Dfp\v201511\ProposalLineItemPremium
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
     * @return \Google\AdsApi\Dfp\v201511\ProposalLineItemPremium
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
