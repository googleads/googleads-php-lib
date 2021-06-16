<?php
/**
 * Copyright 2018 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\AdWords\Query\v201809;

use Google\AdsApi\AdWords\v201809\cm\ReportDefinitionReportType;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ReportQuery`.
 *
 * @see ReportQuery
 * @small
 */
class ReportQueryTest extends TestCase
{

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQuery::__toString
     */
    public function testToString()
    {
        $builder = new ReportQueryBuilder();
        $query = $builder->select(['Id', 'Criteria', 'AdGroupName'])
            ->from(ReportDefinitionReportType::KEYWORDS_PERFORMANCE_REPORT)
            ->build();

        $this->assertEquals(
            'SELECT Id, Criteria, AdGroupName FROM KEYWORDS_PERFORMANCE_REPORT',
            "$query"
        );
    }
}
