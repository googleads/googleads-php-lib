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

use Google\AdsApi\Common\Testing\AdsBuildersTestProvider;
use Google\Auth\Credentials\ServiceAccountCredentials;
use Google\Auth\Credentials\UserRefreshCredentials;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `OAuth2TokenBuilder`.
 *
 * @see OAuth2TokenBuilder
 * @small
 */
class OAuth2TokenBuilderTest extends TestCase {

  private $oAuth2TokenBuilder;
  private $jsonKeyFilePath;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  protected function setUp() {
    $this->oAuth2TokenBuilder = new OAuth2TokenBuilder();
    $this->jsonKeyFilePath = AdsBuildersTestProvider::getFakeJsonKeyFilePath();
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::from
   */
  public function testBuildFromWithServiceAccountFlow() {
    $valueMap = [
        [
            'jsonKeyFilePath',
            'OAUTH2',
            $this->jsonKeyFilePath
        ], [
            'scopes',
            'OAUTH2',
            'https://www.googleapis.com/auth/dfp'
        ],
    ];
    $configurationMock = $this->getMockBuilder(Configuration::class)
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap($valueMap));

    $tokenFetcher = $this->oAuth2TokenBuilder
        ->from($configurationMock)
        ->build();

    $this->assertInstanceOf(ServiceAccountCredentials::class, $tokenFetcher);
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::from
   */
  public function testBuildFromWithServiceAccountFlowUsingImpersonation() {
    $valueMap = [
        [
            'jsonKeyFilePath',
            'OAUTH2',
            $this->jsonKeyFilePath
        ], [
            'scopes',
            'OAUTH2',
            'https://www.googleapis.com/auth/dfp'
        ], [
            'impersonatedEmail',
            'OAUTH2',
            'dfp@gmail.com'
        ]
    ];
    $configurationMock = $this->getMockBuilder(Configuration::class)
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap($valueMap));

    $tokenFetcher = $this->oAuth2TokenBuilder
        ->from($configurationMock)
        ->build();

    $this->assertInstanceOf(ServiceAccountCredentials::class, $tokenFetcher);
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::build
   * @expectedException InvalidArgumentException
   * @expectedExceptionMessageRegExp /both service account.+installed.+web.+flow.+set/
   */
  public function testBuildFailsWhenSettingValuesForMultipleFlows() {
    $this->oAuth2TokenBuilder
        ->withJsonKeyFilePath($this->jsonKeyFilePath)
        ->withScopes('https://www.googleapis.com/auth/dfp')
        ->withClientId('abcxyz-123.apps.googleusercontent.com')
        ->withClientSecret('ABcXyZ-123abc')
        ->withRefreshToken('1/AbC-xY123Za-bc')
        ->build();
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::build
   */
  public function testBuildWithServiceAccountFlow() {
    $tokenFetcher = $this->oAuth2TokenBuilder
        ->withJsonKeyFilePath($this->jsonKeyFilePath)
        ->withScopes('https://www.googleapis.com/auth/dfp')
        ->build();
    $this->assertInstanceOf(ServiceAccountCredentials::class, $tokenFetcher);
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::build
   */
  public function testBuildWithServiceAccountFlowUsingImpersonation() {
    $tokenFetcher = $this->oAuth2TokenBuilder
        ->withJsonKeyFilePath($this->jsonKeyFilePath)
        ->withScopes('https://www.googleapis.com/auth/dfp')
        ->withImpersonatedEmail('dfp@gmail.com')
        ->build();
    $this->assertInstanceOf(ServiceAccountCredentials::class, $tokenFetcher);
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::build
   * @expectedException InvalidArgumentException
   * @expectedExceptionMessageRegExp /jsonKeyFilePath.+scopes.+must be set/
   */
  public function testBuildFailsWhenMissingRequiredValuesForSAFlow() {
    $this->oAuth2TokenBuilder
        ->withJsonKeyFilePath($this->jsonKeyFilePath)
        ->build();
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::build
   */
  public function testBuildWithWebOrInstalledAppFlow() {
    $tokenFetcher = $this->oAuth2TokenBuilder
        ->withClientId('abcxyz-123.apps.googleusercontent.com')
        ->withClientSecret('ABcXyZ-123abc')
        ->withRefreshToken('1/AbC-xY123Za-bc')
        ->build();
    $this->assertInstanceOf(UserRefreshCredentials::class, $tokenFetcher);
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::build
   * @expectedException InvalidArgumentException
   * @expectedExceptionMessageRegExp /clientId.+clientSecret.+refreshToken.+must be set/
   */
  public function testBuildFailsWhenMissingRequiredValuesForInstAppOrWebFlow() {
    $this->oAuth2TokenBuilder
        ->withClientId('abcxyz-123.apps.googleusercontent.com')
        ->withClientSecret('ABcXyZ-123abc')
        ->build();
  }
}
