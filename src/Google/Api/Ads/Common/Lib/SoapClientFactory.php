<?php
/**
 * Base class for all SOAP client factories of Ads client libraries.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsCommon
 * @subpackage Lib
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/Common/Lib/AdsUser.php';

/**
 * Base class for all SOAP client factories of Ads client libraries.
 * @package GoogleApiAdsCommon
 * @subpackage Lib
 */
abstract class SoapClientFactory {

  /**
   * The minimum PHP version that can properly decode HTTP 1.1 chunked
   * responses. We use 5.4.0 because some versions of 5.3.x work and some do
   * not.
   */
  const MIN_VER_CHUNKED_HTTP11 = '5.4.0';

  private $user;
  private $version;
  private $server;
  private $productName;
  private $headerOverrides;

  private static $SERVER_REGEX = '/^\w*:\/\/[^\/]*/';
  protected static $COMPRESSION_KIND;

  /**
   * The constructor called by any sub-class.
   * @param AdsUser $user the user which the client will use for credentials
   * @param string $version the version to generate clients for
   * @param string $server the server to generate clients for
   * @param string $productName the product name (i.e. adwords)
   */
  protected function __construct(AdsUser $user, $version, $server,
      $productName, $headerOverrides = null) {
    $this->user = $user;
    $this->version = $version;
    $this->server = $server;
    $this->productName = $productName;
    $this->headerOverrides = $headerOverrides;
  }

  /**
   * Initiates a require_once for the service.
   * @param string $serviceName the service to instantiate
   */
  abstract public function DoRequireOnce($serviceName);

  /**
   * Generates a SOAP client for the given service name. Generates a user level
   * error if this instalation of PHP does not have the extension for SOAP
   * installed.
   * @param string $serviceName the name of the service to generate a client for
   * @return AdsSoapClient an instantiated SOAP client
   */
  public function GenerateSoapClient($serviceName) {
    if (extension_loaded('soap')) {
      $this->DoRequireOnce($serviceName);
      $soapClient = $this->GenerateServiceClient($serviceName);
      return $soapClient;
    } else {
      trigger_error('This client library requires the SOAP extension to be'
          . ' activated. See http://php.net/manual/en/soap.installation.php for'
          . ' details.', E_USER_ERROR);
    }
  }

  /**
   * Generates the SOAP service client without the proper headers set yet.
   * @param string $serviceName the service to create a client for
   * @return AdsSoapClient the SOAP service client
   */
  protected function GenerateServiceClient($serviceName) {
    $location = $this->GetServiceLocation($serviceName);
    $wsdl = $location . '?wsdl';
    $options = array(
        'trace' => true,
        'encoding' => 'utf-8',
        'connection_timeout' => 0,
        'features' => SOAP_SINGLE_ELEMENT_ARRAYS);
    $contextOptions = array();

    // Compression settings.
    if ($this->GetAdsUser()->IsSoapCompressionEnabled()) {
      $options['compression'] = SOAP_COMPRESSION_ACCEPT |
          self::GetCompressionKind() |
          $this->GetAdsUser()->GetSoapCompressionLevel();
      // The User-Agent HTTP header must contain the string 'gzip'.
      $options['user_agent'] = 'PHP-SOAP/'. phpversion() . ', gzip';
    }

    // WSDL caching settings.
    $options['cache_wsdl'] = $this->GetAdsUser()->GetWsdlCacheType();

    // Check to see if the default version of the HTTP protocol to use should be
    // overriden depending on the user's environment.
    if ($this->GetAdsUser()->GetForceHttpVersion() !== null) {
      $contextOptions['http']['protocol_version'] =
          $this->GetAdsUser()->GetForceHttpVersion();
    } else if (version_compare(PHP_VERSION, self::MIN_VER_CHUNKED_HTTP11) <
        '<') {
      $contextOptions['http']['protocol_version'] = 1.0;
    }

    // Proxy settings.
    if (defined('HTTP_PROXY_HOST') && HTTP_PROXY_HOST != '') {
      $options['proxy_host'] = HTTP_PROXY_HOST;
    }
    if (defined('HTTP_PROXY_PORT') && HTTP_PROXY_PORT != '') {
      $options['proxy_port'] = HTTP_PROXY_PORT;
    }
    if (defined('HTTP_PROXY_USER') && HTTP_PROXY_USER != '') {
      $options['proxy_login'] = HTTP_PROXY_USER;
    }
    if (defined('HTTP_PROXY_PASSWORD') && HTTP_PROXY_PASSWORD != '') {
      $options['proxy_password'] = HTTP_PROXY_PASSWORD;
    }

    // SSL settings.
    if (defined('SSL_VERIFY_PEER') && SSL_VERIFY_PEER != '') {
      $contextOptions['ssl']['verify_peer'] = SSL_VERIFY_PEER;
    }
    if (defined('SSL_VERIFY_HOST') && SSL_VERIFY_HOST) {
      $contextOptions['ssl']['CN_match'] = parse_url($location, PHP_URL_HOST);
    }
    if (defined('SSL_CA_PATH') && SSL_CA_PATH != '') {
      $contextOptions['ssl']['capath'] = SSL_CA_PATH;
    }
    if (defined('SSL_CA_FILE') && SSL_CA_FILE != '') {
      $contextOptions['ssl']['cafile'] = SSL_CA_FILE;
    }

    $options['stream_context'] = stream_context_create($contextOptions);

    $soapClient = new $serviceName($wsdl, $options, $this->GetAdsUser());
    $soapClient->__setLocation($location);

    // Copy headers from user.
    foreach($this->GetAdsUser()->GetHeaderNames() as $key) {
      $soapClient->SetHeaderValue(
          $key, $this->GetAdsUser()->GetHeaderValue($key));
    }

    // Copy headers from overrides.
    if (isset($this->headerOverrides)) {
      foreach($this->headerOverrides as $key => $value) {
        $soapClient->SetHeaderValue($key, $value);
      }
    }

    return $soapClient;
  }

  /**
   * Gets the end-point location of the service.
   * @param string $serviceName the service to instantiate
   * @return string the end-point location of the service.
   */
  protected function GetServiceLocation($serviceName) {
    $classVars = get_class_vars($serviceName);
    $endpoint = $classVars['endpoint'];
    return preg_replace(SoapClientFactory::$SERVER_REGEX, $this->GetServer(),
        $endpoint);
  }

  /**
   * Gets the user associated with this factory.
   * @return AdsUser the user associated with this factory
   */
  public function GetAdsUser() {
    return $this->user;
  }

  /**
   * Gets the version associated with this factory.
   * @return string the version associated with this factory
   */
  public function GetVersion() {
    return $this->version;
  }

  /**
   * Gets the server associated with this factory.
   * @return string the server associated with this factory
   */
  public function GetServer() {
    return $this->server;
  }

  /**
   * Gets the product name associated with this factory.
   * @return string the product name associated with this factory
   */
  public function GetProductName() {
    return $this->productName;
  }

  /**
   * Get the compression flag
   * @return int Get the compression flag value
   */
  protected static function GetCompressionKind() {
    if (!isset(self::$COMPRESSION_KIND)) {
      if (version_compare(PHP_VERSION, '5.4.0', '>=') 
        && version_compare(PHP_VERSION, '5.4.4', '<')
      ) {
        self::$COMPRESSION_KIND = SOAP_COMPRESSION_DEFLATE;
      } else {
        self::$COMPRESSION_KIND = SOAP_COMPRESSION_GZIP;
      }
    }

    return self::$COMPRESSION_KIND;
  }
}

