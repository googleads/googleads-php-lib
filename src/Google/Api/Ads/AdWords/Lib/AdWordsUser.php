<?php
/**
 * User class for the AdWords API to create SOAP clients to the available API
 * services.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage Lib
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal
 * @author     Eric Koleda
 * @author     Vincent Tsao
 * @author     Paul Matthews
 * @see        AdsUser
 */
require_once dirname(__FILE__) . '/../../Common/Lib/AdsUser.php';
require_once dirname(__FILE__) . '/../../Common/Util/ApiPropertiesUtils.php';
require_once dirname(__FILE__) . '/../../Common/Util/DeprecationUtils.php';
require_once dirname(__FILE__) . '/../Util/ReportUtils.php';
require_once 'AdWordsSoapClientFactory.php';
require_once 'AdWordsConstants.php';

/**
 * User class for the AdWords API to create SOAP clients to the available API
 * services.
 * @package GoogleApiAdsAdWords
 * @subpackage Lib
 */
class AdWordsUser extends AdsUser {

  const OAUTH2_SCOPE = 'https://www.googleapis.com/auth/adwords';
  const OAUTH2_HANDLER_CLASS = 'SimpleOAuth2Handler';

  /**
   * The name of the SOAP header that represents the user agent making API
   * calls.
   * @var string
   */
  const USER_AGENT_HEADER_NAME = 'userAgent';

  const DEFAULT_USER_AGENT = 'INSERT_COMPANY_NAME_HERE';

  private $libVersion;
  private $libName;

  private $userAgent;

  /**
   * The AdWordsUser constructor.
   * <p>The AdWordsUser class can be configured in one of two ways:
   * <ol><li>Using an authenitcation INI file</li>
   * <li>Using supplied credentials</li></ol></p>
   * <p>If an authentication INI file is provided and successfully loaded, those
   * values will be used unless a corresponding parameter overwrites it.
   * If the authentication INI file is not provided (e.g. it is <var>NULL</var>)
   * the class will attempt to load the default authentication file at the path
   * of "../auth.ini" relative to this file's directory. Any corresponding
   * parameter, which is not <var>NULL</var>, will, however, overwrite any
   * parameter loaded from the default INI.</p>
   * <p>Likewise, if a custom settings INI file is not provided, the default
   * settings INI file will be loaded from the path of "../settings.ini"
   * relative to this file's directory.</p>
   * @param string $authenticationIniPath the absolute path to the
   *     authentication INI or relative to the current directory (cwd). If
   *     <var>NULL</var>, the default authentication INI file will attempt to be
   *     loaded
   * @param string $developerToken the developer token (required header). Will
   *     overwrite the developer token entry loaded from any INI file
   * @param string $applicationToken the application token (required header).
   *     Will overwrite the application token entry loaded from any INI file
   * @param string $userAgent the user agent name (required header). Will
   *     be prepended with the library name and version. Will overwrite the
   *     userAgent entry loaded from any INI file
   * @param string $clientCustomerId the client customer ID to make the request
   *     against (optional header). Will overwrite the clientCustomerId entry
   *     loaded from any INI file
   * @param string $settingsIniPath the path to the settings INI file. If
   *     <var>NULL</var>, the default settings INI file will be loaded
   * @param array $oauth2Info the OAuth 2.0 information to use for requests
   */
  public function __construct($authenticationIniPath = NULL,
      $developerToken = NULL, $applicationToken = NULL,
      $userAgent = NULL, $clientCustomerId = NULL, $settingsIniPath = NULL,
      $oauth2Info = NULL) {
    parent::__construct();

    $buildIniAw = parse_ini_file(dirname(__FILE__) . '/build.ini',
        FALSE);
    $buildIniCommon = parse_ini_file(dirname(__FILE__) .
        '/../../Common/Lib/build.ini', false);
    $this->libName = $buildIniAw['LIB_NAME'];
    $this->libVersion = $buildIniCommon['LIB_VERSION'];

    $apiProps = ApiPropertiesUtils::ParseApiPropertiesFile(dirname(__FILE__) .
        '/api.properties');
    $versions = explode(',', $apiProps['api.versions']);
    $defaultVersion = $versions[count($versions) - 1];
    $defaultServer = $apiProps['api.server'];

    if (isset($authenticationIniPath)) {
      $authenticationIni =
          parse_ini_file(realpath($authenticationIniPath), TRUE);
    } else {
      $authenticationIni =
          parse_ini_file(dirname(__FILE__) . '/../auth.ini', TRUE);
    }

    $developerToken = $this->GetAuthVarValue($developerToken, 'developerToken',
        $authenticationIni);
    $applicationToken = $this->GetAuthVarValue($applicationToken,
        'applicationToken', $authenticationIni);
    $userAgent = $this->GetAuthVarValue($userAgent,
        self::USER_AGENT_HEADER_NAME, $authenticationIni);
    $clientCustomerId = $this->GetAuthVarValue($clientCustomerId,
        'clientCustomerId', $authenticationIni);
    $oauth2Info = $this->GetAuthVarValue($oauth2Info, 'OAUTH2',
        $authenticationIni);

    $clientId = $this->GetAuthVarValue(NULL, 'clientId', $authenticationIni);
    if ($clientId !== NULL) {
      throw new ValidationException('clientId', $clientId,
          'The authentication key "clientId" has been changed to'
          . ' "clientCustomerId", please use that instead.');
    }

    $this->SetOAuth2Info($oauth2Info);
    $this->SetUserAgent($userAgent);
    $this->SetClientLibraryUserAgent($userAgent);
    $this->SetClientCustomerId($clientCustomerId);
    $this->SetDeveloperToken($developerToken);
    $this->SetApplicationToken($applicationToken);

    if (!isset($settingsIniPath)) {
      $settingsIniPath = dirname(__FILE__) . '/../settings.ini';
    }

    $this->LoadSettings($settingsIniPath,
        $defaultVersion,
        $defaultServer,
        getcwd(), dirname(__FILE__));
  }

