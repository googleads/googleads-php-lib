<?php
/**
 * This example will print out an OAuth2 refresh token. Please copy the refresh
 * token into your auth.ini file after running.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage Auth
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once dirname(__FILE__) . '/init.php';

/**
 * Gets an OAuth2 credential.
 * @param string $user the user that contains the client ID and secret
 * @return array the user's OAuth 2 credentials
 */
function GetOAuth2Credential($user) {
  $redirectUri = null;
  $offline = true;
  // Get the authorization URL for the OAuth2 token.
  // No redirect URL is being used since this is an installed application. A web
  // application would pass in a redirect URL back to the application,
  // ensuring it's one that has been configured in the API console.
  // Passing true for the second parameter ($offline) will provide us a refresh
  // token which can used be refresh the access token when it expires.
  $OAuth2Handler = $user->GetOAuth2Handler();
  $authorizationUrl = $OAuth2Handler->GetAuthorizationUrl(
      $user->GetOAuth2Info(), $redirectUri, $offline);

  // In a web application you would redirect the user to the authorization URL
  // and after approving the token they would be redirected back to the
  // redirect URL, with the URL parameter "code" added. For desktop
  // or server applications, spawn a browser to the URL and then have the user
  // enter the authorization code that is displayed.
  printf("Log in to your AdWords account and open the following URL:\n%s\n\n",
      $authorizationUrl);
  print "After approving the token enter the authorization code here: ";
  $stdin = fopen('php://stdin', 'r');
  $code = trim(fgets($stdin));
  fclose($stdin);
  print "\n";

  // Get the access token using the authorization code. Ensure you use the same
  // redirect URL used when requesting authorization.
  $user->SetOAuth2Info(
        $OAuth2Handler->GetAccessToken(
            $user->GetOAuth2Info(), $code, $redirectUri));

  // The access token expires but the refresh token obtained for offline use
  // doesn't, and should be stored for later use.
  return $user->GetOAuth2Info();
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get the client ID and secret from the auth.ini file. If you do not have a
  // client ID or secret, please create one of type "installed application" in
  // the Google API console: https://code.google.com/apis/console#access
  // and set it in the auth.ini file.
  $user = new AdWordsUser();
  $user->LogAll();

  // Get the OAuth2 credential.
  $oauth2Info = GetOAuth2Credential($user);

  // Enter the refresh token into your auth.ini file.
  printf("Your refresh token is: %s\n\n", $oauth2Info['refresh_token']);
  printf("In your auth.ini file, edit the refresh_token line to be:\n"
      . "refresh_token = \"%s\"\n", $oauth2Info['refresh_token']);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}

