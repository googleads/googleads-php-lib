<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRuleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202008\\ObjectValue',
      'ActivateAdRules' => 'Google\\AdsApi\\AdManager\\v202008\\ActivateAdRules',
      'AdRuleAction' => 'Google\\AdsApi\\AdManager\\v202008\\AdRuleAction',
      'AdRuleDateError' => 'Google\\AdsApi\\AdManager\\v202008\\AdRuleDateError',
      'AdRule' => 'Google\\AdsApi\\AdManager\\v202008\\AdRule',
      'AdRuleError' => 'Google\\AdsApi\\AdManager\\v202008\\AdRuleError',
      'AdRuleFrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202008\\AdRuleFrequencyCapError',
      'NoPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202008\\NoPoddingAdRuleSlot',
      'OptimizedPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202008\\OptimizedPoddingAdRuleSlot',
      'AdRulePage' => 'Google\\AdsApi\\AdManager\\v202008\\AdRulePage',
      'AdRulePriorityError' => 'Google\\AdsApi\\AdManager\\v202008\\AdRulePriorityError',
      'BaseAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202008\\BaseAdRuleSlot',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v202008\\AdRuleSlotError',
      'StandardPoddingAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202008\\StandardPoddingAdRuleSlot',
      'AdRuleTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\AdRuleTargetingError',
      'AdSpot' => 'Google\\AdsApi\\AdManager\\v202008\\AdSpot',
      'AdSpotPage' => 'Google\\AdsApi\\AdManager\\v202008\\AdSpotPage',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202008\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202008\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202008\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202008\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202008\\BooleanValue',
      'BreakTemplate' => 'Google\\AdsApi\\AdManager\\v202008\\BreakTemplate',
      'BreakTemplate.BreakTemplateMember' => 'Google\\AdsApi\\AdManager\\v202008\\BreakTemplateBreakTemplateMember',
      'BreakTemplatePage' => 'Google\\AdsApi\\AdManager\\v202008\\BreakTemplatePage',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202008\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202008\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202008\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202008\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202008\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DayPartTargeting',
      'DeactivateAdRules' => 'Google\\AdsApi\\AdManager\\v202008\\DeactivateAdRules',
      'DeleteAdRules' => 'Google\\AdsApi\\AdManager\\v202008\\DeleteAdRules',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceManufacturerTargeting',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202008\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202008\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202008\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202008\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202008\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202008\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202008\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202008\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202008\\PermissionError',
      'PoddingError' => 'Google\\AdsApi\\AdManager\\v202008\\PoddingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202008\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202008\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202008\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202008\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202008\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202008\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202008\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202008\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202008\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202008\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202008\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202008\\UniqueError',
      'UnknownAdRuleSlot' => 'Google\\AdsApi\\AdManager\\v202008\\UnknownAdRuleSlot',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202008\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202008\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTarget',
      'createAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202008\\createAdRulesResponse',
      'createAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202008\\createAdSpotsResponse',
      'createBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202008\\createBreakTemplatesResponse',
      'getAdRulesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getAdRulesByStatementResponse',
      'getAdSpotsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getAdSpotsByStatementResponse',
      'getBreakTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getBreakTemplatesByStatementResponse',
      'performAdRuleActionResponse' => 'Google\\AdsApi\\AdManager\\v202008\\performAdRuleActionResponse',
      'updateAdRulesResponse' => 'Google\\AdsApi\\AdManager\\v202008\\updateAdRulesResponse',
      'updateAdSpotsResponse' => 'Google\\AdsApi\\AdManager\\v202008\\updateAdSpotsResponse',
      'updateBreakTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v202008\\updateBreakTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202008/AdRuleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202008\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202008\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function createAdRules(array $adRules)
    {
      return $this->__soapCall('createAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Creates new {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202008\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202008\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function createAdSpots(array $adSpots)
    {
      return $this->__soapCall('createAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Creates new {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202008\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202008\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
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
     * @param \Google\AdsApi\AdManager\v202008\Statement $statement
     * @return \Google\AdsApi\AdManager\v202008\AdRulePage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getAdRulesByStatement(\Google\AdsApi\AdManager\v202008\Statement $statement)
    {
      return $this->__soapCall('getAdRulesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Gets a {@link AdSpotPage} of {@link AdSpot} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\AdSpotPage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getAdSpotsByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('getAdSpotsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link BreakTemplatePage} of {@link BreakTemplate} objects that satisfy the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\BreakTemplatePage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getBreakTemplatesByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('getBreakTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad rules
     *
     * @param \Google\AdsApi\AdManager\v202008\AdRuleAction $adRuleAction
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function performAdRuleAction(\Google\AdsApi\AdManager\v202008\AdRuleAction $adRuleAction, \Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('performAdRuleAction', array(array('adRuleAction' => $adRuleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param \Google\AdsApi\AdManager\v202008\AdRule[] $adRules
     * @return \Google\AdsApi\AdManager\v202008\AdRule[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function updateAdRules(array $adRules)
    {
      return $this->__soapCall('updateAdRules', array(array('adRules' => $adRules)))->getRval();
    }

    /**
     * Updates the specified {@link AdSpot} objects.
     *
     * @param \Google\AdsApi\AdManager\v202008\AdSpot[] $adSpots
     * @return \Google\AdsApi\AdManager\v202008\AdSpot[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function updateAdSpots(array $adSpots)
    {
      return $this->__soapCall('updateAdSpots', array(array('adSpots' => $adSpots)))->getRval();
    }

    /**
     * Updates the specified {@link breakTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v202008\BreakTemplate[] $breakTemplate
     * @return \Google\AdsApi\AdManager\v202008\BreakTemplate[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function updateBreakTemplates(array $breakTemplate)
    {
      return $this->__soapCall('updateBreakTemplates', array(array('breakTemplate' => $breakTemplate)))->getRval();
    }

}
