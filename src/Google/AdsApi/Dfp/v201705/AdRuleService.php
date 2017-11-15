<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\Dfp\\v201705\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\Dfp\\v201705\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\Dfp\\v201705\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\Dfp\\v201705\\AdRule',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201705\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201705\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201705\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\Dfp\\v201705\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\Dfp\\v201705\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201705\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\Dfp\\v201705\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201705\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\AdRuleTargetingError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201705\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201705\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaSet',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201705\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\Dfp\\v201705\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\Dfp\\v201705\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201705\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201705\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\Dfp\\v201705\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201705\\Targeting',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201705\\Technology',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201705\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201705\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\Dfp\\v201705\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201705\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\Dfp\\v201705\\createAdRulesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getAdRulesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\Dfp\\v201705\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updateAdRulesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\AdRule[] $adRules
     * @return \Google\AdsApi\Dfp\v201705\AdRule[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $statement
     * @return \Google\AdsApi\Dfp\v201705\AdRulePage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\Dfp\v201705\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\Dfp\v201705\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\Dfp\v201705\AdRuleAction $adRuleAction, \Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\Dfp\v201705\AdRule[] $adRules
     * @return \Google\AdsApi\Dfp\v201705\AdRule[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

}
