<?php
/**
 * A registry for usage of ads utilities.
 *
 * PHP version 5
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 * @see        AdsUtility
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
class AdsUtilityRegistry {

  private $adsUtilities = array();
  private static $instance = null;

  private function __construct() {}

  /**
   * Gets a singleton instance of AdsUtilityRegistry.
   *
   * @return AdsUtilityRegistry the ads utility registry
   */
  public static function getInstance() {
    if (AdsUtilityRegistry::$instance === null) {
      AdsUtilityRegistry::$instance = new AdsUtilityRegistry();
    }
    return AdsUtilityRegistry::$instance;
  }

  /**
   * Adds a new ads utility to the ads utilities list.
   *
   * @param string $adsUtility the name of ads utility that has been used
   */
  public function addUtility($adsUtility) {
    $this->adsUtilities[$adsUtility] = $adsUtility;
  }

  /**
   * Gets all utilities in the registry and clear the registry.
   *
   * @return array the list of registered ads utilities
   */
  public function popAllUtilities() {
    $currentUtilities = $this->adsUtilities;
    $this->adsUtilities = array();
    return $currentUtilities;
  }
}
