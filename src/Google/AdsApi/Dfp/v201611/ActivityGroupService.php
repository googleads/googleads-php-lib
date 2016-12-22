<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ActivityGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ActivityError' => 'Google\\AdsApi\\Dfp\\v201611\\ActivityError',
      'ActivityGroup' => 'Google\\AdsApi\\Dfp\\v201611\\ActivityGroup',
      'ActivityGroupPage' => 'Google\\AdsApi\\Dfp\\v201611\\ActivityGroupPage',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201611\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'createActivityGroupsResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createActivityGroupsResponse',
      'getActivityGroupsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getActivityGroupsByStatementResponse',
      'updateActivityGroupsResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateActivityGroupsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/ActivityGroupService?wsdl')
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
     * Creates a new {@link ActivityGroup} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\ActivityGroup[] $activityGroups
     * @return \Google\AdsApi\Dfp\v201611\ActivityGroup[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function createActivityGroups(array $activityGroups)
    {
      return $this->__soapCall('createActivityGroups', array(array('activityGroups' => $activityGroups)))->getRval();
    }

    /**
     * Gets an {@link ActivityGroupPage} of {@link ActivityGroup} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ActivityGroup#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ActivityGroup#name}</td>
     * </tr>
     * <tr>
     * <td>{@code impressionsLookback}</td>
     * <td>{@link ActivityGroup#impressionsLookback}</td>
     * </tr>
     * <tr>
     * <td>{@code clicksLookback}</td>
     * <td>{@link ActivityGroup#clicksLookback}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ActivityGroup#status}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\ActivityGroupPage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getActivityGroupsByStatement(\Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('getActivityGroupsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ActivityGroup} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\ActivityGroup[] $activityGroups
     * @return \Google\AdsApi\Dfp\v201611\ActivityGroup[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateActivityGroups(array $activityGroups)
    {
      return $this->__soapCall('updateActivityGroups', array(array('activityGroups' => $activityGroups)))->getRval();
    }

}
