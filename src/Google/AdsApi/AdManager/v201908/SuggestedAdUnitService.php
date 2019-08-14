<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SuggestedAdUnitService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201908\\ObjectValue',
      'AdUnitParent' => 'Google\\AdsApi\\AdManager\\v201908\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201908\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201908\\ApplicationException',
      'ApproveSuggestedAdUnits' => 'Google\\AdsApi\\AdManager\\v201908\\ApproveSuggestedAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201908\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201908\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201908\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201908\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201908\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201908\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201908\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201908\\InternalApiError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v201908\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v201908\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201908\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201908\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201908\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201908\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201908\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201908\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201908\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201908\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201908\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201908\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201908\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201908\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201908\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\String_ValueMapEntry',
      'SuggestedAdUnitAction' => 'Google\\AdsApi\\AdManager\\v201908\\SuggestedAdUnitAction',
      'SuggestedAdUnit' => 'Google\\AdsApi\\AdManager\\v201908\\SuggestedAdUnit',
      'SuggestedAdUnitPage' => 'Google\\AdsApi\\AdManager\\v201908\\SuggestedAdUnitPage',
      'SuggestedAdUnitUpdateResult' => 'Google\\AdsApi\\AdManager\\v201908\\SuggestedAdUnitUpdateResult',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201908\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201908\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201908\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201908\\Value',
      'getSuggestedAdUnitsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getSuggestedAdUnitsByStatementResponse',
      'performSuggestedAdUnitActionResponse' => 'Google\\AdsApi\\AdManager\\v201908\\performSuggestedAdUnitActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201908/SuggestedAdUnitService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\SuggestedAdUnitPage
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function getSuggestedAdUnitsByStatement(\Google\AdsApi\AdManager\v201908\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v201908\SuggestedAdUnitAction $suggestedAdUnitAction
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\SuggestedAdUnitUpdateResult
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function performSuggestedAdUnitAction(\Google\AdsApi\AdManager\v201908\SuggestedAdUnitAction $suggestedAdUnitAction, \Google\AdsApi\AdManager\v201908\Statement $filterStatement)
    {
      return $this->__soapCall('performSuggestedAdUnitAction', array(array('suggestedAdUnitAction' => $suggestedAdUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

}
