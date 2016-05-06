<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ActivateAdUnits' => 'Google\\AdsApi\\Dfp\\v201602\\ActivateAdUnits',
      'AdSenseAccountError' => 'Google\\AdsApi\\Dfp\\v201602\\AdSenseAccountError',
      'AdSenseSettings' => 'Google\\AdsApi\\Dfp\\v201602\\AdSenseSettings',
      'AdSenseSettingsInheritedProperty' => 'Google\\AdsApi\\Dfp\\v201602\\AdSenseSettingsInheritedProperty',
      'AdUnitAction' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnitAction',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnitCodeError',
      'AdUnit' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnit',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnitHierarchyError',
      'AdUnitPage' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnitPage',
      'AdUnitParent' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201602\\AppliedLabel',
      'ArchiveAdUnits' => 'Google\\AdsApi\\Dfp\\v201602\\ArchiveAdUnits',
      'AssignAdUnitsToPlacement' => 'Google\\AdsApi\\Dfp\\v201602\\AssignAdUnitsToPlacement',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'CompanyError' => 'Google\\AdsApi\\Dfp\\v201602\\CompanyError',
      'CreativeWrapperError' => 'Google\\AdsApi\\Dfp\\v201602\\CreativeWrapperError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201602\\CrossSellError',
      'CrossSellingDistributor' => 'Google\\AdsApi\\Dfp\\v201602\\CrossSellingDistributor',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DeactivateAdUnits' => 'Google\\AdsApi\\Dfp\\v201602\\DeactivateAdUnits',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201602\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201602\\FrequencyCapError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'InvalidColorError' => 'Google\\AdsApi\\Dfp\\v201602\\InvalidColorError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201602\\InventoryUnitError',
      'InventoryUnitPartnerAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\InventoryUnitPartnerAssociationError',
      'InventoryUnitRefreshRateError' => 'Google\\AdsApi\\Dfp\\v201602\\InventoryUnitRefreshRateError',
      'AdUnitSize' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\Dfp\\v201602\\InventoryUnitSizesError',
      'AdUnitTypeError' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnitTypeError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\LabelEntityAssociationError',
      'LabelFrequencyCap' => 'Google\\AdsApi\\Dfp\\v201602\\LabelFrequencyCap',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201602\\RegExError',
      'RemoveAdUnitsFromPlacement' => 'Google\\AdsApi\\Dfp\\v201602\\RemoveAdUnitsFromPlacement',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201602\\TeamError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/InventoryService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201602\AdUnit[] $adUnits
     * @return \Google\AdsApi\Dfp\v201602\AdUnit[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createAdUnits(array $adUnits)
    {
      return $this->__soapCall('createAdUnits', array(array('adUnits' => $adUnits)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\AdUnitSize[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getAdUnitSizesByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitSizesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\AdUnitPage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getAdUnitsByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link AdUnit} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad units
     *
     * @param \Google\AdsApi\Dfp\v201602\AdUnitAction $adUnitAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performAdUnitAction(\Google\AdsApi\Dfp\v201602\AdUnitAction $adUnitAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performAdUnitAction', array(array('adUnitAction' => $adUnitAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\AdUnit[] $adUnits
     * @return \Google\AdsApi\Dfp\v201602\AdUnit[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateAdUnits(array $adUnits)
    {
      return $this->__soapCall('updateAdUnits', array(array('adUnits' => $adUnits)))->rval;
    }

}
