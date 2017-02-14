<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201611\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\Dfp\\v201611\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201611\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201611\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\Dfp\\v201611\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201611\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaSet',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201611\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201611\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201611\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201611\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201611\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201611\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryUnitError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201611\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201611\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201611\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201611\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201611\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201611\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201611\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201611\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201611\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201611\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\Dfp\\v201611\\ResultSet',
      'Row' => 'Google\\AdsApi\\Dfp\\v201611\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201611\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201611\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\Dfp\\v201611\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201611\\Technology',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201611\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201611\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\Dfp\\v201611\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/PublisherQueryLanguageService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201611\Statement $selectStatement
     * @return \Google\AdsApi\Dfp\v201611\ResultSet
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function select(\Google\AdsApi\Dfp\v201611\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
