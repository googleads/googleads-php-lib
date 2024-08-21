<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202408\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202408\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202408\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202408\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202408\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202408\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202408\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202408\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202408\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202408\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202408\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202408\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202408\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202408\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202408\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202408\\CurrencyCodeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202408\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202408\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202408\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202408\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202408\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202408\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202408\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202408\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202408\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202408\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202408\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202408\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202408\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202408\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202408\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202408\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202408\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202408\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202408\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202408\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202408\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202408\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202408\\LineItemTemplatePage',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\MobileApplicationTargetingError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202408\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202408\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202408\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202408\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202408\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202408\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202408\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202408\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202408\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202408\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202408\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202408\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202408\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202408\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202408\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202408\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202408\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202408\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202408\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202408\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202408\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202408\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202408\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202408\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202408\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202408\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202408\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202408\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202408\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202408\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202408\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202408\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202408\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202408\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202408\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202408\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202408\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202408\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202408/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202408\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202408\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202408\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202408\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
