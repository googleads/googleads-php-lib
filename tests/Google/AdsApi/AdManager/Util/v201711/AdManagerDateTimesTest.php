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

use DateTime;
use DateTimeZone;
use Google\AdsApi\AdManager\v201711\Date;
use Google\AdsApi\AdManager\v201711\DateTime as AdManagerDateTime;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `AdManagerDateTimes`.
 *
 * @see AdManagerDateTimes
 * @small
 */
class AdManagerDateTimesTest extends TestCase
{

    const TIME_ZONE_ID1 = 'America/New_York';
    const TIME_ZONE_ID2 = 'PST8PDT';
    const TIME_ZONE_ID3 = 'Europe/Moscow';
    const TIME_ZONE_ID4 = 'UTC';

    private $dateTime1;
    private $dateTime2;
    private $dateTime3;
    private $adManagerDateTime1;
    private $adManagerDateTime2;
    private $adManagerDateTime3;

    private $stringDateTime1;
    private $stringDateTime2;
    private $stringDateTime3;
    private $stringDateTime4;
    private $stringDateTimeWithTimeZone1;
    private $stringDateTimeWithTimeZone2;
    private $stringDateTimeWithTimeZone3;
    private $stringDateTimeWithTimeZone4;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $this->stringDateTime1 = '1983-06-02T08:30:15';
        $this->stringDateTime2 = '2015-06-02T00:00:00';
        $this->stringDateTime3 = '1983-06-02T08:30:15';
        $this->stringDateTime4 = '2015-11-11T11:23:13';

        $this->stringDateTimeWithTimeZone1 = '1983-06-02T08:30:15-04:00';
        $this->stringDateTimeWithTimeZone2 = '2015-06-02T00:00:00-07:00';
        $this->stringDateTimeWithTimeZone3 = '1983-06-02T08:30:15+04:00';
        $this->stringDateTimeWithTimeZone4 = '2015-11-11T11:23:13+00:00';

        $this->dateTime1 = new DateTime(
            $this->stringDateTime1,
            new DateTimeZone(self::TIME_ZONE_ID1)
        );
        $this->dateTime2 = new DateTime(
            $this->stringDateTime2,
            new DateTimeZone(self::TIME_ZONE_ID2)
        );
        $this->dateTime3 = new DateTime(
            $this->stringDateTime3,
            new DateTimeZone(self::TIME_ZONE_ID3)
        );
        $this->dateTime4 = new DateTime(
            $this->stringDateTime4,
            new DateTimeZone(self::TIME_ZONE_ID4)
        );

