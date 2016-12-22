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

use Google\AdsApi\Common\AdsUtilityRegistry;

/**
 * Provides methods related to formatting HTTP and SOAP headers for ads APIs.
 */
final class AdsHeaderFormatter {

  private $adsUtilityRegistry;

  /**
   * @param AdsUtilityRegistry|null $adsUtilityRegistry the ads utility registry
   */
  public function __construct(AdsUtilityRegistry $adsUtilityRegistry = null) {
    $this->adsUtilityRegistry = ($adsUtilityRegistry === null)
        ? AdsUtilityRegistry::getInstance()
        : $adsUtilityRegistry;
  }

  /**
   * Formats an application name in a format standard to the ads libraries to
   * include in the SOAP header.
   *
   * @param string $applicationName the application name to format
   * @param string $productNameForSoapHeader the ads product API calls are
   *     being made against, formatted to be used in the SOAP header
   * @param LibraryMetadataProvider $libraryMetadataProvider the library
   *     metadata provider
   * @param boolean $includeUtilityUsage true if logging of utilities usages is
   *     turned on
   * @return string the formatted application name
   */
  public function formatApplicationNameForSoapHeader(
      $applicationName,
      $productNameForSoapHeader,
      LibraryMetadataProvider $libraryMetadataProvider,
      $includeUtilityUsage
  ) {
    $adsUtilities = $this->adsUtilityRegistry->popAllUtilities();
    $utilUsages = ($includeUtilityUsage === true && count($adsUtilities) > 0)
        ? ', ' . implode(', ', $adsUtilities) : '';

    return sprintf(
        '%s (%sApi-PHP, %s/%s, PHP/%s%s)',
        $applicationName,
        $productNameForSoapHeader,
        $libraryMetadataProvider->getLibName(),
        $libraryMetadataProvider->getLibVersion(),
        PHP_VERSION,
        $utilUsages
    );
  }
}
