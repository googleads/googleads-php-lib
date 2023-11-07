<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldParameter
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $isOptional
     */
    protected $isOptional = null;

    /**
     * @param string $name
     * @param boolean $isOptional
     */
    public function __construct($name = null, $isOptional = null)
    {
      $this->name = $name;
      $this->isOptional = $isOptional;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v202311\YieldParameter
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOptional()
    {
      return $this->isOptional;
    }

    /**
     * @param boolean $isOptional
     * @return \Google\AdsApi\AdManager\v202311\YieldParameter
     */
    public function setIsOptional($isOptional)
    {
      $this->isOptional = $isOptional;
      return $this;
    }

}
