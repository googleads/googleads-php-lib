<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NativeStyleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202008\\ObjectValue',
      'ActivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202008\\ActivateNativeStyles',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202008\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202008\\ApplicationException',
      'ArchiveNativeStyles' => 'Google\\AdsApi\\AdManager\\v202008\\ArchiveNativeStyles',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202008\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202008\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202008\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202008\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202008\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\ContentTargeting',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplateError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202008\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202008\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202008\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DayPartTargeting',
      'DeactivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202008\\DeactivateNativeStyles',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202008\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202008\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\GeoTargeting',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202008\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202008\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202008\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202008\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202008\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceTargeting',
      'NativeStyleAction' => 'Google\\AdsApi\\AdManager\\v202008\\NativeStyleAction',
      'NativeStyle' => 'Google\\AdsApi\\AdManager\\v202008\\NativeStyle',
      'NativeStyleError' => 'Google\\AdsApi\\AdManager\\v202008\\NativeStyleError',
      'NativeStylePage' => 'Google\\AdsApi\\AdManager\\v202008\\NativeStylePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202008\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202008\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202008\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202008\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202008\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202008\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredSizeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202008\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202008\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202008\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202008\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202008\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202008\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202008\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202008\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202008\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202008\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202008\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202008\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202008\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202008\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTarget',
      'createNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202008\\createNativeStylesResponse',
      'getNativeStylesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getNativeStylesByStatementResponse',
      'performNativeStyleActionResponse' => 'Google\\AdsApi\\AdManager\\v202008\\performNativeStyleActionResponse',
      'updateNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202008\\updateNativeStylesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202008/NativeStyleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202008\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202008\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
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
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\NativeStylePage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getNativeStylesByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('getNativeStylesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link NativeStyle native styles} that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202008\NativeStyleAction $nativeStyleAction
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function performNativeStyleAction(\Google\AdsApi\AdManager\v202008\NativeStyleAction $nativeStyleAction, \Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('performNativeStyleAction', array(array('nativeStyleAction' => $nativeStyleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link NativeStyle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202008\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202008\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function updateNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('updateNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

}
