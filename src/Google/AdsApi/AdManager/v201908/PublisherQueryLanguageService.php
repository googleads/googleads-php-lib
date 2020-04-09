<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201908\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201908\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v201908\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201908\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201908\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201908\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201908\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201908\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201908\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201908\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\BuyerUserListTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\AdManager\\v201908\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\AdManager\\v201908\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201908\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201908\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201908\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201908\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201908\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201908\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201908\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201908\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201908\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v201908\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201908\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v201908\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201908\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201908\\InventoryUnitError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201908\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201908\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201908\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201908\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201908\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201908\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201908\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201908\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201908\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201908\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201908\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201908\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201908\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201908\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201908\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201908\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201908\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\AdManager\\v201908\\ResultSet',
      'Row' => 'Google\\AdsApi\\AdManager\\v201908\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201908\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201908\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201908\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201908\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201908\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201908\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201908\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201908\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\AdManager\\v201908\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201908\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201908\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201908\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201908\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201908\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v201908\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201908\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201908\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201908\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\AdManager\\v201908\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201908/PublisherQueryLanguageService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201908\Statement $selectStatement
     * @return \Google\AdsApi\AdManager\v201908\ResultSet
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function select(\Google\AdsApi\AdManager\v201908\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
