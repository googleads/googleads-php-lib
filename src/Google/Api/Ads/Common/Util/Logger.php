<?php
/**
 * A logger class which registers appenders (any writable handle location
 * which can be fopen'ed) with a unique name for that log
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
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */

/**
 * A logger class which registers appenders (any writable handle location
 * which can be fopen'ed) with a unique name for that log. The library will
 * write all incoming/outgoing SOAP XML to <var>SOAP_XML_LOG</var> and
 * all records of requests to <var>REQUEST_INFO_LOG</var>.
 *
 * Currently, levels are only used as indicators (there is no filtering
 * mechanism as of yet).
 *
 * A list of supported appenders (file handles) can be found here:
 * {@link http://us2.php.net/manual/en/wrappers.php}
 *
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class Logger {

  /**
   * Logs all incomming and outgoing SOAP XML.
   * @var string log for all incomming and outgoing SOAP XML
   */
  public static $SOAP_XML_LOG = 'soap_xml';

  /**
   * Logs all information about requests.
   * @var string log for all information about requests
   */
  public static $REQUEST_INFO_LOG = 'request_info';

  /**
   * Standard out stream for use with the LogToStream method.
   * @see self::LogToStream()
   * @var string stream for stdout
   */
  public static $STD_OUT_STREAM = 'php://stdout';

  /**
   * Standard error stream for use with the LogToStream method.
   * @see self::LogToStream()
   * @var string stream for stderr
   */
  public static $STD_ERR_STREAM = 'php://stderr';

  /**
   * INFO level.
   * @var string the info level
   */
  public static $INFO = 'INFO';

  /**
   * DEBUG level.
   * @var string the debug level
   */
  public static $DEBUG = 'DEBUG';

  /**
   * ERROR level.
   * @var string the error level
   */
  public static $ERROR = 'ERROR';

  /**
   * FATAL level.
   * @var string the fatal level
   */
  public static $FATAL = 'FATAL';

  private static $logToMap = array();
  private static $logLevelMap = array();
  private static $timeFormat = 'M d Y H:i:s.u';

  /**
   * The Logger class is not meant to have any instances.
   * @access private
   */
  private function __construct() {}

  /**
   * Logs the given log to a file at the file path.
   * @param string $log the unique name of the log
   * @param string $filePath the location of the file to append the log to
   */
  public static function LogToFile($log, $filePath) {
    self::LogTo($log, $filePath);
  }

  /**
   * Logs the given log to a stream represented by <var>$phpIoStream</var>. The
   * availble streams are listed here:
   *
   * {@link http://us3.php.net/manual/en/wrappers.php.php}
   *
   * The variables <var>$STD_OUT_STREAM</var> and <var>$STD_ERR_STREAM</var> are
   * provided for your convenience.
   * @param string $log the unique name of the log
   * @param string $phpIoStream the php I/O stream of the form php://*
   * @see self::$STD_OUT_STREAM
   * @see self::$STD_ERR_STREAM
   */
  public static function LogToStream($log, $phpIoStream) {
    self::LogTo($log, $phpIoStream);
  }

  /**
   * Logs the log to a handle location which can be any writable stream.
   * @param string $log the unique name of the log
   * @param string $handleLocation the location of the handle to fopen
   * @access private
   */
  private static function LogTo($log, $handleLocation) {
    if (!array_key_exists($log, self::$logToMap)) {
      self::$logToMap[$log] = array();
    }

    $appenders = self::$logToMap[$log];

    if (array_search($handleLocation, $appenders) === FALSE) {
      array_push($appenders, $handleLocation);
    }

    self::$logToMap[$log] = $appenders;
  }

  /**
   * Sets the logging level for a given log. Only messages at that log level
   * or higher will be written to the log.
   * @param string $log the unique name of the log
   * @param string $level the level to filter for
   */
  public static function SetLogLevel($log, $level) {
    self::$logLevelMap[$log] = $level;
  }

  /**
   * Logs a message to the log at a specific level.
   * @param string $log the unique name of the log
   * @param string $message the message to write
   * @param string $level the level at which to write the message
   */
  public static function Log($log, $message, $level = NULL) {
    if (!isset($level)) {
      $level = self::$INFO;
    }

    self::LogToAllAppenders($log, $message, $level);
  }

  /**
   * Logs the message at a specific level to all appenders for that log.
   * @param string $log the unique name of the log
   * @param string $message the message to write
   * @param string $level the level at which to write the message
   * @access private
   */
  private static function LogToAllAppenders($log, $message, $level) {
    if (array_key_exists($log, self::$logToMap)) {
      $logLevel = array_key_exists($log, self::$logLevelMap) ?
          self::$logLevelMap[$log] : self::$INFO;
      if (self::ShouldLog($logLevel, $level)) {
        $appenders = self::$logToMap[$log];
        self::LogToAppenders($appenders, $message, $level);
      }
    }
  }

  /**
   * Determines if a message of a given level should be written to a log of a
   * given level.
   * @param string $logLevel the level of the log
   * @param string $messageLevel the level of the message
   */
  private static function ShouldLog($logLevel, $messageLevel) {
    $levelPriority =
        array(self::$DEBUG, self::$INFO, self::$ERROR, self::$FATAL);
    return array_search($logLevel, $levelPriority) <=
        array_search($messageLevel, $levelPriority);
  }

  /**
   * Writes the message to all appenders (any writable handle location that
   * can be fopen'ed) at a specific level.
   * @param array $appenders the appenders to write to
   * @param string $message the message to write
   * @param string $level the level at which to write the message
   * @access private
   */
  private static function LogToAppenders(array $appenders, $message, $level) {
    foreach ($appenders as $handle) {
      self::WriteMessage($handle, $message, $level);
    }
  }

  /**
   * Writes a message with the prepended time and level to the handle
   * location. The handle will be opened, written to and then closed.
   * @param string $handleLocation the location of the handle that will be
   *     fopen'ed
   * @param string $message the message to write
   * @param string $level the level of the message
   * @access private
   */
  private static function WriteMessage($handleLocation, $message, $level) {
    $fp = fopen($handleLocation, 'a');
    $line = '[' . date(self::$timeFormat, time()) . ' - ' . $level . '] '
        . $message . "\n";
    fwrite($fp, $line);
    fclose($fp);
  }
}

