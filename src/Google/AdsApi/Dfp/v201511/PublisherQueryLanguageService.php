<?php

namespace Google\AdsApi\Dfp\v201511;

class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201511\\ObjectValue',
      'AdUnitAfcSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitAfcSizeError',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201511\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201511\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201511\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201511\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201511\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201511\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\Dfp\\v201511\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201511\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201511\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteriaSet',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201511\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201511\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201511\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201511\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201511\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201511\\FeatureError',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201511\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201511\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201511\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201511\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryUnitError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201511\\Location',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201511\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201511\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201511\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201511\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201511\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201511\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201511\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201511\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201511\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201511\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201511\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201511\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\Dfp\\v201511\\ResultSet',
      'Row' => 'Google\\AdsApi\\Dfp\\v201511\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201511\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201511\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201511\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201511\\StatementError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201511\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201511\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\Dfp\\v201511\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201511\\Technology',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201511\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201511\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201511\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201511\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201511\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionTarget',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201511/PublisherQueryLanguageService?wsdl')
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
     *
     * @param \Google\AdsApi\Dfp\v201511\Statement $selectStatement
     * @return \Google\AdsApi\Dfp\v201511\ResultSet
     */
    public function select(\Google\AdsApi\Dfp\v201511\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->rval;
    }

}
