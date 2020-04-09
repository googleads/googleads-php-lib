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
 * Entry point for accessing an ads API's services.
 */
interface AdsServices
{

    /**
     * Gets the specified ads API service with the specified session.
     *
     * @param AdsSession $session the session to use with the ads API service
     * @param string $class the fully qualified class name of the service
     * @return AdsSoapClient the ads API service
     */
    public function get(AdsSession $session, $class);
}
