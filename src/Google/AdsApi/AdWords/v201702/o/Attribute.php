<?php

namespace Google\AdsApi\AdWords\v201702\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
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
     * @return \Google\AdsApi\AdWords\v201702\o\Attribute
     */
    public function setAttributeType($AttributeType)
    {
      $this->AttributeType = $AttributeType;
      return $this;
    }

}
