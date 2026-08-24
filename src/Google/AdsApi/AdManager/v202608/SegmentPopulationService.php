<?php

namespace Google\AdsApi\AdManager\v202608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SegmentPopulationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202608\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202608\\AuthenticationError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202608\\CommonError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202608\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202608\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdManager\\v202608\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202608\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202608\\NotNullError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202608\\PermissionError',
      'ProcessAction' => 'Google\\AdsApi\\AdManager\\v202608\\ProcessAction',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202608\\QuotaError',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202608\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredError',
      'SegmentPopulationAction' => 'Google\\AdsApi\\AdManager\\v202608\\SegmentPopulationAction',
      'SegmentPopulationError' => 'Google\\AdsApi\\AdManager\\v202608\\SegmentPopulationError',
      'SegmentPopulationRequest' => 'Google\\AdsApi\\AdManager\\v202608\\SegmentPopulationRequest',
      'SegmentPopulationResponse' => 'Google\\AdsApi\\AdManager\\v202608\\SegmentPopulationResponse',
      'SegmentPopulationResults' => 'Google\\AdsApi\\AdManager\\v202608\\SegmentPopulationResults',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202608\\ServerError',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202608\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202608\\StringLengthError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202608\\UpdateResult',
      'getSegmentPopulationResultsByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\getSegmentPopulationResultsByIdsResponse',
      'performSegmentPopulationActionResponse' => 'Google\\AdsApi\\AdManager\\v202608\\performSegmentPopulationActionResponse',
      'updateSegmentMembershipsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\updateSegmentMembershipsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202608/SegmentPopulationService?wsdl')
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
     * Returns a list of {@link SegmentPopulationResults} for the given {@code batchUploadIds}.
     *
     * @param long[] $batchUploadIds
     * @return \Google\AdsApi\AdManager\v202608\SegmentPopulationResults[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function getSegmentPopulationResultsByIds(array $batchUploadIds)
    {
      return $this->__soapCall('getSegmentPopulationResultsByIds', array(array('batchUploadIds' => $batchUploadIds)))->getRval();
    }

    /**
     * Performs an action on the uploads denoted by {@code batchUploadIds}.
     *
     * @param \Google\AdsApi\AdManager\v202608\SegmentPopulationAction $action
     * @param long[] $batchUploadIds
     * @return \Google\AdsApi\AdManager\v202608\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function performSegmentPopulationAction(\Google\AdsApi\AdManager\v202608\SegmentPopulationAction $action, array $batchUploadIds)
    {
      return $this->__soapCall('performSegmentPopulationAction', array(array('action' => $action, 'batchUploadIds' => $batchUploadIds)))->getRval();
    }

    /**
     * Updates identifiers in an audience segment.
     *
     * <p>The returned {@link SegmentPopulationRequest#batchUploadId} can be used in subsequent
     * requests to group them together as part of the same batch. The identifiers associated with a
     * batch will not be processed until {@link #performSegmentPopulationAction} is called with a
     * ProcessAction. The batch will expire if ProcessAction is not called within the TTL of 5 days.
     *
     * @param \Google\AdsApi\AdManager\v202608\SegmentPopulationRequest $updateRequest
     * @return \Google\AdsApi\AdManager\v202608\SegmentPopulationResponse
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function updateSegmentMemberships(\Google\AdsApi\AdManager\v202608\SegmentPopulationRequest $updateRequest)
    {
      return $this->__soapCall('updateSegmentMemberships', array(array('updateRequest' => $updateRequest)))->getRval();
    }

}
