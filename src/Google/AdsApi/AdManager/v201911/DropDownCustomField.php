<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DropDownCustomField extends \Google\AdsApi\AdManager\v201911\CustomField
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\CustomFieldOption[] $options
     */
    protected $options = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param boolean $isActive
     * @param string $entityType
     * @param string $dataType
     * @param string $visibility
     * @param \Google\AdsApi\AdManager\v201911\CustomFieldOption[] $options
     */
    public function __construct($id = null, $name = null, $description = null, $isActive = null, $entityType = null, $dataType = null, $visibility = null, array $options = null)
    {
      parent::__construct($id, $name, $description, $isActive, $entityType, $dataType, $visibility);
      $this->options = $options;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\CustomFieldOption[]
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\CustomFieldOption[]|null $options
     * @return \Google\AdsApi\AdManager\v201911\DropDownCustomField
     */
    public function setOptions(array $options = null)
    {
      $this->options = $options;
      return $this;
    }

}
