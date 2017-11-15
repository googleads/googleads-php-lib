<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoPositionTarget
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\VideoPosition $videoPosition
     */
    protected $videoPosition = null;

    /**
     * @var string $videoBumperType
     */
    protected $videoBumperType = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\VideoPositionWithinPod $videoPositionWithinPod
     */
    protected $videoPositionWithinPod = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\VideoPosition $videoPosition
     * @param string $videoBumperType
     * @param \Google\AdsApi\Dfp\v201711\VideoPositionWithinPod $videoPositionWithinPod
     */
    public function __construct($videoPosition = null, $videoBumperType = null, $videoPositionWithinPod = null)
    {
      $this->videoPosition = $videoPosition;
      $this->videoBumperType = $videoBumperType;
      $this->videoPositionWithinPod = $videoPositionWithinPod;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\VideoPosition
     */
    public function getVideoPosition()
    {
      return $this->videoPosition;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\VideoPosition $videoPosition
     * @return \Google\AdsApi\Dfp\v201711\VideoPositionTarget
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
     * @return \Google\AdsApi\Dfp\v201711\VideoPositionTarget
     */
    public function setVideoBumperType($videoBumperType)
    {
      $this->videoBumperType = $videoBumperType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\VideoPositionWithinPod
     */
    public function getVideoPositionWithinPod()
    {
      return $this->videoPositionWithinPod;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\VideoPositionWithinPod $videoPositionWithinPod
     * @return \Google\AdsApi\Dfp\v201711\VideoPositionTarget
     */
    public function setVideoPositionWithinPod($videoPositionWithinPod)
    {
      $this->videoPositionWithinPod = $videoPositionWithinPod;
      return $this;
    }

}
