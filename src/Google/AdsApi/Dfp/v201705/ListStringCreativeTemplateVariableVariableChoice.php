<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ListStringCreativeTemplateVariableVariableChoice
{

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $label
     * @param string $value
     */
    public function __construct($label = null, $value = null)
    {
      $this->label = $label;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \Google\AdsApi\Dfp\v201705\ListStringCreativeTemplateVariableVariableChoice
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
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
     * @return \Google\AdsApi\Dfp\v201705\ListStringCreativeTemplateVariableVariableChoice
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
