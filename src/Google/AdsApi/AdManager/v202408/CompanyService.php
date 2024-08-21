<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CompanyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202408\\ObjectValue',
      'ChildPublisher' => 'Google\\AdsApi\\AdManager\\v202408\\ChildPublisher',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202408\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202408\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202408\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202408\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202408\\AppliedLabel',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202408\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202408\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202408\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202408\\CommonError',
      'CompanyAction' => 'Google\\AdsApi\\AdManager\\v202408\\CompanyAction',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202408\\CompanyCreditStatusError',
      'Company' => 'Google\\AdsApi\\AdManager\\v202408\\Company',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v202408\\CompanyError',
      'CompanyPage' => 'Google\\AdsApi\\AdManager\\v202408\\CompanyPage',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202408\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202408\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202408\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202408\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202408\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202408\\DateValue',
      'ReInviteAction' => 'Google\\AdsApi\\AdManager\\v202408\\ReInviteAction',
      'EndAgreementAction' => 'Google\\AdsApi\\AdManager\\v202408\\EndAgreementAction',
      'ExchangeSignupApiError' => 'Google\\AdsApi\\AdManager\\v202408\\ExchangeSignupApiError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202408\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202408\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202408\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202408\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202408\\InvalidUrlError',
      'InventoryClientApiError' => 'Google\\AdsApi\\AdManager\\v202408\\InventoryClientApiError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202408\\LabelEntityAssociationError',
      'McmError' => 'Google\\AdsApi\\AdManager\\v202408\\McmError',
      'NetworkError' => 'Google\\AdsApi\\AdManager\\v202408\\NetworkError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202408\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202408\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202408\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202408\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202408\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202408\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202408\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202408\\QuotaError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202408\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202408\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202408\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202408\\RequiredNumberError',
      'ResendInvitationAction' => 'Google\\AdsApi\\AdManager\\v202408\\ResendInvitationAction',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202408\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202408\\SetValue',
      'SiteError' => 'Google\\AdsApi\\AdManager\\v202408\\SiteError',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202408\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202408\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202408\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202408\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202408\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202408\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202408\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202408\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202408\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202408\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202408\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202408\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202408\\Value',
      'ViewabilityProvider' => 'Google\\AdsApi\\AdManager\\v202408\\ViewabilityProvider',
      'createCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v202408\\createCompaniesResponse',
      'getCompaniesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202408\\getCompaniesByStatementResponse',
      'performCompanyActionResponse' => 'Google\\AdsApi\\AdManager\\v202408\\performCompanyActionResponse',
      'updateCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v202408\\updateCompaniesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202408/CompanyService?wsdl')
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
     * Creates new {@link Company} objects.
     *
     * @param \Google\AdsApi\AdManager\v202408\Company[] $companies
     * @return \Google\AdsApi\AdManager\v202408\Company[]
     * @throws \Google\AdsApi\AdManager\v202408\ApiException
     */
    public function createCompanies(array $companies)
    {
      return $this->__soapCall('createCompanies', array(array('companies' => $companies)))->getRval();
    }

    /**
     * Gets a {@link CompanyPage} of {@link Company} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Company#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Company#name}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link Company#type}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Company#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202408\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202408\CompanyPage
     * @throws \Google\AdsApi\AdManager\v202408\ApiException
     */
    public function getCompaniesByStatement(\Google\AdsApi\AdManager\v202408\Statement $filterStatement)
    {
      return $this->__soapCall('getCompaniesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Company} objects that match the given {@code Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202408\CompanyAction $companyAction
     * @param \Google\AdsApi\AdManager\v202408\Statement $statement
     * @return \Google\AdsApi\AdManager\v202408\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202408\ApiException
     */
    public function performCompanyAction(\Google\AdsApi\AdManager\v202408\CompanyAction $companyAction, \Google\AdsApi\AdManager\v202408\Statement $statement)
    {
      return $this->__soapCall('performCompanyAction', array(array('companyAction' => $companyAction, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link Company} objects.
     *
     * @param \Google\AdsApi\AdManager\v202408\Company[] $companies
     * @return \Google\AdsApi\AdManager\v202408\Company[]
     * @throws \Google\AdsApi\AdManager\v202408\ApiException
     */
    public function updateCompanies(array $companies)
    {
      return $this->__soapCall('updateCompanies', array(array('companies' => $companies)))->getRval();
    }

}
