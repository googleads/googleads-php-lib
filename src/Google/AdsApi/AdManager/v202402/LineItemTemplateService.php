<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202402\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202402\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202402\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202402\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202402\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202402\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202402\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202402\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202402\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202402\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202402\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202402\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202402\\CurrencyCodeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202402\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202402\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202402\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202402\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202402\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202402\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202402\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202402\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202402\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202402\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202402\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202402\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202402\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202402\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemTemplatePage',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\MobileApplicationTargetingError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202402\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202402\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202402\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202402\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202402\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202402\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202402\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202402\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202402\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202402\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202402\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202402\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202402\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202402\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202402\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202402\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202402\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202402\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202402\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202402\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202402\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202402\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202402\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202402\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202402\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202402\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202402\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202402\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202402\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202402\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202402/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202402\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
