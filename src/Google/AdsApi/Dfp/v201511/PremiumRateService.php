<?php

namespace Google\AdsApi\Dfp\v201511;

class PremiumRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201511\\ObjectValue',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitPremiumFeature',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201511\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201511\\ApplicationException',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201511\\AuthenticationError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\BandwidthPremiumFeature',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201511\\BooleanValue',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserPremiumFeature',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserLanguagePremiumFeature',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201511\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\ContentBundlePremiumFeature',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\CustomTargetingPremiumFeature',
      'Date' => 'Google\\AdsApi\\Dfp\\v201511\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201511\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateValue',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\DaypartPremiumFeature',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCapabilityPremiumFeature',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCategoryPremiumFeature',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceManufacturerPremiumFeature',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201511\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201511\\FeatureError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\FrequencyCapPremiumFeature',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\GeographyPremiumFeature',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201511\\InternalApiError',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\MobileCarrierPremiumFeature',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201511\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201511\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201511\\NumberValue',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemPremiumFeature',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201511\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201511\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\PlacementPremiumFeature',
      'PremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\PremiumFeature',
      'PremiumRate' => 'Google\\AdsApi\\Dfp\\v201511\\PremiumRate',
      'PremiumRateError' => 'Google\\AdsApi\\Dfp\\v201511\\PremiumRateError',
      'PremiumRatePage' => 'Google\\AdsApi\\Dfp\\v201511\\PremiumRatePage',
      'PremiumRateValue' => 'Google\\AdsApi\\Dfp\\v201511\\PremiumRateValue',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201511\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201511\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201511\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201511\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201511\\StatementError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201511\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201511\\TextValue',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\UnknownPremiumFeature',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\UserDomainPremiumFeature',
      'Value' => 'Google\\AdsApi\\Dfp\\v201511\\Value',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionPremiumFeature',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201511/PremiumRateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201511\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\Dfp\v201511\PremiumRate[]
     */
    public function createPremiumRates(array $premiumRates)
    {
      return $this->__soapCall('createPremiumRates', array(array('premiumRates' => $premiumRates)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\PremiumRatePage
     */
    public function getPremiumRatesByStatement(\Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('getPremiumRatesByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link PremiumRate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201511\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\Dfp\v201511\PremiumRate[]
     */
    public function updatePremiumRates(array $premiumRates)
    {
      return $this->__soapCall('updatePremiumRates', array(array('premiumRates' => $premiumRates)))->rval;
    }

}
