<?php
/**
 * Copyright 2026 Google LLC
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
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ResponseTransferException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\NoSeekStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use RuntimeException;
use Throwable;

/**
 * Unit tests for `GuzzleLogMessageHandler`.
 *
 * @see GuzzleLogMessageHandler
 * @small
 */
class GuzzleLogMessageHandlerTest extends TestCase
{

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageHandler::log
     * @dataProvider provideShouldLogResponsePayload
     */
    public function testLogsSuccessfulCall($shouldLogResponsePayload)
    {
        $logger = $this->createMock(LoggerInterface::class);
        $logger->expects($this->once())->method('info')
            ->with($this->stringContains('Status: 200'));
        $logger->expects($this->once())->method('debug')
            ->with($this->logicalAnd(
                $this->stringContains('Authorization: REDACTED'),
                $this->stringContains(
                    $shouldLogResponsePayload ? 'report data' : 'REDACTED DATA'
                )
            ));
        $logger->expects($this->never())->method('warning');
        $client = $this->createClient(
            [new Response(200, [], new NoSeekStream(Utils::streamFor('report data')))],
            $logger,
            $shouldLogResponsePayload
        );

        $response = $client->request('GET', 'https://example.com/report', [
            'headers' => ['Authorization' => 'Bearer secret-token']
        ]);

        // The response body must still be readable after it was logged.
        $this->assertSame('report data', $response->getBody()->getContents());
    }

    public function provideShouldLogResponsePayload()
    {
        return [[true], [false]];
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageHandler::log
     * @dataProvider provideFailures
     */
    public function testLogsFailedCallAndRethrows(Throwable $reason, $expectedStatus)
    {
        $logger = $this->createMock(LoggerInterface::class);
        $logger->expects($this->once())->method('warning')
            ->with($this->stringContains('Status: ' . $expectedStatus));
        $logger->expects($this->once())->method('notice')
            ->with($this->stringContains($reason->getMessage()));
        $logger->expects($this->never())->method('info');
        $client = $this->createClient([$reason], $logger, false);

        $this->expectExceptionObject($reason);
        $client->request('GET', 'https://example.com/report');
    }

    public function provideFailures()
    {
        $request = new Request('GET', 'https://example.com/report');
        $failures = [
            [new RequestException('Request failed', $request), 'NULL'],
            [new ConnectException('Connection failed', $request), 'NULL'],
            [new ClientException('Forbidden', $request, new Response(403)), '403'],
            [new RuntimeException('Handler failed'), 'NULL']
        ];
        // Guzzle 8 reports failures that happen after the response headers
        // were received with a dedicated exception type.
        if (class_exists(ResponseTransferException::class)) {
            $failures[] = [
                new ResponseTransferException('Transfer failed', $request, new Response(200)),
                '200'
            ];
        }
        return $failures;
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageHandler::log
     * @dataProvider provideShouldLogResponsePayload
     */
    public function testErrorResponseRemainsReadable($shouldLogResponsePayload)
    {
        $logger = $this->createMock(LoggerInterface::class);
        $logger->expects($this->once())->method('notice')
            ->with($this->stringContains(
                $shouldLogResponsePayload ? 'failure details' : 'REDACTED DATA'
            ));
        $client = $this->createClient(
            [new Response(403, [], new NoSeekStream(Utils::streamFor('failure details')))],
            $logger,
            $shouldLogResponsePayload
        );

        try {
            $client->request('GET', 'https://example.com/report');
            $this->fail('Expected a ClientException.');
        } catch (ClientException $error) {
            $this->assertSame(
                'failure details',
                $error->getResponse()->getBody()->getContents()
            );
        }
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageHandler::log
     */
    public function testTransferFailureKeepsItsTypeAndResponse()
    {
        if (!class_exists(ResponseTransferException::class)) {
            $this->markTestSkipped('ResponseTransferException only exists in Guzzle 8.');
        }
        $request = new Request('GET', 'https://example.com/report');
        $response = new Response(200, [], new NoSeekStream(Utils::streamFor('partial report')));
        $previous = new RuntimeException('Connection reset');
        $reason = new ResponseTransferException('Transfer failed', $request, $response, $previous);
        $logger = $this->createMock(LoggerInterface::class);
        $logger->expects($this->once())->method('notice')
            ->with($this->logicalAnd(
                $this->stringContains('Transfer failed'),
                $this->stringContains('partial report')
            ));
        $client = $this->createClient([$reason], $logger, true);

        try {
            $client->request('GET', 'https://example.com/report');
            $this->fail('Expected a ResponseTransferException.');
        } catch (ResponseTransferException $error) {
            $this->assertSame('Transfer failed', $error->getMessage());
            $this->assertSame($previous, $error->getPrevious());
            $this->assertSame(
                'partial report',
                $error->getResponse()->getBody()->getContents()
            );
        }
    }

    private function createClient(
        array $queue,
        LoggerInterface $logger,
        $shouldLogResponsePayload
    ) {
        $client = new Client(['handler' => HandlerStack::create(new MockHandler($queue))]);
        return (new AdsGuzzleHttpClientFactory(
            $logger,
            new GuzzleLogMessageFormatter(['Authorization'], [], $shouldLogResponsePayload),
            $client
        ))->generateHttpClient();
    }
}
