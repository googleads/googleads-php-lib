<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201608\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201608\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201608\\ObjectValue',
      'AdExchangeCreative' => 'Google\\AdsApi\\Dfp\\v201608\\AdExchangeCreative',
      'AdMobBackfillCreative' => 'Google\\AdsApi\\Dfp\\v201608\\AdMobBackfillCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\Dfp\\v201608\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201608\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201608\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\Dfp\\v201608\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201608\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\Dfp\\v201608\\Asset',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201608\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201608\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201608\\BaseCustomFieldValue',
      'BaseFlashCreative' => 'Google\\AdsApi\\Dfp\\v201608\\BaseFlashCreative',
      'BaseFlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201608\\BaseFlashRedirectCreative',
      'BaseImageCreative' => 'Google\\AdsApi\\Dfp\\v201608\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201608\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201608\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\Dfp\\v201608\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201608\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\Dfp\\v201608\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\Dfp\\v201608\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201608\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\Dfp\\v201608\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAsset' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\Dfp\\v201608\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\Dfp\\v201608\\Creative',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\Dfp\\v201608\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\Dfp\\v201608\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201608\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201608\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201608\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201608\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateValue',
      'LegacyDfpMobileCreative' => 'Google\\AdsApi\\Dfp\\v201608\\LegacyDfpMobileCreative',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201608\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201608\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201608\\FeatureError',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201608\\FileError',
      'FlashCreative' => 'Google\\AdsApi\\Dfp\\v201608\\FlashCreative',
      'FlashOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201608\\FlashOverlayCreative',
      'FlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201608\\FlashRedirectCreative',
      'FlashRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201608\\FlashRedirectOverlayCreative',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\Dfp\\v201608\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201608\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\Dfp\\v201608\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201608\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\Dfp\\v201608\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201608\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201608\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201608\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201608\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201608\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201608\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201608\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201608\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201608\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\Dfp\\v201608\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201608\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201608\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201608\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201608\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\Dfp\\v201608\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201608\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\Dfp\\v201608\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\Dfp\\v201608\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201608\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201608\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\Dfp\\v201608\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201608\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201608\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201608\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201608\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201608\\StringCreativeTemplateVariableValue',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201608\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201608\\SwiffyConversionError',
      'SwiffyFallbackAsset' => 'Google\\AdsApi\\Dfp\\v201608\\SwiffyFallbackAsset',
      'TemplateCreative' => 'Google\\AdsApi\\Dfp\\v201608\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201608\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\Dfp\\v201608\\ThirdPartyCreative',
      'TrackingUrls' => 'Google\\AdsApi\\Dfp\\v201608\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201608\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201608\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\Dfp\\v201608\\UnsupportedCreative',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201608\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\Dfp\\v201608\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201608\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\Dfp\\v201608\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\Dfp\\v201608\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\Dfp\\v201608\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201608\\VideoRedirectCreative',
      'VpaidLinearCreative' => 'Google\\AdsApi\\Dfp\\v201608\\VpaidLinearCreative',
      'VpaidLinearRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201608\\VpaidLinearRedirectCreative',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201608/CreativeService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201608\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201608\Creative[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function createCreatives(array $creatives)
    {
      return $this->__soapCall('createCreatives', array(array('creatives' => $creatives)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201608\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201608\CreativePage
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\Dfp\v201608\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\Dfp\v201608\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201608\Creative[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->rval;
    }

}
