<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CompanyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202111\\ObjectValue',
      'ChildPublisher' => 'Google\\AdsApi\\AdManager\\v202111\\ChildPublisher',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202111\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202111\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202111\\AppliedLabel',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202111\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202111\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202111\\CommonError',
      'CompanyAction' => 'Google\\AdsApi\\AdManager\\v202111\\CompanyAction',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202111\\CompanyCreditStatusError',
      'Company' => 'Google\\AdsApi\\AdManager\\v202111\\Company',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v202111\\CompanyError',
      'CompanyPage' => 'Google\\AdsApi\\AdManager\\v202111\\CompanyPage',
      'CompanySettings' => 'Google\\AdsApi\\AdManager\\v202111\\CompanySettings',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202111\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202111\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202111\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202111\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateValue',
      'ReInviteAction' => 'Google\\AdsApi\\AdManager\\v202111\\ReInviteAction',
      'EndAgreementAction' => 'Google\\AdsApi\\AdManager\\v202111\\EndAgreementAction',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202111\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202111\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202111\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202111\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202111\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202111\\LabelEntityAssociationError',
      'NetworkError' => 'Google\\AdsApi\\AdManager\\v202111\\NetworkError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202111\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202111\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202111\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202111\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202111\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202111\\QuotaError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202111\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredNumberError',
      'ResendInvitationAction' => 'Google\\AdsApi\\AdManager\\v202111\\ResendInvitationAction',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202111\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202111\\SetValue',
      'SiteError' => 'Google\\AdsApi\\AdManager\\v202111\\SiteError',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202111\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202111\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202111\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202111\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202111\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202111\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202111\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202111\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202111\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202111\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202111\\Value',
      'ViewabilityProvider' => 'Google\\AdsApi\\AdManager\\v202111\\ViewabilityProvider',
      'createCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\createCompaniesResponse',
      'getCompaniesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getCompaniesByStatementResponse',
      'performCompanyActionResponse' => 'Google\\AdsApi\\AdManager\\v202111\\performCompanyActionResponse',
      'updateCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\updateCompaniesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202111/CompanyService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202111\Company[] $companies
     * @return \Google\AdsApi\AdManager\v202111\Company[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function createCompanies(array $companies)
    {
      return $this->__soapCall('createCompanies', array(array('companies' => $companies)))->getRval();
    }

    /**
     * Gets a {@link CompanyPage} of {@link Company} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
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
     * a set of companies
     *
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\CompanyPage
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getCompaniesByStatement(\Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('getCompaniesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Company} objects that match the given {@code Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202111\CompanyAction $companyAction
     * @param \Google\AdsApi\AdManager\v202111\Statement $statement
     * @return \Google\AdsApi\AdManager\v202111\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function performCompanyAction(\Google\AdsApi\AdManager\v202111\CompanyAction $companyAction, \Google\AdsApi\AdManager\v202111\Statement $statement)
    {
      return $this->__soapCall('performCompanyAction', array(array('companyAction' => $companyAction, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link Company} objects.
     *
     * @param \Google\AdsApi\AdManager\v202111\Company[] $companies
     * @return \Google\AdsApi\AdManager\v202111\Company[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function updateCompanies(array $companies)
    {
      return $this->__soapCall('updateCompanies', array(array('companies' => $companies)))->getRval();
    }

}
