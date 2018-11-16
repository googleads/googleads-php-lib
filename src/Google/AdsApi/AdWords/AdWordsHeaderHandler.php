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

namespace Google\AdsApi\AdWords;

use Google\AdsApi\Common\AdsGuzzleProxyHttpHandler;
use Google\AdsApi\Common\AdsHeaderFormatter;
use Google\AdsApi\Common\AdsHeaderHandler;
use Google\AdsApi\Common\AdsServiceDescriptor;
use Google\AdsApi\Common\AdsSession;
use Google\AdsApi\Common\Util\OAuth2TokenRefresher;
use Google\AdsApi\Common\Util\Reflection;
use ReflectionClass;
use SoapHeader;

/**
 * Handles how HTTP and SOAP headers are set for AdWords API requests.
 */
final class AdWordsHeaderHandler implements AdsHeaderHandler
{

    /**
     * @var string the ads product API calls are being made against; used to
     *     format the application name used in the SOAP header
     */
    const PRODUCT_NAME_FOR_SOAP_HEADER = 'Aw';

    /**
     * @var string the namespace suffix of the group and class name of the
     *     default SOAP request header object used by the AdWords API
     */
    const DEFAULT_SOAP_HEADER_CLASS_NAME = 'cm\\SoapHeader';

    private $adsHeaderFormatter;
    private $reflection;
    private $oAuth2TokenRefresher;

    public function __construct()
    {
        $this->adsHeaderFormatter = new AdsHeaderFormatter();
        $this->reflection = new Reflection();
        $this->oAuth2TokenRefresher = new OAuth2TokenRefresher();
    }

    /**
     * @see AdsHeaderHandler::generateHttpHeaders()
     */
    public function generateHttpHeaders(AdsSession $session)
    {
        $httpHandler = new AdsGuzzleProxyHttpHandler($session);
        $httpHeaders = [
            'Authorization' => sprintf(
                'Bearer %s',
                urlencode(
                    $this->oAuth2TokenRefresher->getOrFetchAccessToken(
                        $session->getOAuth2Credential(),
                        $httpHandler
                    )
                )
            )
        ];

        return $httpHeaders;
    }

    /**
     * @see AdsHeaderHandler::generateSoapHeaders()
     */
    public function generateSoapHeaders(
        AdsSession $session,
        AdsServiceDescriptor $serviceDescriptor
    ) {
        $soapRequestHeader = $this->createSoapHeaderObject($serviceDescriptor);
        $soapRequestHeader->setDeveloperToken($session->getDeveloperToken());
        $soapRequestHeader->setUserAgent(
            $this->formatUserAgentForSoapHeader(
                $session->getUserAgent(),
                $session->isIncludeUtilitiesInUserAgent()
            )
        );
        $soapRequestHeader->setClientCustomerId(
            $session->getClientCustomerId()
        );
        $soapRequestHeader->setValidateOnly($session->isValidateOnly());
        $soapRequestHeader->setPartialFailure($session->isPartialFailure());

        return new SoapHeader(
            $serviceDescriptor->getSoapNamespace(),
            self::SOAP_HEADER_NAME,
            $soapRequestHeader
        );
    }

    /**
     * Creates a new instance of the SOAP header object used by the AdWords API.
     */
    private function createSoapHeaderObject(
        AdsServiceDescriptor $serviceDescriptor
    ) {
        // The SOAP header object is in the same base namespace (without the group)
        // as the AdWords service we are generating headers for.
        $reflectionClass =
            new ReflectionClass($serviceDescriptor->getServiceClass());
        $namespaceParts =
            explode('\\', trim($reflectionClass->getNamespaceName(), '\\'));
        // Remove the group.
        array_pop($namespaceParts);
        $soapHeaderClassName = sprintf(
            '%s\\%s',
            implode('\\', $namespaceParts),
            self::DEFAULT_SOAP_HEADER_CLASS_NAME
        );

        return $this->reflection->createInstance($soapHeaderClassName);
    }

    private function formatUserAgentForSoapHeader(
        $userAgent,
        $includeUtilityUsage
    ) {
        return $this->adsHeaderFormatter->formatApplicationNameForSoapHeader(
            $userAgent,
            self::PRODUCT_NAME_FOR_SOAP_HEADER,
            $includeUtilityUsage
        );
    }
}
