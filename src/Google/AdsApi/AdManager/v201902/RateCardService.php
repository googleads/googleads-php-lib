<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RateCardService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'ActivateRateCards' => 'Google\\AdsApi\\AdManager\\v201902\\ActivateRateCards',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'DeactivateRateCards' => 'Google\\AdsApi\\AdManager\\v201902\\DeactivateRateCards',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201902\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RateCardAction' => 'Google\\AdsApi\\AdManager\\v201902\\RateCardAction',
      'RateCardActionError' => 'Google\\AdsApi\\AdManager\\v201902\\RateCardActionError',
      'RateCard' => 'Google\\AdsApi\\AdManager\\v201902\\RateCard',
      'RateCardError' => 'Google\\AdsApi\\AdManager\\v201902\\RateCardError',
      'RateCardPage' => 'Google\\AdsApi\\AdManager\\v201902\\RateCardPage',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201902\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201902\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201902\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201902\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201902\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'createRateCardsResponse' => 'Google\\AdsApi\\AdManager\\v201902\\createRateCardsResponse',
      'getRateCardsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getRateCardsByStatementResponse',
      'performRateCardActionResponse' => 'Google\\AdsApi\\AdManager\\v201902\\performRateCardActionResponse',
      'updateRateCardsResponse' => 'Google\\AdsApi\\AdManager\\v201902\\updateRateCardsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/RateCardService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201902\RateCard[] $rateCards
     * @return \Google\AdsApi\AdManager\v201902\RateCard[]
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
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
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\RateCardPage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getRateCardsByStatement(\Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('getRateCardsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs action on {@link RateCard} objects that satisfy the
     * given {@link Statement#query}.
     *
     * a set of rate cards.
     *
     * @param \Google\AdsApi\AdManager\v201902\RateCardAction $rateCardAction
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function performRateCardAction(\Google\AdsApi\AdManager\v201902\RateCardAction $rateCardAction, \Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('performRateCardAction', array(array('rateCardAction' => $rateCardAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link RateCard} objects.
     *
     * @param \Google\AdsApi\AdManager\v201902\RateCard[] $rateCards
     * @return \Google\AdsApi\AdManager\v201902\RateCard[]
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function updateRateCards(array $rateCards)
    {
      return $this->__soapCall('updateRateCards', array(array('rateCards' => $rateCards)))->getRval();
    }

}
