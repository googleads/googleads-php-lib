<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContactService extends \Google\AdsApi\Common\AdsSoapClient
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
      'Contact' => 'Google\\AdsApi\\Dfp\\v201608\\Contact',
      'ContactError' => 'Google\\AdsApi\\Dfp\\v201608\\ContactError',
      'ContactPage' => 'Google\\AdsApi\\Dfp\\v201608\\ContactPage',
      'BaseContact' => 'Google\\AdsApi\\Dfp\\v201608\\BaseContact',
      'Date' => 'Google\\AdsApi\\Dfp\\v201608\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201608\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201608\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201608\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201608\\InvalidEmailError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201608\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201608\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201608\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201608\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredError',
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
      'Value' => 'Google\\AdsApi\\Dfp\\v201608\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201608/ContactService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201608\Contact[] $contacts
     * @return \Google\AdsApi\Dfp\v201608\Contact[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function createContacts(array $contacts)
    {
      return $this->__soapCall('createContacts', array(array('contacts' => $contacts)))->rval;
    }

    /**
     * Gets a {@link ContactPage} of {@link Contact} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
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
     * a set of contacts
     *
     * @param \Google\AdsApi\Dfp\v201608\Statement $statement
     * @return \Google\AdsApi\Dfp\v201608\ContactPage
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function getContactsByStatement(\Google\AdsApi\Dfp\v201608\Statement $statement)
    {
      return $this->__soapCall('getContactsByStatement', array(array('statement' => $statement)))->rval;
    }

    /**
     * Updates the specified {@link Contact} objects.
     *
     * @param \Google\AdsApi\Dfp\v201608\Contact[] $contacts
     * @return \Google\AdsApi\Dfp\v201608\Contact[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function updateContacts(array $contacts)
    {
      return $this->__soapCall('updateContacts', array(array('contacts' => $contacts)))->rval;
    }

}
