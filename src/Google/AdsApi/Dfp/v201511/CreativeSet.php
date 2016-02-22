<?php

namespace Google\AdsApi\Dfp\v201511;

class CreativeSet
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
     * @var int $masterCreativeId
     */
    protected $masterCreativeId = null;

    /**
     * @var long[] $companionCreativeIds
     */
    protected $companionCreativeIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $masterCreativeId
     * @param long[] $companionCreativeIds
     * @param \Google\AdsApi\Dfp\v201511\DateTime $lastModifiedDateTime
     */
    public function __construct($id = null, $name = null, $masterCreativeId = null, array $companionCreativeIds = null, $lastModifiedDateTime = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->masterCreativeId = $masterCreativeId;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
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
     * @return \Google\AdsApi\Dfp\v201511\CreativeSet
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
     * @return \Google\AdsApi\Dfp\v201511\CreativeSet
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getMasterCreativeId()
    {
      return $this->masterCreativeId;
    }

    /**
     * @param int $masterCreativeId
     * @return \Google\AdsApi\Dfp\v201511\CreativeSet
     */
    public function setMasterCreativeId($masterCreativeId)
    {
      $this->masterCreativeId = $masterCreativeId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCompanionCreativeIds()
    {
      return $this->companionCreativeIds;
    }

    /**
     * @param long[] $companionCreativeIds
     * @return \Google\AdsApi\Dfp\v201511\CreativeSet
     */
    public function setCompanionCreativeIds(array $companionCreativeIds)
    {
      $this->companionCreativeIds = $companionCreativeIds;
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
     * @return \Google\AdsApi\Dfp\v201511\CreativeSet
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

}
