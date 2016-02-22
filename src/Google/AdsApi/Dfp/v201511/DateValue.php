<?php

namespace Google\AdsApi\Dfp\v201511;

class DateValue extends \Google\AdsApi\Dfp\v201511\Value
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\Date $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\Date $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Date
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Date $value
     * @return \Google\AdsApi\Dfp\v201511\DateValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
