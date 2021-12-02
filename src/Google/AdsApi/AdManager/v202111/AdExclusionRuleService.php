<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdExclusionRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202111\\ObjectValue',
      'ActivateAdExclusionRules' => 'Google\\AdsApi\\AdManager\\v202111\\ActivateAdExclusionRules',
      'AdExclusionRuleAction' => 'Google\\AdsApi\\AdManager\\v202111\\AdExclusionRuleAction',
      'AdExclusionRule' => 'Google\\AdsApi\\AdManager\\v202111\\AdExclusionRule',
      'AdExclusionRuleError' => 'Google\\AdsApi\\AdManager\\v202111\\AdExclusionRuleError',
      'AdExclusionRulePage' => 'Google\\AdsApi\\AdManager\\v202111\\AdExclusionRulePage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202111\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202111\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202111\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202111\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202111\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202111\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202111\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateValue',
      'DeactivateAdExclusionRules' => 'Google\\AdsApi\\AdManager\\v202111\\DeactivateAdExclusionRules',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202111\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202111\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202111\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202111\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202111\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\InventoryTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202111\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202111\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202111\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202111\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202111\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202111\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202111\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202111\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202111\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202111\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202111\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202111\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202111\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202111\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202111\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202111\\Value',
      'createAdExclusionRulesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\createAdExclusionRulesResponse',
      'getAdExclusionRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getAdExclusionRulesByStatementResponse',
      'performAdExclusionRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v202111\\performAdExclusionRuleActionResponse',
      'updateAdExclusionRulesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\updateAdExclusionRulesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202111/AdExclusionRuleService?wsdl')
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
     * Creates new {@link AdExclusionRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202111\AdExclusionRule[] $adExclusionRules
     * @return \Google\AdsApi\AdManager\v202111\AdExclusionRule[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function createAdExclusionRules(array $adExclusionRules)
    {
      return $this->__soapCall('createAdExclusionRules', array(array('adExclusionRules' => $adExclusionRules)))->getRval();
    }

    /**
     * Gets a {@link AdExclusionRulePage} of {@link AdExclusionRule} objects that satisfy the
     * given {@link Statement#query}.  The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AdExclusionRule#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AdExclusionRule#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AdExclusionRule#status}</td>
     * </tr>
     * </table>
     *
     * a set of rules
     *
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\AdExclusionRulePage
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getAdExclusionRulesByStatement(\Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('getAdExclusionRulesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link AdExclusionRule} objects that satisfy the
     * given {@link Statement#query}.
     *
     * a set of ad exclusion rules
     *
     * @param \Google\AdsApi\AdManager\v202111\AdExclusionRuleAction $adExclusionRuleAction
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function performAdExclusionRuleAction(\Google\AdsApi\AdManager\v202111\AdExclusionRuleAction $adExclusionRuleAction, \Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('performAdExclusionRuleAction', array(array('adExclusionRuleAction' => $adExclusionRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdExclusionRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202111\AdExclusionRule[] $adExclusionRules
     * @return \Google\AdsApi\AdManager\v202111\AdExclusionRule[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function updateAdExclusionRules(array $adExclusionRules)
    {
      return $this->__soapCall('updateAdExclusionRules', array(array('adExclusionRules' => $adExclusionRules)))->getRval();
    }

}
