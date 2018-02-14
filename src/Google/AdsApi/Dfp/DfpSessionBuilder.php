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
use Google\AdsApi\Common\AdsHeaderFormatter;
use Google\AdsApi\Common\AdsLoggerFactory;
use Google\AdsApi\Common\Configuration;
use Google\AdsApi\Common\ConfigurationLoader;
use Google\AdsApi\Common\ConnectionSettings;
use Google\AdsApi\Common\ConnectionSettingsBuilder;
use Google\AdsApi\Common\SoapSettings;
use Google\AdsApi\Common\SoapSettingsBuilder;
use Google\Auth\FetchAuthTokenInterface;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;

/**
 * Builds DFP sessions.
 *
 * @see DfpSession
 */
final class DfpSessionBuilder implements AdsBuilder
{

    /**
     * @var string the default application name included in our example library
     *     *.ini files
     */
    const DEFAULT_APPLICATION_NAME = 'INSERT_APPLICATION_NAME_HERE';

    /**
     * @var string DEFAULT_ENDPOINT the default base endpoint for the DFP API
     */
    const DEFAULT_ENDPOINT = 'https://ads.google.com/';

    private static $DEFAULT_SOAP_LOGGER_CHANNEL = 'DFP_SOAP';
    private static $DEFAULT_REPORT_DOWNLOADER_LOGGER_CHANNEL = 'DFP_REPORT_DOWNLOADER';

    private $adsLoggerFactory;
    private $configurationLoader;
    private $connectionSettingsBuilder;
    private $soapSettingsBuilder;

    private $networkCode;
    private $applicationName;
    private $endpoint;
    private $oAuth2Credential;
    private $connectionSettings;
    private $soapSettings;

    private $soapLogger;
    private $reportDownloaderLogger;
    private $adsHeaderFormatter;

    public function __construct()
    {
        $this->adsLoggerFactory = new AdsLoggerFactory();
        $this->configurationLoader = new ConfigurationLoader();
        $this->connectionSettingsBuilder = new ConnectionSettingsBuilder();
        $this->soapSettingsBuilder = new SoapSettingsBuilder();
    }

    /**
     * Reads configuration settings from the specified filepath. The filepath is
     * optional, and if omitted, it will look for the default configuration
     * filename in the home directory of the user running PHP.
     *
     * @see AdsBuilder::DEFAULT_CONFIGURATION_FILENAME
     *
     * @param string $path the filepath
     * @return DfpSessionBuilder this builder populated from the configuration
     * @throws InvalidArgumentException if the configuration file could not be
     *     found
     */
    public function fromFile($path = null)
    {
        if ($path === null) {
            $path = self::DEFAULT_CONFIGURATION_FILENAME;
        }

        return $this->from($this->configurationLoader->fromFile($path));
    }

    /**
     * @see AdsBuilder::from()
     */
    public function from(Configuration $configuration)
    {
        $this->networkCode = $configuration->getConfiguration('networkCode', 'DFP');
        $this->applicationName = $configuration->getConfiguration('applicationName', 'DFP');
        $this->endpoint = $configuration->getConfiguration('endpoint', 'DFP');

        $this->connectionSettings = $this->connectionSettingsBuilder->from($configuration)->build();
        $this->soapSettings = $this->soapSettingsBuilder->from($configuration)->build();

        $this->soapLogger = $this->adsLoggerFactory->createLogger(
            self::$DEFAULT_SOAP_LOGGER_CHANNEL,
            $configuration->getConfiguration('soapLogFilePath', 'LOGGING'),
            $configuration->getConfiguration('soapLogLevel', 'LOGGING')
        );
        $this->reportDownloaderLogger = $this->adsLoggerFactory->createLogger(
            self::$DEFAULT_REPORT_DOWNLOADER_LOGGER_CHANNEL,
            $configuration->getConfiguration(
                'reportDownloaderLogFilePath',
                'LOGGING'
            ),
            $configuration->getConfiguration('reportDownloaderLogLevel', 'LOGGING')
        );

        return $this;
    }

    /**
     * Includes network code. This is required.
     *
     * @param string $networkCode
     * @return DfpSessionBuilder this builder
     */
    public function withNetworkCode($networkCode)
    {
        $this->networkCode = $networkCode;

        return $this;
    }

