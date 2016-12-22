<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdUnionId
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $AdUnionIdType
     */
    protected $AdUnionIdType = null;

    /**
     * @param int $id
     * @param string $AdUnionIdType
     */
    public function __construct($id = null, $AdUnionIdType = null)
    {
      $this->id = $id;
      $this->AdUnionIdType = $AdUnionIdType;
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
     * @return \Google\AdsApi\AdWords\v201609\cm\AdUnionId
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdUnionIdType()
    {
      return $this->AdUnionIdType;
    }

    /**
     * @param string $AdUnionIdType
     * @return \Google\AdsApi\AdWords\v201609\cm\AdUnionId
     */
    public function setAdUnionIdType($AdUnionIdType)
    {
      $this->AdUnionIdType = $AdUnionIdType;
      return $this;
    }

}
