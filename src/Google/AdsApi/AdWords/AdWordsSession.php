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

use Google\AdsApi\Common\AdsSession;

/**
 * A session for using the AdWords API.
 */
class AdWordsSession implements AdsSession {

  private $logger;
  private $developerToken;
  private $userAgent;
  private $endpoint;
  private $oAuth2Credential;
  private $soapSettings;
  private $clientCustomerId;
  private $expressBusinessId;
  private $expressPlusPageId;
  private $isValidateOnly;
  private $isPartialFailure;
  private $reportSettings;

  /**
   * Creates an AdWords session from the specified builder.
   *
   * <p>Do not use this constructor, instances should be created by using the
   * `AdWordsSessionBuilder` instead.
   *
   * @param AdWordsSessionBuilder $builder the builder to create an instance of
   *     this session from
   */
  public function __construct(AdWordsSessionBuilder $builder) {
    $this->logger = $builder->getLogger();
    $this->developerToken = $builder->getDeveloperToken();
    $this->userAgent = $builder->getUserAgent();
    $this->endpoint = $builder->getEndpoint();
    $this->oAuth2Credential = $builder->getOAuth2Credential();
    $this->soapSettings = $builder->getSoapSettings();
    $this->clientCustomerId = $builder->getClientCustomerId();
    $this->isValidateOnly = $builder->isValidateOnly();
    $this->isPartialFailure = $builder->isPartialFailure();
    $this->reportSettings = $builder->getReportSettings();
  }

  /**
   * @see AdsSession::getLogger()
   */
  public function getLogger() {
    return $this->logger;
  }

  /**
   * Gets the developer token.
   * @return string
   */
  public function getDeveloperToken() {
    return $this->developerToken;
  }

  /**
   * Gets the user agent.
   * @return string
   */
  public function getUserAgent() {
    return $this->userAgent;
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

  /**
   * Gets the client customer ID.
   * @return string|null
   */
  public function getClientCustomerId() {
    return $this->clientCustomerId;
  }

  /**
   * Gets the AdWords Express business ID used by the AdWords Express
   * PromotionService.
   * @return string|null
   */
  public function getExpressBusinessId() {
    return $this->expressBusinessId;
  }

  /**
   * Sets the AdWords Express business ID used by the AdWords Express
   * PromotionService.
   * @param string|null $expressBusinessId
   */
  public function setExpressBusinessId($expressBusinessId) {
    $this->expressBusinessId = $expressBusinessId;
  }

  /**
   * Gets the Google+ page ID for the Google My Business location used by the
   * AdWords Express PromotionService.
   * @return string|null
   */
  public function getExpressPlusPageId() {
    return $this->expressPlusPageId;
  }

  /**
   * Sets the Google+ page ID for the Google My Business location used by the
   * AdWords Express PromotionService.
   * @param string|null $expressPlusPageId
   */
  public function setExpressPlusPageId($expressPlusPageId) {
    $this->expressPlusPageId = $expressPlusPageId;
  }

  /**
   * Whether the session should only validate the request.
   * @return boolean
   */
  public function isValidateOnly() {
    return $this->isValidateOnly;
  }

  /**
   * Sets whether this session should only validate the request.
   * @param boolean $isValidateOnly
   */
  public function setValidateOnly($isValidateOnly) {
    $this->isValidateOnly = $isValidateOnly;
  }

  /**
   * Whether the session should allow partial failure.
   * @return boolean
   */
  public function isPartialFailure() {
    return $this->isPartialFailure;
  }

  /**
   * Sets whether this session should allow partial failure.
   * @param boolean $isPartialFailure
   */
  public function setPartialFailure($isPartialFailure) {
    $this->isPartialFailure = $isPartialFailure;
  }

  /**
   * Gets the report settings.
   * @return ReportSettings
   */
  public function getReportSettings() {
    return $this->reportSettings;
  }
}

