<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomFieldService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'ActivateCustomFields' => 'Google\\AdsApi\\Dfp\\v201805\\ActivateCustomFields',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'CustomFieldAction' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldAction',
      'CustomField' => 'Google\\AdsApi\\Dfp\\v201805\\CustomField',
      'CustomFieldError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldError',
      'CustomFieldOption' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldOption',
      'CustomFieldPage' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldPage',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DeactivateCustomFields' => 'Google\\AdsApi\\Dfp\\v201805\\DeactivateCustomFields',
      'DropDownCustomField' => 'Google\\AdsApi\\Dfp\\v201805\\DropDownCustomField',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201805\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'createCustomFieldOptionsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createCustomFieldOptionsResponse',
      'createCustomFieldsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createCustomFieldsResponse',
      'getCustomFieldOptionResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getCustomFieldOptionResponse',
      'getCustomFieldsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getCustomFieldsByStatementResponse',
      'performCustomFieldActionResponse' => 'Google\\AdsApi\\Dfp\\v201805\\performCustomFieldActionResponse',
      'updateCustomFieldOptionsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateCustomFieldOptionsResponse',
      'updateCustomFieldsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateCustomFieldsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/CustomFieldService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201805\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\Dfp\v201805\CustomFieldOption[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
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
     * @param \Google\AdsApi\Dfp\v201805\CustomField[] $customFields
     * @return \Google\AdsApi\Dfp\v201805\CustomField[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function createCustomFields(array $customFields)
    {
      return $this->__soapCall('createCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

    /**
     * Returns the {@link CustomFieldOption} uniquely identified by the given ID.
     *
     * @param int $customFieldOptionId
     * @return \Google\AdsApi\Dfp\v201805\CustomFieldOption
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
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
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\CustomFieldPage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getCustomFieldsByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getCustomFieldsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CustomField} objects that match the given
     * {@link Statement#query}.
     *
     * a set of custom fields
     *
     * @param \Google\AdsApi\Dfp\v201805\CustomFieldAction $customFieldAction
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function performCustomFieldAction(\Google\AdsApi\Dfp\v201805\CustomFieldAction $customFieldAction, \Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performCustomFieldAction', array(array('customFieldAction' => $customFieldAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link CustomFieldOption} objects.
     *
     * @param \Google\AdsApi\Dfp\v201805\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\Dfp\v201805\CustomFieldOption[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateCustomFieldOptions(array $customFieldOptions)
    {
      return $this->__soapCall('updateCustomFieldOptions', array(array('customFieldOptions' => $customFieldOptions)))->getRval();
    }

    /**
     * Updates the specified {@link CustomField} objects.
     *
     * @param \Google\AdsApi\Dfp\v201805\CustomField[] $customFields
     * @return \Google\AdsApi\Dfp\v201805\CustomField[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateCustomFields(array $customFields)
    {
      return $this->__soapCall('updateCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

}
