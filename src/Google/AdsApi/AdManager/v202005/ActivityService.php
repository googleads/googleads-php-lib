<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ActivityService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202005\\ObjectValue',
      'Activity' => 'Google\\AdsApi\\AdManager\\v202005\\Activity',
      'ActivityError' => 'Google\\AdsApi\\AdManager\\v202005\\ActivityError',
      'ActivityPage' => 'Google\\AdsApi\\AdManager\\v202005\\ActivityPage',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202005\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202005\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202005\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202005\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202005\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202005\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202005\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202005\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202005\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202005\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202005\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202005\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202005\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202005\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202005\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202005\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202005\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202005\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202005\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202005\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202005\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202005\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202005\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202005\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202005\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202005\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202005\\Value',
      'createActivitiesResponse' => 'Google\\AdsApi\\AdManager\\v202005\\createActivitiesResponse',
      'getActivitiesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202005\\getActivitiesByStatementResponse',
      'updateActivitiesResponse' => 'Google\\AdsApi\\AdManager\\v202005\\updateActivitiesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202005/ActivityService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202005\Activity[] $activities
     * @return \Google\AdsApi\AdManager\v202005\Activity[]
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
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
     * @param \Google\AdsApi\AdManager\v202005\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202005\ActivityPage
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function getActivitiesByStatement(\Google\AdsApi\AdManager\v202005\Statement $filterStatement)
    {
      return $this->__soapCall('getActivitiesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Activity} objects.
     *
     * @param \Google\AdsApi\AdManager\v202005\Activity[] $activities
     * @return \Google\AdsApi\AdManager\v202005\Activity[]
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function updateActivities(array $activities)
    {
      return $this->__soapCall('updateActivities', array(array('activities' => $activities)))->getRval();
    }

}
