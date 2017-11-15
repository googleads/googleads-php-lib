<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ActivityGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'ActivityError' => 'Google\\AdsApi\\Dfp\\v201708\\ActivityError',
      'ActivityGroup' => 'Google\\AdsApi\\Dfp\\v201708\\ActivityGroup',
      'ActivityGroupPage' => 'Google\\AdsApi\\Dfp\\v201708\\ActivityGroupPage',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'createActivityGroupsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createActivityGroupsResponse',
      'getActivityGroupsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getActivityGroupsByStatementResponse',
      'updateActivityGroupsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateActivityGroupsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/ActivityGroupService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\ActivityGroup[] $activityGroups
     * @return \Google\AdsApi\Dfp\v201708\ActivityGroup[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\ActivityGroupPage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getActivityGroupsByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('getActivityGroupsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ActivityGroup} objects.
     *
     * @param \Google\AdsApi\Dfp\v201708\ActivityGroup[] $activityGroups
     * @return \Google\AdsApi\Dfp\v201708\ActivityGroup[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateActivityGroups(array $activityGroups)
    {
      return $this->__soapCall('updateActivityGroups', array(array('activityGroups' => $activityGroups)))->getRval();
    }

}
