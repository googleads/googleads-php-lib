<?php
/**
 * This example demonstrates how to handle CAPTCHA challenges returned by the
 * ClientLogin API.
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
 * @package    GoogleApiAdsCommon
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

// Add the library to the include path. This is not neccessary if you've already
// done so in your php.ini file.
$path = dirname(__FILE__) . '/../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Common/Util/AuthToken.php';

/**
 * Reads input from the command line, showing an optional message.
 * @param string message an optional message to show
 * @return string the text entered on the command line
 */
function readInput($message = NULL) {
  print $message;
  $stdin = fopen('php://stdin', 'r');
  $line = fgets($stdin);
  fclose($stdin);
  return trim($line);
}

try {
  $email = readInput('Enter email: ');
  $password = readInput('Enter password: ');
  $service = readInput('Enter service (adwords, gam): ');
  $source = 'Ads PHP Client Library Examples';

  try {
    print 'Requesting AuthTokens ';
    while (TRUE) {
      // Repeatedly request new authTokens, to trigger a CAPTCHA challenge.
      $authToken = new AuthToken($email, $password, $service, $source);
      $value = $authToken->GetAuthToken();
      print '.';
    }
  } catch (AuthTokenException $e) {
    print "\n";
    if ($e->GetError() == 'CaptchaRequired') {
      print "A CAPTCHA is required.\n";
      printf("View CAPTCHA challenge image: %s/accounts/%s\n",
          $authToken->GetServer(), $e->GetCaptchaUrl());
      $captchaToken = $e->GetCaptchaToken();
      $captchaResponse = readInput('Enter CAPTCHA response: ');
      // Request new AuthToken using CAPTCHA token and response.
      try {
        $authToken = new AuthToken($email, $password, $service, $source, NULL,
            NULL, $captchaToken, $captchaResponse);
        $value = $authToken->GetAuthToken();
        print "CAPTCHA challenge passed.\n";
      } catch (AuthTokenException $e) {
        print "CAPTCHA challenge failed.\n";
      }
    } else {
      printf("AuthTokenException: %s\n", $e->GetError());
    }
  }
} catch (Exception $e) {
  print $e->getMessage();
}

