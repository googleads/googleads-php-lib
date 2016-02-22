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
 * Settings for how requests should be made to the ads SOAP APIs. These settings
 * are passed to the native PHP SOAP client.
 * @see http://php.net/manual/en/soapclient.soapclient.php
 */
class SoapSettings {

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

  /**
   * Creates a SOAP settings from the specified builder.
   *
   * <p>Do not use this constructor, instances should be created by using the
   * `SoapSettingsBuilder` instead.
   *
   * @param SoapSettingsBuilder $builder the builder to create an instance of
   *     this SOAP settings from
   */
  public function __construct(SoapSettingsBuilder $builder) {
    $this->compressionLevel = $builder->getCompressionLevel();
    $this->wsdlCacheType = $builder->getWsdlCacheType();
    $this->proxyHost = $builder->getProxyHost();
    $this->proxyPort = $builder->getProxyPort();
    $this->proxyUser = $builder->getProxyUser();
    $this->proxyPassword = $builder->getProxyPassword();
    $this->sslVerifyPeer = $builder->getSslVerifyPeer();
    $this->sslVerifyHost = $builder->getSslVerifyHost();
    $this->sslCaPath = $builder->getSslCaPath();
    $this->sslCaFile = $builder->getSslCaFile();
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

