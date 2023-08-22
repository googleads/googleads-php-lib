<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileApplicationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202308\\ObjectValue',
      'UnarchiveMobileApplications' => 'Google\\AdsApi\\AdManager\\v202308\\UnarchiveMobileApplications',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202308\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202308\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202308\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202308\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202308\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202308\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202308\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202308\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateValue',
      'ArchiveMobileApplications' => 'Google\\AdsApi\\AdManager\\v202308\\ArchiveMobileApplications',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202308\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202308\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202308\\InternalApiError',
      'MobileApplicationAction' => 'Google\\AdsApi\\AdManager\\v202308\\MobileApplicationAction',
      'MobileApplicationActionError' => 'Google\\AdsApi\\AdManager\\v202308\\MobileApplicationActionError',
      'MobileApplication' => 'Google\\AdsApi\\AdManager\\v202308\\MobileApplication',
      'MobileApplicationError' => 'Google\\AdsApi\\AdManager\\v202308\\MobileApplicationError',
      'MobileApplicationPage' => 'Google\\AdsApi\\AdManager\\v202308\\MobileApplicationPage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202308\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202308\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202308\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202308\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202308\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202308\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202308\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202308\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202308\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202308\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202308\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202308\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202308\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202308\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202308\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202308\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202308\\Value',
      'createMobileApplicationsResponse' => 'Google\\AdsApi\\AdManager\\v202308\\createMobileApplicationsResponse',
      'getMobileApplicationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202308\\getMobileApplicationsByStatementResponse',
      'performMobileApplicationActionResponse' => 'Google\\AdsApi\\AdManager\\v202308\\performMobileApplicationActionResponse',
      'updateMobileApplicationsResponse' => 'Google\\AdsApi\\AdManager\\v202308\\updateMobileApplicationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202308/MobileApplicationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202308\MobileApplication[] $mobileApplications
     * @return \Google\AdsApi\AdManager\v202308\MobileApplication[]
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
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
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\MobileApplicationPage
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function getMobileApplicationsByStatement(\Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('getMobileApplicationsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs an action on {@link MobileApplication mobile applications}.
     *
     * @param \Google\AdsApi\AdManager\v202308\MobileApplicationAction $mobileApplicationAction
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function performMobileApplicationAction(\Google\AdsApi\AdManager\v202308\MobileApplicationAction $mobileApplicationAction, \Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('performMobileApplicationAction', array(array('mobileApplicationAction' => $mobileApplicationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link MobileApplication mobile applications}.
     *
     * @param \Google\AdsApi\AdManager\v202308\MobileApplication[] $mobileApplications
     * @return \Google\AdsApi\AdManager\v202308\MobileApplication[]
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function updateMobileApplications(array $mobileApplications)
    {
      return $this->__soapCall('updateMobileApplications', array(array('mobileApplications' => $mobileApplications)))->getRval();
    }

}
