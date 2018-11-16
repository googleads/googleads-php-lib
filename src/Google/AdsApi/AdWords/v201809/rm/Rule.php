<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Rule
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\RuleItemGroup[] $groups
     */
    protected $groups = null;

    /**
     * @var string $ruleType
     */
    protected $ruleType = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\RuleItemGroup[] $groups
     * @param string $ruleType
     */
    public function __construct(array $groups = null, $ruleType = null)
    {
      $this->groups = $groups;
      $this->ruleType = $ruleType;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\RuleItemGroup[]
     */
    public function getGroups()
    {
      return $this->groups;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\RuleItemGroup[] $groups
     * @return \Google\AdsApi\AdWords\v201809\rm\Rule
     */
    public function setGroups(array $groups)
    {
      $this->groups = $groups;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleType()
    {
      return $this->ruleType;
    }

    /**
     * @param string $ruleType
     * @return \Google\AdsApi\AdWords\v201809\rm\Rule
     */
    public function setRuleType($ruleType)
    {
      $this->ruleType = $ruleType;
      return $this;
    }

}
