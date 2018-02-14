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
 * Handles how HTTP and SOAP headers are set for ads API requests.
 */
interface AdsHeaderHandler
{

    /**
     * @var string the name of SOAP header for ads API requests
     */
    const SOAP_HEADER_NAME = 'RequestHeader';

    /**
     * Generates the required HTTP headers for the ads API request.
     *
     * @param AdsSession $session session information to use for the headers
     * @return array the HTTP headers
     */
    public function generateHttpHeaders(AdsSession $session);

    /**
     * Sets the required SOAP headers for the ads API request.
     *
     * @param AdsSession $session session information to use for the headers
     * @param AdsServiceDescriptor $adsServiceDescriptor descriptor for the
     *     ads API service the headers are being generated for
     * @return \SoapHeader the SOAP headers
     * @throws \InvalidArgumentException if an invalid combination of headers are
     *     set
     */
    public function generateSoapHeaders(
        AdsSession $session,
        AdsServiceDescriptor $adsServiceDescriptor
    );
}
