<?php

namespace Google\AdsApi\AdWords\v201806\cm;


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
     * @var \Google\AdsApi\AdWords\v201806\cm\LabelAttribute $attribute
     */
    protected $attribute = null;

    /**
     * @var string $LabelType
     */
    protected $LabelType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['Label.Type' => 'LabelType'];

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201806\cm\LabelAttribute $attribute
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Label
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Label
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Label
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\LabelAttribute
     */
    public function getAttribute()
    {
      return $this->attribute;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\LabelAttribute $attribute
     * @return \Google\AdsApi\AdWords\v201806\cm\Label
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Label
     */
    public function setLabelType($LabelType)
    {
      $this->LabelType = $LabelType;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Label
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
