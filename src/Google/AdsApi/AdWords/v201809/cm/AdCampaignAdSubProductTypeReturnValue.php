<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdCampaignAdSubProductTypeReturnValue extends \Google\AdsApi\AdWords\v201809\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AdCampaignAdSubProductType[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201809\cm\AdCampaignAdSubProductType[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCampaignAdSubProductType[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AdCampaignAdSubProductType[] $value
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCampaignAdSubProductTypeReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
