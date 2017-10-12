<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OperatingSystemVersion extends \Google\AdsApi\AdWords\v201710\cm\Criterion
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $osMajorVersion
     */
    protected $osMajorVersion = null;

    /**
     * @var int $osMinorVersion
     */
    protected $osMinorVersion = null;

    /**
     * @var string $operatorType
     */
    protected $operatorType = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $name
     * @param int $osMajorVersion
     * @param int $osMinorVersion
     * @param string $operatorType
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $name = null, $osMajorVersion = null, $osMinorVersion = null, $operatorType = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->name = $name;
      $this->osMajorVersion = $osMajorVersion;
      $this->osMinorVersion = $osMinorVersion;
      $this->operatorType = $operatorType;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\OperatingSystemVersion
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getOsMajorVersion()
    {
      return $this->osMajorVersion;
    }

    /**
     * @param int $osMajorVersion
     * @return \Google\AdsApi\AdWords\v201710\cm\OperatingSystemVersion
     */
    public function setOsMajorVersion($osMajorVersion)
    {
      $this->osMajorVersion = $osMajorVersion;
      return $this;
    }

    /**
     * @return int
     */
    public function getOsMinorVersion()
    {
      return $this->osMinorVersion;
    }

    /**
     * @param int $osMinorVersion
     * @return \Google\AdsApi\AdWords\v201710\cm\OperatingSystemVersion
     */
    public function setOsMinorVersion($osMinorVersion)
    {
      $this->osMinorVersion = $osMinorVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatorType()
    {
      return $this->operatorType;
    }

    /**
     * @param string $operatorType
     * @return \Google\AdsApi\AdWords\v201710\cm\OperatingSystemVersion
     */
    public function setOperatorType($operatorType)
    {
      $this->operatorType = $operatorType;
      return $this;
    }

}
