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

use ReflectionClass;
use ReflectionException;
use UnexpectedValueException;

/**
 * A collection of utility methods for working with reflection.
 */
class AdsReflectionUtils implements ReflectionUtils {

  /**
   * @see ReflectionUtils::createInstance()
   */
  public function createInstance($className, $args = null) {
    try {
      $reflectionClass = new ReflectionClass($className);
      $args = func_get_args();
      array_shift($args);
      return $reflectionClass->newInstanceArgs($args);
    } catch (ReflectionException $e) {
      throw new UnexpectedValueException(sprintf(
          "Class '%s' was not found: %s",
          $className,
          $e->getMessage()
      ));
    }
  }
}

