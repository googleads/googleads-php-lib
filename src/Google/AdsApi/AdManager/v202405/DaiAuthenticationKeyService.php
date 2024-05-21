<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DaiAuthenticationKeyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202405\\ObjectValue',
      'ActivateDaiAuthenticationKeys' => 'Google\\AdsApi\\AdManager\\v202405\\ActivateDaiAuthenticationKeys',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202405\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202405\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202405\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202405\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202405\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202405\\CommonError',
      'DaiAuthenticationKeyAction' => 'Google\\AdsApi\\AdManager\\v202405\\DaiAuthenticationKeyAction',
      'DaiAuthenticationKeyActionError' => 'Google\\AdsApi\\AdManager\\v202405\\DaiAuthenticationKeyActionError',
      'DaiAuthenticationKey' => 'Google\\AdsApi\\AdManager\\v202405\\DaiAuthenticationKey',
      'DaiAuthenticationKeyPage' => 'Google\\AdsApi\\AdManager\\v202405\\DaiAuthenticationKeyPage',
      'Date' => 'Google\\AdsApi\\AdManager\\v202405\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202405\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202405\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202405\\DateValue',
      'DeactivateDaiAuthenticationKeys' => 'Google\\AdsApi\\AdManager\\v202405\\DeactivateDaiAuthenticationKeys',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202405\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202405\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202405\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202405\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202405\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202405\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202405\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202405\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202405\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202405\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202405\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202405\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202405\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202405\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202405\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202405\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202405\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202405\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202405\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202405\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202405\\Value',
      'createDaiAuthenticationKeysResponse' => 'Google\\AdsApi\\AdManager\\v202405\\createDaiAuthenticationKeysResponse',
      'getDaiAuthenticationKeysByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202405\\getDaiAuthenticationKeysByStatementResponse',
      'performDaiAuthenticationKeyActionResponse' => 'Google\\AdsApi\\AdManager\\v202405\\performDaiAuthenticationKeyActionResponse',
      'updateDaiAuthenticationKeysResponse' => 'Google\\AdsApi\\AdManager\\v202405\\updateDaiAuthenticationKeysResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202405/DaiAuthenticationKeyService?wsdl')
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
     * Creates new {@link DaiAuthenticationKey} objects.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link DaiAuthenticationKey#name}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202405\DaiAuthenticationKey[] $daiAuthenticationKeys
     * @return \Google\AdsApi\AdManager\v202405\DaiAuthenticationKey[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function createDaiAuthenticationKeys(array $daiAuthenticationKeys)
    {
      return $this->__soapCall('createDaiAuthenticationKeys', array(array('daiAuthenticationKeys' => $daiAuthenticationKeys)))->getRval();
    }

    /**
     * Gets a {@link DaiAuthenticationKeyPage} of {@link DaiAuthenticationKey} objects that satisfy
     * the given {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link DaiAuthenticationKey#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link DaiAuthenticationKey#status}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link DaiAuthenticationKey#name}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202405\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202405\DaiAuthenticationKeyPage
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function getDaiAuthenticationKeysByStatement(\Google\AdsApi\AdManager\v202405\Statement $filterStatement)
    {
      return $this->__soapCall('getDaiAuthenticationKeysByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link DaiAuthenticationKey} objects that match the given {@link
     * Statement#query}.
     *
     * <p>DAI authentication keys cannot be deactivated if there are active {@link LiveStreamEvent}s
     * or Content Sources that are using them.
     *
     * @param \Google\AdsApi\AdManager\v202405\DaiAuthenticationKeyAction $daiAuthenticationKeyAction
     * @param \Google\AdsApi\AdManager\v202405\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202405\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function performDaiAuthenticationKeyAction(\Google\AdsApi\AdManager\v202405\DaiAuthenticationKeyAction $daiAuthenticationKeyAction, \Google\AdsApi\AdManager\v202405\Statement $filterStatement)
    {
      return $this->__soapCall('performDaiAuthenticationKeyAction', array(array('daiAuthenticationKeyAction' => $daiAuthenticationKeyAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link DaiAuthenticationKey} objects.
     *
     * @param \Google\AdsApi\AdManager\v202405\DaiAuthenticationKey[] $daiAuthenticationKeys
     * @return \Google\AdsApi\AdManager\v202405\DaiAuthenticationKey[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function updateDaiAuthenticationKeys(array $daiAuthenticationKeys)
    {
      return $this->__soapCall('updateDaiAuthenticationKeys', array(array('daiAuthenticationKeys' => $daiAuthenticationKeys)))->getRval();
    }

}
