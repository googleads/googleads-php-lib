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
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `AdsGuzzleHttpClientFactory`.
 *
 * @see AdsGuzzleHttpClientFactory
 * @small
 */
class AdsGuzzleHttpClientFactoryTest extends TestCase
{

  /**
   * @covers Google\AdsApi\Common\GuzzleHttpClientFactory::generateHttpClient
   */
    public function testGenerateHttpClient()
    {
        $logger = new Logger('', [new NullHandler()]);
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter([], [], false);

        $stack = HandlerStack::create();
        $stack->before(
            'http_errors',
            GuzzleLogMessageHandler::log($logger, $guzzleLogMessageFormatter)
        );

        $httpClientFactory =
        new AdsGuzzleHttpClientFactory($logger, $guzzleLogMessageFormatter);
        $httpClient = $httpClientFactory->generateHttpClient();

        $this->assertNotNull($httpClient);
        $this->assertInstanceOf(Client::class, $httpClient);
        $this->assertEquals($stack, $httpClient->getConfig()['handler']);
    }

  /**
   * @covers Google\AdsApi\Common\GuzzleHttpClientFactory::generateHttpClient
   */
    public function testGenerateHttpClient_userProvidedStack()
    {
        $logger = new Logger('', [new NullHandler()]);
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter([], [], false);

        $stack = HandlerStack::create();
        $stack->before(
            'http_errors',
            GuzzleLogMessageHandler::log($logger, $guzzleLogMessageFormatter)
        );
        $stack->before('http_errors', Middleware::tap());
        $client = new Client(['handler' => $stack]);
        $originalStack = clone $stack;

        $httpClientFactory = new AdsGuzzleHttpClientFactory(
            $logger,
            $guzzleLogMessageFormatter,
            $client
        );
        $httpClient = $httpClientFactory->generateHttpClient();

        $this->assertNotNull($httpClient);
        $this->assertInstanceOf(Client::class, $httpClient);
        $this->assertEquals(
            $originalStack,
            $stack,
            'Stack of the original HTTP client should stay unchanged.'
        );
        $this->assertNotEquals(
            $stack,
            $httpClient->getConfig()['handler'],
            'Stack of the created HTTP client should have the logging '
            . ' middleware, thus differ from the original.'
        );
    }

  /**
   * @covers Google\AdsApi\Common\GuzzleHttpClientFactory::generateHttpClient
   */
    public function testGenerateHttpClient_userProvidedConfigs()
    {
        $logger = new Logger('', [new NullHandler()]);
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter([], [], false);

        $stack = HandlerStack::create();
        $stack->before(
            'http_errors',
            GuzzleLogMessageHandler::log($logger, $guzzleLogMessageFormatter)
        );
        $client = new Client([
            'handler' => $stack,
            'verify' => true,
            'cookies' => false
        ]);
        $originalStack = clone $stack;

        $httpClientFactory = new AdsGuzzleHttpClientFactory(
            $logger,
            $guzzleLogMessageFormatter,
            $client
        );
        $httpClient = $httpClientFactory->generateHttpClient();

        $this->assertNotNull($httpClient);
        $this->assertInstanceOf(Client::class, $httpClient);
        $this->assertEquals(
            $originalStack,
            $stack,
            'Stack of the original HTTP client should stay unchanged.'
        );
        $this->assertNotEquals(
            $stack,
            $httpClient->getConfig()['handler'],
            'Stack of the created HTTP client should have the logging '
            . ' middleware, thus differ from the original.'
        );
        $this->assertTrue($httpClient->getConfig()['verify']);
        $this->assertFalse($httpClient->getConfig()['cookies']);
    }
}
