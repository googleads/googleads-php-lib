<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdExclusionRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201908\\ObjectValue',
      'ActivateAdExclusionRules' => 'Google\\AdsApi\\AdManager\\v201908\\ActivateAdExclusionRules',
      'AdExclusionRuleAction' => 'Google\\AdsApi\\AdManager\\v201908\\AdExclusionRuleAction',
      'AdExclusionRule' => 'Google\\AdsApi\\AdManager\\v201908\\AdExclusionRule',
      'AdExclusionRuleError' => 'Google\\AdsApi\\AdManager\\v201908\\AdExclusionRuleError',
      'AdExclusionRulePage' => 'Google\\AdsApi\\AdManager\\v201908\\AdExclusionRulePage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201908\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201908\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201908\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201908\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201908\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201908\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201908\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateValue',
      'DeactivateAdExclusionRules' => 'Google\\AdsApi\\AdManager\\v201908\\DeactivateAdExclusionRules',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201908\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201908\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201908\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201908\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201908\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\InventoryTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201908\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201908\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201908\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201908\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201908\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201908\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201908\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201908\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201908\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201908\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201908\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201908\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201908\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201908\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201908\\Value',
      'createAdExclusionRulesResponse' => 'Google\\AdsApi\\AdManager\\v201908\\createAdExclusionRulesResponse',
      'getAdExclusionRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getAdExclusionRulesByStatementResponse',
      'performAdExclusionRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v201908\\performAdExclusionRuleActionResponse',
      'updateAdExclusionRulesResponse' => 'Google\\AdsApi\\AdManager\\v201908\\updateAdExclusionRulesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201908/AdExclusionRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201908\AdExclusionRule[] $adExclusionRules
     * @return \Google\AdsApi\AdManager\v201908\AdExclusionRule[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
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
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\AdExclusionRulePage
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function getAdExclusionRulesByStatement(\Google\AdsApi\AdManager\v201908\Statement $filterStatement)
    {
      return $this->__soapCall('getAdExclusionRulesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link AdExclusionRule} objects that satisfy the
     * given {@link Statement#query}.
     *
     * a set of ad exclusion rules
     *
     * @param \Google\AdsApi\AdManager\v201908\AdExclusionRuleAction $adExclusionRuleAction
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function performAdExclusionRuleAction(\Google\AdsApi\AdManager\v201908\AdExclusionRuleAction $adExclusionRuleAction, \Google\AdsApi\AdManager\v201908\Statement $filterStatement)
    {
      return $this->__soapCall('performAdExclusionRuleAction', array(array('adExclusionRuleAction' => $adExclusionRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdExclusionRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v201908\AdExclusionRule[] $adExclusionRules
     * @return \Google\AdsApi\AdManager\v201908\AdExclusionRule[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function updateAdExclusionRules(array $adExclusionRules)
    {
      return $this->__soapCall('updateAdExclusionRules', array(array('adExclusionRules' => $adExclusionRules)))->getRval();
    }

}
