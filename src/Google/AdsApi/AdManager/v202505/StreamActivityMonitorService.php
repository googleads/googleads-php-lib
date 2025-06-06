<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StreamActivityMonitorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202505\\ObjectValue',
      'AdBreak' => 'Google\\AdsApi\\AdManager\\v202505\\AdBreak',
      'AdDecisionCreative' => 'Google\\AdsApi\\AdManager\\v202505\\AdDecisionCreative',
      'AdResponse' => 'Google\\AdsApi\\AdManager\\v202505\\AdResponse',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202505\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202505\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202505\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202505\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202505\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202505\\CommonError',
      'CreativeTranscode' => 'Google\\AdsApi\\AdManager\\v202505\\CreativeTranscode',
      'Date' => 'Google\\AdsApi\\AdManager\\v202505\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202505\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202505\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202505\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202505\\InternalApiError',
      'LinearStreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202505\\LinearStreamCreateRequest',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202505\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202505\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202505\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202505\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202505\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredError',
      'SamError' => 'Google\\AdsApi\\AdManager\\v202505\\SamError',
      'SamSession' => 'Google\\AdsApi\\AdManager\\v202505\\SamSession',
      'SamSessionError' => 'Google\\AdsApi\\AdManager\\v202505\\SamSessionError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202505\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202505\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202505\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202505\\StatementError',
      'StreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202505\\StreamCreateRequest',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202505\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202505\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202505\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202505\\TextValue',
      'TrackingEvent' => 'Google\\AdsApi\\AdManager\\v202505\\TrackingEvent',
      'TrackingEvent.Ping' => 'Google\\AdsApi\\AdManager\\v202505\\TrackingEventPing',
      'Value' => 'Google\\AdsApi\\AdManager\\v202505\\Value',
      'VodStreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202505\\VodStreamCreateRequest',
      'getSamSessionsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202505\\getSamSessionsByStatementResponse',
      'registerSessionsForMonitoringResponse' => 'Google\\AdsApi\\AdManager\\v202505\\registerSessionsForMonitoringResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202505/StreamActivityMonitorService?wsdl')
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
     * Returns the logging information for a DAI session. A DAI session can be identified by it's
     * session id or debug key. The session ID must be registered via the {@code
     * registerSessionsForMonitoring} method before it can be accessed. There may be some delay before
     * the session is available.
     *
     * <p>The number of sessions requested is limited to 25. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tbody>
     * <tr>
     * <th>Entity property</th>
     * <th>PQL filter</th>
     * </tr>
     * <tr>
     * <td>
     * Session id
     * </td>
     * <td>
     * 'sessionId'
     * </td>
     * </tr>
     * <tr>
     * <td>
     * Debug key
     * </td>
     * <td>
     * 'debugKey"
     * </td>
     * </tr>
     * </tbody>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202505\Statement $statement
     * @return \Google\AdsApi\AdManager\v202505\SamSession[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function getSamSessionsByStatement(\Google\AdsApi\AdManager\v202505\Statement $statement)
    {
      return $this->__soapCall('getSamSessionsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Registers the specified list of {@code sessionIds} for monitoring. Once the session IDs have
     * been registered, all logged information about the sessions will be persisted and can be viewed
     * via the Ad Manager UI.
     *
     * <p>A session ID is a unique identifier of a single user watching a live stream event.
     *
     * @param string[] $sessionIds
     * @return string[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function registerSessionsForMonitoring(array $sessionIds)
    {
      return $this->__soapCall('registerSessionsForMonitoring', array(array('sessionIds' => $sessionIds)))->getRval();
    }

}
