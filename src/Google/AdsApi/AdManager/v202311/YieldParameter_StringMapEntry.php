<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldParameter_StringMapEntry
{

    /**
     * @var \Google\AdsApi\AdManager\v202311\YieldParameter $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdManager\v202311\YieldParameter $key
     * @param string $value
     */
    public function __construct($key = null, $value = null)
    {
      $this->key = $key;
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202311\YieldParameter
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202311\YieldParameter $key
     * @return \Google\AdsApi\AdManager\v202311\YieldParameter_StringMapEntry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Google\AdsApi\AdManager\v202311\YieldParameter_StringMapEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
