<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201602\\AvailableBillingError',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201602\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'CreateProposalLineItemsFromPackages' => 'Google\\AdsApi\\Dfp\\v201602\\CreateProposalLineItemsFromPackages',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\DayPartTargetingError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201602\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'PackageAction' => 'Google\\AdsApi\\Dfp\\v201602\\PackageAction',
      'PackageActionError' => 'Google\\AdsApi\\Dfp\\v201602\\PackageActionError',
      'Package' => 'Google\\AdsApi\\Dfp\\v201602\\Package',
      'PackageError' => 'Google\\AdsApi\\Dfp\\v201602\\PackageError',
      'PackagePage' => 'Google\\AdsApi\\Dfp\\v201602\\PackagePage',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201602\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201602\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalLineItemError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201602\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201602\\ReservationDetailsError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201602\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201602\\TimeZoneError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/PackageService?wsdl')
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
     * Creates new {@link Package} objects.
     *
     * For each package, the following fields are required:
     * <ul>
     * <li>{@link Package#proposalId}</li>
     * <li>{@link Package#productPackageId}</li>
     * <li>{@link Package#name}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201602\Package[] $packages
     * @return \Google\AdsApi\Dfp\v201602\Package[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createPackages(array $packages)
    {
      return $this->__soapCall('createPackages', array(array('packages' => $packages)))->rval;
    }

    /**
     * Gets a {@link PackagePage} of {@link Package} objects
     * that satisfy the given {@link Statement#query}.  The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Package#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Package#name}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link Package#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code productPackageId}</td>
     * <td>{@link Package#productPackageId}</td>
     * </tr>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link Package#isArchived}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Package#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * a set of packages
     *
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\PackagePage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getPackagesByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getPackagesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link Package} objects that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\Dfp\v201602\PackageAction $packageAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performPackageAction(\Google\AdsApi\Dfp\v201602\PackageAction $packageAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performPackageAction', array(array('packageAction' => $packageAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link Package} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\Package[] $packages
     * @return \Google\AdsApi\Dfp\v201602\Package[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updatePackages(array $packages)
    {
      return $this->__soapCall('updatePackages', array(array('packages' => $packages)))->rval;
    }

}
