<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Size
{

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var boolean $isAspectRatio
     */
    protected $isAspectRatio = null;

    /**
     * @param int $width
     * @param int $height
     * @param boolean $isAspectRatio
     */
    public function __construct($width = null, $height = null, $isAspectRatio = null)
    {
      $this->width = $width;
      $this->height = $height;
      $this->isAspectRatio = $isAspectRatio;
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
     * @return \Google\AdsApi\AdManager\v201805\Size
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
     * @return \Google\AdsApi\AdManager\v201805\Size
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAspectRatio()
    {
      return $this->isAspectRatio;
    }

    /**
     * @param boolean $isAspectRatio
     * @return \Google\AdsApi\AdManager\v201805\Size
     */
    public function setIsAspectRatio($isAspectRatio)
    {
      $this->isAspectRatio = $isAspectRatio;
      return $this;
    }

}
