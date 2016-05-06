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
 * Builder for a DFP session.
 * @see DfpSession
 */
class DfpSessionBuilder implements AdsBuilder {

  /**
   * @var string the default application name included in our example library
   *     *.ini files
   */
  const DEFAULT_APPLICATION_NAME = 'INSERT_APPLICATION_NAME_HERE';

  /**
   * @var string DEFAULT_ENDPOINT the default base endpoint for the DFP API
   */
  const DEFAULT_ENDPOINT = 'https://ads.google.com/';

  private $configurationLoader;
  private $soapSettingsBuilder;

  private $logger;
  private $networkCode;
  private $applicationName;
  private $endpoint;
  private $oAuth2Credential;
  private $soapSettings;

  public function __construct() {
    $this->configurationLoader = new ConfigurationLoader();
    $this->soapSettingsBuilder = new SoapSettingsBuilder();
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
    $this->networkCode = $configuration->getConfiguration('networkCode', 'DFP');
    $this->applicationName =
        $configuration->getConfiguration('applicationName', 'DFP');
    $this->endpoint = $configuration->getConfiguration('endpoint', 'DFP');
    $this->soapSettings =
        $this->soapSettingsBuilder->from($configuration)->build();
    return $this;
  }

  /**
   * Includes a PSR-3 compliant logger. This is optional and will default to a
   * Monolog logger that logs to STDERR.
   *
   * @param LoggerInterface|null $logger the logger
   * @return DfpSessionBuilder this builder
   */
  public function withLogger(LoggerInterface $logger) {
    $this->logger = $logger;
    return $this;
  }

  /**
   * Includes network code. This is required.
   *
   * @param string $networkCode
   * @return DfpSessionBuilder this builder
   */
  public function withNetworkCode($networkCode) {
    $this->networkCode = $networkCode;
    return $this;
  }

  /**
   * Includes application name. This is required.
   *
   * @param string $applicationName
   * @return DfpSessionBuilder this builder
   */
  public function withApplicationName($applicationName) {
    $this->applicationName = $applicationName;
    return $this;
  }

  /**
   * Includes the DFP API server's base endpoint. This is optional.
   *
   * @see self::DEFAULT_ENDPOINT
   * @param string|null $endpoint
   * @return DfpSessionBuilder this builder
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
   * @return DfpSessionBuilder this builder
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
   * @return DfpSessionBuilder this builder
   */
  public function withSoapSettings(SoapSettings $soapSettings) {
    $this->soapSettings = $soapSettings;
    return $this;
  }


  /**
   * @see AdsBuilder::build()
   */
  public function build() {
    $this->defaultOptionals();
    $this->validate();
    return new DfpSession($this);
  }

  /**
   * @see AdsBuilder::defaultOptionals()
   */
  public function defaultOptionals() {
    if ($this->endpoint === null) {
      $this->endpoint = self::DEFAULT_ENDPOINT;
    }

    if ($this->logger === null) {
      $handler = new StreamHandler(STDERR, Logger::INFO);
      $handler->getFormatter()->ignoreEmptyContextAndExtra();
      $handler->getFormatter()->allowInlineLineBreaks();
      $this->logger = new Logger('', [$handler]);
    }

    if ($this->soapSettings === null) {
      $this->soapSettings = (new SoapSettingsBuilder())->build();
    }
  }

  /**
   * @see AdsBuilder::validate()
   */
  public function validate() {
    if ($this->networkCode === null || trim($this->networkCode) === '') {
      throw new InvalidArgumentException('Network code is required.');
    }

    if ($this->applicationName === null
        || trim($this->applicationName) === ''
        || strpos($this->applicationName,
            self::DEFAULT_APPLICATION_NAME) !== false) {
      throw new InvalidArgumentException(
          sprintf(
              'Application name is required and cannot be the default [%s].',
              self::DEFAULT_APPLICATION_NAME
          ));
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
   * Gets the network code.
   * @return string
   */
  public function getNetworkCode() {
    return $this->networkCode;
  }

  /**
   * Gets the application name.
   * @return string
   */
  public function getApplicationName() {
    return $this->applicationName;
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

}

