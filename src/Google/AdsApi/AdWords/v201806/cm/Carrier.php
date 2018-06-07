<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Carrier extends \Google\AdsApi\AdWords\v201806\cm\Criterion
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $name
     * @param string $countryCode
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $name = null, $countryCode = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->name = $name;
      $this->countryCode = $countryCode;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Carrier
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \Google\AdsApi\AdWords\v201806\cm\Carrier
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

}
