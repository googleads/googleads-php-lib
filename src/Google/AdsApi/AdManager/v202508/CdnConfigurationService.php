<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CdnConfigurationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202508\\ObjectValue',
      'ActivateCdnConfigurations' => 'Google\\AdsApi\\AdManager\\v202508\\ActivateCdnConfigurations',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202508\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202508\\ApplicationException',
      'ArchiveCdnConfigurations' => 'Google\\AdsApi\\AdManager\\v202508\\ArchiveCdnConfigurations',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202508\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202508\\BooleanValue',
      'CdnConfigurationAction' => 'Google\\AdsApi\\AdManager\\v202508\\CdnConfigurationAction',
      'CdnConfiguration' => 'Google\\AdsApi\\AdManager\\v202508\\CdnConfiguration',
      'CdnConfigurationError' => 'Google\\AdsApi\\AdManager\\v202508\\CdnConfigurationError',
      'CdnConfigurationPage' => 'Google\\AdsApi\\AdManager\\v202508\\CdnConfigurationPage',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202508\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202508\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202508\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202508\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202508\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202508\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202508\\InvalidUrlError',
      'MediaLocationSettings' => 'Google\\AdsApi\\AdManager\\v202508\\MediaLocationSettings',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202508\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202508\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202508\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202508\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202508\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredError',
      'SecurityPolicySettings' => 'Google\\AdsApi\\AdManager\\v202508\\SecurityPolicySettings',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202508\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202508\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapResponseHeader',
      'SourceContentConfiguration' => 'Google\\AdsApi\\AdManager\\v202508\\SourceContentConfiguration',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202508\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202508\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202508\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202508\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202508\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202508\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202508\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202508\\Value',
      'createCdnConfigurationsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\createCdnConfigurationsResponse',
      'getCdnConfigurationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getCdnConfigurationsByStatementResponse',
      'performCdnConfigurationActionResponse' => 'Google\\AdsApi\\AdManager\\v202508\\performCdnConfigurationActionResponse',
      'updateCdnConfigurationsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\updateCdnConfigurationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202508/CdnConfigurationService?wsdl')
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
     * Creates new {@link CdnConfiguration} objects.
     *
     * @param \Google\AdsApi\AdManager\v202508\CdnConfiguration[] $cdnConfigurations
     * @return \Google\AdsApi\AdManager\v202508\CdnConfiguration[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function createCdnConfigurations(array $cdnConfigurations)
    {
      return $this->__soapCall('createCdnConfigurations', array(array('cdnConfigurations' => $cdnConfigurations)))->getRval();
    }

    /**
     * Gets a {@link CdnConfigurationPage} of {@link CdnConfiguration} objects that satisfy the given
     * {@link Statement#query}. Currently only CDN Configurations of type {@link
     * CdnConfigurationType#LIVE_STREAM_SOURCE_CONTENT} will be returned. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CdnConfiguration#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CdnConfiguration#name}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202508\Statement $statement
     * @return \Google\AdsApi\AdManager\v202508\CdnConfigurationPage
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getCdnConfigurationsByStatement(\Google\AdsApi\AdManager\v202508\Statement $statement)
    {
      return $this->__soapCall('getCdnConfigurationsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link CdnConfiguration} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202508\CdnConfigurationAction $cdnConfigurationAction
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function performCdnConfigurationAction(\Google\AdsApi\AdManager\v202508\CdnConfigurationAction $cdnConfigurationAction, \Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('performCdnConfigurationAction', array(array('cdnConfigurationAction' => $cdnConfigurationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link CdnConfiguration} objects.
     *
     * @param \Google\AdsApi\AdManager\v202508\CdnConfiguration[] $cdnConfigurations
     * @return \Google\AdsApi\AdManager\v202508\CdnConfiguration[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function updateCdnConfigurations(array $cdnConfigurations)
    {
      return $this->__soapCall('updateCdnConfigurations', array(array('cdnConfigurations' => $cdnConfigurations)))->getRval();
    }

}
