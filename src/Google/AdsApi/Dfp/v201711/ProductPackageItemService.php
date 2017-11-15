<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201711\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201711\\ApplicationException',
      'ArchiveProductPackageItems' => 'Google\\AdsApi\\Dfp\\v201711\\ArchiveProductPackageItems',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201711\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201711\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201711\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201711\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201711\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201711\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201711\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201711\\PermissionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201711\\ProductError',
      'ProductPackageActionError' => 'Google\\AdsApi\\Dfp\\v201711\\ProductPackageActionError',
      'ProductPackageItemAction' => 'Google\\AdsApi\\Dfp\\v201711\\ProductPackageItemAction',
      'ProductPackageItemActionError' => 'Google\\AdsApi\\Dfp\\v201711\\ProductPackageItemActionError',
      'ProductPackageItem' => 'Google\\AdsApi\\Dfp\\v201711\\ProductPackageItem',
      'ProductPackageItemError' => 'Google\\AdsApi\\Dfp\\v201711\\ProductPackageItemError',
      'ProductPackageItemPage' => 'Google\\AdsApi\\Dfp\\v201711\\ProductPackageItemPage',
      'ProductPackageRateCardAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\ProductPackageRateCardAssociationError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201711\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201711\\TextValue',
      'UnArchiveProductPackageItems' => 'Google\\AdsApi\\Dfp\\v201711\\UnArchiveProductPackageItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201711\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201711\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201711\\Value',
      'createProductPackageItemsResponse' => 'Google\\AdsApi\\Dfp\\v201711\\createProductPackageItemsResponse',
      'getProductPackageItemsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getProductPackageItemsByStatementResponse',
      'performProductPackageItemActionResponse' => 'Google\\AdsApi\\Dfp\\v201711\\performProductPackageItemActionResponse',
      'updateProductPackageItemsResponse' => 'Google\\AdsApi\\Dfp\\v201711\\updateProductPackageItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/ProductPackageItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201711\ProductPackageItem[] $productPackageItems
     * @return \Google\AdsApi\Dfp\v201711\ProductPackageItem[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function createProductPackageItems(array $productPackageItems)
    {
      return $this->__soapCall('createProductPackageItems', array(array('productPackageItems' => $productPackageItems)))->getRval();
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
     * @param \Google\AdsApi\Dfp\v201711\Statement $statement
     * @return \Google\AdsApi\Dfp\v201711\ProductPackageItemPage
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getProductPackageItemsByStatement(\Google\AdsApi\Dfp\v201711\Statement $statement)
    {
      return $this->__soapCall('getProductPackageItemsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link ProductPackageItem} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of product package items
     *
     * @param \Google\AdsApi\Dfp\v201711\ProductPackageItemAction $productPackageItemAction
     * @param \Google\AdsApi\Dfp\v201711\Statement $statement
     * @return \Google\AdsApi\Dfp\v201711\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function performProductPackageItemAction(\Google\AdsApi\Dfp\v201711\ProductPackageItemAction $productPackageItemAction, \Google\AdsApi\Dfp\v201711\Statement $statement)
    {
      return $this->__soapCall('performProductPackageItemAction', array(array('productPackageItemAction' => $productPackageItemAction, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductPackageItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201711\ProductPackageItem[] $productPackageItems
     * @return \Google\AdsApi\Dfp\v201711\ProductPackageItem[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function updateProductPackageItems(array $productPackageItems)
    {
      return $this->__soapCall('updateProductPackageItems', array(array('productPackageItems' => $productPackageItems)))->getRval();
    }

}
