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

namespace Google\AdsApi\AdManager\Testing;

/**
 * Provides test data for Ad Manager report downloader tests.
 */
class ReportDownloaderTestProvider
{

    /**
     * Gets the contents of a fake Ad Manager report for testing.
     *
     * @return string
     */
    public static function getFakeReport()
    {
        return file_get_contents(
            dirname(__FILE__)
            . DIRECTORY_SEPARATOR
            . 'inventory-report-A1bc23.csv.gz'
        );
    }
}
