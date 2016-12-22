<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201611\\AvailableBillingError',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201611\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'CreateProposalLineItemsFromPackages' => 'Google\\AdsApi\\Dfp\\v201611\\CreateProposalLineItemsFromPackages',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201611\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201611\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'PackageAction' => 'Google\\AdsApi\\Dfp\\v201611\\PackageAction',
      'PackageActionError' => 'Google\\AdsApi\\Dfp\\v201611\\PackageActionError',
      'Package' => 'Google\\AdsApi\\Dfp\\v201611\\Package',
      'PackageError' => 'Google\\AdsApi\\Dfp\\v201611\\PackageError',
      'PackagePage' => 'Google\\AdsApi\\Dfp\\v201611\\PackagePage',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201611\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201611\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItemError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201611\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201611\\ReservationDetailsError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201611\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201611\\TimeZoneError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201611\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'createPackagesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createPackagesResponse',
      'getPackagesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getPackagesByStatementResponse',
      'performPackageActionResponse' => 'Google\\AdsApi\\Dfp\\v201611\\performPackageActionResponse',
      'updatePackagesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updatePackagesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/PackageService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201611\Package[] $packages
     * @return \Google\AdsApi\Dfp\v201611\Package[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function createPackages(array $packages)
    {
      return $this->__soapCall('createPackages', array(array('packages' => $packages)))->getRval();
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
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\PackagePage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getPackagesByStatement(\Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('getPackagesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Package} objects that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\Dfp\v201611\PackageAction $packageAction
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function performPackageAction(\Google\AdsApi\Dfp\v201611\PackageAction $packageAction, \Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('performPackageAction', array(array('packageAction' => $packageAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Package} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\Package[] $packages
     * @return \Google\AdsApi\Dfp\v201611\Package[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updatePackages(array $packages)
    {
      return $this->__soapCall('updatePackages', array(array('packages' => $packages)))->getRval();
    }

}
