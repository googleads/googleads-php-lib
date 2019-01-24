<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DisplayCallToAction
{

    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var string $textColor
     */
    protected $textColor = null;

    /**
     * @var string $urlId
     */
    protected $urlId = null;

    /**
     * @param string $text
     * @param string $textColor
     * @param string $urlId
     */
    public function __construct($text = null, $textColor = null, $urlId = null)
    {
      $this->text = $text;
      $this->textColor = $textColor;
      $this->urlId = $urlId;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return \Google\AdsApi\AdWords\v201806\cm\DisplayCallToAction
     */
    public function setText($text)
    {
      $this->text = $text;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\DisplayCallToAction
     */
    public function setTextColor($textColor)
    {
      $this->textColor = $textColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlId()
    {
      return $this->urlId;
    }

    /**
     * @param string $urlId
     * @return \Google\AdsApi\AdWords\v201806\cm\DisplayCallToAction
     */
    public function setUrlId($urlId)
    {
      $this->urlId = $urlId;
      return $this;
    }

}
