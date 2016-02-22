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
 * Provides metadata about an ads API service.
 */
interface AdsServiceDescriptor {

  /**
   * Gets the name of the service.
   * @return string the name of the service
   */
  public function getServiceName();

  /**
   * Gets the fully qualified class name representing service.
   * @return string the fully qualified class name of the service
   */
  public function getServiceClass();

  /**
   * Gets the version of the service.
   * @return string the version of the service
   */
  public function getVersion();

  /**
   * Gets the SOAP namespace of the service.
   * @return string the SOAP namespace of the service
   */
  public function getSoapNamespace();
}

