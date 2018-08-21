<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationOrderReportService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201808\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201808\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201808\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201808\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201808\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201808\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201808\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201808\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201808\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201808\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201808\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201808\\InternalApiError',
      'Money' => 'Google\\AdsApi\\AdManager\\v201808\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201808\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201808\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201808\\NumberValue',
      'ReconciliationOrderReportAction' => 'Google\\AdsApi\\AdManager\\v201808\\ReconciliationOrderReportAction',
      'ReconciliationOrderReport' => 'Google\\AdsApi\\AdManager\\v201808\\ReconciliationOrderReport',
      'ReconciliationOrderReportPage' => 'Google\\AdsApi\\AdManager\\v201808\\ReconciliationOrderReportPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201808\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201808\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201808\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201808\\RangeError',
      'SubmitReconciliationOrderReports' => 'Google\\AdsApi\\AdManager\\v201808\\SubmitReconciliationOrderReports',
      'ReconciliationError' => 'Google\\AdsApi\\AdManager\\v201808\\ReconciliationError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredError',
      'RevertReconciliationOrderReports' => 'Google\\AdsApi\\AdManager\\v201808\\RevertReconciliationOrderReports',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201808\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201808\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201808\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201808\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201808\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201808\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201808\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201808\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201808\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201808\\Value',
      'getReconciliationOrderReportsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201808\\getReconciliationOrderReportsByStatementResponse',
      'performReconciliationOrderReportActionResponse' => 'Google\\AdsApi\\AdManager\\v201808\\performReconciliationOrderReportActionResponse',
      'updateReconciliationOrderReportsResponse' => 'Google\\AdsApi\\AdManager\\v201808\\updateReconciliationOrderReportsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201808/ReconciliationOrderReportService?wsdl')
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
     * Gets an {@link ReconciliationOrderReportPage} of {@link ReconciliationOrderReport} objects
     * that satisfy the given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code reconciliationReportId}</td>
     * <td>{@link ReconciliationOrderReport#reconciliationReportId}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ReconciliationOrderReport#id}</td>
     * </tr>
     * <tr>
     * <td>{@code orderId}</td>
     * <td>{@link ReconciliationOrderReport#orderId}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link ReconciliationOrderReport#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ReconciliationOrderReport#status}</td>
     * </tr>
     * <tr>
     * <td>{@code submissionDateTime}</td>
     * <td>{@link ReconciliationOrderReport#submissionDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code submitterId}</td>
     * <td>{@link ReconciliationOrderReport#submitterId}</td>
     * </tr>
     * </table>
     *
     * The {@code reconciliationReportId} field is required and can only be combined with an
     * {@code AND} to other conditions. Furthermore, the results may only belong to
     * one {@link ReconciliationReport}.
     *
     * a set of reconciliation order reports.
     *
     * @param \Google\AdsApi\AdManager\v201808\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201808\ReconciliationOrderReportPage
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function getReconciliationOrderReportsByStatement(\Google\AdsApi\AdManager\v201808\Statement $filterStatement)
    {
      return $this->__soapCall('getReconciliationOrderReportsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on the {@link ReconciliationOrderReport} objects that match the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code orderId}</td>
     * <td>{@link ReconciliationOrderReport#orderId}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link ReconciliationOrderReport#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code reconciliationReportId}</td>
     * <td>{@link ReconciliationOrderReport#reconciliationReportId}</td>
     * </tr>
     * </table>
     * The following statement patterns are supported:
     * <ul>
     * <li>reconciliationReportId = :reconciliationReportId AND orderId = :orderId</li>
     * <li>reconciliationReportId = :reconciliationReportId AND proposalId = :proposalId</li>
     * <li>reconciliationReportId = :reconciliationReportId
     * AND (orderId IN (...) OR proposalId IN (...))</li>
     * </ul>
     * The IN clause could be expanded to multiple OR expressions like
     * (orderId = :orderId OR orderId = :orderId OR ...)
     * Only orders to which the API user has access will be included.
     *
     * one reconciliation report.
     *
     * @param \Google\AdsApi\AdManager\v201808\ReconciliationOrderReportAction $reconciliationOrderReportAction
     * @param \Google\AdsApi\AdManager\v201808\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201808\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function performReconciliationOrderReportAction(\Google\AdsApi\AdManager\v201808\ReconciliationOrderReportAction $reconciliationOrderReportAction, \Google\AdsApi\AdManager\v201808\Statement $filterStatement)
    {
      return $this->__soapCall('performReconciliationOrderReportAction', array(array('reconciliationOrderReportAction' => $reconciliationOrderReportAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link ReconciliationOrderReport reconciliation order reports}
     * which belong to a {@link ReconciliationReport}.
     *
     * {@link ReconciliationOrderReport reconciliation order reports} to update
     *
     * @param \Google\AdsApi\AdManager\v201808\ReconciliationOrderReport[] $reconciliationOrderReports
     * @return \Google\AdsApi\AdManager\v201808\ReconciliationOrderReport[]
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function updateReconciliationOrderReports(array $reconciliationOrderReports)
    {
      return $this->__soapCall('updateReconciliationOrderReports', array(array('reconciliationOrderReports' => $reconciliationOrderReports)))->getRval();
    }

}
