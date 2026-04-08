<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202602\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202602\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'ActivateCreatives' => 'Google\\AdsApi\\AdManager\\v202602\\ActivateCreatives',
      'AdExchangeCreative' => 'Google\\AdsApi\\AdManager\\v202602\\AdExchangeCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\AdManager\\v202602\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202602\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\AdManager\\v202602\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202602\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\AdManager\\v202602\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202602\\AssetError',
      'AudioCreative' => 'Google\\AdsApi\\AdManager\\v202602\\AudioCreative',
      'AudioRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202602\\AudioRedirectCreative',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'BaseAudioCreative' => 'Google\\AdsApi\\AdManager\\v202602\\BaseAudioCreative',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\BaseCustomFieldValue',
      'BaseImageCreative' => 'Google\\AdsApi\\AdManager\\v202602\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202602\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202602\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\AdManager\\v202602\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\AdManager\\v202602\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\AdManager\\v202602\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAction' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeAction',
      'CreativeAsset' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\AdManager\\v202602\\Creative',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\AdManager\\v202602\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202602\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateValue',
      'DeactivateCreatives' => 'Google\\AdsApi\\AdManager\\v202602\\DeactivateCreatives',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202602\\FileError',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\AdManager\\v202602\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202602\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\AdManager\\v202602\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202602\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\AdManager\\v202602\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202602\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202602\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202602\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202602\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202602\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\AdManager\\v202602\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202602\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\AdManager\\v202602\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202602\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\AdManager\\v202602\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\AdManager\\v202602\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202602\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\AdManager\\v202602\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202602\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202602\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202602\\SwiffyConversionError',
      'TemplateCreative' => 'Google\\AdsApi\\AdManager\\v202602\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\AdManager\\v202602\\ThirdPartyCreative',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202602\\ThirdPartyDataDeclaration',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v202602\\TrackingUrls',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202602\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\AdManager\\v202602\\UnsupportedCreative',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202602\\UpdateResult',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202602\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202602\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\AdManager\\v202602\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\AdManager\\v202602\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\AdManager\\v202602\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202602\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getCreativesByStatementResponse',
      'performCreativeActionResponse' => 'Google\\AdsApi\\AdManager\\v202602\\performCreativeActionResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/CreativeService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202602\Creative[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function createCreatives(array $creatives)
    {
      return $this->__soapCall('createCreatives', array(array('creatives' => $creatives)))->getRval();
    }

    /**
     * Gets a {@link CreativePage} of {@link Creative} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\CreativePage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link Creative} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202602\CreativeAction $creativeAction
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function performCreativeAction(\Google\AdsApi\AdManager\v202602\CreativeAction $creativeAction, \Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeAction', array(array('creativeAction' => $creativeAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202602\Creative[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
