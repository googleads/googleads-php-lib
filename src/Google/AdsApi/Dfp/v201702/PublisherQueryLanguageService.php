<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201702\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201702\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\Dfp\\v201702\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201702\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201702\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201702\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201702\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201702\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201702\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201702\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\BrowserTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\Dfp\\v201702\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\Dfp\\v201702\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201702\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteriaSet',
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
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201702\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201702\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201702\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201702\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201702\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201702\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201702\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201702\\InventoryUnitError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201702\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201702\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201702\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201702\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201702\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201702\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201702\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201702\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201702\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201702\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201702\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201702\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201702\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\Dfp\\v201702\\ResultSet',
      'Row' => 'Google\\AdsApi\\Dfp\\v201702\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201702\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201702\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201702\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201702\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201702\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201702\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201702\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201702\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201702\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\Dfp\\v201702\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201702\\Technology',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201702\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201702\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201702\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201702\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201702\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\Dfp\\v201702\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201702/PublisherQueryLanguageService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201702\Statement $selectStatement
     * @return \Google\AdsApi\Dfp\v201702\ResultSet
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function select(\Google\AdsApi\Dfp\v201702\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
