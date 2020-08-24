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

use Google\AdsApi\AdWords\ReportSettingsBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ReportSettingsBuilder`.
 *
 * @see ReportSettingsBuilder
 * @small
 */
class ReportSettingsBuilderTest extends TestCase
{

    private $reportSettingsBuilder;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $this->reportSettingsBuilder = new ReportSettingsBuilder();
    }

    /**
     * @covers Google\AdsApi\AdWords\ReportSettingsBuilder::from
     */
    public function testBuildFrom()
    {
        $valueMap = [
            ['isSkipReportHeader', 'ADWORDS_REPORTING', 'true'],
            ['isSkipColumnHeader', 'ADWORDS_REPORTING', 'true'],
            ['isSkipReportSummary', 'ADWORDS_REPORTING', 'false'],
            ['isUseRawEnumValues', 'ADWORDS_REPORTING', 'false'],
        ];
        $configurationMock = $this->getMockBuilder(Configuration::class)
            ->disableOriginalConstructor()
            ->getMock();
        $configurationMock->expects($this->any())
            ->method('getConfiguration')
            ->will($this->returnValueMap($valueMap));

        $reportSettings = $this->reportSettingsBuilder
            ->from($configurationMock)
            ->build();
        $this->assertSame(true, $reportSettings->isSkipReportHeader());
        $this->assertSame(true, $reportSettings->isSkipColumnHeader());
        $this->assertSame(false, $reportSettings->isSkipReportSummary());
        $this->assertSame(false, $reportSettings->isUseRawEnumValues());
    }

    /**
     * @covers Google\AdsApi\AdWords\ReportSettingsBuilder::from
     */
    public function testBuildFromDefaults()
    {
        $configurationMock = $this->getMockBuilder(Configuration::class)
            ->disableOriginalConstructor()
            ->getMock();
        $configurationMock->expects($this->any())
            ->method('getConfiguration')
            ->will($this->returnValueMap([]));

        $reportSettings = $this->reportSettingsBuilder
            ->from($configurationMock)
            ->build();
        $this->assertSame(false, $reportSettings->isSkipReportHeader());
        $this->assertSame(false, $reportSettings->isSkipColumnHeader());
        $this->assertSame(false, $reportSettings->isSkipReportSummary());
        $this->assertSame(false, $reportSettings->isUseRawEnumValues());
        $this->assertNull($reportSettings->isIncludeZeroImpressions());
    }

    /**
     * @covers Google\AdsApi\AdWords\ReportSettingsBuilder::build
     */
    public function testBuild()
    {
        $reportSettings = $this->reportSettingsBuilder
            ->skipReportHeader(true)
            ->skipColumnHeader(false)
            ->skipReportSummary(true)
            ->useRawEnumValues(false)
            ->build();
        $this->assertSame(true, $reportSettings->isSkipReportHeader());
        $this->assertSame(false, $reportSettings->isSkipColumnHeader());
        $this->assertSame(true, $reportSettings->isSkipReportSummary());
        $this->assertSame(false, $reportSettings->isUseRawEnumValues());
    }

    /**
     * @covers Google\AdsApi\AdWords\ReportSettingsBuilder::build
     */
    public function testBuildDefaults()
    {
        $reportSettings = $this->reportSettingsBuilder->build();
        $this->assertFalse($reportSettings->isSkipReportHeader());
        $this->assertFalse($reportSettings->isSkipColumnHeader());
        $this->assertFalse($reportSettings->isSkipReportSummary());
        $this->assertFalse($reportSettings->isUseRawEnumValues());
        $this->assertNull($reportSettings->isIncludeZeroImpressions());
    }

    /**
     * @covers Google\AdsApi\AdWords\ReportSettingsBuilder::build
     */
    public function testCopyConstructor()
    {
        $reportSettings = $this->reportSettingsBuilder
            ->skipReportHeader(true)
            ->skipColumnHeader(true)
            ->skipReportSummary(true)
            ->useRawEnumValues(false)
            ->includeZeroImpressions(true)
            ->build();

        $reportSettingsBuilder = new ReportSettingsBuilder($reportSettings);
        $newReportSettings = $reportSettingsBuilder->build();
        $this->assertTrue($newReportSettings->isSkipReportHeader());
        $this->assertTrue($newReportSettings->isSkipColumnHeader());
        $this->assertTrue($newReportSettings->isSkipReportSummary());
        $this->assertFalse($newReportSettings->isUseRawEnumValues());
        $this->assertTrue($newReportSettings->isIncludeZeroImpressions());
    }
}