  /**
   * Overrides AdsUser::InitLogs(), adding an additional log for report
   * download requests.
   */
  protected function InitLogs() {
    parent::InitLogs();
    Logger::LogToFile(ReportUtils::$LOG_NAME,
        $this->GetLogsDirectory() . "/report_download.log");
    Logger::SetLogLevel(ReportUtils::$LOG_NAME, Logger::$FATAL);
  }

  /**
   * Overrides AdsUser::LogDefaults(), setting an additional log level for
   * report download requests.
   */
  public function LogDefaults() {
    parent::LogDefaults();
    Logger::SetLogLevel(ReportUtils::$LOG_NAME, Logger::$ERROR);
  }

  /**
   * Overrides AdsUser::LogErrors(), setting an additional log level for report
   * download requests.
   */
  public function LogErrors() {
    parent::LogErrors();
    Logger::SetLogLevel(ReportUtils::$LOG_NAME, Logger::$ERROR);
  }

  /**
   * Overrides AdsUser::LogAll(), setting an additional log level for report
   * download requests.
   */
  public function LogAll() {
    parent::LogAll();
    Logger::SetLogLevel(ReportUtils::$LOG_NAME, Logger::$INFO);
  }

  /**
   * Gets the service by its service name and group.
   * @param $serviceName the service name
   * @param string $version the version of the service to get. If
   *     <var>NULL</var>, then the default version will be used
   * @param string $server the server to make the request to. If
   *     <var>NULL</var>, then the default server will be used
   * @param SoapClientFactory $serviceFactory the factory to create the client.
   *     If <var>NULL</var>, then the built-in SOAP client factory will be used
   * @param bool $validateOnly if the service should be created in validateOnly
   *     mode
   * @param bool $partialFailure if the service should be created in
   *     partialFailure mode
   * @return SoapClient the instantiated service
   * @throws ServiceException if an error occurred when getting the service
   */
  public function GetService($serviceName, $version = NULL, $server = NULL,
      SoapClientFactory $serviceFactory = NULL, $validateOnly = NULL,
      $partialFailure = NULL) {
    $this->ValidateUser();
    if (!isset($serviceFactory)) {
      if (!isset($version)) {
        $version = $this->GetDefaultVersion();
      }

      if (!isset($server)) {
        $server = $this->GetDefaultServer();
      }

      $serviceFactory = new AdWordsSoapClientFactory($this, $version, $server,
        $validateOnly, $partialFailure);
    }

    return parent::GetServiceSoapClient($serviceName, $serviceFactory);
  }

  /**
   * Loads the classes within a service, so they can be used before the service
   * is constructed.
   * @param $serviceName the service name
   * @param string $version the version of the service to get. If
   *     <var>NULL</var>, then the default version will be used
   */
  public function LoadService($serviceName, $version = NULL) {
    if (!isset($version)) {
      $version = $this->GetDefaultVersion();
    }
    $serviceFactory = new AdWordsSoapClientFactory($this, $version, NULL, NULL,
        NULL);
    $serviceFactory->DoRequireOnce($serviceName);
  }

  /**
   * Gets the developer token for this user.
   * @return string the developer token
   */
  public function GetDeveloperToken() {
    return $this->GetHeaderValue('developerToken');
  }

