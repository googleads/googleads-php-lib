<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentBundleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ActivateContentBundles' => 'Google\\AdsApi\\Dfp\\v201602\\ActivateContentBundles',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'ContentBundleAction' => 'Google\\AdsApi\\Dfp\\v201602\\ContentBundleAction',
      'ContentBundle' => 'Google\\AdsApi\\Dfp\\v201602\\ContentBundle',
      'ContentBundlePage' => 'Google\\AdsApi\\Dfp\\v201602\\ContentBundlePage',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DeactivateContentBundles' => 'Google\\AdsApi\\Dfp\\v201602\\DeactivateContentBundles',
      'ExcludeContentFromContentBundle' => 'Google\\AdsApi\\Dfp\\v201602\\ExcludeContentFromContentBundle',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'IncludeContentInContentBundle' => 'Google\\AdsApi\\Dfp\\v201602\\IncludeContentInContentBundle',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'PlacementError' => 'Google\\AdsApi\\Dfp\\v201602\\PlacementError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/ContentBundleService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201602\ContentBundle[] $contentBundles
     * @return \Google\AdsApi\Dfp\v201602\ContentBundle[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createContentBundles(array $contentBundles)
    {
      return $this->__soapCall('createContentBundles', array(array('contentBundles' => $contentBundles)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\ContentBundlePage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getContentBundlesByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getContentBundlesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link ContentBundle} objects that match the given
     * {@link Statement#query}.
     *
     * a set of content bundles
     *
     * @param \Google\AdsApi\Dfp\v201602\ContentBundleAction $contentBundleAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performContentBundleAction(\Google\AdsApi\Dfp\v201602\ContentBundleAction $contentBundleAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performContentBundleAction', array(array('contentBundleAction' => $contentBundleAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link ContentBundle} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\ContentBundle[] $contentBundles
     * @return \Google\AdsApi\Dfp\v201602\ContentBundle[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateContentBundles(array $contentBundles)
    {
      return $this->__soapCall('updateContentBundles', array(array('contentBundles' => $contentBundles)))->rval;
    }

}
