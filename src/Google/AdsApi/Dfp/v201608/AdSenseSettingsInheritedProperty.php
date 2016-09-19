<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdSenseSettingsInheritedProperty
{

    /**
     * @var \Google\AdsApi\Dfp\v201608\AdSenseSettings $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201608\AdSenseSettings $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\AdSenseSettings
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\AdSenseSettings $value
     * @return \Google\AdsApi\Dfp\v201608\AdSenseSettingsInheritedProperty
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
