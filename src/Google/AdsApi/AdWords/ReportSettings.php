<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\AdWords;

/**
 * Additional AdWords report settings.
 *
 * @see https://developers.google.com/adwords/api/docs/guides/reporting#http-request
 */
final class ReportSettings
{

    private $isSkipReportHeader;
    private $isSkipColumnHeader;
    private $isSkipReportSummary;
    private $isUseRawEnumValues;
    private $isIncludeZeroImpressions;

    /**
     * Creates a report settings from the specified builder.
     *
     * Do not use this constructor, instances should be created by using the
     * `ReportSettingsBuilder` instead.
     *
     * @param ReportSettingsBuilder $builder the builder to create an instance
     *     of this report settings from
     */
    public function __construct(ReportSettingsBuilder $builder)
    {
        $this->isSkipReportHeader = $builder->isSkipReportHeader();
        $this->isSkipColumnHeader = $builder->isSkipColumnHeader();
        $this->isSkipReportSummary = $builder->isSkipReportSummary();
        $this->isUseRawEnumValues = $builder->isUseRawEnumValues();
        $this->isIncludeZeroImpressions = $builder->isIncludeZeroImpressions();
    }

    /**
     * Whether report responses should skip the header row containing the report
     * name and date range.
     *
     * @return boolean
     */
    public function isSkipReportHeader()
    {
        return $this->isSkipReportHeader;
    }

    /**
     * Whether report responses should skip the header row containing the column
     * names.
     *
     * @return boolean
     */
    public function isSkipColumnHeader()
    {
        return $this->isSkipColumnHeader;
    }

    /**
     * Whether report responses should skip the summary row containing totals.
     *
     * @return boolean
     */
    public function isSkipReportSummary()
    {
        return $this->isSkipReportSummary;
    }

    /**
     * Whether report responses should return enum values instead of enum
     * display values.
     *
     * @return boolean
     */
    public function isUseRawEnumValues()
    {
        return $this->isUseRawEnumValues;
    }

    /**
     * Whether report responses should include zero impression rows.
     *
     * @return boolean|null
     */
    public function isIncludeZeroImpressions()
    {
        return $this->isIncludeZeroImpressions;
    }
}
