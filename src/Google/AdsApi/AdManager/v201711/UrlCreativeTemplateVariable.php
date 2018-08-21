<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UrlCreativeTemplateVariable extends \Google\AdsApi\AdManager\v201711\CreativeTemplateVariable
{

    /**
     * @var string $defaultValue
     */
    protected $defaultValue = null;

    /**
     * @var boolean $isTrackingUrl
     */
    protected $isTrackingUrl = null;

    /**
     * @param string $label
     * @param string $uniqueName
     * @param string $description
     * @param boolean $isRequired
     * @param string $defaultValue
     * @param boolean $isTrackingUrl
     */
    public function __construct($label = null, $uniqueName = null, $description = null, $isRequired = null, $defaultValue = null, $isTrackingUrl = null)
    {
      parent::__construct($label, $uniqueName, $description, $isRequired);
      $this->defaultValue = $defaultValue;
      $this->isTrackingUrl = $isTrackingUrl;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
      return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     * @return \Google\AdsApi\AdManager\v201711\UrlCreativeTemplateVariable
     */
    public function setDefaultValue($defaultValue)
    {
      $this->defaultValue = $defaultValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackingUrl()
    {
      return $this->isTrackingUrl;
    }

    /**
     * @param boolean $isTrackingUrl
     * @return \Google\AdsApi\AdManager\v201711\UrlCreativeTemplateVariable
     */
    public function setIsTrackingUrl($isTrackingUrl)
    {
      $this->isTrackingUrl = $isTrackingUrl;
      return $this;
    }

}
