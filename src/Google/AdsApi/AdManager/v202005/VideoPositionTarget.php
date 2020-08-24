<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoPositionTarget
{

    /**
     * @var \Google\AdsApi\AdManager\v202005\VideoPosition $videoPosition
     */
    protected $videoPosition = null;

    /**
     * @var string $videoBumperType
     */
    protected $videoBumperType = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\VideoPositionWithinPod $videoPositionWithinPod
     */
    protected $videoPositionWithinPod = null;

    /**
     * @var int $adSpotId
     */
    protected $adSpotId = null;

    /**
     * @param \Google\AdsApi\AdManager\v202005\VideoPosition $videoPosition
     * @param string $videoBumperType
     * @param \Google\AdsApi\AdManager\v202005\VideoPositionWithinPod $videoPositionWithinPod
     * @param int $adSpotId
     */
    public function __construct($videoPosition = null, $videoBumperType = null, $videoPositionWithinPod = null, $adSpotId = null)
    {
      $this->videoPosition = $videoPosition;
      $this->videoBumperType = $videoBumperType;
      $this->videoPositionWithinPod = $videoPositionWithinPod;
      $this->adSpotId = $adSpotId;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\VideoPosition
     */
    public function getVideoPosition()
    {
      return $this->videoPosition;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\VideoPosition $videoPosition
     * @return \Google\AdsApi\AdManager\v202005\VideoPositionTarget
     */
    public function setVideoPosition($videoPosition)
    {
      $this->videoPosition = $videoPosition;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoBumperType()
    {
      return $this->videoBumperType;
    }

    /**
     * @param string $videoBumperType
     * @return \Google\AdsApi\AdManager\v202005\VideoPositionTarget
     */
    public function setVideoBumperType($videoBumperType)
    {
      $this->videoBumperType = $videoBumperType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\VideoPositionWithinPod
     */
    public function getVideoPositionWithinPod()
    {
      return $this->videoPositionWithinPod;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\VideoPositionWithinPod $videoPositionWithinPod
     * @return \Google\AdsApi\AdManager\v202005\VideoPositionTarget
     */
    public function setVideoPositionWithinPod($videoPositionWithinPod)
    {
      $this->videoPositionWithinPod = $videoPositionWithinPod;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdSpotId()
    {
      return $this->adSpotId;
    }

    /**
     * @param int $adSpotId
     * @return \Google\AdsApi\AdManager\v202005\VideoPositionTarget
     */
    public function setAdSpotId($adSpotId)
    {
      $this->adSpotId = (!is_null($adSpotId) && PHP_INT_SIZE === 4)
          ? floatval($adSpotId) : $adSpotId;
      return $this;
    }

}
