<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RateCardService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ActivateRateCards' => 'Google\\AdsApi\\Dfp\\v201611\\ActivateRateCards',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'DeactivateRateCards' => 'Google\\AdsApi\\Dfp\\v201611\\DeactivateRateCards',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201611\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RateCardAction' => 'Google\\AdsApi\\Dfp\\v201611\\RateCardAction',
      'RateCardActionError' => 'Google\\AdsApi\\Dfp\\v201611\\RateCardActionError',
      'RateCard' => 'Google\\AdsApi\\Dfp\\v201611\\RateCard',
      'RateCardError' => 'Google\\AdsApi\\Dfp\\v201611\\RateCardError',
      'RateCardPage' => 'Google\\AdsApi\\Dfp\\v201611\\RateCardPage',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201611\\TeamError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201611\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201611\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'createRateCardsResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createRateCardsResponse',
      'getRateCardsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getRateCardsByStatementResponse',
      'performRateCardActionResponse' => 'Google\\AdsApi\\Dfp\\v201611\\performRateCardActionResponse',
      'updateRateCardsResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateRateCardsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/RateCardService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201611\RateCard[] $rateCards
     * @return \Google\AdsApi\Dfp\v201611\RateCard[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
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
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\RateCardPage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getRateCardsByStatement(\Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('getRateCardsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link RateCard} objects that satisfy the
     * given {@link Statement#query}.
     *
     * a set of rate cards.
     *
     * @param \Google\AdsApi\Dfp\v201611\RateCardAction $rateCardAction
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function performRateCardAction(\Google\AdsApi\Dfp\v201611\RateCardAction $rateCardAction, \Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('performRateCardAction', array(array('rateCardAction' => $rateCardAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link RateCard} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\RateCard[] $rateCards
     * @return \Google\AdsApi\Dfp\v201611\RateCard[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateRateCards(array $rateCards)
    {
      return $this->__soapCall('updateRateCards', array(array('rateCards' => $rateCards)))->getRval();
    }

}
