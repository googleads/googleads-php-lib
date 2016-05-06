<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ActivateProductPackages' => 'Google\\AdsApi\\Dfp\\v201602\\ActivateProductPackages',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'ArchiveProductPackages' => 'Google\\AdsApi\\Dfp\\v201602\\ArchiveProductPackages',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\Dfp\\v201602\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\CustomFieldValue',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DeactivateProductPackages' => 'Google\\AdsApi\\Dfp\\v201602\\DeactivateProductPackages',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'ProductPackageAction' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageAction',
      'ProductPackageActionError' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageActionError',
      'ProductPackage' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackage',
      'ProductPackageItemError' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageItemError',
      'ProductPackagePage' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackagePage',
      'ProductPackageRateCardAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageRateCardAssociationError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201602\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'UnarchiveProductPackages' => 'Google\\AdsApi\\Dfp\\v201602\\UnarchiveProductPackages',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/ProductPackageService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201602\ProductPackage[] $productPackages
     * @return \Google\AdsApi\Dfp\v201602\ProductPackage[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createProductPackages(array $productPackages)
    {
      return $this->__soapCall('createProductPackages', array(array('productPackages' => $productPackages)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201602\Statement $statement
     * @return \Google\AdsApi\Dfp\v201602\ProductPackagePage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getProductPackagesByStatement(\Google\AdsApi\Dfp\v201602\Statement $statement)
    {
      return $this->__soapCall('getProductPackagesByStatement', array(array('statement' => $statement)))->rval;
    }

    /**
     * Performs actions on {@link ProductPackage} objects that match the given
     * {@link Statement#query}.
     *
     * @param \Google\AdsApi\Dfp\v201602\ProductPackageAction $action
     * @param \Google\AdsApi\Dfp\v201602\Statement $statement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performProductPackageAction(\Google\AdsApi\Dfp\v201602\ProductPackageAction $action, \Google\AdsApi\Dfp\v201602\Statement $statement)
    {
      return $this->__soapCall('performProductPackageAction', array(array('action' => $action, 'statement' => $statement)))->rval;
    }

    /**
     * Updates the specified {@link ProductPackage} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\ProductPackage[] $productPackages
     * @return \Google\AdsApi\Dfp\v201602\ProductPackage[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateProductPackages(array $productPackages)
    {
      return $this->__soapCall('updateProductPackages', array(array('productPackages' => $productPackages)))->rval;
    }

}
