<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryUrlTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v202308\InventoryUrl[] $targetedUrls
     */
    protected $targetedUrls = null;

    /**
     * @var \Google\AdsApi\AdManager\v202308\InventoryUrl[] $excludedUrls
     */
    protected $excludedUrls = null;

    /**
     * @param \Google\AdsApi\AdManager\v202308\InventoryUrl[] $targetedUrls
     * @param \Google\AdsApi\AdManager\v202308\InventoryUrl[] $excludedUrls
     */
    public function __construct(array $targetedUrls = null, array $excludedUrls = null)
    {
      $this->targetedUrls = $targetedUrls;
      $this->excludedUrls = $excludedUrls;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\InventoryUrl[]
     */
    public function getTargetedUrls()
    {
      return $this->targetedUrls;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\InventoryUrl[]|null $targetedUrls
     * @return \Google\AdsApi\AdManager\v202308\InventoryUrlTargeting
     */
    public function setTargetedUrls(array $targetedUrls = null)
    {
      $this->targetedUrls = $targetedUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\InventoryUrl[]
     */
    public function getExcludedUrls()
    {
      return $this->excludedUrls;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\InventoryUrl[]|null $excludedUrls
     * @return \Google\AdsApi\AdManager\v202308\InventoryUrlTargeting
     */
    public function setExcludedUrls(array $excludedUrls = null)
    {
      $this->excludedUrls = $excludedUrls;
      return $this;
    }

}
