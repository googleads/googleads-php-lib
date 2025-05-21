<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202505\\ObjectValue',
      'ActivateAdUnits' => 'Google\\AdsApi\\AdManager\\v202505\\ActivateAdUnits',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v202505\\AdSenseAccountError',
      'AdSenseSettings' => 'Google\\AdsApi\\AdManager\\v202505\\AdSenseSettings',
      'AdUnitAction' => 'Google\\AdsApi\\AdManager\\v202505\\AdUnitAction',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202505\\AdUnitCodeError',
      'AdUnit' => 'Google\\AdsApi\\AdManager\\v202505\\AdUnit',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v202505\\AdUnitHierarchyError',
      'AdUnitPage' => 'Google\\AdsApi\\AdManager\\v202505\\AdUnitPage',
      'AdUnitParent' => 'Google\\AdsApi\\AdManager\\v202505\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202505\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202505\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202505\\AppliedLabel',
      'ArchiveAdUnits' => 'Google\\AdsApi\\AdManager\\v202505\\ArchiveAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202505\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202505\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202505\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202505\\CommonError',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v202505\\CompanyError',
      'CreativeWrapperError' => 'Google\\AdsApi\\AdManager\\v202505\\CreativeWrapperError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202505\\CrossSellError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202505\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202505\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateValue',
      'DeactivateAdUnits' => 'Google\\AdsApi\\AdManager\\v202505\\DeactivateAdUnits',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202505\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202505\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202505\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202505\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202505\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202505\\FrequencyCapError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202505\\InternalApiError',
      'InvalidColorError' => 'Google\\AdsApi\\AdManager\\v202505\\InvalidColorError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202505\\InvalidUrlError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUnitError',
      'InventoryUnitRefreshRateError' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUnitRefreshRateError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v202505\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202505\\LabelEntityAssociationError',
      'LabelFrequencyCap' => 'Google\\AdsApi\\AdManager\\v202505\\LabelFrequencyCap',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202505\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202505\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202505\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202505\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202505\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202505\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202505\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202505\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202505\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202505\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202505\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202505\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202505\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202505\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202505\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202505\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202505\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202505\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202505\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202505\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202505\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202505\\Value',
      'createAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\createAdUnitsResponse',
      'getAdUnitSizesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202505\\getAdUnitSizesByStatementResponse',
      'getAdUnitsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202505\\getAdUnitsByStatementResponse',
      'performAdUnitActionResponse' => 'Google\\AdsApi\\AdManager\\v202505\\performAdUnitActionResponse',
      'updateAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\updateAdUnitsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202505/InventoryService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202505\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v202505\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
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
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\AdUnitSize[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function getAdUnitSizesByStatement(\Google\AdsApi\AdManager\v202505\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\AdUnitPage
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function getAdUnitsByStatement(\Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdUnit} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202505\AdUnitAction $adUnitAction
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function performAdUnitAction(\Google\AdsApi\AdManager\v202505\AdUnitAction $adUnitAction, \Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('performAdUnitAction', array(array('adUnitAction' => $adUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\AdManager\v202505\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v202505\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function updateAdUnits(array $adUnits)
    {
      return $this->__soapCall('updateAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

}
