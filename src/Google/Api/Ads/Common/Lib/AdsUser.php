<?php
/**
 * User class for all API modules using the Ads API.
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
require_once 'Google/Api/Ads/Common/Util/AdsUtilityRegistry.php';
require_once 'Google/Api/Ads/Common/Util/Logger.php';
require_once 'Google/Api/Ads/Common/Util/SimpleOAuth2Handler.php';
require_once 'Google/Api/Ads/Common/Lib/SoapClientFactory.php';
require_once 'Google/Api/Ads/Common/Lib/ValidationException.php';

/**
 * User class for all API modules using the Ads API.
 * @package GoogleApiAdsCommon
 * @subpackage Lib
 */
abstract class AdsUser {

  private $libVersion;
  private $libName;

  private $requestHeaderElements;
  private $defaultServer;
  private $defaultVersion;
  private $logsDirectory;
  private $soapCompression;
  private $soapCompressionLevel;
  private $wsdlCache;
  private $forceHttpVersion;
  private $forceAddXsiTypes;
  private $oauth2Info;
  private $oauth2Handler;
  private $isIncludeUtilitiesInUserAgent;

  /**
   * Constructor for AdsUser.
   */
  protected function __construct() {
    $this->requestHeaderElements = array();

    $buildIni = parse_ini_file(dirname(__FILE__) . '/../Lib/build.ini', false);
    $this->libVersion = $buildIni['LIB_VERSION'];
    $this->libName = $buildIni['LIB_NAME'];
  }

  /**
   * Gets the authenticaiton value for the <var>$authVar</var> supplied. If
   * the <var>$authVar</var> is set, it is is used. Otherwise, the supplied
   * <var>$authenticationIni</var> is queried for the variable. If none is found
   * <var>null</var> is returned.
   * @param string|null $authVar the default value for the authentication
   *     variable
   * @param string $authVarName the name of the authentication variable
   * @param array $authIni the array of authentication variables from
   *     an INI file
   * @return string the authentication variable value
   */
  protected function GetAuthVarValue($authVar, $authVarName,
      array $authIni) {
    if (isset($authVar)) {
      return $authVar;
    } else {
      if (array_key_exists($authVarName, $authIni)) {
        return $authIni[$authVarName];
      } else {
        return null;
      }
    }
  }

  /**
   * Gets the names of all registered request header elements.
   * @return array the names of the request header elements
   */
  public function GetHeaderNames() {
    return array_keys($this->requestHeaderElements);
  }

  /**
   * Gets the value for a registered request header element.
   * @param string $key the name of the request header element
   * @return string the value of the request header element or null if not found
   */
  public function GetHeaderValue($key) {
    if (array_key_exists($key, $this->requestHeaderElements)) {
      return $this->requestHeaderElements[$key];
    } else {
      return null;
    }
  }

  /**
   * Sets the value for a request header.
   * @param string $key the name of the request header element
   * @param string $value the value for the request header element
   */
  public function SetHeaderValue($key, $value) {
    $this->requestHeaderElements[$key] = $value;
  }

  /**
   * Gets the service by its service name.
   * @param string $serviceName the service name
   * @param SoapClientFactory $serviceFactory the service factory
   * @return SoapClient the instantiated service
   */
  public function GetServiceSoapClient($serviceName,
      SoapClientFactory $serviceFactory) {
    return $serviceFactory->GenerateSoapClient($serviceName);
  }

  /**
   * Initializes the logging mechanism used by services created by this user.
   * HTTP headers and SOAP XML are logged to the soap_xml.log file and all
   * request information is logged to the request_info.log file under the logs
   * directory.
   */
  protected function InitLogs() {
    Logger::LogToFile(Logger::$SOAP_XML_LOG,
        $this->logsDirectory . "/soap_xml.log");
    Logger::LogToFile(Logger::$REQUEST_INFO_LOG,
        $this->logsDirectory . "/request_info.log");
    Logger::SetLogLevel(Logger::$SOAP_XML_LOG, Logger::$FATAL);
    Logger::SetLogLevel(Logger::$REQUEST_INFO_LOG, Logger::$FATAL);
  }

  /**
   * Configures the library to log basic information about all requests and
   * the full SOAP XML request and response only when an error occurs.
   */
  public function LogDefaults() {
    Logger::SetLogLevel(Logger::$SOAP_XML_LOG, Logger::$ERROR);
    Logger::SetLogLevel(Logger::$REQUEST_INFO_LOG, Logger::$INFO);
  }

