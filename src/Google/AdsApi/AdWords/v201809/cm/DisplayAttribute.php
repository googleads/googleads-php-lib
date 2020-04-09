<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DisplayAttribute extends \Google\AdsApi\AdWords\v201809\cm\LabelAttribute
{

    /**
     * @var string $backgroundColor
     */
    protected $backgroundColor = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param string $LabelAttributeType
     * @param string $backgroundColor
     * @param string $description
     */
    public function __construct($LabelAttributeType = null, $backgroundColor = null, $description = null)
    {
      parent::__construct($LabelAttributeType);
      $this->backgroundColor = $backgroundColor;
      $this->description = $description;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\DisplayAttribute
     */
    public function setBackgroundColor($backgroundColor)
    {
      $this->backgroundColor = $backgroundColor;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\DisplayAttribute
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
