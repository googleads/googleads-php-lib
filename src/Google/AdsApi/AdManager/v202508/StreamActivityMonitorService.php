<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StreamActivityMonitorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202508\\ObjectValue',
      'AdBreak' => 'Google\\AdsApi\\AdManager\\v202508\\AdBreak',
      'AdDecisionCreative' => 'Google\\AdsApi\\AdManager\\v202508\\AdDecisionCreative',
      'AdResponse' => 'Google\\AdsApi\\AdManager\\v202508\\AdResponse',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202508\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202508\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202508\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202508\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202508\\CommonError',
      'CreativeTranscode' => 'Google\\AdsApi\\AdManager\\v202508\\CreativeTranscode',
      'Date' => 'Google\\AdsApi\\AdManager\\v202508\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202508\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202508\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202508\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202508\\InternalApiError',
      'LinearStreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202508\\LinearStreamCreateRequest',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202508\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202508\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202508\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202508\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202508\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredError',
      'SamError' => 'Google\\AdsApi\\AdManager\\v202508\\SamError',
      'SamSession' => 'Google\\AdsApi\\AdManager\\v202508\\SamSession',
      'SamSessionError' => 'Google\\AdsApi\\AdManager\\v202508\\SamSessionError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202508\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202508\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202508\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202508\\StatementError',
      'StreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202508\\StreamCreateRequest',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202508\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202508\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202508\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202508\\TextValue',
      'TrackingEvent' => 'Google\\AdsApi\\AdManager\\v202508\\TrackingEvent',
      'TrackingEvent.Ping' => 'Google\\AdsApi\\AdManager\\v202508\\TrackingEventPing',
      'Value' => 'Google\\AdsApi\\AdManager\\v202508\\Value',
      'VodStreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202508\\VodStreamCreateRequest',
      'getSamSessionsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getSamSessionsByStatementResponse',
      'registerSessionsForMonitoringResponse' => 'Google\\AdsApi\\AdManager\\v202508\\registerSessionsForMonitoringResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202508/StreamActivityMonitorService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202508\Statement $statement
     * @return \Google\AdsApi\AdManager\v202508\SamSession[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getSamSessionsByStatement(\Google\AdsApi\AdManager\v202508\Statement $statement)
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
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function registerSessionsForMonitoring(array $sessionIds)
    {
      return $this->__soapCall('registerSessionsForMonitoring', array(array('sessionIds' => $sessionIds)))->getRval();
    }

}
