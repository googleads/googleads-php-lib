<?php

namespace Google\AdsApi\Dfp\v201511;

class ContentMetadataKeyHierarchyTargeting
{

    /**
     * @var long[] $customTargetingValueIds
     */
    protected $customTargetingValueIds = null;

    /**
     * @param long[] $customTargetingValueIds
     */
    public function __construct(array $customTargetingValueIds = null)
    {
      $this->customTargetingValueIds = $customTargetingValueIds;
    }

    /**
     * @return long[]
     */
    public function getCustomTargetingValueIds()
    {
      return $this->customTargetingValueIds;
    }

    /**
     * @param long[] $customTargetingValueIds
     * @return \Google\AdsApi\Dfp\v201511\ContentMetadataKeyHierarchyTargeting
     */
    public function setCustomTargetingValueIds(array $customTargetingValueIds)
    {
      $this->customTargetingValueIds = $customTargetingValueIds;
      return $this;
    }

}
