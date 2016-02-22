<?php

namespace Google\AdsApi\Dfp\v201511;

class UpdateResult
{

    /**
     * @var int $numChanges
     */
    protected $numChanges = null;

    /**
     * @param int $numChanges
     */
    public function __construct($numChanges = null)
    {
      $this->numChanges = $numChanges;
    }

    /**
     * @return int
     */
    public function getNumChanges()
    {
      return $this->numChanges;
    }

    /**
     * @param int $numChanges
     * @return \Google\AdsApi\Dfp\v201511\UpdateResult
     */
    public function setNumChanges($numChanges)
    {
      $this->numChanges = $numChanges;
      return $this;
    }

}
