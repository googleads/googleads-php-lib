<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202508\\ObjectValue',
      'ActivateAdUnits' => 'Google\\AdsApi\\AdManager\\v202508\\ActivateAdUnits',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v202508\\AdSenseAccountError',
      'AdSenseSettings' => 'Google\\AdsApi\\AdManager\\v202508\\AdSenseSettings',
      'AdUnitAction' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitAction',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitCodeError',
      'AdUnit' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnit',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitHierarchyError',
      'AdUnitPage' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitPage',
      'AdUnitParent' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202508\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202508\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202508\\AppliedLabel',
      'ArchiveAdUnits' => 'Google\\AdsApi\\AdManager\\v202508\\ArchiveAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202508\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202508\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202508\\CommonError',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v202508\\CompanyError',
      'CreativeWrapperError' => 'Google\\AdsApi\\AdManager\\v202508\\CreativeWrapperError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202508\\CrossSellError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202508\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202508\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateValue',
      'DeactivateAdUnits' => 'Google\\AdsApi\\AdManager\\v202508\\DeactivateAdUnits',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202508\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202508\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202508\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202508\\FrequencyCapError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202508\\InternalApiError',
      'InvalidColorError' => 'Google\\AdsApi\\AdManager\\v202508\\InvalidColorError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202508\\InvalidUrlError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUnitError',
      'InventoryUnitRefreshRateError' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUnitRefreshRateError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202508\\LabelEntityAssociationError',
      'LabelFrequencyCap' => 'Google\\AdsApi\\AdManager\\v202508\\LabelFrequencyCap',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202508\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202508\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202508\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202508\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202508\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202508\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202508\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202508\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202508\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202508\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202508\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202508\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202508\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202508\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202508\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202508\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202508\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202508\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202508\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202508\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202508\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202508\\Value',
      'createAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\createAdUnitsResponse',
      'getAdUnitSizesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getAdUnitSizesByStatementResponse',
      'getAdUnitsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getAdUnitsByStatementResponse',
      'performAdUnitActionResponse' => 'Google\\AdsApi\\AdManager\\v202508\\performAdUnitActionResponse',
      'updateAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\updateAdUnitsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202508/InventoryService?wsdl')
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
     * Creates new {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\AdManager\v202508\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v202508\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function createAdUnits(array $adUnits)
    {
      return $this->__soapCall('createAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

    /**
     * Returns a set of all relevant {@link AdUnitSize} objects.
     *
     * <p>The given {@link Statement} is currently ignored but may be honored in future versions.
     *
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\AdUnitSize[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getAdUnitSizesByStatement(\Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitSizesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link AdUnitPage} of {@link AdUnit} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code adUnitCode}</td>
     * <td>{@link AdUnit#adUnitCode}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AdUnit#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AdUnit#name}</td>
     * </tr>
     * <tr>
     * <td>{@code parentId}</td>
     * <td>{@link AdUnit#parentId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AdUnit#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link AdUnit#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\AdUnitPage
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getAdUnitsByStatement(\Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdUnit} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202508\AdUnitAction $adUnitAction
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function performAdUnitAction(\Google\AdsApi\AdManager\v202508\AdUnitAction $adUnitAction, \Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('performAdUnitAction', array(array('adUnitAction' => $adUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\AdManager\v202508\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v202508\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function updateAdUnits(array $adUnits)
    {
      return $this->__soapCall('updateAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

}
