<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\AdManager\\v201902\\AvailableBillingError',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201902\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'CreateProposalLineItemsFromPackages' => 'Google\\AdsApi\\AdManager\\v201902\\CreateProposalLineItemsFromPackages',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201902\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'PackageAction' => 'Google\\AdsApi\\AdManager\\v201902\\PackageAction',
      'PackageActionError' => 'Google\\AdsApi\\AdManager\\v201902\\PackageActionError',
      'Package' => 'Google\\AdsApi\\AdManager\\v201902\\Package',
      'PackageError' => 'Google\\AdsApi\\AdManager\\v201902\\PackageError',
      'PackagePage' => 'Google\\AdsApi\\AdManager\\v201902\\PackagePage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201902\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201902\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201902\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201902\\ReservationDetailsError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201902\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201902\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201902\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201902\\TimeZoneError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201902\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'createPackagesResponse' => 'Google\\AdsApi\\AdManager\\v201902\\createPackagesResponse',
      'getPackagesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getPackagesByStatementResponse',
      'performPackageActionResponse' => 'Google\\AdsApi\\AdManager\\v201902\\performPackageActionResponse',
      'updatePackagesResponse' => 'Google\\AdsApi\\AdManager\\v201902\\updatePackagesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/PackageService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201902\Package[] $packages
     * @return \Google\AdsApi\AdManager\v201902\Package[]
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
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
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\PackagePage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getPackagesByStatement(\Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('getPackagesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Package} objects that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v201902\PackageAction $packageAction
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function performPackageAction(\Google\AdsApi\AdManager\v201902\PackageAction $packageAction, \Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('performPackageAction', array(array('packageAction' => $packageAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Package} objects.
     *
     * @param \Google\AdsApi\AdManager\v201902\Package[] $packages
     * @return \Google\AdsApi\AdManager\v201902\Package[]
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function updatePackages(array $packages)
    {
      return $this->__soapCall('updatePackages', array(array('packages' => $packages)))->getRval();
    }

}
