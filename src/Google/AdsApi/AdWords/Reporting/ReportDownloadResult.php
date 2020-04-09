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

namespace Google\AdsApi\AdWords\Reporting;

use Google\AdsApi\Common\AdsUtility;
use Google\AdsApi\Common\AdsUtilityRegistry;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use RuntimeException;

/**
 * A report result downloaded from the AdWords API. The result can be read
 * either in the form of stream or string, or saved to a file only once.
 * Trying to re-use the result will cause an exception to be thrown.
 */
final class ReportDownloadResult
{

    private $reportDownloadResultDelegate;
    private $adsUtilityRegistry;

    /**
     * Creates a report download result with the Guzzle response containing the
     * report.
     *
     * @param ResponseInterface $response
     * @param ReportDownloadResultDelegate|null $reportDownloadResultDelegate
     * @param AdsUtilityRegistry|null $adsUtilityRegistry
     */
    public function __construct(
        ResponseInterface $response,
        ReportDownloadResultDelegate $reportDownloadResultDelegate = null,
        AdsUtilityRegistry $adsUtilityRegistry = null
    ) {
        $this->reportDownloadResultDelegate =
            ($reportDownloadResultDelegate === null)
                ? new ReportDownloadResultDelegate($response)
                : $reportDownloadResultDelegate;
        $this->adsUtilityRegistry = ($adsUtilityRegistry === null)
            ? AdsUtilityRegistry::getInstance()
            : $adsUtilityRegistry;
    }

    /**
     * Gets the report download response as a stream.
     *
     * @return StreamInterface
     */
    public function getStream()
    {
        $this->adsUtilityRegistry->addUtility(
            AdsUtility::REPORT_DOWNLOADER_STREAM
        );

        return $this->reportDownloadResultDelegate->getStream();
    }

    /**
     * Gets the report download response as a string.
     *
     * @return string
     * @throws RuntimeException in case the stream of this download result is
     *     read more than once
     */
    public function getAsString()
    {
        $this->adsUtilityRegistry->addUtility(
            AdsUtility::REPORT_DOWNLOADER_STRING
        );

        return $this->reportDownloadResultDelegate->getAsString();
    }

    /**
     * Writes the contents of the report download response to the specified
     * file.
     *
     * @param string $filePath the path to the file to which the contents are
     *     saved
     * @throws RuntimeException in case the stream of this download result is
     *     read more than once
     */
    public function saveToFile($filePath)
    {
        $this->adsUtilityRegistry->addUtility(
            AdsUtility::REPORT_DOWNLOADER_FILE
        );
        $this->reportDownloadResultDelegate->saveToFile($filePath);
    }
}
