<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'ActivateAdUnits' => 'Google\\AdsApi\\AdManager\\v201905\\ActivateAdUnits',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v201905\\AdSenseAccountError',
      'AdSenseSettings' => 'Google\\AdsApi\\AdManager\\v201905\\AdSenseSettings',
      'AdUnitAction' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitAction',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitCodeError',
      'AdUnit' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnit',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitHierarchyError',
      'AdUnitPage' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitPage',
      'AdUnitParent' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201905\\AppliedLabel',
      'ArchiveAdUnits' => 'Google\\AdsApi\\AdManager\\v201905\\ArchiveAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v201905\\CompanyError',
      'CreativeWrapperError' => 'Google\\AdsApi\\AdManager\\v201905\\CreativeWrapperError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201905\\CrossSellError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'DeactivateAdUnits' => 'Google\\AdsApi\\AdManager\\v201905\\DeactivateAdUnits',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCapError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'InvalidColorError' => 'Google\\AdsApi\\AdManager\\v201905\\InvalidColorError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201905\\InvalidUrlError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryUnitError',
      'InventoryUnitRefreshRateError' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryUnitRefreshRateError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LabelEntityAssociationError',
      'LabelFrequencyCap' => 'Google\\AdsApi\\AdManager\\v201905\\LabelFrequencyCap',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201905\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201905\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201905\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201905\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201905\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201905\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201905\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201905\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'createAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\createAdUnitsResponse',
      'getAdUnitSizesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getAdUnitSizesByStatementResponse',
      'getAdUnitsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getAdUnitsByStatementResponse',
      'performAdUnitActionResponse' => 'Google\\AdsApi\\AdManager\\v201905\\performAdUnitActionResponse',
      'updateAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updateAdUnitsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/InventoryService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201905\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v201905\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function createAdUnits(array $adUnits)
    {
      return $this->__soapCall('createAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

    /**
     * Gets a set of {@link AdUnitSize} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code targetPlatform}</td>
     * <td>{@link TargetPlatform}</td>
     * </tr>
     * </table>
     * An exception will be thrown for queries with unsupported fields.
     *
     * Paging is not supported, as aren't the LIMIT and OFFSET PQL keywords.
     *
     * Only "=" operator is supported.
     *
     * a set of ad unit sizes
     *
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\AdUnitSize[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getAdUnitSizesByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitSizesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link AdUnitPage} of {@link AdUnit} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
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
     * a set of ad units
     *
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\AdUnitPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getAdUnitsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdUnit} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad units
     *
     * @param \Google\AdsApi\AdManager\v201905\AdUnitAction $adUnitAction
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function performAdUnitAction(\Google\AdsApi\AdManager\v201905\AdUnitAction $adUnitAction, \Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('performAdUnitAction', array(array('adUnitAction' => $adUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v201905\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updateAdUnits(array $adUnits)
    {
      return $this->__soapCall('updateAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

}
