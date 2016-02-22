<?php

namespace Google\AdsApi\Dfp\v201511;

class TargetingValue extends \Google\AdsApi\Dfp\v201511\ObjectValue
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\Targeting $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\Targeting $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Targeting
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Targeting $value
     * @return \Google\AdsApi\Dfp\v201511\TargetingValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
