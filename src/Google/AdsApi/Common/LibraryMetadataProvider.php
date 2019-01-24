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
 * Provides information about this library, such as its version and name.
 */
class LibraryMetadataProvider
{

    private $libName;
    private $libVersion;

    public function __construct()
    {
        $buildIni = parse_ini_file(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'build.ini');
        $this->libName = $buildIni['LIB_NAME'];
        $this->libVersion = $buildIni['LIB_VERSION'];
    }

    /**
     * Gets this library's name.
     *
     * @return string this library's name
     */
    public function getLibName()
    {
        return $this->libName;
    }

    /**
     * Gets this library's version.
     *
     * @return string this library's version
     */
    public function getLibVersion()
    {
        return $this->libVersion;
    }
}
