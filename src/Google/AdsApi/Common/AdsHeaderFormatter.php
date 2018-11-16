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

namespace Google\AdsApi\Common;

use GuzzleHttp\ClientInterface;

/**
 * Provides methods related to formatting HTTP and SOAP headers for ads APIs.
 */
final class AdsHeaderFormatter
{

    private $adsUtilityRegistry;
    private $libraryMetadataProvider;

    /**
     * @param AdsUtilityRegistry|null $adsUtilityRegistry the ads utility registry
     * @param LibraryMetadataProvider|null $libraryMetadataProvider the library
     *     metadata provider
     */
    public function __construct(
        AdsUtilityRegistry $adsUtilityRegistry = null,
        LibraryMetadataProvider $libraryMetadataProvider = null
    ) {
        $this->adsUtilityRegistry =
            ($adsUtilityRegistry === null) ? AdsUtilityRegistry::getInstance()
                : $adsUtilityRegistry;
        $this->libraryMetadataProvider =
            ($libraryMetadataProvider === null) ? new LibraryMetadataProvider()
                : $libraryMetadataProvider;
    }

    /**
     * Formats an application name in a format standard to the ads libraries to
     * include in the SOAP header.
     *
     * @param string $applicationName the application name to format
     * @param string $productNameForSoapHeader the ads product API calls are
     *     being made against, formatted to be used in the SOAP header
     * @param boolean $includeUtilityUsage true if logging of utilities usages is
     *     turned on
     * @return string the formatted application name
     */
    public function formatApplicationNameForSoapHeader(
        $applicationName,
        $productNameForSoapHeader,
        $includeUtilityUsage
    ) {
        $adsUtilities = $this->adsUtilityRegistry->popAllUtilities();

        return sprintf(
            '%s (%sApi-PHP, %s/%s, PHP/%s%s)',
            $applicationName,
            $productNameForSoapHeader,
            $this->libraryMetadataProvider->getLibName(),
            $this->libraryMetadataProvider->getLibVersion(),
            PHP_VERSION,
            $this->formatUtilUsages($adsUtilities, $includeUtilityUsage)
        );
    }

    /**
     * Formats an application name in a format standard to the ads libraries to
     * include in the Guzzle HTTP header.
     *
     * @param string $applicationName the application name to format
     * @param string $productName the ads product API calls are being made against
     * @param boolean $includeUtilityUsage true if logging of utilities usages is
     *     turned on
     * @param null|boolean $isReportingGzipEnabled true if the user agent should
     *     include "gzip" to indicate that this request should be gzip-compressed
     * @return string the formatted application name
     */
    public function formatApplicationNameForGuzzleHeader(
        $applicationName,
        $productName,
        $includeUtilityUsage,
        $isReportingGzipEnabled = null
    ) {
        $adsUtilities = $this->adsUtilityRegistry->popAllUtilities();

        return sprintf(
            '%s (%sApi-PHP, %s/%s, PHP/%s, %s%s%s)',
            $applicationName,
            $productName,
            $this->libraryMetadataProvider->getLibName(),
            $this->libraryMetadataProvider->getLibVersion(),
            PHP_VERSION,
            $this->formatGuzzleInfo(),
            $this->formatUtilUsages($adsUtilities, $includeUtilityUsage),
            $isReportingGzipEnabled === true ? ', gzip' : ''
        );
    }

    private function formatUtilUsages($adsUtilities, $includeUtilityUsage)
    {
        if ($includeUtilityUsage === false || empty($adsUtilities)) {
            return '';
        }

        return ', ' . implode(', ', $adsUtilities);
    }

    private function formatGuzzleInfo()
    {
        $guzzleInfoTokens = ['GuzzleHttp/' . ClientInterface::VERSION];
        if (extension_loaded('curl') && function_exists('curl_version')) {
            $guzzleInfoTokens[] = 'curl/' . \curl_version()['version'];
        }

        return implode(', ', $guzzleInfoTokens);
    }
}
