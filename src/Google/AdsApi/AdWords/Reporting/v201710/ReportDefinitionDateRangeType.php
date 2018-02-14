<?php
/**
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
 */

namespace Google\AdsApi\AdWords\Reporting\v201710;

/**
 * Supported report date range types.
 */
final class ReportDefinitionDateRangeType
{
    const TODAY = 'TODAY';
    const YESTERDAY = 'YESTERDAY';
    const LAST_7_DAYS = 'LAST_7_DAYS';
    const LAST_WEEK = 'LAST_WEEK';
    const LAST_BUSINESS_WEEK = 'LAST_BUSINESS_WEEK';
    const THIS_MONTH = 'THIS_MONTH';
    const LAST_MONTH = 'LAST_MONTH';
    const ALL_TIME = 'ALL_TIME';
    const CUSTOM_DATE = 'CUSTOM_DATE';
    const LAST_14_DAYS = 'LAST_14_DAYS';
    const LAST_30_DAYS = 'LAST_30_DAYS';
    const THIS_WEEK_SUN_TODAY = 'THIS_WEEK_SUN_TODAY';
    const THIS_WEEK_MON_TODAY = 'THIS_WEEK_MON_TODAY';
    const LAST_WEEK_SUN_SAT = 'LAST_WEEK_SUN_SAT';
}
