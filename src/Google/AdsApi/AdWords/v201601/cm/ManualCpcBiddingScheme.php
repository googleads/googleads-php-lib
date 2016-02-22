<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ManualCpcBiddingScheme extends \Google\AdsApi\AdWords\v201601\cm\BiddingScheme
{

    /**
     * @var boolean $enhancedCpcEnabled
     */
    protected $enhancedCpcEnabled = null;

    /**
     * @param string $BiddingSchemeType
     * @param boolean $enhancedCpcEnabled
     */
    public function __construct($BiddingSchemeType = null, $enhancedCpcEnabled = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->enhancedCpcEnabled = $enhancedCpcEnabled;
    }

    /**
     * @return boolean
     */
    public function getEnhancedCpcEnabled()
    {
      return $this->enhancedCpcEnabled;
    }

    /**
     * @param boolean $enhancedCpcEnabled
     * @return \Google\AdsApi\AdWords\v201601\cm\ManualCpcBiddingScheme
     */
    public function setEnhancedCpcEnabled($enhancedCpcEnabled)
    {
      $this->enhancedCpcEnabled = $enhancedCpcEnabled;
      return $this;
    }

}
