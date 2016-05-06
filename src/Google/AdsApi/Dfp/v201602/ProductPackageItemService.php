<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'ArchiveProductPackageItems' => 'Google\\AdsApi\\Dfp\\v201602\\ArchiveProductPackageItems',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201602\\ProductError',
      'ProductPackageActionError' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageActionError',
      'ProductPackageItemAction' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageItemAction',
      'ProductPackageItemActionError' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageItemActionError',
      'ProductPackageItem' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageItem',
      'ProductPackageItemError' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageItemError',
      'ProductPackageItemPage' => 'Google\\AdsApi\\Dfp\\v201602\\ProductPackageItemPage',
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
      'UnArchiveProductPackageItems' => 'Google\\AdsApi\\Dfp\\v201602\\UnArchiveProductPackageItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/ProductPackageItemService?wsdl')
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
     * Creates new {@link ProductPackageItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\ProductPackageItem[] $productPackageItems
     * @return \Google\AdsApi\Dfp\v201602\ProductPackageItem[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createProductPackageItems(array $productPackageItems)
    {
      return $this->__soapCall('createProductPackageItems', array(array('productPackageItems' => $productPackageItems)))->rval;
    }

    /**
     * Gets a {@link ProductPackageItemPage} of {@code ProductPackageItem} objects
     * that satisfy the filtering criteria specified by given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ProductPackageItem#id}</td>
     * </tr>
     * <tr>
     * <td>{@code productPackageId}</td>
     * <td>{@link ProductPackageItem#productPackageId}</td>
     * </tr>
     * <tr>
     * <td>{@code productId}</td>
     * <td>{@link ProductPackageItem#productId}</td>
     * </tr>
     * <tr>
     * <td>{@code productTemplateId}</td>
     * <td>{@link ProductPackageItem#productTemplateId}</td>
     * </tr>
     * <tr>
     * <td>{@code mandatory}</td>
     * <td>{@link ProductPackageItem#mandatory}</td>
     * </tr>
     * <tr>
     * <td>{@code archived}</td>
     * <td>{@link ProductPackageItem#archived}</td>
     * </tr>
     * </table>
     *
     * filtering criteria over product packages
     *
     * @param \Google\AdsApi\Dfp\v201602\Statement $statement
     * @return \Google\AdsApi\Dfp\v201602\ProductPackageItemPage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getProductPackageItemsByStatement(\Google\AdsApi\Dfp\v201602\Statement $statement)
    {
      return $this->__soapCall('getProductPackageItemsByStatement', array(array('statement' => $statement)))->rval;
    }

    /**
     * Performs actions on {@link ProductPackageItem} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of product package items
     *
     * @param \Google\AdsApi\Dfp\v201602\ProductPackageItemAction $productPackageItemAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $statement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performProductPackageItemAction(\Google\AdsApi\Dfp\v201602\ProductPackageItemAction $productPackageItemAction, \Google\AdsApi\Dfp\v201602\Statement $statement)
    {
      return $this->__soapCall('performProductPackageItemAction', array(array('productPackageItemAction' => $productPackageItemAction, 'statement' => $statement)))->rval;
    }

    /**
     * Updates the specified {@link ProductPackageItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\ProductPackageItem[] $productPackageItems
     * @return \Google\AdsApi\Dfp\v201602\ProductPackageItem[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateProductPackageItems(array $productPackageItems)
    {
      return $this->__soapCall('updateProductPackageItems', array(array('productPackageItems' => $productPackageItems)))->rval;
    }

}
