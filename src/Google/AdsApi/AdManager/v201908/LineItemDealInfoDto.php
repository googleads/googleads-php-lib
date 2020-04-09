<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemDealInfoDto
{

    /**
     * @var int $externalDealId
     */
    protected $externalDealId = null;

    /**
     * @param int $externalDealId
     */
    public function __construct($externalDealId = null)
    {
      $this->externalDealId = $externalDealId;
    }

    /**
     * @return int
     */
    public function getExternalDealId()
    {
      return $this->externalDealId;
    }

    /**
     * @param int $externalDealId
     * @return \Google\AdsApi\AdManager\v201908\LineItemDealInfoDto
     */
    public function setExternalDealId($externalDealId)
    {
      $this->externalDealId = (!is_null($externalDealId) && PHP_INT_SIZE === 4)
          ? floatval($externalDealId) : $externalDealId;
      return $this;
    }

}
