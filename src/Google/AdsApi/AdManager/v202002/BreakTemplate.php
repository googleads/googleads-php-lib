<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BreakTemplate
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var boolean $customTemplate
     */
    protected $customTemplate = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\BreakTemplateBreakTemplateMember[] $breakTemplateMembers
     */
    protected $breakTemplateMembers = null;

    /**
     * @param int $id
     * @param boolean $customTemplate
     * @param string $name
     * @param string $displayName
     * @param \Google\AdsApi\AdManager\v202002\BreakTemplateBreakTemplateMember[] $breakTemplateMembers
     */
    public function __construct($id = null, $customTemplate = null, $name = null, $displayName = null, array $breakTemplateMembers = null)
    {
      $this->id = $id;
      $this->customTemplate = $customTemplate;
      $this->name = $name;
      $this->displayName = $displayName;
      $this->breakTemplateMembers = $breakTemplateMembers;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplate
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomTemplate()
    {
      return $this->customTemplate;
    }

    /**
     * @param boolean $customTemplate
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplate
     */
    public function setCustomTemplate($customTemplate)
    {
      $this->customTemplate = $customTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplate
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplate
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplateBreakTemplateMember[]
     */
    public function getBreakTemplateMembers()
    {
      return $this->breakTemplateMembers;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\BreakTemplateBreakTemplateMember[]|null $breakTemplateMembers
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplate
     */
    public function setBreakTemplateMembers(array $breakTemplateMembers = null)
    {
      $this->breakTemplateMembers = $breakTemplateMembers;
      return $this;
    }

}
