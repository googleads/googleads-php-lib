<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'ActivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201905\\ActivateAudienceSegments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'ApproveAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201905\\ApproveAudienceSegments',
      'AudienceSegmentDataProvider' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentDataProvider',
      'AudienceSegmentPage' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentPage',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'FirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201905\\FirstPartyAudienceSegment',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'DeactivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201905\\DeactivateAudienceSegments',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityLimitReachedError',
      'ThirdPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201905\\ThirdPartyAudienceSegment',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201905\\Money',
      'NonRuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201905\\NonRuleBasedFirstPartyAudienceSegment',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PopulateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201905\\PopulateAudienceSegments',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'FirstPartyAudienceSegmentRule' => 'Google\\AdsApi\\AdManager\\v201905\\FirstPartyAudienceSegmentRule',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RejectAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201905\\RejectAudienceSegments',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'RuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201905\\RuleBasedFirstPartyAudienceSegment',
      'RuleBasedFirstPartyAudienceSegmentSummary' => 'Google\\AdsApi\\AdManager\\v201905\\RuleBasedFirstPartyAudienceSegmentSummary',
      'AudienceSegmentAction' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentAction',
      'AudienceSegment' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegment',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'SharedAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201905\\SharedAudienceSegment',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201905\\TypeError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201905\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'createAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\createAudienceSegmentsResponse',
      'getAudienceSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getAudienceSegmentsByStatementResponse',
      'performAudienceSegmentActionResponse' => 'Google\\AdsApi\\AdManager\\v201905\\performAudienceSegmentActionResponse',
      'updateAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updateAudienceSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/AudienceSegmentService?wsdl')
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
     * Creates new {@link RuleBasedFirstPartyAudienceSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v201905\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
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
     * segments
     *
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\AudienceSegmentPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getAudienceSegmentsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getAudienceSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs the given {@link AudienceSegmentAction} on the set of segments identified by the given
     * statement.
     *
     * segments
     *
     * @param \Google\AdsApi\AdManager\v201905\AudienceSegmentAction $action
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function performAudienceSegmentAction(\Google\AdsApi\AdManager\v201905\AudienceSegmentAction $action, \Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('performAudienceSegmentAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the given {@link RuleBasedFirstPartyAudienceSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v201905\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updateAudienceSegments(array $segments)
    {
      return $this->__soapCall('updateAudienceSegments', array(array('segments' => $segments)))->getRval();
    }

}
