<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RichMediaStudioChildAssetProperty
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $totalFileSize
     */
    protected $totalFileSize = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @param string $name
     * @param string $type
     * @param int $totalFileSize
     * @param int $width
     * @param int $height
     * @param string $url
     */
    public function __construct($name = null, $type = null, $totalFileSize = null, $width = null, $height = null, $url = null)
    {
      $this->name = $name;
      $this->type = $type;
      $this->totalFileSize = $totalFileSize;
      $this->width = $width;
      $this->height = $height;
      $this->url = $url;
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
     * @return \Google\AdsApi\Dfp\v201708\RichMediaStudioChildAssetProperty
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\Dfp\v201708\RichMediaStudioChildAssetProperty
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalFileSize()
    {
      return $this->totalFileSize;
    }

    /**
     * @param int $totalFileSize
     * @return \Google\AdsApi\Dfp\v201708\RichMediaStudioChildAssetProperty
     */
    public function setTotalFileSize($totalFileSize)
    {
      $this->totalFileSize = (!is_null($totalFileSize) && PHP_INT_SIZE === 4)
          ? floatval($totalFileSize) : $totalFileSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \Google\AdsApi\Dfp\v201708\RichMediaStudioChildAssetProperty
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \Google\AdsApi\Dfp\v201708\RichMediaStudioChildAssetProperty
     */
    public function setHeight($height)
    {
      $this->height = $height;
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
     * @return \Google\AdsApi\Dfp\v201708\RichMediaStudioChildAssetProperty
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
