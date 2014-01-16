<?php
/**
 * A collection of utility methods for deprecation purposes.
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
 */
require_once 'Google/Api/Ads/Common/Lib/AdsUser.php';

/**
 * A collection of utility methods for deprecation purposes.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
abstract class DeprecationUtils {

  /**
   * Check the AdsUser is using OAuth2 as the authorization method.
   *
   * @param AdsUser $user the AdsUser to test
   */
  public static function CheckAdsUserUsingOAuth2(AdsUser $user) {
    if (self::ShouldRaiseClientLoginWarning($user)) {
      self::Log("Current authentication method DEPRECATED. Please switch to"
          . " OAuth2 as authentication method. For more information, see:\n"
          . " https://developers.google.com/accounts/docs/"
          . "AuthForInstalledApps", Logger::$ERROR);
    }
  }

  /**
   * Check if a User needs an Client Login warning raised.
   *
   * @param AdsUser $user the AdsUser to test
   * @return boolean TRUE if an OAuth2 Info message should be raised
   */
  public static function ShouldRaiseClientLoginWarning(AdsUser $user) {
    // Check that they're not using OAuth2
    $credentials = $user->GetOAuth2Info();
    return (empty($credentials['refresh_token'])
        && empty($credentials['access_token'])
        && (empty($credentials['client_id'])
            ||  empty($credentials['client_secret'])));
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

