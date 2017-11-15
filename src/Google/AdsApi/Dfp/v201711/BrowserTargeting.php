<?php

namespace Google\AdsApi\Dfp\v201711;


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
     * @var \Google\AdsApi\Dfp\v201711\Technology[] $browsers
     */
    protected $browsers = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\Dfp\v201711\Technology[] $browsers
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
     * @return \Google\AdsApi\Dfp\v201711\BrowserTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\Technology[]
     */
    public function getBrowsers()
    {
      return $this->browsers;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\Technology[] $browsers
     * @return \Google\AdsApi\Dfp\v201711\BrowserTargeting
     */
    public function setBrowsers(array $browsers)
    {
      $this->browsers = $browsers;
      return $this;
    }

}
