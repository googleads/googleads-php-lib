<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202108\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202108\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202108\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202108\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202108\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202108\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202108\\BooleanValue',
      'CmsContent' => 'Google\\AdsApi\\AdManager\\v202108\\CmsContent',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202108\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202108\\CommonError',
      'Content' => 'Google\\AdsApi\\AdManager\\v202108\\Content',
      'ContentPage' => 'Google\\AdsApi\\AdManager\\v202108\\ContentPage',
      'DaiIngestError' => 'Google\\AdsApi\\AdManager\\v202108\\DaiIngestError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202108\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202108\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202108\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202108\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202108\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202108\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202108\\InvalidUrlError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202108\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202108\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202108\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202108\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202108\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202108\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202108\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202108\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202108\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202108\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202108\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202108\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202108\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202108\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202108\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202108\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202108\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202108\\TypeError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202108\\Value',
      'getContentByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202108\\getContentByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202108/ContentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202108\Statement $statement
     * @return \Google\AdsApi\AdManager\v202108\ContentPage
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function getContentByStatement(\Google\AdsApi\AdManager\v202108\Statement $statement)
    {
      return $this->__soapCall('getContentByStatement', array(array('statement' => $statement)))->getRval();
    }

}
