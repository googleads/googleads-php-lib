<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v201808\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201808\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201808\\ObjectValue',
      'AdExchangeCreative' => 'Google\\AdsApi\\AdManager\\v201808\\AdExchangeCreative',
      'AdMobBackfillCreative' => 'Google\\AdsApi\\AdManager\\v201808\\AdMobBackfillCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\AdManager\\v201808\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201808\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201808\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201808\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\AdManager\\v201808\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201808\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\AdManager\\v201808\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v201808\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201808\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201808\\BaseCustomFieldValue',
      'BaseFlashCreative' => 'Google\\AdsApi\\AdManager\\v201808\\BaseFlashCreative',
      'BaseFlashRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201808\\BaseFlashRedirectCreative',
      'BaseImageCreative' => 'Google\\AdsApi\\AdManager\\v201808\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201808\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v201808\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\AdManager\\v201808\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201808\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\AdManager\\v201808\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\AdManager\\v201808\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201808\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201808\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v201808\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAsset' => 'Google\\AdsApi\\AdManager\\v201808\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\AdManager\\v201808\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v201808\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\AdManager\\v201808\\Creative',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201808\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\AdManager\\v201808\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v201808\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v201808\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v201808\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\AdManager\\v201808\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v201808\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201808\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201808\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201808\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201808\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateValue',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201808\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201808\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201808\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201808\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v201808\\FileError',
      'FlashCreative' => 'Google\\AdsApi\\AdManager\\v201808\\FlashCreative',
      'FlashOverlayCreative' => 'Google\\AdsApi\\AdManager\\v201808\\FlashOverlayCreative',
      'FlashRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201808\\FlashRedirectCreative',
      'FlashRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v201808\\FlashRedirectOverlayCreative',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\AdManager\\v201808\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v201808\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\AdManager\\v201808\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v201808\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\AdManager\\v201808\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201808\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\AdManager\\v201808\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201808\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v201808\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201808\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201808\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v201808\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201808\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201808\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\AdManager\\v201808\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201808\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201808\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201808\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201808\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201808\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201808\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201808\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\AdManager\\v201808\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201808\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201808\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\AdManager\\v201808\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\AdManager\\v201808\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v201808\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v201808\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201808\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\AdManager\\v201808\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v201808\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201808\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201808\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201808\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201808\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201808\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201808\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201808\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201808\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v201808\\SwiffyConversionError',
      'SwiffyFallbackAsset' => 'Google\\AdsApi\\AdManager\\v201808\\SwiffyFallbackAsset',
      'TemplateCreative' => 'Google\\AdsApi\\AdManager\\v201808\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v201808\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201808\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\AdManager\\v201808\\ThirdPartyCreative',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v201808\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201808\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201808\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\AdManager\\v201808\\UnsupportedCreative',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201808\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v201808\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201808\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\AdManager\\v201808\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\AdManager\\v201808\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\AdManager\\v201808\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201808\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\AdManager\\v201808\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201808\\getCreativesByStatementResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\AdManager\\v201808\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201808/CreativeService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201808\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v201808\Creative[]
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
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
     * @param \Google\AdsApi\AdManager\v201808\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201808\CreativePage
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\AdManager\v201808\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\AdManager\v201808\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v201808\Creative[]
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
