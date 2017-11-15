<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201708\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201708\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\Dfp\\v201708\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\Dfp\\v201708\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaSet',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201708\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201708\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201708\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryUnitError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201708\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201708\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201708\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201708\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201708\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201708\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\Dfp\\v201708\\ResultSet',
      'Row' => 'Google\\AdsApi\\Dfp\\v201708\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201708\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\Dfp\\v201708\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201708\\Technology',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201708\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\Dfp\\v201708\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/PublisherQueryLanguageService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $selectStatement
     * @return \Google\AdsApi\Dfp\v201708\ResultSet
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function select(\Google\AdsApi\Dfp\v201708\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
