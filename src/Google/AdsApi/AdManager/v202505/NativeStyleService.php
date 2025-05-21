<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NativeStyleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202505\\ObjectValue',
      'ActivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202505\\ActivateNativeStyles',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202505\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202505\\ApplicationException',
      'ArchiveNativeStyles' => 'Google\\AdsApi\\AdManager\\v202505\\ArchiveNativeStyles',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202505\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202505\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202505\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202505\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202505\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202505\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202505\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\ContentTargeting',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202505\\CreativeTemplateError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202505\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202505\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202505\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202505\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202505\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202505\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202505\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202505\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202505\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DayPartTargeting',
      'DeactivateNativeStyles' => 'Google\\AdsApi\\AdManager\\v202505\\DeactivateNativeStyles',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202505\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202505\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202505\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\GeoTargeting',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202505\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202505\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202505\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202505\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202505\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDeviceTargeting',
      'NativeStyleAction' => 'Google\\AdsApi\\AdManager\\v202505\\NativeStyleAction',
      'NativeStyle' => 'Google\\AdsApi\\AdManager\\v202505\\NativeStyle',
      'NativeStyleError' => 'Google\\AdsApi\\AdManager\\v202505\\NativeStyleError',
      'NativeStylePage' => 'Google\\AdsApi\\AdManager\\v202505\\NativeStylePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202505\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202505\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202505\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202505\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202505\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202505\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202505\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202505\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredSizeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202505\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202505\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202505\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202505\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202505\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202505\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202505\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202505\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202505\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202505\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202505\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202505\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202505\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202505\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202505\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202505\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202505\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionTarget',
      'createNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202505\\createNativeStylesResponse',
      'getNativeStylesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202505\\getNativeStylesByStatementResponse',
      'performNativeStyleActionResponse' => 'Google\\AdsApi\\AdManager\\v202505\\performNativeStyleActionResponse',
      'updateNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202505\\updateNativeStylesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202505/NativeStyleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202505\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202505\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
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
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\NativeStylePage
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function getNativeStylesByStatement(\Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('getNativeStylesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link NativeStyle native styles} that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202505\NativeStyleAction $nativeStyleAction
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function performNativeStyleAction(\Google\AdsApi\AdManager\v202505\NativeStyleAction $nativeStyleAction, \Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('performNativeStyleAction', array(array('nativeStyleAction' => $nativeStyleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link NativeStyle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202505\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\AdManager\v202505\NativeStyle[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function updateNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('updateNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

}
