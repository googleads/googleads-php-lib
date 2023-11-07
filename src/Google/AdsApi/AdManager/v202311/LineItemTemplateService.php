<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202311\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202311\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202311\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202311\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202311\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202311\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202311\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202311\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202311\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202311\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202311\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202311\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202311\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202311\\CurrencyCodeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202311\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202311\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202311\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202311\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202311\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202311\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202311\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202311\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202311\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202311\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202311\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202311\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202311\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202311\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemTemplatePage',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\MobileApplicationTargetingError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202311\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202311\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202311\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202311\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202311\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202311\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202311\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202311\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202311\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202311\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202311\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202311\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202311\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202311\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202311\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202311\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202311\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202311\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202311\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202311\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202311\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202311\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202311\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202311\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202311\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202311\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202311\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202311\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202311\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202311\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202311/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202311\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202311\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202311\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
