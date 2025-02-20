<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReportService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202502\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202502\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202502\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202502\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202502\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202502\\CommonError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202502\\CurrencyCodeError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202502\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202502\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202502\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202502\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202502\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202502\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202502\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202502\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202502\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202502\\QuotaError',
      'ReportDownloadOptions' => 'Google\\AdsApi\\AdManager\\v202502\\ReportDownloadOptions',
      'ReportError' => 'Google\\AdsApi\\AdManager\\v202502\\ReportError',
      'ReportJob' => 'Google\\AdsApi\\AdManager\\v202502\\ReportJob',
      'ReportQuery' => 'Google\\AdsApi\\AdManager\\v202502\\ReportQuery',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredError',
      'SavedQuery' => 'Google\\AdsApi\\AdManager\\v202502\\SavedQuery',
      'SavedQueryPage' => 'Google\\AdsApi\\AdManager\\v202502\\SavedQueryPage',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202502\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202502\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202502\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202502\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202502\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202502\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202502\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202502\\TextValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v202502\\Value',
      'getReportDownloadURLResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getReportDownloadURLResponse',
      'getReportDownloadUrlWithOptionsResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getReportDownloadUrlWithOptionsResponse',
      'getReportJobStatusResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getReportJobStatusResponse',
      'getSavedQueriesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getSavedQueriesByStatementResponse',
      'runReportJobResponse' => 'Google\\AdsApi\\AdManager\\v202502\\runReportJobResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202502/ReportService?wsdl')
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
     * Returns the URL at which the report file can be downloaded.
     *
     * <p>The report will be generated as a gzip archive, containing the report file itself.
     *
     * @param int $reportJobId
     * @param \Google\AdsApi\AdManager\v202502\ExportFormat $exportFormat Constant: string - Valid values: TSV, TSV_EXCEL, CSV_DUMP, XML, XLSX
     * @return string
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getReportDownloadURL($reportJobId, $exportFormat)
    {
      return $this->__soapCall('getReportDownloadURL', array(array('reportJobId' => $reportJobId, 'exportFormat' => $exportFormat)))->getRval();
    }

    /**
     * Returns the URL at which the report file can be downloaded, and allows for customization of the
     * downloaded report.
     *
     * <p>By default, the report will be generated as a gzip archive, containing the report file
     * itself. This can be changed by setting {@link ReportDownloadOptions#useGzipCompression} to
     * false.
     *
     * @param int $reportJobId
     * @param \Google\AdsApi\AdManager\v202502\ReportDownloadOptions $reportDownloadOptions
     * @return string
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getReportDownloadUrlWithOptions($reportJobId, \Google\AdsApi\AdManager\v202502\ReportDownloadOptions $reportDownloadOptions)
    {
      return $this->__soapCall('getReportDownloadUrlWithOptions', array(array('reportJobId' => $reportJobId, 'reportDownloadOptions' => $reportDownloadOptions)))->getRval();
    }

    /**
     * Returns the {@link ReportJobStatus} of the report job with the specified ID.
     *
     * @param int $reportJobId
     * @return string
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getReportJobStatus($reportJobId)
    {
      return $this->__soapCall('getReportJobStatus', array(array('reportJobId' => $reportJobId)))->getRval();
    }

    /**
     * Retrieves a page of the saved queries either created by or shared with the current user. Each
     * {@link SavedQuery} in the page, if it is compatible with the current API version, will contain
     * a {@link ReportQuery} object which can be optionally modified and used to create a {@link
     * ReportJob}. This can then be passed to {@link ReportService#runReportJob}. The following fields
     * are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link SavedQuery#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link SavedQuery#name}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\SavedQueryPage
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getSavedQueriesByStatement(\Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('getSavedQueriesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Initiates the execution of a {@link ReportQuery} on the server.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link ReportJob#reportQuery}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202502\ReportJob $reportJob
     * @return \Google\AdsApi\AdManager\v202502\ReportJob
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function runReportJob(\Google\AdsApi\AdManager\v202502\ReportJob $reportJob)
    {
      return $this->__soapCall('runReportJob', array(array('reportJob' => $reportJob)))->getRval();
    }

}
