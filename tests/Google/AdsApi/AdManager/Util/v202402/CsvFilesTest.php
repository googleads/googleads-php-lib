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

namespace Google\AdsApi\AdManager\Util\v202402;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `CsvFiles`.
 *
 * @see CsvFiles
 * @group small
 */
class CsvFilesTest extends TestCase
{

    const IN_MEMORY_FILE_PATH = 'php://temp/maxmemory:1024';
    private $resultSet;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp(): void
    {
        $this->resultSet = [
            ['id', 'name', 'note'],
            ['id1', 'name1', 'note1'],
            ['id', null]
        ];
    }

    /**
     * @covers \Google\AdsApi\AdManager\Util\v202402\CsvFiles::writeCsv
     */
    public function testWriteCsvWithNullFileName()
    {
        $this->expectException(InvalidArgumentException::class);
        CsvFiles::writeCsv([], null);
    }

    /**
     * @covers \Google\AdsApi\AdManager\Util\v202402\CsvFiles::writeCsv
     */
    public function testWriteCsv()
    {
        $tmpHandle = tmpfile();
        $metaData = stream_get_meta_data($tmpHandle);
        $tmpFilename = $metaData['uri'];

        CsvFiles::writeCsv($this->resultSet, $tmpFilename);

        fseek($tmpHandle, 0);
        $actual = fread($tmpHandle, 1024);
        fclose($tmpHandle);

        $this->assertEquals("id,name,note\nid1,name1,note1\nid,\n", $actual);
    }
    /**
     * Verify that data is written completely and correctly in CSV format
     * to a stream.
     *
     * @covers \Google\AdsApi\AdManager\Util\v202402\CsvFiles::writeCsvToStream
     */
    public function testWriteCsvToStream()
    {
        // Write the test data in CSV format to the in-memory stream.
        // Then, leave the pointer open and rewind it to the start position
        // for reading.
        $stream = fopen(self::IN_MEMORY_FILE_PATH, 'wr');
        CsvFiles::writeCsvToStream($this->resultSet, $stream);
        rewind($stream);

        // Read the CSV string and rebuild an array.
        // This array must match with the test data.
        $actualData = [];
        $readLine = fgetcsv($stream);
        while ($readLine !== false) {
            $readRow = [];
            $fieldCount = count($readLine);
            for ($field = 0; $field < $fieldCount; $field++) {
                $readRow[] = $readLine[$field];
            }
            $actualData[] = $readRow;
            $readLine = fgetcsv($stream);
        }
        fclose($stream);

        // Verify that the data is consistent after writing and reading CSV.
        $expectedRowCount = count($this->resultSet);
        $this->assertCount($expectedRowCount, $actualData);
        for ($i = 0; $i < $expectedRowCount; $i++) {
            $expectedRow = $this->resultSet[$i];
            $actualRow = $actualData[$i];
            $expectedFieldCount = count($expectedRow);
            $this->assertCount($expectedFieldCount, $actualRow);
            for ($j = 0; $j < $expectedFieldCount; $j++) {
                $this->assertEquals(
                    $expectedRow[$j],
                    $actualRow[$j],
                    sprintf("Mismatch found at row %d, col %d\n", $i, $j)
                );
            }
        }
    }
}
