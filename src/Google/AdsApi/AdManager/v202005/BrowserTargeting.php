<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BrowserTargeting
{

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\Technology[] $browsers
     */
    protected $browsers = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\AdManager\v202005\Technology[] $browsers
     */
    public function __construct($isTargeted = null, array $browsers = null)
    {
      $this->isTargeted = $isTargeted;
      $this->browsers = $browsers;
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
     * @return \Google\AdsApi\AdManager\v202005\BrowserTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\Technology[]
     */
    public function getBrowsers()
    {
      return $this->browsers;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\Technology[]|null $browsers
     * @return \Google\AdsApi\AdManager\v202005\BrowserTargeting
     */
    public function setBrowsers(array $browsers = null)
    {
      $this->browsers = $browsers;
      return $this;
    }

}
