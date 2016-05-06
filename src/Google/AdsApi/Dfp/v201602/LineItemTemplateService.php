<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201602\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201602\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201602\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201602\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201602\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201602\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201602\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201602\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201602\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201602\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemTemplatePage',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201602\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201602\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201602\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201602\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201602\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201602\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201602\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201602\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201602\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\VideoPositionTargetingError',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\LineItemTemplatePage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

}
