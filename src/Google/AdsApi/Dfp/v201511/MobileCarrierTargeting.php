<?php

namespace Google\AdsApi\Dfp\v201511;

class MobileCarrierTargeting
{

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\Technology[] $mobileCarriers
     */
    protected $mobileCarriers = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\Dfp\v201511\Technology[] $mobileCarriers
     */
    public function __construct($isTargeted = null, array $mobileCarriers = null)
    {
      $this->isTargeted = $isTargeted;
      $this->mobileCarriers = $mobileCarriers;
    }

    /**
     * @return boolean
     */
    public function getIsTargeted()
    {
      return $this->isTargeted;
    }

    /**
     * @param boolean $isTargeted
     * @return \Google\AdsApi\Dfp\v201511\MobileCarrierTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Technology[]
     */
    public function getMobileCarriers()
    {
      return $this->mobileCarriers;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Technology[] $mobileCarriers
     * @return \Google\AdsApi\Dfp\v201511\MobileCarrierTargeting
     */
    public function setMobileCarriers(array $mobileCarriers)
    {
      $this->mobileCarriers = $mobileCarriers;
      return $this;
    }

}
