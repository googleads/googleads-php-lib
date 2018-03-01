<?php

namespace Google\AdsApi\AdWords\v201802\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MutateManagerResults
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\mcm\ManagedCustomerLink[] $links
     */
    protected $links = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\mcm\ManagedCustomerLink[] $links
     */
    public function __construct(array $links = null)
    {
      $this->links = $links;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\mcm\ManagedCustomerLink[]
     */
    public function getLinks()
    {
      return $this->links;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\mcm\ManagedCustomerLink[] $links
     * @return \Google\AdsApi\AdWords\v201802\mcm\MutateManagerResults
     */
    public function setLinks(array $links)
    {
      $this->links = $links;
      return $this;
    }

}
