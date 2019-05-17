<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PremiumRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitPremiumFeature',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthPremiumFeature',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserPremiumFeature',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguagePremiumFeature',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\ContentBundlePremiumFeature',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\CustomTargetingPremiumFeature',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DaypartPremiumFeature',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapabilityPremiumFeature',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategoryPremiumFeature',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturerPremiumFeature',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCapPremiumFeature',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\GeographyPremiumFeature',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrierPremiumFeature',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201905\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemPremiumFeature',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\PlacementPremiumFeature',
      'PremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\PremiumFeature',
      'PremiumRate' => 'Google\\AdsApi\\AdManager\\v201905\\PremiumRate',
      'PremiumRateError' => 'Google\\AdsApi\\AdManager\\v201905\\PremiumRateError',
      'PremiumRatePage' => 'Google\\AdsApi\\AdManager\\v201905\\PremiumRatePage',
      'PremiumRateValue' => 'Google\\AdsApi\\AdManager\\v201905\\PremiumRateValue',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201905\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\UnknownPremiumFeature',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainPremiumFeature',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionPremiumFeature',
      'createPremiumRatesResponse' => 'Google\\AdsApi\\AdManager\\v201905\\createPremiumRatesResponse',
      'getPremiumRatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getPremiumRatesByStatementResponse',
      'updatePremiumRatesResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updatePremiumRatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/PremiumRateService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201905\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\AdManager\v201905\PremiumRate[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
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
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\PremiumRatePage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getPremiumRatesByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getPremiumRatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link PremiumRate} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\AdManager\v201905\PremiumRate[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updatePremiumRates(array $premiumRates)
    {
      return $this->__soapCall('updatePremiumRates', array(array('premiumRates' => $premiumRates)))->getRval();
    }

}
