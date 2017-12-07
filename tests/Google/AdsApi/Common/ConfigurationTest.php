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
 * Unit tests for `Configuration`.
 *
 * @see Configuration
 * @small
 */
class ConfigurationTest extends TestCase {

  /**
   * @covers Google\AdsApi\Common\Configuration::getConfiguration
   */
  public function testGetConfigurationWithoutSections() {
    $settings = [
        'networkCode' => '12345678',
        'applicationName' => 'Google report runner',
        'endpoint' => 'https://abc.xyz'
    ];
    $configuration = new Configuration($settings);
    $this->assertSame('12345678',
        $configuration->getConfiguration('networkCode'));
    $this->assertSame('Google report runner',
        $configuration->getConfiguration('applicationName'));
    $this->assertSame('https://abc.xyz',
        $configuration->getConfiguration('endpoint'));
  }

  /**
   * @covers Google\AdsApi\Common\Configuration::getConfiguration
   */
  public function testGetConfigurationWithSections() {
    $settings = [
        'networkCode' => '12345678',
        'applicationName' => 'Google report runner',
        'endpoint' => 'https://abc.xyz',
        'OAUTH2' => [
            'client_id' => '123aBC456-xYz.apps.googleusercontent.com',
            'client_secret' => '1abC-456Xyz'
        ],
        'SSL' => [
            'VERIFY_PEER' => '1',
            'VERIFY_HOST' => ''
        ]
    ];
    $configuration = new Configuration($settings);
    $this->assertSame('12345678',
        $configuration->getConfiguration('networkCode'));
    $this->assertSame('Google report runner',
        $configuration->getConfiguration('applicationName'));
    $this->assertSame('https://abc.xyz',
        $configuration->getConfiguration('endpoint'));
    $this->assertSame('123aBC456-xYz.apps.googleusercontent.com',
        $configuration->getConfiguration('client_id', 'OAUTH2'));
    $this->assertSame('1abC-456Xyz',
        $configuration->getConfiguration('client_secret', 'OAUTH2'));
    $this->assertSame('1',
        $configuration->getConfiguration('VERIFY_PEER', 'SSL'));
    $this->assertSame('',
        $configuration->getConfiguration('VERIFY_HOST', 'SSL'));
  }

  /**
   * @covers Google\AdsApi\Common\Configuration::getConfiguration
   */
  public function testGetConfigurationWithOnlySections() {
    $settings = [
        'OAUTH2' => [
            'client_id' => '123aBC456-xYz.apps.googleusercontent.com',
            'client_secret' => '1abC-456Xyz'
        ],
        'SOAP' => [
            'COMPRESSION_LEVEL' => '2',
            'WSDL_CACHE' => '1'
        ],
        'SSL' => [
            'VERIFY_PEER' => '1',
            'VERIFY_HOST' => ''
        ]
    ];
    $configuration = new Configuration($settings);
    $this->assertSame('123aBC456-xYz.apps.googleusercontent.com',
        $configuration->getConfiguration('client_id', 'OAUTH2'));
    $this->assertSame('1abC-456Xyz',
        $configuration->getConfiguration('client_secret', 'OAUTH2'));
    $this->assertSame('2',
        $configuration->getConfiguration('COMPRESSION_LEVEL', 'SOAP'));
    $this->assertSame('1',
        $configuration->getConfiguration('WSDL_CACHE', 'SOAP'));
    $this->assertSame('1',
        $configuration->getConfiguration('VERIFY_PEER', 'SSL'));
    $this->assertSame('',
        $configuration->getConfiguration('VERIFY_HOST', 'SSL'));
  }

  /**
   * @covers Google\AdsApi\Common\Configuration::getConfiguration
   */
  public function testGetConfigurationWithSettingNameNotFound() {
    $settings = [
        'networkCode' => '12345678',
        'applicationName' => 'Google report runner',
        'OAUTH2' => [
            'client_id' => '123aBC456-xYz.apps.googleusercontent.com',
            'client_secret' => '1abC-456Xyz'
        ]
    ];
    $configuration = new Configuration($settings);
    $this->assertSame('12345678',
        $configuration->getConfiguration('networkCode'));
    $this->assertSame('Google report runner',
        $configuration->getConfiguration('applicationName'));
    $this->assertNull($configuration->getConfiguration('endpoint'));
    $this->assertSame('123aBC456-xYz.apps.googleusercontent.com',
        $configuration->getConfiguration('client_id', 'OAUTH2'));
    $this->assertSame('1abC-456Xyz',
        $configuration->getConfiguration('client_secret', 'OAUTH2'));
    $this->assertNull($configuration->getConfiguration(
        'refresh_token', 'OAUTH2'));
  }

  /**
   * @covers Google\AdsApi\Common\Configuration::getConfiguration
   */
  public function testGetConfigurationWithSectionNameNotFound() {
    $settings = [
        'networkCode' => '12345678',
        'applicationName' => 'Google report runner',
        'OAUTH2' => [
            'client_id' => '123aBC456-xYz.apps.googleusercontent.com',
            'client_secret' => '1abC-456Xyz'
        ]
    ];
    $configuration = new Configuration($settings);
    $this->assertSame('12345678',
        $configuration->getConfiguration('networkCode'));
    $this->assertSame('Google report runner',
        $configuration->getConfiguration('applicationName'));
    $this->assertSame('123aBC456-xYz.apps.googleusercontent.com',
        $configuration->getConfiguration('client_id', 'OAUTH2'));
    $this->assertSame('1abC-456Xyz',
        $configuration->getConfiguration('client_secret', 'OAUTH2'));
    $this->assertNull($configuration->getConfiguration('VERIFY_HOST', 'SSL'));
  }
}
