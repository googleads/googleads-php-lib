<?php
/**
 * This class is now deprecated, please see this wiki article for more
 * information:
 * https://github.com/googleads/googleads-php-lib/wiki/Migrating-off-of-DFP-ServiceUtils-functions
 *
 * A utility class to simplify the use of API services.
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
 * @package    GoogleApiAdsDfp
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
require_once 'Google/Api/Ads/Common/Util/DeprecationUtils.php';

/**
 * A utility class to simplify the use of API services.
 * @package GoogleApiAdsDfp
 * @subpackage Util
 * @deprecated please see
 *     https://github.com/googleads/googleads-php-lib/wiki/Migrating-off-of-DFP-ServiceUtils-functions
 *     for more information
 */
class ServiceUtils {

  /**
   * The size of each page of results, as controlled by the LIMIT clause.
   * @var int
   */
  const PAGE_SIZE = 500;

  /**
   * The regular expression used to determine if a method name is in the
   * format get*ByStatement.
   * @var string
   */
  const GET_BY_STATEMENT_METHOD_NAME_REGEX = '/^get.*ByStatement$/';

  /**
   * The regular expression used to determine if the filter text is
   * incompatible.
   * @var string
   */
  const INCOMPATIBLE_FILTER_TEXT_REGEX =
      '/(?i)(?<=^|\s)(LIMIT|OFFSET)(?=$|\s)/';

  /**
   * The ServiceUtils class is not meant to have any instances.
   */
  private function __construct() {}

  /**
   * Returns all the objects from an account, using the service and method
   * name provided.
   * @param DfpSoapClient $service the service to use
   * @param string $methodName the name of the method
   * @param string $filterText optional filter text which must not contain
   *     the LIMIT or OFFSET options
   * @return array the objects retrieved from the service using the method
   * @throws InvalidArgumentException if <var>$methodName</var> is not a
   *     get*ByStatement method or the filterText contains the LIMIT or
   *     OFFSET options
   */
  public static function GetAllObjects(DfpSoapClient $service,
      $methodName, $filterText = NULL) {
    DeprecationUtils::LogDeprecatedMethodUsage('GetAllObjects',
        'https://github.com/googleads/googleads-php-lib/wiki/Migrating-off-of-DFP-ServiceUtils-functions');
    if (!isset($filterText)) {
      $filterText = '';
    }
    if (!preg_match(self::GET_BY_STATEMENT_METHOD_NAME_REGEX, $methodName)) {
      throw new InvalidArgumentException(
          'The method name must be in the format a "get*ByStatement".');
    }
    $matches = array();
    if (preg_match(self::INCOMPATIBLE_FILTER_TEXT_REGEX, $filterText,
        $matches)) {
      throw new InvalidArgumentException(
          'The filter text contains an option that is incompatible with this '
          .'method: ' . $matches[0]);
    }

    $allObjects = array();
    $filterStatement = new Statement();
    $offset = 0;
    $page = NULL;

    do {
      $filterStatement->query = $filterText . ' LIMIT ' . self::PAGE_SIZE
          . ' OFFSET ' . $offset;
      $page = $service->$methodName($filterStatement);
      if (isset($page->results)) {
        $allObjects = array_merge($allObjects, $page->results);
      }
      $offset += self::PAGE_SIZE;
    } while (isset($page->results)
          && sizeof($page->results) == self::PAGE_SIZE);

    return $allObjects;
  }

  /**
   * Returns some of the objects from an account, using the service and method
   * name provided.
   * @param DfpSoapClient $service the service to use
   * @param string $methodName the name of the method
   * @param string $filterText filter text
   * @return array the objects retrieved from the service using the method
   * @throws InvalidArgumentException if <var>$methodName</var> is not a
   *     get*ByStatement method or the filterText contains the LIMIT or
   *     OFFSET options
   */
  public static function GetSomeObjects(DfpSoapClient $service,
      $methodName, $filterText) {
    DeprecationUtils::LogDeprecatedMethodUsage('GetSomeObjects',
        'https://github.com/googleads/googleads-php-lib/wiki/Migrating-off-of-DFP-ServiceUtils-functions');
    if (!preg_match(self::GET_BY_STATEMENT_METHOD_NAME_REGEX, $methodName)) {
      throw new InvalidArgumentException(
          'The method name must be in the format a "get*ByStatement".');
    }
    $filterStatement = new Statement();
    $filterStatement->query = $filterText;
    $page = $service->$methodName($filterStatement);
    return $page->results;
  }
}

