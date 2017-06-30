<?php

namespace Google\AdsApi\AdWords\v201702\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SeedAdGroupIdSearchParameter extends \Google\AdsApi\AdWords\v201702\o\SearchParameter
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @param string $SearchParameterType
     * @param int $adGroupId
     */
    public function __construct($SearchParameterType = null, $adGroupId = null)
    {
      parent::__construct($SearchParameterType);
      $this->adGroupId = $adGroupId;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201702\o\SeedAdGroupIdSearchParameter
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
    }

}
