<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class ExpressionRuleUserList extends \Google\AdsApi\AdWords\v201601\rm\RuleBasedUserList
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\rm\Rule $rule
     */
    protected $rule = null;

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
     * @param string $UserListType
     * @param \Google\AdsApi\AdWords\v201601\rm\Rule $rule
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $UserListType = null, $rule = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $UserListType);
      $this->rule = $rule;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\rm\Rule
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\Rule $rule
     * @return \Google\AdsApi\AdWords\v201601\rm\ExpressionRuleUserList
     */
    public function setRule($rule)
    {
      $this->rule = $rule;
      return $this;
    }

}
