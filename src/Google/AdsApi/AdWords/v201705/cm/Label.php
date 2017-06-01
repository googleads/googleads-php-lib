<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Label
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\LabelAttribute $attribute
     */
    protected $attribute = null;

    /**
     * @var string $LabelType
     */
    protected $LabelType = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201705\cm\LabelAttribute $attribute
     * @param string $LabelType
     */
    public function __construct($id = null, $name = null, $status = null, $attribute = null, $LabelType = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->attribute = $attribute;
      $this->LabelType = $LabelType;
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
     * @return \Google\AdsApi\AdWords\v201705\cm\Label
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Google\AdsApi\AdWords\v201705\cm\Label
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201705\cm\Label
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\LabelAttribute
     */
    public function getAttribute()
    {
      return $this->attribute;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\LabelAttribute $attribute
     * @return \Google\AdsApi\AdWords\v201705\cm\Label
     */
    public function setAttribute($attribute)
    {
      $this->attribute = $attribute;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelType()
    {
      return $this->LabelType;
    }

    /**
     * @param string $LabelType
     * @return \Google\AdsApi\AdWords\v201705\cm\Label
     */
    public function setLabelType($LabelType)
    {
      $this->LabelType = $LabelType;
      return $this;
    }

}
