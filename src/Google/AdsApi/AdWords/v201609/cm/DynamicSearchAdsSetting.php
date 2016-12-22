<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DynamicSearchAdsSetting extends \Google\AdsApi\AdWords\v201609\cm\Setting
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
     * @param string $SettingType
     * @param string $domainName
     * @param string $languageCode
     */
    public function __construct($SettingType = null, $domainName = null, $languageCode = null)
    {
      parent::__construct($SettingType);
      $this->domainName = $domainName;
      $this->languageCode = $languageCode;
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
     * @return \Google\AdsApi\AdWords\v201609\cm\DynamicSearchAdsSetting
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
     * @return \Google\AdsApi\AdWords\v201609\cm\DynamicSearchAdsSetting
     */
    public function setLanguageCode($languageCode)
    {
      $this->languageCode = $languageCode;
      return $this;
    }

}
