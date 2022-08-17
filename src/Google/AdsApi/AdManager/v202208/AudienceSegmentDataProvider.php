<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentDataProvider
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
     * @return \Google\AdsApi\AdManager\v202208\AudienceSegmentDataProvider
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
