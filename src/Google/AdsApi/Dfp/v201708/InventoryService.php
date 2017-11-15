<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'ActivateAdUnits' => 'Google\\AdsApi\\Dfp\\v201708\\ActivateAdUnits',
      'AdSenseAccountError' => 'Google\\AdsApi\\Dfp\\v201708\\AdSenseAccountError',
      'AdSenseSettings' => 'Google\\AdsApi\\Dfp\\v201708\\AdSenseSettings',
      'AdUnitAction' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitAction',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitCodeError',
      'AdUnit' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnit',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitHierarchyError',
      'AdUnitPage' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitPage',
      'AdUnitParent' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201708\\AppliedLabel',
      'ArchiveAdUnits' => 'Google\\AdsApi\\Dfp\\v201708\\ArchiveAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'CompanyError' => 'Google\\AdsApi\\Dfp\\v201708\\CompanyError',
      'CreativeWrapperError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeWrapperError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201708\\CrossSellError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'DeactivateAdUnits' => 'Google\\AdsApi\\Dfp\\v201708\\DeactivateAdUnits',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201708\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201708\\FrequencyCapError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InvalidColorError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidColorError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryUnitError',
      'InventoryUnitRefreshRateError' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryUnitRefreshRateError',
      'AdUnitSize' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LabelEntityAssociationError',
      'LabelFrequencyCap' => 'Google\\AdsApi\\Dfp\\v201708\\LabelFrequencyCap',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201708\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201708\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201708\\TeamError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201708\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'createAdUnitsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createAdUnitsResponse',
      'getAdUnitSizesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getAdUnitSizesByStatementResponse',
      'getAdUnitsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getAdUnitsByStatementResponse',
      'performAdUnitActionResponse' => 'Google\\AdsApi\\Dfp\\v201708\\performAdUnitActionResponse',
      'updateAdUnitsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateAdUnitsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/InventoryService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\AdUnit[] $adUnits
     * @return \Google\AdsApi\Dfp\v201708\AdUnit[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\AdUnitSize[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getAdUnitSizesByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\AdUnitPage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getAdUnitsByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdUnit} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad units
     *
     * @param \Google\AdsApi\Dfp\v201708\AdUnitAction $adUnitAction
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function performAdUnitAction(\Google\AdsApi\Dfp\v201708\AdUnitAction $adUnitAction, \Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('performAdUnitAction', array(array('adUnitAction' => $adUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\Dfp\v201708\AdUnit[] $adUnits
     * @return \Google\AdsApi\Dfp\v201708\AdUnit[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateAdUnits(array $adUnits)
    {
      return $this->__soapCall('updateAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

}
