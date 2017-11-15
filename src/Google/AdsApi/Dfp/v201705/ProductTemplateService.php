<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ActivateProductTemplates' => 'Google\\AdsApi\\Dfp\\v201705\\ActivateProductTemplates',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201705\\AppliedLabel',
      'ArchiveProductTemplates' => 'Google\\AdsApi\\Dfp\\v201705\\ArchiveProductTemplates',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201705\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\Dfp\\v201705\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201705\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201705\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201705\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201705\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\DayPartTargetingError',
      'DeactivateProductTemplates' => 'Google\\AdsApi\\Dfp\\v201705\\DeactivateProductTemplates',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201705\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201705\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201705\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201705\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'PlacementTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\PlacementTargeting',
      'ProductTemplateAction' => 'Google\\AdsApi\\Dfp\\v201705\\ProductTemplateAction',
      'ProductTemplateActionError' => 'Google\\AdsApi\\Dfp\\v201705\\ProductTemplateActionError',
      'ProductTemplate' => 'Google\\AdsApi\\Dfp\\v201705\\ProductTemplate',
      'ProductTemplateError' => 'Google\\AdsApi\\Dfp\\v201705\\ProductTemplateError',
      'ProductTemplateMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201705\\ProductTemplateMarketplaceInfo',
      'ProductTemplatePage' => 'Google\\AdsApi\\Dfp\\v201705\\ProductTemplatePage',
      'ProductSegmentation' => 'Google\\AdsApi\\Dfp\\v201705\\ProductSegmentation',
      'ProgrammaticEntitiesError' => 'Google\\AdsApi\\Dfp\\v201705\\ProgrammaticEntitiesError',
      'ProgrammaticProductError' => 'Google\\AdsApi\\Dfp\\v201705\\ProgrammaticProductError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201705\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201705\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201705\\Targeting',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201705\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201705\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201705\\TypeError',
      'UnarchiveProductTemplates' => 'Google\\AdsApi\\Dfp\\v201705\\UnarchiveProductTemplates',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201705\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201705\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTarget',
      'createProductTemplatesResponse' => 'Google\\AdsApi\\Dfp\\v201705\\createProductTemplatesResponse',
      'getProductTemplatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getProductTemplatesByStatementResponse',
      'performProductTemplateActionResponse' => 'Google\\AdsApi\\Dfp\\v201705\\performProductTemplateActionResponse',
      'updateProductTemplatesResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updateProductTemplatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/ProductTemplateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\Dfp\v201705\ProductTemplate[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $statement
     * @return \Google\AdsApi\Dfp\v201705\ProductTemplatePage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getProductTemplatesByStatement(\Google\AdsApi\Dfp\v201705\Statement $statement)
    {
      return $this->__soapCall('getProductTemplatesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs action on {@link ProductTemplate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of product templates
     *
     * @param \Google\AdsApi\Dfp\v201705\ProductTemplateAction $action
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function performProductTemplateAction(\Google\AdsApi\Dfp\v201705\ProductTemplateAction $action, \Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('performProductTemplateAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductTemplate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201705\ProductTemplate[] $productTemplates
     * @return \Google\AdsApi\Dfp\v201705\ProductTemplate[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updateProductTemplates(array $productTemplates)
    {
      return $this->__soapCall('updateProductTemplates', array(array('productTemplates' => $productTemplates)))->getRval();
    }

}
