<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExchangeRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201711\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201711\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201711\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201711\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201711\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateValue',
      'DeleteExchangeRates' => 'Google\\AdsApi\\AdManager\\v201711\\DeleteExchangeRates',
      'ExchangeRateAction' => 'Google\\AdsApi\\AdManager\\v201711\\ExchangeRateAction',
      'ExchangeRate' => 'Google\\AdsApi\\AdManager\\v201711\\ExchangeRate',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201711\\ExchangeRateError',
      'ExchangeRatePage' => 'Google\\AdsApi\\AdManager\\v201711\\ExchangeRatePage',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201711\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201711\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201711\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201711\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201711\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201711\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201711\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201711\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201711\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201711\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201711\\Value',
      'createExchangeRatesResponse' => 'Google\\AdsApi\\AdManager\\v201711\\createExchangeRatesResponse',
      'getExchangeRatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201711\\getExchangeRatesByStatementResponse',
      'performExchangeRateActionResponse' => 'Google\\AdsApi\\AdManager\\v201711\\performExchangeRateActionResponse',
      'updateExchangeRatesResponse' => 'Google\\AdsApi\\AdManager\\v201711\\updateExchangeRatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/ExchangeRateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201711\ExchangeRate[] $exchangeRates
     * @return \Google\AdsApi\AdManager\v201711\ExchangeRate[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
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
     * @param \Google\AdsApi\AdManager\v201711\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201711\ExchangeRatePage
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function getExchangeRatesByStatement(\Google\AdsApi\AdManager\v201711\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v201711\ExchangeRateAction $exchangeRateAction
     * @param \Google\AdsApi\AdManager\v201711\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201711\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function performExchangeRateAction(\Google\AdsApi\AdManager\v201711\ExchangeRateAction $exchangeRateAction, \Google\AdsApi\AdManager\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('performExchangeRateAction', array(array('exchangeRateAction' => $exchangeRateAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ExchangeRate} objects.
     *
     * @param \Google\AdsApi\AdManager\v201711\ExchangeRate[] $exchangeRates
     * @return \Google\AdsApi\AdManager\v201711\ExchangeRate[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function updateExchangeRates(array $exchangeRates)
    {
      return $this->__soapCall('updateExchangeRates', array(array('exchangeRates' => $exchangeRates)))->getRval();
    }

}
