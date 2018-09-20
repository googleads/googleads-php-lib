<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdwordsUserListService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CollectionSizeError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListReturnValue',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NotWhitelistedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotWhitelistedError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'AddressInfo' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\AddressInfo',
      'CombinedRuleUserList' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CombinedRuleUserList',
      'UserListConversionType' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\UserListConversionType',
      'CrmBasedUserList' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CrmBasedUserList',
      'DataUploadResult' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\DataUploadResult',
      'DateKey' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\DateKey',
      'DateRuleItem' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\DateRuleItem',
      'DateSpecificRuleUserList' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\DateSpecificRuleUserList',
      'ExpressionRuleUserList' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\ExpressionRuleUserList',
      'LogicalUserList' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\LogicalUserList',
      'LogicalUserListOperand' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\LogicalUserListOperand',
      'Member' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\Member',
      'MutateMembersError' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\MutateMembersError',
      'MutateMembersOperand' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\MutateMembersOperand',
      'MutateMembersOperation' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\MutateMembersOperation',
      'MutateMembersReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\MutateMembersReturnValue',
      'NumberKey' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\NumberKey',
      'NumberRuleItem' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\NumberRuleItem',
      'RelativeDate' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\RelativeDate',
      'BasicUserList' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\BasicUserList',
      'Rule' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\Rule',
      'RuleBasedUserList' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\RuleBasedUserList',
      'RuleItem' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\RuleItem',
      'RuleItemGroup' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\RuleItemGroup',
      'SimilarUserList' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\SimilarUserList',
      'StringKey' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\StringKey',
      'StringRuleItem' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\StringRuleItem',
      'UserList' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\UserList',
      'UserListError' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\UserListError',
      'UserListLogicalRule' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\UserListLogicalRule',
      'UserListOperation' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\UserListOperation',
      'UserListPage' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\UserListPage',
      'UserListReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\UserListReturnValue',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\mutateResponse',
      'mutateMembersResponse' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\mutateMembersResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/rm/v201809/AdwordsUserListService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\rm\UserListPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Applies a list of mutate operations (i.e. add, set):
     *
     * Add - creates a set of user lists
     * Set - updates a set of user lists
     * Remove - not supported
     *
     * @param \Google\AdsApi\AdWords\v201809\rm\UserListOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\rm\UserListReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Mutate members of user lists by either adding or removing their lists of members.
     * The following {@link Operator}s are supported: ADD and REMOVE. The SET operator
     * is not supported.
     *
     * <p>Note that operations cannot have same user list id but different operators.
     *
     * @param \Google\AdsApi\AdWords\v201809\rm\MutateMembersOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\rm\MutateMembersReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutateMembers(array $operations)
    {
      return $this->__soapCall('mutateMembers', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of user lists that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\rm\UserListPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
