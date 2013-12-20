<?php
/**
 * A collection of utility methods for working with reports.
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
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
require_once dirname(__FILE__) . '/../Lib/AdWordsUser.php';
require_once dirname(__FILE__) . '/../../Common/Util/CurlUtils.php';
require_once dirname(__FILE__) . '/../../Common/Util/Logger.php';
require_once dirname(__FILE__) . '/../../Common/Util/XmlUtils.php';

/**
 * A collection of utility methods for working with reports.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class ReportUtils {

  const CLIENT_LOGIN_FORMAT = 'GoogleLogin auth=%s';

  /**
   * The log name to use when logging requests.
   */
  public static $LOG_NAME = 'report_download';

  /**
   * Regular expression used to detect errors messages in a response.
   * @access private
   */
  private static $ERROR_MESSAGE_REGEX =
      '/^!!![^|]*\|\|\|([^|]*)\|\|\|([^?]*)\?\?\?/';

  /**
   * The format of the report download URL, for use with sprintf.
   * @access private
   */
  private static $DOWNLOAD_URL_FORMAT = '%s/api/adwords/reportdownload/%s';

  /**
   * The length of the snippet to read from the request to determine if there
   * was an error.
   * @access private
   */
  private static $SNIPPET_LENGTH = 1024;

  /**
   * The ReportUtils class is not meant to have any instances.
   * @access private
   */
  private function __construct() {}

  /**
   * Downloads a new instance of an existing report definition. If the path
   * parameter is specified it will be downloaded to the file at that path,
   * otherwise it will be downloaded to memory and be returned as a string.
   * @param mixed $reportDefinition the ReportDefinition to download or the id
   *     of a stored report definition
   * @param string $path an optional path of the file to download the report to
   * @param AdWordsUser $user the user that created the ReportDefinition
   * @param array $options the option to use when downloading the report:
   *     {boolean} returnMoneyInMicros: if the money values in the report
   *         should be returned in micros
   *     {string} server: the server to make the request to. If <var>NULL</var>,
   *         then the default server will be used
   *     {string} version: the version to make the request against. If
   *         <var>NULL</var>, then the default version will be used
   * @return mixed if path isn't specified the contents of the report,
   *     otherwise the size in bytes of the downloaded report
   */
  public static function DownloadReport($reportDefinition, $path = NULL,
      AdWordsUser $user, array $options = NULL) {
    $url = self::GetUrl($user, $options);
    $headers = self::GetHeaders($user, $url, $options);
    $params = self::GetParams($reportDefinition);
    return self::DownloadReportFromUrl($url, $headers, $params, $path);
  }

  /**
   * Downloads a report with AWQL. If the path parameter is specified it will be
   * downloaded to the file at that path, otherwise it will be downloaded to
   * memory and be returned as a string.
   * @param string $reportQuery the query to use for the report
   * @param string $path an optional path of the file to download the report to
   * @param AdWordsUser $user the user to retrieve report with
   * @param string $reportFormat: the report format to request
   * @param array $options the option to use when downloading the report:
   *     {string} server: the server to make the request to. If <var>NULL</var>,
   *         then the default server will be used
   *     {string} version: the version to make the request against. If
   *         <var>NULL</var>, then the default version will be used
   * @return mixed if path isn't specified the contents of the report,
   *     otherwise the size in bytes of the downloaded report
   */
  public static function DownloadReportWithAwql($reportQuery, $path = NULL,
      AdWordsUser $user, $reportFormat, array $options = NULL) {
    $url = self::GetUrl($user, $options);
    $headers = self::GetHeaders($user, $url, $options);
    $params = self::GetQueryParams($reportQuery, $reportFormat);
    return self::DownloadReportFromUrl($url, $headers, $params, $path);
  }

  /**
   * Downloads a report using the URL provided.
   * @param string $url the URL to make the request to
   * @param array $headers the headers to use in the request
   * @param array $params the parameters to pass in the request
   * @param string $path the optional path to download the report to
   * @return mixed if path isn't specified the contents of the report,
   *     otherwise the size in bytes of the downloaded report
   */
  private static function DownloadReportFromUrl($url, $headers, $params,
      $path = NULL) {
    /*
     * This method should not be static and instantiation of this class should
     * be allowed so we can "inject" CurlUtils, but would break too many things
     * that rely on this method being static.
     */
    $curlUtils = new CurlUtils();
    $ch = $curlUtils->CreateSession($url);

    $curlUtils->SetOpt($ch, CURLOPT_POST, TRUE);
    $curlUtils->SetOpt($ch, CURLINFO_HEADER_OUT, TRUE);

    $flatHeaders = array();
    foreach($headers as $name => $value) {
      $flatHeaders[] = sprintf('%s: %s', $name, $value);
    }
    $curlUtils->SetOpt($ch, CURLOPT_HTTPHEADER, $flatHeaders);

    if (isset($params)) {
      $curlUtils->SetOpt($ch, CURLOPT_POSTFIELDS, $params);
    }

    if (isset($path)) {
      $file = fopen($path, 'w');
      $curlUtils->SetOpt($ch, CURLOPT_RETURNTRANSFER, FALSE);
      $curlUtils->SetOpt($ch, CURLOPT_FILE, $file);
    }

    $response = $curlUtils->Exec($ch);
    $error = $curlUtils->Error($ch);
    $code = $curlUtils->GetInfo($ch, CURLINFO_HTTP_CODE);
    $downloadSize = $curlUtils->GetInfo($ch, CURLINFO_SIZE_DOWNLOAD);
    $request = $curlUtils->GetInfo($ch, CURLINFO_HEADER_OUT);

    $curlUtils->Close($ch);
    if (isset($file)) {
      fclose($file);
    }

    $exception = null;
    if ($code != 200) {
      // Get the beginning of the response.
      if (isset($path)) {
        $file = fopen($path, 'r');
        $snippet = fread($file, self::$SNIPPET_LENGTH);
        fclose($file);
      } else {
        $snippet = substr($response, 0, self::$SNIPPET_LENGTH);
      }
      // Create exception.
      $error = self::ParseApiErrorXml($snippet);
      if ($error) {
        $errorMessage = "Report download failed. Underlying errors are \n";
        foreach ($error->ApiError as $apiError) {
          $errorMessage .= sprintf("Type = '%s', Trigger = '%s', FieldPath = " .
             "'%s'. ", $apiError->type, $apiError->trigger,
              $apiError->fieldPath);
        }
        $exception = new ReportDownloadException($errorMessage, $code);
      } else if (preg_match(self::$ERROR_MESSAGE_REGEX, $snippet, $matches)) {
        $exception = new ReportDownloadException($matches[2], $code);
      } else if (!empty($error)) {
        $exception = new ReportDownloadException($error);
      } else if (isset($code)) {
        $exception =
            new ReportDownloadException('Report download failed.', $code);
      }
    }

    self::LogRequest($request, $code, $params, $exception);

    if (isset($exception)) {
      throw $exception;
    } else if (isset($path)) {
      return $downloadSize;
    } else {
      return $response;
    }
  }

  /**
   * Tries to parse the error response xml from the AdWords API server as an
   * object. This method is used in parsing all error responses when API
   * version >= v201209, and in other versions when apiMode header is mentioned
   * in the request headers.
   *
   * @param String $responseXml the error response xml
   * @return Object the parsed error object, or null if the response cannot
   * be parsed.
   */
  private static function ParseApiErrorXml($responseXml) {
    $retval = null;
    try {
      $doc = XmlUtils::GetDomFromXml($responseXml);
      $retval = XmlUtils::ConvertDocumentToObject($doc);
      if (!is_array($retval->ApiError)) {
        $retval->ApiError = array($retval->ApiError);
      }
    } catch (Exception $e) {
      // There was a parse exception and hence this response cannot be
      // interpreted as an xml.
    }
    return $retval;
  }

  /**
   * Generates the URL to use for the download request.
   * @param AdWordsUser $user the AdWordsUser to make the request for
   * @param array $options the options configured for the download
   * @return string the download URL
   */
  private static function GetUrl($user, array $options = NULL) {
    $server = !empty($options['server']) ? $options['server'] :
        $user->GetDefaultServer();
    $version = !empty($options['version']) ? $options['version'] : NULL;
    if (!isset($version) && $user->GetDefaultVersion() >= 'v201109') {
      $version = $user->GetDefaultVersion();
    }
    if (isset($server) && strpos($server, 'http') !== 0) {
      throw new ReportDownloadException('Invalid server: ' . $server);
    }
    return sprintf(self::$DOWNLOAD_URL_FORMAT, $server, $version);
  }

  /**
   * Generates the parameters to use for the download request.
   * @param mixed $reportDefinition the report definition, as an ID or object
   * @return array the parameters
   */
  private static function GetParams($reportDefinition) {
    $params = array();
    if (is_numeric($reportDefinition)) {
      $params['__rd'] = $reportDefinition;
    } else if (is_object($reportDefinition) || is_array($reportDefinition)) {
      $document = XmlUtils::ConvertObjectToDocument($reportDefinition,
          'reportDefinition');
      $document->formatOutput = TRUE;
      $params['__rdxml'] = XmlUtils::GetXmlFromDom($document);
    } else {
      throw new ReportDownloadException('Invalid report definition type: '
          . $reportDefinition);
    }
    return $params;
  }

  /**
   * Generates the parameters to use for the download request with AWQL.
   * @param string $reportQuery the report query, as string
   * @param string $reportFormat the format to request report in, as string
   * @return array the parameters
   */
  private static function GetQueryParams($reportQuery, $reportFormat) {
    if (!is_string($reportQuery) or !is_string($reportFormat)) {
      throw new ReportDownloadException(
          'Invalid parameter supplied, string is expected'
      );
    }
    return array('__rdquery' => $reportQuery, '__fmt' => $reportFormat);
  }

  /**
   * Gets the HTTP headers for the report download request.
   * @param AdWordsUser $user the AdWordsUser to get credentials from
   * @param string $url the URL the request will be made to
   * @param array $options the options for the download
   * @return array and array of strings, which are header names and values
   */
  private static function GetHeaders($user, $url, array $options = NULL) {
    $headers = array();
    $version = !empty($options['version']) ? $options['version'] :
        $user->GetDefaultVersion();
    // Authorization.
    $authHeader = NULL;
    $oAuth2Info = $user->GetOAuth2Info();
    $oAuth2Handler = $user->GetOAuth2Handler();
    if (!empty($oAuth2Info)) {
      $oAuth2Info = $oAuth2Handler->GetOrRefreshAccessToken($oAuth2Info);
      $user->SetOAuth2Info($oAuth2Info);
      $authHeader = $oAuth2Handler->FormatCredentialsForHeader($oAuth2Info);
    } else {
      $authHeader = sprintf(self::CLIENT_LOGIN_FORMAT, $user->GetAuthToken());
    }
    $headers['Authorization'] = $authHeader;

    // Developer token.
    $headers['developerToken'] = $user->GetDeveloperToken();
    // Target client.
    $email = $user->GetEmail();
    $clientCustomerId = $user->GetClientCustomerId();
    if (isset($clientCustomerId)) {
      $headers['clientCustomerId'] = $clientCustomerId;
    } else {
      if ($version < 'v201109' && isset($email)) {
        $headers['clientEmail'] = $email;
      } else {
          throw new ReportDownloadException('The client customer ID must be '
          . 'specified for report downloads.');
      }
    }
    // Flags.
    if (isset($options['returnMoneyInMicros'])) {
      $headers['returnMoneyInMicros'] =
          $options['returnMoneyInMicros'] ? 'true' : 'false';
    }
    return $headers;
  }

  /**
   * Logs the report download request.
   * @param string $requestHeaders the HTTP request headers
   * @param integer $responseCode the HTTP response code
   * @param array $params the parameters that were sent, if any
   * @param Exception $exception the exception that will be thrown, if any
   */
  private static function LogRequest($requestHeaders, $responseCode,
      $params = NULL, $exception = NULL) {
    $level = isset($exception) ? Logger::$ERROR : Logger::$INFO;
    $messageParts = array();
    $messageParts[] = trim($requestHeaders);
    $messageParts[] = ''; // Blank line for readability.
    $messageParts[] = "Parameters:";
    foreach ($params as $name => $value) {
      $messageParts[] = sprintf('%s: %s', $name, $value);
    }
    $messageParts[] = ''; // Blank line for readability.
    $messageParts[] = sprintf('Response Code: %s', $responseCode);
    if (isset($exception)) {
      $messageParts[] = sprintf('Error Message: %s', $exception->GetMessage());
    }
    $messageParts[] = ''; // Blank line for readability.
    $message = implode("\n", $messageParts);
    Logger::Log(self::$LOG_NAME, $message, $level);
  }
}