        $this->adManagerDateTime1 = new AdManagerDateTime(
            new Date(1983, 6, 2),
            8,
            30,
            15,
            self::TIME_ZONE_ID1
        );
        $this->adManagerDateTime2 = new AdManagerDateTime(
            new Date(2015, 6, 2),
            0,
            0,
            0,
            self::TIME_ZONE_ID2
        );
        $this->adManagerDateTime3 = new AdManagerDateTime(
            new Date(1983, 6, 2),
            8,
            30,
            15,
            self::TIME_ZONE_ID3
        );
        $this->adManagerDateTime4 = new AdManagerDateTime(
            new Date(2015, 11, 11),
            11,
            23,
            13,
            self::TIME_ZONE_ID4
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\Util\v201711\AdManagerDateTimes::fromDateTime
     */
    public function testFromDateTime()
    {
        $this->assertTrue(
            $this->assertSameAdManagerDateTime(
                $this->adManagerDateTime1,
                AdManagerDateTimes::fromDateTime($this->dateTime1)
            )
        );
        $this->assertTrue(
            $this->assertSameAdManagerDateTime(
                $this->adManagerDateTime2,
                AdManagerDateTimes::fromDateTime($this->dateTime2)
            )
        );
        $this->assertTrue(
            $this->assertSameAdManagerDateTime(
                $this->adManagerDateTime3,
                AdManagerDateTimes::fromDateTime($this->dateTime3)
            )
        );
        $this->assertTrue(
            $this->assertSameAdManagerDateTime(
                $this->adManagerDateTime4,
                AdManagerDateTimes::fromDateTime($this->dateTime4)
            )
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\Util\v201711\AdManagerDateTimes::fromDateTimeString
     */
    public function testFromDateTimeString()
    {
        $this->assertTrue(
            $this->assertSameAdManagerDateTime(
                $this->adManagerDateTime1,
                AdManagerDateTimes::fromDateTimeString(
                    $this->stringDateTimeWithTimeZone1
                )
            )
        );
        $this->assertTrue(
            $this->assertSameAdManagerDateTime(
                $this->adManagerDateTime2,
                AdManagerDateTimes::fromDateTimeString(
                    $this->stringDateTimeWithTimeZone2
                )
            )
        );
        $this->assertTrue(
            $this->assertSameAdManagerDateTime(
                $this->adManagerDateTime3,
                AdManagerDateTimes::fromDateTimeString(
                    $this->stringDateTimeWithTimeZone3
                )
            )
        );
        $this->assertTrue(
            $this->assertSameAdManagerDateTime(
                $this->adManagerDateTime4,
                AdManagerDateTimes::fromDateTimeString(
                    $this->stringDateTimeWithTimeZone4
                )
            )
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\Util\v201711\AdManagerDateTimes::toDateTime
     */
    public function testToDateTime()
    {
        $this->assertTrue(
            $this->assertSameDateTime(
                $this->dateTime1,
                AdManagerDateTimes::toDateTime($this->adManagerDateTime1)
            )
        );
        $this->assertTrue(
            $this->assertSameDateTime(
                $this->dateTime2,
                AdManagerDateTimes::toDateTime($this->adManagerDateTime2)
            )
        );
        $this->assertTrue(
            $this->assertSameDateTime(
                $this->dateTime3,
                AdManagerDateTimes::toDateTime($this->adManagerDateTime3)
            )
        );
        $this->assertTrue(
            $this->assertSameDateTime(
                $this->dateTime4,
                AdManagerDateTimes::toDateTime($this->adManagerDateTime4)
            )
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\Util\v201711\AdManagerDateTimes::toDateTimeString
     */
    public function testToDateTimeString()
    {
        $this->assertSame(
            $this->stringDateTimeWithTimeZone1,
            AdManagerDateTimes::toDateTimeString($this->adManagerDateTime1)
        );
        $this->assertSame(
            $this->stringDateTimeWithTimeZone2,
            AdManagerDateTimes::toDateTimeString($this->adManagerDateTime2)
        );
        $this->assertSame(
            $this->stringDateTimeWithTimeZone3,
            AdManagerDateTimes::toDateTimeString($this->adManagerDateTime3)
        );
        $this->assertSame(
            $this->stringDateTimeWithTimeZone4,
            AdManagerDateTimes::toDateTimeString($this->adManagerDateTime4)
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\Util\v201711\AdManagerDateTimes::toDateTimeString
     */
    public function testToDateTimeStringWithSameTimeZoneIsNoOp()
    {
        // Testing no-ops
        $this->assertSame(
            $this->stringDateTimeWithTimeZone1,
            AdManagerDateTimes::toDateTimeString(
                $this->adManagerDateTime1,
                self::TIME_ZONE_ID1
            )
        );
        $this->assertSame(
            $this->stringDateTimeWithTimeZone2,
            AdManagerDateTimes::toDateTimeString(
                $this->adManagerDateTime2,
                self::TIME_ZONE_ID2
            )
        );
        $this->assertSame(
            $this->stringDateTimeWithTimeZone3,
            AdManagerDateTimes::toDateTimeString(
                $this->adManagerDateTime3,
                self::TIME_ZONE_ID3
            )
        );
        $this->assertSame(
            $this->stringDateTimeWithTimeZone4,
            AdManagerDateTimes::toDateTimeString(
                $this->adManagerDateTime4,
                self::TIME_ZONE_ID4
            )
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\Util\v201711\AdManagerDateTimes::toDateTimeString
     */
    public function testToDateTimeStringWithDaylightSavingRules()
    {
        $this->assertSame(
            '1983-06-02T16:30:15+04:00',
            AdManagerDateTimes::toDateTimeString(
                $this->adManagerDateTime1,
                self::TIME_ZONE_ID3
            )
        );
        // Moscow abolished daylight saving in 2015.
        $this->assertSame(
            '2015-06-02T10:00:00+03:00',
            AdManagerDateTimes::toDateTimeString(
                $this->adManagerDateTime2,
                self::TIME_ZONE_ID3
            )
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\Util\v201711\AdManagerDateTimes::toDateTimeString
     */
    public function testToDateTimeStringTimezoneOnDifferentDay()
    {
        // Ad Manager date time 3 is a day behind in time zone 2.
        $this->assertSame(
            '1983-06-01T21:30:15-07:00',
            AdManagerDateTimes::toDateTimeString(
                $this->adManagerDateTime3,
                self::TIME_ZONE_ID2
            )
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\Util\v201711\AdManagerDateTimes::toDateTimeString
     */
    public function testToDateTimeStringTimezoneUtc()
    {
        $this->assertSame(
            '1983-06-02T12:30:15+00:00',
            AdManagerDateTimes::toDateTimeString(
                $this->adManagerDateTime1,
                self::TIME_ZONE_ID4
            )
        );
    }

    /**
     * Returns true if every field of the two specified Ad Manager date time
     * objects are equal, with the exception of their timezones, which are
     * converted to their GMT offset equivalent and then compared for equality.
     *
     * @param AdManagerDateTime $adManagerDateTime1 the first Ad Manager date
     *     time
     * @param AdManagerDateTime $adManagerDateTime2 the second Ad Manager date
     *     time
     * @return boolean whether the two Ad Manager date times are equal
     */
    private function assertSameAdManagerDateTime(
        AdManagerDateTime $adManagerDateTime1,
        AdManagerDateTime $adManagerDateTime2
    ) {
        // Convert timezones to common format (GMT) so they can be compared.
        $dateTime1 = AdManagerDateTimes::toDateTime($adManagerDateTime1);
        $dateTime2 = AdManagerDateTimes::toDateTime($adManagerDateTime2);
        $timeZonesEqual = $dateTime1->format('P') === $dateTime2->format('P');

        $date1 = $adManagerDateTime1->getDate();
        $date2 = $adManagerDateTime2->getDate();
        return $adManagerDateTime1 === $adManagerDateTime2
            || $date1->getYear() === $date2->getYear()
            && $date1->getMonth() === $date2->getMonth()
            && $date1->getDay() === $date2->getDay()
            && $adManagerDateTime1->getHour() === $adManagerDateTime2->getHour()
            && $adManagerDateTime1->getMinute() === $adManagerDateTime2
                ->getMinute()
            && $adManagerDateTime1->getSecond() === $adManagerDateTime2
                ->getSecond()
            && $timeZonesEqual;
    }

    /**
     * Returns true if the two specified PHP date time objects are equal in
     * their instant.
     *
     * @param DateTime $dateTime1 the first PHP date time
     * @param DateTime $dateTime2 the second PHP date time
     * @return boolean whether the two PHP date times are equal
     */
    private function assertSameDateTime(
        DateTime $dateTime1,
        DateTime $dateTime2
    ) {
        return $dateTime1->format(DateTime::ATOM) === $dateTime2->format(
            DateTime::ATOM
        );
    }
}
