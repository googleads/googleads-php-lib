<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PrefetchSettings
{

    /**
     * @var int $initialAdRequestDurationSeconds
     */
    protected $initialAdRequestDurationSeconds = null;

    /**
     * @param int $initialAdRequestDurationSeconds
     */
    public function __construct($initialAdRequestDurationSeconds = null)
    {
      $this->initialAdRequestDurationSeconds = $initialAdRequestDurationSeconds;
    }

    /**
     * @return int
     */
    public function getInitialAdRequestDurationSeconds()
    {
      return $this->initialAdRequestDurationSeconds;
    }

    /**
     * @param int $initialAdRequestDurationSeconds
     * @return \Google\AdsApi\AdManager\v202005\PrefetchSettings
     */
    public function setInitialAdRequestDurationSeconds($initialAdRequestDurationSeconds)
    {
      $this->initialAdRequestDurationSeconds = $initialAdRequestDurationSeconds;
      return $this;
    }

}
