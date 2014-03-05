<?php
/**
 * A collection of utility methods for examples.
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

require_once 'Google/Api/Ads/Common/Lib/ValidationException.php';
require_once 'Google/Api/Ads/Common/Util/OAuth2Handler.php';

/**
 * A collection of utility methods for examples.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
abstract class ExampleUtils {

  /**
   * Checks for any OAuth2 Errors with relevant info. Otherwise, provide a
   * relevant error message.
   * @param Exception $raisedException is the exception to inspect
   */
  public static function CheckForOAuth2Errors(Exception $raisedException) {
    $errorMessage = "An error has occured:";
    if ($raisedException instanceof OAuth2Exception) {
      $errorMessage = "Your OAuth2 Credentials are incorrect.\nPlease see the"
          . " GetRefreshToken.php example.";
    } elseif ($raisedException instanceof ValidationException) {
      $requiredAuthFields =
          array('client_id', 'client_secret', 'refresh_token');
      $trigger = $raisedException->GetTrigger();
      if (in_array($trigger, $requiredAuthFields)) {
        $errorMessage = sprintf(
            "Your OAuth2 Credentials are missing the '%s'. Please see"
                . " GetRefreshToken.php for further information.",
            $trigger
        );
      }
    }
    printf("%s\n%s\n", $errorMessage, $raisedException->getMessage());
  }
}
