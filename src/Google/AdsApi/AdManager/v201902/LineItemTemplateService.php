<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201902\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201902\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201902\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201902\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201902\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201902\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201902\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201902\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemTemplatePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201902\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201902\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201902\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201902\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201902\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201902\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201902\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201902\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201902\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201902\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201902\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201902\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
