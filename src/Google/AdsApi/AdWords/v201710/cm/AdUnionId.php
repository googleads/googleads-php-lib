<?php

namespace Google\AdsApi\AdWords\v201710\cm;


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
     * @var array $parameterMap
     */
    private $parameterMap = ['AdUnionId.Type' => 'AdUnionIdType'];

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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdUnionId
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdUnionId
     */
    public function setAdUnionIdType($AdUnionIdType)
    {
      $this->AdUnionIdType = $AdUnionIdType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201710\cm\AdUnionId
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
