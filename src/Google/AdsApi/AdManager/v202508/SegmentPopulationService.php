<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SegmentPopulationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202508\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202508\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202508\\AuthenticationError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202508\\CommonError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202508\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202508\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdManager\\v202508\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202508\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202508\\NotNullError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202508\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202508\\PermissionError',
      'ProcessAction' => 'Google\\AdsApi\\AdManager\\v202508\\ProcessAction',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202508\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredError',
      'SegmentPopulationAction' => 'Google\\AdsApi\\AdManager\\v202508\\SegmentPopulationAction',
      'SegmentPopulationError' => 'Google\\AdsApi\\AdManager\\v202508\\SegmentPopulationError',
      'SegmentPopulationRequest' => 'Google\\AdsApi\\AdManager\\v202508\\SegmentPopulationRequest',
      'SegmentPopulationResponse' => 'Google\\AdsApi\\AdManager\\v202508\\SegmentPopulationResponse',
      'SegmentPopulationResults' => 'Google\\AdsApi\\AdManager\\v202508\\SegmentPopulationResults',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202508\\ServerError',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202508\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202508\\StringLengthError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202508\\UpdateResult',
      'getSegmentPopulationResultsByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getSegmentPopulationResultsByIdsResponse',
      'performSegmentPopulationActionResponse' => 'Google\\AdsApi\\AdManager\\v202508\\performSegmentPopulationActionResponse',
      'updateSegmentMembershipsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\updateSegmentMembershipsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202508/SegmentPopulationService?wsdl')
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
     * @return \Google\AdsApi\AdManager\v202508\SegmentPopulationResults[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getSegmentPopulationResultsByIds(array $batchUploadIds)
    {
      return $this->__soapCall('getSegmentPopulationResultsByIds', array(array('batchUploadIds' => $batchUploadIds)))->getRval();
    }

    /**
     * Performs an action on the uploads denoted by {@code batchUploadIds}.
     *
     * @param \Google\AdsApi\AdManager\v202508\SegmentPopulationAction $action
     * @param long[] $batchUploadIds
     * @return \Google\AdsApi\AdManager\v202508\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function performSegmentPopulationAction(\Google\AdsApi\AdManager\v202508\SegmentPopulationAction $action, array $batchUploadIds)
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
     * @param \Google\AdsApi\AdManager\v202508\SegmentPopulationRequest $updateRequest
     * @return \Google\AdsApi\AdManager\v202508\SegmentPopulationResponse
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function updateSegmentMemberships(\Google\AdsApi\AdManager\v202508\SegmentPopulationRequest $updateRequest)
    {
      return $this->__soapCall('updateSegmentMemberships', array(array('updateRequest' => $updateRequest)))->getRval();
    }

}
