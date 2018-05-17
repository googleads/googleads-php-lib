<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'ActivateProducts' => 'Google\\AdsApi\\Dfp\\v201805\\ActivateProducts',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201805\\AppliedLabel',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\Dfp\\v201805\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201805\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201805\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201805\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201805\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargetingError',
      'DeactivateProducts' => 'Google\\AdsApi\\Dfp\\v201805\\DeactivateProducts',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201805\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201805\\FrequencyCap',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201805\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceTargeting',
      'NonProgrammaticProductError' => 'Google\\AdsApi\\Dfp\\v201805\\NonProgrammaticProductError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'PreferredDealError' => 'Google\\AdsApi\\Dfp\\v201805\\PreferredDealError',
      'ProductAction' => 'Google\\AdsApi\\Dfp\\v201805\\ProductAction',
      'ProductActionError' => 'Google\\AdsApi\\Dfp\\v201805\\ProductActionError',
      'Product' => 'Google\\AdsApi\\Dfp\\v201805\\Product',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201805\\ProductError',
      'ProductMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201805\\ProductMarketplaceInfo',
      'ProductPage' => 'Google\\AdsApi\\Dfp\\v201805\\ProductPage',
      'ProgrammaticEntitiesError' => 'Google\\AdsApi\\Dfp\\v201805\\ProgrammaticEntitiesError',
      'ProgrammaticProductError' => 'Google\\AdsApi\\Dfp\\v201805\\ProgrammaticProductError',
      'PublishProducts' => 'Google\\AdsApi\\Dfp\\v201805\\PublishProducts',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201805\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201805\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201805\\Targeting',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201805\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201805\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201805\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTarget',
      'WithdrawProducts' => 'Google\\AdsApi\\Dfp\\v201805\\WithdrawProducts',
      'getProductsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getProductsByStatementResponse',
      'performProductActionResponse' => 'Google\\AdsApi\\Dfp\\v201805\\performProductActionResponse',
      'updateProductsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateProductsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/ProductService?wsdl')
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
     * criteria over products
     *
     * @param \Google\AdsApi\Dfp\v201805\Statement $statement
     * @return \Google\AdsApi\Dfp\v201805\ProductPage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getProductsByStatement(\Google\AdsApi\Dfp\v201805\Statement $statement)
    {
      return $this->__soapCall('getProductsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs action on {@link Product} objects that satisfy the given {@link Statement}.
     *
     * @param \Google\AdsApi\Dfp\v201805\ProductAction $productAction
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function performProductAction(\Google\AdsApi\Dfp\v201805\ProductAction $productAction, \Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performProductAction', array(array('productAction' => $productAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Product} objects.
     * Note non-updatable fields will not be backfilled.
     *
     * @param \Google\AdsApi\Dfp\v201805\Product[] $products
     * @return \Google\AdsApi\Dfp\v201805\Product[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateProducts(array $products)
    {
      return $this->__soapCall('updateProducts', array(array('products' => $products)))->getRval();
    }

}
