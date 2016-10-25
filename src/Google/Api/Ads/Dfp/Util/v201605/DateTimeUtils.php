<?php
/**
 * A utility class for converting PHP DateTime objects to DFP native objects and
 * vice versa.
 *
 * PHP version 5
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsDfp
 * @subpackage Util
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

/**
 * A utility class for converting PHP DateTime objects to DFP native objects and
 * vice versa.
 *
 * @package GoogleApiAdsDfp
 * @subpackage Util
 */
class DateTimeUtils {

  /**
   * ISO-8601 date time format (example: 2005-08-15T15:52:01+00:00).
   */
  const ISO8601 = "Y-m-d\TH:i:sP";

  const DFP_DATE_PATTERN = "%04d-%02d-%02d";

  /**
   * {@link DateTimeUtils} is meant to be used statically.
   */
  private function __construct() {}

  /**
   * Converts a PHP DateTime to a DfpDateTime.
   *
   * @param DateTime $dateTime a PHP DateTime object
   * @return DfpDateTime a DfpDateTime object
   */
  public static function ToDfpDateTime(DateTime $dateTime) {
    $result = new DfpDateTime();
    if (class_exists('Date', false)) {
      $result->date = new Date();
    }
    $result->date->year = (int) $dateTime->format('Y');
    $result->date->month = (int) $dateTime->format('m');
    $result->date->day = (int) $dateTime->format('d');
    $result->hour = (int) $dateTime->format('H');
    $result->minute = (int) $dateTime->format('i');
    $result->second = (int) $dateTime->format('s');
    $result->timeZoneID = $dateTime->format('e');
    return $result;
  }

  /**
   * Converts a string in the form of {@code yyyy-MM-dd'T'HH:mm:ss±HH:mm} to a
   * DfpDateTime.
   */
  public static function ToDfpDateTimeFromString($dateTime) {
    return self::ToDfpDateTime(DateTime::createFromFormat(self::ISO8601,
        $dateTime));
  }

  /**
   * Converts a string in the form of {@code yyyy-MM-dd'T'HH:mm:ss±HH:mm} to a
   * DfpDateTime in the time zone supplied.
   */
  public static function ToDfpDateTimeFromStringWithTimeZone($dateTime,
      $timeZoneId) {
    return self::ToDfpDateTime(
        (new DateTime($dateTime, new DateTimeZone($timeZoneId))));
  }

  /**
   * Converts a DfpDateTime to a PHP DateTime.
   *
   * @param DfpDateTime $dfpDateTime a DfpDateTime object
   * @return DateTime a PHP DateTime object
   */
  public static function FromDfpDateTime(DfpDateTime $dfpDateTime) {
    $dateTimeString = sprintf("%d-%d-%dT%d:%d:%d", $dfpDateTime->date->year,
        $dfpDateTime->date->month, $dfpDateTime->date->day, $dfpDateTime->hour,
        $dfpDateTime->minute, $dfpDateTime->second);
    return new DateTime($dateTimeString,
        new DateTimeZone($dfpDateTime->timeZoneID));
  }

  /**
   * Returns string representation of the specified DFP date.
   *
   * @param Date $dfpDate the DFP date to stringify
   * @return string a string representation of the DFP {@code Date} in
   *     {@code yyyy-MM-dd}
   */
  public static function ToString(Date $dfpDate) {
    return sprintf(self::DFP_DATE_PATTERN, $dfpDate->year, $dfpDate->month,
        $dfpDate->day);
  }

  /**
   * Returns string representation of this DFP date time with time zone. If you
   * need to convert the DFP date time into another time zone before filtering
   * on it, please use {@link #ToStringForTimeZone()} instead.
   *
   * @param DfpDateTime $dfpDateTime the DFP date time to stringify
   * @return string a string representation of the DFP {@code DateTime} in
   *     {@code yyyy-MM-dd'T'HH:mm:ss±HH:mm}, e.g.,
   *     {@code 2013-09-013T12:02:03+08:00} or
   *     {@code 2013-09-013T12:02:03Z} for Etc/GMT.
   */
  public static function ToStringWithTimeZone(DfpDateTime $dfpDateTime) {
    return self::FromDfpDateTime($dfpDateTime)->format(self::ISO8601);
  }

  /**
   * Returns string representation of this DFP date time with the specified time
   * zone, preserving the millisecond instant.
   * <p>
   * This function is useful for finding the local time in another time zone,
   * especially for filtering.
   * <p>
   * For example, if this date time holds 12:30 in Europe/London, the result
   * from this method with Europe/Paris would be 13:30. You may also want to use
   * this with your network's time zone, i.e.,
   * <pre><code>
   * $timeZoneId = $networkService->getCurrentNetwork()->timeZone;
   * $pqlFilterStatement = "... WHERE startDateTime >
   *     DateTimeUtils::ToString($apiDateTime, $timeZoneId)"
   * </code></pre>
   *
   * @param DfpDateTime $dfpDateTime the DFP date time to stringify into a new
   *     time zone
   * @param string $newZoneId the time zone ID of the new zone
   * @return string a string representation of the DFP {@code DateTime} in
   *          {@code yyyy-MM-dd'T'HH:mm:ss}
   */
  public static function ToStringForTimeZone(DfpDateTime $dfpDateTime,
      $newZoneId) {
    return self::FromDfpDateTime($dfpDateTime)->
        setTimezone(new DateTimeZone($newZoneId))->
        format(substr(self::ISO8601, 0, -1));
  }
}

