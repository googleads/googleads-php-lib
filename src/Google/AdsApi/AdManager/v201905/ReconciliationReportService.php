<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationReportService extends \Google\AdsApi\Common\AdsSoapClient
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
      'ReconciliationImportError' => 'Google\\AdsApi\\AdManager\\v201905\\ReconciliationImportError',
      'ReconciliationReport' => 'Google\\AdsApi\\AdManager\\v201905\\ReconciliationReport',
      'ReconciliationReportPage' => 'Google\\AdsApi\\AdManager\\v201905\\ReconciliationReportPage',
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
      'getReconciliationReportsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getReconciliationReportsByStatementResponse',
      'updateReconciliationReportsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updateReconciliationReportsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/ReconciliationReportService?wsdl')
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
     * Gets an {@link ReconciliationReportPage} of {@link ReconciliationReport} objects that satisfy
     * the given {@link Statement#query}. The following fields are supported for filtering.
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ReconciliationReport#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ReconciliationReport#status}</td>
     * </tr>
     * <tr>
     * <td>{@code startDate}</td>
     * <td>{@link ReconciliationReport#startDate}</td>
     * </tr>
     * </table>
     *
     * filter a set of reconciliation reports
     *
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationReportPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getReconciliationReportsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getReconciliationReportsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ReconciliationReport} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationReport[] $reconciliationReports
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationReport[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updateReconciliationReports(array $reconciliationReports)
    {
      return $this->__soapCall('updateReconciliationReports', array(array('reconciliationReports' => $reconciliationReports)))->getRval();
    }

}
