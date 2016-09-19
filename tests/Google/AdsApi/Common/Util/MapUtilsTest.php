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
namespace Google\Api\Ads\Common\Util;

use Google\AdsApi\Common\Util\MapUtils;
use PHPUnit_Framework_TestCase;
use ReflectionClass;

/**
 * Unit tests for MapUtils.
 * @see MapUtils
 * @small
 */
class MapUtilsTest extends PHPUnit_Framework_TestCase {

  /**
   * @param array $mapEntries a list of map entries
   * @param array $expectedMap the expected map
   * @covers Google\AdsApi\Common\Util\MapUtils::toMap
   * @dataProvider mapEntriesProvider
   */
  public function testToMap(array $mapEntries, array $expectedMap) {
    $actualMap = MapUtils::toMap($mapEntries);
    $this->assertSame($expectedMap, $actualMap);
  }

  /**
   * @covers Google\AdsApi\Common\Util\MapUtils::toMap
   * @expectedException UnexpectedValueException
   */
  public function testToMapWithInvalidMapEntryType() {
    $invalidClass = new InvalidTestString_ValueMapEntry();
    $invalidClass->lets = 'foo';
    MapUtils::toMap([$invalidClass]);
  }

  /**
   * @param array $expectedMapEntries the expected map entries as a list
   * @param array $map a map of entries
   * @covers Google\AdsApi\Common\Util\MapUtils::toList
   * @dataProvider mapEntriesProvider
   */
  public function testToList(array $expectedMapEntries, array $map) {
    $actualMapEntries = MapUtils::toList(
        $map, 'Google\Api\Ads\Common\Util\TestString_ValueMapEntry');
    $this->assertSame(
        count($expectedMapEntries), count($actualMapEntries));

    for ($i = 0; $i < count($actualMapEntries); $i++) {
      $this->assertSame(
          $expectedMapEntries[$i]->key, $actualMapEntries[$i]->key);
      $this->assertSame(
          $expectedMapEntries[$i]->value, $actualMapEntries[$i]->value);
    }
  }

  /**
   * @covers Google\AdsApi\Common\Util\MapUtils::toList
   * @expectedException UnexpectedValueException
   */
  public function testToListWithInvalidClass() {
    MapUtils::toList(['foo' => 'bar'],
        'Google\Api\Ads\Common\Util\InvalidTestString_ValueMapEntry');
  }

  /**
   * @param array $value the array to evaluate
   * @param bool $expected the expected result of IsMap()
   * @covers Google\AdsApi\Common\Util\MapUtils::isMap
   * @dataProvider isMapProvider
   */
  public function testIsMap(array $value, $expected) {
    $result = MapUtils::isMap($value);
    $this->assertSame($expected, $result);
  }

  /**
   * Provides map entries and their list equivalents using
   * `TestString_ValueMapEntry`.
   *
   * @return array an array of arrays of map entries as a list and its map
   *     equivalent
   */
  public function mapEntriesProvider() {
    $data = [];

    // One entry.
    $mapEntries1 = [
        new TestString_ValueMapEntry('foo', 'bar')
    ];
    $entryMap1 = [
        'foo' => 'bar'
    ];
    $data[] = [$mapEntries1, $entryMap1];

    // Multiple entries.
    $mapEntries2 = [
        new TestString_ValueMapEntry('foo', 'bar'),
        new TestString_ValueMapEntry('bear', 'Sheep'),
        new TestString_ValueMapEntry('Cow', 'PIG')
    ];
    $entryMap2 = [
        'foo' => 'bar',
        'bear' => 'Sheep',
        'Cow' => 'PIG'
    ];
    $data[] = [$mapEntries2, $entryMap2];

    // No entries.
    $mapEntries3 = [];
    $entryMap3 = [];
    $data[] = [$mapEntries3, $entryMap3];

    return $data;
  }

  /**
   * Provides arrays and the expected value of MapUtils::isMap().
   *
   * @return array an array or arrays of array and booleans
   */
  public function isMapProvider() {
    $data = [];

    // Maps.
    $data[] = [['foo' => 'bar'], true];
    $data[] = [['foo' => 'bar', 1 => 'baz'], true];

    // Not maps.
    $data[] = [[], false];
    $data[] = [['bar', 'baz'], false];
    $data[] = [['0' => 'bar'], false];

    return $data;
  }
}

class TestString_ValueMapEntry {
  public $key;
  public $value;

  function __construct($key, $value) {
    $this->key = $key;
    $this->value = $value;
  }
}

class InvalidTestString_ValueMapEntry {
  public $hey;
  public $ho;
  public $lets;
  public $go;
}

