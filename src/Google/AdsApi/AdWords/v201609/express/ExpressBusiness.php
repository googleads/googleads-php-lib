<?php

namespace Google\AdsApi\AdWords\v201609\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExpressBusiness
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
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $website
     */
    protected $website = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param string $website
     */
    public function __construct($id = null, $name = null, $status = null, $website = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->website = $website;
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
     * @return \Google\AdsApi\AdWords\v201609\express\ExpressBusiness
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Google\AdsApi\AdWords\v201609\express\ExpressBusiness
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201609\express\ExpressBusiness
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
      return $this->website;
    }

    /**
     * @param string $website
     * @return \Google\AdsApi\AdWords\v201609\express\ExpressBusiness
     */
    public function setWebsite($website)
    {
      $this->website = $website;
      return $this;
    }

}
