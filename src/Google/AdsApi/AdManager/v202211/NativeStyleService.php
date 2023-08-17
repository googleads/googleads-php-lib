<?php

namespace Google\AdsApi\AdManager\v202211;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NativeStyleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202211\\ObjectValue',
      'ActivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202211\\ActivateNativeStyles',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202211\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202211\\ApplicationException',
      'ArchiveNativeStyles' => 'Google\\AdsApi\\AdManager\\v202211\\ArchiveNativeStyles',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202211\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202211\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202211\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202211\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202211\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202211\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202211\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\ContentTargeting',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeTemplateError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202211\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202211\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202211\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202211\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202211\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DayPartTargeting',
      'DeactivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202211\\DeactivateNativeStyles',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202211\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202211\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202211\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\GeoTargeting',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202211\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202211\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202211\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202211\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202211\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202211\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202211\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\MobileDeviceTargeting',
      'NativeStyleAction' => 'Google\\AdsApi\\AdManager\\v202211\\NativeStyleAction',
      'NativeStyle' => 'Google\\AdsApi\\AdManager\\v202211\\NativeStyle',
      'NativeStyleError' => 'Google\\AdsApi\\AdManager\\v202211\\NativeStyleError',
      'NativeStylePage' => 'Google\\AdsApi\\AdManager\\v202211\\NativeStylePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202211\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202211\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202211\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202211\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202211\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202211\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202211\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202211\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredSizeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202211\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202211\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202211\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202211\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202211\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202211\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202211\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202211\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202211\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202211\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202211\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202211\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202211\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202211\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202211\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202211\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202211\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202211\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202211\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202211\\VideoPositionTarget',
      'createNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202211\\createNativeStylesResponse',
      'getNativeStylesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202211\\getNativeStylesByStatementResponse',
      'performNativeStyleActionResponse' => 'Google\\AdsApi\\AdManager\\v202211\\performNativeStyleActionResponse',
      'updateNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202211\\updateNativeStylesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202211/NativeStyleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202211\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202211\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
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
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\NativeStylePage
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function getNativeStylesByStatement(\Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('getNativeStylesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link NativeStyle native styles} that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202211\NativeStyleAction $nativeStyleAction
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function performNativeStyleAction(\Google\AdsApi\AdManager\v202211\NativeStyleAction $nativeStyleAction, \Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('performNativeStyleAction', array(array('nativeStyleAction' => $nativeStyleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link NativeStyle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202211\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202211\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function updateNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('updateNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

}
