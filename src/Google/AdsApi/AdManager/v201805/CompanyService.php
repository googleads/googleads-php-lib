<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CompanyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201805\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201805\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201805\\AppliedLabel',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201805\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\AdManager\\v201805\\AvailableBillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201805\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201805\\CompanyCreditStatusError',
      'Company' => 'Google\\AdsApi\\AdManager\\v201805\\Company',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v201805\\CompanyError',
      'CompanyPage' => 'Google\\AdsApi\\AdManager\\v201805\\CompanyPage',
      'CompanySettings' => 'Google\\AdsApi\\AdManager\\v201805\\CompanySettings',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201805\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201805\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201805\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v201805\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201805\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201805\\LabelEntityAssociationError',
      'NetworkError' => 'Google\\AdsApi\\AdManager\\v201805\\NetworkError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201805\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201805\\QuotaError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201805\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201805\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201805\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201805\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201805\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201805\\Value',
      'ViewabilityProvider' => 'Google\\AdsApi\\AdManager\\v201805\\ViewabilityProvider',
      'createCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\createCompaniesResponse',
      'getCompaniesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getCompaniesByStatementResponse',
      'updateCompaniesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\updateCompaniesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/CompanyService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201805\Company[] $companies
     * @return \Google\AdsApi\AdManager\v201805\Company[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
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
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\CompanyPage
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getCompaniesByStatement(\Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getCompaniesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Company} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\Company[] $companies
     * @return \Google\AdsApi\AdManager\v201805\Company[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function updateCompanies(array $companies)
    {
      return $this->__soapCall('updateCompanies', array(array('companies' => $companies)))->getRval();
    }

}
