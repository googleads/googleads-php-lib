<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202002\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v202002\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v202002\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v202002\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v202002\\AdRule',
      'AdRuleError' => 'Google\\AdsApi\\AdManager\\v202002\\AdRuleError',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202002\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202002\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202002\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v202002\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v202002\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202002\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v202002\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202002\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\AdRuleTargetingError',
      'AdSpot' => 'Google\\AdsApi\\AdManager\\v202002\\AdSpot',
      'AdSpotPage' => 'Google\\AdsApi\\AdManager\\v202002\\AdSpotPage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202002\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202002\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202002\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202002\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202002\\BooleanValue',
      'BreakTemplate' => 'Google\\AdsApi\\AdManager\\v202002\\BreakTemplate',
      'BreakTemplate.BreakTemplateMember' => 'Google\\AdsApi\\AdManager\\v202002\\BreakTemplateBreakTemplateMember',
      'BreakTemplatePage' => 'Google\\AdsApi\\AdManager\\v202002\\BreakTemplatePage',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202002\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202002\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202002\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202002\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202002\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202002\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202002\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202002\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202002\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202002\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v202002\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v202002\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202002\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202002\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202002\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202002\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202002\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202002\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202002\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202002\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202002\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v202002\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202002\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202002\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202002\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202002\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202002\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202002\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202002\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202002\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202002\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202002\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202002\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202002\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202002\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202002\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202002\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202002\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202002\\createAdRulesResponse',
      'createAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202002\\createAdSpotsResponse',
      'createBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202002\\createBreakTemplatesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getAdRulesByStatementResponse',
      'getAdSpotsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getAdSpotsByStatementResponse',
      'getBreakTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getBreakTemplatesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v202002\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202002\\updateAdRulesResponse',
      'updateAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202002\\updateAdSpotsResponse',
      'updateBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202002\\updateBreakTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202002/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202002\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202002\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function createAdRules(array $adRules)
    {
      return $this->__soapCall('createAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Creates new {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202002\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202002\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function createAdSpots(array $adSpots)
    {
      return $this->__soapCall('createAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Creates new {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202002\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
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
     * @param \Google\AdsApi\AdManager\v202002\Statement $statement
     * @return \Google\AdsApi\AdManager\v202002\AdRulePage
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v202002\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Gets a {@link AdSpotPage} of {@link AdSpot} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202002\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202002\AdSpotPage
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getAdSpotsByStatement(\Google\AdsApi\AdManager\v202002\Statement $filterStatement)
    {
      return $this->__soapCall('getAdSpotsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link BreakTemplatePage} of {@link BreakTemplate} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202002\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplatePage
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getBreakTemplatesByStatement(\Google\AdsApi\AdManager\v202002\Statement $filterStatement)
    {
      return $this->__soapCall('getBreakTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\AdManager\v202002\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v202002\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202002\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v202002\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v202002\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202002\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202002\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Updates the specified {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202002\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202002\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function updateAdSpots(array $adSpots)
    {
      return $this->__soapCall('updateAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Updates the specified {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202002\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function updateBreakTemplates(array $breakTemplate)
    {
      return $this->__soapCall('updateBreakTemplates', array(array('breakTemplate' => $breakTemplate)))->getRval();
    }

}
