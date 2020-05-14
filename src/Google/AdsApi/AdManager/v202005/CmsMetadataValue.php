<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CmsMetadataValue
{

    /**
     * @var int $cmsMetadataValueId
     */
    protected $cmsMetadataValueId = null;

    /**
     * @var string $valueName
     */
    protected $valueName = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\CmsMetadataKey $key
     */
    protected $key = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $cmsMetadataValueId
     * @param string $valueName
     * @param \Google\AdsApi\AdManager\v202005\CmsMetadataKey $key
     * @param string $status
     */
    public function __construct($cmsMetadataValueId = null, $valueName = null, $key = null, $status = null)
    {
      $this->cmsMetadataValueId = $cmsMetadataValueId;
      $this->valueName = $valueName;
      $this->key = $key;
      $this->status = $status;
    }

    /**
     * @return int
     */
    public function getCmsMetadataValueId()
    {
      return $this->cmsMetadataValueId;
    }

    /**
     * @param int $cmsMetadataValueId
     * @return \Google\AdsApi\AdManager\v202005\CmsMetadataValue
     */
    public function setCmsMetadataValueId($cmsMetadataValueId)
    {
      $this->cmsMetadataValueId = (!is_null($cmsMetadataValueId) && PHP_INT_SIZE === 4)
          ? floatval($cmsMetadataValueId) : $cmsMetadataValueId;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueName()
    {
      return $this->valueName;
    }

    /**
     * @param string $valueName
     * @return \Google\AdsApi\AdManager\v202005\CmsMetadataValue
     */
    public function setValueName($valueName)
    {
      $this->valueName = $valueName;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\CmsMetadataKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\CmsMetadataKey $key
     * @return \Google\AdsApi\AdManager\v202005\CmsMetadataValue
     */
    public function setKey($key)
    {
      $this->key = $key;
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
     * @return \Google\AdsApi\AdManager\v202005\CmsMetadataValue
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
