<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamEventService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'ActivateLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v202205\\ActivateLiveStreamEvents',
      'AdBreakMarkupError' => 'Google\\AdsApi\\AdManager\\v202205\\AdBreakMarkupError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'ArchiveLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v202205\\ArchiveLiveStreamEvents',
      'ArchiveSlates' => 'Google\\AdsApi\\AdManager\\v202205\\ArchiveSlates',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'HlsSettings' => 'Google\\AdsApi\\AdManager\\v202205\\HlsSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidUrlError',
      'LiveStreamEventAction' => 'Google\\AdsApi\\AdManager\\v202205\\LiveStreamEventAction',
      'LiveStreamEventActionError' => 'Google\\AdsApi\\AdManager\\v202205\\LiveStreamEventActionError',
      'LiveStreamEventCdnSettingsError' => 'Google\\AdsApi\\AdManager\\v202205\\LiveStreamEventCdnSettingsError',
      'LiveStreamEventCustomAssetKeyError' => 'Google\\AdsApi\\AdManager\\v202205\\LiveStreamEventCustomAssetKeyError',
      'LiveStreamEventDateTimeError' => 'Google\\AdsApi\\AdManager\\v202205\\LiveStreamEventDateTimeError',
      'LiveStreamEvent' => 'Google\\AdsApi\\AdManager\\v202205\\LiveStreamEvent',
      'LiveStreamEventDvrWindowError' => 'Google\\AdsApi\\AdManager\\v202205\\LiveStreamEventDvrWindowError',
      'LiveStreamEventPage' => 'Google\\AdsApi\\AdManager\\v202205\\LiveStreamEventPage',
      'LiveStreamEventSlateError' => 'Google\\AdsApi\\AdManager\\v202205\\LiveStreamEventSlateError',
      'MasterPlaylistSettings' => 'Google\\AdsApi\\AdManager\\v202205\\MasterPlaylistSettings',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202205\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PauseLiveStreamEventAds' => 'Google\\AdsApi\\AdManager\\v202205\\PauseLiveStreamEventAds',
      'PauseLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v202205\\PauseLiveStreamEvents',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'PrefetchSettings' => 'Google\\AdsApi\\AdManager\\v202205\\PrefetchSettings',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202205\\RangeError',
      'RefreshLiveStreamEventMasterPlaylists' => 'Google\\AdsApi\\AdManager\\v202205\\RefreshLiveStreamEventMasterPlaylists',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'SlateAction' => 'Google\\AdsApi\\AdManager\\v202205\\SlateAction',
      'Slate' => 'Google\\AdsApi\\AdManager\\v202205\\Slate',
      'SlatePage' => 'Google\\AdsApi\\AdManager\\v202205\\SlatePage',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202205\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'UnarchiveSlates' => 'Google\\AdsApi\\AdManager\\v202205\\UnarchiveSlates',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202205\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'VideoAdTagError' => 'Google\\AdsApi\\AdManager\\v202205\\VideoAdTagError',
      'createLiveStreamEventsResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createLiveStreamEventsResponse',
      'createSlatesResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createSlatesResponse',
      'getLiveStreamEventsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getLiveStreamEventsByStatementResponse',
      'getSlatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getSlatesByStatementResponse',
      'performLiveStreamEventActionResponse' => 'Google\\AdsApi\\AdManager\\v202205\\performLiveStreamEventActionResponse',
      'performSlateActionResponse' => 'Google\\AdsApi\\AdManager\\v202205\\performSlateActionResponse',
      'updateLiveStreamEventsResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateLiveStreamEventsResponse',
      'updateSlatesResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateSlatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/LiveStreamEventService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202205\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\AdManager\v202205\LiveStreamEvent[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function createLiveStreamEvents(array $liveStreamEvents)
    {
      return $this->__soapCall('createLiveStreamEvents', array(array('liveStreamEvents' => $liveStreamEvents)))->getRval();
    }

    /**
     * Create new slates.
     *
     * <p>A slate creative is served as backup content in a live stream event when no other
     * creatives are eligible to be served.
     *
     * @param \Google\AdsApi\AdManager\v202205\Slate[] $slates
     * @return \Google\AdsApi\AdManager\v202205\Slate[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function createSlates(array $slates)
    {
      return $this->__soapCall('createSlates', array(array('slates' => $slates)))->getRval();
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
     * <tr>
     * <td>{@code slateCreativeId}</td>
     * <td>{@link LiveStreamEvent#slateCreativeId}</td>
     * </tr>
     * <tr>
     * <td>{@code assetKey}</td>
     * <td>{@link LiveStreamEvent#assetKey}</td>
     * </tr>
     * <tr>
     * <td>{@code streamCreateDaiAuthenticationKeyIds}</td>
     * <td>{@link LiveStreamEvent#streamCreateDaiAuthenticationKeyIds}</td>
     * </tr>
     * <tr>
     * <td>{@code dynamicAdInsertionType}</td>
     * <td>{@link LiveStreamEvent#dynamicAdInsertionType}</td>
     * </tr>
     * <tr>
     * <td>{@code streamingFormat}</td>
     * <td>{@link LiveStreamEvent#streamingFormat}</td>
     * </tr>
     * <tr>
     * <td>{@code customAssetKey}</td>
     * <td>{@link LiveStreamEvent#customAssetKey}</td>
     * </tr>
     * <tr>
     * <td>{@code daiEncodingProfileIds}</td>
     * <td>{@link LiveStreamEvent#daiEncodingProfileIds}</td>
     * </tr>
     * <tr>
     * <td>{@code segmentUrlAuthenticationKeyIds}</td>
     * <td>{@link LiveStreamEvent#segmentUrlAuthenticationKeyIds}</td>
     * </tr>
     * </table>
     *
     * list of live stream events
     *
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\LiveStreamEventPage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getLiveStreamEventsByStatement(\Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('getLiveStreamEventsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link SlatePage} of {@link Slate} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Slate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Slate#name}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Slate#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202205\Statement $statement
     * @return \Google\AdsApi\AdManager\v202205\SlatePage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getSlatesByStatement(\Google\AdsApi\AdManager\v202205\Statement $statement)
    {
      return $this->__soapCall('getSlatesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link LiveStreamEvent} objects that match the given
     * {@link Statement#query}.
     *
     * a set of live stream events
     *
     * @param \Google\AdsApi\AdManager\v202205\LiveStreamEventAction $liveStreamEventAction
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function performLiveStreamEventAction(\Google\AdsApi\AdManager\v202205\LiveStreamEventAction $liveStreamEventAction, \Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('performLiveStreamEventAction', array(array('liveStreamEventAction' => $liveStreamEventAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on slates that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202205\SlateAction $slateAction
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function performSlateAction(\Google\AdsApi\AdManager\v202205\SlateAction $slateAction, \Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('performSlateAction', array(array('slateAction' => $slateAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LiveStreamEvent} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\AdManager\v202205\LiveStreamEvent[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateLiveStreamEvents(array $liveStreamEvents)
    {
      return $this->__soapCall('updateLiveStreamEvents', array(array('liveStreamEvents' => $liveStreamEvents)))->getRval();
    }

    /**
     * Update existing slates.
     *
     * <p>Only the slateName is editable.
     *
     * @param \Google\AdsApi\AdManager\v202205\Slate[] $slates
     * @return \Google\AdsApi\AdManager\v202205\Slate[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateSlates(array $slates)
    {
      return $this->__soapCall('updateSlates', array(array('slates' => $slates)))->getRval();
    }

}
