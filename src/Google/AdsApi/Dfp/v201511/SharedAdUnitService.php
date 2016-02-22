<?php

namespace Google\AdsApi\Dfp\v201511;

class SharedAdUnitService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201511\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201511\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201511\\ApplicationException',
      'ApproveSharedAdUnits' => 'Google\\AdsApi\\Dfp\\v201511\\ApproveSharedAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201511\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201511\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201511\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201511\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201511\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201511\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201511\\InternalApiError',
      'AdUnitSize' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitSize',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201511\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201511\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201511\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201511\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201511\\QuotaError',
      'RejectSharedAdUnits' => 'Google\\AdsApi\\Dfp\\v201511\\RejectSharedAdUnits',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201511\\SetValue',
      'SharedAdUnitAction' => 'Google\\AdsApi\\Dfp\\v201511\\SharedAdUnitAction',
      'SharedAdUnit' => 'Google\\AdsApi\\Dfp\\v201511\\SharedAdUnit',
      'SharedAdUnitPage' => 'Google\\AdsApi\\Dfp\\v201511\\SharedAdUnitPage',
      'Size' => 'Google\\AdsApi\\Dfp\\v201511\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201511\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201511\\StatementError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201511\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201511\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201511\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201511\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201511\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201511/SharedAdUnitService?wsdl')
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
     * Gets a {@link SharedAdUnitPage} of {@link SharedAdUnit} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link SharedAdUnit#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link SharedAdUnit#name}</td>
     * </tr>
     * </table>
     *
     * a set of shared ad units
     *
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\SharedAdUnitPage
     */
    public function getSharedAdUnitsByStatement(\Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('getSharedAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * <b>This method is deprecated and is a no-op.</b>
     *
     * <p>Performs actions on shared ad unit objects that match the given
     * {@link Statement#query}.
     *
     * a set of shared ad units
     * on which the action was performed.
     *
     * @param \Google\AdsApi\Dfp\v201511\SharedAdUnitAction $sharedAdUnitAction
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\UpdateResult
     */
    public function performSharedAdUnitAction(\Google\AdsApi\Dfp\v201511\SharedAdUnitAction $sharedAdUnitAction, \Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('performSharedAdUnitAction', array(array('sharedAdUnitAction' => $sharedAdUnitAction, 'filterStatement' => $filterStatement)))->rval;
    }

}
