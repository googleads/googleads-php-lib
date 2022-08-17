<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202208\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202208\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202208\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202208\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202208\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202208\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202208\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202208\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202208\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202208\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202208\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202208\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202208\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202208\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202208\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202208\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202208\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202208\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202208\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202208\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202208\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202208\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202208\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202208\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202208\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202208\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202208\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202208\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202208\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202208\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemTemplatePage',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\MobileApplicationTargetingError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202208\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202208\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202208\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202208\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202208\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202208\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202208\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202208\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202208\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202208\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202208\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202208\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202208\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202208\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202208\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202208\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202208\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202208\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202208\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202208\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202208\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202208\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202208\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202208\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202208\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202208\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202208\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202208\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202208\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202208\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202208\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202208\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202208\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202208/LineItemTemplateService?wsdl')
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
     * Gets a {@link LineItemTemplatePage} of {@link LineItemTemplate} objects
     * that satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
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
     * a set of line item templates
     *
     * @param \Google\AdsApi\AdManager\v202208\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202208\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202208\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
