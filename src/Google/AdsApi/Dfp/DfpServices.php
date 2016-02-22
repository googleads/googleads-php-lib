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

use Google\AdsApi\Common\AdsServices;
use Google\AdsApi\Common\AdsServicesSoapClientFactory;
use Google\AdsApi\Common\AdsSession;
use Google\AdsApi\Common\AdsSoapClientFactory;
use Google\AdsApi\Common\ValidationException;

/**
 * Entry point for accessing the DFP API's services.
 */
class DfpServices implements AdsServices {

  private $adsSoapClientFactory;
  private $adsHeaderHandler;

  /**
   * @param AdsServicesSoapClientFactory $adsServicesSoapClientFactory
   * @param DfpHeaderHandler $dfpHeaderHandler
   */
  public function __construct(
      AdsServicesSoapClientFactory $adsSoapClientFactory = null,
      DfpHeaderHandler $dfpHeaderHandler = null) {
    $this->adsSoapClientFactory = ($adsSoapClientFactory === null)
        ? new AdsServicesSoapClientFactory()
        : $adsSoapClientFactory;
    $this->adsHeaderHandler = ($dfpHeaderHandler === null)
        ? new DfpHeaderHandler()
        : $dfpHeaderHandler;
  }

  /**
   * @see AdsServices::get()
   */
  public function get(AdsSession $session, $serviceName, $version,
      $group = null) {
    $this->validateGet($serviceName, $version);
    return $this->adsSoapClientFactory->generateSoapClient(
        $session,
        $this->adsHeaderHandler,
        new DfpServiceDescriptor($serviceName, $version)
    );
  }

  private function validateGet($serviceName, $version) {
    if ($serviceName === null || $serviceName === '') {
      throw new ValidationException('serviceName', $serviceName,
          'A service name is required.');
    }
    if ($version === null || $version === '') {
      throw new ValidationException('version', $version,
          'A version name is required.');
    }
  }

  /**
   * Sets the SOAP client factory this ads API services will use.
   * @param AdsSoapClientFactory $adsSoapClientFactory the SOAP client factory
   */
  public function setSoapClientFactory(
      AdsSoapClientFactory $adsSoapClientFactory) {
    $this->adsSoapClientFactory = $adsSoapClientFactory;
  }
}

