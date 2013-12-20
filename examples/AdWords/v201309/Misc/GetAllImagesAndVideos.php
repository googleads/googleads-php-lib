<?php
/**
 * This example gets all images. To upload an image, run UploadImage.php. To
 * upload a video, see http://goo.gl/Uqn0l.
 *
 * Tags: MediaService.get
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

require_once UTIL_PATH . '/MediaUtils.php';
require_once UTIL_PATH . '/MapUtils.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function GetAllImagesAndVideosExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $mediaService = $user->GetService('MediaService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('MediaId', 'Width', 'Height', 'MimeType', 'Name');
  $selector->ordering = array(new OrderBy('MediaId', 'ASCENDING'));

  // Create predicates.
  $selector->predicates[] =
      new Predicate('Type', 'IN', array('IMAGE', 'VIDEO'));

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do {
    // Make the get request.
    $page = $mediaService->get($selector);

    // Display images.
    if (isset($page->entries)) {
      foreach ($page->entries as $media) {
        if ($media->MediaType == 'Image') {
          $dimensions = MapUtils::GetMap($media->dimensions);
          printf("Image with dimensions '%dx%d', MIME type '%s', and id '%s' "
              . "was found.\n", $dimensions['FULL']->width,
              $dimensions['FULL']->height, $media->mimeType, $media->mediaId);
        } else if ($media->MediaType == 'Video') {
          printf("Video with name '%s' and id '%s' was found.\n", $media->name,
              $media->mediaId);
        }
      }
    } else {
      print "No images or videos were found.\n";
    }

    // Advance the paging index.
    $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
  } while ($page->totalNumEntries > $selector->paging->startIndex);
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
  GetAllImagesAndVideosExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
