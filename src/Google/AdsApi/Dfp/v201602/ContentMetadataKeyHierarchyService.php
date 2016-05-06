<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentMetadataKeyHierarchyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'ContentMetadataKeyHierarchyAction' => 'Google\\AdsApi\\Dfp\\v201602\\ContentMetadataKeyHierarchyAction',
      'ContentMetadataKeyHierarchy' => 'Google\\AdsApi\\Dfp\\v201602\\ContentMetadataKeyHierarchy',
      'ContentMetadataKeyHierarchyError' => 'Google\\AdsApi\\Dfp\\v201602\\ContentMetadataKeyHierarchyError',
      'ContentMetadataKeyHierarchyLevel' => 'Google\\AdsApi\\Dfp\\v201602\\ContentMetadataKeyHierarchyLevel',
      'ContentMetadataKeyHierarchyPage' => 'Google\\AdsApi\\Dfp\\v201602\\ContentMetadataKeyHierarchyPage',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DeleteContentMetadataKeyHierarchies' => 'Google\\AdsApi\\Dfp\\v201602\\DeleteContentMetadataKeyHierarchies',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201602\\StringLengthError',
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
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/ContentMetadataKeyHierarchyService?wsdl')
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
     * The following fields are required:
     * <ul>
     * <li>{@link ContentMetadataKeyHierarchy#id}</li>
     * <li>{@link ContentMetadataKeyHierarchy#name}</li>
     * <li>{@link ContentMetadataKeyHierarchy#hierarchyLevels}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201602\ContentMetadataKeyHierarchy[] $contentMetadataKeyHierarchies
     * @return \Google\AdsApi\Dfp\v201602\ContentMetadataKeyHierarchy[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createContentMetadataKeyHierarchies(array $contentMetadataKeyHierarchies)
    {
      return $this->__soapCall('createContentMetadataKeyHierarchies', array(array('contentMetadataKeyHierarchies' => $contentMetadataKeyHierarchies)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\ContentMetadataKeyHierarchyPage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getContentMetadataKeyHierarchiesByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getContentMetadataKeyHierarchiesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link ContentMetadataKeyHierarchy} objects that match the given
     * {@link Statement#query}.
     *
     * a set of hierarchies
     *
     * @param \Google\AdsApi\Dfp\v201602\ContentMetadataKeyHierarchyAction $contentMetadataKeyHierarchyAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performContentMetadataKeyHierarchyAction(\Google\AdsApi\Dfp\v201602\ContentMetadataKeyHierarchyAction $contentMetadataKeyHierarchyAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performContentMetadataKeyHierarchyAction', array(array('contentMetadataKeyHierarchyAction' => $contentMetadataKeyHierarchyAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link ContentMetadataKeyHierarchy} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\ContentMetadataKeyHierarchy[] $contentMetadataKeyHierarchies
     * @return \Google\AdsApi\Dfp\v201602\ContentMetadataKeyHierarchy[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateContentMetadataKeyHierarchies(array $contentMetadataKeyHierarchies)
    {
      return $this->__soapCall('updateContentMetadataKeyHierarchies', array(array('contentMetadataKeyHierarchies' => $contentMetadataKeyHierarchies)))->rval;
    }

}
