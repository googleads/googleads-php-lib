<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SuggestedAdUnitService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'AdUnitParent' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'ApproveSuggestedAdUnits' => 'Google\\AdsApi\\AdManager\\v201905\\ApproveSuggestedAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201905\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'SuggestedAdUnitAction' => 'Google\\AdsApi\\AdManager\\v201905\\SuggestedAdUnitAction',
      'SuggestedAdUnit' => 'Google\\AdsApi\\AdManager\\v201905\\SuggestedAdUnit',
      'SuggestedAdUnitPage' => 'Google\\AdsApi\\AdManager\\v201905\\SuggestedAdUnitPage',
      'SuggestedAdUnitUpdateResult' => 'Google\\AdsApi\\AdManager\\v201905\\SuggestedAdUnitUpdateResult',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201905\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201905\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'getSuggestedAdUnitsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getSuggestedAdUnitsByStatementResponse',
      'performSuggestedAdUnitActionResponse' => 'Google\\AdsApi\\AdManager\\v201905\\performSuggestedAdUnitActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/SuggestedAdUnitService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\SuggestedAdUnitPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getSuggestedAdUnitsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v201905\SuggestedAdUnitAction $suggestedAdUnitAction
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\SuggestedAdUnitUpdateResult
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function performSuggestedAdUnitAction(\Google\AdsApi\AdManager\v201905\SuggestedAdUnitAction $suggestedAdUnitAction, \Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('performSuggestedAdUnitAction', array(array('suggestedAdUnitAction' => $suggestedAdUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

}
