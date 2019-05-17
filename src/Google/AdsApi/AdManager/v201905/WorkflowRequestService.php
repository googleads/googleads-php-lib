<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class WorkflowRequestService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'ApproveWorkflowApprovalRequests' => 'Google\\AdsApi\\AdManager\\v201905\\ApproveWorkflowApprovalRequests',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'WorkflowRequest' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowRequest',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'SkipWorkflowExternalConditionRequests' => 'Google\\AdsApi\\AdManager\\v201905\\SkipWorkflowExternalConditionRequests',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201905\\ForecastError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemOperationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'TriggerWorkflowExternalConditionRequests' => 'Google\\AdsApi\\AdManager\\v201905\\TriggerWorkflowExternalConditionRequests',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalActionError',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemActionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RejectWorkflowApprovalRequests' => 'Google\\AdsApi\\AdManager\\v201905\\RejectWorkflowApprovalRequests',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201905\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'WorkflowActionError' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowActionError',
      'WorkflowApprovalRequest' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowApprovalRequest',
      'WorkflowExternalConditionRequest' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowExternalConditionRequest',
      'WorkflowRequestAction' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowRequestAction',
      'WorkflowRequestError' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowRequestError',
      'WorkflowRequestPage' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowRequestPage',
      'getWorkflowRequestsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getWorkflowRequestsByStatementResponse',
      'performWorkflowRequestActionResponse' => 'Google\\AdsApi\\AdManager\\v201905\\performWorkflowRequestActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/WorkflowRequestService?wsdl')
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
     * Gets a list of {@link WorkflowRequest} objects that satisfy the given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link WorkflowRequest#id}</td>
     * </tr>
     * <tr>
     * <td>{@code workflowRuleName}</td>
     * <td>{@link WorkflowRequest#workflowRuleName}</td>
     * </tr>
     * <tr>
     * <td>{@code entityType}</td>
     * <td>{@link WorkflowRequest#entityType}</td>
     * </tr>
     * <tr>
     * <td>{@code entityId}</td>
     * <td>{@link WorkflowRequest#entityId}</td>
     * </tr>
     * <tr>
     * <td>{@code approvalStatus}</td>
     * <td>{@link WorkflowApprovalRequest#status}</td>
     * </tr>
     * <tr>
     * <td>{@code conditionStatus}</td>
     * <td>{@link WorkflowExternalConditionRequest#status}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link WorkflowRequest#type}</td>
     * </tr>
     * </table>
     *
     * <p>The {@code type} filter is required in v201705 and earlier.
     *
     * requests belonging to an entity
     *
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\WorkflowRequestPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getWorkflowRequestsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getWorkflowRequestsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Perform actions on {@link WorkflowRequest} objects that match the given
     * {@link Statement#query}.
     *
     * requests
     *
     * @param \Google\AdsApi\AdManager\v201905\WorkflowRequestAction $action
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function performWorkflowRequestAction(\Google\AdsApi\AdManager\v201905\WorkflowRequestAction $action, \Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('performWorkflowRequestAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

}
