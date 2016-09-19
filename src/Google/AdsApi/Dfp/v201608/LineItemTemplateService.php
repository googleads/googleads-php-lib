<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201608\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201608\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201608\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201608\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201608\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201608\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201608\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201608\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201608\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201608\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201608\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201608\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201608\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201608\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201608\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201608\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201608\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201608\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201608\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201608\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201608\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201608\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201608\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201608\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201608\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201608\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201608\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\Dfp\\v201608\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\Dfp\\v201608\\LineItemTemplatePage',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201608\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201608\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201608\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201608\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201608\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201608\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201608\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201608\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201608\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201608\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201608\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201608\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201608\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201608\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201608\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201608\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201608\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201608\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201608\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201608\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201608\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\VideoPositionTargetingError',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201608/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201608\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201608\LineItemTemplatePage
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\Dfp\v201608\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

}
