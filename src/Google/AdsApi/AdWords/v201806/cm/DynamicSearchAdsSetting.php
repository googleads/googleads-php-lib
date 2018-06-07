<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DynamicSearchAdsSetting extends \Google\AdsApi\AdWords\v201806\cm\Setting
{

    /**
     * @var string $domainName
     */
    protected $domainName = null;

    /**
     * @var string $languageCode
     */
    protected $languageCode = null;

    /**
     * @var boolean $useSuppliedUrlsOnly
     */
    protected $useSuppliedUrlsOnly = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\PageFeed $pageFeed
     */
    protected $pageFeed = null;

    /**
     * @param string $SettingType
     * @param string $domainName
     * @param string $languageCode
     * @param boolean $useSuppliedUrlsOnly
     * @param \Google\AdsApi\AdWords\v201806\cm\PageFeed $pageFeed
     */
    public function __construct($SettingType = null, $domainName = null, $languageCode = null, $useSuppliedUrlsOnly = null, $pageFeed = null)
    {
      parent::__construct($SettingType);
      $this->domainName = $domainName;
      $this->languageCode = $languageCode;
      $this->useSuppliedUrlsOnly = $useSuppliedUrlsOnly;
      $this->pageFeed = $pageFeed;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
      return $this->domainName;
    }

    /**
     * @param string $domainName
     * @return \Google\AdsApi\AdWords\v201806\cm\DynamicSearchAdsSetting
     */
    public function setDomainName($domainName)
    {
      $this->domainName = $domainName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
      return $this->languageCode;
    }

    /**
     * @param string $languageCode
     * @return \Google\AdsApi\AdWords\v201806\cm\DynamicSearchAdsSetting
     */
    public function setLanguageCode($languageCode)
    {
      $this->languageCode = $languageCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseSuppliedUrlsOnly()
    {
      return $this->useSuppliedUrlsOnly;
    }

    /**
     * @param boolean $useSuppliedUrlsOnly
     * @return \Google\AdsApi\AdWords\v201806\cm\DynamicSearchAdsSetting
     */
    public function setUseSuppliedUrlsOnly($useSuppliedUrlsOnly)
    {
      $this->useSuppliedUrlsOnly = $useSuppliedUrlsOnly;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\PageFeed
     */
    public function getPageFeed()
    {
      return $this->pageFeed;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\PageFeed $pageFeed
     * @return \Google\AdsApi\AdWords\v201806\cm\DynamicSearchAdsSetting
     */
    public function setPageFeed($pageFeed)
    {
      $this->pageFeed = $pageFeed;
      return $this;
    }

}
