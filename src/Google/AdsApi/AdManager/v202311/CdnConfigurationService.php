<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CdnConfigurationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202311\\ObjectValue',
      'ActivateCdnConfigurations' => 'Google\\AdsApi\\AdManager\\v202311\\ActivateCdnConfigurations',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202311\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202311\\ApplicationException',
      'ArchiveCdnConfigurations' => 'Google\\AdsApi\\AdManager\\v202311\\ArchiveCdnConfigurations',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202311\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202311\\BooleanValue',
      'CdnConfigurationAction' => 'Google\\AdsApi\\AdManager\\v202311\\CdnConfigurationAction',
      'CdnConfiguration' => 'Google\\AdsApi\\AdManager\\v202311\\CdnConfiguration',
      'CdnConfigurationError' => 'Google\\AdsApi\\AdManager\\v202311\\CdnConfigurationError',
      'CdnConfigurationPage' => 'Google\\AdsApi\\AdManager\\v202311\\CdnConfigurationPage',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202311\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202311\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202311\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202311\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202311\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202311\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202311\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202311\\InvalidUrlError',
      'MediaLocationSettings' => 'Google\\AdsApi\\AdManager\\v202311\\MediaLocationSettings',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202311\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202311\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202311\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202311\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202311\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredError',
      'SecurityPolicySettings' => 'Google\\AdsApi\\AdManager\\v202311\\SecurityPolicySettings',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202311\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202311\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapResponseHeader',
      'SourceContentConfiguration' => 'Google\\AdsApi\\AdManager\\v202311\\SourceContentConfiguration',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202311\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202311\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202311\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202311\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202311\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202311\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202311\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202311\\Value',
      'createCdnConfigurationsResponse' => 'Google\\AdsApi\\AdManager\\v202311\\createCdnConfigurationsResponse',
      'getCdnConfigurationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202311\\getCdnConfigurationsByStatementResponse',
      'performCdnConfigurationActionResponse' => 'Google\\AdsApi\\AdManager\\v202311\\performCdnConfigurationActionResponse',
      'updateCdnConfigurationsResponse' => 'Google\\AdsApi\\AdManager\\v202311\\updateCdnConfigurationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202311/CdnConfigurationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202311\CdnConfiguration[] $cdnConfigurations
     * @return \Google\AdsApi\AdManager\v202311\CdnConfiguration[]
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
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
     * @param \Google\AdsApi\AdManager\v202311\Statement $statement
     * @return \Google\AdsApi\AdManager\v202311\CdnConfigurationPage
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function getCdnConfigurationsByStatement(\Google\AdsApi\AdManager\v202311\Statement $statement)
    {
      return $this->__soapCall('getCdnConfigurationsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link CdnConfiguration} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202311\CdnConfigurationAction $cdnConfigurationAction
     * @param \Google\AdsApi\AdManager\v202311\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202311\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function performCdnConfigurationAction(\Google\AdsApi\AdManager\v202311\CdnConfigurationAction $cdnConfigurationAction, \Google\AdsApi\AdManager\v202311\Statement $filterStatement)
    {
      return $this->__soapCall('performCdnConfigurationAction', array(array('cdnConfigurationAction' => $cdnConfigurationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link CdnConfiguration} objects.
     *
     * @param \Google\AdsApi\AdManager\v202311\CdnConfiguration[] $cdnConfigurations
     * @return \Google\AdsApi\AdManager\v202311\CdnConfiguration[]
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function updateCdnConfigurations(array $cdnConfigurations)
    {
      return $this->__soapCall('updateCdnConfigurations', array(array('cdnConfigurations' => $cdnConfigurations)))->getRval();
    }

}
