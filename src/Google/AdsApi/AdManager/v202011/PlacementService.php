<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlacementService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202011\\ObjectValue',
      'ActivatePlacements' => 'Google\\AdsApi\\AdManager\\v202011\\ActivatePlacements',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202011\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202011\\ApplicationException',
      'ArchivePlacements' => 'Google\\AdsApi\\AdManager\\v202011\\ArchivePlacements',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202011\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202011\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202011\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202011\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202011\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202011\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateValue',
      'DeactivatePlacements' => 'Google\\AdsApi\\AdManager\\v202011\\DeactivatePlacements',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202011\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202011\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202011\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202011\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202011\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202011\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202011\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202011\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202011\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202011\\PermissionError',
      'PlacementAction' => 'Google\\AdsApi\\AdManager\\v202011\\PlacementAction',
      'Placement' => 'Google\\AdsApi\\AdManager\\v202011\\Placement',
      'PlacementError' => 'Google\\AdsApi\\AdManager\\v202011\\PlacementError',
      'PlacementPage' => 'Google\\AdsApi\\AdManager\\v202011\\PlacementPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202011\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202011\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202011\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202011\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202011\\SetValue',
      'SiteTargetingInfo' => 'Google\\AdsApi\\AdManager\\v202011\\SiteTargetingInfo',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202011\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202011\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202011\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202011\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202011\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202011\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202011\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202011\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202011\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202011\\Value',
      'createPlacementsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\createPlacementsResponse',
      'getPlacementsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getPlacementsByStatementResponse',
      'performPlacementActionResponse' => 'Google\\AdsApi\\AdManager\\v202011\\performPlacementActionResponse',
      'updatePlacementsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\updatePlacementsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202011/PlacementService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202011\Placement[] $placements
     * @return \Google\AdsApi\AdManager\v202011\Placement[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
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
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\PlacementPage
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getPlacementsByStatement(\Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('getPlacementsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Placement} objects that match the given
     * {@link Statement#query}.
     *
     * a set of placements
     *
     * @param \Google\AdsApi\AdManager\v202011\PlacementAction $placementAction
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function performPlacementAction(\Google\AdsApi\AdManager\v202011\PlacementAction $placementAction, \Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('performPlacementAction', array(array('placementAction' => $placementAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Placement} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\Placement[] $placements
     * @return \Google\AdsApi\AdManager\v202011\Placement[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function updatePlacements(array $placements)
    {
      return $this->__soapCall('updatePlacements', array(array('placements' => $placements)))->getRval();
    }

}
