<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SharedBiddingStrategy
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\BiddingScheme $biddingScheme
     */
    protected $biddingScheme = null;

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
     * @var string $type
     */
    protected $type = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\BiddingScheme $biddingScheme
     * @param int $id
     * @param string $name
     * @param string $status
     * @param string $type
     */
    public function __construct($biddingScheme = null, $id = null, $name = null, $status = null, $type = null)
    {
      $this->biddingScheme = $biddingScheme;
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->type = $type;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\BiddingScheme
     */
    public function getBiddingScheme()
    {
      return $this->biddingScheme;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\BiddingScheme $biddingScheme
     * @return \Google\AdsApi\AdWords\v201806\cm\SharedBiddingStrategy
     */
    public function setBiddingScheme($biddingScheme)
    {
      $this->biddingScheme = $biddingScheme;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\SharedBiddingStrategy
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
     * @return \Google\AdsApi\AdWords\v201806\cm\SharedBiddingStrategy
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
     * @return \Google\AdsApi\AdWords\v201806\cm\SharedBiddingStrategy
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\SharedBiddingStrategy
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
