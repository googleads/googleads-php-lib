<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CmsMetadataService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'ActivateCmsMetadataKeys' => 'Google\\AdsApi\\AdManager\\v202202\\ActivateCmsMetadataKeys',
      'ActivateCmsMetadataValues' => 'Google\\AdsApi\\AdManager\\v202202\\ActivateCmsMetadataValues',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'CmsMetadataKeyAction' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataKeyAction',
      'CmsMetadataKey' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataKey',
      'CmsMetadataKeyPage' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataKeyPage',
      'CmsMetadataValueAction' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataValueAction',
      'CmsMetadataValue' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataValue',
      'CmsMetadataValuePage' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataValuePage',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'DeactivateCmsMetadataKeys' => 'Google\\AdsApi\\AdManager\\v202202\\DeactivateCmsMetadataKeys',
      'DeactivateCmsMetadataValues' => 'Google\\AdsApi\\AdManager\\v202202\\DeactivateCmsMetadataValues',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'MetadataMergeSpecError' => 'Google\\AdsApi\\AdManager\\v202202\\MetadataMergeSpecError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202202\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202202\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202202\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'getCmsMetadataKeysByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getCmsMetadataKeysByStatementResponse',
      'getCmsMetadataValuesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getCmsMetadataValuesByStatementResponse',
      'performCmsMetadataKeyActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performCmsMetadataKeyActionResponse',
      'performCmsMetadataValueActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performCmsMetadataValueActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/CmsMetadataService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202202\Statement $statement
     * @return \Google\AdsApi\AdManager\v202202\CmsMetadataKeyPage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getCmsMetadataKeysByStatement(\Google\AdsApi\AdManager\v202202\Statement $statement)
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
     * @param \Google\AdsApi\AdManager\v202202\Statement $statement
     * @return \Google\AdsApi\AdManager\v202202\CmsMetadataValuePage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getCmsMetadataValuesByStatement(\Google\AdsApi\AdManager\v202202\Statement $statement)
    {
      return $this->__soapCall('getCmsMetadataValuesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link CmsMetadataKey} objects that match the given {@link
     * Statement#query}.
     *
     * metadata keys.
     *
     * @param \Google\AdsApi\AdManager\v202202\CmsMetadataKeyAction $keyAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performCmsMetadataKeyAction(\Google\AdsApi\AdManager\v202202\CmsMetadataKeyAction $keyAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performCmsMetadataKeyAction', array(array('keyAction' => $keyAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CmsMetadataValue} objects that match the given {@link
     * Statement#query}.
     *
     * metadata values.
     *
     * @param \Google\AdsApi\AdManager\v202202\CmsMetadataValueAction $valueAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performCmsMetadataValueAction(\Google\AdsApi\AdManager\v202202\CmsMetadataValueAction $valueAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performCmsMetadataValueAction', array(array('valueAction' => $valueAction, 'filterStatement' => $filterStatement)))->getRval();
    }

}
