<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedReturnValue extends \Google\AdsApi\AdWords\v201802\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Feed[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201802\cm\Feed[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Feed[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Feed[] $value
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
