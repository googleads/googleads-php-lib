<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Slate
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
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $transcodeStatus
     */
    protected $transcodeStatus = null;

    /**
     * @var string $videoSourceUrl
     */
    protected $videoSourceUrl = null;

    /**
     * @var \Google\AdsApi\AdManager\v202108\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param string $transcodeStatus
     * @param string $videoSourceUrl
     * @param \Google\AdsApi\AdManager\v202108\DateTime $lastModifiedDateTime
     */
    public function __construct($id = null, $name = null, $status = null, $transcodeStatus = null, $videoSourceUrl = null, $lastModifiedDateTime = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->transcodeStatus = $transcodeStatus;
      $this->videoSourceUrl = $videoSourceUrl;
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
     * @return \Google\AdsApi\AdManager\v202108\Slate
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
     * @return \Google\AdsApi\AdManager\v202108\Slate
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\AdManager\v202108\Slate
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getTranscodeStatus()
    {
      return $this->transcodeStatus;
    }

    /**
     * @param string $transcodeStatus
     * @return \Google\AdsApi\AdManager\v202108\Slate
     */
    public function setTranscodeStatus($transcodeStatus)
    {
      $this->transcodeStatus = $transcodeStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoSourceUrl()
    {
      return $this->videoSourceUrl;
    }

    /**
     * @param string $videoSourceUrl
     * @return \Google\AdsApi\AdManager\v202108\Slate
     */
    public function setVideoSourceUrl($videoSourceUrl)
    {
      $this->videoSourceUrl = $videoSourceUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v202108\Slate
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

}
