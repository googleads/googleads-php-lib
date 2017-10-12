<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignCriterionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdSchedule' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AdSchedule',
      'Address' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Address',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AgeRange',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthorizationError',
      'CampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignCriterion',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignCriterionError',
      'CampaignCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignCriterionOperation',
      'CampaignCriterionPage' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignCriterionPage',
      'CampaignCriterionReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignCriterionReturnValue',
      'Carrier' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Carrier',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ClientTermsError',
      'ConstantOperand' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ConstantOperand',
      'ContentLabel' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ContentLabel',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CriterionError',
      'CriterionParameter' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CriterionParameter',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DatabaseError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FieldPathElement',
      'Function' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MatchingFunction',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FunctionError',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Gender',
      'GeoPoint' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\GeoPoint',
      'GeoTargetOperand' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\GeoTargetOperand',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IdError',
      'IncomeOperand' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IncomeOperand',
      'IncomeRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IncomeRange',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\InternalApiError',
      'IpBlock' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IpBlock',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Language',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ListReturnValue',
      'Location' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Location',
      'LocationExtensionOperand' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LocationExtensionOperand',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MobileApplication',
      'MobileDevice' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MobileDevice',
      'NegativeCampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NegativeCampaignCriterion',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NullError',
      'FunctionArgumentOperand' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FunctionArgumentOperand',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperatingSystemVersion',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PagingError',
      'Parent' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ParentCriterion',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Placement',
      'PlacesOfInterestOperand' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PlacesOfInterestOperand',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Platform',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Predicate',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductBiddingCategory',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductCustomAttribute',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductDimension',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductOfferId',
      'ProductScope' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductScope',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ProductTypeFull',
      'Proximity' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Proximity',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SelectorError',
      'LocationGroups' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LocationGroups',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\String_StringMapEntry',
      'UnknownProductDimension' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\UnknownProductDimension',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Vertical',
      'Webpage' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Webpage',
      'WebpageCondition' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\WebpageCondition',
      'WebpageParameter' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\WebpageParameter',
      'YouTubeChannel' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\YouTubeChannel',
      'YouTubeVideo' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\YouTubeVideo',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201710/CampaignCriterionService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201710\cm\CampaignCriterionPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Adds, removes or updates campaign criteria.
     *
     * @param \Google\AdsApi\AdWords\v201710\cm\CampaignCriterionOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201710\cm\CampaignCriterionReturnValue
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of campaign criteria that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201710\cm\CampaignCriterionPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
