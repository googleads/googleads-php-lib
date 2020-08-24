<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LinearStreamCreateRequest extends \Google\AdsApi\AdManager\v202002\StreamCreateRequest
{

    /**
     * @var string $liveStreamEventAssetKey
     */
    protected $liveStreamEventAssetKey = null;

    /**
     * @var string $eventName
     */
    protected $eventName = null;

    /**
     * @var int $liveStreamEventId
     */
    protected $liveStreamEventId = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $eventStartDateTime
     */
    protected $eventStartDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $eventEndDateTime
     */
    protected $eventEndDateTime = null;

    /**
     * @param string $url
     * @param string $userAgent
     * @param string $liveStreamEventAssetKey
     * @param string $eventName
     * @param int $liveStreamEventId
     * @param \Google\AdsApi\AdManager\v202002\DateTime $eventStartDateTime
     * @param \Google\AdsApi\AdManager\v202002\DateTime $eventEndDateTime
     */
    public function __construct($url = null, $userAgent = null, $liveStreamEventAssetKey = null, $eventName = null, $liveStreamEventId = null, $eventStartDateTime = null, $eventEndDateTime = null)
    {
      parent::__construct($url, $userAgent);
      $this->liveStreamEventAssetKey = $liveStreamEventAssetKey;
      $this->eventName = $eventName;
      $this->liveStreamEventId = $liveStreamEventId;
      $this->eventStartDateTime = $eventStartDateTime;
      $this->eventEndDateTime = $eventEndDateTime;
    }

    /**
     * @return string
     */
    public function getLiveStreamEventAssetKey()
    {
      return $this->liveStreamEventAssetKey;
    }

    /**
     * @param string $liveStreamEventAssetKey
     * @return \Google\AdsApi\AdManager\v202002\LinearStreamCreateRequest
     */
    public function setLiveStreamEventAssetKey($liveStreamEventAssetKey)
    {
      $this->liveStreamEventAssetKey = $liveStreamEventAssetKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
      return $this->eventName;
    }

    /**
     * @param string $eventName
     * @return \Google\AdsApi\AdManager\v202002\LinearStreamCreateRequest
     */
    public function setEventName($eventName)
    {
      $this->eventName = $eventName;
      return $this;
    }

    /**
     * @return int
     */
    public function getLiveStreamEventId()
    {
      return $this->liveStreamEventId;
    }

    /**
     * @param int $liveStreamEventId
     * @return \Google\AdsApi\AdManager\v202002\LinearStreamCreateRequest
     */
    public function setLiveStreamEventId($liveStreamEventId)
    {
      $this->liveStreamEventId = (!is_null($liveStreamEventId) && PHP_INT_SIZE === 4)
          ? floatval($liveStreamEventId) : $liveStreamEventId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getEventStartDateTime()
    {
      return $this->eventStartDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $eventStartDateTime
     * @return \Google\AdsApi\AdManager\v202002\LinearStreamCreateRequest
     */
    public function setEventStartDateTime($eventStartDateTime)
    {
      $this->eventStartDateTime = $eventStartDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getEventEndDateTime()
    {
      return $this->eventEndDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $eventEndDateTime
     * @return \Google\AdsApi\AdManager\v202002\LinearStreamCreateRequest
     */
    public function setEventEndDateTime($eventEndDateTime)
    {
      $this->eventEndDateTime = $eventEndDateTime;
      return $this;
    }

}
