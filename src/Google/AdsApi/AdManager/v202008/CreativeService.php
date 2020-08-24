<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'BaseDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202008\\BaseDynamicAllocationCreative',
      'BaseCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202008\\BaseCreativeTemplateVariableValue',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202008\\ObjectValue',
      'ActivateCreatives' => 'Google\\AdsApi\\AdManager\\v202008\\ActivateCreatives',
      'AdExchangeCreative' => 'Google\\AdsApi\\AdManager\\v202008\\AdExchangeCreative',
      'AdSenseCreative' => 'Google\\AdsApi\\AdManager\\v202008\\AdSenseCreative',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202008\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202008\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202008\\AppliedLabel',
      'AspectRatioImageCreative' => 'Google\\AdsApi\\AdManager\\v202008\\AspectRatioImageCreative',
      'AssetCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202008\\AssetCreativeTemplateVariableValue',
      'Asset' => 'Google\\AdsApi\\AdManager\\v202008\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202008\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202008\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202008\\BaseCustomFieldValue',
      'BaseImageCreative' => 'Google\\AdsApi\\AdManager\\v202008\\BaseImageCreative',
      'BaseImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202008\\BaseImageRedirectCreative',
      'BaseRichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202008\\BaseRichMediaStudioCreative',
      'BaseVideoCreative' => 'Google\\AdsApi\\AdManager\\v202008\\BaseVideoCreative',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202008\\BooleanValue',
      'ClickTag' => 'Google\\AdsApi\\AdManager\\v202008\\ClickTag',
      'ClickTrackingCreative' => 'Google\\AdsApi\\AdManager\\v202008\\ClickTrackingCreative',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202008\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeAction' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeAction',
      'CreativeAsset' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeAsset',
      'CustomCreativeAsset' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCreativeAsset',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeAssetMacroError',
      'Creative' => 'Google\\AdsApi\\AdManager\\v202008\\Creative',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeError',
      'CreativePage' => 'Google\\AdsApi\\AdManager\\v202008\\CreativePage',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplateOperationError',
      'CustomCreative' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCreative',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCreativeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202008\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202008\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202008\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateValue',
      'DeactivateCreatives' => 'Google\\AdsApi\\AdManager\\v202008\\DeactivateCreatives',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202008\\DropDownCustomFieldValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202008\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202008\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202008\\FileError',
      'HasDestinationUrlCreative' => 'Google\\AdsApi\\AdManager\\v202008\\HasDestinationUrlCreative',
      'HasHtmlSnippetDynamicAllocationCreative' => 'Google\\AdsApi\\AdManager\\v202008\\HasHtmlSnippetDynamicAllocationCreative',
      'Html5Creative' => 'Google\\AdsApi\\AdManager\\v202008\\Html5Creative',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202008\\HtmlBundleProcessorError',
      'ImageCreative' => 'Google\\AdsApi\\AdManager\\v202008\\ImageCreative',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202008\\ImageError',
      'ImageOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202008\\ImageOverlayCreative',
      'ImageRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202008\\ImageRedirectCreative',
      'ImageRedirectOverlayCreative' => 'Google\\AdsApi\\AdManager\\v202008\\ImageRedirectOverlayCreative',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202008\\InternalApiError',
      'InternalRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202008\\InternalRedirectCreative',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202008\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202008\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LabelEntityAssociationError',
      'LegacyDfpCreative' => 'Google\\AdsApi\\AdManager\\v202008\\LegacyDfpCreative',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemCreativeAssociationError',
      'LongCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202008\\LongCreativeTemplateVariableValue',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202008\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202008\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202008\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202008\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202008\\PermissionError',
      'ProgrammaticCreative' => 'Google\\AdsApi\\AdManager\\v202008\\ProgrammaticCreative',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202008\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202008\\RangeError',
      'RedirectAsset' => 'Google\\AdsApi\\AdManager\\v202008\\RedirectAsset',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredSizeError',
      'RichMediaStudioChildAssetProperty' => 'Google\\AdsApi\\AdManager\\v202008\\RichMediaStudioChildAssetProperty',
      'RichMediaStudioCreative' => 'Google\\AdsApi\\AdManager\\v202008\\RichMediaStudioCreative',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202008\\ServerError',
      'SetTopBoxCreative' => 'Google\\AdsApi\\AdManager\\v202008\\SetTopBoxCreative',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202008\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202008\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202008\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202008\\StatementError',
      'StringCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202008\\StringCreativeTemplateVariableValue',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202008\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202008\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202008\\SwiffyConversionError',
      'TemplateCreative' => 'Google\\AdsApi\\AdManager\\v202008\\TemplateCreative',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202008\\TextValue',
      'ThirdPartyCreative' => 'Google\\AdsApi\\AdManager\\v202008\\ThirdPartyCreative',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202008\\ThirdPartyDataDeclaration',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v202008\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202008\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202008\\UniqueError',
      'UnsupportedCreative' => 'Google\\AdsApi\\AdManager\\v202008\\UnsupportedCreative',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202008\\UpdateResult',
      'UrlCreativeTemplateVariableValue' => 'Google\\AdsApi\\AdManager\\v202008\\UrlCreativeTemplateVariableValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v202008\\Value',
      'VastRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202008\\VastRedirectCreative',
      'VideoCreative' => 'Google\\AdsApi\\AdManager\\v202008\\VideoCreative',
      'VideoMetadata' => 'Google\\AdsApi\\AdManager\\v202008\\VideoMetadata',
      'VideoRedirectAsset' => 'Google\\AdsApi\\AdManager\\v202008\\VideoRedirectAsset',
      'VideoRedirectCreative' => 'Google\\AdsApi\\AdManager\\v202008\\VideoRedirectCreative',
      'createCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202008\\createCreativesResponse',
      'getCreativesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getCreativesByStatementResponse',
      'performCreativeActionResponse' => 'Google\\AdsApi\\AdManager\\v202008\\performCreativeActionResponse',
      'updateCreativesResponse' => 'Google\\AdsApi\\AdManager\\v202008\\updateCreativesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202008/CreativeService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202008\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202008\Creative[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
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
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\CreativePage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getCreativesByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link Creative} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202008\CreativeAction $creativeAction
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function performCreativeAction(\Google\AdsApi\AdManager\v202008\CreativeAction $creativeAction, \Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeAction', array(array('creativeAction' => $creativeAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param \Google\AdsApi\AdManager\v202008\Creative[] $creatives
     * @return \Google\AdsApi\AdManager\v202008\Creative[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function updateCreatives(array $creatives)
    {
      return $this->__soapCall('updateCreatives', array(array('creatives' => $creatives)))->getRval();
    }

}
