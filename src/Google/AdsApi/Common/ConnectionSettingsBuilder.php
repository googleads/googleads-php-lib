<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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

/**
 * Builds connection settings.
 *
 * @see ConnectionSettings
 */
final class ConnectionSettingsBuilder implements AdsBuilder
{

    private $configurationLoader;

    private $proxyUrl;
    private $isReportingGzipEnabled;

    public function __construct()
    {
        $this->configurationLoader = new ConfigurationLoader();
    }

    /**
     * @see AdsBuilder::from()
     */
    public function from(Configuration $configuration)
    {
        $this->proxyUrl = $configuration->getConfiguration('proxy', 'CONNECTION');
        $isReportingGzipEnabled =
            $configuration->getConfiguration('enableReportingGzip', 'CONNECTION');
        if ($isReportingGzipEnabled !== null) {
            $this->isReportingGzipEnabled = boolval($isReportingGzipEnabled);
        }

        return $this;
    }

    /**
     * Includes proxy URL. This is optional and defaults to `null`.
     *
     * @param string|null $proxyUrl
     * @return ConnectionSettingsBuilder this builder
     */
    public function withProxyUrl($proxyUrl)
    {
        $this->proxyUrl = $proxyUrl;

        return $this;
    }

    /**
     * Whether gzip compression should be enabled for all reporting requests.
     * This is optional and defaults to false.
     *
     * @param boolean|null $isReportingGzipEnabled
     * @return ConnectionSettingsBuilder this builder
     */
    public function enableReportingGzip($isReportingGzipEnabled)
    {
        $this->isReportingGzipEnabled = $isReportingGzipEnabled;

        return $this;
    }

    /**
     * @see AdsBuilder::build()
     */
    public function build()
    {
        $this->defaultOptionals();
        $this->validate();

        return new ConnectionSettings($this);
    }

    /**
     * @see AdsBuilder::defaultOptionals()
     */
    public function defaultOptionals()
    {
        if ($this->isReportingGzipEnabled === null) {
            $this->isReportingGzipEnabled = false;
        }
    }

    /**
     * @see AdsBuilder::validate()
     */
    public function validate()
    {
        if (!empty($this->proxyUrl)) {
            preg_match(
                ConnectionSettings::PROXY_REGEX_PATTERN,
                $this->proxyUrl,
                $matches
            );
            if (empty($matches)) {
                throw new \InvalidArgumentException(
                    'Your specified proxy format is invalid.'
                );
            }
        }
    }

    /**
     * Gets the proxy URL.
     *
     * @return string|null
     */
    public function getProxyUrl()
    {
        return $this->proxyUrl;
    }

    /**
     * Whether gzip compression is enabled for reporting requests.
     *
     * @return boolean|null
     */
    public function isReportingGzipEnabled()
    {
        return $this->isReportingGzipEnabled;
    }
}
