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

/**
 * Builder for SOAP settings.
 * @see SoapSettings
 */
class SoapSettingsBuilder implements AdsBuilder {

  private $configurationLoader;

  private $compressionLevel;
  private $wsdlCacheType;
  private $proxyHost;
  private $proxyPort;
  private $proxyUser;
  private $proxyPassword;
  private $sslVerifyPeer;
  private $sslVerifyHost;
  private $sslCaPath;
  private $sslCaFile;

  public function __construct() {
    $this->configurationLoader = new ConfigurationLoader();
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
    $this->compressionLevel =
        intval($configuration->getConfiguration('COMPRESSION_LEVEL', 'SOAP'));
    $this->wsdlCacheType =
        intval($configuration->getConfiguration('WSDL_CACHE', 'SOAP'));
    $this->proxyHost = $configuration->getConfiguration('HOST', 'PROXY');
    $this->proxyPort =
        intval($configuration->getConfiguration('PORT', 'PROXY'));
    $this->proxyUser = $configuration->getConfiguration('USER', 'PROXY');
    $this->proxyPassword =
        $configuration->getConfiguration('PASSWORD', 'PROXY');
    $this->sslVerifyPeer =
        boolval($configuration->getConfiguration('VERIFY_PEER', 'SSL'));
    $this->sslVerifyHost =
        boolval($configuration->getConfiguration('VERIFY_HOST', 'SSL'));
    $this->sslCaPath = $configuration->getConfiguration('CA_PATH', 'SSL');
    $this->sslCaFile = $configuration->getConfiguration('CA_FILE', 'SSL');
    return $this;
  }

  /**
   * Includes gzip compression level.
   *
   * <p>The level of gzip compression to use, from 1 to 9. The higher the level
   * the greater the compression and time needed to perform the compression.
   *
   * @param int $compressionLevel the gzip compression level
   * @return SoapSettingsBuilder this builder
   */
  public function withCompressionLevel($compressionLevel) {
    $this->compressionLevel = $compressionLevel;
    return $this;
  }

  /**
   * Includes WSDL cache type. Additional WSDL caching settings can be set in
   * the php.ini.
   *
   * @see http://php.net/manual/en/soap.configuration.php
   * @param int $wsdlCacheType
   * @return SoapSettingsBuilder this builder
   */
  public function withWsdlCacheType($wsdlCacheType) {
    $this->wsdlCacheType = $wsdlCacheType;
    return $this;
  }

  /**
   * Includes proxy host.
   * @param string $proxyHost
   * @return SoapSettingsBuilder this builder
   */
  public function withProxyHost($proxyHost) {
    $this->proxyHost = $proxyHost;
    return $this;
  }

  /**
   * Includes proxy port.
   * @param int $proxyPort
   * @return SoapSettingsBuilder this builder
   */
  public function withProxyPort($proxyPort) {
    $this->proxyPort = $proxyPort;
    return $this;
  }

  /**
   * Includes proxy user.
   * @param string $proxyUser
   * @return SoapSettingsBuilder this builder
   */
  public function withProxyUser($proxyUser) {
    $this->proxyUser = $proxyUser;
    return $this;
  }

  /**
   * Includes proxy password.
   * @param string $proxyPassword
   * @return SoapSettingsBuilder this builder
   */
  public function withProxyPassword($proxyPassword) {
    $this->proxyPassword = $proxyPassword;
    return $this;
  }

  /**
   * Enables SSL peer verification. Disabled by default.
   * @return SoapSettingsBuilder this builder
   */
  public function enableSslVerifyPeer() {
    $this->sslVerifyPeer = true;
    return $this;
  }

  /**
   * Enables SSL host verification. Disabled by default.
   * @return SoapSettingsBuilder this builder
   */
  public function enableSslVerifyHost() {
    $this->sslVerifyHost = true;
    return $this;
  }

  /**
   * Includes path to SSL CA file.
   * @param string $sslCaPath
   * @return SoapSettingsBuilder this builder
   */
  public function withSslCaPath($sslCaPath) {
    $this->sslCaPath = $sslCaPath;
    return $this;
  }

  /**
   * Includes name of SSL CA file.
   * @param string $sslCaFile
   * @return SoapSettingsBuilder this builder
   */
  public function withSslCaFile($sslCaFile) {
    $this->sslCaFile = $sslCaFile;
    return $this;
  }

  /**
   * @see AdsBuilder::build()
   */
  public function build() {
    $this->defaultOptionals();
    $this->validate();
    return new SoapSettings($this);
  }

  /**
   * @see AdsBuilder::defaultOptionals()
   */
  public function defaultOptionals() {
    // All fields should and already default to null.
  }

  /**
   * @see AdsBuilder::validate()
   */
  public function validate() {
    if ($this->proxyHost !== null
        && filter_var($this->proxyHost, FILTER_VALIDATE_URL) === false) {
      throw new ValidationException('proxy host', $this->proxyHost,
          'Proxy host must be a valid URL.');
    }
  }

  /**
   * Gets the gzip compression level.
   * @return int
   */
  public function getCompressionLevel() {
    return $this->compressionLevel;
  }

  /**
   * Gets the type of WSDL caching in use.
   * @return int
   */
  public function getWsdlCacheType() {
    return $this->wsdlCacheType;
  }

  /**
   * Gets the proxy host.
   * @return string
   */
  public function getProxyHost() {
    return $this->proxyHost;
  }

  /**
   * Gets the proxy port.
   * @return int
   */
  public function getProxyPort() {
    return $this->proxyPort;
  }

  /**
   * Gets the proxy user.
   * @return string
   */
  public function getProxyUser() {
    return $this->proxyUser;
  }

  /**
   * Gets the proxy password.
   * @return string
   */
  public function getProxyPassword() {
    return $this->proxyPassword;
  }

  /**
   * Gets whether to verify SSL peer or not.
   * @return boolean
   */
  public function getSslVerifyPeer() {
    return $this->sslVerifyPeer;
  }

  /**
   * Gets whether to verify SSL host or not.
   * @return boolean
   */
  public function getSslVerifyHost() {
    return $this->sslVerifyHost;
  }

  /**
   * Gets the SSL CA path.
   * @return string
   */
  public function getSslCaPath() {
    return $this->sslCaPath;
  }

  /**
   * Gets the SSL CA file.
   * @return string
   */
  public function getSslCaFile() {
    return $this->sslCaFile;
  }
}

