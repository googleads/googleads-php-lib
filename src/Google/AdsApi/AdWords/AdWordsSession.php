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

use Google\AdsApi\Common\AdsHeaderFormatter;
use Google\AdsApi\Common\AdsSession;
use Psr\Log\LoggerInterface;

/**
 * A session for using the AdWords API.
 */
final class AdWordsSession implements AdsSession
{

    private $developerToken;
    private $userAgent;
    private $endpoint;
    private $oAuth2Credential;
    private $connectionSettings;
    private $soapSettings;
    private $clientCustomerId;
    private $isValidateOnly;
    private $isPartialFailure;
    private $isIncludeUtilitiesInUserAgent;
    private $reportSettings;
    private $soapLogger;
    private $reportDownloaderLogger;
    private $batchJobsUtilLogger;
    private $adsHeaderFormatter;

    /**
     * Creates an AdWords session from the specified builder.
     *
     * Do not use this constructor, instances should be created by using the
     * `AdWordsSessionBuilder` instead.
     *
     * @param AdWordsSessionBuilder $builder the builder to create an instance
     *     of this session from
     */
    public function __construct(AdWordsSessionBuilder $builder)
    {
        $this->developerToken = $builder->getDeveloperToken();
        $this->userAgent = $builder->getUserAgent();
        $this->endpoint = $builder->getEndpoint();
        $this->oAuth2Credential = $builder->getOAuth2Credential();
        $this->connectionSettings = $builder->getConnectionSettings();
        $this->soapSettings = $builder->getSoapSettings();
        $this->clientCustomerId = $builder->getClientCustomerId();
        $this->isValidateOnly = $builder->isValidateOnly();
        $this->isPartialFailure = $builder->isPartialFailure();
        $this->isIncludeUtilitiesInUserAgent =
            $builder->isIncludeUtilitiesInUserAgent();
        $this->adsHeaderFormatter = $builder->getAdsHeaderFormatter();
        $this->reportSettings = $builder->getReportSettings();
        $this->soapLogger = $builder->getSoapLogger();
        $this->reportDownloaderLogger = $builder->getReportDownloaderLogger();
        $this->batchJobsUtilLogger = $builder->getBatchJobsUtilLogger();
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
     * @see AdsSession::getEndpoint()
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @see AdsSession::getOAuth2Credential()
     */
    public function getOAuth2Credential()
    {
        return $this->oAuth2Credential;
    }

    /**
     * @see AdsSession::getConnectionSettings()
     */
    public function getConnectionSettings()
    {
        return $this->connectionSettings;
    }

    /**
     * @see AdsSession::getSoapSettings()
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
     * Whether the session should only validate the request.
     *
     * @return boolean
     */
    public function isValidateOnly()
    {
        return $this->isValidateOnly;
    }

    /**
     * Sets whether this session should only validate the request.
     *
     * @param boolean $isValidateOnly
     */
    public function setValidateOnly($isValidateOnly)
    {
        $this->isValidateOnly = $isValidateOnly;
    }

    /**
     * Whether the session should allow partial failure.
     *
     * @return boolean
     */
    public function isPartialFailure()
    {
        return $this->isPartialFailure;
    }

    /**
     * Sets whether this session should allow partial failure.
     *
     * @param boolean $isPartialFailure
     */
    public function setPartialFailure($isPartialFailure)
    {
        $this->isPartialFailure = $isPartialFailure;
    }

    /**
     * Whether the session should include utilities usages into user agents.
     *
     * @return boolean
     */
    public function isIncludeUtilitiesInUserAgent()
    {
        return $this->isIncludeUtilitiesInUserAgent;
    }

    /**
     * Sets whether this session should include utilities usages into user
     * agents.
     *
     * @param boolean $isIncludeUtilitiesInUserAgent
     */
    public function setIncludeUtilitiesInUserAgent(
        $isIncludeUtilitiesInUserAgent
    ) {
        $this->isIncludeUtilitiesInUserAgent = $isIncludeUtilitiesInUserAgent;
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
     * @see AdsSession::getSoapLogger()
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

    /**
     * Gets the ads header formatter.
     *
     * @return AdsHeaderFormatter
     */
    public function getAdsHeaderFormatter()
    {
        return $this->adsHeaderFormatter;
    }
}
