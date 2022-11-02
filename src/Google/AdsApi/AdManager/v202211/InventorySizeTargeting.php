<?php

namespace Google\AdsApi\AdManager\v202211;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventorySizeTargeting
{

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @var \Google\AdsApi\AdManager\v202211\TargetedSize[] $targetedSizes
     */
    protected $targetedSizes = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\AdManager\v202211\TargetedSize[] $targetedSizes
     */
    public function __construct($isTargeted = null, array $targetedSizes = null)
    {
      $this->isTargeted = $isTargeted;
      $this->targetedSizes = $targetedSizes;
    }

    /**
     * @return boolean
     */
    public function getIsTargeted()
    {
      return $this->isTargeted;
    }

    /**
     * @param boolean $isTargeted
     * @return \Google\AdsApi\AdManager\v202211\InventorySizeTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202211\TargetedSize[]
     */
    public function getTargetedSizes()
    {
      return $this->targetedSizes;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202211\TargetedSize[]|null $targetedSizes
     * @return \Google\AdsApi\AdManager\v202211\InventorySizeTargeting
     */
    public function setTargetedSizes(array $targetedSizes = null)
    {
      $this->targetedSizes = $targetedSizes;
      return $this;
    }

}
