<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileApplicationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202311\\ObjectValue',
      'UnarchiveMobileApplications' => 'Google\\AdsApi\\AdManager\\v202311\\UnarchiveMobileApplications',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202311\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202311\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202311\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202311\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202311\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202311\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202311\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202311\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateValue',
      'ArchiveMobileApplications' => 'Google\\AdsApi\\AdManager\\v202311\\ArchiveMobileApplications',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202311\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202311\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202311\\InternalApiError',
      'MobileApplicationAction' => 'Google\\AdsApi\\AdManager\\v202311\\MobileApplicationAction',
      'MobileApplicationActionError' => 'Google\\AdsApi\\AdManager\\v202311\\MobileApplicationActionError',
      'MobileApplication' => 'Google\\AdsApi\\AdManager\\v202311\\MobileApplication',
      'MobileApplicationError' => 'Google\\AdsApi\\AdManager\\v202311\\MobileApplicationError',
      'MobileApplicationPage' => 'Google\\AdsApi\\AdManager\\v202311\\MobileApplicationPage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202311\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202311\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202311\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202311\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202311\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202311\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202311\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202311\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202311\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202311\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202311\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202311\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202311\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202311\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202311\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202311\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202311\\Value',
      'createMobileApplicationsResponse' => 'Google\\AdsApi\\AdManager\\v202311\\createMobileApplicationsResponse',
      'getMobileApplicationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202311\\getMobileApplicationsByStatementResponse',
      'performMobileApplicationActionResponse' => 'Google\\AdsApi\\AdManager\\v202311\\performMobileApplicationActionResponse',
      'updateMobileApplicationsResponse' => 'Google\\AdsApi\\AdManager\\v202311\\updateMobileApplicationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202311/MobileApplicationService?wsdl')
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
     * Creates and claims {@link MobileApplication mobile applications} to be used for targeting in
     * the network.
     *
     * @param \Google\AdsApi\AdManager\v202311\MobileApplication[] $mobileApplications
     * @return \Google\AdsApi\AdManager\v202311\MobileApplication[]
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function createMobileApplications(array $mobileApplications)
    {
      return $this->__soapCall('createMobileApplications', array(array('mobileApplications' => $mobileApplications)))->getRval();
    }

    /**
     * Gets a {@link MobileApplicationPage mobileApplicationPage} of {@link MobileApplication mobile
     * applications} that satisfy the given {@link Statement}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link MobileApplication#id}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link MobileApplication#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code appStore}</td>
     * <td>{@link MobileApplication#appStore}</td>
     * </tr>
     * <tr>
     * <td>{@code appStoreId}</td>
     * <td>{@link MobileApplication#appStoreId}</td>
     * <tr/>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link MobileApplication#isArchived}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202311\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202311\MobileApplicationPage
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function getMobileApplicationsByStatement(\Google\AdsApi\AdManager\v202311\Statement $filterStatement)
    {
      return $this->__soapCall('getMobileApplicationsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs an action on {@link MobileApplication mobile applications}.
     *
     * @param \Google\AdsApi\AdManager\v202311\MobileApplicationAction $mobileApplicationAction
     * @param \Google\AdsApi\AdManager\v202311\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202311\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function performMobileApplicationAction(\Google\AdsApi\AdManager\v202311\MobileApplicationAction $mobileApplicationAction, \Google\AdsApi\AdManager\v202311\Statement $filterStatement)
    {
      return $this->__soapCall('performMobileApplicationAction', array(array('mobileApplicationAction' => $mobileApplicationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link MobileApplication mobile applications}.
     *
     * @param \Google\AdsApi\AdManager\v202311\MobileApplication[] $mobileApplications
     * @return \Google\AdsApi\AdManager\v202311\MobileApplication[]
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function updateMobileApplications(array $mobileApplications)
    {
      return $this->__soapCall('updateMobileApplications', array(array('mobileApplications' => $mobileApplications)))->getRval();
    }

}