  /**
   * Configures the library to only log requests that return an error.
   */
  public function LogErrors() {
    Logger::SetLogLevel(Logger::$SOAP_XML_LOG, Logger::$ERROR);
    Logger::SetLogLevel(Logger::$REQUEST_INFO_LOG, Logger::$ERROR);
  }

  /**
   * Configures the library to log all requests.
   */
  public function LogAll() {
    Logger::SetLogLevel(Logger::$SOAP_XML_LOG, Logger::$INFO);
    Logger::SetLogLevel(Logger::$REQUEST_INFO_LOG, Logger::$INFO);
  }

  /**
   * Loads the settings for this client library. If the settings INI file
   * located at <var>$settingsIniPath</var> cannot be loaded, then the
   * parameters passed into this method are used.
   * @param string $settingsIniPath the path to the settings INI file
   * @param string $defaultVersion the default version if the settings INI file
   *     cannot be loaded
   * @param string $defaultServer the default server if the settings INI file
   *     cannot be loaded
   * @param string $defaultLogsDir the default logs directory if the settings
   *     INI file cannot be loaded
   * @param string $logsRelativePathBase the relative path base for the logs
   *     directory
   */
  public function LoadSettings($settingsIniPath, $defaultVersion,
      $defaultServer, $defaultLogsDir, $logsRelativePathBase) {
    // Set no time limit for PHP operations.
    set_time_limit(0);
    ini_set('default_socket_timeout', 480);

    $settingsIni = parse_ini_file($settingsIniPath, true);

    // Logging settings.
    $pathRelative = $this->GetSetting($settingsIni, 'LOGGING',
        'PATH_RELATIVE', false);
    $libLogDirPath = $this->GetSetting($settingsIni, 'LOGGING',
        'LIB_LOG_DIR_PATH', $defaultLogsDir);
    $relativePath = realpath($logsRelativePathBase . '/' . $libLogDirPath);
    // User agent settings.
    $this->isIncludeUtilitiesInUserAgent =
        $this->GetSetting($settingsIni, 'LOGGING',
            'includeUtilitiesInUserAgent', 'true');

    if ($pathRelative && $relativePath) {
      $this->logsDirectory = $relativePath;
    } elseif (!$pathRelative && $libLogDirPath) {
      $this->logsDirectory = $libLogDirPath;
    } else {
      $this->logsDirectory = $defaultLogsDir;
    }
    $this->InitLogs();

    // Server settings.
    $this->defaultVersion = $this->GetSetting($settingsIni, 'SERVER',
        'DEFAULT_VERSION', $defaultVersion);
    $this->defaultServer = $this->GetSetting($settingsIni, 'SERVER',
        'DEFAULT_SERVER', $defaultServer);

    // SOAP settings.
    $this->soapCompression = (bool) $this->GetSetting($settingsIni, 'SOAP',
        'COMPRESSION', true);
    $this->soapCompressionLevel = $this->GetSetting($settingsIni, 'SOAP',
        'COMPRESSION_LEVEL', 1);
    if ($this->soapCompressionLevel < 1 || $this->soapCompressionLevel > 9) {
      $this->soapCompressionLevel = 1;
    }
    $this->wsdlCache = (int) $this->GetSetting($settingsIni, 'SOAP',
        'WSDL_CACHE', WSDL_CACHE_NONE);
    if ($this->wsdlCache < 0 || $this->wsdlCache > 3) {
      $this->wsdlCache = WSDL_CACHE_NONE;
    }
    $forceHttpVersion = $this->GetSetting($settingsIni, 'SOAP',
        'FORCE_HTTP_VERSION');
    $this->forceHttpVersion = $forceHttpVersion === null ? null :
        (float) $forceHttpVersion;
    $forceAddXsiTypes = $this->GetSetting($settingsIni, 'SOAP',
        'FORCE_ADD_XSI_TYPES');
    $this->forceAddXsiTypes = $forceAddXsiTypes === null ? false :
        (bool) $forceAddXsiTypes;

    // Proxy settings.
    $proxyHost = $this->GetSetting($settingsIni, 'PROXY', 'HOST');
    if (isset($proxyHost)) {
      $this->Define('HTTP_PROXY_HOST', $proxyHost);
    }
    $proxyPort = $this->GetSetting($settingsIni, 'PROXY', 'PORT');
    if (isset($proxyPort)) {
      $this->Define('HTTP_PROXY_PORT', (int) $proxyPort);
    }
    $proxyUser = $this->GetSetting($settingsIni, 'PROXY', 'USER');
    if (isset($proxyUser)) {
      $this->Define('HTTP_PROXY_USER', $proxyUser);
    }
    $proxyPassword = $this->GetSetting($settingsIni, 'PROXY', 'PASSWORD');
    if (isset($proxyPassword)) {
      $this->Define('HTTP_PROXY_PASSWORD', $proxyPassword);
    }

    // OAuth2.
    $this->oauth2Handler = $this->GetDefaultOAuth2Handler(
        $this->GetSetting($settingsIni, 'AUTH', 'OAUTH2_HANDLER_CLASS'));

    // SSL settings.
    $sslVerifyPeer = $this->GetSetting($settingsIni, 'SSL', 'VERIFY_PEER');
    if (isset($sslVerifyPeer)) {
      $this->Define('SSL_VERIFY_PEER', $sslVerifyPeer);
    }
    $sslVerifyHost = $this->GetSetting($settingsIni, 'SSL', 'VERIFY_HOST');
    if (isset($sslVerifyHost)) {
      $this->Define('SSL_VERIFY_HOST', (int) $sslVerifyHost);
    }
    $sslCaPath = $this->GetSetting($settingsIni, 'SSL', 'CA_PATH');
    if (isset($sslCaPath)) {
      $this->Define('SSL_CA_PATH', $sslCaPath);
    }
    $sslCaFile = $this->GetSetting($settingsIni, 'SSL', 'CA_FILE');
    if (isset($sslCaFile)) {
      $this->Define('SSL_CA_FILE', $sslCaFile);
    }
  }

