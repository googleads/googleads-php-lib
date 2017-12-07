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

use Google\AdsApi\Common\Testing\FakeInvalidMapEntry;
use Google\AdsApi\Common\Testing\FakeMapEntry;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `MapEntries`.
 *
 * @see MapEntries
 * @small
 */
class MapEntriesTest extends TestCase {

  /**
   * @param array $mapEntries a list of map entries
   * @param array $expectedMap the expected map
   * @covers Google\AdsApi\Common\Util\MapEntries::toAssociativeArray
   * @dataProvider mapEntriesProvider
   */
  public function testToAssociativeArray(
      array $mapEntries, array $expectedMap) {
    $actualMap = MapEntries::toAssociativeArray($mapEntries);
    $this->assertSame($expectedMap, $actualMap);
  }

  /**
   * @covers Google\AdsApi\Common\Util\MapEntries::toAssociativeArray
   * @expectedException UnexpectedValueException
   */
  public function testToAssociativeArrayWithInvalidMapEntryType() {
    $invalidClass = new FakeInvalidMapEntry();
    $invalidClass->lets = 'foo';
    MapEntries::toAssociativeArray([$invalidClass]);
  }

  /**
   * @param array $expectedMapEntries the expected map entries as a list
   * @param array $map a map of entries
   * @covers Google\AdsApi\Common\Util\MapEntries::fromAssociativeArray
   * @dataProvider mapEntriesProvider
   */
  public function testFromAssociativeArray(
      array $expectedMapEntries, array $map) {
    $actualMapEntries =
        MapEntries::fromAssociativeArray($map, FakeMapEntry::class);
    $this->assertCount(count($expectedMapEntries), $actualMapEntries);

    foreach ($actualMapEntries as $i => $actualMapEntry) {
      $this->assertSame(
          $expectedMapEntries[$i]->key, $actualMapEntry->key);
      $this->assertSame(
          $expectedMapEntries[$i]->value, $actualMapEntry->value);
    }
  }

  /**
   * @covers Google\AdsApi\Common\Util\MapEntries::fromAssociativeArray
   * @expectedException UnexpectedValueException
   */
  public function testFromAssociativeArrayWithInvalidClass() {
    MapEntries::fromAssociativeArray(
        ['foo' => 'bar'], FakeInvalidMapEntry::class);
  }

  /**
   * Provides map entries and their list equivalents using `FakeMapEntry`.
   *
   * @return array an array of arrays of map entries as a list and its map
   *     equivalent
   */
  public function mapEntriesProvider() {
    $data = [];

    // One entry.
    $mapEntries1 = [
        new FakeMapEntry('foo', 'bar')
    ];
    $entryMap1 = [
        'foo' => 'bar'
    ];
    $data[] = [$mapEntries1, $entryMap1];

    // Multiple entries.
    $mapEntries2 = [
        new FakeMapEntry('foo', 'bar'),
        new FakeMapEntry('bear', 'Sheep'),
        new FakeMapEntry('Cow', 'PIG')
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
}
