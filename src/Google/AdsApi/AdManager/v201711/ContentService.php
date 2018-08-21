<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentService extends \Google\AdsApi\Common\AdsSoapClient
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
      'CmsContent' => 'Google\\AdsApi\\AdManager\\v201711\\CmsContent',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201711\\CommonError',
      'Content' => 'Google\\AdsApi\\AdManager\\v201711\\Content',
      'ContentPage' => 'Google\\AdsApi\\AdManager\\v201711\\ContentPage',
      'DaiIngestError' => 'Google\\AdsApi\\AdManager\\v201711\\DaiIngestError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201711\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201711\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201711\\InvalidUrlError',
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
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201711\\TypeError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201711\\Value',
      'getContentByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201711\\getContentByStatementResponse',
      'getContentByStatementAndCustomTargetingValueResponse' => 'Google\\AdsApi\\AdManager\\v201711\\getContentByStatementAndCustomTargetingValueResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/ContentService?wsdl')
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
     * Gets a {@link ContentPage} of {@link Content} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Content#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Content#status}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Content#name}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Content#lastModifiedDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code lastDaiIngestDateTime}</td>
     * <td>{@link Content#lastDaiIngestDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code daiIngestStatus}</td>
     * <td>{@link Content#daiIngestStatus}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v201711\Statement $statement
     * @return \Google\AdsApi\AdManager\v201711\ContentPage
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function getContentByStatement(\Google\AdsApi\AdManager\v201711\Statement $statement)
    {
      return $this->__soapCall('getContentByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Gets a {@link ContentPage} of {@link Content} objects that satisfy the
     * given {@link Statement#query}. Additionally, filters on the given value ID
     * and key ID that the value belongs to.
     *
     * The following fields are supported for filtering:
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Content#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Content#status}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Content#name}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Content#lastModifiedDateTime>}</td>
     * </tr>
     * </table>
     *
     * filter a set of content
     *
     * @param \Google\AdsApi\AdManager\v201711\Statement $filterStatement
     * @param int $customTargetingValueId
     * @return \Google\AdsApi\AdManager\v201711\ContentPage
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function getContentByStatementAndCustomTargetingValue(\Google\AdsApi\AdManager\v201711\Statement $filterStatement, $customTargetingValueId)
    {
      return $this->__soapCall('getContentByStatementAndCustomTargetingValue', array(array('filterStatement' => $filterStatement, 'customTargetingValueId' => $customTargetingValueId)))->getRval();
    }

}
