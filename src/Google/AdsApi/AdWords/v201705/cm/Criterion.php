<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Criterion
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $CriterionType
     */
    protected $CriterionType = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     */
    public function __construct($id = null, $type = null, $CriterionType = null)
    {
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdWords\v201705\cm\Criterion
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Google\AdsApi\AdWords\v201705\cm\Criterion
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCriterionType()
    {
      return $this->CriterionType;
    }

    /**
     * @param string $CriterionType
     * @return \Google\AdsApi\AdWords\v201705\cm\Criterion
     */
    public function setCriterionType($CriterionType)
    {
      $this->CriterionType = $CriterionType;
      return $this;
    }

}
