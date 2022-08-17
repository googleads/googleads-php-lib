<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NativeStyleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'ActivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202202\\ActivateNativeStyles',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'ArchiveNativeStyles' => 'Google\\AdsApi\\AdManager\\v202202\\ArchiveNativeStyles',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202202\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\ContentTargeting',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202202\\CreativeTemplateError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202202\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DayPartTargeting',
      'DeactivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202202\\DeactivateNativeStyles',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargeting',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202202\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202202\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202202\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceTargeting',
      'NativeStyleAction' => 'Google\\AdsApi\\AdManager\\v202202\\NativeStyleAction',
      'NativeStyle' => 'Google\\AdsApi\\AdManager\\v202202\\NativeStyle',
      'NativeStyleError' => 'Google\\AdsApi\\AdManager\\v202202\\NativeStyleError',
      'NativeStylePage' => 'Google\\AdsApi\\AdManager\\v202202\\NativeStylePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202202\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredSizeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202202\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202202\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202202\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202202\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202202\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202202\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202202\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTarget',
      'createNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createNativeStylesResponse',
      'getNativeStylesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getNativeStylesByStatementResponse',
      'performNativeStyleActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performNativeStyleActionResponse',
      'updateNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updateNativeStylesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/NativeStyleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202202\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202202\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
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
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\NativeStylePage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getNativeStylesByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getNativeStylesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link NativeStyle native styles} that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202202\NativeStyleAction $nativeStyleAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performNativeStyleAction(\Google\AdsApi\AdManager\v202202\NativeStyleAction $nativeStyleAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performNativeStyleAction', array(array('nativeStyleAction' => $nativeStyleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link NativeStyle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202202\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updateNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('updateNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

}
