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

use Google\AdsApi\Common\AdsSession;

/**
 * A session for using the DFP API.
 */
class DfpSession implements AdsSession {

  private $logger;
  private $networkCode;
  private $applicationName;
  private $endpoint;
  private $oAuth2Credential;
  private $soapSettings;

  /**
   * Creates a DFP session from the specified builder.
   *
   * <p>Do not use this constructor, instances should be created by using the
   * `DfpSessionBuilder` instead.
   *
   * @param DfpSessionBuilder $builder the builder to create an instance of this
   *     session from
   */
  public function __construct(DfpSessionBuilder $builder) {
    $this->logger = $builder->getLogger();
    $this->networkCode = $builder->getNetworkCode();
    $this->applicationName = $builder->getApplicationName();
    $this->endpoint = $builder->getEndpoint();
    $this->oAuth2Credential = $builder->getOAuth2Credential();
    $this->soapSettings = $builder->getSoapSettings();
  }

  /**
   * @see AdsSession::getLogger()
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
   * @see AdsSession::getEndpoint()
   */
  public function getEndpoint() {
    return $this->endpoint;
  }

  /**
   * @see AdsSession::getOAuth2Credential()
   */
  public function getOAuth2Credential() {
    return $this->oAuth2Credential;
  }

  /**
   * @see AdsSession::getSoapSettings()
   */
  public function getSoapSettings() {
    return $this->soapSettings;
  }

}

