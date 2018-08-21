<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201711\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201711\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201711\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201711\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201711\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201711\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201711\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201711\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201711\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201711\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201711\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201711\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201711\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201711\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201711\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201711\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201711\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201711\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201711\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201711\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201711\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201711\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201711\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201711\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201711\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201711\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201711\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v201711\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v201711\\LineItemTemplatePage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201711\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201711\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201711\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201711\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201711\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201711\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201711\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201711\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201711\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201711\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201711\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201711\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201711\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201711\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201711\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201711\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201711\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201711\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201711\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201711\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201711\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201711\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
