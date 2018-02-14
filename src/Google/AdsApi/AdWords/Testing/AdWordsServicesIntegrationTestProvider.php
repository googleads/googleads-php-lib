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

namespace Google\AdsApi\AdWords\Testing;

/**
 * Provides test data for `AdWordsServicesIntegrationTest`.
 *
 * @see Google\AdsApi\AdWords\AdWordsServicesIntegrationTest
 */
class AdWordsServicesIntegrationTestProvider
{

    /**
     * Gets a fake SOAP response to an AdWords API call to get campaigns.
     *
     * @return string
     */
    public static function getFakeGetCampaignsResponse()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR
            . 'get-campaigns-response.xml'
        );
    }

    /**
     * Gets a fake SOAP fault response to an AdWords API call to get campaigns.
     *
     * @return string
     */
    public static function getFakeGetCampaignsSoapFault()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR
            . 'get-campaigns-soapfault.xml'
        );
    }

    /**
     * Gets a fake SOAP response to an AdWords API call to get campaigns with
     * `validateOnly` enabled.
     *
     * @return string
     */
    public static function getFakeGetCampaignsValidateOnlyResponse()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR
            . 'get-campaigns-response-validate-only.xml'
        );
    }
}
