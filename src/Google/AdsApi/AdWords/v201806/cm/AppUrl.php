<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AppUrl
{

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $osType
     */
    protected $osType = null;

    /**
     * @param string $url
     * @param string $osType
     */
    public function __construct($url = null, $osType = null)
    {
      $this->url = $url;
      $this->osType = $osType;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Google\AdsApi\AdWords\v201806\cm\AppUrl
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getOsType()
    {
      return $this->osType;
    }

    /**
     * @param string $osType
     * @return \Google\AdsApi\AdWords\v201806\cm\AppUrl
     */
    public function setOsType($osType)
    {
      $this->osType = $osType;
      return $this;
    }

}
