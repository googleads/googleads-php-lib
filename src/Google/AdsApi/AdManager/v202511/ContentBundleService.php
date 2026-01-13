<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentBundleService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202511\\ObjectValue',
      'ActivateContentBundles' => 'Google\\AdsApi\\AdManager\\v202511\\ActivateContentBundles',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202511\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202511\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202511\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202511\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202511\\CommonError',
      'ContentBundleAction' => 'Google\\AdsApi\\AdManager\\v202511\\ContentBundleAction',
      'ContentBundle' => 'Google\\AdsApi\\AdManager\\v202511\\ContentBundle',
      'ContentBundlePage' => 'Google\\AdsApi\\AdManager\\v202511\\ContentBundlePage',
      'ContentFilterError' => 'Google\\AdsApi\\AdManager\\v202511\\ContentFilterError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202511\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202511\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateValue',
      'DeactivateContentBundles' => 'Google\\AdsApi\\AdManager\\v202511\\DeactivateContentBundles',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202511\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202511\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202511\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202511\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202511\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202511\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202511\\PermissionError',
      'PlacementError' => 'Google\\AdsApi\\AdManager\\v202511\\PlacementError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202511\\QuotaError',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202511\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202511\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202511\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202511\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202511\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202511\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202511\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202511\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202511\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202511\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202511\\Value',
      'createContentBundlesResponse' => 'Google\\AdsApi\\AdManager\\v202511\\createContentBundlesResponse',
      'getContentBundlesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getContentBundlesByStatementResponse',
      'performContentBundleActionResponse' => 'Google\\AdsApi\\AdManager\\v202511\\performContentBundleActionResponse',
      'updateContentBundlesResponse' => 'Google\\AdsApi\\AdManager\\v202511\\updateContentBundlesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202511/ContentBundleService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202511\ContentBundle[] $contentBundles
     * @return \Google\AdsApi\AdManager\v202511\ContentBundle[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function createContentBundles(array $contentBundles)
    {
      return $this->__soapCall('createContentBundles', array(array('contentBundles' => $contentBundles)))->getRval();
    }

    /**
     * Gets a {@link ContentBundlePage} of {@link ContentBundle} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
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
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\ContentBundlePage
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getContentBundlesByStatement(\Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('getContentBundlesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ContentBundle} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202511\ContentBundleAction $contentBundleAction
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function performContentBundleAction(\Google\AdsApi\AdManager\v202511\ContentBundleAction $contentBundleAction, \Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('performContentBundleAction', array(array('contentBundleAction' => $contentBundleAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ContentBundle} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\ContentBundle[] $contentBundles
     * @return \Google\AdsApi\AdManager\v202511\ContentBundle[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function updateContentBundles(array $contentBundles)
    {
      return $this->__soapCall('updateContentBundles', array(array('contentBundles' => $contentBundles)))->getRval();
    }

}
