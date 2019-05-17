<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'ActivateProductTemplates' => 'Google\\AdsApi\\AdManager\\v201905\\ActivateProductTemplates',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201905\\AppliedLabel',
      'ArchiveProductTemplates' => 'Google\\AdsApi\\AdManager\\v201905\\ArchiveProductTemplates',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\AdManager\\v201905\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201905\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201905\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\AdManager\\v201905\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201905\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\DayPartTargetingError',
      'DeactivateProductTemplates' => 'Google\\AdsApi\\AdManager\\v201905\\DeactivateProductTemplates',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201905\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201905\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PlacementTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\PlacementTargeting',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v201905\\PreferredDealError',
      'ProductTemplateAction' => 'Google\\AdsApi\\AdManager\\v201905\\ProductTemplateAction',
      'ProductTemplateActionError' => 'Google\\AdsApi\\AdManager\\v201905\\ProductTemplateActionError',
      'ProductTemplate' => 'Google\\AdsApi\\AdManager\\v201905\\ProductTemplate',
      'ProductTemplateError' => 'Google\\AdsApi\\AdManager\\v201905\\ProductTemplateError',
      'ProductTemplateMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201905\\ProductTemplateMarketplaceInfo',
      'ProductTemplatePage' => 'Google\\AdsApi\\AdManager\\v201905\\ProductTemplatePage',
      'ProductSegmentation' => 'Google\\AdsApi\\AdManager\\v201905\\ProductSegmentation',
      'ProgrammaticEntitiesError' => 'Google\\AdsApi\\AdManager\\v201905\\ProgrammaticEntitiesError',
      'ProgrammaticProductError' => 'Google\\AdsApi\\AdManager\\v201905\\ProgrammaticProductError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201905\\RangeError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201905\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201905\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201905\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201905\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201905\\TypeError',
      'UnarchiveProductTemplates' => 'Google\\AdsApi\\AdManager\\v201905\\UnarchiveProductTemplates',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201905\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201905\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTarget',
      'createProductTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v201905\\createProductTemplatesResponse',
      'getProductTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getProductTemplatesByStatementResponse',
      'performProductTemplateActionResponse' => 'Google\\AdsApi\\AdManager\\v201905\\performProductTemplateActionResponse',
      'updateProductTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updateProductTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/ProductTemplateService?wsdl')
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
     * Creates new {@link ProductTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\AdManager\v201905\ProductTemplate[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function createProductTemplates(array $productTemplates)
    {
      return $this->__soapCall('createProductTemplates', array(array('productTemplates' => $productTemplates)))->getRval();
    }

    /**
     * Gets a {@link ProductTemplatePage} of {@link ProductTemplate} objects
     * that satisfy the filtering criteria specified by given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ProductTemplate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ProductTemplate#name}</td>
     * </tr>
     * <tr>
     * <td>{@code nameMacro}</td>
     * <td>{@link ProductTemplate#nameMacro}</td>
     * </tr>
     * <tr>
     * <td>{@code description}</td>
     * <td>{@link ProductTemplate#description}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ProductTemplate#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link ProductTemplate#lastModifiedDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemType}</td>
     * <td>{@link LineItemType}</td>
     * </tr>
     * <tr>
     * <td>{@code productType}</td>
     * <td>{@link ProductType}</td>
     * </tr>
     * <tr>
     * <td>{@code rateType}</td>
     * <td>{@link RateType}</td>
     * </tr>
     * </table>
     *
     * filtering criteria over productTemplates
     *
     * @param \Google\AdsApi\AdManager\v201905\Statement $statement
     * @return \Google\AdsApi\AdManager\v201905\ProductTemplatePage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getProductTemplatesByStatement(\Google\AdsApi\AdManager\v201905\Statement $statement)
    {
      return $this->__soapCall('getProductTemplatesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs action on {@link ProductTemplate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of product templates
     *
     * @param \Google\AdsApi\AdManager\v201905\ProductTemplateAction $action
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function performProductTemplateAction(\Google\AdsApi\AdManager\v201905\ProductTemplateAction $action, \Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('performProductTemplateAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\AdManager\v201905\ProductTemplate[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updateProductTemplates(array $productTemplates)
    {
      return $this->__soapCall('updateProductTemplates', array(array('productTemplates' => $productTemplates)))->getRval();
    }

}
