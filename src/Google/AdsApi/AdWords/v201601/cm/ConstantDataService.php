<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ConstantDataService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AgeRange',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthorizationError',
      'Carrier' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Carrier',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ClientTermsError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DistinctError',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Gender',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Language',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MobileApplication',
      'MobileDevice' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MobileDevice',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NullError',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperatingSystemVersion',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperationAccessDenied',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Placement',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Predicate',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductBiddingCategory',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductCustomAttribute',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductOfferId',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductTypeFull',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapResponseHeader',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\String_StringMapEntry',
      'UnknownProductDimension' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\UnknownProductDimension',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Vertical',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DatabaseError',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductDimension',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApplicationException',
      'ProductBiddingCategoryData' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductBiddingCategoryData',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Selector',
      'ConstantData' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ConstantData',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Criterion',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201601/ConstantDataService?wsdl')
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
     * Returns a list of all age range criteria.
     *
     * @return \Google\AdsApi\AdWords\v201601\cm\AgeRange[]
     */
    public function getAgeRangeCriterion()
    {
      return $this->__soapCall('getAgeRangeCriterion', array(array()))->rval;
    }

    /**
     * Returns a list of all carrier criteria.
     *
     * @return \Google\AdsApi\AdWords\v201601\cm\Carrier[]
     */
    public function getCarrierCriterion()
    {
      return $this->__soapCall('getCarrierCriterion', array(array()))->rval;
    }

    /**
     * Returns a list of all gender criteria.
     *
     * @return \Google\AdsApi\AdWords\v201601\cm\Gender[]
     */
    public function getGenderCriterion()
    {
      return $this->__soapCall('getGenderCriterion', array(array()))->rval;
    }

    /**
     * Returns a list of all language criteria.
     *
     * @return \Google\AdsApi\AdWords\v201601\cm\Language[]
     */
    public function getLanguageCriterion()
    {
      return $this->__soapCall('getLanguageCriterion', array(array()))->rval;
    }

    /**
     * Returns a list of all mobile app category criteria.
     *
     * @return \Google\AdsApi\AdWords\v201601\cm\MobileAppCategory[]
     */
    public function getMobileAppCategoryCriterion()
    {
      return $this->__soapCall('getMobileAppCategoryCriterion', array(array()))->rval;
    }

    /**
     * Returns a list of all mobile devices.
     *
     * @return \Google\AdsApi\AdWords\v201601\cm\MobileDevice[]
     */
    public function getMobileDeviceCriterion()
    {
      return $this->__soapCall('getMobileDeviceCriterion', array(array()))->rval;
    }

    /**
     * Returns a list of all operating system version criteria.
     *
     * @return \Google\AdsApi\AdWords\v201601\cm\OperatingSystemVersion[]
     */
    public function getOperatingSystemVersionCriterion()
    {
      return $this->__soapCall('getOperatingSystemVersionCriterion', array(array()))->rval;
    }

    /**
     * Returns a list of shopping bidding categories.
     *
     * A country predicate must be included in the selector, only {@link Predicate.Operator#EQUALS}
     * and {@link Predicate.Operator#IN} with a single value are supported in the country predicate.
     * An empty parentDimensionType predicate will filter for root categories.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201601\cm\ProductBiddingCategoryData[]
     */
    public function getProductBiddingCategoryData(\Google\AdsApi\AdWords\v201601\cm\Selector $selector)
    {
      return $this->__soapCall('getProductBiddingCategoryData', array(array('selector' => $selector)))->rval;
    }

    /**
     * Returns a list of user interests.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\ConstantDataServiceUserInterestTaxonomyType $userInterestTaxonomyType Constant: string - Valid values: BRAND, IN_MARKET, MOBILE_APP_INSTALL_USER, VERTICAL_GEO, NEW_SMART_PHONE_USER
     * @return \Google\AdsApi\AdWords\v201601\cm\CriterionUserInterest[]
     */
    public function getUserInterestCriterion($userInterestTaxonomyType)
    {
      return $this->__soapCall('getUserInterestCriterion', array(array('userInterestTaxonomyType' => $userInterestTaxonomyType)))->rval;
    }

    /**
     * Returns a list of content verticals.
     *
     * @return \Google\AdsApi\AdWords\v201601\cm\Vertical[]
     */
    public function getVerticalCriterion()
    {
      return $this->__soapCall('getVerticalCriterion', array(array()))->rval;
    }

}
