<?php

namespace Google\AdsApi\AdWords\v201601\mcm;

class PendingInvitationSelector
{

    /**
     * @var long[] $managerCustomerIds
     */
    protected $managerCustomerIds = null;

    /**
     * @var long[] $clientCustomerIds
     */
    protected $clientCustomerIds = null;

    /**
     * @param long[] $managerCustomerIds
     * @param long[] $clientCustomerIds
     */
    public function __construct(array $managerCustomerIds = null, array $clientCustomerIds = null)
    {
      $this->managerCustomerIds = $managerCustomerIds;
      $this->clientCustomerIds = $clientCustomerIds;
    }

    /**
     * @return long[]
     */
    public function getManagerCustomerIds()
    {
      return $this->managerCustomerIds;
    }

    /**
     * @param long[] $managerCustomerIds
     * @return \Google\AdsApi\AdWords\v201601\mcm\PendingInvitationSelector
     */
    public function setManagerCustomerIds(array $managerCustomerIds)
    {
      $this->managerCustomerIds = $managerCustomerIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getClientCustomerIds()
    {
      return $this->clientCustomerIds;
    }

    /**
     * @param long[] $clientCustomerIds
     * @return \Google\AdsApi\AdWords\v201601\mcm\PendingInvitationSelector
     */
    public function setClientCustomerIds(array $clientCustomerIds)
    {
      $this->clientCustomerIds = $clientCustomerIds;
      return $this;
    }

}
