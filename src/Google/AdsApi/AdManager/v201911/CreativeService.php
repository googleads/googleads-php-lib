<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v201911\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201911\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'AdExchangeCreative' => 'Google\\AdsApi\\AdManager\\v201911\\AdExchangeCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\AdManager\\v201911\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201911\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\AdManager\\v201911\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201911\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\AdManager\\v201911\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v201911\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\BaseCustomFieldValue',
      'BaseImageCreative' => 'Google\\AdsApi\\AdManager\\v201911\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201911\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v201911\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\AdManager\\v201911\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\AdManager\\v201911\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\AdManager\\v201911\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAsset' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\AdManager\\v201911\\Creative',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\AdManager\\v201911\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v201911\\FileError',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\AdManager\\v201911\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v201911\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\AdManager\\v201911\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v201911\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\AdManager\\v201911\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201911\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\AdManager\\v201911\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201911\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v201911\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201911\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\AdManager\\v201911\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201911\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201911\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\AdManager\\v201911\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201911\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\AdManager\\v201911\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\AdManager\\v201911\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v201911\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\AdManager\\v201911\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201911\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201911\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201911\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v201911\\SwiffyConversionError',
      'TemplateCreative' => 'Google\\AdsApi\\AdManager\\v201911\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\AdManager\\v201911\\ThirdPartyCreative',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v201911\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201911\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\AdManager\\v201911\\UnsupportedCreative',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201911\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201911\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\AdManager\\v201911\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\AdManager\\v201911\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\AdManager\\v201911\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201911\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\AdManager\\v201911\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getCreativesByStatementResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\AdManager\\v201911\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/CreativeService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201911\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v201911\Creative[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
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
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\CreativePage
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\AdManager\v201911\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v201911\Creative[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
