<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201805\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201805\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'AdExchangeCreative' => 'Google\\AdsApi\\Dfp\\v201805\\AdExchangeCreative',
      'AdMobBackfillCreative' => 'Google\\AdsApi\\Dfp\\v201805\\AdMobBackfillCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\Dfp\\v201805\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201805\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\Dfp\\v201805\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201805\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\Dfp\\v201805\\Asset',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201805\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\BaseCustomFieldValue',
      'BaseFlashCreative' => 'Google\\AdsApi\\Dfp\\v201805\\BaseFlashCreative',
      'BaseFlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201805\\BaseFlashRedirectCreative',
      'BaseImageCreative' => 'Google\\AdsApi\\Dfp\\v201805\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201805\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201805\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\Dfp\\v201805\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\Dfp\\v201805\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\Dfp\\v201805\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAsset' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\Dfp\\v201805\\Creative',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\Dfp\\v201805\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201805\\FileError',
      'FlashCreative' => 'Google\\AdsApi\\Dfp\\v201805\\FlashCreative',
      'FlashOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201805\\FlashOverlayCreative',
      'FlashRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201805\\FlashRedirectCreative',
      'FlashRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201805\\FlashRedirectOverlayCreative',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\Dfp\\v201805\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\Dfp\\v201805\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\Dfp\\v201805\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201805\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\Dfp\\v201805\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201805\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201805\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201805\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\Dfp\\v201805\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201805\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\Dfp\\v201805\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201805\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\Dfp\\v201805\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201805\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\Dfp\\v201805\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\Dfp\\v201805\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\Dfp\\v201805\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\Dfp\\v201805\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201805\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201805\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201805\\SwiffyConversionError',
      'SwiffyFallbackAsset' => 'Google\\AdsApi\\Dfp\\v201805\\SwiffyFallbackAsset',
      'TemplateCreative' => 'Google\\AdsApi\\Dfp\\v201805\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\Dfp\\v201805\\ThirdPartyCreative',
      'TrackingUrls' => 'Google\\AdsApi\\Dfp\\v201805\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\Dfp\\v201805\\UnsupportedCreative',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\Dfp\\v201805\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201805\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\Dfp\\v201805\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\Dfp\\v201805\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\Dfp\\v201805\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\Dfp\\v201805\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getCreativesByStatementResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/CreativeService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201805\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201805\Creative[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
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
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\CreativePage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\Dfp\v201805\Creative[] $creatives
     * @return \Google\AdsApi\Dfp\v201805\Creative[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
