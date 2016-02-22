<?php

namespace Google\AdsApi\Dfp\v201511;

class AdSenseSettingsInheritedProperty
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\AdSenseSettings $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\AdSenseSettings $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\AdSenseSettings
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\AdSenseSettings $value
     * @return \Google\AdsApi\Dfp\v201511\AdSenseSettingsInheritedProperty
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
