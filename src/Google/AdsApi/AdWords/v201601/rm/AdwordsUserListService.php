<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class AdwordsUserListService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthorizationError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DistinctError',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityNotFound',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NotEmptyError',
      'NotWhitelistedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NotWhitelistedError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Predicate',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RejectedError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringLengthError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Selector',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Page',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\CollectionSizeError',
      'UserListConversionType' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\UserListConversionType',
      'CrmBasedUserList' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\CrmBasedUserList',
      'DateKey' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\DateKey',
      'DateRuleItem' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\DateRuleItem',
      'DateSpecificRuleUserList' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\DateSpecificRuleUserList',
      'ExpressionRuleUserList' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\ExpressionRuleUserList',
      'LogicalUserList' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\LogicalUserList',
      'LogicalUserListOperand' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\LogicalUserListOperand',
      'MutateMembersError' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\MutateMembersError',
      'MutateMembersOperand' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\MutateMembersOperand',
      'MutateMembersOperation' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\MutateMembersOperation',
      'MutateMembersReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\MutateMembersReturnValue',
      'NumberKey' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\NumberKey',
      'NumberRuleItem' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\NumberRuleItem',
      'BasicUserList' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\BasicUserList',
      'Rule' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\Rule',
      'RuleBasedUserList' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\RuleBasedUserList',
      'RuleItem' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\RuleItem',
      'RuleItemGroup' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\RuleItemGroup',
      'SimilarUserList' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\SimilarUserList',
      'StringKey' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\StringKey',
      'StringRuleItem' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\StringRuleItem',
      'UserList' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\UserList',
      'UserListError' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\UserListError',
      'UserListLogicalRule' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\UserListLogicalRule',
      'UserListOperation' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\UserListOperation',
      'UserListPage' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\UserListPage',
      'UserListReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\rm\\UserListReturnValue',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/rm/v201601/AdwordsUserListService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the list of user lists that meet the selector criteria.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201601\rm\UserListPage
     */
    public function get(\Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Applies a list of mutate operations (i.e. add, set):
     *
     * Add - creates a set of user lists
     * Set - updates a set of user lists
     * Remove - not supported
     *
     * @param \Google\AdsApi\AdWords\v201601\rm\UserListOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201601\rm\UserListReturnValue
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

    /**
     * Mutate members of user lists by either adding or removing their lists of members.
     *
     * <p>Note that operations cannot have same user list id but different operators.
     *
     * @param \Google\AdsApi\AdWords\v201601\rm\MutateMembersOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201601\rm\MutateMembersReturnValue
     */
    public function mutateMembers(array $operations)
    {
      return $this->__soapCall('mutateMembers', array(array('operations' => $operations)))->rval;
    }

}
