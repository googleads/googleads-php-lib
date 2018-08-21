<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\AdManager\Util\v201711;

use InvalidArgumentException;

/**
 * A utility class for processing and handling CSV files.
 */
class CsvFiles
{

    /**
     * This class is meant to be used statically.
     */
    private function __construct()
    {
    }

    /**
     * Writes the CSV data to a file located at `$fileName`.
     *
     * @param array $csvData the CSV data including the header
     * @param string $fileName the file to write the CSV data to
     * @throws InvalidArgumentException if `$csvData` is null or
     *     `$fileName` is null
     */
    public static function writeCsv(array $csvData, $fileName)
    {
        if (is_null($fileName)) {
            throw new InvalidArgumentException('File name is null.');
        }

        $handle = null;

        try {
            $handle = fopen($fileName, 'w');
            self::writeCsvToStream($csvData, $handle);
        } finally {
            if (isset($handle)) {
                fclose($handle);
            }
        }
    }

    /**
     * Writes the CSV data to a stream handle.
     *
     * @param array $csvData the CSV data including the header
     * @param resource $handle the stream handle to write the CSV data to
     * @throws InvalidArgumentException if `$csvData` is null or
     *     `$fileName` is null
     */
    public static function writeCsvToStream(array $csvData, $handle)
    {
        if (is_null($handle)) {
            throw new InvalidArgumentException('File handle is null.');
        }

        foreach ($csvData as $line) {
            fputcsv($handle, $line);
        }
    }
}
