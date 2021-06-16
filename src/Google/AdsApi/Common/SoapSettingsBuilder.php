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

use InvalidArgumentException;

/**
 * Builds SOAP settings.
 *
 * @see SoapSettings
 */
final class SoapSettingsBuilder implements AdsBuilder
{

    private $configurationLoader;

    private $compressionLevel;
    private $wsdlCacheType;
    private $sslVerify;
    private $sslCaFile;

    public function __construct()
    {
        $this->configurationLoader = new ConfigurationLoader();
    }

    /**
     * @see AdsBuilder::from()
     */
    public function from(Configuration $configuration)
    {
        $compressionLevel = $configuration->getConfiguration('compressionLevel', 'SOAP');
        if ($compressionLevel !== null) {
            $this->compressionLevel = intval($compressionLevel);
        }

        $wsdlCacheType = $configuration->getConfiguration('wsdlCache', 'SOAP');
        if ($wsdlCacheType !== null) {
            $this->wsdlCacheType = intval($wsdlCacheType);
        }

        return $this;
    }

    /**
     * Includes gzip compression level.
     *
     * The level of gzip compression to use, from 1 to 9. The higher the level
     * the greater the compression and time needed to perform the compression.
     * This is optional and defaults to `null`, in which case PHP will use its
     * default value.
     *
     * @see http://php.net/manual/en/soapclient.soapclient.php
     * @param int|null $compressionLevel
     * @return SoapSettingsBuilder this builder
     */
    public function withCompressionLevel($compressionLevel)
    {
        $this->compressionLevel = $compressionLevel;

        return $this;
    }

    /**
     * Includes WSDL cache type. Additional WSDL caching settings can be set in
     * the php.ini. This is optional and defaults to `null`, in which case PHP
     * will use its default value.
     *
     * @see http://php.net/manual/en/soap.configuration.php
     * @param int|null $wsdlCacheType
     * @return SoapSettingsBuilder this builder
     */
    public function withWsdlCacheType($wsdlCacheType)
    {
        $this->wsdlCacheType = $wsdlCacheType;

        return $this;
    }

    /**
     * Disables SSL verification. Enabled by default.
     *
     * This is not recommended.
     *
     * @return SoapSettingsBuilder this builder
     */
    public function disableSslVerify()
    {
        $this->sslVerify = false;

        return $this;
    }

    /**
     * Includes the path to a CA bundle file to use for SSL verification. This
     * field is only meaningful if SSL verification is not disabled.
     *
     * This is optional and defaults to `null`, in which case this library will
     * try to automatically find your system CA bundle file. Use this function
     * only if you want to use a custom CA bundle file or you're getting SSL
     * verification errors because this library cannot find a CA bundle file for
     * you on your system.
     *
     * @param string|null $sslCaFile
     * @return SoapSettingsBuilder this builder
     */
    public function withSslCaFile($sslCaFile)
    {
        $this->sslCaFile = $sslCaFile;

        return $this;
    }

    /**
     * @see AdsBuilder::build()
     */
    public function build()
    {
        $this->defaultOptionals();
        $this->validate();

        return new SoapSettings($this);
    }

    /**
     * @see AdsBuilder::defaultOptionals()
     */
    public function defaultOptionals()
    {
        if ($this->sslVerify === null) {
            $this->sslVerify = true;
        }
    }

    /**
     * @see AdsBuilder::validate()
     */
    public function validate()
    {
        if ($this->sslCaFile !== null) {
            if (!file_exists($this->sslCaFile)) {
                throw new InvalidArgumentException(
                    sprintf(
                        'Could not find SSL CA bundle file: %s',
                        $this->sslCaFile
                    )
                );
            }
        }
    }

    /**
     * Gets the gzip compression level.
     *
     * @return int|null
     */
    public function getCompressionLevel()
    {
        return $this->compressionLevel;
    }

    /**
     * Gets the type of WSDL caching in use.
     *
     * @return int|null
     */
    public function getWsdlCacheType()
    {
        return $this->wsdlCacheType;
    }

    /**
     * Gets whether SSL verification is enabled.
     *
     * @return boolean
     */
    public function getSslVerify()
    {
        return $this->sslVerify;
    }

    /**
     * Gets the SSL CA file.
     *
     * @return string|null
     */
    public function getSslCaFile()
    {
        return $this->sslCaFile;
    }
}
