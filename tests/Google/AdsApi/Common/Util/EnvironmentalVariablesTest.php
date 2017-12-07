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

use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `EnvironmentalVariables`.
 *
 * @see EnvironmentalVariables
 * @small
 */
class EnvironmentalVariablesTest extends TestCase {

  private $environmentalVariables;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  protected function setUp() {
    $this->environmentalVariables = new EnvironmentalVariables();
  }

  /**
   * @covers Google\AdsApi\Common\Util\EnvironmentalVariables::getHome
   */
  public function testGetHomeNixPlatforms() {
    putenv('HOME=/usr/local/home/bear/');
    $this->assertSame(
        '/usr/local/home/bear',
        $this->environmentalVariables->getHome()
    );
  }

  /**
   * @covers Google\AdsApi\Common\Util\EnvironmentalVariables::getHome
   */
  public function testGetHomeNixPlatformsNoHomeEnvVar() {
    putenv('HOME=');
    $_SERVER['HOME'] = '/usr/local/home/walrus/';
    $this->assertSame(
        '/usr/local/home/walrus',
        $this->environmentalVariables->getHome()
    );
  }

  /**
   * @covers Google\AdsApi\Common\Util\EnvironmentalVariables::getHome
   */
  public function testGetHomeWindows() {
    putenv('HOME=');
    $_SERVER['HOME'] = null;
    putenv('HOMEDRIVE=C:\\');
    putenv('HOMEPATH=Users\\Moose\\');
    $this->assertSame(
        'C:\\Users\\Moose',
        $this->environmentalVariables->getHome()
    );
  }

  /**
   * @covers Google\AdsApi\Common\Util\EnvironmentalVariables::getHome
   */
  public function testGetHomeWindowsNoHomeEnvVars() {
    putenv('HOME=');
    $_SERVER['HOME'] = null;
    putenv('HOMEDRIVE=');
    putenv('HOMEPATH=');
    $_SERVER['HOMEDRIVE'] = 'D:\\';
    $_SERVER['HOMEPATH'] = 'Users\\Sheep';
    $this->assertSame(
        'D:\\Users\\Sheep',
        $this->environmentalVariables->getHome()
    );
  }

  /**
   * @covers Google\AdsApi\Common\Util\EnvironmentalVariables::getHome
   * @expectedException UnexpectedValueException
   */
  public function testGetHomeNotFound() {
    putenv('HOME=');
    $_SERVER['HOME'] = null;
    putenv('HOMEDRIVE=');
    putenv('HOMEPATH=');
    $_SERVER['HOMEDRIVE'] = '';
    $_SERVER['HOMEPATH'] = null;
    $this->environmentalVariables->getHome();
  }
}
