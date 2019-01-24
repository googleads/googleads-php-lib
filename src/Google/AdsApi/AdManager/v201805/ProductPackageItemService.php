<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageItemService extends \Google\AdsApi\Common\AdsSoapClient
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
      'ArchiveProductPackageItems' => 'Google\\AdsApi\\AdManager\\v201805\\ArchiveProductPackageItems',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201805\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201805\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201805\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201805\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201805\\PermissionError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductError',
      'ProductPackageActionError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageActionError',
      'ProductPackageItemAction' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageItemAction',
      'ProductPackageItemActionError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageItemActionError',
      'ProductPackageItem' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageItem',
      'ProductPackageItemError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageItemError',
      'ProductPackageItemPage' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageItemPage',
      'ProductPackageRateCardAssociationError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageRateCardAssociationError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201805\\RangeError',
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
      'UnArchiveProductPackageItems' => 'Google\\AdsApi\\AdManager\\v201805\\UnArchiveProductPackageItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201805\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201805\\Value',
      'createProductPackageItemsResponse' => 'Google\\AdsApi\\AdManager\\v201805\\createProductPackageItemsResponse',
      'getProductPackageItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getProductPackageItemsByStatementResponse',
      'performProductPackageItemActionResponse' => 'Google\\AdsApi\\AdManager\\v201805\\performProductPackageItemActionResponse',
      'updateProductPackageItemsResponse' => 'Google\\AdsApi\\AdManager\\v201805\\updateProductPackageItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/ProductPackageItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201805\ProductPackageItem[] $productPackageItems
     * @return \Google\AdsApi\AdManager\v201805\ProductPackageItem[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
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
     * @param \Google\AdsApi\AdManager\v201805\Statement $statement
     * @return \Google\AdsApi\AdManager\v201805\ProductPackageItemPage
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getProductPackageItemsByStatement(\Google\AdsApi\AdManager\v201805\Statement $statement)
    {
      return $this->__soapCall('getProductPackageItemsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link ProductPackageItem} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of product package items
     *
     * @param \Google\AdsApi\AdManager\v201805\ProductPackageItemAction $productPackageItemAction
     * @param \Google\AdsApi\AdManager\v201805\Statement $statement
     * @return \Google\AdsApi\AdManager\v201805\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function performProductPackageItemAction(\Google\AdsApi\AdManager\v201805\ProductPackageItemAction $productPackageItemAction, \Google\AdsApi\AdManager\v201805\Statement $statement)
    {
      return $this->__soapCall('performProductPackageItemAction', array(array('productPackageItemAction' => $productPackageItemAction, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductPackageItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\ProductPackageItem[] $productPackageItems
     * @return \Google\AdsApi\AdManager\v201805\ProductPackageItem[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function updateProductPackageItems(array $productPackageItems)
    {
      return $this->__soapCall('updateProductPackageItems', array(array('productPackageItems' => $productPackageItems)))->getRval();
    }

}
