<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LongAttribute extends \Google\AdsApi\AdWords\v201802\o\Attribute
{

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @param string $AttributeType
     * @param int $value
     */
    public function __construct($AttributeType = null, $value = null)
    {
      parent::__construct($AttributeType);
      $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return \Google\AdsApi\AdWords\v201802\o\LongAttribute
     */
    public function setValue($value)
    {
      $this->value = (!is_null($value) && PHP_INT_SIZE === 4)
          ? floatval($value) : $value;
      return $this;
    }

}
