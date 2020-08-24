<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ActivityGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'ActivityError' => 'Google\\AdsApi\\AdManager\\v201911\\ActivityError',
      'ActivityGroup' => 'Google\\AdsApi\\AdManager\\v201911\\ActivityGroup',
      'ActivityGroupPage' => 'Google\\AdsApi\\AdManager\\v201911\\ActivityGroupPage',
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
      'createActivityGroupsResponse' => 'Google\\AdsApi\\AdManager\\v201911\\createActivityGroupsResponse',
      'getActivityGroupsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getActivityGroupsByStatementResponse',
      'updateActivityGroupsResponse' => 'Google\\AdsApi\\AdManager\\v201911\\updateActivityGroupsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/ActivityGroupService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201911\ActivityGroup[] $activityGroups
     * @return \Google\AdsApi\AdManager\v201911\ActivityGroup[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
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
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\ActivityGroupPage
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getActivityGroupsByStatement(\Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('getActivityGroupsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ActivityGroup} objects.
     *
     * @param \Google\AdsApi\AdManager\v201911\ActivityGroup[] $activityGroups
     * @return \Google\AdsApi\AdManager\v201911\ActivityGroup[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function updateActivityGroups(array $activityGroups)
    {
      return $this->__soapCall('updateActivityGroups', array(array('activityGroups' => $activityGroups)))->getRval();
    }

}
