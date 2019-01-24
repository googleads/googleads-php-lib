<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AgeRange extends \Google\AdsApi\AdWords\v201809\cm\Criterion
{

    /**
     * @var string $ageRangeType
     */
    protected $ageRangeType = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $ageRangeType
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $ageRangeType = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->ageRangeType = $ageRangeType;
    }

    /**
     * @return string
     */
    public function getAgeRangeType()
    {
      return $this->ageRangeType;
    }

    /**
     * @param string $ageRangeType
     * @return \Google\AdsApi\AdWords\v201809\cm\AgeRange
     */
    public function setAgeRangeType($ageRangeType)
    {
      $this->ageRangeType = $ageRangeType;
      return $this;
    }

}
