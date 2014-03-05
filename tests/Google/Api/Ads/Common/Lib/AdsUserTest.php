<?php
/**
 * Copyright 2011, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an 'AS IS' BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Lib/AdsUser.php';

/**
 * Unit tests for {@link AdsUser}.
 * @group small
 */
class AdsUserTest extends PHPUnit_Framework_TestCase {

  const DEFAULT_VERSION = 'v1';
  const DEFAULT_SERVER = 'https://ads.google.com';
  const DEFAULT_LOGS_DIR = '/var/log/default';

  private $logsRelativePathBase;

  protected function setUp() {
    $this->logsRelativePathBase = dirname(__FILE__) . '/../';
  }

  /**
   * Tests loading relative logging settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Logging_Relative() {
    $logDirPath = 'Lib';
    $settings = array(
        'LOGGING' => array(
            'PATH_RELATIVE' => '1',
            'LIB_LOG_DIR_PATH' => $logDirPath,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $expected = realpath($this->logsRelativePathBase . '/' . $logDirPath);
    $this->assertEquals($expected, $user->GetLogsDirectory());
  }

  /**
   * Tests loading relative logging settings with an invalid path.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Logging_Relative_InvalidPath() {
    $logsRelativeBasePath = '/foo/bar';
    $logDirPath = 'logs';
    $settings = array(
        'LOGGING' => array(
            'PATH_RELATIVE' => '1',
            'LIB_LOG_DIR_PATH' => $logDirPath,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR, $logsRelativeBasePath);
    $this->assertEquals(self::DEFAULT_LOGS_DIR, $user->GetLogsDirectory());
  }

  /**
   * Tests loading relative logging settings with a missing path.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Logging_Relative_MissingPath() {
    $settings = array(
        'LOGGING' => array(
            'PATH_RELATIVE' => '1',
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals(self::DEFAULT_LOGS_DIR, $user->GetLogsDirectory());
  }

  /**
   * Tests loading logging settings with relative unspecified.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Logging_Relative_Unspecified() {
    $logDirPath = '/var/log/ads';
    $settings = array(
        'LOGGING' => array(
            'LIB_LOG_DIR_PATH' => $logDirPath,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals($logDirPath, $user->GetLogsDirectory());
  }

  /**
   * Tests loading absolute logging settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Logging_Absolute() {
    $logDirPath = '/var/log/ads';
    $settings = array(
        'LOGGING' => array(
            'PATH_RELATIVE' => '0',
            'LIB_LOG_DIR_PATH' => $logDirPath,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals($logDirPath, $user->GetLogsDirectory());
  }

  /**
   * Tests loading default logging settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Logging_Defaults() {
    $settings = array(
        'LOGGING' => array(),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals(self::DEFAULT_LOGS_DIR, $user->GetLogsDirectory());
  }

  /**
   * Tests loading server settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Server() {
    $defaultVersion = 'v2';
    $defaultServer = 'https://testing.google.com';
    $settings = array(
        'SERVER' => array(
            'DEFAULT_VERSION' => $defaultVersion,
            'DEFAULT_SERVER' => $defaultServer,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals($defaultVersion, $user->GetDefaultVersion());
    $this->assertEquals($defaultServer, $user->GetDefaultServer());
  }

  /**
   * Tests loading default server settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Server_Defaults() {
    $settings = array(
        'SERVER' => array(),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals(self::DEFAULT_VERSION, $user->GetDefaultVersion());
    $this->assertEquals(self::DEFAULT_SERVER, $user->GetDefaultServer());
  }

  /**
   * Tests loading SOAP settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Soap() {
    $compression = FALSE;
    $compressionLevel = '5';
    $wsdlCache = WSDL_CACHE_MEMORY;
    $settings = array(
        'SOAP' => array(
            'COMPRESSION' => $compression,
            'COMPRESSION_LEVEL' => $compressionLevel,
            'WSDL_CACHE' => $wsdlCache,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals($compression, $user->IsSoapCompressionEnabled());
    $this->assertEquals($compressionLevel, $user->GetSoapCompressionLevel());
    $this->assertEquals($wsdlCache, $user->GetWsdlCacheType());
  }

  /**
   * Tests loading SOAP settings with an invalid compression level.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Soap_InvalidCompression() {
    $compressionLevel = '100';
    $settings = array(
        'SOAP' => array(
            'COMPRESSION_LEVEL' => $compressionLevel,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals(1, $user->GetSoapCompressionLevel());
  }

  /**
   * Tests loading SOAP settings with an invalid WSDL cache value.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Soap_InvalidWsdlCache() {
    $wsdlCache = '100';
    $settings = array(
        'SOAP' => array(
            'WSDL_CACHE' => $wsdlCache,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals(WSDL_CACHE_NONE, $user->GetWsdlCacheType());
  }

  /**
   * Tests loading default SOAP settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Soap_Defaults() {
    $settings = array(
        'SOAP' => array(),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals(TRUE, $user->IsSoapCompressionEnabled());
    $this->assertEquals(1, $user->GetSoapCompressionLevel());
    $this->assertEquals(WSDL_CACHE_NONE, $user->GetWsdlCacheType());
  }

  /**
   * Tests loading proxy settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Proxy() {
    $host = 'localhost';
    $port = '4040';
    $proxyUser = 'foo';
    $proxyPassword = 'bar';
    $settings = array(
        'PROXY' => array(
            'HOST' => $host,
            'PORT' => $port,
            'USER' => $proxyUser,
            'PASSWORD' => $proxyPassword,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals($host, HTTP_PROXY_HOST);
    $this->assertEquals($port, HTTP_PROXY_PORT);
    $this->assertEquals($proxyUser, HTTP_PROXY_USER);
    $this->assertEquals($proxyPassword, HTTP_PROXY_PASSWORD);
  }

  /**
   * Tests loading auth settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Auth() {
    $server = 'http://localhost';
    $oAuth2HandlerClass = 'SimpleOAuth2Handler';
    $settings = array(
        'AUTH' => array(
            'AUTH_SERVER' => $server,
            'OAUTH2_HANDLER_CLASS' => $oAuth2HandlerClass,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals($server, $user->GetAuthServer());
    $this->assertEquals($oAuth2HandlerClass,
        get_class($user->GetOAuth2Handler()));
  }

  /**
   * Tests loading default auth settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Auth_Defaults() {
    $settings = array(
        'AUTH' => array(),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals('https://accounts.google.com', $user->GetAuthServer());
    $this->assertEquals('SimpleOAuth2Handler',
        get_class($user->GetOAuth2Handler()));
  }

  /**
   * Tests loading SSL settings.
   * @covers AdsUser::LoadSettings
   */
  public function testLoadSettings_Ssl() {
    $verifyPeer = 1;
    $verifyHost = 1;
    $caPath = '/etc/ssl/certs';
    $caFile = '/etc/ssl/cafile';
    $settings = array(
        'SSL' => array(
            'VERIFY_PEER' => $verifyPeer,
            'VERIFY_HOST' => $verifyHost,
            'CA_PATH' => $caPath,
            'CA_FILE' => $caFile,
        ),
    );
    $settingsFilePath = $this->createTempSettingsFile($settings);
    $user = new TestAdsUser();
    $user->LoadSettings($settingsFilePath, self::DEFAULT_VERSION,
        self::DEFAULT_SERVER, self::DEFAULT_LOGS_DIR,
        $this->logsRelativePathBase);
    $this->assertEquals($verifyPeer, SSL_VERIFY_PEER);
    $this->assertEquals($verifyHost, SSL_VERIFY_HOST);
    $this->assertEquals($caPath, SSL_CA_PATH);
    $this->assertEquals($caFile, SSL_CA_FILE);
  }

