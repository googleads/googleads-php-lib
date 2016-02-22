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


use Google\AdsApi\AdWords\AdWordsHeaderHandler;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\Common\Util\SimpleGoogleCredential;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for AdWordsHeaderHandler.
 * @see AdWordsHeaderHandler
 * @small
 */
class AdWordsHeaderHandlerTest extends PHPUnit_Framework_TestCase {

  private $adWordsHeaderHandler;
  private $adWordsSessionBuilder;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->adWordsHeaderHandler = new AdWordsHeaderHandler();
    $this->adWordsSessionBuilder = new AdWordsSessionBuilder();
    $this->adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withUserAgent('report downloader')
        ->withOAuth2Credential(new SimpleGoogleCredential());
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsHeaderHandler::generateHttpHeaders
   */
  public function testGenerateHttpHeaders() {
    $adWordsSession = $this->adWordsSessionBuilder->build();
    $httpHeaders =
        $this->adWordsHeaderHandler->generateHttpHeaders($adWordsSession);
    $this->assertSame(array(), $httpHeaders);
  }
}

