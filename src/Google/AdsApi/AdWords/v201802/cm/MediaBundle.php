<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MediaBundle extends \Google\AdsApi\AdWords\v201802\cm\Media
{

    /**
     * @var string $data
     */
    protected $data = null;

    /**
     * @var string $mediaBundleUrl
     */
    protected $mediaBundleUrl = null;

    /**
     * @var string $entryPoint
     */
    protected $entryPoint = null;

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
     * @param string $data
     * @param string $mediaBundleUrl
     * @param string $entryPoint
     */
    public function __construct($mediaId = null, $type = null, $referenceId = null, array $dimensions = null, array $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null, $data = null, $mediaBundleUrl = null, $entryPoint = null)
    {
      parent::__construct($mediaId, $type, $referenceId, $dimensions, $urls, $mimeType, $sourceUrl, $name, $fileSize, $creationTime, $MediaType);
      $this->data = $data;
      $this->mediaBundleUrl = $mediaBundleUrl;
      $this->entryPoint = $entryPoint;
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param string $data
     * @return \Google\AdsApi\AdWords\v201802\cm\MediaBundle
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaBundleUrl()
    {
      return $this->mediaBundleUrl;
    }

    /**
     * @param string $mediaBundleUrl
     * @return \Google\AdsApi\AdWords\v201802\cm\MediaBundle
     */
    public function setMediaBundleUrl($mediaBundleUrl)
    {
      $this->mediaBundleUrl = $mediaBundleUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntryPoint()
    {
      return $this->entryPoint;
    }

    /**
     * @param string $entryPoint
     * @return \Google\AdsApi\AdWords\v201802\cm\MediaBundle
     */
    public function setEntryPoint($entryPoint)
    {
      $this->entryPoint = $entryPoint;
      return $this;
    }

}
