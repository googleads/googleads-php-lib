<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BrowserLanguageTargeting
{

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\Technology[] $browserLanguages
     */
    protected $browserLanguages = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\Dfp\v201705\Technology[] $browserLanguages
     */
    public function __construct($isTargeted = null, array $browserLanguages = null)
    {
      $this->isTargeted = $isTargeted;
      $this->browserLanguages = $browserLanguages;
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
     * @return \Google\AdsApi\Dfp\v201705\BrowserLanguageTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\Technology[]
     */
    public function getBrowserLanguages()
    {
      return $this->browserLanguages;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\Technology[] $browserLanguages
     * @return \Google\AdsApi\Dfp\v201705\BrowserLanguageTargeting
     */
    public function setBrowserLanguages(array $browserLanguages)
    {
      $this->browserLanguages = $browserLanguages;
      return $this;
    }

}
