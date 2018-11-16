<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationOrderReportService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201811\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201811\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201811\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201811\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201811\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201811\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201811\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201811\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201811\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201811\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201811\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201811\\InternalApiError',
      'Money' => 'Google\\AdsApi\\AdManager\\v201811\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201811\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201811\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201811\\NumberValue',
      'ReconciliationOrderReportAction' => 'Google\\AdsApi\\AdManager\\v201811\\ReconciliationOrderReportAction',
      'ReconciliationOrderReport' => 'Google\\AdsApi\\AdManager\\v201811\\ReconciliationOrderReport',
      'ReconciliationOrderReportPage' => 'Google\\AdsApi\\AdManager\\v201811\\ReconciliationOrderReportPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201811\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201811\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201811\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201811\\RangeError',
      'SubmitReconciliationOrderReports' => 'Google\\AdsApi\\AdManager\\v201811\\SubmitReconciliationOrderReports',
      'ReconciliationError' => 'Google\\AdsApi\\AdManager\\v201811\\ReconciliationError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredError',
      'RevertReconciliationOrderReports' => 'Google\\AdsApi\\AdManager\\v201811\\RevertReconciliationOrderReports',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201811\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201811\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201811\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201811\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201811\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201811\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201811\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201811\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201811\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201811\\Value',
      'getReconciliationOrderReportsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201811\\getReconciliationOrderReportsByStatementResponse',
      'performReconciliationOrderReportActionResponse' => 'Google\\AdsApi\\AdManager\\v201811\\performReconciliationOrderReportActionResponse',
      'updateReconciliationOrderReportsResponse' => 'Google\\AdsApi\\AdManager\\v201811\\updateReconciliationOrderReportsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201811/ReconciliationOrderReportService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201811\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201811\ReconciliationOrderReportPage
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function getReconciliationOrderReportsByStatement(\Google\AdsApi\AdManager\v201811\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v201811\ReconciliationOrderReportAction $reconciliationOrderReportAction
     * @param \Google\AdsApi\AdManager\v201811\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201811\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function performReconciliationOrderReportAction(\Google\AdsApi\AdManager\v201811\ReconciliationOrderReportAction $reconciliationOrderReportAction, \Google\AdsApi\AdManager\v201811\Statement $filterStatement)
    {
      return $this->__soapCall('performReconciliationOrderReportAction', array(array('reconciliationOrderReportAction' => $reconciliationOrderReportAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link ReconciliationOrderReport reconciliation order reports}
     * which belong to a {@link ReconciliationReport}.
     *
     * {@link ReconciliationOrderReport reconciliation order reports} to update
     *
     * @param \Google\AdsApi\AdManager\v201811\ReconciliationOrderReport[] $reconciliationOrderReports
     * @return \Google\AdsApi\AdManager\v201811\ReconciliationOrderReport[]
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function updateReconciliationOrderReports(array $reconciliationOrderReports)
    {
      return $this->__soapCall('updateReconciliationOrderReports', array(array('reconciliationOrderReports' => $reconciliationOrderReports)))->getRval();
    }

}
