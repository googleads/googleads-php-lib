<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201608\\ObjectValue',
      'ActivateProductPackages' => 'Google\\AdsApi\\Dfp\\v201608\\ActivateProductPackages',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201608\\ApplicationException',
      'ArchiveProductPackages' => 'Google\\AdsApi\\Dfp\\v201608\\ArchiveProductPackages',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201608\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201608\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\Dfp\\v201608\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201608\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201608\\CommonError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201608\\CustomFieldValue',
      'Date' => 'Google\\AdsApi\\Dfp\\v201608\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201608\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateValue',
      'DeactivateProductPackages' => 'Google\\AdsApi\\Dfp\\v201608\\DeactivateProductPackages',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201608\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201608\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201608\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201608\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201608\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201608\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201608\\PermissionError',
      'ProductPackageAction' => 'Google\\AdsApi\\Dfp\\v201608\\ProductPackageAction',
      'ProductPackageActionError' => 'Google\\AdsApi\\Dfp\\v201608\\ProductPackageActionError',
      'ProductPackage' => 'Google\\AdsApi\\Dfp\\v201608\\ProductPackage',
      'ProductPackageItemError' => 'Google\\AdsApi\\Dfp\\v201608\\ProductPackageItemError',
      'ProductPackagePage' => 'Google\\AdsApi\\Dfp\\v201608\\ProductPackagePage',
      'ProductPackageRateCardAssociationError' => 'Google\\AdsApi\\Dfp\\v201608\\ProductPackageRateCardAssociationError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201608\\RangeError',
      'RateCardError' => 'Google\\AdsApi\\Dfp\\v201608\\RateCardError',
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
      'UnarchiveProductPackages' => 'Google\\AdsApi\\Dfp\\v201608\\UnarchiveProductPackages',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201608\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201608\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201608\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201608/ProductPackageService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201608\ProductPackage[] $productPackages
     * @return \Google\AdsApi\Dfp\v201608\ProductPackage[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
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
     * @param \Google\AdsApi\Dfp\v201608\Statement $statement
     * @return \Google\AdsApi\Dfp\v201608\ProductPackagePage
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function getProductPackagesByStatement(\Google\AdsApi\Dfp\v201608\Statement $statement)
    {
      return $this->__soapCall('getProductPackagesByStatement', array(array('statement' => $statement)))->rval;
    }

    /**
     * Performs actions on {@link ProductPackage} objects that match the given
     * {@link Statement#query}.
     *
     * @param \Google\AdsApi\Dfp\v201608\ProductPackageAction $action
     * @param \Google\AdsApi\Dfp\v201608\Statement $statement
     * @return \Google\AdsApi\Dfp\v201608\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function performProductPackageAction(\Google\AdsApi\Dfp\v201608\ProductPackageAction $action, \Google\AdsApi\Dfp\v201608\Statement $statement)
    {
      return $this->__soapCall('performProductPackageAction', array(array('action' => $action, 'statement' => $statement)))->rval;
    }

    /**
     * Updates the specified {@link ProductPackage} objects.
     *
     * @param \Google\AdsApi\Dfp\v201608\ProductPackage[] $productPackages
     * @return \Google\AdsApi\Dfp\v201608\ProductPackage[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function updateProductPackages(array $productPackages)
    {
      return $this->__soapCall('updateProductPackages', array(array('productPackages' => $productPackages)))->rval;
    }

}
