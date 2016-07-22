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
namespace Google\AdsApi\Dfp\Util\v201602;

use DateTime;
use DateTimeZone;
use Google\AdsApi\Dfp\Util\v201602\DateTimeUtils;
use Google\AdsApi\Dfp\v201602\Date;
use Google\AdsApi\Dfp\v201602\DateTime as DfpDateTime;
use PHPUnit_Framework_TestCase;


/**
 * Unit tests for DateTimeUtils.
 * @see DateTimeUtils
 * @group small
 */
class DateTimeUtilsTest extends PHPUnit_Framework_TestCase {

  const TIME_ZONE_ID1 = 'America/New_York';
  const TIME_ZONE_ID2 = 'PST8PDT';
  const TIME_ZONE_ID3 = 'Europe/Moscow';
  const TIME_ZONE_ID4 = 'UTC';

  private $dfpDate1;
  private $dfpDate2;
  private $dfpDate3;
  private $dateTime1;
  private $dateTime2;
  private $dateTime3;
  private $dfpDateTime1;
  private $dfpDateTime2;
  private $dfpDateTime3;

  private $stringDate1;
  private $stringDate2;
  private $stringDate3;
  private $stringDateTime1;
  private $stringDateTime2;
  private $stringDateTime3;
  private $stringDateTimeWithTimeZone1;
  private $stringDateTimeWithTimeZone2;
  private $stringDateTimeWithTimeZone3;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->stringDate1 = '1983-06-02';
    $this->stringDate2 = '2014-12-31';
    $this->stringDate3 = '1999-09-23';

    $this->stringDateTime1 = '1983-06-02T08:30:15';
    $this->stringDateTime2 = '2015-06-02T00:00:00';
    $this->stringDateTime3 = '1983-06-02T08:30:15';
    $this->stringDateTime4 = '2015-11-11T11:23:13';

    $this->stringDateTimeWithTimeZone1 = '1983-06-02T08:30:15-04:00';
    $this->stringDateTimeWithTimeZone2 = '2015-06-02T00:00:00-07:00';
    $this->stringDateTimeWithTimeZone3 = '1983-06-02T08:30:15+04:00';
    $this->stringDateTimeWithTimeZone4 = '2015-11-11T11:23:13+00:00';

    $this->dfpDate1 = new Date(1983, 6, 2);
    $this->dfpDate2 = new Date(2014, 12, 31);
    $this->dfpDate3 = new Date(1999, 9, 23);

    $this->dateTime1 = new DateTime($this->stringDateTime1,
        new DateTimeZone(self::TIME_ZONE_ID1));
    $this->dateTime2 = new DateTime($this->stringDateTime2,
        new DateTimeZone(self::TIME_ZONE_ID2));
    $this->dateTime3 = new DateTime($this->stringDateTime3,
        new DateTimeZone(self::TIME_ZONE_ID3));
    $this->dateTime4 = new DateTime($this->stringDateTime4,
        new DateTimeZone(self::TIME_ZONE_ID4));

