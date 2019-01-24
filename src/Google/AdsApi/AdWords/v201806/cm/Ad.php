<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Ad
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $displayUrl
     */
    protected $displayUrl = null;

    /**
     * @var string[] $finalUrls
     */
    protected $finalUrls = null;

    /**
     * @var string[] $finalMobileUrls
     */
    protected $finalMobileUrls = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AppUrl[] $finalAppUrls
     */
    protected $finalAppUrls = null;

    /**
     * @var string $trackingUrlTemplate
     */
    protected $trackingUrlTemplate = null;

    /**
     * @var string $finalUrlSuffix
     */
    protected $finalUrlSuffix = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     */
    protected $urlCustomParameters = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\UrlData[] $urlData
     */
    protected $urlData = null;

    /**
     * @var boolean $automated
     */
    protected $automated = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $devicePreference
     */
    protected $devicePreference = null;

    /**
     * @var string $systemManagedEntitySource
     */
    protected $systemManagedEntitySource = null;

    /**
     * @var string $AdType
     */
    protected $AdType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['Ad.Type' => 'AdType'];

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201806\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param string $finalUrlSuffix
     * @param \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201806\cm\UrlData[] $urlData
     * @param boolean $automated
     * @param string $type
     * @param int $devicePreference
     * @param string $systemManagedEntitySource
     * @param string $AdType
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null)
    {
      $this->id = $id;
      $this->url = $url;
      $this->displayUrl = $displayUrl;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->finalAppUrls = $finalAppUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->finalUrlSuffix = $finalUrlSuffix;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->urlData = $urlData;
      $this->automated = $automated;
      $this->type = $type;
      $this->devicePreference = $devicePreference;
      $this->systemManagedEntitySource = $systemManagedEntitySource;
      $this->AdType = $AdType;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayUrl()
    {
      return $this->displayUrl;
    }

    /**
     * @param string $displayUrl
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setDisplayUrl($displayUrl)
    {
      $this->displayUrl = $displayUrl;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getFinalUrls()
    {
      return $this->finalUrls;
    }

    /**
     * @param string[] $finalUrls
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setFinalUrls(array $finalUrls)
    {
      $this->finalUrls = $finalUrls;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getFinalMobileUrls()
    {
      return $this->finalMobileUrls;
    }

    /**
     * @param string[] $finalMobileUrls
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setFinalMobileUrls(array $finalMobileUrls)
    {
      $this->finalMobileUrls = $finalMobileUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AppUrl[]
     */
    public function getFinalAppUrls()
    {
      return $this->finalAppUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AppUrl[] $finalAppUrls
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setFinalAppUrls(array $finalAppUrls)
    {
      $this->finalAppUrls = $finalAppUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
      return $this->trackingUrlTemplate;
    }

    /**
     * @param string $trackingUrlTemplate
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setTrackingUrlTemplate($trackingUrlTemplate)
    {
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinalUrlSuffix()
    {
      return $this->finalUrlSuffix;
    }

    /**
     * @param string $finalUrlSuffix
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setFinalUrlSuffix($finalUrlSuffix)
    {
      $this->finalUrlSuffix = $finalUrlSuffix;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\CustomParameters
     */
    public function getUrlCustomParameters()
    {
      return $this->urlCustomParameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setUrlCustomParameters($urlCustomParameters)
    {
      $this->urlCustomParameters = $urlCustomParameters;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\UrlData[]
     */
    public function getUrlData()
    {
      return $this->urlData;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\UrlData[] $urlData
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setUrlData(array $urlData)
    {
      $this->urlData = $urlData;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutomated()
    {
      return $this->automated;
    }

    /**
     * @param boolean $automated
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setAutomated($automated)
    {
      $this->automated = $automated;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getDevicePreference()
    {
      return $this->devicePreference;
    }

    /**
     * @param int $devicePreference
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setDevicePreference($devicePreference)
    {
      $this->devicePreference = (!is_null($devicePreference) && PHP_INT_SIZE === 4)
          ? floatval($devicePreference) : $devicePreference;
      return $this;
    }

    /**
     * @return string
     */
    public function getSystemManagedEntitySource()
    {
      return $this->systemManagedEntitySource;
    }

    /**
     * @param string $systemManagedEntitySource
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setSystemManagedEntitySource($systemManagedEntitySource)
    {
      $this->systemManagedEntitySource = $systemManagedEntitySource;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdType()
    {
      return $this->AdType;
    }

    /**
     * @param string $AdType
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function setAdType($AdType)
    {
      $this->AdType = $AdType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
