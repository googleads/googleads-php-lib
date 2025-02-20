<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamEventService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202502\\ObjectValue',
      'ActivateLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v202502\\ActivateLiveStreamEvents',
      'AdBreakMarkupError' => 'Google\\AdsApi\\AdManager\\v202502\\AdBreakMarkupError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202502\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202502\\ApplicationException',
      'ArchiveLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v202502\\ArchiveLiveStreamEvents',
      'ArchiveSlates' => 'Google\\AdsApi\\AdManager\\v202502\\ArchiveSlates',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202502\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202502\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202502\\CommonError',
      'DashBridge' => 'Google\\AdsApi\\AdManager\\v202502\\DashBridge',
      'Date' => 'Google\\AdsApi\\AdManager\\v202502\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202502\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202502\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202502\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202502\\FieldPathElement',
      'HlsSettings' => 'Google\\AdsApi\\AdManager\\v202502\\HlsSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202502\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202502\\InvalidUrlError',
      'LiveStreamConditioning' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamConditioning',
      'LiveStreamEventAction' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventAction',
      'LiveStreamEventActionError' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventActionError',
      'LiveStreamEventCdnSettingsError' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventCdnSettingsError',
      'LiveStreamEventConditioningError' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventConditioningError',
      'LiveStreamEventCustomAssetKeyError' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventCustomAssetKeyError',
      'LiveStreamEventDateTimeError' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventDateTimeError',
      'LiveStreamEvent' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEvent',
      'LiveStreamEventDvrWindowError' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventDvrWindowError',
      'LiveStreamEventPage' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventPage',
      'LiveStreamEventPrerollSettingsError' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventPrerollSettingsError',
      'LiveStreamEventSlateError' => 'Google\\AdsApi\\AdManager\\v202502\\LiveStreamEventSlateError',
      'MasterPlaylistSettings' => 'Google\\AdsApi\\AdManager\\v202502\\MasterPlaylistSettings',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202502\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202502\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202502\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202502\\ParseError',
      'PauseLiveStreamEventAds' => 'Google\\AdsApi\\AdManager\\v202502\\PauseLiveStreamEventAds',
      'PauseLiveStreamEvents' => 'Google\\AdsApi\\AdManager\\v202502\\PauseLiveStreamEvents',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202502\\PermissionError',
      'PrefetchSettings' => 'Google\\AdsApi\\AdManager\\v202502\\PrefetchSettings',
      'PrerollSettings' => 'Google\\AdsApi\\AdManager\\v202502\\PrerollSettings',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202502\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202502\\RangeError',
      'RefreshLiveStreamEventMasterPlaylists' => 'Google\\AdsApi\\AdManager\\v202502\\RefreshLiveStreamEventMasterPlaylists',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202502\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202502\\SetValue',
      'SlateAction' => 'Google\\AdsApi\\AdManager\\v202502\\SlateAction',
      'Slate' => 'Google\\AdsApi\\AdManager\\v202502\\Slate',
      'SlatePage' => 'Google\\AdsApi\\AdManager\\v202502\\SlatePage',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202502\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202502\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202502\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202502\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202502\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202502\\TextValue',
      'UnarchiveSlates' => 'Google\\AdsApi\\AdManager\\v202502\\UnarchiveSlates',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202502\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202502\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202502\\Value',
      'VideoAdTagError' => 'Google\\AdsApi\\AdManager\\v202502\\VideoAdTagError',
      'createLiveStreamEventsResponse' => 'Google\\AdsApi\\AdManager\\v202502\\createLiveStreamEventsResponse',
      'createSlatesResponse' => 'Google\\AdsApi\\AdManager\\v202502\\createSlatesResponse',
      'getLiveStreamEventsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getLiveStreamEventsByStatementResponse',
      'getSlatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getSlatesByStatementResponse',
      'performLiveStreamEventActionResponse' => 'Google\\AdsApi\\AdManager\\v202502\\performLiveStreamEventActionResponse',
      'performSlateActionResponse' => 'Google\\AdsApi\\AdManager\\v202502\\performSlateActionResponse',
      'updateLiveStreamEventsResponse' => 'Google\\AdsApi\\AdManager\\v202502\\updateLiveStreamEventsResponse',
      'updateSlatesResponse' => 'Google\\AdsApi\\AdManager\\v202502\\updateSlatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202502/LiveStreamEventService?wsdl')
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
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link LiveStreamEvent#name}
     * <li>{@link LiveStreamEvent#startDateTime}
     * <li>{@link LiveStreamEvent#endDateTime}
     * <li>{@link LiveStreamEvent#contentUrls}
     * <li>{@link LiveStreamEvent#adTags}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202502\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\AdManager\v202502\LiveStreamEvent[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function createLiveStreamEvents(array $liveStreamEvents)
    {
      return $this->__soapCall('createLiveStreamEvents', array(array('liveStreamEvents' => $liveStreamEvents)))->getRval();
    }

    /**
     * Create new slates.
     *
     * <p>A slate creative is served as backup content in a live stream event when no other creatives
     * are eligible to be served.
     *
     * @param \Google\AdsApi\AdManager\v202502\Slate[] $slates
     * @return \Google\AdsApi\AdManager\v202502\Slate[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function createSlates(array $slates)
    {
      return $this->__soapCall('createSlates', array(array('slates' => $slates)))->getRval();
    }

    /**
     * Gets a {@link LiveStreamEventPage} of {@link LiveStreamEvent} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
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
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\LiveStreamEventPage
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getLiveStreamEventsByStatement(\Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('getLiveStreamEventsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link SlatePage} of {@link Slate} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
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
     * @param \Google\AdsApi\AdManager\v202502\Statement $statement
     * @return \Google\AdsApi\AdManager\v202502\SlatePage
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getSlatesByStatement(\Google\AdsApi\AdManager\v202502\Statement $statement)
    {
      return $this->__soapCall('getSlatesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link LiveStreamEvent} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202502\LiveStreamEventAction $liveStreamEventAction
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function performLiveStreamEventAction(\Google\AdsApi\AdManager\v202502\LiveStreamEventAction $liveStreamEventAction, \Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('performLiveStreamEventAction', array(array('liveStreamEventAction' => $liveStreamEventAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on slates that match the given {@link Statement}.
     *
     * @param \Google\AdsApi\AdManager\v202502\SlateAction $slateAction
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function performSlateAction(\Google\AdsApi\AdManager\v202502\SlateAction $slateAction, \Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('performSlateAction', array(array('slateAction' => $slateAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LiveStreamEvent} objects.
     *
     * @param \Google\AdsApi\AdManager\v202502\LiveStreamEvent[] $liveStreamEvents
     * @return \Google\AdsApi\AdManager\v202502\LiveStreamEvent[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
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
     * @param \Google\AdsApi\AdManager\v202502\Slate[] $slates
     * @return \Google\AdsApi\AdManager\v202502\Slate[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function updateSlates(array $slates)
    {
      return $this->__soapCall('updateSlates', array(array('slates' => $slates)))->getRval();
    }

}
