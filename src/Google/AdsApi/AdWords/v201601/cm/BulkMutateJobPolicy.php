<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class BulkMutateJobPolicy
{

    /**
     * @var long[] $prerequisiteJobIds
     */
    protected $prerequisiteJobIds = null;

    /**
     * @param long[] $prerequisiteJobIds
     */
    public function __construct(array $prerequisiteJobIds = null)
    {
      $this->prerequisiteJobIds = $prerequisiteJobIds;
    }

    /**
     * @return long[]
     */
    public function getPrerequisiteJobIds()
    {
      return $this->prerequisiteJobIds;
    }

    /**
     * @param long[] $prerequisiteJobIds
     * @return \Google\AdsApi\AdWords\v201601\cm\BulkMutateJobPolicy
     */
    public function setPrerequisiteJobIds(array $prerequisiteJobIds)
    {
      $this->prerequisiteJobIds = $prerequisiteJobIds;
      return $this;
    }

}