  /**
   * Sets the developer token for this user.
   * @param string $developerToken the developer token
   */
  public function SetDeveloperToken($developerToken) {
    $this->SetHeaderValue('developerToken', $developerToken);
  }

  /**
   * Gets the application token that this user.
   * @return string the application token
   */
  public function GetApplicationToken() {
    return $this->GetHeaderValue('applicationToken');
  }

  /**
   * Sets the application token for this user.
   * @param string $applicationToken the application token
   */
  public function SetApplicationToken($applicationToken) {
    $this->SetHeaderValue('applicationToken', $applicationToken);
  }

  /**
   * Gets the client customer ID for this user.
   * @return string the client customer ID for this user
   */
  public function GetClientCustomerId() {
    return $this->GetHeaderValue('clientCustomerId');
  }

  /**
   * Sets the client customer ID for this user.
   * @param string $clientCustomerId the client customer ID for this user
   */
  public function SetClientCustomerId($clientCustomerId) {
    $this->SetHeaderValue('clientCustomerId', $clientCustomerId);
  }

  /**
   * Gets the AdWords Express business ID required for AdWords Express
   * PromotionService
   */
  public function GetExpressBusinessId() {
    return $this->GetHeaderValue('expressBusinessId');
  }

  /**
   * Sets the AdWords Express business ID required for AdWords Express
   * PromotionService
   * @param string AdWords Express business ID
   */
  public function SetExpressBusinessId($businessId) {
    $this->SetHeaderValue('expressBusinessId', $businessId);
  }

  /**
   * Gets the Google My Business page ID used by AdWords Express
   * PromotionService
   */
  public function GetExpressPlusPageId() {
    return $this->GetHeaderValue('pageId');
  }

  /**
   * Sets the Google My Business page ID used by AdWords Express
   * PromotionService
   * @param string Google My Business page ID
   */
  public function SetExpressPlusPageId($pageId) {
    $this->SetHeaderValue('pageId', $pageId);
  }

  /**
   * Gets the raw user agent for this user.
   * @return string The raw user agent.
   */
  public function GetUserAgent() {
    return $this->userAgent;
  }

  /**
   * Sets the raw user agent for this user.
   * @param string $userAgent The raw user agent.
   */
  public function SetUserAgent($userAgent) {
    $this->userAgent = $userAgent;
  }

  /**
   * @see AdsUser::GetUserAgentHeaderName()
   */
  public function GetUserAgentHeaderName() {
    return self::USER_AGENT_HEADER_NAME;
  }

  /**
   * @see AdsUser::GetClientLibraryNameAndVersion()
   */
  public function GetClientLibraryNameAndVersion() {
    return array($this->libName, $this->libVersion);
  }

  /**
   * Validates the user and throws a validation error if there are any errors.
   * @throws ValidationException if there are any validation errors
   */
  public function ValidateUser() {
    if ($this->GetOAuth2Info() !== NULL) {
      parent::ValidateOAuth2Info();
    } else {
      throw new ValidationException('OAuth2Info', NULL,
          'OAuth 2.0 configuration is required.');
    }

    if ($this->GetUserAgent() === NULL
        || trim($this->GetUserAgent()) === ''
        || strpos($this->GetUserAgent(), self::DEFAULT_USER_AGENT) !== false) {
      throw new ValidationException('userAgent', NULL,
          sprintf("The property userAgent is required and cannot be "
              . "NULL, the empty string, or the default [%s]",
              self::DEFAULT_USER_AGENT));
    }

    if ($this->GetDeveloperToken() === NULL) {
      throw new ValidationException('developerToken', NULL,
          'developerToken is required and cannot be NULL.');
    }
  }

  /**
   * Get the default OAuth2 Handler for this user.
   * @param NULL|string $className the name of the oauth2Handler class or NULL
   * @return mixed the configured OAuth2Handler class
   */
  public function GetDefaultOAuth2Handler($className = NULL) {
    $className = !empty($className) ? $className : self::OAUTH2_HANDLER_CLASS;
    return new $className($this->GetAuthServer(), self::OAUTH2_SCOPE);
  }

  /**
   * Handles calls to undefined methods.
   * @param string $name the name of the method being called
   * @param array $arguments the arguments passed to the method
   * @return mixed the result of the correct method call, or nothing if there
   *     is no correct method
   */
  public function __call($name, $arguments) {
    // Handle calls to legacy Get*Service() methods.
    if (preg_match('/^Get(\w+Service)$/i', $name, $matches)) {
      $serviceName = $matches[1];
      array_unshift($arguments, $serviceName);
      return call_user_func_array(array($this, 'GetService'), $arguments);
    }
  }
}

