<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201802\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v201802\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v201802\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v201802\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v201802\\AdRule',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201802\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201802\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201802\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v201802\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v201802\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201802\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v201802\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201802\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\AdRuleTargetingError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201802\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201802\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201802\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201802\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201802\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201802\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201802\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201802\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201802\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201802\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201802\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201802\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201802\\CustomCriteriaSet',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201802\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201802\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201802\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201802\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201802\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201802\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201802\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201802\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v201802\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v201802\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201802\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201802\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201802\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201802\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201802\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201802\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201802\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201802\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201802\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201802\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201802\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201802\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201802\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v201802\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201802\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201802\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201802\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201802\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201802\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201802\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201802\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201802\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201802\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201802\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201802\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201802\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201802\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201802\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201802\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201802\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201802\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201802\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201802\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201802\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v201802\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201802\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v201802\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v201802\\createAdRulesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201802\\getAdRulesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v201802\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v201802\\updateAdRulesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201802/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201802\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v201802\AdRule[]
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
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
     * @param \Google\AdsApi\AdManager\v201802\Statement $statement
     * @return \Google\AdsApi\AdManager\v201802\AdRulePage
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v201802\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\AdManager\v201802\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v201802\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201802\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v201802\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v201802\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v201802\AdRule[]
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

}
