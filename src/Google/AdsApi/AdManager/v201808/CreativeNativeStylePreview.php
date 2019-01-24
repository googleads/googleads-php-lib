<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeNativeStylePreview
{

    /**
     * @var int $nativeStyleId
     */
    protected $nativeStyleId = null;

    /**
     * @var string $previewUrl
     */
    protected $previewUrl = null;

    /**
     * @param int $nativeStyleId
     * @param string $previewUrl
     */
    public function __construct($nativeStyleId = null, $previewUrl = null)
    {
      $this->nativeStyleId = $nativeStyleId;
      $this->previewUrl = $previewUrl;
    }

    /**
     * @return int
     */
    public function getNativeStyleId()
    {
      return $this->nativeStyleId;
    }

    /**
     * @param int $nativeStyleId
     * @return \Google\AdsApi\AdManager\v201808\CreativeNativeStylePreview
     */
    public function setNativeStyleId($nativeStyleId)
    {
      $this->nativeStyleId = (!is_null($nativeStyleId) && PHP_INT_SIZE === 4)
          ? floatval($nativeStyleId) : $nativeStyleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
      return $this->previewUrl;
    }

    /**
     * @param string $previewUrl
     * @return \Google\AdsApi\AdManager\v201808\CreativeNativeStylePreview
     */
    public function setPreviewUrl($previewUrl)
    {
      $this->previewUrl = $previewUrl;
      return $this;
    }

}
