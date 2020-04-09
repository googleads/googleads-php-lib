<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class IpBlock extends \Google\AdsApi\AdWords\v201809\cm\Criterion
{

    /**
     * @var string $ipAddress
     */
    protected $ipAddress = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $ipAddress
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $ipAddress = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->ipAddress = $ipAddress;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
      return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return \Google\AdsApi\AdWords\v201809\cm\IpBlock
     */
    public function setIpAddress($ipAddress)
    {
      $this->ipAddress = $ipAddress;
      return $this;
    }

}
