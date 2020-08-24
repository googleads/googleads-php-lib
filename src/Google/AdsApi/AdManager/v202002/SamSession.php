<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SamSession
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var boolean $isVodSession
     */
    protected $isVodSession = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\StreamCreateRequest $streamCreateRequest
     */
    protected $streamCreateRequest = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\AdBreak[] $adBreaks
     */
    protected $adBreaks = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var int $sessionDurationMillis
     */
    protected $sessionDurationMillis = null;

    /**
     * @var int $contentDurationMillis
     */
    protected $contentDurationMillis = null;

    /**
     * @param string $sessionId
     * @param boolean $isVodSession
     * @param \Google\AdsApi\AdManager\v202002\StreamCreateRequest $streamCreateRequest
     * @param \Google\AdsApi\AdManager\v202002\AdBreak[] $adBreaks
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @param int $sessionDurationMillis
     * @param int $contentDurationMillis
     */
    public function __construct($sessionId = null, $isVodSession = null, $streamCreateRequest = null, array $adBreaks = null, $startDateTime = null, $sessionDurationMillis = null, $contentDurationMillis = null)
    {
      $this->sessionId = $sessionId;
      $this->isVodSession = $isVodSession;
      $this->streamCreateRequest = $streamCreateRequest;
      $this->adBreaks = $adBreaks;
      $this->startDateTime = $startDateTime;
      $this->sessionDurationMillis = $sessionDurationMillis;
      $this->contentDurationMillis = $contentDurationMillis;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Google\AdsApi\AdManager\v202002\SamSession
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVodSession()
    {
      return $this->isVodSession;
    }

    /**
     * @param boolean $isVodSession
     * @return \Google\AdsApi\AdManager\v202002\SamSession
     */
    public function setIsVodSession($isVodSession)
    {
      $this->isVodSession = $isVodSession;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\StreamCreateRequest
     */
    public function getStreamCreateRequest()
    {
      return $this->streamCreateRequest;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\StreamCreateRequest $streamCreateRequest
     * @return \Google\AdsApi\AdManager\v202002\SamSession
     */
    public function setStreamCreateRequest($streamCreateRequest)
    {
      $this->streamCreateRequest = $streamCreateRequest;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\AdBreak[]
     */
    public function getAdBreaks()
    {
      return $this->adBreaks;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\AdBreak[]|null $adBreaks
     * @return \Google\AdsApi\AdManager\v202002\SamSession
     */
    public function setAdBreaks(array $adBreaks = null)
    {
      $this->adBreaks = $adBreaks;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v202002\SamSession
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getSessionDurationMillis()
    {
      return $this->sessionDurationMillis;
    }

    /**
     * @param int $sessionDurationMillis
     * @return \Google\AdsApi\AdManager\v202002\SamSession
     */
    public function setSessionDurationMillis($sessionDurationMillis)
    {
      $this->sessionDurationMillis = (!is_null($sessionDurationMillis) && PHP_INT_SIZE === 4)
          ? floatval($sessionDurationMillis) : $sessionDurationMillis;
      return $this;
    }

    /**
     * @return int
     */
    public function getContentDurationMillis()
    {
      return $this->contentDurationMillis;
    }

    /**
     * @param int $contentDurationMillis
     * @return \Google\AdsApi\AdManager\v202002\SamSession
     */
    public function setContentDurationMillis($contentDurationMillis)
    {
      $this->contentDurationMillis = (!is_null($contentDurationMillis) && PHP_INT_SIZE === 4)
          ? floatval($contentDurationMillis) : $contentDurationMillis;
      return $this;
    }

}
