<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StringCreativeTemplateVariableValue extends \Google\AdsApi\AdManager\v201808\BaseCreativeTemplateVariableValue
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $uniqueName
     * @param string $value
     */
    public function __construct($uniqueName = null, $value = null)
    {
      parent::__construct($uniqueName);
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Google\AdsApi\AdManager\v201808\StringCreativeTemplateVariableValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
