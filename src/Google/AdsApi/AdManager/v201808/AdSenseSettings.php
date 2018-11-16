<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdSenseSettings
{

    /**
     * @var boolean $adSenseEnabled
     */
    protected $adSenseEnabled = null;

    /**
     * @var string $borderColor
     */
    protected $borderColor = null;

    /**
     * @var string $titleColor
     */
    protected $titleColor = null;

    /**
     * @var string $backgroundColor
     */
    protected $backgroundColor = null;

    /**
     * @var string $textColor
     */
    protected $textColor = null;

    /**
     * @var string $urlColor
     */
    protected $urlColor = null;

    /**
     * @var string $adType
     */
    protected $adType = null;

    /**
     * @var string $borderStyle
     */
    protected $borderStyle = null;

    /**
     * @var string $fontFamily
     */
    protected $fontFamily = null;

    /**
     * @var string $fontSize
     */
    protected $fontSize = null;

    /**
     * @param boolean $adSenseEnabled
     * @param string $borderColor
     * @param string $titleColor
     * @param string $backgroundColor
     * @param string $textColor
     * @param string $urlColor
     * @param string $adType
     * @param string $borderStyle
     * @param string $fontFamily
     * @param string $fontSize
     */
    public function __construct($adSenseEnabled = null, $borderColor = null, $titleColor = null, $backgroundColor = null, $textColor = null, $urlColor = null, $adType = null, $borderStyle = null, $fontFamily = null, $fontSize = null)
    {
      $this->adSenseEnabled = $adSenseEnabled;
      $this->borderColor = $borderColor;
      $this->titleColor = $titleColor;
      $this->backgroundColor = $backgroundColor;
      $this->textColor = $textColor;
      $this->urlColor = $urlColor;
      $this->adType = $adType;
      $this->borderStyle = $borderStyle;
      $this->fontFamily = $fontFamily;
      $this->fontSize = $fontSize;
    }

    /**
     * @return boolean
     */
    public function getAdSenseEnabled()
    {
      return $this->adSenseEnabled;
    }

    /**
     * @param boolean $adSenseEnabled
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setAdSenseEnabled($adSenseEnabled)
    {
      $this->adSenseEnabled = $adSenseEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getBorderColor()
    {
      return $this->borderColor;
    }

    /**
     * @param string $borderColor
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setBorderColor($borderColor)
    {
      $this->borderColor = $borderColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitleColor()
    {
      return $this->titleColor;
    }

    /**
     * @param string $titleColor
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setTitleColor($titleColor)
    {
      $this->titleColor = $titleColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
      return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setBackgroundColor($backgroundColor)
    {
      $this->backgroundColor = $backgroundColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextColor()
    {
      return $this->textColor;
    }

    /**
     * @param string $textColor
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setTextColor($textColor)
    {
      $this->textColor = $textColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlColor()
    {
      return $this->urlColor;
    }

    /**
     * @param string $urlColor
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setUrlColor($urlColor)
    {
      $this->urlColor = $urlColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdType()
    {
      return $this->adType;
    }

    /**
     * @param string $adType
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setAdType($adType)
    {
      $this->adType = $adType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBorderStyle()
    {
      return $this->borderStyle;
    }

    /**
     * @param string $borderStyle
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setBorderStyle($borderStyle)
    {
      $this->borderStyle = $borderStyle;
      return $this;
    }

    /**
     * @return string
     */
    public function getFontFamily()
    {
      return $this->fontFamily;
    }

    /**
     * @param string $fontFamily
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setFontFamily($fontFamily)
    {
      $this->fontFamily = $fontFamily;
      return $this;
    }

    /**
     * @return string
     */
    public function getFontSize()
    {
      return $this->fontSize;
    }

    /**
     * @param string $fontSize
     * @return \Google\AdsApi\AdManager\v201808\AdSenseSettings
     */
    public function setFontSize($fontSize)
    {
      $this->fontSize = $fontSize;
      return $this;
    }

}
