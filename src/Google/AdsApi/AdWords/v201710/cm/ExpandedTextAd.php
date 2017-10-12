<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExpandedTextAd extends \Google\AdsApi\AdWords\v201710\cm\Ad
{

    /**
     * @var string $headlinePart1
     */
    protected $headlinePart1 = null;

    /**
     * @var string $headlinePart2
     */
    protected $headlinePart2 = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $path1
     */
    protected $path1 = null;

    /**
     * @var string $path2
     */
    protected $path2 = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201710\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201710\cm\UrlData[] $urlData
     * @param boolean $automated
     * @param string $type
     * @param int $devicePreference
     * @param string $AdType
     * @param string $headlinePart1
     * @param string $headlinePart2
     * @param string $description
     * @param string $path1
     * @param string $path2
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $AdType = null, $headlinePart1 = null, $headlinePart2 = null, $description = null, $path1 = null, $path2 = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $AdType);
      $this->headlinePart1 = $headlinePart1;
      $this->headlinePart2 = $headlinePart2;
      $this->description = $description;
      $this->path1 = $path1;
      $this->path2 = $path2;
    }

    /**
     * @return string
     */
    public function getHeadlinePart1()
    {
      return $this->headlinePart1;
    }

    /**
     * @param string $headlinePart1
     * @return \Google\AdsApi\AdWords\v201710\cm\ExpandedTextAd
     */
    public function setHeadlinePart1($headlinePart1)
    {
      $this->headlinePart1 = $headlinePart1;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeadlinePart2()
    {
      return $this->headlinePart2;
    }

    /**
     * @param string $headlinePart2
     * @return \Google\AdsApi\AdWords\v201710\cm\ExpandedTextAd
     */
    public function setHeadlinePart2($headlinePart2)
    {
      $this->headlinePart2 = $headlinePart2;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdWords\v201710\cm\ExpandedTextAd
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath1()
    {
      return $this->path1;
    }

    /**
     * @param string $path1
     * @return \Google\AdsApi\AdWords\v201710\cm\ExpandedTextAd
     */
    public function setPath1($path1)
    {
      $this->path1 = $path1;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath2()
    {
      return $this->path2;
    }

    /**
     * @param string $path2
     * @return \Google\AdsApi\AdWords\v201710\cm\ExpandedTextAd
     */
    public function setPath2($path2)
    {
      $this->path2 = $path2;
      return $this;
    }

}
