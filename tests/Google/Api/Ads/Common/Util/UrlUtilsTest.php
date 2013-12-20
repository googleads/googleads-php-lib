<?php
/**
 * Copyright 2012, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an 'AS IS' BASIS,
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
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/UrlUtils.php';

/**
 * Unit tests for {@link UrlUtils}.
 * @group small
 */
class UrlUtilsTest extends PHPUnit_Framework_TestCase {

  /**
   * Tests ReplaceServerInUrl.
   * @param string $url the URL to perform the replacement on
   * @param string $server the server to replace with
   * @param string $expected the expected value replaced URL
   * @dataProvider ReplaceServiceInUrlProvider
   */
  public function testReplaceServerInUrl($url, $server, $expected) {
    $value = UrlUtils::ReplaceServerInUrl($url, $server);
    $this->assertEquals($expected, $value);
  }

  /**
   * Tests AddParamsToUrl.
   * @param string $url the URL to perform to add parameters to
   * @param string $params the parameters to add
   * @param string $expected the expected value of the final URL
   * @dataProvider AddParamsToUrlProvider
   */
  public function testAddParamsToUrl($url, $params, $expected) {
    $value = UrlUtils::AddParamsToUrl($url, $params);
    $this->assertEquals($expected, $value);
  }

  /**
   * Provides urls, servers, and the expected URL after replacement.
   * @return array an array of arrays of url, server, and expected result
   */
  public function ReplaceServiceInUrlProvider() {
    $data = array();

    // Base case.
    $data[] = array('http://www.foo.com', 'http://www.bar.com',
        'http://www.bar.com');
    // Path.
    $data[] = array('http://www.foo.com/path', 'http://www.bar.com',
        'http://www.bar.com/path');
    // Deep path.
    $data[] = array('http://www.foo.com/path/more', 'http://www.bar.com',
        'http://www.bar.com/path/more');
    // Query params.
    $data[] = array('http://www.foo.com?a=b', 'http://www.bar.com',
        'http://www.bar.com?a=b');
    // Multiple query params.
    $data[] = array('http://www.foo.com?a=b&c=d', 'http://www.bar.com',
        'http://www.bar.com?a=b&c=d');
    // Path and query params.
    $data[] = array('http://www.foo.com/path?a=b', 'http://www.bar.com',
        'http://www.bar.com/path?a=b');
    // Different schemes.
    $data[] = array('http://www.foo.com/path', 'ftp://www.bar.com',
        'ftp://www.bar.com/path');
    // Strange domains.
    $data[] = array('http://1.foo/path', 'http://bar.3.org',
        'http://bar.3.org/path');
    // Port number in replacement.
    $data[] = array('http://www.foo.com/path', 'http://www.bar.com:8080',
        'http://www.bar.com:8080/path');
    // Port number in original.
    $data[] = array('http://www.foo.com:8080/path', 'http://www.bar.com',
        'http://www.bar.com/path');
    // Port number in both.
    $data[] = array('http://www.foo.com:8080/path', 'http://www.bar.com:9090',
        'http://www.bar.com:9090/path');

    return $data;
  }

  /**
   * Provides urls, parameters, and the expected URL after adding the
   * parameters.
   * @return array an array of arrays of url, parameters array, and expected
   *     result
   */
  public function AddParamsToUrlProvider() {
    $data = array();

    // Base case.
    $data[] = array('http://www.foo.com', array('a' => 'b'),
        'http://www.foo.com?a=b');
    // Multiple parameters.
    $data[] = array('http://www.foo.com', array('a' => 'b', 'c' => 'd'),
        'http://www.foo.com?a=b&c=d');
    // Params in URL.
    $data[] = array('http://www.foo.com?x=y', array('a' => 'b'),
        'http://www.foo.com?x=y&a=b');
    // Requires URL encoding.
    $data[] = array('http://www.foo.com', array('a a' => 'b&b'),
        'http://www.foo.com?a+a=b%26b');
    // Empty params.
    $data[] = array('http://www.foo.com', array(), 'http://www.foo.com');
    // Null params.
    $data[] = array('http://www.foo.com', NULL, 'http://www.foo.com');

    return $data;
  }
}

