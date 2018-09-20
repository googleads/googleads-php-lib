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

namespace Google\AdsApi\AdWords\Query\v201802;

use Google\AdsApi\AdWords\v201802\cm\AdGroupBidLandscape;
use Google\AdsApi\AdWords\v201802\cm\AdGroupBidLandscapePage;
use Google\AdsApi\AdWords\v201802\cm\CampaignPage;
use Google\AdsApi\AdWords\v201802\cm\CriterionBidLandscape;
use Google\AdsApi\AdWords\v201802\cm\CriterionBidLandscapePage;
use InvalidArgumentException;
use OutOfBoundsException;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ServiceQuery`.
 *
 * @see ServiceQuery
 * @small
 */
class ServiceQueryTest extends TestCase
{


    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     */
    public function testQueryStringWithLimitKeywordInLiteralString()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder
            ->select(['Id', 'Name'])
            ->where('Name')->equalTo('THE LIMIT INC')
            ->orderByDesc('Name')
            ->limit(1, 2)
            ->build();

        $this->assertEquals(
            'SELECT Id, Name WHERE Name = \'THE LIMIT INC\'' .
            ' ORDER BY Name DESC LIMIT 1,2',
            "$query"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     */
    public function testQueryStringWithLimitKeywordInLiteralStringWithSingleQuotes()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder
            ->select(['Id', 'Name'])
            ->where('Name')->equalTo("I'M THE LIMIT INC")
            ->orderByDesc('Name')
            ->limit(1, 2)
            ->build();

        $this->assertEquals(
            'SELECT Id, Name WHERE Name = \'I\\\'M THE LIMIT INC\'' .
            ' ORDER BY Name DESC LIMIT 1,2',
            "$query"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     */
    public function testQueryStringWithLimitKeywordInLiteralStringWithDoubleQuotes()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder
            ->select(['Id', 'Name'])
            ->where('Name')->equalTo('THE "LIMIT" INC')
            ->orderByDesc('Name')
            ->limit(1, 2)
            ->build();

        $this->assertEquals(
            'SELECT Id, Name WHERE Name = \'THE \"LIMIT\" INC\'' .
            ' ORDER BY Name DESC LIMIT 1,2',
            "$query"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     */
    public function testQueryStringWithLimitKeywordInLiteralStringLowerCase()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder
            ->select(['Id', 'Name'])
            ->where('Name')->equalTo('the limit inc')
            ->orderByDesc('Name')
            ->limit(1, 2)
            ->build();

        $this->assertEquals(
            'SELECT Id, Name WHERE Name = \'the limit inc\'' .
            ' ORDER BY Name DESC LIMIT 1,2',
            "$query"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage both
     */
    public function testValidationWithStartIndexIsNullButPageSizeIsSpecified()
    {
        $builder = new ServiceQueryBuilder();
        $builder->select(['Id'])->limit(null, 1)->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage both
     */
    public function testValidationWithStartIndexIsSpecifiedButPageSizeIsNull()
    {
        $builder = new ServiceQueryBuilder();
        $builder->select(['Id'])->limit(0, null)->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     *
     * @expectedException OutOfBoundsException
     * @expectedExceptionMessage start index
     */
    public function testValidationWithNegativeStartIndex()
    {
        $builder = new ServiceQueryBuilder();
        $builder->select(['Id'])->limit(-1, 1)->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     *
     * @expectedException OutOfBoundsException
     * @expectedExceptionMessage page size
     */
    public function testValidationWithZeroPageSize()
    {
        $builder = new ServiceQueryBuilder();
        $builder->select(['Id'])->limit(0, 0)->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage start index
     */
    public function testValidationWithFloatNumberAsStartIndex()
    {
        $builder = new ServiceQueryBuilder();
        $builder->select(['Id'])->limit(1.1, 1)->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__construct
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage page size
     */
    public function testValidationWithFloatNumberAsPageSize()
    {
        $builder = new ServiceQueryBuilder();
        $builder->select(['Id'])->limit(0, 1.1)->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::__toString
     */
    public function testToString()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['Id', 'Name'])
            ->orderByDesc('Name')
            ->limit(0, 50)
            ->build();

        $this->assertEquals(
            'SELECT Id, Name ORDER BY Name DESC LIMIT 0,50',
            "$query"
        );
    }

    private function createMockPage($totalNumEntries)
    {
        $page = $this->getMockBuilder(CampaignPage::class)->getMock();
        $page->method('getTotalNumEntries')
            ->willReturn($totalNumEntries);
        return $page;
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWith1Page()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['Id', 'Name'])
            ->orderByDesc('Name')
            ->limit(0, 50)
            ->build();

        $page = $this->createMockPage(50);
        $this->assertFalse($query->hasNext($page));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWith2Pages()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['Id', 'Name'])
            ->orderByDesc('Name')
            ->limit(0, 50)
            ->build();

        $page = $this->createMockPage(51);
        $this->assertTrue($query->hasNext($page));
    }

    /**
     * Creates mock bid landscape page with entries.
     *
     * @param string $pageClass class name for mocking a page
     * @param array $entries entries of the mock page
     * @return mixed a mock bid landscape page with entries
     */
    private function createMockBidLandscapePage(
        $pageClass,
        $entries
    ) {
        $page = $this->getMockBuilder($pageClass)->getMock();
        $page->method('getEntries')->willReturn($entries);
        return $page;
    }

    private function createMockBidLandscapeEntries(
        $entryClass,
        $countOfLandscapePoints
    ) {
        $mockEntry = $this->getMockBuilder($entryClass)->getMock();
        $mockEntry->method('getLandscapePoints')
            ->willReturn(range(1, $countOfLandscapePoints));
        return [$mockEntry];
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWithNullAdGroupBidLandscapePage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['AdGroupId'])
            ->orderByDesc('StartDate')
            ->limit(0, 50)
            ->build();

        $page = $this->createMockBidLandscapePage(
            AdGroupBidLandscapePage::class,
            null
        );
        $this->assertFalse($query->hasNext($page));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWithEmptyAdGroupBidLandscapePage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['AdGroupId'])
            ->orderByDesc('StartDate')
            ->limit(0, 50)
            ->build();

        $page = $this->createMockBidLandscapePage(
            AdGroupBidLandscapePage::class,
            []
        );
        $this->assertFalse($query->hasNext($page));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWith1AdGroupBidLandscapePage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['AdGroupId'])
            ->orderByDesc('StartDate')
            ->limit(0, 50)
            ->build();

        $mockEntries = $this->createMockBidLandscapeEntries(
            AdGroupBidLandscape::class,
            49
        );
        $page = $this->createMockBidLandscapePage(
            AdGroupBidLandscapePage::class,
            $mockEntries
        );
        $this->assertFalse($query->hasNext($page));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWith2AdGroupBidLandscapePage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['AdGroupId'])
            ->orderByDesc('StartDate')
            ->limit(0, 50)
            ->build();

        $mockEntries = $this->createMockBidLandscapeEntries(
            AdGroupBidLandscape::class,
            50
        );
        $page = $this->createMockBidLandscapePage(
            AdGroupBidLandscapePage::class,
            $mockEntries
        );
        $this->assertTrue($query->hasNext($page));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWithNullCriterionBidLandscapePage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['CriterionId'])
            ->orderByDesc('StartDate')
            ->limit(0, 50)
            ->build();

        $page = $this->createMockBidLandscapePage(
            CriterionBidLandscapePage::class,
            null
        );
        $this->assertFalse($query->hasNext($page));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWithEmptyCriterionBidLandscapePage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['CriterionId'])
            ->orderByDesc('StartDate')
            ->limit(0, 50)
            ->build();

        $page = $this->createMockBidLandscapePage(
            CriterionBidLandscapePage::class,
            []
        );
        $this->assertFalse($query->hasNext($page));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWith1CriterionBidLandscapePage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['CriterionId'])
            ->orderByDesc('StartDate')
            ->limit(0, 50)
            ->build();

        $mockEntries = $this->createMockBidLandscapeEntries(
            CriterionBidLandscape::class,
            49
        );
        $page = $this->createMockBidLandscapePage(
            CriterionBidLandscapePage::class,
            $mockEntries
        );
        $this->assertFalse($query->hasNext($page));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::hasNext
     */
    public function testHasNextWith2CriterionBidLandscapePage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['CriterionId'])
            ->orderByDesc('StartDate')
            ->limit(0, 50)
            ->build();

        $mockEntries = $this->createMockBidLandscapeEntries(
            CriterionBidLandscape::class,
            50
        );
        $page = $this->createMockBidLandscapePage(
            CriterionBidLandscapePage::class,
            $mockEntries
        );
        $this->assertTrue($query->hasNext($page));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::nextPage
     */
    public function testNextPage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['Id', 'Name'])
            ->orderByDesc('Name')
            ->limit(3, 50)
            ->build();

        $query->nextPage();

        $this->assertEquals(
            'SELECT Id, Name ORDER BY Name DESC LIMIT 53,50',
            "$query"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::nextPage
     */
    public function testNextPageMultipleTimes()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['Id', 'Name'])
            ->orderByDesc('Name')
            ->limit(9, 50)
            ->build();

        $query->nextPage()->nextPage()->nextPage();

        $this->assertEquals(
            'SELECT Id, Name ORDER BY Name DESC LIMIT 159,50',
            "$query"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::nextPage
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage type
     */
    public function testNextPageWithInvalidPageType()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['AdGroupId'])
            ->orderByDesc('StartDate')
            ->limit(0, 50)
            ->build();

        $page = $this->createMockPage(49);
        $query->nextPage($page);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQuery::nextPage
     */
    public function testNextPageWithAdGroupBidLandscapePage()
    {
        $builder = new ServiceQueryBuilder();
        $query = $builder->select(['AdGroupId'])
            ->orderByDesc('StartDate')
            ->limit(3, 50)
            ->build();

        $mockEntries = $this->createMockBidLandscapeEntries(
            AdGroupBidLandscape::class,
            50
        );
        $page = $this->createMockBidLandscapePage(
            AdGroupBidLandscapePage::class,
            $mockEntries
        );

        $query->nextPage($page);

        $this->assertEquals(
            'SELECT AdGroupId ORDER BY StartDate DESC LIMIT 53,50',
            "$query"
        );
    }
}
