<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomFieldService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'ActivateCustomFields' => 'Google\\AdsApi\\Dfp\\v201708\\ActivateCustomFields',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'CustomFieldAction' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldAction',
      'CustomField' => 'Google\\AdsApi\\Dfp\\v201708\\CustomField',
      'CustomFieldError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldError',
      'CustomFieldOption' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldOption',
      'CustomFieldPage' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldPage',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'DeactivateCustomFields' => 'Google\\AdsApi\\Dfp\\v201708\\DeactivateCustomFields',
      'DropDownCustomField' => 'Google\\AdsApi\\Dfp\\v201708\\DropDownCustomField',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201708\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'createCustomFieldOptionsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createCustomFieldOptionsResponse',
      'createCustomFieldsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createCustomFieldsResponse',
      'getCustomFieldOptionResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getCustomFieldOptionResponse',
      'getCustomFieldsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getCustomFieldsByStatementResponse',
      'performCustomFieldActionResponse' => 'Google\\AdsApi\\Dfp\\v201708\\performCustomFieldActionResponse',
      'updateCustomFieldOptionsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateCustomFieldOptionsResponse',
      'updateCustomFieldsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateCustomFieldsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/CustomFieldService?wsdl')
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
     * The following fields are required:
     * <ul>
     * <li>{@link CustomFieldOption#displayName}</li>
     * <li>{@link CustomFieldOption#customFieldId}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201708\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\Dfp\v201708\CustomFieldOption[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function createCustomFieldOptions(array $customFieldOptions)
    {
      return $this->__soapCall('createCustomFieldOptions', array(array('customFieldOptions' => $customFieldOptions)))->getRval();
    }

    /**
     * Creates new {@link CustomField} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CustomField#name}</li>
     * <li>{@link CustomField#entityType}</li>
     * <li>{@link CustomField#dataType}</li>
     * <li>{@link CustomField#visibility}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201708\CustomField[] $customFields
     * @return \Google\AdsApi\Dfp\v201708\CustomField[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function createCustomFields(array $customFields)
    {
      return $this->__soapCall('createCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

    /**
     * Returns the {@link CustomFieldOption} uniquely identified by the given ID.
     *
     * @param int $customFieldOptionId
     * @return \Google\AdsApi\Dfp\v201708\CustomFieldOption
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getCustomFieldOption($customFieldOptionId)
    {
      return $this->__soapCall('getCustomFieldOption', array(array('customFieldOptionId' => $customFieldOptionId)))->getRval();
    }

    /**
     * Gets a {@link CustomFieldPage} of {@link CustomField} objects that satisfy the
     * given {@link Statement#query}.
     * The following fields are supported for filtering:
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
     *
     * a set of custom fields.
     *
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\CustomFieldPage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getCustomFieldsByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('getCustomFieldsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CustomField} objects that match the given
     * {@link Statement#query}.
     *
     * a set of custom fields
     *
     * @param \Google\AdsApi\Dfp\v201708\CustomFieldAction $customFieldAction
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function performCustomFieldAction(\Google\AdsApi\Dfp\v201708\CustomFieldAction $customFieldAction, \Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('performCustomFieldAction', array(array('customFieldAction' => $customFieldAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link CustomFieldOption} objects.
     *
     * @param \Google\AdsApi\Dfp\v201708\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\Dfp\v201708\CustomFieldOption[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateCustomFieldOptions(array $customFieldOptions)
    {
      return $this->__soapCall('updateCustomFieldOptions', array(array('customFieldOptions' => $customFieldOptions)))->getRval();
    }

    /**
     * Updates the specified {@link CustomField} objects.
     *
     * @param \Google\AdsApi\Dfp\v201708\CustomField[] $customFields
     * @return \Google\AdsApi\Dfp\v201708\CustomField[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateCustomFields(array $customFields)
    {
      return $this->__soapCall('updateCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

}
