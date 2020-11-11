<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202011\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202011\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202011\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202011\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202011\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202011\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202011\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202011\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202011\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202011\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202011\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202011\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202011\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202011\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202011\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202011\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202011\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202011\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202011\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202011\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202011\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202011\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202011\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202011\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202011\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemTemplatePage',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\MobileApplicationTargetingError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202011\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202011\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202011\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202011\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202011\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202011\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202011\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202011\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202011\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202011\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202011\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202011\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202011\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202011\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202011\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202011\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202011\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202011\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202011\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202011\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202011\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202011\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202011\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202011\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202011\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202011\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202011\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202011/LineItemTemplateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\LineItemTemplatePage
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
