<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlacementService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'ActivatePlacements' => 'Google\\AdsApi\\AdManager\\v202202\\ActivatePlacements',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'ArchivePlacements' => 'Google\\AdsApi\\AdManager\\v202202\\ArchivePlacements',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'DeactivatePlacements' => 'Google\\AdsApi\\AdManager\\v202202\\DeactivatePlacements',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202202\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'PlacementAction' => 'Google\\AdsApi\\AdManager\\v202202\\PlacementAction',
      'Placement' => 'Google\\AdsApi\\AdManager\\v202202\\Placement',
      'PlacementError' => 'Google\\AdsApi\\AdManager\\v202202\\PlacementError',
      'PlacementPage' => 'Google\\AdsApi\\AdManager\\v202202\\PlacementPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202202\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202202\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'SiteTargetingInfo' => 'Google\\AdsApi\\AdManager\\v202202\\SiteTargetingInfo',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202202\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202202\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202202\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'createPlacementsResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createPlacementsResponse',
      'getPlacementsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getPlacementsByStatementResponse',
      'performPlacementActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performPlacementActionResponse',
      'updatePlacementsResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updatePlacementsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/PlacementService?wsdl')
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
     * Creates new {@link Placement} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\Placement[] $placements
     * @return \Google\AdsApi\AdManager\v202202\Placement[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function createPlacements(array $placements)
    {
      return $this->__soapCall('createPlacements', array(array('placements' => $placements)))->getRval();
    }

    /**
     * Gets a {@link PlacementPage} of {@link Placement} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code description}</td>
     * <td>{@link Placement#description}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Placement#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Placement#name}</td>
     * </tr>
     * <tr>
     * <td>{@code placementCode}</td>
     * <td>{@link Placement#placementCode}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Placement#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Placement#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * a set of placements
     *
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\PlacementPage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getPlacementsByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getPlacementsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Placement} objects that match the given
     * {@link Statement#query}.
     *
     * a set of placements
     *
     * @param \Google\AdsApi\AdManager\v202202\PlacementAction $placementAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performPlacementAction(\Google\AdsApi\AdManager\v202202\PlacementAction $placementAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performPlacementAction', array(array('placementAction' => $placementAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Placement} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\Placement[] $placements
     * @return \Google\AdsApi\AdManager\v202202\Placement[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updatePlacements(array $placements)
    {
      return $this->__soapCall('updatePlacements', array(array('placements' => $placements)))->getRval();
    }

}
