<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentBundleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202111\\ObjectValue',
      'ActivateContentBundles' => 'Google\\AdsApi\\AdManager\\v202111\\ActivateContentBundles',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202111\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202111\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202111\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202111\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202111\\CommonError',
      'ContentBundleAction' => 'Google\\AdsApi\\AdManager\\v202111\\ContentBundleAction',
      'ContentBundle' => 'Google\\AdsApi\\AdManager\\v202111\\ContentBundle',
      'ContentBundlePage' => 'Google\\AdsApi\\AdManager\\v202111\\ContentBundlePage',
      'ContentFilterError' => 'Google\\AdsApi\\AdManager\\v202111\\ContentFilterError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202111\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202111\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateValue',
      'DeactivateContentBundles' => 'Google\\AdsApi\\AdManager\\v202111\\DeactivateContentBundles',
      'ExcludeContentFromContentBundle' => 'Google\\AdsApi\\AdManager\\v202111\\ExcludeContentFromContentBundle',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202111\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202111\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202111\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202111\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202111\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202111\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202111\\PermissionError',
      'PlacementError' => 'Google\\AdsApi\\AdManager\\v202111\\PlacementError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202111\\QuotaError',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202111\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202111\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202111\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202111\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202111\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202111\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202111\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202111\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202111\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202111\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202111\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202111\\Value',
      'createContentBundlesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\createContentBundlesResponse',
      'getContentBundlesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getContentBundlesByStatementResponse',
      'performContentBundleActionResponse' => 'Google\\AdsApi\\AdManager\\v202111\\performContentBundleActionResponse',
      'updateContentBundlesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\updateContentBundlesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202111/ContentBundleService?wsdl')
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
     * Creates new {@link ContentBundle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202111\ContentBundle[] $contentBundles
     * @return \Google\AdsApi\AdManager\v202111\ContentBundle[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function createContentBundles(array $contentBundles)
    {
      return $this->__soapCall('createContentBundles', array(array('contentBundles' => $contentBundles)))->getRval();
    }

    /**
     * Gets a {@link ContentBundlePage} of {@link ContentBundle} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ContentBundle#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ContentBundle#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ContentBundle#status}</td>
     * </tr>
     * </table>
     *
     * a set of content bundles
     *
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\ContentBundlePage
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getContentBundlesByStatement(\Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('getContentBundlesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ContentBundle} objects that match the given
     * {@link Statement#query}.
     *
     * a set of content bundles
     *
     * @param \Google\AdsApi\AdManager\v202111\ContentBundleAction $contentBundleAction
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function performContentBundleAction(\Google\AdsApi\AdManager\v202111\ContentBundleAction $contentBundleAction, \Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('performContentBundleAction', array(array('contentBundleAction' => $contentBundleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ContentBundle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202111\ContentBundle[] $contentBundles
     * @return \Google\AdsApi\AdManager\v202111\ContentBundle[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function updateContentBundles(array $contentBundles)
    {
      return $this->__soapCall('updateContentBundles', array(array('contentBundles' => $contentBundles)))->getRval();
    }

}
