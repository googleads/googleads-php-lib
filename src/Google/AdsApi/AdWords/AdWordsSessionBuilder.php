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

use Google\AdsApi\Common\AdsBuilder;
use Google\AdsApi\Common\Configuration;
use Google\AdsApi\Common\ConfigurationLoader;
use Google\AdsApi\Common\SoapSettings;
use Google\AdsApi\Common\SoapSettingsBuilder;
use Google\Auth\FetchAuthTokenInterface;
use InvalidArgumentException;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;

/**
 * Builder for an AdWords session.
 * @see AdWordsSession
 */
class AdWordsSessionBuilder implements AdsBuilder {

  /**
   * @var string the default user agent included in our example library *.ini
   *     files
   */
  const DEFAULT_USER_AGENT = 'unknown';

  /**
   * @var string DEFAULT_ENDPOINT the default base endpoint for the AdWords API
   */
  const DEFAULT_ENDPOINT = 'https://adwords.google.com/';

  private $configurationLoader;
  private $soapSettingsBuilder;
  private $reportSettingsBuilder;

  private $logger;
  private $developerToken;
  private $userAgent;
  private $endpoint;
  private $oAuth2Credential;
  private $soapSettings;
  private $clientCustomerId;
  private $expressBusinessId;
  private $expressPlusPageId;
  private $isValidateOnly;
  private $isPartialFailure;
  private $reportSettings;

  public function __construct() {
    $this->configurationLoader = new ConfigurationLoader();
    $this->soapSettingsBuilder = new SoapSettingsBuilder();
    $this->reportSettingsBuilder = new ReportSettingsBuilder();
  }

  /**
   * @see AdsBuilder::fromFile()
   */
  public function fromFile($path = null) {
    if ($path === null) {
      $path = self::DEFAULT_CONFIGURATION_FILENAME;
    }
    return $this->from($this->configurationLoader->fromFile($path));
  }

  /**
   * @see AdsBuilder::from()
   */
  public function from(Configuration $configuration) {
    $this->developerToken =
        $configuration->getConfiguration('developerToken', 'ADWORDS');
    $this->userAgent = $configuration->getConfiguration('userAgent', 'ADWORDS');
    $this->endpoint = $configuration->getConfiguration('endpoint', 'ADWORDS');

    $this->soapSettings =
        $this->soapSettingsBuilder->from($configuration)->build();

    $this->clientCustomerId =
        $configuration->getConfiguration('clientCustomerId', 'ADWORDS');
    if ($configuration->getConfiguration('isPartialFailure', 'ADWORDS')
        !== null) {
      $this->isPartialFailure = boolval(
          $configuration->getConfiguration('isPartialFailure', 'ADWORDS'));
    }

    $this->reportSettings =
        $this->reportSettingsBuilder->from($configuration)->build();

    return $this;
  }

  /**
   * Includes a PSR-3 compliant logger. This is optional and will default to a
   * Monolog logger that logs to STDERR.
   *
   * @param LoggerInterface|null $logger
   * @return AdWordsSessionBuilder this builder
   */
  public function withLogger(LoggerInterface $logger) {
    $this->logger = $logger;
    return $this;
  }

  /**
   * Includes a developer token. This is required.
   *
   * @param string $developerToken
   * @return AdWordsSessionBuilder this builder
   */
  public function withDeveloperToken($developerToken) {
    $this->developerToken = $developerToken;
    return $this;
  }

  /**
   * Includes user agent. This is required.
   *
   * @param string $userAgent
   * @return AdWordsSessionBuilder this builder
   */
  public function withUserAgent($userAgent) {
    $this->userAgent = $userAgent;
    return $this;
  }

  /**
   * Includes the AdWords API server's base endpoint. This is optional.
   *
   * @see self::DEFAULT_ENDPOINT
   * @param string|null $endpoint
   * @return AdWordsSessionBuilder this builder
   */
  public function withEndpoint($endpoint) {
    $this->endpoint = $endpoint;
    return $this;
  }

  /**
   * Includes the OAuth2 credential to be used for authentication. This is
   * required.
   *
   * @param FetchAuthTokenInterface $oAuth2Credential
   * @return AdWordsSessionBuilder this builder
   */
  public function withOAuth2Credential(
      FetchAuthTokenInterface $oAuth2Credential) {
    $this->oAuth2Credential = $oAuth2Credential;
    return $this;
  }

  /**
   * Includes SOAP settings. This is optional.
   *
   * @see SoapSettingsBuilder::defaultOptionals()
   * @param SoapSettings|null $soapSettings
   * @return AdWordsSessionBuilder this builder
   */
  public function withSoapSettings(SoapSettings $soapSettings) {
    $this->soapSettings = $soapSettings;
    return $this;
  }

