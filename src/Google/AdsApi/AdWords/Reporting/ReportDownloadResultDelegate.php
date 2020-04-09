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

use Psr\Http\Message\ResponseInterface;

/**
 * A delegate of `ReportDownloadResult`, which shouldn't be used directly.
 */
final class ReportDownloadResultDelegate
{

    private $response;

    /**
     * Creates a report download result delegate with the Guzzle response
     * containing the report.
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * @see ReportDownloadResult::getStream
     */
    public function getStream()
    {
        return $this->response->getBody();
    }

    /**
     * @see ReportDownloadResult::getAsString
     */
    public function getAsString()
    {
        $result = $this->response->getBody()->getContents();
        $this->response->getBody()->close();

        return $result;
    }

    /**
     * @see ReportDownloadResult::saveToFile
     */
    public function saveToFile($filePath)
    {
        $destStream = \GuzzleHttp\Psr7\stream_for(
            \GuzzleHttp\Psr7\try_fopen($filePath, 'wb')
        );
        \GuzzleHttp\Psr7\copy_to_stream(
            $this->response->getBody(),
            $destStream
        );
        $destStream->close();
        $this->response->getBody()->close();
    }
}
