<?php

namespace Google\AdsApi\Dfp\v201511;

class DateTimeValue extends \Google\AdsApi\Dfp\v201511\Value
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\DateTime $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\DateTime $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\DateTime
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\DateTime $value
     * @return \Google\AdsApi\Dfp\v201511\DateTimeValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
