<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupExtensionSettingReturnValue extends \Google\AdsApi\AdWords\v201609\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\AdGroupExtensionSetting[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201609\cm\AdGroupExtensionSetting[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\AdGroupExtensionSetting[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\AdGroupExtensionSetting[] $value
     * @return \Google\AdsApi\AdWords\v201609\cm\AdGroupExtensionSettingReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
