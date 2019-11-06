<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ActivityService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'Activity' => 'Google\\AdsApi\\AdManager\\v201911\\Activity',
      'ActivityError' => 'Google\\AdsApi\\AdManager\\v201911\\ActivityError',
      'ActivityPage' => 'Google\\AdsApi\\AdManager\\v201911\\ActivityPage',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201911\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201911\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'createActivitiesResponse' => 'Google\\AdsApi\\AdManager\\v201911\\createActivitiesResponse',
      'getActivitiesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getActivitiesByStatementResponse',
      'updateActivitiesResponse' => 'Google\\AdsApi\\AdManager\\v201911\\updateActivitiesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/ActivityService?wsdl')
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
     * Creates a new {@link Activity} objects.
     *
     * @param \Google\AdsApi\AdManager\v201911\Activity[] $activities
     * @return \Google\AdsApi\AdManager\v201911\Activity[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function createActivities(array $activities)
    {
      return $this->__soapCall('createActivities', array(array('activities' => $activities)))->getRval();
    }

    /**
     * Gets an {@link ActivityPage} of {@link Activity} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Activity#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Activity#name}</td>
     * </tr>
     * <tr>
     * <td>{@code expectedURL}</td>
     * <td>{@link Activity#expectedURL}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Activity#status}</td>
     * </tr>
     * <tr>
     * <td>{@code activityGroupId}</td>
     * <td>{@link Activity#activityGroupId}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\ActivityPage
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getActivitiesByStatement(\Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('getActivitiesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Activity} objects.
     *
     * @param \Google\AdsApi\AdManager\v201911\Activity[] $activities
     * @return \Google\AdsApi\AdManager\v201911\Activity[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function updateActivities(array $activities)
    {
      return $this->__soapCall('updateActivities', array(array('activities' => $activities)))->getRval();
    }

}
