<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202102\\ObjectValue',
      'ActivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202102\\ActivateAudienceSegments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202102\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202102\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202102\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202102\\ApplicationException',
      'ApproveAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202102\\ApproveAudienceSegments',
      'AudienceSegmentDataProvider' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegmentDataProvider',
      'AudienceSegmentPage' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegmentPage',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202102\\AuthenticationError',
      'FirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202102\\FirstPartyAudienceSegment',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202102\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202102\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202102\\CommonError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202102\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202102\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202102\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202102\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202102\\DateValue',
      'DeactivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202102\\DeactivateAudienceSegments',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202102\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202102\\EntityLimitReachedError',
      'ThirdPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202102\\ThirdPartyAudienceSegment',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202102\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202102\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202102\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\InventoryTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202102\\Money',
      'NonRuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202102\\NonRuleBasedFirstPartyAudienceSegment',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202102\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202102\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202102\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202102\\PermissionError',
      'PopulateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202102\\PopulateAudienceSegments',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202102\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202102\\PublisherQueryLanguageSyntaxError',
      'FirstPartyAudienceSegmentRule' => 'Google\\AdsApi\\AdManager\\v202102\\FirstPartyAudienceSegmentRule',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202102\\QuotaError',
      'RejectAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202102\\RejectAudienceSegments',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202102\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202102\\RequiredError',
      'RuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202102\\RuleBasedFirstPartyAudienceSegment',
      'RuleBasedFirstPartyAudienceSegmentSummary' => 'Google\\AdsApi\\AdManager\\v202102\\RuleBasedFirstPartyAudienceSegmentSummary',
      'AudienceSegmentAction' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegmentAction',
      'AudienceSegment' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegment',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202102\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202102\\SetValue',
      'SharedAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202102\\SharedAudienceSegment',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202102\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202102\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202102\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202102\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202102\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202102\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202102\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202102\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202102\\TypeError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202102\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202102\\Value',
      'createAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202102\\createAudienceSegmentsResponse',
      'getAudienceSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202102\\getAudienceSegmentsByStatementResponse',
      'performAudienceSegmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202102\\performAudienceSegmentActionResponse',
      'updateAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202102\\updateAudienceSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202102/AudienceSegmentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202102\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v202102\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
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
     * segments (the only supported operator is AND)
     *
     * @param \Google\AdsApi\AdManager\v202102\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202102\AudienceSegmentPage
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function getAudienceSegmentsByStatement(\Google\AdsApi\AdManager\v202102\Statement $filterStatement)
    {
      return $this->__soapCall('getAudienceSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs the given {@link AudienceSegmentAction} on the set of segments identified by the given
     * statement.
     *
     * segments (the only supported operator is AND)
     *
     * @param \Google\AdsApi\AdManager\v202102\AudienceSegmentAction $action
     * @param \Google\AdsApi\AdManager\v202102\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202102\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function performAudienceSegmentAction(\Google\AdsApi\AdManager\v202102\AudienceSegmentAction $action, \Google\AdsApi\AdManager\v202102\Statement $filterStatement)
    {
      return $this->__soapCall('performAudienceSegmentAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the given {@link FirstPartyAudienceSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202102\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v202102\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function updateAudienceSegments(array $segments)
    {
      return $this->__soapCall('updateAudienceSegments', array(array('segments' => $segments)))->getRval();
    }

}
