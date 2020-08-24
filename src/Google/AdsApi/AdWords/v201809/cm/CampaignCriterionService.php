<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignCriterionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdSchedule' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdSchedule',
      'Address' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Address',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AgeRange',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'CampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignCriterion',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignCriterionError',
      'CampaignCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignCriterionOperation',
      'CampaignCriterionPage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignCriterionPage',
      'CampaignCriterionReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignCriterionReturnValue',
      'Carrier' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Carrier',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ClientTermsError',
      'ConstantOperand' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ConstantOperand',
      'ContentLabel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ContentLabel',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionError',
      'CriterionParameter' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionParameter',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'Function' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MatchingFunction',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FunctionError',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Gender',
      'GeoPoint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\GeoPoint',
      'GeoTargetOperand' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\GeoTargetOperand',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IdError',
      'IncomeOperand' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IncomeOperand',
      'IncomeRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IncomeRange',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'IpBlock' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IpBlock',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Language',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListReturnValue',
      'Location' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Location',
      'LocationExtensionOperand' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LocationExtensionOperand',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileApplication',
      'MobileDevice' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileDevice',
      'NegativeCampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NegativeCampaignCriterion',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'FunctionArgumentOperand' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FunctionArgumentOperand',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatingSystemVersion',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PagingError',
      'Parent' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ParentCriterion',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Placement',
      'PlacesOfInterestOperand' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PlacesOfInterestOperand',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Platform',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Predicate',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductBiddingCategory',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductCustomAttribute',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductDimension',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductOfferId',
      'ProductScope' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductScope',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductTypeFull',
      'Proximity' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Proximity',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectorError',
      'LocationGroups' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LocationGroups',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\String_StringMapEntry',
      'UnknownProductDimension' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UnknownProductDimension',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Vertical',
      'Webpage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Webpage',
      'WebpageCondition' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\WebpageCondition',
      'WebpageParameter' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\WebpageParameter',
      'YouTubeChannel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\YouTubeChannel',
      'YouTubeVideo' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\YouTubeVideo',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/CampaignCriterionService?wsdl')
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
     * Gets campaign criteria.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignCriterionPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Adds, removes or updates campaign criteria.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\CampaignCriterionOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignCriterionReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of campaign criteria that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignCriterionPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
