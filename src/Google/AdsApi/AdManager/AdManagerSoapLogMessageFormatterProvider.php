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

namespace Google\AdsApi\AdManager;

use Google\AdsApi\Common\SoapLogMessageFormatter;
use Google\AdsApi\Common\SoapLogMessageFormatterProvider;

/**
 * Provides SOAP log message formatters for Ad Manager.
 */
final class AdManagerSoapLogMessageFormatterProvider implements SoapLogMessageFormatterProvider
{

    private static $HTTP_HEADERS_TO_SCRUB = ['Authorization'];
    private static $ADDITIONAL_REQUEST_SUMMARY_HEADERS = ['networkCode'];

    /**
     * @see SoapLogMessageFormatterProvider::getSoapLogMessageFormatter
     */
    public function getSoapLogMessageFormatter()
    {
        return new SoapLogMessageFormatter(
            self::$HTTP_HEADERS_TO_SCRUB,
            null,
            null,
            self::$ADDITIONAL_REQUEST_SUMMARY_HEADERS
        );
    }
}
