<?php

namespace Google\AdsApi\AdWords\v201601\o;

abstract class Attribute
{

    /**
     * @var string $AttributeType
     */
    protected $AttributeType = null;

    /**
     * @param string $AttributeType
     */
    public function __construct($AttributeType = null)
    {
      $this->AttributeType = $AttributeType;
    }

    /**
     * @return string
     */
    public function getAttributeType()
    {
      return $this->AttributeType;
    }

    /**
     * @param string $AttributeType
     * @return \Google\AdsApi\AdWords\v201601\o\Attribute
     */
    public function setAttributeType($AttributeType)
    {
      $this->AttributeType = $AttributeType;
      return $this;
    }

}
