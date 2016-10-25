<?php
/**
 * A collection of utility methods for working with cURL.
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
 * A collection of utility methods for working with cURL.
 *
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class CurlUtils {

  /**
   * Creates a new cURL session with the following default options applied. Use
   * {@link #SetOpt} to change them. Proxy and SSL options should be set in the
   * settings.ini file since they are more commonly configured options.
   *
   * CURLOPT_FOLLOWLOCATION - true, unless open_basedir is set.
   * CURLOPT_HEADER - false.
   * CURLOPT_RETURNTRANSFER - true.
   * CURLOPT_ENCODING - 'gzip'.
   * CURLOPT_USERAGENT - 'curl, gzip'.
   *
   * @param string $url the URL of the resource to connect to
   * @return the cURL handle for the new session
   */
  public function CreateSession($url) {
    $ch = $this->Init($url);

    // Default options.
    $openBasedir = ini_get('open_basedir');
    $this->SetOpt($ch, CURLOPT_FOLLOWLOCATION, empty($openBasedir));
    $this->SetOpt($ch, CURLOPT_HEADER, false);
    $this->SetOpt($ch, CURLOPT_RETURNTRANSFER, true);
    $this->SetOpt($ch, CURLOPT_ENCODING, 'gzip');
    $this->SetOpt($ch, CURLOPT_USERAGENT, 'curl, gzip');

    // Proxy options.
    if (defined('HTTP_PROXY_HOST') && HTTP_PROXY_HOST != '') {
      $this->SetOpt($ch, CURLOPT_PROXY, HTTP_PROXY_HOST);
    }
    if (defined('HTTP_PROXY_PORT') && HTTP_PROXY_PORT != '') {
      $this->SetOpt($ch, CURLOPT_PROXYPORT, HTTP_PROXY_PORT);
    }
    if (defined('HTTP_PROXY_USER') && defined('HTTP_PROXY_PASSWORD')
        && HTTP_PROXY_USER != '' && HTTP_PROXY_PASSWORD != '') {
      $this->SetOpt($ch, CURLOPT_PROXYUSERPWD, HTTP_PROXY_USER . ':'
          . HTTP_PROXY_PASSWORD);
    }

    // SSL options.
    if (defined('SSL_VERIFY_PEER') && SSL_VERIFY_PEER != '') {
      $this->SetOpt($ch, CURLOPT_SSL_VERIFYPEER, SSL_VERIFY_PEER);
    } else {
      // Default to disabled, for backwards compatibility.
      $this->SetOpt($ch, CURLOPT_SSL_VERIFYPEER, false);
    }
    if (defined('SSL_VERIFY_HOST') && SSL_VERIFY_HOST != '') {
      if (SSL_VERIFY_HOST) {
        // Verify that the host exists in the certificate and matches the
        // host in the request.
        $this->SetOpt($ch, CURLOPT_SSL_VERIFYHOST, 2);
      } else {
        $this->SetOpt($ch, CURLOPT_SSL_VERIFYHOST, false);
      }
    } else {
      $this->SetOpt($ch, CURLOPT_SSL_VERIFYHOST, false);
    }
    if (defined('SSL_CA_PATH') && SSL_CA_PATH != '') {
      $this->SetOpt($ch, CURLOPT_CAPATH, SSL_CA_PATH);
    }
    if (defined('SSL_CA_FILE') && SSL_CA_FILE != '') {
      $this->SetOpt($ch, CURLOPT_CAINFO, SSL_CA_FILE);
    }

    return $ch;
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-init.php}.
   */
  public function Init($url = null) {
    return curl_init($url);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-setopt.php}.
   */
  public function SetOpt($ch, $option, $value) {
    return curl_setopt($ch, $option, $value);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-exec.php}.
   */
  public function Exec($ch) {
    return curl_exec($ch);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-getinfo.php}.
   */
  public function GetInfo($ch, $opt = 0) {
    return curl_getinfo($ch, $opt);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-error.php}.
   */
  public function Error($ch) {
    return curl_error($ch);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-close.php}.
   */
  public function Close($ch) {
    curl_close($ch);
  }
}

