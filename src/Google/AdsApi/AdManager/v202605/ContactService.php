<?php

namespace Google\AdsApi\AdManager\v202605;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContactService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202605\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202605\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202605\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202605\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202605\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202605\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202605\\CommonError',
      'Contact' => 'Google\\AdsApi\\AdManager\\v202605\\Contact',
      'ContactError' => 'Google\\AdsApi\\AdManager\\v202605\\ContactError',
      'ContactPage' => 'Google\\AdsApi\\AdManager\\v202605\\ContactPage',
      'BaseContact' => 'Google\\AdsApi\\AdManager\\v202605\\BaseContact',
      'Date' => 'Google\\AdsApi\\AdManager\\v202605\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202605\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202605\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202605\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202605\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202605\\InvalidEmailError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202605\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202605\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202605\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202605\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202605\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202605\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202605\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202605\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202605\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202605\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202605\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202605\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202605\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202605\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202605\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202605\\Value',
      'createContactsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\createContactsResponse',
      'getContactsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202605\\getContactsByStatementResponse',
      'updateContactsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\updateContactsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202605/ContactService?wsdl')
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
     * Creates new {@link Contact} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\Contact[] $contacts
     * @return \Google\AdsApi\AdManager\v202605\Contact[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function createContacts(array $contacts)
    {
      return $this->__soapCall('createContacts', array(array('contacts' => $contacts)))->getRval();
    }

    /**
     * Gets a {@link ContactPage} of {@link Contact} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Contact#name}</td>
     * </tr>
     * <tr>
     * <td>{@code email}</td>
     * <td>{@link Contact#email}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Contact#id}</td>
     * </tr>
     * <tr>
     * <td>{@code comment}</td>
     * <td>{@link Contact#comment}</td>
     * </tr>
     * <tr>
     * <td>{@code companyId}</td>
     * <td>{@link Contact#companyId}</td>
     * </tr>
     * <tr>
     * <td>{@code title}</td>
     * <td>{@link Contact#title}</td>
     * </tr>
     * <tr>
     * <td>{@code cellPhone}</td>
     * <td>{@link Contact#cellPhone}</td>
     * </tr>
     * <tr>
     * <td>{@code workPhone}</td>
     * <td>{@link Contact#workPhone}</td>
     * </tr>
     * <tr>
     * <td>{@code faxPhone}</td>
     * <td>{@link Contact#faxPhone}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Contact#status}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202605\Statement $statement
     * @return \Google\AdsApi\AdManager\v202605\ContactPage
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function getContactsByStatement(\Google\AdsApi\AdManager\v202605\Statement $statement)
    {
      return $this->__soapCall('getContactsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link Contact} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\Contact[] $contacts
     * @return \Google\AdsApi\AdManager\v202605\Contact[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function updateContacts(array $contacts)
    {
      return $this->__soapCall('updateContacts', array(array('contacts' => $contacts)))->getRval();
    }

}
