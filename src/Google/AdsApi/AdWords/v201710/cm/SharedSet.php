<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SharedSet
{

    /**
     * @var int $sharedSetId
     */
    protected $sharedSetId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $memberCount
     */
    protected $memberCount = null;

    /**
     * @var int $referenceCount
     */
    protected $referenceCount = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $sharedSetId
     * @param string $name
     * @param string $type
     * @param int $memberCount
     * @param int $referenceCount
     * @param string $status
     */
    public function __construct($sharedSetId = null, $name = null, $type = null, $memberCount = null, $referenceCount = null, $status = null)
    {
      $this->sharedSetId = $sharedSetId;
      $this->name = $name;
      $this->type = $type;
      $this->memberCount = $memberCount;
      $this->referenceCount = $referenceCount;
      $this->status = $status;
    }

    /**
     * @return int
     */
    public function getSharedSetId()
    {
      return $this->sharedSetId;
    }

    /**
     * @param int $sharedSetId
     * @return \Google\AdsApi\AdWords\v201710\cm\SharedSet
     */
    public function setSharedSetId($sharedSetId)
    {
      $this->sharedSetId = (!is_null($sharedSetId) && PHP_INT_SIZE === 4)
          ? floatval($sharedSetId) : $sharedSetId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201710\cm\SharedSet
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\SharedSet
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getMemberCount()
    {
      return $this->memberCount;
    }

    /**
     * @param int $memberCount
     * @return \Google\AdsApi\AdWords\v201710\cm\SharedSet
     */
    public function setMemberCount($memberCount)
    {
      $this->memberCount = $memberCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getReferenceCount()
    {
      return $this->referenceCount;
    }

    /**
     * @param int $referenceCount
     * @return \Google\AdsApi\AdWords\v201710\cm\SharedSet
     */
    public function setReferenceCount($referenceCount)
    {
      $this->referenceCount = $referenceCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201710\cm\SharedSet
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
