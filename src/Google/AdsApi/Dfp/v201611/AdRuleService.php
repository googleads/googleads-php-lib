<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\Dfp\\v201611\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\Dfp\\v201611\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\Dfp\\v201611\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\Dfp\\v201611\\AdRule',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201611\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201611\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201611\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\Dfp\\v201611\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\Dfp\\v201611\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201611\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\Dfp\\v201611\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201611\\StandardPoddingAdRuleSlot',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201611\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201611\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaSet',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201611\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201611\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\Dfp\\v201611\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\Dfp\\v201611\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201611\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201611\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\Dfp\\v201611\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201611\\Targeting',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201611\\Technology',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201611\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201611\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201611\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createAdRulesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getAdRulesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\Dfp\\v201611\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateAdRulesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/AdRuleService?wsdl')
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
     * Creates new {@link AdRule} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\AdRule[] $adRules
     * @return \Google\AdsApi\Dfp\v201611\AdRule[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function createAdRules(array $adRules)
    {
      return $this->__soapCall('createAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Gets an {@link AdRulePage} of {@link AdRule} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AdRule#id} ({@link AdRule#adRuleId} beginning in v201702)</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AdRule#name}</td>
     * </tr>
     * <tr>
     * <td>{@code priority}</td>
     * <td>{@link AdRule#priority}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AdRule#status}</td>
     * </table>
     *
     * @param \Google\AdsApi\Dfp\v201611\Statement $statement
     * @return \Google\AdsApi\Dfp\v201611\AdRulePage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\Dfp\v201611\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\Dfp\v201611\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\Dfp\v201611\AdRuleAction $adRuleAction, \Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\AdRule[] $adRules
     * @return \Google\AdsApi\Dfp\v201611\AdRule[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

}