  /**
   * Gets the value for a given setting based on the contents of the parsed INI
   * file.
   * @param array $settings the parsed settings INI file
   * @param string $section the name of the section containing the setting
   * @param string $name the name of the setting
   * @param mixed $default the default value of the setting
   * @return string the value of the setting
   */
  private function GetSetting($settings, $section, $name, $default = null) {
    if (!$settings || !array_key_exists($section, $settings)
        || !array_key_exists($name, $settings[$section])
        || $settings[$section][$name] === null
        || $settings[$section][$name] === '') {
      return $default;
    }
    return $settings[$section][$name];
  }

  /**
   * Define a constant if it isn't already defined. If it is defined but the
   * value is different then attempt to redefine it, which will fail and throw
   * the appropriate error.
   * @param string $name the name of the constant
   * @param string $value the value of the constant
   */
  private function Define($name, $value) {
    if (!defined($name) || (constant($name) != $value)) {
      define($name, $value);
    }
  }

  /**
   * Gets the default server.
   * @return string the default server
   */
  public function GetDefaultServer() {
    return $this->defaultServer;
  }

  /**
   * Sets the default server.
   * @param string $defaultServer the default server
   */
  public function SetDefaultServer($defaultServer) {
    $this->defaultServer = $defaultServer;
  }

  /**
   * Gets the default version.
   * @return string the default version
   */
  public function GetDefaultVersion() {
    return $this->defaultVersion;
  }

  /**
   * Sets the default version.
   * @param string $defaultVersion the default version
   */
  public function SetDefaultVersion($defaultVersion) {
    $this->defaultVersion = $defaultVersion;
  }

  /**
   * Gets the logs directory.
   * @return string the logs directory
   */
  public function GetLogsDirectory() {
    return $this->logsDirectory;
  }

  /**
   * Is SOAP compression enabled.
   * @return bool is SOAP compression enabled
   */
  public function IsSoapCompressionEnabled() {
    return $this->soapCompression;
  }

  /**
   * Gets the SOAP compression level.
   * @return int the SOAP compression level
   */
  public function GetSoapCompressionLevel() {
    return $this->soapCompressionLevel;
  }

  /**
   * Gets the type of WSDL caching in use.
   * @return int the type of WSDL caching in use
   */
  public function GetWsdlCacheType() {
    return $this->wsdlCache;
  }

  /**
   * Gets the version of the HTTP protocol to use regardless of PHP version.
   * @return float the HTTP version that should be used
   */
  public function GetForceHttpVersion() {
    return $this->forceHttpVersion;
  }

  /**
   * Gets the setting of whether or not to add XSI types in the SOAP payload.
   * @return bool whether or not to add XSI types in the SOAP payload
   */
  public function GetForceAddXsiTypes() {
    return $this->forceAddXsiTypes;
  }

  /**
   * Gets the OAuth2 info for this user.
   * @return array the OAuth2 info for this user
   */
  public function GetOAuth2Info() {
    return $this->oauth2Info;
  }

  /**
   * Sets the OAuth2 info for this user.
   * @param array $oauth2Info the OAuth2 info for this user
   */
  public function SetOAuth2Info($oauth2Info) {
    $this->oauth2Info = $oauth2Info;
  }

