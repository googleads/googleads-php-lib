<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SuggestedAdUnitService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'AdUnitParent' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'ApproveSuggestedAdUnits' => 'Google\\AdsApi\\AdManager\\v201902\\ApproveSuggestedAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201902\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201902\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201902\\String_ValueMapEntry',
      'SuggestedAdUnitAction' => 'Google\\AdsApi\\AdManager\\v201902\\SuggestedAdUnitAction',
      'SuggestedAdUnit' => 'Google\\AdsApi\\AdManager\\v201902\\SuggestedAdUnit',
      'SuggestedAdUnitPage' => 'Google\\AdsApi\\AdManager\\v201902\\SuggestedAdUnitPage',
      'SuggestedAdUnitUpdateResult' => 'Google\\AdsApi\\AdManager\\v201902\\SuggestedAdUnitUpdateResult',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201902\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'getSuggestedAdUnitsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getSuggestedAdUnitsByStatementResponse',
      'performSuggestedAdUnitActionResponse' => 'Google\\AdsApi\\AdManager\\v201902\\performSuggestedAdUnitActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/SuggestedAdUnitService?wsdl')
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
     * Gets a {@link SuggestedAdUnitPage} of {@link SuggestedAdUnit} objects that
     * satisfy the filter query.  There is a system-enforced limit of 1000 on the number of suggested
     * ad units that are suggested at any one time.
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
     * a set of suggested ad units
     *
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\SuggestedAdUnitPage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getSuggestedAdUnitsByStatement(\Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('getSuggestedAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link SuggestedAdUnit} objects that match the given
     * {@link Statement#query}.  The following fields are supported for filtering:
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
     * a set of suggested ad units
     *
     * @param \Google\AdsApi\AdManager\v201902\SuggestedAdUnitAction $suggestedAdUnitAction
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\SuggestedAdUnitUpdateResult
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function performSuggestedAdUnitAction(\Google\AdsApi\AdManager\v201902\SuggestedAdUnitAction $suggestedAdUnitAction, \Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('performSuggestedAdUnitAction', array(array('suggestedAdUnitAction' => $suggestedAdUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

}
