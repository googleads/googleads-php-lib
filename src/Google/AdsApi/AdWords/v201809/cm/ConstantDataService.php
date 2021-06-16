<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConstantDataService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AgeRange',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'Carrier' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Carrier',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ClientTermsError',
      'ConstantData' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ConstantData',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Criterion',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Gender',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Language',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileApplication',
      'MobileDevice' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileDevice',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatingSystemVersion',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Placement',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Predicate',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductBiddingCategory',
      'ProductBiddingCategoryData' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductBiddingCategoryData',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductCustomAttribute',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductDimension',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductOfferId',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ProductTypeFull',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectorError',
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
      'getAgeRangeCriterionResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getAgeRangeCriterionResponse',
      'getCarrierCriterionResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getCarrierCriterionResponse',
      'getGenderCriterionResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getGenderCriterionResponse',
      'getLanguageCriterionResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getLanguageCriterionResponse',
      'getMobileAppCategoryCriterionResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getMobileAppCategoryCriterionResponse',
      'getMobileDeviceCriterionResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getMobileDeviceCriterionResponse',
      'getOperatingSystemVersionCriterionResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getOperatingSystemVersionCriterionResponse',
      'getProductBiddingCategoryDataResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getProductBiddingCategoryDataResponse',
      'getUserInterestCriterionResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getUserInterestCriterionResponse',
      'getVerticalCriterionResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getVerticalCriterionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/ConstantDataService?wsdl')
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
     * @return \Google\AdsApi\AdWords\v201809\cm\AgeRange[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getAgeRangeCriterion()
    {
      return $this->__soapCall('getAgeRangeCriterion', array(array()))->getRval();
    }

    /**
     * Returns a list of all carrier criteria.
     *
     * @return \Google\AdsApi\AdWords\v201809\cm\Carrier[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getCarrierCriterion()
    {
      return $this->__soapCall('getCarrierCriterion', array(array()))->getRval();
    }

    /**
     * Returns a list of all gender criteria.
     *
     * @return \Google\AdsApi\AdWords\v201809\cm\Gender[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getGenderCriterion()
    {
      return $this->__soapCall('getGenderCriterion', array(array()))->getRval();
    }

    /**
     * Returns a list of all language criteria.
     *
     * @return \Google\AdsApi\AdWords\v201809\cm\Language[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getLanguageCriterion()
    {
      return $this->__soapCall('getLanguageCriterion', array(array()))->getRval();
    }

    /**
     * Returns a list of all mobile app category criteria.
     *
     * @return \Google\AdsApi\AdWords\v201809\cm\MobileAppCategory[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getMobileAppCategoryCriterion()
    {
      return $this->__soapCall('getMobileAppCategoryCriterion', array(array()))->getRval();
    }

    /**
     * Returns a list of all mobile devices.
     *
     * @return \Google\AdsApi\AdWords\v201809\cm\MobileDevice[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getMobileDeviceCriterion()
    {
      return $this->__soapCall('getMobileDeviceCriterion', array(array()))->getRval();
    }

    /**
     * Returns a list of all operating system version criteria.
     *
     * @return \Google\AdsApi\AdWords\v201809\cm\OperatingSystemVersion[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getOperatingSystemVersionCriterion()
    {
      return $this->__soapCall('getOperatingSystemVersionCriterion', array(array()))->getRval();
    }

    /**
     * Returns a list of shopping bidding categories.
     *
     * A country predicate must be included in the selector, only {@link Predicate.Operator#EQUALS}
     * and {@link Predicate.Operator#IN} with a single value are supported in the country predicate.
     * An empty parentDimensionType predicate will filter for root categories.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201809\cm\ProductBiddingCategoryData[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getProductBiddingCategoryData(\Google\AdsApi\AdWords\v201809\cm\Selector $selector)
    {
      return $this->__soapCall('getProductBiddingCategoryData', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Returns a list of user interests.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\ConstantDataServiceUserInterestTaxonomyType $userInterestTaxonomyType Constant: string - Valid values: BRAND, IN_MARKET, MOBILE_APP_INSTALL_USER, VERTICAL_GEO, NEW_SMART_PHONE_USER
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionUserInterest[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getUserInterestCriterion($userInterestTaxonomyType)
    {
      return $this->__soapCall('getUserInterestCriterion', array(array('userInterestTaxonomyType' => $userInterestTaxonomyType)))->getRval();
    }

    /**
     * Returns a list of content verticals.
     *
     * @return \Google\AdsApi\AdWords\v201809\cm\Vertical[]
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getVerticalCriterion()
    {
      return $this->__soapCall('getVerticalCriterion', array(array()))->getRval();
    }

}
