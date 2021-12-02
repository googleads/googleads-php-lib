<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CompanyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202108\\ObjectValue',
      'ChildPublisher' => 'Google\\AdsApi\\AdManager\\v202108\\ChildPublisher',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202108\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202108\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202108\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202108\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202108\\AppliedLabel',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202108\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202108\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202108\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202108\\CommonError',
      'CompanyAction' => 'Google\\AdsApi\\AdManager\\v202108\\CompanyAction',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202108\\CompanyCreditStatusError',
      'Company' => 'Google\\AdsApi\\AdManager\\v202108\\Company',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v202108\\CompanyError',
      'CompanyPage' => 'Google\\AdsApi\\AdManager\\v202108\\CompanyPage',
      'CompanySettings' => 'Google\\AdsApi\\AdManager\\v202108\\CompanySettings',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202108\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202108\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202108\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202108\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202108\\DateValue',
      'ReInviteAction' => 'Google\\AdsApi\\AdManager\\v202108\\ReInviteAction',
      'EndAgreementAction' => 'Google\\AdsApi\\AdManager\\v202108\\EndAgreementAction',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202108\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202108\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202108\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202108\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202108\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202108\\LabelEntityAssociationError',
      'NetworkError' => 'Google\\AdsApi\\AdManager\\v202108\\NetworkError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202108\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202108\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202108\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202108\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202108\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202108\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202108\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202108\\QuotaError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202108\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202108\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202108\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202108\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202108\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202108\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202108\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202108\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202108\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202108\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202108\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202108\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202108\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202108\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202108\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202108\\Value',
      'ViewabilityProvider' => 'Google\\AdsApi\\AdManager\\v202108\\ViewabilityProvider',
      'createCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v202108\\createCompaniesResponse',
      'getCompaniesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202108\\getCompaniesByStatementResponse',
      'performCompanyActionResponse' => 'Google\\AdsApi\\AdManager\\v202108\\performCompanyActionResponse',
      'updateCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v202108\\updateCompaniesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202108/CompanyService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202108\Company[] $companies
     * @return \Google\AdsApi\AdManager\v202108\Company[]
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
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
     * @param \Google\AdsApi\AdManager\v202108\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202108\CompanyPage
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function getCompaniesByStatement(\Google\AdsApi\AdManager\v202108\Statement $filterStatement)
    {
      return $this->__soapCall('getCompaniesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Company} objects that match the given {@code Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202108\CompanyAction $companyAction
     * @param \Google\AdsApi\AdManager\v202108\Statement $statement
     * @return \Google\AdsApi\AdManager\v202108\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function performCompanyAction(\Google\AdsApi\AdManager\v202108\CompanyAction $companyAction, \Google\AdsApi\AdManager\v202108\Statement $statement)
    {
      return $this->__soapCall('performCompanyAction', array(array('companyAction' => $companyAction, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link Company} objects.
     *
     * @param \Google\AdsApi\AdManager\v202108\Company[] $companies
     * @return \Google\AdsApi\AdManager\v202108\Company[]
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function updateCompanies(array $companies)
    {
      return $this->__soapCall('updateCompanies', array(array('companies' => $companies)))->getRval();
    }

}
