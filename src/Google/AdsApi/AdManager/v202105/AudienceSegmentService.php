<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202105\\ObjectValue',
      'ActivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202105\\ActivateAudienceSegments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202105\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202105\\ApplicationException',
      'ApproveAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202105\\ApproveAudienceSegments',
      'AudienceSegmentDataProvider' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegmentDataProvider',
      'AudienceSegmentPage' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegmentPage',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202105\\AuthenticationError',
      'FirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202105\\FirstPartyAudienceSegment',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202105\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202105\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202105\\CommonError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202105\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202105\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202105\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateValue',
      'DeactivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202105\\DeactivateAudienceSegments',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202105\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202105\\EntityLimitReachedError',
      'ThirdPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202105\\ThirdPartyAudienceSegment',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202105\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202105\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202105\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\InventoryTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202105\\Money',
      'NonRuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202105\\NonRuleBasedFirstPartyAudienceSegment',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202105\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202105\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202105\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202105\\PermissionError',
      'PopulateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202105\\PopulateAudienceSegments',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageSyntaxError',
      'FirstPartyAudienceSegmentRule' => 'Google\\AdsApi\\AdManager\\v202105\\FirstPartyAudienceSegmentRule',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202105\\QuotaError',
      'RejectAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202105\\RejectAudienceSegments',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredError',
      'RuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202105\\RuleBasedFirstPartyAudienceSegment',
      'RuleBasedFirstPartyAudienceSegmentSummary' => 'Google\\AdsApi\\AdManager\\v202105\\RuleBasedFirstPartyAudienceSegmentSummary',
      'AudienceSegmentAction' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegmentAction',
      'AudienceSegment' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegment',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202105\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202105\\SetValue',
      'SharedAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202105\\SharedAudienceSegment',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202105\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202105\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202105\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202105\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202105\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202105\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202105\\TypeError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202105\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202105\\Value',
      'createAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202105\\createAudienceSegmentsResponse',
      'getAudienceSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getAudienceSegmentsByStatementResponse',
      'performAudienceSegmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202105\\performAudienceSegmentActionResponse',
      'updateAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202105\\updateAudienceSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202105/AudienceSegmentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202105\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v202105\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
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
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202105\AudienceSegmentPage
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getAudienceSegmentsByStatement(\Google\AdsApi\AdManager\v202105\Statement $filterStatement)
    {
      return $this->__soapCall('getAudienceSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs the given {@link AudienceSegmentAction} on the set of segments identified by the given
     * statement.
     *
     * segments (the only supported operator is AND)
     *
     * @param \Google\AdsApi\AdManager\v202105\AudienceSegmentAction $action
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202105\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function performAudienceSegmentAction(\Google\AdsApi\AdManager\v202105\AudienceSegmentAction $action, \Google\AdsApi\AdManager\v202105\Statement $filterStatement)
    {
      return $this->__soapCall('performAudienceSegmentAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the given {@link FirstPartyAudienceSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202105\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v202105\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function updateAudienceSegments(array $segments)
    {
      return $this->__soapCall('updateAudienceSegments', array(array('segments' => $segments)))->getRval();
    }

}
