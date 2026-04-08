<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v202602\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v202602\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v202602\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v202602\\AdRule',
      'AdRuleError' => 'Google\\AdsApi\\AdManager\\v202602\\AdRuleError',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202602\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202602\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202602\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v202602\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v202602\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202602\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v202602\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202602\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\AdRuleTargetingError',
      'AdSpot' => 'Google\\AdsApi\\AdManager\\v202602\\AdSpot',
      'AdSpotPage' => 'Google\\AdsApi\\AdManager\\v202602\\AdSpotPage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'BreakTemplate' => 'Google\\AdsApi\\AdManager\\v202602\\BreakTemplate',
      'BreakTemplate.BreakTemplateMember' => 'Google\\AdsApi\\AdManager\\v202602\\BreakTemplateBreakTemplateMember',
      'BreakTemplatePage' => 'Google\\AdsApi\\AdManager\\v202602\\BreakTemplatePage',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202602\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202602\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202602\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202602\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v202602\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v202602\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202602\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v202602\\PoddingError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202602\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202602\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202602\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202602\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202602\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202602\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202602\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createAdRulesResponse',
      'createAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createAdSpotsResponse',
      'createBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createBreakTemplatesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getAdRulesByStatementResponse',
      'getAdSpotsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getAdSpotsByStatementResponse',
      'getBreakTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getBreakTemplatesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v202602\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateAdRulesResponse',
      'updateAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateAdSpotsResponse',
      'updateBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateBreakTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202602\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function createAdRules(array $adRules)
    {
      return $this->__soapCall('createAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Creates new {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202602\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function createAdSpots(array $adSpots)
    {
      return $this->__soapCall('createAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Creates new {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202602\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $statement
     * @return \Google\AdsApi\AdManager\v202602\AdRulePage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v202602\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Gets a {@link AdSpotPage} of {@link AdSpot} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\AdSpotPage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getAdSpotsByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('getAdSpotsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link BreakTemplatePage} of {@link BreakTemplate} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\BreakTemplatePage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getBreakTemplatesByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('getBreakTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202602\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v202602\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202602\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Updates the specified {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202602\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateAdSpots(array $adSpots)
    {
      return $this->__soapCall('updateAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Updates the specified {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202602\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateBreakTemplates(array $breakTemplate)
    {
      return $this->__soapCall('updateBreakTemplates', array(array('breakTemplate' => $breakTemplate)))->getRval();
    }

}
