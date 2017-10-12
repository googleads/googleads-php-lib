<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TemplateElementField
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $fieldText
     */
    protected $fieldText = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Media $fieldMedia
     */
    protected $fieldMedia = null;

    /**
     * @param string $name
     * @param string $type
     * @param string $fieldText
     * @param \Google\AdsApi\AdWords\v201710\cm\Media $fieldMedia
     */
    public function __construct($name = null, $type = null, $fieldText = null, $fieldMedia = null)
    {
      $this->name = $name;
      $this->type = $type;
      $this->fieldText = $fieldText;
      $this->fieldMedia = $fieldMedia;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\TemplateElementField
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdWords\v201710\cm\TemplateElementField
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldText()
    {
      return $this->fieldText;
    }

    /**
     * @param string $fieldText
     * @return \Google\AdsApi\AdWords\v201710\cm\TemplateElementField
     */
    public function setFieldText($fieldText)
    {
      $this->fieldText = $fieldText;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Media
     */
    public function getFieldMedia()
    {
      return $this->fieldMedia;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Media $fieldMedia
     * @return \Google\AdsApi\AdWords\v201710\cm\TemplateElementField
     */
    public function setFieldMedia($fieldMedia)
    {
      $this->fieldMedia = $fieldMedia;
      return $this;
    }

}
