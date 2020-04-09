<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationLineItemReportService extends \Google\AdsApi\Common\AdsSoapClient
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
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'BillableRevenueOverrides' => 'Google\\AdsApi\\AdManager\\v201905\\BillableRevenueOverrides',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'Money' => 'Google\\AdsApi\\AdManager\\v201905\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201905\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201905\\RangeError',
      'ReconciliationError' => 'Google\\AdsApi\\AdManager\\v201905\\ReconciliationError',
      'ReconciliationLineItemReport' => 'Google\\AdsApi\\AdManager\\v201905\\ReconciliationLineItemReport',
      'ReconciliationLineItemReportPage' => 'Google\\AdsApi\\AdManager\\v201905\\ReconciliationLineItemReportPage',
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
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'getReconciliationLineItemReportsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getReconciliationLineItemReportsByStatementResponse',
      'updateReconciliationLineItemReportsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updateReconciliationLineItemReportsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/ReconciliationLineItemReportService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationLineItemReportPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getReconciliationLineItemReportsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getReconciliationLineItemReportsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link ReconciliationLineItemReport} objects which belong to same
     * {@link ReconciliationReport}.
     *
     * {@link ReconciliationLineItemReport reconciliation line item reports} to update
     *
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationLineItemReport[] $reconciliationLineItemReports
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationLineItemReport[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updateReconciliationLineItemReports(array $reconciliationLineItemReports)
    {
      return $this->__soapCall('updateReconciliationLineItemReports', array(array('reconciliationLineItemReports' => $reconciliationLineItemReports)))->getRval();
    }

}
