<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202008\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202008\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202008\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202008\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202008\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202008\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202008\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202008\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202008\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202008\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202008\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202008\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202008\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202008\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202008\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202008\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202008\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202008\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202008\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202008\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemTemplatePage',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\MobileApplicationTargetingError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202008\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202008\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202008\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202008\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202008\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202008\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202008\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202008\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202008\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202008\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202008\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202008\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202008\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202008\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202008\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202008\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202008\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202008\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202008\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202008\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202008\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202008\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202008\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202008\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202008\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202008\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202008/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
