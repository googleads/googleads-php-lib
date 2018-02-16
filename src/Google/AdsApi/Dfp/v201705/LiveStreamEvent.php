<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamEvent
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var int $totalEstimatedConcurrentUsers
     */
    protected $totalEstimatedConcurrentUsers = null;

    /**
     * @var string[] $contentUrls
     */
    protected $contentUrls = null;

    /**
     * @var string[] $adTags
     */
    protected $adTags = null;

    /**
     * @var string $liveStreamEventCode
     */
    protected $liveStreamEventCode = null;

    /**
     * @var string $authenticationService
     */
    protected $authenticationService = null;

    /**
     * @var string $authenticationKey
     */
    protected $authenticationKey = null;

    /**
     * @var boolean $tokenAuthenticationUnsigned
     */
    protected $tokenAuthenticationUnsigned = null;

    /**
     * @var string $originForwardingType
     */
    protected $originForwardingType = null;

    /**
     * @var string $originPathPrefix
     */
    protected $originPathPrefix = null;

    /**
     * @var int $dvrWindowSeconds
     */
    protected $dvrWindowSeconds = null;

    /**
     * @var string $adBreakFillType
     */
    protected $adBreakFillType = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $status
     * @param \Google\AdsApi\Dfp\v201705\DateTime $creationDateTime
     * @param \Google\AdsApi\Dfp\v201705\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201705\DateTime $startDateTime
     * @param \Google\AdsApi\Dfp\v201705\DateTime $endDateTime
     * @param int $totalEstimatedConcurrentUsers
     * @param string[] $contentUrls
     * @param string[] $adTags
     * @param string $liveStreamEventCode
     * @param string $authenticationService
     * @param string $authenticationKey
     * @param boolean $tokenAuthenticationUnsigned
     * @param string $originForwardingType
     * @param string $originPathPrefix
     * @param int $dvrWindowSeconds
     * @param string $adBreakFillType
     */
    public function __construct($id = null, $name = null, $description = null, $status = null, $creationDateTime = null, $lastModifiedDateTime = null, $startDateTime = null, $endDateTime = null, $totalEstimatedConcurrentUsers = null, array $contentUrls = null, array $adTags = null, $liveStreamEventCode = null, $authenticationService = null, $authenticationKey = null, $tokenAuthenticationUnsigned = null, $originForwardingType = null, $originPathPrefix = null, $dvrWindowSeconds = null, $adBreakFillType = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->creationDateTime = $creationDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->totalEstimatedConcurrentUsers = $totalEstimatedConcurrentUsers;
      $this->contentUrls = $contentUrls;
      $this->adTags = $adTags;
      $this->liveStreamEventCode = $liveStreamEventCode;
      $this->authenticationService = $authenticationService;
      $this->authenticationKey = $authenticationKey;
      $this->tokenAuthenticationUnsigned = $tokenAuthenticationUnsigned;
      $this->originForwardingType = $originForwardingType;
      $this->originPathPrefix = $originPathPrefix;
      $this->dvrWindowSeconds = $dvrWindowSeconds;
      $this->adBreakFillType = $adBreakFillType;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\DateTime $creationDateTime
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\DateTime $startDateTime
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\DateTime $endDateTime
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalEstimatedConcurrentUsers()
    {
      return $this->totalEstimatedConcurrentUsers;
    }

    /**
     * @param int $totalEstimatedConcurrentUsers
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setTotalEstimatedConcurrentUsers($totalEstimatedConcurrentUsers)
    {
      $this->totalEstimatedConcurrentUsers = (!is_null($totalEstimatedConcurrentUsers) && PHP_INT_SIZE === 4)
          ? floatval($totalEstimatedConcurrentUsers) : $totalEstimatedConcurrentUsers;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getContentUrls()
    {
      return $this->contentUrls;
    }

    /**
     * @param string[] $contentUrls
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setContentUrls(array $contentUrls)
    {
      $this->contentUrls = $contentUrls;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAdTags()
    {
      return $this->adTags;
    }

    /**
     * @param string[] $adTags
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setAdTags(array $adTags)
    {
      $this->adTags = $adTags;
      return $this;
    }

    /**
     * @return string
     */
    public function getLiveStreamEventCode()
    {
      return $this->liveStreamEventCode;
    }

    /**
     * @param string $liveStreamEventCode
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setLiveStreamEventCode($liveStreamEventCode)
    {
      $this->liveStreamEventCode = $liveStreamEventCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationService()
    {
      return $this->authenticationService;
    }

    /**
     * @param string $authenticationService
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setAuthenticationService($authenticationService)
    {
      $this->authenticationService = $authenticationService;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationKey()
    {
      return $this->authenticationKey;
    }

    /**
     * @param string $authenticationKey
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setAuthenticationKey($authenticationKey)
    {
      $this->authenticationKey = $authenticationKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTokenAuthenticationUnsigned()
    {
      return $this->tokenAuthenticationUnsigned;
    }

    /**
     * @param boolean $tokenAuthenticationUnsigned
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setTokenAuthenticationUnsigned($tokenAuthenticationUnsigned)
    {
      $this->tokenAuthenticationUnsigned = $tokenAuthenticationUnsigned;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginForwardingType()
    {
      return $this->originForwardingType;
    }

    /**
     * @param string $originForwardingType
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setOriginForwardingType($originForwardingType)
    {
      $this->originForwardingType = $originForwardingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginPathPrefix()
    {
      return $this->originPathPrefix;
    }

    /**
     * @param string $originPathPrefix
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setOriginPathPrefix($originPathPrefix)
    {
      $this->originPathPrefix = $originPathPrefix;
      return $this;
    }

    /**
     * @return int
     */
    public function getDvrWindowSeconds()
    {
      return $this->dvrWindowSeconds;
    }

    /**
     * @param int $dvrWindowSeconds
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setDvrWindowSeconds($dvrWindowSeconds)
    {
      $this->dvrWindowSeconds = $dvrWindowSeconds;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdBreakFillType()
    {
      return $this->adBreakFillType;
    }

    /**
     * @param string $adBreakFillType
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent
     */
    public function setAdBreakFillType($adBreakFillType)
    {
      $this->adBreakFillType = $adBreakFillType;
      return $this;
    }

}
