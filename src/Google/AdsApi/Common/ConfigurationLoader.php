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

/**
 * Helps load settings from *.ini files into Configuration objects.
 * @see Configuration
 */
class ConfigurationLoader {

  /**
   * Creates a configuration from a filepath to an *.ini file. If not absolute,
   * will look in the current directory, and then the user's home directory, in
   * that order.
   *
   * @param string $configIniFilePath the filepath to the *.ini file
   * @throws ConfigurationException if there was an error reading the config
   *     file
   */
  public function fromFile($configIniFilePath) {
    if (!realpath($configIniFilePath)) {
      $userInfo = posix_getpwuid(posix_getuid());
      $configIniFilePath = $userInfo['dir']
          . DIRECTORY_SEPARATOR
          . pathinfo($configIniFilePath, PATHINFO_BASENAME);
    }
    if (!file_exists($configIniFilePath)) {
      throw new ConfigurationException($configIniFilePath, 'file not found');
    } else {
      return new Configuration(parse_ini_file($configIniFilePath, true));
    }
  }

  /**
   * Creates a configuration from a string holding the contents of an *.ini
   * file.
   *
   * @param string $iniString the string holding the contents of an *.ini file
   */
  public function fromString($iniString) {
    return new Configuration(parse_ini_string($configIniFilePath, true));
  }
}

