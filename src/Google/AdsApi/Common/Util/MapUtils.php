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
namespace Google\AdsApi\Common\Util;

use ReflectionClass;
use ReflectionException;
use ReflectionObject;
use UnexpectedValueException;

/**
 * A collection of utility methods for working with maps (associative arrays).
 */
class MapUtils {

  /**
   * The MapUtils class is not meant to have any instances.
   */
  private function __construct() {}

  /**
   * Transforms list of map entries to a map (native PHP associative array).
   * Each map entry is expected to be a `[Key]_[Value]MapEntry` that contains a
   * key and a value.
   *
   * @param array $mapEntries an array of map entries
   * @return array a map built from the keys and values of the map entries
   * @throws UnexpectedValueException if a map entry type is invalid
   */
  public static function toMap(array $mapEntries) {
    $result = array();
    foreach ($mapEntries as $mapEntry) {
      try {
        $reflectionObject = new ReflectionObject($mapEntry);
        $keyProperty = $reflectionObject->getProperty('key');
        $keyProperty->setAccessible(true);
        $valueProperty = $reflectionObject->getProperty('value');
        $valueProperty->setAccessible(true);
        $result[$keyProperty->getValue($mapEntry)] =
            $valueProperty->getValue($mapEntry);
      } catch (ReflectionException $e) {
        throw new UnexpectedValueException(
            "The map entry type must contains a 'key' property and a 'value' "
                . "property.");
      }
    }
    return $result;
  }

  /**
   * Transforms the specified map to a list of entries of the specified type.
   * The entry type is expected to be a `[Key]_[Value]MapEntry` that contains a
   * key and a value.
   *
   * @param array $map an associative array
   * @param string $mapEntryClassName the fully qualified class name of the map
   *     entry
   * @return array an array of map entries built from the key-value pairs in the
   *     map
   * @throws UnexpectedValueException if the map entry class is invalid
   */
  public static function toList(array $map, $mapEntryClassName) {
    $result = array();

    foreach($map as $key => $value) {
      try {
        $reflectionClass = new ReflectionClass($mapEntryClassName);
        $entry = $reflectionClass->newInstanceWithoutConstructor();
        $reflectionObject = new ReflectionObject($entry);
      } catch (ReflectionException $e) {
        throw new UnexpectedValueException(sprintf(
            "The map entry class '%s' could not be found.",
            $mapEntryClassName
        ));
      }

      try {
        $keyProperty = $reflectionObject->getProperty('key');
        $keyProperty->setAccessible(true);
        $valueProperty = $reflectionObject->getProperty('value');
        $valueProperty->setAccessible(true);
        $keyProperty->setValue($entry, $key);
        $valueProperty->setValue($entry, $value);
      } catch (ReflectionException $e) {
        throw new UnexpectedValueException(
            "The map entry class must contains a 'key' property and a 'value' "
                . "property.");
      }

      $result[] = $entry;
    }

    return $result;
  }

  /**
   * Determines if an array is a map (associative array) vs. a flat,
   * numerically indexed array.
   *
   * @param array $array the array to evaluate
   * @return bool true if the array is a map, false otherwise
   */
  public static function isMap(array $array) {
    return (bool) sizeof(array_filter(array_keys($array), 'is_string'));
  }
}

