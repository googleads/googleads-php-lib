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
 * Static utility methods for working with ads `MapEntry` objects.
 */
final class MapEntries
{

    private function __construct()
    {
    }

    /**
     * Transforms list of map entries to a PHP associative array. Each map entry
     * is expected to be a `[Key]_[Value]MapEntry` that contains a key field and a
     * value field.
     *
     * For example, if the list of map entries were:
     *
     * ```
     * [
     *   (String_StringMapEntry: key => 'animal', value => 'sheep'),
     *   (String_StringMapEntry: key => 'spirit_animal', value => 'bear'),
     *   (String_StringMapEntry: key => 'primal_animal', value => 'sloth')
     * ]
     * ```
     *
     * Then this method would return the following associative array:
     *
     * ```
     * [
     *    'animal' => 'sheep',
     *    'spirit_animal' => 'bear',
     *    'primal_animal' => 'sloth'
     * ]
     * ```
     *
     * @param array $mapEntriesList a list of map entries
     * @return array an associative array of the entries
     * @throws UnexpectedValueException if any map entries in the list are invalid
     */
    public static function toAssociativeArray(array $mapEntriesList)
    {
        $result = [];
        foreach ($mapEntriesList as $mapEntry) {
            try {
                $reflectionObject = new ReflectionObject($mapEntry);
                $keyProperty = $reflectionObject->getProperty('key');
                $keyProperty->setAccessible(true);
                $valueProperty = $reflectionObject->getProperty('value');
                $valueProperty->setAccessible(true);
                $result[$keyProperty->getValue($mapEntry)] = $valueProperty->getValue($mapEntry);
            } catch (ReflectionException $e) {
                throw new UnexpectedValueException(
                    "Each map entry type must contain a 'key' property and a 'value' property."
                );
            }
        }

        return $result;
    }

    /**
     * Transforms the specified associative array to a list of entries of the
     * specified type. The type is expected to be a `[Key]_[Value]MapEntry` that
     * contains a key and a value.
     *
     * For example, if the associative array of map entries were:
     *
     * ```
     * [
     *    'animal' => 'sheep',
     *    'spirit_animal' => 'bear',
     *    'primal_animal' => 'sloth'
     * ]
     * ```
     * Then this method would return the following list of map entries if
     * `String_StringMapEntry` was specified as the map entry class type:
     *
     * ```
     * [
     *   (String_StringMapEntry: key => 'animal', value => 'sheep'),
     *   (String_StringMapEntry: key => 'spirit_animal', value => 'bear'),
     *   (String_StringMapEntry: key => 'primal_animal', value => 'sloth')
     * ]
     * ```
     *
     * @param array $mapEntriesAssociativeArray an associative array of map
     *     entries
     * @param string $mapEntryClassName the fully qualified class name of the map
     *     entry type to use
     * @return array a list of map entries built from the key-value pairs in the
     *     associative array
     * @throws UnexpectedValueException if the map entry class is invalid
     */
    public static function fromAssociativeArray(
        array $mapEntriesAssociativeArray,
        $mapEntryClassName
    ) {
        $result = [];

        foreach ($mapEntriesAssociativeArray as $key => $value) {
            try {
                $reflectionClass = new ReflectionClass($mapEntryClassName);
                $entry = $reflectionClass->newInstanceWithoutConstructor();
                $reflectionObject = new ReflectionObject($entry);
            } catch (ReflectionException $e) {
                throw new UnexpectedValueException(
                    sprintf(
                        "The map entry class '%s' could not be found.",
                        $mapEntryClassName
                    )
                );
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
                    . "property."
                );
            }

            $result[] = $entry;
        }

        return $result;
    }
}
