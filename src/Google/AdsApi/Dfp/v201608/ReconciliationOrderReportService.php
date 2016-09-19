<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationOrderReportService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201608\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201608\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201608\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201608\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201608\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201608\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201608\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201608\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201608\\InternalApiError',
      'Money' => 'Google\\AdsApi\\Dfp\\v201608\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201608\\NumberValue',
      'ReconciliationOrderReportAction' => 'Google\\AdsApi\\Dfp\\v201608\\ReconciliationOrderReportAction',
      'ReconciliationOrderReport' => 'Google\\AdsApi\\Dfp\\v201608\\ReconciliationOrderReport',
      'ReconciliationOrderReportPage' => 'Google\\AdsApi\\Dfp\\v201608\\ReconciliationOrderReportPage',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201608\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201608\\RangeError',
      'SubmitReconciliationOrderReports' => 'Google\\AdsApi\\Dfp\\v201608\\SubmitReconciliationOrderReports',
      'ReconciliationError' => 'Google\\AdsApi\\Dfp\\v201608\\ReconciliationError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredError',
      'RevertReconciliationOrderReports' => 'Google\\AdsApi\\Dfp\\v201608\\RevertReconciliationOrderReports',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201608\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201608\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201608\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201608\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201608\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201608\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201608\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201608\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201608/ReconciliationOrderReportService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201608\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201608\ReconciliationOrderReportPage
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function getReconciliationOrderReportsByStatement(\Google\AdsApi\Dfp\v201608\Statement $filterStatement)
    {
      return $this->__soapCall('getReconciliationOrderReportsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201608\ReconciliationOrderReportAction $reconciliationOrderReportAction
     * @param \Google\AdsApi\Dfp\v201608\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201608\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function performReconciliationOrderReportAction(\Google\AdsApi\Dfp\v201608\ReconciliationOrderReportAction $reconciliationOrderReportAction, \Google\AdsApi\Dfp\v201608\Statement $filterStatement)
    {
      return $this->__soapCall('performReconciliationOrderReportAction', array(array('reconciliationOrderReportAction' => $reconciliationOrderReportAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates a list of {@link ReconciliationOrderReport reconciliation order reports}
     * which belong to a {@link ReconciliationReport}.
     *
     * {@link ReconciliationOrderReport reconciliation order reports} to update
     *
     * @param \Google\AdsApi\Dfp\v201608\ReconciliationOrderReport[] $reconciliationOrderReports
     * @return \Google\AdsApi\Dfp\v201608\ReconciliationOrderReport[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function updateReconciliationOrderReports(array $reconciliationOrderReports)
    {
      return $this->__soapCall('updateReconciliationOrderReports', array(array('reconciliationOrderReports' => $reconciliationOrderReports)))->rval;
    }

}
