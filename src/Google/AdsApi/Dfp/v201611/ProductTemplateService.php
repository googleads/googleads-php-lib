<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ActivateProductTemplates' => 'Google\\AdsApi\\Dfp\\v201611\\ActivateProductTemplates',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201611\\AppliedLabel',
      'ArchiveProductTemplates' => 'Google\\AdsApi\\Dfp\\v201611\\ArchiveProductTemplates',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201611\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201611\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\Dfp\\v201611\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201611\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201611\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201611\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201611\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201611\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201611\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\DayPartTargetingError',
      'DeactivateProductTemplates' => 'Google\\AdsApi\\Dfp\\v201611\\DeactivateProductTemplates',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201611\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201611\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201611\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201611\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201611\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201611\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PlacementTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\PlacementTargeting',
      'ProductTemplateAction' => 'Google\\AdsApi\\Dfp\\v201611\\ProductTemplateAction',
      'ProductTemplateActionError' => 'Google\\AdsApi\\Dfp\\v201611\\ProductTemplateActionError',
      'ProductTemplate' => 'Google\\AdsApi\\Dfp\\v201611\\ProductTemplate',
      'ProductTemplateError' => 'Google\\AdsApi\\Dfp\\v201611\\ProductTemplateError',
      'ProductTemplateMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201611\\ProductTemplateMarketplaceInfo',
      'ProductTemplatePage' => 'Google\\AdsApi\\Dfp\\v201611\\ProductTemplatePage',
      'ProductSegmentation' => 'Google\\AdsApi\\Dfp\\v201611\\ProductSegmentation',
      'ProgrammaticEntitiesError' => 'Google\\AdsApi\\Dfp\\v201611\\ProgrammaticEntitiesError',
      'ProgrammaticProductError' => 'Google\\AdsApi\\Dfp\\v201611\\ProgrammaticProductError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201611\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201611\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201611\\Targeting',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201611\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201611\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201611\\TypeError',
      'UnarchiveProductTemplates' => 'Google\\AdsApi\\Dfp\\v201611\\UnarchiveProductTemplates',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201611\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTarget',
      'createProductTemplatesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createProductTemplatesResponse',
      'getProductTemplatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getProductTemplatesByStatementResponse',
      'performProductTemplateActionResponse' => 'Google\\AdsApi\\Dfp\\v201611\\performProductTemplateActionResponse',
      'updateProductTemplatesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateProductTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/ProductTemplateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201611\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\Dfp\v201611\ProductTemplate[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
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
     * @param \Google\AdsApi\Dfp\v201611\Statement $statement
     * @return \Google\AdsApi\Dfp\v201611\ProductTemplatePage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getProductTemplatesByStatement(\Google\AdsApi\Dfp\v201611\Statement $statement)
    {
      return $this->__soapCall('getProductTemplatesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs action on {@link ProductTemplate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of product templates
     *
     * @param \Google\AdsApi\Dfp\v201611\ProductTemplateAction $action
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function performProductTemplateAction(\Google\AdsApi\Dfp\v201611\ProductTemplateAction $action, \Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('performProductTemplateAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductTemplate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\Dfp\v201611\ProductTemplate[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateProductTemplates(array $productTemplates)
    {
      return $this->__soapCall('updateProductTemplates', array(array('productTemplates' => $productTemplates)))->getRval();
    }

}
