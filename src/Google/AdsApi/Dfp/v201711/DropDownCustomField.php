<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DropDownCustomField extends \Google\AdsApi\Dfp\v201711\CustomField
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\CustomFieldOption[] $options
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
     * @param \Google\AdsApi\Dfp\v201711\CustomFieldOption[] $options
     */
    public function __construct($id = null, $name = null, $description = null, $isActive = null, $entityType = null, $dataType = null, $visibility = null, array $options = null)
    {
      parent::__construct($id, $name, $description, $isActive, $entityType, $dataType, $visibility);
      $this->options = $options;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\CustomFieldOption[]
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\CustomFieldOption[] $options
     * @return \Google\AdsApi\Dfp\v201711\DropDownCustomField
     */
    public function setOptions(array $options)
    {
      $this->options = $options;
      return $this;
    }

}
