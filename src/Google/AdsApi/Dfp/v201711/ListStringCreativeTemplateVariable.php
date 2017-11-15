<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ListStringCreativeTemplateVariable extends \Google\AdsApi\Dfp\v201711\StringCreativeTemplateVariable
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\ListStringCreativeTemplateVariableVariableChoice[] $choices
     */
    protected $choices = null;

    /**
     * @var boolean $allowOtherChoice
     */
    protected $allowOtherChoice = null;

    /**
     * @param string $label
     * @param string $uniqueName
     * @param string $description
     * @param boolean $isRequired
     * @param string $defaultValue
     * @param \Google\AdsApi\Dfp\v201711\ListStringCreativeTemplateVariableVariableChoice[] $choices
     * @param boolean $allowOtherChoice
     */
    public function __construct($label = null, $uniqueName = null, $description = null, $isRequired = null, $defaultValue = null, array $choices = null, $allowOtherChoice = null)
    {
      parent::__construct($label, $uniqueName, $description, $isRequired, $defaultValue);
      $this->choices = $choices;
      $this->allowOtherChoice = $allowOtherChoice;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\ListStringCreativeTemplateVariableVariableChoice[]
     */
    public function getChoices()
    {
      return $this->choices;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\ListStringCreativeTemplateVariableVariableChoice[] $choices
     * @return \Google\AdsApi\Dfp\v201711\ListStringCreativeTemplateVariable
     */
    public function setChoices(array $choices)
    {
      $this->choices = $choices;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowOtherChoice()
    {
      return $this->allowOtherChoice;
    }

    /**
     * @param boolean $allowOtherChoice
     * @return \Google\AdsApi\Dfp\v201711\ListStringCreativeTemplateVariable
     */
    public function setAllowOtherChoice($allowOtherChoice)
    {
      $this->allowOtherChoice = $allowOtherChoice;
      return $this;
    }

}
