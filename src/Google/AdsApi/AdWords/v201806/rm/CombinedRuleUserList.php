<?php

namespace Google\AdsApi\AdWords\v201806\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CombinedRuleUserList extends \Google\AdsApi\AdWords\v201806\rm\RuleBasedUserList
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\rm\Rule $leftOperand
     */
    protected $leftOperand = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\rm\Rule $rightOperand
     */
    protected $rightOperand = null;

    /**
     * @var string $ruleOperator
     */
    protected $ruleOperator = null;

    /**
     * @param int $id
     * @param boolean $isReadOnly
     * @param string $name
     * @param string $description
     * @param string $status
     * @param string $integrationCode
     * @param string $accessReason
     * @param string $accountUserListStatus
     * @param int $membershipLifeSpan
     * @param int $size
     * @param string $sizeRange
     * @param int $sizeForSearch
     * @param string $sizeRangeForSearch
     * @param string $listType
     * @param boolean $isEligibleForSearch
     * @param boolean $isEligibleForDisplay
     * @param string $closingReason
     * @param string $UserListType
     * @param string $prepopulationStatus
     * @param \Google\AdsApi\AdWords\v201806\rm\Rule $leftOperand
     * @param \Google\AdsApi\AdWords\v201806\rm\Rule $rightOperand
     * @param string $ruleOperator
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $closingReason = null, $UserListType = null, $prepopulationStatus = null, $leftOperand = null, $rightOperand = null, $ruleOperator = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $isEligibleForDisplay, $closingReason, $UserListType, $prepopulationStatus);
      $this->leftOperand = $leftOperand;
      $this->rightOperand = $rightOperand;
      $this->ruleOperator = $ruleOperator;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\rm\Rule
     */
    public function getLeftOperand()
    {
      return $this->leftOperand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\rm\Rule $leftOperand
     * @return \Google\AdsApi\AdWords\v201806\rm\CombinedRuleUserList
     */
    public function setLeftOperand($leftOperand)
    {
      $this->leftOperand = $leftOperand;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\rm\Rule
     */
    public function getRightOperand()
    {
      return $this->rightOperand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\rm\Rule $rightOperand
     * @return \Google\AdsApi\AdWords\v201806\rm\CombinedRuleUserList
     */
    public function setRightOperand($rightOperand)
    {
      $this->rightOperand = $rightOperand;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleOperator()
    {
      return $this->ruleOperator;
    }

    /**
     * @param string $ruleOperator
     * @return \Google\AdsApi\AdWords\v201806\rm\CombinedRuleUserList
     */
    public function setRuleOperator($ruleOperator)
    {
      $this->ruleOperator = $ruleOperator;
      return $this;
    }

}
