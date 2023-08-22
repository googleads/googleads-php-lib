<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CmsMetadataService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202308\\ObjectValue',
      'ActivateCmsMetadataKeys' => 'Google\\AdsApi\\AdManager\\v202308\\ActivateCmsMetadataKeys',
      'ActivateCmsMetadataValues' => 'Google\\AdsApi\\AdManager\\v202308\\ActivateCmsMetadataValues',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202308\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202308\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202308\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202308\\BooleanValue',
      'CmsMetadataKeyAction' => 'Google\\AdsApi\\AdManager\\v202308\\CmsMetadataKeyAction',
      'CmsMetadataKey' => 'Google\\AdsApi\\AdManager\\v202308\\CmsMetadataKey',
      'CmsMetadataKeyPage' => 'Google\\AdsApi\\AdManager\\v202308\\CmsMetadataKeyPage',
      'CmsMetadataValueAction' => 'Google\\AdsApi\\AdManager\\v202308\\CmsMetadataValueAction',
      'CmsMetadataValue' => 'Google\\AdsApi\\AdManager\\v202308\\CmsMetadataValue',
      'CmsMetadataValuePage' => 'Google\\AdsApi\\AdManager\\v202308\\CmsMetadataValuePage',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202308\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202308\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202308\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202308\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateValue',
      'DeactivateCmsMetadataKeys' => 'Google\\AdsApi\\AdManager\\v202308\\DeactivateCmsMetadataKeys',
      'DeactivateCmsMetadataValues' => 'Google\\AdsApi\\AdManager\\v202308\\DeactivateCmsMetadataValues',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202308\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202308\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202308\\InternalApiError',
      'MetadataMergeSpecError' => 'Google\\AdsApi\\AdManager\\v202308\\MetadataMergeSpecError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202308\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202308\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202308\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202308\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202308\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202308\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202308\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202308\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202308\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202308\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202308\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202308\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202308\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202308\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202308\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202308\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202308\\Value',
      'getCmsMetadataKeysByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202308\\getCmsMetadataKeysByStatementResponse',
      'getCmsMetadataValuesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202308\\getCmsMetadataValuesByStatementResponse',
      'performCmsMetadataKeyActionResponse' => 'Google\\AdsApi\\AdManager\\v202308\\performCmsMetadataKeyActionResponse',
      'performCmsMetadataValueActionResponse' => 'Google\\AdsApi\\AdManager\\v202308\\performCmsMetadataValueActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202308/CmsMetadataService?wsdl')
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
     * Returns a page of {@link CmsMetadataKey}s matching the specified {@link Statement}. The
     * following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope = "col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CmsMetadataKey#cmsMetadataKeyId}</td>
     * </tr>
     * <tr>
     * <td>{@code cmsKey}</td>
     * <td>{@link CmsMetadataKey#keyName}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link CmsMetadataKey#status}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202308\Statement $statement
     * @return \Google\AdsApi\AdManager\v202308\CmsMetadataKeyPage
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function getCmsMetadataKeysByStatement(\Google\AdsApi\AdManager\v202308\Statement $statement)
    {
      return $this->__soapCall('getCmsMetadataKeysByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Returns a page of {@link CmsMetadataValue}s matching the specified {@link Statement}. The
     * following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope = "col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CmsMetadataValue#cmsMetadataValueId}</td>
     * </tr>
     * <tr>
     * <td>{@code cmsValue}</td>
     * <td>{@link CmsMetadataValue#valueName}</td>
     * </tr>
     * <tr>
     * <td>{@code cmsKey}</td>
     * <td>{@link CmsMetadataValue#key#name}</td>
     * </tr>
     * <tr>
     * <td>{@code cmsKeyId}</td>
     * <td>{@link CmsMetadataValue#key#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link CmsMetadataValue#status}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202308\Statement $statement
     * @return \Google\AdsApi\AdManager\v202308\CmsMetadataValuePage
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function getCmsMetadataValuesByStatement(\Google\AdsApi\AdManager\v202308\Statement $statement)
    {
      return $this->__soapCall('getCmsMetadataValuesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link CmsMetadataKey} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202308\CmsMetadataKeyAction $keyAction
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function performCmsMetadataKeyAction(\Google\AdsApi\AdManager\v202308\CmsMetadataKeyAction $keyAction, \Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('performCmsMetadataKeyAction', array(array('keyAction' => $keyAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CmsMetadataValue} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202308\CmsMetadataValueAction $valueAction
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function performCmsMetadataValueAction(\Google\AdsApi\AdManager\v202308\CmsMetadataValueAction $valueAction, \Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('performCmsMetadataValueAction', array(array('valueAction' => $valueAction, 'filterStatement' => $filterStatement)))->getRval();
    }

}