/**
 * Exception class for an error that occurs while downloading a report.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class ReportDownloadException extends Exception {
  /**
   * Constructor for ReportDownloadException.
   * @param string $error an optional error message
   * @param string $httpCode an optional HTTP status code of the response
   */
  public function __construct($error = NULL, $httpCode = NULL) {
    if (empty($error)) {
      $error = 'Report download failed with status code: ' . $httpCode;
    }
    parent::__construct($error, $httpCode);
  }
}

if (!class_exists("ReportDefinition", FALSE)) {
  /**
   * Represents a report definition.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
  class ReportDefinition {
    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var Selector
     */
    public $selector;

    /**
     * @access public
     * @var string
     */
    public $reportName;

    /**
     * @access public
     * @var tnsReportDefinitionReportType
     */
    public $reportType;

    /**
     * @access public
     * @var boolean
     */
    public $hasAttachment;

    /**
     * @access public
     * @var tnsReportDefinitionDateRangeType
     */
    public $dateRangeType;

    /**
     * @access public
     * @var tnsDownloadFormat
     */
    public $downloadFormat;

    /**
     * @access public
     * @var string
     */
    public $creationTime;

    /**
     * @access public
     * @var boolean
     */
    public $includeZeroImpressions;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return "";
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return "ReportDefinition";
    }

    public function __construct($id = NULL, $selector = NULL, $reportName = NULL, $reportType = NULL, $hasAttachment = NULL, $dateRangeType = NULL, $downloadFormat = NULL, $creationTime = NULL, $includeZeroImpressions = NULL) {
      $this->id = $id;
      $this->selector = $selector;
      $this->reportName = $reportName;
      $this->reportType = $reportType;
      $this->hasAttachment = $hasAttachment;
      $this->dateRangeType = $dateRangeType;
      $this->downloadFormat = $downloadFormat;
      $this->creationTime = $creationTime;
      $this->includeZeroImpressions = $includeZeroImpressions;
    }
  }
}

