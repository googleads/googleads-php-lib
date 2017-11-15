<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201708\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201708\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'AdExchangeCreative' => 'Google\\AdsApi\\Dfp\\v201708\\AdExchangeCreative',
      'AdMobBackfillCreative' => 'Google\\AdsApi\\Dfp\\v201708\\AdMobBackfillCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\Dfp\\v201708\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201708\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\Dfp\\v201708\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201708\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\Dfp\\v201708\\Asset',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201708\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\BaseCustomFieldValue',
      'BaseFlashCreative' => 'Google\\AdsApi\\Dfp\\v201708\\BaseFlashCreative',
      'BaseFlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201708\\BaseFlashRedirectCreative',
      'BaseImageCreative' => 'Google\\AdsApi\\Dfp\\v201708\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201708\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201708\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\Dfp\\v201708\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\Dfp\\v201708\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\Dfp\\v201708\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAsset' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\Dfp\\v201708\\Creative',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\Dfp\\v201708\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'LegacyDfpMobileCreative' => 'Google\\AdsApi\\Dfp\\v201708\\LegacyDfpMobileCreative',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201708\\FileError',
      'FlashCreative' => 'Google\\AdsApi\\Dfp\\v201708\\FlashCreative',
      'FlashOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201708\\FlashOverlayCreative',
      'FlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201708\\FlashRedirectCreative',
      'FlashRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201708\\FlashRedirectOverlayCreative',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\Dfp\\v201708\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201708\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\Dfp\\v201708\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201708\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\Dfp\\v201708\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201708\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201708\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201708\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201708\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201708\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\Dfp\\v201708\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201708\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\Dfp\\v201708\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\Dfp\\v201708\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\Dfp\\v201708\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201708\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\Dfp\\v201708\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201708\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201708\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201708\\SwiffyConversionError',
      'SwiffyFallbackAsset' => 'Google\\AdsApi\\Dfp\\v201708\\SwiffyFallbackAsset',
      'TemplateCreative' => 'Google\\AdsApi\\Dfp\\v201708\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\Dfp\\v201708\\ThirdPartyCreative',
      'TrackingUrls' => 'Google\\AdsApi\\Dfp\\v201708\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\Dfp\\v201708\\UnsupportedCreative',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201708\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201708\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\Dfp\\v201708\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\Dfp\\v201708\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\Dfp\\v201708\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201708\\VideoRedirectCreative',
      'VpaidLinearCreative' => 'Google\\AdsApi\\Dfp\\v201708\\VpaidLinearCreative',
      'VpaidLinearRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201708\\VpaidLinearRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getCreativesByStatementResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/CreativeService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201708\Creative[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\CreativePage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\Dfp\v201708\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201708\Creative[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
