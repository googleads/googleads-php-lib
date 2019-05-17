<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlacementService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'ActivatePlacements' => 'Google\\AdsApi\\AdManager\\v201905\\ActivatePlacements',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'ArchivePlacements' => 'Google\\AdsApi\\AdManager\\v201905\\ArchivePlacements',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'DeactivatePlacements' => 'Google\\AdsApi\\AdManager\\v201905\\DeactivatePlacements',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201905\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PlacementAction' => 'Google\\AdsApi\\AdManager\\v201905\\PlacementAction',
      'Placement' => 'Google\\AdsApi\\AdManager\\v201905\\Placement',
      'PlacementError' => 'Google\\AdsApi\\AdManager\\v201905\\PlacementError',
      'PlacementPage' => 'Google\\AdsApi\\AdManager\\v201905\\PlacementPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201905\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201905\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'SiteTargetingInfo' => 'Google\\AdsApi\\AdManager\\v201905\\SiteTargetingInfo',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201905\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201905\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201905\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'createPlacementsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\createPlacementsResponse',
      'getPlacementsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getPlacementsByStatementResponse',
      'performPlacementActionResponse' => 'Google\\AdsApi\\AdManager\\v201905\\performPlacementActionResponse',
      'updatePlacementsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updatePlacementsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/PlacementService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201905\Placement[] $placements
     * @return \Google\AdsApi\AdManager\v201905\Placement[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
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
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\PlacementPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getPlacementsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getPlacementsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Placement} objects that match the given
     * {@link Statement#query}.
     *
     * a set of placements
     *
     * @param \Google\AdsApi\AdManager\v201905\PlacementAction $placementAction
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function performPlacementAction(\Google\AdsApi\AdManager\v201905\PlacementAction $placementAction, \Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('performPlacementAction', array(array('placementAction' => $placementAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Placement} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\Placement[] $placements
     * @return \Google\AdsApi\AdManager\v201905\Placement[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updatePlacements(array $placements)
    {
      return $this->__soapCall('updatePlacements', array(array('placements' => $placements)))->getRval();
    }

}
