<?php

namespace Google\AdsApi\AdManager\v202305;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContactService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202305\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202305\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202305\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202305\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202305\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202305\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202305\\CommonError',
      'Contact' => 'Google\\AdsApi\\AdManager\\v202305\\Contact',
      'ContactError' => 'Google\\AdsApi\\AdManager\\v202305\\ContactError',
      'ContactPage' => 'Google\\AdsApi\\AdManager\\v202305\\ContactPage',
      'BaseContact' => 'Google\\AdsApi\\AdManager\\v202305\\BaseContact',
      'Date' => 'Google\\AdsApi\\AdManager\\v202305\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202305\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202305\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202305\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202305\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202305\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202305\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202305\\InvalidEmailError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202305\\NotNullError',
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
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202305\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202305\\Value',
      'createContactsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\createContactsResponse',
      'getContactsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getContactsByStatementResponse',
      'updateContactsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\updateContactsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202305/ContactService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202305\Contact[] $contacts
     * @return \Google\AdsApi\AdManager\v202305\Contact[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
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
     * @param \Google\AdsApi\AdManager\v202305\Statement $statement
     * @return \Google\AdsApi\AdManager\v202305\ContactPage
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getContactsByStatement(\Google\AdsApi\AdManager\v202305\Statement $statement)
    {
      return $this->__soapCall('getContactsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link Contact} objects.
     *
     * @param \Google\AdsApi\AdManager\v202305\Contact[] $contacts
     * @return \Google\AdsApi\AdManager\v202305\Contact[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function updateContacts(array $contacts)
    {
      return $this->__soapCall('updateContacts', array(array('contacts' => $contacts)))->getRval();
    }

}
