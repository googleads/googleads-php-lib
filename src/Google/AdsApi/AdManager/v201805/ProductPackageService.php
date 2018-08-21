<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201805\\ObjectValue',
      'ActivateProductPackages' => 'Google\\AdsApi\\AdManager\\v201805\\ActivateProductPackages',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201805\\ApplicationException',
      'ArchiveProductPackages' => 'Google\\AdsApi\\AdManager\\v201805\\ArchiveProductPackages',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201805\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201805\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\AdManager\\v201805\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201805\\CommonError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201805\\CustomFieldValue',
      'Date' => 'Google\\AdsApi\\AdManager\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateValue',
      'DeactivateProductPackages' => 'Google\\AdsApi\\AdManager\\v201805\\DeactivateProductPackages',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201805\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201805\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201805\\PermissionError',
      'ProductPackageAction' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageAction',
      'ProductPackageActionError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageActionError',
      'ProductPackage' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackage',
      'ProductPackageItemError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageItemError',
      'ProductPackagePage' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackagePage',
      'ProductPackageRateCardAssociationError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageRateCardAssociationError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201805\\RangeError',
      'RateCardError' => 'Google\\AdsApi\\AdManager\\v201805\\RateCardError',
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
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201805\\TextValue',
      'UnarchiveProductPackages' => 'Google\\AdsApi\\AdManager\\v201805\\UnarchiveProductPackages',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201805\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201805\\Value',
      'createProductPackagesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\createProductPackagesResponse',
      'getProductPackagesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getProductPackagesByStatementResponse',
      'performProductPackageActionResponse' => 'Google\\AdsApi\\AdManager\\v201805\\performProductPackageActionResponse',
      'updateProductPackagesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\updateProductPackagesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/ProductPackageService?wsdl')
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
     * Creates new {@link ProductPackage} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\ProductPackage[] $productPackages
     * @return \Google\AdsApi\AdManager\v201805\ProductPackage[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function createProductPackages(array $productPackages)
    {
      return $this->__soapCall('createProductPackages', array(array('productPackages' => $productPackages)))->getRval();
    }

    /**
     * Gets a {@link ProductPackagePage} of {@link ProductPackage} objects
     * that satisfy the filtering criteria specified by given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ProductPackage#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ProductPackage#name}</td>
     * </tr>
     * <tr>
     * <td>{@code notes}</td>
     * <td>{@link ProductPackage#notes}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ProductPackage#status}</td>
     * </tr>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link ProductPackage#isArchived}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link ProductPackage#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * filtering criteria over product packages
     *
     * @param \Google\AdsApi\AdManager\v201805\Statement $statement
     * @return \Google\AdsApi\AdManager\v201805\ProductPackagePage
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getProductPackagesByStatement(\Google\AdsApi\AdManager\v201805\Statement $statement)
    {
      return $this->__soapCall('getProductPackagesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link ProductPackage} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v201805\ProductPackageAction $action
     * @param \Google\AdsApi\AdManager\v201805\Statement $statement
     * @return \Google\AdsApi\AdManager\v201805\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function performProductPackageAction(\Google\AdsApi\AdManager\v201805\ProductPackageAction $action, \Google\AdsApi\AdManager\v201805\Statement $statement)
    {
      return $this->__soapCall('performProductPackageAction', array(array('action' => $action, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductPackage} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\ProductPackage[] $productPackages
     * @return \Google\AdsApi\AdManager\v201805\ProductPackage[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function updateProductPackages(array $productPackages)
    {
      return $this->__soapCall('updateProductPackages', array(array('productPackages' => $productPackages)))->getRval();
    }

}
