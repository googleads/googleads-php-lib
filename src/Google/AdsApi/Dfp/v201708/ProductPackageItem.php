<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageItem
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var int $productPackageId
     */
    protected $productPackageId = null;

    /**
     * @var boolean $isMandatory
     */
    protected $isMandatory = null;

    /**
     * @var string $archiveStatus
     */
    protected $archiveStatus = null;

    /**
     * @param int $id
     * @param int $productId
     * @param int $productPackageId
     * @param boolean $isMandatory
     * @param string $archiveStatus
     */
    public function __construct($id = null, $productId = null, $productPackageId = null, $isMandatory = null, $archiveStatus = null)
    {
      $this->id = $id;
      $this->productId = $productId;
      $this->productPackageId = $productPackageId;
      $this->isMandatory = $isMandatory;
      $this->archiveStatus = $archiveStatus;
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
     * @return \Google\AdsApi\Dfp\v201708\ProductPackageItem
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param int $productId
     * @return \Google\AdsApi\Dfp\v201708\ProductPackageItem
     */
    public function setProductId($productId)
    {
      $this->productId = (!is_null($productId) && PHP_INT_SIZE === 4)
          ? floatval($productId) : $productId;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductPackageId()
    {
      return $this->productPackageId;
    }

    /**
     * @param int $productPackageId
     * @return \Google\AdsApi\Dfp\v201708\ProductPackageItem
     */
    public function setProductPackageId($productPackageId)
    {
      $this->productPackageId = (!is_null($productPackageId) && PHP_INT_SIZE === 4)
          ? floatval($productPackageId) : $productPackageId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMandatory()
    {
      return $this->isMandatory;
    }

    /**
     * @param boolean $isMandatory
     * @return \Google\AdsApi\Dfp\v201708\ProductPackageItem
     */
    public function setIsMandatory($isMandatory)
    {
      $this->isMandatory = $isMandatory;
      return $this;
    }

    /**
     * @return string
     */
    public function getArchiveStatus()
    {
      return $this->archiveStatus;
    }

    /**
     * @param string $archiveStatus
     * @return \Google\AdsApi\Dfp\v201708\ProductPackageItem
     */
    public function setArchiveStatus($archiveStatus)
    {
      $this->archiveStatus = $archiveStatus;
      return $this;
    }

}
