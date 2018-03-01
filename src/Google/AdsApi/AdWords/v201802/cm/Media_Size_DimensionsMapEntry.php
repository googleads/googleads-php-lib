<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Media_Size_DimensionsMapEntry
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Dimensions $value
     */
    protected $value = null;

    /**
     * @param string $key
     * @param \Google\AdsApi\AdWords\v201802\cm\Dimensions $value
     */
    public function __construct($key = null, $value = null)
    {
      $this->key = $key;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \Google\AdsApi\AdWords\v201802\cm\Media_Size_DimensionsMapEntry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Dimensions
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Dimensions $value
     * @return \Google\AdsApi\AdWords\v201802\cm\Media_Size_DimensionsMapEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
