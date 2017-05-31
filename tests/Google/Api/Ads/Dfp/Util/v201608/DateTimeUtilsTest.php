<?php
/**
 * Copyright 2016, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an 'AS IS' BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsDfp
 * @subpackage Util
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Dfp/Util/v201608/DateTimeUtils.php';
require_once 'Google/Api/Ads/Dfp/v201608/PublisherQueryLanguageService.php';

/**
 * Unit tests for {@link DateTimeUtils}.
 * @group small
 */
class DateTimeUtilsTest extends PHPUnit_Framework_TestCase {

  const TIME_ZONE_ID1 = 'America/New_York';
  const TIME_ZONE_ID2 = 'PST8PDT';
  const TIME_ZONE_ID3 = 'Europe/Moscow';

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

  protected function setUp() {
    $this->stringDate1 = '1983-06-02';
    $this->stringDate2 = '2014-12-31';
    $this->stringDate3 = '1999-09-23';

    $this->stringDateTime1 = '1983-06-02T08:30:15';
    $this->stringDateTime2 = '1983-06-02T00:00:00';
    $this->stringDateTime3 = '1983-06-02T08:30:15';

    $this->stringDateTimeWithTimeZone1 = '1983-06-02T08:30:15-04:00';
    $this->stringDateTimeWithTimeZone2 = '1983-06-02T00:00:00-07:00';
    $this->stringDateTimeWithTimeZone3 = '1983-06-02T08:30:15+04:00';

    $this->dfpDate1 = new Date(1983, 6, 2);
    $this->dfpDate2 = new Date(2014, 12, 31);
    $this->dfpDate3 = new Date(1999, 9, 23);

    $this->dateTime1 = new DateTime($this->stringDateTime1,
        new DateTimeZone(self::TIME_ZONE_ID1));
    $this->dateTime2 = new DateTime($this->stringDateTime2,
        new DateTimeZone(self::TIME_ZONE_ID2));
    $this->dateTime3 = new DateTime($this->stringDateTime3,
        new DateTimeZone(self::TIME_ZONE_ID3));

    $this->dfpDateTime1 = new DfpDateTime(new Date(1983, 6, 2), 8, 30, 15,
        self::TIME_ZONE_ID1);
    $this->dfpDateTime2 = new DfpDateTime(new Date(1983, 6, 2), 0, 0, 0,
        self::TIME_ZONE_ID2);
    $this->dfpDateTime3 = new DfpDateTime(new Date(1983, 6, 2), 8, 30, 15,
        self::TIME_ZONE_ID3);
  }

  /**
   * @covers DateTimeUtils::ToDfpDateTime
   */
  public function testToDfpDateTime() {
    $this->assertEquals($this->dfpDateTime1,
        DateTimeUtils::ToDfpDateTime($this->dateTime1));
    $this->assertEquals($this->dfpDateTime2,
        DateTimeUtils::ToDfpDateTime($this->dateTime2));
    $this->assertEquals($this->dfpDateTime3,
        DateTimeUtils::ToDfpDateTime($this->dateTime3));
  }

  /**
   * @covers DateTimeUtils::ToDfpDateTimeFromString
   */
  public function _testToDfpDateTimeFromString() {
    $actualDfpDateTime1 = DateTimeUtils::ToDfpDateTimeFromString(
        $this->stringDateTimeWithTimeZone1);
    self::assertEquals($this->dfpDateTime1, $actualDfpDateTime1);
    $this->assertEquals('-04:00', $actualDfpDateTime1->timeZone);

    $actualDfpDateTime2 = DateTimeUtils::ToDfpDateTimeFromString(
        $this->stringDateTimeWithTimeZone2);
    self::assertEquals($this->dfpDateTime2, $actualDfpDateTime2);
    $this->assertEquals('-07:00', $actualDfpDateTime2->timeZone);

    $actualDfpDateTime3 = DateTimeUtils::ToDfpDateTimeFromString(
        $this->stringDateTimeWithTimeZone3);
    self::assertEquals($this->dfpDateTime2, $actualDfpDateTime3);
    $this->assertEquals('+04:00', $actualDfpDateTime3->timeZone);
  }

