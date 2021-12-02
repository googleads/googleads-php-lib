<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudioSettings
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
     * @var int $channels
     */
    protected $channels = null;

    /**
     * @var int $sampleRateHertz
     */
    protected $sampleRateHertz = null;

    /**
     * @param string $codec
     * @param int $bitrate
     * @param int $channels
     * @param int $sampleRateHertz
     */
    public function __construct($codec = null, $bitrate = null, $channels = null, $sampleRateHertz = null)
    {
      $this->codec = $codec;
      $this->bitrate = $bitrate;
      $this->channels = $channels;
      $this->sampleRateHertz = $sampleRateHertz;
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
     * @return \Google\AdsApi\AdManager\v202111\AudioSettings
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
     * @return \Google\AdsApi\AdManager\v202111\AudioSettings
     */
    public function setBitrate($bitrate)
    {
      $this->bitrate = (!is_null($bitrate) && PHP_INT_SIZE === 4)
          ? floatval($bitrate) : $bitrate;
      return $this;
    }

    /**
     * @return int
     */
    public function getChannels()
    {
      return $this->channels;
    }

    /**
     * @param int $channels
     * @return \Google\AdsApi\AdManager\v202111\AudioSettings
     */
    public function setChannels($channels)
    {
      $this->channels = (!is_null($channels) && PHP_INT_SIZE === 4)
          ? floatval($channels) : $channels;
      return $this;
    }

    /**
     * @return int
     */
    public function getSampleRateHertz()
    {
      return $this->sampleRateHertz;
    }

    /**
     * @param int $sampleRateHertz
     * @return \Google\AdsApi\AdManager\v202111\AudioSettings
     */
    public function setSampleRateHertz($sampleRateHertz)
    {
      $this->sampleRateHertz = (!is_null($sampleRateHertz) && PHP_INT_SIZE === 4)
          ? floatval($sampleRateHertz) : $sampleRateHertz;
      return $this;
    }

}
