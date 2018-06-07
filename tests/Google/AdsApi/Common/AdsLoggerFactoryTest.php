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

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `AdsLoggerFactory`.
 *
 * @see AdsLoggerFactory
 * @small
 */
class AdsLoggerFactoryTest extends TestCase
{

    private $adsLoggerFactory;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
    protected function setUp()
    {
        $this->adsLoggerFactory = new AdsLoggerFactory();
    }

  /**
   * @covers Google\AdsApi\Common\AdsLoggerFactory::createLogger
   */
    public function testCreateLoggerWithChannel()
    {
        $logger = $this->adsLoggerFactory->createLogger('ADS_CHANNEL');
        $this->assertSame('ADS_CHANNEL', $logger->getName());
    }

  /**
   * @covers Google\AdsApi\Common\AdsLoggerFactory::createLogger
   */
    public function testCreateLoggerWithFilePath()
    {
        $logger = $this->adsLoggerFactory->createLogger('', '/dev/null');
        $this->assertCount(1, $logger->getHandlers());
        $this->assertInstanceOf(StreamHandler::class, $logger->getHandlers()[0]);
    }

  /**
   * @covers Google\AdsApi\Common\AdsLoggerFactory::createLogger
   */
    public function testCreateLoggerWithLevel()
    {
        $logger = $this->adsLoggerFactory->createLogger('', null, 'NOTICE');
        $this->assertSame(Logger::NOTICE, $logger->getHandlers()[0]->getLevel());
    }
}