if (!class_exists("Selector", FALSE)) {
  /**
   * A generic selector to specify the type of information to return.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
  class Selector {
    /**
     * @access public
     * @var string[]
     */
    public $fields;

    /**
     * @access public
     * @var Predicate[]
     */
    public $predicates;

    /**
     * @access public
     * @var DateRange
     */
    public $dateRange;

    /**
     * @access public
     * @var OrderBy[]
     */
    public $ordering;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return "";
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return "Selector";
    }

    public function __construct($fields = NULL, $predicates = NULL, $dateRange = NULL, $ordering = NULL, $paging = NULL) {
      $this->fields = $fields;
      $this->predicates = $predicates;
      $this->dateRange = $dateRange;
      $this->ordering = $ordering;
      $this->paging = $paging;
    }
  }
}

if (!class_exists("Predicate", FALSE)) {
  /**
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
  class Predicate {
    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsPredicateOperator
     */
    public $operator;

    /**
     * @access public
     * @var string[]
     */
    public $values;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return "";
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return "Predicate";
    }

    public function __construct($field = NULL, $operator = NULL, $values = NULL) {
      $this->field = $field;
      $this->operator = $operator;
      $this->values = $values;
    }
  }
}

if (!class_exists("PredicateOperator", FALSE)) {
  /**
   * Defines the valid set of operators.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
  class PredicateOperator {
    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return "";
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return "Predicate.Operator";
    }

    public function __construct() {}
  }
}

if (!class_exists("DateRange", FALSE)) {
/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class DateRange {
  /**
   * @access public
   * @var string
   */
  public $min;

  /**
   * @access public
   * @var string
   */
  public $max;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateRange";
  }

  public function __construct($min = NULL, $max = NULL) {
    $this->min = $min;
    $this->max = $max;
  }
}}

