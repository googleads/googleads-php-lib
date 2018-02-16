<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseRate
{

    /**
     * @var int $rateCardId
     */
    protected $rateCardId = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @param int $rateCardId
     * @param int $id
     */
    public function __construct($rateCardId = null, $id = null)
    {
      $this->rateCardId = $rateCardId;
      $this->id = $id;
    }

    /**
     * @return int
     */
    public function getRateCardId()
    {
      return $this->rateCardId;
    }

    /**
     * @param int $rateCardId
     * @return \Google\AdsApi\Dfp\v201705\BaseRate
     */
    public function setRateCardId($rateCardId)
    {
      $this->rateCardId = (!is_null($rateCardId) && PHP_INT_SIZE === 4)
          ? floatval($rateCardId) : $rateCardId;
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
     * @return \Google\AdsApi\Dfp\v201705\BaseRate
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

}
