<?php

namespace Google\AdsApi\AdWords\v201601\o;

class SeedAdGroupIdSearchParameter extends \Google\AdsApi\AdWords\v201601\o\SearchParameter
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
     * @return \Google\AdsApi\AdWords\v201601\o\SeedAdGroupIdSearchParameter
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

}
