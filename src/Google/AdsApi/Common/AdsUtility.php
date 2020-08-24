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

/**
 * Utilities whose usage can be logged.
 */
final class AdsUtility
{
    const BATCH_JOBS = 'BatchJobHelper';
    const REPORT_DOWNLOADER_FILE = 'ReportDownloader/file';
    const REPORT_DOWNLOADER_STREAM = 'ReportDownloader/stream';
    const REPORT_DOWNLOADER_STRING = 'ReportDownloader/string';
    const SERVICE_QUERY_BUILDER = "ServiceQueryBuilder";
    const REPORT_QUERY_BUILDER = "ReportQueryBuilder";
}
