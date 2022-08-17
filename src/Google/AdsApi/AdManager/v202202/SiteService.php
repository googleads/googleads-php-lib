<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SiteService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'DeactivateSite' => 'Google\\AdsApi\\AdManager\\v202202\\DeactivateSite',
      'DisapprovalReason' => 'Google\\AdsApi\\AdManager\\v202202\\DisapprovalReason',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'SiteAction' => 'Google\\AdsApi\\AdManager\\v202202\\SiteAction',
      'Site' => 'Google\\AdsApi\\AdManager\\v202202\\Site',
      'SiteError' => 'Google\\AdsApi\\AdManager\\v202202\\SiteError',
      'SitePage' => 'Google\\AdsApi\\AdManager\\v202202\\SitePage',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'SubmitSiteForApproval' => 'Google\\AdsApi\\AdManager\\v202202\\SubmitSiteForApproval',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202202\\UpdateResult',
      'UrlError' => 'Google\\AdsApi\\AdManager\\v202202\\UrlError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'createSitesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createSitesResponse',
      'getSitesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getSitesByStatementResponse',
      'performSiteActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performSiteActionResponse',
      'updateSitesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updateSitesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/SiteService?wsdl')
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
     * Creates new {@link Site} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\Site[] $sites
     * @return \Google\AdsApi\AdManager\v202202\Site[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function createSites(array $sites)
    {
      return $this->__soapCall('createSites', array(array('sites' => $sites)))->getRval();
    }

    /**
     * Gets a {@link SitePage} of {@link Site} objects that satisfy the given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Site#id}</td>
     * </tr>
     * <tr>
     * <td>{@code url}</td>
     * <td>{@link Site#url}</td>
     * </tr>
     * <tr>
     * <td>{@code childNetworkCode}</td>
     * <td>{@link Site#childNetworkCode}</td>
     * </tr>
     * <tr>
     * <td>{@code approvalStatus}</td>
     * <td>{@link Site#approvalStatus}</td>
     * </tr>
     * <tr>
     * <td>{@code active}</td>
     * <td>{@link Site#active}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedApprovalStatusDateTime}</td>
     * <td></td>
     * </tr>
     * </table>
     *
     * Restriction: The {@code lastModifiedApprovalStatusDateTime} PQL property can only be used in a
     * top-level expression scoping the {@code filterStatement} to {@link Site}s whose {@code
     * approvalStatus} was modified on or after a specified date and time. (e.x. {@code "WHERE
     * lastModifiedApprovalStatusDateTime >= '2022-01-01T00:00:00'"}).
     *
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\SitePage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getSitesByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getSitesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Site} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202202\SiteAction $siteAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performSiteAction(\Google\AdsApi\AdManager\v202202\SiteAction $siteAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performSiteAction', array(array('siteAction' => $siteAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Site} objects.
     *
     * <p>The {@link Site#childNetworkCode} can be updated in order to 1) change the child network, 2)
     * move a site from O&O to represented, or 3) move a site from represented to O&O.
     *
     * @param \Google\AdsApi\AdManager\v202202\Site[] $sites
     * @return \Google\AdsApi\AdManager\v202202\Site[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updateSites(array $sites)
    {
      return $this->__soapCall('updateSites', array(array('sites' => $sites)))->getRval();
    }

}