  /**
   * Gets the OAuth2 handler for this user.
   * @return OAuth2Handler the OAuth2 handler for this user
   */
  public function GetOAuth2Handler() {
    return $this->oauth2Handler;
  }

  /**
   * Sets the OAuth2 handler for this user.
   * @param array $oauth2Handler the OAuth2 handler for this user
   */
  public function SetOAuth2Handler($oauth2Handler) {
    $this->oauth2Handler = $oauth2Handler;
  }

  /**
   * @return boolean whether or not names of ads utilities being used will be
   *     included in the user agent
   */
  public function getIsIncludeUtilitiesInUserAgent() {
    return $this->isIncludeUtilitiesInUserAgent;
  }

  /**
   * @param boolean $isIncludeUtilitiesInUserAgent whether ads utilities being
   *     used will be included in the user agent
   */
  public function setIncludeUtilitiesInUserAgent(
      $isIncludeUtilitiesInUserAgent) {
    $this->isIncludeUtilitiesInUserAgent = $isIncludeUtilitiesInUserAgent;
  }

  /**
   * Gets the appropriate user agent header name for the API this client library
   * is targeting.
   * @return string The user agent header name.
   */
  abstract protected function GetUserAgentHeaderName();

  /**
   * Gets the name and version of this client library.
   * @return array An array containing the name and version of this client
   *     library, e.g.: ['DfpApi-PHP', '2.13.0'].
   */
  abstract protected function GetClientLibraryNameAndVersion();

  /**
   * Gets common PHP user agent parts for ads client libraries such as PHP
   * version, operating system, browser, or if compression is being used or not.
   * @return array An array of arrays with each inner array representing a user
   *     agent parts, e.g.: ['PHP', '5.3.2'] or ['PHP', '5.4.0'].
   */
  private function GetCommonClientLibraryUserAgentParts() {
    return array(array($this->libName, $this->libVersion), array('PHP',
        PHP_VERSION));
  }

  /**
   * Gets the user agent string that identifies this library for this user.
   * @return string A user agent string.
   */
  public function GetClientLibraryUserAgent() {
    return $this->GetHeaderValue($this->GetUserAgentHeaderName());
  }

  /**
   * Gets all the user agent parts that identify this client library plus user
   * agent parts from the ads utilities registry.
   * @return array An array of all the user agent parts that identify this
   *     client library where each user agent part has been joined by a '/'
   *     (forward slash).
   */
  private function GetAllClientLibraryUserAgentParts() {
    $clientLibUserAgentParts[] = implode('/',
        $this->GetClientLibraryNameAndVersion());

    foreach ($this->GetCommonClientLibraryUserAgentParts() as $userAgentPart) {
      $clientLibUserAgentParts[] = implode('/', $userAgentPart);
    }

    if ($this->getIsIncludeUtilitiesInUserAgent() === 'true') {
      $adsUtilities = AdsUtilityRegistry::getInstance()->popAllUtilities();
      sort($adsUtilities, SORT_STRING);
      $clientLibUserAgentParts =
          array_merge($clientLibUserAgentParts, $adsUtilities);
    }

    return $clientLibUserAgentParts;
  }

  /**
   * Sets the user agent string that identifies this library for this user.
   *
   * TODO(vtsao): The current contract requires that subclasses call this method
   * in their constructor.
   *
   * @param string $applicationName The application name that will appear in
   *     this header
   */
  public function updateClientLibraryUserAgent($applicationName) {
    $this->SetHeaderValue(
        $this->GetUserAgentHeaderName(),
        sprintf("%s (%s)", $applicationName,
            implode(', ', $this->GetAllClientLibraryUserAgentParts()))
    );
  }

  /**
   * Get the default OAuth2 Handler for this user.
   * @param null|string $className the name of the oauth2Handler class or null
   * @return mixed the configured OAuth2Handler class
   */
  public abstract function GetDefaultOAuth2Handler($className = null);

  /**
   * Validates that the OAuth2 info is complete.
   * @throws ValidationException if there are any validation errors
   */
  protected function ValidateOAuth2Info() {
    $requiredFields = array('client_id', 'client_secret');
    foreach ($requiredFields as $field) {
      if (empty($this->oauth2Info[$field])) {
        throw new ValidationException($field, null,
            sprintf('%s is required.', $field));
      }
    }
    if (empty($this->oauth2Info['access_token'])
        && empty($this->oauth2Info['refresh_token'])) {
      throw new ValidationException('refresh_token', null,
          'Either the refresh_token or the access_token is required.');
    }
  }
}
