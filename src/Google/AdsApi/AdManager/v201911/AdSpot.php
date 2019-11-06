<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdSpot
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
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var boolean $customSpot
     */
    protected $customSpot = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $displayName
     * @param boolean $customSpot
     */
    public function __construct($id = null, $name = null, $displayName = null, $customSpot = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->displayName = $displayName;
      $this->customSpot = $customSpot;
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
     * @return \Google\AdsApi\AdManager\v201911\AdSpot
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
     * @return \Google\AdsApi\AdManager\v201911\AdSpot
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Google\AdsApi\AdManager\v201911\AdSpot
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomSpot()
    {
      return $this->customSpot;
    }

    /**
     * @param boolean $customSpot
     * @return \Google\AdsApi\AdManager\v201911\AdSpot
     */
    public function setCustomSpot($customSpot)
    {
      $this->customSpot = $customSpot;
      return $this;
    }

}
