<?php

namespace Google\AdsApi\AdManager\v202302;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202302\\ObjectValue',
      'ActivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202302\\ActivateAudienceSegments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202302\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202302\\ApplicationException',
      'ApproveAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202302\\ApproveAudienceSegments',
      'AudienceSegmentDataProvider' => 'Google\\AdsApi\\AdManager\\v202302\\AudienceSegmentDataProvider',
      'AudienceSegmentPage' => 'Google\\AdsApi\\AdManager\\v202302\\AudienceSegmentPage',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202302\\AuthenticationError',
      'FirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202302\\FirstPartyAudienceSegment',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202302\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202302\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202302\\CommonError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202302\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202302\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202302\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202302\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202302\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202302\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202302\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202302\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateValue',
      'DeactivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202302\\DeactivateAudienceSegments',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202302\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202302\\EntityLimitReachedError',
      'ThirdPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202302\\ThirdPartyAudienceSegment',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202302\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202302\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202302\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\InventoryTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202302\\Money',
      'NonRuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202302\\NonRuleBasedFirstPartyAudienceSegment',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202302\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202302\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202302\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202302\\PermissionError',
      'PopulateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202302\\PopulateAudienceSegments',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageSyntaxError',
      'FirstPartyAudienceSegmentRule' => 'Google\\AdsApi\\AdManager\\v202302\\FirstPartyAudienceSegmentRule',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202302\\QuotaError',
      'RejectAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202302\\RejectAudienceSegments',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredError',
      'RuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202302\\RuleBasedFirstPartyAudienceSegment',
      'RuleBasedFirstPartyAudienceSegmentSummary' => 'Google\\AdsApi\\AdManager\\v202302\\RuleBasedFirstPartyAudienceSegmentSummary',
      'AudienceSegmentAction' => 'Google\\AdsApi\\AdManager\\v202302\\AudienceSegmentAction',
      'AudienceSegment' => 'Google\\AdsApi\\AdManager\\v202302\\AudienceSegment',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202302\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202302\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202302\\SetValue',
      'SharedAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202302\\SharedAudienceSegment',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202302\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202302\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202302\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202302\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202302\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202302\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202302\\TypeError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202302\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202302\\Value',
      'createAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202302\\createAudienceSegmentsResponse',
      'getAudienceSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getAudienceSegmentsByStatementResponse',
      'performAudienceSegmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202302\\performAudienceSegmentActionResponse',
      'updateAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202302\\updateAudienceSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202302/AudienceSegmentService?wsdl')
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
     * Creates new {@link FirstPartyAudienceSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202302\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v202302\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function createAudienceSegments(array $segments)
    {
      return $this->__soapCall('createAudienceSegments', array(array('segments' => $segments)))->getRval();
    }

    /**
     * Gets an {@link AudienceSegmentPage} of {@link AudienceSegment} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AudienceSegment#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AudienceSegment#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AudienceSegment#status}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link AudienceSegment#type}</td>
     * </tr>
     * <tr>
     * <td>{@code size}</td>
     * <td>{@link AudienceSegment#size}</td>
     * </tr>
     * <tr>
     * <td>{@code dataProviderName}</td>
     * <td>{@link AudienceSegmentDataProvider#name}</td>
     * </tr>
     * <tr>
     * <td>{@code segmentType}</td>
     * <td>{@link AudienceSegment#type}</td>
     * </tr>
     * <tr>
     * <td>{@code approvalStatus}</td>
     * <td>{@link ThirdPartyAudienceSegment#approvalStatus}</td>
     * </tr>
     * <tr>
     * <td>{@code cost}</td>
     * <td>{@link ThirdPartyAudienceSegment#cost}</td>
     * </tr>
     * <tr>
     * <td>{@code startDateTime}</td>
     * <td>{@link ThirdPartyAudienceSegment#startDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code endDateTime}</td>
     * <td>{@link ThirdPartyAudienceSegment#endDateTime}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202302\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202302\AudienceSegmentPage
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getAudienceSegmentsByStatement(\Google\AdsApi\AdManager\v202302\Statement $filterStatement)
    {
      return $this->__soapCall('getAudienceSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs the given {@link AudienceSegmentAction} on the set of segments identified by the given
     * statement.
     *
     * @param \Google\AdsApi\AdManager\v202302\AudienceSegmentAction $action
     * @param \Google\AdsApi\AdManager\v202302\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202302\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function performAudienceSegmentAction(\Google\AdsApi\AdManager\v202302\AudienceSegmentAction $action, \Google\AdsApi\AdManager\v202302\Statement $filterStatement)
    {
      return $this->__soapCall('performAudienceSegmentAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the given {@link FirstPartyAudienceSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202302\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v202302\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function updateAudienceSegments(array $segments)
    {
      return $this->__soapCall('updateAudienceSegments', array(array('segments' => $segments)))->getRval();
    }

}