  /**
   * Creates a temporary settings file from the array of settings provided.
   * @param array $settings the settings to use
   * @return string the path to the temp file
   */
  private function createTempSettingsFile(array $settings) {
    $filePath = tempnam(sys_get_temp_dir(), 'settings.ini.');
    $file = fopen($filePath, 'w');
    foreach ($settings as $section => $properties) {
      fwrite($file, sprintf("[%s]\n", $section));
      foreach ($properties as $name => $value) {
        if ($value === FALSE) {
          $value = '0';
        }
        fwrite($file, sprintf("%s = '%s'\n", $name, $value));
      }
    }
    fclose($file);
    return $filePath;
  }
}

/**
 * A test class that extends AdsUser.
 */
class TestAdsUser extends AdsUser {

  const USER_AGENT_HEADER_NAME = 'applicationName';

  const LIB_VERSION = '2.13.0';
  const LIB_NAME = "DfpApi-PHP";

  const APPLICATION_NAME = 'GoogleTestPhp';

  const OAUTH2_SCOPE = '';
  const HANDLER_CLASS = 'SimpleOAuth2Handler';

  /**
   * Creates a new instance of this test subclass.
   */
  public function __construct() {
    parent::__construct();
    $this->SetClientLibraryUserAgent(self::APPLICATION_NAME);
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
    return array(self::LIB_NAME, self::LIB_VERSION);
  }

  public function GetDefaultOAuth2Handler($className = NULL) {
    $className = !empty($className) ? $className : self::HANDLER_CLASS;
    return new $className($this->GetAuthServer(), self::OAUTH2_SCOPE);
  }
}

