<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class IpBlock extends \Google\AdsApi\AdWords\v201601\cm\Criterion
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
     * @return \Google\AdsApi\AdWords\v201601\cm\IpBlock
     */
    public function setIpAddress($ipAddress)
    {
      $this->ipAddress = $ipAddress;
      return $this;
    }

}
