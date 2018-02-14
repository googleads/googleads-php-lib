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

namespace Google\AdsApi\Dfp\Util\v201711;

use DateTime;
use DateTimeZone;
use Google\AdsApi\Dfp\v201711\Date;
use Google\AdsApi\Dfp\v201711\DateTime as DfpDateTime;

/**
 * Static utility methods for working with DFP `DateTime` objects.
 */
final class DfpDateTimes
{

    private function __construct()
    {
    }

    /**
     * Creates a DFP date time from a PHP date time.
     *
     * @param DateTime $dateTime
     * @return DfpDateTime
     */
    public static function fromDateTime(DateTime $dateTime)
    {
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
     * Creates a DFP date time from a date time string in ISO 8601 format.
     *
     * @param string $dateTime
     * @return DfpDateTime
     */
    public static function fromDateTimeString($dateTime)
    {
        return self::fromDateTime(
            DateTime::createFromFormat(DateTime::ATOM, $dateTime)
        );
    }

    /**
     * Converts a DFP date time to a PHP date time.
     *
     * @param DfpDateTime $dfpDateTime
     * @return DateTime
     */
    public static function toDateTime(DfpDateTime $dfpDateTime)
    {
        $dateTimeString = sprintf(
            '%sT%02d:%02d:%02d',
            DfpDates::toDateString($dfpDateTime->getDate()),
            $dfpDateTime->getHour(),
            $dfpDateTime->getMinute(),
            $dfpDateTime->getSecond()
        );

        return new DateTime(
            $dateTimeString,
            new DateTimeZone($dfpDateTime->getTimeZoneID())
        );
    }

    /**
     * Returns an ISO 8601 string representation of the specified DFP date time.
     *
     * Optionally, you may specify the timezone you want to view the date time in.
     * By default the time zone from the DFP date time is used. For example, if
     * the DFP date time holds `11/29/2016 21:05:30 in GMT`, the result from this
     * method with Europe/Paris as the new time zone, would be `11/29/2016
     * 22:05:30 in CET`. This is useful for displaying DFP date times in your
     * network's time zone. For example:
     *
     * ```
     * $timeZoneId = $networkService->getCurrentNetwork()->getTimeZone();
     * $dateTimeString =
     *     DfpDateTimes::toDateTimeString($dfpDateTime, $timeZoneId);
     * ```
     *
     * @param DfpDateTime $dfpDateTime
     * @param null|string $timeZoneId optional
     * @return string
     */
    public static function toDateTimeString(
        DfpDateTime $dfpDateTime,
        $timeZoneId = null
    ) {
        $dateTime = self::toDateTime($dfpDateTime);
        if ($timeZoneId !== null) {
            $dateTime->setTimezone(new DateTimeZone($timeZoneId));
        }

        return $dateTime->format(DateTime::ATOM);
    }
}
