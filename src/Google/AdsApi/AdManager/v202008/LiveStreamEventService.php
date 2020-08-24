<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamEventService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202008\\ObjectValue',
      'ActivateLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v202008\\ActivateLiveStreamEvents',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202008\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202008\\ApplicationException',
      'ArchiveLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v202008\\ArchiveLiveStreamEvents',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202008\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202008\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202008\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202008\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202008\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202008\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202008\\FieldPathElement',
      'HlsSettings' => 'Google\\AdsApi\\AdManager\\v202008\\HlsSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202008\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202008\\InvalidUrlError',
      'LiveStreamEventAction' => 'Google\\AdsApi\\AdManager\\v202008\\LiveStreamEventAction',
      'LiveStreamEventActionError' => 'Google\\AdsApi\\AdManager\\v202008\\LiveStreamEventActionError',
      'LiveStreamEventCdnSettingsError' => 'Google\\AdsApi\\AdManager\\v202008\\LiveStreamEventCdnSettingsError',
      'LiveStreamEventCustomAssetKeyError' => 'Google\\AdsApi\\AdManager\\v202008\\LiveStreamEventCustomAssetKeyError',
      'LiveStreamEventDateTimeError' => 'Google\\AdsApi\\AdManager\\v202008\\LiveStreamEventDateTimeError',
      'LiveStreamEvent' => 'Google\\AdsApi\\AdManager\\v202008\\LiveStreamEvent',
      'LiveStreamEventDvrWindowError' => 'Google\\AdsApi\\AdManager\\v202008\\LiveStreamEventDvrWindowError',
      'LiveStreamEventPage' => 'Google\\AdsApi\\AdManager\\v202008\\LiveStreamEventPage',
      'LiveStreamEventSlateError' => 'Google\\AdsApi\\AdManager\\v202008\\LiveStreamEventSlateError',
      'MasterPlaylistSettings' => 'Google\\AdsApi\\AdManager\\v202008\\MasterPlaylistSettings',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202008\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202008\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202008\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202008\\ParseError',
      'PauseLiveStreamEventAds' => 'Google\\AdsApi\\AdManager\\v202008\\PauseLiveStreamEventAds',
      'PauseLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v202008\\PauseLiveStreamEvents',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202008\\PermissionError',
      'PrefetchSettings' => 'Google\\AdsApi\\AdManager\\v202008\\PrefetchSettings',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202008\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202008\\RangeError',
      'RefreshLiveStreamEventMasterPlaylists' => 'Google\\AdsApi\\AdManager\\v202008\\RefreshLiveStreamEventMasterPlaylists',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202008\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202008\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202008\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202008\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202008\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202008\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202008\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202008\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202008\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202008\\Value',
      'VideoAdTagError' => 'Google\\AdsApi\\AdManager\\v202008\\VideoAdTagError',
      'createLiveStreamEventsResponse' => 'Google\\AdsApi\\AdManager\\v202008\\createLiveStreamEventsResponse',
      'getLiveStreamEventsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getLiveStreamEventsByStatementResponse',
      'performLiveStreamEventActionResponse' => 'Google\\AdsApi\\AdManager\\v202008\\performLiveStreamEventActionResponse',
      'updateLiveStreamEventsResponse' => 'Google\\AdsApi\\AdManager\\v202008\\updateLiveStreamEventsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202008/LiveStreamEventService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202008\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\AdManager\v202008\LiveStreamEvent[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
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
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\LiveStreamEventPage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getLiveStreamEventsByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('getLiveStreamEventsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LiveStreamEvent} objects that match the given
     * {@link Statement#query}.
     *
     * a set of live stream events
     *
     * @param \Google\AdsApi\AdManager\v202008\LiveStreamEventAction $liveStreamEventAction
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function performLiveStreamEventAction(\Google\AdsApi\AdManager\v202008\LiveStreamEventAction $liveStreamEventAction, \Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('performLiveStreamEventAction', array(array('liveStreamEventAction' => $liveStreamEventAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LiveStreamEvent} objects.
     *
     * @param \Google\AdsApi\AdManager\v202008\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\AdManager\v202008\LiveStreamEvent[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function updateLiveStreamEvents(array $liveStreamEvents)
    {
      return $this->__soapCall('updateLiveStreamEvents', array(array('liveStreamEvents' => $liveStreamEvents)))->getRval();
    }

}
