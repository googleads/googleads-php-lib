<?php
/**
 * A collection of utility methods for working with URLs.
 *
 * PHP version 5
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
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */

/**
 * A collection of utility methods for working with URLs.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class UrlUtils {

  /**
   * The UrlUtils class is not meant to have any instances.
   * @access private
   */
  private function __construct() {}

  /**
   * Replaces the protocol and server portion of a URL with another.
   * @param string $url the full URL
   * @param string $server the protocol and server to replace with
   * @return string the URL with the protocol and server replaced
   */
  public static function ReplaceServerInUrl($url, $server) {
    $urlParts = parse_url($url);
    $url = $server;
    if (!empty($urlParts['path'])) {
      $url .= $urlParts['path'];
    }
    if (!empty($urlParts['query'])) {
      $url .= '?' . $urlParts['query'];
    }
    return $url;
  }

  /**
   * Adds parameters to a URL.
   * @param string $url the URL
   * @param array $params the parameters to add
   * @return string the new URL with the parameters added
   */
  public static function AddParamsToUrl($url, $params) {
    if (!isset($params) || sizeof($params) == 0) {
      return $url;
    } else {
      $paramString = http_build_query($params, NULL, '&');
      $query = parse_url($url, PHP_URL_QUERY);
      $separator = empty($query) ? '?' : '&';
      return $url . $separator . $paramString;
    }
  }
}

