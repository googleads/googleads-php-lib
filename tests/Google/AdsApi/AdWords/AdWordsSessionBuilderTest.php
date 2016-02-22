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


use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\Common\Util\SimpleGoogleCredential;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for AdWordsSessionBuilder.
 * @see AdWordsSessionBuilder
 * @small
 */
class AdWordsSessionBuilderTest extends PHPUnit_Framework_TestCase {

  private $adWordsSessionBuilder;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->adWordsSessionBuilder = new AdWordsSessionBuilder();
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::from
   */
  public function testBuildFrom() {
    $valueMap = array(
        array('developerToken', null, 'ABcdeFGH93KL-NOPQ_STUv'),
        array('userAgent', null, 'report downloader'),
        array('endpoint', null, 'https://abc.xyz'),
        array('clientCustomerId', null, '123-456-7890'),
        array('isPartialFailure', null, '1'),
        array('isSkipReportHeader', 'REPORTING', '1'),
        array('isSkipColumnHeader', 'REPORTING', '1'),
        array('isSkipReportSummary', 'REPORTING', '')
    );
    $configurationMock =
        $this->getMockBuilder('Google\AdsApi\Common\Configuration')
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap($valueMap));

    $adWordsSession = $this->adWordsSessionBuilder
        ->from($configurationMock)
        ->withOAuth2Credential(new SimpleGoogleCredential())
        ->build();
    $this->assertSame(
        'ABcdeFGH93KL-NOPQ_STUv', $adWordsSession->getDeveloperToken());
    $this->assertSame('report downloader', $adWordsSession->getUserAgent());
    $this->assertSame('https://abc.xyz', $adWordsSession->getEndpoint());
    $this->assertSame('123-456-7890', $adWordsSession->getClientCustomerId());
    $this->assertSame(true, $adWordsSession->isPartialFailure());
    $this->assertSame(
        true, $adWordsSession->getReportSettings()->isSkipReportHeader());
    $this->assertSame(
        true, $adWordsSession->getReportSettings()->isSkipColumnHeader());
    $this->assertSame(
        false, $adWordsSession->getReportSettings()->isSkipReportSummary());
    $this->assertNull(
        $adWordsSession->getReportSettings()->isIncludeZeroImpressions());
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
   * @expectedException Google\AdsApi\Common\ValidationException
   */
  public function testBuildFailsWithoutDeveloperToken() {
    $this->adWordsSessionBuilder
        ->withUserAgent('report downloader')
        ->withOAuth2Credential(new SimpleGoogleCredential())
        ->build();
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
   * @expectedException Google\AdsApi\Common\ValidationException
   */
  public function testBuildFailsWithoutUserAgent() {
    $this->adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withOAuth2Credential(new SimpleGoogleCredential())
        ->build();
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
   * @expectedException Google\AdsApi\Common\ValidationException
   */
  public function testBuildFailsWithDefaultUserAgent() {
    $this->adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withUserAgent(AdWordsSessionBuilder::DEFAULT_USER_AGENT)
        ->withOAuth2Credential(new SimpleGoogleCredential())
        ->build();
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
   * @expectedException Google\AdsApi\Common\ValidationException
   */
  public function testBuildFailsWithInvalidEndpointUrl() {
    $this->adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withUserAgent('report downloader')
        ->withEndpoint('abcxyz')
        ->withOAuth2Credential(new SimpleGoogleCredential())
        ->build();
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
   * @expectedException Google\AdsApi\Common\ValidationException
   */
  public function testBuildFailsWithoutOAuth2Credential() {
    $this->adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withUserAgent('report downloader')
        ->build();
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
   */
  public function testBuildDefaults() {
    $adWordsSession = $this->adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withUserAgent('report downloader')
        ->withOAuth2Credential(new SimpleGoogleCredential())
        ->build();
    $this->assertInstanceOf(
        'Psr\Log\LoggerInterface', $adWordsSession->getLogger());
    $this->assertTrue(filter_var(
        $adWordsSession->getEndpoint(), FILTER_VALIDATE_URL) !== false);
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
   */
  public function testBuild() {
    $adWordsSession = $this->adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withUserAgent('report downloader')
        ->withEndpoint('https://abc.xyz/')
        ->withOAuth2Credential(new SimpleGoogleCredential())
        ->build();
    $this->assertSame(
        'ABcdeFGH93KL-NOPQ_STUv', $adWordsSession->getDeveloperToken());
    $this->assertSame('https://abc.xyz/', $adWordsSession->getEndpoint());
    $this->assertSame(
        'report downloader', $adWordsSession->getUserAgent());
    $this->assertInstanceOf(
        'Google\AdsApi\Common\Util\SimpleGoogleCredential',
        $adWordsSession->getOAuth2Credential()
    );
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
   */
  public function testBuildWithClientCustomerId() {
    $adWordsSession = $this->adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withUserAgent('report downloader')
        ->withOAuth2Credential(new SimpleGoogleCredential())
        ->withClientCustomerId('123-456-7890')
        ->build();
    $this->assertSame(
        'ABcdeFGH93KL-NOPQ_STUv', $adWordsSession->getDeveloperToken());
    $this->assertSame(
        'report downloader', $adWordsSession->getUserAgent());
    $this->assertInstanceOf(
        'Google\AdsApi\Common\Util\SimpleGoogleCredential',
        $adWordsSession->getOAuth2Credential()
    );
    $this->assertSame('123-456-7890', $adWordsSession->getClientCustomerId());
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
   */
  public function testBuildWithEnableAndValidateOnlyPartialFailure() {
    $adWordsSession = $this->adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withUserAgent('report downloader')
        ->withOAuth2Credential(new SimpleGoogleCredential())
        ->enableValidateOnly()
        ->enablePartialFailure()
        ->build();
    $this->assertSame(
        'ABcdeFGH93KL-NOPQ_STUv', $adWordsSession->getDeveloperToken());
    $this->assertSame(
        'report downloader', $adWordsSession->getUserAgent());
    $this->assertInstanceOf(
        'Google\AdsApi\Common\Util\SimpleGoogleCredential',
        $adWordsSession->getOAuth2Credential()
    );
    $this->assertSame(true, $adWordsSession->isValidateOnly());
    $this->assertSame(true, $adWordsSession->isPartialFailure());
  }
}

