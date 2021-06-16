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
 * Provides testing data for the `ConfigurationLoaderTest`.
 *
 * @see Google\AdsApi\Common\ConfigurationLoaderTest
 */
class ConfigurationLoaderTestProvider
{

    /**
     * Gets the absolute filepath to the fake INI file used for
     * `ConfigurationLoader` tests.
     *
     * @return string
     */
    public static function getFilePathForTestIniFile()
    {
        return dirname(__FILE__) . DIRECTORY_SEPARATOR . 'adsapi_php.ini';
    }

    /**
     * Gets the absolute filepath to the fake home directory for
     * `ConfigurationLoader` tests.
     *
     * @return string
     */
    public static function getFilePathToFakeHome()
    {
        return dirname(__FILE__) . DIRECTORY_SEPARATOR . 'fakehome';
    }
}
