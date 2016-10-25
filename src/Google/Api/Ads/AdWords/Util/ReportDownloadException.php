<?php
/**
 * Exception class for an error that occurs while downloading a report.
 *
 * PHP version 5
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 * @subpackage Util
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
class ReportDownloadException extends Exception {

  private $httpCode;

  /**
   * Creates an instance of ReportDownloadException holding the HTTP status
   * code that causes this exception.
   *
   * @param string $error an error message
   * @param int|null $httpCode an HTTP status code of the response
   */
  public function __construct($error, $httpCode = null) {
    parent::__construct($error);
    $this->httpCode = $httpCode;
  }

  /**
   * Gets the HTTP status code of the response.
   *
   * @return int|null the HTTP status code
   */
  public function GetHttpCode() {
    return $this->httpCode;
  }
}
