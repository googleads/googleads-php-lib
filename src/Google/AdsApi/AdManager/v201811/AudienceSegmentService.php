<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201811\\ObjectValue',
      'ActivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201811\\ActivateAudienceSegments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201811\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201811\\ApplicationException',
      'ApproveAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201811\\ApproveAudienceSegments',
      'AudienceSegmentDataProvider' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceSegmentDataProvider',
      'AudienceSegmentPage' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceSegmentPage',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201811\\AuthenticationError',
      'FirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201811\\FirstPartyAudienceSegment',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201811\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201811\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201811\\CommonError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201811\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201811\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201811\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201811\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201811\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201811\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201811\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateValue',
      'DeactivateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201811\\DeactivateAudienceSegments',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201811\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201811\\EntityLimitReachedError',
      'ThirdPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201811\\ThirdPartyAudienceSegment',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201811\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201811\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201811\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\InventoryTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201811\\Money',
      'NonRuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201811\\NonRuleBasedFirstPartyAudienceSegment',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201811\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201811\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201811\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201811\\PermissionError',
      'PopulateAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201811\\PopulateAudienceSegments',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageSyntaxError',
      'FirstPartyAudienceSegmentRule' => 'Google\\AdsApi\\AdManager\\v201811\\FirstPartyAudienceSegmentRule',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201811\\QuotaError',
      'RejectAudienceSegments' => 'Google\\AdsApi\\AdManager\\v201811\\RejectAudienceSegments',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredError',
      'RuleBasedFirstPartyAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201811\\RuleBasedFirstPartyAudienceSegment',
      'RuleBasedFirstPartyAudienceSegmentSummary' => 'Google\\AdsApi\\AdManager\\v201811\\RuleBasedFirstPartyAudienceSegmentSummary',
      'AudienceSegmentAction' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceSegmentAction',
      'AudienceSegment' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceSegment',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201811\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201811\\SetValue',
      'SharedAudienceSegment' => 'Google\\AdsApi\\AdManager\\v201811\\SharedAudienceSegment',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201811\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201811\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201811\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201811\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201811\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201811\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201811\\TypeError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201811\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201811\\Value',
      'createAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v201811\\createAudienceSegmentsResponse',
      'getAudienceSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201811\\getAudienceSegmentsByStatementResponse',
      'performAudienceSegmentActionResponse' => 'Google\\AdsApi\\AdManager\\v201811\\performAudienceSegmentActionResponse',
      'updateAudienceSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v201811\\updateAudienceSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201811/AudienceSegmentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201811\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v201811\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
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
     * @param \Google\AdsApi\AdManager\v201811\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201811\AudienceSegmentPage
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function getAudienceSegmentsByStatement(\Google\AdsApi\AdManager\v201811\Statement $filterStatement)
    {
      return $this->__soapCall('getAudienceSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs the given {@link AudienceSegmentAction} on the set of segments identified by the given
     * statement.
     *
     * segments
     *
     * @param \Google\AdsApi\AdManager\v201811\AudienceSegmentAction $action
     * @param \Google\AdsApi\AdManager\v201811\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201811\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function performAudienceSegmentAction(\Google\AdsApi\AdManager\v201811\AudienceSegmentAction $action, \Google\AdsApi\AdManager\v201811\Statement $filterStatement)
    {
      return $this->__soapCall('performAudienceSegmentAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the given {@link RuleBasedFirstPartyAudienceSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v201811\FirstPartyAudienceSegment[] $segments
     * @return \Google\AdsApi\AdManager\v201811\FirstPartyAudienceSegment[]
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function updateAudienceSegments(array $segments)
    {
      return $this->__soapCall('updateAudienceSegments', array(array('segments' => $segments)))->getRval();
    }

}
