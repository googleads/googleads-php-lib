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

namespace Google\AdsApi\Common\Testing;

/**
 * Provides fake HTTP payloads and logs test data.
 */
class FakeHttpPayloadsAndLogsProvider
{

    /**
     * Gets a fake HTTP report download log using AWQL.
     *
     * @return string
     */
    public static function getFakeReportDownloadLogOfAwql()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'downloadReport-awql-log.txt'
        );
    }

    /**
     * Gets a fake HTTP report download log using report definition.
     *
     * @return string
     */
    public static function getFakeReportDownloadLogOfReportDefinition()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'downloadReport-reportdefinition-log.txt'
        );
    }

    /**
     * Gets a fake scrubbed report donwnload log.
     *
     * @return string
     */
    public static function getScrubbedFakeReportDownloadLog()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'downloadReport-scrubbed-log.txt'
        );
    }

    /**
     * Gets a fake report donwnload log with errors.
     *
     * @return string
     */
    public static function getFakeReportDownloadLogWithErrors()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'downloadReport-logwitherrors.txt'
        );
    }

    /**
     * Gets a fake AWQL report request.
     *
     * @return string
     */
    public static function getFakeAwql()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'downloadReport-awql.txt'
        );
    }

    /**
     * Gets a fake encoded report definition request.
     *
     * @return string
     */
    public static function getFakeEncodedReportDefinition()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'downloadReport-encoded-reportdefinition.txt'
        );
    }

    /**
     * Gets a fake report download results.
     *
     * @return string
     */
    public static function getFakeDownloadReportResult()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'downloadReport-result.txt'
        );
    }
}
