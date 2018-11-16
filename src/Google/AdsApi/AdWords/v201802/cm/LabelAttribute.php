<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LabelAttribute
{

    /**
     * @var string $LabelAttributeType
     */
    protected $LabelAttributeType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['LabelAttribute.Type' => 'LabelAttributeType'];

    /**
     * @param string $LabelAttributeType
     */
    public function __construct($LabelAttributeType = null)
    {
      $this->LabelAttributeType = $LabelAttributeType;
    }

    /**
     * @return string
     */
    public function getLabelAttributeType()
    {
      return $this->LabelAttributeType;
    }

    /**
     * @param string $LabelAttributeType
     * @return \Google\AdsApi\AdWords\v201802\cm\LabelAttribute
     */
    public function setLabelAttributeType($LabelAttributeType)
    {
      $this->LabelAttributeType = $LabelAttributeType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201802\cm\LabelAttribute
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
