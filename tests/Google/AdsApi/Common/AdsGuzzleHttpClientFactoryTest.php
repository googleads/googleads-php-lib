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

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for `AdsGuzzleHttpClientFactory`.
 *
 * @see AdsGuzzleHttpClientFactory
 * @small
 */
class AdsGuzzleHttpClientFactoryTest extends PHPUnit_Framework_TestCase {

  /**
   * @covers Google\AdsApi\Common\GuzzleHttpClientFactory::generateHttpClient
   */
  public function testGenerateHttpClient() {
    $logger = new Logger('', [new NullHandler()]);

    $stack = HandlerStack::create();
    $stack->before('http_errors', GuzzleLogMessageHandler::log($logger));

    $httpClientFactory = new AdsGuzzleHttpClientFactory($logger);
    $httpClient = $httpClientFactory->generateHttpClient();

    $this->assertNotNull($httpClient);
    $this->assertInstanceOf(Client::class, $httpClient);
    $this->assertEquals($stack, $httpClient->getConfig()['handler']);
  }

  /**
   * @covers Google\AdsApi\Common\GuzzleHttpClientFactory::generateHttpClient
   */
  public function testGenerateHttpClient_userProvidedStack() {
    $logger = new Logger('', [new NullHandler()]);

    $stack = HandlerStack::create();
    $stack->before('http_errors', GuzzleLogMessageHandler::log($logger));
    $stack->before('http_errors', Middleware::tap());
    $client = new Client(['handler' => $stack]);

    $httpClientFactory = new AdsGuzzleHttpClientFactory($logger, $client);
    $httpClient = $httpClientFactory->generateHttpClient();

    $this->assertNotNull($httpClient);
    $this->assertInstanceOf(Client::class, $httpClient);
    $this->assertEquals($stack, $httpClient->getConfig()['handler']);
  }

  /**
   * @covers Google\AdsApi\Common\GuzzleHttpClientFactory::generateHttpClient
   */
  public function testGenerateHttpClient_userProvidedConfigs() {
    $logger = new Logger('', [new NullHandler()]);

    $stack = HandlerStack::create();
    $stack->before('http_errors', GuzzleLogMessageHandler::log($logger));
    $client = new Client([
        'handler' => $stack,
        'verify' => true,
        'cookies' => false
    ]);

    $httpClientFactory = new AdsGuzzleHttpClientFactory($logger, $client);
    $httpClient = $httpClientFactory->generateHttpClient();

    $this->assertNotNull($httpClient);
    $this->assertInstanceOf(Client::class, $httpClient);
    $this->assertEquals($stack, $httpClient->getConfig()['handler']);
    $this->assertTrue($httpClient->getConfig()['verify']);
    $this->assertFalse($httpClient->getConfig()['cookies']);
  }
}
