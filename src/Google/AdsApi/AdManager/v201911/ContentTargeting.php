<?php

namespace Google\AdsApi\AdManager\v201911;


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
     * @param int[] $targetedContentIds
     * @param int[] $excludedContentIds
     * @param int[] $targetedVideoContentBundleIds
     * @param int[] $excludedVideoContentBundleIds
     */
    public function __construct(array $targetedContentIds = null, array $excludedContentIds = null, array $targetedVideoContentBundleIds = null, array $excludedVideoContentBundleIds = null)
    {
      $this->targetedContentIds = $targetedContentIds;
      $this->excludedContentIds = $excludedContentIds;
      $this->targetedVideoContentBundleIds = $targetedVideoContentBundleIds;
      $this->excludedVideoContentBundleIds = $excludedVideoContentBundleIds;
    }

    /**
     * @return int[]
     */
    public function getTargetedContentIds()
    {
      return $this->targetedContentIds;
    }

    /**
     * @param int[]|null $targetedContentIds
     * @return \Google\AdsApi\AdManager\v201911\ContentTargeting
     */
    public function setTargetedContentIds(array $targetedContentIds = null)
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
     * @param int[]|null $excludedContentIds
     * @return \Google\AdsApi\AdManager\v201911\ContentTargeting
     */
    public function setExcludedContentIds(array $excludedContentIds = null)
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
     * @param int[]|null $targetedVideoContentBundleIds
     * @return \Google\AdsApi\AdManager\v201911\ContentTargeting
     */
    public function setTargetedVideoContentBundleIds(array $targetedVideoContentBundleIds = null)
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
     * @param int[]|null $excludedVideoContentBundleIds
     * @return \Google\AdsApi\AdManager\v201911\ContentTargeting
     */
    public function setExcludedVideoContentBundleIds(array $excludedVideoContentBundleIds = null)
    {
      $this->excludedVideoContentBundleIds = $excludedVideoContentBundleIds;
      return $this;
    }

}
