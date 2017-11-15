<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201702\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201702\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201702\\ObjectValue',
      'AdExchangeCreative' => 'Google\\AdsApi\\Dfp\\v201702\\AdExchangeCreative',
      'AdMobBackfillCreative' => 'Google\\AdsApi\\Dfp\\v201702\\AdMobBackfillCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\Dfp\\v201702\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201702\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201702\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201702\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\Dfp\\v201702\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201702\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\Dfp\\v201702\\Asset',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201702\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201702\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201702\\BaseCustomFieldValue',
      'BaseFlashCreative' => 'Google\\AdsApi\\Dfp\\v201702\\BaseFlashCreative',
      'BaseFlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201702\\BaseFlashRedirectCreative',
      'BaseImageCreative' => 'Google\\AdsApi\\Dfp\\v201702\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201702\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201702\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\Dfp\\v201702\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201702\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\Dfp\\v201702\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\Dfp\\v201702\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201702\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\Dfp\\v201702\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAsset' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\Dfp\\v201702\\Creative',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\Dfp\\v201702\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201702\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201702\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201702\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201702\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateValue',
      'LegacyDfpMobileCreative' => 'Google\\AdsApi\\Dfp\\v201702\\LegacyDfpMobileCreative',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201702\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201702\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201702\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201702\\FileError',
      'FlashCreative' => 'Google\\AdsApi\\Dfp\\v201702\\FlashCreative',
      'FlashOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201702\\FlashOverlayCreative',
      'FlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201702\\FlashRedirectCreative',
      'FlashRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201702\\FlashRedirectOverlayCreative',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\Dfp\\v201702\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201702\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\Dfp\\v201702\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201702\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\Dfp\\v201702\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201702\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201702\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201702\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201702\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201702\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201702\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201702\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201702\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\Dfp\\v201702\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201702\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201702\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201702\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201702\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201702\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201702\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\Dfp\\v201702\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201702\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201702\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\Dfp\\v201702\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\Dfp\\v201702\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201702\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201702\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201702\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\Dfp\\v201702\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201702\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201702\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201702\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201702\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201702\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201702\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201702\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201702\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201702\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201702\\SwiffyConversionError',
      'SwiffyFallbackAsset' => 'Google\\AdsApi\\Dfp\\v201702\\SwiffyFallbackAsset',
      'TemplateCreative' => 'Google\\AdsApi\\Dfp\\v201702\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201702\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201702\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\Dfp\\v201702\\ThirdPartyCreative',
      'TrackingUrls' => 'Google\\AdsApi\\Dfp\\v201702\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201702\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201702\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\Dfp\\v201702\\UnsupportedCreative',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201702\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\Dfp\\v201702\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201702\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\Dfp\\v201702\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\Dfp\\v201702\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\Dfp\\v201702\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201702\\VideoRedirectCreative',
      'VpaidLinearCreative' => 'Google\\AdsApi\\Dfp\\v201702\\VpaidLinearCreative',
      'VpaidLinearRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201702\\VpaidLinearRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201702\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201702\\getCreativesByStatementResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201702\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201702/CreativeService?wsdl')
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
     * Creates new {@link Creative} objects.
     *
     * @param \Google\AdsApi\Dfp\v201702\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201702\Creative[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function createCreatives(array $creatives)
    {
      return $this->__soapCall('createCreatives', array(array('creatives' => $creatives)))->getRval();
    }

    /**
     * Gets a {@link CreativePage} of {@link Creative} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Creative#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Creative#name}</td>
     * </tr>
     * <tr>
     * <td>{@code advertiserId}</td>
     * <td>{@link Creative#advertiserId}</td>
     * </tr>
     * <tr>
     * <td>{@code width}</td>
     * <td>{@link Creative#size}</td>
     * </tr>
     * <tr>
     * <td>{@code height}</td>
     * <td>{@link Creative#size}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Creative#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * a set of creatives
     *
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\CreativePage
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\Dfp\v201702\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\Dfp\v201702\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201702\Creative[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
