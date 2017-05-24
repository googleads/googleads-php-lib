<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentTargeting
{

    /**
     * @var long[] $targetedContentIds
     */
    protected $targetedContentIds = null;

    /**
     * @var long[] $excludedContentIds
     */
    protected $excludedContentIds = null;

    /**
     * @var long[] $targetedVideoContentBundleIds
     */
    protected $targetedVideoContentBundleIds = null;

    /**
     * @var long[] $excludedVideoContentBundleIds
     */
    protected $excludedVideoContentBundleIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\ContentMetadataKeyHierarchyTargeting[] $targetedContentMetadata
     */
    protected $targetedContentMetadata = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\ContentMetadataKeyHierarchyTargeting[] $excludedContentMetadata
     */
    protected $excludedContentMetadata = null;

    /**
     * @param long[] $targetedContentIds
     * @param long[] $excludedContentIds
     * @param long[] $targetedVideoContentBundleIds
     * @param long[] $excludedVideoContentBundleIds
     * @param \Google\AdsApi\Dfp\v201705\ContentMetadataKeyHierarchyTargeting[] $targetedContentMetadata
     * @param \Google\AdsApi\Dfp\v201705\ContentMetadataKeyHierarchyTargeting[] $excludedContentMetadata
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
     * @return long[]
     */
    public function getTargetedContentIds()
    {
      return $this->targetedContentIds;
    }

    /**
     * @param long[] $targetedContentIds
     * @return \Google\AdsApi\Dfp\v201705\ContentTargeting
     */
    public function setTargetedContentIds(array $targetedContentIds)
    {
      $this->targetedContentIds = $targetedContentIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getExcludedContentIds()
    {
      return $this->excludedContentIds;
    }

    /**
     * @param long[] $excludedContentIds
     * @return \Google\AdsApi\Dfp\v201705\ContentTargeting
     */
    public function setExcludedContentIds(array $excludedContentIds)
    {
      $this->excludedContentIds = $excludedContentIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getTargetedVideoContentBundleIds()
    {
      return $this->targetedVideoContentBundleIds;
    }

    /**
     * @param long[] $targetedVideoContentBundleIds
     * @return \Google\AdsApi\Dfp\v201705\ContentTargeting
     */
    public function setTargetedVideoContentBundleIds(array $targetedVideoContentBundleIds)
    {
      $this->targetedVideoContentBundleIds = $targetedVideoContentBundleIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getExcludedVideoContentBundleIds()
    {
      return $this->excludedVideoContentBundleIds;
    }

    /**
     * @param long[] $excludedVideoContentBundleIds
     * @return \Google\AdsApi\Dfp\v201705\ContentTargeting
     */
    public function setExcludedVideoContentBundleIds(array $excludedVideoContentBundleIds)
    {
      $this->excludedVideoContentBundleIds = $excludedVideoContentBundleIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\ContentMetadataKeyHierarchyTargeting[]
     */
    public function getTargetedContentMetadata()
    {
      return $this->targetedContentMetadata;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\ContentMetadataKeyHierarchyTargeting[] $targetedContentMetadata
     * @return \Google\AdsApi\Dfp\v201705\ContentTargeting
     */
    public function setTargetedContentMetadata(array $targetedContentMetadata)
    {
      $this->targetedContentMetadata = $targetedContentMetadata;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\ContentMetadataKeyHierarchyTargeting[]
     */
    public function getExcludedContentMetadata()
    {
      return $this->excludedContentMetadata;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\ContentMetadataKeyHierarchyTargeting[] $excludedContentMetadata
     * @return \Google\AdsApi\Dfp\v201705\ContentTargeting
     */
    public function setExcludedContentMetadata(array $excludedContentMetadata)
    {
      $this->excludedContentMetadata = $excludedContentMetadata;
      return $this;
    }

}
