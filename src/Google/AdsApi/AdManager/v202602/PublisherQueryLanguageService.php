<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202602\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BuyerUserListTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\AdManager\\v202602\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\AdManager\\v202602\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202602\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202602\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202602\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202602\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202602\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202602\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUnitError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrlTargeting',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202602\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202602\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202602\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202602\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\AdManager\\v202602\\ResultSet',
      'Row' => 'Google\\AdsApi\\AdManager\\v202602\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202602\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202602\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202602\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\AdManager\\v202602\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202602\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202602\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\AdManager\\v202602\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/PublisherQueryLanguageService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $selectStatement
     * @return \Google\AdsApi\AdManager\v202602\ResultSet
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function select(\Google\AdsApi\AdManager\v202602\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
