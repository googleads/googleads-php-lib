<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202308\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202308\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202308\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202308\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202308\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202308\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202308\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202308\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202308\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202308\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202308\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202308\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202308\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202308\\CurrencyCodeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202308\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202308\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202308\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202308\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202308\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202308\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202308\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202308\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202308\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202308\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202308\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202308\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202308\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202308\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemTemplatePage',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\MobileApplicationTargetingError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202308\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202308\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202308\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202308\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202308\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202308\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202308\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202308\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202308\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202308\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202308\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202308\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202308\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202308\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202308\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202308\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202308\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202308\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202308\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202308\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202308\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202308\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202308\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202308\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202308\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202308\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202308\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202308\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202308\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202308\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202308/LineItemTemplateService?wsdl')
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
     * Gets a {@link LineItemTemplatePage} of {@link LineItemTemplate} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link LineItemTemplate#id}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
