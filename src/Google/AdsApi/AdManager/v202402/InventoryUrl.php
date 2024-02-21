<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryUrl
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @param int $id
     */
    public function __construct($id = null)
    {
      $this->id = $id;
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
     * @return \Google\AdsApi\AdManager\v202402\InventoryUrl
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

}
