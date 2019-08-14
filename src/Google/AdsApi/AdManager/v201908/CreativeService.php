<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v201908\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201908\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201908\\ObjectValue',
      'AdExchangeCreative' => 'Google\\AdsApi\\AdManager\\v201908\\AdExchangeCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\AdManager\\v201908\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201908\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201908\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201908\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\AdManager\\v201908\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201908\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\AdManager\\v201908\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v201908\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201908\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201908\\BaseCustomFieldValue',
      'BaseImageCreative' => 'Google\\AdsApi\\AdManager\\v201908\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201908\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v201908\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\AdManager\\v201908\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201908\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\AdManager\\v201908\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\AdManager\\v201908\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201908\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAsset' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\AdManager\\v201908\\Creative',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\AdManager\\v201908\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201908\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201908\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201908\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201908\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateValue',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201908\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201908\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201908\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201908\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v201908\\FileError',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\AdManager\\v201908\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v201908\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\AdManager\\v201908\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v201908\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\AdManager\\v201908\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201908\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\AdManager\\v201908\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201908\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v201908\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201908\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201908\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v201908\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201908\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201908\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\AdManager\\v201908\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201908\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201908\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201908\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201908\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201908\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201908\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\AdManager\\v201908\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201908\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201908\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\AdManager\\v201908\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\AdManager\\v201908\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v201908\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201908\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\AdManager\\v201908\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201908\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201908\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201908\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201908\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201908\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201908\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201908\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v201908\\SwiffyConversionError',
      'TemplateCreative' => 'Google\\AdsApi\\AdManager\\v201908\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201908\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\AdManager\\v201908\\ThirdPartyCreative',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v201908\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201908\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201908\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\AdManager\\v201908\\UnsupportedCreative',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v201908\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v201908\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201908\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\AdManager\\v201908\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\AdManager\\v201908\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\AdManager\\v201908\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\AdManager\\v201908\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\AdManager\\v201908\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getCreativesByStatementResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\AdManager\\v201908\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201908/CreativeService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201908\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v201908\Creative[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
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
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\CreativePage
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\AdManager\v201908\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\AdManager\v201908\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v201908\Creative[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
