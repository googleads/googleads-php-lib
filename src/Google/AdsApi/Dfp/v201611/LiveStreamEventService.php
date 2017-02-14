<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamEventService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ActivateLiveStreamEvents' => 'Google\\AdsApi\\Dfp\\v201611\\ActivateLiveStreamEvents',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'ArchiveLiveStreamEvents' => 'Google\\AdsApi\\Dfp\\v201611\\ArchiveLiveStreamEvents',
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
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201611\\InvalidUrlError',
      'LiveStreamEventAction' => 'Google\\AdsApi\\Dfp\\v201611\\LiveStreamEventAction',
      'LiveStreamEventActionError' => 'Google\\AdsApi\\Dfp\\v201611\\LiveStreamEventActionError',
      'LiveStreamEventDateTimeError' => 'Google\\AdsApi\\Dfp\\v201611\\LiveStreamEventDateTimeError',
      'LiveStreamEvent' => 'Google\\AdsApi\\Dfp\\v201611\\LiveStreamEvent',
      'LiveStreamEventPage' => 'Google\\AdsApi\\Dfp\\v201611\\LiveStreamEventPage',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201611\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PauseLiveStreamEventAds' => 'Google\\AdsApi\\Dfp\\v201611\\PauseLiveStreamEventAds',
      'PauseLiveStreamEvents' => 'Google\\AdsApi\\Dfp\\v201611\\PauseLiveStreamEvents',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201611\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'SamSessionError' => 'Google\\AdsApi\\Dfp\\v201611\\SamSessionError',
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
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201611\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'createLiveStreamEventsResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createLiveStreamEventsResponse',
      'getLiveStreamEventsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getLiveStreamEventsByStatementResponse',
      'performLiveStreamEventActionResponse' => 'Google\\AdsApi\\Dfp\\v201611\\performLiveStreamEventActionResponse',
      'registerSessionsForMonitoringResponse' => 'Google\\AdsApi\\Dfp\\v201611\\registerSessionsForMonitoringResponse',
      'updateLiveStreamEventsResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateLiveStreamEventsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/LiveStreamEventService?wsdl')
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
     * Creates new {@link LiveStreamEvent} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link LiveStreamEvent#name}</li>
     * <li>{@link LiveStreamEvent#startDateTime}</li>
     * <li>{@link LiveStreamEvent#endDateTime}</li>
     * <li>{@link LiveStreamEvent#contentUrls}</li>
     * <li>{@link LiveStreamEvent#adTags}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201611\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\Dfp\v201611\LiveStreamEvent[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function createLiveStreamEvents(array $liveStreamEvents)
    {
      return $this->__soapCall('createLiveStreamEvents', array(array('liveStreamEvents' => $liveStreamEvents)))->getRval();
    }

    /**
     * Gets a {@link LiveStreamEventPage} of {@link LiveStreamEvent} objects that
     * satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link LiveStreamEvent#id}</td>
     * </tr>
     * </table>
     *
     * list of live stream events
     *
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\LiveStreamEventPage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getLiveStreamEventsByStatement(\Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('getLiveStreamEventsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LiveStreamEvent} objects that match the given
     * {@link Statement#query}.
     *
     * a set of live stream events
     *
     * @param \Google\AdsApi\Dfp\v201611\LiveStreamEventAction $liveStreamEventAction
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function performLiveStreamEventAction(\Google\AdsApi\Dfp\v201611\LiveStreamEventAction $liveStreamEventAction, \Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('performLiveStreamEventAction', array(array('liveStreamEventAction' => $liveStreamEventAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Registers the specified list of {@code sessionIds} for monitoring. Once the session IDs have
     * been registered, all logged information about the sessions will be persisted and can be viewed
     * via the DFP UI.
     *
     * <p>A session ID is a unique identifier of a single user watching a live stream event.
     *
     * @param string[] $sessionIds
     * @return string[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function registerSessionsForMonitoring(array $sessionIds)
    {
      return $this->__soapCall('registerSessionsForMonitoring', array(array('sessionIds' => $sessionIds)))->getRval();
    }

    /**
     * Updates the specified {@link LiveStreamEvent} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\Dfp\v201611\LiveStreamEvent[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateLiveStreamEvents(array $liveStreamEvents)
    {
      return $this->__soapCall('updateLiveStreamEvents', array(array('liveStreamEvents' => $liveStreamEvents)))->getRval();
    }

}
