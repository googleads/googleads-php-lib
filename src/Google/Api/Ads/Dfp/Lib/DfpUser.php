<?php
/**
 * User class for the DoubleClick for Publishers API to create SOAP clients to
 * the available API services.
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
 * @package    GoogleApiAdsDfp
 * @subpackage Lib
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
require_once 'Google/Api/Ads/Common/Lib/AdsUser.php';
require_once 'Google/Api/Ads/Common/Util/ApiPropertiesUtils.php';
require_once 'Google/Api/Ads/Common/Util/AuthToken.php';
require_once 'Google/Api/Ads/Common/Util/DeprecationUtils.php';
require_once 'Google/Api/Ads/Common/Util/Logger.php';
require_once 'Google/Api/Ads/Dfp/Lib/DfpSoapClientFactory.php';

/**
 * User class for the DoubleClick for Publishers API to create SOAP clients to
 * the available API services.
 * @package GoogleApiAdsDfp
 * @subpackage Lib
 */
class DfpUser extends AdsUser {

  const OAUTH2_SCOPE = 'https://www.google.com/apis/ads/publisher/';
  const OAUTH2_HANDLER_CLASS = 'SimpleOAuth2Handler';
  const FINAL_CLIENT_LOGIN_VERSION = "v201311";

  /**
   * The name of the SOAP header that represents the user agent making API
   * calls.
   * @var string
   */
  const USER_AGENT_HEADER_NAME = 'applicationName';

  const DEFAULT_APPLICATION_NAME = 'INSERT_APPLICATION_NAME_HERE';

  private $libVersion;
  private $libName;

  private $defaultVersion;
  private $defaultServer;

  private $email;
  private $password;
  private $applicationName;

  /**
   * The DfpUser constructor.
   * <p>The DfpUser class can be configured in one of two ways:
   * <ol>
   * <li>Using an authenitcation INI file</li>
   * <li>Using supplied credentials</li>
   * </ol></p>
   * <p>If an authentication INI file is provided and successfully loaded, those
   * values will be used unless a corresponding parameter overwrites it.
   * If the authentication INI file is not provided (e.g. it is <var>NULL</var>)
   * the class will attempt to load the default authentication file at the path
   * of "../auth.ini" relative to this file's directory. Any corresponding
   * parameter, which is not <var>NULL</var> will however, overwrite any
   * parameter loaded from the default INI.</p>
   * <p>Likewise, if a custom settings INI file is not provided, the default
   * settings INI file will be loaded from the path of "../settings.ini"
   * relative to this file's directory.</p>
   * @param string $authenticationIniPath the absolute path to the
   *     authentication INI or relative to the current directory (cwd). If
   *     <var>NULL</var>, the default authentication INI file will attempt to be
   *     loaded
   * @param string $email the email of the user (required header). Will
   *     overwrite the email entry loaded from any INI file
   * @param string $password the password of the user (required header). Will
   *     overwrite the password entry loaded from any INI file
   * @param string $applicationName the application name (required header). Will
   *     be prepended with the library name and version. Will also overwrite the
   *     applicationName entry in any INI file
   * @param string $networkCode the network code the user belongs to
   *     (optional header). Can be left <var>NULL</var> if the user only belongs
   *     to one network. Will overwrite the networkCode entry in any INI
   *     file
   * @param string $settingsIniPath the path to the settings INI file. If
   *     <var>NULL</var>, the default settings INI file will be loaded
   * @param string $authToken the authToken to use for requests
   * @param array $oauth2Info the OAuth 2.0 information to use for requests
   */
  public function __construct($authenticationIniPath = NULL, $email = NULL,
      $password = NULL, $applicationName = NULL, $networkCode = NULL,
      $settingsIniPath = NULL, $authToken = NULL, $oauth2Info = NULL) {
    parent::__construct();

    $buildIniDfp = parse_ini_file(dirname(__FILE__) . '/build.ini',
        false);
    $buildIniCommon = parse_ini_file(dirname(__FILE__) .
        '/../../Common/Lib/build.ini', false);
    $this->libName = $buildIniDfp['LIB_NAME'];
    $this->libVersion = $buildIniCommon['LIB_VERSION'];

    $apiProps = ApiPropertiesUtils::ParseApiPropertiesFile(dirname(__FILE__) .
        '/api.properties');
    $versions = explode(',', $apiProps['api.versions']);
    $this->defaultVersion = $versions[count($versions) - 1];
    $this->defaultServer = $apiProps['api.server'];

    if (isset($authenticationIniPath)) {
      $authenticationIni =
          parse_ini_file(realpath($authenticationIniPath), TRUE);
    } else {
      $authenticationIni =
          parse_ini_file(dirname(__FILE__) . '/../auth.ini', TRUE);
    }

    $email = $this->GetAuthVarValue($email, 'email', $authenticationIni);
    $password = $this->GetAuthVarValue($password, 'password',
        $authenticationIni);
    $applicationName = $this->GetAuthVarValue($applicationName,
        self::USER_AGENT_HEADER_NAME, $authenticationIni);
    $networkCode = $this->GetAuthVarValue($networkCode, 'networkCode',
        $authenticationIni);
    $authToken = $this->GetAuthVarValue($authToken, 'authToken',
        $authenticationIni);
    $oauth2Info = $this->GetAuthVarValue($oauth2Info, 'OAUTH2',
        $authenticationIni);

    $this->SetEmail($email);
    $this->SetPassword($password);
    $this->SetAuthToken($authToken);
    $this->SetOAuth2Info($oauth2Info);
    $this->SetApplicationName($applicationName);
    $this->SetClientLibraryUserAgent($applicationName);
    $this->SetNetworkCode($networkCode);

    if (!isset($settingsIniPath)) {
      $settingsIniPath = dirname(__FILE__) . '/../settings.ini';
    }

    $this->loadSettings($settingsIniPath,
        $this->defaultVersion,
        $this->defaultServer,
        getcwd(), dirname(__FILE__));
  }

