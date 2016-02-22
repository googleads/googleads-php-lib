<?php

namespace Google\AdsApi\Dfp\v201511;

class Row
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\Value[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\Value[] $values
     */
    public function __construct(array $values = null)
    {
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Value[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Value[] $values
     * @return \Google\AdsApi\Dfp\v201511\Row
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
