<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PrerollSettings
{

    /**
     * @var string $adTag
     */
    protected $adTag = null;

    /**
     * @var int $maxAdPodDurationSeconds
     */
    protected $maxAdPodDurationSeconds = null;

    /**
     * @param string $adTag
     * @param int $maxAdPodDurationSeconds
     */
    public function __construct($adTag = null, $maxAdPodDurationSeconds = null)
    {
      $this->adTag = $adTag;
      $this->maxAdPodDurationSeconds = $maxAdPodDurationSeconds;
    }

    /**
     * @return string
     */
    public function getAdTag()
    {
      return $this->adTag;
    }

    /**
     * @param string $adTag
     * @return \Google\AdsApi\AdManager\v202311\PrerollSettings
     */
    public function setAdTag($adTag)
    {
      $this->adTag = $adTag;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxAdPodDurationSeconds()
    {
      return $this->maxAdPodDurationSeconds;
    }

    /**
     * @param int $maxAdPodDurationSeconds
     * @return \Google\AdsApi\AdManager\v202311\PrerollSettings
     */
    public function setMaxAdPodDurationSeconds($maxAdPodDurationSeconds)
    {
      $this->maxAdPodDurationSeconds = (!is_null($maxAdPodDurationSeconds) && PHP_INT_SIZE === 4)
          ? floatval($maxAdPodDurationSeconds) : $maxAdPodDurationSeconds;
      return $this;
    }

}