  /**
   * Includes a client customer ID. This is required except when using
   * CustomerService.
   *
   * @param string|null $clientCustomerId
   * @return AdWordsSessionBuilder this builder
   */
  public function withClientCustomerId($clientCustomerId) {
    $this->clientCustomerId = $clientCustomerId;
    return $this;
  }

  /**
   * Enables validate only. Disabled by default.
   *
   * @return AdWordsSessionBuilder this builder
   */
  public function enableValidateOnly() {
    $this->isValidateOnly = true;
    return $this;
  }

  /**
   * Enables partial failure. Disabled by default.
   *
   * @return AdWordsSessionBuilder this builder
   */
  public function enablePartialFailure() {
    $this->isPartialFailure = true;
    return $this;
  }

  /**
   * Includes report settings. This is optional.
   *
   * @see ReportSettingsBuilder::defaultOptionals()
   * @param ReportSettings|null $reportSettings
   * @return AdWordsSessionBuilder this builder
   */
  public function withReportSettings(ReportSettings $reportSettings) {
    $this->reportSettings = $reportSettings;
    return $this;
  }

  /**
   * @see AdsBuilder::build()
   */
  public function build() {
    $this->defaultOptionals();
    $this->validate();
    return new AdWordsSession($this);
  }

  /**
   * @see AdsBuilder::defaultOptionals()
   */
  public function defaultOptionals() {
    if ($this->endpoint === null) {
      $this->endpoint = self::DEFAULT_ENDPOINT;
    }

    if ($this->logger === null && defined('STDERR')) {
      $handler = new StreamHandler(STDERR, Logger::INFO);
      $handler->getFormatter()->ignoreEmptyContextAndExtra();
      $handler->getFormatter()->allowInlineLineBreaks();
      $this->logger = new Logger('', [$handler]);
    }

    if ($this->isValidateOnly === null) {
      $this->isValidateOnly = false;
    }

    if ($this->isPartialFailure === null) {
      $this->isPartialFailure = false;
    }

    if ($this->reportSettings === null) {
      $this->reportSettings = (new ReportSettingsBuilder())->build();
    }

    if ($this->soapSettings === null) {
      $this->soapSettings = (new SoapSettingsBuilder())->build();
    }
  }

  /**
   * @see AdsBuilder::validate()
   */
  public function validate() {
    if ($this->developerToken === null || trim($this->developerToken) === '') {
      throw new InvalidArgumentException('A developer token must be set.');
    }

    if ($this->userAgent === null || trim($this->userAgent) === '') {
      $this->userAgent = self::DEFAULT_USER_AGENT;
    } else if (mb_check_encoding($this->userAgent, 'ASCII') === false) {
      throw new InvalidArgumentException(
          'User agent must contain only ASCII characters.');
    }

    if (filter_var($this->endpoint, FILTER_VALIDATE_URL) === false) {
      throw new InvalidArgumentException('Endpoint must be a valid URL.');
    }

    if ($this->oAuth2Credential === null) {
      throw new InvalidArgumentException(
          'Missing OAuth2 authentication credentials.');
    }
  }

  /**
   * Gets the logger.
   * @return LoggerInterface
   */
  public function getLogger() {
    return $this->logger;
  }

  /**
   * Gets the developer token.
   * @return string
   */
  public function getDeveloperToken() {
    return $this->developerToken;
  }

  /**
   * Gets the user agent.
   * @return string
   */
  public function getUserAgent() {
    return $this->userAgent;
  }

  /**
   * Gets the endpoint.
   * @return string
   */
  public function getEndpoint() {
    return $this->endpoint;
  }

  /**
   * Gets the OAuth2 credential.
   * @return FetchAuthTokenInterface
   */
  public function getOAuth2Credential() {
    return $this->oAuth2Credential;
  }

  /**
   * Gets the SOAP settings.
   * @return SoapSettings
   */
  public function getSoapSettings() {
    return $this->soapSettings;
  }

  /**
   * Gets the client customer ID.
   * @return string|null
   */
  public function getClientCustomerId() {
    return $this->clientCustomerId;
  }

  /**
   * If validate only is enabled.
   * @return boolean
   */
  public function isValidateOnly() {
    return $this->isValidateOnly;
  }

  /**
   * If partial failure is enabled.
   * @return boolean
   */
  public function isPartialFailure() {
    return $this->isPartialFailure;
  }

  /**
   * Gets the report settings.
   * @return ReportSettings
   */
  public function getReportSettings() {
    return $this->reportSettings;
  }
}

