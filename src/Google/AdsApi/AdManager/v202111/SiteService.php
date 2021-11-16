<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SiteService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202111\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202111\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202111\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202111\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202111\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202111\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202111\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202111\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateValue',
      'DeactivateSite' => 'Google\\AdsApi\\AdManager\\v202111\\DeactivateSite',
      'DisapprovalReason' => 'Google\\AdsApi\\AdManager\\v202111\\DisapprovalReason',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202111\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202111\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202111\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202111\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202111\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202111\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202111\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202111\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202111\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202111\\SetValue',
      'SiteAction' => 'Google\\AdsApi\\AdManager\\v202111\\SiteAction',
      'Site' => 'Google\\AdsApi\\AdManager\\v202111\\Site',
      'SiteError' => 'Google\\AdsApi\\AdManager\\v202111\\SiteError',
      'SitePage' => 'Google\\AdsApi\\AdManager\\v202111\\SitePage',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202111\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202111\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202111\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202111\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202111\\String_ValueMapEntry',
      'SubmitSiteForApproval' => 'Google\\AdsApi\\AdManager\\v202111\\SubmitSiteForApproval',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202111\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202111\\UpdateResult',
      'UrlError' => 'Google\\AdsApi\\AdManager\\v202111\\UrlError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202111\\Value',
      'createSitesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\createSitesResponse',
      'getSitesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getSitesByStatementResponse',
      'performSiteActionResponse' => 'Google\\AdsApi\\AdManager\\v202111\\performSiteActionResponse',
      'updateSitesResponse' => 'Google\\AdsApi\\AdManager\\v202111\\updateSitesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202111/SiteService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202111\Site[] $sites
     * @return \Google\AdsApi\AdManager\v202111\Site[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
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
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\SitePage
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getSitesByStatement(\Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('getSitesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Site} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202111\SiteAction $siteAction
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function performSiteAction(\Google\AdsApi\AdManager\v202111\SiteAction $siteAction, \Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('performSiteAction', array(array('siteAction' => $siteAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Site} objects.
     *
     * <p>The {@link Site#childNetworkCode} can be updated in order to 1) change the child network, 2)
     * move a site from O&O to represented, or 3) move a site from represented to O&O.
     *
     * @param \Google\AdsApi\AdManager\v202111\Site[] $sites
     * @return \Google\AdsApi\AdManager\v202111\Site[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function updateSites(array $sites)
    {
      return $this->__soapCall('updateSites', array(array('sites' => $sites)))->getRval();
    }

}