if (!class_exists("OrderBy", FALSE)) {
/**
 * Specifies how the resulting information should be sorted.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class OrderBy {
  /**
   * @access public
   * @var string
   */
  public $field;

  /**
   * @access public
   * @var tnsSortOrder
   */
  public $sortOrder;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OrderBy";
  }

  public function __construct($field = NULL, $sortOrder = NULL) {
    $this->field = $field;
    $this->sortOrder = $sortOrder;
  }
}}

if (!class_exists("Paging", FALSE)) {
/**
 * Specifies the page of results to return in the response. A page is specified
 * by the result position to start at and the maximum number of results to
 * return.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class Paging {
  /**
   * @access public
   * @var integer
   */
  public $startIndex;

  /**
   * @access public
   * @var integer
   */
  public $numberResults;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Paging";
  }

  public function __construct($startIndex = NULL, $numberResults = NULL) {
    $this->startIndex = $startIndex;
    $this->numberResults = $numberResults;
  }
}}

if (!class_exists("SortOrder", FALSE)) {
/**
 * Possible orders of sorting.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class SortOrder {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SortOrder";
  }

  public function __construct() {}
}}

if (!class_exists("ReportDefinitionReportType", FALSE)) {
/**
 * Enums for report types.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class ReportDefinitionReportType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReportDefinition.ReportType";
  }

  public function __construct() {}
}}

if (!class_exists("ReportDefinitionDateRangeType", FALSE)) {
/**
 * Enums for date range of report.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class ReportDefinitionDateRangeType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReportDefinition.DateRangeType";
  }

  public function __construct() {}
}}

if (!class_exists("DownloadFormat", FALSE)) {
/**
 * Enum class that describes the supported formats for content downloads.
 * The order mimics the order in which download options are presented in the
 * legacy report center.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class DownloadFormat {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DownloadFormat";
  }

  public function __construct() {
    if(get_parent_class('DownloadFormat')) parent::__construct();
  }
}}

