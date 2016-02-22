<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class BiddingScheme
{

    /**
     * @var string $BiddingSchemeType
     */
    protected $BiddingSchemeType = null;

    /**
     * @param string $BiddingSchemeType
     */
    public function __construct($BiddingSchemeType = null)
    {
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

    /**
     * @return string
     */
    public function getBiddingSchemeType()
    {
      return $this->BiddingSchemeType;
    }

    /**
     * @param string $BiddingSchemeType
     * @return \Google\AdsApi\AdWords\v201601\cm\BiddingScheme
     */
    public function setBiddingSchemeType($BiddingSchemeType)
    {
      $this->BiddingSchemeType = $BiddingSchemeType;
      return $this;
    }

}
