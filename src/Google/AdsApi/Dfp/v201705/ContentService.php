<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'CmsContent' => 'Google\\AdsApi\\Dfp\\v201705\\CmsContent',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'Content' => 'Google\\AdsApi\\Dfp\\v201705\\Content',
      'ContentPage' => 'Google\\AdsApi\\Dfp\\v201705\\ContentPage',
      'DaiIngestError' => 'Google\\AdsApi\\Dfp\\v201705\\DaiIngestError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201705\\InvalidUrlError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201705\\TypeError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'getContentByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getContentByStatementResponse',
      'getContentByStatementAndCustomTargetingValueResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getContentByStatementAndCustomTargetingValueResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/ContentService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $statement
     * @return \Google\AdsApi\Dfp\v201705\ContentPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getContentByStatement(\Google\AdsApi\Dfp\v201705\Statement $statement)
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @param int $customTargetingValueId
     * @return \Google\AdsApi\Dfp\v201705\ContentPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getContentByStatementAndCustomTargetingValue(\Google\AdsApi\Dfp\v201705\Statement $filterStatement, $customTargetingValueId)
    {
      return $this->__soapCall('getContentByStatementAndCustomTargetingValue', array(array('filterStatement' => $filterStatement, 'customTargetingValueId' => $customTargetingValueId)))->getRval();
    }

}
