<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Ad' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Ad',
      'AdCampaignAdSubProductType' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdCampaignAdSubProductType',
      'AdCampaignAdSubProductTypeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdCampaignAdSubProductTypeError',
      'AdCampaignAdSubProductTypeOperation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdCampaignAdSubProductTypeOperation',
      'AdCampaignAdSubProductTypeReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdCampaignAdSubProductTypeReturnValue',
      'AdCustomizerError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdCustomizerError',
      'AdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdError',
      'AdOperation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdOperation',
      'AdPage' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdPage',
      'AdReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdReturnValue',
      'AdSharingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdSharingError',
      'AdUnionId' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdUnionId',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiException',
      'AppUrl' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AppUrl',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApplicationException',
      'Asset' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Asset',
      'AssetError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AssetError',
      'AssetLink' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AssetLink',
      'AssetLinkError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AssetLinkError',
      'AssetPolicySummaryInfo' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AssetPolicySummaryInfo',
      'Audio' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Audio',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthorizationError',
      'CallOnlyAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CallOnlyAd',
      'CertificateDomainMismatchInCountryConstraint' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CertificateDomainMismatchInCountryConstraint',
      'CertificateMissingConstraint' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CertificateMissingConstraint',
      'CertificateMissingInCountryConstraint' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CertificateMissingInCountryConstraint',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CollectionSizeError',
      'CountryConstraint' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CountryConstraint',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateRange',
      'DeprecatedAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DeprecatedAd',
      'Dimensions' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Dimensions',
      'DisplayCallToAction' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DisplayCallToAction',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DistinctError',
      'DynamicSettings' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DynamicSettings',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityNotFound',
      'ExemptionRequest' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ExemptionRequest',
      'ExpandedDynamicSearchAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ExpandedDynamicSearchAd',
      'ExpandedTextAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ExpandedTextAd',
      'FeedAttributeReferenceError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FeedAttributeReferenceError',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FieldPathElement',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ForwardCompatibilityError',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FunctionError',
      'FunctionParsingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FunctionParsingError',
      'GmailAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\GmailAd',
      'GmailTeaser' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\GmailTeaser',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IdError',
      'Image' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Image',
      'ImageAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ImageAd',
      'ImageAsset' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ImageAsset',
      'ImageDimensionInfo' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ImageDimensionInfo',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ListReturnValue',
      'Media' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Media',
      'MediaBundle' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MediaBundle',
      'MediaBundleError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MediaBundleError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MediaError',
      'Media_Size_DimensionsMapEntry' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Media_Size_DimensionsMapEntry',
      'Media_Size_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Media_Size_StringMapEntry',
      'MultiAssetResponsiveDisplayAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MultiAssetResponsiveDisplayAd',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PagingError',
      'PolicyFindingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyFindingError',
      'PolicySummary' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicySummary',
      'PolicySummaryInfo' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicySummaryInfo',
      'PolicyTopicConstraint' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyTopicConstraint',
      'PolicyTopicEntry' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyTopicEntry',
      'PolicyTopicEvidence' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyTopicEvidence',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Predicate',
      'ProductAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductAd',
      'ProductImage' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductImage',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequiredError',
      'ResellerConstraint' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ResellerConstraint',
      'ResponsiveDisplayAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ResponsiveDisplayAd',
      'RichMediaAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RichMediaAd',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SelectorError',
      'ShowcaseAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ShowcaseAd',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringLengthError',
      'TempAdUnionId' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TempAdUnionId',
      'TemplateAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TemplateAd',
      'TemplateElement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TemplateElement',
      'TemplateElementField' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TemplateElementField',
      'TextAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TextAd',
      'TextAsset' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TextAsset',
      'ThirdPartyRedirectAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ThirdPartyRedirectAd',
      'UrlData' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\UrlData',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\UrlList',
      'ResponsiveSearchAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ResponsiveSearchAd',
      'Video' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Video',
      'DynamicSearchAd' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DynamicSearchAd',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201806/AdService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201806\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201806\cm\AdPage
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201806\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Applies the list of mutate operations. For {@link AdService}, only SET operations are allowed.
     *
     * operation in the input list with the same index. The returned {@link Ad}s will be what is
     * saved.
     *
     * @param \Google\AdsApi\AdWords\v201806\cm\AdOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201806\cm\AdReturnValue
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}
