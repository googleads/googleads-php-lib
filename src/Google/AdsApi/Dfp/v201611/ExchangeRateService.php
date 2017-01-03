<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExchangeRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'DeleteExchangeRates' => 'Google\\AdsApi\\Dfp\\v201611\\DeleteExchangeRates',
      'ExchangeRateAction' => 'Google\\AdsApi\\Dfp\\v201611\\ExchangeRateAction',
      'ExchangeRate' => 'Google\\AdsApi\\Dfp\\v201611\\ExchangeRate',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201611\\ExchangeRateError',
      'ExchangeRatePage' => 'Google\\AdsApi\\Dfp\\v201611\\ExchangeRatePage',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201611\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'createExchangeRatesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createExchangeRatesResponse',
      'getExchangeRatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getExchangeRatesByStatementResponse',
      'performExchangeRateActionResponse' => 'Google\\AdsApi\\Dfp\\v201611\\performExchangeRateActionResponse',
      'updateExchangeRatesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateExchangeRatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/ExchangeRateService?wsdl')
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
     * Creates new {@link ExchangeRate} objects.
     *
     * For each exchange rate, the following fields are required:
     * <ul>
     * <li>{@link ExchangeRate#currencyCode}</li>
     * <li>{@link ExchangeRate#exchangeRate} when {@link ExchangeRate#refreshRate} is
     * {@link ExchangeRateRefreshRate#FIXED}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201611\ExchangeRate[] $exchangeRates
     * @return \Google\AdsApi\Dfp\v201611\ExchangeRate[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function createExchangeRates(array $exchangeRates)
    {
      return $this->__soapCall('createExchangeRates', array(array('exchangeRates' => $exchangeRates)))->getRval();
    }

    /**
     * Gets a {@link ExchangeRatePage} of {@link ExchangeRate} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ExchangeRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code currencyCode}</td>
     * <td>{@link ExchangeRate#currencyCode}</td>
     * </tr>
     * <tr>
     * <td>{@code refreshRate}</td>
     * <td>{@link ExchangeRate#refreshRate}</td>
     * </tr>
     * <tr>
     * <td>{@code direction}</td>
     * <td>{@link ExchangeRate#direction}</td>
     * </tr>
     * <tr>
     * <td>{@code exchangeRate}</td>
     * <td>{@link ExchangeRate#exchangeRate}</td>
     * </tr>
     * </table>
     *
     * a set of exchange rates
     *
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\ExchangeRatePage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getExchangeRatesByStatement(\Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('getExchangeRatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs an action on {@link ExchangeRate} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ExchangeRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code currencyCode}</td>
     * <td>{@link ExchangeRate#currencyCode}</td>
     * </tr>
     * <tr>
     * <td>{@code refreshRate}</td>
     * <td>{@link ExchangeRate#refreshRate}</td>
     * </tr>
     * <tr>
     * <td>{@code direction}</td>
     * <td>{@link ExchangeRate#direction}</td>
     * </tr>
     * <tr>
     * <td>{@code exchangeRate}</td>
     * <td>{@link ExchangeRate#exchangeRate}</td>
     * </tr>
     * </table>
     *
     * a set of exchange rates
     *
     * @param \Google\AdsApi\Dfp\v201611\ExchangeRateAction $exchangeRateAction
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function performExchangeRateAction(\Google\AdsApi\Dfp\v201611\ExchangeRateAction $exchangeRateAction, \Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('performExchangeRateAction', array(array('exchangeRateAction' => $exchangeRateAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ExchangeRate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\ExchangeRate[] $exchangeRates
     * @return \Google\AdsApi\Dfp\v201611\ExchangeRate[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateExchangeRates(array $exchangeRates)
    {
      return $this->__soapCall('updateExchangeRates', array(array('exchangeRates' => $exchangeRates)))->getRval();
    }

}
