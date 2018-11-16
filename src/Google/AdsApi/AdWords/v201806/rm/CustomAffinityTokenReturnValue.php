<?php

namespace Google\AdsApi\AdWords\v201806\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomAffinityTokenReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken[] $entries
     */
    protected $entries = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken[] $entries
     */
    public function __construct(array $entries = null)
    {
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken[] $entries
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinityTokenReturnValue
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
