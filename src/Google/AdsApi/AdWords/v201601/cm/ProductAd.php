<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ProductAd extends \Google\AdsApi\AdWords\v201601\cm\Ad
{

    /**
     * @var string $promotionLine
     */
    protected $promotionLine = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201601\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201601\cm\CustomParameters $urlCustomParameters
     * @param string $type
     * @param int $devicePreference
     * @param string $AdType
     * @param string $promotionLine
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $type = null, $devicePreference = null, $AdType = null, $promotionLine = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $type, $devicePreference, $AdType);
      $this->promotionLine = $promotionLine;
    }

    /**
     * @return string
     */
    public function getPromotionLine()
    {
      return $this->promotionLine;
    }

    /**
     * @param string $promotionLine
     * @return \Google\AdsApi\AdWords\v201601\cm\ProductAd
     */
    public function setPromotionLine($promotionLine)
    {
      $this->promotionLine = $promotionLine;
      return $this;
    }

}
