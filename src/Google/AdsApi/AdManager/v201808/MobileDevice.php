<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileDevice extends \Google\AdsApi\AdManager\v201808\Technology
{

    /**
     * @var int $manufacturerCriterionId
     */
    protected $manufacturerCriterionId = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $manufacturerCriterionId
     */
    public function __construct($id = null, $name = null, $manufacturerCriterionId = null)
    {
      parent::__construct($id, $name);
      $this->manufacturerCriterionId = $manufacturerCriterionId;
    }

    /**
     * @return int
     */
    public function getManufacturerCriterionId()
    {
      return $this->manufacturerCriterionId;
    }

    /**
     * @param int $manufacturerCriterionId
     * @return \Google\AdsApi\AdManager\v201808\MobileDevice
     */
    public function setManufacturerCriterionId($manufacturerCriterionId)
    {
      $this->manufacturerCriterionId = (!is_null($manufacturerCriterionId) && PHP_INT_SIZE === 4)
          ? floatval($manufacturerCriterionId) : $manufacturerCriterionId;
      return $this;
    }

}
