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

namespace Google\AdsApi\AdWords\Query;

/**
 * Builds and appends a WHERE clause to a partial AWQL string.
 */
final class WhereClauseAppender
{

    /**
     * Builds and appends a WHERE clause to a partial AWQL string. If there
     * is no expressions specified, the input AWQL string will be returned
     * without modifications.
     *
     * @param WhereBuilderInterface[] $whereBuilders an array of builders for
     *     logic expressions in a WHERE clause
     * @param string $awql a partial AWQL string without the WHERE clause
     * @return string an AWQL string with the WHERE clause if at least one
     *     expression was specified
     */
    public static function appendWhereClause(
        $whereBuilders,
        $awql
    ) {
        if (empty($whereBuilders)) {
            return $awql;
        }

        $conditions = [];
        foreach ($whereBuilders as $whereBuilder) {
            $conditions[] = $whereBuilder->buildWhere();
        }

        return sprintf('%s WHERE %s', $awql, implode(' AND ', $conditions));
    }
}
