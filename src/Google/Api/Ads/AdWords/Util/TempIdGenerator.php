<?php
/**
 * A temporary ID generator produces decreasing negative integers. They can be
 * assigned to AdWords entities (Operands) to create dependency relationships
 * between them in Operations that are uploaded to the upload URL of
 * BatchJobService.
 *
 * PHP version 5
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWordsUtil
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
if (PHP_INT_SIZE == 4) {
  define('MIN_INT', -2147483648);
} else {
  define('MIN_INT', -9223372036854775808);
}

class TempIdGenerator {

  /**
   * A non-positive integer used to assign as a temporary ID for Operands
   * (e.g., Campaign, AdGroup) of operations sent to BatchJobService.
   */
  private static $tempId = 0;

  /**
   * Generates a negative temporary ID which is a decreasing negative integer
   * starting from -1. The function returns negative integers until reaching
   * minimal integer value, which an exception is thrown instead.
   *
   * @throws UnderflowException if the temp ID has reached to MIN_INT
   * @return integer a negative integer
   */
  public static function Generate() {
    if (self::$tempId === MIN_INT) {
      throw new UnderflowException(
        'Reached MIN_INT. Cannot generate temporary IDs for BatchJobService.');
    }
    return --self::$tempId;
  }
}
