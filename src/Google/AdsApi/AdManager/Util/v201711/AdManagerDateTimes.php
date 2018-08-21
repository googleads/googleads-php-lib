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

/**
 * Static utility methods for working with Ad Manager `DateTime` objects.
 */
final class AdManagerDateTimes
{

    private function __construct()
    {
    }

    /**
     * Creates a Ad Manager date time from a PHP date time.
     *
     * @param DateTime $dateTime
     * @return AdManagerDateTime
     */
    public static function fromDateTime(DateTime $dateTime)
    {
        $date = new Date();
        $date->setYear(intval($dateTime->format('Y')));
        $date->setMonth(intval($dateTime->format('m')));
        $date->setDay(intval($dateTime->format('d')));

        $result = new AdManagerDateTime();
        $result->setDate($date);
        $result->setHour(intval($dateTime->format('H')));
        $result->setMinute(intval($dateTime->format('i')));
        $result->setSecond(intval($dateTime->format('s')));
        $result->setTimeZoneID($dateTime->format('e'));

        return $result;
    }

    /**
     * Creates a Ad Manager date time from a date time string in ISO 8601
     * format.
     *
     * @param string $dateTime
     * @return AdManagerDateTime
     */
    public static function fromDateTimeString($dateTime)
    {
        return self::fromDateTime(
            DateTime::createFromFormat(DateTime::ATOM, $dateTime)
        );
    }

    /**
     * Converts a Ad Manager date time to a PHP date time.
     *
     * @param AdManagerDateTime $adManagerDateTime
     * @return DateTime
     */
    public static function toDateTime(AdManagerDateTime $adManagerDateTime)
    {
        $dateTimeString = sprintf(
            '%sT%02d:%02d:%02d',
            AdManagerDates::toDateString($adManagerDateTime->getDate()),
            $adManagerDateTime->getHour(),
            $adManagerDateTime->getMinute(),
            $adManagerDateTime->getSecond()
        );

        return new DateTime(
            $dateTimeString,
            new DateTimeZone($adManagerDateTime->getTimeZoneID())
        );
    }

    /**
     * Returns an ISO 8601 string representation of the specified Ad Manager
     * date time.
     *
     * Optionally, you may specify the timezone you want to view the date time
     * in. By default the time zone from the Ad Manager date time is used.
     * For example, if the Ad Manager date time holds `11/29/2016 21:05:30
     * in GMT`, the result from this method with Europe/Paris as the new time
     * zone, would be `11/29/2016 22:05:30 in CET`. This is useful for
     * displaying Ad Manager date times in your network's time zone.
     * For example:
     *
     * ```
     * $timeZoneId = $networkService->getCurrentNetwork()->getTimeZone();
     * $dateTimeString = AdManagerDateTimes::toDateTimeString(
     *     $adManagerDateTime,
     *     $timeZoneId
     * );
     * ```
     *
     * @param AdManagerDateTime $adManagerDateTime
     * @param null|string $timeZoneId optional
     * @return string
     */
    public static function toDateTimeString(
        AdManagerDateTime $adManagerDateTime,
        $timeZoneId = null
    ) {
        $dateTime = self::toDateTime($adManagerDateTime);
        if ($timeZoneId !== null) {
            $dateTime->setTimezone(new DateTimeZone($timeZoneId));
        }

        return $dateTime->format(DateTime::ATOM);
    }
}
