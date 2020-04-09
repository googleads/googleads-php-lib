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
 * Settings for making SOAP and non-SOAP connections to the API servers.
 */
final class ConnectionSettings
{

    // The regular expression for matching proxy URLs in the forms of
    // "protocol://user:pass@host:port", where the protocol, user and pass are
    // optional.
    const PROXY_REGEX_PATTERN = '|(?<protocol>\S*://)?(?:(?<user>[^\s:]*)(?::(?<pass>\S*))?@)?(?<host>[^\s:]+)(?::(?<port>\d*))?|';

    private $proxyUrl;
    private $isReportingGzipEnabled;

    /**
     * Creates a connection settings instance from the specified builder.
     *
     * Do not use this constructor, instances should be created by using the
     * `ConnectionSettingsBuilder` instead.
     *
     * @param ConnectionSettingsBuilder $builder the builder to create an
     *     instance of this connection settings from
     */
    public function __construct(ConnectionSettingsBuilder $builder)
    {
        $this->proxyUrl = $builder->getProxyUrl();
        $this->isReportingGzipEnabled = $builder->isReportingGzipEnabled();
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

    /**
     * Gets the proxy information as parts (username, password, host, port).
     *
     * @return array the proxy information as an array
     */
    public function getProxyParts()
    {
        if (empty($this->proxyUrl)) {
            return ['', '', '', ''];
        }

        preg_match(self::PROXY_REGEX_PATTERN, $this->proxyUrl, $matches);

        $proxyParts = [];
        $proxyParts[] = $matches['user'];
        $proxyParts[] = $matches['pass'];
        // SOAP client assumes that the protocol is attached to the host.
        $proxyParts[] = $matches['protocol'] . $matches['host'];
        $proxyParts[] = (array_key_exists('port', $matches)) ? $matches['port'] : '';

        return $proxyParts;
    }
}
