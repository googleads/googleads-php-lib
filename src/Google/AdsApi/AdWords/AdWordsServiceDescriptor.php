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

use Google\AdsApi\Common\AdsServiceDescriptor;
use ReflectionObject;

/**
 * Descriptor for AdWords API services.
 */
class AdWordsServiceDescriptor implements AdsServiceDescriptor {

  /**
   * @var string the SOAP namespace prefix for AdWords API services
   */
  const NAMESPACE_PREFIX = 'https://adwords.google.com/api/adwords';

  /**
   * @var array a list of AdWords services that require the `ExpressSoapHeader`
   *     to be used
   */
  private $expressHeaderServices = array('PromotionService');

  private $serviceName;
  private $version;
  private $group;
  private $classNamespace;
  private $isExpressHeaderRequired;

  /**
   * Creates a new instance of this service descriptor for the specified service
   * and version.
   *
   * @param string $serviceName the name of the service
   * @param string $version the version of the service
   * @param string $group the group of the service
   */
  public function __construct($serviceName, $version, $group) {
    $this->serviceName = $serviceName;
    $this->version = $version;
    $this->group = $group;
    $thisClazz = new ReflectionObject($this);
    $this->classNamespace = $thisClazz->getNamespaceName();
    $this->isExpressHeaderRequired =
        in_array($serviceName, $this->expressHeaderServices, true);
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
    return sprintf('%s\\%s\\%s\\%s', $this->classNamespace, $this->version,
        $this->group, $this->serviceName);
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
    return sprintf(
        '%s/%s/%s',
        self::NAMESPACE_PREFIX,
        $this->group,
        $this->version
    );
  }

  /**
   * If this service requires the `ExpressSoapHeader` to be used or not.
   * @return boolean true if the `ExpressSoapHeader` needs to be used
   */
  public function isExpressHeaderRequired() {
    return $this->isExpressHeaderRequired;
  }
}

