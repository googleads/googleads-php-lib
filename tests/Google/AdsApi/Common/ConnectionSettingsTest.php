<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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
 * Unit tests for `ConnectionSettings`.
 *
 * @see ConnectionSettings
 * @small
 */
class ConnectionSettingsTest extends TestCase
{

  /**
   * @param array $value the array of proxies to evaluate
   * @param bool $expected the expected result of getProxyParts()
   * @covers Google\AdsApi\Common\ConnectionSettings::getProxyParts
   * @dataProvider proxyPartsProvider
   */
    public function testGetProxyParts($value, $expected)
    {
        $connectionSettings = (new ConnectionSettingsBuilder())
        ->withProxyUrl($value)
        ->build();

        $this->assertSame($expected, $connectionSettings->getProxyParts());
    }

  /**
   * Provides arrays and the expected values of
   * ConnectionSettings::getProxyParts().
   *
   * @return array arrays of a string and an array
   */
    public function proxyPartsProvider()
    {
        $data = [];

        // Full URL.
        $data[] = ['http://user:pass@localhost:999',
        ['user', 'pass', 'http://localhost', '999']];
        // No password.
        $data[] = ['http://user@localhost:999',
        ['user', '', 'http://localhost', '999']];
        // No username and password.
        $data[] = ['https://localhost:999',
        ['', '', 'https://localhost', '999']];

        // No protocol.
        $data[] = ['user:pass@localhost:999',
        ['user', 'pass', 'localhost', '999']];
        // No protocol and username and password.
        $data[] = ['localhost:999',
        ['', '', 'localhost', '999']];

        // No port.
        $data[] = ['localhost',
        ['', '', 'localhost', '']];
        $data[] = ['https://localhost',
        ['', '', 'https://localhost', '']];

        // IP address.
        $data[] = ['https://127.0.0.1:999',
        ['', '', 'https://127.0.0.1', '999']];
        $data[] = ['127.0.0.1:999',
        ['', '', '127.0.0.1', '999']];
        $data[] = ['127.0.0.1',
        ['', '', '127.0.0.1', '']];
        $data[] = ['', ['', '', '', '']];

        return $data;
    }
}
