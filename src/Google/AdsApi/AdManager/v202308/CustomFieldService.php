<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomFieldService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202308\\ObjectValue',
      'ActivateCustomFields' => 'Google\\AdsApi\\AdManager\\v202308\\ActivateCustomFields',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202308\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202308\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202308\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202308\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202308\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202308\\CommonError',
      'CustomFieldAction' => 'Google\\AdsApi\\AdManager\\v202308\\CustomFieldAction',
      'CustomField' => 'Google\\AdsApi\\AdManager\\v202308\\CustomField',
      'CustomFieldError' => 'Google\\AdsApi\\AdManager\\v202308\\CustomFieldError',
      'CustomFieldOption' => 'Google\\AdsApi\\AdManager\\v202308\\CustomFieldOption',
      'CustomFieldPage' => 'Google\\AdsApi\\AdManager\\v202308\\CustomFieldPage',
      'Date' => 'Google\\AdsApi\\AdManager\\v202308\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202308\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateValue',
      'DeactivateCustomFields' => 'Google\\AdsApi\\AdManager\\v202308\\DeactivateCustomFields',
      'DropDownCustomField' => 'Google\\AdsApi\\AdManager\\v202308\\DropDownCustomField',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202308\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202308\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202308\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202308\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202308\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202308\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202308\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202308\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202308\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202308\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202308\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202308\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202308\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202308\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202308\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202308\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202308\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202308\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202308\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202308\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202308\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202308\\Value',
      'createCustomFieldOptionsResponse' => 'Google\\AdsApi\\AdManager\\v202308\\createCustomFieldOptionsResponse',
      'createCustomFieldsResponse' => 'Google\\AdsApi\\AdManager\\v202308\\createCustomFieldsResponse',
      'getCustomFieldOptionResponse' => 'Google\\AdsApi\\AdManager\\v202308\\getCustomFieldOptionResponse',
      'getCustomFieldsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202308\\getCustomFieldsByStatementResponse',
      'performCustomFieldActionResponse' => 'Google\\AdsApi\\AdManager\\v202308\\performCustomFieldActionResponse',
      'updateCustomFieldOptionsResponse' => 'Google\\AdsApi\\AdManager\\v202308\\updateCustomFieldOptionsResponse',
      'updateCustomFieldsResponse' => 'Google\\AdsApi\\AdManager\\v202308\\updateCustomFieldsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202308/CustomFieldService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202308\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\AdManager\v202308\CustomFieldOption[]
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
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
     * @param \Google\AdsApi\AdManager\v202308\CustomField[] $customFields
     * @return \Google\AdsApi\AdManager\v202308\CustomField[]
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function createCustomFields(array $customFields)
    {
      return $this->__soapCall('createCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

    /**
     * Returns the {@link CustomFieldOption} uniquely identified by the given ID.
     *
     * @param int $customFieldOptionId
     * @return \Google\AdsApi\AdManager\v202308\CustomFieldOption
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
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
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\CustomFieldPage
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function getCustomFieldsByStatement(\Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('getCustomFieldsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CustomField} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202308\CustomFieldAction $customFieldAction
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function performCustomFieldAction(\Google\AdsApi\AdManager\v202308\CustomFieldAction $customFieldAction, \Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('performCustomFieldAction', array(array('customFieldAction' => $customFieldAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link CustomFieldOption} objects.
     *
     * @param \Google\AdsApi\AdManager\v202308\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\AdManager\v202308\CustomFieldOption[]
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function updateCustomFieldOptions(array $customFieldOptions)
    {
      return $this->__soapCall('updateCustomFieldOptions', array(array('customFieldOptions' => $customFieldOptions)))->getRval();
    }

    /**
     * Updates the specified {@link CustomField} objects.
     *
     * @param \Google\AdsApi\AdManager\v202308\CustomField[] $customFields
     * @return \Google\AdsApi\AdManager\v202308\CustomField[]
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function updateCustomFields(array $customFields)
    {
      return $this->__soapCall('updateCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

}
