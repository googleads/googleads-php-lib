<?php

namespace Google\AdsApi\AdManager\v202608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202608\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202608\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v202608\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202608\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202608\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202608\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202608\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202608\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202608\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202608\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BuyerUserListTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\AdManager\\v202608\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\AdManager\\v202608\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202608\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202608\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202608\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202608\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202608\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202608\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202608\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202608\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202608\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202608\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202608\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202608\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202608\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202608\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryUnitError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryUrlTargeting',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202608\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202608\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202608\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202608\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202608\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202608\\PermissionError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202608\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202608\\RegExError',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202608\\RequestError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202608\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\AdManager\\v202608\\ResultSet',
      'Row' => 'Google\\AdsApi\\AdManager\\v202608\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202608\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202608\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202608\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202608\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202608\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202608\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202608\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202608\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202608\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202608\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\AdManager\\v202608\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202608\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202608\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202608\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202608\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202608\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202608\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\AdManager\\v202608\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202608/PublisherQueryLanguageService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202608\Statement $selectStatement
     * @return \Google\AdsApi\AdManager\v202608\ResultSet
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function select(\Google\AdsApi\AdManager\v202608\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
