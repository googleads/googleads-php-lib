<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VerticalTargeting
{

    /**
     * @var int[] $targetedVerticalIds
     */
    protected $targetedVerticalIds = null;

    /**
     * @var int[] $excludedVerticalIds
     */
    protected $excludedVerticalIds = null;

    /**
     * @param int[] $targetedVerticalIds
     * @param int[] $excludedVerticalIds
     */
    public function __construct(array $targetedVerticalIds = null, array $excludedVerticalIds = null)
    {
      $this->targetedVerticalIds = $targetedVerticalIds;
      $this->excludedVerticalIds = $excludedVerticalIds;
    }

    /**
     * @return int[]
     */
    public function getTargetedVerticalIds()
    {
      return $this->targetedVerticalIds;
    }

    /**
     * @param int[]|null $targetedVerticalIds
     * @return \Google\AdsApi\AdManager\v202511\VerticalTargeting
     */
    public function setTargetedVerticalIds(array $targetedVerticalIds = null)
    {
      $this->targetedVerticalIds = $targetedVerticalIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getExcludedVerticalIds()
    {
      return $this->excludedVerticalIds;
    }

    /**
     * @param int[]|null $excludedVerticalIds
     * @return \Google\AdsApi\AdManager\v202511\VerticalTargeting
     */
    public function setExcludedVerticalIds(array $excludedVerticalIds = null)
    {
      $this->excludedVerticalIds = $excludedVerticalIds;
      return $this;
    }

}
