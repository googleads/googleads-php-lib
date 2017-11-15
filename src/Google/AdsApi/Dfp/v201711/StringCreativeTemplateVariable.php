<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StringCreativeTemplateVariable extends \Google\AdsApi\Dfp\v201711\CreativeTemplateVariable
{

    /**
     * @var string $defaultValue
     */
    protected $defaultValue = null;

    /**
     * @param string $label
     * @param string $uniqueName
     * @param string $description
     * @param boolean $isRequired
     * @param string $defaultValue
     */
    public function __construct($label = null, $uniqueName = null, $description = null, $isRequired = null, $defaultValue = null)
    {
      parent::__construct($label, $uniqueName, $description, $isRequired);
      $this->defaultValue = $defaultValue;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
      return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     * @return \Google\AdsApi\Dfp\v201711\StringCreativeTemplateVariable
     */
    public function setDefaultValue($defaultValue)
    {
      $this->defaultValue = $defaultValue;
      return $this;
    }

}
