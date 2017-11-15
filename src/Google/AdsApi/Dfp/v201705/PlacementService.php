<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlacementService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ActivatePlacements' => 'Google\\AdsApi\\Dfp\\v201705\\ActivatePlacements',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'ArchivePlacements' => 'Google\\AdsApi\\Dfp\\v201705\\ArchivePlacements',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'DeactivatePlacements' => 'Google\\AdsApi\\Dfp\\v201705\\DeactivatePlacements',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'PlacementAction' => 'Google\\AdsApi\\Dfp\\v201705\\PlacementAction',
      'Placement' => 'Google\\AdsApi\\Dfp\\v201705\\Placement',
      'PlacementError' => 'Google\\AdsApi\\Dfp\\v201705\\PlacementError',
      'PlacementPage' => 'Google\\AdsApi\\Dfp\\v201705\\PlacementPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201705\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201705\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'SiteTargetingInfo' => 'Google\\AdsApi\\Dfp\\v201705\\SiteTargetingInfo',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201705\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201705\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201705\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'createPlacementsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\createPlacementsResponse',
      'getPlacementsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getPlacementsByStatementResponse',
      'performPlacementActionResponse' => 'Google\\AdsApi\\Dfp\\v201705\\performPlacementActionResponse',
      'updatePlacementsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updatePlacementsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/PlacementService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\Placement[] $placements
     * @return \Google\AdsApi\Dfp\v201705\Placement[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
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
     * <td>{@code isAdSenseTargetingEnabled}</td>
     * <td>{@link Placement#isAdSenseTargetingEnabled}</td>
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\PlacementPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getPlacementsByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('getPlacementsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Placement} objects that match the given
     * {@link Statement#query}.
     *
     * a set of placements
     *
     * @param \Google\AdsApi\Dfp\v201705\PlacementAction $placementAction
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function performPlacementAction(\Google\AdsApi\Dfp\v201705\PlacementAction $placementAction, \Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('performPlacementAction', array(array('placementAction' => $placementAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Placement} objects.
     *
     * @param \Google\AdsApi\Dfp\v201705\Placement[] $placements
     * @return \Google\AdsApi\Dfp\v201705\Placement[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updatePlacements(array $placements)
    {
      return $this->__soapCall('updatePlacements', array(array('placements' => $placements)))->getRval();
    }

}
