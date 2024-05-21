<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202405\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202405\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v202405\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202405\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202405\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202405\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202405\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202405\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202405\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202405\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\BuyerUserListTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\AdManager\\v202405\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202405\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\AdManager\\v202405\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202405\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202405\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\CmsMetadataCriteria',
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
      'DealError' => 'Google\\AdsApi\\AdManager\\v202405\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202405\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202405\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202405\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202405\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202405\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202405\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202405\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryUnitError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryUrlTargeting',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202405\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202405\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202405\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202405\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202405\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202405\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202405\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202405\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202405\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202405\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202405\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202405\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202405\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202405\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202405\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\AdManager\\v202405\\ResultSet',
      'Row' => 'Google\\AdsApi\\AdManager\\v202405\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202405\\AudienceSegmentError',
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
      'TargetingValue' => 'Google\\AdsApi\\AdManager\\v202405\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202405\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202405\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202405\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202405\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202405\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202405\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202405\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\AdManager\\v202405\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202405/PublisherQueryLanguageService?wsdl')
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
     * Retrieves rows of data that satisfy the given {@link Statement#query} from the system.
     *
     * @param \Google\AdsApi\AdManager\v202405\Statement $selectStatement
     * @return \Google\AdsApi\AdManager\v202405\ResultSet
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function select(\Google\AdsApi\AdManager\v202405\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