  /**
   * @covers DateTimeUtils::ToDfpDateTimeFromStringWithTimeZone
   */
  public function _testToDfpDateTimeFromStringWithTimeZone() {
    $self->assertTrue(self::isEqual($this->dfpDateTime1,
        DateTimeUtils::ToDfpDateTimeFromStringWithTimeZone(
            $this->stringDateTimeWithTimeZone1, self::TIME_ZONE_ID1)));
    $self->assertTrue(self::assertEquals($this->dfpDateTime2->getTimestamp(),
        DateTimeUtils::ToDfpDateTimeFromStringWithTimeZone(
            $this->stringDateTimeWithTimeZone2, self::TIME_ZONE_ID2)));
    $self->assertTrue(self::assertEquals($this->dfpDateTime3->getTimestamp(),
        DateTimeUtils::ToDfpDateTimeFromStringWithTimeZone(
            $this->stringDateTimeWithTimeZone3, self::TIME_ZONE_ID3)));
  }

  /**
   * @covers DateTimeUtils::FromDfpDateTime
   */
  public function testFromDfpDateTime() {
    $this->assertEquals($this->dateTime1,
        DateTimeUtils::FromDfpDateTime($this->dfpDateTime1));
    $this->assertEquals($this->dateTime2,
        DateTimeUtils::FromDfpDateTime($this->dfpDateTime2));
    $this->assertEquals($this->dateTime3,
        DateTimeUtils::FromDfpDateTime($this->dfpDateTime3));
  }

  /**
   * @covers DateTimeUtils::ToString
   */
  public function testToString() {
    $this->assertEquals($this->stringDate1,
        DateTimeUtils::ToString($this->dfpDate1));
    $this->assertEquals($this->stringDate2,
        DateTimeUtils::ToString($this->dfpDate2));
    $this->assertEquals($this->stringDate3,
        DateTimeUtils::ToString($this->dfpDate3));
  }

  /**
   * @covers DateTimeUtils::ToStringWithTimeZone
   */
  public function testToStringWithTimeZone() {
    $this->assertEquals($this->stringDateTimeWithTimeZone1,
        DateTimeUtils::ToStringWithTimeZone($this->dfpDateTime1));
    $this->assertEquals($this->stringDateTimeWithTimeZone2,
        DateTimeUtils::ToStringWithTimeZone($this->dfpDateTime2));
    $this->assertEquals($this->stringDateTimeWithTimeZone3,
        DateTimeUtils::ToStringWithTimeZone($this->dfpDateTime3));
  }

  /**
   * @covers DateTimeUtils::ToStringForTimeZone
   */
  public function testToStringForTimeZone() {
    $this->assertEquals($this->stringDateTime1,
        DateTimeUtils::ToStringForTimeZone($this->dfpDateTime1,
        self::TIME_ZONE_ID1));
    $this->assertEquals($this->stringDateTime2,
        DateTimeUtils::ToStringForTimeZone($this->dfpDateTime2,
        self::TIME_ZONE_ID2));
    $this->assertEquals($this->stringDateTime3,
        DateTimeUtils::ToStringForTimeZone($this->dfpDateTime3,
        self::TIME_ZONE_ID3));

    $this->assertEquals($this->stringDateTime1,
        DateTimeUtils::ToStringForTimeZone(DateTimeUtils::ToDfpDateTime(
            $this->dateTime1->setTimeZone(
                new DateTimeZone(self::TIME_ZONE_ID2))), self::TIME_ZONE_ID1));
    $this->assertEquals($this->stringDateTime2,
        DateTimeUtils::ToStringForTimeZone(DateTimeUtils::ToDfpDateTime(
            $this->dateTime2->setTimeZone(
                new DateTimeZone(self::TIME_ZONE_ID1))), self::TIME_ZONE_ID2));
    $this->assertEquals($this->stringDateTime3,
        DateTimeUtils::ToStringForTimeZone(DateTimeUtils::ToDfpDateTime(
            $this->dateTime3->setTimeZone(
                new DateTimeZone(self::TIME_ZONE_ID1))), self::TIME_ZONE_ID3));
  }

  public static function isEqual(DfpDateTime $expected,
      DfpDateTime $actual) {
    return $expected == $actual || ($expected->date->year == $actual->date->year
        && $expected->date->month == $actual->date->month
        && $expected->date->day == $actual->date->day
        && $expected->hour == $actual->hour
        && $expected->minute == $actual->minute
        && $expected->second == $actual->second);
        // TODO(vtsao): Figure out how to compare IANA versus offset time zones.
  }
}

date_default_timezone_set(DateTimeUtilsTest::TIME_ZONE_ID1);

