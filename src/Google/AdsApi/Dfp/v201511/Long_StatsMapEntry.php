<?php

namespace Google\AdsApi\Dfp\v201511;

class Long_StatsMapEntry
{

    /**
     * @var int $key
     */
    protected $key = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\Stats $value
     */
    protected $value = null;

    /**
     * @param int $key
     * @param \Google\AdsApi\Dfp\v201511\Stats $value
     */
    public function __construct($key = null, $value = null)
    {
      $this->key = $key;
      $this->value = $value;
    }

    /**
     * @return int
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param int $key
     * @return \Google\AdsApi\Dfp\v201511\Long_StatsMapEntry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Stats
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Stats $value
     * @return \Google\AdsApi\Dfp\v201511\Long_StatsMapEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
