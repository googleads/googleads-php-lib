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
namespace Google\AdsApi\Common;

use Exception;

/**
 * Exception for validation errors.
 */
class ValidationException extends Exception {

  private $trigger;

  /**
   * Constructor to create a new validation exception.
   *
   * @param string $trigger the trigger for the validation error
   * @param string $value the value for the trigger
   * @param string $message the message describing the validation error
   */
  public function __construct($trigger, $value, $message) {
    $this->trigger = $trigger;
    parent::__construct(sprintf(
        'Validation failed for [%s] with value [%s]: %s',
        $trigger,
        $value,
        $message
    ));
  }

  /**
   * Gets the trigger for the validation error.
   * @return string the trigger
   */
  public function getTrigger() {
    return $this->trigger;
  }
}

