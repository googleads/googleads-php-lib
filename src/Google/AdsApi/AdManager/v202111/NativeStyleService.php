<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NativeStyleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202111\\ObjectValue',
      'ActivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202111\\ActivateNativeStyles',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202111\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202111\\ApplicationException',
      'ArchiveNativeStyles' => 'Google\\AdsApi\\AdManager\\v202111\\ArchiveNativeStyles',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202111\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202111\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202111\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202111\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202111\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202111\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\ContentTargeting',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202111\\CreativeTemplateError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202111\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202111\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202111\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202111\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202111\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DayPartTargeting',
      'DeactivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202111\\DeactivateNativeStyles',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202111\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202111\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202111\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\GeoTargeting',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202111\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202111\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202111\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202111\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202111\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDeviceTargeting',
      'NativeStyleAction' => 'Google\\AdsApi\\AdManager\\v202111\\NativeStyleAction',
      'NativeStyle' => 'Google\\AdsApi\\AdManager\\v202111\\NativeStyle',
      'NativeStyleError' => 'Google\\AdsApi\\AdManager\\v202111\\NativeStyleError',
      'NativeStylePage' => 'Google\\AdsApi\\AdManager\\v202111\\NativeStylePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202111\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202111\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202111\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202111\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202111\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202111\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredSizeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202111\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202111\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202111\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202111\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202111\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202111\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202111\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202111\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202111\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202111\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202111\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202111\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202111\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202111\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202111\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionTarget',
      'createNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\createNativeStylesResponse',
      'getNativeStylesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getNativeStylesByStatementResponse',
      'performNativeStyleActionResponse' => 'Google\\AdsApi\\AdManager\\v202111\\performNativeStyleActionResponse',
      'updateNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\updateNativeStylesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202111/NativeStyleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202111\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202111\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function createNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('createNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

    /**
     * Gets a {@link NativeStylePage NativeStylePage} of {@link NativeStyle} objects that satisfy
     * the given {@link Statement}. The following fields are supported for filtering:
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
     * native styles.
     *
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\NativeStylePage
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getNativeStylesByStatement(\Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('getNativeStylesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link NativeStyle native styles} that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202111\NativeStyleAction $nativeStyleAction
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function performNativeStyleAction(\Google\AdsApi\AdManager\v202111\NativeStyleAction $nativeStyleAction, \Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('performNativeStyleAction', array(array('nativeStyleAction' => $nativeStyleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link NativeStyle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202111\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202111\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function updateNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('updateNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

}
