<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Video extends \Google\AdsApi\AdWords\v201802\cm\Media
{

    /**
     * @var int $durationMillis
     */
    protected $durationMillis = null;

    /**
     * @var string $streamingUrl
     */
    protected $streamingUrl = null;

    /**
     * @var boolean $readyToPlayOnTheWeb
     */
    protected $readyToPlayOnTheWeb = null;

    /**
     * @var string $industryStandardCommercialIdentifier
     */
    protected $industryStandardCommercialIdentifier = null;

    /**
     * @var string $advertisingId
     */
    protected $advertisingId = null;

    /**
     * @var string $youTubeVideoIdString
     */
    protected $youTubeVideoIdString = null;

    /**
     * @param int $mediaId
     * @param string $type
     * @param int $referenceId
     * @param \Google\AdsApi\AdWords\v201802\cm\Media_Size_DimensionsMapEntry[] $dimensions
     * @param \Google\AdsApi\AdWords\v201802\cm\Media_Size_StringMapEntry[] $urls
     * @param string $mimeType
     * @param string $sourceUrl
     * @param string $name
     * @param int $fileSize
     * @param string $creationTime
     * @param string $MediaType
     * @param int $durationMillis
     * @param string $streamingUrl
     * @param boolean $readyToPlayOnTheWeb
     * @param string $industryStandardCommercialIdentifier
     * @param string $advertisingId
     * @param string $youTubeVideoIdString
     */
    public function __construct($mediaId = null, $type = null, $referenceId = null, array $dimensions = null, array $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null, $durationMillis = null, $streamingUrl = null, $readyToPlayOnTheWeb = null, $industryStandardCommercialIdentifier = null, $advertisingId = null, $youTubeVideoIdString = null)
    {
      parent::__construct($mediaId, $type, $referenceId, $dimensions, $urls, $mimeType, $sourceUrl, $name, $fileSize, $creationTime, $MediaType);
      $this->durationMillis = $durationMillis;
      $this->streamingUrl = $streamingUrl;
      $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
      $this->industryStandardCommercialIdentifier = $industryStandardCommercialIdentifier;
      $this->advertisingId = $advertisingId;
      $this->youTubeVideoIdString = $youTubeVideoIdString;
    }

    /**
     * @return int
     */
    public function getDurationMillis()
    {
      return $this->durationMillis;
    }

    /**
     * @param int $durationMillis
     * @return \Google\AdsApi\AdWords\v201802\cm\Video
     */
    public function setDurationMillis($durationMillis)
    {
      $this->durationMillis = (!is_null($durationMillis) && PHP_INT_SIZE === 4)
          ? floatval($durationMillis) : $durationMillis;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreamingUrl()
    {
      return $this->streamingUrl;
    }

    /**
     * @param string $streamingUrl
     * @return \Google\AdsApi\AdWords\v201802\cm\Video
     */
    public function setStreamingUrl($streamingUrl)
    {
      $this->streamingUrl = $streamingUrl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReadyToPlayOnTheWeb()
    {
      return $this->readyToPlayOnTheWeb;
    }

    /**
     * @param boolean $readyToPlayOnTheWeb
     * @return \Google\AdsApi\AdWords\v201802\cm\Video
     */
    public function setReadyToPlayOnTheWeb($readyToPlayOnTheWeb)
    {
      $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
      return $this;
    }

    /**
     * @return string
     */
    public function getIndustryStandardCommercialIdentifier()
    {
      return $this->industryStandardCommercialIdentifier;
    }

    /**
     * @param string $industryStandardCommercialIdentifier
     * @return \Google\AdsApi\AdWords\v201802\cm\Video
     */
    public function setIndustryStandardCommercialIdentifier($industryStandardCommercialIdentifier)
    {
      $this->industryStandardCommercialIdentifier = $industryStandardCommercialIdentifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdvertisingId()
    {
      return $this->advertisingId;
    }

    /**
     * @param string $advertisingId
     * @return \Google\AdsApi\AdWords\v201802\cm\Video
     */
    public function setAdvertisingId($advertisingId)
    {
      $this->advertisingId = $advertisingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getYouTubeVideoIdString()
    {
      return $this->youTubeVideoIdString;
    }

    /**
     * @param string $youTubeVideoIdString
     * @return \Google\AdsApi\AdWords\v201802\cm\Video
     */
    public function setYouTubeVideoIdString($youTubeVideoIdString)
    {
      $this->youTubeVideoIdString = $youTubeVideoIdString;
      return $this;
    }

}
