<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativePushOptions
{

    /**
     * @var int $lineItemId
     */
    protected $lineItemId = null;

    /**
     * @var int $creativeId
     */
    protected $creativeId = null;

    /**
     * @var int $nativeStyleId
     */
    protected $nativeStyleId = null;

    /**
     * @param int $lineItemId
     * @param int $creativeId
     * @param int $nativeStyleId
     */
    public function __construct($lineItemId = null, $creativeId = null, $nativeStyleId = null)
    {
      $this->lineItemId = $lineItemId;
      $this->creativeId = $creativeId;
      $this->nativeStyleId = $nativeStyleId;
    }

    /**
     * @return int
     */
    public function getLineItemId()
    {
      return $this->lineItemId;
    }

    /**
     * @param int $lineItemId
     * @return \Google\AdsApi\AdManager\v202408\CreativePushOptions
     */
    public function setLineItemId($lineItemId)
    {
      $this->lineItemId = (!is_null($lineItemId) && PHP_INT_SIZE === 4)
          ? floatval($lineItemId) : $lineItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreativeId()
    {
      return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return \Google\AdsApi\AdManager\v202408\CreativePushOptions
     */
    public function setCreativeId($creativeId)
    {
      $this->creativeId = (!is_null($creativeId) && PHP_INT_SIZE === 4)
          ? floatval($creativeId) : $creativeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNativeStyleId()
    {
      return $this->nativeStyleId;
    }

    /**
     * @param int $nativeStyleId
     * @return \Google\AdsApi\AdManager\v202408\CreativePushOptions
     */
    public function setNativeStyleId($nativeStyleId)
    {
      $this->nativeStyleId = (!is_null($nativeStyleId) && PHP_INT_SIZE === 4)
          ? floatval($nativeStyleId) : $nativeStyleId;
      return $this;
    }

}
