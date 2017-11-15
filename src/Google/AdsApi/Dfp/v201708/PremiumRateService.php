<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PremiumRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitPremiumFeature',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\BandwidthPremiumFeature',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserPremiumFeature',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserLanguagePremiumFeature',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\ContentBundlePremiumFeature',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\CustomTargetingPremiumFeature',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\DaypartPremiumFeature',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCapabilityPremiumFeature',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCategoryPremiumFeature',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceManufacturerPremiumFeature',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\FrequencyCapPremiumFeature',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\GeographyPremiumFeature',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\MobileCarrierPremiumFeature',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemPremiumFeature',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\PlacementPremiumFeature',
      'PremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\PremiumFeature',
      'PremiumRate' => 'Google\\AdsApi\\Dfp\\v201708\\PremiumRate',
      'PremiumRateError' => 'Google\\AdsApi\\Dfp\\v201708\\PremiumRateError',
      'PremiumRatePage' => 'Google\\AdsApi\\Dfp\\v201708\\PremiumRatePage',
      'PremiumRateValue' => 'Google\\AdsApi\\Dfp\\v201708\\PremiumRateValue',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\UnknownPremiumFeature',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\UserDomainPremiumFeature',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionPremiumFeature',
      'createPremiumRatesResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createPremiumRatesResponse',
      'getPremiumRatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getPremiumRatesByStatementResponse',
      'updatePremiumRatesResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updatePremiumRatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/PremiumRateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\Dfp\v201708\PremiumRate[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\PremiumRatePage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getPremiumRatesByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('getPremiumRatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link PremiumRate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201708\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\Dfp\v201708\PremiumRate[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updatePremiumRates(array $premiumRates)
    {
      return $this->__soapCall('updatePremiumRates', array(array('premiumRates' => $premiumRates)))->getRval();
    }

}
