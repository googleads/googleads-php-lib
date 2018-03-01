<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReportDefinitionField
{

    /**
     * @var string $fieldName
     */
    protected $fieldName = null;

    /**
     * @var string $displayFieldName
     */
    protected $displayFieldName = null;

    /**
     * @var string $xmlAttributeName
     */
    protected $xmlAttributeName = null;

    /**
     * @var string $fieldType
     */
    protected $fieldType = null;

    /**
     * @var string $fieldBehavior
     */
    protected $fieldBehavior = null;

    /**
     * @var string[] $enumValues
     */
    protected $enumValues = null;

    /**
     * @var boolean $canSelect
     */
    protected $canSelect = null;

    /**
     * @var boolean $canFilter
     */
    protected $canFilter = null;

    /**
     * @var boolean $isEnumType
     */
    protected $isEnumType = null;

    /**
     * @var boolean $isBeta
     */
    protected $isBeta = null;

    /**
     * @var boolean $isZeroRowCompatible
     */
    protected $isZeroRowCompatible = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\EnumValuePair[] $enumValuePairs
     */
    protected $enumValuePairs = null;

    /**
     * @var string[] $exclusiveFields
     */
    protected $exclusiveFields = null;

    /**
     * @param string $fieldName
     * @param string $displayFieldName
     * @param string $xmlAttributeName
     * @param string $fieldType
     * @param string $fieldBehavior
     * @param string[] $enumValues
     * @param boolean $canSelect
     * @param boolean $canFilter
     * @param boolean $isEnumType
     * @param boolean $isBeta
     * @param boolean $isZeroRowCompatible
     * @param \Google\AdsApi\AdWords\v201802\cm\EnumValuePair[] $enumValuePairs
     * @param string[] $exclusiveFields
     */
    public function __construct($fieldName = null, $displayFieldName = null, $xmlAttributeName = null, $fieldType = null, $fieldBehavior = null, array $enumValues = null, $canSelect = null, $canFilter = null, $isEnumType = null, $isBeta = null, $isZeroRowCompatible = null, array $enumValuePairs = null, array $exclusiveFields = null)
    {
      $this->fieldName = $fieldName;
      $this->displayFieldName = $displayFieldName;
      $this->xmlAttributeName = $xmlAttributeName;
      $this->fieldType = $fieldType;
      $this->fieldBehavior = $fieldBehavior;
      $this->enumValues = $enumValues;
      $this->canSelect = $canSelect;
      $this->canFilter = $canFilter;
      $this->isEnumType = $isEnumType;
      $this->isBeta = $isBeta;
      $this->isZeroRowCompatible = $isZeroRowCompatible;
      $this->enumValuePairs = $enumValuePairs;
      $this->exclusiveFields = $exclusiveFields;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setFieldName($fieldName)
    {
      $this->fieldName = $fieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayFieldName()
    {
      return $this->displayFieldName;
    }

    /**
     * @param string $displayFieldName
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setDisplayFieldName($displayFieldName)
    {
      $this->displayFieldName = $displayFieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getXmlAttributeName()
    {
      return $this->xmlAttributeName;
    }

    /**
     * @param string $xmlAttributeName
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setXmlAttributeName($xmlAttributeName)
    {
      $this->xmlAttributeName = $xmlAttributeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
      return $this->fieldType;
    }

    /**
     * @param string $fieldType
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setFieldType($fieldType)
    {
      $this->fieldType = $fieldType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldBehavior()
    {
      return $this->fieldBehavior;
    }

    /**
     * @param string $fieldBehavior
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setFieldBehavior($fieldBehavior)
    {
      $this->fieldBehavior = $fieldBehavior;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getEnumValues()
    {
      return $this->enumValues;
    }

    /**
     * @param string[] $enumValues
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setEnumValues(array $enumValues)
    {
      $this->enumValues = $enumValues;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanSelect()
    {
      return $this->canSelect;
    }

    /**
     * @param boolean $canSelect
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setCanSelect($canSelect)
    {
      $this->canSelect = $canSelect;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanFilter()
    {
      return $this->canFilter;
    }

    /**
     * @param boolean $canFilter
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setCanFilter($canFilter)
    {
      $this->canFilter = $canFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEnumType()
    {
      return $this->isEnumType;
    }

    /**
     * @param boolean $isEnumType
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setIsEnumType($isEnumType)
    {
      $this->isEnumType = $isEnumType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBeta()
    {
      return $this->isBeta;
    }

    /**
     * @param boolean $isBeta
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setIsBeta($isBeta)
    {
      $this->isBeta = $isBeta;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsZeroRowCompatible()
    {
      return $this->isZeroRowCompatible;
    }

    /**
     * @param boolean $isZeroRowCompatible
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setIsZeroRowCompatible($isZeroRowCompatible)
    {
      $this->isZeroRowCompatible = $isZeroRowCompatible;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\EnumValuePair[]
     */
    public function getEnumValuePairs()
    {
      return $this->enumValuePairs;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\EnumValuePair[] $enumValuePairs
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setEnumValuePairs(array $enumValuePairs)
    {
      $this->enumValuePairs = $enumValuePairs;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getExclusiveFields()
    {
      return $this->exclusiveFields;
    }

    /**
     * @param string[] $exclusiveFields
     * @return \Google\AdsApi\AdWords\v201802\cm\ReportDefinitionField
     */
    public function setExclusiveFields(array $exclusiveFields)
    {
      $this->exclusiveFields = $exclusiveFields;
      return $this;
    }

}
