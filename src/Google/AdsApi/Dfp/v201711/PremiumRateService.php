<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PremiumRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201711\\ObjectValue',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\AdUnitPremiumFeature',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201711\\ApplicationException',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201711\\AuthenticationError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\BandwidthPremiumFeature',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201711\\BooleanValue',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\BrowserPremiumFeature',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\BrowserLanguagePremiumFeature',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201711\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\ContentBundlePremiumFeature',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\CustomTargetingPremiumFeature',
      'Date' => 'Google\\AdsApi\\Dfp\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateValue',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\DaypartPremiumFeature',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCapabilityPremiumFeature',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCategoryPremiumFeature',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceManufacturerPremiumFeature',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201711\\FieldPathElement',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\FrequencyCapPremiumFeature',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\GeographyPremiumFeature',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201711\\InternalApiError',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\MobileCarrierPremiumFeature',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201711\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201711\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201711\\NumberValue',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\OperatingSystemPremiumFeature',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201711\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\PlacementPremiumFeature',
      'PremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\PremiumFeature',
      'PremiumRate' => 'Google\\AdsApi\\Dfp\\v201711\\PremiumRate',
      'PremiumRateError' => 'Google\\AdsApi\\Dfp\\v201711\\PremiumRateError',
      'PremiumRatePage' => 'Google\\AdsApi\\Dfp\\v201711\\PremiumRatePage',
      'PremiumRateValue' => 'Google\\AdsApi\\Dfp\\v201711\\PremiumRateValue',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201711\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201711\\TextValue',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\UnknownPremiumFeature',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\UserDomainPremiumFeature',
      'Value' => 'Google\\AdsApi\\Dfp\\v201711\\Value',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionPremiumFeature',
      'createPremiumRatesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\createPremiumRatesResponse',
      'getPremiumRatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getPremiumRatesByStatementResponse',
      'updatePremiumRatesResponse' => 'Google\\AdsApi\\Dfp\\v201711\\updatePremiumRatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/PremiumRateService?wsdl')
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
     * Creates a list of new {@link PremiumRate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201711\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\Dfp\v201711\PremiumRate[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function createPremiumRates(array $premiumRates)
    {
      return $this->__soapCall('createPremiumRates', array(array('premiumRates' => $premiumRates)))->getRval();
    }

    /**
     * Gets a {@link PremiumRatePage} of {@link PremiumRate} objects that
     * satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link PremiumRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code rateCardId}</td>
     * <td>{@link PremiumRate#rateCardId}</td>
     * </tr>
     * <tr>
     * <td>{@code pricingMethod}</td>
     * <td>{@link PremiumRate#pricingMethod}</td>
     * </tr>
     * </table>
     *
     * list of premium rates.
     *
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\PremiumRatePage
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getPremiumRatesByStatement(\Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('getPremiumRatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link PremiumRate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201711\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\Dfp\v201711\PremiumRate[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function updatePremiumRates(array $premiumRates)
    {
      return $this->__soapCall('updatePremiumRates', array(array('premiumRates' => $premiumRates)))->getRval();
    }

}
