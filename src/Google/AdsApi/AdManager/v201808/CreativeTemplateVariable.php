<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class CreativeTemplateVariable
{

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $uniqueName
     */
    protected $uniqueName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $isRequired
     */
    protected $isRequired = null;

    /**
     * @param string $label
     * @param string $uniqueName
     * @param string $description
     * @param boolean $isRequired
     */
    public function __construct($label = null, $uniqueName = null, $description = null, $isRequired = null)
    {
      $this->label = $label;
      $this->uniqueName = $uniqueName;
      $this->description = $description;
      $this->isRequired = $isRequired;
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
     * @return \Google\AdsApi\AdManager\v201808\CreativeTemplateVariable
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getUniqueName()
    {
      return $this->uniqueName;
    }

    /**
     * @param string $uniqueName
     * @return \Google\AdsApi\AdManager\v201808\CreativeTemplateVariable
     */
    public function setUniqueName($uniqueName)
    {
      $this->uniqueName = $uniqueName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdManager\v201808\CreativeTemplateVariable
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRequired()
    {
      return $this->isRequired;
    }

    /**
     * @param boolean $isRequired
     * @return \Google\AdsApi\AdManager\v201808\CreativeTemplateVariable
     */
    public function setIsRequired($isRequired)
    {
      $this->isRequired = $isRequired;
      return $this;
    }

}