    /**
     * Includes application name. This is required.
     *
     * @param string $applicationName
     * @return DfpSessionBuilder this builder
     */
    public function withApplicationName($applicationName)
    {
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
    public function withEndpoint($endpoint)
    {
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
        FetchAuthTokenInterface $oAuth2Credential
    ) {
        $this->oAuth2Credential = $oAuth2Credential;

        return $this;
    }

    /**
     * Includes connection settings. This is optional.
     *
     * @param ConnectionSettings|null $connectionSettings
     * @return DfpSessionBuilder this builder
     */
    public function withConnectionSettings(
        ConnectionSettings $connectionSettings
    ) {
        $this->connectionSettings = $connectionSettings;

        return $this;
    }

    /**
     * Includes SOAP settings. This is optional.
     *
     * @see SoapSettingsBuilder::defaultOptionals()
     * @param SoapSettings|null $soapSettings
     * @return DfpSessionBuilder this builder
     */
    public function withSoapSettings(SoapSettings $soapSettings)
    {
        $this->soapSettings = $soapSettings;

        return $this;
    }

    /**
     * Includes a PSR-3 compliant logger for logging SOAP calls. This is optional.
     *
     * @param LoggerInterface|null $soapLogger
     * @return DfpSessionBuilder this builder
     */
    public function withSoapLogger(LoggerInterface $soapLogger)
    {
        $this->soapLogger = $soapLogger;

        return $this;
    }

    /**
     * Includes a PSR-3 compliant logger for the report downloader utility to log
     * report download calls. This is optional.
     *
     * @param LoggerInterface|null $reportDownloaderLogger
     * @return DfpSessionBuilder this builder
     */
    public function withReportDownloaderLogger(
        LoggerInterface $reportDownloaderLogger
    ) {
        $this->reportDownloaderLogger = $reportDownloaderLogger;

        return $this;
    }

    /**
     * Includes ads header formatter. This is optional.
     *
     * @param AdsHeaderFormatter|null $adsHeaderFormatter
     * @return DfpSessionBuilder this builder
     */
    public function withAdsHeaderFormatter(
        AdsHeaderFormatter $adsHeaderFormatter
    ) {
        $this->adsHeaderFormatter = $adsHeaderFormatter;

        return $this;
    }

    /**
     * @see AdsBuilder::build()
     */
    public function build()
    {
        $this->defaultOptionals();
        $this->validate();

        return new DfpSession($this);
    }

    /**
     * @see AdsBuilder::defaultOptionals()
     */
    public function defaultOptionals()
    {
        if ($this->endpoint === null) {
            $this->endpoint = self::DEFAULT_ENDPOINT;
        }

        if ($this->connectionSettings === null) {
            $this->connectionSettings = (new ConnectionSettingsBuilder())->build();
        }

        if ($this->soapSettings === null) {
            $this->soapSettings = (new SoapSettingsBuilder())->build();
        }

        if ($this->soapLogger === null) {
            $this->soapLogger = $this->adsLoggerFactory->createLogger(
                self::$DEFAULT_SOAP_LOGGER_CHANNEL
            );
        }

        if ($this->reportDownloaderLogger === null) {
            $this->reportDownloaderLogger = $this->adsLoggerFactory->createLogger(
                self::$DEFAULT_REPORT_DOWNLOADER_LOGGER_CHANNEL
            );
        }

        if ($this->adsHeaderFormatter === null) {
            $this->adsHeaderFormatter = new AdsHeaderFormatter();
        }
    }

    /**
     * @see AdsBuilder::validate()
     */
    public function validate()
    {
        if ($this->networkCode === null || trim($this->networkCode) === '') {
            throw new InvalidArgumentException('Network code is required.');
        }

        if ($this->applicationName === null
            || trim($this->applicationName) === ''
            || strpos(
                $this->applicationName,
                self::DEFAULT_APPLICATION_NAME
            ) !== false) {
            throw new InvalidArgumentException(
                sprintf(
                    'Application name is required and cannot be the default [%s].',
                    self::DEFAULT_APPLICATION_NAME
                )
            );
        }

        if (filter_var($this->endpoint, FILTER_VALIDATE_URL) === false) {
            throw new InvalidArgumentException('Endpoint must be a valid URL.');
        }

        if ($this->oAuth2Credential === null) {
            throw new InvalidArgumentException(
                'Missing OAuth2 authentication credentials.'
            );
        }
    }

    /**
     * Gets the network code.
     *
     * @return string
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * Gets the application name.
     *
     * @return string
     */
    public function getApplicationName()
    {
        return $this->applicationName;
    }

    /**
     * Gets the endpoint.
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Gets the OAuth2 credential.
     *
     * @return FetchAuthTokenInterface
     */
    public function getOAuth2Credential()
    {
        return $this->oAuth2Credential;
    }

    /**
     * Gets the connection settings.
     *
     * @return ConnectionSettings
     */
    public function getConnectionSettings()
    {
        return $this->connectionSettings;
    }

    /**
     * Gets the SOAP settings.
     *
     * @return SoapSettings
     */
    public function getSoapSettings()
    {
        return $this->soapSettings;
    }

    /**
     * Gets the SOAP logger.
     *
     * @return LoggerInterface
     */
    public function getSoapLogger()
    {
        return $this->soapLogger;
    }

    /**
     * Gets the report downloader logger.
     *
     * @return LoggerInterface
     */
    public function getReportDownloaderLogger()
    {
        return $this->reportDownloaderLogger;
    }

    /**
     * Gets ads header formatter.
     *
     * @return AdsHeaderFormatter
     */
    public function getAdsHeaderFormatter()
    {
        return $this->adsHeaderFormatter;
    }
}
