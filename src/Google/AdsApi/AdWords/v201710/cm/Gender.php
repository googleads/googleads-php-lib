<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Gender extends \Google\AdsApi\AdWords\v201710\cm\Criterion
{

    /**
     * @var string $genderType
     */
    protected $genderType = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $genderType
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $genderType = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->genderType = $genderType;
    }

    /**
     * @return string
     */
    public function getGenderType()
    {
      return $this->genderType;
    }

    /**
     * @param string $genderType
     * @return \Google\AdsApi\AdWords\v201710\cm\Gender
     */
    public function setGenderType($genderType)
    {
      $this->genderType = $genderType;
      return $this;
    }

}
