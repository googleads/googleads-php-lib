<?php

namespace Google\AdsApi\Dfp\v201511;

class MobileDevice extends \Google\AdsApi\Dfp\v201511\Technology
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
     * @return \Google\AdsApi\Dfp\v201511\MobileDevice
     */
    public function setManufacturerCriterionId($manufacturerCriterionId)
    {
      $this->manufacturerCriterionId = $manufacturerCriterionId;
      return $this;
    }

}
