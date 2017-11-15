<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201702\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201702\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201702\\ApplicationException',
      'ArchiveProductPackageItems' => 'Google\\AdsApi\\Dfp\\v201702\\ArchiveProductPackageItems',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201702\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201702\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201702\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201702\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201702\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201702\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201702\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201702\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201702\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201702\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201702\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201702\\PermissionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201702\\ProductError',
      'ProductPackageActionError' => 'Google\\AdsApi\\Dfp\\v201702\\ProductPackageActionError',
      'ProductPackageItemAction' => 'Google\\AdsApi\\Dfp\\v201702\\ProductPackageItemAction',
      'ProductPackageItemActionError' => 'Google\\AdsApi\\Dfp\\v201702\\ProductPackageItemActionError',
      'ProductPackageItem' => 'Google\\AdsApi\\Dfp\\v201702\\ProductPackageItem',
      'ProductPackageItemError' => 'Google\\AdsApi\\Dfp\\v201702\\ProductPackageItemError',
      'ProductPackageItemPage' => 'Google\\AdsApi\\Dfp\\v201702\\ProductPackageItemPage',
      'ProductPackageRateCardAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\ProductPackageRateCardAssociationError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201702\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201702\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201702\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201702\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201702\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201702\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201702\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201702\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201702\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201702\\TextValue',
      'UnArchiveProductPackageItems' => 'Google\\AdsApi\\Dfp\\v201702\\UnArchiveProductPackageItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201702\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201702\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201702\\Value',
      'createProductPackageItemsResponse' => 'Google\\AdsApi\\Dfp\\v201702\\createProductPackageItemsResponse',
      'getProductPackageItemsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201702\\getProductPackageItemsByStatementResponse',
      'performProductPackageItemActionResponse' => 'Google\\AdsApi\\Dfp\\v201702\\performProductPackageItemActionResponse',
      'updateProductPackageItemsResponse' => 'Google\\AdsApi\\Dfp\\v201702\\updateProductPackageItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201702/ProductPackageItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201702\ProductPackageItem[] $productPackageItems
     * @return \Google\AdsApi\Dfp\v201702\ProductPackageItem[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
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
     * @param \Google\AdsApi\Dfp\v201702\Statement $statement
     * @return \Google\AdsApi\Dfp\v201702\ProductPackageItemPage
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function getProductPackageItemsByStatement(\Google\AdsApi\Dfp\v201702\Statement $statement)
    {
      return $this->__soapCall('getProductPackageItemsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link ProductPackageItem} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of product package items
     *
     * @param \Google\AdsApi\Dfp\v201702\ProductPackageItemAction $productPackageItemAction
     * @param \Google\AdsApi\Dfp\v201702\Statement $statement
     * @return \Google\AdsApi\Dfp\v201702\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function performProductPackageItemAction(\Google\AdsApi\Dfp\v201702\ProductPackageItemAction $productPackageItemAction, \Google\AdsApi\Dfp\v201702\Statement $statement)
    {
      return $this->__soapCall('performProductPackageItemAction', array(array('productPackageItemAction' => $productPackageItemAction, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductPackageItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201702\ProductPackageItem[] $productPackageItems
     * @return \Google\AdsApi\Dfp\v201702\ProductPackageItem[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function updateProductPackageItems(array $productPackageItems)
    {
      return $this->__soapCall('updateProductPackageItems', array(array('productPackageItems' => $productPackageItems)))->getRval();
    }

}
