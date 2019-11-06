<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CompanyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201911\\AppliedLabel',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201911\\CompanyCreditStatusError',
      'Company' => 'Google\\AdsApi\\AdManager\\v201911\\Company',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v201911\\CompanyError',
      'CompanyPage' => 'Google\\AdsApi\\AdManager\\v201911\\CompanyPage',
      'CompanySettings' => 'Google\\AdsApi\\AdManager\\v201911\\CompanySettings',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201911\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LabelEntityAssociationError',
      'NetworkError' => 'Google\\AdsApi\\AdManager\\v201911\\NetworkError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201911\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201911\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201911\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201911\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201911\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'ViewabilityProvider' => 'Google\\AdsApi\\AdManager\\v201911\\ViewabilityProvider',
      'createCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v201911\\createCompaniesResponse',
      'getCompaniesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getCompaniesByStatementResponse',
      'updateCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v201911\\updateCompaniesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/CompanyService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201911\Company[] $companies
     * @return \Google\AdsApi\AdManager\v201911\Company[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
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
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\CompanyPage
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getCompaniesByStatement(\Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('getCompaniesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Company} objects.
     *
     * @param \Google\AdsApi\AdManager\v201911\Company[] $companies
     * @return \Google\AdsApi\AdManager\v201911\Company[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function updateCompanies(array $companies)
    {
      return $this->__soapCall('updateCompanies', array(array('companies' => $companies)))->getRval();
    }

}
