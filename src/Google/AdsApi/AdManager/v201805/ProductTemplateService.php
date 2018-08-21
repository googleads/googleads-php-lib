<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201805\\ObjectValue',
      'ActivateProductTemplates' => 'Google\\AdsApi\\AdManager\\v201805\\ActivateProductTemplates',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201805\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201805\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201805\\AppliedLabel',
      'ArchiveProductTemplates' => 'Google\\AdsApi\\AdManager\\v201805\\ArchiveProductTemplates',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201805\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201805\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201805\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\AdManager\\v201805\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201805\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201805\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201805\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201805\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201805\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201805\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201805\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201805\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201805\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201805\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201805\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201805\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\AdManager\\v201805\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\AdManager\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201805\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201805\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\DayPartTargetingError',
      'DeactivateProductTemplates' => 'Google\\AdsApi\\AdManager\\v201805\\DeactivateProductTemplates',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201805\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201805\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201805\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201805\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201805\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201805\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201805\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201805\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201805\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201805\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201805\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201805\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201805\\PermissionError',
      'PlacementTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\PlacementTargeting',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v201805\\PreferredDealError',
      'ProductTemplateAction' => 'Google\\AdsApi\\AdManager\\v201805\\ProductTemplateAction',
      'ProductTemplateActionError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductTemplateActionError',
      'ProductTemplate' => 'Google\\AdsApi\\AdManager\\v201805\\ProductTemplate',
      'ProductTemplateError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductTemplateError',
      'ProductTemplateMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201805\\ProductTemplateMarketplaceInfo',
      'ProductTemplatePage' => 'Google\\AdsApi\\AdManager\\v201805\\ProductTemplatePage',
      'ProductSegmentation' => 'Google\\AdsApi\\AdManager\\v201805\\ProductSegmentation',
      'ProgrammaticEntitiesError' => 'Google\\AdsApi\\AdManager\\v201805\\ProgrammaticEntitiesError',
      'ProgrammaticProductError' => 'Google\\AdsApi\\AdManager\\v201805\\ProgrammaticProductError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201805\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201805\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201805\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201805\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201805\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201805\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201805\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201805\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201805\\TypeError',
      'UnarchiveProductTemplates' => 'Google\\AdsApi\\AdManager\\v201805\\UnarchiveProductTemplates',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201805\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201805\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPositionTarget',
      'createProductTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\createProductTemplatesResponse',
      'getProductTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getProductTemplatesByStatementResponse',
      'performProductTemplateActionResponse' => 'Google\\AdsApi\\AdManager\\v201805\\performProductTemplateActionResponse',
      'updateProductTemplatesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\updateProductTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/ProductTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201805\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\AdManager\v201805\ProductTemplate[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
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
     * @param \Google\AdsApi\AdManager\v201805\Statement $statement
     * @return \Google\AdsApi\AdManager\v201805\ProductTemplatePage
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getProductTemplatesByStatement(\Google\AdsApi\AdManager\v201805\Statement $statement)
    {
      return $this->__soapCall('getProductTemplatesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs action on {@link ProductTemplate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of product templates
     *
     * @param \Google\AdsApi\AdManager\v201805\ProductTemplateAction $action
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function performProductTemplateAction(\Google\AdsApi\AdManager\v201805\ProductTemplateAction $action, \Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performProductTemplateAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductTemplate} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\AdManager\v201805\ProductTemplate[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function updateProductTemplates(array $productTemplates)
    {
      return $this->__soapCall('updateProductTemplates', array(array('productTemplates' => $productTemplates)))->getRval();
    }

}
