<?php
/**
 * Factory class for SOAP clients for Google's DoubleClick for Publishers API.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsDfp
 * @subpackage Lib
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/Common/Lib/AdsUser.php';
require_once 'Google/Api/Ads/Common/Lib/SoapClientFactory.php';

/**
 * Factory class for SOAP clients for Google's DoubleClick for Publishers API.
 * @package GoogleApiAdsDfp
 * @subpackage Lib
 */
class DfpSoapClientFactory extends SoapClientFactory {

  /**
   * The constructor for Google's DoubleClick for Publishers API SOAP client
   * factory.
   *
   * @param AdsUser $user the user which the client will use for credentials
   * @param string $version the version to generate clients for
   * @param string $server the server to generate clients for
   */
  public function __construct(AdsUser $user, $version, $server) {
    parent::__construct($user, $version, $server, 'publisher');
  }

  /**
   * Initiates a require_once for the service.
   *
   * @param string $serviceName the service to instantiate
   */
  public function DoRequireOnce($serviceName) {
    require_once implode("/", array(dirname(__FILE__), '..',
        $this->GetVersion(), $serviceName . '.php'));
  }
}

