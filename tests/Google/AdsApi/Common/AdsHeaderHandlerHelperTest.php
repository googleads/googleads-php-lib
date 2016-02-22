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


use Google\AdsApi\Common\AdsHeaderHandlerHelper;
use Google\AdsApi\Common\Testing\ApplicationNameTestHelper;
use PHPUnit_Framework_TestCase;

/**
 * Tests for AdsHeaderHandlerHelper.
 * @see AdsHeaderHandlerHelper
 * @small
 */
class AdsHeaderHandlerHelperTest extends PHPUnit_Framework_TestCase {

  private $applicationNameTestHelper;
  private $adsHeaderHandlerHelper;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->applicationNameTestHelper = new ApplicationNameTestHelper();
    $this->adsHeaderHandlerHelper = new AdsHeaderHandlerHelper();
  }

  /**
   * @covers
   *     Google\AdsApi\Common\AdsHeaderHandlerHelper::formatApplicationNameForSoapHeader
   */
  public function testFormatApplicationNameForSoapHeader() {
    $libraryMetadataProviderMock = $this->getMock(
        'Google\AdsApi\Common\LibraryMetadataProvider');
    $libraryMetadataProviderMock->expects($this->once())
        ->method('getLibName')
        ->will($this->returnValue('googleads-php-lib2'));
    $libraryMetadataProviderMock->expects($this->once())
        ->method('getLibVersion')
        ->will($this->returnValue('1.0.0-alpha'));

    $search = $this->applicationNameTestHelper
        ->getRegexForFormattedApplicationName('Google report runner');
    $formattedApplicationName = $this->adsHeaderHandlerHelper
        ->formatApplicationNameForSoapHeader(
            'Google report runner',
            'Dfp',
            $libraryMetadataProviderMock
        );
    $this->assertRegExp($search, $formattedApplicationName);
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsHeaderHandler::scrubHttpHeaders
   * @covers Google\AdsApi\Common\AdsHeaderHandlerHelper::scrubHttpHeaders
   * @covers Google\AdsApi\Dfp\DfpHeaderHandler::scrubHttpHeaders
   */
  public function testScrubHttpHeaders() {
    $originalHttpHeaders = "server: https://abc.xyz\n"
        . "Authorization: Bearer 123.abc.456.xyz\n"
        . "Bear: Sheep";
    $expectedScrubbedHttpHeaders = "server: https://abc.xyz\n"
        . "Authorization: *****\n"
        . "Bear: Sheep";
    $scrubbedHttpHeaders = $this->adsHeaderHandlerHelper->scrubHttpHeaders(
        $originalHttpHeaders, array('Authorization'));
    $this->assertSame($expectedScrubbedHttpHeaders, $scrubbedHttpHeaders);
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsHeaderHandler::scrubHttpHeaders
   * @covers Google\AdsApi\Common\AdsHeaderHandlerHelper::scrubHttpHeaders
   * @covers Google\AdsApi\Dfp\DfpHeaderHandler::scrubHttpHeaders
   */
  public function testScrubHttpHeadersNothingToScrubNoOp() {
    $originalHttpHeaders = "server: https://abc.xyz\n"
        . "Authorization: Bearer 123.abc.456.xyz\n"
        . "Bear: Sheep";
    $expectedScrubbedHttpHeaders = "server: https://abc.xyz\n"
        . "Authorization: *****\n"
        . "Bear: Sheep";
    $scrubbedHttpHeaders = $this->adsHeaderHandlerHelper->scrubHttpHeaders(
        $originalHttpHeaders, array('Authorization'));
    $this->assertSame($expectedScrubbedHttpHeaders, $scrubbedHttpHeaders);
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsHeaderHandler::scrubSoapHeaders
   * @covers Google\AdsApi\Common\AdsHeaderHandlerHelper::scrubSoapHeaders
   * @covers Google\AdsApi\Dfp\DfpHeaderHandler::scrubSoapHeaders
   */
  public function testScrubSoapHeaders() {
    $originalSoapXml = '<xml><RequestHeader><developerToken>rawr'
        . '</developerToken></RequestHeader></xml>';
    $expectedSoapXml = '<xml><RequestHeader><developerToken>*****'
        . '</developerToken></RequestHeader></xml>';
    $scrubbedSoapHeaders = $this->adsHeaderHandlerHelper->scrubSoapHeaders(
        $originalSoapXml, array('developerToken'));
    $this->assertSame($expectedSoapXml, $scrubbedSoapHeaders);
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsHeaderHandler::scrubSoapHeaders
   * @covers Google\AdsApi\Common\AdsHeaderHandlerHelper::scrubSoapHeaders
   * @covers Google\AdsApi\Dfp\DfpHeaderHandler::scrubSoapHeaders
   */
  public function testScrubSoapHeadersNothingToScrubNoOp() {
    $originalSoapXml = '<xml><RequestHeader><developerToken>rawr'
        . '</developerToken></RequestHeader></xml>';
    $scrubbedSoapHeaders = $this->adsHeaderHandlerHelper->scrubSoapHeaders(
        $originalSoapXml, array());
    $this->assertSame($originalSoapXml, $scrubbedSoapHeaders);
  }
}

