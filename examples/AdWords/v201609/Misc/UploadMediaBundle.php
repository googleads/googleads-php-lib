<?php
/**
 * This example uploads an HTML5 zip file as a MediaBundle.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201609
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file.
require_once dirname(dirname(__FILE__)) . '/init.php';

require_once UTIL_PATH . '/MediaUtils.php';
require_once UTIL_PATH . '/MapUtils.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function UploadMediaBundleExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $mediaService = $user->GetService('MediaService', ADWORDS_VERSION);

  // Create HTML5 media.
  $html5Zip = new MediaBundle();
  $html5Zip->data = MediaUtils::GetBase64Data('https://goo.gl/9Y7qI2');
  $html5Zip->type = 'MEDIA_BUNDLE';

  // Make the upload request.
  $result = $mediaService->upload(array($html5Zip));

  // Display result.
  $mediaBundle = $result[0];
  $dimensions = MapUtils::GetMap($mediaBundle->dimensions);
  printf(
      "HTML5 media with ID %d, dimensions '%dx%d', MIME type '%s' was "
          . "uploaded.\n",
              $mediaBundle->mediaId,
              $dimensions['FULL']->width,
              $dimensions['FULL']->height,
              $mediaBundle->mimeType
  );
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  UploadMediaBundleExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