    $this->dfpDateTime1 = new DfpDateTime(new Date(1983, 6, 2), 8, 30, 15,
        self::TIME_ZONE_ID1);
    $this->dfpDateTime2 = new DfpDateTime(new Date(2015, 6, 2), 0, 0, 0,
        self::TIME_ZONE_ID2);
    $this->dfpDateTime3 = new DfpDateTime(new Date(1983, 6, 2), 8, 30, 15,
        self::TIME_ZONE_ID3);
    $this->dfpDateTime4 = new DfpDateTime(new Date(2015, 11, 11), 11, 23, 13,
        self::TIME_ZONE_ID4);
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::toDfpDateTime
   */
  public function testToDfpDateTime() {
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime1,
        DateTimeUtils::toDfpDateTime($this->dateTime1)
    ));
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime2,
        DateTimeUtils::toDfpDateTime($this->dateTime2)
    ));
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime3,
        DateTimeUtils::toDfpDateTime($this->dateTime3)
    ));
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime4,
        DateTimeUtils::toDfpDateTime($this->dateTime4)
    ));
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::toDfpDateTimeFromString
   */
  public function testToDfpDateTimeFromString() {
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime1,
        DateTimeUtils::toDfpDateTimeFromString(
            $this->stringDateTimeWithTimeZone1)
    ));
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime2,
        DateTimeUtils::toDfpDateTimeFromString(
            $this->stringDateTimeWithTimeZone2)
    ));
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime3,
        DateTimeUtils::toDfpDateTimeFromString(
            $this->stringDateTimeWithTimeZone3)
    ));
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime4,
        DateTimeUtils::toDfpDateTimeFromString(
            $this->stringDateTimeWithTimeZone4)
    ));
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::toDfpDateTimeFromStringWithTimeZone
   */
  public function testToDfpDateTimeFromStringWithTimeZone() {
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime1,
        DateTimeUtils::toDfpDateTimeFromStringWithTimeZone(
            $this->stringDateTime1, self::TIME_ZONE_ID1)
    ));
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime2,
        DateTimeUtils::toDfpDateTimeFromStringWithTimeZone(
            $this->stringDateTime2, self::TIME_ZONE_ID2)
    ));
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime3,
        DateTimeUtils::toDfpDateTimeFromStringWithTimeZone(
            $this->stringDateTime3, self::TIME_ZONE_ID3)
    ));
    $this->assertTrue($this->assertSameDfpDateTime(
        $this->dfpDateTime4,
        DateTimeUtils::toDfpDateTimeFromStringWithTimeZone(
            $this->stringDateTime4, self::TIME_ZONE_ID4)
    ));
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::fromDfpDateTime
   */
  public function testFromDfpDateTime() {
    $this->assertTrue($this->assertSameDateTime(
        $this->dateTime1,
        DateTimeUtils::fromDfpDateTime($this->dfpDateTime1)
    ));
    $this->assertTrue($this->assertSameDateTime(
        $this->dateTime2,
        DateTimeUtils::fromDfpDateTime($this->dfpDateTime2)
    ));
    $this->assertTrue($this->assertSameDateTime(
        $this->dateTime3,
        DateTimeUtils::fromDfpDateTime($this->dfpDateTime3)
    ));
    $this->assertTrue($this->assertSameDateTime(
        $this->dateTime4,
        DateTimeUtils::fromDfpDateTime($this->dfpDateTime4)
    ));
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::toString
   */
  public function testToString() {
    $this->assertSame($this->stringDate1,
        DateTimeUtils::toString($this->dfpDate1));
    $this->assertSame($this->stringDate2,
        DateTimeUtils::toString($this->dfpDate2));
    $this->assertSame($this->stringDate3,
        DateTimeUtils::toString($this->dfpDate3));
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::toStringWithTimeZone
   */
  public function testToStringWithTimeZone() {
    $this->assertSame($this->stringDateTimeWithTimeZone1,
        DateTimeUtils::toStringWithTimeZone($this->dfpDateTime1));
    $this->assertSame($this->stringDateTimeWithTimeZone2,
        DateTimeUtils::toStringWithTimeZone($this->dfpDateTime2));
    $this->assertSame($this->stringDateTimeWithTimeZone3,
        DateTimeUtils::toStringWithTimeZone($this->dfpDateTime3));
    $this->assertSame($this->stringDateTimeWithTimeZone4,
        DateTimeUtils::toStringWithTimeZone($this->dfpDateTime4));
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::toStringForTimeZone
   */
  public function testToStringForTimeZoneWithSameTimeZoneIsNoOp() {
    // Testing no-ops
    $this->assertSame(
        $this->stringDateTimeWithTimeZone1,
        DateTimeUtils::toStringForTimeZone(
            $this->dfpDateTime1, self::TIME_ZONE_ID1)
    );
    $this->assertSame(
        $this->stringDateTimeWithTimeZone2,
        DateTimeUtils::toStringForTimeZone(
            $this->dfpDateTime2, self::TIME_ZONE_ID2)
    );
    $this->assertSame(
        $this->stringDateTimeWithTimeZone3,
        DateTimeUtils::toStringForTimeZone(
            $this->dfpDateTime3, self::TIME_ZONE_ID3)
    );
    $this->assertSame(
        $this->stringDateTimeWithTimeZone4,
        DateTimeUtils::toStringForTimeZone(
            $this->dfpDateTime4, self::TIME_ZONE_ID4)
    );
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::toStringForTimeZone
   */
  public function testToStringForTimeZoneWithDaylightSavingRules() {
    $this->assertSame(
        '1983-06-02T16:30:15+04:00',
        DateTimeUtils::toStringForTimeZone(
            $this->dfpDateTime1, self::TIME_ZONE_ID3)
    );
    // Moscow abolished daylight saving in 2015.
    $this->assertSame(
        '2015-06-02T10:00:00+03:00',
        DateTimeUtils::toStringForTimeZone(
            $this->dfpDateTime2, self::TIME_ZONE_ID3)
    );
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::toStringForTimeZone
   */
  public function testToStringForTimeZoneTimezoneOnDifferentDay() {
    // DFP date time 3 is a day behind in time zone 2.
    $this->assertSame(
        '1983-06-01T21:30:15-07:00',
        DateTimeUtils::toStringForTimeZone(
            $this->dfpDateTime3, self::TIME_ZONE_ID2)
    );
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\DateTimeUtils::toStringForTimeZone
   */
  public function testToStringForTimeZoneTimezoneUtc() {
    $this->assertSame(
        '1983-06-02T12:30:15+00:00',
        DateTimeUtils::toStringForTimeZone(
            $this->dfpDateTime1, self::TIME_ZONE_ID4)
    );
  }

  /**
   * Returns true if every field of the two specified DFP date time objects are
   * equal, with the exception of their timezones, which are converted to their
   * GMT offset equivalent and then compared for equality.
   *
   * @param DfpDateTime $dfpDateTime1 the first DFP date time
   * @param DfpDateTime $dfpDateTime2 the second DFP date time
   * @return boolean true if the two DFP date times are equal
   */
  private function assertSameDfpDateTime(DfpDateTime $dfpDateTime1,
      DfpDateTime $dfpDateTime2) {
    // Convert timezones to common format (GMT) so they can be compared.
    $dateTime1 = DateTimeUtils::fromDfpDateTime($dfpDateTime1);
    $dateTime2 = DateTimeUtils::fromDfpDateTime($dfpDateTime2);
    $timeZonesEqual = $dateTime1->format('P') === $dateTime2->format('P');

    return $dfpDateTime1 === $dfpDateTime2
        || $dfpDateTime1->getDate()->getYear() ===
            $dfpDateTime2->getDate()->getYear()
        && $dfpDateTime1->getDate()->getMonth() ===
            $dfpDateTime2->getDate()->getMonth()
        && $dfpDateTime1->getDate()->getDay() ===
            $dfpDateTime2->getDate()->getDay()
        && $dfpDateTime1->getHour() === $dfpDateTime2->getHour()
        && $dfpDateTime1->getMinute() === $dfpDateTime2->getMinute()
        && $dfpDateTime1->getSecond() === $dfpDateTime2->getSecond()
        && $timeZonesEqual;
  }

  /**
   * Returns true if the two specified PHP date time objects are equal in their
   * instant.
   *
   * @param DateTime $dateTime1 the first PHP date time
   * @param DateTime $dateTime2 the second PHP date time
   * @return boolean true if the two PHP date times are equal
   */
  private function assertSameDateTime(DateTime $dateTime1,
      DateTime $dateTime2) {
    return $dateTime1->format(DateTime::ATOM) ===
        $dateTime2->format(DateTime::ATOM);
  }
}

