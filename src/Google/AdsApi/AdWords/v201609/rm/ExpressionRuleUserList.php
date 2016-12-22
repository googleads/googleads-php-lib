<?php

namespace Google\AdsApi\AdWords\v201609\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExpressionRuleUserList extends \Google\AdsApi\AdWords\v201609\rm\RuleBasedUserList
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\rm\Rule $rule
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
     * @param boolean $isEligibleForDisplay
     * @param string $UserListType
     * @param \Google\AdsApi\AdWords\v201609\rm\Rule $rule
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $UserListType = null, $rule = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $isEligibleForDisplay, $UserListType);
      $this->rule = $rule;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\rm\Rule
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\rm\Rule $rule
     * @return \Google\AdsApi\AdWords\v201609\rm\ExpressionRuleUserList
     */
    public function setRule($rule)
    {
      $this->rule = $rule;
      return $this;
    }

}
