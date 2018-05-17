<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\Dfp\\v201805\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\Dfp\\v201805\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\Dfp\\v201805\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\Dfp\\v201805\\AdRule',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201805\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201805\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201805\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\Dfp\\v201805\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\Dfp\\v201805\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201805\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\Dfp\\v201805\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201805\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\AdRuleTargetingError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201805\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaSet',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201805\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\Dfp\\v201805\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\Dfp\\v201805\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201805\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\Dfp\\v201805\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201805\\Targeting',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201805\\Technology',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201805\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201805\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201805\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createAdRulesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getAdRulesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\Dfp\\v201805\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateAdRulesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201805\AdRule[] $adRules
     * @return \Google\AdsApi\Dfp\v201805\AdRule[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
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
     * @param \Google\AdsApi\Dfp\v201805\Statement $statement
     * @return \Google\AdsApi\Dfp\v201805\AdRulePage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\Dfp\v201805\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\Dfp\v201805\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\Dfp\v201805\AdRuleAction $adRuleAction, \Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\Dfp\v201805\AdRule[] $adRules
     * @return \Google\AdsApi\Dfp\v201805\AdRule[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

}
