<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RateCardService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ActivateRateCards' => 'Google\\AdsApi\\Dfp\\v201602\\ActivateRateCards',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DeactivateRateCards' => 'Google\\AdsApi\\Dfp\\v201602\\DeactivateRateCards',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RateCardAction' => 'Google\\AdsApi\\Dfp\\v201602\\RateCardAction',
      'RateCardActionError' => 'Google\\AdsApi\\Dfp\\v201602\\RateCardActionError',
      'RateCard' => 'Google\\AdsApi\\Dfp\\v201602\\RateCard',
      'RateCardError' => 'Google\\AdsApi\\Dfp\\v201602\\RateCardError',
      'RateCardPage' => 'Google\\AdsApi\\Dfp\\v201602\\RateCardPage',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201602\\TeamError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/RateCardService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201602\RateCard[] $rateCards
     * @return \Google\AdsApi\Dfp\v201602\RateCard[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createRateCards(array $rateCards)
    {
      return $this->__soapCall('createRateCards', array(array('rateCards' => $rateCards)))->rval;
    }

    /**
     * Gets a {@link RateCardPage} of {@link RateCard} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table><tr><th>PQL property</th><th>Entity property</th></tr><tr><td><code>Id</code></td><td>{@link RateCard#id}</td></tr><tr><td><code>LastModifiedDateTime</code></td><td>{@link RateCard#lastModifiedDateTime}</td></tr><tr><td><code>Name</code></td><td>{@link RateCard#name}</td></tr><tr><td><code>Status</code></td><td>{@link RateCard#status}</td></tr></table>
     *
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\RateCardPage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getRateCardsByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getRateCardsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs action on {@link RateCard} objects that satisfy the
     * given {@link Statement#query}.
     *
     * a set of rate cards.
     *
     * @param \Google\AdsApi\Dfp\v201602\RateCardAction $rateCardAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performRateCardAction(\Google\AdsApi\Dfp\v201602\RateCardAction $rateCardAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performRateCardAction', array(array('rateCardAction' => $rateCardAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates a list of {@link RateCard} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\RateCard[] $rateCards
     * @return \Google\AdsApi\Dfp\v201602\RateCard[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateRateCards(array $rateCards)
    {
      return $this->__soapCall('updateRateCards', array(array('rateCards' => $rateCards)))->rval;
    }

}
