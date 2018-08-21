<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileApplicationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201711\\ObjectValue',
      'UnarchiveMobileApplications' => 'Google\\AdsApi\\AdManager\\v201711\\UnarchiveMobileApplications',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201711\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201711\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201711\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201711\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateValue',
      'ArchiveMobileApplications' => 'Google\\AdsApi\\AdManager\\v201711\\ArchiveMobileApplications',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201711\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201711\\InternalApiError',
      'MobileApplicationAction' => 'Google\\AdsApi\\AdManager\\v201711\\MobileApplicationAction',
      'MobileApplicationActionError' => 'Google\\AdsApi\\AdManager\\v201711\\MobileApplicationActionError',
      'MobileApplication' => 'Google\\AdsApi\\AdManager\\v201711\\MobileApplication',
      'MobileApplicationError' => 'Google\\AdsApi\\AdManager\\v201711\\MobileApplicationError',
      'MobileApplicationPage' => 'Google\\AdsApi\\AdManager\\v201711\\MobileApplicationPage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201711\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201711\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201711\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201711\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201711\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201711\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201711\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201711\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201711\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201711\\Value',
      'createMobileApplicationsResponse' => 'Google\\AdsApi\\AdManager\\v201711\\createMobileApplicationsResponse',
      'getMobileApplicationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201711\\getMobileApplicationsByStatementResponse',
      'performMobileApplicationActionResponse' => 'Google\\AdsApi\\AdManager\\v201711\\performMobileApplicationActionResponse',
      'updateMobileApplicationsResponse' => 'Google\\AdsApi\\AdManager\\v201711\\updateMobileApplicationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/MobileApplicationService?wsdl')
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
     * Creates and claims {@link MobileApplication mobile applications}
     * to be used for targeting in the network.
     *
     * @param \Google\AdsApi\AdManager\v201711\MobileApplication[] $mobileApplications
     * @return \Google\AdsApi\AdManager\v201711\MobileApplication[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function createMobileApplications(array $mobileApplications)
    {
      return $this->__soapCall('createMobileApplications', array(array('mobileApplications' => $mobileApplications)))->getRval();
    }

    /**
     * Gets a {@link MobileApplicationPage mobileApplicationPage} of
     * {@link MobileApplication mobile applications} that satisfy the given {@link Statement}.
     * The following fields are supported for
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
     * mobile applications.
     *
     * @param \Google\AdsApi\AdManager\v201711\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201711\MobileApplicationPage
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function getMobileApplicationsByStatement(\Google\AdsApi\AdManager\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('getMobileApplicationsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs an action on {@link MobileApplication mobile applications}.
     *
     * a set of mobile applications.
     *
     * @param \Google\AdsApi\AdManager\v201711\MobileApplicationAction $mobileApplicationAction
     * @param \Google\AdsApi\AdManager\v201711\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201711\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function performMobileApplicationAction(\Google\AdsApi\AdManager\v201711\MobileApplicationAction $mobileApplicationAction, \Google\AdsApi\AdManager\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('performMobileApplicationAction', array(array('mobileApplicationAction' => $mobileApplicationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link MobileApplication mobile applications}.
     *
     * @param \Google\AdsApi\AdManager\v201711\MobileApplication[] $mobileApplications
     * @return \Google\AdsApi\AdManager\v201711\MobileApplication[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function updateMobileApplications(array $mobileApplications)
    {
      return $this->__soapCall('updateMobileApplications', array(array('mobileApplications' => $mobileApplications)))->getRval();
    }

}
