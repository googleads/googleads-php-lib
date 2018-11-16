<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductImage
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Image $productImage
     */
    protected $productImage = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\DisplayCallToAction $displayCallToAction
     */
    protected $displayCallToAction = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $productImage
     * @param string $description
     * @param \Google\AdsApi\AdWords\v201802\cm\DisplayCallToAction $displayCallToAction
     */
    public function __construct($productImage = null, $description = null, $displayCallToAction = null)
    {
      $this->productImage = $productImage;
      $this->description = $description;
      $this->displayCallToAction = $displayCallToAction;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Image
     */
    public function getProductImage()
    {
      return $this->productImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $productImage
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductImage
     */
    public function setProductImage($productImage)
    {
      $this->productImage = $productImage;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductImage
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\DisplayCallToAction
     */
    public function getDisplayCallToAction()
    {
      return $this->displayCallToAction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\DisplayCallToAction $displayCallToAction
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductImage
     */
    public function setDisplayCallToAction($displayCallToAction)
    {
      $this->displayCallToAction = $displayCallToAction;
      return $this;
    }

}
