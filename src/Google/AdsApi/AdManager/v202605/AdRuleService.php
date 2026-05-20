<?php

namespace Google\AdsApi\AdManager\v202605;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202605\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v202605\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v202605\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v202605\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v202605\\AdRule',
      'AdRuleError' => 'Google\\AdsApi\\AdManager\\v202605\\AdRuleError',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202605\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202605\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202605\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v202605\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v202605\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202605\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v202605\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202605\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\AdRuleTargetingError',
      'AdSpot' => 'Google\\AdsApi\\AdManager\\v202605\\AdSpot',
      'AdSpotPage' => 'Google\\AdsApi\\AdManager\\v202605\\AdSpotPage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202605\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202605\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202605\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202605\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202605\\BooleanValue',
      'BreakTemplate' => 'Google\\AdsApi\\AdManager\\v202605\\BreakTemplate',
      'BreakTemplate.BreakTemplateMember' => 'Google\\AdsApi\\AdManager\\v202605\\BreakTemplateBreakTemplateMember',
      'BreakTemplatePage' => 'Google\\AdsApi\\AdManager\\v202605\\BreakTemplatePage',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202605\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202605\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202605\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202605\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202605\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202605\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202605\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202605\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202605\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v202605\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v202605\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202605\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202605\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202605\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202605\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202605\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202605\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202605\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202605\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202605\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v202605\\PoddingError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202605\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202605\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202605\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202605\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202605\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202605\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202605\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202605\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202605\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202605\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202605\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202605\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202605\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202605\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202605\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202605\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202605\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202605\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202605\\createAdRulesResponse',
      'createAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\createAdSpotsResponse',
      'createBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202605\\createBreakTemplatesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202605\\getAdRulesByStatementResponse',
      'getAdSpotsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202605\\getAdSpotsByStatementResponse',
      'getBreakTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202605\\getBreakTemplatesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v202605\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202605\\updateAdRulesResponse',
      'updateAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\updateAdSpotsResponse',
      'updateBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202605\\updateBreakTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202605/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202605\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202605\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function createAdRules(array $adRules)
    {
      return $this->__soapCall('createAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Creates new {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202605\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function createAdSpots(array $adSpots)
    {
      return $this->__soapCall('createAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Creates new {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202605\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function createBreakTemplates(array $breakTemplate)
    {
      return $this->__soapCall('createBreakTemplates', array(array('breakTemplate' => $breakTemplate)))->getRval();
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
     * @param \Google\AdsApi\AdManager\v202605\Statement $statement
     * @return \Google\AdsApi\AdManager\v202605\AdRulePage
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v202605\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Gets a {@link AdSpotPage} of {@link AdSpot} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202605\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202605\AdSpotPage
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function getAdSpotsByStatement(\Google\AdsApi\AdManager\v202605\Statement $filterStatement)
    {
      return $this->__soapCall('getAdSpotsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link BreakTemplatePage} of {@link BreakTemplate} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202605\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202605\BreakTemplatePage
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function getBreakTemplatesByStatement(\Google\AdsApi\AdManager\v202605\Statement $filterStatement)
    {
      return $this->__soapCall('getBreakTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202605\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v202605\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202605\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v202605\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v202605\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202605\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Updates the specified {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202605\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function updateAdSpots(array $adSpots)
    {
      return $this->__soapCall('updateAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Updates the specified {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202605\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function updateBreakTemplates(array $breakTemplate)
    {
      return $this->__soapCall('updateBreakTemplates', array(array('breakTemplate' => $breakTemplate)))->getRval();
    }

}
