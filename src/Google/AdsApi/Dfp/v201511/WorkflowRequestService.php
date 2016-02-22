<?php

namespace Google\AdsApi\Dfp\v201511;

class WorkflowRequestService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201511\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201511\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201511\\ApplicationException',
      'ApproveWorkflowApprovalRequests' => 'Google\\AdsApi\\Dfp\\v201511\\ApproveWorkflowApprovalRequests',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201511\\AuthenticationError',
      'WorkflowRequest' => 'Google\\AdsApi\\Dfp\\v201511\\WorkflowRequest',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201511\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201511\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201511\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201511\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateValue',
      'SkipWorkflowExternalConditionRequests' => 'Google\\AdsApi\\Dfp\\v201511\\SkipWorkflowExternalConditionRequests',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201511\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201511\\ForecastError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201511\\InternalApiError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemOperationError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201511\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201511\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201511\\ParseError',
      'TriggerWorkflowExternalConditionRequests' => 'Google\\AdsApi\\Dfp\\v201511\\TriggerWorkflowExternalConditionRequests',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201511\\PermissionError',
      'ProposalActionError' => 'Google\\AdsApi\\Dfp\\v201511\\ProposalActionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201511\\QuotaError',
      'RejectWorkflowApprovalRequests' => 'Google\\AdsApi\\Dfp\\v201511\\RejectWorkflowApprovalRequests',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201511\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201511\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201511\\StatementError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201511\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201511\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201511\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201511\\Value',
      'WorkflowActionError' => 'Google\\AdsApi\\Dfp\\v201511\\WorkflowActionError',
      'WorkflowApprovalRequest' => 'Google\\AdsApi\\Dfp\\v201511\\WorkflowApprovalRequest',
      'WorkflowExternalConditionRequest' => 'Google\\AdsApi\\Dfp\\v201511\\WorkflowExternalConditionRequest',
      'WorkflowRequestAction' => 'Google\\AdsApi\\Dfp\\v201511\\WorkflowRequestAction',
      'WorkflowRequestError' => 'Google\\AdsApi\\Dfp\\v201511\\WorkflowRequestError',
      'WorkflowRequestPage' => 'Google\\AdsApi\\Dfp\\v201511\\WorkflowRequestPage',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201511/WorkflowRequestService?wsdl')
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
     * <p>Starting in V201405 a {@code type} filter must be used</p>
     *
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\WorkflowRequestPage
     */
    public function getWorkflowRequestsByStatement(\Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('getWorkflowRequestsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Perform actions on {@link WorkflowRequest} objects that match the given
     * {@link Statement#query}.
     *
     * requests
     *
     * @param \Google\AdsApi\Dfp\v201511\WorkflowRequestAction $action
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\UpdateResult
     */
    public function performWorkflowRequestAction(\Google\AdsApi\Dfp\v201511\WorkflowRequestAction $action, \Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('performWorkflowRequestAction', array(array('action' => $action, 'filterStatement' => $filterStatement)))->rval;
    }

}
