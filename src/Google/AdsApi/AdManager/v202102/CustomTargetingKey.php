<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomTargetingKey
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
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $valueDeclarationType
     */
    protected $valueDeclarationType = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $reportableType
     */
    protected $reportableType = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $displayName
     * @param string $type
     * @param string $valueDeclarationType
     * @param string $status
     * @param string $reportableType
     */
    public function __construct($id = null, $name = null, $displayName = null, $type = null, $valueDeclarationType = null, $status = null, $reportableType = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->displayName = $displayName;
      $this->type = $type;
      $this->valueDeclarationType = $valueDeclarationType;
      $this->status = $status;
      $this->reportableType = $reportableType;
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
     * @return \Google\AdsApi\AdManager\v202102\CustomTargetingKey
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
     * @return \Google\AdsApi\AdManager\v202102\CustomTargetingKey
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
     * @return \Google\AdsApi\AdManager\v202102\CustomTargetingKey
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
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
     * @return \Google\AdsApi\AdManager\v202102\CustomTargetingKey
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueDeclarationType()
    {
      return $this->valueDeclarationType;
    }

    /**
     * @param string $valueDeclarationType
     * @return \Google\AdsApi\AdManager\v202102\CustomTargetingKey
     */
    public function setValueDeclarationType($valueDeclarationType)
    {
      $this->valueDeclarationType = $valueDeclarationType;
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
     * @return \Google\AdsApi\AdManager\v202102\CustomTargetingKey
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportableType()
    {
      return $this->reportableType;
    }

    /**
     * @param string $reportableType
     * @return \Google\AdsApi\AdManager\v202102\CustomTargetingKey
     */
    public function setReportableType($reportableType)
    {
      $this->reportableType = $reportableType;
      return $this;
    }

}
