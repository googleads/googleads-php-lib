<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201711\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v201711\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v201711\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v201711\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v201711\\AdRule',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201711\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201711\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201711\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v201711\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v201711\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201711\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v201711\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201711\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\AdRuleTargetingError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201711\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201711\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201711\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201711\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201711\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201711\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201711\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201711\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201711\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201711\\CustomCriteriaSet',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201711\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201711\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201711\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201711\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v201711\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v201711\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201711\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201711\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201711\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201711\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201711\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201711\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201711\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201711\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201711\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201711\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201711\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v201711\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201711\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201711\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201711\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201711\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201711\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201711\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201711\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201711\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201711\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v201711\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v201711\\createAdRulesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201711\\getAdRulesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v201711\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v201711\\updateAdRulesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201711\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v201711\AdRule[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
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
     * @param \Google\AdsApi\AdManager\v201711\Statement $statement
     * @return \Google\AdsApi\AdManager\v201711\AdRulePage
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v201711\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\AdManager\v201711\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v201711\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201711\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v201711\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v201711\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v201711\AdRule[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

}
