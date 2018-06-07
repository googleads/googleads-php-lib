<?php

namespace Google\AdsApi\AdWords\v201806\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomAffinityReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\rm\CustomAffinity[] $entries
     */
    protected $entries = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\rm\CustomAffinity[] $entries
     */
    public function __construct(array $entries = null)
    {
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinity[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\rm\CustomAffinity[] $entries
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinityReturnValue
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
