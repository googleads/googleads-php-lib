<?php
/**
 * Exception class for any AuthToken (ClientLogin) error.
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
 * @subpackage Lib
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */

/**
 * Exception class for any AuthToken (ClientLogin) error.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class AuthTokenException extends Exception {

  private $error;
  private $url;
  private $captchaToken;
  private $captchaUrl;

  /**
   * Constructor for AuthTokenException.
   * @param string $error the error that caused the exception
   * @param string $url an optional URL associated with the error
   * @param string $captchaToken an optional CATPCHA token for the error
   * @param string $captchaUrl an optional CAPTCHA URL for the error
   */
  public function __construct($error, $url = NULL, $captchaToken = NULL,
      $captchaUrl = NULL) {
    $this->error = $error;
    $this->url = $url;
    $this->captchaToken = $captchaToken;
    $this->captchaUrl = $captchaUrl;
    parent::__construct('Failed to get authToken. Reason: ' . $error);
  }

  /**
   * Gets the error that caused the exception.
   * @return string the error that caused the exception
   */
  public function GetError() {
    return $this->error;
  }

  /**
   * Gets the URL associated with the error.
   * @return string the URL associated with the error
   */
  public function GetUrl() {
    return $this->url;
  }

  /**
   * Gets the CATPCHA token for the error.
   * @return string the CATPCHA token for the error
   */
  public function GetCaptchaToken() {
    return $this->captchaToken;
  }

  /**
   * Gets the CAPTCHA URL for the error.
   * @return string the CAPTCHA URL for the error
   */
  public function GetCaptchaUrl() {
    return $this->captchaUrl;
  }
}

