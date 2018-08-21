<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RateCardService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201805\\ObjectValue',
      'ActivateRateCards' => 'Google\\AdsApi\\AdManager\\v201805\\ActivateRateCards',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201805\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201805\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201805\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateValue',
      'DeactivateRateCards' => 'Google\\AdsApi\\AdManager\\v201805\\DeactivateRateCards',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201805\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201805\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201805\\QuotaError',
      'RateCardAction' => 'Google\\AdsApi\\AdManager\\v201805\\RateCardAction',
      'RateCardActionError' => 'Google\\AdsApi\\AdManager\\v201805\\RateCardActionError',
      'RateCard' => 'Google\\AdsApi\\AdManager\\v201805\\RateCard',
      'RateCardError' => 'Google\\AdsApi\\AdManager\\v201805\\RateCardError',
      'RateCardPage' => 'Google\\AdsApi\\AdManager\\v201805\\RateCardPage',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201805\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201805\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201805\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201805\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201805\\Value',
      'createRateCardsResponse' => 'Google\\AdsApi\\AdManager\\v201805\\createRateCardsResponse',
      'getRateCardsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getRateCardsByStatementResponse',
      'performRateCardActionResponse' => 'Google\\AdsApi\\AdManager\\v201805\\performRateCardActionResponse',
      'updateRateCardsResponse' => 'Google\\AdsApi\\AdManager\\v201805\\updateRateCardsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/RateCardService?wsdl')
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
     * Creates a list of {@link RateCard} objects. Rate cards must be activated
     * before being associated with proposal line items and products.
     *
     * @param \Google\AdsApi\AdManager\v201805\RateCard[] $rateCards
     * @return \Google\AdsApi\AdManager\v201805\RateCard[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function createRateCards(array $rateCards)
    {
      return $this->__soapCall('createRateCards', array(array('rateCards' => $rateCards)))->getRval();
    }

    /**
     * Gets a {@link RateCardPage} of {@link RateCard} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table><tr><th>PQL property</th><th>Entity property</th></tr><tr><td><code>ForMarketplace</code></td><td>{@link RateCard#forMarketplace}</td></tr><tr><td><code>Id</code></td><td>{@link RateCard#id}</td></tr><tr><td><code>LastModifiedDateTime</code></td><td>{@link RateCard#lastModifiedDateTime}</td></tr><tr><td><code>Name</code></td><td>{@link RateCard#name}</td></tr><tr><td><code>Status</code></td><td>{@link RateCard#status}</td></tr></table>
     *
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\RateCardPage
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getRateCardsByStatement(\Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getRateCardsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link RateCard} objects that satisfy the
     * given {@link Statement#query}.
     *
     * a set of rate cards.
     *
     * @param \Google\AdsApi\AdManager\v201805\RateCardAction $rateCardAction
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function performRateCardAction(\Google\AdsApi\AdManager\v201805\RateCardAction $rateCardAction, \Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performRateCardAction', array(array('rateCardAction' => $rateCardAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link RateCard} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\RateCard[] $rateCards
     * @return \Google\AdsApi\AdManager\v201805\RateCard[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function updateRateCards(array $rateCards)
    {
      return $this->__soapCall('updateRateCards', array(array('rateCards' => $rateCards)))->getRval();
    }

}
