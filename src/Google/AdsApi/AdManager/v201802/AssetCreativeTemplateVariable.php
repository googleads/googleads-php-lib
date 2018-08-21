<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AssetCreativeTemplateVariable extends \Google\AdsApi\AdManager\v201802\CreativeTemplateVariable
{

    /**
     * @var string[] $mimeTypes
     */
    protected $mimeTypes = null;

    /**
     * @param string $label
     * @param string $uniqueName
     * @param string $description
     * @param boolean $isRequired
     * @param string[] $mimeTypes
     */
    public function __construct($label = null, $uniqueName = null, $description = null, $isRequired = null, array $mimeTypes = null)
    {
      parent::__construct($label, $uniqueName, $description, $isRequired);
      $this->mimeTypes = $mimeTypes;
    }

    /**
     * @return string[]
     */
    public function getMimeTypes()
    {
      return $this->mimeTypes;
    }

    /**
     * @param string[] $mimeTypes
     * @return \Google\AdsApi\AdManager\v201802\AssetCreativeTemplateVariable
     */
    public function setMimeTypes(array $mimeTypes)
    {
      $this->mimeTypes = $mimeTypes;
      return $this;
    }

}
