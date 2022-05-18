<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202205\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202205\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'ActivateCreatives' => 'Google\\AdsApi\\AdManager\\v202205\\ActivateCreatives',
      'AdExchangeCreative' => 'Google\\AdsApi\\AdManager\\v202205\\AdExchangeCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\AdManager\\v202205\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202205\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\AdManager\\v202205\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202205\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\AdManager\\v202205\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202205\\AssetError',
      'AudioCreative' => 'Google\\AdsApi\\AdManager\\v202205\\AudioCreative',
      'AudioRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202205\\AudioRedirectCreative',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'BaseAudioCreative' => 'Google\\AdsApi\\AdManager\\v202205\\BaseAudioCreative',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\BaseCustomFieldValue',
      'BaseImageCreative' => 'Google\\AdsApi\\AdManager\\v202205\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202205\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202205\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\AdManager\\v202205\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\AdManager\\v202205\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\AdManager\\v202205\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAction' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeAction',
      'CreativeAsset' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\AdManager\\v202205\\Creative',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\AdManager\\v202205\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'DeactivateCreatives' => 'Google\\AdsApi\\AdManager\\v202205\\DeactivateCreatives',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202205\\FileError',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\AdManager\\v202205\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202205\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\AdManager\\v202205\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202205\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\AdManager\\v202205\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202205\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202205\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202205\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202205\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202205\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\AdManager\\v202205\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202205\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202205\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\AdManager\\v202205\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202205\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\AdManager\\v202205\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\AdManager\\v202205\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202205\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\AdManager\\v202205\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202205\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202205\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202205\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202205\\SwiffyConversionError',
      'TemplateCreative' => 'Google\\AdsApi\\AdManager\\v202205\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\AdManager\\v202205\\ThirdPartyCreative',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202205\\ThirdPartyDataDeclaration',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v202205\\TrackingUrls',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202205\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202205\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\AdManager\\v202205\\UnsupportedCreative',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202205\\UpdateResult',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202205\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202205\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\AdManager\\v202205\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\AdManager\\v202205\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\AdManager\\v202205\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202205\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getCreativesByStatementResponse',
      'performCreativeActionResponse' => 'Google\\AdsApi\\AdManager\\v202205\\performCreativeActionResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/CreativeService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202205\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202205\Creative[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
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
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\CreativePage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link Creative} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202205\CreativeAction $creativeAction
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function performCreativeAction(\Google\AdsApi\AdManager\v202205\CreativeAction $creativeAction, \Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeAction', array(array('creativeAction' => $creativeAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202205\Creative[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
