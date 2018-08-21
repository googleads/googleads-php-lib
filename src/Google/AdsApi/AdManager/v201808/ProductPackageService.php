<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201808\\ObjectValue',
      'ActivateProductPackages' => 'Google\\AdsApi\\AdManager\\v201808\\ActivateProductPackages',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201808\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201808\\ApplicationException',
      'ArchiveProductPackages' => 'Google\\AdsApi\\AdManager\\v201808\\ArchiveProductPackages',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201808\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201808\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\AdManager\\v201808\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201808\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201808\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201808\\CommonError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201808\\CustomFieldValue',
      'Date' => 'Google\\AdsApi\\AdManager\\v201808\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201808\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateValue',
      'DeactivateProductPackages' => 'Google\\AdsApi\\AdManager\\v201808\\DeactivateProductPackages',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201808\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201808\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201808\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201808\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201808\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201808\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201808\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201808\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201808\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201808\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201808\\PermissionError',
      'ProductPackageAction' => 'Google\\AdsApi\\AdManager\\v201808\\ProductPackageAction',
      'ProductPackageActionError' => 'Google\\AdsApi\\AdManager\\v201808\\ProductPackageActionError',
      'ProductPackage' => 'Google\\AdsApi\\AdManager\\v201808\\ProductPackage',
      'ProductPackageItemError' => 'Google\\AdsApi\\AdManager\\v201808\\ProductPackageItemError',
      'ProductPackagePage' => 'Google\\AdsApi\\AdManager\\v201808\\ProductPackagePage',
      'ProductPackageRateCardAssociationError' => 'Google\\AdsApi\\AdManager\\v201808\\ProductPackageRateCardAssociationError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201808\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201808\\RangeError',
      'RateCardError' => 'Google\\AdsApi\\AdManager\\v201808\\RateCardError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201808\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201808\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201808\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201808\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201808\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201808\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201808\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201808\\TextValue',
      'UnarchiveProductPackages' => 'Google\\AdsApi\\AdManager\\v201808\\UnarchiveProductPackages',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201808\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201808\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201808\\Value',
      'createProductPackagesResponse' => 'Google\\AdsApi\\AdManager\\v201808\\createProductPackagesResponse',
      'getProductPackagesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201808\\getProductPackagesByStatementResponse',
      'performProductPackageActionResponse' => 'Google\\AdsApi\\AdManager\\v201808\\performProductPackageActionResponse',
      'updateProductPackagesResponse' => 'Google\\AdsApi\\AdManager\\v201808\\updateProductPackagesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201808/ProductPackageService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201808\ProductPackage[] $productPackages
     * @return \Google\AdsApi\AdManager\v201808\ProductPackage[]
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
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
     * @param \Google\AdsApi\AdManager\v201808\Statement $statement
     * @return \Google\AdsApi\AdManager\v201808\ProductPackagePage
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function getProductPackagesByStatement(\Google\AdsApi\AdManager\v201808\Statement $statement)
    {
      return $this->__soapCall('getProductPackagesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link ProductPackage} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v201808\ProductPackageAction $action
     * @param \Google\AdsApi\AdManager\v201808\Statement $statement
     * @return \Google\AdsApi\AdManager\v201808\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function performProductPackageAction(\Google\AdsApi\AdManager\v201808\ProductPackageAction $action, \Google\AdsApi\AdManager\v201808\Statement $statement)
    {
      return $this->__soapCall('performProductPackageAction', array(array('action' => $action, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductPackage} objects.
     *
     * @param \Google\AdsApi\AdManager\v201808\ProductPackage[] $productPackages
     * @return \Google\AdsApi\AdManager\v201808\ProductPackage[]
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function updateProductPackages(array $productPackages)
    {
      return $this->__soapCall('updateProductPackages', array(array('productPackages' => $productPackages)))->getRval();
    }

}
