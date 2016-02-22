<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ConversionOptimizerBiddingScheme extends \Google\AdsApi\AdWords\v201601\cm\BiddingScheme
{

    /**
     * @var string $pricingMode
     */
    protected $pricingMode = null;

    /**
     * @var string $bidType
     */
    protected $bidType = null;

    /**
     * @param string $BiddingSchemeType
     * @param string $pricingMode
     * @param string $bidType
     */
    public function __construct($BiddingSchemeType = null, $pricingMode = null, $bidType = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->pricingMode = $pricingMode;
      $this->bidType = $bidType;
    }

    /**
     * @return string
     */
    public function getPricingMode()
    {
      return $this->pricingMode;
    }

    /**
     * @param string $pricingMode
     * @return \Google\AdsApi\AdWords\v201601\cm\ConversionOptimizerBiddingScheme
     */
    public function setPricingMode($pricingMode)
    {
      $this->pricingMode = $pricingMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBidType()
    {
      return $this->bidType;
    }

    /**
     * @param string $bidType
     * @return \Google\AdsApi\AdWords\v201601\cm\ConversionOptimizerBiddingScheme
     */
    public function setBidType($bidType)
    {
      $this->bidType = $bidType;
      return $this;
    }

}
