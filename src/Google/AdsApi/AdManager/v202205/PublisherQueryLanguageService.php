<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202205\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v202205\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202205\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BuyerUserListTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\AdManager\\v202205\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\AdManager\\v202205\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202205\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202205\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202205\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUnitError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrlTargeting',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202205\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202205\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202205\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202205\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202205\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202205\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202205\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\AdManager\\v202205\\ResultSet',
      'Row' => 'Google\\AdsApi\\AdManager\\v202205\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202205\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202205\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\AdManager\\v202205\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202205\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202205\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202205\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\AdManager\\v202205\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/PublisherQueryLanguageService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202205\Statement $selectStatement
     * @return \Google\AdsApi\AdManager\v202205\ResultSet
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function select(\Google\AdsApi\AdManager\v202205\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
