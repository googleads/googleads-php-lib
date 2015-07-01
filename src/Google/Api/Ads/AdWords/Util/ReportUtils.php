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
 * @author     Vincent Tsao
 * @author     Thanet Praneenararat
 */
require_once dirname(__FILE__) . '/../Lib/AdWordsUser.php';
require_once dirname(__FILE__) . '/../../Common/Util/CurlUtils.php';
require_once dirname(__FILE__) . '/../../Common/Util/DeprecationUtils.php';
require_once dirname(__FILE__) . '/../../Common/Util/Logger.php';
require_once dirname(__FILE__) . '/../../Common/Util/XmlUtils.php';

/**
 * A collection of utility methods for working with reports.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class ReportUtils {

  const MINIMUM_SKIP_COLUMN_HEADER_VERSION = "v201502";
  const MINIMUM_INCLUDE_ZERO_IMPRESSIONS_HEADER_VERSION = "v201506";

  /**
   * The log name to use when logging requests.
   */
  public static $LOG_NAME = 'report_download';

  /**
   * Regular expression used to detect errors messages in a response.
   */
  private static $ERROR_MESSAGE_REGEX =
      '/^!!![^|]*\|\|\|([^|]*)\|\|\|([^?]*)\?\?\?/';

  /**
   * The format of the report download URL, for use with sprintf.
   */
  private static $DOWNLOAD_URL_FORMAT = '%s/api/adwords/reportdownload/%s';

  /**
   * The length of the snippet to read from the request to determine if there
   * was an error.
   */
  private static $SNIPPET_LENGTH = 1024;

  /**
   * The ReportUtils class is not meant to have any instances.
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
   *     {boolean} skipReportHeader: if report responses should skip the header
   *         row containing the report name and date range
   *     {boolean} skipColumnHeader: if report responses should skip the header
   *         row containing column names
   *     {boolean} skipReportSummary: if report responses should skip the
   *         summary row containing totals
   *     {boolean} includeZeroImpressions: if report responses should include
   *         zero impression rows
   *     {string} server: the server to make the request to. If <var>null</var>,
   *         then the default server will be used
   *     {string} version: the version to make the request against. If
   *         <var>null</var>, then the default version will be used
   * @return mixed if path isn't specified the contents of the report,
   *     otherwise the size in bytes of the downloaded report
   */
  public static function DownloadReport($reportDefinition, $path = null,
      AdWordsUser $user, array $options = null) {
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
   *     {string} server: the server to make the request to. If <var>null</var>,
   *         then the default server will be used
   *     {string} version: the version to make the request against. If
   *         <var>null</var>, then the default version will be used
   * @return mixed if path isn't specified the contents of the report,
   *     otherwise the size in bytes of the downloaded report
   */
  public static function DownloadReportWithAwql($reportQuery, $path = null,
      AdWordsUser $user, $reportFormat, array $options = null) {
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
      $path = null) {
    /*
     * This method should not be static and instantiation of this class should
     * be allowed so we can "inject" CurlUtils, but would break too many things
     * that rely on this method being static.
     */
    $curlUtils = new CurlUtils();
    $ch = $curlUtils->CreateSession($url);

    $curlUtils->SetOpt($ch, CURLOPT_POST, true);
    $curlUtils->SetOpt($ch, CURLINFO_HEADER_OUT, true);

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
      $curlUtils->SetOpt($ch, CURLOPT_RETURNTRANSFER, false);
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
  private static function GetUrl($user, array $options = null) {
    $server = !empty($options['server']) ? $options['server'] :
        $user->GetDefaultServer();
    $version = !empty($options['version']) ? $options['version'] : null;
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
      $document->formatOutput = true;
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
  private static function GetHeaders($user, $url, array $options = null) {
    $headers = array();
    $version = !empty($options['version']) ? $options['version'] :
        $user->GetDefaultVersion();
    // Authorization.
    $authHeader = null;
    $oAuth2Info = $user->GetOAuth2Info();
    $oAuth2Handler = $user->GetOAuth2Handler();
    if (!empty($oAuth2Info)) {
      $oAuth2Info = $oAuth2Handler->GetOrRefreshAccessToken($oAuth2Info);
      $user->SetOAuth2Info($oAuth2Info);
      $authHeader = $oAuth2Handler->FormatCredentialsForHeader($oAuth2Info);
    } else {
      throw new ServiceException('OAuth 2.0 authentication is required.');
    }
    $headers['Authorization'] = $authHeader;

    // Developer token.
    $headers['developerToken'] = $user->GetDeveloperToken();
    // Target client.
    $clientCustomerId = $user->GetClientCustomerId();
    if (isset($clientCustomerId)) {
      $headers['clientCustomerId'] = $clientCustomerId;
    } else {
      throw new ReportDownloadException('The client customer ID must be '
          . 'specified for report downloads.');
    }
    // Flags.
    if (isset($options['skipReportHeader'])) {
      $headers['skipReportHeader'] =
          $options['skipReportHeader'] ? 'true' : 'false';
    }
    if (isset($options['skipColumnHeader'])) {
      DeprecationUtils::CheckUsingReportHeadersWithUnsupportedVersion(
        'skipColumnHeader', self::MINIMUM_SKIP_COLUMN_HEADER_VERSION, $version);
      $headers['skipColumnHeader'] =
          $options['skipColumnHeader'] ? 'true' : 'false';
    }
    if (isset($options['skipReportSummary'])) {
      $headers['skipReportSummary'] =
          $options['skipReportSummary'] ? 'true' : 'false';
    }
    if (isset($options['includeZeroImpressions'])) {
      DeprecationUtils::CheckUsingReportHeadersWithUnsupportedVersion(
        'includeZeroImpressions',
        self::MINIMUM_INCLUDE_ZERO_IMPRESSIONS_HEADER_VERSION, $version);
      $headers['includeZeroImpressions'] =
          $options['includeZeroImpressions'] ? 'true' : 'false';
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
      $params = null, $exception = null) {
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
  public function __construct($error = null, $httpCode = null) {
    if (empty($error)) {
      $error = 'Report download failed with status code: ' . $httpCode;
    }
    parent::__construct($error, $httpCode);
  }
}

if (!class_exists("ReportDefinition", false)) {
  /**
   * Represents a report definition.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
  class ReportDefinition {
    /**
       * @var integer
     */
    public $id;

    /**
       * @var Selector
     */
    public $selector;

    /**
       * @var string
     */
    public $reportName;

    /**
       * @var tnsReportDefinitionReportType
     */
    public $reportType;

    /**
       * @var boolean
     */
    public $hasAttachment;

    /**
       * @var tnsReportDefinitionDateRangeType
     */
    public $dateRangeType;

    /**
       * @var tnsDownloadFormat
     */
    public $downloadFormat;

    /**
       * @var string
     */
    public $creationTime;

    /**
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

    public function __construct($id = null, $selector = null, $reportName = null, $reportType = null, $hasAttachment = null, $dateRangeType = null, $downloadFormat = null, $creationTime = null, $includeZeroImpressions = null) {
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

if (!class_exists("Selector", false)) {
  /**
   * A generic selector to specify the type of information to return.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
  class Selector {
    /**
       * @var string[]
     */
    public $fields;

    /**
       * @var Predicate[]
     */
    public $predicates;

    /**
       * @var DateRange
     */
    public $dateRange;

    /**
       * @var OrderBy[]
     */
    public $ordering;

    /**
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

    public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null) {
      $this->fields = $fields;
      $this->predicates = $predicates;
      $this->dateRange = $dateRange;
      $this->ordering = $ordering;
      $this->paging = $paging;
    }
  }
}

if (!class_exists("Predicate", false)) {
  /**
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
  class Predicate {
    /**
     * @var string
     */
    public $field;

    /**
     * @var tnsPredicateOperator
     */
    public $operator;

    /**
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

    public function __construct($field = null, $operator = null, $values = null) {
      $this->field = $field;
      $this->operator = $operator;
      $this->values = $values;
    }
  }
}

if (!class_exists("PredicateOperator", false)) {
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

if (!class_exists("DateRange", false)) {
/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class DateRange {
  /**
   * @var string
   */
  public $min;

  /**
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

  public function __construct($min = null, $max = null) {
    $this->min = $min;
    $this->max = $max;
  }
}}

if (!class_exists("OrderBy", false)) {
/**
 * Specifies how the resulting information should be sorted.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class OrderBy {
  /**
   * @var string
   */
  public $field;

  /**
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

  public function __construct($field = null, $sortOrder = null) {
    $this->field = $field;
    $this->sortOrder = $sortOrder;
  }
}}

if (!class_exists("Paging", false)) {
/**
 * Specifies the page of results to return in the response. A page is specified
 * by the result position to start at and the maximum number of results to
 * return.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class Paging {
  /**
   * @var integer
   */
  public $startIndex;

  /**
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

  public function __construct($startIndex = null, $numberResults = null) {
    $this->startIndex = $startIndex;
    $this->numberResults = $numberResults;
  }
}}

if (!class_exists("SortOrder", false)) {
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

if (!class_exists("ReportDefinitionReportType", false)) {
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

if (!class_exists("ReportDefinitionDateRangeType", false)) {
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

if (!class_exists("DownloadFormat", false)) {
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

