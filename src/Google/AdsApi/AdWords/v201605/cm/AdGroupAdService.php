<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupAdService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Ad' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Ad',
      'AdCustomizerError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdCustomizerError',
      'AdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdError',
      'AdGroupAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAd',
      'AdGroupAdCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdCountLimitExceeded',
      'AdGroupAdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdError',
      'AdGroupAdExperimentData' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdExperimentData',
      'AdGroupAdLabel' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdLabel',
      'AdGroupAdLabelOperation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdLabelOperation',
      'AdGroupAdLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdLabelReturnValue',
      'AdGroupAdOperation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdOperation',
      'AdGroupAdPage' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdPage',
      'AdGroupAdReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdReturnValue',
      'AdUnionId' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdUnionId',
      'AdUrlUpgrade' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdUrlUpgrade',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiException',
      'AppUrl' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AppUrl',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\LabelAttribute',
      'Audio' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Audio',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthorizationError',
      'CallOnlyAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CallOnlyAd',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DisplayAttribute',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ClientTermsError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateRange',
      'DeprecatedAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DeprecatedAd',
      'Dimensions' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Dimensions',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DistinctError',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityNotFound',
      'ExemptionRequest' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ExemptionRequest',
      'ExpandedTextAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ExpandedTextAd',
      'ExperimentError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ExperimentError',
      'FeedAttributeReferenceError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedAttributeReferenceError',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ForwardCompatibilityError',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FunctionError',
      'FunctionParsingError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FunctionParsingError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\IdError',
      'Image' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Image',
      'ImageAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ImageAd',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\InternalApiError',
      'Label' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Label',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ListReturnValue',
      'Media' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Media',
      'MediaBundle' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MediaBundle',
      'MediaBundleError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MediaBundleError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MediaError',
      'Media_Size_DimensionsMapEntry' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Media_Size_DimensionsMapEntry',
      'Media_Size_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Media_Size_StringMapEntry',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PagingError',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Predicate',
      'ProductAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductAd',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequiredError',
      'ResponsiveDisplayAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ResponsiveDisplayAd',
      'RichMediaAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RichMediaAd',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\String_StringMapEntry',
      'TempAdUnionId' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TempAdUnionId',
      'TemplateAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TemplateAd',
      'TemplateElement' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TemplateElement',
      'TemplateElementField' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TemplateElementField',
      'TextAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TextAd',
      'ThirdPartyRedirectAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ThirdPartyRedirectAd',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\UrlError',
      'Video' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Video',
      'DynamicSearchAd' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DynamicSearchAd',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201605/AdGroupAdService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201605\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupAdPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201605\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->rval;
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
     * @param \Google\AdsApi\AdWords\v201605\cm\AdGroupAdOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupAdReturnValue
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
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
     * @param \Google\AdsApi\AdWords\v201605\cm\AdGroupAdLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupAdLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->rval;
    }

    /**
     * Returns a list of AdGroupAds based on the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupAdPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

    /**
     * Upgrades the url for a set of ads.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\AdUrlUpgrade[] $operations
     * @return \Google\AdsApi\AdWords\v201605\cm\Ad[]
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function upgradeUrl(array $operations)
    {
      return $this->__soapCall('upgradeUrl', array(array('operations' => $operations)))->rval;
    }

}
