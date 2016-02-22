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

use Google\AdsApi\Common\Util\AdsReflectionUtils;
use Google\AdsApi\Common\Util\ReflectionUtils;

/**
 * Factory for creating SOAP client objects that extend `AdsSoapClient`. For
 * example, the DFP `LineItemService` or the AdWords `CampaignService`.
 * @see AdsSoapClient
 */
final class AdsServicesSoapClientFactory implements AdsSoapClientFactory {

  const DEFAULT_SOAP_CALL_TIMEOUT = 600; // 60 seconds * 10 -> 10 minutes

  private $reflectionUtils;
  private $soapClientLogMessageHandler;
  private $soapCallTimeout;

  /**
   * @param ReflectionUtils|null $reflectionUtils
   * @param SoapClientLogMessageHandler|null $soapClientLogMessageHandler
   * @param int|null $soapCallTimeout the time in seconds to wait for a SOAP
   *     call to connect to the service and respond before timing out
   */
  public function __construct(ReflectionUtils $reflectionUtils = null,
      SoapClientLogMessageHandler $soapClientLogMessageHandler = null,
      $soapCallTimeout = null) {
    $this->reflectionUtils = ($reflectionUtils === null)
        ? new AdsReflectionUtils()
        : $reflectionUtils;
    $this->soapClientLogMessageHandler = ($soapClientLogMessageHandler === null)
        ? new AdsSoapClientLogMessageHandler()
        : $soapClientLogMessageHandler;
    $this->soapCallTimeout = ($soapCallTimeout === null)
        ? self::DEFAULT_SOAP_CALL_TIMEOUT
        : $soapCallTimeout;
  }

  /**
   * @see AdsSoapClientFactory::generateSoapClient()
   */
  public function generateSoapClient(AdsSession $session,
      AdsHeaderHandler $headerHandler,
      AdsServiceDescriptor $serviceDescriptor) {
    $options = array(
        'trace' => true,
        'encoding' => 'utf-8',
        'connection_timeout' => $this->soapCallTimeout,
        'features' => SOAP_SINGLE_ELEMENT_ARRAYS
    );

    $soapSettings = $session->getSoapSettings();
    $options = $this->populateOptions($session, $options, $soapSettings);

    $soapClient = $this->reflectionUtils->createInstance(
        $serviceDescriptor->getServiceClass(), $options);
    $soapClient->setStreamContext($options['stream_context']);
    $soapClient->setLogMessageHandler($this->soapClientLogMessageHandler);
    $soapClient->setAdsSession($session);
    $soapClient->setHeaderHandler($headerHandler);
    $soapClient->setServiceDescriptor($serviceDescriptor);
    $soapClient->setSoapCallTimeout($this->soapCallTimeout);
    $soapClient->__setLocation(
        str_replace(
            sprintf(
                '%s://%s',
                parse_url($soapClient->getWsdlUri(), PHP_URL_SCHEME),
                parse_url($soapClient->getWsdlUri(), PHP_URL_HOST)
            ),
            rtrim($session->getEndpoint(), '/'),
            $soapClient->getWsdlUri()
        )
    );

    return $soapClient;
  }

  private function populateOptions(AdsSession $session, array $options,
      SoapSettings $soapSettings = null) {
    $contextOptions = array();
    if ($soapSettings !== null) {
      // Compression settings.
      if ($soapSettings->getCompressionLevel() !== null) {
        $options['compression'] = SOAP_COMPRESSION_ACCEPT
            | SOAP_COMPRESSION_GZIP
            | $soapSettings->getCompressionLevel();
        // The User-Agent HTTP header must contain the string 'gzip'.
        $options['user_agent'] = 'PHP-SOAP/'. phpversion() . ', gzip';
      }

      // WSDL caching settings.
      if ($soapSettings->getWsdlCacheType() !== null) {
        $options['cache_wsdl'] = $soapSettings->getWsdlCacheType();
      }

      // Proxy settings.
      if ($soapSettings->getProxyHost() !== null) {
        $options['proxy_host'] = $soapSettings->getProxyHost();
      }
      if ($soapSettings->getProxyPort() !== null) {
        $options['proxy_port'] = $soapSettings->getProxyPort();
      }
      if ($soapSettings->getProxyUser() !== null) {
        $options['proxy_login'] = $soapSettings->getProxyUser();
      }
      if ($soapSettings->getProxyPassword() !== null) {
        $options['proxy_password'] = $soapSettings->getProxyPassword();
      }

      // SSL settings.
      if ($soapSettings->getSslVerifyPeer() !== null) {
        $contextOptions['ssl']['verify_peer'] =
            $soapSettings->getSslVerifyPeer();
      }
      if ($soapSettings->getSslVerifyHost() !== null) {
        $contextOptions['ssl']['CN_match'] =
            parse_url($session->getEndpoint(), PHP_URL_HOST);
      }
      if ($soapSettings->getSslCaPath() !== null) {
        $contextOptions['ssl']['capath'] = $soapSettings->getSslCaPath();
      }
      if ($soapSettings->getSslCaFile() !== null) {
        $contextOptions['ssl']['cafile'] = $soapSettings->getSslCaFile();
      }
    }
    $options['stream_context'] = stream_context_create($contextOptions);

    return $options;
  }
}

