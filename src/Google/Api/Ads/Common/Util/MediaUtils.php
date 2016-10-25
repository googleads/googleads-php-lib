<?php
/**
 * A utility class to handle data of media assets (such as image, SWF,
 * or video files).
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
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

/**
 * A utility class to handle data of media assets (such as image, SWF,
 * or video files).
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class MediaUtils {

  /**
   * The MediaUtils class is not meant to have any instances.
   */
  private function __construct() {}

  /**
   * Gets the base64 encoded data from an asset located at <var>path</var> for
   * use with the API where <x>Data is needed.
   * @param string $path the path of the file or URL of the asset
   * @param boolean $useIncludePath use include path (optional)
   * @param resource $context a context resource (optional)
   * @return string the base64 encoded data of the file
   * @see http://us2.php.net/file_get_contents
   */
  public static function GetBase64Data($path, $useIncludePath = null,
      $context = null) {
    if ($useIncludePath) {
      return file_get_contents($path, FILE_USE_INCLUDE_PATH, $context);
    } else {
      return file_get_contents($path, 0, $context);
    }
  }
}

