<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Technology
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct($id = null, $name = null)
    {
      $this->id = $id;
      $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v202202\Technology
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v202202\Technology
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
