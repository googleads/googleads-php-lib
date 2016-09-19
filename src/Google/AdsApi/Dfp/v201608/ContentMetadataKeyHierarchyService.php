<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentMetadataKeyHierarchyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201608\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201608\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201608\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201608\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201608\\CommonError',
      'ContentMetadataKeyHierarchyAction' => 'Google\\AdsApi\\Dfp\\v201608\\ContentMetadataKeyHierarchyAction',
      'ContentMetadataKeyHierarchy' => 'Google\\AdsApi\\Dfp\\v201608\\ContentMetadataKeyHierarchy',
      'ContentMetadataKeyHierarchyError' => 'Google\\AdsApi\\Dfp\\v201608\\ContentMetadataKeyHierarchyError',
      'ContentMetadataKeyHierarchyLevel' => 'Google\\AdsApi\\Dfp\\v201608\\ContentMetadataKeyHierarchyLevel',
      'ContentMetadataKeyHierarchyPage' => 'Google\\AdsApi\\Dfp\\v201608\\ContentMetadataKeyHierarchyPage',
      'Date' => 'Google\\AdsApi\\Dfp\\v201608\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201608\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateValue',
      'DeleteContentMetadataKeyHierarchies' => 'Google\\AdsApi\\Dfp\\v201608\\DeleteContentMetadataKeyHierarchies',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201608\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201608\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201608\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201608\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201608\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201608\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201608\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201608\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201608\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201608\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201608\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201608\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201608\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201608\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201608\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201608/ContentMetadataKeyHierarchyService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201608\ContentMetadataKeyHierarchy[] $contentMetadataKeyHierarchies
     * @return \Google\AdsApi\Dfp\v201608\ContentMetadataKeyHierarchy[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
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
     * @param \Google\AdsApi\Dfp\v201608\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201608\ContentMetadataKeyHierarchyPage
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function getContentMetadataKeyHierarchiesByStatement(\Google\AdsApi\Dfp\v201608\Statement $filterStatement)
    {
      return $this->__soapCall('getContentMetadataKeyHierarchiesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link ContentMetadataKeyHierarchy} objects that match the given
     * {@link Statement#query}.
     *
     * a set of hierarchies
     *
     * @param \Google\AdsApi\Dfp\v201608\ContentMetadataKeyHierarchyAction $contentMetadataKeyHierarchyAction
     * @param \Google\AdsApi\Dfp\v201608\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201608\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function performContentMetadataKeyHierarchyAction(\Google\AdsApi\Dfp\v201608\ContentMetadataKeyHierarchyAction $contentMetadataKeyHierarchyAction, \Google\AdsApi\Dfp\v201608\Statement $filterStatement)
    {
      return $this->__soapCall('performContentMetadataKeyHierarchyAction', array(array('contentMetadataKeyHierarchyAction' => $contentMetadataKeyHierarchyAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link ContentMetadataKeyHierarchy} objects.
     *
     * @param \Google\AdsApi\Dfp\v201608\ContentMetadataKeyHierarchy[] $contentMetadataKeyHierarchies
     * @return \Google\AdsApi\Dfp\v201608\ContentMetadataKeyHierarchy[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function updateContentMetadataKeyHierarchies(array $contentMetadataKeyHierarchies)
    {
      return $this->__soapCall('updateContentMetadataKeyHierarchies', array(array('contentMetadataKeyHierarchies' => $contentMetadataKeyHierarchies)))->rval;
    }

}
