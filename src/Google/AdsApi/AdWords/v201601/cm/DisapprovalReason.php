<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class DisapprovalReason
{

    /**
     * @var string $shortName
     */
    protected $shortName = null;

    /**
     * @param string $shortName
     */
    public function __construct($shortName = null)
    {
      $this->shortName = $shortName;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
      return $this->shortName;
    }

    /**
     * @param string $shortName
     * @return \Google\AdsApi\AdWords\v201601\cm\DisapprovalReason
     */
    public function setShortName($shortName)
    {
      $this->shortName = $shortName;
      return $this;
    }

}
