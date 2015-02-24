<?php
/**
 * A collection of utility methods for logging or throwing errors related to the
 * usage of deprecated features.
 *
 * PHP version 5
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 * @author     Vincent Tsao
 */
require_once 'Google/Api/Ads/Common/Lib/AdsUser.php';
require_once 'Google/Api/Ads/Common/Lib/ServiceException.php';

/**
 * A collection of utility methods for logging or throwing errors related to the
 * usage of deprecated features.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
abstract class DeprecationUtils {

  /**
   * Checks to see if skipReportHeader or skipReportSummary can be used.
   * Throws an error if it cannot be used.
   *
   * @param string $header skipReportHeader or skipReportSummary
   * @param string $minimumVersion the minimum API version that supports
   *    skipReportHeader or skipReportSummary
   * @param string $requestedVersion the API version being used
   * @throws ServiceException if the requested version does not support
   *     skipReportHeader or skipReportSummary
   */
  public static function CheckUsingSkipReportHeaderWithUnsupportedVersion(
      $header, $minimumVersion, $requestedVersion) {
    if ($requestedVersion < $minimumVersion) {
      throw new ServiceException(sprintf("%s is not supported "
          . "in version %s.", $header, $requestedVersion));
    }
  }

  /**
   * Logs an error message indicating that the specified method is deprecated.
   *
   * @param string $methodName the name of the deprecated method
   * @param string $moreInfoLink an optional link to a URL with more information
   */
  public static function LogDeprecatedMethodUsage($methodName,
      $moreInfoLink = NULL) {
    $message = sprintf("The method '%s' is deprecated.", $methodName);
    if (isset($moreInfoLink)) {
      $message .= sprintf(" For more information, please see '%s'",
          $moreInfoLink);
    }
    self::Log($message, Logger::$ERROR);
  }

  /**
   * Log messages to the relevant message sources.
   *
   * @param string $message is the message to log
   * @param string $level is the message level to log
   */
  protected static function Log($message, $level = NULL) {
    Logger::log(Logger::$SOAP_XML_LOG, $message, $level);
    Logger::log(Logger::$REQUEST_INFO_LOG, $message, $level);
  }
}

