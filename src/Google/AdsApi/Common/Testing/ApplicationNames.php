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
 * Provides helper methods for testing application names formatted by this
 * client library.
 */
final class ApplicationNames
{

    /**
     * Gets the regex that should match the specified formatted application name.
     *
     * @param string $applicationName the application name
     * @return string the regex
     */
    public function getRegexForFormattedApplicationName($applicationName)
    {
        // Example: 'Google report runner (DfpApi-PHP,
        //     googleads-php-lib2/1.0.0-alpha, PHP/5.5.20)'
        // Example:: 'Google report runner (AwApi-PHP,
        //     googleads-php-lib2/1.0.0-alpha, PHP/5.5.20, BatchJobHelper,
        //     ReportDownloader/file)
        $versionRegex = '\d{1,2}\.\d{1,2}\.\d{1,2}(-.+)?';

        return sprintf(
            '/%s \(.+, .+\/%s, PHP\/%s(, [^,]+)*\)/',
            preg_quote($applicationName),
            $versionRegex,
            preg_quote(PHP_VERSION)
        );
    }
}
