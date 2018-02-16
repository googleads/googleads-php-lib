<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProspectiveLineItem
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\LineItem $lineItem
     */
    protected $lineItem = null;

    /**
     * @var int $advertiserId
     */
    protected $advertiserId = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\LineItem $lineItem
     * @param int $advertiserId
     */
    public function __construct($lineItem = null, $advertiserId = null)
    {
      $this->lineItem = $lineItem;
      $this->advertiserId = $advertiserId;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\LineItem
     */
    public function getLineItem()
    {
      return $this->lineItem;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\LineItem $lineItem
     * @return \Google\AdsApi\Dfp\v201708\ProspectiveLineItem
     */
    public function setLineItem($lineItem)
    {
      $this->lineItem = $lineItem;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
      return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return \Google\AdsApi\Dfp\v201708\ProspectiveLineItem
     */
    public function setAdvertiserId($advertiserId)
    {
      $this->advertiserId = (!is_null($advertiserId) && PHP_INT_SIZE === 4)
          ? floatval($advertiserId) : $advertiserId;
      return $this;
    }

}
