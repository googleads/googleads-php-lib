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

namespace Google\AdsApi\AdManager;

use Google\AdsApi\Common\AdsHeaderFormatter;
use Google\AdsApi\Common\AdsSession;
use Psr\Log\LoggerInterface;

/**
 * A session for using the Ad Manager API.
 */
final class AdManagerSession implements AdsSession
{

    private $networkCode;
    private $applicationName;
    private $endpoint;
    private $oAuth2Credential;
    private $connectionSettings;
    private $soapSettings;
    private $soapLogger;
    private $reportDownloaderLogger;
    private $adsHeaderFormatter;

    /**
     * Creates a Ad Manager session from the specified builder.
     *
     * Do not use this constructor, instances should be created by using the
     * `DfpSessionBuilder` instead.
     *
     * @param AdManagerSessionBuilder $builder the builder to create an instance
     *     of this session from
     */
    public function __construct(AdManagerSessionBuilder $builder)
    {
        $this->networkCode = $builder->getNetworkCode();
        $this->applicationName = $builder->getApplicationName();
        $this->endpoint = $builder->getEndpoint();
        $this->oAuth2Credential = $builder->getOAuth2Credential();
        $this->connectionSettings = $builder->getConnectionSettings();
        $this->soapSettings = $builder->getSoapSettings();
        $this->adsHeaderFormatter = $builder->getAdsHeaderFormatter();
        $this->soapLogger = $builder->getSoapLogger();
        $this->reportDownloaderLogger = $builder->getReportDownloaderLogger();
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
     * Gets the ads header formatter.
     *
     * @return AdsHeaderFormatter
     */
    public function getAdsHeaderFormatter()
    {
        return $this->adsHeaderFormatter;
    }
}
