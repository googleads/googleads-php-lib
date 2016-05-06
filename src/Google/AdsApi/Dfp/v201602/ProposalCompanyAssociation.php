<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalCompanyAssociation
{

    /**
     * @var int $companyId
     */
    protected $companyId = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var long[] $contactIds
     */
    protected $contactIds = null;

    /**
     * @param int $companyId
     * @param string $type
     * @param long[] $contactIds
     */
    public function __construct($companyId = null, $type = null, array $contactIds = null)
    {
      $this->companyId = $companyId;
      $this->type = $type;
      $this->contactIds = $contactIds;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
      return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return \Google\AdsApi\Dfp\v201602\ProposalCompanyAssociation
     */
    public function setCompanyId($companyId)
    {
      $this->companyId = $companyId;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\Dfp\v201602\ProposalCompanyAssociation
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getContactIds()
    {
      return $this->contactIds;
    }

    /**
     * @param long[] $contactIds
     * @return \Google\AdsApi\Dfp\v201602\ProposalCompanyAssociation
     */
    public function setContactIds(array $contactIds)
    {
      $this->contactIds = $contactIds;
      return $this;
    }

}
