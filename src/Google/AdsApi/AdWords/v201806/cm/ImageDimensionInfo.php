<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ImageDimensionInfo
{

    /**
     * @var int $imageHeight
     */
    protected $imageHeight = null;

    /**
     * @var int $imageWidth
     */
    protected $imageWidth = null;

    /**
     * @var string $imageUrl
     */
    protected $imageUrl = null;

    /**
     * @param int $imageHeight
     * @param int $imageWidth
     * @param string $imageUrl
     */
    public function __construct($imageHeight = null, $imageWidth = null, $imageUrl = null)
    {
      $this->imageHeight = $imageHeight;
      $this->imageWidth = $imageWidth;
      $this->imageUrl = $imageUrl;
    }

    /**
     * @return int
     */
    public function getImageHeight()
    {
      return $this->imageHeight;
    }

    /**
     * @param int $imageHeight
     * @return \Google\AdsApi\AdWords\v201806\cm\ImageDimensionInfo
     */
    public function setImageHeight($imageHeight)
    {
      $this->imageHeight = $imageHeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getImageWidth()
    {
      return $this->imageWidth;
    }

    /**
     * @param int $imageWidth
     * @return \Google\AdsApi\AdWords\v201806\cm\ImageDimensionInfo
     */
    public function setImageWidth($imageWidth)
    {
      $this->imageWidth = $imageWidth;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
      return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return \Google\AdsApi\AdWords\v201806\cm\ImageDimensionInfo
     */
    public function setImageUrl($imageUrl)
    {
      $this->imageUrl = $imageUrl;
      return $this;
    }

}
