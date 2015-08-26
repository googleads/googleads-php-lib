<?php
/**
 * A collection of utility methods for working with choices. Choices are
 * objects which contain many fields, but any time only one of which will
 * contain a value.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

/**
 * A collection of utility methods for working with choices. Choices are
 * objects which contain many fields, but any time only one of which will
 * contain a value.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class ChoiceUtils {

  /**
   * The ChoiceUtils class is not meant to have any instances.
   */
  private function __construct() {}

  /**
   * Gets the value of a choice object.
   * @param object $choice the choice to get the value of.
   * @return mixed the value of the choice.
   */
  public static function GetValue($choice) {
    foreach (get_object_vars($choice) as $name => $value) {
      if (isset($value)) {
        return $value;
      }
    }
    return null;
  }
}

