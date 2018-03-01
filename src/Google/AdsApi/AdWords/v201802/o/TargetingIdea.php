<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingIdea
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\o\Type_AttributeMapEntry[] $data
     */
    protected $data = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\o\Type_AttributeMapEntry[] $data
     */
    public function __construct(array $data = null)
    {
      $this->data = $data;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\o\Type_AttributeMapEntry[]
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\o\Type_AttributeMapEntry[] $data
     * @return \Google\AdsApi\AdWords\v201802\o\TargetingIdea
     */
    public function setData(array $data)
    {
      $this->data = $data;
      return $this;
    }

}
