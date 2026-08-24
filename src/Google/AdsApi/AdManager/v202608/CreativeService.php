<?php

namespace Google\AdsApi\AdManager\v202608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202608\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202608\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202608\\ObjectValue',
      'ActivateCreatives' => 'Google\\AdsApi\\AdManager\\v202608\\ActivateCreatives',
      'AdExchangeCreative' => 'Google\\AdsApi\\AdManager\\v202608\\AdExchangeCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\AdManager\\v202608\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202608\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202608\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\AdManager\\v202608\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202608\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\AdManager\\v202608\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202608\\AssetError',
      'AudioCreative' => 'Google\\AdsApi\\AdManager\\v202608\\AudioCreative',
      'AudioRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202608\\AudioRedirectCreative',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202608\\AuthenticationError',
      'BaseAudioCreative' => 'Google\\AdsApi\\AdManager\\v202608\\BaseAudioCreative',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202608\\BaseCustomFieldValue',
      'BaseImageCreative' => 'Google\\AdsApi\\AdManager\\v202608\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202608\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202608\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\AdManager\\v202608\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202608\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\AdManager\\v202608\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\AdManager\\v202608\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202608\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v202608\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAction' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeAction',
      'CreativeAsset' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\AdManager\\v202608\\Creative',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\AdManager\\v202608\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202608\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202608\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202608\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202608\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateValue',
      'DeactivateCreatives' => 'Google\\AdsApi\\AdManager\\v202608\\DeactivateCreatives',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202608\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202608\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202608\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202608\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202608\\FileError',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\AdManager\\v202608\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202608\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\AdManager\\v202608\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202608\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\AdManager\\v202608\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202608\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202608\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202608\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202608\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202608\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202608\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202608\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202608\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202608\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\AdManager\\v202608\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202608\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202608\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202608\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\AdManager\\v202608\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202608\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\AdManager\\v202608\\RedirectAsset',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202608\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\AdManager\\v202608\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202608\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202608\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\AdManager\\v202608\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202608\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202608\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202608\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202608\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202608\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202608\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202608\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202608\\SwiffyConversionError',
      'TemplateCreative' => 'Google\\AdsApi\\AdManager\\v202608\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202608\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\AdManager\\v202608\\ThirdPartyCreative',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202608\\ThirdPartyDataDeclaration',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v202608\\TrackingUrls',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202608\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202608\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202608\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\AdManager\\v202608\\UnsupportedCreative',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202608\\UpdateResult',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202608\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v202608\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202608\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\AdManager\\v202608\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\AdManager\\v202608\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\AdManager\\v202608\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202608\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202608\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202608\\getCreativesByStatementResponse',
      'performCreativeActionResponse' => 'Google\\AdsApi\\AdManager\\v202608\\performCreativeActionResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202608\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202608/CreativeService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202608\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202608\Creative[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
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
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\CreativePage
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\AdManager\v202608\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link Creative} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202608\CreativeAction $creativeAction
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function performCreativeAction(\Google\AdsApi\AdManager\v202608\CreativeAction $creativeAction, \Google\AdsApi\AdManager\v202608\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeAction', array(array('creativeAction' => $creativeAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\AdManager\v202608\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202608\Creative[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
