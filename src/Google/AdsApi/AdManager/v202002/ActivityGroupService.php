<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ActivityGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202002\\ObjectValue',
      'ActivityError' => 'Google\\AdsApi\\AdManager\\v202002\\ActivityError',
      'ActivityGroup' => 'Google\\AdsApi\\AdManager\\v202002\\ActivityGroup',
      'ActivityGroupPage' => 'Google\\AdsApi\\AdManager\\v202002\\ActivityGroupPage',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202002\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202002\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202002\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202002\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202002\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202002\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202002\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202002\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202002\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202002\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202002\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202002\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202002\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202002\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202002\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202002\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202002\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202002\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202002\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202002\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202002\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202002\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202002\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202002\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202002\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202002\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202002\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202002\\Value',
      'createActivityGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202002\\createActivityGroupsResponse',
      'getActivityGroupsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getActivityGroupsByStatementResponse',
      'updateActivityGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202002\\updateActivityGroupsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202002/ActivityGroupService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202002\ActivityGroup[] $activityGroups
     * @return \Google\AdsApi\AdManager\v202002\ActivityGroup[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
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
     * @param \Google\AdsApi\AdManager\v202002\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202002\ActivityGroupPage
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getActivityGroupsByStatement(\Google\AdsApi\AdManager\v202002\Statement $filterStatement)
    {
      return $this->__soapCall('getActivityGroupsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ActivityGroup} objects.
     *
     * @param \Google\AdsApi\AdManager\v202002\ActivityGroup[] $activityGroups
     * @return \Google\AdsApi\AdManager\v202002\ActivityGroup[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function updateActivityGroups(array $activityGroups)
    {
      return $this->__soapCall('updateActivityGroups', array(array('activityGroups' => $activityGroups)))->getRval();
    }

}
