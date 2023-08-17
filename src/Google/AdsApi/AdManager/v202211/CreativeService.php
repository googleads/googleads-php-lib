<?php

namespace Google\AdsApi\AdManager\v202211;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202211\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202211\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202211\\ObjectValue',
      'ActivateCreatives' => 'Google\\AdsApi\\AdManager\\v202211\\ActivateCreatives',
      'AdExchangeCreative' => 'Google\\AdsApi\\AdManager\\v202211\\AdExchangeCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\AdManager\\v202211\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202211\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202211\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202211\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\AdManager\\v202211\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202211\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\AdManager\\v202211\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202211\\AssetError',
      'AudioCreative' => 'Google\\AdsApi\\AdManager\\v202211\\AudioCreative',
      'AudioRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202211\\AudioRedirectCreative',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202211\\AuthenticationError',
      'BaseAudioCreative' => 'Google\\AdsApi\\AdManager\\v202211\\BaseAudioCreative',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202211\\BaseCustomFieldValue',
      'BaseImageCreative' => 'Google\\AdsApi\\AdManager\\v202211\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202211\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202211\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\AdManager\\v202211\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202211\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\AdManager\\v202211\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\AdManager\\v202211\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202211\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202211\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v202211\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAction' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeAction',
      'CreativeAsset' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\AdManager\\v202211\\Creative',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\AdManager\\v202211\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202211\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202211\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202211\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202211\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateValue',
      'DeactivateCreatives' => 'Google\\AdsApi\\AdManager\\v202211\\DeactivateCreatives',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202211\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202211\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202211\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202211\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202211\\FileError',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\AdManager\\v202211\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202211\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\AdManager\\v202211\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202211\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\AdManager\\v202211\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202211\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202211\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202211\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202211\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202211\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202211\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202211\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202211\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202211\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\AdManager\\v202211\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202211\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202211\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202211\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202211\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202211\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202211\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\AdManager\\v202211\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202211\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202211\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\AdManager\\v202211\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\AdManager\\v202211\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202211\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202211\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202211\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\AdManager\\v202211\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202211\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202211\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202211\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202211\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202211\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202211\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202211\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202211\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202211\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202211\\SwiffyConversionError',
      'TemplateCreative' => 'Google\\AdsApi\\AdManager\\v202211\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202211\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202211\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\AdManager\\v202211\\ThirdPartyCreative',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202211\\ThirdPartyDataDeclaration',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v202211\\TrackingUrls',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202211\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202211\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202211\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\AdManager\\v202211\\UnsupportedCreative',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202211\\UpdateResult',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202211\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v202211\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202211\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\AdManager\\v202211\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\AdManager\\v202211\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\AdManager\\v202211\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202211\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202211\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202211\\getCreativesByStatementResponse',
      'performCreativeActionResponse' => 'Google\\AdsApi\\AdManager\\v202211\\performCreativeActionResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202211\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202211/CreativeService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202211\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202211\Creative[]
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
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
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\CreativePage
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link Creative} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202211\CreativeAction $creativeAction
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function performCreativeAction(\Google\AdsApi\AdManager\v202211\CreativeAction $creativeAction, \Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeAction', array(array('creativeAction' => $creativeAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\AdManager\v202211\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202211\Creative[]
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
