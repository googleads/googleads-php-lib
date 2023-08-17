<?php

namespace Google\AdsApi\AdManager\v202302;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ActivityService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202302\\ObjectValue',
      'Activity' => 'Google\\AdsApi\\AdManager\\v202302\\Activity',
      'ActivityError' => 'Google\\AdsApi\\AdManager\\v202302\\ActivityError',
      'ActivityPage' => 'Google\\AdsApi\\AdManager\\v202302\\ActivityPage',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202302\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202302\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202302\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202302\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202302\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202302\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202302\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202302\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202302\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202302\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202302\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202302\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202302\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202302\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202302\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202302\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202302\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202302\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202302\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202302\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202302\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202302\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202302\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202302\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202302\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202302\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202302\\Value',
      'createActivitiesResponse' => 'Google\\AdsApi\\AdManager\\v202302\\createActivitiesResponse',
      'getActivitiesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getActivitiesByStatementResponse',
      'updateActivitiesResponse' => 'Google\\AdsApi\\AdManager\\v202302\\updateActivitiesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202302/ActivityService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202302\Activity[] $activities
     * @return \Google\AdsApi\AdManager\v202302\Activity[]
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function createActivities(array $activities)
    {
      return $this->__soapCall('createActivities', array(array('activities' => $activities)))->getRval();
    }

    /**
     * Gets an {@link ActivityPage} of {@link Activity} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
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
     * @param \Google\AdsApi\AdManager\v202302\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202302\ActivityPage
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getActivitiesByStatement(\Google\AdsApi\AdManager\v202302\Statement $filterStatement)
    {
      return $this->__soapCall('getActivitiesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Activity} objects.
     *
     * @param \Google\AdsApi\AdManager\v202302\Activity[] $activities
     * @return \Google\AdsApi\AdManager\v202302\Activity[]
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function updateActivities(array $activities)
    {
      return $this->__soapCall('updateActivities', array(array('activities' => $activities)))->getRval();
    }

}
