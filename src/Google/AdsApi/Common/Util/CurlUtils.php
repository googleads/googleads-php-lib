<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
 */
namespace Google\AdsApi\Common\Util;

/**
 * A collection of utility methods for working with cURL.
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
  public function createSession($url) {
    $ch = $this->Init($url);

    // Default options.
    $openBasedir = ini_get('open_basedir');
    $this->setOpt($ch, CURLOPT_FOLLOWLOCATION, empty($openBasedir));
    $this->setOpt($ch, CURLOPT_HEADER, false);
    $this->setOpt($ch, CURLOPT_RETURNTRANSFER, true);
    $this->setOpt($ch, CURLOPT_ENCODING, 'gzip');
    $this->setOpt($ch, CURLOPT_USERAGENT, 'curl, gzip');

    // Proxy options.
    if (defined('HTTP_PROXY_HOST') && HTTP_PROXY_HOST != '') {
      $this->setOpt($ch, CURLOPT_PROXY, HTTP_PROXY_HOST);
    }
    if (defined('HTTP_PROXY_PORT') && HTTP_PROXY_PORT != '') {
      $this->setOpt($ch, CURLOPT_PROXYPORT, HTTP_PROXY_PORT);
    }
    if (defined('HTTP_PROXY_USER') && defined('HTTP_PROXY_PASSWORD')
        && HTTP_PROXY_USER != '' && HTTP_PROXY_PASSWORD != '') {
      $this->setOpt($ch, CURLOPT_PROXYUSERPWD, HTTP_PROXY_USER . ':'
          . HTTP_PROXY_PASSWORD);
    }

    // SSL options.
    if (defined('SSL_VERIFY_PEER') && SSL_VERIFY_PEER != '') {
      $this->setOpt($ch, CURLOPT_SSL_VERIFYPEER, SSL_VERIFY_PEER);
    } else {
      // Default to disabled, for backwards compatibility.
      $this->setOpt($ch, CURLOPT_SSL_VERIFYPEER, false);
    }
    if (defined('SSL_VERIFY_HOST') && SSL_VERIFY_HOST != '') {
      if (SSL_VERIFY_HOST) {
        // Verify that the host exists in the certificate and matches the
        // host in the request.
        $this->setOpt($ch, CURLOPT_SSL_VERIFYHOST, 2);
      } else {
        $this->setOpt($ch, CURLOPT_SSL_VERIFYHOST, false);
      }
    } else {
      $this->setOpt($ch, CURLOPT_SSL_VERIFYHOST, false);
    }
    if (defined('SSL_CA_PATH') && SSL_CA_PATH != '') {
      $this->setOpt($ch, CURLOPT_CAPATH, SSL_CA_PATH);
    }
    if (defined('SSL_CA_FILE') && SSL_CA_FILE != '') {
      $this->setOpt($ch, CURLOPT_CAINFO, SSL_CA_FILE);
    }

    return $ch;
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-init.php}.
   */
  public function init($url = null) {
    return curl_init($url);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-setopt.php}.
   */
  public function setOpt($ch, $option, $value) {
    return curl_setopt($ch, $option, $value);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-exec.php}.
   */
  public function exec($ch) {
    return curl_exec($ch);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-getinfo.php}.
   */
  public function getInfo($ch, $opt = 0) {
    return curl_getinfo($ch, $opt);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-error.php}.
   */
  public function error($ch) {
    return curl_error($ch);
  }

  /**
   * Wraps the global curl function
   * {@link http://php.net/manual/en/function.curl-close.php}.
   */
  public function close($ch) {
    curl_close($ch);
  }
}

