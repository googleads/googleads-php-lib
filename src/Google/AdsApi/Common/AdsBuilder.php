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
 * Populates a data object from configuration settings.
 *
 * @see Configuration
 */
interface AdsBuilder
{

    /**
     * @var string the default filename for the configuration file for this
     *     library
     */
    const DEFAULT_CONFIGURATION_FILENAME = 'adsapi_php.ini';

    /**
     * Populates this builder from the specified configuration object.
     *
     * @param Configuration $configuration the configuration
     * @return AdsBuilder this builder populated from the configuration
     */
    public function from(Configuration $configuration);

    /**
     * Creates a new instance of the data object being populated. This method
     * should call defaultOptionals() and validate().
     *
     * @return mixed the data object
     * @throws \InvalidArgumentException if there are any validation errors
     */
    public function build();

    /**
     * Sets all optional fields to their default if they are `null`.
     */
    public function defaultOptionals();

    /**
     * Checks that required fields have been included and all included
     * fields are valid (e.g., URIs are valid).
     *
     * @throws \InvalidArgumentException if there are any validation errors
     */
    public function validate();
}
