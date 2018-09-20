<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GmailTeaser
{

    /**
     * @var string $headline
     */
    protected $headline = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $businessName
     */
    protected $businessName = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Image $logoImage
     */
    protected $logoImage = null;

    /**
     * @param string $headline
     * @param string $description
     * @param string $businessName
     * @param \Google\AdsApi\AdWords\v201809\cm\Image $logoImage
     */
    public function __construct($headline = null, $description = null, $businessName = null, $logoImage = null)
    {
      $this->headline = $headline;
      $this->description = $description;
      $this->businessName = $businessName;
      $this->logoImage = $logoImage;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
      return $this->headline;
    }

    /**
     * @param string $headline
     * @return \Google\AdsApi\AdWords\v201809\cm\GmailTeaser
     */
    public function setHeadline($headline)
    {
      $this->headline = $headline;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\GmailTeaser
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
      return $this->businessName;
    }

    /**
     * @param string $businessName
     * @return \Google\AdsApi\AdWords\v201809\cm\GmailTeaser
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Image
     */
    public function getLogoImage()
    {
      return $this->logoImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Image $logoImage
     * @return \Google\AdsApi\AdWords\v201809\cm\GmailTeaser
     */
    public function setLogoImage($logoImage)
    {
      $this->logoImage = $logoImage;
      return $this;
    }

}
