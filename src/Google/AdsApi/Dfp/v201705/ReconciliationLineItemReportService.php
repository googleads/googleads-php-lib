<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationLineItemReportService extends \Google\AdsApi\Common\AdsSoapClient
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
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BillableRevenueOverrides' => 'Google\\AdsApi\\Dfp\\v201705\\BillableRevenueOverrides',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'Money' => 'Google\\AdsApi\\Dfp\\v201705\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201705\\RangeError',
      'ReconciliationError' => 'Google\\AdsApi\\Dfp\\v201705\\ReconciliationError',
      'ReconciliationLineItemReport' => 'Google\\AdsApi\\Dfp\\v201705\\ReconciliationLineItemReport',
      'ReconciliationLineItemReportPage' => 'Google\\AdsApi\\Dfp\\v201705\\ReconciliationLineItemReportPage',
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
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'getReconciliationLineItemReportsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getReconciliationLineItemReportsByStatementResponse',
      'updateReconciliationLineItemReportsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updateReconciliationLineItemReportsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/ReconciliationLineItemReportService?wsdl')
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
     * Gets a {@link ReconciliationLineItemReportPage} of {@link ReconciliationLineItemReport}
     * objects that satisfy the given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ReconciliationLineItemReport#id}</td>
     * </tr>
     * <tr>
     * <td>{@code reconciliationReportId}</td>
     * <td>{@link ReconciliationLineItemReport#reconciliationReportId}</td>
     * </tr>
     * <tr>
     * <td>{@code orderId}</td>
     * <td>{@link ReconciliationLineItemReport#orderId}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link ReconciliationLineItemReport#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemId}</td>
     * <td>{@link ReconciliationLineItemReport#lineItemId}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalLineItemId}</td>
     * <td>{@link ReconciliationLineItemReport#proposalLineItemId}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\ReconciliationLineItemReportPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getReconciliationLineItemReportsByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('getReconciliationLineItemReportsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link ReconciliationLineItemReport} objects which belong to same
     * {@link ReconciliationReport}.
     *
     * {@link ReconciliationLineItemReport reconciliation line item reports} to update
     *
     * @param \Google\AdsApi\Dfp\v201705\ReconciliationLineItemReport[] $reconciliationLineItemReports
     * @return \Google\AdsApi\Dfp\v201705\ReconciliationLineItemReport[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updateReconciliationLineItemReports(array $reconciliationLineItemReports)
    {
      return $this->__soapCall('updateReconciliationLineItemReports', array(array('reconciliationLineItemReports' => $reconciliationLineItemReports)))->getRval();
    }

}
