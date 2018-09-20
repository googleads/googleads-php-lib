<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Ad' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Ad',
      'AdCampaignAdSubProductType' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdCampaignAdSubProductType',
      'AdCampaignAdSubProductTypeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdCampaignAdSubProductTypeError',
      'AdCampaignAdSubProductTypeOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdCampaignAdSubProductTypeOperation',
      'AdCampaignAdSubProductTypeReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdCampaignAdSubProductTypeReturnValue',
      'AdCustomizerError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdCustomizerError',
      'AdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdError',
      'AdOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdOperation',
      'AdPage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdPage',
      'AdReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdReturnValue',
      'AdSharingError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdSharingError',
      'AdUnionId' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdUnionId',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'AppUrl' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AppUrl',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'Asset' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AssetError',
      'AssetLink' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AssetLink',
      'AssetLinkError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AssetLinkError',
      'AssetPolicySummaryInfo' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AssetPolicySummaryInfo',
      'Audio' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Audio',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'CallOnlyAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CallOnlyAd',
      'CertificateDomainMismatchConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateDomainMismatchConstraint',
      'CertificateDomainMismatchInCountryConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateDomainMismatchInCountryConstraint',
      'CertificateMissingConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateMissingConstraint',
      'CertificateMissingInCountryConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateMissingInCountryConstraint',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CollectionSizeError',
      'CountryConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CountryConstraint',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DeprecatedAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DeprecatedAd',
      'Dimensions' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Dimensions',
      'DisplayCallToAction' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DisplayCallToAction',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'DynamicSettings' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DynamicSettings',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityNotFound',
      'ExemptionRequest' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ExemptionRequest',
      'ExpandedDynamicSearchAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ExpandedDynamicSearchAd',
      'ExpandedTextAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ExpandedTextAd',
      'FeedAttributeReferenceError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FeedAttributeReferenceError',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ForwardCompatibilityError',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FunctionError',
      'FunctionParsingError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FunctionParsingError',
      'GmailAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\GmailAd',
      'GmailTeaser' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\GmailTeaser',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IdError',
      'Image' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Image',
      'ImageAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ImageAd',
      'ImageAsset' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ImageAsset',
      'ImageDimensionInfo' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ImageDimensionInfo',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListReturnValue',
      'Media' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Media',
      'MediaBundle' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MediaBundle',
      'MediaBundleAsset' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MediaBundleAsset',
      'MediaBundleError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MediaBundleError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MediaError',
      'Media_Size_DimensionsMapEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Media_Size_DimensionsMapEntry',
      'Media_Size_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Media_Size_StringMapEntry',
      'MultiAssetResponsiveDisplayAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MultiAssetResponsiveDisplayAd',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PagingError',
      'PolicyFindingError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyFindingError',
      'PolicySummary' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicySummary',
      'PolicySummaryInfo' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicySummaryInfo',
      'PolicyTopicConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyTopicConstraint',
      'PolicyTopicEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyTopicEntry',
      'PolicyTopicEvidence' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyTopicEvidence',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Predicate',
      'ProductAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductAd',
      'ProductImage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductImage',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'ResellerConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ResellerConstraint',
      'ResponsiveDisplayAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ResponsiveDisplayAd',
      'RichMediaAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RichMediaAd',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectorError',
      'ShowcaseAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ShowcaseAd',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'TempAdUnionId' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TempAdUnionId',
      'TemplateAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TemplateAd',
      'TemplateElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TemplateElement',
      'TemplateElementField' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TemplateElementField',
      'TextAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TextAd',
      'TextAsset' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TextAsset',
      'ThirdPartyRedirectAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ThirdPartyRedirectAd',
      'UniversalAppAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UniversalAppAd',
      'UrlData' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlData',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlList',
      'ResponsiveSearchAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ResponsiveSearchAd',
      'Video' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Video',
      'DynamicSearchAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DynamicSearchAd',
      'YouTubeVideoAsset' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\YouTubeVideoAsset',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/AdService?wsdl')
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
     * Returns a list of {@link Ad}s.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\cm\AdPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Applies the list of mutate operations. For {@link AdService}, only SET operations are allowed.
     *
     * operation in the input list with the same index. The returned {@link Ad}s will be what is
     * saved.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\AdOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\AdReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}
