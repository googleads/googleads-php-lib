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
namespace Google\AdsApi\AdWords;

use Google\AdsApi\Common\Testing\FakeSoapPayloadsAndLogsProvider;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `AdWordsSoapLogMessageFormatterProvider`.
 *
 * @see AdWordsSoapLogMessageFormatterProvider
 * @small
 */
class AdWordsSoapLogMessageFormatterProviderTest
    extends TestCase {

  private $adWordsSoapLogMessageFormatter;
  private $requestHttpHeadersMock;
  private $requestSoapXmlMock;
  private $responseSoapXmlMock;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  protected function setUp() {
    $this->adWordsSoapLogMessageFormatter =
        (new AdWordsSoapLogMessageFormatterProvider())
            ->getSoapLogMessageFormatter();
    $this->requestHttpHeadersMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeMutateRequestHttpHeaders();
    $this->requestSoapXmlMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeMutateRequest();
    $this->responseSoapXmlMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeMutateResponse();
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSoapLogMessageFormatterProvider::getSoapLogMessageFormatter
   */
  public function testGetSoapLogMessageFormatterFormatsSummaryWithCCIdAndOps() {
    $this->assertSame(
        'clientCustomerId=123-777-999 operations=9 service=FeedService '
            . 'method=mutate responseTime=226 '
            . 'requestId=123abc456xyz server=adwords.google.com isFault=0 '
            . 'faultMessage=',
        $this->adWordsSoapLogMessageFormatter->formatSummary(
            'FeedService',
            'mutate',
            $this->requestHttpHeadersMock,
            $this->requestSoapXmlMock,
            $this->responseSoapXmlMock
        )
    );
  }
}
