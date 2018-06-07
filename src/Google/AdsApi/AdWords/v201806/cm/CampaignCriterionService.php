<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignCriterionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdSchedule' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdSchedule',
      'Address' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Address',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AgeRange',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthorizationError',
      'CampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignCriterion',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignCriterionError',
      'CampaignCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignCriterionOperation',
      'CampaignCriterionPage' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignCriterionPage',
      'CampaignCriterionReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignCriterionReturnValue',
      'Carrier' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Carrier',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ClientTermsError',
      'ConstantOperand' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ConstantOperand',
      'ContentLabel' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ContentLabel',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionError',
      'CriterionParameter' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionParameter',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DatabaseError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FieldPathElement',
      'Function' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MatchingFunction',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FunctionError',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Gender',
      'GeoPoint' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\GeoPoint',
      'GeoTargetOperand' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\GeoTargetOperand',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IdError',
      'IncomeOperand' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IncomeOperand',
      'IncomeRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IncomeRange',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\InternalApiError',
      'IpBlock' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IpBlock',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Language',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ListReturnValue',
      'Location' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Location',
      'LocationExtensionOperand' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\LocationExtensionOperand',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MobileApplication',
      'MobileDevice' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MobileDevice',
      'NegativeCampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NegativeCampaignCriterion',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NullError',
      'FunctionArgumentOperand' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FunctionArgumentOperand',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperatingSystemVersion',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PagingError',
      'Parent' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ParentCriterion',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Placement',
      'PlacesOfInterestOperand' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PlacesOfInterestOperand',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Platform',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Predicate',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductBiddingCategory',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductCustomAttribute',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductDimension',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductOfferId',
      'ProductScope' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductScope',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductTypeFull',
      'Proximity' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Proximity',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SelectorError',
      'LocationGroups' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\LocationGroups',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\String_StringMapEntry',
      'UnknownProductDimension' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\UnknownProductDimension',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Vertical',
      'Webpage' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Webpage',
      'WebpageCondition' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\WebpageCondition',
      'WebpageParameter' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\WebpageParameter',
      'YouTubeChannel' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\YouTubeChannel',
      'YouTubeVideo' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\YouTubeVideo',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201806/CampaignCriterionService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201806\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignCriterionPage
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201806\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Adds, removes or updates campaign criteria.
     *
     * @param \Google\AdsApi\AdWords\v201806\cm\CampaignCriterionOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignCriterionReturnValue
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of campaign criteria that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignCriterionPage
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
