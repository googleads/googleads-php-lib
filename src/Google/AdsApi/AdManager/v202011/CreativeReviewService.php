<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeReviewService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202011\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202011\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202011\\ApplicationException',
      'ApproveCreativeReviews' => 'Google\\AdsApi\\AdManager\\v202011\\ApproveCreativeReviews',
      'ArchiveCreativeReviews' => 'Google\\AdsApi\\AdManager\\v202011\\ArchiveCreativeReviews',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202011\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202011\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202011\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202011\\CommonError',
      'CreativeReviewAction' => 'Google\\AdsApi\\AdManager\\v202011\\CreativeReviewAction',
      'CreativeReview' => 'Google\\AdsApi\\AdManager\\v202011\\CreativeReview',
      'CreativeReviewPage' => 'Google\\AdsApi\\AdManager\\v202011\\CreativeReviewPage',
      'Date' => 'Google\\AdsApi\\AdManager\\v202011\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202011\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateValue',
      'DisapproveCreativeReviews' => 'Google\\AdsApi\\AdManager\\v202011\\DisapproveCreativeReviews',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202011\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202011\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202011\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202011\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202011\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202011\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202011\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202011\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202011\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202011\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202011\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202011\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202011\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202011\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202011\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202011\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202011\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202011\\Value',
      'getCreativeReviewsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getCreativeReviewsByStatementResponse',
      'performCreativeReviewActionResponse' => 'Google\\AdsApi\\AdManager\\v202011\\performCreativeReviewActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202011/CreativeReviewService?wsdl')
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
     * Gets a {@link CreativeReviewPage} of {@link CreativeReview} objects that satisfy the given
     * {@link Statement#query}. This will allow you to review creatives that have displayed (or could
     * have displayed) on your pages or apps in the last 30 days. To ensure that you are always
     * reviewing the most important creatives first, the {@link CreativeReview} objects are ranked
     * according to the number of impressions that they've received.
     *
     * CreativeReview} to be fetch. Only {@code LIMIT} is supported.
     *
     * @param \Google\AdsApi\AdManager\v202011\Statement $statement
     * @return \Google\AdsApi\AdManager\v202011\CreativeReviewPage
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getCreativeReviewsByStatement(\Google\AdsApi\AdManager\v202011\Statement $statement)
    {
      return $this->__soapCall('getCreativeReviewsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link CreativeReview} objects that match the given {@link
     * Statement#query}. You can use actions to approve (allow) or disapprove (block) creatives, as
     * seen in the corresponding {@link CreativeReview} objects. You can also archive creatives to
     * allow you to retrieve new {@link CreativeReview} objects while previously retrieved {@link
     * CreativeReview} objects are in pending approval.
     *
     * reviews. Only {@code "WHERE id = <value>"} and {@code "WHERE id IN <list>"} are supported.
     *
     * @param \Google\AdsApi\AdManager\v202011\CreativeReviewAction $creativeReviewAction
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function performCreativeReviewAction(\Google\AdsApi\AdManager\v202011\CreativeReviewAction $creativeReviewAction, \Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeReviewAction', array(array('creativeReviewAction' => $creativeReviewAction, 'filterStatement' => $filterStatement)))->getRval();
    }

}
