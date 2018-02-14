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
 * Builds AdWords sessions.
 *
 * @see AdWordsSession
 */
final class AdWordsSessionBuilder implements AdsBuilder
{

    /**
     * @var string the default user agent included in our example library *.ini
     *     files
     */
    const DEFAULT_USER_AGENT = 'unknown';

    /**
     * @var string DEFAULT_ENDPOINT the default base endpoint for the AdWords
     *     API
     */
    const DEFAULT_ENDPOINT = 'https://adwords.google.com/';

    private static $DEFAULT_SOAP_LOGGER_CHANNEL = 'AW_SOAP';
    private static $DEFAULT_REPORT_DOWNLOADER_LOGGER_CHANNEL =
        'AW_REPORT_DOWNLOADER';
    private static $DEFAULT_BJ_UTIL_LOGGER_CHANNEL = 'AW_BATCH_JOBS_UTIL';

    private $adsLoggerFactory;
    private $configurationLoader;
    private $soapSettingsBuilder;
    private $connectionSettingsBuilder;
    private $reportSettingsBuilder;

    private $developerToken;
    private $userAgent;
    private $endpoint;
    private $oAuth2Credential;
    private $soapSettings;
    private $connectionSettings;
    private $clientCustomerId;
    private $isValidateOnly;
    private $isPartialFailure;
    private $isIncludeUtilitiesInUserAgent;
    private $reportSettings;
    private $adsHeaderFormatter;

    private $soapLogger;
    private $reportDownloaderLogger;
    private $batchJobsUtilLogger;

    public function __construct()
    {
        $this->adsLoggerFactory = new AdsLoggerFactory();
        $this->configurationLoader = new ConfigurationLoader();
        $this->soapSettingsBuilder = new SoapSettingsBuilder();
        $this->connectionSettingsBuilder = new ConnectionSettingsBuilder();
        $this->reportSettingsBuilder = new ReportSettingsBuilder();
    }

    /**
     * Reads configuration settings from the specified filepath. The filepath
     * is
     * optional, and if omitted, it will look for the default configuration
     * filename in the home directory of the user running PHP.
     *
     * @see AdsBuilder::DEFAULT_CONFIGURATION_FILENAME
     *
     * @param string $path the filepath
     * @return AdWordsSessionBuilder this builder populated from the
     *     configuration
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
        $this->developerToken =
            $configuration->getConfiguration('developerToken', 'ADWORDS');
        $this->userAgent =
            $configuration->getConfiguration('userAgent', 'ADWORDS');
        $this->endpoint =
            $configuration->getConfiguration('endpoint', 'ADWORDS');

        $this->connectionSettings =
            $this->connectionSettingsBuilder->from($configuration)->build();
        $this->soapSettings =
            $this->soapSettingsBuilder->from($configuration)->build();

        $this->clientCustomerId =
            $configuration->getConfiguration('clientCustomerId', 'ADWORDS');
        if ($configuration->getConfiguration('isPartialFailure', 'ADWORDS')
            !== null) {
            $this->isPartialFailure = boolval(
                $configuration->getConfiguration('isPartialFailure', 'ADWORDS')
            );
        }
        if ($configuration->getConfiguration(
            'includeUtilitiesInUserAgent',
            'ADWORDS'
        ) !== null) {
            $this->isIncludeUtilitiesInUserAgent =
                boolval(
                    $configuration->getConfiguration(
                        'includeUtilitiesInUserAgent',
                        'ADWORDS'
                    )
                );
        }

        $this->reportSettings =
            $this->reportSettingsBuilder->from($configuration)->build();

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
            $configuration->getConfiguration(
                'reportDownloaderLogLevel',
                'LOGGING'
            )
        );
        $this->batchJobsUtilLogger = $this->adsLoggerFactory->createLogger(
            self::$DEFAULT_BJ_UTIL_LOGGER_CHANNEL,
            $configuration->getConfiguration(
                'batchJobsUtilLogFilePath',
                'LOGGING'
            ),
            $configuration->getConfiguration('batchJobsUtilLogLevel', 'LOGGING')
        );

        return $this;
    }

    /**
     * Includes a developer token. This is required.
     *
     * @param string $developerToken
     * @return AdWordsSessionBuilder this builder
     */
    public function withDeveloperToken($developerToken)
    {
        $this->developerToken = $developerToken;

        return $this;
    }

