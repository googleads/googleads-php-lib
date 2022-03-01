<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoSettings
{

    /**
     * @var string $codec
     */
    protected $codec = null;

    /**
     * @var int $bitrate
     */
    protected $bitrate = null;

    /**
     * @var float $framesPerSecond
     */
    protected $framesPerSecond = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\Size $resolution
     */
    protected $resolution = null;

    /**
     * @param string $codec
     * @param int $bitrate
     * @param float $framesPerSecond
     * @param \Google\AdsApi\AdManager\v202202\Size $resolution
     */
    public function __construct($codec = null, $bitrate = null, $framesPerSecond = null, $resolution = null)
    {
      $this->codec = $codec;
      $this->bitrate = $bitrate;
      $this->framesPerSecond = $framesPerSecond;
      $this->resolution = $resolution;
    }

    /**
     * @return string
     */
    public function getCodec()
    {
      return $this->codec;
    }

    /**
     * @param string $codec
     * @return \Google\AdsApi\AdManager\v202202\VideoSettings
     */
    public function setCodec($codec)
    {
      $this->codec = $codec;
      return $this;
    }

    /**
     * @return int
     */
    public function getBitrate()
    {
      return $this->bitrate;
    }

    /**
     * @param int $bitrate
     * @return \Google\AdsApi\AdManager\v202202\VideoSettings
     */
    public function setBitrate($bitrate)
    {
      $this->bitrate = (!is_null($bitrate) && PHP_INT_SIZE === 4)
          ? floatval($bitrate) : $bitrate;
      return $this;
    }

    /**
     * @return float
     */
    public function getFramesPerSecond()
    {
      return $this->framesPerSecond;
    }

    /**
     * @param float $framesPerSecond
     * @return \Google\AdsApi\AdManager\v202202\VideoSettings
     */
    public function setFramesPerSecond($framesPerSecond)
    {
      $this->framesPerSecond = $framesPerSecond;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\Size
     */
    public function getResolution()
    {
      return $this->resolution;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\Size $resolution
     * @return \Google\AdsApi\AdManager\v202202\VideoSettings
     */
    public function setResolution($resolution)
    {
      $this->resolution = $resolution;
      return $this;
    }

}
