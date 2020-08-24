<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202005\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202005\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202005\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202005\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202005\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202005\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202005\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202005\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202005\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202005\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202005\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202005\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202005\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202005\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202005\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202005\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202005\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202005\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202005\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202005\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202005\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202005\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202005\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202005\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202005\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202005\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemTemplatePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202005\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202005\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202005\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202005\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202005\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202005\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202005\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202005\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202005\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202005\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202005\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202005\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202005\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202005\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202005\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202005\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202005\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202005\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202005\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202005\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202005\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202005\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202005\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202005\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202005\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202005\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202005\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202005\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202005/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202005\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202005\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202005\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
