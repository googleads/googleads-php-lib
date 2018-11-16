<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentTargeting
{

    /**
     * @var int[] $targetedContentIds
     */
    protected $targetedContentIds = null;

    /**
     * @var int[] $excludedContentIds
     */
    protected $excludedContentIds = null;

    /**
     * @var int[] $targetedVideoContentBundleIds
     */
    protected $targetedVideoContentBundleIds = null;

    /**
     * @var int[] $excludedVideoContentBundleIds
     */
    protected $excludedVideoContentBundleIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\ContentMetadataKeyHierarchyTargeting[] $targetedContentMetadata
     */
    protected $targetedContentMetadata = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\ContentMetadataKeyHierarchyTargeting[] $excludedContentMetadata
     */
    protected $excludedContentMetadata = null;

    /**
     * @param int[] $targetedContentIds
     * @param int[] $excludedContentIds
     * @param int[] $targetedVideoContentBundleIds
     * @param int[] $excludedVideoContentBundleIds
     * @param \Google\AdsApi\AdManager\v201805\ContentMetadataKeyHierarchyTargeting[] $targetedContentMetadata
     * @param \Google\AdsApi\AdManager\v201805\ContentMetadataKeyHierarchyTargeting[] $excludedContentMetadata
     */
    public function __construct(array $targetedContentIds = null, array $excludedContentIds = null, array $targetedVideoContentBundleIds = null, array $excludedVideoContentBundleIds = null, array $targetedContentMetadata = null, array $excludedContentMetadata = null)
    {
      $this->targetedContentIds = $targetedContentIds;
      $this->excludedContentIds = $excludedContentIds;
      $this->targetedVideoContentBundleIds = $targetedVideoContentBundleIds;
      $this->excludedVideoContentBundleIds = $excludedVideoContentBundleIds;
      $this->targetedContentMetadata = $targetedContentMetadata;
      $this->excludedContentMetadata = $excludedContentMetadata;
    }

    /**
     * @return int[]
     */
    public function getTargetedContentIds()
    {
      return $this->targetedContentIds;
    }

    /**
     * @param int[] $targetedContentIds
     * @return \Google\AdsApi\AdManager\v201805\ContentTargeting
     */
    public function setTargetedContentIds(array $targetedContentIds)
    {
      $this->targetedContentIds = $targetedContentIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getExcludedContentIds()
    {
      return $this->excludedContentIds;
    }

    /**
     * @param int[] $excludedContentIds
     * @return \Google\AdsApi\AdManager\v201805\ContentTargeting
     */
    public function setExcludedContentIds(array $excludedContentIds)
    {
      $this->excludedContentIds = $excludedContentIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getTargetedVideoContentBundleIds()
    {
      return $this->targetedVideoContentBundleIds;
    }

    /**
     * @param int[] $targetedVideoContentBundleIds
     * @return \Google\AdsApi\AdManager\v201805\ContentTargeting
     */
    public function setTargetedVideoContentBundleIds(array $targetedVideoContentBundleIds)
    {
      $this->targetedVideoContentBundleIds = $targetedVideoContentBundleIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getExcludedVideoContentBundleIds()
    {
      return $this->excludedVideoContentBundleIds;
    }

    /**
     * @param int[] $excludedVideoContentBundleIds
     * @return \Google\AdsApi\AdManager\v201805\ContentTargeting
     */
    public function setExcludedVideoContentBundleIds(array $excludedVideoContentBundleIds)
    {
      $this->excludedVideoContentBundleIds = $excludedVideoContentBundleIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\ContentMetadataKeyHierarchyTargeting[]
     */
    public function getTargetedContentMetadata()
    {
      return $this->targetedContentMetadata;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\ContentMetadataKeyHierarchyTargeting[] $targetedContentMetadata
     * @return \Google\AdsApi\AdManager\v201805\ContentTargeting
     */
    public function setTargetedContentMetadata(array $targetedContentMetadata)
    {
      $this->targetedContentMetadata = $targetedContentMetadata;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\ContentMetadataKeyHierarchyTargeting[]
     */
    public function getExcludedContentMetadata()
    {
      return $this->excludedContentMetadata;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\ContentMetadataKeyHierarchyTargeting[] $excludedContentMetadata
     * @return \Google\AdsApi\AdManager\v201805\ContentTargeting
     */
    public function setExcludedContentMetadata(array $excludedContentMetadata)
    {
      $this->excludedContentMetadata = $excludedContentMetadata;
      return $this;
    }

}
