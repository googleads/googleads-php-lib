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

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Common\Testing\AdsBuildersTestProvider;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for OAuth2TokenBuilder.
 * @see OAuth2TokenBuilder
 * @small
 */
class OAuth2TokenBuilderTest extends PHPUnit_Framework_TestCase {

  private $oAuth2TokenBuilder;
  private $jsonKeyFilePath;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
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
    $configurationMock = $this
        ->getMockBuilder('Google\AdsApi\Common\Configuration')
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap($valueMap));

    $tokenFetcher = $this->oAuth2TokenBuilder
        ->from($configurationMock)
        ->build();

    $this->assertInstanceOf('Google\Auth\Credentials\ServiceAccountCredentials',
        $tokenFetcher);
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::build
   * @expectedException InvalidArgumentException
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
    $this->assertInstanceOf('Google\Auth\Credentials\ServiceAccountCredentials',
        $tokenFetcher);
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::build
   * @expectedException InvalidArgumentException
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
    $this->assertInstanceOf('Google\Auth\Credentials\UserRefreshCredentials',
        $tokenFetcher);
  }

  /**
   * @covers Google\AdsApi\Common\OAuth2TokenBuilder::build
   * @expectedException InvalidArgumentException
   */
  public function testBuildFailsWhenMissingRequiredValuesForInstAppOrWebFlow() {
    $this->oAuth2TokenBuilder
        ->withClientId('abcxyz-123.apps.googleusercontent.com')
        ->withClientSecret('ABcXyZ-123abc')
        ->build();
  }
}

