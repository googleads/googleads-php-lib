<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NetworkService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ChildPublisher' => 'Google\\AdsApi\\AdManager\\v202105\\ChildPublisher',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202105\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202105\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202105\\AuthenticationError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202105\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202105\\CommonError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202105\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202105\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202105\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202105\\InvalidEmailError',
      'LiveStreamEventSlateError' => 'Google\\AdsApi\\AdManager\\v202105\\LiveStreamEventSlateError',
      'Network' => 'Google\\AdsApi\\AdManager\\v202105\\Network',
      'NetworkError' => 'Google\\AdsApi\\AdManager\\v202105\\NetworkError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202105\\NotNullError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202105\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202105\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202105\\PrecisionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202105\\QuotaError',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202105\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202105\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\SetTopBoxCreativeError',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202105\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202105\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202105\\StringLengthError',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202105\\ThirdPartyDataDeclaration',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202105\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202105\\UniqueError',
      'UrlError' => 'Google\\AdsApi\\AdManager\\v202105\\UrlError',
      'getAllNetworksResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getAllNetworksResponse',
      'getCurrentNetworkResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getCurrentNetworkResponse',
      'getDefaultThirdPartyDataDeclarationResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getDefaultThirdPartyDataDeclarationResponse',
      'makeTestNetworkResponse' => 'Google\\AdsApi\\AdManager\\v202105\\makeTestNetworkResponse',
      'updateNetworkResponse' => 'Google\\AdsApi\\AdManager\\v202105\\updateNetworkResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202105/NetworkService?wsdl')
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
     * @return \Google\AdsApi\AdManager\v202105\Network[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getAllNetworks()
    {
      return $this->__soapCall('getAllNetworks', array(array()))->getRval();
    }

    /**
     * Returns the current network for which requests are being made.
     *
     * @return \Google\AdsApi\AdManager\v202105\Network
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getCurrentNetwork()
    {
      return $this->__soapCall('getCurrentNetwork', array(array()))->getRval();
    }

    /**
     * Returns the default {@link ThirdPartyDataDeclaration} for this network. If this setting has
     * never been updated on your network, then this API response will be empty.
     *
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyDataDeclaration
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getDefaultThirdPartyDataDeclaration()
    {
      return $this->__soapCall('getDefaultThirdPartyDataDeclaration', array(array()))->getRval();
    }

    /**
     * Creates a new blank network for testing purposes using the current login.
     * <p>
     * Each login(i.e. email address) can only have one test network. Data from
     * any of your existing networks will not be transferred to the new test network.
     * Once the test network is created, the test network can be used in the API
     * by supplying the {@link Network#networkCode} in the SOAP header or by
     * logging into the Ad Manager UI.
     * <p>
     * Test networks are limited in the following ways:
     * <ul>
     * <li>Test networks cannot serve ads.</li>
     * <li>Because test networks cannot serve ads, reports will always come
     * back without data.</li>
     * <li>Since forecasting requires serving history, forecast service results
     * will be faked. See {@link ForecastService} for more info.</li>
     * <li>Test networks are, by default, Ad Manager networks and don't have any features
     * from Ad Manager 360. To have additional features turned on, please contact your
     * account manager. </li>
     * <li>Test networks are limited to 10,000 objects per entity type.</li>
     * </ul>
     * </p>
     *
     * @return \Google\AdsApi\AdManager\v202105\Network
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function makeTestNetwork()
    {
      return $this->__soapCall('makeTestNetwork', array(array()))->getRval();
    }

    /**
     * Updates the specified network. Currently, only the network display name can
     * be updated.
     *
     * @param \Google\AdsApi\AdManager\v202105\Network $network
     * @return \Google\AdsApi\AdManager\v202105\Network
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function updateNetwork(\Google\AdsApi\AdManager\v202105\Network $network)
    {
      return $this->__soapCall('updateNetwork', array(array('network' => $network)))->getRval();
    }

}
