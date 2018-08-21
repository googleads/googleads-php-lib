<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentMetadataKeyHierarchyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201808\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201808\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201808\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201808\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201808\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201808\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201808\\CommonError',
      'ContentMetadataKeyHierarchyAction' => 'Google\\AdsApi\\AdManager\\v201808\\ContentMetadataKeyHierarchyAction',
      'ContentMetadataKeyHierarchy' => 'Google\\AdsApi\\AdManager\\v201808\\ContentMetadataKeyHierarchy',
      'ContentMetadataKeyHierarchyError' => 'Google\\AdsApi\\AdManager\\v201808\\ContentMetadataKeyHierarchyError',
      'ContentMetadataKeyHierarchyLevel' => 'Google\\AdsApi\\AdManager\\v201808\\ContentMetadataKeyHierarchyLevel',
      'ContentMetadataKeyHierarchyPage' => 'Google\\AdsApi\\AdManager\\v201808\\ContentMetadataKeyHierarchyPage',
      'Date' => 'Google\\AdsApi\\AdManager\\v201808\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201808\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateValue',
      'DeleteContentMetadataKeyHierarchies' => 'Google\\AdsApi\\AdManager\\v201808\\DeleteContentMetadataKeyHierarchies',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201808\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201808\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201808\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201808\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201808\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201808\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201808\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201808\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201808\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201808\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201808\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201808\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201808\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201808\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201808\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201808\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201808\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201808\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201808\\Value',
      'createContentMetadataKeyHierarchiesResponse' => 'Google\\AdsApi\\AdManager\\v201808\\createContentMetadataKeyHierarchiesResponse',
      'getContentMetadataKeyHierarchiesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201808\\getContentMetadataKeyHierarchiesByStatementResponse',
      'performContentMetadataKeyHierarchyActionResponse' => 'Google\\AdsApi\\AdManager\\v201808\\performContentMetadataKeyHierarchyActionResponse',
      'updateContentMetadataKeyHierarchiesResponse' => 'Google\\AdsApi\\AdManager\\v201808\\updateContentMetadataKeyHierarchiesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201808/ContentMetadataKeyHierarchyService?wsdl')
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
     * Creates new {@link ContentMetadataKeyHierarchy} objects.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link ContentMetadataKeyHierarchy#id}
     * <li>{@link ContentMetadataKeyHierarchy#name}
     * <li>{@link ContentMetadataKeyHierarchy#hierarchyLevels}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchy[] $contentMetadataKeyHierarchies
     * @return \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchy[]
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function createContentMetadataKeyHierarchies(array $contentMetadataKeyHierarchies)
    {
      return $this->__soapCall('createContentMetadataKeyHierarchies', array(array('contentMetadataKeyHierarchies' => $contentMetadataKeyHierarchies)))->getRval();
    }

    /**
     * Gets a {@link ContentMetadataKeyHierarchyPage} of {@link ContentMetadataKeyHierarchy}
     * objects that satisfy the given {@link Statement#query}. The following fields are supported
     * for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ContentMetadataKeyHierarchy#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ContentMetadataKeyHierarchy#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ContentMetadataKeyHierarchy#status}</td>
     * </tr>
     * </table>
     *
     * content metadata key hierarchies
     * backend error
     *
     * @param \Google\AdsApi\AdManager\v201808\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchyPage
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function getContentMetadataKeyHierarchiesByStatement(\Google\AdsApi\AdManager\v201808\Statement $filterStatement)
    {
      return $this->__soapCall('getContentMetadataKeyHierarchiesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ContentMetadataKeyHierarchy} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchyAction $contentMetadataKeyHierarchyAction
     * @param \Google\AdsApi\AdManager\v201808\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201808\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function performContentMetadataKeyHierarchyAction(\Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchyAction $contentMetadataKeyHierarchyAction, \Google\AdsApi\AdManager\v201808\Statement $filterStatement)
    {
      return $this->__soapCall('performContentMetadataKeyHierarchyAction', array(array('contentMetadataKeyHierarchyAction' => $contentMetadataKeyHierarchyAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ContentMetadataKeyHierarchy} objects.
     *
     * @param \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchy[] $contentMetadataKeyHierarchies
     * @return \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchy[]
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function updateContentMetadataKeyHierarchies(array $contentMetadataKeyHierarchies)
    {
      return $this->__soapCall('updateContentMetadataKeyHierarchies', array(array('contentMetadataKeyHierarchies' => $contentMetadataKeyHierarchies)))->getRval();
    }

}
