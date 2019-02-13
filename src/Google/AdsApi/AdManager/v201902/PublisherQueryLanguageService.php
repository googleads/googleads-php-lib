<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201902\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\AdManager\\v201902\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\AdManager\\v201902\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201902\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201902\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201902\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v201902\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v201902\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201902\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryUnitError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201902\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201902\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201902\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201902\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201902\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201902\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201902\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\AdManager\\v201902\\ResultSet',
      'Row' => 'Google\\AdsApi\\AdManager\\v201902\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201902\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201902\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201902\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\AdManager\\v201902\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201902\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201902\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201902\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\AdManager\\v201902\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/PublisherQueryLanguageService?wsdl')
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
     * Retrieves rows of data that satisfy the given {@link Statement#query} from
     * the system.
     *
     * specify what data needs to returned
     *
     * @param \Google\AdsApi\AdManager\v201902\Statement $selectStatement
     * @return \Google\AdsApi\AdManager\v201902\ResultSet
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function select(\Google\AdsApi\AdManager\v201902\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
