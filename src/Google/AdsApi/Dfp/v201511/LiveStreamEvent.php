<?php

namespace Google\AdsApi\Dfp\v201511;

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
     * @var \Google\AdsApi\Dfp\v201511\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\DateTime $endDateTime
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
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $status
     * @param \Google\AdsApi\Dfp\v201511\DateTime $creationDateTime
     * @param \Google\AdsApi\Dfp\v201511\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201511\DateTime $startDateTime
     * @param \Google\AdsApi\Dfp\v201511\DateTime $endDateTime
     * @param int $totalEstimatedConcurrentUsers
     * @param string[] $contentUrls
     * @param string[] $adTags
     * @param string $liveStreamEventCode
     */
    public function __construct($id = null, $name = null, $description = null, $status = null, $creationDateTime = null, $lastModifiedDateTime = null, $startDateTime = null, $endDateTime = null, $totalEstimatedConcurrentUsers = null, array $contentUrls = null, array $adTags = null, $liveStreamEventCode = null)
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
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
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
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
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
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\DateTime $creationDateTime
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\DateTime $startDateTime
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\DateTime $endDateTime
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
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
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
     */
    public function setTotalEstimatedConcurrentUsers($totalEstimatedConcurrentUsers)
    {
      $this->totalEstimatedConcurrentUsers = $totalEstimatedConcurrentUsers;
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
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
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
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
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
     * @return \Google\AdsApi\Dfp\v201511\LiveStreamEvent
     */
    public function setLiveStreamEventCode($liveStreamEventCode)
    {
      $this->liveStreamEventCode = $liveStreamEventCode;
      return $this;
    }

}
