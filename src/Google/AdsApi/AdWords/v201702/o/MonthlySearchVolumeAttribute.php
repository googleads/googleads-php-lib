<?php

namespace Google\AdsApi\AdWords\v201702\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MonthlySearchVolumeAttribute extends \Google\AdsApi\AdWords\v201702\o\Attribute
{

    /**
     * @var \Google\AdsApi\AdWords\v201702\o\MonthlySearchVolume[] $value
     */
    protected $value = null;

    /**
     * @param string $AttributeType
     * @param \Google\AdsApi\AdWords\v201702\o\MonthlySearchVolume[] $value
     */
    public function __construct($AttributeType = null, array $value = null)
    {
      parent::__construct($AttributeType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201702\o\MonthlySearchVolume[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201702\o\MonthlySearchVolume[] $value
     * @return \Google\AdsApi\AdWords\v201702\o\MonthlySearchVolumeAttribute
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
