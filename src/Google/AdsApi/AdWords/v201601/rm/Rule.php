<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class Rule
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\rm\RuleItemGroup[] $groups
     */
    protected $groups = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\RuleItemGroup[] $groups
     */
    public function __construct(array $groups = null)
    {
      $this->groups = $groups;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\rm\RuleItemGroup[]
     */
    public function getGroups()
    {
      return $this->groups;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\RuleItemGroup[] $groups
     * @return \Google\AdsApi\AdWords\v201601\rm\Rule
     */
    public function setGroups(array $groups)
    {
      $this->groups = $groups;
      return $this;
    }

}
