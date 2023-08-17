<?php

namespace Google\AdsApi\AdManager\v202305;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NetworkService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ChildPublisher' => 'Google\\AdsApi\\AdManager\\v202305\\ChildPublisher',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202305\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202305\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202305\\AuthenticationError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202305\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202305\\CommonError',
      'ExchangeSignupApiError' => 'Google\\AdsApi\\AdManager\\v202305\\ExchangeSignupApiError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202305\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202305\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202305\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202305\\InvalidEmailError',
      'InventoryClientApiError' => 'Google\\AdsApi\\AdManager\\v202305\\InventoryClientApiError',
      'LiveStreamEventSlateError' => 'Google\\AdsApi\\AdManager\\v202305\\LiveStreamEventSlateError',
      'Network' => 'Google\\AdsApi\\AdManager\\v202305\\Network',
      'NetworkError' => 'Google\\AdsApi\\AdManager\\v202305\\NetworkError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202305\\NotNullError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202305\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202305\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202305\\PrecisionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202305\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202305\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202305\\QuotaError',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202305\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202305\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202305\\SetTopBoxCreativeError',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202305\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202305\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202305\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202305\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202305\\StringLengthError',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202305\\ThirdPartyDataDeclaration',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202305\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202305\\UniqueError',
      'UrlError' => 'Google\\AdsApi\\AdManager\\v202305\\UrlError',
      'getAllNetworksResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getAllNetworksResponse',
      'getCurrentNetworkResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getCurrentNetworkResponse',
      'getDefaultThirdPartyDataDeclarationResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getDefaultThirdPartyDataDeclarationResponse',
      'makeTestNetworkResponse' => 'Google\\AdsApi\\AdManager\\v202305\\makeTestNetworkResponse',
      'updateNetworkResponse' => 'Google\\AdsApi\\AdManager\\v202305\\updateNetworkResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202305/NetworkService?wsdl')
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
     * Returns the list of {@link Network} objects to which the current login has access.
     *
     * <p>Intended to be used without a network code in the SOAP header when the login may have more
     * than one network associated with it.
     *
     * @return \Google\AdsApi\AdManager\v202305\Network[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getAllNetworks()
    {
      return $this->__soapCall('getAllNetworks', array(array()))->getRval();
    }

    /**
     * Returns the current network for which requests are being made.
     *
     * @return \Google\AdsApi\AdManager\v202305\Network
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getCurrentNetwork()
    {
      return $this->__soapCall('getCurrentNetwork', array(array()))->getRval();
    }

    /**
     * Returns the default {@link ThirdPartyDataDeclaration} for this network. If this setting has
     * never been updated on your network, then this API response will be empty.
     *
     * @return \Google\AdsApi\AdManager\v202305\ThirdPartyDataDeclaration
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getDefaultThirdPartyDataDeclaration()
    {
      return $this->__soapCall('getDefaultThirdPartyDataDeclaration', array(array()))->getRval();
    }

    /**
     * Creates a new blank network for testing purposes using the current login.
     *
     * <p>Each login(i.e. email address) can only have one test network. Data from any of your
     * existing networks will not be transferred to the new test network. Once the test network is
     * created, the test network can be used in the API by supplying the {@link Network#networkCode}
     * in the SOAP header or by logging into the Ad Manager UI.
     *
     * <p>Test networks are limited in the following ways:
     *
     * <ul>
     * <li>Test networks cannot serve ads.
     * <li>Because test networks cannot serve ads, reports will always come back without data.
     * <li>Since forecasting requires serving history, forecast service results will be faked. See
     * {@link ForecastService} for more info.
     * <li>Test networks are, by default, Ad Manager networks and don't have any features from Ad
     * Manager 360. To have additional features turned on, please contact your account manager.
     * <li>Test networks are limited to 10,000 objects per entity type.
     * </ul>
     *
     * @return \Google\AdsApi\AdManager\v202305\Network
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function makeTestNetwork()
    {
      return $this->__soapCall('makeTestNetwork', array(array()))->getRval();
    }

    /**
     * Updates the specified network. Currently, only the network display name can be updated.
     *
     * @param \Google\AdsApi\AdManager\v202305\Network $network
     * @return \Google\AdsApi\AdManager\v202305\Network
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function updateNetwork(\Google\AdsApi\AdManager\v202305\Network $network)
    {
      return $this->__soapCall('updateNetwork', array(array('network' => $network)))->getRval();
    }

}
