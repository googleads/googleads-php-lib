<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v202202\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v202202\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v202202\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v202202\\AdRule',
      'AdRuleError' => 'Google\\AdsApi\\AdManager\\v202202\\AdRuleError',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202202\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202202\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202202\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v202202\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v202202\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202202\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v202202\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202202\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\AdRuleTargetingError',
      'AdSpot' => 'Google\\AdsApi\\AdManager\\v202202\\AdSpot',
      'AdSpotPage' => 'Google\\AdsApi\\AdManager\\v202202\\AdSpotPage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'BreakTemplate' => 'Google\\AdsApi\\AdManager\\v202202\\BreakTemplate',
      'BreakTemplate.BreakTemplateMember' => 'Google\\AdsApi\\AdManager\\v202202\\BreakTemplateBreakTemplateMember',
      'BreakTemplatePage' => 'Google\\AdsApi\\AdManager\\v202202\\BreakTemplatePage',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202202\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202202\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v202202\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v202202\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202202\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v202202\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202202\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202202\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202202\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202202\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202202\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202202\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createAdRulesResponse',
      'createAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createAdSpotsResponse',
      'createBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createBreakTemplatesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getAdRulesByStatementResponse',
      'getAdSpotsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getAdSpotsByStatementResponse',
      'getBreakTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getBreakTemplatesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updateAdRulesResponse',
      'updateAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updateAdSpotsResponse',
      'updateBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updateBreakTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202202\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202202\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function createAdRules(array $adRules)
    {
      return $this->__soapCall('createAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Creates new {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202202\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function createAdSpots(array $adSpots)
    {
      return $this->__soapCall('createAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Creates new {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202202\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
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
     * @param \Google\AdsApi\AdManager\v202202\Statement $statement
     * @return \Google\AdsApi\AdManager\v202202\AdRulePage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v202202\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Gets a {@link AdSpotPage} of {@link AdSpot} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\AdSpotPage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getAdSpotsByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getAdSpotsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link BreakTemplatePage} of {@link BreakTemplate} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\BreakTemplatePage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getBreakTemplatesByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getBreakTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\AdManager\v202202\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v202202\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202202\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Updates the specified {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202202\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updateAdSpots(array $adSpots)
    {
      return $this->__soapCall('updateAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Updates the specified {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202202\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updateBreakTemplates(array $breakTemplate)
    {
      return $this->__soapCall('updateBreakTemplates', array(array('breakTemplate' => $breakTemplate)))->getRval();
    }

}
