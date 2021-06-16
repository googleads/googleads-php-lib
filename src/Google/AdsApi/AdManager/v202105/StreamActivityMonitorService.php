<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StreamActivityMonitorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202105\\ObjectValue',
      'AdBreak' => 'Google\\AdsApi\\AdManager\\v202105\\AdBreak',
      'AdDecisionCreative' => 'Google\\AdsApi\\AdManager\\v202105\\AdDecisionCreative',
      'AdResponse' => 'Google\\AdsApi\\AdManager\\v202105\\AdResponse',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202105\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202105\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202105\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202105\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202105\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202105\\CommonError',
      'CreativeTranscode' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeTranscode',
      'Date' => 'Google\\AdsApi\\AdManager\\v202105\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202105\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202105\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202105\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202105\\InternalApiError',
      'LinearStreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202105\\LinearStreamCreateRequest',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202105\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202105\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202105\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202105\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202105\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredError',
      'SamError' => 'Google\\AdsApi\\AdManager\\v202105\\SamError',
      'SamSession' => 'Google\\AdsApi\\AdManager\\v202105\\SamSession',
      'SamSessionError' => 'Google\\AdsApi\\AdManager\\v202105\\SamSessionError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202105\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202105\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202105\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202105\\StatementError',
      'StreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202105\\StreamCreateRequest',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202105\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202105\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202105\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202105\\TextValue',
      'TrackingEvent' => 'Google\\AdsApi\\AdManager\\v202105\\TrackingEvent',
      'TrackingEvent.Ping' => 'Google\\AdsApi\\AdManager\\v202105\\TrackingEventPing',
      'Value' => 'Google\\AdsApi\\AdManager\\v202105\\Value',
      'VodStreamCreateRequest' => 'Google\\AdsApi\\AdManager\\v202105\\VodStreamCreateRequest',
      'getSamSessionsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getSamSessionsByStatementResponse',
      'registerSessionsForMonitoringResponse' => 'Google\\AdsApi\\AdManager\\v202105\\registerSessionsForMonitoringResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202105/StreamActivityMonitorService?wsdl')
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
     * Only '=' and 'IN' expressions are supported.
     * no SAM session is associated with any of the {@code sessionIds}.
     *
     * @param \Google\AdsApi\AdManager\v202105\Statement $statement
     * @return \Google\AdsApi\AdManager\v202105\SamSession[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getSamSessionsByStatement(\Google\AdsApi\AdManager\v202105\Statement $statement)
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
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function registerSessionsForMonitoring(array $sessionIds)
    {
      return $this->__soapCall('registerSessionsForMonitoring', array(array('sessionIds' => $sessionIds)))->getRval();
    }

}
