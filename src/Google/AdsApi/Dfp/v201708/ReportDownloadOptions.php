<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReportDownloadOptions
{

    /**
     * @var string $exportFormat
     */
    protected $exportFormat = null;

    /**
     * @var boolean $includeReportProperties
     */
    protected $includeReportProperties = null;

    /**
     * @var boolean $includeTotalsRow
     */
    protected $includeTotalsRow = null;

    /**
     * @var boolean $useGzipCompression
     */
    protected $useGzipCompression = null;

    /**
     * @param string $exportFormat
     * @param boolean $includeReportProperties
     * @param boolean $includeTotalsRow
     * @param boolean $useGzipCompression
     */
    public function __construct($exportFormat = null, $includeReportProperties = null, $includeTotalsRow = null, $useGzipCompression = null)
    {
      $this->exportFormat = $exportFormat;
      $this->includeReportProperties = $includeReportProperties;
      $this->includeTotalsRow = $includeTotalsRow;
      $this->useGzipCompression = $useGzipCompression;
    }

    /**
     * @return string
     */
    public function getExportFormat()
    {
      return $this->exportFormat;
    }

    /**
     * @param string $exportFormat
     * @return \Google\AdsApi\Dfp\v201708\ReportDownloadOptions
     */
    public function setExportFormat($exportFormat)
    {
      $this->exportFormat = $exportFormat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeReportProperties()
    {
      return $this->includeReportProperties;
    }

    /**
     * @param boolean $includeReportProperties
     * @return \Google\AdsApi\Dfp\v201708\ReportDownloadOptions
     */
    public function setIncludeReportProperties($includeReportProperties)
    {
      $this->includeReportProperties = $includeReportProperties;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeTotalsRow()
    {
      return $this->includeTotalsRow;
    }

    /**
     * @param boolean $includeTotalsRow
     * @return \Google\AdsApi\Dfp\v201708\ReportDownloadOptions
     */
    public function setIncludeTotalsRow($includeTotalsRow)
    {
      $this->includeTotalsRow = $includeTotalsRow;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseGzipCompression()
    {
      return $this->useGzipCompression;
    }

    /**
     * @param boolean $useGzipCompression
     * @return \Google\AdsApi\Dfp\v201708\ReportDownloadOptions
     */
    public function setUseGzipCompression($useGzipCompression)
    {
      $this->useGzipCompression = $useGzipCompression;
      return $this;
    }

}
