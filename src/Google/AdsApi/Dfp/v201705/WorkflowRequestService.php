<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class WorkflowRequestService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'ApproveWorkflowApprovalRequests' => 'Google\\AdsApi\\Dfp\\v201705\\ApproveWorkflowApprovalRequests',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'WorkflowRequest' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowRequest',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'SkipWorkflowExternalConditionRequests' => 'Google\\AdsApi\\Dfp\\v201705\\SkipWorkflowExternalConditionRequests',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201705\\ForecastError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemOperationError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'TriggerWorkflowExternalConditionRequests' => 'Google\\AdsApi\\Dfp\\v201705\\TriggerWorkflowExternalConditionRequests',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'ProposalActionError' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalActionError',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalLineItemActionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RejectWorkflowApprovalRequests' => 'Google\\AdsApi\\Dfp\\v201705\\RejectWorkflowApprovalRequests',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201705\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'WorkflowActionError' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowActionError',
      'WorkflowApprovalRequest' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowApprovalRequest',
      'WorkflowExternalConditionRequest' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowExternalConditionRequest',
      'WorkflowRequestAction' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowRequestAction',
      'WorkflowRequestError' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowRequestError',
      'WorkflowRequestPage' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowRequestPage',
      'getWorkflowRequestsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getWorkflowRequestsByStatementResponse',
      'performWorkflowRequestActionResponse' => 'Google\\AdsApi\\Dfp\\v201705\\performWorkflowRequestActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/WorkflowRequestService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\WorkflowRequestPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getWorkflowRequestsByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('getWorkflowRequestsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Perform actions on {@link WorkflowRequest} objects that match the given
     * {@link Statement#query}.
     *
     * requests
     *
     * @param \Google\AdsApi\Dfp\v201705\WorkflowRequestAction $action
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function performWorkflowRequestAction(\Google\AdsApi\Dfp\v201705\WorkflowRequestAction $action, \Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('performWorkflowRequestAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->getRval();
    }

}
