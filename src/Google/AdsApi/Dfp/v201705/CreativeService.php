<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201705\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201705\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'AdExchangeCreative' => 'Google\\AdsApi\\Dfp\\v201705\\AdExchangeCreative',
      'AdMobBackfillCreative' => 'Google\\AdsApi\\Dfp\\v201705\\AdMobBackfillCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\Dfp\\v201705\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201705\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\Dfp\\v201705\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201705\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\Dfp\\v201705\\Asset',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201705\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\BaseCustomFieldValue',
      'BaseFlashCreative' => 'Google\\AdsApi\\Dfp\\v201705\\BaseFlashCreative',
      'BaseFlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201705\\BaseFlashRedirectCreative',
      'BaseImageCreative' => 'Google\\AdsApi\\Dfp\\v201705\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201705\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201705\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\Dfp\\v201705\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\Dfp\\v201705\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\Dfp\\v201705\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAsset' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\Dfp\\v201705\\Creative',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\Dfp\\v201705\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'LegacyDfpMobileCreative' => 'Google\\AdsApi\\Dfp\\v201705\\LegacyDfpMobileCreative',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201705\\FileError',
      'FlashCreative' => 'Google\\AdsApi\\Dfp\\v201705\\FlashCreative',
      'FlashOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201705\\FlashOverlayCreative',
      'FlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201705\\FlashRedirectCreative',
      'FlashRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201705\\FlashRedirectOverlayCreative',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\Dfp\\v201705\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201705\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\Dfp\\v201705\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201705\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\Dfp\\v201705\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201705\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201705\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201705\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201705\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201705\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201705\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201705\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\Dfp\\v201705\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201705\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\Dfp\\v201705\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201705\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\Dfp\\v201705\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\Dfp\\v201705\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201705\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201705\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\Dfp\\v201705\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201705\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201705\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201705\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201705\\SwiffyConversionError',
      'SwiffyFallbackAsset' => 'Google\\AdsApi\\Dfp\\v201705\\SwiffyFallbackAsset',
      'TemplateCreative' => 'Google\\AdsApi\\Dfp\\v201705\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201705\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\Dfp\\v201705\\ThirdPartyCreative',
      'TrackingUrls' => 'Google\\AdsApi\\Dfp\\v201705\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201705\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201705\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\Dfp\\v201705\\UnsupportedCreative',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201705\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201705\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\Dfp\\v201705\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\Dfp\\v201705\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\Dfp\\v201705\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201705\\VideoRedirectCreative',
      'VpaidLinearCreative' => 'Google\\AdsApi\\Dfp\\v201705\\VpaidLinearCreative',
      'VpaidLinearRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201705\\VpaidLinearRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201705\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getCreativesByStatementResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/CreativeService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201705\Creative[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\CreativePage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\Dfp\v201705\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201705\Creative[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
