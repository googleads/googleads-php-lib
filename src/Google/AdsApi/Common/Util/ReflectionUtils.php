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

use ReflectionException;

/**
 * A collection of utility methods for working with reflection.
 */
interface ReflectionUtils {

  /**
   * Creates a new instance of the specified class name.
   *
   * @param string $className the fully qualified class name
   * @param mixed $args,... a variable number of arguments to pass to the class
   *     constructor
   * @return mixed the created object instance
   * @throws ReflectionException if the object instance could not be created
   */
  public function createInstance($className, $args = null);
}

