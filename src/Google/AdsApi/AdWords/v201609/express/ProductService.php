<?php

namespace Google\AdsApi\AdWords\v201609\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductService extends \Google\AdsApi\AdWords\v201609\cm\Criterion
{

    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var string $locale
     */
    protected $locale = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $text
     * @param string $locale
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $text = null, $locale = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->text = $text;
      $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return \Google\AdsApi\AdWords\v201609\express\ProductService
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param string $locale
     * @return \Google\AdsApi\AdWords\v201609\express\ProductService
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

}
