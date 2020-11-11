<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202011\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v202011\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v202011\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v202011\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v202011\\AdRule',
      'AdRuleError' => 'Google\\AdsApi\\AdManager\\v202011\\AdRuleError',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202011\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202011\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202011\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v202011\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v202011\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202011\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v202011\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202011\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\AdRuleTargetingError',
      'AdSpot' => 'Google\\AdsApi\\AdManager\\v202011\\AdSpot',
      'AdSpotPage' => 'Google\\AdsApi\\AdManager\\v202011\\AdSpotPage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202011\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202011\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202011\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202011\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202011\\BooleanValue',
      'BreakTemplate' => 'Google\\AdsApi\\AdManager\\v202011\\BreakTemplate',
      'BreakTemplate.BreakTemplateMember' => 'Google\\AdsApi\\AdManager\\v202011\\BreakTemplateBreakTemplateMember',
      'BreakTemplatePage' => 'Google\\AdsApi\\AdManager\\v202011\\BreakTemplatePage',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202011\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202011\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202011\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202011\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202011\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202011\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202011\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202011\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202011\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v202011\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v202011\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202011\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202011\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202011\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202011\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202011\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202011\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202011\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202011\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202011\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v202011\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202011\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202011\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202011\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202011\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202011\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202011\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202011\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202011\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202011\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202011\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202011\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202011\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202011\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202011\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202011\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202011\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202011\\createAdRulesResponse',
      'createAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\createAdSpotsResponse',
      'createBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202011\\createBreakTemplatesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getAdRulesByStatementResponse',
      'getAdSpotsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getAdSpotsByStatementResponse',
      'getBreakTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getBreakTemplatesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v202011\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202011\\updateAdRulesResponse',
      'updateAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\updateAdSpotsResponse',
      'updateBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202011\\updateBreakTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202011/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202011\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202011\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function createAdRules(array $adRules)
    {
      return $this->__soapCall('createAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Creates new {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202011\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function createAdSpots(array $adSpots)
    {
      return $this->__soapCall('createAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Creates new {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202011\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
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
     * @param \Google\AdsApi\AdManager\v202011\Statement $statement
     * @return \Google\AdsApi\AdManager\v202011\AdRulePage
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v202011\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Gets a {@link AdSpotPage} of {@link AdSpot} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\AdSpotPage
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getAdSpotsByStatement(\Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('getAdSpotsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link BreakTemplatePage} of {@link BreakTemplate} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\BreakTemplatePage
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getBreakTemplatesByStatement(\Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('getBreakTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\AdManager\v202011\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v202011\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202011\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Updates the specified {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202011\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function updateAdSpots(array $adSpots)
    {
      return $this->__soapCall('updateAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Updates the specified {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202011\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function updateBreakTemplates(array $breakTemplate)
    {
      return $this->__soapCall('updateBreakTemplates', array(array('breakTemplate' => $breakTemplate)))->getRval();
    }

}
