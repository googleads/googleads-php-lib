<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseImageCreative extends \Google\AdsApi\AdManager\v201805\HasDestinationUrlCreative
{

    /**
     * @var boolean $overrideSize
     */
    protected $overrideSize = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\CreativeAsset $primaryImageAsset
     */
    protected $primaryImageAsset = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201805\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\AdManager\v201805\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201805\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201805\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param boolean $overrideSize
     * @param \Google\AdsApi\AdManager\v201805\CreativeAsset $primaryImageAsset
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $overrideSize = null, $primaryImageAsset = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType);
      $this->overrideSize = $overrideSize;
      $this->primaryImageAsset = $primaryImageAsset;
    }

    /**
     * @return boolean
     */
    public function getOverrideSize()
    {
      return $this->overrideSize;
    }

    /**
     * @param boolean $overrideSize
     * @return \Google\AdsApi\AdManager\v201805\BaseImageCreative
     */
    public function setOverrideSize($overrideSize)
    {
      $this->overrideSize = $overrideSize;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\CreativeAsset
     */
    public function getPrimaryImageAsset()
    {
      return $this->primaryImageAsset;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\CreativeAsset $primaryImageAsset
     * @return \Google\AdsApi\AdManager\v201805\BaseImageCreative
     */
    public function setPrimaryImageAsset($primaryImageAsset)
    {
      $this->primaryImageAsset = $primaryImageAsset;
      return $this;
    }

}
