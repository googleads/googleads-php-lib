<?php

namespace Google\AdsApi\AdWords\v201806\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PendingInvitation
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer $manager
     */
    protected $manager = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer $client
     */
    protected $client = null;

    /**
     * @var string $creationDate
     */
    protected $creationDate = null;

    /**
     * @var string $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer $manager
     * @param \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer $client
     * @param string $creationDate
     * @param string $expirationDate
     */
    public function __construct($manager = null, $client = null, $creationDate = null, $expirationDate = null)
    {
      $this->manager = $manager;
      $this->client = $client;
      $this->creationDate = $creationDate;
      $this->expirationDate = $expirationDate;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function getManager()
    {
      return $this->manager;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer $manager
     * @return \Google\AdsApi\AdWords\v201806\mcm\PendingInvitation
     */
    public function setManager($manager)
    {
      $this->manager = $manager;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function getClient()
    {
      return $this->client;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer $client
     * @return \Google\AdsApi\AdWords\v201806\mcm\PendingInvitation
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreationDate()
    {
      return $this->creationDate;
    }

    /**
     * @param string $creationDate
     * @return \Google\AdsApi\AdWords\v201806\mcm\PendingInvitation
     */
    public function setCreationDate($creationDate)
    {
      $this->creationDate = $creationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
      return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     * @return \Google\AdsApi\AdWords\v201806\mcm\PendingInvitation
     */
    public function setExpirationDate($expirationDate)
    {
      $this->expirationDate = $expirationDate;
      return $this;
    }

}
