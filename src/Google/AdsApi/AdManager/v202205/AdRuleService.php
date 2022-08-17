<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v202205\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v202205\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v202205\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v202205\\AdRule',
      'AdRuleError' => 'Google\\AdsApi\\AdManager\\v202205\\AdRuleError',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202205\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202205\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202205\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v202205\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v202205\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202205\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v202205\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202205\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\AdRuleTargetingError',
      'AdSpot' => 'Google\\AdsApi\\AdManager\\v202205\\AdSpot',
      'AdSpotPage' => 'Google\\AdsApi\\AdManager\\v202205\\AdSpotPage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'BreakTemplate' => 'Google\\AdsApi\\AdManager\\v202205\\BreakTemplate',
      'BreakTemplate.BreakTemplateMember' => 'Google\\AdsApi\\AdManager\\v202205\\BreakTemplateBreakTemplateMember',
      'BreakTemplatePage' => 'Google\\AdsApi\\AdManager\\v202205\\BreakTemplatePage',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202205\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202205\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v202205\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v202205\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202205\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v202205\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202205\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202205\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202205\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202205\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202205\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202205\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createAdRulesResponse',
      'createAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createAdSpotsResponse',
      'createBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createBreakTemplatesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getAdRulesByStatementResponse',
      'getAdSpotsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getAdSpotsByStatementResponse',
      'getBreakTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getBreakTemplatesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v202205\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateAdRulesResponse',
      'updateAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateAdSpotsResponse',
      'updateBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateBreakTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202205\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202205\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function createAdRules(array $adRules)
    {
      return $this->__soapCall('createAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Creates new {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202205\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function createAdSpots(array $adSpots)
    {
      return $this->__soapCall('createAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Creates new {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202205\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
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
     * @param \Google\AdsApi\AdManager\v202205\Statement $statement
     * @return \Google\AdsApi\AdManager\v202205\AdRulePage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v202205\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Gets a {@link AdSpotPage} of {@link AdSpot} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\AdSpotPage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getAdSpotsByStatement(\Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('getAdSpotsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link BreakTemplatePage} of {@link BreakTemplate} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\BreakTemplatePage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getBreakTemplatesByStatement(\Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('getBreakTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\AdManager\v202205\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v202205\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202205\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Updates the specified {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202205\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateAdSpots(array $adSpots)
    {
      return $this->__soapCall('updateAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Updates the specified {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202205\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateBreakTemplates(array $breakTemplate)
    {
      return $this->__soapCall('updateBreakTemplates', array(array('breakTemplate' => $breakTemplate)))->getRval();
    }

}
