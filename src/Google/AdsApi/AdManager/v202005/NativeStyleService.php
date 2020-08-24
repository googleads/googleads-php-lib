<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NativeStyleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202005\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202005\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202005\\ApplicationException',
      'ArchiveNativeStyles' => 'Google\\AdsApi\\AdManager\\v202005\\ArchiveNativeStyles',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202005\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202005\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202005\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202005\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202005\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202005\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202005\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\ContentTargeting',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202005\\CreativeTemplateError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202005\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202005\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202005\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202005\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202005\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202005\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202005\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202005\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202005\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202005\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202005\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202005\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\GeoTargeting',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202005\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202005\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202005\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202005\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202005\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202005\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202005\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\MobileDeviceTargeting',
      'NativeStyleAction' => 'Google\\AdsApi\\AdManager\\v202005\\NativeStyleAction',
      'NativeStyle' => 'Google\\AdsApi\\AdManager\\v202005\\NativeStyle',
      'NativeStyleError' => 'Google\\AdsApi\\AdManager\\v202005\\NativeStyleError',
      'NativeStylePage' => 'Google\\AdsApi\\AdManager\\v202005\\NativeStylePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202005\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202005\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202005\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202005\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202005\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202005\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202005\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202005\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredSizeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202005\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202005\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202005\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202005\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202005\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202005\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202005\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202005\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202005\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202005\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202005\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202005\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202005\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202005\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202005\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPositionTarget',
      'createNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202005\\createNativeStylesResponse',
      'getNativeStylesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202005\\getNativeStylesByStatementResponse',
      'performNativeStyleActionResponse' => 'Google\\AdsApi\\AdManager\\v202005\\performNativeStyleActionResponse',
      'updateNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202005\\updateNativeStylesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202005/NativeStyleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202005\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202005\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
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
     * @param \Google\AdsApi\AdManager\v202005\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202005\NativeStylePage
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function getNativeStylesByStatement(\Google\AdsApi\AdManager\v202005\Statement $filterStatement)
    {
      return $this->__soapCall('getNativeStylesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link NativeStyle native styles} that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202005\NativeStyleAction $nativeStyleAction
     * @param \Google\AdsApi\AdManager\v202005\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202005\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function performNativeStyleAction(\Google\AdsApi\AdManager\v202005\NativeStyleAction $nativeStyleAction, \Google\AdsApi\AdManager\v202005\Statement $filterStatement)
    {
      return $this->__soapCall('performNativeStyleAction', array(array('nativeStyleAction' => $nativeStyleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link NativeStyle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202005\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202005\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function updateNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('updateNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

}
