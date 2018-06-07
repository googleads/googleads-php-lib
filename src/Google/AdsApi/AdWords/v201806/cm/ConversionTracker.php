<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class ConversionTracker
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $originalConversionTypeId
     */
    protected $originalConversionTypeId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var string $googleEventSnippet
     */
    protected $googleEventSnippet = null;

    /**
     * @var string $googleGlobalSiteTag
     */
    protected $googleGlobalSiteTag = null;

    /**
     * @var string $dataDrivenModelStatus
     */
    protected $dataDrivenModelStatus = null;

    /**
     * @var int $conversionTypeOwnerCustomerId
     */
    protected $conversionTypeOwnerCustomerId = null;

    /**
     * @var int $viewthroughLookbackWindow
     */
    protected $viewthroughLookbackWindow = null;

    /**
     * @var int $ctcLookbackWindow
     */
    protected $ctcLookbackWindow = null;

    /**
     * @var string $countingType
     */
    protected $countingType = null;

    /**
     * @var float $defaultRevenueValue
     */
    protected $defaultRevenueValue = null;

    /**
     * @var string $defaultRevenueCurrencyCode
     */
    protected $defaultRevenueCurrencyCode = null;

    /**
     * @var boolean $alwaysUseDefaultRevenueValue
     */
    protected $alwaysUseDefaultRevenueValue = null;

    /**
     * @var boolean $excludeFromBidding
     */
    protected $excludeFromBidding = null;

    /**
     * @var string $attributionModelType
     */
    protected $attributionModelType = null;

    /**
     * @var string $mostRecentConversionDate
     */
    protected $mostRecentConversionDate = null;

    /**
     * @var string $lastReceivedRequestTime
     */
    protected $lastReceivedRequestTime = null;

    /**
     * @var string $ConversionTrackerType
     */
    protected $ConversionTrackerType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['ConversionTracker.Type' => 'ConversionTrackerType'];

    /**
     * @param int $id
     * @param int $originalConversionTypeId
     * @param string $name
     * @param string $status
     * @param string $category
     * @param string $googleEventSnippet
     * @param string $googleGlobalSiteTag
     * @param string $dataDrivenModelStatus
     * @param int $conversionTypeOwnerCustomerId
     * @param int $viewthroughLookbackWindow
     * @param int $ctcLookbackWindow
     * @param string $countingType
     * @param float $defaultRevenueValue
     * @param string $defaultRevenueCurrencyCode
     * @param boolean $alwaysUseDefaultRevenueValue
     * @param boolean $excludeFromBidding
     * @param string $attributionModelType
     * @param string $mostRecentConversionDate
     * @param string $lastReceivedRequestTime
     * @param string $ConversionTrackerType
     */
    public function __construct($id = null, $originalConversionTypeId = null, $name = null, $status = null, $category = null, $googleEventSnippet = null, $googleGlobalSiteTag = null, $dataDrivenModelStatus = null, $conversionTypeOwnerCustomerId = null, $viewthroughLookbackWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $defaultRevenueCurrencyCode = null, $alwaysUseDefaultRevenueValue = null, $excludeFromBidding = null, $attributionModelType = null, $mostRecentConversionDate = null, $lastReceivedRequestTime = null, $ConversionTrackerType = null)
    {
      $this->id = $id;
      $this->originalConversionTypeId = $originalConversionTypeId;
      $this->name = $name;
      $this->status = $status;
      $this->category = $category;
      $this->googleEventSnippet = $googleEventSnippet;
      $this->googleGlobalSiteTag = $googleGlobalSiteTag;
      $this->dataDrivenModelStatus = $dataDrivenModelStatus;
      $this->conversionTypeOwnerCustomerId = $conversionTypeOwnerCustomerId;
      $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
      $this->ctcLookbackWindow = $ctcLookbackWindow;
      $this->countingType = $countingType;
      $this->defaultRevenueValue = $defaultRevenueValue;
      $this->defaultRevenueCurrencyCode = $defaultRevenueCurrencyCode;
      $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
      $this->excludeFromBidding = $excludeFromBidding;
      $this->attributionModelType = $attributionModelType;
      $this->mostRecentConversionDate = $mostRecentConversionDate;
      $this->lastReceivedRequestTime = $lastReceivedRequestTime;
      $this->ConversionTrackerType = $ConversionTrackerType;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginalConversionTypeId()
    {
      return $this->originalConversionTypeId;
    }

    /**
     * @param int $originalConversionTypeId
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setOriginalConversionTypeId($originalConversionTypeId)
    {
      $this->originalConversionTypeId = (!is_null($originalConversionTypeId) && PHP_INT_SIZE === 4)
          ? floatval($originalConversionTypeId) : $originalConversionTypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoogleEventSnippet()
    {
      return $this->googleEventSnippet;
    }

    /**
     * @param string $googleEventSnippet
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setGoogleEventSnippet($googleEventSnippet)
    {
      $this->googleEventSnippet = $googleEventSnippet;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoogleGlobalSiteTag()
    {
      return $this->googleGlobalSiteTag;
    }

    /**
     * @param string $googleGlobalSiteTag
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setGoogleGlobalSiteTag($googleGlobalSiteTag)
    {
      $this->googleGlobalSiteTag = $googleGlobalSiteTag;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataDrivenModelStatus()
    {
      return $this->dataDrivenModelStatus;
    }

    /**
     * @param string $dataDrivenModelStatus
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setDataDrivenModelStatus($dataDrivenModelStatus)
    {
      $this->dataDrivenModelStatus = $dataDrivenModelStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getConversionTypeOwnerCustomerId()
    {
      return $this->conversionTypeOwnerCustomerId;
    }

    /**
     * @param int $conversionTypeOwnerCustomerId
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setConversionTypeOwnerCustomerId($conversionTypeOwnerCustomerId)
    {
      $this->conversionTypeOwnerCustomerId = (!is_null($conversionTypeOwnerCustomerId) && PHP_INT_SIZE === 4)
          ? floatval($conversionTypeOwnerCustomerId) : $conversionTypeOwnerCustomerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getViewthroughLookbackWindow()
    {
      return $this->viewthroughLookbackWindow;
    }

    /**
     * @param int $viewthroughLookbackWindow
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setViewthroughLookbackWindow($viewthroughLookbackWindow)
    {
      $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
      return $this;
    }

    /**
     * @return int
     */
    public function getCtcLookbackWindow()
    {
      return $this->ctcLookbackWindow;
    }

    /**
     * @param int $ctcLookbackWindow
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setCtcLookbackWindow($ctcLookbackWindow)
    {
      $this->ctcLookbackWindow = $ctcLookbackWindow;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountingType()
    {
      return $this->countingType;
    }

    /**
     * @param string $countingType
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setCountingType($countingType)
    {
      $this->countingType = $countingType;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultRevenueValue()
    {
      return $this->defaultRevenueValue;
    }

    /**
     * @param float $defaultRevenueValue
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setDefaultRevenueValue($defaultRevenueValue)
    {
      $this->defaultRevenueValue = $defaultRevenueValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultRevenueCurrencyCode()
    {
      return $this->defaultRevenueCurrencyCode;
    }

    /**
     * @param string $defaultRevenueCurrencyCode
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setDefaultRevenueCurrencyCode($defaultRevenueCurrencyCode)
    {
      $this->defaultRevenueCurrencyCode = $defaultRevenueCurrencyCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAlwaysUseDefaultRevenueValue()
    {
      return $this->alwaysUseDefaultRevenueValue;
    }

    /**
     * @param boolean $alwaysUseDefaultRevenueValue
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setAlwaysUseDefaultRevenueValue($alwaysUseDefaultRevenueValue)
    {
      $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeFromBidding()
    {
      return $this->excludeFromBidding;
    }

    /**
     * @param boolean $excludeFromBidding
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setExcludeFromBidding($excludeFromBidding)
    {
      $this->excludeFromBidding = $excludeFromBidding;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttributionModelType()
    {
      return $this->attributionModelType;
    }

    /**
     * @param string $attributionModelType
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setAttributionModelType($attributionModelType)
    {
      $this->attributionModelType = $attributionModelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMostRecentConversionDate()
    {
      return $this->mostRecentConversionDate;
    }

    /**
     * @param string $mostRecentConversionDate
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setMostRecentConversionDate($mostRecentConversionDate)
    {
      $this->mostRecentConversionDate = $mostRecentConversionDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastReceivedRequestTime()
    {
      return $this->lastReceivedRequestTime;
    }

    /**
     * @param string $lastReceivedRequestTime
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setLastReceivedRequestTime($lastReceivedRequestTime)
    {
      $this->lastReceivedRequestTime = $lastReceivedRequestTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionTrackerType()
    {
      return $this->ConversionTrackerType;
    }

    /**
     * @param string $ConversionTrackerType
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function setConversionTrackerType($ConversionTrackerType)
    {
      $this->ConversionTrackerType = $ConversionTrackerType;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
