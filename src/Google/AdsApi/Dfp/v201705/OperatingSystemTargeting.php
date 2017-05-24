<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OperatingSystemTargeting
{

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\Technology[] $operatingSystems
     */
    protected $operatingSystems = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\Dfp\v201705\Technology[] $operatingSystems
     */
    public function __construct($isTargeted = null, array $operatingSystems = null)
    {
      $this->isTargeted = $isTargeted;
      $this->operatingSystems = $operatingSystems;
    }

    /**
     * @return boolean
     */
    public function getIsTargeted()
    {
      return $this->isTargeted;
    }

    /**
     * @param boolean $isTargeted
     * @return \Google\AdsApi\Dfp\v201705\OperatingSystemTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\Technology[]
     */
    public function getOperatingSystems()
    {
      return $this->operatingSystems;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\Technology[] $operatingSystems
     * @return \Google\AdsApi\Dfp\v201705\OperatingSystemTargeting
     */
    public function setOperatingSystems(array $operatingSystems)
    {
      $this->operatingSystems = $operatingSystems;
      return $this;
    }

}