  /**
   * Gets the service by its service name.
   * @param $serviceName the service name
   * @param string $version the version of the service to get. If
   *     <var>NULL</var>, then the default version will be used
   * @param string $server the server to make the request to. If
   *     <var>NULL</var>, then the default server will be used
   * @param SoapClientFactory $serviceFactory the factory to create the client.
   *     If <var>NULL</var>, then the built-in SOAP client factory will be used
   * @return SoapClient the instantiated service
   * @throws ServiceException if an error occurred when getting the service
   */
  public function GetService($serviceName, $version = NULL, $server = NULL,
      SoapClientFactory $serviceFactory = NULL) {
    $this->ValidateUser();
    if (!isset($serviceFactory)) {
      if (!isset($version)) {
        $version = $this->GetDefaultVersion();
      }

      if (!isset($server)) {
        $server = $this->GetDefaultServer();
      }

      $serviceFactory = new DfpSoapClientFactory($this, $version, $server);
    }

    DeprecationUtils::CheckUsingClientLoginWithUnsupportedVersion($this,
        self::FINAL_CLIENT_LOGIN_VERSION, $version);

    return parent::GetServiceSoapClient($serviceName, $serviceFactory);
  }

  /**
   * Regenerates the authentication token and sets it for this user.
   * @param string $server The server to retrieve the token from.
   * @return string The newly generated auth token.
   */
  public function RegenerateAuthToken($server = NULL) {
    if (!isset($server)) {
      $server = $this->GetAuthServer();
    }
    $authTokenClient = new AuthToken($this->email, $this->password, 'gam',
        $this->GetClientLibraryUserAgent(), 'GOOGLE', $server);
    $authToken = $authTokenClient->GetAuthToken();
    $this->SetAuthToken($authToken);
    return $authToken;
  }

  /**
   * Gets the authentication token.
   * @return string the auth token
   */
  public function GetAuthToken() {
    $authToken = $this->GetHeaderValue('authToken');
    if (!isset($authToken) && isset($this->email) && isset($this->password)) {
      $authToken = $this->RegenerateAuthToken();
    }
    return $authToken;
  }

  /**
   * Sets the authentication token.
   * @param string $authToken the auth token to set
   */
  public function SetAuthToken($authToken) {
    $this->SetHeaderValue('authToken', $authToken);
  }

  /**
   * Gets the code for the network that this user belongs to.
   * @return string the network code
   */
  public function GetNetworkCode() {
    return $this->GetHeaderValue('networkCode');
  }

  /**
   * Sets the code for the network that this user belongs to.
   * @param string $networkCode the network code
   */
  public function SetNetworkCode($networkCode) {
    $this->SetHeaderValue('networkCode', $networkCode);
  }

  /**
   * Gets the raw application name for this user.
   * @return string The raw application name.
   */
  public function GetApplicationName() {
    return $this->applicationName;
  }

  /**
   * Sets the raw application name for this user.
   * @param string $applicationName The raw application name.
   */
  public function SetApplicationName($applicationName) {
    $this->applicationName = $applicationName;
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
   * Gets the email address of the user login.
   * @return string the user login email
   */
  public function GetEmail() {
    return $this->email;
  }

  /**
   * Sets the email address of the user login.
   * @param string $email the user login email
   */
  public function SetEmail($email) {
    $this->email = $email;
  }

  /**
   * Gets the password for this user.
   * @return string the password for this user
   */
  public function GetPassword() {
    return $this->password;
  }

  /**
   * Sets the password for this user.
   * @param string $password the password for this user
   */
  public function SetPassword($password) {
    $this->password = $password;
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
   * Validates the user and throws a validation error if there are any errors.
   * @throws ValidationException if there are any validation errors
   */
  public function ValidateUser() {
    if ($this->GetOAuth2Info() !== NULL) {
      parent::ValidateOAuth2Info();
    } else if ($this->GetAuthToken() == NULL) {
      if (!isset($this->email)) {
        throw new ValidationException('email', NULL,
            'email is required and cannot be NULL.');
      }

      if (!isset($this->password)) {
        throw new ValidationException('password', NULL,
            'password is required and cannot be NULL.');
      }
      // Generate an authToken.
      $this->RegenerateAuthToken();
    }

    if ($this->GetApplicationName() === NULL
        || trim($this->GetApplicationName()) === ''
        || strpos($this->GetApplicationName(),
            self::DEFAULT_APPLICATION_NAME) !== false) {
      throw new ValidationException('applicationName', NULL,
          sprintf("The property applicationName is required and cannot be "
              . "NULL, the empty string, or the default [%s]",
              self::DEFAULT_APPLICATION_NAME));
    }
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

