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
use Google\AdsApi\Dfp\v201602\Date;
use Google\AdsApi\Dfp\v201602\DateTime as DfpDateTime;

/**
 * A utility class for converting PHP DateTime objects to DFP native objects and
 * vice versa.
 */
class DateTimeUtils {

  /**
   * This class is meant to be used statically.
   */
  private function __construct() {}

  /**
   * Converts a PHP date time to a DFP date time.
   *
   * @param DateTime $dateTime the PHP date time to convert
   * @return DfpDateTime the DFP date time
   */
  public static function toDfpDateTime(DateTime $dateTime) {
    $date = new Date();
    $date->setYear(intval($dateTime->format('Y')));
    $date->setMonth(intval($dateTime->format('m')));
    $date->setDay(intval($dateTime->format('d')));

    $result = new DfpDateTime();
    $result->setDate($date);
    $result->setHour(intval($dateTime->format('H')));
    $result->setMinute(intval($dateTime->format('i')));
    $result->setSecond(intval($dateTime->format('s')));
    $result->setTimeZoneID($dateTime->format('e'));

    return $result;
  }

  /**
   * Converts a string representing a date time in ISO 8601 format to a DFP date
   * time.
   *
   * @param string $dateTime the ISO 8601 date time string to convert
   * @return DfpDateTime the DFP date time
   */
  public static function toDfpDateTimeFromString($dateTime) {
    return self::toDfpDateTime(
        DateTime::createFromFormat(DateTime::ATOM, $dateTime));
  }

  /**
   * Converts a string in the form of `yyyy-MM-dd'T'HH:mm:ss` to a DFP date time
   * with the specified time zone.
   *
   * @param string $dateTime the date time string to convert
   * @param string $timeZoneId the time zone ID
   * @return DfpDateTime the DFP date time
   */
  public static function toDfpDateTimeFromStringWithTimeZone($dateTime,
      $timeZoneId) {
    return self::toDfpDateTime(
        new DateTime($dateTime, new DateTimeZone($timeZoneId)));
  }

  /**
   * Converts a DFP date time to a PHP date time.
   *
   * @param DfpDateTime $dfpDateTime the DFP date time to convert
   * @return DateTime the PHP date time
   */
  public static function fromDfpDateTime(DfpDateTime $dfpDateTime) {
    $dateTimeString = sprintf(
        "%d-%02d-%02dT%02d:%02d:%02d",
        $dfpDateTime->getDate()->getYear(),
        $dfpDateTime->getDate()->getMonth(),
        $dfpDateTime->getDate()->getDay(),
        $dfpDateTime->getHour(),
        $dfpDateTime->getMinute(),
        $dfpDateTime->getSecond()
    );
    return new DateTime(
        $dateTimeString, new DateTimeZone($dfpDateTime->getTimeZoneID()));
  }

  /**
   * Returns string representation of the specified DFP date.
   *
   * @param Date $dfpDate the DFP date to stringify
   * @return string the string representation of the DFP `Date` in `yyyy-MM-dd`
   */
  public static function toString(Date $dfpDate) {
    return sprintf(
        '%d-%02d-%02d',
        $dfpDate->getYear(),
        $dfpDate->getMonth(),
        $dfpDate->getDay()
    );
  }

  /**
   * Returns a string representation of the specified DFP date time in ISO 8601
   * format. If you need to convert the DFP date time into another time zone,
   * use toStringForTimeZone() instead.
   *
   * @see DateTimeUtils::toStringForTimeZone()
   * @param DfpDateTime $dfpDateTime the DFP date time to stringify
   * @return string the string representation of the DFP date time in ISO 8601
   *     format
   */
  public static function toStringWithTimeZone(DfpDateTime $dfpDateTime) {
    return self::fromDfpDateTime($dfpDateTime)->format(DateTime::ATOM);
  }

  /**
   * Returns a string representation of the specified DFP date time in ISO 8601
   * format for the specified time zone. For example, if this date time holds
   * 12:30 in Europe/London, the result from this method with Europe/Paris as
   * the new time zone, would be 13:30 with Paris' current GMT offset. You may
   * also want to use this with your network's time zone, e.g.,
   *
   *     $timeZoneId = $networkService->getCurrentNetwork()->getTimeZone();
   *     $pqlFilterStatement = '... WHERE startDateTime >= '
   *         . DateTimeUtils::toStringForTimeZone($dfpDateTime, $timeZoneId);
   *
   * @param DfpDateTime $dfpDateTime the DFP date time to stringify
   * @param string $timeZoneId the time zone ID
   * @return string the string representation of the DFP date time in ISO 8601
   *     format
   */
  public static function toStringForTimeZone(DfpDateTime $dfpDateTime,
      $timeZoneId) {
    return self::fromDfpDateTime($dfpDateTime)
        ->setTimezone(new DateTimeZone($timeZoneId))
        ->format(DateTime::ATOM);
  }
}

