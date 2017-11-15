<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201711\\ObjectValue',
      'ActivateProductTemplates' => 'Google\\AdsApi\\Dfp\\v201711\\ActivateProductTemplates',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201711\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201711\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201711\\AppliedLabel',
      'ArchiveProductTemplates' => 'Google\\AdsApi\\Dfp\\v201711\\ArchiveProductTemplates',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201711\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201711\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\Dfp\\v201711\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201711\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201711\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201711\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201711\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201711\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201711\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201711\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201711\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201711\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\DayPartTargetingError',
      'DeactivateProductTemplates' => 'Google\\AdsApi\\Dfp\\v201711\\DeactivateProductTemplates',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201711\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201711\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201711\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201711\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201711\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201711\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201711\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201711\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201711\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201711\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201711\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201711\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201711\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201711\\PermissionError',
      'PlacementTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\PlacementTargeting',
      'ProductTemplateAction' => 'Google\\AdsApi\\Dfp\\v201711\\ProductTemplateAction',
      'ProductTemplateActionError' => 'Google\\AdsApi\\Dfp\\v201711\\ProductTemplateActionError',
      'ProductTemplate' => 'Google\\AdsApi\\Dfp\\v201711\\ProductTemplate',
      'ProductTemplateError' => 'Google\\AdsApi\\Dfp\\v201711\\ProductTemplateError',
      'ProductTemplateMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201711\\ProductTemplateMarketplaceInfo',
      'ProductTemplatePage' => 'Google\\AdsApi\\Dfp\\v201711\\ProductTemplatePage',
      'ProductSegmentation' => 'Google\\AdsApi\\Dfp\\v201711\\ProductSegmentation',
      'ProgrammaticEntitiesError' => 'Google\\AdsApi\\Dfp\\v201711\\ProgrammaticEntitiesError',
      'ProgrammaticProductError' => 'Google\\AdsApi\\Dfp\\v201711\\ProgrammaticProductError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201711\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201711\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201711\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201711\\Targeting',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201711\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201711\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201711\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201711\\TypeError',
      'UnarchiveProductTemplates' => 'Google\\AdsApi\\Dfp\\v201711\\UnarchiveProductTemplates',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201711\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201711\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201711\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionTarget',
      'createProductTemplatesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\createProductTemplatesResponse',
      'getProductTemplatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getProductTemplatesByStatementResponse',
      'performProductTemplateActionResponse' => 'Google\\AdsApi\\Dfp\\v201711\\performProductTemplateActionResponse',
      'updateProductTemplatesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\updateProductTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/ProductTemplateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201711\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\Dfp\v201711\ProductTemplate[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
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
     * @param \Google\AdsApi\Dfp\v201711\Statement $statement
     * @return \Google\AdsApi\Dfp\v201711\ProductTemplatePage
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getProductTemplatesByStatement(\Google\AdsApi\Dfp\v201711\Statement $statement)
    {
      return $this->__soapCall('getProductTemplatesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs action on {@link ProductTemplate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of product templates
     *
     * @param \Google\AdsApi\Dfp\v201711\ProductTemplateAction $action
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function performProductTemplateAction(\Google\AdsApi\Dfp\v201711\ProductTemplateAction $action, \Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('performProductTemplateAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductTemplate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201711\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\Dfp\v201711\ProductTemplate[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function updateProductTemplates(array $productTemplates)
    {
      return $this->__soapCall('updateProductTemplates', array(array('productTemplates' => $productTemplates)))->getRval();
    }

}
