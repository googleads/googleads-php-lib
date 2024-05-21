<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202405\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v202405\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v202405\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v202405\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v202405\\AdRule',
      'AdRuleError' => 'Google\\AdsApi\\AdManager\\v202405\\AdRuleError',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202405\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202405\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202405\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v202405\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v202405\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202405\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v202405\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202405\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v202405\\AdRuleTargetingError',
      'AdSpot' => 'Google\\AdsApi\\AdManager\\v202405\\AdSpot',
      'AdSpotPage' => 'Google\\AdsApi\\AdManager\\v202405\\AdSpotPage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202405\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202405\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202405\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202405\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202405\\BooleanValue',
      'BreakTemplate' => 'Google\\AdsApi\\AdManager\\v202405\\BreakTemplate',
      'BreakTemplate.BreakTemplateMember' => 'Google\\AdsApi\\AdManager\\v202405\\BreakTemplateBreakTemplateMember',
      'BreakTemplatePage' => 'Google\\AdsApi\\AdManager\\v202405\\BreakTemplatePage',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202405\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202405\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202405\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202405\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202405\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202405\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202405\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202405\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202405\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202405\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202405\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v202405\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v202405\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202405\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202405\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202405\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202405\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202405\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202405\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202405\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202405\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202405\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202405\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v202405\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202405\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202405\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202405\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202405\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202405\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202405\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202405\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202405\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202405\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202405\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202405\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202405\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202405\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202405\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202405\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202405\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202405\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202405\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202405\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202405\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202405\\createAdRulesResponse',
      'createAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202405\\createAdSpotsResponse',
      'createBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202405\\createBreakTemplatesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202405\\getAdRulesByStatementResponse',
      'getAdSpotsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202405\\getAdSpotsByStatementResponse',
      'getBreakTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202405\\getBreakTemplatesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v202405\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202405\\updateAdRulesResponse',
      'updateAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202405\\updateAdSpotsResponse',
      'updateBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202405\\updateBreakTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202405/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202405\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202405\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function createAdRules(array $adRules)
    {
      return $this->__soapCall('createAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Creates new {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202405\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202405\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function createAdSpots(array $adSpots)
    {
      return $this->__soapCall('createAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Creates new {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202405\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202405\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
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
     * @param \Google\AdsApi\AdManager\v202405\Statement $statement
     * @return \Google\AdsApi\AdManager\v202405\AdRulePage
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v202405\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Gets a {@link AdSpotPage} of {@link AdSpot} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202405\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202405\AdSpotPage
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function getAdSpotsByStatement(\Google\AdsApi\AdManager\v202405\Statement $filterStatement)
    {
      return $this->__soapCall('getAdSpotsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link BreakTemplatePage} of {@link BreakTemplate} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202405\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202405\BreakTemplatePage
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function getBreakTemplatesByStatement(\Google\AdsApi\AdManager\v202405\Statement $filterStatement)
    {
      return $this->__soapCall('getBreakTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202405\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v202405\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202405\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v202405\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v202405\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202405\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202405\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Updates the specified {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202405\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202405\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function updateAdSpots(array $adSpots)
    {
      return $this->__soapCall('updateAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Updates the specified {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202405\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202405\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function updateBreakTemplates(array $breakTemplate)
    {
      return $this->__soapCall('updateBreakTemplates', array(array('breakTemplate' => $breakTemplate)))->getRval();
    }

}
