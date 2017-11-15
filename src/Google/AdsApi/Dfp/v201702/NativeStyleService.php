<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NativeStyleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201702\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201702\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201702\\ApplicationException',
      'ArchiveNativeStyles' => 'Google\\AdsApi\\Dfp\\v201702\\ArchiveNativeStyles',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201702\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201702\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201702\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201702\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201702\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201702\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\ContentTargeting',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeTemplateError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteriaSet',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201702\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201702\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201702\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201702\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201702\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201702\\FieldPathElement',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\GeoTargeting',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201702\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201702\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\InventoryTargeting',
      'Location' => 'Google\\AdsApi\\Dfp\\v201702\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201702\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDeviceTargeting',
      'NativeStyleAction' => 'Google\\AdsApi\\Dfp\\v201702\\NativeStyleAction',
      'NativeStyle' => 'Google\\AdsApi\\Dfp\\v201702\\NativeStyle',
      'NativeStyleError' => 'Google\\AdsApi\\Dfp\\v201702\\NativeStyleError',
      'NativeStylePage' => 'Google\\AdsApi\\Dfp\\v201702\\NativeStylePage',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201702\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201702\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201702\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201702\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201702\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201702\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredSizeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201702\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201702\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201702\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201702\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201702\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201702\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201702\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201702\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201702\\Targeting',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201702\\Technology',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201702\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201702\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201702\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201702\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201702\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionTarget',
      'createNativeStylesResponse' => 'Google\\AdsApi\\Dfp\\v201702\\createNativeStylesResponse',
      'getNativeStylesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201702\\getNativeStylesByStatementResponse',
      'performNativeStyleActionResponse' => 'Google\\AdsApi\\Dfp\\v201702\\performNativeStyleActionResponse',
      'updateNativeStylesResponse' => 'Google\\AdsApi\\Dfp\\v201702\\updateNativeStylesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201702/NativeStyleService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201702\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\Dfp\v201702\NativeStyle[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
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
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\NativeStylePage
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function getNativeStylesByStatement(\Google\AdsApi\Dfp\v201702\Statement $filterStatement)
    {
      return $this->__soapCall('getNativeStylesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link NativeStyle native styles} that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\Dfp\v201702\NativeStyleAction $nativeStyleAction
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function performNativeStyleAction(\Google\AdsApi\Dfp\v201702\NativeStyleAction $nativeStyleAction, \Google\AdsApi\Dfp\v201702\Statement $filterStatement)
    {
      return $this->__soapCall('performNativeStyleAction', array(array('nativeStyleAction' => $nativeStyleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link NativeStyle} objects.
     *
     * @param \Google\AdsApi\Dfp\v201702\NativeStyle[] $nativeStyles
     * @return \Google\AdsApi\Dfp\v201702\NativeStyle[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function updateNativeStyles(array $nativeStyles)
    {
      return $this->__soapCall('updateNativeStyles', array(array('nativeStyles' => $nativeStyles)))->getRval();
    }

}
