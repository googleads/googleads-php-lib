<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201702\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201702\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201702\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201702\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201702\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201702\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201702\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201702\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201702\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201702\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201702\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201702\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201702\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201702\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201702\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201702\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201702\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201702\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201702\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201702\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201702\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemTemplatePage',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201702\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201702\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201702\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201702\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201702\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201702\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201702\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201702\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201702\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201702\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201702\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201702\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201702\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201702\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201702\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201702\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201702\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201702\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201702\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201702\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201702\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201702\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201702\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201702\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201702\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201702\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201702\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201702\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201702/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\LineItemTemplatePage
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\Dfp\v201702\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
