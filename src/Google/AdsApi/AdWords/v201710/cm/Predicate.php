<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Predicate
{

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var string[] $values
     */
    protected $values = null;

    /**
     * @param string $field
     * @param string $operator
     * @param string[] $values
     */
    public function __construct($field = null, $operator = null, array $values = null)
    {
      $this->field = $field;
      $this->operator = $operator;
      $this->values = $values;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param string $field
     * @return \Google\AdsApi\AdWords\v201710\cm\Predicate
     */
    public function setField($field)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param string $operator
     * @return \Google\AdsApi\AdWords\v201710\cm\Predicate
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param string[] $values
     * @return \Google\AdsApi\AdWords\v201710\cm\Predicate
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
