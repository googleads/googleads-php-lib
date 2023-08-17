<?php

namespace Google\AdsApi\AdManager\v202305;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomFieldService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202305\\ObjectValue',
      'ActivateCustomFields' => 'Google\\AdsApi\\AdManager\\v202305\\ActivateCustomFields',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202305\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202305\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202305\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202305\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202305\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202305\\CommonError',
      'CustomFieldAction' => 'Google\\AdsApi\\AdManager\\v202305\\CustomFieldAction',
      'CustomField' => 'Google\\AdsApi\\AdManager\\v202305\\CustomField',
      'CustomFieldError' => 'Google\\AdsApi\\AdManager\\v202305\\CustomFieldError',
      'CustomFieldOption' => 'Google\\AdsApi\\AdManager\\v202305\\CustomFieldOption',
      'CustomFieldPage' => 'Google\\AdsApi\\AdManager\\v202305\\CustomFieldPage',
      'Date' => 'Google\\AdsApi\\AdManager\\v202305\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202305\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202305\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202305\\DateValue',
      'DeactivateCustomFields' => 'Google\\AdsApi\\AdManager\\v202305\\DeactivateCustomFields',
      'DropDownCustomField' => 'Google\\AdsApi\\AdManager\\v202305\\DropDownCustomField',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202305\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202305\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202305\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202305\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202305\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202305\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202305\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202305\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202305\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202305\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202305\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202305\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202305\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202305\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202305\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202305\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202305\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202305\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202305\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202305\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202305\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202305\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202305\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202305\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202305\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202305\\Value',
      'createCustomFieldOptionsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\createCustomFieldOptionsResponse',
      'createCustomFieldsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\createCustomFieldsResponse',
      'getCustomFieldOptionResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getCustomFieldOptionResponse',
      'getCustomFieldsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getCustomFieldsByStatementResponse',
      'performCustomFieldActionResponse' => 'Google\\AdsApi\\AdManager\\v202305\\performCustomFieldActionResponse',
      'updateCustomFieldOptionsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\updateCustomFieldOptionsResponse',
      'updateCustomFieldsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\updateCustomFieldsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202305/CustomFieldService?wsdl')
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
     * Creates new {@link CustomFieldOption} objects.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link CustomFieldOption#displayName}
     * <li>{@link CustomFieldOption#customFieldId}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202305\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\AdManager\v202305\CustomFieldOption[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function createCustomFieldOptions(array $customFieldOptions)
    {
      return $this->__soapCall('createCustomFieldOptions', array(array('customFieldOptions' => $customFieldOptions)))->getRval();
    }

    /**
     * Creates new {@link CustomField} objects.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link CustomField#name}
     * <li>{@link CustomField#entityType}
     * <li>{@link CustomField#dataType}
     * <li>{@link CustomField#visibility}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202305\CustomField[] $customFields
     * @return \Google\AdsApi\AdManager\v202305\CustomField[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function createCustomFields(array $customFields)
    {
      return $this->__soapCall('createCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

    /**
     * Returns the {@link CustomFieldOption} uniquely identified by the given ID.
     *
     * @param int $customFieldOptionId
     * @return \Google\AdsApi\AdManager\v202305\CustomFieldOption
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getCustomFieldOption($customFieldOptionId)
    {
      return $this->__soapCall('getCustomFieldOption', array(array('customFieldOptionId' => $customFieldOptionId)))->getRval();
    }

    /**
     * Gets a {@link CustomFieldPage} of {@link CustomField} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomField#id}</td>
     * </tr>
     * <tr>
     * <td>{@code entityType}</td>
     * <td>{@link CustomField#entityType}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomField#name}</td>
     * </tr>
     * <tr>
     * <td>{@code isActive}</td>
     * <td>{@link CustomField#isActive}</td>
     * </tr>
     * <tr>
     * <td>{@code visibility}</td>
     * <td>{@link CustomField#visibility}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202305\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202305\CustomFieldPage
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getCustomFieldsByStatement(\Google\AdsApi\AdManager\v202305\Statement $filterStatement)
    {
      return $this->__soapCall('getCustomFieldsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CustomField} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202305\CustomFieldAction $customFieldAction
     * @param \Google\AdsApi\AdManager\v202305\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202305\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function performCustomFieldAction(\Google\AdsApi\AdManager\v202305\CustomFieldAction $customFieldAction, \Google\AdsApi\AdManager\v202305\Statement $filterStatement)
    {
      return $this->__soapCall('performCustomFieldAction', array(array('customFieldAction' => $customFieldAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link CustomFieldOption} objects.
     *
     * @param \Google\AdsApi\AdManager\v202305\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\AdManager\v202305\CustomFieldOption[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function updateCustomFieldOptions(array $customFieldOptions)
    {
      return $this->__soapCall('updateCustomFieldOptions', array(array('customFieldOptions' => $customFieldOptions)))->getRval();
    }

    /**
     * Updates the specified {@link CustomField} objects.
     *
     * @param \Google\AdsApi\AdManager\v202305\CustomField[] $customFields
     * @return \Google\AdsApi\AdManager\v202305\CustomField[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function updateCustomFields(array $customFields)
    {
      return $this->__soapCall('updateCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

}
