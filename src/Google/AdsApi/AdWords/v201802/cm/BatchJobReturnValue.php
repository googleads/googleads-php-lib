<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BatchJobReturnValue extends \Google\AdsApi\AdWords\v201802\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\BatchJob[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201802\cm\BatchJob[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\BatchJob[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\BatchJob[] $value
     * @return \Google\AdsApi\AdWords\v201802\cm\BatchJobReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
