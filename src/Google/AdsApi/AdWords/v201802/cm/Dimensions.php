<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Dimensions
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
     * @param int $width
     * @param int $height
     */
    public function __construct($width = null, $height = null)
    {
      $this->width = $width;
      $this->height = $height;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\Dimensions
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
     * @return \Google\AdsApi\AdWords\v201802\cm\Dimensions
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

}
