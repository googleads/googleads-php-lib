<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class Platform extends \Google\AdsApi\AdWords\v201601\cm\Criterion
{

    /**
     * @var string $platformName
     */
    protected $platformName = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $platformName
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $platformName = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->platformName = $platformName;
    }

    /**
     * @return string
     */
    public function getPlatformName()
    {
      return $this->platformName;
    }

    /**
     * @param string $platformName
     * @return \Google\AdsApi\AdWords\v201601\cm\Platform
     */
    public function setPlatformName($platformName)
    {
      $this->platformName = $platformName;
      return $this;
    }

}
