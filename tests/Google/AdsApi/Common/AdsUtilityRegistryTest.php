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
namespace Google\AdsApi\Common;

use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `AdsUtilityRegistry`.
 *
 * @see AdsUtilityRegistry
 * @small
 */
class AdsUtilityRegistryTest extends TestCase {

  private $adsUtilityRegistry;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  public function setUp() {
    $this->adsUtilityRegistry = AdsUtilityRegistry::getInstance();
    $this->adsUtilityRegistry->popAllUtilities();
    $this->adsUtilityRegistry->addUtility('ReportDownloader/file');
    $this->adsUtilityRegistry->addUtility('BatchJobHelper');
    $this->adsUtilityRegistry->addUtility('ReportDownloader/string');
    $this->adsUtilityRegistry->addUtility('ReportDownloader/stream');
  }

  /**
   * @covers Google\AdsApi\Common\AdsUtilityRegistry::addUtility
   * @covers Google\AdsApi\Common\AdsUtilityRegistry::popAllUtilities
   */
  public function testAddAndPopRegisteredUtilities() {
    // The members of expected array should be sorted.
    $expected = [
        'BatchJobHelper',
        'ReportDownloader/file',
        'ReportDownloader/stream',
        'ReportDownloader/string'
    ];
    // First time, get all registered ads utilities.
    $this->assertEquals($expected,
        $this->adsUtilityRegistry->popAllUtilities());
    // Second time and later, get an empty list.
    $this->assertEmpty($this->adsUtilityRegistry->popAllUtilities());
    $this->assertEmpty($this->adsUtilityRegistry->popAllUtilities());
  }
}
