<?php
/**
 * Copyright 2018, Google Inc. All Rights Reserved.
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
 * Stores and registers usage of ads utilities.
 */
interface AdsUtilityRegistryInterface
{
    /**
     * Adds a new ads utility to the ads utilities list.
     *
     * @param string $adsUtility the name of ads utility that has been used
     */
    public function addUtility($adsUtility);

    /**
     * Gets all utilities in the registry and clear the registry.
     *
     * @return string[] the list of registered ads utilities
     */
    public function popAllUtilities();
}
