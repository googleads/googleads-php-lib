<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202505\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202505\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202505\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202505\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202505\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202505\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202505\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202505\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202505\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202505\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202505\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202505\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202505\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202505\\CurrencyCodeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202505\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202505\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202505\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202505\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202505\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202505\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202505\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202505\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202505\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202505\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202505\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202505\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202505\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202505\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202505\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202505\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202505\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202505\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202505\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202505\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202505\\LineItemTemplatePage',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\MobileApplicationTargetingError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202505\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202505\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202505\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202505\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202505\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202505\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202505\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202505\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202505\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202505\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202505\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202505\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202505\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202505\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202505\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202505\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202505\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202505\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202505\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202505\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202505\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202505\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202505\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202505\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202505\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202505\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202505\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202505\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202505\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202505\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202505/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
