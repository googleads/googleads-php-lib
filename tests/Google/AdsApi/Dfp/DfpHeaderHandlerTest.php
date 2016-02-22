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
namespace Google\AdsApi\Dfp;


use Google\AdsApi\Common\Util\SimpleGoogleCredential;
use Google\AdsApi\Dfp\DfpHeaderHandler;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for DfpHeaderHandler.
 * @see DfpHeaderHandler
 * @group small
 */
class DfpHeaderHandlerTest extends PHPUnit_Framework_TestCase {

  private $dfpHeaderHandler;
  private $dfpSessionBuilder;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->dfpHeaderHandler = new DfpHeaderHandler();
    $this->dfpSessionBuilder = new DfpSessionBuilder();
    $this->dfpSessionBuilder
        ->withNetworkCode('12345678')
        ->withApplicationName('Google report runner')
        ->withOAuth2Credential(new SimpleGoogleCredential());
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpHeaderHandler::generateHttpHeaders
   */
  public function testGenerateHttpHeaders() {
    $dfpSession = $this->dfpSessionBuilder->build();
    $httpHeaders = $this->dfpHeaderHandler->generateHttpHeaders($dfpSession);
    $this->assertSame(array(), $httpHeaders);
  }

}

