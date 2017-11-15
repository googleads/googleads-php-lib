<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'ActivateProducts' => 'Google\\AdsApi\\Dfp\\v201708\\ActivateProducts',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201708\\AppliedLabel',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201708\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\Dfp\\v201708\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201708\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201708\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201708\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201708\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\DayPartTargetingError',
      'DeactivateProducts' => 'Google\\AdsApi\\Dfp\\v201708\\DeactivateProducts',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201708\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201708\\FrequencyCap',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201708\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201708\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201708\\Money',
      'NonProgrammaticProductError' => 'Google\\AdsApi\\Dfp\\v201708\\NonProgrammaticProductError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'ProductAction' => 'Google\\AdsApi\\Dfp\\v201708\\ProductAction',
      'ProductActionError' => 'Google\\AdsApi\\Dfp\\v201708\\ProductActionError',
      'Product' => 'Google\\AdsApi\\Dfp\\v201708\\Product',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201708\\ProductError',
      'ProductMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201708\\ProductMarketplaceInfo',
      'ProductPage' => 'Google\\AdsApi\\Dfp\\v201708\\ProductPage',
      'ProgrammaticEntitiesError' => 'Google\\AdsApi\\Dfp\\v201708\\ProgrammaticEntitiesError',
      'ProgrammaticProductError' => 'Google\\AdsApi\\Dfp\\v201708\\ProgrammaticProductError',
      'PublishProducts' => 'Google\\AdsApi\\Dfp\\v201708\\PublishProducts',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201708\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201708\\Targeting',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201708\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201708\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201708\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTarget',
      'WithdrawProducts' => 'Google\\AdsApi\\Dfp\\v201708\\WithdrawProducts',
      'createProductsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createProductsResponse',
      'getProductsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getProductsByStatementResponse',
      'performProductActionResponse' => 'Google\\AdsApi\\Dfp\\v201708\\performProductActionResponse',
      'updateProductsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateProductsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/ProductService?wsdl')
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
     * Creates new {@link Product} objects. This method is only available when creating programmatic
     * guaranteed products when not using sales management.
     *
     * @param \Google\AdsApi\Dfp\v201708\Product[] $products
     * @return \Google\AdsApi\Dfp\v201708\Product[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function createProducts(array $products)
    {
      return $this->__soapCall('createProducts', array(array('products' => $products)))->getRval();
    }

    /**
     * Gets a {@link ProductPage} of {@link Product} objects that satisfy the criteria specified by
     * given {@link Statement#query}.
     * <p>
     * When using sales management, the following fields are supported for filtering and/or sorting.
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * <th scope="col">Filterable</th>
     * <th scope="col">Sortable</th>
     * </tr>
     * <tr>
     * <td>{@code rateCardId}</td>
     * <td>Rate card ID which the product is associated with</td>
     * <td>Yes</td>
     * <td>No</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Product#status}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemType}</td>
     * <td>{@link Product#lineItemType}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code productType}</td>
     * <td>{@link Product#productType}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code rateType}</td>
     * <td>{@link Product#rateType}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code productTemplateId}</td>
     * <td>{@link Product#productTemplateId}</td>
     * <td>Yes</td>
     * <td>No</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Product#name}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code description}</td>
     * <td>{@link Product#description}</td>
     * <td>Yes</td>
     * <td>No</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Product#id}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Product#lastModifiedDateTime}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * </table>
     *
     * When using programmatic guaranteed and not sales management,
     * the following fields are supported for filtering and/or sorting.
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * <th scope="col">Filterable</th>
     * <th scope="col">Sortable</th>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Product#status}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code rateType}</td>
     * <td>{@link Product#rateType}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Product#name}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Product#id}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Product#lastModifiedDateTime}</td>
     * <td>Yes</td>
     * <td>Yes</td>
     * </tr>
     * </table>
     *
     * criteria over products
     *
     * @param \Google\AdsApi\Dfp\v201708\Statement $statement
     * @return \Google\AdsApi\Dfp\v201708\ProductPage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getProductsByStatement(\Google\AdsApi\Dfp\v201708\Statement $statement)
    {
      return $this->__soapCall('getProductsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs action on {@link Product} objects that satisfy the given {@link Statement}.
     *
     * @param \Google\AdsApi\Dfp\v201708\ProductAction $productAction
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function performProductAction(\Google\AdsApi\Dfp\v201708\ProductAction $productAction, \Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('performProductAction', array(array('productAction' => $productAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Product} objects.
     * Note non-updatable fields will not be backfilled.
     *
     * @param \Google\AdsApi\Dfp\v201708\Product[] $products
     * @return \Google\AdsApi\Dfp\v201708\Product[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateProducts(array $products)
    {
      return $this->__soapCall('updateProducts', array(array('products' => $products)))->getRval();
    }

}
