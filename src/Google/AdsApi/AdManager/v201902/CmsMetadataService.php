<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CmsMetadataService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'CmsMetadataKey' => 'Google\\AdsApi\\AdManager\\v201902\\CmsMetadataKey',
      'CmsMetadataKeyPage' => 'Google\\AdsApi\\AdManager\\v201902\\CmsMetadataKeyPage',
      'CmsMetadataValue' => 'Google\\AdsApi\\AdManager\\v201902\\CmsMetadataValue',
      'CmsMetadataValuePage' => 'Google\\AdsApi\\AdManager\\v201902\\CmsMetadataValuePage',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'MetadataMergeSpecError' => 'Google\\AdsApi\\AdManager\\v201902\\MetadataMergeSpecError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201902\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201902\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201902\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'getCmsMetadataKeysByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getCmsMetadataKeysByStatementResponse',
      'getCmsMetadataValuesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getCmsMetadataValuesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/CmsMetadataService?wsdl')
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
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v201902\Statement $statement
     * @return \Google\AdsApi\AdManager\v201902\CmsMetadataKeyPage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getCmsMetadataKeysByStatement(\Google\AdsApi\AdManager\v201902\Statement $statement)
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
     * <td>{@link CmsMetadataValue#key}</td>
     * </tr>
     * <tr>
     * <td>{@code keyValueMemberContent}</td>
     * <td>Content IDs tagged with a CMS metadata key-value</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v201902\Statement $statement
     * @return \Google\AdsApi\AdManager\v201902\CmsMetadataValuePage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getCmsMetadataValuesByStatement(\Google\AdsApi\AdManager\v201902\Statement $statement)
    {
      return $this->__soapCall('getCmsMetadataValuesByStatement', array(array('statement' => $statement)))->getRval();
    }

}
