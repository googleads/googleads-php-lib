<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ParentCriterion extends \Google\AdsApi\AdWords\v201601\cm\Criterion
{

    /**
     * @var string $parentType
     */
    protected $parentType = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $parentType
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $parentType = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->parentType = $parentType;
    }

    /**
     * @return string
     */
    public function getParentType()
    {
      return $this->parentType;
    }

    /**
     * @param string $parentType
     * @return \Google\AdsApi\AdWords\v201601\cm\ParentCriterion
     */
    public function setParentType($parentType)
    {
      $this->parentType = $parentType;
      return $this;
    }

}
