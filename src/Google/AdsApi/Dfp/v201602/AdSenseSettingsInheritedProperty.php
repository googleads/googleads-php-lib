<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdSenseSettingsInheritedProperty
{

    /**
     * @var \Google\AdsApi\Dfp\v201602\AdSenseSettings $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201602\AdSenseSettings $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201602\AdSenseSettings
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201602\AdSenseSettings $value
     * @return \Google\AdsApi\Dfp\v201602\AdSenseSettingsInheritedProperty
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
