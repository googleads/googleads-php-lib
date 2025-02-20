<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StreamActivityMonitorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202502\\ObjectValue',
      'AdBreak' => 'Google\\AdsApi\\AdManager\\v202502\\AdBreak',
      'AdDecisionCreative' => 'Google\\AdsApi\\AdManager\\v202502\\AdDecisionCreative',
      'AdResponse' => 'Google\\AdsApi\\AdManager\\v202502\\AdResponse',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202502\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202502\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202502\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202502\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202502\\CommonError',
      'CreativeTranscode' => 'Google\\AdsApi\\AdManager\\v202502\\CreativeTranscode',
      'Date' => 'Google\\AdsApi\\AdManager\\v202502\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202502\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202502\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202502\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202502\\InternalApiError',
      'LinearStreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202502\\LinearStreamCreateRequest',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202502\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202502\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202502\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202502\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202502\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredError',
      'SamError' => 'Google\\AdsApi\\AdManager\\v202502\\SamError',
      'SamSession' => 'Google\\AdsApi\\AdManager\\v202502\\SamSession',
      'SamSessionError' => 'Google\\AdsApi\\AdManager\\v202502\\SamSessionError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202502\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202502\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202502\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202502\\StatementError',
      'StreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202502\\StreamCreateRequest',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202502\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202502\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202502\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202502\\TextValue',
      'TrackingEvent' => 'Google\\AdsApi\\AdManager\\v202502\\TrackingEvent',
      'TrackingEvent.Ping' => 'Google\\AdsApi\\AdManager\\v202502\\TrackingEventPing',
      'Value' => 'Google\\AdsApi\\AdManager\\v202502\\Value',
      'VodStreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202502\\VodStreamCreateRequest',
      'getSamSessionsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getSamSessionsByStatementResponse',
      'registerSessionsForMonitoringResponse' => 'Google\\AdsApi\\AdManager\\v202502\\registerSessionsForMonitoringResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202502/StreamActivityMonitorService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202502\Statement $statement
     * @return \Google\AdsApi\AdManager\v202502\SamSession[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getSamSessionsByStatement(\Google\AdsApi\AdManager\v202502\Statement $statement)
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
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function registerSessionsForMonitoring(array $sessionIds)
    {
      return $this->__soapCall('registerSessionsForMonitoring', array(array('sessionIds' => $sessionIds)))->getRval();
    }

}
