<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201805\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201805\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201805\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\AdManager\\v201805\\AvailableBillingError',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201805\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201805\\CommonError',
      'CreateProposalLineItemsFromPackages' => 'Google\\AdsApi\\AdManager\\v201805\\CreateProposalLineItemsFromPackages',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201805\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201805\\FieldPathElement',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201805\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201805\\InternalApiError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201805\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201805\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201805\\NumberValue',
      'PackageAction' => 'Google\\AdsApi\\AdManager\\v201805\\PackageAction',
      'PackageActionError' => 'Google\\AdsApi\\AdManager\\v201805\\PackageActionError',
      'Package' => 'Google\\AdsApi\\AdManager\\v201805\\Package',
      'PackageError' => 'Google\\AdsApi\\AdManager\\v201805\\PackageError',
      'PackagePage' => 'Google\\AdsApi\\AdManager\\v201805\\PackagePage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201805\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201805\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201805\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201805\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201805\\ProposalLineItemError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201805\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201805\\ReservationDetailsError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201805\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201805\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201805\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201805\\TimeZoneError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201805\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201805\\Value',
      'createPackagesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\createPackagesResponse',
      'getPackagesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getPackagesByStatementResponse',
      'performPackageActionResponse' => 'Google\\AdsApi\\AdManager\\v201805\\performPackageActionResponse',
      'updatePackagesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\updatePackagesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/PackageService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201805\Package[] $packages
     * @return \Google\AdsApi\AdManager\v201805\Package[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
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
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\PackagePage
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getPackagesByStatement(\Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getPackagesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Package} objects that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v201805\PackageAction $packageAction
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function performPackageAction(\Google\AdsApi\AdManager\v201805\PackageAction $packageAction, \Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performPackageAction', array(array('packageAction' => $packageAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Package} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\Package[] $packages
     * @return \Google\AdsApi\AdManager\v201805\Package[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function updatePackages(array $packages)
    {
      return $this->__soapCall('updatePackages', array(array('packages' => $packages)))->getRval();
    }

}
