<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomTargetingService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202411\\ObjectValue',
      'ActivateCustomTargetingKeys' => 'Google\\AdsApi\\AdManager\\v202411\\ActivateCustomTargetingKeys',
      'ActivateCustomTargetingValues' => 'Google\\AdsApi\\AdManager\\v202411\\ActivateCustomTargetingValues',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202411\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202411\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202411\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202411\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202411\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202411\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202411\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202411\\CommonError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202411\\CustomTargetingError',
      'CustomTargetingKeyAction' => 'Google\\AdsApi\\AdManager\\v202411\\CustomTargetingKeyAction',
      'CustomTargetingKey' => 'Google\\AdsApi\\AdManager\\v202411\\CustomTargetingKey',
      'CustomTargetingKeyPage' => 'Google\\AdsApi\\AdManager\\v202411\\CustomTargetingKeyPage',
      'CustomTargetingValueAction' => 'Google\\AdsApi\\AdManager\\v202411\\CustomTargetingValueAction',
      'CustomTargetingValue' => 'Google\\AdsApi\\AdManager\\v202411\\CustomTargetingValue',
      'CustomTargetingValuePage' => 'Google\\AdsApi\\AdManager\\v202411\\CustomTargetingValuePage',
      'Date' => 'Google\\AdsApi\\AdManager\\v202411\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202411\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202411\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202411\\DateValue',
      'DeleteCustomTargetingKeys' => 'Google\\AdsApi\\AdManager\\v202411\\DeleteCustomTargetingKeys',
      'DeleteCustomTargetingValues' => 'Google\\AdsApi\\AdManager\\v202411\\DeleteCustomTargetingValues',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202411\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202411\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202411\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202411\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202411\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202411\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202411\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202411\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202411\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202411\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202411\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202411\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202411\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202411\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202411\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202411\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202411\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202411\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202411\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202411\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202411\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202411\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202411\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202411\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202411\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202411\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202411\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202411\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202411\\Value',
      'createCustomTargetingKeysResponse' => 'Google\\AdsApi\\AdManager\\v202411\\createCustomTargetingKeysResponse',
      'createCustomTargetingValuesResponse' => 'Google\\AdsApi\\AdManager\\v202411\\createCustomTargetingValuesResponse',
      'getCustomTargetingKeysByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202411\\getCustomTargetingKeysByStatementResponse',
      'getCustomTargetingValuesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202411\\getCustomTargetingValuesByStatementResponse',
      'performCustomTargetingKeyActionResponse' => 'Google\\AdsApi\\AdManager\\v202411\\performCustomTargetingKeyActionResponse',
      'performCustomTargetingValueActionResponse' => 'Google\\AdsApi\\AdManager\\v202411\\performCustomTargetingValueActionResponse',
      'updateCustomTargetingKeysResponse' => 'Google\\AdsApi\\AdManager\\v202411\\updateCustomTargetingKeysResponse',
      'updateCustomTargetingValuesResponse' => 'Google\\AdsApi\\AdManager\\v202411\\updateCustomTargetingValuesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202411/CustomTargetingService?wsdl')
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
     * Creates new {@link CustomTargetingKey} objects.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link CustomTargetingKey#name}
     * <li>{@link CustomTargetingKey#type}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202411\CustomTargetingKey[] $keys
     * @return \Google\AdsApi\AdManager\v202411\CustomTargetingKey[]
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function createCustomTargetingKeys(array $keys)
    {
      return $this->__soapCall('createCustomTargetingKeys', array(array('keys' => $keys)))->getRval();
    }

    /**
     * Creates new {@link CustomTargetingValue} objects.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link CustomTargetingValue#customTargetingKeyId}
     * <li>{@link CustomTargetingValue#name}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202411\CustomTargetingValue[] $values
     * @return \Google\AdsApi\AdManager\v202411\CustomTargetingValue[]
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function createCustomTargetingValues(array $values)
    {
      return $this->__soapCall('createCustomTargetingValues', array(array('values' => $values)))->getRval();
    }

    /**
     * Gets a {@link CustomTargetingKeyPage} of {@link CustomTargetingKey} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomTargetingKey#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomTargetingKey#name}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link CustomTargetingKey#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link CustomTargetingKey#type}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202411\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202411\CustomTargetingKeyPage
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function getCustomTargetingKeysByStatement(\Google\AdsApi\AdManager\v202411\Statement $filterStatement)
    {
      return $this->__soapCall('getCustomTargetingKeysByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link CustomTargetingValuePage} of {@link CustomTargetingValue} objects that satisfy
     * the given {@link Statement#query}.
     *
     * <p>The {@code WHERE} clause in the {@link Statement#query} must always contain {@link
     * CustomTargetingValue#customTargetingKeyId} as one of its columns in a way that it is AND'ed
     * with the rest of the query. So, if you want to retrieve values for a known set of key ids,
     * valid {@link Statement#query} would look like:
     *
     * <ol>
     * <li>"WHERE customTargetingKeyId IN ('17','18','19')" retrieves all values that are associated
     * with keys having ids 17, 18, 19.
     * <li>"WHERE customTargetingKeyId = '17' AND name = 'red'" retrieves values that are associated
     * with keys having id 17 and value name is 'red'.
     * </ol>
     *
     * <p>The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomTargetingValue#id}</td>
     * </tr>
     * <tr>
     * <td>{@code customTargetingKeyId}</td>
     * <td>{@link CustomTargetingValue#customTargetingKeyId}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomTargetingValue#name}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link CustomTargetingValue#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code matchType}</td>
     * <td>{@link CustomTargetingValue#matchType}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202411\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202411\CustomTargetingValuePage
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function getCustomTargetingValuesByStatement(\Google\AdsApi\AdManager\v202411\Statement $filterStatement)
    {
      return $this->__soapCall('getCustomTargetingValuesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CustomTargetingKey} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202411\CustomTargetingKeyAction $customTargetingKeyAction
     * @param \Google\AdsApi\AdManager\v202411\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202411\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function performCustomTargetingKeyAction(\Google\AdsApi\AdManager\v202411\CustomTargetingKeyAction $customTargetingKeyAction, \Google\AdsApi\AdManager\v202411\Statement $filterStatement)
    {
      return $this->__soapCall('performCustomTargetingKeyAction', array(array('customTargetingKeyAction' => $customTargetingKeyAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CustomTargetingValue} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202411\CustomTargetingValueAction $customTargetingValueAction
     * @param \Google\AdsApi\AdManager\v202411\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202411\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function performCustomTargetingValueAction(\Google\AdsApi\AdManager\v202411\CustomTargetingValueAction $customTargetingValueAction, \Google\AdsApi\AdManager\v202411\Statement $filterStatement)
    {
      return $this->__soapCall('performCustomTargetingValueAction', array(array('customTargetingValueAction' => $customTargetingValueAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link CustomTargetingKey} objects.
     *
     * @param \Google\AdsApi\AdManager\v202411\CustomTargetingKey[] $keys
     * @return \Google\AdsApi\AdManager\v202411\CustomTargetingKey[]
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function updateCustomTargetingKeys(array $keys)
    {
      return $this->__soapCall('updateCustomTargetingKeys', array(array('keys' => $keys)))->getRval();
    }

    /**
     * Updates the specified {@link CustomTargetingValue} objects.
     *
     * @param \Google\AdsApi\AdManager\v202411\CustomTargetingValue[] $values
     * @return \Google\AdsApi\AdManager\v202411\CustomTargetingValue[]
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function updateCustomTargetingValues(array $values)
    {
      return $this->__soapCall('updateCustomTargetingValues', array(array('values' => $values)))->getRval();
    }

}
