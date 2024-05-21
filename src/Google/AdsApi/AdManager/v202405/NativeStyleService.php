<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NativeStyleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202405\\ObjectValue',
      'ActivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202405\\ActivateNativeStyles',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202405\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202405\\ApplicationException',
      'ArchiveNativeStyles' => 'Google\\AdsApi\\AdManager\\v202405\\ArchiveNativeStyles',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202405\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202405\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202405\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202405\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202405\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202405\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202405\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\ContentTargeting',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202405\\CreativeTemplateError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202405\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202405\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202405\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202405\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202405\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202405\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202405\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DayPartTargeting',
      'DeactivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202405\\DeactivateNativeStyles',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202405\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202405\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202405\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\GeoTargeting',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202405\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202405\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202405\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202405\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202405\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDeviceTargeting',
      'NativeStyleAction' => 'Google\\AdsApi\\AdManager\\v202405\\NativeStyleAction',
      'NativeStyle' => 'Google\\AdsApi\\AdManager\\v202405\\NativeStyle',
      'NativeStyleError' => 'Google\\AdsApi\\AdManager\\v202405\\NativeStyleError',
      'NativeStylePage' => 'Google\\AdsApi\\AdManager\\v202405\\NativeStylePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202405\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202405\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202405\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202405\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202405\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202405\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredSizeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202405\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202405\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202405\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202405\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202405\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202405\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202405\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202405\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202405\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202405\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202405\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202405\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202405\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202405\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202405\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202405\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202405\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202405\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202405\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPositionTarget',
      'createNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202405\\createNativeStylesResponse',
      'getNativeStylesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202405\\getNativeStylesByStatementResponse',
      'performNativeStyleActionResponse' => 'Google\\AdsApi\\AdManager\\v202405\\performNativeStyleActionResponse',
      'updateNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202405\\updateNativeStylesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202405/NativeStyleService?wsdl')
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
     * Creates new {@link NativeStyle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202405\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202405\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function createNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('createNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

    /**
     * Gets a {@link NativeStylePage NativeStylePage} of {@link NativeStyle} objects that satisfy the
     * given {@link Statement}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link NativeStyle#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link NativeStyle#name}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202405\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202405\NativeStylePage
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function getNativeStylesByStatement(\Google\AdsApi\AdManager\v202405\Statement $filterStatement)
    {
      return $this->__soapCall('getNativeStylesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link NativeStyle native styles} that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202405\NativeStyleAction $nativeStyleAction
     * @param \Google\AdsApi\AdManager\v202405\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202405\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function performNativeStyleAction(\Google\AdsApi\AdManager\v202405\NativeStyleAction $nativeStyleAction, \Google\AdsApi\AdManager\v202405\Statement $filterStatement)
    {
      return $this->__soapCall('performNativeStyleAction', array(array('nativeStyleAction' => $nativeStyleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link NativeStyle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202405\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202405\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function updateNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('updateNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

}
