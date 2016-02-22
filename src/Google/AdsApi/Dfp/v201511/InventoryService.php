<?php

namespace Google\AdsApi\Dfp\v201511;

class InventoryService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201511\\ObjectValue',
      'ActivateAdUnits' => 'Google\\AdsApi\\Dfp\\v201511\\ActivateAdUnits',
      'AdSenseAccountError' => 'Google\\AdsApi\\Dfp\\v201511\\AdSenseAccountError',
      'AdSenseSettings' => 'Google\\AdsApi\\Dfp\\v201511\\AdSenseSettings',
      'AdSenseSettingsInheritedProperty' => 'Google\\AdsApi\\Dfp\\v201511\\AdSenseSettingsInheritedProperty',
      'AdUnitAction' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitAction',
      'AdUnitAfcSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitAfcSizeError',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitCodeError',
      'AdUnit' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnit',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitHierarchyError',
      'AdUnitPage' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitPage',
      'AdUnitParent' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201511\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201511\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201511\\AppliedLabel',
      'ArchiveAdUnits' => 'Google\\AdsApi\\Dfp\\v201511\\ArchiveAdUnits',
      'AssignAdUnitsToPlacement' => 'Google\\AdsApi\\Dfp\\v201511\\AssignAdUnitsToPlacement',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201511\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201511\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201511\\CommonError',
      'CompanyError' => 'Google\\AdsApi\\Dfp\\v201511\\CompanyError',
      'CreativeWrapperError' => 'Google\\AdsApi\\Dfp\\v201511\\CreativeWrapperError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201511\\CrossSellError',
      'CrossSellingDistributor' => 'Google\\AdsApi\\Dfp\\v201511\\CrossSellingDistributor',
      'Date' => 'Google\\AdsApi\\Dfp\\v201511\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201511\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateValue',
      'DeactivateAdUnits' => 'Google\\AdsApi\\Dfp\\v201511\\DeactivateAdUnits',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201511\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201511\\FeatureError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201511\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201511\\FrequencyCapError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201511\\InternalApiError',
      'InvalidColorError' => 'Google\\AdsApi\\Dfp\\v201511\\InvalidColorError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryUnitError',
      'InventoryUnitPartnerAssociationError' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryUnitPartnerAssociationError',
      'InventoryUnitRefreshRateError' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryUnitRefreshRateError',
      'AdUnitSize' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryUnitSizesError',
      'AdUnitTypeError' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitTypeError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201511\\LabelEntityAssociationError',
      'LabelFrequencyCap' => 'Google\\AdsApi\\Dfp\\v201511\\LabelFrequencyCap',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201511\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201511\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201511\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201511\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201511\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201511\\QuotaError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201511\\RegExError',
      'RemoveAdUnitsFromPlacement' => 'Google\\AdsApi\\Dfp\\v201511\\RemoveAdUnitsFromPlacement',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201511\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201511\\Size',
      'Size_StringMapEntry' => 'Google\\AdsApi\\Dfp\\v201511\\Size_StringMapEntry',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201511\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201511\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201511\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201511\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201511\\TeamError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201511\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201511\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201511\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201511\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201511\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201511/InventoryService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201511\AdUnit[] $adUnits
     * @return \Google\AdsApi\Dfp\v201511\AdUnit[]
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
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\AdUnitSize[]
     */
    public function getAdUnitSizesByStatement(\Google\AdsApi\Dfp\v201511\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\AdUnitPage
     */
    public function getAdUnitsByStatement(\Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link AdUnit} objects that match the given
     * {@link Statement#query}.
     *
     * a set of ad units
     *
     * @param \Google\AdsApi\Dfp\v201511\AdUnitAction $adUnitAction
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\UpdateResult
     */
    public function performAdUnitAction(\Google\AdsApi\Dfp\v201511\AdUnitAction $adUnitAction, \Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('performAdUnitAction', array(array('adUnitAction' => $adUnitAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\Dfp\v201511\AdUnit[] $adUnits
     * @return \Google\AdsApi\Dfp\v201511\AdUnit[]
     */
    public function updateAdUnits(array $adUnits)
    {
      return $this->__soapCall('updateAdUnits', array(array('adUnits' => $adUnits)))->rval;
    }

}
