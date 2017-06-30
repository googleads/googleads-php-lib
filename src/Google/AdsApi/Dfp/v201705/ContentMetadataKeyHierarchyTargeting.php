<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentMetadataKeyHierarchyTargeting
{

    /**
     * @var int[] $customTargetingValueIds
     */
    protected $customTargetingValueIds = null;

    /**
     * @param int[] $customTargetingValueIds
     */
    public function __construct(array $customTargetingValueIds = null)
    {
      $this->customTargetingValueIds = $customTargetingValueIds;
    }

    /**
     * @return int[]
     */
    public function getCustomTargetingValueIds()
    {
      return $this->customTargetingValueIds;
    }

    /**
     * @param int[] $customTargetingValueIds
     * @return \Google\AdsApi\Dfp\v201705\ContentMetadataKeyHierarchyTargeting
     */
    public function setCustomTargetingValueIds(array $customTargetingValueIds)
    {
      $this->customTargetingValueIds = $customTargetingValueIds;
      return $this;
    }

}
