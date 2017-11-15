<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentMetadataKeyHierarchyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201711\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201711\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201711\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201711\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201711\\CommonError',
      'ContentMetadataKeyHierarchyAction' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataKeyHierarchyAction',
      'ContentMetadataKeyHierarchy' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataKeyHierarchy',
      'ContentMetadataKeyHierarchyError' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataKeyHierarchyError',
      'ContentMetadataKeyHierarchyLevel' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataKeyHierarchyLevel',
      'ContentMetadataKeyHierarchyPage' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataKeyHierarchyPage',
      'Date' => 'Google\\AdsApi\\Dfp\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateValue',
      'DeleteContentMetadataKeyHierarchies' => 'Google\\AdsApi\\Dfp\\v201711\\DeleteContentMetadataKeyHierarchies',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201711\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201711\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201711\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201711\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201711\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201711\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201711\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201711\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201711\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201711\\Value',
      'createContentMetadataKeyHierarchiesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\createContentMetadataKeyHierarchiesResponse',
      'getContentMetadataKeyHierarchiesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getContentMetadataKeyHierarchiesByStatementResponse',
      'performContentMetadataKeyHierarchyActionResponse' => 'Google\\AdsApi\\Dfp\\v201711\\performContentMetadataKeyHierarchyActionResponse',
      'updateContentMetadataKeyHierarchiesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\updateContentMetadataKeyHierarchiesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/ContentMetadataKeyHierarchyService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201711\ContentMetadataKeyHierarchy[] $contentMetadataKeyHierarchies
     * @return \Google\AdsApi\Dfp\v201711\ContentMetadataKeyHierarchy[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
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
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\ContentMetadataKeyHierarchyPage
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getContentMetadataKeyHierarchiesByStatement(\Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('getContentMetadataKeyHierarchiesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ContentMetadataKeyHierarchy} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\Dfp\v201711\ContentMetadataKeyHierarchyAction $contentMetadataKeyHierarchyAction
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function performContentMetadataKeyHierarchyAction(\Google\AdsApi\Dfp\v201711\ContentMetadataKeyHierarchyAction $contentMetadataKeyHierarchyAction, \Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('performContentMetadataKeyHierarchyAction', array(array('contentMetadataKeyHierarchyAction' => $contentMetadataKeyHierarchyAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ContentMetadataKeyHierarchy} objects.
     *
     * @param \Google\AdsApi\Dfp\v201711\ContentMetadataKeyHierarchy[] $contentMetadataKeyHierarchies
     * @return \Google\AdsApi\Dfp\v201711\ContentMetadataKeyHierarchy[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function updateContentMetadataKeyHierarchies(array $contentMetadataKeyHierarchies)
    {
      return $this->__soapCall('updateContentMetadataKeyHierarchies', array(array('contentMetadataKeyHierarchies' => $contentMetadataKeyHierarchies)))->getRval();
    }

}
