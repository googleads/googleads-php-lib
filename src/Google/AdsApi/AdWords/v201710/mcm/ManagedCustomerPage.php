<?php

namespace Google\AdsApi\AdWords\v201710\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerPage extends \Google\AdsApi\AdWords\v201710\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomer[] $entries
     */
    protected $entries = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLink[] $links
     */
    protected $links = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomer[] $entries
     * @param \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLink[] $links
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null, array $links = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
      $this->links = $links;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomer[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomer[] $entries
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLink[]
     */
    public function getLinks()
    {
      return $this->links;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLink[] $links
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerPage
     */
    public function setLinks(array $links)
    {
      $this->links = $links;
      return $this;
    }

}
