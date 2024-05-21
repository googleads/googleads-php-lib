<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202405\\ObjectValue',
      'ActivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202405\\ActivateAudienceSegments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202405\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202405\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202405\\ApplicationException',
      'ApproveAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202405\\ApproveAudienceSegments',
      'AudienceSegmentDataProvider' => 'Google\\AdsApi\\AdManager\\v202405\\AudienceSegmentDataProvider',
      'AudienceSegmentPage' => 'Google\\AdsApi\\AdManager\\v202405\\AudienceSegmentPage',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202405\\AuthenticationError',
      'FirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202405\\FirstPartyAudienceSegment',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202405\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202405\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202405\\CommonError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202405\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202405\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202405\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202405\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202405\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202405\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202405\\DateValue',
      'DeactivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202405\\DeactivateAudienceSegments',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202405\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202405\\EntityLimitReachedError',
      'ThirdPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202405\\ThirdPartyAudienceSegment',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202405\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202405\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202405\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202405\\InventoryTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202405\\Money',
      'NonRuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202405\\NonRuleBasedFirstPartyAudienceSegment',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202405\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202405\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202405\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202405\\PermissionError',
      'PopulateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202405\\PopulateAudienceSegments',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202405\\PublisherQueryLanguageSyntaxError',
      'FirstPartyAudienceSegmentRule' => 'Google\\AdsApi\\AdManager\\v202405\\FirstPartyAudienceSegmentRule',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202405\\QuotaError',
      'RejectAudienceSegments' => 'Google\\AdsApi\\AdManager\\v202405\\RejectAudienceSegments',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202405\\RequiredError',
      'RuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202405\\RuleBasedFirstPartyAudienceSegment',
      'RuleBasedFirstPartyAudienceSegmentSummary' => 'Google\\AdsApi\\AdManager\\v202405\\RuleBasedFirstPartyAudienceSegmentSummary',
      'AudienceSegmentAction' => 'Google\\AdsApi\\AdManager\\v202405\\AudienceSegmentAction',
      'AudienceSegment' => 'Google\\AdsApi\\AdManager\\v202405\\AudienceSegment',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202405\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202405\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202405\\SetValue',
      'SharedAudienceSegment' => 'Google\\AdsApi\\AdManager\\v202405\\SharedAudienceSegment',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202405\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202405\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202405\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202405\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202405\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202405\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202405\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202405\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202405\\TypeError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202405\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202405\\Value',
      'createAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202405\\createAudienceSegmentsResponse',
      'getAudienceSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202405\\getAudienceSegmentsByStatementResponse',
      'performAudienceSegmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202405\\performAudienceSegmentActionResponse',
      'updateAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202405\\updateAudienceSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202405/AudienceSegmentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202405\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v202405\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
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
     * @param \Google\AdsApi\AdManager\v202405\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202405\AudienceSegmentPage
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function getAudienceSegmentsByStatement(\Google\AdsApi\AdManager\v202405\Statement $filterStatement)
    {
      return $this->__soapCall('getAudienceSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs the given {@link AudienceSegmentAction} on the set of segments identified by the given
     * statement.
     *
     * @param \Google\AdsApi\AdManager\v202405\AudienceSegmentAction $action
     * @param \Google\AdsApi\AdManager\v202405\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202405\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function performAudienceSegmentAction(\Google\AdsApi\AdManager\v202405\AudienceSegmentAction $action, \Google\AdsApi\AdManager\v202405\Statement $filterStatement)
    {
      return $this->__soapCall('performAudienceSegmentAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the given {@link FirstPartyAudienceSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202405\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v202405\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v202405\ApiException
     */
    public function updateAudienceSegments(array $segments)
    {
      return $this->__soapCall('updateAudienceSegments', array(array('segments' => $segments)))->getRval();
    }

}
