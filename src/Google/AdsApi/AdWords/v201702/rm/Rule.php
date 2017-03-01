<?php

namespace Google\AdsApi\AdWords\v201702\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Rule
{

    /**
     * @var \Google\AdsApi\AdWords\v201702\rm\RuleItemGroup[] $groups
     */
    protected $groups = null;

    /**
     * @param \Google\AdsApi\AdWords\v201702\rm\RuleItemGroup[] $groups
     */
    public function __construct(array $groups = null)
    {
      $this->groups = $groups;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201702\rm\RuleItemGroup[]
     */
    public function getGroups()
    {
      return $this->groups;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201702\rm\RuleItemGroup[] $groups
     * @return \Google\AdsApi\AdWords\v201702\rm\Rule
     */
    public function setGroups(array $groups)
    {
      $this->groups = $groups;
      return $this;
    }

}
