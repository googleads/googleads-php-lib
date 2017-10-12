<?php

namespace Google\AdsApi\AdWords\v201710\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateKey
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $name
     */
    public function __construct($name = null)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\AdWords\v201710\rm\DateKey
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
