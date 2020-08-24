<?php
/**
 * Copyright 2016, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\AdsApi\AdWords\Reporting\v201809;

use Google\AdsApi\AdWords\v201809\cm\Selector;

/**
 * Represents a report definition containing its details, such as name, type,
 * date range.
 */
final class ReportDefinition
{

    private $selector;
    private $reportName;
    private $reportType;
    private $dateRangeType;
    private $downloadFormat;

    /**
     * Creates a report definition instance with the specified properties.
     *
     * @param Selector $selector
     * @param string $reportName
     * @param string $reportType
     * @param string $dateRangeType
     * @param string $downloadFormat
     */
    public function __construct(
        Selector $selector = null,
        $reportName = null,
        $reportType = null,
        $dateRangeType = null,
        $downloadFormat = null
    ) {
        $this->selector = $selector;
        $this->reportName = $reportName;
        $this->reportType = $reportType;
        $this->dateRangeType = $dateRangeType;
        $this->downloadFormat = $downloadFormat;
    }

    /**
     * Gets the selector of the report definition.
     *
     * @see
     *     https://developers.google.com/adwords/api/docs/appendix/selectorfields#v201809
     * @return Selector
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * Sets the selector of the report definition.
     *
     * @see
     *     https://developers.google.com/adwords/api/docs/appendix/selectorfields#v201809
     * @param Selector $selector
     */
    public function setSelector(Selector $selector)
    {
        $this->selector = $selector;
    }

    /**
     * Gets the report name.
     *
     * @return string
     */
    public function getReportName()
    {
        return $this->reportName;
    }

    /**
     * Sets the report name.
     *
     * @param string $reportName
     */
    public function setReportName($reportName)
    {
        $this->reportName = $reportName;
    }

    /**
     * Gets the report type.
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->reportType;
    }

    /**
     * Sets the report type.
     *
     * @param string $reportType
     */
    public function setReportType($reportType)
    {
        $this->reportType = $reportType;
    }

    /**
     * Gets the date range type.
     *
     * @see
     *     https://developers.google.com/adwords/api/docs/guides/reporting#xml-schema-definition
     * @return string
     */
    public function getDateRangeType()
    {
        return $this->dateRangeType;
    }

    /**
     * Sets the date range type.
     *
     * @see
     *     https://developers.google.com/adwords/api/docs/guides/reporting#xml-schema-definition
     * @param string $dateRangeType
     */
    public function setDateRangeType($dateRangeType)
    {
        $this->dateRangeType = $dateRangeType;
    }

    /**
     * Gets the download format.
     *
     * @see
     *     https://developers.google.com/adwords/api/docs/guides/reporting#supported-download-formats
     * @return string
     */
    public function getDownloadFormat()
    {
        return $this->downloadFormat;
    }

    /**
     * Sets the download format.
     *
     * @see
     *     https://developers.google.com/adwords/api/docs/guides/reporting#supported-download-formats
     * @param string $downloadFormat
     */
    public function setDownloadFormat($downloadFormat)
    {
        $this->downloadFormat = $downloadFormat;
    }
}
