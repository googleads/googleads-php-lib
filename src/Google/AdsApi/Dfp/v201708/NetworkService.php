<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NetworkService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201708\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidEmailError',
      'Network' => 'Google\\AdsApi\\Dfp\\v201708\\Network',
      'NetworkError' => 'Google\\AdsApi\\Dfp\\v201708\\NetworkError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201708\\PrecisionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RequestError' => 'Google\\AdsApi\\Dfp\\v201708\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\SetTopBoxCreativeError',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'getAllNetworksResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getAllNetworksResponse',
      'getCurrentNetworkResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getCurrentNetworkResponse',
      'makeTestNetworkResponse' => 'Google\\AdsApi\\Dfp\\v201708\\makeTestNetworkResponse',
      'updateNetworkResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateNetworkResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/NetworkService?wsdl')
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
     * Returns the list of {@link Network} objects to which the current login has
     * access.
     * <p>
     * Intended to be used without a network code in the SOAP header when the
     * login may have more than one network associated with it.
     * </p>
     *
     * @return \Google\AdsApi\Dfp\v201708\Network[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getAllNetworks()
    {
      return $this->__soapCall('getAllNetworks', array(array()))->getRval();
    }

    /**
     * Returns the current network for which requests are being made.
     *
     * @return \Google\AdsApi\Dfp\v201708\Network
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getCurrentNetwork()
    {
      return $this->__soapCall('getCurrentNetwork', array(array()))->getRval();
    }

    /**
     * Creates a new blank network for testing purposes using the current login.
     * <p>
     * Each login(i.e. email address) can only have one test network. Data from
     * any of your existing networks will not be transferred to the new test network.
     * Once the test network is created, the test network can be used in the API
     * by supplying the {@link Network#networkCode} in the SOAP header or by
     * logging into the DFP UI.
     * <p>
     * Test networks are limited in the following ways:
     * <ul>
     * <li>Test networks cannot serve ads.</li>
     * <li>Because test networks cannot serve ads, reports will always come
     * back without data.</li>
     * <li>Since forecasting requires serving history, forecast service results
     * will be faked. See {@link ForecastService} for more info.</li>
     * <li>Test networks are, by default, small business networks and do not have any
     * premium features. To have additional features turned on, please contact your
     * account manager. </li>
     * <li>Test networks are limited to 10,000 objects per entity type.</li>
     * </ul>
     * </p>
     *
     * @return \Google\AdsApi\Dfp\v201708\Network
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function makeTestNetwork()
    {
      return $this->__soapCall('makeTestNetwork', array(array()))->getRval();
    }

    /**
     * Updates the specified network. Currently, only the network display name can
     * be updated.
     *
     * @param \Google\AdsApi\Dfp\v201708\Network $network
     * @return \Google\AdsApi\Dfp\v201708\Network
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateNetwork(\Google\AdsApi\Dfp\v201708\Network $network)
    {
      return $this->__soapCall('updateNetwork', array(array('network' => $network)))->getRval();
    }

}
