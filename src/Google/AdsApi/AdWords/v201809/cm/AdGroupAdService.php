<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupAdService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Ad' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Ad',
      'AdCustomizerError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdCustomizerError',
      'AdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdError',
      'AdGroupAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAd',
      'AdGroupAdCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdCountLimitExceeded',
      'AdGroupAdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdError',
      'AdGroupAdLabel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdLabel',
      'AdGroupAdLabelOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdLabelOperation',
      'AdGroupAdLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdLabelReturnValue',
      'AdGroupAdOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdOperation',
      'AdGroupAdPage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdPage',
      'AdGroupAdPolicySummary' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdPolicySummary',
      'AdGroupAdReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdReturnValue',
      'AdSharingError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdSharingError',
      'AdStrengthInfo' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdStrengthInfo',
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
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LabelAttribute',
      'Audio' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Audio',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'CallOnlyAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CallOnlyAd',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DisplayAttribute',
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
      'Label' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Label',
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
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\String_StringMapEntry',
      'TempAdUnionId' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TempAdUnionId',
      'TemplateAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TemplateAd',
      'TemplateElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TemplateElement',
      'TemplateElementField' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TemplateElementField',
      'TextAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TextAd',
      'TextAsset' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TextAsset',
      'ThirdPartyRedirectAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ThirdPartyRedirectAd',
      'UniversalAppAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UniversalAppAd',
      'GoalOptimizedShoppingAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\GoalOptimizedShoppingAd',
      'UrlData' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlData',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlList',
      'ResponsiveSearchAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ResponsiveSearchAd',
      'Video' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Video',
      'DynamicSearchAd' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DynamicSearchAd',
      'YouTubeVideoAsset' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\YouTubeVideoAsset',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateResponse',
      'mutateLabelResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateLabelResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/AdGroupAdService?wsdl')
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
     * Returns a list of AdGroupAds.
     * AdGroupAds that had been removed are not returned by default.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupAdPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Applies the list of mutate operations (ie. add, set, remove):
     * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
     * {@code adGroupId} must
     * reference an existing ad group. The child {@code Ad} must be sufficiently
     * specified by constructing a concrete ad type (such as {@code TextAd})
     * and setting its fields accordingly.</p>
     * <p>Set - Updates an ad group ad. Except for {@code status},
     * ad group ad fields are not mutable. Status updates are
     * straightforward - the status of the ad group ad is updated as
     * specified. If any other field has changed, it will be ignored. If
     * you want to change any of the fields other than status, you must
     * make a new ad and then remove the old one.</p>
     * <p>Remove - Removes the link between the specified AdGroup and
     * Ad.</p>
     * applying the operation in the input list with the same index. For an
     * add/set operation, the return AdGroupAd will be what is saved to the db.
     * In the case of the remove operation, the return AdGroupAd will simply be
     * an AdGroupAd containing an Ad with the id set to the Ad being removed from
     * the AdGroup.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupAdOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupAdReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Adds labels to the AdGroupAd or removes labels from the AdGroupAd.
     * <p>Add - Apply an existing label to an existing {@linkplain AdGroupAd ad group ad}. The
     * {@code adGroupId} and {@code adId} must reference an existing
     * {@linkplain AdGroupAd ad group ad}. The {@code labelId} must reference an existing
     * {@linkplain Label label}.
     * <p>Remove - Removes the link between the specified {@linkplain AdGroupAd ad group ad} and
     * {@linkplain Label label}.
     * applying the operation in the input list with the same index. For an
     * add operation, the returned AdGroupAdLabel contains the AdGroupId, AdId and the LabelId.
     * In the case of a remove operation, the returned AdGroupAdLabel will only have AdGroupId and
     * AdId.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupAdLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupAdLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns a list of AdGroupAds based on the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupAdPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
