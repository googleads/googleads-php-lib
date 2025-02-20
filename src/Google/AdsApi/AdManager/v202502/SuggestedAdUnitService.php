<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SuggestedAdUnitService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202502\\ObjectValue',
      'AdUnitParent' => 'Google\\AdsApi\\AdManager\\v202502\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202502\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202502\\ApplicationException',
      'ApproveSuggestedAdUnits' => 'Google\\AdsApi\\AdManager\\v202502\\ApproveSuggestedAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202502\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202502\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202502\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202502\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202502\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202502\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202502\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202502\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202502\\InternalApiError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v202502\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202502\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202502\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202502\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202502\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202502\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202502\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202502\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202502\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202502\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202502\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202502\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202502\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202502\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202502\\String_ValueMapEntry',
      'SuggestedAdUnitAction' => 'Google\\AdsApi\\AdManager\\v202502\\SuggestedAdUnitAction',
      'SuggestedAdUnit' => 'Google\\AdsApi\\AdManager\\v202502\\SuggestedAdUnit',
      'SuggestedAdUnitPage' => 'Google\\AdsApi\\AdManager\\v202502\\SuggestedAdUnitPage',
      'SuggestedAdUnitUpdateResult' => 'Google\\AdsApi\\AdManager\\v202502\\SuggestedAdUnitUpdateResult',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202502\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202502\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202502\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202502\\Value',
      'getSuggestedAdUnitsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getSuggestedAdUnitsByStatementResponse',
      'performSuggestedAdUnitActionResponse' => 'Google\\AdsApi\\AdManager\\v202502\\performSuggestedAdUnitActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202502/SuggestedAdUnitService?wsdl')
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
     * Gets a {@link SuggestedAdUnitPage} of {@link SuggestedAdUnit} objects that satisfy the filter
     * query. There is a system-enforced limit of 1000 on the number of suggested ad units that are
     * suggested at any one time.
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link SuggestedAdUnit#id}</td>
     * </tr>
     * <tr>
     * <td>{@code numRequests}</td>
     * <td>{@link SuggestedAdUnit#numRequests}</td>
     * </tr>
     * </table>
     *
     * <p><strong>Note:</strong> After API version 201311, the {@code id} field will only be
     * numerical.
     *
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\SuggestedAdUnitPage
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getSuggestedAdUnitsByStatement(\Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('getSuggestedAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link SuggestedAdUnit} objects that match the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link SuggestedAdUnit#id}</td>
     * </tr>
     * <tr>
     * <td>{@code numRequests}</td>
     * <td>{@link SuggestedAdUnit#numRequests}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202502\SuggestedAdUnitAction $suggestedAdUnitAction
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\SuggestedAdUnitUpdateResult
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function performSuggestedAdUnitAction(\Google\AdsApi\AdManager\v202502\SuggestedAdUnitAction $suggestedAdUnitAction, \Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('performSuggestedAdUnitAction', array(array('suggestedAdUnitAction' => $suggestedAdUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

}
