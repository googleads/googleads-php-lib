<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202602\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202602\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202602\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202602\\CurrencyCodeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202602\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202602\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202602\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202602\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202602\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemTemplatePage',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargetingError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202602\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202602\\ProgrammaticError',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202602\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202602\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202602\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202602\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202602\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202602\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202602\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
