<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdCustomizerFeedAttribute
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
     * @var string $type
     */
    protected $type = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $type
     */
    public function __construct($id = null, $name = null, $type = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->type = $type;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCustomizerFeedAttribute
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
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCustomizerFeedAttribute
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCustomizerFeedAttribute
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
