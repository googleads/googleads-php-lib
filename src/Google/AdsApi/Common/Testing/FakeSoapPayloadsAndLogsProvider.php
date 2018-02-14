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

namespace Google\AdsApi\Common\Testing;

/**
 * Provides fake SOAP payloads and logs test data.
 */
class FakeSoapPayloadsAndLogsProvider
{

    /**
     * Gets a fake SOAP XML log for an API call to an ads service.
     *
     * @return string
     */
    public static function getFakeSoapXmlLog()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR
            . 'getCreativesByStatement-expected-soapxmllog.txt'
        );
    }

    /**
     * Gets a scrubbed fake SOAP XML log for an API call to an ads service.
     *
     * @return string
     */
    public static function getScrubbedFakeSoapXmlLog()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR
            . 'getCreativesByStatement-scrubbed-soapxmllog.txt'
        );
    }

    /**
     * Gets a fake SOAP request for an API call to an ads service.
     *
     * @return string
     */
    public static function getFakeGetCreativesRequest()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'getCreativesByStatement-request.xml'
        );
    }

    /**
     * Gets fake HTTP headers from the request for an API call to an ads service.
     *
     * @return string
     */
    public static function getFakeGetCreativesRequestHttpHeaders()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR
            . 'getCreativesByStatement-request-httpheaders.txt'
        );
    }

    /**
     * Gets a fake SOAP response for an API call to an ads service.
     *
     * @return string
     */
    public static function getFakeGetCreativesResponse()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'getCreativesByStatement-response.xml'
        );
    }

    /**
     * Gets fake HTTP headers from the response for an API call to an ads service.
     *
     * @return string
     */
    public static function getFakeGetCreativesResponseHttpHeaders()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR
            . 'getCreativesByStatement-response-httpheaders.txt'
        );
    }

    /**
     * Gets a fake SOAP request that has references for an API call to an ads
     * service.
     *
     * @return string
     */
    public static function getFakeGetCreativesRequestWithRefs()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'createAdUnits-refs-request.xml'
        );
    }

    /**
     * Gets a fake SOAP request that has references replaced for an API call to an
     * ads service.
     *
     * @return string
     */
    public static function getFakeGetCreativesRequestWithRefsReplaced()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'createAdUnits-refs-replaced-request.xml'
        );
    }

    /**
     * Gets a fake SOAP XML log for a mutate request.
     *
     * @return string
     */
    public static function getFakeMutateSoapXmlLog()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mutate-expected-soapxmllog.txt'
        );
    }

    /**
     * Gets a scrubbed fake SOAP XML log for a mutate request.
     *
     * @return string
     */
    public static function getScrubbedFakeMutateSoapXmlLog()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mutate-scrubbed-soapxmllog.txt'
        );
    }

    /**
     * Gets a fake SOAP mutate request for an API call.
     *
     * @return string
     */
    public static function getFakeMutateRequest()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mutate-request.xml'
        );
    }

    /**
     * Gets fake HTTP headers from the mutate request.
     *
     * @return string
     */
    public static function getFakeMutateRequestHttpHeaders()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mutate-request-httpheaders.txt'
        );
    }

    /**
     * Gets a fake SOAP response for a mutate request.
     *
     * @return string
     */
    public static function getFakeMutateResponse()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mutate-response.xml'
        );
    }

    /**
     * Gets fake HTTP headers from the response of a mutate request.
     *
     * @return string
     */
    public static function getFakeMutateResponseHttpHeaders()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mutate-response-httpheaders.txt'
        );
    }
}
