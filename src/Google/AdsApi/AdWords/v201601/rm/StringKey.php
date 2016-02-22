<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class StringKey
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
     * @return \Google\AdsApi\AdWords\v201601\rm\StringKey
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