    /**
     * Includes user agent. This is required.
     *
     * @param string $userAgent
     * @return AdWordsSessionBuilder this builder
     */
    public function withUserAgent($userAgent)
    {
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
     * @return AdWordsSessionBuilder this builder
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
     * @return AdWordsSessionBuilder this builder
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
     * @return AdWordsSessionBuilder this builder
     */
    public function withSoapSettings(SoapSettings $soapSettings)
    {
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
    public function withClientCustomerId($clientCustomerId)
    {
        $this->clientCustomerId = $clientCustomerId;

        return $this;
    }

    /**
     * Enables validate only. Disabled by default.
     *
     * @return AdWordsSessionBuilder this builder
     */
    public function enableValidateOnly()
    {
        $this->isValidateOnly = true;

        return $this;
    }

    /**
     * Enables partial failure. Disabled by default.
     *
     * @return AdWordsSessionBuilder this builder
     */
    public function enablePartialFailure()
    {
        $this->isPartialFailure = true;

        return $this;
    }

    /**
     * Disables include utilities in user agent option. Enabled by default.
     *
     * @return AdWordsSessionBuilder this builder
     */
    public function disableIncludeUtilitiesInUserAgent()
    {
        $this->isIncludeUtilitiesInUserAgent = false;

        return $this;
    }

    /**
     * Includes ads header formatter. This is optional.
     *
     * @param AdsHeaderFormatter|null $adsHeaderFormatter
     * @return AdWordsSessionBuilder this builder
     */
    public function withAdsHeaderFormatter(
        AdsHeaderFormatter $adsHeaderFormatter
    ) {
        $this->adsHeaderFormatter = $adsHeaderFormatter;

        return $this;
    }

    /**
     * Includes report settings. This is optional.
     *
     * @see ReportSettingsBuilder::defaultOptionals()
     * @param ReportSettings|null $reportSettings
     * @return AdWordsSessionBuilder this builder
     */
    public function withReportSettings(ReportSettings $reportSettings)
    {
        $this->reportSettings = $reportSettings;

        return $this;
    }

    /**
     * Includes a PSR-3 compliant logger for logging SOAP calls. This is
     * optional.
     *
     * @param LoggerInterface|null $soapLogger
     * @return AdWordsSessionBuilder this builder
     */
    public function withSoapLogger(LoggerInterface $soapLogger)
    {
        $this->soapLogger = $soapLogger;

        return $this;
    }

    /**
     * Includes a PSR-3 compliant logger for the report downloader utility to
     * log report download calls. This is optional.
     *
     * @param LoggerInterface|null $reportDownloaderLogger
     * @return AdWordsSessionBuilder this builder
     */
    public function withReportDownloaderLogger(
        LoggerInterface $reportDownloaderLogger
    ) {
        $this->reportDownloaderLogger = $reportDownloaderLogger;

        return $this;
    }

    /**
     * Includes a PSR-3 compliant logger for the batch jobs utility to log batch
     * job upload and download calls. This is optional.
     *
     * @param LoggerInterface|null $batchJobsUtilLogger
     * @return AdWordsSessionBuilder this builder
     */
    public function withBatchJobsUtilLogger(
        LoggerInterface $batchJobsUtilLogger
    ) {
        $this->batchJobsUtilLogger = $batchJobsUtilLogger;

        return $this;
    }

    /**
     * @see AdsBuilder::build()
     */
    public function build()
    {
        $this->defaultOptionals();
        $this->validate();

        return new AdWordsSession($this);
    }

    /**
     * @see AdsBuilder::defaultOptionals()
     */
    public function defaultOptionals()
    {
        if ($this->endpoint === null) {
            $this->endpoint = self::DEFAULT_ENDPOINT;
        }

        if ($this->isValidateOnly === null) {
            $this->isValidateOnly = false;
        }

        if ($this->isPartialFailure === null) {
            $this->isPartialFailure = false;
        }

        if ($this->isIncludeUtilitiesInUserAgent === null) {
            $this->isIncludeUtilitiesInUserAgent = true;
        }

        if ($this->adsHeaderFormatter === null) {
            $this->adsHeaderFormatter = new AdsHeaderFormatter();
        }

        if ($this->reportSettings === null) {
            $this->reportSettings = (new ReportSettingsBuilder())->build();
        }

        if ($this->connectionSettings === null) {
            $this->connectionSettings =
                (new ConnectionSettingsBuilder())->build();
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
            $this->reportDownloaderLogger =
                $this->adsLoggerFactory->createLogger(
                    self::$DEFAULT_REPORT_DOWNLOADER_LOGGER_CHANNEL
                );
        }

        if ($this->batchJobsUtilLogger === null) {
            $this->batchJobsUtilLogger = $this->adsLoggerFactory->createLogger(
                self::$DEFAULT_BJ_UTIL_LOGGER_CHANNEL
            );
        }
    }

    /**
     * @see AdsBuilder::validate()
     */
    public function validate()
    {
        if ($this->developerToken === null
            || trim($this->developerToken) === '') {
            throw new InvalidArgumentException(
                'A developer token must be set.'
            );
        }

        if ($this->userAgent === null || trim($this->userAgent) === '') {
            $this->userAgent = self::DEFAULT_USER_AGENT;
        } elseif (mb_check_encoding($this->userAgent, 'ASCII') === false) {
            throw new InvalidArgumentException(
                'User agent must contain only ASCII characters.'
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
     * Gets the developer token.
     *
     * @return string
     */
    public function getDeveloperToken()
    {
        return $this->developerToken;
    }

    /**
     * Gets the user agent.
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
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
     * Gets the client customer ID.
     *
     * @return string|null
     */
    public function getClientCustomerId()
    {
        return $this->clientCustomerId;
    }

    /**
     * If validate only is enabled.
     *
     * @return boolean
     */
    public function isValidateOnly()
    {
        return $this->isValidateOnly;
    }

    /**
     * If partial failure is enabled.
     *
     * @return boolean
     */
    public function isPartialFailure()
    {
        return $this->isPartialFailure;
    }

    /**
     * If include utilities in user agent option is enabled.
     *
     * @return boolean
     */
    public function isIncludeUtilitiesInUserAgent()
    {
        return $this->isIncludeUtilitiesInUserAgent;
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

    /**
     * Gets the report settings.
     *
     * @return ReportSettings
     */
    public function getReportSettings()
    {
        return $this->reportSettings;
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
     * Gets the batch jobs utility logger.
     *
     * @return LoggerInterface
     */
    public function getBatchJobsUtilLogger()
    {
        return $this->batchJobsUtilLogger;
    }
}
