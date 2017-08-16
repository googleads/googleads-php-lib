<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoMetadata
{

    /**
     * @var string $scalableType
     */
    protected $scalableType = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @var int $bitRate
     */
    protected $bitRate = null;

    /**
     * @var int $minimumBitRate
     */
    protected $minimumBitRate = null;

    /**
     * @var int $maximumBitRate
     */
    protected $maximumBitRate = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\Size $size
     */
    protected $size = null;

    /**
     * @var string $mimeType
     */
    protected $mimeType = null;

    /**
     * @var string $deliveryType
     */
    protected $deliveryType = null;

    /**
     * @var string[] $codecs
     */
    protected $codecs = null;

    /**
     * @param string $scalableType
     * @param int $duration
     * @param int $bitRate
     * @param int $minimumBitRate
     * @param int $maximumBitRate
     * @param \Google\AdsApi\Dfp\v201708\Size $size
     * @param string $mimeType
     * @param string $deliveryType
     * @param string[] $codecs
     */
    public function __construct($scalableType = null, $duration = null, $bitRate = null, $minimumBitRate = null, $maximumBitRate = null, $size = null, $mimeType = null, $deliveryType = null, array $codecs = null)
    {
      $this->scalableType = $scalableType;
      $this->duration = $duration;
      $this->bitRate = $bitRate;
      $this->minimumBitRate = $minimumBitRate;
      $this->maximumBitRate = $maximumBitRate;
      $this->size = $size;
      $this->mimeType = $mimeType;
      $this->deliveryType = $deliveryType;
      $this->codecs = $codecs;
    }

    /**
     * @return string
     */
    public function getScalableType()
    {
      return $this->scalableType;
    }

    /**
     * @param string $scalableType
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function setScalableType($scalableType)
    {
      $this->scalableType = $scalableType;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param int $duration
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

    /**
     * @return int
     */
    public function getBitRate()
    {
      return $this->bitRate;
    }

    /**
     * @param int $bitRate
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function setBitRate($bitRate)
    {
      $this->bitRate = $bitRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumBitRate()
    {
      return $this->minimumBitRate;
    }

    /**
     * @param int $minimumBitRate
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function setMinimumBitRate($minimumBitRate)
    {
      $this->minimumBitRate = $minimumBitRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumBitRate()
    {
      return $this->maximumBitRate;
    }

    /**
     * @param int $maximumBitRate
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function setMaximumBitRate($maximumBitRate)
    {
      $this->maximumBitRate = $maximumBitRate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Size
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Size $size
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
      return $this->mimeType;
    }

    /**
     * @param string $mimeType
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function setMimeType($mimeType)
    {
      $this->mimeType = $mimeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryType()
    {
      return $this->deliveryType;
    }

    /**
     * @param string $deliveryType
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function setDeliveryType($deliveryType)
    {
      $this->deliveryType = $deliveryType;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCodecs()
    {
      return $this->codecs;
    }

    /**
     * @param string[] $codecs
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function setCodecs(array $codecs)
    {
      $this->codecs = $codecs;
      return $this;
    }

}
