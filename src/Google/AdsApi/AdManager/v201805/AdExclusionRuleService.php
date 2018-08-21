<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdExclusionRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201805\\ObjectValue',
      'ActivateAdExclusionRules' => 'Google\\AdsApi\\AdManager\\v201805\\ActivateAdExclusionRules',
      'AdExclusionRuleAction' => 'Google\\AdsApi\\AdManager\\v201805\\AdExclusionRuleAction',
      'AdExclusionRule' => 'Google\\AdsApi\\AdManager\\v201805\\AdExclusionRule',
      'AdExclusionRuleError' => 'Google\\AdsApi\\AdManager\\v201805\\AdExclusionRuleError',
      'AdExclusionRulePage' => 'Google\\AdsApi\\AdManager\\v201805\\AdExclusionRulePage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201805\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201805\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201805\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateValue',
      'DeactivateAdExclusionRules' => 'Google\\AdsApi\\AdManager\\v201805\\DeactivateAdExclusionRules',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201805\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\InventoryTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201805\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201805\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201805\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201805\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201805\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201805\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201805\\Value',
      'createAdExclusionRulesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\createAdExclusionRulesResponse',
      'getAdExclusionRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getAdExclusionRulesByStatementResponse',
      'performAdExclusionRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v201805\\performAdExclusionRuleActionResponse',
      'updateAdExclusionRulesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\updateAdExclusionRulesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/AdExclusionRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201805\AdExclusionRule[] $adExclusionRules
     * @return \Google\AdsApi\AdManager\v201805\AdExclusionRule[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
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
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\AdExclusionRulePage
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getAdExclusionRulesByStatement(\Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getAdExclusionRulesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link AdExclusionRule} objects that satisfy the
     * given {@link Statement#query}.
     *
     * a set of ad exclusion rules
     *
     * @param \Google\AdsApi\AdManager\v201805\AdExclusionRuleAction $adExclusionRuleAction
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function performAdExclusionRuleAction(\Google\AdsApi\AdManager\v201805\AdExclusionRuleAction $adExclusionRuleAction, \Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performAdExclusionRuleAction', array(array('adExclusionRuleAction' => $adExclusionRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdExclusionRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\AdExclusionRule[] $adExclusionRules
     * @return \Google\AdsApi\AdManager\v201805\AdExclusionRule[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function updateAdExclusionRules(array $adExclusionRules)
    {
      return $this->__soapCall('updateAdExclusionRules', array(array('adExclusionRules' => $adExclusionRules)))->getRval();
    }

}
