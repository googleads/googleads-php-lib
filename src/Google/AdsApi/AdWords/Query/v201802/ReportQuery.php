<?php
/**
 * Copyright 2018, Google Inc. All Rights Reserved.
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

use InvalidArgumentException;

/**
 * A report query that embodies an AWQL string for querying AdWords reports.
 */
final class ReportQuery
{
    /**
     * @var string a complete AWQL string
     */
    private $awqlString;

    /**
     * Creates a report query object from an AWQL string.
     *
     * Do not use this constructor, instances should be created by using the
     * `ReportQueryBuilder` instead.
     *
     * @param string $awqlString a complete AWQL string
     */
    public function __construct(
        $awqlString
    ) {
        if (empty($awqlString)) {
            throw new InvalidArgumentException('The AWQL string must not be' .
                ' null or empty.');
        }
        $this->awqlString = $awqlString;
    }

    /**
     * @return string the complete AWQL string
     */
    public function __toString()
    {
        return $this->awqlString;
    }
}
