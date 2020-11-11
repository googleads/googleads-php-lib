<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentBundleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202011\\ObjectValue',
      'ActivateContentBundles' => 'Google\\AdsApi\\AdManager\\v202011\\ActivateContentBundles',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202011\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202011\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202011\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202011\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202011\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202011\\CommonError',
      'ContentBundleAction' => 'Google\\AdsApi\\AdManager\\v202011\\ContentBundleAction',
      'ContentBundle' => 'Google\\AdsApi\\AdManager\\v202011\\ContentBundle',
      'ContentBundlePage' => 'Google\\AdsApi\\AdManager\\v202011\\ContentBundlePage',
      'ContentFilterError' => 'Google\\AdsApi\\AdManager\\v202011\\ContentFilterError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202011\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202011\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateValue',
      'DeactivateContentBundles' => 'Google\\AdsApi\\AdManager\\v202011\\DeactivateContentBundles',
      'ExcludeContentFromContentBundle' => 'Google\\AdsApi\\AdManager\\v202011\\ExcludeContentFromContentBundle',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202011\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202011\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202011\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202011\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202011\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202011\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202011\\PermissionError',
      'PlacementError' => 'Google\\AdsApi\\AdManager\\v202011\\PlacementError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202011\\QuotaError',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202011\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202011\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202011\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202011\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202011\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202011\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202011\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202011\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202011\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202011\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202011\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202011\\Value',
      'createContentBundlesResponse' => 'Google\\AdsApi\\AdManager\\v202011\\createContentBundlesResponse',
      'getContentBundlesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getContentBundlesByStatementResponse',
      'performContentBundleActionResponse' => 'Google\\AdsApi\\AdManager\\v202011\\performContentBundleActionResponse',
      'updateContentBundlesResponse' => 'Google\\AdsApi\\AdManager\\v202011\\updateContentBundlesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202011/ContentBundleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202011\ContentBundle[] $contentBundles
     * @return \Google\AdsApi\AdManager\v202011\ContentBundle[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
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
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\ContentBundlePage
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getContentBundlesByStatement(\Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('getContentBundlesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ContentBundle} objects that match the given
     * {@link Statement#query}.
     *
     * a set of content bundles
     *
     * @param \Google\AdsApi\AdManager\v202011\ContentBundleAction $contentBundleAction
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function performContentBundleAction(\Google\AdsApi\AdManager\v202011\ContentBundleAction $contentBundleAction, \Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('performContentBundleAction', array(array('contentBundleAction' => $contentBundleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ContentBundle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\ContentBundle[] $contentBundles
     * @return \Google\AdsApi\AdManager\v202011\ContentBundle[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function updateContentBundles(array $contentBundles)
    {
      return $this->__soapCall('updateContentBundles', array(array('contentBundles' => $contentBundles)))->getRval();
    }

}
