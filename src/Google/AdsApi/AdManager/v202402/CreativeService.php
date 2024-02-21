<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202402\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202402\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202402\\ObjectValue',
      'ActivateCreatives' => 'Google\\AdsApi\\AdManager\\v202402\\ActivateCreatives',
      'AdExchangeCreative' => 'Google\\AdsApi\\AdManager\\v202402\\AdExchangeCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\AdManager\\v202402\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202402\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202402\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202402\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\AdManager\\v202402\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202402\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\AdManager\\v202402\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202402\\AssetError',
      'AudioCreative' => 'Google\\AdsApi\\AdManager\\v202402\\AudioCreative',
      'AudioRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202402\\AudioRedirectCreative',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202402\\AuthenticationError',
      'BaseAudioCreative' => 'Google\\AdsApi\\AdManager\\v202402\\BaseAudioCreative',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202402\\BaseCustomFieldValue',
      'BaseImageCreative' => 'Google\\AdsApi\\AdManager\\v202402\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202402\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202402\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\AdManager\\v202402\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202402\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\AdManager\\v202402\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\AdManager\\v202402\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202402\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202402\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v202402\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAction' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeAction',
      'CreativeAsset' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\AdManager\\v202402\\Creative',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\AdManager\\v202402\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202402\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202402\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202402\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202402\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateValue',
      'DeactivateCreatives' => 'Google\\AdsApi\\AdManager\\v202402\\DeactivateCreatives',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202402\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202402\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202402\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202402\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202402\\FileError',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\AdManager\\v202402\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202402\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\AdManager\\v202402\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202402\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\AdManager\\v202402\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202402\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202402\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202402\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202402\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202402\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202402\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202402\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202402\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202402\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\AdManager\\v202402\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202402\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202402\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202402\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202402\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202402\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202402\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\AdManager\\v202402\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202402\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202402\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\AdManager\\v202402\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\AdManager\\v202402\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202402\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202402\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202402\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\AdManager\\v202402\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202402\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202402\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202402\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202402\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202402\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202402\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202402\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202402\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202402\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202402\\SwiffyConversionError',
      'TemplateCreative' => 'Google\\AdsApi\\AdManager\\v202402\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202402\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202402\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\AdManager\\v202402\\ThirdPartyCreative',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202402\\ThirdPartyDataDeclaration',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v202402\\TrackingUrls',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202402\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202402\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202402\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\AdManager\\v202402\\UnsupportedCreative',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202402\\UpdateResult',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202402\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v202402\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202402\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\AdManager\\v202402\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\AdManager\\v202402\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\AdManager\\v202402\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202402\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202402\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202402\\getCreativesByStatementResponse',
      'performCreativeActionResponse' => 'Google\\AdsApi\\AdManager\\v202402\\performCreativeActionResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202402\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202402/CreativeService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202402\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202402\Creative[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
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
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\CreativePage
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\AdManager\v202402\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link Creative} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202402\CreativeAction $creativeAction
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function performCreativeAction(\Google\AdsApi\AdManager\v202402\CreativeAction $creativeAction, \Google\AdsApi\AdManager\v202402\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeAction', array(array('creativeAction' => $creativeAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\AdManager\v202402\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202402\Creative[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
