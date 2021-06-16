<?php

namespace Google\AdsApi\AdManager\v202105;


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
     * @var \Google\AdsApi\AdManager\v202105\Technology[] $browserLanguages
     */
    protected $browserLanguages = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\AdManager\v202105\Technology[] $browserLanguages
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
     * @return \Google\AdsApi\AdManager\v202105\BrowserLanguageTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\Technology[]
     */
    public function getBrowserLanguages()
    {
      return $this->browserLanguages;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\Technology[]|null $browserLanguages
     * @return \Google\AdsApi\AdManager\v202105\BrowserLanguageTargeting
     */
    public function setBrowserLanguages(array $browserLanguages = null)
    {
      $this->browserLanguages = $browserLanguages;
      return $this;
    }

}
