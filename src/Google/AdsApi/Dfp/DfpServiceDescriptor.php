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

use Google\AdsApi\Common\AdsServiceDescriptor;
use ReflectionObject;

/**
 * Descriptor for DFP API services.
 */
class DfpServiceDescriptor implements AdsServiceDescriptor {

  /**
   * @var string the SOAP namespace prefix for DFP API services
   */
  const NAMESPACE_PREFIX = 'https://www.google.com/apis/ads/publisher';

  private $serviceName;
  private $version;
  private $classNamespace;

  /**
   * Creates a new instance of this service descriptor for the specified service
   * and version.
   *
   * @param string $serviceName the name of the service
   * @param string $version the version of the service
   */
  public function __construct($serviceName, $version) {
    $this->serviceName = $serviceName;
    $this->version = $version;
    $thisClazz = new ReflectionObject($this);
    $this->classNamespace = $thisClazz->getNamespaceName();
  }

  /**
   * @see AdsServiceDescriptor::getServiceName()
   */
  public function getServiceName() {
    return $this->serviceName;
  }

  /**
   * @see AdsServiceDescriptor::getServiceClass()
   */
  public function getServiceClass() {
    return sprintf('%s\\%s\\%s', $this->classNamespace, $this->version,
        $this->serviceName);
  }

  /**
   * @see AdsServiceDescriptor::getVersion()
   */
  public function getVersion() {
    return $this->version;
  }

  /**
   * @see AdsServiceDescriptor::getSoapNamespace()
   */
  public function getSoapNamespace() {
    return self::NAMESPACE_PREFIX . '/' . $this->version;
  }
}

